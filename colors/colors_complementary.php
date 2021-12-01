<?php include '../include/head.php'; ?>
<title>HTML Комплементарные цвета. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Комплементарные цвета. Использование цветов на веб-страницах. <?php include '../include/description.php'; ?>'>
    <script src="../lib/w3color.js"></script>
    <script src="../scripts/trycolorwheel.js"></script>
    <link href='../styles/trycolorwheel.css' rel='stylesheet'>
    <link rel="stylesheet" href="../cdn/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1>Комплементарные цветовые схемы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_analogous.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_triadic.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Комплементарные цветовые схемы создаются сочетанием цветов с противоположных сторон цветового колеса.</p>
    <div w3-include-html="trycolorwheel.html"></div>
    <script src="../lib/w3.js"></script>
    <script>
        w3.includeHTML(function () {initCanvas(4);changeRule(2)});
    </script>
    <hr>
    <p>Комплементарные цветовые схемы в основном состоят из двух дополняющих цветов, расширенных серыми тонами, полутонами и оттенками.</p>
    <hr>
    <p><b>Примечание.</b> Если у вас полностью не отображается эта страница, перейдите в эту тему на сайте <a href="https://www.w3schools.com/colors/colors_complementary.asp" target="_blank" rel="nofollow">W3Schools</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_analogous.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_triadic.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>