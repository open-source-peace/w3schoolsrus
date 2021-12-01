<?php include '../include/head.php'; ?>

<title>CSS Стилизация изображений. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Стилизация изображений. Округлые, миниатюрные, адаптивные, прозрачные изображения. Текст на изображении. Применение фильтров. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .scale {width: 92%; height: 600px;}
        a.thumba {width:150px;transition:0.3s;display:inline-block;border:1px solid #ddd;border-radius:4px;padding:5px;}
        a.thumba:hover {box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);}
        div.polaroid {width: 92%;background-color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-bottom: 25px;}
        .flipimg:hover { -webkit-transform: scaleX(-1); transform: scaleX(-1);}
        img.cardimg {width: 100%;}
        div.container {text-align: center;padding: 10px 20px;}
        @media only screen and (max-width: 601px) {.scale {width: 100%;height: auto;}
            div.polaroid {width: 100%;}
        }
        @media only screen and (min-width: 1260px) {
            .scale {height: 520px;}
        }
        div.img2 {border: 1px solid #ccc;}
        div.img2:hover {border: 1px solid #777;}
        div.img2 img {width: 100%;height: auto;}
        div.desc {padding: 15px;text-align: center;}
        * {box-sizing: border-box;}
        .responsive {padding: 0 6px;float: left;width: 24.99999%;}
        @media only screen and (max-width: 700px){.responsive {width: 49.99999%;margin: 6px 0;}
        }
        @media only screen and (max-width: 500px){.responsive {width: 100%;}
        }
        .clearfix:after {content: "";display: table;clear: both;}
        div.img {margin: 5px;padding: 5px;height: auto;width: auto;float: left;}
        div.img img {display: inline;margin: 5px;width: 350px;}
        div.desc {text-align: center;font-weight: normal;width: auto;margin: 5px;}
        @media screen and (max-width: 1449px) {div.img img {width:300px;margin:5px 0;}
        }
        @media screen and (max-width: 1165px) {div.img img {width:250px;margin:5px 0;}
        }
        @media screen and (max-width: 1055px) {div.img img {width:200px;}
        }
        @media screen and (max-width: 990px) {div.img img {width:400px;}
        }
        @media screen and (max-width: 975px) {div.img img {width:300px;}
        }
        @media screen and (max-width: 775px) {div.img img {width:250px;}
        }
        @media screen and (max-width: 675px) {div.img {margin:5px 0;}
            div.img img {width:500px;margin:5px 0;}
        }
        img.filter_gray {-webkit-filter: grayscale(100%); /* Chrome, Safari, Opera */ filter: grayscale(100%);}
        img.filter_grayscale2 {-webkit-filter: grayscale(50%); /* Chrome, Safari, Opera */filter: grayscale(50%);}
        div.imgmod img {width: 30%;height: auto;border-radius:5px;cursor: pointer;transition: .3s;}
        div.imgmod img:hover {opacity: 0.7;}
        /* The Modal (background) */
        .modal {display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 4; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }
        /* Modal Content */
        .modal-content {margin: auto;display: block;width: 80%;max-width: 700px;}
        /* Caption of Modal Image */
        #caption {margin: auto;display: block;width: 80%;max-width: 700px;text-align: center;color: #ccc;padding: 10px 0;height: 150px;}
        /* Add Animation */
        .modal-content, #caption {-webkit-animation-name: zoom;-webkit-animation-duration: 0.6s;animation-name: zoom;animation-duration: 0.6s;}
        @-webkit-keyframes zoom {from {-webkit-transform:scale(0)}
            to {-webkit-transform:scale(1)}
        }
        @keyframes zoom {from {transform:scale(0.1)}
            to {transform:scale(1)}
        }
        /* The Close Button */
        .close {position: absolute;top: 15px;right: 35px;color: #f1f1f1;font-size: 40px;font-weight: bold;transition: 0.3s;}
        .close:hover,.close:focus {color: #bbb;text-decoration: none;cursor: pointer;}
        .containeropac {position: relative;}
        .imageopac {opacity: 1;display: block;height: auto;transition: .5s ease;backface-visibility: hidden;}
        .middleopac {backface-visibility: hidden;transition: .5s ease;opacity: 0;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%)}
        .containeropac:hover .imageopac {opacity: 0.3;}
        .containeropac:hover .middleopac {opacity: 1;}
        .textopac {backface-visibility: hidden;background-color: #4CAF50;color: white;font-size: 16px;padding: 16px 32px;}
        .containerfade {position: relative;}
        .imagefade {
            display: block;
            width: 100%;
            height: auto;
        }
        .overlayfade {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: #008CBA;
        }

        .containerfade:hover .overlayfade {
            opacity: 1;
        }

        .textfade {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }

        .containerslidetop {
            position: relative;
        }

        .imageslidetop {
            display: block;
            width: 100%;
            height: auto;
        }
        .overlayslidetop {
            position: absolute;
            bottom: 100%;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height:0;
            transition: .5s ease;
        }
        .containerslidetop:hover .overlayslidetop {
            bottom: 0;
            height: 100%;
        }
        .textslidetop {
            white-space: nowrap;
            color: white;
            font-size: 20px;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }
        .containerslidebottom {
            position: relative;
        }
        .imageslidebottom  {
            display: block;
            width: 100%;
            height: auto;
        }
        .overlayslidebottom  {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }

        .containerslidebottom:hover .overlayslidebottom {
            height: 100%;
        }

        .textslidebottom {
            white-space: nowrap;
            color: white;
            font-size: 20px;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }
        .containerslideleft {
            position: relative;
        }

        .imageslideleft {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlayslideleft {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 0;
            height: 100%;
            transition: .5s ease;
        }

        .containerslideleft:hover .overlayslideleft {
            width: 100%;
        }

        .textslideleft {
            white-space: nowrap;
            color: white;
            font-size: 20px;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }
        .containerslideright {
            position: relative;
        }

        .imageslideright {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlayslideright {
            position: absolute;
            bottom: 0;
            left: 100%;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 0;
            height: 100%;
            transition: .5s ease;
        }

        .containerslideright:hover .overlayslideright {
            width: 100%;
            left: 0;
        }

        .textslideright {
            white-space: nowrap;
            color: white;
            font-size: 20px;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }

    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Стилизация изображений</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_tooltip.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_image_reflection.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, как стилизовать изображения с помощью CSS.</p>
    <hr>
    <h2>Округлые изображения</h2>
    <p>Используйте свойство <code class="w3-codespan">border-radius</code> для создания округленных изображений:</p><br>
    <div class="row">
        <div class="w3-half">
            <img src="../images/paris.jpg" alt="Paris" style="width:85%;margin-bottom:10px;border-radius:8px;max-width:400px;">
            <div class="w3-example" style="width:90%;">
                <h3>Пример</h3>
                <p>Округленное изображение:</p>
                <div class="w3-code notranslate cssHigh">
                    img {<br>&nbsp;&nbsp;border-radius: 8px;<br>}</div>
                <a target="_blank" href="../csstryit/trycss_ex_images_round.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
            </div>
        </div>
        <div class="w3-half">
            <img src="../images/paris.jpg" alt="Paris" style="width:85%;margin-bottom:10px;border-radius:50%;max-width:400px;">
            <div class="w3-example" style="width:90%;">
                <h3>Пример</h3>
                <p>Овальное изображение:</p>
                <div class="w3-code notranslate cssHigh">
                    img {<br>&nbsp; border-radius: 50%;<br>}</div>
                <a target="_blank" href="../csstryit/trycss_ex_images_circle.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
            </div>
        </div>
    </div>
    <hr style="clear:both;">

    <h2>Миниатюрные изображения</h2>
    <p>Используйте свойство <code class="w3-codespan">border</code> для создания уменьшенных изображений.</p>

    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-container w3-half">
            <p>Миниатюрное изображение:</p>
            <img src="../images/paris.jpg" alt="Paris" style="width:150px;border:1px solid #ddd;border-radius:4px;padding:5px;">
            <div class="w3-example">
                <h3>Пример</h3>
                <div class="w3-code notranslate htmlHigh cssHigh" style="height:210px;white-space: nowrap;overflow:auto;">
                    img {<br>&nbsp;&nbsp;border: 1px solid #ddd;<br>&nbsp;&nbsp;border-radius: 4px;<br>&nbsp;&nbsp;padding: 5px;<br>&nbsp;&nbsp;width: 150px;<br>}<br><br>
                    &lt;img src="../images/paris.jpg"
                    alt="Paris"&gt;</div>
                <a target="_blank" href="../csstryit/trycss_ex_images_thumbnail.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
            </div>
        </div>
        <div class="w3-container w3-half">
            <p>Миниатюрное изображение как ссылка:</p>
            <a class="thumba" target="_blank" href="../images/paris.jpg">
                <img src="../images/paris.jpg" alt="Миниатюрное изображение" style="width:100%;">
            </a>
            <div class="w3-example">
                <h3>Пример</h3>
                <div class="w3-code notranslate htmlHigh cssHigh" style="white-space: nowrap;height:210px;overflow:auto;">
                    img {<br>&nbsp; border: 1px solid #ddd;<br>&nbsp;&nbsp;border-radius: 4px;<br>&nbsp; padding: 5px;<br>&nbsp;&nbsp;width: 150px;<br>}<br><br>img:hover {<br>
                    &nbsp; box-shadow: 0 0
                    2px 1px rgba(0, 140, 186, 0.5);<br>}<br><br>
                    &lt;a href=&quot;paris.jpg&quot;&gt;<br>&nbsp; &lt;img src=&quot;paris.jpg&quot; alt=&quot;Paris&quot;&gt;<br>&lt;/a&gt;</div>
                <a target="_blank" href="../csstryit/trycss_ex_images_thumbnail_link.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
            </div>
        </div>
    </div>
    <hr>

    <h2>Адаптивные изображения</h2>
    <p>Адаптивные изображения автоматически подстраиваются под размер экрана.</p>
    <p>Измените размер окна браузера, чтобы увидеть эффект:</p>
    <img src="../images/img_5terre_wide.jpg" alt="Cinque Terre" style="max-width:100%;height:auto;">

    <p>Если вы хотите, чтобы изображение уменьшалось, но оно не должно быть больше исходного размера, добавьте следующее:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; max-width: 100%;<br>&nbsp; height:
            auto;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_ex_images_responsive.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p><strong>Совет:</strong> Узнайте больше об адаптивном веб-дизайне в <a href="css_rwd_intro.php">CSS RWD Учебнике</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>

    <h2>Центрировать изображение</h2>
    <p>Чтобы центрировать изображение, установите для левого и правого поля значение <code class="w3-codespan">auto</code> и добавьте его в элемент <code class="w3-codespan">block</code>:</p>

    <img src="../images/paris.jpg" alt="Центрирование изображения" style="width:45%;display:block;margin:0 auto">

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp;&nbsp;display: block;<br>
            &nbsp; margin-left: auto;<br>&nbsp; margin-right: auto;<br>
            &nbsp;
            width: 50%;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_ex_images_center.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Polaroid изображения / Карточки</h2>
    <div class="w3-row">
        <div class="w3-half">
            <div class="polaroid" style="max-width:400px;">
                <img class="cardimg" src="../images/img_5terre_css.jpg" alt="Cinque Terre" style="width: 400px; height: 280px">
                <div class="container">
                    <p>Cinque Terre</p>
                </div>
            </div>
        </div>
        <div class="w3-half">
            <div class="polaroid" style="max-width:400px;">
                <img class="cardimg" src="../images/lights600x400.jpg" alt="Норвегия" style="width: 400px; height: 280px">
                <div class="container">
                    <p>Северное сияние</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div.polaroid {<br>&nbsp; width: 80%;<br>&nbsp;&nbsp;background-color: white;<br>&nbsp; box-shadow: 0 4px 8px 0 rgba(0,
            0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);<br>}<br><br>img {width: 100%}<br>
            <br>div.container {<br>&nbsp; text-align: center;<br>&nbsp;&nbsp;padding: 10px 20px;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_ex_images_card.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Прозрачное изображение</h2>
    <p>Свойство <code class="w3-codespan">opacity</code> может принимать значение от 0,0 до 1,0. Чем ниже значение, тем прозрачнее:</p>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third w3-center">
            <img src="../images/img_forest.jpg" alt="Лес" style="width:100%;opacity:0.2;">
            <p>opacity 0.2</p>
        </div>

        <div class="w3-third w3-center">
            <img src="../images/img_forest.jpg" alt="Лес" style="width:100%;opacity:0.5">
            <p>opacity 0.5</p>
        </div>

        <div class="w3-third w3-center">
            <img src="../images/img_forest.jpg" alt="Лес" style="width:100%;">
            <p>opacity 1<br>(по умолчанию)</p>
        </div>

    </div>
    <p><strong>Примечание:</strong> IE8 и более ранние версии используют <code class="w3-codespan">filter:alpha(opacity=x)</code>. Значение x может принимать значение от 0 до 100. Более низкое значение делает элемент более прозрачным.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; opacity: 0.5;<br>&nbsp; filter:
            alpha(opacity=50); /* Для IE8 и более ранних версий */<br>}</div>
        <a target="_blank" href="../csstryit/trycss_image_opacity.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Текст на изображении</h2>
    <p>Как разместить текст на изображении:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate">
            <div style="position:relative;text-align:center;">
                <img src="../images/img_5terre_wide.jpg" alt="Cingue Terre" style="width:100%;height:auto;opacity:0.3">
                <div style="position:absolute;bottom:8px;left:16px;font-size:18px">Внизу слева</div>
                <div style="position:absolute;top:8px;left:16px;font-size:18px">Вверху слева</div>
                <div style="position:absolute;top:8px;right:16px;font-size:18px">Вверху справа</div>
                <div style="position:absolute;bottom:8px;right:16px;font-size:18px">Внизу справа</div>
                <div style="position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);font-size:18px">В центре</div>
            </div>
        </div>
        <p>Попробуйте сами:</p>
        <a target="_blank" href="../csstryit/trycss_image_text_top_left.html" class="w3-btn w3-margin-bottom">Вверху слева &raquo;</a>
        <a target="_blank" href="../csstryit/trycss_image_text_top_right.html" class="w3-btn w3-margin-bottom">Вверху справа &raquo;</a>
        <a target="_blank" href="../csstryit/trycss_image_text_bottom_left.html" class="w3-btn w3-margin-bottom">Внизу слева &raquo;</a>
        <a target="_blank" href="../csstryit/trycss_image_text_bottom_right.html" class="w3-btn w3-margin-bottom">Внизу справа &raquo;</a>
        <a target="_blank" href="../csstryit/trycss_image_text_center2.html" class="w3-btn w3-margin-bottom">В центре &raquo;</a>
    </div>
    <hr>

    <h2>Фильтры изображений</h2>
    <p>CSS свойство <code class="w3-codespan">filter</code> добавляет визуальные эффекты (такие как размытие и насыщенность) к элементу.</p>
    <p><strong>Примечание:</strong> Свойство filter не поддерживается в Internet Explorer, Edge 12 или Safari 5.1 и более ранних версиях.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Изменить цвет всех изображений на черно-белый (100% серый):</p>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp;&nbsp;-webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */<br>&nbsp;&nbsp;filter: grayscale(100%);<br>}</div>
        <div class="w3-padding w3-white notranslate">
            <iframe src="../csstryit/trycss_ex_images_filters_ifr.html" style="width:100%;border:none;height:600px;"></iframe>
        </div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../csstryit/trycss_ex_images_filters.html">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Совет:</strong> Перейдите в наш <a href="../cssref/css3_pr_filter.php">CSS filter Справочник</a>, чтобы узнать больше о CSS-фильтрах.</p>
    <hr>

    <h2>Наложение при наведении на изображение</h2>
    <p>Создать эффект наложения при наведении:</p>

    <div class="w3-row-padding" style="margin:-8px -16px">

        <div class="w3-third">
            <div class="w3-example">
                <h3>Пример</h3>
                <p>Исчезновение за текстом:</p>

                <div class="containerfade">
                    <img src="../images/img_avatar3.png" alt="Avatar" class="imagefade">
                    <div class="overlayfade">
                        <div class="textfade">Hello World</div>
                    </div>
                </div>

                <a target="_blank" href="../csstryit/trycss_css_image_overlay_fade.html" class="w3-btn w3-margin-top w3-margin-bottom">
                    Попробуйте сами &raquo;</a>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-example">
                <h3>Пример</h3>
                <p>Исчезновение за блоком:</p>

                <div class="containeropac">
                    <img src="../images/img_avatar3.png" alt="Avatar" class="imageopac" style="width:100%">
                    <div class="middleopac">
                        <div class="textopac">John</div>
                    </div>
                </div>

                <a target="_blank" href="../csstryit/trycss_css_image_overlay_opacity.html" class="w3-btn w3-margin-top w3-margin-bottom">
                    Попробуйте сами &raquo;</a>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-example">
                <h3>Пример</h3>
                <p>Вставка (сверху):</p>

                <div class="containerslidetop">
                    <img src="../images/img_avatar3.png" alt="Avatar" class="imageslidetop">
                    <div class="overlayslidetop">
                        <div class="textslidetop">Hello World</div>
                    </div>
                </div>
                <a target="_blank" href="../csstryit/trycss_css_image_overlay_slidetop.html" class="w3-btn w3-margin-top w3-margin-bottom">
                    Попробуйте сами &raquo;</a>
            </div>
        </div>

    </div>

    <div class="w3-row-padding" style="margin:-8px -16px">

        <div class="w3-third">
            <div class="w3-example">
                <h3>Пример</h3>
                <p>Вставка (снизу):</p>

                <div class="containerslidebottom">
                    <img src="../images/img_avatar3.png" alt="Avatar" class="imageslidebottom">
                    <div class="overlayslidebottom">
                        <div class="textslidebottom">Hello World</div>
                    </div>
                </div>

                <a target="_blank" href="../csstryit/trycss_css_image_overlay_slidebottom.html" class="w3-btn w3-margin-top w3-margin-bottom">
                    Попробуйте сами &raquo;</a>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-example">
                <h3>Пример</h3>
                <p>Вставка (слева):</p>
                <div class="containerslideleft">
                    <img src="../images/img_avatar3.png" alt="Avatar" class="imageslideleft">
                    <div class="overlayslideleft">
                        <div class="textslideleft">Hello World</div>
                    </div>
                </div>
                <a target="_blank" href="../csstryit/trycss_css_image_overlay_slideleft.html" class="w3-btn w3-margin-top w3-margin-bottom">
                    Попробуйте сами &raquo;</a>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-example">
                <h3>Пример</h3>
                <p>Вставка (справа):</p>
                <div class="containerslideright">
                    <img src="../images/img_avatar3.png" alt="Avatar" class="imageslideright">
                    <div class="overlayslideright">
                        <div class="textslideright">Hello World</div>
                    </div>
                </div>
                <a target="_blank" href="../csstryit/trycss_css_image_overlay_slideright.html" class="w3-btn w3-margin-top w3-margin-bottom">
                    Попробуйте сами &raquo;</a>
            </div>
        </div>

    </div>
    <hr>

    <h2>Отразить изображение</h2>
    <p>Наведите указатель мыши на изображение:</p>
    <img src="../images/paris.jpg" class="flipimg" alt="Paris" style="width:40%;min-width:300px;">
    <hr>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img:hover {<br>&nbsp; -webkit-transform: scaleX(-1);<br>&nbsp;
            transform: scaleX(-1);<br>}</div>
        <a target="_blank" href="../csstryit/trycss_image_flip.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Адаптивная галерея изображений</h2>

    <p>CSS можно использовать для создания галерей изображений. В этом примере используются медиа-запросы для переупорядочения изображений на экранах разных размеров. Измените размер окна браузера, чтобы увидеть эффект:</p>
    <div class="responsive">
        <div class="img2">
            <a target="_blank" href="../images/img_5terre.jpg">
                <img src="../images/img_5terre_css.jpg" alt="Cinque Terre" width="300" height="200">
            </a>
            <div class="desc">Добавьте сюда описание изображения</div>
        </div>
    </div>

    <div class="responsive">
        <div class="img2">
            <a target="_blank" href="../images/img_forest.jpg">
                <img src="../images/img_forest.jpg" alt="Forest" width="300" height="200">
            </a>
            <div class="desc">Добавьте сюда описание изображения</div>
        </div>
    </div>

    <div class="responsive">
        <div class="img2">
            <a target="_blank" href="../images/img_lights.jpg">
                <img src="../images/img_lights.jpg" alt="Northern Lights" width="300" height="200">
            </a>
            <div class="desc">Добавьте сюда описание изображения</div>
        </div>
    </div>

    <div class="responsive">
        <div class="img2">
            <a target="_blank" href="../images/img_mountains.jpg">
                <img src="../images/img_mountains.jpg" alt="Mountains" width="300" height="200">
            </a>
            <div class="desc">Добавьте сюда описание изображения</div>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .responsive {<br>&nbsp;
            padding: 0 6px;<br>&nbsp;&nbsp;float: left;<br>&nbsp;&nbsp;width: 24.99999%;<br>}<br><br>@media only screen and
            (max-width: 700px){<br>&nbsp;&nbsp;.responsive {<br>&nbsp;&nbsp;&nbsp;
            width: 49.99999%;<br>&nbsp;&nbsp;&nbsp;&nbsp;margin: 6px
            0;<br>&nbsp;&nbsp;}<br>}<br><br>@media only screen and (max-width: 500px){<br>&nbsp;&nbsp;.responsive {<br>&nbsp;&nbsp;&nbsp;&nbsp;width: 100%;<br>
            &nbsp;&nbsp;}<br>}</div>
        <a target="_blank" href="../csstryit/trycss_image_gallery_responsive.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Совет:</strong> Узнайте больше об адаптивном веб-дизайне в <a href="css_rwd_intro.php">CSS RWD Учебнике</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>

    <h2>Модальное изображение (дополнительно)</h2>
    <p>Это пример, демонстрирующий, как CSS и JavaScript могут работать вместе.</p>
    <p>Во-первых, используйте CSS, чтобы создать модальное окно (диалоговое окно), и скрыть его по умолчанию.</p>
    <p>Затем используйте JavaScript, чтобы показать модальное окно и отобразить изображение внутри модального окна, когда пользователь нажимает на изображение:</p>
    <div class="imgmod">
        <img id="eh" src="../images/img_lights.jpg" alt="Северное сияние, Норвегия" style="width: 300px; height: 200px">
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Получить модальное окно<br>var modal = document.getElementById('myModal');<br><br>// Получите изображение и вставьте его в модальное окно - используйте его текст &quot;alt&quot; как подпись<br>var img =
            document.getElementById('myImg');<br>var modalImg = document.getElementById(&quot;img01&quot;);<br>
            var captionText = document.getElementById(&quot;caption&quot;);<br>img.onclick =
            function(){<br>&nbsp; modal.style.display = &quot;block&quot;;<br>&nbsp;&nbsp;modalImg.src = this.src;<br>&nbsp;&nbsp;captionText.innerHTML = this.alt;<br>}<br><br>
            // Получить элемент &lt;span&gt; чтобы закрыть модальное окно<br>var span =
            document.getElementsByClassName(&quot;close&quot;)[0];<br><br>// Когда пользователь нажимает на &lt;span&gt; (x), закрывается модальное окно<br>span.onclick = function() { <br>&nbsp; modal.style.display = &quot;none&quot;;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_image_modal_js.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <!-- Модальное окно -->
    <div id="myModal2" class="modal">
        <span class="close" onclick="document.getElementById('myModal2').style.display='none'">&times;</span>
        <img class="modal-content" id="img01" alt="Модальное окно">
        <div id="caption"></div>
    </div>
    <script>
        // Получить модальное окно
        var modal = document.getElementById('myModal2');
        var images = document.getElementById('eh');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        images.onclick = function(){
            modal.style.display = "block";
            modalImg.src = images.src;
            modalImg.alt = images.alt;
            captionText.innerHTML = images.alt;
        }
    </script>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_tooltip.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_image_reflection.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>