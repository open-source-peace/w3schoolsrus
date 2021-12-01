<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Округлости. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Округлости. Как сделать изображение округлым? Классы округлости. Класс круга. Изображение и текст внутри круга. Круг внутри круга. Примеры. <?php include '../include/description.php'; ?>'>
    
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Классы округлости</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_text.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_padding.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-panel w3-round-small w3-teal">
        <p>w3-round-small</p>
    </div>
    <div class="w3-panel w3-round w3-teal">
        <p>w3-round</p>
    </div>
    <div class="w3-panel w3-round-large w3-teal">
        <p>w3-round-large</p>
    </div>
    <div class="w3-panel w3-round-xlarge w3-teal">
        <p>w3-round-xlarge</p>
    </div>
    <div class="w3-panel w3-round-xxlarge w3-teal">
        <p>w3-round-xxlarge</p>
    </div>

    <p>Классы <strong>w3-round-<em>size</em></strong> добавляют закругленные углы к любому элементу HTML:</p>

    <table class="w3-table w3-bordered w3-striped w3-border">
        <tr>
            <th style="width:30%">Класс</th>
            <th>Определяет</th>
        </tr>
        <tr>
            <td>w3-round</td>
            <td>Элемент закругленный (border-radius) 4px</td>
        </tr>
        <tr>
            <td>w3-round-small</td>
            <td>Элемент закругленный (border-radius) 2px</td>
        </tr>
        <tr>
            <td>w3-round-medium</td>
            <td>Элемент закругленный (border-radius) 4px</td>
        </tr>
        <tr>
            <td>w3-round-large</td>
            <td>Элемент закругленный (border-radius) 8px</td>
        </tr>
        <tr>
            <td>w3-round-xlarge</td>
            <td>Элемент закругленный (border-radius) 16px</td>
        </tr>
        <tr>
            <td>w3-round-xxlarge</td>
            <td>Элемент закругленный (border-radius) 32px</td>
        </tr>
    </table>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-round w3-teal&quot;&gt;w3-round&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_round.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Класс Круга</h2>
    <p>Класс <strong>w3-circle</strong> отображает содержимое внутри круга.</p>
    <hr>

    <h2>Изображение внутри круга</h2>
    <div class="w3-container w3-margin-bottom">
        <img src="../images/img_car.jpg" alt="Изображение внутри круга" class="w3-circle" style="width:90%;max-width:320px">
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img class=&quot;w3-circle&quot;
            src="img_car.jpg" alt="Изображение внутри круга"&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_circle.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Текст внутри круга</h2>
    <div class="w3-padding-32 w3-red w3-circle w3-center" style="width:50%">
        <h1>Текст внутри круга</h1>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-padding-32 w3-red w3-circle w3-center&quot;&gt;<br>&nbsp; &lt;h1&gt;The
            w3-circle Class&lt;/h1&gt;<br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_circle_div.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Круг внутри круга</h2>

    <div class="w3-row">
        <div class="w3-half">
            <div class="w3-padding-32 w3-green w3-circle">
                <img src="../images/img_car.jpg" alt="Круг внутри круга" class="w3-circle" style="width:75%">
            </div>
        </div>
        <div class="w3-half">
            <div class="w3-padding-32 w3-green w3-circle">
                <div class="w3-padding-32 w3-red w3-circle w3-center" style="width:55%">
                    <p class="w3-xlarge">Привет<br>W3.CSS!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример 1</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-padding-32 w3-green w3-circle&quot;&gt;<br>&nbsp; &lt;img src=&quot;img_car.jpg&quot;
            class=&quot;w3-circle&quot; style=&quot;width:75%&quot;&gt;<br>&lt;/div&gt; </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_circle_circle.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример 2</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-padding-32 w3-green w3-circle&quot;&gt;<br>&nbsp; &lt;div
            class=&quot;w3-padding-32 w3-red w3-circle w3-center&quot; style=&quot;width:55%&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;p class=&quot;w3-xlarge&quot;&gt;Привет&lt;br&gt;W3.CSS!&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt; </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_circle_circle2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Примечание.</b> Здесь кругом называется любая элипсоподобная фигура (с округлыми углами).</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_text.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_padding.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>