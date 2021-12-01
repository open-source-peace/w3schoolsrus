<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Margin / Внешние отступы / Поля. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Margin / Внешние отступы / Поля. Классы полей. Верхнее, нижнее, левое, правое поле. Как сделать отступ? <?php include '../include/description.php'; ?>'>
    
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS Margin / Внешние отступы / Поля</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_padding.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_display.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-border w3-section">
        <div class="w3-container w3-margin w3-green">
            <p>Класс w3-margin добавляет поле в 16px (margin) ко всем сторонам элемента.</p>
        </div>
    </div>
    <hr>
    <h2>W3.CSS Классы полей</h2>
    <p>W3.CSS предоставляет следующие классы полей:</p>
    <table class="w3-table-all">
        <tr>
            <th>Класс</th>
            <th>Определяет</th>
        </tr>
        <tr>
            <td>w3-margin</td>
            <td>Добавляет поле размером 16px ко всем сторонам элемента</td>
        </tr>
        <tr>
            <td>w3-margin-top</td>
            <td>Добавляет верхнее поле размером 16px к элементу</td>
        </tr>
        <tr>
            <td>w3-margin-right</td>
            <td>Добавляет правое поле размером 16px к элементу</td>
        </tr>
        <tr>
            <td>w3-margin-bottom</td>
            <td>Добавляет нижнее поле размером 16px к элементу</td>
        </tr>
        <tr>
            <td>w3-margin-left</td>
            <td>Добавляет левое поле размером 16px к элементу</td>
        </tr>
        <tr>
            <td>w3-section</td>
            <td>Добавляет верхнее и нижнее поле размером 16px к элементу</td>
        </tr>
    </table>
    <hr>

    <h2>Margin / Поле / Край</h2>
    <p>Класс <strong>w3-margin</strong> добавляет поле в 16px ко всем сторонам элемента:</p>
    <div class="w3-border w3-section">
        <div class="w3-container w3-margin w3-green">
            <p>Класс <strong>w3-margin</strong> добавляет поле в 16 пикселей ко всем сторонам элемента.</p>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-container w3-margin"&gt;<br>
            &nbsp; &lt;p&gt;У меня есть поле 16px со всех сторон.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_margin.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Margin Top / Верхнее поле</h2>
    <p>Класс <strong>w3-margin-top</strong> добавляет верхнее поле 16px к элементу:</p>
    <div class="w3-border w3-section">
        <div class="w3-container w3-margin-top w3-green">
            <p>Класс <strong>w3-margin-top</strong> добавляет <strong>верхнее</strong> поле 16px к элементу.</p>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-container w3-margin-top"&gt;<br>
            &nbsp; &lt;p&gt;У меня верхнее поле 16px.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_margin_top.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Margin Bottom / Нижнее поле</h2>
    <p>Класс <strong>w3-margin-bottom</strong> добавляет нижнее поле 16px к элементу:</p>
    <div class="w3-border w3-section">
        <div class="w3-container w3-margin-bottom w3-green">
            <p>Класс <strong>w3-margin-bottom</strong> добавляет <strong>нижнее</strong> поле 16px к элементу.</p>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-container w3-margin-bottom"&gt;<br>
            &nbsp; &lt;p&gt;У меня нижнее поле 16px.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_margin_bottom.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Margin Left / Левое поле</h2>
    <p>Класс <strong>w3-margin-left</strong> добавляет левое поле 16px к элементу:</p>
    <div class="w3-border w3-section">
        <div class="w3-container w3-margin-left w3-green">
            <p>Класс <strong>w3-margin-left</strong> добавляет <strong>левое</strong> поле к элементу.</p>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-container w3-margin-left"&gt;<br>
            &nbsp; &lt;p&gt;У меня левое поле 16px.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_margin_left.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Margin Right / Правое поле</h2>
    <p>Класс <strong>w3-margin-right</strong> добавляет правое поле 16px к элементу:</p>
    <div class="w3-border w3-section">
        <div class="w3-container w3-margin-right w3-green">
            <p>Класс <strong>w3-margin-right</strong> добавляет <strong>правое</strong> поле 16px к элементу.</p>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-container w3-margin-right"&gt;<br>
            &nbsp; &lt;p&gt;У меня правое поле 16px.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_margin_right.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Section / Разделы</h2>
    <p>Многие элементы HTML не имеют верхнего или нижнего поля по умолчанию. Такие элементы будут отображаться без разрыва между ними:</p>

    <div class="w3-container w3-blue">
        <h2>Я синий</h2>
    </div>
    <div class="w3-container w3-green">
        <h2>Я зеленый</h2>
    </div>

    <p>Класс <b>w3-section</b> может быть использован для разделения элементов.</p>
    <p>Он добавляет <strong>16px</strong> верхнее и нижнее поле к любому элементу HTML:</p>

    <div class="w3-container w3-section w3-blue">
        <h2>Я синий</h2>
    </div>
    <div class="w3-container w3-section w3-green">
        <h2>Я зеленый</h2>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-container w3-section w3-blue&quot;&gt;<br>&nbsp; &lt;h2&gt;Я синий&lt;/h2&gt;<br>&lt;/div&gt;<br><br>&lt;div class=&quot;w3-container w3-section w3-green&quot;&gt;<br>&nbsp; &lt;h2&gt;Я зеленый&lt;/h2&gt;<br>&lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_margin_sections.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_padding.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_display.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>