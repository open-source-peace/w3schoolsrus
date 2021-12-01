<?php include '../include/head.php'; ?>

  <title>CSS Макет. Свойство Overflow. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Макет. Свойство Overflow. Переполнение элемента. overflow: visible, hidden, scroll, auto, overflow-x и overflow-y. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        div.hidden {
            padding:4px;
            background-color: #eee;
            width: 200px;
            height: 100px;
            overflow: hidden;
            border:1px dotted red;
        }
        #overflowTest {
            background:#4CAF50;color:white;
            padding:15px;
            width: 100%;
            height: 100px;
            overflow: scroll;border:1px solid #ccc;
        }
        div.visible {
            padding:4px;
            background-color: #eee;
            width: 200px;
            height: 100px;
            overflow: visible;
            border:1px dotted red;
        }
        div.scroll {
            padding:4px;
            background-color: #eee;
            width: 200px;
            height: 100px;
            overflow: scroll;
            border:1px dotted red;
        }
        div.auto {
            padding:4px;
            background-color: #eee;
            width: 200px;
            height: 100px;
            overflow: auto;
            border:1px dotted red;
        }
        div.scrollx {
            padding:4px;
            background-color: #eee;
            width: 200px;
            height: 100px;
            overflow-y: scroll;
            overflow-x: hidden;border:1px dotted red;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS Макет<span class="color_h1"> - Overflow</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_positioning.php">&#10094; Prev</a>
        <a class="w3-right w3-btn"  href="css_float.php">Next &#10095;</a>
    </div>
    <hr>

    <p>CSS свойство <code class="w3-codespan">overflow</code> управляет тем, что происходит с содержимым, которое слишком велико, чтобы поместиться в области.</p>
    <div id="overflowTest">Этот текст очень длинный и высота контейнера составляет всего 100 пикселей. Таким образом, полоса прокрутки добавляется, чтобы помочь читателю прокручивать содержимое. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</div>
    <br>
    <a target="_blank" href="../csstryit/trycss_overflow_intro.html" class="w3-btn">Попробуйте сами &raquo;</a>
    <hr>

    <h2>CSS Overflow</h2>
    <p>Свойство <code class="w3-codespan">overflow</code> указывает, следует ли обрезать содержимое или добавлять полосы прокрутки, если содержимое элемента слишком велико, чтобы поместиться в указанной области. Например, если текст не помещается в блочный элемент <code class="w3-codespan">&lt;div&gt;</code>.</p>
    <p><strong>Overflow</strong> - (<i>перевод с анг.</i>) - Переполнение.</p>
    <p>Свойство <code class="w3-codespan">overflow</code> имеет следующие значения:</p>
    <ul>
        <li><code class="w3-codespan">visible</code> - По умолчанию. Переполнение не обрезается. Контент отображается вне поля элемента</li>
        <li><code class="w3-codespan">hidden</code> - Переполнение обрезается (скрывается), а остальная часть содержимого будет невидимой</li>
        <li><code class="w3-codespan">scroll</code> - Переполнение обрезается, и добавляется полоса прокрутки, чтобы увидеть остальную часть содержимого</li>
        <li><code class="w3-codespan">auto</code> - Аналогичен <code class="w3-codespan">scroll</code>, но добавляет полосы прокрутки только при необходимости</li>
    </ul>
    <div class="w3-note w3-panel">
        <p><strong>Примечание:</strong> Свойство <code class="w3-codespan">overflow</code> работает только для блочных элементов с указанной высотой.</p>
        <p><strong>Примечание:</strong> В OS X Lion (на Mac) полосы прокрутки по умолчанию скрыты и отображаются только при использовании (даже если установлено "overflow: scroll").</p>
    </div>
    <hr>
    <h2>overflow: visible</h2>
    <p>По умолчанию, переполнение <code class="w3-codespan">visible</code> означает, что оно не обрезается и отображается вне поля элемента:</p>
    <div class="visible">Вы можете использовать свойство overflow, когда хотите лучше контролировать макет. Свойство overflow указывает, что происходит, если содержимое переполняет поле элемента.</div>
    <div class="w3-example" style="margin-top:98px;">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp; width: 200px;<br>&nbsp;&nbsp;height:
            50px;<br>&nbsp;&nbsp;background-color: #eee;<br>&nbsp;
            overflow: visible;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_overflow_visible.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>overflow: hidden</h2>
    <p>Со значением <code class="w3-codespan">hidden</code>, переполнение обрезается, а остальное содержимое скрыто:</p>
    <div class="hidden">Вы можете использовать свойство overflow, когда хотите лучше контролировать макет. Свойство overflow указывает, что происходит, если содержимое переполняет блок элемента.</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;&nbsp;overflow: hidden;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_overflow_hidden.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>overflow: scroll</h2>
    <p>При установке значения <code class="w3-codespan">scroll</code> переполнение обрезается, и для прокрутки внутри поля добавляется полоса прокрутки. Обратите внимание, что это добавит полосу прокрутки как по горизонтали, так и по вертикали (даже если она вам не нужна):</p>
    <div class="scroll">Вы можете использовать свойство overflow, когда хотите лучше контролировать макет. Свойство overflow указывает, что происходит, если содержимое переполняет поле элемента.</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;&nbsp;overflow: scroll;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_overflow_scroll.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>overflow: auto</h2>
    <p>Значение <code class="w3-codespan">auto</code> аналогично <code class="w3-codespan">scroll</code>, но добавляет полосы прокрутки только при необходимости:</p>
    <div class="auto">Вы можете использовать свойство overflow, когда хотите лучше контролировать макет. Свойство overflow указывает, что происходит, если содержимое переполняет поле элемента.</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;&nbsp;overflow: auto;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_overflow_auto.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>overflow-x и overflow-y</h2>
    <p>Свойства <code class="w3-codespan">overflow-x</code> и <code class="w3-codespan">overflow-y</code> указывают, следует ли изменять переполнение содержимого только по горизонтали или только по вертикали (или оба):</p>
    <p><code class="w3-codespan">overflow-x</code> указывает, что делать с левым/правым краем содержимого.<br>
        <code class="w3-codespan">overflow-y</code> указывает, что делать с верхним/нижним краем содержимого.</p>
    <div class="scrollx">Вы можете использовать свойство overflow, когда хотите лучше контролировать макет. Свойство overflow указывает, что происходит, если содержимое переполняет блок элемента.</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp; overflow-x: hidden; /* Скрыть горизонтальную полосу прокрутки
            */<br>&nbsp;&nbsp;overflow-y: scroll; /* Добавить вертикальную полосу прокрутки */<br>}</div>
        <a target="_blank" href="../csstryit/trycss_overflow_xy.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_overflow1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_overflow2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_overflow3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>Все CSS свойства Overflow</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Свойство</th>
            <th style="width:55%">Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/pr_pos_overflow.php">overflow</a></td>
            <td>Определяет, что происходит, если содержимое переполняет поле элемента</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_overflow-x.php">overflow-x</a></td>
            <td>Определяет, что делать с левым/правым краями содержимого, если оно выходит за пределы области содержимого элемента</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_overflow-y.php">overflow-y</a></td>
            <td>Определяет, что делать с верхним/нижним краями содержимого, если оно выходит за пределы области содержимого элемента</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_positioning.php">&#10094; Prev</a>
        <a class="w3-right w3-btn"  href="css_float.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>