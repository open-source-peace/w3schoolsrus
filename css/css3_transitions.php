<?php include '../include/head.php'; ?>

<title>CSS Переходы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Переходы. Как сделать эффект перехода с помощью CSS? Переходы и трансформации. Эффекты при наведении курсора. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" type="text/css" href="../styles/browserref.css">
    <style>
        .animated_div {
            width:60px;
            height:40px;
            background:#92B901;
            color:#ffffff;
            position:absolute;
            font-weight:bold;
            font-size:15px;
            padding:10px;
            float:left;
            margin:5px;
            -webkit-transition:-webkit-transform 1s,opacity 1s,background 1s,width 1s,height 1s,font-size 1s;
            -webkit-border-radius:5px;
            -o-transition-property:width,height,-o-transform,background,font-size,opacity;
            -o-transition-duration:1s,1s,1s,1s,1s,1s;
            -moz-transition-property:width,height,-o-transform,background,font-size,opacity;
            -moz-transition-duration:1s,1s,1s,1s,1s,1s;
            transition-property:width,height,transform,background,font-size,opacity;
            transition-duration:1s,1s,1s,1s,1s,1s;
            border-radius:5px;
            opacity:0.4;
        }
        .animated_div:hover
        {
            opacity:1;
            background:#1ec7e6;
            width:130px;
            height:80px;
            font-size:35px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Переходы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_3dtransforms.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_animations.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS Переходы</h2>
    <p><strong>CSS-переходы</strong> позволяют плавно изменять значения свойств в течение заданного периода времени.</p>
    <p>&nbsp;Наведите курсор на элемент ниже, чтобы увидеть эффект CSS перехода:</p>
    <div style="height:90px;">
        <div class="animated_div">CSS</div>
    </div>
    <p>В этой главе вы узнаете о следующих свойствах:</p>
    <ul>
        <li><code class="w3-codespan">transition</code></li>
        <li><code class="w3-codespan">transition-delay</code></li>
        <li><code class="w3-codespan">transition-duration</code></li>
        <li><code class="w3-codespan">transition-property</code></li>
        <li><code class="w3-codespan">transition-timing-function</code></li>
    </ul>
    <hr>

    <h2>Браузерная поддержка переходов</h2>
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
                <td style="text-align:left;">transition</td>
                <td>26.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>6.1</td>
                <td>12.1</td>
            </tr>
            <tr>
                <td style="text-align:left;">transition-delay</td>
                <td>26.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>6.1</td>
                <td>12.1</td>
            </tr>
            <tr>
                <td style="text-align:left;">transition-duration</td>
                <td>26.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>6.1</td>
                <td>12.1</td>
            </tr>
            <tr>
                <td style="text-align:left;">transition-property</td>
                <td>26.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>6.1</td>
                <td>12.1</td>
            </tr>
            <tr>
                <td style="text-align:left;">transition-timing-function</td>
                <td>26.0</td>
                <td>10.0</td>
                <td>16.0</td>
                <td>6.1</td>
                <td>12.1</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>Специальные браузерные префиксы</h2>
    <p>Некоторым старым браузерам нужны специальные префиксы (-webkit-), чтобы понять свойства перехода:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>&nbsp; width: 100px;<br>&nbsp;&nbsp;height: 100px;<br>&nbsp;
            background: red;<br>&nbsp;
            -webkit-transition: width 2s; /* Safari до 6.1 */<br>
            &nbsp;&nbsp;transition: width 2s;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transition1.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Как использовать CSS-переходы?</h2>
    <p>Чтобы создать <strong>эффект перехода</strong>, необходимо указать две вещи:</p>
    <ul>
        <li>свойство CSS, к которому вы хотите добавить эффект</li>
        <li>продолжительность эффекта</li>
    </ul>
    <p><b>Примечание:</b> Если часть продолжительности не указана, переход не будет иметь никакого эффекта, поскольку значение по умолчанию равно 0.</p>
    <p>В следующем примере показан красный элемент &lt;div&gt; размером 100px * 100px. Элемент &lt;div&gt;
        также указал эффект перехода для свойства width с длительностью 2 секунды:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>&nbsp; width: 100px;<br>&nbsp;&nbsp;height: 100px;<br>&nbsp;
            background: red;<br>&nbsp;&nbsp;transition: width 2s;<br>
            }
        </div>
        <br>
    </div>
    <p>Эффект перехода начнется, когда указанное свойство CSS (width) изменит значение.</p>
    <p>Теперь давайте зададим новое значение для свойства width, когда пользователь наводит курсор на элемент &lt;div&gt;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div:hover
            {<br>
            &nbsp;&nbsp;width: 300px;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transition1.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что когда курсор мыши выходит за пределы элемента, он постепенно вернется к своему первоначальному стилю.</p>
    <hr>

    <h2>Изменить несколько значений свойств</h2>
    <p>В следующем примере добавляется эффект перехода для свойства width и height с продолжительностью 2 секунды для ширины и 4 секунд для высоты:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;&nbsp;transition: width 2s, height 4s;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transition2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Укажите кривую скорости перехода</h2>
    <p>Свойство <code class="w3-codespan">transition-timing-function</code> задает кривую скорости эффекта перехода.</p>
    <p>Свойство transition-timer-function может иметь следующие значения:</p>
    <ul>
        <li><code class="w3-codespan">ease</code> - определяет эффект перехода с медленным началом, затем быстрым, а затем медленным завершением (по умолчанию)</li>
        <li><code class="w3-codespan">linear</code> - определяет эффект перехода с одинаковой скоростью от начала до конца</li>
        <li><code class="w3-codespan">ease-in</code> - определяет эффект перехода с медленным стартом</li>
        <li><code class="w3-codespan">ease-out</code> - определяет эффект перехода с медленным окончанием</li>
        <li><code class="w3-codespan">ease-in-out</code> - определяет эффект перехода с медленным началом и окончанием</li>
        <li><code class="w3-codespan">cubic-bezier(n,n,n,n)</code> - позволяет определить свои собственные значения в функции кубического Безье</li>
    </ul>
    <p>В следующем примере показаны некоторые из различных кривых скорости, которые можно использовать:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #div1 {transition-timing-function: linear;}<br>#div2
            {transition-timing-function: ease;}<br>#div3 {transition-timing-function:
            ease-in;}<br>#div4 {transition-timing-function: ease-out;}<br>#div5
            {transition-timing-function: ease-in-out;}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transition_speed.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Задержка эффекта перехода</h2>
    <p>Свойство <code class="w3-codespan">transition-delay</code> указывает задержку (в секундах) для эффекта перехода.</p>
    <p>В следующем примере перед запуском задержка составляет 1 секунду:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;
            transition-delay: 1s;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transition_delay.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Transition + Transformation (Переход + Трансформация)</h2>
    <p>В следующем примере добавляется эффект перехода к трансформации:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;&nbsp;transition:
            width 2s, height 2s, transform 2s;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transition_transform.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Больше примеров перехода</h2>
    <p>Свойства CSS перехода могут быть указаны по одному, например, так:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>&nbsp; transition-property: width;<br>
            &nbsp;
            transition-duration: 2s;<br>
            &nbsp;
            transition-timing-function: linear;<br>
            &nbsp;&nbsp;transition-delay: 1s;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transition4.html">Попробуйте сами &raquo;</a>
    </div>
    <p>или используя сокращенное свойство <code class="w3-codespan">transition</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transition: width 2s linear 1s;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transition5.html">Попробуйте сами &raquo;</a>
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

    <h2>CSS Свойства перехода</h2>
    <p>В следующей таблице перечислены все свойства перехода CSS:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_transition.php">transition</a></td>
            <td>Сокращенное свойство для установки четырех свойств перехода в одно свойство</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_transition-delay.php">transition-delay</a></td>
            <td>Определяет задержку (в секундах) для эффекта перехода</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_transition-duration.php">transition-duration</a></td>
            <td>Определяет, сколько секунд или миллисекунд требуется эффекту перехода для завершения</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_transition-property.php">transition-property</a></td>
            <td>Указывает имя свойства CSS, для которого предназначен эффект перехода</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_transition-timing-function.php">transition-timing-function</a></td>
            <td>Определяет кривую скорости эффекта перехода</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_3dtransforms.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_animations.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>