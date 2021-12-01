<?php include '../include/head_howto.php'; ?>
<title>Как сделать меню поиска? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать меню поиска с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_search_menu.html' rel='canonical'>
    <style>
        /* Создайте макет столбца с помощью Flexbox */
        .mhrow {
            display: flex;
        }
        /* Левый столбец (меню) */
        .mhleft {
            flex: 35%;
            padding: 15px 0;
        }
        .mhleft h2 {
            padding-left:20px;
        }
        /* Правый столбец (содержимое страницы) */
        .mhright {
            flex: 65%;
            padding:15px 25px;
        }
        /* Стиль окна поиска */
        #mySearch {
            width: 100%;
            padding: 11px;
            padding-left:20px;
            border:1px solid #ddd;
        }
        /* Стиль меню навигации внутри левого столбца */
        #myMenu {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        #myMenu li a {
            padding: 12px;
            padding-left:20px;
            text-decoration: none;
            color: black;
            display: block
        }
        #myMenu li a:hover {
            background-color: #eee;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Меню поиска</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_navbar_icon.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_searchbar.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать меню поиска для фильтрации ссылок</strong> с помощью JavaScript.</p>
    <hr>
    <h2>Поиск/Фильтр меню</h2>
    <p>Как искать ссылки в меню навигации:</p>

    <div class="mhrow">
        <div class="mhleft" style="background-color:#bbb;">
            <h2>Меню</h2>
            <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Поиск.." title="Введите категорию">
            <ul id="myMenu">
                <li><a href="javascript:void(0)">HTML</a></li>
                <li><a href="javascript:void(0)">CSS</a></li>
                <li><a href="javascript:void(0)">JavaScript</a></li>
                <li><a href="javascript:void(0)">PHP</a></li>
                <li><a href="javascript:void(0)">Python</a></li>
                <li><a href="javascript:void(0)">jQuery</a></li>
                <li><a href="javascript:void(0)">SQL</a></li>
                <li><a href="javascript:void(0)">Bootstrap</a></li>
                <li><a href="javascript:void(0)">Node.js</a></li>
            </ul>
        </div>

        <div class="mhright" style="background-color:#ddd;">
            <h2>Содержание страницы</h2>
            <p>Начните вводить определенную категорию/ссылку в строке поиска, чтобы "отфильтровать" параметры поиска.</p>
            <p>Какой-то текст..Какой-то текст..Какой-то текст..Какой-то текст..Какой-то текст..Какой-то текст..Какой-то текст..Какой-то текст..</p>
            <p>Some other text..Какой-то текст..Какой-то текст..Какой-то текст..Какой-то текст..Какой-то текст..Какой-то текст..Какой-то текст..</p>
            <p>Какой-то текст..</p>
        </div>
    </div>
    <script>
        function myFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("mySearch");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myMenu");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>

    <p><a target="_blank" href="../howtotryit/tryhow_js_search_menu.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <hr>

    <h2>Создать меню поиска</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;input type=&quot;text&quot; id=&quot;mySearch&quot; onkeyup=&quot;myFunction()&quot; placeholder=&quot;Поиск..&quot;
            title=&quot;Введите категорию&quot;&gt;<br><br>&lt;ul id=&quot;myMenu&quot;&gt;<br>&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;HTML&lt;/a&gt;&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;CSS&lt;/a&gt;&lt;/li&gt;<br>&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;JavaScript&lt;/a&gt;&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;PHP&lt;/a&gt;&lt;/li&gt;<br>&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Python&lt;/a&gt;&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;jQuery&lt;/a&gt;&lt;/li&gt;<br>&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;SQL&lt;/a&gt;&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Bootstrap&lt;/a&gt;&lt;/li&gt;<br>&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Node.js&lt;/a&gt;&lt;/li&gt;<br>
            &lt;/ul&gt;</div>
    </div>
    <p><b>Примечание:</b> Мы используем href=&quot;#&quot; в этой демонстрации, поскольку у нас нет страницы, на которую можно было бы сделать ссылку. В реальной жизни это должен быть реальный URL-адрес конкретной страницы.</p>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <p>Стиль окна поиска и меню навигации:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Стиль окна поиска */<br>#mySearch {<br>&nbsp; width: 100%;<br>&nbsp;
            font-size: 18px;<br>&nbsp; padding: 11px;<br>&nbsp; border: 1px solid #ddd;<br>
            }<br><br>/* Стиль меню навигации */<br>#myMenu {<br>&nbsp; list-style-type: none;<br>&nbsp;
            padding: 0;<br>&nbsp; margin: 0;<br>}<br><br>/* Стиль навигационных ссылок */<br>
            #myMenu li a {<br>&nbsp; padding: 12px;<br>&nbsp;
            text-decoration: none;<br>&nbsp; color: black;<br>&nbsp;
            display: block<br>}<br><br>#myMenu li a:hover {<br>&nbsp;
            background-color: #eee;<br>}</div>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h5>Шаг 3) Добавить JavaScript:</h5>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;script&gt;<br>function myFunction() {<br>&nbsp; // Объявить переменные<br>&nbsp; var input, filter,
            ul, li, a, i;<br>&nbsp; input = document.getElementById(&quot;mySearch&quot;);<br>&nbsp;
            filter = input.value.toUpperCase();<br>&nbsp; ul =
            document.getElementById(&quot;myMenu&quot;);<br>&nbsp; li =
            ul.getElementsByTagName(&quot;li&quot;);<br><br>&nbsp;&nbsp;// Прокрутите все элементы списка и скройте те, которые не соответствуют поисковому запросу<br>&nbsp;&nbsp;for (i = 0; i &lt; li.length; i++) {<br>&nbsp;&nbsp;&nbsp; a = li[i].getElementsByTagName(&quot;a&quot;)[0];<br>&nbsp;&nbsp;&nbsp;
            if (a.innerHTML.toUpperCase().indexOf(filter) &gt; -1) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            li[i].style.display = &quot;&quot;;<br>&nbsp;&nbsp;&nbsp; }
            else {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            li[i].style.display = &quot;none&quot;;<br>&nbsp;&nbsp;&nbsp;
            }<br>&nbsp; }<br>}<br>
            &lt;/script&gt;<br></div>
        <a target="_blank" href="../howtotryit/tryhow_js_search_menu.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Совет:</b> Удалите <span class="w3-codespan">toUpperCase()</span> если вы хотите выполнять поиск с учетом регистра.</p>
    </div>
    <p><b>Совет:</b> Также посмотрите <a href="howto_js_filter_table.php">Как сделать - Фильтр таблицы</a>.</p>
    <p><b>Совет:</b> Ещё посмотрите <a href="howto_js_filter_lists.php">Как сделать - Фильтр списка</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_navbar_icon.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_searchbar.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>