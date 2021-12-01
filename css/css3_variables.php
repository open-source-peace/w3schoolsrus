<?php include '../include/head.php'; ?>

<title>CSS Переменные. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Переменные - Функция var(). Традиционный путь. Синтаксис функции var(). Как работает var(). Поддержка браузерами. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS Переменные - Функция var()</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_user_interface.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_variables_overriding.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Переменные</h2>
    <p>Функция <code class="w3-codespan">var()</code> используется для вставки значения <strong>CSS переменной</strong>.</p>
    <p><strong>CSS переменные</strong> имеют доступ к DOM, что означает, что вы можете создавать переменные с локальной или глобальной областью видимости, изменять переменные с помощью JavaScript и изменять переменные на основе медиа-запросов.</p>
    <p>Хороший способ использовать переменные CSS - это когда дело доходит до цветов вашего дизайна. Вместо того, чтобы копировать и вставлять одни и те же цвета снова и снова, вы можете поместить их в переменные.</p>
    <hr>

    <h2>Традиционный путь</h2>
    <p>В следующем примере показан традиционный способ определения некоторых цветов в таблице стилей (путем определения используемых цветов для каждого конкретного элемента):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            body { background-color: #1e90ff; }<br><br>h2 { border-bottom: 2px solid #1e90ff; }<br><br>.container {<br>&nbsp; color: #1e90ff;<br>&nbsp; background-color: #ffffff;<br>&nbsp; padding: 15px;<br>}<br><br>button {<br>&nbsp; background-color: #ffffff;<br>&nbsp; color: #1e90ff;<br>&nbsp; border: 1px solid #1e90ff;<br>&nbsp; padding: 5px;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_var_old.html">Попробуйте сами &raquo;</a>
        <br>
    </div>
    <hr>

    <h2>Синтаксис функции var()</h2>
    <p>Функция <code class="w3-codespan">var()</code> используется для вставки значения CSS переменной.</p>
    <p>Синтаксис функции <code class="w3-codespan">var()</code> следующий:</p>
    <div class="w3-code w3-border notranslate"><div>
            var(<em>имя, значение</em>)</div>
    </div>

    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Значение</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><em>имя</em></td>
            <td>Обязательно. Имя переменной (должно начинаться с двух тире)</td>
        </tr>
        <tr>
            <td><em>значение</em></td>
            <td>Не обязательно. Резервное значение (используется, если переменная не найдена)</td>
        </tr>
    </table>
    <p><b>Примечание:</b> Имя переменной должно начинаться с двух дефисов (-), и оно чувствительно к регистру!</p>
    <hr>

    <h2>Как работает var()</h2>
    <p>Прежде всего: переменные CSS могут иметь глобальную или локальную область видимости.</p>
    <p>Доступ к глобальным переменным можно получить / использовать во всем документе, в то время как локальные переменные можно использовать только внутри селектора, в котором он объявлен.</p>
    <p>Чтобы создать переменную с глобальной областью видимости, объявите её внутри селектора <code class="w3-codespan">:root</code>. Селектор <code class="w3-codespan"><a href="../cssref/sel_root.php">:root</a></code> соответствует корневому элементу документа.</p>
    <p>Чтобы создать переменную с локальной областью видимости, объявите её внутри селектора, который будет её использовать.</p>
    <p>Следующий пример аналогичен приведённому выше, но здесь мы используем функцию <code class="w3-codespan">var()</code>.</p>
    <p>Сначала мы объявляем две глобальные переменные (--blue и --white). Затем используем функцию <code class="w3-codespan">var()</code>, чтобы вставить значение переменных позже в таблицу стилей:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            :root {<br>&nbsp; --blue: #1e90ff;<br>&nbsp; --white: #ffffff; <br>}<br><br>
            body { background-color: var(--blue); }<br><br>h2 { border-bottom: 2px solid var(--blue); }<br>
            <br>.container {<br>&nbsp; color: var(--blue);<br>&nbsp; background-color: var(--white);<br>&nbsp; padding:
            15px;<br>}<br><br>button {<br>&nbsp; background-color: var(--white);<br>&nbsp;
            color: var(--blue);<br>&nbsp; border: 1px solid var(--blue);<br>&nbsp; padding: 5px;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_var.html">Попробуйте сами &raquo;</a>
        <br>
    </div>

    <p>Преимущества использования <code class="w3-codespan">var()</code>:</p>
    <ul>
        <li>упрощает чтение кода (более понятный)</li>
        <li>значительно упрощает изменение значений цвета</li>
    </ul>
    <p>Чтобы изменить сине-белый цвет на более мягкий синий и белый, вам просто нужно изменить значения двух переменных:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            :root {<br>&nbsp; --blue: #6495ed;<br>&nbsp; --white: #faf0e6; <br>}<br><br>
            body { background-color: var(--blue); }<br><br>h2 { border-bottom: 2px solid var(--blue); }<br>
            <br>.container {<br>&nbsp; color: var(--blue);<br>&nbsp; background-color: var(--white);<br>&nbsp; padding: 15px;<br>}<br><br>button {<br>&nbsp; background-color: var(--white);<br>&nbsp;
            color: var(--blue);<br>&nbsp; border: 1px solid var(--blue);<br>&nbsp;
            padding: 5px;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_var2.html">Попробуйте сами &raquo;</a>
        <br>
    </div>
    <hr>

    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, которая полностью поддерживает функцию <code class="w3-codespan">var()</code>.</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:25%;font-size:16px;text-align:left;">Функция</th>
                <th style="width:15%;" class="bsChrome" title="Chrome"></th>
                <th style="width:15%;" class="bsEdge" title="Internet Explorer / Edge"></th>
                <th style="width:15%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:15%;" class="bsSafari" title="Safari"></th>
                <th style="width:15%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td style="text-align:left;">var()</td>
                <td>49.0</td>
                <td>15.0</td>
                <td>31.0</td>
                <td>9.1</td>
                <td>36.0</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>CSS функция var()</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:28%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/func_var.php">var()</a></td>
            <td>Вставляет значение переменной CSS</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_user_interface.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_variables_overriding.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>