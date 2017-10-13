<?php
  require_once('connect.php');
  $data = mysqli_query($sql, "SELECT * FROM quote_tweet WHERE verify = 1 ORDER BY RAND()");

  $json = array();

  while($row = mysqli_fetch_array($data))
  {
    array_push($json, array(
                              "id" => $row['id'],
                              "tweet" => $row['tweet'],
                              "url" => $row['url'],
                              "user" => $row['user'],
                          ));
  }
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:app_id" content="420349794829898" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://tobe.it.kmitl.ac.th/2015/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ToBeIT59 | IT@KMITL" />
    <meta property="og:description" content="เตรียมตัวให้พร้อม... พบกับการกลับมาของ ToBeIT59 เร็ว ๆ นี้ http://goo.gl/AVG2o5" />
    <meta property="og:image" content="http://tobe.it.kmitl.ac.th/2015/asset/img/cover.jpg" />

    <title>ToBeIT59 | IT@KMITL</title>

    <link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="asset/css/style.css" media="screen">
    <link rel="image_src" href="asset/img/logo.png" />

  </head>

  <body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=420349794829898";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <section id="main" class="container col-md-6 col-md-offset-3">

      <h1 class="text-center">ToBeIT 59</h1>
      <hr>
      <p class="desc text-center" id="tweet"></p>

      <div class="clock text-center">
        <div class="digits"></div>
      </div>
      <form method="post" class="form-inline text-center">
        <div class="form-group">
          <input type="email" class="wow" name="email" size="30" placeholder="ใส่ Email เพื่อรอรับข่าวสารดี ๆ ก่อนใครเล้ย">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>

      <ul class="share text-center">
        <a href="javascript:window.open('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=http%3A%2F%2Ftobe.it.kmitl.ac.th/2015%2F&display=popup', 'Facebook Share', 'width=600,height=500');">
          <li><img src="asset/img/02_facebook.png"></li>
        </a>
        <a
          class="twitter-share-button"
          onclick="javascript:window.open('https://twitter.com/intent/tweet?text=%E0%B9%80%E0%B8%95%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%A1%E0%B8%95%E0%B8%B1%E0%B8%A7%E0%B9%83%E0%B8%AB%E0%B9%89%E0%B8%9E%E0%B8%A3%E0%B9%89%E0%B8%AD%E0%B8%A1...%20%E0%B8%9E%E0%B8%9A%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%81%E0%B8%A5%E0%B8%B1%E0%B8%9A%E0%B8%A1%E0%B8%B2%E0%B8%82%E0%B8%AD%E0%B8%87%20ToBeIT59%20%E0%B9%80%E0%B8%A3%E0%B9%87%E0%B8%A7%20%E0%B9%86%20%E0%B8%99%E0%B8%B5%E0%B9%89%20http://goo.gl/AVG2o5%20&hashtags=ToBeITKMITL,ToBe59', 'Twitter', 'width=550,height=400');"
          href="javascript:void()"
        >
          <li><img src="asset/img/01_twitter.png"></li>
        </a>
        <a
          class="twitter-share-button"
          onclick="javascript:window.open('https://plus.google.com/share?url=http://tobe.it.kmitl.ac.th/', 'Google+', 'width=550,height=400');"
          href="javascript:void()"
        >
          <li><img src="asset/img/14_google+.png"></li>
        </a>
        <a
          class="twitter-share-button"
          onclick="javascript:window.open('http://mail.live.com/mail/EditMessageLight.aspx?n=&subject=ToBeIT%2059%20|%20IT@KMTIL&body=เตรียมตัวให้พร้อม...%20พบกับการกลับมาขอ%20 ToBeIT59%20เร็ว%20ๆ%20นี้%20http://tobe.it.kmitl.ac.th', 'Email');"
          href="javascript:void()"
        >
          <li><img src="asset/img/18_email.png"></li>
        </a>
      </ul>

      <div class="fb-share">
        <div id="wrap">
          <div class="box"></div>
          <a href="https://www.facebook.com/tobeitkmitl/" class="box gotopage">
              <div id="triangle-down"></div>
              <div id="titlepge">Go to Page</div>
          </a>
        </div>
      </div>

    </section>

  </body>

  <script type="text/javascript" src="asset/js/jquery.min.js"></script>
  <script type="text/javascript" src="asset/js/jquery.countdown.min.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="asset/js/config-clock.js"></script>
  <script>
    var json = <?php echo json_encode($json) ?>;
    var cnt = 0;
    var len = json.length;
    function change_tweet(){
      $('#tweet').fadeOut('slow', function() {
        $(this).html('<blockquote id="quote_tweet">' + json[cnt]['tweet'] + '</blockquote>' + '<span id="user"><a href="' + json[cnt]['url'] + '">' + json[cnt]['user'] + '</span>');
      });
      $('#tweet').fadeIn('slow');
      if(cnt == len - 1) cnt = 0
      else cnt += 1;
    }
    change_tweet()
    setInterval(change_tweet, 5000);
  </script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-70444291-1', 'auto');
    ga('send', 'pageview');
  </script>

</html>

<?php
  if(!empty($_POST["email"])){
    $email = $_POST["email"];
    $data = mysqli_query($sql, "SELECT * FROM email WHERE email = '$email'");
    if(mysqli_fetch_array($data) == false){
      $data = mysqli_query($sql, "INSERT INTO email (email) VALUES ('$email')");
      echo "<script>alert('บันทึกอีเมล์เรียบร้อย');</script>";
    }
    else{
      echo "<script>alert('อีเมล์นี้ถูกบันทึกไว้แล้ว');</script>";
    }
  }
?>
