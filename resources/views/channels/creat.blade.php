
@extends('app')

@section('title', '建立頻道表單')

@section('theme', '建立頻道的表單')

@section('contents')
    @include('message.list')
    {!! Form::open(['url' => 'channels/store']) !!}
    @include('channels.form', ['submitButtonText'=>'新增頻道資料'])
    {!! Form::close() !!}

@endsection






