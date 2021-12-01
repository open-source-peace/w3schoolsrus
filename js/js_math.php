<?php include '../include/head.php'; ?>

<title>JavaScript Математические методы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Математические методы. Свойства (константы). Выполнение математических задач с помощью javascript. Округление числа до целого числа. Методы математических объектов. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Объект Math (математические)</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_date_methods_set.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_random.php">Next &#10095;</a>
    </div>
    <div class="w3-info">
        <p class="intro"><strong>JavaScript объект Math</strong> позволяет выполнять <strong>математические задачи с числами</strong>.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.PI;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// вернёт 3.141592653589793
        </div>
        <a target="_blank" href="../jstryit/tryjs_math_pi.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Объект Math</h2>
    <p>В отличие от других объектов, объект Math не имеет конструктора.</p>
    <p>Объект Math статичен.</p>
    <p>Все методы и свойства можно использовать без предварительного создания объекта Math.</p>
    <hr>

    <h2>Математические свойства (константы)</h2>
    <p>Синтаксис любого свойства Math: <code class="w3-codespan">Math.<i>property</i></code>.</p>
    <p>JavaScript предоставляет 8 математических констант, к которым можно получить доступ как к свойствам Math:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает число Эйлера<br>
            Math.PI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает PI<br>
            Math.SQRT2&nbsp;&nbsp;&nbsp;&nbsp;// возвращает квадратный корень из 2<br>
            Math.SQRT1_2&nbsp;&nbsp;// возвращает квадратный корень из 1/2<br>
            Math.LN2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает натуральный логарифм 2<br>
            Math.LN10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает натуральный логарифм 10<br>
            Math.LOG2E&nbsp;&nbsp;&nbsp;&nbsp;// возвращает логарифм по основанию 2 числа E<br>
            Math.LOG10E&nbsp;&nbsp;&nbsp;// возвращает десятичный логарифм числа E
        </div>
        <a target="_blank" href="../jstryit/tryjs_math_constants.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Математические методы</h2>
    <p>Синтаксис любых методов Math: <code class="w3-codespan">Math.<i>method</i>.(<i>number</i>)</code></p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Число в целое число</h2>
    <p>Есть 4 распространенных метода округления числа до целого:</p>
    <table class="ws-table-all">
        <tr><tr><td>Math.round(x)</td><td>Возвращает x, округленное до ближайшего целого числа</td></tr>
        <tr><tr><td>Math.ceil(x)</td><td>Возвращает x, округленное в большую сторону до ближайшего целого числа</td></tr>
        <tr><tr><td>Math.floor(x)</td><td>Возвращает x, округленное в меньшую сторону до ближайшего целого числа</td></tr>
        <tr><tr><td>Math.trunc(x)</td><td>Возвращает целую часть x (<a href="js_es6.php">новое в ES6</a>)</td></tr>
    </table>
    <hr>
    <h2>Math.round()</h2>
    <p><code class="w3-codespan">Math.round(x)</code> возвращает ближайшее целое число:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.round(4.9);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 5<br>
            Math.round(4.7);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 5<br>
            Math.round(4.4);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 4<br>
            Math.round(4.2);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 4<br>
            Math.round(-4.2);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает -4<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_round.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Math.ceil()</h2>
    <p><code class="w3-codespan">Math.ceil(x)</code> возвращает значение x, округленное <strong>в большую сторону</strong> до ближайшего целого числа:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.ceil(4.9);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 5<br>
            Math.ceil(4.7);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 5<br>
            Math.ceil(4.4);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 5<br>
            Math.ceil(4.2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 5<br>
            Math.ceil(-4.2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает -4<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_ceil.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Math.floor()</h2>
    <p><code class="w3-codespan">Math.floor(x)</code> возвращает значение x, округленное <strong>вниз</strong> до ближайшего целого числа:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.floor(4.9);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 4<br>
            Math.floor(4.7);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 4<br>
            Math.floor(4.4);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 4<br>
            Math.floor(4.2);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 4<br>
            Math.floor(-4.2);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает -5<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_floor.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Math.trunc()</h2>
    <p><code class="w3-codespan">Math.trunc(x)</code> возвращает целую часть x:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.trunc(4.9);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 4<br>
            Math.trunc(4.7);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 4<br>
            Math.trunc(4.4);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 4<br>
            Math.trunc(4.2);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 4<br>
            Math.trunc(-4.2);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает -4<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_trunc.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Math.sign()</h2>
    <p><code class="w3-codespan">Math.sign(x)</code> возвращает, если x отрицательный, нулевой или положительный:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.sign(-4);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает -1<br>
            Math.sign(0);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 0<br>
            Math.sign(4);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 1<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_sign.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note">
        <p>Math.trunc() и Math.sign() были добавлены в <a href="js_es6.php">JavaScript 2015 - ES6</a>.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Math.pow()</h2>
    <p><code class="w3-codespan">Math.pow(x, y)</code> возвращает значение x в степени y:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.pow(8, 2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 64
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_pow.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Math.sqrt()</h2>
    <p><code class="w3-codespan">Math.sqrt(x)</code> возвращает квадратный корень из x:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.sqrt(64);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 8
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_sqrt.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Math.abs()</h2>
    <p><code class="w3-codespan">Math.abs(x)</code> возвращает абсолютное (положительное) значение x:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.abs(-4.7);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 4.7
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_abs.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Math.sin()</h2>
    <p><code class="w3-codespan">Math.sin(x)</code> возвращает синус (значение от -1 до 1) угла x (в радианах).</p>
    <p>Если вы хотите использовать градусы вместо радианов, вам нужно преобразовать градусы в радианы:</p>
    <p>Угол в радианах = Угол в градусах x PI / 180.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.sin(90 * Math.PI / 180);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 1 (синус 90 градусов)
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_sin.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Math.cos()</h2>
    <p><code class="w3-codespan">Math.cos(x)</code> возвращает косинус (значение от -1 до 1) угла x (в радианах).</p>
    <p>Если вы хотите использовать градусы вместо радианов, вам нужно преобразовать градусы в радианы:</p>
    <p>Угол в радианах = Угол в градусах x PI / 180.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.cos(0 * Math.PI / 180);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 1 (cos 0 градусов)
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_cos.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Math.min() and Math.max()</h2>
    <p><code class="w3-codespan">Math.min()</code> и <code class="w3-codespan">Math.max()</code> может использоваться для поиска наименьшего или наибольшего значения в списке аргументов:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.min(0, 150, 30, 20, -8, -200);&nbsp;&nbsp;// возвращает -200
        </div>
        <a target="_blank" href="../jstryit/tryjs_math_min.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.max(0, 150, 30, 20, -8, -200);&nbsp;&nbsp;// возвращает 150
        </div>
        <a target="_blank" href="../jstryit/tryjs_math_max.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Math.random()</h2>
    <p><code class="w3-codespan">Math.random()</code> возвращает случайное число от 0 (включительно) до 1 (исключая):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.random();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает случайное число
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_random.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Вы узнаете больше о <code class="w3-codespan">Math.random()</code> в следующей главе этого учебника на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Метод Math.log()</h2>
    <p><code class="w3-codespan">Math.log(x)</code> возвращает натуральный логарифм x:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.log(1);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 0<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_log.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Натуральный логарифм возвращает время, необходимое для достижения определенного уровня роста.</p>
    <p>Math.E и Math.log() - близнецы.</p>
    <p>Сколько раз нам нужно умножить Math.E, чтобы получить 10?</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.log(10);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 2.302585092994046<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_log_ten_times.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод Math.log2()</h2>
    <p><code class="w3-codespan">Math.log2(x)</code> возвращает логарифм x по основанию 2.</p>
    <p>Сколько раз нужно умножить 2, чтобы получить 8?</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.log2(8);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 3<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_log2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод Math.log10()</h2>
    <p><code class="w3-codespan">Math.log10(x)</code> возвращает десятичный логарифм x.</p>
    <p>Сколько раз нужно умножить 10, чтобы получить 1000?</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.log10(1000);&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 3<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_log10.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Методы математических объектов</h2>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:20%">Метод</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_abs.php">abs(x)</a></td>
            <td>Возвращает абсолютное значение x</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_acos.php">acos(x)</a></td>
            <td>Возвращает арккосинус x в радианах</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_acosh.php">acosh(x)</a></td>
            <td>Возвращает гиперболический арккосинус x</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_asin.php">asin(x)</a></td>
            <td>Возвращает арксинус x в радианах</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_asinh.php">asinh(x)</a></td>
            <td>Возвращает гиперболический арксинус x</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_atan.php">atan(x)</a></td>
            <td>Возвращает арктангенс x как числовое значение в диапазоне от -PI / 2 до PI / 2 радиан</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_atan2.php">atan2(y, x)</a></td>
            <td>Возвращает арктангенс частного своих аргументов</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_atanh.php">atanh(x)</a></td>
            <td>Возвращает гиперболический арктангенс x</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_cbrt.php">cbrt(x)</a></td>
            <td>Возвращает кубический корень из x</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_ceil.php">ceil(x)</a></td>
            <td>Возвращает x, округленный в большую сторону до ближайшего целого числа</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_cos.php">cos(x)</a></td>
            <td>Возвращает косинус x (x в радианах)</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_cosh.php">cosh(x)</a></td>
            <td>Возвращает гиперболический косинус x</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_exp.php">exp(x)</a></td>
            <td>Возвращает значение E<sup>x</sup></td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_floor.php">floor(x)</a></td>
            <td>Возвращает x, округленное в меньшую сторону до ближайшего целого числа</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_log.php">log(x)</a></td>
            <td>Возвращает натуральный логарифм (основание E) числа x</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_max.php">max(x, y, z, ..., n)</a></td>
            <td>Возвращает число с наибольшим значением</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_min.php">min(x, y, z, ..., n)</a></td>
            <td>Возвращает число с наименьшим значением</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_pow.php">pow(x, y)</a></td>
            <td>Возвращает значение x в степени y</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_random.php">random()</a></td>
            <td>Возвращает случайное число от 0 до 1</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_round.php">round(x)</a></td>
            <td>Округляет x до ближайшего целого числа</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_sign.php">sign(x)</a></td>
            <td>Возвращает, если x отрицательное, нулевое или положительное значение (-1, 0, 1)</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_sin.php">sin(x)</a></td>
            <td>Возвращает синус x (x в радианах)</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_sinh.php">sinh(x)</a></td>
            <td>Возвращает гиперболический синус x</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_sqrt.php">sqrt(x)</a></td>
            <td>Возвращает квадратный корень из x</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_tan.php">tan(x)</a></td>
            <td>Возвращает тангенс угла</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_tanh.php">tanh(x)</a></td>
            <td>Возвращает гиперболический тангенс числа</td>
        </tr>
        <tr>
            <td><a href="../jsref/jsref_trunc.php">trunc(x)</a></td>
            <td>Возвращает целую часть числа (x)</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Полный справочник математических объектов</h2>
    <p>Для получения полной справки перейдите на <a href="../jsref/jsref_obj_math.php">Полный справочник математических объектов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит описания и примеры всех свойств и методов Math.</p>
    <hr>

    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_math1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте правильный математический метод для создания случайного числа.</p>
            <div class="exerciseprecontainer">
<pre>
let r = <input name="ex1" maxlength="13" style="width: 134px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_date_methods_set.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_random.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>