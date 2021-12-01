<?php include '../include/head.php'; ?>

  <title>CSS Горизонтальная панель навигации. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Горизонтальный навбар. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
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
    <h1>CSS <span class="color_h1">Горизонтальная навигационная панель</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_navbar_vertical.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_dropdowns.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Горизонтальный навбар</h2>
    <ul class="horizontal">
        <li><a class="active" href="javascript:void(0)">Главная</a></li>
        <li><a href="javascript:void(0)">Новости</a></li>
        <li><a href="javascript:void(0)">Контакты</a></li>
        <li class="rightli" style="float:right"><a href="javascript:void(0)">Про нас</a></li>
    </ul>

    <p>Есть два способа создать горизонтальную панель навигации. Это использование элементов <b>встроенного</b> или <b>плавающего</b> списка.</p>

    <h3>Встроенные элементы списка</h3>
    <p>Один из способов создания горизонтальной панели навигации - указать элементы <code class="w3-codespan">&lt;li&gt;</code> как встроенные в дополнение к &quot;стандартному&quot; коду с предыдущей страницы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            li
            {<br>
            &nbsp;
            display: inline;<br>
            }</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_horizontal.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Объяснение примера:</p>
    <ul>
        <li><code class="w3-codespan">display: inline;</code> - по умолчанию элементы <code class="w3-codespan">&lt;li&gt;</code> являются блочными элементами. Здесь удаляются разрывы строк до и после каждого элемента списка, чтобы отображать их в одной строке.</li>
    </ul>
    <h3>Элементы плавающего списка</h3>
    <p>Ещё один способ создания горизонтальной панели навигации - это плавающие элементы <code class="w3-codespan">&lt;li&gt;</code> и указание стиля для ссылок навигации:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            li
            {<br>
            &nbsp;&nbsp;float: left;<br>
            }<br><br>
            a
            {<br>
            &nbsp;
            display: block;<br>
            &nbsp; padding: 8px;<br>&nbsp; background-color:
            #dddddd;<br>
            }</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_horizontal_float.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Объяснение примера:</p>
    <ul>
        <li><code class="w3-codespan">float: left;</code> - используйте float, чтобы элементы блока скользили рядом друг с другом</li>
        <li><code class="w3-codespan">display: block;</code> - позволяет указать отступы (высоту, ширину, поля и т.д., если необходимо)</li>
        <li><code class="w3-codespan">padding: 8px;</code> - поскольку блочные элементы занимают всю доступную ширину, они не могут плавать рядом друг с другом. Поэтому необходимо указать отступы, чтобы они хорошо выглядели</li>
        <li><code class="w3-codespan">background-color: #dddddd;</code> - добавьте серый цвет фона к каждому элементу</li>
    </ul>

    <p><strong>Совет:</strong> Добавьте цвет фона к <code class="w3-codespan">&lt;ul&gt;</code> вместо каждого <code class="w3-codespan">&lt;a&gt;</code> элемента, если вам нужен цвет фона на всю ширину:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ul
            {<br>
            &nbsp;&nbsp;background-color: #dddddd;<br>
            }</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_horizontal_float2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Примеры горизонтального навбара</h2>

    <p>Создайте базовую горизонтальную панель навигации с темным цветом фона и измените цвет фона ссылок, когда пользователь наводит на них указатель мыши:</p>
    <ul class="horizontal">
        <li><a href="javascript:void(0)">Главная</a></li>
        <li><a href="javascript:void(0)">Новости</a></li>
        <li><a href="javascript:void(0)">Контакты</a></li>
        <li><a href="javascript:void(0)">Про нас</a></li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ul {<br>&nbsp; list-style-type: none;<br>&nbsp;&nbsp;margin: 0;<br>&nbsp; padding: 0;<br>
            &nbsp; overflow:
            hidden;<br>&nbsp; background-color: #333;<br>}<br><br>li {<br>&nbsp;
            float: left;<br>}<br>
            <br>li a {<br>&nbsp; display: block;<br>&nbsp;
            color: white;<br>&nbsp; text-align: center;<br>&nbsp;
            padding: 14px 16px;<br>&nbsp; text-decoration: none;<br>}<br>
            <br>/* Измените цвет ссылки на #111 (черный) при наведении курсора  */<br>li a:hover {<br>&nbsp; background-color:
            #111;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_horizontal_black.html">Попробуйте сами &raquo;</a>
    </div>

    <h3 style="margin-top:35px;">Активная/Текущая навигационная ссылка</h3>
    <p>Добавьте к текущей ссылке <code class="w3-codespan">&quot;active&quot;</code> класс, чтобы пользователь знал, на какой странице он находится:</p>
    <ul class="horizontal">
        <li><a class="active" href="javascript:void(0)">Главная</a></li>
        <li><a href="javascript:void(0)">Новости</a></li>
        <li><a href="javascript:void(0)">Контакты</a></li>
        <li><a href="javascript:void(0)">Про нас</a></li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .active {<br>&nbsp; background-color: #4CAF50;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_horizontal_black_active.html">Попробуйте сами &raquo;</a>
    </div>

    <h3 style="margin-top:35px;">Ссылки по правому краю</h3>
    <p>Выровнять ссылки по правому краю, перемещая элементы списка вправо (<code class="w3-codespan">float:right;</code>):</p>
    <ul class="horizontal">
        <li><a href="javascript:void(0)">Главная</a></li>
        <li><a href="javascript:void(0)">Новости</a></li>
        <li><a href="javascript:void(0)">Контакты</a></li>
        <li style="float:right"><a class="active" href="javascript:void(0)">Про нас</a></li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul&gt;<br>&nbsp; &lt;li&gt;&lt;a href=&quot;#home&quot;&gt;Главная&lt;/a&gt;&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;&lt;a href=&quot;#news&quot;&gt;Новости&lt;/a&gt;&lt;/li&gt;<br>&nbsp; &lt;li&gt;&lt;a href=&quot;#contact&quot;&gt;Контакты&lt;/a&gt;&lt;/li&gt;<br>
            &nbsp; &lt;li style=&quot;float:right&quot;&gt;&lt;a
            class=&quot;active&quot; href=&quot;#about&quot;&gt;Про нас&lt;/a&gt;&lt;/li&gt;<br>&lt;/ul&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_horizontal_black_right.html">Попробуйте сами &raquo;</a>
    </div>

    <h3 style="margin-top:35px;">Разделители границ ссылок</h3>
    <p>Добавьте свойство <code class="w3-codespan">border-right</code> к <code class="w3-codespan">&lt;li&gt;</code> чтобы создать разделители ссылок:</p>
    <ul class="horizontal divider">
        <li><a class="active" href="javascript:void(0)">Главная</a></li>
        <li><a href="javascript:void(0)">Новости</a></li>
        <li><a href="javascript:void(0)">Контакты</a></li>
        <li style="float:right"><a href="javascript:void(0)">Про нас</a></li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Добавить серую правую границу ко всем элементам списка, кроме последнего элемента (last-child) */<br>li {<br>&nbsp; border-right: 1px solid #bbb;<br>}<br><br>
            li:last-child {<br>&nbsp; border-right: none;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_horizontal_dividers.html">Попробуйте сами &raquo;</a>
    </div>

    <h3 style="margin-top:35px;">Фиксированный навбар</h3>
    <p>Сделайте так, чтобы панель навигации оставалась вверху или внизу страницы, даже когда пользователь прокручивает страницу:</p>

    <div class="w3-row">
        <div class="w3-half">
            <div class="width94">
                <iframe src="../csstryit/trycss_navbar_horizontal_iframe.html" style="height:262px;width:100%;border:none;"></iframe>
                <div class="w3-example">
                    <h3>Зафиксировать вверху</h3>
                    <div class="w3-code notranslate cssHigh">
                        ul {<br>&nbsp; position: fixed;<br>&nbsp; top: 0;<br>&nbsp;&nbsp;width: 100%;<br>}</div>
                    <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_horizontal_black_fixed.html">Попробуйте сами &raquo;</a>
                </div>
            </div>
        </div>

        <div class="w3-half">
            <div class="width94">
                <iframe src="../csstryit/trycss_navbar_horizontal_iframe2.html" style="height:262px;width:100%;border:none;"></iframe>

                <div class="w3-example">
                    <h3>Зафиксировать внизу</h3>
                    <div class="w3-code notranslate cssHigh">
                        ul {<br>&nbsp; position: fixed;<br>&nbsp; bottom: 0;<br>&nbsp;&nbsp;width: 100%;<br>}</div>
                    <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_horizontal_black_fixed2.html">Попробуйте сами &raquo;</a>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-note w3-panel" style="margin-top:0">
        <p><strong>Примечание:</strong> Фиксированное положение может некорректно работать на мобильных устройствах.</p>
    </div>

    <h3 style="margin-top:30px;">Серый горизонтальный навбар</h3>
    <p>Пример серой горизонтальной панели навигации с тонкой серой границей:</p>
    <ul class="horizontal2">
        <li><a class="active" href="javascript:void(0)">Главная</a></li>
        <li><a href="javascript:void(0)">Новости</a></li>
        <li><a href="javascript:void(0)">Контакты</a></li>
        <li><a href="javascript:void(0)">Про нас</a></li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ul {<br>&nbsp; border: 1px solid #e7e7e7;<br>&nbsp;
            background-color: #f3f3f3;<br>}<br><br>li a {<br>&nbsp;&nbsp;color:
            #666;<br>}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_horizontal_gray.html">Попробуйте сами &raquo;</a>
    </div>

    <h3 style="margin-top:30px;">Липкий навбар</h3>
    <p>Добавьте <code class="w3-codespan">position: sticky;</code> к <code class="w3-codespan">&lt;ul&gt;</code> чтобы создать липкую панель навигации.</p>
    <p>Прикрепленный (липкий) элемент переключается между относительным и фиксированным, в зависимости от положения прокрутки. Он позиционируется относительно, пока не будет достигнута заданная позиция смещения в области просмотра - затем он &quot;залипает&quot; на месте (как при <code class="w3-codespan">position: fixed</code>).</p>
    <iframe src="../howto/tryhow_js_navbar_sticky.html" style="width:100%;border:3px solid #e9e9e9;height:400px;padding:0"></iframe><div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ul {<br>&nbsp; position: -webkit-sticky; /* Safari */<br>&nbsp;
            position: sticky;<br>&nbsp; top: 0;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_navbar_sticky.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p><strong>Примечание: </strong>Internet Explorer не поддерживает sticky позиционирование. Safari требует префикс <code class="w3-codespan">-webkit-</code> (смотрите пример выше). Необходимо указать хотя бы одно из следующих значений <code class="w3-codespan">top</code>, <code class="w3-codespan">right</code>, <code class="w3-codespan">bottom</code> или <code class="w3-codespan">left</code> чтобы работало sticky позиционирование.</p>
    </div>
    <hr>

    <h2>Больше примеров</h2>
    <div class="w3-example">
        <h3>Адаптивная верхняя навигация</h3>
        <p>Как использовать медиа-запросы CSS для создания адаптивной верхней навигации.</p>
        <div class="w3-white">
            <img src="../images/navbar_responsive_hor.jpg" style="width:100%" alt="Адаптивная верхняя навигация">
        </div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../csstryit/trycss_navbar_horizontal_responsive.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Адаптивная боковая навигация</h3>
        <p>Как использовать медиа-запросы CSS для создания адаптивной боковой навигации.</p>
        <div class="w3-white">
            <img src="../images/navbar_responsive_ver.jpg" style="width:100%" alt="Адаптивная боковая навигация">
        </div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../csstryit/trycss_navbar_vertical_responsive.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Раскрывающаяся (выпадающая) панель навигации</h3>
        <p>Как добавить раскрывающееся (выпадающее) меню в панель навигации.</p>

        <div class="w3-white">
            <iframe src="../csstryit/trycss_dropdown_navbar1.html" style="width:100%;border:none;height:200px"></iframe>
        </div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../csstryit/trycss_dropdown_navbar.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_navbar_vertical.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_dropdowns.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>