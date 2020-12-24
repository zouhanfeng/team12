
@extends('app')

@section('title', '顯示特定頻道')

@section('theme', '您所選取的頻道資料')

@section('contents')
    團員姓名:{{$youtuber->yt_name}}<br/>
    頻道編號:{{$youtuber->c_id}}<br/>
    團員年齡:{{$youtuber->year }}<br/>
    出道日：{{ $youtuber->onboarddate }}<br/>
    團員學歷:{{$youtuber->education}}<br/>
    團員國籍:{{$youtuber->country}}<br/>
@endsection
