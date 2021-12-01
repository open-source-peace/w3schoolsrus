<?php include '../include/head.php'; ?>
<title>Как сделать видео с YouTube адаптивным? <?php include '../include/title.php'; ?></title>
<meta name="description" content="Как сделать адаптивным вставленное на сайт видео с YouTube? Готовый сниппет (html-код) вставки видео-фрейма с хостинга YouTube на любой сайт. Адаптивное видео. <?php include '../include/description.php'; ?>">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_blog.php'; ?>
<?php include '../include/before_content_blog.php'; ?>

<article>
    <h1 class="w3-center">Как сделать адаптивным вставленное видео с YouTube?</h1>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="mysql_install.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="top_freelance.php">Next &#10095;</a>
    </div>

    <div class="author">
        <p>Original: <strong>&quot;<a href="https://w3schoolsua.github.io/" target="_blank">How to make inserted video from YouTube responsive?</a>&quot;</strong>,<br><i>translating by WebSunSey - <time datetime="2019-12-16">16.12.2019</time></i></p>
    </div>
    <hr>
    <a href="https://www.youtube.com/channel/UCHMtoMp4TyUG_fN3G-8zHXg" target="_blank" rel="nofollow"><img src="../svg/youtube-logo.svg" alt="Как сделать адаптивным видео с YouTube?" class="w3-left w3-padding img-responsive" title="Обучающие видео с YouTube" width="160"></a>
    <h2>Как сделать адаптивным видео, вставленное на сайт с YouTube?</h2>
    <p>Видео с YouTube, которое обычно вставляют с помощью вставки в html-код страницы готового фрейма, который копируют с YouTube, по умолчанию не является адаптивным. Для того, чтобы сделать такое видео адаптивным, т.е. чтобы оно менялось при изменении разрешения экрана на разных мониторах и гаджетах, необходимо такой видео-фрейм из YouTube стилизовать с помощью CSS.</p>

    <div class="w3-example">
        <h3>Пример стилизации видео-фрейма с YouTube</h3>
        <div class="w3-code notranslate cssHigh">
            .videowrap
            {<br>&nbsp;&nbsp;max-width: 720px;<br>
            &nbsp;&nbsp;margin: 0 auto;<br>}<br>
            .videoblock
            {<br>
            &nbsp;&nbsp;position: relative;<br>
            &nbsp;&nbsp;padding-bottom: 56.25%; /*для видео из соотношением экрана 16:9*/<br>
            &nbsp;&nbsp;height: 0;<br>
            &nbsp;&nbsp;overflow: hidden;<br>
            }<br>
            .videoblock <span style="color:darkmagenta">iframe, object, embed</span>
            {<br>
            &nbsp;
            position: absolute;<br>
            &nbsp;&nbsp;top: 0;<br>
            &nbsp;&nbsp;left: 0;<br>
            &nbsp;&nbsp;width: 100%;<br>
            &nbsp;&nbsp;height: 100%;<br>
            &nbsp;&nbsp;border: 0;<br>
            }
        </div></div>
    <div class="w3-example">
        <h3>Пример вставки видео-фрейма с YouTube</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1&gt;Заголовок видео&lt;/h1&gt;<br>
            &lt;div class="videowrap"&gt;<br>
            &nbsp;&nbsp;&lt;div class="videoblock"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;iframe width="560" height="315" src="https://www.youtube.com/embed/FjM1dT2_JcE" allowfullscreen&gt;&lt;/iframe&gt;<br>
            &nbsp;&nbsp;&lt;/div&gt;<br>
            &lt;/div&gt;
        </div>
        <a target="_blank" href="youtube_responsive_tryit.html" class="w3-btn">Попробуйте сами &raquo;</a></div>

    <p><b>Примечание.</b> Значение padding-bottom: 56.25%; - используется при соотношении видео 16:9. Если соотношение сторон видео другое, то и это значение будет меняться. Считается как 9/16*100% = 56.25%. Если соотношение сторон видео 4:3, то получится 3/4*100% = 75%.</p>

    <h2>Как сделать видео с YouTube адаптивным?</h2>
    <div class="videowrap">
        <div class="videoblock">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/QR0TbKZfmxM" allowfullscreen></iframe>
        </div>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="mysql_install.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="top_freelance.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>