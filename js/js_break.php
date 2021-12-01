<?php include '../include/head.php'; ?>

<title>JavaScript Break и Continue. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Break и Continue. Метки. Блоки кода. Упражнения. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Break и Continue</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_loop_while.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_iterables.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Оператор <code class="w3-codespan">break</code></strong> &quot;выпрыгивает&quot; из цикла.</p>
    <p class="intro"><strong>Оператор <code class="w3-codespan">continue</code></strong> &quot;перепрыгивает&quot; через одну итерацию цикла.</p>
    <hr>

    <h2>Оператор Break</h2>
    <p>Вы уже видели оператор <code class="w3-codespan">break</code> который использовался в предыдущей главе этого учебника. Его использовали для &quot;выпрыгивания&quot; (прекращения действия) оператора <code class="w3-codespan">switch()</code>.</p>
    <p>Оператор <code class="w3-codespan">break</code> также может использоваться для выхода из цикла:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            for (let i = 0; i &lt; 10; i++) {<br>
            &nbsp;
            if (i === 3) { break; }<br>
            &nbsp; text += "Число является " + i + "&lt;br&gt;";<br>
            }</div>
        <a target="_blank" href="../jstryit/tryjs_break.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>В приведенном выше примере оператор <code class="w3-codespan">break</code> завершает цикл ("разрывает" цикл) когда счетчик цикла (i) соответствует 3.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Оператор Continue</h2>
    <p>Оператор <code class="w3-codespan">continue</code> прерывает одну итерацию (в цикле), если возникает указанное условие, и продолжает следующую итерацию в цикле.</p>
    <p>В этом примере пропускается значение 3:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            for (let i = 0; i &lt; 10; i++) {<br>
            &nbsp; if (i === 3) { continue; }<br>
            &nbsp; text += &quot;Число является &quot; + i + &quot;&lt;br&gt;&quot;;<br>
            }
        </div>
        <a target="_blank" href="../jstryit/tryjs_continue.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>JavaScript метки</h2>
    <p>Чтобы пометить операторы JavaScript, вы ставите перед операторами (инструкциями) имя метки и двоеточие:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            метка:<br>операторы</div>
    </div>
    <p>Операторы <code class="w3-codespan">break</code> и <code class="w3-codespan">continue</code> - единственные операторы JavaScript, которые могут &quot;выпрыгнуть&quot; из блока кода.</p>
    <p>Синтаксис:</p>

    <div class="w3-example">
        <div class="w3-code notranslate">
            break <em>имяметки</em>; <br><br>continue <em>имяметки</em>;</div>
    </div>
    <p>Оператор <code class="w3-codespan">continue</code> (со ссылкой на метку или без неё) можно использовать только для <strong>пропуска одной итерации цикла</strong>.</p>
    <p>Оператор <code class="w3-codespan">break</code> без ссылки на метку можно использовать только для <strong>выхода из цикла или переключения</strong>.</p>
    <p>Со ссылкой на метку оператор break можно использовать для <strong>выхода из любого блока кода</strong>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [&quot;BMW&quot;, &quot;Volvo&quot;, &quot;Saab&quot;, &quot;Ford&quot;];<br>list: {<br>&nbsp; text += cars[0] + &quot;&lt;br&gt;&quot;; <br>
            &nbsp; text += cars[1] + &quot;&lt;br&gt;&quot;; <br>&nbsp; break list;<br>&nbsp; text += cars[2] + &quot;&lt;br&gt;&quot;; <br>
            &nbsp; text += cars[3] + &quot;&lt;br&gt;&quot;; <br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_break_list.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Блок кода</strong> - это блок кода между { and }.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_break1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Остановите цикл, когда <code class="w3-codespan">i</code> равно 5.</p>
            <div class="exerciseprecontainer">
<pre>
for (i = 0; i &lt; 10; i++) {
  console.log(i);
  if (i == 5) {
    <input name="ex1" maxlength="5" style="width: 55px;">;
  }
}
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_loop_while.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_iterables.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>