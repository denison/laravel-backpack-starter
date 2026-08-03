<?php

namespace App\Models;

use App\Observers\TenantObserver;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

#[ObservedBy([TenantObserver::class])]
class Tenant extends Model implements HasMedia
{
    use CrudTrait, HasFactory, InteractsWithMedia, LogsActivity, SoftDeletes;

    protected $fillable = [
        'name',
        'document_type',
        'document',
        'contact_name',
        'email',
        'phone',
        'whatsapp',
        'postal_code',
        'street',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'country_code',
        'active',
    ];

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('tenants')
            ->logFillable()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp'])
            ->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->keepOriginalImageFormat()
            ->fit(Fit::Contain, 240, 160)
            ->nonQueued();
    }

    public function logoUrl(): ?string
    {
        return $this->getFirstMediaUrl('logo', 'thumb') ?: null;
    }

    protected function formattedDocument(): Attribute
    {
        return Attribute::get(function (): string {
            if ($this->document_type === 'cpf') {
                return preg_replace('/^(\d{3})(\d{3})(\d{3})(\d{2})$/', '$1.$2.$3-$4', $this->document);
            }

            return preg_replace('/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/', '$1.$2.$3/$4-$5', $this->document);
        });
    }

    protected function formattedPhone(): Attribute
    {
        return Attribute::get(fn (): ?string => $this->formatPhone($this->phone));
    }

    protected function formattedWhatsapp(): Attribute
    {
        return Attribute::get(fn (): ?string => $this->formatPhone($this->whatsapp));
    }

    private function formatPhone(?string $phone): ?string
    {
        if (! $phone) {
            return null;
        }

        if (strlen($phone) === 11) {
            return preg_replace('/^(\d{2})(\d{5})(\d{4})$/', '($1) $2-$3', $phone);
        }

        return preg_replace('/^(\d{2})(\d{4})(\d{4})$/', '($1) $2-$3', $phone);
    }
}
