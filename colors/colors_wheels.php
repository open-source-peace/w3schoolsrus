<?php include '../include/head.php'; ?>
<title>HTML Цветовые колеса. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Цветовые колеса. Схемы цветов. RGB, CMY, RYB. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1>Цветовые <span class="color_h1">колеса</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_theory.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_currentcolor.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Цветовые колеса</h2>
    <p><strong>Цветовое колесо</strong> - это иллюстративная организация цветов вокруг круга, показывает взаимосвязь между первичными цветами, вторичными цветами и третичными цветами.</p>

    <p><img src="../images/pic_ryb_itten.jpg" alt="Цветовое колесо" style="max-width:100%"></p>
    <hr>

    <h2>Три важных цветовых колеса</h2>
    <p>Сколькими способами можно переставить радугу?</p>

    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third">
            <div class="w3-container w3-center w3-card">
                <p class="w3-xlarge">RGB</p>
                <img alt="Цветовая схема RGB" src="../images/pic_rgb_wheel.gif" style="max-height:150px">
                <p>Red, Green, Blue</p>
            </div>
        </div>
        <div class="w3-third ">
            <div class="w3-container w3-center w3-card">
                <p class="w3-xlarge">CMY</p>
                <img alt="Цветовая схема CMY" src="../images/pic_cmyk_wheel.gif" style="max-height:150px">
                <p>Cyan, Magenta, Yellow</p>
            </div>
        </div>
        <div class="w3-third">
            <div class="w3-container w3-center w3-card">
                <p class="w3-xlarge">RYB</p>
                <img alt="Цветовая схема RYB" src="../images/pic_ryb_wheel.gif" style="max-height:150px">
                <p>Red, Yellow, Blue</p>
            </div>
        </div>
    </div>
    <hr>

    <h2>Цветовое колесо RGB</h2>
    <div class="w3-row w3-section">
        <div class="w3-col" style="width:250px">
            <img alt="Цветовая схема RGB" src="../images/pic_rgb_wheel.gif" style="height:230px">
        </div>
        <div class="w3-rest">
            <p>Цвет RGB (Red, Green, Blue) представляет 3 источника света, которые используются для создания цветов на экране телевизора или компьютера.</p>
            <p><strong>Первичные цвета - это Red, Green, Blue.</strong></p>
            <p>Вторичные цвета создаются смешиванием первичных цветов:</p>
            <p>Red и Green = Yellow<br>Green и Blue = Cyan<br>Blue и Red = Magenta</p>
        </div>
    </div>
    <h3>12 основных цветов RGB:</h3>
    <table class="w3-table-all w3-section w3-small">
        <tr>
            <td style="color:white;background-color:#ff0000">RED<br>#FF0000<br>(255,0,0)</td>
            <td style="background-color:#ff8000"><br>#FF8000<br>(255,128,0)</td>
            <td style="background-color:#ffff00">YELLOW<br>#FFFF00<br>(255,255,0)</td>
            <td style="background-color:#80ff00"><br>#80FF00<br>(128,255,0)</td>
            <td style="background-color:#00ff00">GREEN<br>#00FF00<br>(0,255,0)</td>
            <td style="background-color:#00ff80"><br>#00FF80<br>(0,255,128)</td>
        </tr>
        <tr>
            <td style="background-color:#00ffff">CYAN<br>#00FFFF<br>(0,255,255)</td>
            <td style="color:white;background-color:#0080ff"><br>#0080FF<br>(0,128,255)</td>
            <td style="color:white;background-color:#0000ff">BLUE<br>#0000FF<br>(0,0,255)</td>
            <td style="color:white;background-color:#8000ff"><br>#8000FF<br>(128,0,255)</td>
            <td style="color:white;background-color:#ff00ff">MAGENTA<br>#FF00FF<br>(255,0,255)</td>
            <td style="color:white;background-color:#ff0080"><br>#FF0080<br>(255,0,128)</td>
        </tr>
    </table>

    <div class="w3-container" style="background-color:#00ff00">
        <p>RGB Green отличается от HTML цвета с названием Green.</p>
    </div>
    <div class="w3-container" style="color:white;background-color:green">
        <p>RGB Green отличается от HTML цвета с названием Green.</p>
    </div>

    <p><a href="colors_rgb.php">Прочитать больше про RGB</a>.</p>
    <hr>

    <h2>Цветовое колесо CMY(K)</h2>
    <div class="w3-row w3-section">
        <div class="w3-col" style="width:250px">
            <img alt="Цветовая схема CMY(K)" src="../images/pic_cmyk_wheel.gif" style="height:230px">
        </div>
        <div class="w3-rest">
            <p>CMY(K) (Cyan, Magenta, Yellow) представляет цвета, которые используются для печати на бумаге.</p>
            <p><strong>Первичные цвета - это Cyan, Magenta, Yellow.</strong></p>
            <p>Вторичные цвета создаются смешиванием основных цветов:</p>
            <p>Cyan и Magenta = Blue<br>Magenta и Yellow = Red<br>Yellow и Cyan = Green.</p>
        </div>
    </div>
    <h3>12 основных цветов CMY:</h3>
    <table class="w3-table-all w3-section w3-small">
        <tr>
            <td style="background-color:#00ffff"><strong>CYAN</strong><br>#00FFFF<br>(0,255,255)</td>
            <td style="color:white;background-color:#0080ff"><br>#0080FF<br>(0,128,255)</td>
            <td style="color:white;background-color:#0000ff">BLUE<br>#0000FF<br>(0,0,255)</td>
            <td style="color:white;background-color:#8000ff"><br>#8000FF<br>(128,0,255)</td>
            <td style="color:white;background-color:#ff00ff"><strong>MAGENTA</strong><br>#FF00FF<br>(255,0,255)</td>
            <td style="color:white;background-color:#ff0080"><br>#FF0080<br>(255,0,128)</td>
        </tr>
        <tr>
            <td style="color:white;background-color:#ff0000">RED<br>#FF0000<br>(255,0,0)</td>
            <td style="background-color:#ff8000"><br>#FF8000<br>(255,128,0)</td>
            <td style="background-color:#ffff00"><strong>YELLOW</strong><br>#FFFF00<br>(255,255,0)</td>
            <td style="background-color:#80ff00"><br>#80FF00<br>(128,255,0)</td>
            <td style="background-color:#00ff00">GREEN<br>#00FF00<br>(0,255,0)</td>
            <td style="background-color:#00ff80"><br>#00FF80<br>(0,255,128)</td>
        </tr>
    </table>
    <p><a href="colors_cmyk.php">Прочитать больше про CMYK</a>.</p>
    <hr>

    <h2>Цветовое колесо RYB</h2>
    <div class="w3-row">
        <div class="w3-col" style="width:250px">
            <img alt="Цветовая схема RYB" src="../images/pic_ryb_itten.jpg" style="margin-top:16px;height:230px">
        </div>
        <div class="w3-rest">
            <p>Цвет RYB (Red, Yellow, Blue) используется малярами, художниками и дизайнерами для сочетания пигментных цветов.</p>
            <p>3 основных цвета: <strong>Red, Yellow, Blue.</strong></p>
            <p>Вторичные цвета создаются смешиванием основных цветов.</p>
            <p>3 вторичных цвета: Orange, Green, Purple.</p>
            <p>Red и Yellow = Orange<br>Yellow и Blue = Green<br>Blue и Red = Purple.</p>
        </div>
    </div>

    <p>Третичные цвета получают смешиванием двух вторичных цветов.</p>
    <p>6 третичных цветов: Red-Orange, Yellow-Orange, Yellow-Green, Blue-Green, Blue-Purple, Red-Purple</p>

    <h3>12 основных цветов RYB:</h3>
    <table class="w3-table-all w3-section w3-small">
        <tr>
            <td style="color:white;background-color:#fe2712"><strong>RED</strong><br>#FE2712</td>
            <td style="color:white;background-color:#fc600a">R-O<br>#FC600A</td>
            <td style="background-color:#fb9902">ORANGE<br>#FB9902</td>
            <td style="background-color:#fccc1a">Y-O<br>#FCCC1A</td>
            <td style="background-color:#fefe33"><strong>YELLOW</strong><br>#FEFE33</td>
            <td style="background-color:#9ACD32">Y-G<br>#B2D732</td>
        </tr>
        <tr>
            <td style="color:white;background-color:#66b032">GREEN<br>#66B032</td>
            <td style="color:white;background-color:#347c98">B-G<br>#347C98</td>
            <td style="color:white;background-color:#0247fe"><strong>BLUE</strong><br>#0247FE</td>
            <td style="color:white;background-color:#4424d6">B-P<br>#4424D6</td>
            <td style="color:white;background-color:#8601af">PURPLE<br>#8601AF</td>
            <td style="color:white;background-color:#c21460">R-P<br>#C21460</td>
        </tr>
    </table>
    <div class="w3-panel w3-pale-yellow w3-border w3-lefttile">
        <p>RYB - наилучшее цветное колесо для выявления цветов, которые хорошо сочетаются.</p>
        <p>Колесо RYB можно использовать для создания приятных цветовых схем для Интернета.</p>
        <p>Подробнее о цветовых схемах вы узнаете в главе <a href="colors_schemes.php">Цветовые схемы</a>.</p>
    </div>
    <hr>
    <p>Уроки по использованию цветов на веб-страницах смотрите на нашем сайте <?php include '../include/w3schools.php'; ?> в разделах
        <a href="../html/html_colors.php">HTML Цвета</a> и <a href="../css/css_colors.php">CSS Цвета</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_theory.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_currentcolor.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>