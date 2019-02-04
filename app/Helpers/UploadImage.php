<?php
namespace App\Helpers;
use Cloudder;


class UploadImage {
    public static function handle ($image, $folder) {
        Cloudder::upload($image, null,  ['use_filename' => true, 'folder' => $folder]);
        $c=Cloudder::getResult();
        if($c){
            return $c['url'];
        }
    }
    }
?>
