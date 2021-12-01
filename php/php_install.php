<?php include '../include/head.php'; ?>
<title>PHP Установка. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Установка. Как подключить PHP? Что такое сервер? Как работает PHP? Скачать локальный сервер OpenServer быстро и бесплатно. Создание сайта на PHP. <?php include '../include/description.php'; ?>'>
<style>
        .editor-container {display: -ms-flexbox;display:flex;justify-content: space-between;margin-top:-16px;margin-bottom:-8px;}
        .editor-container .editor-child {width:49.6%;float:left;}
        .editor-container .editor-edit {margin-right:5px;}
        .editor-container .editor-view {color:white;font-family:Arial !important;text-align:center;background:black;  margin:16px 0;margin-left:5px;padding:20px;}
        @media only screen and (max-width: 768px) {.editor-container {margin-bottom:0;display:block;}
            .editor-container .editor-child {margin:0;width:100%;}
            .editor-container .editor-view {margin-bottom:8px;}
        }
        .mq {border:1px solid #ddd;}
        @media only screen and (max-width: 600px) {}
        .mq {border:none!important;}
        .fa-home:before {content: '\e800'; }
        .fa-save:before {content: '\e804'; }
        .fa-bars:before {content: '\f0c9'; }
        .fa-rotate:before {content: '\e813'; }
        .fa-menu:before { content: '\f0c9'; }
        .w3-hover-none {cursor:default;}
        .containerm {position: relative;}
        .middlem {opacity: 0;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);-ms-transform:translate(-50%, -50%); text-align: center;}
        .containerm:hover .middlem {opacity: 1;}
        .trytopnav {background-color: #f1f1f1;}
        body.darktheme .trytopnav {background-color: #616161;color: #dddddd;}
        .trytopnav a.w3-bar-item {color:#999999!important;}
        body.darktheme .trytopnav a.w3-bar-item {color: #dddddd!important;}
        .w3-border {border: 1px solid #ccc!important;}
        .editor-brown {color: brown;}
        .editor-blue {color: mediumblue}
        body.darktheme .w3-border {border: 1px solid #616161!important;}
        .darktheme .htmlHigh {color: #88c999;}
        .darktheme .editor-brown {color: #ff9999}
        .darktheme .editor-blue {color: #88c999;}
        .darktheme .editor-white {color: white;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Установка</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_intro.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_syntax.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Что мне нужно?</h2>
    <p>Чтобы начать использовать PHP, вы можете:</p>
    <ul>
        <li>Найти веб-хостинг с поддержкой PHP и MySQL</li>
        <li>Установить локальный веб-сервер на свой ПК, а затем установить PHP и MySQL.</li>
    </ul>
    <hr>

    <h2>Используйте веб-хостинг с поддержкой PHP</h2>
    <p>Если на вашем сервере активирована поддержка PHP, вам не нужно ничего делать.</p>
    <p>Просто создайте несколько файлов <code class="w3-codespan">.php</code>, поместите их в свой веб-каталог и сервер автоматически проанализирует их для вас.</p>
    <p>Вам не нужно ничего компилировать или устанавливать дополнительные инструменты.</p>
    <p>Поскольку PHP бесплатный, большинство веб-хостов предлагают поддержку PHP.</p>
    <hr>

    <h2>Настройте PHP на своём ПК</h2>
    <p>Однако, если ваш сервер не поддерживает PHP, вы должны:</p>
    <ul>
        <li>установить веб-сервер</li>
        <li>установить PHP</li>
        <li>установить базу данных, такую как MySQL</li>
    </ul>
    <p>Официальный PHP веб-сайт (PHP.net) имеет инструкции по установке PHP:
        <a href="https://www.php.net/manual/ru/install.php" target="_blank" rel="nofollow">https://www.php.net/manual/ru/install.php</a></p>
    <hr>

    <h2>PHP Онлайн компилятор / Редактор</h2>
    <p>С помощью онлайн-компилятора PHP от w3schools вы можете редактировать PHP-код и просматривать результат в своем браузере.</p>
    <br class="w3-hide-large w3-hide-medium">
    <div class="mq">
        <div id="editorEl" class="trytopnav" style="background-color:#f1f1f1;margin-left:-16px;margin-right:-16px;">
            <div class="w3-bar w3-hide-small" style="overflow:hidden;">
                <a href="javascript:void(0);" class="w3-button w3-bar-item topnav-icons fa fa-home w3-hover-none" style="font-size:28px!important;margin-right:4px;margin-bottom:-4px;"></a>
                <a href="javascript:void(0);" class="w3-button w3-bar-item topnav-icons fa fa-bars w3-hover-none" style="font-size:28px!important;margin-right:4px;margin-bottom:-4px;"></a>
                <a href="javascript:void(0);" class="w3-button w3-bar-item topnav-icons fa fa-rotate w3-hover-none" style="font-size:28px!important;margin-right:4px;margin-bottom:-4px;"></a>
                <a href="javascript:void(0);" class="w3-button w3-bar-item topnav-icons fa fa-adjust w3-hover-none" style="font-size:28px!important;margin-bottom:-4px;"></a>
                <a href="../phptryit/tryphp_compiler.html" class="w3-button w3-bar-item w3-green w3-hover-green" style="color:white!important;padding:16px 17px;margin-left:4px;margin-bottom:-4px;margin-top:-2px" target="_blank">Выполнить &raquo;</a>
            </div>
            <div class="editor-container w3-container">
                <div class="editor-child editor-edit">
                    <h3 class="w3-hide-large w3-hide-medium">Пример</h3>
                    <div  class="xw3-white notranslate htmlHigh w3-code " style="border-left:none;padding:20px 16px">
                        &lt;?php<br>
                        $txt = "PHP";<br>
                        echo "I love <span style="color:white!important;">$txt!</span>";<br>
                        ?&gt;
                    </div>
                </div>

                <div id="editorEdit" class="w3-container editor-child editor-view w3-border w3-left-align" style="padding:20px 16px;">
                    <code>I love PHP!</code><br>
                </div>
            </div>
            <a class="w3-btn" style="margin-left:16px;margin-top:8px;margin-bottom:16px" href="tryphp_compiler.html" target="_blank">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <p>Кликните на кнопку &quot;Попробуйте сами&quot;, чтобы увидеть, как она работает.</p>
    <hr>

    <h2>Локальные веб-серверы</h2>
    <p>Существует много различных локальных веб-серверов, которые имеют необходимый набор инструментов для веб-разработчиков. Наиболее популярными локальными веб-серверами на просторах русскоязычного Интернета являются Денвер, OpenServer, XAMPP, MAMP, WampServer и др.</p>
    <hr>
    <h3>Денвер</h3>
    <p>Джентльменский набор Web-разработчика («Д.н.w.р», читается "Денвер") — проект Дмитрия Котерова, локальный сервер (Apache, PHP, MySQL, Perl и т.д.) и программная оболочка, используемые Web-разработчиками для разработки сайтов на «домашней» (локальной) Windows-машине без необходимости выхода в Интернет. Главная особенность Денвера — удобство при удаленной работе сразу над несколькими независимыми проектами и возможность размещения на Flash-накопителе.</p>
    <p>На данный момент проект "Денвер" считается устаревшим и доступна для скачивания только старая 3-я версия, которая содержит: Apache 2.2.22 + SSL, PHP 5.3.13 + XDebug, MySQL 5.5, PHPMyAdmin 3.5.</p>
    <p>Денвер подходит для веб-проектов, которые используют PHP 5. <strong>Обратите внимание, что PHP 7 в "Денвере" нет!!!</strong> А значит, что для сайтов, которые разрабатываются на PHP 7, "Денвер" не подходит!</p>
    <p>Скачать локальный веб-сервер "Денвер" можно с официального сайта <a href="http://www.denwer.ru/" target="_blank" rel="nofollow">www.denwer.ru</a> (требуется ввод вашего email), либо <a href="https://drive.google.com/open?id=1XvFTMAL1rQsaptAdre6OckZJ07anf13w" target="_blank" rel="nofollow">Скачать Денвер с Google-диска</a> (без email).</p>
    <hr>
    <h3>OpenServer</h3>
    <p>Наиболее популярным в рунете и максимально функциональным локальным сервером для ПК является <strong>OpenServer</strong>.</p>
    <p><strong>Open Server Panel</strong> — это портативная серверная платформа и программная среда, созданная специально для веб-разработчиков с учётом их рекомендаций и пожеланий.</p>
    <p>Программный комплекс имеет богатый набор серверного программного обеспечения, удобный, многофункциональный продуманный интерфейс, обладает мощными возможностями по администрированию и настройке компонентов. Платформа широко используется с целью разработки, отладки и тестирования веб-проектов, а так же для предоставления веб-сервисов в локальных сетях.</p>
    <p>Удобство и простота управления, многоязычный интерфейс (в т.ч. русский и украинский языки), наличие в комплекте последних версий необходимых инструментов для веб-разработчика! За время своего существования Open Server зарекомендовал себя как первоклассный и надёжный инструмент, которым предпочитают пользоваться как начинающие веб-разработчики, так и профессионалы.</p>
    <p>Существует три версии OpenServer: Basic (только базовые модули), Premium (+дополнительные модули), Ultimate (+набор программ для веб-разработчика).</p>
    <p>Для обычного использования OpenServer начинающими веб-разработчиками достаточно версии Basic. Она наиболее компактна (при распаковке - около 5Gb) и имеет только то, что необходимо. Основной недостаток самой полной версии Ultimate - большой объём (при распаковке - 9,34Gb).</p>
    <p>Ознакомиться со всеми дополнениями, а также скачать последнюю актуальную версию OpenServer можно с официального сайта проекта (РЕКОМЕНДУЕТСЯ): <a href="https://ospanel.io/" target="_blank" rel="nofollow">ospanel.io</a>. К сожалению, скорость бесплатного скачивания с официального сайта ограничена. <strong>Скачать OpenServer</strong> более быстро, абсолютно <strong>бесплатно и без регистрации</strong> можно с
        <a href="https://drive.google.com/drive/u/0/folders/14muz0KCaJeyJBBqArkh1inCiLYyY5y2g" target="_blank" title="Скачать OpenServer (все версии на выбор)">Google-диска (все версии)</a>:</p>
    <ul>
        <li><a href="https://drive.google.com/open?id=1Q8L6LfOe6-GrBmVU7I5mnLOgjiSo3SS0" target="_blank" rel="nofollow">Скачать OpenServer_5.3.5_Basic</a></li>
        <li><a href="https://drive.google.com/open?id=1Q9hQ7was2ai_UctuBGWVSQW7zS2Fcj00" target="_blank" rel="nofollow">Скачать OpenServer_5.3.5_Premium</a></li>
        <li><a href="https://drive.google.com/open?id=1HuqeLbgwfk_abyaobP3JWFjtRZcMDM9B" target="_blank" rel="nofollow">Скачать OpenServer_5.3.5_Ultimate</a></li>
    </ul>
    <p>Более <span style="color:red">новые версии</span> локального сервера OpenServer также доступны для скачивания с Google-диска:</p>
    <ul>
        <li><a href="https://drive.google.com/file/d/1U3Av9p3KJCyqOwJLwXxQ6lFy1Tutu3G_/view?usp=sharing" target="_blank" rel="nofollow">Скачать OpenServer_5.3.7_Basic</a> - Базовая версия</li>
        <li><a href="https://drive.google.com/file/d/1QXFleLecdVLYBnKCxldKa8Z_5NV-OVzy/view?usp=sharing" target="_blank" rel="nofollow">Скачать OpenServer_5.3.7_Full</a> - Полная версия - 834Mb</li>
        <li><a href="https://drive.google.com/file/d/1vEJYw3S27TSNIbDhT4KBNww5-QkqM61m/view?usp=sharing" target="_blank" rel="nofollow">Скачать OpenServer_5.3.8</a> - Версия с возможностью выбора компонентов - 1.03Gb</li>
        <li><a href="https://drive.google.com/file/d/1Fu636Vi2gkS6QVrkfbGiSz2ZMvHIH893/view?usp=sharing" target="_blank" rel="nofollow">Скачать OpenServer_5.3.9</a> - Версия с возможностью выбора компонентов - 1.1Gb</li>
        <li><a href="https://drive.google.com/file/d/1UOkzcN12WbvB9T-eaej8-1O4juxaijAF/view?usp=sharing" target="_blank" rel="nofollow">Скачать OpenServer_5.4.0</a> - Самая новая версия с возможностью выбора компонентов - 820Mb (<span style="color:red">РЕКОМЕНДУЕТСЯ!!!</span>)</li>
    </ul>

    <hr>
    <h3>XAMPP</h3>
    <p><strong>XAMPP</strong> - простой в установке дистрибутив Apache, содержащий MariaDB, PHP и Perl. Просто скачайте и запустите программу установки. Это действительно так просто.</p>
    <p>Скачать XAMPP можно бесплатно с официального сайта: <a href="https://www.apachefriends.org/ru/download.html" target="_blank" rel="nofollow">www.apachefriends.org</a>.</p>
    <hr>
    <h3>MAMP</h3>
    <p><strong>MAMP</strong> - это бесплатный локальный сервер, который можно установить под macOS и Windows всего несколькими щелчками мыши. MAMP предоставляет все инструменты, необходимые для запуска сайта на WordPress на настольном ПК, например, для тестирования или разработки. Не имеет значения, предпочитаете ли вы Apache или Nginx или хотите работать с PHP, Python, Perl или Ruby.</p>
    <p>Скачать локальный сервер MAMP можно с официального сайта: <a href="https://www.mamp.info/en/" target="_blank" rel="nofollow">www.mamp.info</a>.</p>
    <hr>
    <h3>WampServer</h3>
    <p><strong>WampServer</strong> - это платформа для веб-разработки под Windows для динамических веб-приложений с помощью сервера Apache2, интерпретатора скриптов PHP и базы данных MySQL. В него также входит веб-приложение PHPMyAdmin для наиболее простой обработки баз данных.</p>
    <p>Скачать актуальную версию WampServer можно с официального сайта: <a href="http://www.wampserver.com/ru/" target="_blank" rel="nofollow">www.wampserver.com</a></p>
    <hr>
    <h3>Uniform Server</h3>
    <p><strong>Uniform Server</strong> - это бесплатное легкое WAMP-решение для Windows. Модульная конструкция размером менее 24 МБ включает в себя последние версии Apache2, Perl5, PHP (переключение между PHP 5.3, PHP 5.4, PHP 5.5 или PHP 5.6), MySQL5 или MariaDB5, phpMyAdmin или Adminer4. Не требуется установка! Не оставляет мусора в реестре! Просто распакуйте архив и запустите!</p>
    <p>Скачать Uniform Server можно с официального сайта: <a href="https://www.uniformserver.com/" target="_blank" rel="nofollow">www.uniformserver.com</a>.</p>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_intro.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_syntax.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>