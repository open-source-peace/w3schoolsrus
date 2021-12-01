<?php include '../include/head.php'; ?>
<title>HTML Аналогичные цвета. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Аналогичные цвета. Применение цвета на веб-страницах. <?php include '../include/description.php'; ?>'>
    <script src="../lib/w3color.js"></script>
    <script src="../scripts/trycolorwheel.js"></script>
    <link href='../styles/trycolorwheel.css' rel='stylesheet'>
    <link rel="stylesheet" href="../cdn/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1>Аналогичные цветовые схемы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_monochromatic.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_complementary.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Аналогичные цветовые схемы создаются с помощью цветов, которые находятся рядом друг с другом на цветовом колесе.</p>
    <div w3-include-html="trycolorwheel.html"></div>
    <script src="../lib/w3.js"></script>
    <script>
        w3.includeHTML(function () {initCanvas(18);changeRule(1)});
    </script>
    <hr>
    <p>Если в аналогичной цветовой схеме недостаточно контраста между цветом (для приятного дизайна веб-сайта), её можно настроить, чтобы придать ей больше разнообразия.</p>
    <hr>
    <p><b>Примечание.</b> Если у вас полностью не отображается эта страница, перейдите в эту тему на сайте <a href="https://www.w3schools.com/colors/colors_analogous.asp" target="_blank" rel="nofollow">W3Schools</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_monochromatic.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_complementary.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>