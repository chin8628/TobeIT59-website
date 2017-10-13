<?php
    $tweet = array(
                        "เอ๊ะอะไรนะ อยากเข้า IT ทำไงดีล่ะ.. มาสิ มางาน ToBeITKMITL พี่ๆน่ารักใจดีรอน้องๆอยู่นะจ๊ะ",
                        "เอ๊ะใกล้ ๆ ที่จะถึงนี้มีงานอะไรนะ อ๋อ ToBeIT@KMITL ไง น้องๆคนไหนอยากให้พี่ๆติวให้บ้างน้าาา",
                        "เตรียมพร้อมในการสอบกันแล้วหรือยังจ๊ะ ถ้ายังหรืออยากติวเพิ่มล่ะก็ มากับพวกเราสิ ที่ ToBeIT@KMITL",
                        "รู้หรือยัง คณะ IT ลาดกระบัง มีงาน ToBeIT@KMITL ด้วยนะ",
                        "รู้หรือยัง ToBeIT@KMITL จะมาแล้ว! Mentor ของเรา รอสอนน้องๆให้เข้ามาเป็นครอบครัว IT อยู่ ♥"
                );
?>

<html>

    <head>
        <meta charset="utf-8">
    </head>

    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
            h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
    </script>

    <body onload="startTime()">

        <span>Clock: </span><span id="txt"></span></center><br><br>
        <b>ปุ่มสำหรับกดเพื่อทวิต</b><br>
        <a
          class="twitter-share-button"
          onclick="javascript:window.open('https://twitter.com/intent/tweet?text=<?php echo $tweet[rand(0, 4)] ?>%20http://bit.ly/1YnnSuG&hashtags=ToBeITKMITL,dek59', 'Twitter', 'width=550,height=400');"
          onclick="location.reload();"
          href="javascript:void()"
        >
          Random tweet, Click me plz
        </a>

    </body>

</html>
