<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Панели. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Панели. Класс w3-panel. Для заметок, цитат, оповещений, карточек. Округлые панели. Как скрыть, закрыть, показать, открыть панель? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Панели</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_containers.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_borders.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="w3-panel w3-red">
        <p>Я панель.</p>
    </div>
    <div class="w3-panel w3-green">
        <p>Я панель.</p>
    </div>

    <div class="w3-container w3-red">
        <p>Я контейнер.</p>
    </div>
    <div class="w3-container w3-green">
        <p>Я контейнер.</p>
    </div>
    <hr>

    <h2>Класс панели</h2>
    <p>Класс <strong>w3-panel</strong> добавляет верхний и нижний поля (margin) размером 16px и отступ слева и справа в 16px для любого элемента HTML.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-red&quot;&gt;<br>&nbsp; &lt;p&gt;I am a panel.&lt;/p&gt;<br>
            &lt;/div&gt;&nbsp; </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_panels_containers.html" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Панели для заметок</h2>
    <p>Класс <strong>w3-panel</strong> идеально подходит для отображения заметок.</p>
    <p>Заметки часто отображаются бледным цветом:</p>
    <div class="w3-panel w3-pale-green">
        <p>Лондон - самый густонаселенный город в Соединенном Королевстве, с населением более 9 миллионов человек.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-pale-green&quot;&gt;<br>&nbsp; &lt;p&gt;Лондон - самый густонаселенный город в Соединенном Королевстве, с населением более 9 миллионов человек.&lt;/p&gt;<br>&lt;/div&gt; </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_panels_notes.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Чтобы узнать больше о W3.CSS заметках, пожалуйста, посетите раздел <a href="w3css_notes.php">W3.CSS Заметки</a> на нашем сайте.</p>
    <hr>

    <h2>Панели для цитат</h2>
    <p>Класс <strong>w3-panel</strong> идеально подходит для отображения цитат.</p>
    <div class="w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif">
        <p><i>"Сделайте это как можно проще, но не примитивно."</i></p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif&quot;&gt;<br>&nbsp; &lt;p&gt;&lt;i&gt;&quot;Сделайте это как можно проще, но не примитивно.&quot;&lt;/i&gt;&lt;/p&gt;<br>
            &lt;/div&gt;&nbsp; </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_panels_quotes.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Чтобы узнать больше о цитатах W3.CSS, посетите раздел <a href="w3css_quotes.php">W3.CSS Цитаты</a> на нашем сайте.</p>
    <hr>

    <h2>Панели для оповещений</h2>
    <p>Класс <strong>w3-panel</strong> идеально подходит для отображения оповещений (предупреждений).</p>
    <p>Оповещения часто отображаются с использованием сильного (насыщенного) цвета:</p>
    <div class="w3-panel w3-red">
        <h3>Опасность!</h3>
        <p>Красный часто указывает на опасную или негативную ситуацию.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-red&quot;&gt;<br>&nbsp; &lt;h3&gt;Опасность!&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Красный часто указывает на опасную или негативную ситуацию.&lt;/p&gt;<br>&lt;/div&gt; </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_panels_alerts.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Чтобы узнать больше об оповещениях (предупреждениях) W3.CSS, посетите раздел <a href="w3css_alerts.php">W3.CSS Оповещения</a> на нашем сайте.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Панели как открытки</h2>
    <div class="w3-panel w3-blue w3-card-4">
        <p>Лондон - самый густонаселенный город в Соединенном Королевстве, с населением более 9 миллионов человек.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-blue w3-card-4&quot;&gt;<br>&nbsp; &lt;p&gt;Лондон - самый густонаселенный город в Соединенном Королевстве, с населением более 9 миллионов человек.&lt;/p&gt;<br>&lt;/div&gt; </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_panels_cards.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Округлые панели</h2>
    <div class="w3-panel w3-blue w3-round-xlarge">
        <p>Лондон - самый густонаселенный город в Соединенном Королевстве, с населением более 9 миллионов человек.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-blue w3-round-xlarge&quot;&gt;<br>&nbsp; &lt;p&gt;Лондон - самый густонаселенный город в Соединенном Королевстве, с населением более 9 миллионов человек.&lt;/p&gt;<br>&lt;/div&gt; </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_panels_rounded.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Панель Скрыть (Закрыть)</h2>
    <p>Скрывать панель легко.</p>
    <div class="w3-panel w3-red w3-display-container">
        <span class="w3-button w3-large w3-red w3-display-topright" onclick="this.parentElement.style.display='none'">&times;</span>
        <p>Нажмите на X, чтобы закрыть эту панель.</p>
        <p>Нажмите на X, чтобы закрыть эту панель.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-panel w3-display-container"&gt;<br>&nbsp; &lt;span onclick=&quot;this.parentElement.style.display='none'&quot;<br>&nbsp; class=&quot;w3-button
            w3-display-topright&quot;&gt;X&lt;/span&gt;<br>&nbsp; &lt;p&gt;Нажмите на X, чтобы закрыть эту панель.&lt;/p&gt;<br>&nbsp; &lt;p&gt;Нажмите на X, чтобы закрыть эту панель.&lt;/p&gt;<br>&lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_panels_close.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Панель Показать (Открыть)</h2>
    <p>Показать (скрытую) панель легко:</p>

    <button class="w3-btn"
            onclick="document.getElementById('id01').style.display='block'">
        Показать панель</button>

    <div id="id01" class="w3-panel w3-green w3-display-container" style="display:none">
<span onclick="this.parentElement.style.display='none'"
      class="w3-button w3-large w3-display-topright">&times;</span>
        <p>Нажмите на X, чтобы закрыть эту панель.</p>
        <p>Нажмите на X, чтобы закрыть эту панель.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-btn&quot; onclick=&quot;document.getElementById('id01').style.display='block'&quot;&gt;Показать панель&lt;/button&gt;<br><br>&lt;div id=&quot;id01&quot; class=&quot;w3-panel w3-green
            w3-display-container&quot; style=&quot;display:none&quot;&gt;<br>
            &nbsp; &lt;span onclick=&quot;this.parentElement.style.display='none'&quot;<br>&nbsp; class=&quot;w3-button
            w3-display-topright&quot;&gt;X&lt;/span&gt;<br>
            &nbsp; &lt;p&gt;Нажмите на X, чтобы закрыть эту панель.&lt;/p&gt;<br>&nbsp; &lt;p&gt;Нажмите на X, чтобы закрыть эту панель.&lt;/p&gt;<br>&lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_panels_open.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_containers.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_borders.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>