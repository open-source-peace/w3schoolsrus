<?php include '../include/head.php'; ?>
<title>HTML Цветовые схемы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Цветовые схемы. Ахроматические, монохроматические, аналогичные, комплементарные, триады, скомпонованные. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1>Цветовые <span class='color_h1'>схемы</span></h1>

    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='colors_hues.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='colors_palettes.php'>Next &#10095;</a>
    </div>
    <hr>

    <div class='w3-cell'>
        <div class='w3-half w3-container w3-blue shadow-black-1 box-shadow-black-1'>
            <h1>Цветовые схемы</h1>
            <p>Цветовые схемы - это логические сочетания цветов на цветовом колесе.</p>
            <p>Назначение цветовой схемы - создать эстетическое чувство стиля и привлекательности.</p>
        </div>
        <div class='w3-half w3-container w3-center'>
            <img alt='Цветовое колесо' src='../images/pic_ryb_itten.jpg' style='max-width:200px;height:auto;'>
        </div>
    </div>
    <hr>
    <h2>Ахроматические цветовые схемы</h2>
    <div class='w3-row'>
        <div class='w3-col m3 w3-center'>
            <div class='w3-padding w3-border'>
                <p>Черный текст на белом фоне.</p>
            </div>
            <div class='w3-padding w3-black'>
                <p>Белый текст на черном фоне.</p>
            </div>
        </div>
        <div class='w3-col m9 w3-container'>
            <p>Черно-белая ахроматическая цветовая схема - это цветовая схема по умолчанию для веб-страницы.</p>
            <p>Ахроматическая цветовая схема белого на чёрном часто является лучшей для небольших устройств.</p>
            <p>Белый текст на чёрном фоне требует меньше энергии (улучшает время автономной работы) для большинства технологий отображения.</p>
        </div>
    </div>
    <hr>

    <h2>Монохроматические цветовые схемы</h2>
    <div class='w3-row'>
        <div class='w3-col m3 w3-center'>
            <img alt='Монохроматические цветовые схемы' src='../images/img_monochromatic.png' style='width:100%;max-width:200px;height:auto;'>
        </div>
        <div class='w3-col m9 w3-container'>
            <p>Монохроматические (однотонные) цветовые схемы легко создать, поскольку в них используется только один цвет.</p>
            <p>Монохроматические схемы используют различные тона с одного и того же угла на цветовом колесе (<strong>одинаковый оттенок</strong>).</p>
            <p>Экспериментируйте и узнавайте больше, используя наш <a href='colors_monochromatic.php'>Генератор монохроматических цветовых схем</a>.</p>
        </div>
    </div>
    <hr>

    <h2>Аналогичные цветовые схемы</h2>
    <div class='w3-row'>
        <div class='w3-col m3 w3-center'>
            <img alt='Аналогичные цветовые схемы' src='../images/img_analogous.png' style='width:100%;max-width:200px;height:auto;'>
        </div>
        <div class='w3-col m9 w3-container'>
            <p>Аналогичные цветовые схемы также легко создать.</p>
            <p>Аналогичные цветовые схемы создаются с помощью цветов, которые находятся рядом друг с другом на цветовом колесе.</p>
            <p>Экспериментируйте и узнавайте больше, используя наш <a href='colors_analogous.php'>Генератор аналогичных цветовых схем</a>.</p>
        </div>
    </div>
    <hr>

    <h2>Комплементарные цветовые схемы</h2>
    <div class='w3-row'>
        <div class='w3-col m3 w3-center'>
            <img alt='Комплементарные цветовые схемы' src='../images/img_complementary.png' style='width:100%;max-width:200px;height:auto;'>
        </div>
        <div class='w3-col m9 w3-container'>
            <p>Комплементарные цветовые схемы создаются сочетанием цветов с противоположных сторон цветового колеса.</p>
            <p>Экспериментируйте и узнавайте больше, используя наш <a href='colors_complementary.php'>Генератор комплементарных цветовых схем</a>.</p>
        </div>
    </div>
    <hr>

    <h2>Триады</h2>
    <div class='w3-row'>
        <div class='w3-col m3 w3-center'>
            <img alt='Триадичные цветовые схемы' src='../images/img_triadic.png' style='width:100%;max-width:200px;height:auto;'>
        </div>
        <div class='w3-col m9 w3-container'>
            <p>Триадичные цветовые схемы состоят из оттенков, одинаково расположенных вокруг цветового колеса.</p>
            <p>Экспериментируйте и узнавайте больше, используя наш <a href='colors_triadic.php'>Триадичный генератор цветовых схем</a>.</p>
        </div>
    </div>
    <hr>

    <h2>Скомпонованные цветовые схемы (ака Сплит-комплементарные)</h2>
    <div class='w3-row'>
        <div class='w3-col m3 w3-center'>
            <img alt='Скомпонованные цветовые схемы (ака Сплит-комплементарные)' src='../images/img_compound.png' style='width:100%;max-width:200px;height:auto;'>
        </div>
        <div class='w3-col m9 w3-container'>
            <p>Скомпонованные цветовые схемы - это почти то же самое, что комплементарные схемы.</p>
            <p>Вместо того, чтобы использовать противоположные цвета, она использует цвета с обеих сторон противоположного оттенка.</p>
            <p>Экспериментируйте и узнавайте больше, используя наш <a href='colors_compound.php'>Генератор скомпонованных цветовых схем</a>.</p>
        </div>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='colors_hues.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='colors_palettes.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>