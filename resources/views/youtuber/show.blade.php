
@extends('app')

@section('title', '顯示特定頻道')

@section('theme', '您所選取的頻道資料')

@section('contents')
    團員姓名:{{$yt_name}}<br/>
    頻道編號:{{$c_id}}<br/>
    團員年齡:{{$year }}<br/>
    團員學歷:{{$education}}<br/>
    團員國籍:{{$country}}<br/>
@endsection
