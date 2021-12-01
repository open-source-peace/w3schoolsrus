<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Оповещения. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Оповещения. Как сделать оповещения на сайте. Отображение предупреждений. Стилизация оповещений на веб-странице. Использование контейнера. Закрытие оповещений. Округлые, как карточка. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Оповещения / Предупреждения</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_quotes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_tables.php">Next &#10095;</a>
    </div>
    <hr>

    <p>Класс <strong>w3-panel</strong> является идеальным классом для отображения всех типов оповещений (предупреждений):</p>
    <div class="w3-panel w3-pale-red w3-display-container w3-border">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Опасность!</h3>
        <p>Красный цвет часто указывает на опасную или негативную ситуацию.</p>
    </div>
    <p>Оповещения часто отображаются с использованием сильного (яркого) цвета:</p>
    <div class="w3-panel w3-red w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Опасность!</h3>
        <p>Красный цвет часто указывает на опасную или негативную ситуацию.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-red&quot;&gt;<br>
            &nbsp; &lt;h3&gt;Опасность!&lt;/h3&gt;<br>
            &nbsp; &lt;p&gt;Красный цвет часто указывает на опасную или негативную ситуацию.&lt;/p&gt;<br>
            &lt;/div&gt;&nbsp;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_alerts.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Отображение предупреждений</h2>
    <div class="w3-panel w3-pale-yellow w3-display-container w3-border">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Предупреждение!</h3>
        <p>Желтый цвет часто указывает на предупреждение, которое может потребовать внимания.</p>
    </div>
    <div class="w3-panel w3-yellow w3-display-container w3-border">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Предупреждение!</h3>
        <p>Желтый часто указывает на предупреждение, которое может потребовать внимания.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-yellow&quot;&gt;<br>
            &nbsp; &lt;h3&gt;Предупреждение!&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Желтый часто указывает на предупреждение, которое может потребовать внимания.&lt;/p&gt;<br>&lt;/div&gt;&nbsp;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_alerts_warning.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Отображение успеха (успешного выполнения)</h2>
    <div class="w3-panel w3-pale-green w3-display-container w3-border">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Успех!</h3>
        <p>Зеленый часто указывает на что-то успешное или положительное.</p>
    </div>
    <div class="w3-panel w3-green w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Успех!</h3>
        <p>Зеленый часто указывает на что-то успешное или положительное.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-green&quot;&gt;<br>
            &nbsp; &lt;h3&gt;Успех!&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Зеленый часто указывает на что-то успешное или положительное.&lt;/p&gt;<br>&lt;/div&gt;&nbsp;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_alerts_success.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Отображение информации</h2>
    <div class="w3-panel w3-pale-blue w3-display-container w3-border">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Инфо!</h3>
        <p>Синий часто указывает на нейтральное информативное изменение или действие.</p>
    </div>
    <div class="w3-panel w3-blue w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Инфо!</h3>
        <p>Синий часто указывает на нейтральное информативное изменение или действие.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-blue&quot;&gt;<br>
            &nbsp; &lt;h3&gt;Информация!&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Синий часто указывает на нейтральное информативное изменение или действие.&lt;/p&gt;<br>
            &lt;/div&gt;&nbsp;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_alerts_info.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Использование контейнера</h2>
    <p>Класс <strong>w3-container</strong> также может быть использован для отображения оповещений (предупреждений):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-container w3-red&quot;&gt;<br>
            &nbsp; &lt;h3&gt;Опасность!&lt;/h3&gt;<br>
            &nbsp; &lt;p&gt;Красный часто указывает на опасную или негативную ситуацию.&lt;/p&gt;<br>
            &lt;/div&gt;&nbsp;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_alerts_containers.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Оповещения во всех цветах</h2>
    <p>Оповещения часто отображаются в специальных (определённых) цветах, но можно использовать любой цвет:</p>
    <div class="w3-panel w3-pink">
        <h3>Опасность!</h3>
        <p>Красный цвет часто указывает на опасную или негативную ситуацию.</p>
    </div>

    <div class="w3-panel w3-orange">
        <h3>Опасность!</h3>
        <p>Красный часто указывает на опасную или негативную ситуацию.</p>
    </div>

    <div class="w3-panel w3-deep-orange">
        <h3>Опасность!</h3>
        <p>Красный часто указывает на опасную или негативную ситуацию.</p>
    </div>

    <div class="w3-panel w3-blue-gray">
        <h3>Опасность!</h3>
        <p>Красный часто указывает на опасную или негативную ситуацию.</p>
    </div>

    <div class="w3-panel w3-amber">
        <h3>Опасность!</h3>
        <p>Красный часто указывает на опасную или негативную ситуацию.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-blue-grey&quot;&gt;<br>
            &nbsp; &lt;h3&gt;Опасность!&lt;/h3&gt;<br>
            &nbsp; &lt;p&gt;Красный часто указывает на опасную или негативную ситуацию.&lt;/p&gt;<br>
            &lt;/div&gt;&nbsp;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_alerts_colors.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Закрытие оповещений</h2>
    <p>Чтобы закрыть окно предупреждения, нажмите X в правом верхнем углу:</p>
    <div class="w3-panel w3-red w3-display-container">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-red w3-display-topright">&times;</span>
        <h3>Опасность!</h3>
        <p>Красный часто указывает на опасную или негативную ситуацию.</p>
    </div>
    <p>Чтобы создать X, закрывающий предупреждение, добавьте элемент &lt;span&gt; с классом <strong>w3-button</strong> и событием <strong>onclick</strong>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;span onclick=&quot;this.parentElement.style.display='none'&quot;<br>class=&quot;w3-button
            w3-display-topright&quot;&gt;&amp;times;&lt;/span&gt; </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_alerts_close.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Совет:</b> HTML сущность <strong>&amp;times;</strong> является предпочтительным значком для кнопок закрытия (вместо буквы &quot;X&quot;).</p>
    </div>
    <hr>

    <h2>Округлые оповещения</h2>
    <p>Используйте классы <strong>w3-round</strong>, если вы хотите закругленные углы:</p>
    <div class="w3-panel w3-green w3-round">
        <h3>Успех!</h3>
        <p>Здесь используется w3-round.</p>
    </div>
    <div class="w3-panel w3-green w3-round-large">
        <h3>Успех!</h3>
        <p>Здесь используется w3-round-large.</p>
    </div>
    <div class="w3-panel w3-green w3-round-xxlarge">
        <h3>Успех!</h3>
        <p>Здесь используется w3-round-xxlarge.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-green w3-round&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_alerts_round.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Оповещение как карточка</h2>
    <p>Используйте класс <strong>w3-card</strong> если вы хотите, чтобы оповещение отображалось как карточка:</p>
    <div class="w3-panel w3-yellow w3-card-4">
        <h3>Предупреждение!</h3>
        <p>Желтый цвет часто указывает на то, что требует внимания.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-yellow w3-card-4&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_alerts_card.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_quotes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_tables.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>