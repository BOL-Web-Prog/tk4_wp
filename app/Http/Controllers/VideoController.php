<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Response;

class VideoController extends Controller
{
    function uploadVideo(Request $request){
        $this->validate($request,[
            'video_title' => 'required|string|max:255',
            'video_filename' => 'required|file|mimetypes:video/mp4'
        ]);

        

        if ($request->hasFile('video_filename'))
            {
                $path = $request->file('video_filename')->store('videos', ['disk' =>'my_files']);

                $video = new Video([
                    'video_title'=>$request->video_title,
                    'video_filename'=>$path
                ]);
                $video->save();
                
            }
            return redirect()->intended('/');
    }

    function index(){
        return view('videos');
    }

    public function show()
    {   
        $video  = Video::all();
 
        return Response::json($video);
    }
}
