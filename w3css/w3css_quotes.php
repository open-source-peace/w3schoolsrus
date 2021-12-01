<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Цитаты. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Цитаты. Как оформить цитаты на веб-странице? Отображение цитат. Стилизация цитат на сайте. Большие цитаты. Стандартный HTML элемент blockquote. Использование HTML символов, иконок Font Awesome, цитаты как карты. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS Цитаты</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_notes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_alerts.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="w3-panel w3-sand">
        <span style="font-size:150px;line-height:0.6em;opacity:0.2">&#10077;</span>
        <p class="w3-xlarge" style="margin-top:-40px">
            <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non massa vitae risus fermentum ullamcorper. Phasellus risus urna, ornare in aliquam id, porttitor sit amet sapien. Nulla facilisi.</i></p>
    </div>
    <hr>

    <h2>Отображение цитат</h2>
    <p>Класс <strong>w3-panel</strong> является идеальным классом для отображения цитат.</p>
    <p>Цитаты часто отображаются с серым фоном, левой границей и курсивным шрифтом:</p>

    <div class="w3-panel w3-leftbar w3-light-grey">
        <p class="w3-xlarge w3-serif"><i>"Сделайте это как можно проще, но не примитивно."</i></p>
        <p>Альберт Эйнштейн</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-leftbar w3-light-grey&quot;&gt;<br>
            &nbsp; &lt;p class=&quot;w3-xlarge w3-serif&quot;&gt;<br>&nbsp; &lt;i&gt;&quot;Сделайте это как можно проще, но не примитивно.&quot;&lt;/i&gt;&lt;/p&gt;<br>
            &nbsp; &lt;p&gt;Альберт Эйнштейн&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_quotes_grey.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Большие цитаты</h2>
    <p>Большие цитаты часто используются в Интернете:</p>
    <div class="w3-panel w3-leftbar w3-sand">
        <p class="w3-xxlarge w3-serif"><i>"А сегодня в завтрашний день не все могут смотреть. Вернее смотреть могут не только лишь все, мало кто может это делать..."</i></p>
        <p>Виталий Кличко</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-leftbar w3-sand&quot;&gt;<br>
            &nbsp; &lt;p class=&quot;w3-xxlarge w3-serif&quot;&gt;<br>
            &nbsp; &lt;i&gt;&quot;Вы хотите провести остаток жизни, продавая газировку, или хотите изменить мир?.&quot;&lt;/i&gt;&lt;/p&gt;<br>
            &nbsp; &lt;p&gt;Стив Джобс&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_quotes_serif.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>

    <h2>Стандартный HTML элемент blockquote / Цитаты</h2>
    <p>Если вы используете стандартный HTML элемент <code class="w3-codespan">&lt;blockquote&gt;</code>, имейте ввиду, что браузер добавит дополнительный левый и правый поля (margin):</p>

    <blockquote class="w3-panel w3-leftbar w3-light-grey">
        <p class="w3-large"><i>"Мы находимся здесь, чтобы внести свой вклад в этот мир. Иначе зачем мы здесь? "</i></p>
        <p>Стив Джобс</p>
    </blockquote>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;blockquote class=&quot;w3-panel w3-leftbar w3-light-grey&quot;&gt;<br>
            &nbsp; &lt;p class=&quot;w3-large&quot;&gt;<br>&nbsp; &lt;i&gt;&quot;Мы находимся здесь, чтобы внести свой вклад в этот мир. Иначе зачем мы здесь?&quot;&lt;/i&gt;&lt;/p&gt;<br>
            &nbsp; &lt;p&gt;Стив Джобс&lt;/p&gt;<br>
            &lt;/blockquote&gt;
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_quotes_blockquote.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Использование HTML символов</h2>
    <p>Вы можете использовать стандартные символы HTML вместо амперсандов:</p>
    <table class="w3-table-all">
        <tr>
            <th>Символ</th>
            <th>Код</th>
        </tr>
        <tr>
            <td class="w3-xlarge">&#8810;</td>
            <td>#8810</td>
        </tr>
        <tr>
            <td class="w3-xlarge">&#9986;</td>
            <td>#9986</td>
        </tr>
        <tr>
            <td class="w3-xlarge">&#10077;</td>
            <td>#10077</td>
        </tr>
        <tr>
            <td class="w3-xlarge">&#10078;</td>
            <td>#10078</td>
        </tr>
        <tr>
            <td class="w3-xlarge">&#10080;</td>
            <td>#10080</td>
        </tr>
        <tr>
            <td class="w3-xlarge">&#10004;</td>
            <td>#10004</td>
        </tr>
    </table>

    <div class="w3-panel w3-light-grey">
        <span style="font-size:150px;line-height:0.6em;opacity:0.2">&#10077;</span>
        <p class="w3-xlarge" style="margin-top:-40px">
            <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non massa vitae risus fermentum ullamcorper. Phasellus risus urna, ornare in aliquam id, porttitor sit amet sapien. Nulla facilisi.</i></p>
    </div>
    <div class="w3-panel w3-light-grey">
        <span style="font-size:100px;line-height:0.6em">&#9986;</span>
        <p class="w3-xlarge">
            <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non massa vitae risus fermentum ullamcorper. Phasellus risus urna, ornare in aliquam id, porttitor sit amet sapien. Nulla facilisi.</i></p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-light-grey&quot;&gt;<br>&nbsp; &lt;span style=&quot;font-size:150px;line-height:0.6em;opacity:0.2&quot;&gt;&amp;#10077;&lt;/span&gt;<br>&nbsp;
            &lt;p class=&quot;w3-xlarge&quot; style=&quot;margin-top:-40px&quot;&gt;<br>&nbsp;&nbsp;&lt;i&gt;&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit ...&quot;&lt;/i&gt;&lt;/p&gt;<br>&nbsp; &lt;p&gt;Albert Einstein&lt;/p&gt;<br>&lt;/div&gt; </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_quotes1.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-panel  w3-center w3-leftbar w3-sand">
        <p><i class="w3-serif w3-xlarge">
                <span style="font-size:150px;line-height:0.6em;opacity:0.2">&#10004;</span>
                Программирование на С будет медленно снижаться.<br>
                Программирование на JavaScript будет становиться более популярнее.</i></p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-center w3-leftbar w3-sand&quot;&gt;<br>&nbsp; &lt;p&gt;&lt;i
            class=&quot;w3-serif w3-xlarge&quot;&gt;<br>&nbsp; &lt;span style=&quot;font-size:150px;line-height:0.6em;opacity:0.2&quot;&gt;&amp;#10004;&lt;/span&gt;<br>&nbsp;
            Программирование на С будет медленно снижаться.&lt;br&gt;<br>&nbsp; Программирование на JavaScript будет становиться более популярнее.&lt;/i&gt;&lt;/p&gt;<br>&lt;/div&gt;</div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_quotes7.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Использование иконок Font Awesome</h2>
    <p>Вы также можете использовать иконки из библиотеки <strong>Font Awesome</strong>:</p>

    <div class="w3-panel w3-leftbar">
        <p><i class="fa fa-quote-right w3-xxlarge"></i><br>
            <i class="w3-serif w3-xlarge">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non massa vitae risus fermentum ullamcorper. Phasellus risus urna, ornare in aliquam id, porttitor sit amet sapien. Nulla facilisi.</i></p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-leftbar&quot;&gt;<br>&nbsp; &lt;p&gt;&lt;i class=&quot;fa fa-quote-right w3-xxlarge&quot;&gt;&lt;/i&gt;&lt;br&gt;<br>&nbsp; &lt;i class=&quot;w3-serif w3-xlarge&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/i&gt;&lt;/p&gt;<br>&lt;/div&gt; </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_quotes3.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Вы также можете изменить цвет и непрозрачность:</p>
    <div class="w3-panel w3-sand w3-leftbar">
        <p><i class="fa fa-quote-right w3-xxlarge w3-opacity"></i><br>
            <i class="w3-serif w3-xlarge">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non massa vitae risus fermentum ullamcorper. Phasellus risus urna, ornare in aliquam id, porttitor sit amet sapien. Nulla facilisi.</i></p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-sand w3-leftbar&quot;&gt;<br>&nbsp; &lt;p&gt;&lt;i class=&quot;fa fa-quote-right w3-xxlarge w3-opacity&quot;&gt;&lt;/i&gt;<br>&nbsp; &lt;span class=&quot;w3-serif w3-xlarge&quot;&gt;<br>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit ...&lt;/span&gt;&lt;/p&gt;<br>&lt;/div&gt; </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_quotes2.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Черная цитата:</p>
    <div class="w3-panel w3-black">
        <p class="w3-large w3-serif">
            <i class="fa fa-quote-right w3-xxlarge w3-margin-right"></i>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non massa vitae risus fermentum ullamcorper. Phasellus risus urna, ornare in aliquam id, porttitor sit amet sapien. Nulla facilisi.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-black&quot;&gt;<br>&nbsp; &lt;p class=&quot;w3-large
            w3-serif&quot;&gt;<br>&nbsp; &lt;i class=&quot;fa fa-quote-right w3-xxlarge w3-margin-right&quot;&gt;&lt;/i&gt;<br> &nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit ...&lt;/p&gt;<br>&lt;/div&gt; </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_quotes4.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Показать цитаты как карты</h2>
    <div class="w3-panel w3-card-4 w3-light-grey" style="width:50%">
        <p class=" w3-large w3-serif"><i class="fa fa-quote-right w3-xxlarge w3-text-red"></i><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non massa vitae risus fermentum ullamcorper. Phasellus risus urna, ornare in aliquam id, porttitor sit amet sapien. Nulla facilisi.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-card-4 w3-light-grey&quot; style=&quot;width:50%&quot;&gt;<br>&nbsp; &lt;p
            class=&quot; w3-large w3-serif&quot;&gt;<br>&nbsp; &lt;i class=&quot;fa fa-quote-right w3-xxlarge w3-text-red&quot;&gt;&lt;/i&gt;&lt;br&gt;<br>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit ...&lt;/p&gt;<br>&lt;/div&gt;
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_quotes5.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-panel w3-center w3-card-4" style="width:50%">
        <span style="font-size:100px">&#10077;</span><br>
        <p style="margin-top:-60px"><i><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non massa vitae risus fermentum ullamcorper. Phasellus risus urna, ornare in aliquam id, porttitor sit amet sapien. Nulla facilisi.</b></i></p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-card-4 w3-center&quot; style=&quot;width:50%&quot;&gt;<br>&nbsp; &lt;span style=&quot;font-size:100px&quot;&gt;&amp;#10077;&lt;/span&gt;&lt;br&gt;<br>&nbsp; &lt;p style=&quot;margin-top:-60px&quot;&gt;<br>&nbsp;
            &lt;i&gt;&lt;b&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit ...&lt;/b&gt;&lt;/i&gt;&lt;/p&gt;<br>&lt;/div&gt; </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_quotes6.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_notes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_alerts.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>