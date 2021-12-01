<?php include '../include/head_howto.php'; ?>
<title>Как сделать Галерею слайдшоу? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать галерею слайдшоу на сайте с помощью HTML, CSS, JavaScript? Слайдшоу изображений на сайте. Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_slideshow_gallery.html' rel='canonical'>
    <style>
        .slgrow:after {content: "";display: table;clear: both;}
        .slgcolumn {float: left;width: 16.66%;}
        .slgmySlides {display: none;}
        .cursor {cursor: pointer}
        .slgcontainer {position:relative;}
        /* Next & prev кнопки */
        .slgprev,.slgnext {cursor: pointer;position: absolute;top: 40%;width: auto;padding: 16px;margin-top: -50px;color: white;font-weight: bold;
            font-size: 20px;border-radius: 0 3px 3px 0;user-select: none;-webkit-user-select: none;}
        /* Позиция "next кнопки" справа */
        .slgnext {right: 0;border-radius: 3px 0 0 3px;}
        /* При наведении добавьте черный цвет фона с небольшой прозрачностью */
        .slgprev:hover,.slgnext:hover {background-color: rgba(0, 0, 0, 0.8);}
        /* Числовой текст (1/3 и т.д.) */
        .slgnumbertext {color: #f2f2f2;font-size: 12px;padding: 8px 12px;position: absolute;top: 0;}
        .slgcaption-container {text-align: center;background-color: #222;padding: 2px 16px;color: white;}
        .slgdemo {opacity: 0.6;}
        .slgactive,.slgdemo:hover {opacity: 1;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Галерея слайд-шоу</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_slideshow.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_modal_images.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать адаптивную галерею слайд-шоу</strong> с помощью CSS и JavaScript.</p>
    <hr>
    <h2>Галерея слайд-шоу</h2>
    <p>Слайд-шоу используется для циклического просмотра элементов:</p>

    <div style="max-width:1000px;min-width:250px;position:relative;margin:auto;">
        <div class="slgcontainer">
            <div class="slgmySlides">
                <div class="slgnumbertext">1 / 6</div>
                <img src="../images/img_woods_wide.jpg" alt="Галерея слайдшоу" style="width:100%;margin-bottom:-6px">
            </div>

            <div class="slgmySlides">
                <div class="slgnumbertext">2 / 6</div>
                <img src="../images/img_5terre_wide.jpg" alt="Галерея слайдшоу" style="width:100%;margin-bottom:-6px">
            </div>

            <div class="slgmySlides">
                <div class="slgnumbertext">3 / 6</div>
                <img src="../images/img_mountains_wide.jpg" alt="Галерея слайдшоу" style="width:100%;margin-bottom:-6px">
            </div>

            <div class="slgmySlides">
                <div class="slgnumbertext">4 / 6</div>
                <img src="../images/img_lights_wide.jpg" alt="Галерея слайдшоу" style="width:100%;margin-bottom:-6px">
            </div>

            <div class="slgmySlides">
                <div class="slgnumbertext">5 / 6</div>
                <img src="../images/img_nature_wide.jpg" alt="Галерея слайдшоу" style="width:100%;margin-bottom:-6px">
            </div>

            <div class="slgmySlides">
                <div class="slgnumbertext">6 / 6</div>
                <img src="../images/img_snow_wide.jpg" alt="Галерея слайдшоу" style="width:100%;margin-bottom:-6px">
            </div>

            <a class="slgprev w3-text-white" onclick="plusSlides(-1)">&#10094;</a>
            <a class="slgnext w3-text-white" onclick="plusSlides(1)">&#10095;</a>

            <div class="slgcaption-container"><p id="slgcaption"></p></div>

            <div class="slgrow">
                <div class="slgcolumn">
                    <img class="slgdemo cursor" src="../images/img_woods_howto.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                </div>
                <div class="slgcolumn">
                    <img class="slgdemo cursor" src="../images/img_5terre_howto.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                </div>
                <div class="slgcolumn">
                    <img class="slgdemo cursor" src="../images/img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                </div>
                <div class="slgcolumn">
                    <img class="slgdemo cursor" src="../images/img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                </div>
                <div class="slgcolumn">
                    <img class="slgdemo cursor" src="../images/img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                </div>
                <div class="slgcolumn" style="width:16.67%">
                    <img class="slgdemo cursor" src="../images/img_snow_howto.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                </div>
            </div>
        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }
            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("slgmySlides");
                var dots = document.getElementsByClassName("slgdemo");
                var captionText = document.getElementById("slgcaption");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" slgactive", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " slgactive";
                captionText.innerHTML = dots[slideIndex-1].alt;
            }
        </script>
        <p><a target="_blank" href="../howtotryit/tryhow_js_slideshow_gallery.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Создать галерею слайд-шоу</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Контейнер для галереи изображений --&gt;<br>&lt;div class=&quot;container&quot;&gt;<br>
            <br>&nbsp; &lt;!-- Полноразмерные изображения с числовым текстом --&gt;<br>&nbsp; &lt;div class=&quot;mySlides&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;div class=&quot;numbertext&quot;&gt;1 / 6&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img src=&quot;img_woods_wide.jpg&quot;
            style=&quot;width:100%&quot;&gt;<br>&nbsp; &lt;/div&gt;<br><br>&nbsp; &lt;div class=&quot;mySlides&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;div class=&quot;numbertext&quot;&gt;2 / 6&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img src=&quot;img_5terre_wide.jpg&quot;
            style=&quot;width:100%&quot;&gt;<br>&nbsp; &lt;/div&gt;<br><br>&nbsp; &lt;div class=&quot;mySlides&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;div class=&quot;numbertext&quot;&gt;3 / 6&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img src=&quot;img_mountains_wide.jpg&quot;
            style=&quot;width:100%&quot;&gt;<br>&nbsp; &lt;/div&gt;<br><br>&nbsp; &lt;div class=&quot;mySlides&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;div class=&quot;numbertext&quot;&gt;4 / 6&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img src=&quot;img_lights_wide.jpg&quot;
            style=&quot;width:100%&quot;&gt;<br>&nbsp; &lt;/div&gt;<br><br>&nbsp; &lt;div class=&quot;mySlides&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;div class=&quot;numbertext&quot;&gt;5 / 6&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img src=&quot;img_nature_wide.jpg&quot;
            style=&quot;width:100%&quot;&gt;<br>&nbsp; &lt;/div&gt;<br><br>&nbsp; &lt;div class=&quot;mySlides&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;div class=&quot;numbertext&quot;&gt;6 / 6&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img src=&quot;img_snow_wide.jpg&quot;
            style=&quot;width:100%&quot;&gt;<br>&nbsp; &lt;/div&gt;<br><br>&nbsp; &lt;!-- Next и prev кнопки --&gt;<br>&nbsp; &lt;a class=&quot;prev&quot; onclick=&quot;plusSlides(-1)&quot;&gt;&amp;#10094;&lt;/a&gt;<br>&nbsp;
            &lt;a class=&quot;next&quot; onclick=&quot;plusSlides(1)&quot;&gt;&amp;#10095;&lt;/a&gt;<br>
            <br>&nbsp; &lt;!-- Текст изображения --&gt;<br>&nbsp; &lt;div class=&quot;caption-container&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p id=&quot;caption&quot;&gt;&lt;/p&gt;<br>&nbsp;
            &lt;/div&gt;<br><br>&nbsp; &lt;!-- Эскизы изображений --&gt;<br>&nbsp; &lt;div class=&quot;row&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div
            class=&quot;column&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img class=&quot;demo cursor&quot; src=&quot;img_woods.jpg&quot;
            style=&quot;width:100%&quot; onclick=&quot;currentSlide(1)&quot; alt=&quot;The Woods&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div class=&quot;column&quot;&gt; <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &lt;img class=&quot;demo cursor&quot; src=&quot;img_5terre.jpg&quot; style=&quot;width:100%&quot; onclick=&quot;currentSlide(2)&quot;
            alt=&quot;Cinque Terre&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;div class=&quot;column&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img class=&quot;demo
            cursor&quot; src=&quot;img_mountains.jpg&quot; style=&quot;width:100%&quot; onclick=&quot;currentSlide(3)&quot;
            alt=&quot;Mountains and fjords&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;div class=&quot;column&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img class=&quot;demo
            cursor&quot; src=&quot;img_lights.jpg&quot; style=&quot;width:100%&quot; onclick=&quot;currentSlide(4)&quot;
            alt=&quot;Northern Lights&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div
            class=&quot;column&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img class=&quot;demo cursor&quot; src=&quot;img_nature.jpg&quot;
            style=&quot;width:100%&quot; onclick=&quot;currentSlide(5)&quot; alt=&quot;Nature and sunrise&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;/div&gt; <br>&nbsp;&nbsp;&nbsp; &lt;div class=&quot;column&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &lt;img class=&quot;demo cursor&quot; src=&quot;img_snow.jpg&quot; style=&quot;width:100%&quot; onclick=&quot;currentSlide(6)&quot;
            alt=&quot;Snowy Mountains&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h5>Шаг 2) Добавить CSS:</h5>
    <p>Стиль галереи изображений, кнопок "Далее" и "Назад", текста подписи и точек:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            * {<br>&nbsp; box-sizing: border-box;<br>}<br><br>/* Разместите контейнер изображения (необходимо разместить стрелки влево и вправо) */<br>.container {<br>&nbsp;
            position: relative;<br>}<br><br>/* Скрыть изображения по умолчанию */<br>.mySlides {<br>&nbsp;
            display: none;<br>}<br><br>/* Добавить указатель при наведении курсора на миниатюры изображений */<br>.cursor {<br>&nbsp; cursor: pointer;<br>}<br><br>/* Next &amp; prev
            кнопки */<br>.prev,<br>.next {<br>&nbsp; cursor: pointer;<br>&nbsp; position: absolute;<br>&nbsp; top: 40%;<br>&nbsp; width: auto;<br>&nbsp; padding: 16px;<br>&nbsp;
            margin-top: -50px;<br>&nbsp; color: white;<br>&nbsp; font-weight: bold;<br>&nbsp;
            font-size: 20px;<br>&nbsp; border-radius: 0 3px 3px 0;<br>&nbsp; user-select: none;<br>&nbsp; -webkit-user-select: none;<br>}<br><br>/* Разместите кнопку &quot;next&quot; справа */<br>.next {<br>&nbsp; right: 0;<br>&nbsp;
            border-radius: 3px 0 0 3px;<br>}<br><br>/* При наведении добавьте черный цвет фона с небольшой прозрачностью */<br>.prev:hover,<br>.next:hover {<br>&nbsp;
            background-color: rgba(0, 0, 0, 0.8);<br>}<br><br>/* Числовой текст (1/3 и т.д.) */<br>
            .numbertext {<br>&nbsp; color: #f2f2f2;<br>&nbsp; font-size: 12px;<br>&nbsp;
            padding: 8px 12px;<br>&nbsp; position: absolute;<br>&nbsp; top: 0;<br>}<br><br>/* Контейнер для текста изображения */<br>.caption-container {<br>&nbsp; text-align: center;<br>&nbsp;
            background-color: #222;<br>&nbsp; padding: 2px 16px;<br>&nbsp; color: white;<br>
            }<br><br>.row:after {<br>&nbsp; content: &quot;&quot;;<br>&nbsp; display: table;<br>&nbsp; clear: both;<br>}<br><br>/* Шесть столбцов друг возле друга */<br>.column {<br>&nbsp; float: left;<br>&nbsp; width: 16.66%;<br>}<br>
            <br>/* Добавить эффект прозрачности для миниатюрных изображений */<br>.demo {<br>&nbsp;
            opacity: 0.6;<br>}<br><br>.active,<br>.demo:hover {<br>&nbsp; opacity: 1;<br>}</div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var slideIndex = 1;<br>showSlides(slideIndex);<br><br>// Next/prev элементы управления <br>function plusSlides(n) {<br>&nbsp;
            showSlides(slideIndex += n);<br>}<br><br>// Элементы управления миниатюрным изображением<br>function currentSlide(n) {<br>&nbsp;
            showSlides(slideIndex = n);<br>}<br><br>function showSlides(n) {<br>&nbsp; var
            i;<br>&nbsp; var slides = document.getElementsByClassName(&quot;mySlides&quot;);<br>&nbsp;
            var dots = document.getElementsByClassName(&quot;demo&quot;);<br>&nbsp; var captionText
            = document.getElementById(&quot;caption&quot;);<br>&nbsp; if (n &gt; slides.length) {slideIndex
            = 1}<br>&nbsp; if (n &lt; 1) {slideIndex = slides.length}<br>&nbsp; for (i = 0; i
            &lt; slides.length; i++) {<br>&nbsp;&nbsp;&nbsp; slides[i].style.display =
            &quot;none&quot;;<br>&nbsp; }<br>&nbsp; for (i = 0; i &lt; dots.length; i++) {<br>&nbsp;&nbsp;&nbsp;
            dots[i].className = dots[i].className.replace(&quot; active&quot;, &quot;&quot;);<br>&nbsp; }<br>&nbsp;
            slides[slideIndex-1].style.display = &quot;block&quot;;<br>&nbsp; dots[slideIndex-1].className
            += &quot; active&quot;;<br>&nbsp; captionText.innerHTML = dots[slideIndex-1].alt;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_slideshow_gallery.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_slideshow.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_modal_images.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>