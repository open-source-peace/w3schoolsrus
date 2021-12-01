<?php include '../include/head.php'; ?>
<title>HTML Цвета ссылок. <?php include '../include/title.php'; ?></title>
<meta name="description" content="HTML Цвета ссылок. Кнопки как ссылки. Теги. <?php include '../include/description.php'; ?>">
<style>
    .mytestbtn {
        background-color: #f44336 !important;
        color: white;
        padding: 15px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }
    .mytestbtn:hover {
        background-color: red !important;
        color: white!important;
    }
</style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Ссылки - Разные цвета</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_links.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_links_bookmarks.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Ссылка HTML отображается в другом цвете в зависимости от того, посещали её, не посещали или ссылка активна.</p>
    <hr>

    <h2>HTML Цвета ссылки</h2>
    <p>По умолчанию ссылки будут отображаться так (во всех браузерах):</p>
    <ul>
        <li><span style="color: blue; text-decoration: underline;">Непосещенная ссылка подчеркнута, синим цветом</span></li>
        <li><span style="color: blueviolet; text-decoration: underline;">Посещенная ссылка подчеркнута, фиолетовым цветом</span></li>
        <li><span style="color: red; text-decoration: underline;">Активная ссылка подчеркнута, красным цветом</span></li>
    </ul>
    <p>Вы можете изменить цвета состояния ссылки, используя CSS:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Здесь неиспользованная ссылка будет зеленым без подчеркивания. Просмотренная будет розовым цветом, без подчеркивания. Ссылка будет желтой и подчеркнутой. Кроме того, при наведении курсора на ссылку (a:hover) она становится красной и подчеркнутой:</p>
        <div class="w3-code notranslate cssHigh">
            &lt;style&gt;<br>a:link {<br>&nbsp;&nbsp;color: green; <br>&nbsp;&nbsp;background-color: transparent;
            <br>&nbsp;&nbsp;text-decoration: none;<br>}<br><br>
            a:visited {<br>&nbsp; color: pink;<br>&nbsp; background-color: transparent;<br>&nbsp;
            text-decoration: none;<br>}<br><br>a:hover {<br>&nbsp; color: red;<br>&nbsp; background-color: transparent;<br>
            &nbsp; text-decoration: underline;<br>}<br><br>
            a:active {<br>&nbsp; color: yellow;<br>&nbsp; background-color: transparent;<br>&nbsp;
            text-decoration: underline;<br>}<br>&lt;/style&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit5394.html?filename=tryhtml_links_colors" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Кнопки ссылки</h2>
    <p>Ссылку также можно оформить как кнопку с помощью CSS:</p>
    <a class="mytestbtn" href="javascript:void(0)">Это ссылка</a>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            &lt;style&gt;<br>a:link, a:visited {<br>&nbsp; background-color: #f44336;<br>&nbsp;
            color: white;<br>&nbsp; padding: 15px 25px;<br>&nbsp; text-align: center;<br>&nbsp;
            text-decoration: none;<br>&nbsp; display: inline-block;<br>}<br><br>a:hover, a:active {<br>&nbsp;
            background-color: red;<br>}<br>&lt;/style&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitcf20.html?filename=tryhtml_links_button" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note w3-panel">
        <p>Чтобы узнать больше о CSS, перейдите к <a href="/css/index.php">CSS Учебнику</a> на нашем сайте.</p></div>
    <hr>

    <h2>HTML Теги ссылки</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:30%">Тег</th>
            <th>Описание</th></tr><tr>
            <td><a href="../tags/tag_a.php">&lt;a&gt;</a></td><td>Определяет гиперссылку</td></tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Полный список всех доступных HTML тегов можно просмотреть в <a href="../tags/index.php">HTML Справочнике тегов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_links.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_links_bookmarks.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
