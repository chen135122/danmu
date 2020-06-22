<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function init()
    {
//        dd(1);
        $fileName = scandir(public_path('file'));
        $files = [];
        foreach ($fileName as $value) {
            if (($value != '.')&&($value != '..')) {
                preg_match('/.+\.(swf|avi|flv|mpg|rm|mov|wav|asf|3gp|mkv|rmvb|mp4)/i',$value,$arr);
//                var_dump($arr);
                if(isset($arr[0])){
                    $files[] = array(
                        'path' => 'file/'.$value,
                        'name' => $value
                    );
                }
            }
        }
        Video::query()->insert($files);
    }

    public function index()
    {
        $videos = Video::query()->get();

        return view('table.index', ['files' => $videos]);
    }

    public function show($id)
    {
        $video = Video::query()->find($id);

//        dd($video);
        return view('table.play', ['video' => $video]);
    }
}
