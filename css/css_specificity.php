<?php include '../include/head.php'; ?>

  <title>CSS Специфичности. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Специфичности. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Специфичность</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_units.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_important.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Что такое специфичность?</h2>
    <div class="w3-panel w3-warning">
    <h3>Определение</h3>
    <p><strong>Специфичность</strong> - это способ, с помощью которого браузеры определяют, какие значения свойств CSS наиболее соответствуют элементу и, следовательно, будут применены. Специфичность основана на правилах соответствия, состоящих из селекторов CSS различных типов.</p>
    </div>
        <p>Если есть два или более конфликтующих правила CSS, указывающих на один и тот же элемент, браузер следует некоторым правилам, чтобы определить, какое из них наиболее конкретное, и поэтому побеждает.</p>
    <p>Специфичность можно рассматривать как оценку/рейтинг, определяющий, какие объявления стиля в конечном итоге применяются к элементу.</p>
    <p>Универсальный селектор (*) имеет низкую специфичность, в то время как селекторы ID очень специфичны!</p>

    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Специфичность - это частая причина, по которой ваши правила CSS не применяются к некоторым элементам, хотя вы думаете, что они должны применяться.</p>
    </div>
    <hr>

    <h2>Иерархия специфичности</h2>
    <p>Каждый селектор имеет свое место в иерархии специфичности. Есть четыре категории, которые определяют уровень специфичности селектора:</p>
    <p><strong>Встроенные стили</strong> - Встроенный стиль прикрепляется непосредственно к стилизованному элементу. Пример: &lt;h1 style=&quot;color: #fff;&quot;&gt;.</p>
    <p><strong>IDs</strong> - ID - это уникальный идентификатор для элементов страницы, например #navbar.</p>
    <p><strong>Классы, атрибуты и псевдоклассы</strong> - В эту категорию входят .classes, [attributes] и псевдоклассы, такие как: hover, :focus и т.д.</p>
    <p><strong>Элементы и псевдоэлементы</strong> - В эту категорию входят имена элементов и псевдоэлементы, такие как h1, div, :before и :after.</p>
    <hr>

    <h2>Как рассчитать специфичность?</h2>
    <p>Запомните, как рассчитывать специфичность!</p>
    <p>Начните с 0, добавьте 1000 для атрибута стиля, добавьте 100 для каждого идентификатора, добавьте 10 для каждого атрибута, класса или псевдокласса, добавьте 1 для каждого имени элемента или псевдоэлемента.</p>
    <p>Рассмотрим эти три фрагмента кода:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            A: h1<br>B: #content h1<br>C: &lt;div id=&quot;content&quot;&gt;&lt;h1 style=&quot;color: #ffffff&quot;&gt;Heading&lt;/h1&gt;&lt;/div&gt;
        </div>
    </div>

    <p>Специфичность A равна 1 (один элемент)<br>Специфичность B равна 101 (одна ссылка ID и один элемент)<br>Специфичность C составляет 1000 (встроенный стиль)</p>
    <p>Поскольку 1 &lt; 101 &lt; 1000 третье правило (C) имеет более высокий уровень специфичности и поэтому будет применяться.</p>
    <hr>

    <h2>Правила специфичности</h2>
    <p><strong>Равная специфичность: учитывается последнее правило</strong> - если одно и то же правило дважды записано во внешнюю таблицу стилей, то нижнее правило в таблице стилей ближе к элементу, который нужно стилизовать, и поэтому будет применяться:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1 {background-color: yellow;}<br>
            h1 {background-color: red;}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_specificity1.html">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Последнее правило применяется всегда.</p>
    <hr>

    <p><strong>Селекторы идентификаторов имеют более высокую специфичность, чем селекторы атрибутов.</strong> Обратите внимание на следующие три строки кода:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div#a {background-color: green;}<br>#a {background-color: yellow;}<br>div[id=a] {background-color: blue;}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_specificity2.html">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Первое правило более конкретное, чем два других, и будет применяться.</p>
    <hr>

    <p><strong>Контекстные селекторы более специфичны, чем селектор одного элемента -</strong> встроенная таблица стилей ближе к элементу, который нужно стилизовать. Как в следующей ситуации:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            <strong>Из внешнего CSS файла:</strong><br>#content h1 {background-color: red;}<br><br><strong>В HTML файле:</strong><br>&lt;style&gt;<br>#content h1 {<br>&nbsp; background-color: yellow;<br>}<br>&lt;/style&gt;
        </div>
    </div>
    <p>Последнее правило будет применяться.</p>
    <hr>
    <p><strong>Селектор класса превосходит любое количество селекторов элементов</strong> - селектор класса, такой как .intro, превосходит h1, p, div и т.д.:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .intro {background-color: yellow;}<br>h1 {background-color:
            red;}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_specificity3.html">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <p><strong>Универсальный селектор и унаследованные значения имеют специфичность 0</strong> - *, body * и подобные имеют нулевую специфичность. Унаследованные значения также имеют специфичность 0.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_units.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_important.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>