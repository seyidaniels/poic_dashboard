<?php
namespace App\Helpers;

use Cloudder;

use Exception;


class UploadImage
{
    public static function handle($image, $folder)
    {
        try {
            Cloudder::upload($image, null,  ['use_filename' => true, 'folder' => $folder]);
            $c = Cloudder::getResult();
            if ($c) {
                return $c['url'];
            }
        } catch (\Exception $e) {
            throw new Exception("Ooops! Check your Internet settings", 422);
        }
    }
}