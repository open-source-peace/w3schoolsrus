<?php include '../include/head.php'; ?>

<title>CSS Пагинация (нумерация страниц). <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Пагинация (нумерация страниц). Как добавить номера страниц на веб-странице с помощью CSS? Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .pagination,.pagination2,.pagination3 {
            display: inline-block;
            padding: 0;
            margin: 8px 0;
        }
        .pagination li,.pagination2 li,.pagination3 li {display: inline;}
        .pagination li a, .pagination2 li a,.pagination3 li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }
        .border li a {
            transition: background-color .3s;
            border:1px solid #ddd;
        }
        .size li a {font-size:22px;}
        .btnround li a {border-radius: 5px;}
        .hover li a {transition: background-color .3s;}
        .margin li a {margin:0 4px;}
        .pagination3 li:first-child a {
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        .pagination3 li:last-child a {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        ul.pagination2 li a.active, ul.pagination3 li a.active {
            background-color: #4CAF50;
            color: white;
            border:1px solid #4CAF50;
        }
        ul.pagination2 li a:hover:not(.active),
        ul.pagination3 li a:hover:not(.active) {background-color: #ddd;}
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
        }
        ul.breadcrumb li {display: inline;}
        ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: "/\00a0";
        }
        .cssHigh {
            margin-left: 0;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Пагинация. Примеры нумерации страниц</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_buttons.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_multiple_columns.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, как создать <strong>адаптивную нумерацию страниц</strong> с помощью CSS.</p>
    <hr>

    <h2>Простая нумерация страниц</h2>
    <p>Если у вас есть веб-сайт с большим количеством страниц, вы можете добавить какую-то нумерацию страниц на каждую страницу:</p>

    <div class="w3-row w3-margin-top">
        <div class="w3-twothird">
            <ul class="pagination">
                <li><a href="javascript:void(0)">&laquo;</a></li>
                <li><a class="w3-red" href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">4</a></li>
                <li><a href="javascript:void(0)">5</a></li>
                <li><a href="javascript:void(0)">6</a></li>
                <li><a href="javascript:void(0)">&raquo;</a></li>
            </ul>
        </div>

        <div class="w3-third w3-hide-small">
            <ul class="pagination w3-border xw3-round">
                <li><a href="javascript:void(0)" class="w3-border-right">&#10094; &nbsp;</a></li>
                <li><a href="javascript:void(0)">&nbsp; &#10095;</a></li>
            </ul>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .pagination {<br>&nbsp;&nbsp;display: inline-block;<br>}<br><br>.pagination a {<br>&nbsp;&nbsp;color:
            black;<br>&nbsp; float: left;<br>&nbsp; padding: 8px
            16px;<br>&nbsp; text-decoration: none;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_ex_pagination.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Активная и при наведении курсора нумерация страниц</h2>
    <ul class="pagination2">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a class="active" href="#" style="border:none !important;">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
    <p>Выделите текущую страницу с помощью класса <code class="w3-codespan">.active</code> и используйте селектор <code class="w3-codespan">:hover</code> для изменения цвета каждой ссылки на страницу при наведении на них указателя мыши:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .pagination a.active {<br>&nbsp; background-color:
            #4CAF50;<br>&nbsp;&nbsp;color: white;<br>}<br><br>.pagination a:hover:not(.active) {background-color: #ddd;}</div>
        <a target="_blank" href="../csstryit/trycss_ex_pagination_active.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h3 style="margin-top:35px;">Округлые активные и при наведении курсора кнопки</h3>
    <ul class="pagination2 btnround">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a class="active" href="#" style="border:none !important;border-radius:5px;">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>

    <p>Добавьте свойство <code class="w3-codespan">border-radius</code>, если хотите, чтобы кнопки &quot;активная&quot; и &quot;при наведении&quot; были округлыми:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .pagination a {<br>&nbsp;&nbsp;border-radius: 5px;<br>}<br><br>.pagination a.active {<br>&nbsp;&nbsp;border-radius: 5px;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_ex_pagination_active_round.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h3 style="margin-top:35px;">Эффект перехода при наведении</h3>
    <ul class="pagination2 hover">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a class="active" href="#" style="border:none !important;">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>

    <p>Добавьте свойство <code class="w3-codespan">transition</code> к ссылкам на странице, чтобы создать эффект перехода при наведении:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .pagination a {<br>&nbsp;&nbsp;transition: background-color .3s;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_ex_pagination_transition.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Границы нумерации страниц</h2>
    <ul class="pagination2 border">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a class="active" href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
    <p>Используйте свойство <code class="w3-codespan">border</code> чтобы добавить границы к нумерации страниц:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .pagination a {<br>&nbsp;&nbsp;border: 1px solid #ddd; /* Серый
            */<br>}<br></div>
        <a target="_blank" href="../csstryit/trycss_ex_pagination_border.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h3 style="margin-top:35px;">Округлые границы</h3>
    <p><b>Совет:</b> Добавьте округлые границы к первой и последней ссылке в нумерации страниц:</p>
    <ul class="pagination3 border">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a class="active" href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .pagination a:first-child {<br>&nbsp;&nbsp;border-top-left-radius:
            5px;<br>&nbsp;&nbsp;border-bottom-left-radius: 5px;<br>}<br><br>.pagination
            a:last-child {<br>&nbsp;&nbsp;border-top-right-radius: 5px;<br>&nbsp;&nbsp;border-bottom-right-radius: 5px;<br>}<br></div>
        <a target="_blank" href="../csstryit/trycss_ex_pagination_border_round.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h3 style="margin-top:35px;">Пространство между ссылками</h3>
    <p><b>Совет:</b> Добавьте свойство <code class="w3-codespan">margin</code> если вы не хотите группировать ссылки на страницы:</p>
    <ul class="pagination2 border margin">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a class="active" href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .pagination a {<br>&nbsp;&nbsp;margin: 0 4px; /* 0 сверху и снизу. Это можно изменить */<br>}<br></div>
        <a target="_blank" href="../csstryit/trycss_ex_pagination_margin.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Размер пагинации</h2>
    <ul class="pagination2 border size">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a class="active" href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
    <p>Измените размер нумерации страниц с помощью свойства <code class="w3-codespan">font-size</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .pagination a {<br>&nbsp;&nbsp;font-size: 22px;<br>}<br></div>
        <a target="_blank" href="../csstryit/trycss_ex_pagination_size.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Центрирование пагинации</h2>
    <div style="text-align:center;">
        <ul class="pagination2 border">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a class="active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
    <p>Чтобы центрировать нумерацию страниц, оберните вокруг него элемент контейнера (например &lt;div&gt;) с помощью <code class="w3-codespan">text-align:center</code></p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .center {<br>&nbsp; text-align: center;<br>}<br></div>
        <a target="_blank" href="../csstryit/trycss_ex_pagination_center.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Больше примеров</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-white w3-padding cssHigh">
            <iframe src="../csstryit/trycss_ex_pagination_nav_ifr.html" style="border:none;width:100%;height:200px;"></iframe>
        </div>
        <a target="_blank" href="../csstryit/trycss_ex_pagination_nav.html" class="w3-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Хлебные крошки</h2>
    <ul class="breadcrumb">
        <li><a href="javascript:void(0)">Home</a></li>
        <li><a href="javascript:void(0)">Pictures</a></li>
        <li><a href="javascript:void(0)">Summer 15</a></li>
        <li style="color:green">Italy</li>
    </ul>
    <p>Еще один вариант пагинации так называемый &quot;breadcrumbs&quot; - &quot;хлебные крошки&quot;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ul.breadcrumb {<br>&nbsp; padding: 8px 16px;<br>&nbsp;
            list-style: none;<br>&nbsp; background-color: #eee;<br>}<br><br>
            ul.breadcrumb li {display: inline;}<br><br>ul.breadcrumb li+li:before {<br>&nbsp;
            padding: 8px;<br>&nbsp; color: black;<br>&nbsp;&nbsp;content: &quot;/\00a0&quot;;<br>}<br></div>
        <a target="_blank" href="../csstryit/trycss_breadcrumbs.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_buttons.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_multiple_columns.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>