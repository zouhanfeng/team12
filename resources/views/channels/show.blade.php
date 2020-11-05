<html>
    <head>
        <title>
            hello!!!
        </title>
    </head>
    <body>
        <h1>預備顯示單一資料的網頁</h1>
        <a href="<?php echo route('channels');?> ">channels的主畫面</a><br/>
        這裡是頻道 <?php echo $channel_id ?? ''?>的資料<br/>
        團隊名稱:{{$c_name}}<br/>
        團隊類別:{{$category}}<br/>
        訂閱人數:{{$fans}}<br/>
        觀看人數:{{$views}}<br/>

    </body>
</html>
