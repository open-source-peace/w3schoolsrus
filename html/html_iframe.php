<?php include '../include/head.php'; ?>
    <title>HTML Iframe. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='HTML Iframe. Фреймы. Встроенный фрейм HTML используется для отображения веб-сраницы на веб-странице. Синтаксис и стилизация. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class='color_h1'>Iframes - Фреймы</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_id.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_scripts.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>Встроенный фрейм HTML используется для отображения веб-страницы на веб-странице.</p>
    <hr>
    <div style="width:100%;height:350px;overflow:hidden;">
        <iframe src="index.php" title="W3Schools HTML Учебник" style="height: 350px;width: 100%"></iframe>
    </div>
    <p>Frame - (в пер. с англ.) - рамка, кадр, каркас.</p>
    <hr>

    <h2>HTML Iframe Синтаксис фрейма</h2>
    <p>HTML тег <code class='w3-codespan'>&lt;iframe&gt;</code> определяет встроенный фрейм.</p>
    <p>Встроенный фрейм используется для встраивания другого документа в текущий документ HTML.</p>
    <div class='w3-example'>
        <h3>Синтаксис</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;iframe src=&quot;<i>url</i>&quot; title=&quot;<em>описание</em>&quot;&gt;
        </div></div>
    <p><strong>Совет:</strong> Рекомендуется всегда включать атрибут <code class='w3-codespan'>title</code> для <code class='w3-codespan'>&lt;iframe&gt;</code>. Это используется программой считывания с экрана для считывания содержания встроенного фрейма.</p>
    <hr>

    <h2>Iframe - Установить высоту и ширину фрейма</h2>
    <p>Используйте атрибуты <code class='w3-codespan'>height</code> и <code class='w3-codespan'>width</code>, чтобы указать размер iframe.</p>
    <p>Высота и ширина по умолчанию указываются в пикселях:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;iframe src=&quot;demo_iframe.html&quot; height=&quot;200&quot; width=&quot;300&quot;
            title=&quot;Iframe Пример&quot;&gt;&lt;/iframe&gt;</div>
        <a class='w3-btn w3-margin-bottom' href="../htmltryit/tryitc9a6.html?filename=tryhtml_iframe_height_width" target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>Или вы можете добавить атрибут <code class='w3-codespan'>style</code> и использовать CSS свойства <code class='w3-codespan'>height</code> и <code class='w3-codespan'>width</code>:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;iframe src=&quot;demo_iframe.html&quot; style=&quot;height:200px;width:300px;&quot;
            title=&quot;Iframe Пример&quot;&gt;&lt;/iframe&gt;</div>
        <a class='w3-btn w3-margin-bottom' href="../htmltryit/tryit4a90.html?filename=tryhtml_iframe_height_width_css" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Iframe - Удалить границу фрейма</h2>
    <p>По умолчанию iframe имеет границу вокруг себя.</p>
    <p>Чтобы удалить границу, добавьте атрибут <code class='w3-codespan'>style</code> и используйте свойство CSS <code class='w3-codespan'>border</code>:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;iframe src=&quot;demo_iframe.html&quot; style=&quot;border:none;&quot;
            title=&quot;Iframe Пример&quot;&gt;&lt;/iframe&gt;</div>
        <a class='w3-btn w3-margin-bottom' href="../htmltryit/tryitcfb7.html?filename=tryhtml_iframe_frameborder" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>С помощью CSS вы можете изменить размер, стиль и цвет границы iframe:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;iframe src=&quot;demo_iframe.html&quot; style=&quot;border:2px solid red;&quot;
            title=&quot;Iframe Пример&quot;&gt;&lt;/iframe&gt;</div>
        <a class='w3-btn w3-margin-bottom' href="../htmltryit/tryitc3cc.html?filename=tryhtml_iframe_border2" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Iframe - Цель для ссылки</h2>
    <p>В качестве фрейма для ссылки может использоваться фрейм.</p>
    <p>Атрибут <code class='w3-codespan'>target</code> ссылки должен ссылаться на атрибут <code class='w3-codespan'>name</code> фрейма:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;iframe src=&quot;demo_iframe.html&quot; name=&quot;iframe_a&quot; title=&quot;Iframe
            Пример&quot;&gt;&lt;/iframe&gt;<br><br>
            &lt;p&gt;&lt;a href=&quot;https://www.w3schools.com&quot; target=&quot;iframe_a&quot;&gt;W3Schools.com&lt;/a&gt;&lt;/p&gt;
        </div>
        <a class='w3-btn w3-margin-bottom' href="../htmltryit/tryit8818.html?filename=tryhtml_iframe_target" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Резюме</h2>
    <ul>
        <li>HTML тег <code class='w3-codespan'>&lt;iframe&gt;</code> определяет встроенный фрейм</li>
        <li>Атрибут <code class='w3-codespan'>src</code> определяет URL-адрес страницы, которую необходимо вставить</li>
        <li>Всегда включайте атрибут <code class='w3-codespan'>title</code> (для считывателей экрана - скринридеров)</li>
        <li>Атрибуты <code class='w3-codespan'>height</code> и <code class='w3-codespan'>width</code> определяют размеры фрейма</li>
        <li>Используйте значение <code class='w3-codespan'>border:none;</code> чтобы удалить границу вокруг iframe</li>
    </ul>
    <hr>
    <h2>HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_iframe1" method="post" target='_blank'>
        <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
        <div class='exercisewindow'>
            <h2>Упражнение:</h2>
            <p>Создайте iframe с URL-адресом, который переходит на https://www.w3schools.com.</p>
            <div class='exerciseprecontainer'>
                &lt;iframe <input name="ex1" spellcheck="false" maxlength="3" style="width: 39px;">="https://www.w3schools.com"&gt;&lt;/iframe&gt;
            </div>
            <br>
            <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2>HTML iframe тег</h2>
    <table class='w3-table-all notranslate'>
        <tr>
            <th>Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href='../tags/tag_iframe.php'>&lt;iframe&gt;</a></td>
            <td>Определяет встроенный фрейм</td>
        </tr>
    </table>
    <div class='w3-note w3-panel'>
        <p>Для ознакомления с полным списком всех доступных HTML тегов посетите <a href='../tags/index.php'>HTML Справочник тегов</a> на нашем сайте W3Schools.</p>
    </div>
    <hr>
    <div class='quest'>
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Для чего нужен встроенный фрейм на веб-страницах?</em></li>
            <li><em>Какой тег определяет встроенный фрейм?</em></li>
            <li><em>Какой атрибут рекомендуется добавлять к тегу <code class='w3-codespan'>iframe</code>?</em></li>
            <li><em>С помощью каких атрибутов устанавливаются высота и ширина фрейма?</em></li>
            <li><em>Какие CSS-свойства используются в атрибуте <code class='w3-codespan'>style</code> для указания высоты и ширины фрейма?</em></li>
            <li><em>Какое CSS-свойство используется для удаления границы вокруг фрейма?</em></li>
        </ul>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_id.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_scripts.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>