<?php require('header.php'); ?>

<body>

  <!-- facebook api -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=420349794829898";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <section class="col-sm-12 row block middle-page container" style="height: 100%; background-image: url('asset/img/bg.jpg');"  id="home">
    <div class="col-sm-8 col-sm-offset-2 box-index">

      <!--
      <div class="col-lg-6 text-center" style="margin-bottom:60px;">
        <div id="tobe">ToBe</div>
        <div id="it">IT</div>
        <div id="kmitl">@KMITL <sub>'59</sub></div>
      </div>
      -->

      <div class="col-lg-12 text-center" style="margin-bottom:30px;">
        <img src="asset/img/logo.png" width="70%">
      </div>

      <h3 class="text-center" style="margin-top: 20px; margin-bottom: 10px; color:white;">ระบบจะเปิดรับสมัครน้อง ๆ ในอีก</h3>
      <hr class="thin">
      <div class="clock text-center">
        <div class="digits"></div>
      </div>

    </div>
  </section>

  <section class="col-sm-12 block-header middle-page container">
    <h1 class="head-label" id="about"><span>ABOUT</span> | เกี่ยวกับโครงการ</h1>
  </section>

  <section class="col-sm-12 row block container">
    <article class="col-sm-8 col-sm-offset-2" style="font-weight: 200; letter-spacing: 1px;">

      <p style="text-indent: 40px;">สวัสดีครับน้อง ๆ ทุกคน โครงการนี้จัดตั้งขึ้นมาเพื่อที่จะสอนให้น้อง ๆ รู้จักเกี่ยวกับไอทีมากขึ้น โครงการนี้จัดตั้งโดย คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ซึ่งโครงการนี้จะสอนน้อง ๆ เกี่ยวกับหลักการทางด้านไอทีต่าง ๆ  ไม่ว่าจะเป็น ฮาร์ดแวร์ ซอฟแวร์ ระบบฐานข้อมูล และพื้นฐานทางด้านไอที โดยที่กล่าวมาข้างต้นนั้นจะมีพี่ ๆ คอยสอนน้องตลอดโครงการนี้ น้อง ๆ สามารถนำความรู้ที่ได้จากโครงการนี้ไปต่อยอดได้ในหลายแขนงหรือในด้านต่าง ๆ </p>

    </article>
    <div class="twitter col-sm-8 col-sm-offset-2">
      <hr class="thin">
      <p class="tweet" id="tweet">"ข้าพเจ้าพยายามคิดพื้นหลังดี ๆ แต่ข้าพเจ้าก็คิดไม่ออก"</p>
    </div>
  </section>

  <section class="col-sm-12 block-header middle-page container" style="background: rgba(0, 0, 0, 0.2)">
    <h1 class="head-label" id="course"><span>COURSE INFO</span> | รายละเอียดการสอน</h1>
  </section>

  <section class="col-sm-12 row block container slide-control" style="background: rgba(0, 0, 0, 0.2)">
    <ul>
      <li class="icon-subj"><img src="asset/img/subj-icon/Hardware.png" data-target="#carousel-example-generic" data-slide-to="0"></li>
      <li class="icon-subj"><img src="asset/img/subj-icon/Software.png" data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li class="icon-subj"><img src="asset/img/subj-icon/Multimedia.png" data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li class="icon-subj"><img src="asset/img/subj-icon/Math.png" data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li class="icon-subj"><img src="asset/img/subj-icon/Database.png" data-target="#carousel-example-generic" data-slide-to="4"></li>
      <li class="icon-subj"><img src="asset/img/subj-icon/Logic.png" data-target="#carousel-example-generic" data-slide-to="5"></li>
      <li class="icon-subj"><img src="asset/img/subj-icon/Network.png" data-target="#carousel-example-generic" data-slide-to="6"></li>
      <li class="icon-subj"><img src="asset/img/subj-icon/Programming.png" data-target="#carousel-example-generic" data-slide-to="7"></li>
      <li><img src="asset/img/subj-icon/Algorithm.png" data-target="#carousel-example-generic" data-slide-to="8"></li>
    </ul>
  </section>

  <section class="col-sm-12 row block container course-slide" style="background: rgba(0, 0, 0, 0.2)">

    <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active row" style="background: url('asset/img/bg.jpg'); margin: 0;">
          <div class="slide-subject-desc col-sm-8 col-sm-offset-2">
              <p>HW: HARDWARE</p>
              <p>มาทำความรู้จักอุปรกณ์ฮาร์ดแวร์ และอุปกรณ์คอมพิวเตอร์ที่ใช้กันในชีวิตประจำวัน และที่น้อง ๆ ยังไม่เคยรู้จัก  ให้คำแนะนำ ความเป็นมา ความรู้ อุปกรณ์รับเข้า-ส่งออก อุปกรณ์บันทึกข้อมูลต่าง ๆ ที่น้อง ๆ ควรรู้ก่อนเข้าสอบตรงคณะ IT</p>
          </div>
          <div class="slide-subject-teacher col-sm-4 col-sm-offset-2">
            <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span> พี่ประจำวิชา</p>
            <p>พี่บอส (P’BossWaran)</p>
            <p>พี่ฟรอย (P’Foy)</p>
          </div>
        </div>
        <div class="item row" style="background: url('asset/img/bg.jpg'); margin: 0;">
          <div class="slide-subject-desc col-sm-8 col-sm-offset-2">
              <p>SW: SOFTWARE & ETHIC</p>
              <p>แท้จริงแล้วคำว่าซอร์ฟแวร์นั้นมีความหมายว่าอย่างไร มาเรียนรู้ซอร์ฟแวร์ประเภทต่าง ๆ และรวมถึงจริยธรรมในการใช้งานคอมพิวเตอร์ให้ถูกต้องด้วย</p>
          </div>
          <div class="slide-subject-teacher col-sm-4 col-sm-offset-2">
            <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span> พี่ประจำวิชา</p>
            <p>พี่เจเจ (P’JayJay)</p>
            <p>พี่ดิว (P’Dew)</p>
          </div>
        </div>
        <div class="item row" style="background: url('asset/img/bg.jpg'); margin: 0;">
          <div class="slide-subject-desc col-sm-8 col-sm-offset-2">
              <p>MW: MULTI & WEB</p>
              <p>เว็บและมัลติมีเดีย สื่อบันเทิงต่าง ๆ เป็นสิ่งที่ทุกคนรู้จักกันอยู่แล้ว แต่ลองมาเรียนรู้กับแบบจริงจังกับความรู้ทั่วไปเกี่ยวกับสื่อต่าง ๆ เหล่านั้น พร้อมทั้งแนะนำถึงเรื่องเทคโนโลยีเว็บต่าง ๆ ที่ถูกใช้กันอยู่ในปัจจุบันด้วย</p>
          </div>
          <div class="slide-subject-teacher col-sm-4 col-sm-offset-2">
            <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span> พี่ประจำวิชา</p>
            <p>พี่จาบอน (P’Jabont)</p>
            <p>พี่เบนซ์ (P’Benz)</p>
          </div>
        </div>
        <div class="item row" style="background: url('asset/img/bg.jpg'); margin: 0;">
          <div class="slide-subject-desc col-sm-8 col-sm-offset-2">
              <p>M: MATH</p>
              <p>คณิตศาสตร์เป็นวิชาเกี่ยวกับสำหรับคอมพิวเตอร์ ถ้าหากน้อง ๆ สนใจเข้ามาเรียนในคณะเทคโนโลยีสารสนเทศแห่งนี้แล้ว วิชาคณิตศาสตร์ก็เป็นสิ่งที่จะมองข้ามมันไปไม่ได้เลย</p>
          </div>
          <div class="slide-subject-teacher col-sm-4 col-sm-offset-2">
            <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span> พี่ประจำวิชา</p>
            <p>พี่แบงค์ (P’Bank)</p>
            <p>พี่กลอย (P’Kloy)</p>
          </div>
        </div>
        <div class="item row" style="background: url('asset/img/bg.jpg'); margin: 0;">
          <div class="slide-subject-desc col-sm-8 col-sm-offset-2">
              <p>DB: DATABASE</p>
              <p>โลกปัจจุบัน ผู้ที่มีอำนาจคือผู้ที่มีข้อมูลจำนวนมากกว่า เพื่อช่วยในการตัดสินใจต่าง ๆ แล้วการจะจัดเก็บข้อมูลขนาดใหญ่ทั้งหมดนี้ ทำได้อย่างไร มาเรียนรู้กับวิชาฐานข้อมูลที่จะทำให้น้อง ๆ รู้จักกับทฤษฎี และซอร์ฟแวร์ต่าง ๆ ในการจัดการฐานข้อมูล</p>
          </div>
          <div class="slide-subject-teacher col-sm-4 col-sm-offset-2">
            <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span> พี่ประจำวิชา</p>
            <p>พี่ชิน (P’Chin)</p>
            <p>พี่โอปอ (P’Opor)</p>
          </div>
        </div>
        <div class="item row" style="background: url('asset/img/bg.jpg'); margin: 0;">
          <div class="slide-subject-desc col-sm-8 col-sm-offset-2">
              <p>L: Logic</p>
              <p>ปูพื้นฐานทางด้านตรรกะศาสตร์ เกี่ยวกับค่าความจริงและความเกี่ยวข้องของตรรกศาสตร์กับคอมพิวเตอร์ นี้คือสิ่งที่เป็นเบื้องหลังขับเคลื่อนระบบอิเล็กทรอนิกส์ และไอทีนั่นเอง</p>
          </div>
          <div class="slide-subject-teacher col-sm-4 col-sm-offset-2">
            <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span> พี่ประจำวิชา</p>
            <p>พี่แทท (P’Tat)</p>
            <p>พี่เจมส์ (P’Chiibi)</p>
          </div>
        </div>
        <div class="item row" style="background: url('asset/img/bg.jpg'); margin: 0;">
          <div class="slide-subject-desc col-sm-8 col-sm-offset-2">
              <p>NET: NETWORK</p>
              <p>คงไม่มีใครไม่รู้จักอินเตอร์เน็ต สิ่งที่เป็นพื้นฐานข้องโครงข่ายอินเตอร์เน็ตทั้งหมดก็คือระบบเครือข่ายนั่นเอง มาพบกับพื้นฐานต่าง ๆ ของระบบเครือข่าย โครงข่ายของคอมพิวเตอร์ องค์ประกอบพื้นฐาน การเชื่อมต่อข้อมูล และประเภทของเครือข่ายคอมพิวเตอร์รวมไปถึงการประมวลผลข้อมูลและระบบ IP Address</p>
          </div>
          <div class="slide-subject-teacher col-sm-4 col-sm-offset-2">
            <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span> พี่ประจำวิชา</p>
            <p>พี่กรณ์ (P’Korn)</p>
            <p>พี่เอิร์ธ (P’Earth)</p>
          </div>
        </div>
        <div class="item row" style="background: url('asset/img/bg.jpg'); margin: 0;">
          <div class="slide-subject-desc col-sm-8 col-sm-offset-2">
              <p>PRO: PROGRAMMING</p>
              <p>เป็นวิชาที่สอนความรู้เกี่ยวกับชนิดของภาษาคอมพิวเตอร์ ระดับของภาษาคอมพิวเตอร์ ตัวแปร รวมถึงขั้นตอนการพัฒนาโปรแกรมต่าง ๆ ทั้งหมดนี้ คือสิ่งที่เป็นภาษาวิเศษที่ใช้สำหรับการควบคุมระบบคอมพิวเตอร์</p>
          </div>
          <div class="slide-subject-teacher col-sm-4 col-sm-offset-2">
            <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span> พี่ประจำวิชา</p>
            <p>พี่โอ๊ต (P’Meranote)</p>
            <p>พี่โอ๊ต (P’Oat)</p>
          </div>
        </div>
        <div class="item row" style="background: url('asset/img/bg.jpg'); margin: 0;">
          <div class="slide-subject-desc col-sm-8 col-sm-offset-2">
              <p>AT: ALGOLITHM & THINKING SKILLS</p>
              <p>มาเสริมสร้างความคิดเกี่ยวกับการทำโปรแกรมมิ่งในเบื้องต้น โดยสอนเกี่ยวกับ Flow Chart, Psudo Code  รวมไปถึงทักษาการคิดวิเคราะห์ที่จะช่วยให้รู้จักกับวิธีการแก้ปัญหาต่าง ๆ อีกด้วย</p>
          </div>
          <div class="slide-subject-teacher col-sm-4 col-sm-offset-2">
            <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span> พี่ประจำวิชา</p>
            <p>พี่จ๊าบ (P’Jarb)</p>
            <p>พี่ท๊อป (P’Top)</p>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section>

  <section class="col-sm-12 block-header middle-page container">
    <h1 class="head-label" id="transport"><span>TRANSPORT</span> | แผนที่การเดินทาง</h1>
  </section>

  <section class="col-sm-12 row block container">

    <div class="box-text middle-page"><p>แผนที่การเดินทาง</p></div>

    <article class="col-sm-8 col-sm-offset-2 text-center ">

      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3875.7966510493134!2d100.7812803055325!3d13.7307578352925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd2850fd9ee87f249!2sFaculty+of+Information+Technology!5e0!3m2!1sen!2sth!4v1450164792173" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

    </article>

  </section>

  <section class="col-sm-12 block container">

    <div class="box-text middle-page"><p>วิธีการเดินทาง</p></div>

    <div class="row col-sm-10 col-sm-offset-1">
      <div class="col-sm-6" style="padding: 10px;">
        <div class="transport-box">
          <h3>AIRPORT RAIL LINK</h3>
          <p>จากสถานีพญาไท ผ่านสถานีราชปรารภ มักกะสัน รามคำแหง หัวหมาก บ้านทับช้าง ใช้เวลาประมาณ 20 นาทีลงที่สถานีลาดกระบังแล้วต่อรถไฟที่สถานีรถไฟลาดกระบัง</p>
        </div>
      </div>
      <div class="col-sm-6" style="padding: 10px;">
        <div class="transport-box">
          <h3>VAN</h3>
          <p>รถตู้โดยสารปรับอากาศ หมอชิตใหม่-อนุสาวรีย์–พระจอมเกล้าลาดกระบัง(ทางด่วน) ขึ้นรถบริเวณใต้ทางด่วนทางทิศเหนือของอนุสาวรีย์ชัยสมรภูมิ ค่าโดยสาร 40 บาท ใช้เวลาประมาณ 30-40 นาที</p>
        </div>
      </div>
    </div>

    <div class="row col-sm-10 col-sm-offset-1">
      <div class="col-sm-6" style="padding: 10px;">
        <div class="transport-box">
          <h3>CAR</h3>
          <p>
            <ul>
              <li>เริ่มจากเส้นทางถนนศรีนครินทร์ที่แยกอ่อนนุช เข้าถนนอ่อนนุช (สุขุมวิท77) ระยะทางประมาณ 16 กม. แยกเข้าถนนฉลองกรุง</li>
              <li>เริ่มจากเส้นทางตลาดมีนบุรี เข้าถนนสุวินทวงศ์ ถนนบึงบัว ถนนฉลองกรุง</li>
              <li>
                จากกรุงเทพฯ ใช้เส้นทางด่วนพิเศษ กรุงเทพฯ–ชลบุรี (มอเตอร์เวย์)
                <ul>
                  <li>ออกจากมอเตอร์เวย์ที่ถนนร่มเกล้า ถนนอ่อนนุช ถนนฉลองกรุง</li>
                  <li>ยูเทิร์นกลับรถที่สถานีขนส่งสินค้า ออกจากมอเตอร์เวย์ที่ทางเข้าสนามบินสุวรรณภูมิ ทางเบียงถนนคู่ขนานมอเตอร์เวย์ ถนนฉลองกรุง (เส้นทางแนะนำ เลี่ยงรถติด) [ชมวิดิทัศน์วิธีการเดินทาง]</li>
                </ul>
              </li>
              <li>จากชลบุรี ใช้เส้นทางด่วนพิเศษ กรุงเทพฯ–ชลบุรี(มอเตอร์เวย์) ออกจากมอเตอร์เวย์ที่ทางเข้าสนามบินสุวรรณภูมิ ทางเบี่ยงถนนคู่ขนานมอเตอร์เวย์ ถนนฉลองกรุง</li>
            </ul>
          </p>
        </div>
      </div>
      <div class="col-sm-6" style="padding: 10px;">
        <div class="transport-box">
          <h3>TRAIN</h3>
          <p>สายตะวันออก จากสถานีกรุงเทพฯ(หัวลำโพง)อุรุพงษ์ พญาไท มักกะสัน คลองตัน หัวหมาก บ้านทับช้าง ลงที่ป้าย หยุดรถไฟพระจอมเกล้า หรือสถานีหัวตะเข้ แนะนำให้มาขบวน 275 และ 283</p>
          <p>สายชานเมือง (รังสิต-หัวตะเข้) สถานีต้นทางรังสิตผ่านเส้นทางดอนเมือง ตลาดใหม่ดอนเมือง การเคหะกม.19 หลักสี่ ทุ่งสองห้อง นิคมรถไฟกม.11 บางซื่อ สามเสน มักกะสัน อโศก คลองตัน สุขุมวิท 71 หัวหมาก บ้านทับช้าง ซอยวัดลานบุญปลายทางป้ายหยุดรถไฟพระจอมเกล้า หรือสถานีหัวตะเข้ รถขบวนนี้ออกจากรังสิตเวลา 05.35 น. ถึงหัวตะเข้เวลา 07.40 น.โดยประมาณ (รถขบวนนี้ไม่เข้าหัวลำโพง)
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="col-sm-12 block-header middle-page container" style="background: rgba(0, 0, 0, 0.2)">
    <h1 class="head-label" id="photos"><span>PHOTOS</span> | ภาพกิจกรรม</h1>
  </section>

  <section class="col-sm-12 row block container" style="background: rgba(0, 0, 0, 0.2)">
    <article class="col-sm-8 col-sm-offset-2">

      <div id="carousel-gallery" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-gallery" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-gallery" data-slide-to="1"></li>
          <li data-target="#carousel-gallery" data-slide-to="2"></li>
          <li data-target="#carousel-gallery" data-slide-to="3"></li>
          <li data-target="#carousel-gallery" data-slide-to="4"></li>
          <li data-target="#carousel-gallery" data-slide-to="5"></li>
          <li data-target="#carousel-gallery" data-slide-to="6"></li>
          <li data-target="#carousel-gallery" data-slide-to="7"></li>
          <li data-target="#carousel-gallery" data-slide-to="8"></li>
          <li data-target="#carousel-gallery" data-slide-to="9"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active"><img src="asset/img/slide/01.png"></div>
          <div class="item"><img src="asset/img/slide/02.png"></div>
          <div class="item"><img src="asset/img/slide/03.png"></div>
          <div class="item"><img src="asset/img/slide/04.png"></div>
          <div class="item"><img src="asset/img/slide/05.png"></div>
          <div class="item"><img src="asset/img/slide/06.png"></div>
          <div class="item"><img src="asset/img/slide/07.png"></div>
          <div class="item"><img src="asset/img/slide/08.png"></div>
          <div class="item"><img src="asset/img/slide/09.png"></div>
          <div class="item"><img src="asset/img/slide/10.png"></div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-gallery" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-gallery" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </article>
  </section>

  <section class="col-sm-12 block-header middle-page container">
    <h1 class="head-label" id="faq"><span>FAQ</span> | คำถามที่พบบ่อย</h1>
  </section>

  <section class="col-sm-12 row block container">
    <article class="col-sm-8 col-sm-offset-2 faq">
      <p class="question">จัดติววันไหน ช่วงเวลากี่โมง</p>
      <p class="answer">ช่วงเดือนมกราคมครับ แต่กำหนดการจะแจ้งให้ทราบภายหลัง อย่าลืมติดตามความคืบหน้าในแฟนเพจล่ะครับ</p>
    </article>

    <article class="col-sm-8 col-sm-offset-2 faq">
      <p class="question">ปวช. สมัครได้มั้ย สอบได้มั้ย</p>
      <p class="answer">ได้ครับ เพราะคณะของเรารับทั้งนักเรียนจากทั้งมัธยม และปวช. เลยครับ</p>
    </article>

    <article class="col-sm-8 col-sm-offset-2 faq">
      <p class="question">เป็นค่ายค้างคืนหรือไป-กลับ</p>
      <p class="answer">ไป-กลับ เช้าเย็นครับ</p>
    </article>

    <article class="col-sm-8 col-sm-offset-2 faq">
      <p class="question">ศิลป์ภาษา สมัครได้มั้ย รับหรือเปล่า ในใบสมัครให้กรอก หน่อยกิตที่เรียน วิทย์ กับคณิตด้วย จะมีผลอะไรกับการสมัครหรือเปล่า</p>
      <p class="answer">ไม่มีผลครับ น้อง ๆ สามารถสมัครได้ตามปกติเลย</p>
    </article>

  </section>

</body>

<section class="col-sm-12 row block" style="padding: 0;">

  <article class="col-sm-12 text-center" style="border: 0; padding-bottom: 50px;">

    <div class="box-text middle-page" style="padding-bottom: 20px;"><p>ติดต่อสอบถาม</p></div>

    <div class="container col-sm-8 col-sm-offset-2 row">
      <div class="col-sm-6 text-left">
        <p><b>เบอร์โทรศัพท์ติดต่อ</b></p>
        <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> พี่มิลค์กี้: 085 - 161 - 7623</p>
        <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> พี่แพร: 082 - 792 - 0845</p>
      </div>
      <div class="col-sm-6 text-left">
        <p><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="https://www.facebook.com/tobeitkmitl/">เพจ ToBeIT บน Facebook</a></p>
        <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <a href="https://www.facebook.com/groups/kmitltobeit/">กลุ่ม ToBeIT@KMITL บน Facebook</a></p>
        <p><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <a href="https://www.facebook.com/messages/289696517715853">ส่งข้อความผ่าน Facebook</a></p>
      </div>
    </div>

  </article>

</section>

<?php require('footer.php'); ?>
