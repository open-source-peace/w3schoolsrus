<?php include '../include/head_howto.php'; ?>
<title>Как сделать горизонтальное прокручиваемое меню? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать горизонтальное меню с прокруткой на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_menu_horizontal_scroll.html' rel='canonical'>
    <style>
        div.horscroll {background-color: #333;overflow: auto;white-space: nowrap;}
        div.horscroll a {display: inline-block;color: white;text-align: center;padding: 14px 16px;text-decoration: none;}
        div.horscroll a:hover {background-color: #777;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Горизонтальное скролл-меню</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_sidebar_icons.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_vertical_menu.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать горизонтальное прокручиваемое меню</strong> с помощью CSS.</p>
    <hr>

    <div class="horscroll" style="max-width:500px;margin:0 auto;">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="#support">Support</a>
        <a href="#blog">Blog</a>
        <a href="#tools">Tools</a>
        <a href="#base">Base</a>
        <a href="#custom">Custom</a>
        <a href="#more">More</a>
        <a href="#logo">Logo</a>
        <a href="#friends">Friends</a>
        <a href="#partners">Partners</a>
        <a href="#people">People</a>
        <a href="#work">Work</a>
    </div>
    <p style="max-width:500px;margin:16px auto;"><a target="_blank" href="../howtotryit/tryhow_css_menu_hor_scroll.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <hr>

    <h2>Как создать горизонтальное прокручиваемое меню на сайте</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;scrollmenu&quot;&gt;<br>&nbsp; &lt;a href=&quot;#home&quot;&gt;Home&lt;/a&gt;<br>&nbsp; &lt;a
            href=&quot;#news&quot;&gt;News&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#contact&quot;&gt;Contact&lt;/a&gt;<br>&nbsp; &lt;a
            href=&quot;#about&quot;&gt;About&lt;/a&gt;<br>&nbsp; ...<br>&lt;/div&gt;</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <p>Фишка в том, чтобы сделать навигационную панель прокручиваемой, заключается в использовании <code class="w3-codespan">overflow:auto</code> и <code class="w3-codespan">white-space: nowrap</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div.scrollmenu {<br>&nbsp;&nbsp;background-color: #333;<br>&nbsp;
            overflow: auto;<br>&nbsp; white-space: nowrap;<br>}<br><br>div.scrollmenu a {<br>&nbsp;&nbsp;display: inline-block;<br>&nbsp;&nbsp;color: white;<br>&nbsp;&nbsp;text-align: center;<br>&nbsp;&nbsp;padding: 14px;<br>&nbsp;&nbsp;text-decoration: none;<br>}<br><br>
            div.scrollmenu a:hover {<br>&nbsp;&nbsp;background-color: #777;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_css_menu_hor_scroll.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Навбар</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать больше о панелях навигации на сайте.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_sidebar_icons.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_vertical_menu.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>