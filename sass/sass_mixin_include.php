<?php include '../include/head.php'; ?>

  <title>Sass @mixin и @include. Миксины. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Sass @mixin и @include. Миксины. Директива @mixin позволяет создавать CSS-код, который будет повторно использоваться на всем веб-сайте. Директива @include создана, чтобы вы могли использовать (включать) миксин. Учебник по Sass. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_mixin_include.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>

<article>
    <h1>Sass <span class="color_h1">@mixin и @include</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_import.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_extend.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Sass Миксины</h2>
    <p>Директива <code class="w3-codespan">@mixin</code> позволяет создавать CSS-код, который будет повторно использоваться на всем веб-сайте.</p>
    <p>Директива <code class="w3-codespan">@include</code> создана, чтобы вы могли использовать (включать) миксин.</p>
    <hr>

    <h2>Определение миксина</h2>
    <p>Миксин определяется с помощью директивы <code class="w3-codespan">@mixin</code>.</p>
    <div class="w3-example">
        <p>Sass @mixin Синтаксис:</p>
        <div class="w3-code notranslate xcssHigh">
            @mixin <i>name </i>{<br>&nbsp; <em>property</em>: <em>value</em>;<br>&nbsp; <em>property</em>: <em>value</em>;<br>&nbsp;
            ...<br>}
        </div>
    </div>
    <p>В следующем примере создается миксин с именем &quot;important-text&quot;:</p>
    <div class="w3-example">
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            @mixin important-text {<br>&nbsp; color:
            red;<br>&nbsp;&nbsp;font-size: 25px;<br>&nbsp;&nbsp;font-weight: bold;<br>&nbsp;
            border: 1px solid blue;<br>}
        </div>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Замечание по дефисам и подчеркиванию в Sass: дефисы и подчеркивания считаются одинаковыми. Это означает, что @mixin important-text { } и @mixin important_text { } считаются одним и тем же миксином!</p>
    </div>
    <hr>

    <h2>Использование миксина</h2>
    <p>Директива <code class="w3-codespan">@include</code> используется для включения миксина.</p>
    <div class="w3-example">
        <p>Sass @include Синтаксис миксина:</p>
        <div class="w3-code notranslate xcssHigh">
            <em>selector</em> {<br>&nbsp; @include <em>mixin-name</em>;<em><br></em>}</div>
    </div>

    <p>Т.о., чтобы включить миксин с важным текстом, созданный выше:</p>
    <div class="w3-example">
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            .danger {<br>&nbsp; @include important-text;<br>&nbsp; background-color: green;<br>}
        </div>
        <br>
    </div>

    <p>Транспиллер Sass преобразует вышеуказанное в обычный CSS:</p>
    <div class="w3-example">
        <p>CSS вывод:</p>
        <div class="w3-code notranslate cssHigh">
            .danger {<br>&nbsp; color:
            red;<br>&nbsp;&nbsp;font-size: 25px;<br>&nbsp;&nbsp;font-weight: bold;<br>&nbsp;
            border: 1px solid blue;<br>&nbsp; background-color: green;<br>}
        </div>
        <p>
            <a target="_blank" class="w3-btn" href="../sasstryit/demo_sass_mixin1.html">Выполнить пример &raquo;</a>
        </p>
    </div>

    <p>Миксин также может включать другие миксины:</p>
    <div class="w3-example">
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            @mixin special-text {<br>
            &nbsp; @include important-text;<br>
            &nbsp; @include link;<br>
            &nbsp; @include special-border;<br>}
        </div>
        <br>
    </div>
    <hr>

    <h2>Передача переменных в миксин</h2>
    <p>Миксины принимают аргументы. Таким образом вы можете передавать переменные в миксин.</p>
    <p>Вот как определить миксин с аргументами:</p>
    <div class="w3-example">
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            /* Определите миксин с двумя аргументами */<br>@mixin bordered($color, $width) {<br>&nbsp; border:
            $width solid $color;<br>}<br><br>.myArticle {<br>&nbsp; @include bordered(blue, 1px);&nbsp;
            // Вызов миксина с двумя значениями<br>}<br><br>
            .myNotes {<br>&nbsp; @include bordered(red, 2px); // Вызов миксина с двумя значениями<br>}</div>
        <br>
    </div>

    <p>Обратите внимание, что аргументы задаются как переменные, а затем используются как значения (цвет и ширина) свойства границы.</p>

    <p>После компиляции CSS будет выглядеть так:</p>
    <div class="w3-example">
        <p>CSS вывод:</p>
        <div class="w3-code notranslate cssHigh">
            .myArticle {<br>&nbsp; border: 1px solid blue;<br>}<br><br>
            .myNotes {<br>&nbsp; border: 2px solid red;<br>}</div>
        <p>
            <a target="_blank" class="w3-btn" href="../sasstryit/demo_sass_mixin2.html">Выполнить пример &raquo;</a>
        </p>
    </div>
    <hr>

    <h2>Значения по умолчанию для миксина</h2>
    <p>Также возможно определить значения по умолчанию для переменных миксина:</p>
    <div class="w3-example">
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            @mixin bordered($color: blue, $width: 1px) {<br>
            &nbsp; border: $width solid $color;<br>}
        </div>
    </div>

    <p>Затем вам нужно только указать значения, которые изменяются при включении миксина:</p>
    <div class="w3-example">
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            .myTips {<br>&nbsp; @include bordered($color: orange);<br>}</div>
    </div>
    <hr>

    <h2>Использование миксина для префиксов поставщиков</h2>
    <p>Еще одно хорошее использование миксина - префиксы поставщиков.</p>
    <p>Вот пример преобразования:</p>
    <div class="w3-example">
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            @mixin transform($property) {<br>&nbsp; -webkit-transform: $property;<br>&nbsp;
            -ms-transform: $property;<br>&nbsp; transform: $property;<br>}<br><br>.myBox {<br>&nbsp; @include transform(rotate(20deg));<br>
            }</div>
    </div>

    <p>После компиляции CSS будет выглядеть так:</p>
    <div class="w3-example">
        <p>CSS Вывод:</p>
        <div class="w3-code notranslate cssHigh">
            .myBox {<br>&nbsp; -webkit-transform: rotate(20deg);<br>&nbsp; -ms-transform:
            rotate(20deg);<br>&nbsp; transform: rotate(20deg);<br>}</div>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_import.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_extend.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>