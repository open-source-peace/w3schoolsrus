<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Padding / Внутренний отступ. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Padding / Внутренний отступ. Числовые классы отступа. Классы размера отступа. Примеры. <?php include '../include/description.php'; ?>'>
    
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS Padding / Внутренний отступ</h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_round.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_margins.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-panel w3-padding-large w3-blue">
        <h4>w3-padding-large</h4>
        <p>У меня 12px верхний и нижний отступы и 24px левый и правый отступы.</p>
    </div>
    <hr>

    <h2>W3.CSS Числовые классы отступа</h2>
    <p>Классы <b>w3-padding-<em>число</em></b> добавляют верхний и нижний отступы к любому элементу HTML:</p>

    <table class="w3-table-all">
        <tr>
            <th>Класс</th>
            <th>Определяет</th>
        </tr>
        <tr>
            <td>w3-padding-16</td>
            <td>Добавляет верхний и нижний отступ 16px к элементу</td>
        </tr>
        <tr>
            <td>w3-padding-24</td>
            <td>Добавляет верхний и нижний отступы 24px к элементу</td>
        </tr>
        <tr>
            <td>w3-padding-32</td>
            <td>Добавляет верхний и нижний отступы 32px к элементу</td>
        </tr>
        <tr>
            <td>w3-padding-48</td>
            <td>Добавляет верхний и нижний отступы 48px к элементу</td>
        </tr>
        <tr>
            <td>w3-padding-64</td>
            <td>Добавляет верхний и нижний отступы 64px к элементу</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Примеры:</h2>
    <div class="w3-panel w3-padding-16 w3-orange">
        <h4>w3-padding-16</h4>
        <p>У меня 16px верхний и нижний отступ</p>
    </div>

    <div class="w3-panel w3-padding-24 w3-orange">
        <h4>w3-padding-24</h4>
        <p>У меня 24px верхний и нижний отступ</p>
    </div>

    <div class="w3-panel w3-padding-32 w3-orange">
        <h4>w3-padding-32</h4>
        <p>У меня 32px верхний и нижний отступ</p>
    </div>

    <div class="w3-panel w3-padding-48 w3-orange">
        <h4>w3-padding-48</h4>
        <p>У меня 48px верхний и нижний отступ</p>
    </div>

    <div class="w3-panel w3-padding-64 w3-orange">
        <h4>w3-padding-64</h4>
        <p>У меня 64px верхний и нижний отступ</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-padding-16"&gt;<br>
            &nbsp; &lt;p&gt;У меня 16px верхний и нижний отступ.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_padding.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>W3.CSS Классы размера отступа</h2>
    <p>Классы <b>w3-padding-<em>размер</em></b> добавляют верхний, нижний, правый и левый отступы к любому элементу HTML:</p>
    <table class="w3-table-all">
        <tr>
            <th>Класс</th>
            <th>Определяет</th>
        </tr>
        <tr>
            <td>w3-padding</td>
            <td>Добавляет 8px сверху и снизу и 16px слева и справа.</td>
        </tr>
        <tr>
            <td>w3-padding-small</td>
            <td>Добавляет 4px сверху и снизу и 8px слева и справа.</td>
        </tr>
        <tr>
            <td>w3-padding-large</td>
            <td>Добавляет 12px сверху и снизу и 24px слева и справа.</td>
        </tr>
    </table>
    <hr>

    <h2>Примеры:</h2>
    <div class="w3-panel w3-padding-small w3-blue">
        <h4>w3-padding-small</h4>
        <p>У меня 4px верхний и нижний отступы и 8px левый и правый отступы.</p>
    </div>

    <div class="w3-panel w3-padding w3-blue">
        <h4>w3-padding</h4>
        <p>У меня 8px верхний и нижний отступы и 16px левый и правый отступы.</p>
    </div>

    <div class="w3-panel w3-padding-large w3-blue">
        <h4>w3-padding-large</h4>
        <p>У меня 12px верхний и нижний отступы и 24px левый и правый отступы.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-padding-large"&gt;<br>
            &nbsp;&nbsp;&lt;p&gt;У меня 12px верхний и нижний отступы и 24px левый и правый отступы.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_padding_size.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_round.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_margins.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>