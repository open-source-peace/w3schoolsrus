<?php include '../include/head.php'; ?>
    <title>Учебник по кибербезопасности. Викторина. Тесты. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='Викторина. Пройти тесты и сдать экзамен. Учебник по кибербезопасности. <?php include '../include/description.php'; ?>'>
    <link rel='stylesheet' href='../styles/bigbtn.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cybersecurity.php'; ?>
<?php include '../include/before_content_cybersecurity.php'; ?>

<article>
    <h1>Кибербезопасность. <span class="color_h1">Викторина</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="cybersecurity_incident_response.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="cybersecurity_exercises.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Вы можете проверить свои навыки кибербезопасности с помощью викторины от W3Schools.</p>
    <hr>

    <h2>Тест</h2>
    <p>Тест состоит из 25 вопросов без ограничения по времени.</p>
    <p>Тест не является официальным, это просто хороший способ узнать, насколько вы знаете или не знаете о кибербезопасности.</p>
    <h2>Подсчитайте свой результат</h2>
    <p>Вы получите 1 балл за каждый правильный ответ. В конце викторины будет отображен ваш общий балл. Максимальное количество - 25 баллов.</p>
    <div class="ws-grey w3-round w3-padding w3-margin-top">
        <h2>Старт викторины</h2>
        <p>Удачи!</p>
        <p><a href='../quiztest/quiztest_cybersecurity_01.php' class="w3-btn w3-blue w3-round shadow-black-1" style="margin-top:10px;padding:17px;font-size:17px">Начать викторину по кибербезопасности &#10095;</a></p>
    </div>
    <div class="w3-note w3-panel">
        <p>Если вы ещё не знакомы с кибербезопасностью, мы рекомендуем вам прочитать <a href="index.php">Учебник по кибербезопасности</a> с нуля на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
  <?php include '../include/footer_cert.php'; ?>
<!--
    <style>

        #w3_cert_badge {
            position: absolute;
            right: 5%;
            width: 220px;
            transform: rotate(10deg);
            bottom: -20%;
        }

        #w3_cert_arrow {
            position: absolute;
            right: 220px;
            width: 220px;
            transform: rotate(10deg);
            bottom: 0;
            z-index: 1;
        }

        #getdiploma {
            position: relative;
            padding: 0 60px 50px 60px;
            margin-bottom: 125px;
            border-radius: 16px;
            background-color: #282A35;
            color: #FFC0C7;
            font-family: 'Source Sans Pro', sans-serif;
        }

        #getdiploma h2 {
            font-size:50px;
            margin-top: 1em;
            margin-bottom: 1em;
            font-family: 'Source Sans Pro', sans-serif
        }

        #getdiploma p {
            font-size: 42px;
            margin-top: 1em;
            margin-bottom: 1em;
            font-family: 'Source Sans Pro', sans-serif
        }

        #getdiploma a {
            border-radius: 50px;
            mxargin-top: 50px;
            font-size: 18px;
            background-color: #04AA6D;
            padding: 17px 55px
        }

        #getdiploma a:hover,
        #getdiploma a:active {
            background-color: #059862 !important;
        }


        @media screen and (max-width: 1442px) {
            #w3_cert_arrow {
                right: 212px;
                bottom: -15px;
            }
        }


        @media screen and (max-width: 1202px) {
            #w3_cert_arrow {
                display: none;
            }
        }

        @media screen and (max-width: 992px) {
            #w3_cert_arrow {
                display: block;
            }
        }


        @media screen and (max-width: 800px) {
            #w3_cert_arrow {
                display: none;
            }
            #getdiploma h2 {
                font-size: 44px;
            }
            #getdiploma p {
                font-size: 30px;
            }

            #getdiploma a {
                width: 100%;
            }
            #w3_cert_badge {
                top: -16px;
                right: -8px;
                width: 100px;
            }
            #getdiploma  {
                margin-bottom: 55px;
            }
        }
    </style>
    <div class="w3-panel" id="getdiploma">

        <h2>Начните свою карьеру</h2>
        <p>Получите сертификат, пройдя <span id="hey"></span> <span id="coursetopic"></span> курс</p>
        <script>
            var foldername;
            function getCourseFolder() {
                var pathname = window.location.pathname;
                if (pathname.substr(0,1) == "/") {pathname = pathname.substr(1);}
                pos = pathname.indexOf("/");
                foldername = pathname.substr(0, pos);
                foldername = foldername.toUpperCase();
                if (foldername == "JS") foldername = "JavaScript";
                if (foldername == "QUIZTEST")
                    if (foldername == "QUIZTEST") {
                        document.getElementById("hey").innerText = "a";
                    }
                if (foldername == "QUIZTEST") foldername = "";
                if (foldername == "CS") foldername = "C#";
                if (foldername == "CYBERSECURITY") foldername = "Cyber Security";
                if (foldername == "CPP") foldername = "C++";
                document.getElementById("coursetopic").innerText = foldername;
            }
            getCourseFolder();
        </script>
        <a class="w3-btn w3-margin-bottom" href="https://courses.w3schools.com/" target="_blank"  onclick="ga('send', 'event', 'Courses' , 'Кликните на ' + foldername + ' баннер курса в учебнике');">Получить сертификат</a>
        <svg id="w3_cert_arrow" viewBox="0 0 170 143" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.7747 42.7064C9.7747 42.7064 19.5575 77.2951 44.4558 84.8113C62.0225 90.1142 81.0061 80.1196 77.791 68.3309C76.0904 62.0955 69.0574 62.4735 65.5106 65.8444C59.1003 71.9368 67.8591 89.7423 77.9205 96.1324C112.816 118.295 161.943 84.5867 161.943 84.5867" stroke="white" stroke-width="2" stroke-linecap="round"/>
            <path d="M159.804 93.8429L162.704 84.4917L152.715 80.8293" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <svg id="w3_cert_badge" data-name="w3_cert_badge" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><defs><style>.cls-1{fill:#04aa6b;}.cls-2{font-size:23px;}.cls-2,.cls-3,.cls-4{fill:#fff;}.cls-2,.cls-3{font-family:RobotoMono-Medium, Roboto Mono;font-weight:500;}.cls-3{font-size:20.08px;}</style></defs><circle class="cls-1" cx="150" cy="150" r="146.47" transform="translate(-62.13 150) rotate(-45)"/><text class="cls-2" transform="translate(93.54 63.89) rotate(-29.5)">w</text><text class="cls-2" transform="translate(107.13 56.35) rotate(-20.8)">3</text><text class="cls-2" transform="matrix(0.98, -0.21, 0.21, 0.98, 121.68, 50.97)">s</text><text class="cls-2" transform="translate(136.89 47.84) rotate(-3.47)">c</text><text class="cls-2" transform="translate(152.39 47.03) rotate(5.12)">h</text><text class="cls-2" transform="translate(167.85 48.54) rotate(13.72)">o</text><text class="cls-2" transform="translate(182.89 52.35) rotate(22.34)">o</text><text class="cls-2" transform="matrix(0.86, 0.52, -0.52, 0.86, 197.18, 58.36)">l</text><text class="cls-2" transform="matrix(0.77, 0.64, -0.64, 0.77, 210.4, 66.46)">s</text><text class="cls-3" transform="translate(35.51 186.66) rotate(69.37)"> </text><text class="cls-3" transform="matrix(0.47, 0.88, -0.88, 0.47, 41.27, 201.28)">C</text><text class="cls-3" transform="matrix(0.58, 0.81, -0.81, 0.58, 48.91, 215.03)">E</text><text class="cls-3" transform="matrix(0.67, 0.74, -0.74, 0.67, 58.13, 227.36)">R</text><text class="cls-3" transform="translate(69.16 238.92) rotate(39.44)">T</text><text class="cls-3" transform="matrix(0.85, 0.53, -0.53, 0.85, 81.47, 248.73)">I</text><text class="cls-3" transform="translate(94.94 256.83) rotate(24.36)">F</text><text class="cls-3" transform="translate(109.34 263.09) rotate(16.83)">I</text><text class="cls-3" transform="translate(124.46 267.41) rotate(9.34)">E</text><text class="cls-3" transform="translate(139.99 269.73) rotate(1.88)">D</text><text class="cls-3" transform="translate(155.7 270.01) rotate(-5.58)"> </text><text class="cls-3" transform="translate(171.32 268.24) rotate(-13.06)"> </text><text class="cls-2" transform="translate(187.55 266.81) rotate(-21.04)">.</text><text class="cls-3" transform="translate(203.27 257.7) rotate(-29.24)"> </text><text class="cls-3" transform="translate(216.84 249.83) rotate(-36.75)"> </text><text class="cls-3" transform="translate(229.26 240.26) rotate(-44.15)">2</text><text class="cls-3" transform="translate(240.39 229.13) rotate(-51.62)">0</text><text class="cls-3" transform="translate(249.97 216.63) rotate(-59.17)">2</text><text class="cls-3" transform="matrix(0.4, -0.92, 0.92, 0.4, 257.81, 203.04)">1</text><path class="cls-4" d="M196.64,136.31s3.53,3.8,8.5,3.8c3.9,0,6.75-2.37,6.75-5.59,0-4-3.64-5.81-8-5.81h-2.59l-1.53-3.48,6.86-8.13a34.07,34.07,0,0,1,2.7-2.85s-1.11,0-3.33,0H194.79v-5.86H217.7v4.28l-9.19,10.61c5.18.74,10.24,4.43,10.24,10.92s-4.85,12.3-13.19,12.3a17.36,17.36,0,0,1-12.41-5Z"/><path class="cls-4" d="M152,144.24l30.24,53.86,14.94-26.61L168.6,120.63H135.36l-13.78,24.53-13.77-24.53H77.93l43.5,77.46.15-.28.16.28Z"/></svg>
    </div>
    -->
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="cybersecurity_incident_response.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="cybersecurity_exercises.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>