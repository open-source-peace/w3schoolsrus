<?php include '../include/head.php'; ?>

  <title>CSS Макет. Свойство display. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Макет. Свойство display. Как переопределить значение display по умолчанию. Как скрывать элементы на веб-странице? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <script>
        function myShowFunction() {
            document.getElementById("panel").style.display = "block";
        }
    </script>
    <style>
        #panel, .flip {
            font-size: 16px;
            padding: 10px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            border: solid 1px #a6d8a8;
            margin: auto;
            cursor:pointer;
        }

        #panel {
            display: none;
            cursor:auto;
        }
        .test .w3-row-padding>.w3-col {
            padding: 0 8px;
            margin: 6px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Макет - Свойство</span> display</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_table.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_max-width.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Свойство <code class="w3-codespan">display</code> является наиболее важным свойством CSS для управления макетом.</p>
    <hr>

    <h2>Свойство display</h2>
    <p>Свойство <code class="w3-codespan">display</code> определяет, как элемент отображается.</p>
    <p>Каждый элемент HTML имеет отображаемое значение по умолчанию в зависимости от типа элемента. Значением по умолчанию для большинства элементов является <code class="w3-codespan">block</code> или <code class="w3-codespan">inline</code>.</p>
    <p class="flip" onclick="myShowFunction()">Нажмите, чтобы показать панель</p>

    <div id="panel">
        <p>Эта панель содержит элемент &lt;div&gt; который по умолчанию скрыт (<code class="w3-codespan">display: none</code>).</p>
        <p>Он стилизован под CSS, и мы используем JavaScript для его отображения (измените его на (<code class="w3-codespan">display: block</code>).</p>
    </div>
    <hr>

    <h2>Блочные элементы</h2>
    <p>Блочный элемент всегда начинается с новой строки и занимает всю доступную ширину (растягивается влево и вправо, насколько это возможно).</p>

    <div class="w3-theme-border" style="border-width:3px;border-style:solid;">
        Элемент &lt;div&gt; является блочным элементом.</div>

    <p>Примеры блочных элементов:</p>
    <ul>
        <li>&lt;div&gt;</li>
        <li>&lt;h1&gt; - &lt;h6&gt;</li>
        <li>&lt;p&gt;</li>
        <li>&lt;form&gt;</li>
        <li>&lt;header&gt;</li>
        <li>&lt;footer&gt;</li>
        <li>&lt;section&gt;</li>
    </ul>
    <hr>

    <h2>Встроенные (строчные) элементы</h2>
    <p>Встроенный элемент не начинается с новой строки и занимает столько ширины, сколько необходимо.</p>

    <p>Это <span class="w3-theme-border" style="border-width:3px;border-style:solid;">встроенный элемент &lt;span&gt; внутри</span> параграфа.</p>

    <p>Примеры встроенных элементов:</p>
    <ul>
        <li>&lt;span&gt;</li>
        <li>&lt;a&gt;</li>
        <li>&lt;img&gt;</li>
    </ul>
    <hr>

    <h2>Display: none;</h2>
    <p><code class="w3-codespan">display: none;</code> обычно используется с JavaScript для скрытия и отображения элементов без их удаления и повторного создания. Посмотрите на наш последний пример на этой странице, если вы хотите знать, как этого можно достичь.</p>
    <p>Элемент <code class="w3-codespan">&lt;script&gt;</code> использует <code class="w3-codespan">display: none;</code> по умолчанию.</p>
    <hr>

    <h2>Переопределить значение display по умолчанию</h2>
    <p>Как уже упоминалось, каждый элемент имеет отображаемое значение по умолчанию. Однако вы можете переопределить это.</p>
    <p>Замена встроенного элемента на блочный или наоборот может быть полезной для придания странице оригинального вида и при этом соблюдения веб-стандартов.</p>
    <p>Типичным примером являются встроенные элементы <code class="w3-codespan">&lt;li&gt;</code> для горизонтальных меню:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            li {<br>&nbsp;&nbsp;display: inline;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_display_inline_list.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Установка свойства отображения элемента только изменяет <strong>способ отображения элемента</strong>, а НЕ КАКОЙ это элемент. Таким образом, встроенный элемент с <code class="w3-codespan">display: block;</code> не может содержать другие элементы блока внутри него.</p>
    </div>

    <p>В следующем примере элементы <code class="w3-codespan">&lt;span&gt;</code> отображаются как блочные элементы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            span {<br>&nbsp; display: block;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_display_block.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>В следующем примере элементы <code class="w3-codespan">&lt;a&gt;</code> отображаются как блочные элементы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            a {<br>&nbsp; display: block;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_display_block_a.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Чтобы скрыть элемент - display:none или visibility:hidden?</h2>

    <div class="w3-content test" style="max-width:800px">
        <div class="w3-row-padding w3-center" style="margin:0 -16px">
            <div class="w3-col w3-border" id="imgbox1" style="width:30%;"><p style="word-wrap: break-word;"><code class="w3-codespan">display:none</code></p>
                <img src="../images/img_5terre.jpg" style="width:100%;height: 150px" alt="Italy">
                <p><button class="w3-button w3-block w3-green" onclick="removeElement()">Удалить</button></p>
            </div>
            <div class="w3-col w3-border" style="width:30%;" id="imgbox2"><p style="word-wrap: break-word;"><code class="w3-codespan">visibility:hidden</code></p>
                <img src="../images/img_forest.jpg" style="width:100%;height: 150px"  alt="Forest">
                <p><button class="w3-button w3-block w3-green" onclick="changeVisibility()">Скрыть</button></p>
            </div>
            <div class="w3-col w3-border" style="width:30%;"><p>Сбросить</p>
                <img src="../images/img_lights.jpg" style="width:100%;height: 150px"  alt="Lights">
                <p><button class="w3-button w3-block w3-green" onclick="resetElement()">Сбросить все</button></p>
            </div>
        </div>
    </div>
    <script>
        function removeElement() {
            document.getElementById("imgbox1").style.display = "none";
        }

        function changeVisibility() {
            document.getElementById("imgbox2").style.visibility = "hidden";
        }

        function resetElement() {
            document.getElementById("imgbox1").style.display = "block";
            document.getElementById("imgbox2").style.visibility = "visible";
        }
    </script>

    <p>Скрыть элемент можно, установив для свойства <code class="w3-codespan">display</code> значение <code class="w3-codespan">none</code>. Элемент будет скрыт, а страница будет отображаться так, как если бы элемента там не было:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1.hidden {<br>&nbsp;&nbsp;display: none;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_display_none.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Значение <code class="w3-codespan">visibility:hidden;</code> также скрывает элемент.</p>
    <p>Однако элемент все равно будет занимать то же пространство, что и раньше. Элемент будет скрыт, но все равно повлияет на макет:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1.hidden {<br>&nbsp;&nbsp;visibility: hidden;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_visibility_hidden.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Больше примеров</h2>

    <p><a href="../csstryit/trycss_display.html" target="_blank">Различия между display: none; и visibility: hidden;</a><br>Этот пример демонстрирует display: none; по сравнению с visibility: hidden;</p>

    <p><a href="../csstryit/trycss_display_js.html" target="_blank">Использование CSS вместе с JavaScript для отображения контента</a><br>Этот пример демонстрирует, как использовать CSS и JavaScript, чтобы показать элемент при клике.</p>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_display_visibility1" target="_blank">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_display_visibility2" target="_blank">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_display_visibility3" target="_blank">Упражнение 3 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_display_visibility4" target="_blank">Упражнение 4 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>CSS Свойства Display/Visibility</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:28%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/pr_class_display.html">display</a></td>
            <td>Определяет, как должен отображаться элемент</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_class_visibility.html">visibility</a></td>
            <td>Указывает, должен ли элемент быть видимым</td>
        </tr>
    </table>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_table.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_max-width.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>