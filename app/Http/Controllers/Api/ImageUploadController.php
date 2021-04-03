<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ImageUploadController extends Controller
{
    public function saveImg(Request $request) {
        $id = date('mdYHis') . uniqid();
        $this->validate($request, ['file_path'=>'required','phone'=>'required', 'path'=>'required']);

        $folder = 'images/users/'.$request->phone.'/'.$request->path.'/';

        $file = $request->file('file_path');
        if ($request->hasFile('file_path')) {
            $mainFileName = $id . '.' . $file->getClientOriginalExtension();
            if (!file_exists(public_path($folder))) {
                mkdir(public_path($folder), 0755, true);
            }
            $mainImage = Image::make($request->file('file_path'))
                ->resize(400, 300, function ($constraint) {
                    $constraint->aspectRatio();
//                    $constraint->upsize();
                })
                ->save(public_path($folder) . $mainFileName);
            $imageUrl = '/' . $folder . $mainFileName;
            return response()->json([
                'status' => 'success',
                'image' => $imageUrl
            ]);
        }
        return response()->json([
            'status' => 'error',
            'image' => 'pick a file'
        ]);
    }

    public function authSaveImg(Request $request) {
        $id = date('mdYHis') . uniqid();
        $this->validate($request, ['file_path'=>'required', 'path'=>'required']);
        $height = (int)$request['height'] ?? 300;  $width = (int)$request['width'] ?? 400;

        $folder = 'images/users/'.auth('api')->id().'/'.$request->path.'/';
        $file = $request->file('file_path');
        if ($request->hasFile('file_path')) {
            $mainFileName = $id . '.' . $file->getClientOriginalExtension();
            if (!file_exists(public_path($folder))) {
                mkdir(public_path($folder), 0755, true);
            }
            $mainImage = Image::make($request->file('file_path'))
                ->resize($width, $height, function ($constraint) {
//                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save(public_path($folder) . $mainFileName);
            $imageUrl = '/' . $folder . $mainFileName;
            return response()->json([
                'status' => 'success',
                'img' =>  env('APP_URL').$imageUrl,
                'image' =>  $imageUrl
            ]);
        }
        return response()->json([
            'status' => 'error',
            'image' => 'pick a file'
        ]);
    }

    public function uploadFood(Request $request){
        $this->validate($request, [
            'file_path'=>'required'
        ]);
        $file_original_path = (object) ['file_path' => ""];
        if ($request->hasFile('file_path')) {
            $original_filename = $request->file('file_path')->getClientOriginalName();
            $original_filename_arr = explode('.', $original_filename);
            $file_ext = end($original_filename_arr);
            $destination_path = public_path('images/foods/');
            if (!file_exists($destination_path)) {
                mkdir($destination_path, 0777, true);
            }
            $file_path_name = time() . '.' . $file_ext;

            if ($request->file('file_path')->move($destination_path, $file_path_name )) {
                $uploadPath = 'images/foods/'.$file_path_name ;
                auth('api')->user()->avatar = $uploadPath;
                auth('api')->user()->save();
                return response() -> json(['path'=>$uploadPath, 'message' => 'File has been Successfully Uploaded'], 201);
            } else {
                return response() -> json('Cannot upload file');
            }}
    }
}
