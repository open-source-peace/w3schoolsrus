<?php include '../include/head.php'; ?>
<title>HTML Теория цветов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Теория цветов. Первичные, вторичные и третичные цвета. Цветовые колёса. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1>Теория <span class='color_h1'>Цветов</span></h1>

    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='colors_gradient.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='colors_wheels.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Что такое теория цветов?</h2>
    <p><strong>Теория цветов</strong> - это множество категорий, определений и понятий.</p>
    <p>Этот учебник охватывает части, которые являются наиболее полезными для веб-дизайна:</p>
    <ul class='w3-ul w3-border'>
        <li>Первичный, вторичный и третичный цвета</li>
        <li>Цветные колеса (RGB, CMY, RYB)</li>
        <li>Оттенок цвета, лёгкость и насыщенность</li>
    </ul>
    <hr>

    <h2>Цвет света</h2>
    <p>Сэр Исаак Ньютон разработал теорию, согласно которой все цвета являются смесью <strong>Красного</strong>, <strong>Зелёного</strong> и <strong>Синего</strong> света.</p>
    <p>Это привело к созданию первого известного цветового колеса в 1666 году.</p>

    <div class='w3-row'>
        <div class='w3-half'>
            <img src='../images/img_newton.jpg' alt='Сэр Исаак Ньютон. Теория цветов' style='width:90%'>
        </div>
        <div class='w3-half'>
            <img src='../images/img_newton_wheel.jpg' alt='Цветовое колесо' style='width:100%'>
        </div>
    </div>
    <hr>

    <h2>Цвет краски</h2>
    <p>В 1766 году ученый Моисей Харрис создал первое цветовое колесо, которое классифицировало <strong>Красный</strong>, <strong>Желтый</strong> и <strong>Синий</strong> как основные цвета.</p>
    <P>Моисей Харрис работал с краской (Ньютон работал со светом), следуя теории (французского художника), что все цвета являются смесью красного, жёлтого и синего пигментов.</p>

    <div class='w3-row'>
        <div class='w3-half'>
            <img src='../images/img_moses_harris.jpg' alt='Моисей Харрис' style='width:90%'>
        </div>
        <div class='w3-half'>
            <img src='../images/img_harris_wheel.jpg' alt='Цветовое колесо' style='width:100%'>
        </div>
    </div>
    <hr>

    <h2>Цветовые системы</h2>
    <p>В этом учебнике мы рассмотрим 3 различные цветовые системы:</p>
    <ul>
        <li>Система цветов, используемая при производстве цветов с помощью света (RGB)</li>
        <Li>Система цветов, используемых при печати (CMY)</li>
        <Li>Цветная система, которую используют художники и живописцы (RYB)</li>
    </ul>
    <div class='w3-panel w3-note'>
        <p>Печать фактически использует четыре чернильных цветовых системы.</p>
        <p>CMYK: Cyan, Magenta, Yellow и ключевой (black).</p>
    </div>
    <hr>

    <h2>Первичные цвета</h2>
    <p>Первичные цвета - это <strong>главные цвета</strong> в данной системе цветов.</p>
    <p>Первичные цвета нельзя получить, смешивая другие цвета цветовой системы.</p>

    <p>Первичными цветами <strong>света</strong> являются красный, зелёный и синий:</p>
    <table class='w3-table w3-card'>
        <tr>
            <td style='width:10%'>RGB</td>
            <td style='width:30%;color:white;background-color:red'>Red - Красный</td>
            <td style='width:30%;background-color:lime'>Green - Зелёный</td>
            <td style='width:30%;color:white;background-color:blue'>Blue - Синий</td>
        </tr>
    </table>

    <p>Первичными цветами для <strong>печати</strong> являются Cyan, Magenta и Yellow:</p>
    <table class='w3-table w3-card'>
        <tr>
            <td style='width:10%'>CMY</td>
            <td style='width:30%;background-color:cyan'>Cyan - Голубой</td>
            <td style='width:30%;color:white;background-color:magenta'>Magenta - Пурпурный</td>
            <td style='width:30%;background-color:yellow'>Yellow - Желтый</td>
        </tr>
    </table>

    <p>Первичными цветами для <strong>краски</strong> являются Red, Yellow та Blue:</p>
    <table class='w3-table w3-card'>
        <tr>
            <td style='width:10%'>RYB</td>
            <td style='width:30%;color:white;background-color:#fe2712'>Red - Красный</td>
            <td style='width:30%;background-color:#fefe33'>Yellow - Желтый</td>
            <td style='width:30%;color:white;background-color:#0247fe'>Blue - Синий</td>
        </tr>
    </table>
    <hr>

    <h2>Вторичные цвета</h2>
    <p>Вторичные цвета производятся путем <strong>смешивания двух первичных цветов</strong> в цветовой системе.</p>
    <p>В описанных здесь цветовых системах есть 3 вторичных цвета.</p>
    <hr>

    <h3>Смешивание света (RGB)</h3>
    <p>Вторичные цвета - Yellow, Cyan, Magenta.</p>
    <table class='w3-table w3-bordered w3-border'>
        <tr>
            <td style='width:30%;color:white;background-color:red'>Red</td>
            <td style='width:5%;text-align:center'><b>+</b></td>
            <td style='width:30%;background-color:lime'>Green</td>
            <td style='width:5%;text-align:center'><b>=</b></td>
            <td style='width:30%;background-color:yellow'>Yellow</td>
        </tr>
        <tr>
            <td style='width:30%;background-color:lime'>Green</td>
            <td style='width:5%;text-align:center'><b>+</b></td>
            <td style='width:30%;color:white;background-color:blue'>Blue</td>
            <td style='width:5%;text-align:center'><b>=</b></td>
            <td style='width:30%;background-color:cyan'>Cyan</td>
        </tr>
        <tr>
            <td style='width:30%;color:white;background-color:blue'>Blue</td>
            <td style='width:5%;text-align:center'><b>+</b></td>
            <td style='width:30%;color:white;background-color:red'>Red</td>
            <td style='width:5%;text-align:center'><b>=</b></td>
            <td style='width:30%;color:white;background-color:magenta'>Magenta</td>
        </tr>
    </table>
    <hr>
    <h3>Смешивание чернил (CMY)</h3>
    <p>Вторичные цвета Blue, Red, Green.</p>
    <table class='w3-table w3-bordered w3-border'>
        <tr>
            <td style='width:30%;background-color:cyan'>Cyan</td>
            <td style='width:5%;text-align:center'><b>+</b></td>
            <td style='width:30%;color:white;background-color:magenta'>Magenta</td>
            <td style='width:5%;text-align:center'><b>=</b></td>
            <td style='width:30%;color:white;background-color:blue'>Blue</td>
        </tr>
        <tr>
            <td style='width:30%;color:white;background-color:magenta'>Magenta</td>
            <td style='width:5%;text-align:center'><b>+</b></td>
            <td style='width:30%;background-color:yellow'>Yellow</td>
            <td style='width:5%;text-align:center'><b>=</b></td>
            <td style='width:30%;color:white;background-color:red'>Red</td>
        </tr>
        <tr>
            <td style='width:30%;background-color:yellow'>Yellow</td>
            <td style='width:5%;text-align:center'><b>+</b></td>
            <td style='width:30%;background-color:cyan'>Cyan</td>
            <td style='width:5%;text-align:center'><b>=</b></td>
            <td style='width:30%;background-color:lime'>Green</td>
        </tr>
    </table>
    <div class='w3-panel w3-note'>
        <p>Обратите внимание, что смешивание первичных цветов CMY даёт основные цвета света (RGB).</p>
    </div>
    <hr>
    <h3>Смешивание краски (RYB)</h3>
    <p>Вторичные цвета Orange, Green, Purple.</p>
    <table class='w3-table w3-bordered w3-border'>
        <tr>
            <td style='width:30%;color:white;background-color:#fe2712'>Red</td>
            <td style='width:5%;text-align:center'><b>+</b></td>
            <td style='width:30%;background-color:#fefe33'>Yellow</td>
            <td style='width:5%;text-align:center'><b>=</b></td>
            <td style='width:30%;color:white;background-color:#fb9902'>Orange</td>
        </tr>
        <tr>
            <td style='width:30%;background-color:#fefe33'>Yellow</td>
            <td style='width:5%;text-align:center'><b>+</b></td>
            <td style='width:30%;color:white;background-color:#0247fe'>Blue</td>
            <td style='width:5%;text-align:center'><b>=</b></td>
            <td style='width:30%;background-color:#66b032'>Green</td>
        </tr>
        <tr>
            <td style='width:30%;color:white;background-color:#0247fe'>Blue</td>
            <td style='width:5%;text-align:center'><b>+</b></td>
            <td style='width:30%;color:white;background-color:#fe2712'>Red</td>
            <td style='width:5%;text-align:center'><b>=</b></td>
            <td style='width:30%;color:white;background-color:#8601af'>Purple</td>
        </tr>
    </table>
    <hr>

    <div class='w3-row'>
        <div class='w3-half'>
            <h2>Третичные цвета</h2>
            <p>Третичные цвета производятся путем смешивания одного <strong>первичного</strong> и одного <strong>вторичного</strong> цвета в системе цветов.</p>
            <p>Есть шесть именованных третичных цвета в RYB:</p>
            <ul>
                <li>Red-Orange</li>
                <li>Yellow-Orange</li>
                <li>Yellow-Green</li>
                <li>Blue-Green</li>
                <li>Blue-Purple</li>
                <li>Red-Purple</li>
            </ul>
        </div>
        <div class='w3-half'>
            <img class='w3-right' src='../images/img_tertiary.jpg' alt='Tertiary' style='width:90%'>
        </div>
    </div>
    <p><b>Примечание.</b> На последнем рисунке обозначены: primary - первичный цвет, secondary - вторичный цвет, tertiary - третичный цвет.</p>
    <hr>
    <p>Уроки по использованию цветов на веб-страницах смотрите на нашем сайте <?php include '../include/w3schools.php'; ?> в разделах
        <a href="../html/html_colors.php">HTML Цвета</a> и <a href="../css/css_colors.php">CSS Цвета</a>.</p>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='colors_gradient.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='colors_wheels.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>