
@extends('app')

@section('title', '建立頻道表單')

@section('theme', '建立頻道的表單')

@section('contents')
    {!! Form::open() !!}

    <div class="form-group">
        {!! Form::label('c_name','頻道名稱') !!}
        {!! Form::text('$c_name',null,['class'=>'form-control']) !!}
        {!! Form::open() !!}
    </div>

    <div class="form-group">
        {!! Form::label('category','團隊類別') !!}
        {!! Form::text('category',null,['class'=>'form-control']) !!}
        {!! Form::open() !!}
    </div>

    <div class="form-group">
        {!! Form::label('fans','粉絲數(萬)') !!}
        {!! Form::text('fans',null,['class'=>'form-control']) !!}
        {!! Form::open() !!}
    </div>

    <div class="form-group">
        {!! Form::label('views','平均觀看(萬)') !!}
        {!! Form::text('views',null,['class'=>'form-control']) !!}
        {!! Form::open() !!}
    </div>
    {!! Form::close() !!}

@endsection






