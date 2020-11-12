<html>
    <head>
        <title>
            hello!!!
        </title>
    </head>
    <body>
        <h1>預備查巡的網頁</h1>
        <a href="<?php echo route('youtuber');?> ">youtuber的主畫面</a></br><br/><br/><br/>
        <table border="5" width="500" height="200" bgcolor="#ff4500">
         <tr>
             <th>頻道名稱</th>
             <th>頻道類別</th>
             <th>粉絲數(萬)</th>
             <th>平均觀看人數(萬)</th>
           </tr>

         @foreach( $channel  as $get)
                <tr>
                    <td> {{$get->c_name}}  </td>
                    <td> {{$get->category}}  </td>
                    <td> {{$get->fans}}  </td>
                   <td> {{$get->views}}  </td>
                </tr>
          @endforeach
        </table>
    </body>
</html>

