<?php

namespace App\Libraries;

use File;

class Installer{
    public static function postInstall(){
        File::makeDirectory(storage_path('app/media'));
    }
}