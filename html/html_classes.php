<?php include '../include/head.php'; ?>
    <title>HTML Классы. Атрибут class. <?php include '../include/title.php'; ?></title>
    <meta name="description" content="HTML Классы. Атрибут class. Применение. Синтаксис. Несколько классов. Атрибут class в JavaScript. <?php include '../include/description.php'; ?>">
    <style>
        .mylist {float:left;width:120px;}
        .mylist a:link,.mylist a:visited {text-decoration:none;}
        .mylist a:hover,.mylist a:active {text-decoration:underline;text-decoration-color: mediumblue;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML атрибут <span class="color_h1">class</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_blocks.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_id.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">HTML атрибут <code class='w3-codespan'>class</code> используется для определения класса для HTML элемента.</p>
    <p class="intro">Несколько элементов HTML могут совместно использовать один и тот же класс.</p>
    <hr>

    <h2>Использование атрибута class</h2>
    <p>Атрибут <code class='w3-codespan'>class</code> часто используется для указания на название класса в таблице стилей. Он также может использоваться JavaScript для доступа и управления элементами с указанным именем класса.</p>
    <p>В следующем примере мы имеем три элемента <code class='w3-codespan'>&lt;div&gt;</code> с атрибутом <code class='w3-codespan'>class</code> со значением &quot;city&quot;. Все три элемента <code class='w3-codespan'>&lt;div&gt;</code> будут одинаково стилизованные в соответствии с определением стиля <code class='w3-codespan'>.city</code> в разделе head:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>
            .city {<br>&nbsp;&nbsp;background-color: tomato;<br>&nbsp; color: white;<br>&nbsp;
            border: 2px solid black;<br>&nbsp; margin: 20px;<br>
            &nbsp; padding: 20px;<br>} <br>&lt;/style&gt;<br>
            &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div class="city"&gt;<br>
            &nbsp;
            &lt;h2&gt;Лондон&lt;/h2&gt;<br>&nbsp; &lt;p&gt;Лондон - это столица Англии.&lt;/p&gt;<br>
            &lt;/div&gt;<br><br>&lt;div class="city"&gt;<br>
            &nbsp;
            &lt;h2&gt;Париж&lt;/h2&gt;<br>&nbsp; &lt;p&gt;Париж - это столица Франции.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div class="city"&gt;<br>
            &nbsp;
            &lt;h2&gt;Токио&lt;/h2&gt;<br>&nbsp; &lt;p&gt;Токио - это столица Японии.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitdd49.html?filename=tryhtml_classes_capitals" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере мы имеем два элемента <code class='w3-codespan'>&lt;span&gt;</code> с атрибутом <code class='w3-codespan'>class</code> со значением &quot;note&quot;. Оба элемента <code class='w3-codespan'>&lt;span&gt;</code> будут одинаково стилизованы в соответствие определению <code class='w3-codespan'>.note</code> в разделе head:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>.note {<br>
            &nbsp; font-size: 120%;<br>&nbsp;&nbsp;color: red;<br>}<br>
            &lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;Мой &lt;span class="note"&gt;важный&lt;/span&gt; заголовок&lt;/h1&gt;<br>&lt;p&gt;Это какой-то &lt;span class="note"&gt;важный&lt;/span&gt; текст.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitd02a.html?filename=tryhtml_classes_span" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Совет:</strong> Атрибут <code class='w3-codespan'>class</code> может быть использован на <strong>любом</strong> HTML элементе.</p>
        <p><strong>Примечание:</strong> Название класса чуствительно к регистру!</p>
        <p><strong>Совет:</strong> Вы можете узнать намного больше про CSS в <a href="../css/index.php">CSS Учебнике</a> на нашем сайте W3Schools.</p>
    </div>
    <hr>

    <h2>Синтаксис для класса</h2>
    <p>Создайте класс; напишите символ точки (.), а потом название класса. Потом определите свойства CSS в фигурных скобках {}:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создайте класс с именем "city":</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>.city {<br>&nbsp;
            background-color: tomato;<br>&nbsp; color: white;<br>&nbsp; padding: 10px;<br>
            }<br>&lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h2 class=&quot;city&quot;&gt;Лондон&lt;/h2&gt;<br>
            &lt;p&gt;Лондон - це столиця Англії.&lt;/p&gt;<br><br>&lt;h2 class=&quot;city&quot;&gt;Париж&lt;/h2&gt;<br>
            &lt;p&gt;Париж - це столиця Франції.&lt;/p&gt;<br><br>&lt;h2 class=&quot;city&quot;&gt;Токіо&lt;/h2&gt;<br>
            &lt;p&gt;Токіо - це столиця Японії.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;<br></div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitd886.html?filename=tryhtml_classes_css" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Несколько классов</h2>
    <p>Элементы HTML могут принадлежать более чем одному классу.</p>
    <p>Чтобы определить несколько классов, отделите названия классов пробелом, например &lt;div class=&quot;city main&quot;&gt;. Элемент будет стилизован в соответствии со всеми указанными классами.</p>
    <p>В следующем примере первый элемент <code class='w3-codespan'>&lt;h2&gt;</code> принадлежит как классу <code class='w3-codespan'>city</code> так и классу <code class='w3-codespan'>main</code> и получает стили CSS с обеих классов:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h2 class=&quot;city main&quot;&gt;Лондон&lt;/h2&gt;<br>&lt;h2 class=&quot;city&quot;&gt;Париж&lt;/h2&gt;<br>&lt;h2
            class=&quot;city&quot;&gt;Токио&lt;/h2&gt;<br></div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryited4f.html?filename=tryhtml_classes_multiple" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Различные элементы могут разделять один и тот же класс</h2>
    <p>Различные элементы HTML могут указывать на одно и то же название класса.</p>
    <p>В следующем примере как <code class='w3-codespan'>&lt;h2&gt;</code> так и <code class='w3-codespan'>&lt;p&gt;</code> указывает на &quot;city&quot; класс и будет разделять одинаковый стиль:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h2 class=&quot;city&quot;&gt;Париж&lt;/h2&gt;<br>&lt;p
            class=&quot;city&quot;&gt;Париж - это столица Франции&lt;/p&gt;<br></div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit794f.html?filename=tryhtml_classes_tags" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Использование атрибута class в JavaScript</h2>
    <p>Имя класса также может использоваться JavaScript для выполнения определенных задач для определенных элементов.</p>
    <p>JavaScript может получить доступ к элементам с определенным именем класса с помощью метода <code class='w3-codespan'>getElementsByClassName()</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Кликните на кнопку, чтобы скрыть все элементы с названием класса &quot;city&quot;:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;script&gt;<br>function myFunction() {<br>&nbsp; var x = <strong>document.getElementsByClassName(&quot;city&quot;)</strong>;<br>&nbsp; for (var i = 0; i &lt; x.length;
            i++) {<br>&nbsp;&nbsp;&nbsp; x[i].style.display = &quot;none&quot;;<br>&nbsp; }<br>}<br>&lt;/script&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitcfa3.html?filename=tryhtml_classes_js" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p>Не волнуйтесь, если вы не понимаете код в приведенном выше примере.</p>
        <p>Вы узнаете больше о JavaScript в разделе <a href="html_scripts.php">HTML JavaScript</a> или вы можете изучить <a href="../js/index.php">JavaScript Учебник</a> на нашем сайте W3Schools.</p>
    </div>
    <hr>

    <h2>Резюме</h2>
    <ul>
        <li>HTML атрибут <code class='w3-codespan'>class</code> определяет одно или несколько имен классов для элемента</li>
        <li>Классы используются CSS и JavaScript для выбора и доступа к определенным элементам</li>
        <li>Атрибут <code class='w3-codespan'>class</code> может применяться к любому элементу HTML</li>
        <li>Имя класса чувствительно к регистру</li>
        <li>Различные элементы HTML могут указывать на одно и то же название класса</li>
        <li>JavaScript может получить доступ к элементам с определенным именем класса с помощью метода <code class='w3-codespan'>getElementsByClassName()</code></li>
    </ul>
    <hr>

    <h2>HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_classes1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Создайте селектор класса с именем "special".</p>
            <p>Добавьте свойство цвета со значением "blue" внутри класса "special".</p>
            <div class="exerciseprecontainer">
                &lt;!DOCTYPE html&gt;
                <br>
                &lt;html&gt;
                <br>
                &lt;head&gt;
                <br>
                &lt;style&gt;
                <br>
                <input name="ex1" spellcheck="false" maxlength="8" style="width: 86px;"> <input name="ex2" spellcheck="false" maxlength="1" style="width: 16px;">
                <br>
                &nbsp;&nbsp;<input name="ex3" spellcheck="false" maxlength="10" style="width: 106px;">;
                <br>
                <input name="ex4" spellcheck="false" maxlength="1" style="width: 16px;">
                <br>
                &lt;/style&gt;
                <br>
                &lt;/head&gt;
                <br>
                &lt;body&gt;
                <br><br>
                &lt;p class="special"&gt;Мой параграф&lt;/p&gt;
                <br><br>
                &lt;/body&gt;
                <br>
                &lt;/html&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class='quest'>
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Для чего необходим HTML-атрибут <code class='w3-codespan'>class</code>?</em></li>
            <li><em>Сколько HTML-элементов могут совместно использовать один и тот же класс?</em></li>
            <li><em>Имеет ли значение регистр для написания названия класса?</em></li>
            <li><em>С помощью какого символа указывается название класса в CSS?</em></li>
            <li><em>Могут ли HTML-элементы принадлежать больше чем одному классу?</em></li>
            <li><em>Может ли JavaScript использовать имена классов?</em></li>
        </ul>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_blocks.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_id.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>