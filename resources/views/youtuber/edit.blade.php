<html>
    <head>
     <title>
            hello!!!
     </title>
    </head>
    <body>
        <h1>預被編輯的網頁(youtuber)</h1>
        <a href="<?php echo route('youtuber');?> ">youtuber的主畫面</a><br/>
        這裡是團員 <?php echo $youtuber_id ?>的資料<br/>
        團員姓名:{{$y_name}}<br/>
        團員年齡:{{$y_years }}<br/>
        團員國籍:{{$y_country}}<br/>
    </body>
</html>
