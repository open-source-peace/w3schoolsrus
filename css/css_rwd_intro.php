<?php include '../include/head.php'; ?>

<title>CSS Адаптивный веб-дизайн. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Адаптивный веб-дизайн. Как сделать сайт адаптивным? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>Responsive Web Design - Адаптивный веб-дизайн. <span class="color_h1">Введение</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_mediaqueries_ex.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_viewport.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Что такое адаптивный веб-дизайн?</h2>
    <p><strong>Адаптивный веб-дизайн</strong> делает вашу веб-страницу хорошо выглядящей на всех устройствах.</p>
    <p><strong>Адаптивный веб-дизайн</strong> использует только HTML и CSS.</p>
    <p><strong>Адаптивный веб-дизайн</strong> - это не программа или JavaScript.</p>
    <hr>

    <h2>Проектирование для лучшего применения всеми пользователями</h2>
    <p>Веб-страницы можно просматривать с разных устройств: настольных компьютеров, планшетов и телефонов. Ваша веб-страница должна хорошо выглядеть и быть простой в использовании независимо от устройства и размеров экрана.</p>

    <p>Веб-страницы не должны пропускать информацию для устройств меньшего размера, а должны адаптировать ее содержимое для любого устройства:</p>
    <br>
    <div class="w3-row-padding" style="text-align:center;font-weight:bold;font-size:90%;margin:-8px -16px 24px -16px">
        <div class="w3-col m6 s12">
            <img src="../images/rwd_desktop.png" style="border:2px solid #ddd;" alt="Адаптивный веб-дизайн. Большой экран">
            <br>
            Desktop
        </div>
        <div class="w3-col m4 s12">
            <img src="../images/rwd_tablet.png" style="border:2px solid #ddd;" alt="Адаптивный веб-дизайн. Средний экран">
            <br>
            Tablet
        </div>
        <div class="w3-col m2 s12">
            <img src="../images/rwd_phone.png" style="border:2px solid #ddd;" alt="Адаптивный веб-дизайн. Маленький экран">
            <br>
            Phone
        </div>
    </div>
    <p>Такой дизайн называется адаптивным веб-дизайном, когда вы используете CSS и HTML для изменения размера, скрытия, сжатия, увеличения или перемещения контента, чтобы он хорошо выглядел на любом экране.</p>

    <p>Не беспокойтесь, если вы ещё не понимаете приведенный ниже пример, мы разберем код, шаг за шагом, в следующих главах:</p>
    <iframe src="../csstryit/tryresponsive_col-s_ifr.html" style="border:6px solid #eee;width:100%;height:585px;margin-bottom:-6px"></iframe>
    <div class="w3-light-grey w3-padding" style="padding-top:10px;padding-bottom:12px!important">
        <a class="w3-btn" target="_blank" href="../csstryit/tryresponsive_col-s.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_mediaqueries_ex.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_viewport.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>