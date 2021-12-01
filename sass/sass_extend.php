<?php include '../include/head.php'; ?>

  <title>Sass @extend и наследование. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Sass @extend и наследование. Директива @extend позволяет передавать набор свойств CSS от одного селектора к другому. Учебник по Sass. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_extend.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>

<article>
    <h1>Sass <span class="color_h1">@extend и наследование</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_mixin_include.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_functions_string.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Sass @extend директива</h2>
    <p>Директива <code class="w3-codespan">@extend</code> позволяет передавать набор свойств CSS от одного селектора к другому.</p>
    <p>Директива <code class="w3-codespan">@extend</code> полезна, если у вас есть элементы с почти одинаковым стилем, которые отличаются только некоторыми мелкими деталями.</p>
    <p>В следующем примере Sass сначала создается базовый стиль для кнопок (этот стиль будет использоваться для большинства кнопок). Затем мы создаем один стиль для кнопки &quot;Report&quot; и один стиль для кнопки &quot;Submit&quot;. И кнопка &quot;Report&quot; и кнопка &quot;Submit&quot; наследуют все свойства CSS от класса .button-basic через директиву <code class="w3-codespan">@extend</code>. Кроме того, для них определены собственные цвета:</p>
    <div class="w3-example">
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            .button-basic&nbsp; {<br>&nbsp; border: none;<br>&nbsp; padding: 15px 30px;<br>&nbsp;
            text-align: center;<br>&nbsp; font-size: 16px;<br>&nbsp; cursor: pointer;<br>}<br>
            <br>.button-report&nbsp; {<br>&nbsp; @extend .button-basic;<br>&nbsp;
            background-color: red;<br>}<br><br>.button-submit&nbsp; {<br>&nbsp; @extend
            .button-basic;<br>&nbsp; background-color: green;<br>&nbsp; color: white;<br>}</div>
    </div>

    <p>После компиляции CSS будет выглядеть так:</p>
    <div class="w3-example">
        <p>CSS вывод:</p>
        <div class="w3-code notranslate cssHigh">
            .button-basic, .button-report, .button-submit {<br>&nbsp; border: none;<br>&nbsp;
            padding: 15px 30px;<br>&nbsp; text-align: center;<br>&nbsp; font-size: 16px;<br>&nbsp;
            cursor: pointer;<br>}<br><br>.button-report&nbsp; {<br>&nbsp; background-color: red;<br>}<br><br>
            .button-submit&nbsp; {<br>&nbsp; background-color: green;<br>&nbsp; color: white;<br>}</div>
    </div>

    <p>Используя директиву <code class="w3-codespan">@extend</code> вам не нужно указывать несколько классов для элемента в вашем HTML-коде, например: &lt;button class=&quot;button-basic button-report&quot;&gt;Сообщить об этом&lt;/button&gt;. Вам просто нужно указать .button-report, чтобы получить оба набора стилей.</p>
    <p>Директива <code class="w3-codespan">@extend</code> помогает сохранить ваш код Sass очень DRY (чистым).</p>
    <hr>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_mixin_include.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_functions_string.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>