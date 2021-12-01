<?php include '../include/head.php'; ?>

<title>JavaScript Цикл For. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Цикл For. Различные виды циклов. Область действия цикла. Циклы for/of и for/in, while и do/while. Упражнение на циклы в JS. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Цикл For</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_switch.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_loop_forin.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Циклы</strong> могут выполнять блок кода несколько раз.</p>
    <hr>

    <h2>JavaScript Циклы</h2>
    <p>Циклы удобны, если вы хотите запускать один и тот же код снова и снова, каждый раз с другим значением.</p>
    <p>Часто так бывает при работе с массивами:</p>

    <div class="w3-example">
        <h3>Вместо того, чтобы писать:</h3>
        <div class="w3-code notranslate jsHigh">
            text += cars[0] + &quot;&lt;br&gt;&quot;; <br>text += cars[1] + &quot;&lt;br&gt;&quot;; <br>
            text += cars[2] + &quot;&lt;br&gt;&quot;; <br>text += cars[3] + &quot;&lt;br&gt;&quot;; <br>
            text += cars[4] + &quot;&lt;br&gt;&quot;; <br>text += cars[5] + &quot;&lt;br&gt;&quot;;
        </div>
        <h3>Вы можете написать:</h3>
        <div class="w3-code notranslate jsHigh">
            for (let i = 0; i &lt; cars.length; i++) { <br>&nbsp;&nbsp;text += cars[i] + &quot;&lt;br&gt;&quot;;<br>
            }</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_loop_for.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Различные виды циклов</h2>
    <p>JavaScript поддерживает разные виды циклов:</p>
    <ul>
        <li><code class="w3-codespan">for</code> - проходит через блок кода несколько раз</li>
        <li><code class="w3-codespan">for/in</code> - перебирает свойства объекта</li>
        <li><code class="w3-codespan">for/of</code> - перебирает значения итерируемого объекта</li>
        <li><code class="w3-codespan">while</code> - перебирает блок кода, пока выполняется указанное условие</li>
        <li><code class="w3-codespan">do/while</code> - также перебирает блок кода, пока выполняется указанное условие</li>
    </ul>
    <hr>

    <h2>Цикл For</h2>
    <p>Цикл <code class="w3-codespan">for</code> имеет следующий синтаксис:</p>

    <div class="w3-code w3-border notranslate jsHigh">
        <div>
            for (<i>инструкция 1</i>;<i> инструкция 2</i>;<i> инструкция 3</i>) {<br>
            &nbsp; // <i>блок кода, который должен быть выполнен</i><br>
            }<br>
        </div>
    </div>

    <p><strong>Инструкция 1</strong> выполняется (один раз) перед выполнением блока кода.</p>
    <p><strong>Инструкция 2</strong> определяет условие выполнения блока кода.</p>
    <p><strong>Инструкция 3</strong> выполняется (каждый раз) после выполнения блока кода.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            for (let i = 0; i &lt; 5; i++) {<br>
            &nbsp; text += &quot;Число является &quot; + i + &quot;&lt;br&gt;&quot;;<br>
            }<br>
        </div>
        <a target="_blank" href="../jstryit/tryjs_loop_for_ex.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Из приведенного выше примера вы можете прочитать:</p>
    <p>Инструкция 1 устанавливает переменную до начала цикла (let i = 0).</p>
    <p>Инструкция 2 определяет условие для запуска цикла (i должно быть меньше чем 5).</p>
    <p>Инструкция 3 увеличивает значение (i++) каждый раз, когда выполняется блок кода в цикле.</p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Инструкция 1</h2>
    <p>Обычно вы будете использовать инструкцию 1 для инициализации переменной, используемой в цикле (let i = 0).</p>
    <p>Это не всегда так, JavaScript всё равно. Инструкция 1 необязательна.</p>
    <p>В инструкции 1 можно указать множество значений (разделенных запятыми):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            for (let i = 0, len = cars.length, text = &quot;&quot;; i &lt; len; i++) { <br>&nbsp; text += cars[i] + &quot;&lt;br&gt;&quot;;<br>
            }</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_loop_for_om1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>И вы можете опустить инструкцию 1 (например, когда ваши значения установлены до начала цикла):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let i = 2;<br>
            let len = cars.length;<br>
            let text = &quot;&quot;;<br>for (; i &lt; len; i++) { <br>
            &nbsp; text += cars[i] + &quot;&lt;br&gt;&quot;;<br>
            }</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_loop_for_om2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <h2>Инструкция 2</h2>
    <p>Часто инструкция 2 используется для оценки состояния исходной переменной.</p>
    <p>Это не всегда так, JavaScript всё равно. Инструкция 2 также необязательна.</p>
    <p>Если инструкция 2 вернёт true, цикл начнется заново, если он вернёт false, цикл завершится.</p>

    <div class="w3-panel w3-note">
        <p>Если вы опустите инструкцию 2, вы должны сделать <strong>обрыв</strong> внутри цикла. В противном случае цикл никогда не закончится. Это приведёт к сбою вашего браузера. Прочтите об обрывах в следующей главе этого учебника на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Инструкция 3</h2>
    <p>Часто инструкция 3 увеличивает значение начальной переменной.</p>
    <p>Это не всегда так, JavaScript всё равно, а инструкция 3 необязательна.</p>
    <p>Инструкция 3 может делать что угодно, например отрицательное приращение (i--), положительное приращение (i = i + 15) или что-то ещё.</p>
    <p>Инструкцию 3 также можно опустить (например, когда вы увеличиваете свои значения внутри цикла):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let i = 0;<br>
            let len = cars.length;<br>
            let text = &quot;&quot;;<br>
            for (; i &lt; len; ) { <br>&nbsp; text += cars[i] + &quot;&lt;br&gt;&quot;;<br>
            &nbsp;
            i++;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_loop_for_om3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Область действия цикла</h2>
    <p>Использование <code class="w3-codespan">var</code> в цикле:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var i = 5;<br>
            <br>
            for (var i = 0; i &lt; 10; i++) {<br>
            &nbsp;&nbsp;// какой-то код<br>}<br>
            <br>
            // Здесь i является 10
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_let_for_loop1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Использование <code class="w3-codespan">let</code> в цикле:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let i = 5;<br>
            <br>
            for (let i = 0; i &lt; 10; i++) {<br>
            &nbsp; // какой-то код<br>}<br>
            <br>
            // Здесь i является 5
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_let_for_loop2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>В первом примере с использованием <code class="w3-codespan">var</code>, переменная, объявленная в цикле, повторно объявляет переменную вне цикла.</p>
    <p>Во втором примере с использованием <code class="w3-codespan">let</code>, переменная, объявленная в цикле, не объявляет повторно переменную вне цикла.</p>
    <p>When <code class="w3-codespan">let</code> используется для объявления переменной i в цикле, переменная i будет видна только внутри цикла. .</p>
    <hr>

    <h2>Циклы For/Of и For/In</h2>
    <p>Цикл <code class="w3-codespan">for/in</code> и цикл <code class="w3-codespan">for/of</code> поясняются в следующей главе.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Циклы While</h2>
    <p>Циклы <code class="w3-codespan">while</code> и <code class="w3-codespan">do/while</code> поясняются в следующих главах.</p>
    <hr>

    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_loops1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Создайте цикл от 0 до 9.</p>
            <div class="exerciseprecontainer">
<pre>
let i;
<input name="ex1" maxlength="3" style="width: 35px;"> (<input name="ex2" maxlength="1" style="width: 14px;"> = <input name="ex3" maxlength="1" style="width: 14px;">; <input name="ex4" maxlength="1" style="width: 14px;"> &lt; <input name="ex5" maxlength="2" style="width: 25px;">; <input name="ex6" maxlength="3" style="width: 34px;">) {
  console.log(i);
}
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_switch.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_loop_forin.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>