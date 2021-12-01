<?php include '../include/head.php'; ?>

<title>JavaScript Оператор Switch (переключение). <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Оператор Switch (переключение). Ключевые слова break, default. Общие блоки кода. Детали переключения. Строгое сравнение. Примеры. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Оператор <span class="color_h1">Switch</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_if_else.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_loop_for.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Оператор <code class="w3-codespan">switch</code></strong> используется для выполнения различных действий в зависимости от различных условий.</p>
    <hr>

    <h2>JavaScript Оператор Switch</h2>
    <p>Используйте <strong>оператор <code class="w3-codespan">switch</code></strong>, чтобы выбрать один из множества блоков кода, которые нужно выполнить.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate jsHigh"><div>
            switch(<em>выражение</em>) {<br>
            &nbsp;&nbsp;case <em>x</em>:<br>
            <em>&nbsp;&nbsp;&nbsp; // блок кода<br>
            </em>&nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;&nbsp;case <em>y</em>:<br>
            <em>&nbsp;&nbsp;&nbsp; // блок кода<br>
            </em>&nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;&nbsp;default:<br>
            &nbsp;&nbsp; &nbsp;// <em>блок кода</em><br>
            }
        </div>
    </div>

    <p>Вот как это работает:</p>
    <ul>
        <li>Выражение переключения (switch) вычисляется один раз.</li>
        <li>Значение выражения сравнивается со значениями для каждого случая.</li>
        <li>Если есть совпадение, выполняется связанный блок кода.</li>
        <li>Если совпадений нет, выполняется блок кода по умолчанию (default).</li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Метод <code class="w3-codespan">getDay()</code> возвращает день недели в виде числа от 0 до 6.</p>
        <p>(Sunday=0, Monday=1, Tuesday=2 ..)</p>
        <p>В этом примере номер дня недели используется для вычисления имени дня недели:</p>
        <div class="w3-code notranslate jsHigh">
            switch (new Date().getDay()) {<br>
            &nbsp;&nbsp;case 0:<br>
            &nbsp; &nbsp;&nbsp;day = &quot;Sunday&quot;;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;case 1:<br>
            &nbsp; &nbsp; day = &quot;Monday&quot;;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;case 2:<br>
            &nbsp; &nbsp;&nbsp; day = &quot;Tuesday&quot;;<br>
            &nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;&nbsp;case 3:<br>
            &nbsp; &nbsp; day = &quot;Wednesday&quot;;<br>
            &nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;&nbsp;case 4:<br>
            &nbsp; &nbsp; day = &quot;Thursday&quot;;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;case 5:<br>
            &nbsp; &nbsp; day = &quot;Friday&quot;;<br>
            &nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;&nbsp;case 6:<br>
            &nbsp; &nbsp;&nbsp;day = &quot;Saturday&quot;;<br>
            }
        </div>
        <p>Результат дня будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>
                <script>
                    let d=new Date().getDay();
                    switch (d) {
                        case 0:
                            x="Sunday";
                            break;
                        case 1:
                            x="Monday";
                            break;
                        case 2:
                            x="Tuesday";
                            break;
                        case 3:
                            x="Wednesday";
                            break;
                        case 4:
                            x="Thursday";
                            break;
                        case 5:
                            x="Friday";
                            break;
                        case 6:
                            x="Saturday";
                            break;
                    }
                    document.write(x);
                </script>
            </code>
        </div>
        <a target="_blank" href="../jstryit/tryjs_switch.html" class="w3-btn w3-margin-bottom w3-margin-top">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Ключевое слово break</h2>
    <p>Когда JavaScript достигает ключевого слова <code class="w3-codespan">break</code>, он выходит из блока switch.</p>
    <p>Это остановит выполнение внутри блока switch.</p>
    <p>Необязательно разбивать последний регистр в блоке switch. Блок все равно обрывается (заканчивается).</p>

    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Если вы опустите оператор break, следующий кейс будет выполнен, даже если оценка не соответствует кейсу.</p>
    </div>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Ключевое слово default</h2>
    <p>Ключевое слово <code class="w3-codespan">default</code> определяет код для запуска, если нет соответствующего кейса:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Метод <code class="w3-codespan">getDay()</code> возвращает день недели в виде числа от 0 до 6.</p>
        <p>Если сегодня ни Суббота (6), ни Воскресенье (0), напишите сообщение по умолчанию (default):</p>
        <div class="w3-code notranslate jsHigh">
            switch (new Date().getDay()) {<br>
            &nbsp;
            case 6:<br>
            &nbsp; &nbsp; text = &quot;Сегодня Суббота&quot;;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;break; <br>
            &nbsp;&nbsp;case 0:<br>
            &nbsp;&nbsp;&nbsp; text = &quot;Сегодня Воскресенье&quot;;<br>
            &nbsp;&nbsp;&nbsp; break; <br>
            &nbsp;
            default: <br>
            &nbsp;&nbsp;&nbsp; text = &quot;С нетерпением жду выходных&quot;;<br>}
        </div>
        <p>Результат текста будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>
                <script>
                    switch (new Date().getDay()) {
                        case 6:
                            x= "Сегодня суббота";
                            break;
                        case 0:
                            x = "Сегодня Воскресенье";
                            break;
                        default:
                            x = "С нетерпением жду выходных";
                    }
                    document.write(x);
                </script>
            </code>
        </div>
        <a target="_blank" href="../jstryit/tryjs_switch2.html" class="w3-btn w3-margin-bottom w3-margin-top">Попробуйте сами &raquo;</a>
    </div>
    <p>Кейс <code class="w3-codespan">default</code> не обязательно должен быть последним кейсом в блоке switch:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            switch (new Date().getDay()) {<br>
            &nbsp;&nbsp;default: <br>
            &nbsp;&nbsp;&nbsp; text = &quot;С нетерпением жду выходных&quot;;<br>&nbsp;&nbsp;&nbsp;
            break;<br>&nbsp;&nbsp;case 6:<br>
            &nbsp; &nbsp; text = &quot;Сегодня Суббота&quot;;<br>
            &nbsp;&nbsp;&nbsp; break; <br>
            &nbsp;&nbsp;case 0:<br>
            &nbsp;&nbsp;&nbsp; text = &quot;Сегодня Воскресенье&quot;;<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_switch4.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Если <code class="w3-codespan">default</code> не последний кейс в блоке switch, не забудьте завершить кейс default обрывом (break).</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Общие блоки кода</h2>
    <p>Иногда вам может понадобиться, чтобы в разных случаях переключения (кейсах switch) использовался один и тот же код.</p>
    <p>В этом примере кейс 4 и 5 совместно используют один и тот же блок кода, а 0 и 6 совместно используют другой блок кода:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            switch (new Date().getDay()) {<br>
            &nbsp;&nbsp;case 4:<br>&nbsp;&nbsp;case 5:<br>
            &nbsp;&nbsp;&nbsp; text = &quot;Скоро выходные&quot;;<br>
            &nbsp;&nbsp;&nbsp; break; <br>
            &nbsp;&nbsp;case 0:<br>
            &nbsp;&nbsp;case 6:<br>
            &nbsp;&nbsp;&nbsp; text = &quot;Это выходные&quot;;<br>&nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;default: <br>
            &nbsp;&nbsp;&nbsp;&nbsp;text = &quot;С нетерпением жду выходных&quot;;<br>
            }
        </div>
        <a target="_blank" href="../jstryit/tryjs_switch3.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Детали переключения</h2>
    <p>Если одному кейсу соответствует несколько вариантов, выбирается <strong>первый</strong> кейс.</p>
    <p>Если подходящих вариантов не найдено, программа переходит к метке <strong>default</strong>.</p>
    <p>Если метка default не найдена, программа переходит к оператору (операторам) <strong>после switch</strong>.</p>
    <hr>

    <h2>Строгое сравнение</h2>
    <p>Switch кейсы используют <strong>строгое</strong> сравнение (===).</p>
    <p>Значения должны быть одного типа, чтобы соответствовать друг другу.</p>
    <p>Строгое сравнение может быть true, только если операнды одного типа.</p>
    <p>В этом примере совпадения по x не будет:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = &quot;0&quot;;<br>switch (x) {<br>&nbsp;&nbsp;case 0:<br>&nbsp;&nbsp;&nbsp;&nbsp;text = &quot;Off&quot;;<br>
            &nbsp;&nbsp;&nbsp; break;<br>&nbsp;&nbsp;case 1:<br>&nbsp;&nbsp;&nbsp; text = &quot;On&quot;;<br>&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp; default:<br>&nbsp;&nbsp;&nbsp;
            text = &quot;Значение не найдено&quot;;<br>} </div>
        <a target="_blank" href="../jstryit/tryjs_switch5.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_switch1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Создайте оператор <code class="w3-codespan">switch</code>, который будет выводить "Hello", если <code class="w3-codespan">fruits</code> является "banana", и "Welcome", если <code class="w3-codespan">fruits</code> является "apple".</p>
            <div class="exerciseprecontainer">
<pre>
<input name="ex1" maxlength="6" style="width: 65px;">(fruits) {
 <input name="ex2" maxlength="4" style="width: 45px;"> "Banana":
    alert("Hello")
    break;
 <input name="ex3" maxlength="4" style="width: 45px;"> "Apple":
    alert("Welcome")
    break;
}
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_if_else.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_loop_for.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>