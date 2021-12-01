<?php include '../include/head.php'; ?>

  <title>CSS Макет - Примеры Float. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Макет - Примеры Float. Как сделать обтекание текста или картинки? Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .flex-container {
            display: flex;
            flex-wrap: nowrap;
            background-color: DodgerBlue;
        }
        .flex-container > div {
            background-color: #f1f1f1;
            width: 50%;
            margin: 10px;
            text-align: center;
            line-height: 50px;
            font-size: 24px;
        }
        ul.navbarmenu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        ul.navbarmenu li {
            float: left;
        }
        ul.navbarmenu li a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        ul.navbarmenu li a:hover {
            background-color: #111;
        }
        ul.navbarmenu li a.active {
            background-color: red;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS Макет<span class="color_h1"> - Примеры Float</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_float_clear.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_inline-block.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Эта страница содержит общие примеры с float.</p>
    <hr>
    <h2>Сетка блоков / Блоки одинаковой ширины</h2>
    <div class="w3-row-padding w3-center" style="margin:0 -16px">
        <div class="w3-col s6 w3-padding-32" style="background-color:#bbb">
            <p>Блок 1</p>
        </div>
        <div class="w3-col s6 w3-padding-32" style="background-color:#ccc">
            <p>Блок 2</p>
        </div>
    </div>
    <br>
    <div class="w3-row-padding w3-center" style="margin:0 -16px">
        <div class="w3-col s4 w3-padding-32" style="background-color:#bbb">
            <p>Блок 1</p>
        </div>
        <div class="w3-col s4 w3-padding-32" style="background-color:#ccc">
            <p>Блок 2</p>
        </div>
        <div class="w3-col s4 w3-padding-32" style="background-color:#ddd">
            <p>Блок 3</p>
        </div>
    </div>
    <p>С помощью свойства <code class="w3-codespan">float</code> можно легко размещать блоки с содержимым рядом друг с другом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            * {<br>&nbsp;&nbsp;box-sizing: border-box;<br>}<br><br>.box {<br>&nbsp; float: left;<br>&nbsp; width: 33.33%; /* три блока (используйте 25% для четырех и 50% для двух и т.д.) */<br>&nbsp; padding: 50px; /* если вы хотите пространство между изображениями */<br>}</div>
        <a target="_blank" href="../csstryit/trycss_float_boxes.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note w3-panel">
        <p><strong>Что такое box-sizing (размер блока)?</strong></p>
        <p>Вы можете легко создать три плавающих блока рядом. Однако, когда вы добавляете что-то, что увеличивает ширину каждого блока (например, отступы или границы), блок ломается. Свойство <code class="w3-codespan">box-sizing</code> позволяет нам включать отступ и границу в общую ширину (и высоту) поля, следя за тем, чтобы отступы оставались внутри поля и не ломали блок.</p>
        <p>Вы можете узнать больше о свойстве box-sizing в главе <a href="css3_box-sizing.php">CSS box-sizing</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <h2>Изображения друг за другом</h2>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-col m4">
            <img src="../images/img_5terre.jpg" alt="Italy" style="width:100%;height: 220px">
        </div>
        <div class="w3-col m4">
            <img src="../images/img_forest.jpg" alt="Forest" style="width:100%;height: 220px">
        </div>
        <div class="w3-col m4">
            <img src="../images/img_mountains.jpg" alt="Mountains" style="width:100%;height: 220px">
        </div>
    </div>
    <p>Сетка блоков также может использоваться для отображения изображений рядом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .img-container {<br>&nbsp; float: left;<br>&nbsp; width: 33.33%; /* три контейнера (используйте 25% для четырех и 50% для двух и т.д.) */<br>&nbsp; padding: 5px; /* если вы хотите пространство между изображениями */<br>}</div>
        <a target="_blank" href="../csstryit/trycss_float_images_side.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Блоки одинаковой высоты</h2>
    <p>В предыдущем примере вы узнали, как размещать блоки друг возле друга с одинаковой шириной. Однако создать плавающие блоки одинаковой высоты непросто. Но есть быстрое решение - установить фиксированную высоту, как в примере ниже:</p>
    <div class="w3-row-padding w3-center" style="margin:0 -16px">
        <div class="w3-col s6 w3-padding-32" style="background-color:#bbb;height:300px">
            <h2>Блок 1</h2>
            <p>Какой-то контент контент, Какой-то контент контент, Какой-то контент контент</p>
        </div>
        <div class="w3-col s6 w3-padding-32" style="background-color:#ccc;height:300px">
            <h2>Блок 2</h2>
            <p>Какой-то контент, Какой-то контент, Какой-то контент</p>
            <p>Какой-то контент, Какой-то контент, Какой-то контент</p>
            <p>Какой-то контент, Какой-то контент, Какой-то контент</p>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .box {<br>&nbsp; height: 500px;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_float_boxes_height.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p><strong>Однако</strong> это не очень гибкий вариант. Это нормально, если вы можете гарантировать, что в блоках всегда будет одинаковое количество содержимого. Но часто содержимое не одинаковое. Если вы попробуете приведенный выше пример на мобильном телефоне, вы увидите, что содержимое второго окна будет отображаться за пределами поля. Здесь пригодится CSS3 Flexbox - он может автоматически растягивать блоки до размера самого длинного блока:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Использование <strong>Flexbox</strong> для создания гибких блоков:</p>
        <div class="w3-padding w3-padding-16 w3-white">
            <div class="flex-container">
                <div>Блок 1 - Это некоторый текст, чтобы убедиться, что контент становится действительно высоким. Это некоторый текст, чтобы убедиться, что контент становится действительно высоким. Это текст, чтобы убедиться, что контент становится действительно высоким.</div>
                <div>Блок 2 - Моя высота будет соответствовать Блоку 1.</div>
            </div>
        </div>
        <a target="_blank" href="../csstryit/trycss_float_boxes_flex.html" class="w3-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p>Единственная проблема с Flexbox заключается в том, что он не работает в Internet Explorer 10 или более ранних версиях. Вы можете узнать больше о модуле макета Flexbox в главе <a href="css3_flexbox.php">CSS Flexbox</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>

    <h2>Меню навигации</h2>
    <p>Используйте <code class="w3-codespan">float</code> со списком гиперссылок, чтобы создать горизонтальное меню:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-white w3-padding">
            <ul class="navbarmenu">
                <li><a href="javascript:void(0)" class="active">Главная</a></li>
                <li><a href="javascript:void(0)">Новости</a></li>
                <li><a href="javascript:void(0)">Контакты</a></li>
                <li class="w3-hide-small"><a href="javascript:void(0)">Про нас</a></li>
            </ul>
        </div>
        <a target="_blank" href="../csstryit/trycss_float5.html" class="w3-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Пример веб-макета</h2>
    <p>Также часто делают веб-макеты целиком с помощью свойства <code class="w3-codepan">float</code>:</p>
    <iframe src="../csstryit/trycss_layout_cols.html" class="w3-hide-small" style="width:100%;border:1px solid #f1f1f1;height:420px;padding:5px;overflow:auto"></iframe>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .header, .footer {<br>&nbsp; background-color: grey;<br>&nbsp;&nbsp;color: white;<br>
            &nbsp; padding: 15px;<br>}<br><br>.column {<br>&nbsp; float: left;<br>&nbsp;
            padding: 15px;<br>}<br><br>.clearfix::after {<br>&nbsp;&nbsp;content:
            &quot;&quot;;<br>&nbsp;&nbsp;clear: both;<br>&nbsp; display: table;<br>
            }<br><br>.menu {<br>&nbsp;
            width: 25%;<br>}<br><br>.content {<br>&nbsp;&nbsp;width: 75%;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_layout_cols.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Больше примеров</h2>
    <p><a target="_blank" href="../csstryit/trycss_float2.html">Изображение с границей и полями, которое располагается справа в параграфе</a><br>
        Пусть изображение перемещается вправо в параграфе. Добавить границу и поля к изображению.</p>
    <p><a target="_blank" href="../csstryit/trycss_float3.html">Изображение с подписями, которые располагаются справа</a><br>
        Пусть изображение с подписью располагается справа.</p>
    <p><a target="_blank" href="../csstryit/trycss_float4.html">Пусть первая буква параграфа располагается слева</a><br>
        Пусть первая букве параграфа располагается слева и буква приобретает стиль.</p>
    <p><a target="_blank" href="../csstryit/trycss_layout_webpage.html">Создание веб-сайта с помощью float</a><br>
        Используйте float для создания домашней страницы с панелью навигации, заголовком, нижним колонтитулом, содержимым слева и основным содержимым.</p>
    <hr>

    <h2>Все CSS свойства Float</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_box-sizing.php">box-sizing</a></td>
            <td>Определяет, как рассчитываются ширина и высота элемента: должны ли они включать отступы и границы или нет</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_class_clear.php">clear</a></td>
            <td>Определяет, какие элементы могут плавать рядом с очищенным элементом и с какой стороны</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_class_float.php">float</a></td>
            <td>Определяет, как элемент должен плавать</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_pos_overflow.php">overflow</a></td>
            <td>Указывает, что происходит, если содержимое выходит за пределы поля элемента</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_overflow-x.php">overflow-x</a></td>
            <td>Определяет, что делать с левым / правым краями содержимого, если оно выходит за пределы области содержимого элемента</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_overflow-y.php">overflow-y</a></td>
            <td>Определяет, что делать с верхними / нижними краями содержимого, если они выходят за пределы области содержимого элемента</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_float_clear.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_inline-block.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>