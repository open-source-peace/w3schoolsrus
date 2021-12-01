<?php include '../include/head.php'; ?>
<title>HTML Оттенки цвета. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Цветовые оттенки, тени, полутени, полутона. Параметр  HUE. Насыщенность (интенсивность) цвета. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1><span class="color_h1">Оттенки, тона и полутона цвета</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_currentcolor.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_schemes.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Оттенок цвета</h2>
    <p>Оттенок (Hue) - это ещё одно слово для цвета.</p>
    <p>Проще говоря: каждая позиция вокруг цветового колеса представляет разный оттенок:</p>
    <div class="w3-row">
        <div class="w3-third w3-text-white">
            <div class="w3-container" style="background-color:#ff0000;height:200px"><h3>#ff0000</h3></div>
        </div>
        <div class="w3-third">
            <div class="w3-container" style="background-color:#ff8000;height:200px"><h3>#ff8000</h3></div>
        </div>
        <div class="w3-third">
            <div class="w3-container" style="background-color:#ffff00;height:200px"><h3>#ffff00</h3></div>
        </div>
    </div>
    <p>Вы можете экспериментировать со значениями оттенка, используя <a href="colors_picker.php">Палитру цветов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>

    <h2>Значение цвета (яркость / затемнённость)</h2>
    <p>Значение цвета - это понятие о том, насколько цвет светлый или темный (от белого до черного).</p>
    <p>Эти три примера меняют яркость и затемнённость для красного, оранжевого и жёлтого оттенков:</p>
    <div class="w3-row w3-text-white">
        <div class="w3-third">
            <div class="w3-container" style="background-color:#ff0000;height:200px"><h3>#ff0000</h3></div>
        </div>
        <div class="w3-third">
            <div class="w3-container" style="background-color:#ff8080;height:200px"><h3>#ff8080</h3></div>
        </div>
        <div class="w3-third">
            <div class="w3-container" style="background-color:#800000;height:200px"><h3>#800000</h3></div>
        </div>
    </div>
    <div class="w3-row w3-section">
        <div class="w3-third">
            <div class="w3-container" style="background-color:#ff8000;height:200px"><h3>#ff8000</h3></div>
        </div>
        <div class="w3-third">
            <div class="w3-container" style="background-color:#ffcc99;height:200px"><h3>#ffcc99</h3></div>
        </div>
        <div class="w3-third w3-text-white">
            <div class="w3-container" style="background-color:#663300;height:200px"><h3>#663300</h3></div>
        </div>
    </div>
    <div class="w3-row">
        <div class="w3-third">
            <div class="w3-container" style="background-color:#ffff00;height:200px"><h3>#ffff00</h3></div>
        </div>
        <div class="w3-third">
            <div class="w3-container" style="background-color:#ffff99;height:200px"><h3>#ffff99</h3></div>
        </div>
        <div class="w3-third w3-text-white">
            <div class="w3-container" style="background-color:#666600;height:200px"><h3>#666600</h3></div>
        </div>
    </div>
    <p>Вы можете экспериментировать с яркостью и затемненностью для одного и того же оттенка, используя <a href="colors_picker.php">Палитру цветов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>

    <h2>Насыщенность цвета</h2>
    <p>Насыщенность - это уровень интенсивности.</p>
    <p>Высоко насыщенные цвета более яркие. Ненасыщенные цвета имеют меньше пигмента.</p>
    <p>Эти три примера меняют насыщенность красного, оранжевого и жёлтого оттенков:</p>
    <div class="w3-row">
        <div class="w3-third">
            <div class="w3-container" style="background-color:#ff0000;height:200px"><h3>#ff0000</h3></div>
        </div>

        <div class="w3-third">
            <div class="w3-container" style="background-color:#cc3333;height:200px"><h3>#cc3333</h3></div>
        </div>
        <div class="w3-third">
            <div class="w3-container" style="background-color:#996666;height:200px"><h3>#996666</h3></div>
        </div>
    </div>
    <div class="w3-row w3-section">
        <div class="w3-third">
            <div class="w3-container" style="background-color:#ff8000;height:200px"><h3>#ff8000</h3></div>
        </div>
        <div class="w3-third">
            <div class="w3-container" style="background-color:#cc8033;height:200px"><h3>#cc8033</h3></div>
        </div>
        <div class="w3-third">
            <div class="w3-container" style="background-color:#998066;height:200px"><h3>#998066</h3></div>
        </div>
    </div>
    <div class="w3-row">
        <div class="w3-third">
            <div class="w3-container" style="background-color:#ffff00;height:200px"><h3>#ffff00</h3></div>
        </div>
        <div class="w3-third">
            <div class="w3-container" style="background-color:#cccc33;height:200px"><h3>#cccc33</h3></div>
        </div>
        <div class="w3-third">
            <div class="w3-container" style="background-color:#999966;height:200px"><h3>#999966</h3></div>
        </div>
    </div>
    <p>Вы можете экспериментировать со значениями насыщенности для одного и того же оттенка, используя <a href="colors_picker.php">Палитру цветов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_currentcolor.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_schemes.php">Next &#10095;</a>
    </div>
</article>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>