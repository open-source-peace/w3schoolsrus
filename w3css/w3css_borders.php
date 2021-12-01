<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Границы. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Границы. Классы границ. Добавление границ. Цвета границ. Округлые границы. Толщина границ. При наведении мыши. Учебник по фреймворку W3.CSS для начинающих. Готовые шаблоны. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Границы</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_panels.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_cards.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-panel w3-border">
        <p>Я имею границы.</p>
    </div>
    <div class="w3-panel w3-border-left">
        <p>Я имею только левую границу.</p>
    </div>
    <div class="w3-panel w3-border-top w3-border-bottom w3-border-green">
        <p>Я имею зеленую верхнюю и нижнюю границу.</p>
    </div>
    <div class="w3-panel w3-border w3-border-blue">
        <p>Я имею синие границы.</p>
    </div>
    <div class="w3-panel w3-leftbar">
        <p>Я имею толстую левую границу.</p>
    </div>
    <div class="w3-panel w3-bottombar w3-topbar w3-border-blue">
        <p>Я имею толстую синюю верхнюю и нижнюю границу.</p>
    </div>
    <div class="w3-panel w3-border w3-border-red w3-hover-border-green">
        <p>Красная граница, которая становится зеленой при наведении.</p>
    </div>
    <hr>

    <h2>W3.CSS Классы границ</h2>
    <p>W3.CSS предоставляет следующие классы границ:</p>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tr>
            <th style="width:30%">Класс</th>
            <th>Определяет</th>
        </tr>
        <tr>
            <td>w3-border</td>
            <td>Добавляет границы (сверху, справа, снизу, слева) к элементу</td>
        </tr>
        <tr>
            <td>w3-border-top</td>
            <td>Добавляет верхнюю границу к элементу</td>
        </tr>
        <tr>
            <td>w3-border-right</td>
            <td>Добавляет правую границу к элементу</td>
        </tr>
        <tr>
            <td>w3-border-bottom</td>
            <td>Добавляет нижнюю границу к элементу</td>
        </tr>
        <tr>
            <td>w3-border-left</td>
            <td>Добавляет левую границу к элементу</td>
        </tr>
        <tr>
            <td>w3-border-0</td>
            <td>Удаляет все границы</td>
        </tr>
        <tr>
            <td>w3-border-<em>color</em></td>
            <td>Отображение границы указанным цветом (например, красным, синим и т.д.)</td>
        </tr>
        <tr>
            <td>w3-hover-border-<em>color</em></td>
            <td>Добавляет цвет границы при наведении</td>
        </tr>
        <tr>
            <td>w3-bottombar</td>
            <td>Добавляет толстую нижнюю границу к элементу</td>
        </tr>
        <tr>
            <td>w3-leftbar</td>
            <td>Добавляет толстую левую границу к элементу</td>
        </tr>
        <tr>
            <td>w3-rightbar</td>
            <td>Добавляет толстую правую границу к элементу</td>
        </tr>
        <tr>
            <td>w3-topbar</td>
            <td>Добавляет толстую верхнюю границу к элементу</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Добавление границ</h2>
    <p>Классы <strong>w3-border</strong> используются для добавления границ к любому элементу HTML:</p>
    <div class="w3-panel w3-border">
        <p>Я имею границы.</p>
    </div>
    <div class="w3-panel w3-border-left">
        <p>Я имею только левую границу.</p>
    </div>
    <div class="w3-panel w3-border-top w3-border-bottom">
        <p>Я имею верхнюю и нижнюю границы.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-panel w3-border"&gt;<br>
            &nbsp; &lt;p&gt;Я имею границы.&lt;/p&gt;<br>
            &lt;/div&gt;<br><br>&lt;div class="w3-panel w3-border-left"&gt;<br>
            &nbsp; &lt;p&gt;Я имею только левую границу.&lt;/p&gt;<br>
            &lt;/div&gt;<br><br>&lt;div class="w3-panel w3-border-top w3-border-bottom"&gt;<br>
            &nbsp; &lt;p&gt;Я имею верхнюю и нижнюю границы.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_borders_side.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Цвета границ</h2>
    <p>Классы <strong>w3-border<em>-color</em></strong> используются для добавления цветов к границам:</p>
    <div class="w3-panel w3-border w3-border-red">
        <p>Я имею красные границы.</p>
    </div>
    <div class="w3-panel w3-border-left w3-border-blue">
        <p>Я имею синюю левую границу.</p>
    </div>
    <div class="w3-panel w3-border-top w3-border-bottom w3-border-green">
        <p>Я имею зеленую верхнюю и нижнюю границу.</p>
    </div>
    <div class="w3-panel w3-border-left w3-pale-red w3-border-red">
        <p>Я имею красную левую границу и бледно-красный цвет фона.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-border w3-border-red&quot;&gt;<br>&nbsp; &lt;p&gt;Я имею красные границы.&lt;/p&gt;<br>
            &lt;/div&gt;<br><br>&lt;div class=&quot;w3-panel w3-border-left w3-border-blue&quot;&gt;<br>&nbsp; &lt;p&gt;Я имею синюю левую границу.&lt;/p&gt;<br>&lt;/div&gt;<br>
            <br>&lt;div class=&quot;w3-panel w3-border-top w3-border-bottom w3-border-green&quot;&gt;<br>&nbsp; &lt;p&gt;Я имею зеленую верхнюю и нижнюю границу.&lt;/p&gt;<br>&lt;/div&gt; </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_borders_colors.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Округлые границы</h2>
    <p>Чтобы добавить скругленные границы, добавьте один из классов <strong>w3-round<em>-size</em></strong>:</p>
    <div class="w3-panel w3-border">
        <p>Я имею обычные границы.</p>
    </div>
    <div class="w3-panel w3-border w3-round-small">
        <p>Я имею маленькие скругленные границы.</p>
    </div>
    <div class="w3-panel w3-border w3-round">
        <p>Я имею округлые границы.</p>
    </div>

    <div class="w3-panel w3-border w3-round-large">
        <p>Я имею большие (large) округлые границы.</p>
    </div>

    <div class="w3-panel w3-border w3-round-xlarge">
        <p>Я имею сильно (xlarge) скругленые границы.</p>
    </div>

    <div class="w3-panel w3-border w3-round-xxlarge">
        <p>Я имею очень сильно (xxlarge) скругленные границы.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-border&quot;&gt;<br>&nbsp; &lt;p&gt;Мои границы обычные.&lt;/p&gt;<br>
            &lt;/div&gt;<br><br>&lt;div class=&quot;w3-panel w3-border w3-round-small&quot;&gt;<br>&nbsp;
            &lt;p&gt;Мои границы немного округлые (small).&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div class=&quot;w3-panel w3-border w3-round&quot;&gt;<br>&nbsp; &lt;p&gt;Мои границы скругленные.&lt;/p&gt;<br>&lt;/div&gt;<br>
            <br>&lt;div class=&quot;w3-panel w3-border w3-round-large&quot;&gt;<br>&nbsp; &lt;p&gt;Я имею большие  (large) округлые границы.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div class=&quot;w3-panel w3-border
            w3-round-xlarge&quot;&gt;<br>&nbsp; &lt;p&gt;Я имею сильно (xlarge) скругленые границы.&lt;/p&gt;<br>&lt;/div&gt;<br>
            <br>&lt;div class=&quot;w3-panel w3-border w3-round-xxlarge&quot;&gt;<br>&nbsp; &lt;p&gt;Я имею очень сильно (xxlarge) скругленные границы.&lt;/p&gt;<br>&lt;/div&gt;<br>
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_borders_rounded.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Толстые Границы</h2>
    <p>Классы <strong>w3-topbar</strong>, <strong>w3-bottombar</strong>, <strong>w3-leftbar</strong>, <strong>
            и w3-rightbar </strong>используются для добавления толстых границ к элементу:</p>
    <div class="w3-panel w3-leftbar">
        <p>Я имею толстую левую границу.</p>
    </div>
    <div class="w3-panel w3-leftbar w3-border-blue">
        <p>Я имею толстую синюю левую границу.</p>
    </div>
    <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue">
        <p>Я имею толстую синюю левую границу и бледно-синий цвет фона.</p>
    </div>
    <div class="w3-panel w3-pale-red w3-topbar w3-bottombar w3-border-red">
        <p>Я имею толстую красную верхнюю и нижнюю границу и бледно-красный цвет фона.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-leftbar&quot;&gt;<br>&nbsp; &lt;p&gt;Я имею толстую левую границу.&lt;/p&gt;<br>
            &lt;/div&gt;<br><br>&lt;div class=&quot;w3-panel w3-leftbar w3-border-blue&quot;&gt;<br>
            &nbsp; &lt;p&gt;Я имею толстую синюю левую границу.&lt;/p&gt;<br>
            &lt;/div&gt;<br><br>&lt;div class=&quot;w3-panel w3-leftbar w3-border-blue w3-pale-blue&quot;&gt;<br>
            &nbsp; &lt;p&gt;Я имею толстую синюю левую границу и бледно-синий цвет фона.&lt;/p&gt;<br>
            &lt;/div&gt;<br><br>
            &lt;div class=&quot;w3-panel w3-topbar w3-bottombar w3-border-red w3-pale-red&quot;&gt;<br>
            &nbsp; &lt;p&gt;Я имею толстую красную верхнюю и нижнюю границу и бледно-красный цвет фона.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <p>
            <a class="w3-btn" href="../w3csstryit/tryw3css_borders_bars.html" target="_blank">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <h2>Границы при наведении мыши</h2>
    <p>Классы <strong>w3-hover-border-<em>color</em></strong> меняют цвет границы при наведении мыши:</p>

    <div class="w3-panel w3-border w3-hover-border-red">
        <p>Граница, которая становится красной при наведении мыши.</p>
    </div>

    <div class="w3-panel w3-border w3-border-red w3-hover-border-green">
        <p>Красная граница, которая становится зеленой при наведении.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-border w3-hover-border-red&quot;&gt;<br>
            &nbsp; &lt;p&gt;Граница, которая становится красной при наведении&lt;/p&gt;<br>
            &lt;/div&gt;<br><br>
            &lt;div class=&quot;w3-panel w3-border w3-border-red w3-hover-border-green&quot;&gt;<br>
            &nbsp; &lt;p&gt;Красная граница, которая становится зеленой при наведении&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_borders_hover.html" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-leftbar w3-border-white w3-hover-border-green">
        <p>Толстая (невидимая) левая граница, зеленеющая при наведении.</p>
    </div>
    <div class="w3-panel w3-light-grey w3-bottombar w3-border-white w3-hover-border-green">
        <p>Толстая (невидимая) нижняя граница, которая становится зеленой при наведении.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-leftbar w3-border-white w3-hover-border-green&quot;&gt;<br>
            &nbsp; &lt;p&gt;Толстая (невидимая) левая граница, зеленеющая при наведении.&lt;/p&gt;<br>
            &lt;/div&gt;<br>
            <br>&lt;div class=&quot;w3-panel w3-bottombar w3-border-white w3-hover-border-green&quot;&gt;<br>
            &nbsp; &lt;p&gt;Толстая (невидимая) нижняя граница, которая становится зеленой при наведении.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <p>
            <a class="w3-btn" href="../w3csstryit/tryw3css_borders_hover2.html" target="_blank">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div style="border:16px solid white" class="w3-panel w3-hover-border-green">
        <p>Толстая белая (невидимая) граница, которая становится зеленой при наведении.</p>
    </div>
    <div style="border:16px solid white" class="w3-panel w3-hover-border-black">
        <p>Толстая белая (невидимая) граница, которая становится черной при наведении.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div style=&quot;border:16px solid white&quot; class=&quot;w3-panel w3-hover-border-green&quot;&gt;<br>&nbsp;
            &lt;p&gt;Толстая (невидимая) граница, которая становится зеленой при наведении.&lt;/p&gt;<br>&lt;/div&gt;<br><br>
            &lt;div style=&quot;border:16px solid white&quot; class=&quot;w3-panel w3-hover-border-black&quot;&gt;<br>&nbsp;
            &lt;p&gt;Толстая (невидимая) граница, которая становится черной при наведении.&lt;/p&gt;<br>&lt;/div&gt;
        </div>
        <p>
            <a class="w3-btn" href="../w3csstryit/tryw3css_borders_hover1.html" target="_blank">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_panels.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_cards.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>