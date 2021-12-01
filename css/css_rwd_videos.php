<?php include '../include/head.php'; ?>

<title>CSS Адаптивное видео. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Адаптивный веб-дизайн. Адаптивное видео. Как сделать адаптивным видео на веб-странице? Свойства width, max-width. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>Адаптивный веб-дизайн - <span class="color_h1">Видео</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_images.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_frameworks.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Использование свойства width</h2>
    <p>Если свойство <code class="w3-codespan">width</code> установлено на 100%, видеопроигрыватель будет реагировать и масштабироваться вверх и вниз:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            video {<br>
            &nbsp; width: 100%;<br>&nbsp; height: auto;<br>
            }</div>
        <a target="_blank" href="../csstryit/tryresponsive_video2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что в приведенном выше примере видеоплеер может быть увеличен до его исходного размера. Во многих случаях лучшим решением будет использование свойства <code class="w3-codespan">max-width</code>.</p>
    <hr>
    <h2>Использование свойства max-width</h2>
    <p>Если для свойства <code class="w3-codespan">max-width</code> установлено значение 100%, видеопроигрыватель будет уменьшаться, если это необходимо, но никогда не будет увеличиваться до размера, превышающего его исходный размер:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            video {<br>
            &nbsp; max-width: 100%;<br>&nbsp; height: auto;<br>
            }</div>
        <a target="_blank" href="../csstryit/tryresponsive_video.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Добавить видео на веб-странице</h2>
    <p>Размер видео будет изменяться, занимая всё доступное пространство:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            video {<br>
            &nbsp; width: 100%;<br>&nbsp; height: auto;<br>
            }</div>
        <a target="_blank" href="../csstryit/tryresponsive_video3.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Примечание.</b> Также вы можете посмотреть статью <a href="../blog/youtube_responsive.php">&quot;Как сделать адаптивным вставленное видео с YouTube?&quot;</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_images.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_frameworks.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>