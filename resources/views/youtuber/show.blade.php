<html>
    <head>
        <title>
            hello!!!
        </title>
    </head>
    <body>
        <h1>預備顯示單一資料的網頁(youtuber)</h1>
        <a href="<?php echo route('youtuber');?> ">youtuber的主畫面</a><br/>

        這裡是團員 <?php echo $youtuber_id ?>的資料<br/>
        團員姓名:{{$yt_name}}<br/>
        團員年齡:{{$year }}<br/>
        團員學歷:{{$education}}<br/>
        團員國籍:{{$country}}<br/>


    </body>
</html>
