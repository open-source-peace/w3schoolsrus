<?php include '../include/head_cinema.php'; ?>

<style>
    .w3-third .bigbtn {
        border:1px solid #e3e3e3;
        background-color:#F1F1F1;
        color:#555;
        margin-bottom:16px;
        width:100%;
        padding:20px 0;
        text-align: center;
        vertical-align: middle;
        display: inline-block;
        text-decoration:none !important;
    }
    .bigbtn:hover, .bigbtn2:hover {
        background-color: #555;
        color: #ffffff !important;
        border: 1px solid #555;
    }
    @media screen and (max-width: 992px){
        .bigbtn {
            display: block;
            width: 100%;
        }
    }
</style>
<title>Онлайн кинотеатр - W3Schools на русском</title>
<meta name='description' content='Видеоуроки W3Schools на русском. Смотреть фильмы онлайн'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cinema.php'; ?>
<?php include '../include/before_content_cinema.php'; ?>

<article>
    <h1 class="w3-center">Онлайн кинотеатр<br>
        от сайта "W3Schools на русском"</h1>
    <hr>
    <p class="intro w3-center"><strong>Здесь вы можете посмотреть онлайн подборку фильмов от админа сайта "W3Schools на русском".
            Для поиска фильмов на сайте воспользуйтесь меню в левом сайдбаре (меню бургер для мобильных устройств),
            либо с помощью строки поиска, введя название интересующего вас фильма.</strong></p>
    <hr>
        <div style="max-width:1000px;margin:auto;">
            <div class="w3-row-padding" style="margin-left:-16px;margin-right:-16px">
                <div class="w3-third">
                    <a class="bigbtn" href="documentary.php">Документальные</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="american.php">Американские</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="european.php">Европейские</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="asian.php">Азиатские</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="soviet.php">Советские</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="russian.php">Российские</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="ukrainian.php">Украинские</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="soviet_cartoons.php">Советские мультфильмы</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="russian_cartoons.php">Российские мультфильмы</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="ukrainian_cartoons.php">Украинские мультфильмы</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="american_cartoons.php">Американские мультфильмы</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="video_lessons.php">Видеоуроки</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="informative_video.php">Познавательное видео</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="humor.php">Юмор</a>
                </div>
                <div class="w3-third">
                    <a class="bigbtn" href="miscellanea.php">Разное</a>
                </div>
            </div>
        </div>

</article>

</div>
<?php include '../include/rightbar_cinema.php'; ?>
<?php include '../include/footer.php'; ?>
