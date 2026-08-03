<?php

namespace App\Enums;

enum CreateSection: string
{
    case Main = 'main';
    case Details = 'details';
    case Relations = 'relations';
    case Address = 'address';
    case Custom = 'custom';

    public function title(): string
    {
        return match ($this) {
            self::Main => 'Informações principais',
            self::Details => 'Detalhes',
            self::Relations => 'Relacionamentos',
            self::Address => 'Endereço',
            self::Custom => 'Configurações adicionais',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::Main => 'Campos essenciais para o novo cadastro.',
            self::Details => 'Informações adicionais sobre este registro.',
            self::Relations => 'Associe este registro a outros cadastros relacionados.',
            self::Address => 'Endereço completo deste cadastro.',
            self::Custom => 'Opções complementares e configurações avançadas.',
        };
    }

    public function icon(): string
    {
        return match ($this) {
            self::Main => 'la la-info-circle',
            self::Details => 'la la-align-left',
            self::Relations => 'la la-link',
            self::Address => 'la la-map-marker',
            self::Custom => 'la la-cog',
        };
    }

    public function order(): int
    {
        return match ($this) {
            self::Main => 10,
            self::Details => 20,
            self::Relations => 30,
            self::Address => 40,
            self::Custom => 50,
        };
    }

    public static function default(): self
    {
        return self::Main;
    }

    public static function values(): array
    {
        return array_map(
            fn (self $section) => $section->value,
            self::cases()
        );
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $section) => [
                $section->value => [
                    'title' => $section->title(),
                    'description' => $section->description(),
                    'icon' => $section->icon(),
                    'order' => $section->order(),
                ],
            ])
            ->toArray();
    }

    public static function fromField(?string $section): self
    {
        if (! $section) {
            return self::default();
        }

        return self::tryFrom($section) ?? self::default();
    }
}
