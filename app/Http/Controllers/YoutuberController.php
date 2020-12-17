<?php

namespace App\Http\Controllers;


use App\Models\youtuber;
use Carbon\Carbon;
use Illuminate\Http\Request;

class YoutuberController extends Controller
{
    function index()
    {
        $youtuber = youtuber::all();
        return view('youtuber.index',['youtuber'=>$youtuber]);
    }
    function creat()
    {
        $get=youtuber::create(['yt_name' => '阿鋪',
            'c_id'=>10,
            'year'=>20,
            'education'=>'龍華',
            'country'=>'台灣',
            'created_at'=>Carbon::now(),
            'update_at'=>Carbon::now()]);
        return view('youtuber.creat',$get->toArray());
    }

    function edit($id)
    {
        $get=youtuber::findorfail($id);
        $youtuber = $get->toArray();
        //$channel_id=$id;


        return view('youtuber.edit',$youtuber);
    }
    function show($id)
    {
        //$channel_name="";$chanel_guys="";$channel_views="";
        $get=youtuber::findorfail($id);

        $g_youtuber = $get->toArray();
       /* if ($id<10)
        {
            $y_name = "Jason";
            $y_years = 20;
            $y_country = "Taiwan";
        } else{
            $y_name = "Null";
            $y_years = "Null";
            $y_country = "Null";
        }
        return view('youtuber.show')->with(["y_name"=>$y_name,
                                                  "y_years"=>$y_years,
                                                    "y_country"=>$y_country,
                                                     "youtuber_id"=>$id]);//->with("channel_id",$id)*/
        return view('youtuber.show',$g_youtuber)->with(["youtuber_id"=>$id]);
    }
}
