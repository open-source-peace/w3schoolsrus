<?php include '../include/head.php'; ?>

<title>CSS Вид сетки grid-view. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Вид сетки grid-view. Построение сетки из 12 столбцов. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .gridwrapper {
            overflow: auto;
            position: relative;
            height: 250px;
        }
        .gridcontent {
            width: 8.33%;
            margin: 0;
            border-right: 1px solid grey;
            height: 100%;
            float: left;
            background-color:#f1f1f1;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>Адаптивный веб-дизайн - <span class="color_h1">Вид сетки (grid-view)</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_viewport.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_mediaqueries.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Что такое вид сетки (grid-view)?</h2>
    <p>Многие веб-страницы основаны на сетке, что означает, что страница разделена на столбцы:</p>
    <div class="gridcontainer">
        <div class="gridwrapper">
            <div class="gridcontent" style="border-left:1px solid grey;"></div>
            <div class="gridcontent"></div>
            <div class="gridcontent"></div>
            <div class="gridcontent"></div>
            <div class="gridcontent"></div>
            <div class="gridcontent"></div>
            <div class="gridcontent"></div>
            <div class="gridcontent"></div>
            <div class="gridcontent"></div>
            <div class="gridcontent"></div>
            <div class="gridcontent"></div>
            <div class="gridcontent"></div>
        </div>
    </div>
    <br>
    <p>Использование вида сетки очень полезно при разработке веб-страниц. Это облегчает размещение элементов на странице.</p>

    <div style="position:relative">
        <div style="position:absolute;opacity:0.9;width:auto;left:0;right:0;">
            <div class="gridcontainer">
                <div class="gridwrapper" style="height:90px;">
                    <div class="gridcontent" style="width:100%;background:#9933cc;border-right-color:transparent;">
                    </div>
                </div>
                <div class="gridwrapper" style="height:230px;">
                    <div class="gridcontent" style="background-color:#ffffff;border:none;width:25%;padding-top:15px;">
                        <div style="background-color:#33b5e5;border:none;width:100%;height:15%;margin-bottom:10px;"></div>
                        <div style="background-color:#33b5e5;border:none;width:100%;height:15%;margin-bottom:10px;"></div>
                        <div style="background-color:#33b5e5;border:none;width:100%;height:15%;margin-bottom:10px;"></div>
                        <div style="background-color:#33b5e5;border:none;width:100%;height:15%;"></div>
                    </div>
                    <div class="gridcontent" style="background-color:#ffffff;border:none;"></div>
                    <div class="gridcontent" style="background-color:#ffffff;border:none;"></div>
                    <div class="gridcontent" style="background-color:#ffffff;border:none;"></div>
                    <div class="gridcontent" style="background-color:#ffffff;border:none;"></div>
                    <div class="gridcontent" style="background-color:#ffffff;border:none;"></div>
                    <div class="gridcontent" style="background-color:#ffffff;border:none;"></div>
                    <div class="gridcontent" style="background-color:#ffffff;border:none;width:25%;padding-top:15px;">
                        <div style="background-color:#33b5e5;border:none;width:100%;height:92%;"></div>
                    </div>
                </div>
                <div class="gridwrapper" style="height:50px;">
                    <div class="gridcontent" style="width:100%;background:#0099cc;border-right-color:transparent;">
                    </div>
                </div>

            </div>
        </div>
        <div class="gridcontainer" style="opacity:0.1;">
            <div class="gridwrapper" style="height:370px;">
                <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;border-left:1px solid #000000;"></div>
                <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
                <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
                <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
                <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
                <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
                <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
                <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
                <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
                <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
                <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
                <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
            </div>
        </div>
    </div>
    <br>

    <p>Адаптивное сеточное представление часто имеет 12 столбцов и имеет общую ширину 100%, и будет уменьшаться и расширяться при изменении размера окна браузера.</p>

    <p><a target="_blank" href="../csstryit/tryresponsive_grid.html" class="w3-btn">Пример: Адаптивный вид сетки</a></p>
    <hr>

    <h2>Построение адаптивного вида сетки</h2>
    <p>Давайте построим адаптивный вид сетки.</p>

    <p>Сначала убедитесь, что для всех элементов HTML свойство <code class="w3-codespan">box-sizing</code> установлено в <code class="w3-codespan">border-box</code>. Это гарантирует, что отступы и границы включены в общую ширину и высоту элементов.</p>
    <p>Добавьте следующий код в CSS:</p>
    <div class="w3-code w3-border notranslate cssHigh">
        <div>
            * {<br>&nbsp;&nbsp;box-sizing: border-box;<br>}</div>
    </div>

    <p>Подробнее о свойстве <code class="w3-codespan">box-sizing</code> читайте в разделе <a href="css3_box-sizing.php">CSS Box Sizing</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>В следующем примере показана простая адаптивная веб-страница с двумя столбцами:</p>

    <div class="w3-row-padding" style="margin:0 -9px">
        <div class="w3-col s3 w3-light-grey w3-border w3-display-container" style="height:70px"><div class="w3-display-middle">25%</div></div>
        <div class="w3-col s9 w3-light-grey w3-border w3-display-container" style="height:70px"><div class="w3-display-middle">75%</div></div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .menu {<br>&nbsp; width: 25%;<br>&nbsp;
            float: left;<br>}<br>
            .main {<br>&nbsp; width: 75%;<br>&nbsp;
            float: left;<br>}<br></div>
        <a target="_blank" href="../csstryit/tryresponsive_webpage.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Пример выше подходит, если веб-страница содержит только два столбца.</p>
    <p>Однако мы хотим использовать адаптивный вид сетки с 12 столбцами, чтобы иметь больше контроля над веб-страницей.</p>
    <p>Сначала необходимо рассчитать процент для одного столбца: 100% / 12 столбцов = 8,33%.</p>
    <p>Затем мы создаем один класс для каждого из 12 столбцов, <code class="w3-codespan">class=&quot;col-&quot;</code> и число, определяющее, сколько столбцов должен охватывать раздел:</p>

    <div class="w3-example">
        <h3>CSS:</h3>
        <div class="w3-code notranslate cssHigh">
            .col-1 {width: 8.33%;}<br>.col-2 {width: 16.66%;}<br>.col-3 {width: 25%;}<br>
            .col-4 {width: 33.33%;}<br>.col-5 {width: 41.66%;}<br>.col-6 {width: 50%;}<br>
            .col-7 {width: 58.33%;}<br>.col-8 {width: 66.66%;}<br>.col-9 {width: 75%;}<br>
            .col-10 {width: 83.33%;}<br>.col-11 {width: 91.66%;}<br>.col-12 {width:
            100%;}</div>
        <a target="_blank" href="../csstryit/tryresponsive_cols.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>


    <p>Все эти столбцы должны быть плавающими по левой стороне и иметь отступ 15 пикселей:</p>

    <div class="w3-example">
        <h3>CSS:</h3>
        <div class="w3-code notranslate cssHigh">
            [class*=&quot;col-&quot;] {<br>&nbsp; float: left;<br>&nbsp;
            padding: 15px;<br>&nbsp; border: 1px solid red;<br>}</div>
    </div>

    <p>Каждый ряд должен быть завернут в <code class="w3-codespan">&lt;div&gt;</code>. Количество столбцов внутри строки всегда должно составлять до 12:</p>

    <div class="w3-example">
        <h3>HTML:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;row&quot;&gt;<br>&nbsp; &lt;div class=&quot;col-3&quot;&gt;...&lt;/div&gt; &lt;!-- 25% --&gt;<br>&nbsp; &lt;div class=&quot;col-9&quot;&gt;...&lt;/div&gt; &lt;!-- 75% --&gt;<br>&lt;/div&gt;</div>
    </div>

    <p>Все столбцы внутри строки смещены влево и поэтому удалены из потока страницы, а другие элементы будут размещены так, как будто столбцы не существуют. Чтобы предотвратить это, добавим стиль, который очищает поток:</p>

    <div class="w3-example">
        <h3>CSS:</h3>
        <div class="w3-code notranslate cssHigh">
            .row::after {<br>&nbsp;&nbsp;content: &quot;&quot;;<br>&nbsp;
            clear: both;<br>&nbsp; display: table;<br>}</div>
    </div>

    <p>Также можно добавить несколько стилей и цветов, чтобы они выглядели лучше:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            html {<br>&nbsp; font-family: &quot;Lucida Sans&quot;, sans-serif;<br>}<br><br>
            .header {<br>&nbsp; background-color: #9933cc;<br>&nbsp;&nbsp;color: #ffffff;<br>
            &nbsp; padding: 15px;<br>}<br><br>.menu ul {<br>&nbsp;
            list-style-type: none;<br>&nbsp;&nbsp;margin: 0;<br>&nbsp;
            padding: 0;<br>}<br><br>.menu li {<br>&nbsp;
            padding: 8px;<br>&nbsp; margin-bottom: 7px;<br>&nbsp;
            background-color :#33b5e5;<br>&nbsp; color: #ffffff;<br>&nbsp;&nbsp;box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);<br>}<br><br>.menu li:hover {<br>
            &nbsp;
            background-color: #0099cc;<br>}</div>
        <a target="_blank" href="../csstryit/tryresponsive_styles.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Обратите внимание</strong>, что веб-страница в примере выглядит не очень хорошо, когда вы изменяете размер окна браузера до очень маленькой ширины. В следующей главе вы узнаете, как это исправить.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_viewport.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_mediaqueries.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>