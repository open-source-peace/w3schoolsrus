<?php include '../include/head.php'; ?>
<title>HTML Монохроматические цвета. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Монохроматические цвета. Использование на веб-страницах. <?php include '../include/description.php'; ?>'>
    <script src="../lib/w3color.js"></script>
    <script src="../scripts/trycolorwheel.js"></script>
    <link href='../styles/trycolorwheel.css' rel='stylesheet'>
    <link rel="stylesheet" href="../cdn/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1>Монохроматические цветовые схемы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_psychology.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_analogous.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Монохроматические (однотонные) цветовые схемы легко создать, поскольку в них используется только один цвет.</p>
    <p class="intro">Монохроматические схемы используют различные тона с одного и того же угла на цветовом колесе (<strong>одинаковый оттенок</strong>).</p>
    <div w3-include-html="trycolorwheel.html"></div>
    <script src="../lib/w3.js"></script>
    <script>
        w3.includeHTML(function () {initCanvas(18);changeRule(0)});
    </script>
    <hr>
    <p>Монохроматические цветовые схемы гарантированно подходят друг другу, поскольку все они происходят из одной семьи.</p>
    <hr>
    <p><b>Примечание.</b> Если у вас полностью не отображается эта страница, перейдите в эту тему на сайте <a href="https://www.w3schools.com/colors/colors_monochromatic.asp" target="_blank" rel="nofollow">W3Schools</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_psychology.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_analogous.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>