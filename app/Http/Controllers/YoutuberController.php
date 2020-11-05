<?php

namespace App\Http\Controllers;

use App\Models\youtuber;
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
        return view('youtuber.creat');
    }
    function edit($id)
    {
        $youtuber_id=$id;
        if ($id<10)
        {
            $y_name="jason";   // $channel_name = "wacky";
            $y_years=20;   // $channel_guys = 5;
            $y_country="Taiwan"; // $channel_views = 100;
        } else {
            $y_name = "Null";   // $channel_name = "wacky";
            $y_years = "Null";   // $channel_guys = 5;
            $y_country = "Null";
        }
        $data=compact('youtuber_id','y_name','y_years','y_country');
        return view('youtuber.edit',$data);
    }
    function show($id)
    {
        //$channel_name="";$chanel_guys="";$channel_views="";
        $get=youtuber::find($id);
        if ($get == null)
            return "NULL";
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
