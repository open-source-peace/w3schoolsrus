<?php include '../include/head.php'; ?>

  <title>CSS Вертикальная панель навигации. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Вертикальный навбар. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
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
            width:100%;
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
    <h1>CSS <span class="color_h1">Вертикальная панель навигации</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_navbar.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_navbar_horizontal.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Вертикальный навбар</h2>
    <ul class="vertical ex">
        <li><a class="active" href="javascript:void(0)">Главная</a></li>
        <li><a href="javascript:void(0)">Новости</a></li>
        <li><a href="javascript:void(0)">Контакты</a></li>
        <li><a href="javascript:void(0)">Про нас</a></li>
    </ul>

    <p>Чтобы создать вертикальную панель навигации, можно задать стиль элемента <code class="w3-codespan">&lt;a&gt;</code> внутри списка, в дополнение к коду с предыдущей страницы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            li a
            {<br>
            &nbsp;
            display: block;<br>
            &nbsp;
            width: 60px;<br>
            }</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_vertical.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Объяснение примера:</p>
    <ul>
        <li><code class="w3-codespan">display: block;</code> - Отображение ссылок в виде блочных элементов делает доступной для клика всю область ссылок (а не только текст) и позволяет нам указать ширину (отступы, поля, высоту и т.д., если хотите)</li>
        <li><code class="w3-codespan">width: 60px;</code> - Блочные элементы занимают всю ширину, доступную по умолчанию. Мы хотим указать ширину 60 пикселей</li>
    </ul>

    <p>Вы также можете установить ширину <code class="w3-codespan">&lt;ul&gt;</code> и удалить ширину <code class="w3-codespan">&lt;a&gt;</code>, поскольку они будут занимать всю ширину, доступную при отображении как элементы блока. Результат будет тот же, что и в предыдущем примере:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ul
            {<br>
            &nbsp;
            list-style-type: none;<br>
            &nbsp;
            margin: 0;<br>
            &nbsp;
            padding: 0;<br>&nbsp; width: 60px;<br>
            }
            <br><br>li
            a
            {<br>
            &nbsp;
            display: block;<br>
            }</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_vertical2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Примеры вертикальной панели навигации</h2>

    <p>Создайте базовую вертикальную панель навигации с серым цветом фона и измените цвет фона ссылок, когда пользователь наводит на них указатель мыши:</p>
    <ul class="vertical">
        <li><a href="javascript:void(0)">Главная</a></li>
        <li><a href="javascript:void(0)">Новости</a></li>
        <li><a href="javascript:void(0)">Контакты</a></li>
        <li><a href="javascript:void(0)">Про нас</a></li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ul {<br>&nbsp; list-style-type: none;<br>&nbsp;
            margin: 0;<br>&nbsp; padding: 0;<br>&nbsp; width:
            200px;<br>&nbsp; background-color: #f1f1f1;<br>}<br><br>li a {<br>&nbsp; display:
            block;<br>&nbsp; color: #000;<br>&nbsp; padding: 8px 16px;<br>&nbsp; text-decoration: none;<br>}<br><br>/*
            Изменить цвет ссылки при наведении */<br>li a:hover {<br>&nbsp;
            background-color: #555;<br>&nbsp;&nbsp;color: white;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_vertical_gray.html">Попробуйте сами &raquo;</a>
    </div>

    <h3 style="margin-top:35px;">Активная / текущая ссылка для навигации</h3>
    <p>Добавьте к текущей ссылке класс &quot;active&quot;, чтобы пользователь знал, на какой странице он находится:</p>
    <ul class="vertical">
        <li><a class="active" href="javascript:void(0)">Главная</a></li>
        <li><a href="javascript:void(0)">Новости</a></li>
        <li><a href="javascript:void(0)">Контакты</a></li>
        <li><a href="javascript:void(0)">Про нас</a></li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .active {<br>&nbsp; background-color: #4CAF50;<br>&nbsp;
            color: white;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_vertical_active.html">Попробуйте сами &raquo;</a>
    </div>

    <h3 style="margin-top:35px;">Ссылки по центру &amp; Добавить границы</h3>
    <p>Добавьте <code class="w3-codespan">text-align:center</code> к <code class="w3-codespan">&lt;li&gt;</code> или <code class="w3-codespan">&lt;a&gt;</code> для центрирования ссылок.</p>
    <p>Добавьте свойство <code class="w3-codespan">border</code> к <code class="w3-codespan">&lt;ul&gt;</code> чтобы добавить границу вокруг навбара. Если вам также нужны границы внутри панели навигации, добавьте <code class="w3-codespan">border-bottom</code> ко всем <code class="w3-codespan">&lt;li&gt;</code> элементам, кроме последнего:</p>
    <ul class="vertical border">
        <li><a class="active" href="javascript:void(0)">Главная</a></li>
        <li><a href="javascript:void(0)">Новости</a></li>
        <li><a href="javascript:void(0)">Контакты</a></li>
        <li><a href="javascript:void(0)">Про нас</a></li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ul {<br>&nbsp; border: 1px solid #555;<br>}<br><br>li {<br>&nbsp; text-align: center;<br>
            &nbsp;
            border-bottom: 1px solid #555;<br>}<br><br>li:last-child {<br>&nbsp;
            border-bottom: none;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_vertical_borders.html">Попробуйте сами &raquo;</a>
    </div>

    <h3 style="margin-top:35px;">Фиксированный вертикальный навбар на всю высоту</h3>
    <p>Создайте на всю высоту &quot;sticky&quot; (&quot;липкий&quot;) боковой навбар:</p>

    <iframe src="../csstryit/trycss_navbar_vertical_iframe.html" style="height:262px;width:100%;border:3px solid #f1f1f1;border-left:none"></iframe>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ul {<br>&nbsp; list-style-type: none;<br>&nbsp;
            margin: 0;<br>&nbsp; padding: 0;<br>&nbsp; width:
            25%;<br>&nbsp; background-color: #f1f1f1;<br>&nbsp;&nbsp;height: 100%; /* На всю высоту */<br>
            &nbsp; position: fixed; /* Сделайте так, чтобы он прилипал даже к прокрутке */<br>&nbsp;
            overflow: auto; /* Включите прокрутку, если в боковой навигации слишком много контента */<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_vertical_fixed.html">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Примечание:</strong> Этот пример может некорректно работать на мобильных устройствах.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_navbar.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_navbar_horizontal.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>