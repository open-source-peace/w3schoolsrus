<?php include '../include/head.php'; ?>
    <title>HTML JavaScript. <?php include '../include/title.php'; ?></title>
    <meta name="description" content="HTML JavaScript. Использование скриптов на сайте. Зачем нужен JavaScript? <?php include '../include/description.php'; ?>">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class='color_h1'>JavaScript</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_iframe.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_filepaths.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'><strong>JavaScript</strong> делает HTML-страницы более динамичными и интерактивными.</p>
    <hr>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-padding w3-white notranslate'>
            <h2>Мой первый JavaScript</h2>
            <button type='button' onclick="document.getElementById('demo').innerHTML=Date()">
                Кликните меня, чтобы отобразить дату и время</button>
            <p id='demo'></p>
        </div>
        <br>
        <a target='_blank' href='../htmltryit/tryitde93.html?filename=tryhtml_scripts_intro' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML тег &lt;script&gt;</h2>
    <p>HTML тег <code class='w3-codespan'>&lt;script&gt;</code> используется для определения клиентского скрипта (JavaScript).</p>
    <p>Элемент <code class='w3-codespan'>&lt;script&gt;</code> либо содержит операторы скрипта, либо указывает на внешний файл скрипта через атрибут <code class='w3-codepan'>src</code>.</p>
    <p>Обычно JavaScript используется для обработки изображений, проверки формы и динамического изменения содержимого.</p>
    <p>Чтобы выбрать элемент HTML, JavaScript чаще всего использует метод <code class='w3-codespan'>document.getElementById()</code>.</p>
    <p>В этом примере JavaScript написано &quot;Hello JavaScript!&quot; в HTML элементе с id=&quot;demo&quot;:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;script&gt;<br>
            document.getElementById(&quot;demo&quot;).innerHTML = &quot;Hello JavaScript!&quot;;<br>
            &lt;/script&gt;</div>
        <a target='_blank' href="../htmltryit/tryita3c7.html?filename=tryhtml_script" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Вы можете узнать больше о JavaScript в <a href="../js/index.php">JavaScript Учебнике</a> на нашем сайте W3Schools.</p>
    </div>
    <hr>

    <h2>Почувствуйте JavaScript</h2>
    <p>Вот несколько примеров того, что может делать JavaScript:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <p>JavaScript может изменить содержание:</p>
        <div class='w3-code notranslate jsHigh'>
            document.getElementById(&quot;demo&quot;).innerHTML = &quot;Hello JavaScript!&quot;;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit974c.html?filename=tryhtml_script_html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-example'>
        <h3>Пример</h3>
        <p>JavaScript может изменить стили:</p>
        <div class='w3-code notranslate jsHigh'>
            document.getElementById(&quot;demo&quot;).style.fontSize = &quot;25px&quot;;<br>document.getElementById(&quot;demo&quot;).style.color = &quot;red&quot;;<br>document.getElementById(&quot;demo&quot;).style.backgroundColor = &quot;yellow&quot;;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit619f.html?filename=tryhtml_script_styles" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-example'>
        <h3>Пример</h3>
        <p>JavaScript может изменить атрибуты:</p>
        <div class='w3-code notranslate jsHigh'>
            document.getElementById(&quot;image&quot;).src = &quot;picture.gif&quot;;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitccc1.html?filename=tryhtml_script_attribute" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    
    <h2>HTML тег &lt;noscript&gt;</h2>
    <p>HTML тег <code class='w3-codespan'>&lt;noscript&gt;</code> определяет альтернативный контент, который будет отображаться для пользователей, которые отключили скрипты в своем браузере или имеют браузер, который не поддерживает скрипты:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;script&gt;<br>
            document.getElementById(&quot;demo&quot;).innerHTML = &quot;Hello JavaScript!&quot;;<br>
            &lt;/script&gt;<br>&lt;noscript&gt;К сожалению, ваш браузер не поддерживает JavaScript!&lt;/noscript&gt;</div>
        <a target='_blank' href="../htmltryit/tryit80c0.html?filename=tryhtml_noscript" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_scripts1" method="post" target='_blank'>
        <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
        <div class='exercisewindow'>
            <h2>Упражнение:</h2>
            <p>Используйте JavaScript, чтобы изменить HTML-содержимое элемента <code class='w3-codespan'>&lt;p></code> "Hello World!".</p>
            <div class='exerciseprecontainer'>
                &lt;body&gt;
                <br><br>
                &lt;p id="demo"&gt;Hi.&lt;/p&gt;
                <br><br>
                &lt;script&gt;
                <br>
                document.<input name="ex1" spellcheck="false" maxlength="14" style="width: 146px;">("demo").innerHTML = "Hello World!";
                <br>
                &lt;/script&gt;
                <br><br>
                &lt;/body&gt;
            </div>
            <br>
            <button type="submit" class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2>HTML Теги скрипта</h2>
    <table class='w3-table-all notranslate'>
        <tr>
            <th>Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href='../tags/tag_script.php'>&lt;script&gt;</a></td>
            <td>Определяет клиентский скрипт (на стороне клиента)</td>
        </tr>
        <tr>
            <td><a href='../tags/tag_noscript.php'>&lt;noscript&gt;</a></td>
            <td>Определяет альтернативный контент для пользователей, которые не поддерживают клиентские скрипты.</td>
        </tr>
    </table>
    <div class='w3-note w3-panel'>
        <p>Чтобы увидеть полный список всех доступных HTML-тегов, посетите <a href='../tags/index.php'>HTML Справочник тегов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_iframe.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_filepaths.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>