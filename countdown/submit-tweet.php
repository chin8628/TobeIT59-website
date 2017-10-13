<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p>
        <u>ตัวอย่าง</u><br><br>
        Username: @ITKMITL<br>
        ข้อความทวิต: มาแล้วๆ !!!! ห้อง "ITForge Maker Lab room 317" พร้อมเปิดให้บริการแล้วจ้าาาา<br>
        ลิงค์ของทวิตนั้น: https://twitter.com/itforge/status/651056960587059200<br><br>
        </p>
        <form method="post">
            Username (ตัวอย่างเช่น @tobeit "ใส่ @ มาด้วยนะ")<br>
            <input type="text" name="user"><br><br>
            ข้อความทวิต<br>
            <input type="text" name="tweet"><br><br>
            ลิงค์ของทวิตนั้น<br>
            <input type="text" name="url"><br><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<?php

    require_once('connect.php');

    if(!empty($_POST['user']) && !empty($_POST['tweet']) && !empty($_POST['url'])){
        $user = $_POST['user'];
        $tweet = $_POST['tweet'];
        $url = $_POST['url'];

        $chk = mysqli_query($sql, "SELECT * FROM quote_tweet WHERE tweet = '$tweet'");
        if(mysqli_fetch_array($chk) != false){
            echo '<h3 style="color: red;">ทวิตนี้มีอยู่ในระบบแล้ว โปรดเปลี่ยนใหม่อีกครั้งหนึ่ง</h3>';
        }
        else{
            $data = mysqli_query($sql, "INSERT INTO quote_tweet (tweet, user, url) VALUES ('$tweet', '$user', '$url')");
            echo '<h3 style="color: green;">สำเร็จเรียบร้อย</h3>';
        }
    }

?>
