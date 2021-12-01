<?php include '../include/head.php'; ?>

  <title>CSS Панель навигации. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Панель навигации. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<style>
        ul.horizontal {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        ul.horizontal li {
            float: left;
        }

        ul.horizontal li a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.horizontal li a:hover:not(.active) {
            background-color: #000;
        }

        ul.horizontal li a.active {
            background-color:#4CAF50;
        }

        ul.horizontal2 {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            border: 1px solid #e7e7e7;
            background-color: #f3f3f3;
        }

        ul.horizontal2 li {
            float: left;
        }

        ul.horizontal2 li a {
            display: inline-block;
            color: #666;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.horizontal2 li a:hover:not(.active) {
            background-color: #ddd;
        }

        ul.horizontal2 a.active {
            color: white;
            background-color: #4CAF50;
        }
        .width94 {
            width:94%;
        }
        @media screen and (max-width: 600px) {
            .width94 {
                width:100%;
            }
        }

        ul.vertical {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
        }

        ul.vertical li a {
            display: block;
            color: #000;
            padding: 8px 0 8px 16px;
            text-decoration: none;
        }

        ul.vertical li a:hover:not(.active) {
            background-color: #555;
            color:white;
        }

        ul.vertical a.active {
            background-color: #4CAF50;
            color:white;
        }

        ul.gray {
            border: 1px solid #e7e7e7;
            background-color: #f3f3f3;
        }

        ul.gray li a {
            display: block;
            color: #666;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.gray li a:hover:not(.active) {
            background-color: #ddd;
        }

        ul.gray li a.active {
            color: white;
            background-color: #008CBA;
        }
        .rightli {
            float:right;
        }

        @media screen and (max-width: 408px) {
            .rightli {
                display:none;
            }
        }

        ul.ex {
            width:90%;
        }
        @media screen and (max-width: 600px) {
            ul.ex {
                width:100%;
            }
        }

        ul.divider li {
            float: left;
            border-right:1px solid #bbb;
        }

        ul.divider li:last-child {
            border-right: none;
        }
        ul.border {
            border: 1px solid #555;
        }

        ul.border li a {
            padding: 8px 16px;
        }

        ul.border li {
            text-align: center;
            border-bottom: 1px solid #555;
        }

        ul.border li:last-child {
            border-bottom: none;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Панель навигации (навбар)</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_image_transparency.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_navbar_vertical.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Демо: Панели навигации</h2>

    <div class="w3-row">
        <div class="w3-col m4">
            <p>Вертикальная</p>
            <ul class="vertical ex">
                <li><a class="active" href="javascript:void(0)">Главная</a></li>
                <li><a href="javascript:void(0)">Новости</a></li>
                <li><a href="javascript:void(0)">Контакты</a></li>
                <li><a href="javascript:void(0)">Про нас</a></li>
            </ul>
        </div>

        <div class="w3-col m8">
            <p>Горизонтальная</p>

            <ul class="horizontal">
                <li><a class="active" href="javascript:void(0)">Главная</a></li>
                <li><a href="javascript:void(0)">Новости</a></li>
                <li><a href="javascript:void(0)">Контакты</a></li>
                <li class="rightli" style="float:right"><a href="javascript:void(0)">Про нас</a></li>
            </ul>
            <br>
            <ul class="horizontal gray">
                <li><a href="javascript:void(0)">Главная</a></li>
                <li><a href="javascript:void(0)">Новости</a></li>
                <li><a class="active" href="javascript:void(0)">Контакты</a></li>
                <li class="rightli" style="float:right"><a href="javascript:void(0)">Про нас</a></li>
            </ul>

        </div>
    </div>
    <hr>

    <h2>Панели навигации</h2>
    <p>Удобная навигация важна для любого веб-сайта.</p>
    <p>С помощью CSS вы можете превратить скучные HTML-меню в красивые панели навигации.</p>
    <hr>

    <h2>Навигационная панель = Список ссылок</h2>
    <p>Панель навигации требует стандартного HTML в качестве основы.</p>
    <p>В наших примерах мы построим панель навигации из стандартного списка HTML.</p>
    <p>Панель навигации - это в основном список ссылок, поэтому использование элементов <code class="w3-codespan">&lt;ul&gt;</code> и <code class="w3-codespan">&lt;li&gt;</code> имеет смысл:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul&gt;<br>
            &nbsp;
            &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Главная&lt;/a&gt;&lt;/li&gt;<br>
            &nbsp;
            &lt;li&gt;&lt;a href=&quot;news.html&quot;&gt;Новости&lt;/a&gt;&lt;/li&gt;<br>
            &nbsp;
            &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;Контакты&lt;/a&gt;&lt;/li&gt;<br>
            &nbsp;
            &lt;li&gt;&lt;a href=&quot;about.html&quot;&gt;Про нас&lt;/a&gt;&lt;/li&gt;<br>
            &lt;/ul&gt;
        </div><a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_basic_html.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Теперь давайте удалим маркеры, поля и отступы из списка:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ul
            {<br>
            &nbsp;&nbsp;list-style-type: none;<br>
            &nbsp;
            margin: 0;<br>
            &nbsp;
            padding: 0;<br>
            }
        </div><a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_basic_css.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Объяснение примера:</p>
    <ul>
        <li><code class="w3-codespan">list-style-type: none;</code> - удаляет маркеры. Панель навигации не требует маркеров списка</li>
        <li>Установите <code class="w3-codespan">margin: 0;</code> и <code class="w3-codespan">padding: 0;</code> чтобы удалить настройки браузера по умолчанию.</li>
    </ul>
    <p>Код в приведенном выше примере - это стандартный код, используемый как в вертикальной, так и в горизонтальной панели навигации, о которых вы узнаете больше в следующих главах учебника на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_image_transparency.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_navbar_vertical.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>