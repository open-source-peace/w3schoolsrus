<?php include '../include/head.php'; ?>

  <title>HTML Адаптивный веб-дизайн. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML. Адаптивность веб-страниц. Адаптивный веб-дизайн. Как сделать адаптивный веб-сайт? Responsive Web Design. Учебник для новичков. <?php include '../include/description.php'; ?>'>
  <style>
      img.viewport {border:10px solid #f1f1f1;border-radius:3px;}
  </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML <span class='color_h1'>Адаптивный веб-дизайн</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_layout.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_computercode_elements.php'>Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-padding w3-padding-16 w3-light-grey">
      <img src="../images/img_temp_band.jpg" style="width:100%" alt="Адаптивный веб-сайт">
    </div>
    <h2>Что такое адаптивный веб-дизайн?</h2>
    <p><strong>Адаптивный веб-дизайн</strong> - это использование HTML и CSS для автоматического изменения размера, скрытия, сжатия или увеличения веб-сайта, чтобы он хорошо выглядел на всех устройствах (настольных компьютерах, планшетах и телефонах):</p>

    <p>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitffe9.html?filename=tryhtml_responsive_page" target="_blank">Попробуйте сами &raquo;</a>
    </p>
    <div class="w3-panel w3-note">
      <p><strong>Примечание:</strong> Веб-страница должна хорошо выглядеть на <strong>любых устройствах</strong>!</p>
    </div>
    <hr>
    <h2>Настройка области просмотра (viewport)</h2>
    <p>При создании адаптивных веб-страниц добавьте следующий элемент <code class='w3-codespan'>&lt;meta&gt;</code> на все свои веб-страницы:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryita50d.html?filename=tryhtml_responsive_viewport" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Это установит область просмотра вашей страницы, которая даст браузеру инструкции о том, как управлять размерами и масштабированием страницы.</p>
    <p>Ниже приведен пример веб-страницы <em>без</em> метатега viewport и той же веб-страницы <em>из</em> метатегом viewport:</p>
    <div class="w3-row" style="text-align:center;">
      <div class="w3-half w3-margin-bottom">
        Без метатега viewport:<br>
        <a target="_blank" href="example_withoutviewport.html"><img src="../images/img_viewport1.png" alt="Без метатега viewport" class="w3-hover-shadow viewport"></a>
      </div>
      <div class="w3-half">
        Из метатегом viewport:<br>
        <a target="_blank" href="example_withviewport.html"><img src="../images/img_viewport2.png" alt="Из метатегом viewport" class="w3-hover-shadow viewport"></a>
      </div>
    </div>
    <div class="w3-note w3-panel">
      <p><strong>Совет:</strong> Если вы просматриваете эту страницу на телефоне или планшете, вы можете нажать на две ссылки выше, чтобы увидеть разницу.</p>
    </div>
    <hr>

    <h2>Адаптивные изображения</h2>
    <p><strong>Адаптивные изображения</strong> - это изображения, которые хорошо масштабируются под любой размер браузера.</p>
    <h3>Использование свойства width (ширина)</h3>
    <p>Если CSS свойство <code class='w3-codespan'>width</code> установлено на 100%, изображение будет адаптивным и масштабируется (растягивается) вверх и вниз:</p>
    <img src="../images/img_girl.jpg" style="width:100%;height:auto;" alt="Девушка">

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;img src=&quot;img_girl.jpg&quot; <strong>style=&quot;width:100%;&quot;</strong>&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit6552.html?filename=tryhtml_responsive_image" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Обратите внимание, что в приведенном выше примере изображение можно увеличить до размера, превышающего его исходный размер. Во многих случаях лучшим решением будет использование свойства <code class='w3-codespan'>max-width</code> (максимальная ширина).</p>
    <hr>
    <h3>Использование свойства max-width</h3>
    <p>Если свойство <code class='w3-codespan'>max-width</code> установлено на 100%, изображение будет уменьшаться, если это необходимо, но никогда не будет увеличиваться до размера, превышающего его исходный размер:</p>
    <img src="../images/img_girl.jpg" style="max-width:100%;height:auto;" alt="Девушка">

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;img src=&quot;img_girl.jpg&quot; style=&quot;<strong>max-width:100%;</strong>height:auto;&quot;&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit470b.html?filename=tryhtml_responsive_image_maxwidth" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h3>Показывать разные изображения в зависимости от ширины браузера</h3>
    <p>HTML элемент <code class='w3-codespan'>&lt;picture&gt;</code> позволяет определять разные изображения для разных размеров окна браузера.</p>
    <p>Измените размер окна браузера, чтобы увидеть, как изображение ниже меняется в зависимости от ширины:</p>
    <picture>
      <source srcset="../images/img_smallflower.jpg" media="(max-width: 600px)">
      <source srcset="../images/img_flowers.jpg" media="(max-width: 1500px)">
      <source srcset="../images/flowers.jpg">
      <img src="../images/img_smallflower.jpg" alt="Цветы">
    </picture>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;picture&gt;<br>&nbsp; &lt;source srcset=&quot;img_smallflower.jpg&quot; media=&quot;(max-width:
        600px)&quot;&gt;<br>&nbsp; &lt;source srcset=&quot;img_flowers.jpg&quot; media=&quot;(max-width:
        1500px)&quot;&gt;<br>&nbsp; &lt;source srcset=&quot;flowers.jpg&quot;&gt;<br>&nbsp; &lt;img src=&quot;img_smallflower.jpg&quot;
        alt=&quot;Цветы&quot;&gt;<br>&lt;/picture&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit6c8b.html?filename=tryhtml_responsive_picture" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Адаптивный размер текста</h2>
    <p>Размер текста может быть установлен с помощью &quot;vw&quot; единицы, что означает &quot;viewport width&quot; (ширина области просмотра).</p>
    <p>Таким образом, размер текста будет соответствовать размеру окна браузера:</p>

    <div class="w3-light-grey w3-padding w3-round">
      <h1 style="font-size:8vw;">Hello World</h1>
      <p style="font-size:2vw;">Измените размер окна браузера, чтобы увидеть, как масштабируется размер текста.</p>
    </div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;h1 style="<strong>font-size:10vw</strong>"&gt;Hello World&lt;/h1&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit5770.html?filename=tryhtml_responsive_text" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note w3-panel">
      <p>Окно просмотра - это размер окна браузера. 1vw = 1% ширины области просмотра. Если ширина окна составляет 50 см, 1vw - 0.5 см.</p>
    </div>
    <hr>

    <h2>Медиа запросы</h2>
    <p>Помимо изменения размера текста и изображений, на адаптивных веб-страницах также часто используются медиазапросы.</p>
    <p>С помощью медиазапросов вы можете определить совершенно разные стили для разных размеров браузера.</p>
    <p>Пример: измените размер окна браузера, чтобы увидеть, что три приведенных ниже элемента div будут отображаться горизонтально на больших экранах и располагаться вертикально на маленьких экранах:</p>
    <style>
        .menu {
            width:20%;
            float:left;
        }
        .main {
            width:60%;
            float:left;
        }
        .right {
            width:20%;
            float:left;
        }
        @media (max-width:800px) {
            .menu {
                width:100%;
            }
            .main {
                width:100%;
            }
            .right {
                width:100%;
            }
        }
    </style>
    <div class="w3-row">
      <div class="menu">
        <div class="w3-blue w3-padding">Left Menu<br><br><br></div>
      </div>
      <div class="main">
        <div class="w3-light-gray w3-padding">Main Content<br><br><br></div>
      </div>
      <div class="right">
        <div class="w3-green w3-padding">Right Content<br><br><br></div>
      </div>
    </div>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;style&gt;<br>.left, .right {<br>&nbsp; float: left;<br>&nbsp;
        width: 20%; /* Ширина 20%, по умолчанию */<br>}<br><br>.main {<br>&nbsp; float: left;<br>&nbsp; width: 60%; /* Ширина 60%, по умолчанию */<br>}<br><br>/* Используйте медиа-запрос, чтобы добавить точку перехода на 800px: */<br>@media screen and (max-width: 800px) {<br>&nbsp; .left,
        .main, .right {<br>&nbsp;&nbsp;&nbsp;
        width: 100%; /* Ширина составляет 100%, когда область просмотра составляет 800 пикселей или меньше */<br>&nbsp;}<br>}<br>&lt;/style&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit31e1.html?filename=tryhtml_responsive_media_query" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note w3-panel">
      <p><strong>Совет:</strong> Чтобы узнать больше о медиа-запросах и адаптивном веб-дизайне, прочитайте <a href="../css/css_rwd_intro.php">RWD Учебник</a> на этом сайте.</p>
    </div>

    <hr>
    <h2>Адаптивная веб-страница - Полный пример</h2>
    <p>Адаптивная веб-страница должна хорошо смотреться на больших экранах настольных компьютеров и на небольших мобильных телефонах.</p>

    <div>
      <div class="w3-col header" style="background-color:#e5e5e5
;margin-bottom:8px;height:60px;"></div>
      <div class="w3-row">
        <div class="w3-col s3" style="background-color:#e5e5e5
;height:170px;border-right:8px solid white;"></div>
        <div class="w3-col s6" style="background-color:#e5e5e5
;height:170px;border-right:8px solid white;"></div>
        <div class="w3-col s3" style="background-color:#e5e5e5
;height:170px;"></div>
      </div>
      <div class="w3-col footer" style="background-color:#e5e5e5
;margin-top:8px;height:31px;"></div>
    </div>


    <p>
      <a class="w3-btn w3-margin-top" href="../htmltryit/tryit9bb3.html?filename=tryhtml_responsive_media_query3" target="_blank">Попробуйте сами &raquo;</a>
    </p>
    <hr>

    <h2>Адаптивный веб-дизайн - фреймворки</h2>

    <p>Есть много CSS-фреймворков, которые предлагают адаптивный дизайн.</p>
    <p>Они бесплатны и просты в использовании.</p>

    <h2>Использование W3.CSS</h2>
    <p>
      Отличным способом создания адаптивного дизайна является использование адаптивной таблицы стилей, например <a href="../w3css/index.php">W3.CSS</a></p>
    <p><a href="../cdn/w3css/w3.css" target="_blank">W3.CSS</a> позволяет легко создавать сайты, которые выглядят красиво в любом размере; настольный компьютер, ноутбук, планшет или телефон:</p>

    <div class="w3-container w3-green">
      <h1>W3.CSS Демо</h1>
      <p>Измените размер страницы, чтобы увидеть адаптивность!</p>
    </div>

    <div class="w3-row-padding w3-light-grey">
      <div class="w3-third">
        <h2>London</h2>
        <p>London is the capital city of England.</p>
        <p>It is the most populous city in the United Kingdom,
          with a metropolitan area of over 13 million inhabitants.</p>
      </div>
      <div class="w3-third">
        <h2>Paris</h2>
        <p>Paris is the capital of France.</p>
        <p>The Paris area is one of the largest population centers in Europe,
          with more than 12 million inhabitants.</p>
      </div>
      <div class="w3-third">
        <h2>Tokyo</h2>
        <p>Tokyo is the capital of Japan.</p>
        <p>It is the center of the Greater Tokyo Area,
          and the most populous metropolitan area in the world.</p>
      </div>
    </div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;meta name=&quot;viewport&quot;
        content=&quot;width=device-width, initial-scale=1&quot;&gt;<br>&lt;link rel=&quot;stylesheet&quot;
        href=&quot;https://www.w3schools.com/w3css/4/w3.css&quot;&gt;<br>&lt;body&gt;<br><br>&lt;div
        class=&quot;w3-container w3-green&quot;&gt;<br>&nbsp; &lt;h1&gt;W3Schools Demo&lt;/h1&gt; <br>&nbsp;
        &lt;p&gt;Resize this responsive page!&lt;/p&gt; <br>&lt;/div&gt;<br><br>&lt;div
        class=&quot;w3-row-padding&quot;&gt;<br>&nbsp; &lt;div class=&quot;w3-third&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h2&gt;London&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;London is the capital city of England.&lt;/p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;It is the most populous city in the United Kingdom,<br>&nbsp;&nbsp;&nbsp; with a
        metropolitan area of over 13 million inhabitants.&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br><br>&nbsp; &lt;div
        class=&quot;w3-third&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h2&gt;Paris&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;Paris is
        the capital of France.&lt;/p&gt; <br>&nbsp;&nbsp;&nbsp; &lt;p&gt;The Paris area is one of the largest
        population centers in Europe,<br>&nbsp;&nbsp;&nbsp; with more than 12 million
        inhabitants.&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br><br>&nbsp; &lt;div class=&quot;w3-third&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;h2&gt;Tokyo&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;Tokyo is the capital of Japan.&lt;/p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;It
        is the center of the Greater Tokyo Area,<br>&nbsp;&nbsp;&nbsp; and the most populous
        metropolitan area in the world.&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>
        &lt;/html&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit69b9.html?filename=tryhtml_responsive_w3css" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Чтобы узнать больше о W3.CSS, прочитайте наш <a href="../w3css/index.php">W3.CSS Учебник</a>.</p>
    <hr>
    <h2>Bootstrap</h2>

    <p>Другой популярный фреймворк - Bootstrap, он использует HTML, CSS и jQuery для создания адаптивных веб-страниц.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>&lt;html lang=&quot;en&quot;&gt;<br>&lt;head&gt;<br>&lt;title&gt;Bootstrap
        Пример&lt;/title&gt;<br>&lt;meta charset=&quot;utf-8&quot;&gt;<br>&lt;meta name=&quot;viewport&quot;
        content=&quot;width=device-width, initial-scale=1&quot;&gt;<br>&lt;link rel=&quot;stylesheet&quot;
        href=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css&quot;&gt;<br>
        &lt;script
        src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js&quot;&gt;&lt;/script&gt;<br>
        &lt;script
        src=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js&quot;&gt;&lt;/script&gt;<br>
        &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div class=&quot;container&quot;&gt;<br>&nbsp; &lt;div
        class=&quot;jumbotron&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h1&gt;Моя первая Bootstrap страница&lt;/h1&gt;<br>&nbsp;
        &lt;/div&gt;<br>&nbsp; &lt;div class=&quot;row&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div
        class=&quot;col-sm-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ...<br>&nbsp;&nbsp;&nbsp;
        &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        ...<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div
        class=&quot;col-sm-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp; ...<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;
        &lt;/div&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
      <a target="_blank" href="../htmltryit/tryitdbaf.html?filename=tryhtml_responsive_bootstrap" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Чтобы узнать больше о Bootstrap, перейдите на <a href="../bootstrap4/index.php">Bootstrap Учебник</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_layout.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_computercode_elements.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>