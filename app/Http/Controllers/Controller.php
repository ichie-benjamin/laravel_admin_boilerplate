<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Intervention\Image\Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function resizeImage($file, $path)
    {
        $resize = Image::make($file)->resize(400, 300, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        $resize->save($path);

    }
}
