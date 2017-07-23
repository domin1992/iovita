<?php

use Illuminate\Foundation\Inspiring;
use App\Libraries\Installer;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('post-install', function(){
    Installer::postInstall();
})->describe('Creates nessesary directories after install project');
