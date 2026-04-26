<?php

namespace App\Support;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class CustomPathGenerator implements PathGenerator
{
    public function getPath(Media $media): string
    {
        $project = config('app.project_slug', 'starter');
        $modelType = class_basename($media->model_type);
        $collection = $media->collection_name ?: 'default';
        $modelId = $media->model_id;

        return "{$project}/{$modelType}/{$collection}/{$modelId}/";
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media).'conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media).'responsive/';
    }
}
