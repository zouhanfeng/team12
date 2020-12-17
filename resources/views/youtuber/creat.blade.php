@extends('app')

@section('title', '建立團員表單')

@section('theme', '建立團員的表單')

@section('contents')
    {!! Form::open() !!}

    <div class="form-group">
        {!! Form::label('yt_name','團員姓名') !!}
        {!! Form::text('$yt_name',null,['class'=>'form-control']) !!}
        {!! Form::open() !!}
    </div>

    <div class="form-group">
        {!! Form::label('c_id','頻道編號') !!}
        {!! Form::text('c_id',null,['class'=>'form-control']) !!}
        {!! Form::open() !!}
    </div>

    <div class="form-group">
        {!! Form::label('year','團員年齡') !!}
        {!! Form::text('year',null,['class'=>'form-control']) !!}
        {!! Form::open() !!}
    </div>

    <div class="form-group">
        {!! Form::label('education','團員學歷') !!}
        {!! Form::text('education',null,['class'=>'form-control']) !!}
        {!! Form::open() !!}
    </div>

    <div class="form-group">
        {!! Form::label('country','團員國籍') !!}
        {!! Form::text('country',null,['class'=>'form-control']) !!}
        {!! Form::open() !!}
    </div>
    {!! Form::close() !!}
@endsection
