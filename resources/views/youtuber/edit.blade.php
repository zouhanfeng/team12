
@extends('app')

@section('title', '編輯特定頻道')

@section('theme', '編輯中的頻道')

@section('contents')
    @include('message.list')
    {!! Form::model($youtuber, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\YoutuberController@update', $youtuber->id]]) !!}
    @include('youtubers.form', ['submitButtonText'=>"更新團員資料"])
    {!! Form::close() !!}

@endsection
