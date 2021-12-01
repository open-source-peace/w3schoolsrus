<?php include '../include/head.php'; ?>
<title>Bootstrap Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Bootstrap учебник для начинающих, школьников и студентов. Бесплатные курсы онлайн. Примеры кода. Справочник по Bootstrap. Как быстро создать сайт? <?php include '../include/description.php'; ?>'>
<style>
    .split {
        height: 100%;
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow: hidden;
        padding-top: 20px;
        color: white;
    }
    .left {
        left: 0;
        background-color: #775ba4;
    }
    .right {
        right: 0;
        background-color: #6138ad;
    }
    .centered {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -40%);
        text-align: center;
    }
    .myLink {
        text-decoration:none;
        color:white !important;
        opacity:0.8;
    }
    .myLink:hover {
        opacity: 1
    }
    .myLink:hover h1 {
        font-size: 41px;
    }
    .mySpan {
        border-radius: 15%;
        border: 2px solid white;
        padding: 20px 35px;
        display: inline-block;
        font-size: 105px;
    }
    .myh1 {
        line-height: 90px;
        font-size: 40px;
    }
    .myP {
        font-size: 15px;
        max-width: 370px;
        padding-left: 20px;
        padding-right: 20px;
        margin: auto;
    }
    @media only screen and (max-width:993px) {
        .centered {margin-top: 40px;}
        .myLink .mySpan {font-size: 70px;padding: 10px 25px;}
        .myLink .myh1 {font-size: 25px;}
        .myLink:hover h1 {font-size: 26px;}
    }
    @media only screen and (max-width: 700px) {
        .centered {margin-top: 50px;}
        .myLink .mySpan {font-size: 40px;padding: 10px 25px;}
        .myLink .myh1 {font-size: 16px;}
        .myP {display: none;}
        .myLink:hover h1 {font-size: 17px;}
    }
    @media only screen and (max-height: 620px) {
        .centered {margin-top: 45px;}
        .myLink .mySpan {font-size: 25px;padding: 10px 25px;}
        .myLink .myh1 {font-size: 16px;}
        .myP {display: none}
        .myLink:hover h1 {font-size: 17px;}
    }
    @media only screen and (max-width: 550px) {
        .centered {margin-top: 40px;}
        .myLink .mySpan {font-size: 25px;padding: 10px 25px;}
        .myLink .myh1 {font-size: 16px;}
        .myP {display: none}
        .myLink:hover h1 {font-size: 17px;}
    }
    .topnav .w3-bar a[href^="/bootstrap/index.html"] {
        background-color: #4CAF50 !important;
    }
</style>

<?php include '../include/topmenu.php'; ?>

<!--CONTENT-->
<div class='w3-sidebar w3-collapse' id='sidenav'>
  <div id='leftmenuinner'>
    <div class='w3-light-grey' id='leftmenuinnerinner'>
      <br><br>
    </div>
  </div>
</div>
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='w3-row w3-white'>
    <div class='w3-col l10 m12' id='main'>
      <div id='mainLeaderboard' style='overflow:hidden;'>
        </div>
      </div>
    </div>
  </div>

<div class='split left'>
  <div class='centered'>
    <a href='index.php' class='myLink'>
      <div style='display:inline-block'>
        <span class='mySpan shadow-black-2'>B3</span>
        <h1 class='myh1 shadow-black-2'>Выучить Bootstrap 3 &raquo;</h1>
      </div>
    </a>
    <p class='myP shadow-black-1'>Bootstrap - это бесплатный <strong>CSS-фреймворк</strong>. Bootstrap 3 является наиболее стабильной версией Bootstrap,
        и она всё ещё поддерживается групрой для критических исправлений и изменений в документации.</p>
  </div>
</div>

<div class='split right'>
  <div class='centered'>
    <a href='../bootstrap4/index.php' class='myLink'>
      <div style='display:inline-block'>
        <span class='mySpan shadow-black-2'>B4</span>
        <h1 class='myh1 shadow-black-2'>Выучить Bootstrap 4 &raquo;</h1>
      </div>
    </a>
    <p class='myP shadow-black-1'>Bootstrap 4 - более новая версия Bootstrap; с новыми компонентами, более быстрой таблицей стилей и большей адаптивностью. Однако Internet Explorer 9 и ниже не поддерживается.</p>
      <p><b>Примечание.</b> По состоянию на декабрь 2020 года вышла новая версия <a href="https://getbootstrap.com/" target="_blank" rel="nofollow"><strong>Bootstrap 5</strong></a>.</p>
  </div>
</div>
<div id='right'>
</div>
<script src='../lib/w3schools_footer.js'></script>
<!--[if lt IE 9]>
<script src='../cdn/html5shiv/3.7.3/html5shiv.js'></script>
<script src='../cdn/respond/1.4.2/respond.min.js'></script>
<![endif]-->
</body>
</html>