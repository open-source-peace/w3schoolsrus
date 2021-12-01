<?php include '../include/head.php'; ?>
<title>HTML Комментарии. <?php include '../include/title.php'; ?></title>
<meta name="description" content="Комментарии в HTML коде. Для чего нужны комментарии? Как добавить комментарий. Тег комментария. Уроки по HTML для начинающих. Бесплатные курсы онлайн. Справочник по HTML5. Как создать сайт? <?php include '../include/description.php'; ?>">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Комментарии</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_quotation_elements.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_colors.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Теги комментариев используются для вставки комментариев в исходный HTML код.</p>
    <hr>

    <h2>HTML Теги комментариев</h2>
    <p>Вы можете добавлять комментарии на своей HTML странице, используя следующий синтаксис:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Напишите свой комментарий здесь --&gt;
        </div></div>
    <p>Обратите внимание, что в открывающем теге есть восклицательный знак (!), а в закрывающем - его нет.</p>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Комментарии не отображаются в браузере, но могут помочь документировать исходный код HTML.</p>
    </div>

    <p>С комментариями вы можете размещать уведомления и напоминания в своем HTML:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Это комментарий --&gt;<br><br>&lt;p&gt;Это параграф.&lt;/p&gt;<br>
            <br>&lt;!-- Не забудьте добавить больше информации здесь --&gt;</div>
        <a target="_blank" href="../htmltryit/tryhtml_comment.html?filename=tryhtml_comment" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Комментарии также отлично подходят для отладки HTML, потому что вы можете закомментировать строки кода HTML, по одной, для поиска ошибок:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Не отображать это изображение в данный момент<br>
            &lt;img border=&quot;0&quot; src=&quot;pic_trulli.jpg&quot;
            alt=&quot;Trulli&quot;&gt;<br>
            --&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitf7eb.html?filename=tryhtml_comment_out" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_comments1" method="post" target="_blank">
        <h2 class="heading">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте HTML-тег комментария, чтобы сделать комментарий из текста "This is a comment".</p>
            <div class="exerciseprecontainer">
                &lt;h1&gt;This is a heading&lt;/h1&gt;
                <br>
                <input name="ex1" maxlength="4" style="width: 47px;"> This is a comment <input name="ex2" maxlength="3" style="width: 37px;">
                <br>
                &lt;p&gt;This is a paragraph.&lt;/p&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Зачем нужны комментарии в HTML-коде веб-страницы?</em></li>
            <li><em>Какой синтаксис вставки комментария в HTML-коде?</em></li>
            <li><em>Отображаются ли комментарии в браузере?</em></li>
            <li><em>Можно ли использовать комментарии для отладки кода?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_quotation_elements.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_colors.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
