<html>
    <head>
     <title>
            hello!!!
     </title>
    </head>
    <body>
        <h1>預被編輯的網頁</h1>
        <a href="<?php echo route('channels');?> ">channels的主畫面</a><br/>
        這裡是頻道 <?php echo $channel_id ?>的資料<br/>
        團隊名稱:{{$c_name}}<br/>
        團隊人數:{{$c_guys }}<br/>
        觀看人數:{{$c_views}}<br/>


    </body>
</html>
