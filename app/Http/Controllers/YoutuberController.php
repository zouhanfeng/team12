<?php

namespace App\Http\Controllers;


use App\Models\youtuber;
use App\Models\channel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class YoutuberController extends Controller
{
    function index()
    {
        $youtuber = youtuber::all();
            $countrys = youtuber::all()->get();
        $data = [];
        foreach ($countrys as $country)
        {
            $data["$countrys->country"] = $countrys->country;
        }
        return view('youtuber.index',['youtuber'=>$youtuber,'countrys'=>$data]);
    }
    function creat()
    {
        $channels = DB::table('channels')
            ->select('channels.id', 'channels.c_name')
            ->orderBy('channels.id', 'asc')
            ->get();

        $data = [];
        foreach ($channels as $channel)
        {
            $data[$channel->id] = $channel->name;
        }
        return view('youtuber.create', ['channels' =>$data]);
    }

    function edit($id)
    {
        $channels = DB::table('channels')
            ->select('channels.id', 'channels.c_name')
            ->orderBy('channels.id', 'asc')
            ->get();

        $data = [];
        foreach ($channels as $channel)
        {
            $data[$channel->id] = $channel->name;
        }

        $get=youtuber::findorfail($id);
        $youtuber = $get->toArray();

        return view('youtuber.edit',['youtuber'=>$youtuber,'channels' =>$data]);
    }
    function show($id)
    {
        $youtuber = youtuber::findOrFail($id);
        $channel = channel::findOrFail($youtuber->c_id);

        return view('youtuber.show', ['youtuber' => $youtuber, 'channel_name' => $channel->name]);
    }

    public function destroy($id)
    {
        $player = youtuber::findOrFail($id);
        $player->delete();
        return redirect('youtubers');
    }

}
