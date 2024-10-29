<?php

namespace App\services;

class ImageService
{
    /**
     * Generate a random image URL.
     *
     * @return string
     */
    public static function generateRandomImageUrl(): string
    {
        // Generate random number for the image
        $randomNumber = rand(1, 10000);
        // Return the image URL with the random number
        return 'https://picsum.photos/800/600?random=' . $randomNumber;
    }
}
