<?php include '../include/head.php'; ?>

  <title>CSS Правило !important. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Правило !important в CSS используется для придания большей важности свойству / значению, чем обычно. Фактически оно переопределит ВСЕ предыдущие правила стилизации для этого конкретного свойства данного элемента! Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Правило !important</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_specificity.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_borders.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Что такое !important?</h2>
    <p>Правило <code class="w3-codespan">!important</code> в CSS используется для придания большей важности свойству / значению, чем обычно.</p>
    <p>Фактически, если вы используете правило <code class="w3-codespan">!important</code>, оно переопределит ВСЕ предыдущие правила стилизации для этого конкретного свойства данного элемента!</p>
    <p>Давайте посмотрим на пример:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #myid {<br>&nbsp; background-color: blue;<br>}<br><br>.myclass {<br>&nbsp;
            background-color: gray;<br>}<br><br>p {<br>&nbsp; background-color: red !important;<br>}</div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_important.html">Попробуйте сами &raquo;</a></p>
    </div>
    <h3>Объяснение примера</h3>
    <p>В приведенном выше примере все три параграфа получат красный цвет фона, хотя селектор идентификатора и селектор класса имеют более высокую специфичность. Правило <code class="w3-codespan">!important</code> переопределяет свойство <code class="w3-codespan">background-color</code> в обоих случаях.</p>
    <hr>

    <h2>О важности !important</h2>
    <p>Единственный способ переопределить правило <code class="w3-codespan">!important</code> - это включить другое правило <code class="w3-codespan">!important</code> в объявление с той же (или выше) специфичностью исходного кода - и тут начинается проблема! Это сбивает код CSS с толку, и отладка будет сложной, особенно если у вас большая таблица стилей!</p>
    <p>Здесь мы создали простой пример. Когда вы смотрите на исходный код CSS, не очень понятно, какой цвет считается наиболее важным:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #myid {<br>&nbsp; background-color: blue !important;<br>}<br><br>.myclass {<br>&nbsp;
            background-color: gray !important;<br>}<br><br>p {<br>&nbsp; background-color: red !important;<br>}</div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_important2.html">Попробуйте сами &raquo;</a></p>
    </div>
    <p><strong>Совет:</strong> Полезно знать о правиле <code class="w3-codespan">!important</code>, вы можете увидеть его в некотором исходном коде CSS. Однако не используйте его, если в этом нет крайней необходимости.</p>
    <hr>

    <h2>Возможно одно или два справедливых использования !important</h2>
    <p>Один из способов использования <code class="w3-codespan">!important</code> - это переопределение стиля, который нельзя изменить никаким другим способом. Такое может быть, если вы работаете в системе управления контентом (CMS) и не можете редактировать код CSS. Затем вы можете установить несколько пользовательских стилей, чтобы переопределить некоторые стили CMS.</p>
    <p>Другой способ использования <code class="w3-codespan">!important </code>: предположим, вам нужен особый вид для всех кнопок на странице. Здесь кнопки имеют серый цвет фона, белый текст и некоторые отступы и границы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button {<br>&nbsp; background-color: #8c8c8c; <br>&nbsp; color: white;<br>&nbsp;
            padding: 5px;<br>&nbsp; border: 1px solid black; <br>}</div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_important3.html">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Внешний вид кнопки может иногда измениться, если мы поместим её в другой элемент с более высокой специфичностью, и свойства вступят в конфликт. Вот пример этого:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button {<br>&nbsp; background-color: #8c8c8c; <br>&nbsp; color: white;<br>&nbsp;
            padding: 5px;<br>&nbsp; border: 1px solid black; <br>}<br><br>#myDiv a {<br>&nbsp;
            color: red;<br>&nbsp; background-color: yellow; <br>}</div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_important4.html">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Чтобы &quot;заставить&quot; все кнопки выглядеть одинаково, несмотря ни на что, мы можем добавить правило <code class="w3-codespan">!important </code> к свойствам кнопки, например:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button {<br>&nbsp; background-color: #8c8c8c !important; <br>&nbsp; color: white !important;<br>&nbsp;
            padding: 5px !important;<br>&nbsp; border: 1px solid black !important; <br>}<br><br>#myDiv a {<br>&nbsp;
            color: red;<br>&nbsp; background-color: yellow; <br>}</div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_important5.html">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_specificity.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_borders.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>