
@extends('app')

@section('title', '所有團員')

@section('theme', '所有團員')

@section('contents')

    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('y_create') }} ">新增團員</a>
    </div>
    <table>
        <tr>
            <th>姓名</th>
            <th>頻道編號</th>
            <th>年齡</th>
            <th>學歷</th>
            <th>國家</th>
            <th>操作1</th>
            <th>操作2</th>
        </tr>
        @foreach( $youtuber as $get)
            <tr>
                <td> {{$get->yt_name}}  </td>
                <td> {{$get->c_id}}  </td>
                <td> {{$get->year}}  </td>
                <td> {{$get->education}}  </td>
                <td> {{$get->country}}  </td>
                <td><a href="{{ route('y_show', ['id'=>$get->id]) }}">顯示</a></td>
                <td><a href="{{ route('y_edit', ['id'=>$get->id]) }}">修改</a></td>
            </tr>
        @endforeach
    </table>

@endsection



