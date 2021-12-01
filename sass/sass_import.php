<?php include '../include/head.php'; ?>

  <title>Sass @import и Партиалы (частичные файлы). <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Sass @import и Партиалы (частичные файлы). Один из способов написания DRY-кода - хранить связанный код в отдельных файлах. Импорт файлов. Sass поддерживает директиву @import. CSS директива @import имеет серьезный недостаток из-за проблем с производительностью. Учебник по Sass. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_import.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>

<article>
    <h1>Sass <span class="color_h1">@import и Партиалы (частичные файлы)</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_nesting.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_mixin_include.php">Next &#10095;</a>
    </div>
    <hr>

    <p class="intro">Sass сохраняет код CSS DRY (Don't Repeat Yourself | Не повторяй сам себя). Один из способов написания DRY-кода - хранить связанный код в отдельных файлах.</p>
    <p class="intro">Вы можете создавать небольшие файлы с помощью фрагментов CSS для включения в другие файлы Sass. Примеры таких файлов: файл сброса, переменные, цвета, шрифты, размеры шрифтов и т.д.</p>
    <hr>

    <h2>Sass Импорт файлов</h2>
    <p>Как и CSS, Sass также поддерживает директиву <code class="w3-codespan">@import</code>.</p>
    <p>Директива <code class="w3-codespan">@import</code> позволяет вам включать содержимое одного файла в другой.</p>
    <p>CSS директива <code class="w3-codespan">@import</code> имеет серьезный недостаток из-за проблем с производительностью; она создает дополнительный HTTP-запрос каждый раз, когда вы его вызываете. Однако директива Sass <code class="w3-codespan">@import</code> включает файл в CSS; поэтому во время выполнения не требуется дополнительный HTTP-запрос!</p>
    <div class="w3-example">
        <p>Синтаксис импорта Sass:</p>
        <div class="w3-code notranslate xcssHigh">
            @import <i>имяФайла</i>;
        </div>
    </div>

    <p><strong>Примечание:</strong> Вам не нужно указывать расширение файла, Sass автоматически предполагает, что вы имеете в виду файл .sass или .scss. Вы также можете импортировать файлы CSS. Директива <code class="w3-codespan">@import</code> импортирует файл, и любые переменные или миксины, определенные в импортированном файле, могут затем использоваться в основном файле.</p>
    <p>Вы можете импортировать столько файлов, сколько вам нужно в основной файл:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            @import &quot;variables&quot;;<br>@import
            &quot;colors&quot;;<br>@import
            &quot;reset&quot;;<br></div>
        <br>
    </div>

    <p>Давайте посмотрим на пример: предположим, у нас есть файл сброса с именем &quot;reset.scss&quot;, который выглядит так:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>SCSS Синтаксис (reset.scss):</p>
        <div class="w3-code notranslate cssHigh">
            html,<br>body,<br>ul,<br>ol {<br>&nbsp; margin: 0;<br>&nbsp; padding: 0;<br>}
        </div>
        <br>
    </div>

    <p>и теперь мы хотим импортировать файл &quot;reset.scss&quot; в другой файл с именем &quot;standard.scss&quot;.</p>
    <p>Вот как мы это делаем. Обычно директиву <code class="w3-codespan">@import</code> можно добавлять в начало файла; таким образом его содержимое будет иметь глобальную область видимости:</p>

    <div class="w3-example">
        <p>SCSS Синтаксис (standard.scss):</p>
        <div class="w3-code notranslate cssHigh">
            @import &quot;reset&quot;;<br><br>body {<br>
            &nbsp;
            font-family: Helvetica, sans-serif;<br>&nbsp;
            font-size: 18px;<br>&nbsp; color: red;<br>}
        </div>
        <br>
    </div>

    <p>Таким образом, при переносе файла &quot;standard.css&quot; CSS будет выглядеть так:</p>
    <div class="w3-example">
        <p>CSS вывод:</p>
        <div class="w3-code notranslate cssHigh">
            html, body, ul, ol {<br>&nbsp; margin: 0;<br>&nbsp; padding: 0;<br>}<br>
            <br>body {<br>&nbsp;
            font-family: Helvetica, sans-serif;<br>&nbsp;
            font-size: 18px;<br>&nbsp; color: red;<br>}
        </div>
        <p>
            <a target="_blank" class="w3-btn" href="../sasstryit/demo_sass_import1.html">Выполнить пример &raquo;</a>
        </p>
    </div>
    <hr>

    <h2>Sass Партиалы (частичные файлы)</h2>
    <p>По умолчанию Sass переносит все файлы .scss напрямую. Однако, когда вы хотите импортировать файл, вам не нужно, чтобы файл передавался напрямую.</p>
    <p>У Sass есть механизм для этого: если вы начинаете имя файла с подчеркивания, Sass не будет его переносить. Файлы, названные таким образом, в Sass называются частичными (партиалами).</p>
    <p>Т.о., партиал файл Sass называется с подчеркиванием вначале:</p>
    <div class="w3-example">
        <p>Sass Синтаксис партиала:</p>
        <div class="w3-code notranslate xcssHigh">
            &nbsp;_<i>имяФайла</i>;
        </div>
    </div>


    <p>В следующем примере показан партиал файл Sass с именем &quot;_colors.scss&quot;.
        (Этот файл не будет перенесен прямо в &quot;colors.css&quot;):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>&quot;_colors.scss&quot;:</p>
        <div class="w3-code notranslate cssHigh">
            $myPink: #EE82EE;<br>$myBlue: #4169E1;<br>$myGreen: #8FBC8F;
        </div>
        <br>
    </div>

    <p>Теперь, если вы импортируете партиал файл, не подчеркивайте подчеркивание. Sass понимает, что он должен импортировать файл &quot;_colors.scss&quot;:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            @import &quot;colors&quot;;<br><br>body {<br>
            &nbsp;
            font-family: Helvetica, sans-serif;<br>&nbsp;
            font-size: 18px;<br>&nbsp; color: $myBlue;<br>}
        </div>
        <br>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_nesting.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_mixin_include.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>