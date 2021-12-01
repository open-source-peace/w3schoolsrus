<?php include '../include/head.php'; ?>

<title>CSS Анимации. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Анимации. Что такое CSS анимация? Что такое ключевые кадры в анимации? Примеры анимированных объектов на веб-странице. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" type="text/css" href="../styles/browserref.css">
    <style>
        #animated_div {
            width:70px;
            height:47px;
            background: #92B901;
            color: #fff;
            position: relative;
            font-weight:bold;
            font-size:20px;
            padding:10px;
            animation:animated_div 5s 1;
            -moz-animation:animated_div 5s 1;
            -webkit-animation:animated_div 5s 1;
            -o-animation:animated_div 5s 1;
            border-radius:5px;
            -webkit-border-radius:5px;
        }
        @keyframes animated_div
        {
            0% {transform: rotate(0deg);left:0;}
            25% {transform: rotate(20deg);left:0;}
            50% {transform: rotate(0deg);left:500px;}
            55% {transform: rotate(0deg);left:500px;}
            70% {transform: rotate(0deg);left:500px;background:#1ec7e6;}
            100% {transform: rotate(-360deg);left:0;}
        }
        @-webkit-keyframes animated_div
        {
            0% {-webkit-transform: rotate(0deg);left:0;}
            25% {-webkit-transform: rotate(20deg);left:0;}
            50% {-webkit-transform: rotate(0deg);left:500px;}
            55% {-webkit-transform: rotate(0deg);left:500px;}
            70% {-webkit-transform: rotate(0deg);left:500px;background:#1ec7e6;}
            100% {-webkit-transform: rotate(-360deg);left:0;}
        }
        @-moz-keyframes animated_div
        {
            0%  {-moz-transform: rotate(0deg);left:0;}
            25% {-moz-transform: rotate(20deg);left:0;}
            50%  {-moz-transform: rotate(0deg);left:500px;}
            55%  {-moz-transform: rotate(0deg);left:500px;}
            70%  {-moz-transform: rotate(0deg);left:500px;background:#1ec7e6;}
            100% {-moz-transform: rotate(-360deg);left:0;}
        }
        @-o-keyframes animated_div
        {
            0% {transform: rotate(0deg);left:0;}
            25% {transform: rotate(20deg);left:0;}
            50%  {transform: rotate(0deg);left:500px;}
            55%  {transform: rotate(0deg);left:500px;}
            70%  {transform: rotate(0deg);left:500px;background:#1ec7e6;}
            100% {transform: rotate(-360deg);left:0;}
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Анимации</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_transitions.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_tooltip.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Анимации</h2>
    <p>CSS позволяет сделать анимацию HTML-элементов без использования JavaScript или Flash!</p>
    <div id="animated_div">CSS</div>
    <p>В этой главе вы узнаете о следующих свойствах:</p>
    <ul>
        <li><code class="w3-codespan">@keyframes</code></li>
        <li><code class="w3-codespan">animation-name</code></li>
        <li><code class="w3-codespan">animation-duration</code></li>
        <li><code class="w3-codespan">animation-delay</code></li>
        <li><code class="w3-codespan">animation-iteration-count</code></li>
        <li><code class="w3-codespan">animation-direction</code></li>
        <li><code class="w3-codespan">animation-timing-function</code></li>
        <li><code class="w3-codespan">animation-fill-mode</code></li>
        <li><code class="w3-codespan">animation</code></li>
    </ul>
    <hr>

    <h2>Браузерная поддержка анимации</h2>
    <p>Числа в таблице указывают первую версию браузера, которая полностью поддерживает свойство.</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:25%;font-size:16px;text-align:left;">Свойство</th>
                <th style="width:15%;" class="bsChrome" title="Chrome"></th>
                <th style="width:15%;" class="bsEdge" title="Internet Explorer / Edge"></th>
                <th style="width:15%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:15%;" class="bsSafari" title="Safari"></th>
                <th style="width:15%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td style="text-align:left;">@keyframes</td>
                <td>43.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>9.0</td>
                <td>30.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">animation-name</td>
                <td>43.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>9.0</td>
                <td>30.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">animation-duration</td>
                <td>43.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>9.0</td>
                <td>30.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">animation-delay</td>
                <td>43.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>9.0</td>
                <td>30.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">animation-iteration-count</td>
                <td>43.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>9.0</td>
                <td>30.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">animation-direction</td>
                <td>43.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>9.0</td>
                <td>30.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">animation-timing-function</td>
                <td>43.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>9.0</td>
                <td>30.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">animation-fill-mode</td>
                <td>43.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>9.0</td>
                <td>30.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">animation</td>
                <td>43.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>9.0</td>
                <td>30.0</td>
            </tr>
        </table>
    </div>
    <hr>
<!--
    <h2>Специальные браузерные префиксы</h2>
    <p>Некоторым старым браузерам нужны специальные префиксы (-webkit-) для понимания свойств анимации:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp; width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;
            background-color: red;<br>&nbsp; -webkit-animation-name: example; /* Safari 4.0 - 8.0 */<br>&nbsp; -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */<br>&nbsp;
            animation-name: example;<br>&nbsp; animation-duration: 4s;<br>}<br><br>/*
            Safari 4.0 - 8.0 */<br>@-webkit-keyframes example {<br>&nbsp; from
            {background-color: red;}<br>&nbsp; to {background-color: yellow;}<br>}<br><br>
            /* Стандартный синтаксис */<br>@keyframes example {<br>&nbsp; from
            {background-color: red;}<br>&nbsp; to {background-color: yellow;}<br>}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
-->
    <h2>Что такое CSS анимация?</h2>
    <p>Анимация позволяет элементу постепенно переходить от одного стиля к другому.</p>
    <p>Вы можете изменить столько свойств CSS, сколько захотите, и столько раз, сколько хотите.</p>
    <p>Чтобы использовать CSS-анимацию, сначала необходимо указать несколько ключевых кадров для анимации.</p>
    <p>Ключевые кадры содержат стили, которые элемент будет иметь в определенное время.</p>
    <hr>

    <h2>Правило @keyframes (ключевые кадры)</h2>
    <p>Когда вы задаете стили CSS внутри правила <code class="w3-codespan">@keyframes</code> анимация постепенно изменится с текущего стиля на новый в определенные моменты времени.</p>
    <p>Чтобы анимация работала, вы должны привязать её к элементу.</p>
    <p>В следующем примере анимация &quot;example&quot; связывается с элементом <code class="w3-codespan">&lt;div&gt;</code>. Анимация будет длиться 4 секунды и постепенно изменит цвет фона элемента <code class="w3-codespan">&lt;div&gt;</code> с красного - &quot;<span style="background:red;padding:0 2px;">red</span>&quot; на желтый - &quot;<span style="background:yellow">yellow</span>&quot;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Код анимации */<br>
            @keyframes example {<br>
            &nbsp;&nbsp;from {background-color: red;}<br>
            &nbsp;
            to {background-color: yellow;}<br>
            }<br><br>/* Элемент, к которому применяется анимация */<br>
            div {<br>&nbsp; width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;
            background-color: red;<br>&nbsp;
            animation-name: example;<br>&nbsp;&nbsp;animation-duration: 4s;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation1.html">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Примечание:</b> Свойство <code class="w3-codespan">animation-duration</code> свойство определяет, сколько времени анимация должна занять для завершения. Если свойство <code class="w3-codespan">animation-duration</code> не указано, анимация не будет выполняться, поскольку значение по умолчанию равно 0s (0 секунд).</p>
    <p>В приведенном выше примере мы указали, когда стиль изменится, используя ключевые слова &quot;от&quot; и &quot;до&quot; (что соответствует 0% (начало) и 100% (завершение)).</p>
    <p>Также можно использовать проценты. Используя проценты, вы можете добавлять столько стилей, сколько хотите.</p>
    <p>В следующем примере будет изменен цвет фона элемента <code class="w3-codespan">&lt;div&gt;</code>, когда анимация завершена на 25%, завершена на 50% и снова, когда анимация завершена на 100%:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Код анимации */<br>@keyframes example
            {<br>
            &nbsp;&nbsp;0%&nbsp;&nbsp; {background-color: red;}<br>
            &nbsp;
            25%&nbsp; {background-color: yellow;}<br>
            &nbsp;&nbsp;50%&nbsp; {background-color: blue;}<br>
            &nbsp;&nbsp;100% {background-color: green;}<br>
            }<br><br>/* Элемент, к которому применяется анимация */<br>div {<br>&nbsp;
            width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;&nbsp;background-color: red;<br>&nbsp;&nbsp;animation-name: example;<br>&nbsp;&nbsp;animation-duration: 4s;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation2.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Следующий пример изменит цвет фона и положение элемента <code class="w3-codespan">&lt;div&gt;</code>, когда анимация завершена на 25%, завершена на 50%, и снова, когда анимация завершена на 100%:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Код анимации */<br>@keyframes example
            {<br>
            &nbsp;&nbsp;0%&nbsp;&nbsp; {background-color:red; left:0px; top:0px;}<br>
            &nbsp;
            25%&nbsp; {background-color:yellow; left:200px; top:0px;}<br>
            &nbsp;
            50%&nbsp; {background-color:blue; left:200px; top:200px;}<br>
            &nbsp;
            75%&nbsp; {background-color:green; left:0px; top:200px;}<br>
            &nbsp;
            100% {background-color:red; left:0px; top:0px;}<br>
            }<br><br>/* Элемент, к которому применяется анимация */<br>div {<br>&nbsp;
            width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;
            position: relative;<br>&nbsp;&nbsp;background-color: red;<br>&nbsp;&nbsp;animation-name: example;<br>&nbsp;&nbsp;animation-duration: 4s;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Задержка анимации</h2>
    <p>Свойство <code class="w3-codespan">animation-delay</code> указывает задержку начала анимации.</p>
    <p>В следующем примере перед запуском анимация задерживается на 2 секунды:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;
            width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;
            position: relative;<br>&nbsp;&nbsp;background-color: red;<br>&nbsp;&nbsp;animation-name: example;<br>
            &nbsp;
            animation-duration: 4s;<br>&nbsp; animation-delay: 2s;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation_delay.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Отрицательные значения также допускаются. При использовании отрицательных значений анимация начнется так, как если бы она уже воспроизводилась в течение <em>N</em> секунд.</p>
    <p>В следующем примере анимация запустится так, как если бы она уже воспроизводилась в течение 2 секунд:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;
            width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;
            position: relative;<br>&nbsp; background-color: red;<br>&nbsp;
            animation-name: example;<br>&nbsp;
            animation-duration: 4s;<br>&nbsp; animation-delay: -2s;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation_delay2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Установите, сколько раз анимация должна запускаться</h2>
    <p>Свойство <code class="w3-codespan">animation-iteration-count</code> указывает, сколько раз анимация должна запускаться.</p>
    <p>В следующем примере анимация будет запущена 3 раза до ее остановки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;&nbsp;width: 100px;<br>&nbsp;&nbsp;height: 100px;<br>&nbsp;&nbsp;position: relative;<br>&nbsp;&nbsp;background-color: red;<br>&nbsp;&nbsp;animation-name: example;<br>&nbsp;&nbsp;animation-duration: 4s;<br>&nbsp;&nbsp;animation-iteration-count: 3;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation_count.html">Попробуйте сами &raquo;</a>
    </div>
    <p>В следующем примере используется значение &quot;infinite&quot; (бесконечно), чтобы анимация продолжалась постоянно:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;
            width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;
            position: relative;<br>&nbsp;&nbsp;background-color: red;<br>&nbsp;&nbsp;animation-name: example;<br>&nbsp;&nbsp;animation-duration: 4s;<br>
            &nbsp; animation-iteration-count:
            infinite;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation_count2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Запустите анимацию в обратном направлении или альтернативных циклах</h2>
    <p>Свойство <code class="w3-codespan">animation-direction</code> указывает, следует ли воспроизводить анимацию вперед, назад или в чередующихся циклах.</p>
    <p>Свойство animation-direction может иметь следующие значения:</p>
    <ul>
        <li><code class="w3-codespan">normal</code> - Анимация воспроизводится как обычно (вперед). Это по умолчанию</li>
        <li><code class="w3-codespan">reverse</code> - Анимация воспроизводится в обратном направлении (назад)</li>
        <li><code class="w3-codespan">alternate </code>- Сначала анимация воспроизводится вперед, затем назад</li>
        <li><code class="w3-codespan">alternate-reverse</code> - Сначала анимация воспроизводится в обратном направлении, затем вперед</li>
    </ul>
    <p>В следующем примере анимация будет запущена в обратном направлении (назад):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;
            width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;
            position: relative;<br>&nbsp;&nbsp;background-color: red;<br>&nbsp;
            animation-name: example;<br>&nbsp;
            animation-duration: 4s;<br>&nbsp; animation-direction:
            reverse;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation_direction.html">Попробуйте сами &raquo;</a>
    </div>
    <p>В следующем примере используется значение &quot;alternate&quot;, чтобы сначала запустить анимацию вперед, а затем назад:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;
            width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;
            position: relative;<br>&nbsp; background-color: red;<br>&nbsp;&nbsp;animation-name: example;<br>&nbsp;&nbsp;animation-duration: 4s;<br>&nbsp;&nbsp;animation-iteration-count: 2;<br>&nbsp;&nbsp;animation-direction:
            alternate;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation_direction2.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере используется значение &quot;alternate-reverse&quot;, чтобы сначала запустить анимацию назад, а затем вперед:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;&nbsp;width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;
            position: relative;<br>&nbsp;&nbsp;background-color: red;<br>&nbsp;&nbsp;animation-name: example;<br>&nbsp;&nbsp;animation-duration: 4s;<br>&nbsp;&nbsp;animation-iteration-count: 2;<br>&nbsp;&nbsp;animation-direction:
            alternate-reverse;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation_direction3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Укажите кривую скорости анимации</h2>
    <p>Свойство <code class="w3-codespan">animation-timing-function</code> задает кривую скорости анимации.</p>
    <p>Свойство animation-timer-function может иметь следующие значения:</p>
    <ul>
        <li><code class="w3-codespan">ease</code> - Определяет анимацию с медленным началом, затем быстрым, а затем медленным завершением (по умолчанию)</li>
        <li><code class="w3-codespan">linear</code> - Определяет анимацию с одинаковой скоростью от начала до конца</li>
        <li><code class="w3-codespan">ease-in</code> - Определяет анимацию с медленным стартом</li>
        <li><code class="w3-codespan">ease-out</code> - Определяет анимацию с медленным окончанием</li>
        <li><code class="w3-codespan">ease-in-out</code> - Определяет анимацию с медленным началом и окончанием</li>
        <li><code class="w3-codespan">cubic-bezier(n,n,n,n)</code> - Позволяет определить свои собственные значения в функции кубического Безье</li>
    </ul>
    <p>В следующем примере показаны некоторые из различных кривых скорости, которые можно использовать:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #div1 {animation-timing-function: linear;}<br>#div2
            {animation-timing-function: ease;}<br>#div3 {animation-timing-function:
            ease-in;}<br>#div4 {animation-timing-function: ease-out;}<br>#div5
            {animation-timing-function: ease-in-out;}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation_speed.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Укажите режим заполнения для анимации</h2>
    <p>CSS-анимация не влияет на элемент перед воспроизведением первого ключевого кадра или после воспроизведения последнего ключевого кадра. Свойство <code class="w3-codespan">animation-fill-mode</code> может переопределить это поведение.</p>
    <p>Свойство <code class="w3-codespan">animation-fill-mode</code> определяет стиль для целевого элемента, когда анимация не воспроизводится (до ее запуска, после ее завершения или в обоих случаях).</p>
    <p>Свойство <code class="w3-codespan">animation-fill-mode</code> может иметь следующие значения:</p>
    <ul>
        <li><code class="w3-codespan">none</code> - Значение по умолчанию. Анимация не будет применять какие-либо стили к элементу до или после его выполнения</li>
        <li><code class="w3-codespan">forwards</code> - Элемент сохранит значения стиля, установленные последним ключевым кадром - зависит от animation-direction (направления анимации) и animation-iteration-count (итеративного подсчета анимации)</li>
        <li><code class="w3-codespan">backwards</code> - Элемент получит значения стиля, заданные первым ключевым кадром - зависит от animation-direction (направления анимации),  и сохранит его в течение периода animation-delay (задержки анимации)</li>
        <li><code class="w3-codespan">both</code> - Анимация будет следовать правилам как вперед, так и назад, расширяя свойства анимации в обоих направлениях.</li>
    </ul>
    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> сохраняет значения стиля из последнего ключевого кадра после окончания анимации:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp; width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;&nbsp;background: red;<br>&nbsp;&nbsp;position: relative;<br>&nbsp;&nbsp;animation-name: example;<br>&nbsp; animation-duration: 3s;<br>
            &nbsp; animation-fill-mode: forwards;<br>
            }</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation_fill-mode.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> получает значения стиля, установленные первым ключевым кадром, до начала анимации (в течение периода задержки анимации):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp; width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;
            background: red;<br>&nbsp; position: relative;<br>&nbsp;
            animation-name: example;<br>&nbsp;
            animation-duration: 3s;<br>&nbsp;
            animation-delay: 2s;<br>&nbsp;&nbsp;animation-fill-mode: backwards;<br>
            }</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation_fill-mode2.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> получает значения стиля, установленные первым ключевым кадром до начала анимации, и сохраняет значения стиля из последнего ключевого кадра после завершения анимации:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp; width: 100px;<br>&nbsp; height: 100px;<br>&nbsp;&nbsp;background: red;<br>
            &nbsp; position: relative;<br>&nbsp;
            animation-name: example;<br>&nbsp;
            animation-duration: 3s;<br>&nbsp;
            animation-delay: 2s;<br>&nbsp; animation-fill-mode: both;<br>
            }</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation_fill-mode3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Сокращенные свойства анимации</h2>
    <p>В приведенном ниже примере используются шесть свойств анимации:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>&nbsp;
            animation-name: example;<br>
            &nbsp;
            animation-duration: 5s;<br>
            &nbsp;
            animation-timing-function: linear;<br>
            &nbsp;
            animation-delay: 2s;<br>
            &nbsp;
            animation-iteration-count: infinite;<br>
            &nbsp;
            animation-direction: alternate;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation4.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Тот же эффект анимации, что и выше, может быть достигнут с помощью свойства сокращения <code class="w3-codespan">animation</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp; animation: example 5s linear 2s infinite alternate;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_animation5.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_transitions1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_transitions2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_transitions3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_transitions4" target="_blank" rel="nofollow">Упражнение 4 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_transitions5" target="_blank" rel="nofollow">Упражнение 5 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>CSS Свойства анимации</h2>
    <p>В следующей таблице перечислены правила @keyframes и все свойства CSS-анимации:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:28%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_animation-keyframes.php">@keyframes</a></td>
            <td>Определяет код анимации</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_animation.php">animation</a></td>
            <td>Сокращенное свойство для установки всех свойств анимации</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_animation-delay.php">animation-delay</a></td>
            <td>Определяет задержку начала анимации</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_animation-direction.php">animation-direction</a></td>
            <td>Определяет, должна ли анимация воспроизводиться вперед, назад или поочередно</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_animation-duration.php">animation-duration</a></td>
            <td>Определяет, сколько времени анимация должна занять для завершения одного цикла</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_animation-fill-mode.php">animation-fill-mode</a></td>
            <td>Определяет стиль для элемента, когда анимация не воспроизводится (до его начала, после его завершения или и того, и другого)</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_animation-iteration-count.php">animation-iteration-count</a></td>
            <td>Определяет, сколько раз анимация должна проигрываться</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_animation-name.php">animation-name</a></td>
            <td>Определяет имя анимации @keyframes</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_animation-play-state.php">animation-play-state</a></td>
            <td>Указывает, запущена ли анимация или приостановлена</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_animation-timing-function.php">animation-timing-function</a></td>
            <td>Определяет кривую скорости анимации</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_transitions.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_tooltip.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>