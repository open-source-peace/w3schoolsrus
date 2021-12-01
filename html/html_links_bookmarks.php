<?php include '../include/head.php'; ?>

<title>HTML Ссылки. Создание закладок. <?php include '../include/title.php'; ?></title>
<meta name="description" content="HTML Ссылки. Создание закладок. Как создать закладку на веб-странице? <?php include '../include/description.php'; ?>">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Ссылки - Создание закладок</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_links_colors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_images.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">HTML-ссылки можно использовать для создания закладок, чтобы пользователи могли переходить к определенным частям веб-страницы.</p>
    <hr>

    <h2>Создание закладки в HTML</h2>
    <p>Закладки могут быть полезными, если веб-страница очень длинная.</p>
    <p>Чтобы создать закладку - сначала создайте закладку, а затем добавьте на неё ссылку.</p>
    <p>После нажатия на ссылку страница прокручивается вниз или вверх к месту с закладкой.</p>
    <h2>Пример</h2>
    <p>Сначала используйте атрибут <code class="w3-codespan">id</code> чтобы создать закладку:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;h2 id=&quot;C4&quot;&gt;Раздел 4&lt;/h2&gt;</div>
    </div>
    <p>Потом добавьте ссылку на закладку (&quot;Перейти к разделу 4&quot;) на той же странице:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;#C4&quot;&gt;Перейти к разделу 4&lt;/a&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryit3864.html?filename=tryhtml_links_bookmark" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Вы также можете добавить ссылку на закладку на другой странице:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;html_demo.html#C4&quot;&gt;Перейти к разделу 4&lt;/a&gt;
        </div>
    </div>
    <hr>
    <h2>Резюме</h2>
    <ul>
        <li>Используйте атрибут <code class="w3-codespan">id</code>, (id=&quot;<em>значение</em>&quot;), чтобы определить закладки на странице</li>
        <li>Используйте атрибут <code class="w3-codespan">href</code>, (href=&quot;#<em>значение</em>&quot;), чтобы определить ссылку на закладку</li>
    </ul>
    <hr>

    <h2>HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_links1" method="post" target="_blank">
        <h2>Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте правильный HTML, чтобы сделать текст ниже ссылкой на "default.html".</p>
            <div class="exerciseprecontainer">
                <input name="ex1" spellcheck="false" maxlength="2" style="width: 28px;">
                <input name="ex2" spellcheck="false" maxlength="19" style="width: 195px;">&gt;Посетить HTML учебник.
                <input name="ex3" spellcheck="false" maxlength="4" style="width: 48px;">
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2>HTML Теги ссылки</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:30%">Тег</th>
            <th>Описание</th></tr><tr>
            <td><a href="/tags/tag_a.php">&lt;a&gt;</a></td><td>Определяет гиперссылку</td></tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для ознакомления с полным списком всех доступных HTML тегов посетите <a href="/tags/index.php">HTML Справочник тегов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_links_colors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_images.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
