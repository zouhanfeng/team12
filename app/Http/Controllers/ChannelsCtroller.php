<?php

namespace App\Http\Controllers;

use App\Models\channel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChannelsCtroller extends Controller
{
    //
    function index()
    {
        $channel = channel::all();

        return view('channels.index',['channel'=>$channel]);
    }
    function creat()
    {
        $get=channel::create(['c_name' => '831',
                        'category'=>'娛樂類',
                        'fans'=>987,
                        'views'=>500,
                        'created_at'=>Carbon::now(),
                        'update_at'=>Carbon::now()]);
        return view('channels.creat',$get->toArray());
    }

    function edit($id)
    {
        $get=channel::find($id);
        $data['channel_id']=$id;

        if ($id<10)
        {
            $data['c_name']="wacky";   // $channel_name = "wacky";
            $data['c_guys']=5;   // $channel_guys = 5;
            $data['c_views']=100; // $channel_views = 100;
        } else {
            $data['c_name'] = "Null";   // $channel_name = "wacky";
            $data['c_guys'] = "Null";   // $channel_guys = 5;
            $data['c_views'] = "Null";
        }
        return view('channels.edit',$data);
    }
    function show($id)
    {
        $get=channel::find($id);
        if ($get == null)
            return "NULL";
        $g_channel = $get->toArray();
        //$channel_name="";$chanel_guys="";$channel_views="";
        /*if ($id<10)
        {
            $channel_name = "wacky";
            $channel_guys = 5;
            $channel_views = 100;
        } else{
            $channel_name = "Null";
            $channel_guys = "Null";
            $channel_views = "Null";
        }
        return view('channels.show')->with(["c_name"=>$channel_name,
                                                      "c_guys"=>$channel_guys,
                                                         "c_views"=>$channel_views,
                                                            "channel_id"=>$id]);//->with("channel_id",$id)*/
        return view('channels.show',$g_channel);
    }
}