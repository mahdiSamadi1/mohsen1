<?php

namespace App\Services\MediaLibrary;


use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class CustomPathGenerator implements PathGenerator{
    public function getPath(Media $media): string
    {
        return 'uploads/medias/'.$media->id.'/';
    }

    /*
     * Get the path for conversions of the given media, relative to the root storage path.
     */
    public function getPathForConversions(Media $media): string
    {
        return 'uploads/medias/'.$media->id.'/conversions';
    }

    /*
     * Get the path for responsive images of the given media, relative to the root storage path.
     */
    public function getPathForResponsiveImages(Media $media): string
    {
        return 'uploads/medias/'.$media->id.'/responsive-images';

    }
}

