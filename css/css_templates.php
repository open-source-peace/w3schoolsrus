<?php include '../include/head.php'; ?>

<title>CSS Шаблоны макетов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Шаблоны макетов. Использование трёх способов вёрстки: float, flex, grid. Что лучше? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Шаблоны</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_grid_item.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_examples.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Шаблоны макетов</h2>
    <p>Предлагаем вам несколько адаптивных стартовых шаблонов, созданных с помощью CSS.</p>
    <p>Вы можете изменять, сохранять, делиться и использовать их во всех своих проектах.</p>

    <div class="w3-row-padding" style="margin:24px -22px">
        <div class="w3-col l6">
            <div class="w3-card-2 w3-padding w3-padding-16"><p style="margin-top:0">Заголовок, равные столбцы и нижний колонтитул:</p>
                <iframe src="../csstryit/trycss_template_ifr.html" style="border:0;width:100%;overflow:hidden;height:280px;"></iframe>
                <a target="_blank" href="../csstryit/trycss_template1_float.html" class="w3-btn w3-block" style="margin-top:8px">Попробуй это (используя float) &raquo;</a>
                <a target="_blank" href="../csstryit/trycss_template1_flexbox.html" class="w3-btn w3-block" style="margin-top:8px">Попробуй это (используя flexbox) &raquo;</a>
                <a target="_blank" href="../csstryit/trycss_template1_grid.html" class="w3-btn w3-block" style="margin-top:8px">Попробуй это (используя grid) &raquo;</a>
            </div>
        </div>

        <div class="w3-col l6">
            <div class="w3-card-2 w3-padding w3-padding-16"><p style="margin-top:0">Заголовок, неравные столбцы и нижний колонтитул:</p>
                <iframe src="../csstryit/trycss_template_ifr3.html" style="border:0;width:100%;overflow:hidden;height:280px;"></iframe>
                <a target="_blank" href="../csstryit/trycss_template2_float.html" class="w3-btn w3-block" style="margin-top:8px">Попробуй это (используя float) &raquo;</a>
                <a target="_blank" href="../csstryit/trycss_template2_flexbox.html" class="w3-btn w3-block" style="margin-top:8px">Попробуй это (используя flexbox) &raquo;</a>
                <a target="_blank" href="../csstryit/trycss_template2_grid.html" class="w3-btn w3-block" style="margin-top:8px">Попробуй это (используя grid) &raquo;</a>
            </div>
        </div>
    </div>
    <div class="w3-row-padding" style="margin:28px -22px">
        <div class="w3-col l6">
            <div class="w3-card-2 w3-padding w3-padding-16"><p style="margin-top:0">Верхняя навигация, контент и нижний колонтитул:</p>
                <iframe src="../csstryit/trycss_template_ifr2.html" style="border:0;width:100%;overflow:hidden;height:280px;"></iframe>
                <a target="_blank" href="../csstryit/trycss_template3.html" class="w3-btn w3-block" style="margin-top:8px">Попробуйте сами &raquo;</a>
            </div>
        </div>
        <div class="w3-col l6">
            <div class="w3-card-2 w3-padding w3-padding-16"><p style="margin-top:0">Боковая навигация и контент:</p>
                <iframe src="../csstryit/trycss_template_ifr4.html" style="border:0;width:100%;overflow:hidden;height:280px;"></iframe>
                <a target="_blank" href="../csstryit/trycss_template4.html" class="w3-btn w3-block" style="margin-top:8px">Попробуйте сами &raquo;</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_grid_item.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_examples.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>