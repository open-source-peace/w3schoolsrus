<?php include '../include/head.php'; ?>
    <title>HTML Идентификатор - Id. <?php include '../include/title.php'; ?></title>
    <meta name="description" content="HTML Идентификатор - Id. Атрибут id определяет уникальный идентификатор элемента HTML. Атрибут id используется для указания на конкретную декларацию стиля в таблице стилей. Он также используется JavaScript для доступа и управления элементом из указанным id. <?php include '../include/description.php'; ?>">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML атрибут <span class='color_h1'>id</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_classes.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_iframe.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>HTML атрибут <code class='w3-codespan'>id</code> используется для указания уникального идентификатора HTML элемента.</p>
    <p class='intro'>В документе HTML не может быть больше одного элемента с одинаковым идентификатором (id).</p>
    <hr>

    <h2>Использование атрибута id</h2>
    <p>Атрибут <code class='w3-codespan'>id</code> определяет уникальный идентификатор элемента HTML. Значение атрибута <code class='w3-codespan'>id</code> должно быть уникальным в HTML документе.</p>
    <p>Атрибут <code class='w3-codespan'>id</code> используется для указания на конкретную декларацию стиля в таблице стилей. Он также используется JavaScript для доступа и управления элементом с указанным id.</p>
    <p>Синтаксис для id таков: напишите хэш-символ (#), за которым следует имя id. Затем определите свойства CSS в фигурных скобках {}.</p>
    <p>В следующем примере мы имеем элемент <code class='w3-codespan'>&lt;h1&gt;</code>, который указывает на имя id &quot;myHeader&quot;. Этот элемент <code class='w3-codespan'>&lt;h1&gt;</code> будет стилизован в соответствие к определению стиля <code class='w3-codespan'>#myHeader</code> в разделе head:</p>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>#myHeader {<br>&nbsp;
            background-color: lightblue;<br>&nbsp; color: black;<br>&nbsp; padding: 40px;<br>&nbsp;
            text-align: center;<br>} <br>&lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1 id=&quot;myHeader&quot;&gt;My Header&lt;/h1&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
        <a class="w3-btn w3-margin-bottom" style="margin-top:8px" href="../htmltryit/tryit89a7.html?filename=tryhtml_id_css" target='_blank'>Попробуйте сами &raquo;</a>
    </div>


    <div class='w3-panel w3-note'>
        <p><strong>Примечание:</strong> Имя id чувствительно к регистру!</p>
        <p><strong>Примечание:</strong> Имя id должно содержать по крайней мере один символ и не должно содержать пробелов (пробелы, вкладки и т.д.).</p>
    </div>
    <hr>

    <h2>Разница между Class и ID</h2>
    <p>Имя класса может использоваться несколькими элементами HTML, тогда как имя id должно использоваться только одним элементом HTML на странице:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;style&gt;<br>/* Стиль элемента с помощью id "myHeader" */<br>
            <strong>#myHeader</strong> {<br>&nbsp; background-color: lightblue;<br>&nbsp;
            color: black;<br>&nbsp;&nbsp;padding: 40px;<br>&nbsp;&nbsp;text-align: center;<br>}<br><br>/* Стиль всех элементов имеет имя класса "city" */<br><strong>.city</strong>{<br>&nbsp; background-color: tomato;<br>&nbsp;&nbsp;color: white;<br>&nbsp;&nbsp;padding: 10px;<br>} <br>&lt;/style&gt;<br>
            <br>&lt;!-- Элемент с уникальным id --&gt;<br>&lt;h1 id=&quot;myHeader&quot;&gt;My
            Cities&lt;/h1&gt;<br><br>&lt;!-- Несколько элементов с одинаковым классом --&gt;<br>
            &lt;h2 class=&quot;city&quot;&gt;Лондон&lt;/h2&gt;<br>&lt;p&gt;Лондон - это столица Англии.&lt;/p&gt;<br><br>
            &lt;h2 class=&quot;city&quot;&gt;Париж&lt;/h2&gt;<br>&lt;p&gt;Париж - это столица Франции.&lt;/p&gt;<br><br>
            &lt;h2 class=&quot;city&quot;&gt;Токио&lt;/h2&gt;<br>&lt;p&gt;Токио - это столица Японии.&lt;/p&gt;<br></div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitf300.html?filename=tryhtml_id_class" target='_blank'>
            Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Вы можете узнать намного больше про CSS в <a href="../css/index.php">CSS Учебнике</a> на нашем сайте W3Schools.</p>
    </div>
    <hr>

    <h2>HTML Закладки с ID и ссылками</h2>
    <p>Закладки HTML используются, чтобы позволить читателям переходить к определенным частям веб-страницы.</p>
    <p>Закладки могут быть полезными, если ваша страница очень длинная.</p>
    <p>Чтобы использовать закладку, сначала нужно создать её, а затем добавить в неё ссылку.</p>
    <p>Затем, когда кликнуть ссылку, страница прокрутится к месту с закладкой.</p>
    <h2>Пример</h2>
    <p>Сначала создайте закладку с атрибутом <code class='w3-codespan'>id</code>:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate htmlHigh'>
            &lt;h2 id=&quot;C4&quot;&gt;Chapter 4&lt;/h2&gt;</div>
    </div>
    <p>Затем добавьте ссылки на закладку (&quot;Перейти к разделу 4&quot;), с той же страницы:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;a href=&quot;#C4&quot;&gt;Перейти к разделу 4&lt;/a&gt;
        </div>
        <a target='_blank' href="../htmltryit/tryit3864.html?filename=tryhtml_links_bookmark" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>или добавьте ссылку на закладку (&quot;Перейти к разделу 4&quot;) с другой страницы:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate htmlHigh'>
            &lt;a href=&quot;html_demo.html#C4&quot;&gt;Перейти к разделу 4&lt;/a&gt;
        </div>
    </div>
    <hr>

    <h2>Использование атрибута id в JavaScript</h2>
    <p>Атрибут <code class='w3-codespan'>id</code> также может использоваться JavaScript для выполнения некоторых задач для этого конкретного элемента.</p>
    <p>JavaScript может получить доступ к элементу с определённым id с помощью метода <code class='w3-codespan'>getElementById()</code>:</p>

    <div class='w3-example'>
        <h3>Пример</h3>
        <p>Используйте атрибут <code class='w3-codespan'>id</code> для обработки текста с помощью JavaScript:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;script&gt;<br>function displayResult() {<br>&nbsp;&nbsp;document.getElementById(&quot;myHeader&quot;).innerHTML = &quot;Have a nice day!&quot;;<br>}<br>
            &lt;/script&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit16e1.html?filename=tryhtml_id_js" target='_blank'>
            Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p><strong>Примечание:</strong> Ознакомтесь более подробнее с JavaScript в разделе <a href="html_scripts.php">HTML JavaScript</a> или в <a href="https://www.w3schools.com/js/default.asp">JavaScript Учебнике</a> на нашем сайте W3Schools.</p>
    </div>
    <hr>

    <h2>Резюме</h2>
    <ul>
        <li>Атрибут <code class='w3-codespan'>id</code> используется для указания уникального id элемента HTML</li>
        <li>Значение атрибута <code class='w3-codespan'>id</code> должно быть уникальным в документе HTML</li>
        <li>Атрибут <code class='w3-codespan'>id</code> используется CSS и JavaScript для стилизации/выбора конкретного элемента</li>
        <li>Значение атрибута <code class='w3-codespan'>id</code> чувствительно к регистру</li>
        <li>Атрибут <code class='w3-codespan'>id</code> также используется для создания HTML-закладок</li>
        <li>JavaScript может получить доступ к элементу с определенным id с помощью метода <code class='w3-codespan'>getElementById()</code></li>
    </ul>
    <hr>

    <h2>HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_id1" method="post" target='_blank'>
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Добавьте корректный HTML атрибут, чтобы сделать элемент H1 красным.</p>
            <div class="exerciseprecontainer">
                &lt;!DOCTYPE html&gt;
                <br>
                &lt;html&gt;
                <br>
                &lt;head&gt;
                <br>
                &lt;style&gt;
                <br>
                #myheader {color:red;}
                <br>
                &lt;/style&gt;
                <br>
                &lt;/head&gt;
                <br>
                &lt;body&gt;
                <br><br>
                &lt;h1 <input name="ex1" spellcheck="false" maxlength="13" style="width: 135px;">&gt;My Home Page&lt;/h1&gt;
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
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Для чего необходим HTML-атрибут <code class='w3-codespan'>id</code>?</em></li>
            <li><em>Сколько HTML-элементов могут совместно использовать один и тот же <code class='w3-codespan'>id</code>?</em></li>
            <li><em>Какой символ используется для написания названия <code class='w3-codespan'>id</code> в CSS?</em></li>
            <li><em>Имеет ли значение регистр написания имен <code class='w3-codespan'>id</code>?</em></li>
            <li><em>Какая разница между <code class='w3-codespan'>class</code> и <code class='w3-codespan'>id</code>?</em></li>
            <li><em>Можно ли использовать <code class='w3-codespan'>id</code> для создания закладок на веб-странице?</em></li>
            <li><em>Может ли JavaScript использовать имена <code class='w3-codespan'>id</code>?</em></li>
        </ul>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_classes.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_iframe.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>