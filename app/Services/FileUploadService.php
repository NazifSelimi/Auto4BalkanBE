<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

/**
 * Class FileUploadService
 *
 * Handles file and image uploads, deletions, and resizing.
 *
 * @package App\Services
 */
class FileUploadService
{
    /**
     * Upload and optimize image
     */
    public function uploadImage(UploadedFile $file, string $directory = 'uploads', array $sizes = []): string
    {
        $filename = $this->generateUniqueFilename($file);
        $path = $directory . '/' . $filename;

        // Store original image
        $fullPath = Storage::disk('public')->putFileAs($directory, $file, $filename);

        // Create optimized versions if sizes are specified
        if (!empty($sizes)) {
            $this->createImageSizes($file, $directory, $filename, $sizes);
        }

        return $fullPath;
    }

    /**
     * Upload multiple images
     */
    public function uploadMultipleImages(array $files, string $directory = 'uploads'): array
    {
        $uploadedPaths = [];

        foreach ($files as $file) {
            if ($file instanceof UploadedFile) {
                $uploadedPaths[] = $this->uploadImage($file, $directory);
            }
        }

        return $uploadedPaths;
    }

    /**
     * Delete file from storage
     */
    public function deleteFile(string $path): bool
    {
        return Storage::disk('public')->delete($path);
    }

    /**
     * Delete multiple files
     */
    public function deleteMultipleFiles(array $paths): bool
    {
        return Storage::disk('public')->delete($paths);
    }

    /**
     * Generate unique filename
     */
    private function generateUniqueFilename(UploadedFile $file): string
    {
        $extension = $file->getClientOriginalExtension();
        $name = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
        $timestamp = now()->timestamp;
        $random = Str::random(8);

        return "{$name}_{$timestamp}_{$random}.{$extension}";
    }

    /**
     * Create different image sizes
     */
    private function createImageSizes(UploadedFile $file, string $directory, string $filename, array $sizes): void
    {
        $image = Image::make($file);

        foreach ($sizes as $sizeName => $dimensions) {
            $resizedImage = clone $image;
            $resizedImage->fit($dimensions['width'], $dimensions['height']);
            
            $sizeFilename = $this->getSizeFilename($filename, $sizeName);
            $sizePath = storage_path('app/public/' . $directory . '/' . $sizeFilename);
            
            $resizedImage->save($sizePath, 85); // 85% quality
        }
    }

    /**
     * Get filename for specific size
     */
    private function getSizeFilename(string $originalFilename, string $sizeName): string
    {
        $pathInfo = pathinfo($originalFilename);
        return $pathInfo['filename'] . '_' . $sizeName . '.' . $pathInfo['extension'];
    }

    /**
     * Get file URL
     */
    public function getFileUrl(string $path): string
    {
        return Storage::disk('public')->url($path);
    }

    /**
     * Check if file exists
     */
    public function fileExists(string $path): bool
    {
        return Storage::disk('public')->exists($path);
    }
}
