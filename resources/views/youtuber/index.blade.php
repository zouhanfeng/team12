<html>
    <head>
        <title>
            hello!!!
        </title>
    </head>
    <body>
        <h1>預備查巡的網頁(youtuber)</h1>
        <a href="<?php echo route('channels');?> ">channel的主畫面</a>
        <table border="5" width="500" height="200" bgcolor="yellow">
            <tr>
                <th>姓名</th>
                <th>頻道編號</th>
                <th>年齡</th>
                <th>學歷</th>
                <th>國家</th>
            </tr>

            @foreach( $youtuber as $get)
                <tr>
                    <td> {{$get->yt_name}}  </td>
                    <td> {{$get->c_id}}  </td>
                    <td> {{$get->year}}  </td>
                    <td> {{$get->education}}  </td>
                    <td> {{$get->country}}  </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>

