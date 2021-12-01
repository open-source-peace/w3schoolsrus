<?php include '../include/head.php'; ?>
<title>HTML Триадические цвета. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Триадические цвета. Применение цветов на веб-страницах. <?php include '../include/description.php'; ?>'>
    <script src="../lib/w3color.js"></script>
    <script src="../scripts/trycolorwheel.js"></script>
    <link href='../styles/trycolorwheel.css' rel='stylesheet'>
    <link rel="stylesheet" href="../cdn/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1>Триадические цветовые схемы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_complementary.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_compound.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Триадические цветовые схемы состоят из оттенков, одинаково расположенных вокруг цветового колеса.</p>
    <div w3-include-html="trycolorwheel.html"></div>
    <script src="../lib/w3.js"></script>
    <script>
        w3.includeHTML(function () {initCanvas(27);changeRule(3)});
    </script>
    <hr>
    <p><b>Примечание.</b> Если у вас полностью не отображается эта страница, перейдите в эту тему на сайте <a href="https://www.w3schools.com/colors/colors_triadic.asp" target="_blank" rel="nofollow">W3Schools</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_complementary.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_compound.php">Next &#10095;</a>
    </div>   
</article>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>