<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Spatie\MediaLibrary\HasMedia;

class ImageMediaService
{
    public function sync(
        HasMedia $model,
        string $collection,
        ?UploadedFile $image,
        bool $remove = false
    ): void {
        if ($image) {
            $model
                ->addMedia($image)
                ->usingName(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME))
                ->toMediaCollection($collection);

            return;
        }

        if ($remove) {
            $model->clearMediaCollection($collection);
        }
    }
}
