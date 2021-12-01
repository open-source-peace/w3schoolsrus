<?php include '../include/head.php'; ?>

<title>JavaScript Цикл While. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Цикл While. Циклы выполняют блок кода, пока выполняется указанное условие. Цикл Do While. Синтаксис. Сравнение For и While. Примеры и упражнения. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Цикл While</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_loop_forof.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_break.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Циклы могут выполнять блок кода, пока выполняется указанное условие.</p>
    <hr>

    <h2>Цикл While</h2>
    <p><strong>Цикл <code class="w3-codespan">while</code></strong> перебирает блок кода, пока выполняется указанное условие.</p>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate jsHigh">
        <div>
            while (<em>состояние</em>) {<br>
            <i>&nbsp; // блок кода, который должен быть выполнен</i><br>
            }
        </div>
    </div>

    <h3>Пример</h3>
    <p>В следующем примере код в цикле будет выполняться снова и снова, пока переменная (i) меньше 10:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            while (i &lt; 10) {<br>
            &nbsp; text += &quot;Число является &quot; + i;<br>
            &nbsp; i++;<br>}<br>
        </div>
        <a target="_blank" href="../jstryit/tryjs_while.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Если вы забудете увеличить переменную, используемую в условии, цикл никогда не закончится. Это приведёт к сбою вашего браузера.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Цикл Do While</h2>
    <p>Цикл <code class="w3-codespan">do while</code> - это вариант цикла while. Этот цикл выполнит блок кода один раз, прежде чем проверять, истинно ли условие, затем он будет повторять цикл, пока условие истинно (true).</p>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate jsHigh">
        <div>
            do {<br>
            <i>&nbsp; // блок кода, который должен быть выполнен<br>
            </i>}<br>
            while (<em>condition</em>);</div>
    </div>

    <h3>Пример</h3>
    <p>В приведенном ниже примере используется цикл <code class="w3-codespan">do while</code>. Цикл всегда будет выполняться хотя бы один раз, даже если условие ложно (false), потому что блок кода выполняется до проверки условия:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            do {<br>
            &nbsp; text += &quot;Число является &quot; + i;<br>
            &nbsp; i++;<br>
            }<br>
            while (i &lt; 10);</div>
        <a target="_blank" href="../jstryit/tryjs_dowhile.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Не забудьте увеличить переменную, используемую в условии, иначе цикл никогда не закончится!</p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Сравнение For и While</h2>
    <p>Если вы читали предыдущую главу о цикле for, вы обнаружите, что цикл while во многом такой же, как цикл for, с опущенными инструкцией 1 и инструкцией 3.</p>
    <p>Цикл в этом примере использует цикл <code class="w3-codespan">for</code> для сбора названий автомобилей из массива cars:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [&quot;BMW&quot;, &quot;Volvo&quot;, &quot;Saab&quot;, &quot;Ford&quot;];<br>
            let i = 0;<br>
            let text = &quot;&quot;;<br><br>
            for (;cars[i];) {<br>
            &nbsp;&nbsp;text += cars[i];<br>
            i++;<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_loop_for_cars.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Цикл в этом примере использует цикл <code class="w3-codespan">while</code> для сбора названий автомобилей из массива cars:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [&quot;BMW&quot;, &quot;Volvo&quot;, &quot;Saab&quot;, &quot;Ford&quot;];<br>
            let i = 0;<br>
            let text = &quot;&quot;;<br>
            <br>
            while (cars[i]) {<br>
            &nbsp; text += cars[i];<br>
            &nbsp;
            i++;<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_loop_while_cars.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_loop_while1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Создайте цикл, который выполняется, пока <code class="w3-codespan">i</code> меньше 10.</p>
            <div class="exerciseprecontainer">
<pre>
let i = 0;
<input name="ex1" maxlength="5" style="width: 55px;"> (i <input name="ex2" maxlength="1" style="width: 14px;"> 10) {
  console.log(i);
  i++
}
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_loop_forof.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_break.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>