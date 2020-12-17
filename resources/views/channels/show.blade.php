
@extends('app')

@section('title', '顯示特定頻道')

@section('theme', '您所選取的頻道資料')

@section('contents')
    團隊名稱:{{$c_name}}<br/>
    團隊類別:{{$category}}<br/>
    粉絲數(萬):{{$fans}}<br/>
    平均觀看量(萬):{{$views}}<br/>
@endsection
