<?php include '../include/head.php'; ?>

<title>HTML Изображения. <?php include '../include/title.php'; ?></title>
<meta name="description" content="HTML Изображения. Как вставить изображение на веб-странице? Синтаксис, атрибуты, размеры. <?php include '../include/description.php'; ?>">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Изображения</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_links.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_images_imagemap.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="sum">
        <h4>В этой теме:</h4>
        <ul>
            <li><a href="#c1"><em>HTML Синтаксис изображений. Тег <code class="w3-codespan">img</code>, атрибут <code class="w3-codespan">src</code></em></a></li>
            <li><a href="#c2"><em>Атрибут <code class="w3-codespan">alt</code></em></a></li>
            <li><a href="#c3"><em>Размер изображения - <code class="w3-codespan">width</code> и <code class="w3-codespan">height</code> - ширина и высота</em></a></li>
            <li><a href="#c4"><em>Ширина и высота или стиль?</em></a></li>
            <li><a href="#c5"><em>Изображения в другой папке</em></a></li>
            <li><a href="#c6"><em>Изображения на другом сервере</em></a></li>
            <li><a href="#c7"><em>Анимированные изображения</em></a></li>
            <li><a href="#c8"><em>Изображение как ссылка</em></a></li>
            <li><a href="#c9"><em>Плавающее изображение</em></a></li>
            <li><a href="#c10"><em>HTML Считыватели экрана (скринридеры)</em></a></li>
            <li><a href="#c11"><em>HTML Упражнения</em></a></li>
            <li><a href="#c12"><em>HTML теги изображений</em></a></li>
        </ul>
    </div>
    <hr>

    <p class="intro">Изображения могут улучшить дизайн и внешний вид веб-страницы.</p>
    <hr>

    <div class="w3-row" style="text-align:center">
        <div class="w3-col m4" style="background-image:url('../images/pic_trulli.jpg');background-size:cover;height:300px;">
        </div>
        <div class="w3-col m4" style="background-image:url('../images/img_girl.jpg');background-size:cover;height:300px;">
        </div>
        <div class="w3-col m4" style="background-image:url('../images/img_chania.jpg');background-size:cover;height:300px;">
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;../images/pic_trulli.jpg&quot;
            alt=&quot;Italian Trulli&quot;&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit5ec9.html?filename=tryhtml_images_trulli" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;../images/img_girl.jpg&quot;
            alt=&quot;Девушка в жакете&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitb432.html?filename=tryhtml_images_girl" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;../images/img_chania.jpg&quot;
            alt=&quot;Flowers in Chania&quot;&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit308e.html?filename=tryhtml_images_chania" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c1">HTML Синтаксис изображений</h2>
    <p>В HTML изображения определяются с помощью тега <code class="w3-codespan">&lt;img&gt;</code>.</p>
    <p>Тег <code class="w3-codespan">&lt;img&gt;</code> пустой, содержит только атрибуты и не имеет закрывающего тега.</p>
    <p>Атрибут <code class="w3-codespan">src</code> указывает URL (веб-адрес) изображения:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;<i>url</i>&quot;&gt;
        </div></div>
    <hr>

    <h2 id="c2">Атрибут alt</h2>
    <p>Атрибут <code class="w3-codespan">alt</code> предоставляет альтернативный текст для изображения, если пользователь по какой-либо причине не может его просмотреть: из-за медленного Интернет-соединения, ошибки в атрибуте src или если пользователь использует программу чтения с экрана (скринридер).</p>
    <p>Значение атрибута <code class="w3-codespan">alt</code> должно описывать изображение, т.е. то, что на нём изображено:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;img_chania.jpg&quot; alt=&quot;Flowers in Chania&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit0aa4.html?filename=tryhtml_images_alt_chania" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Если браузер не может найти изображение, он отображает значение атрибута <code class="w3-codespan">alt</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;wrongname.gif&quot; alt=&quot;Flowers in Chania&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit8e07.html?filename=tryhtml_images_wrongname" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Атрибут <code class="w3-codespan">alt</code> обязателен. Без него веб-страница не будет считаться валидной.</p>
    </div>
    <hr>

    <h2 id="c3">Размер изображения - Width и Height - Ширина и Высота</h2>
    <p>Вы можете использовать атрибут <code class="w3-codespan">style</code> для указания ширины и высоты изображения.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;img_girl.jpg&quot; alt=&quot;Girl in a jacket&quot; style=&quot;width:500px;height:600px;&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit975c.html?filename=tryhtml_images_size" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Кроме того, вы можете использовать атрибуты <code class="w3-codespan">width</code> и <code class="w3-codespan">height</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;img_girl.jpg&quot; alt=&quot;Girl in a jacket&quot; width=&quot;500&quot; height=&quot;600&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit6935.html?filename=tryhtml_images_attributes" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Атрибуты <code class="w3-codespan">width</code> и <code class="w3-codespan">height</code> всегда определяют ширину и высоту изображения в пикселях.</p>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Всегда указывайте ширину и высоту изображения. Если ширина и высота не указаны, то при загрузке изображения страница может мигать.</p>
    </div>
    <hr>

    <h2 id="c4">Ширина и высота или стиль?</h2>
    <p>Атрибуты <code class="w3-codespan">width</code>, <code class="w3-codespan">height</code> и <code class="w3-codespan">style</code> валидны в HTML.</p>
    <p>Однако мы рекомендуем использовать атрибут <code class="w3-codespan">style</code>. Это препятствует тому, чтобы таблицы стилей изменили размер изображений:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>img { <br>&nbsp;&nbsp;width: 100%; <br>}<br>
            &lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;img src=&quot;html5.gif&quot; alt=&quot;HTML5 Icon&quot; width=&quot;128&quot; height=&quot;128&quot;&gt;<br>&lt;img src=&quot;html5.gif&quot; alt=&quot;HTML5 Icon&quot; style=&quot;width:128px;height:128px;&quot;&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit19ca.html?filename=tryhtml_images_style" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c5">Изображения в другой папке</h2>
    <p>Если не указано, браузер ожидает найти изображение в той же папке, в которой находится и веб-страница.</p>
    <p>Однако изображения обычно хранятся в подпапках (других папках). Затем вы должны включить имя папки в атрибут <code class="w3-codespan">src</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;../images/html5.gif&quot;
            alt=&quot;HTML5 Icon&quot; style=&quot;width:128px;height:128px;&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitd52f.html?filename=tryhtml_images_folder" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Обычно папкам с изображениями дают названия <b>img</b> или <b>images</b>.</p>
    </div>
    <hr>

    <h2 id="c6">Изображения на другом сервере</h2>
    <p>Некоторые веб-сайты хранят свои изображения на специальных серверах изображений.</p>
    <p>На самом деле, вы можете получить доступ к изображениям с любого веб-адреса в мире, прописав полный путь к изображению:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;https://www.w3schools.com/images/w3schools_green.jpg&quot; alt=&quot;W3Schools.com&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitb021.html?filename=tryhtml_images_w3schools" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Вы можете прочитать больше о путях к файлам в главе <a href="html_filepaths.php">HTML Пути к файлам</a>.</p>
    </div>
    <hr>

    <h2 id="c7">Анимированные изображения</h2>
    <p>HTML позволяет использовать анимированные GIF:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;programming.gif&quot; alt=&quot;Computer Man&quot; style=&quot;width:48px;height:48px;&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryite923.html?filename=tryhtml_images_hackman" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c8">Изображение как ссылка</h2>
    <p>Чтобы использовать изображение в качестве ссылки, поставьте тег <code class="w3-codespan">&lt;img&gt;</code> внутри тега <code class="w3-codespan">&lt;a&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;index.html&quot;&gt;<br>&nbsp; &lt;img src=&quot;smiley.gif&quot; alt=&quot;HTML Учебник&quot;
            style=&quot;width:42px;height:42px;border:0;&quot;&gt;<br>&lt;/a&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit991b.html?filename=tryhtml_images_link" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> <code class="w3-codespan">border:0;</code> добавлено, чтобы IE9 (и более ранние версии) не отображал рамку вокруг изображения (когда изображение является ссылкой).</p>
    </div>
    <hr>

    <h2 id="c9">Плавающее изображение</h2>
    <p>Используйте CSS свойство <code class="w3-codespan">float</code> позволяющее изображению плавать вправо или влево от текста:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;&lt;img src=&quot;smiley.gif&quot; alt=&quot;Smiley face&quot;
            style=&quot;float:right;width:42px;height:42px;&quot;&gt;<br>
            Изображение будет плавать справа от текста.&lt;/p&gt;<br><br>&lt;p&gt;&lt;img src=&quot;smiley.gif&quot; alt=&quot;Smiley face&quot;
            style=&quot;float:left;width:42px;height:42px;&quot;&gt;<br>
            Изображение будет плавать слева от текста.&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitd67c.html?filename=tryhtml_images_float" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p><strong>Совет:</strong> Чтобы узнать больше о CSS Float, прочитайте наш <a href="../css/css_float.php">CSS Float Учебник</a>.<br></p>
    </div>

    <hr>
    <h2 id="c10">HTML Считыватели экрана (скринридеры)</h2>
    <p>Программа чтения с экрана - это программа, которая читает код HTML, преобразует текст и позволяет пользователю &quot;прослушивать&quot; контент. Программы чтения с экрана полезны для людей с нарушениями зрения или для обучения.</p>
    <hr>

    <h2>Резюме раздела</h2>
    <ul>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;img&gt;</code> для определения изображения</li>
        <li>Используйте HTML атрибут <code class="w3-codespan">src</code> для определения URL изображения</li>
        <li>Используйте HTML атрибут <code class="w3-codespan">alt</code> для определения альтернативного текста для изображения, если он не может быть отображен</li>
        <li>Используйте HTML атрибуты <code class="w3-codespan">width</code> и <code class="w3-codespan">height</code> для определения размера изображения</li>
        <li>Используйте CSS свойства <code class="w3-codespan">width</code> и <code class="w3-codespan">height</code> для определения размера изображения (альтернативно)</li>
        <li>Используйте CSS свойство <code class="w3-codespan">float</code>, чтобы позволить изображению плавать</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;map&gt;</code> для определения изображения-карты</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;area&gt;</code> для определения интерактивных областей на изображении-карте</li>
        <li>Используйте для HTML элемента <code class="w3-codespan">&lt;img&gt;</code> атрибут <code class="w3-codespan">usemap</code> указывающий на изображение-карту</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;picture&gt;</code> для отображения разных изображений для разных устройств</li>
    </ul>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Загрузка изображений занимает некоторое время. Большие изображения могут замедлить вашу страницу. Используйте изображения умеренно, при возможности максимально уменьшая их размеры.</p>
    </div>
    <hr>

    <h2 id="c11">HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_images1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте атрибуты HTML изображения, чтобы установить размер изображения 250 пикселей в ширину и 400 пикселей в высоту.</p>
            <div class="exerciseprecontainer">
                &lt;img src="scream.png" <input name="ex1" spellcheck="false" maxlength="5" style="width: 56px;">="250" <input name="ex2" spellcheck="false" maxlength="6" style="width: 66px;">="400"&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2 id="c12">HTML теги изображений</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../tags/tag_img.php">&lt;img&gt;</a></td>
            <td>определяет изображение</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_map.php">&lt;map&gt;</a></td>
            <td>Определяет изображение-карту</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_area.php">&lt;area&gt;</a></td>
            <td>Определяет кликабельную площадь внутри изображения-карты</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_picture.php">&lt;picture&gt;</a></td>
            <td>Определяет контейнер для нескольких ресурсов изображения</td>
        </tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для получения полного списка всех доступных HTML тегов, посетите наш <a href="../tags/index.php">HTML Справочник тегов</a>.</p>
    </div>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>С помощью какого тега определяются изображения на HTML-странице?</em></li>
            <li><em>С помощью какого атрибута указывается URL изображения?</em></li>
            <li><em>Каким необходимо воспользоваться тегом, чтобы вставить рисунок на веб-страницу?</em></li>
            <li><em>Какой атрибут предоставляет альтернативный текст изображению?</em></li>
            <li><em>URL-адрес файла изображения задают с помощью какого атрибута?</em></li>
            <li><em>Что отображает браузер, когда не может найти изображение на веб-странице?</em></li>
            <li><em>Какой атрибут изображения является обязательным согласно спецификации HTML5?</em></li>
            <li><em>Какой атрибут необходимо использовать для стилизации изображения?</em></li>
            <li><em>Какие атрибуты можно использовать для установки ширины и высоты изображения?</em></li>
            <li><em>Где рекомендуется сохранять изображения на сайте?</em></li>
            <li><em>Возможно ли сохранять изображения на другом сайте или сервере?</em></li>
            <li><em>Возможно ли использование на странице анимированных изображений?</em></li>
            <li><em>Какое расширение обычно имеют анимированные изображения?</em></li>
            <li><em>Возможно ли использование изображений в качестве ссылок?</em></li>
            <li><em>В середину какого тега нужно вставить изображение, чтобы оно стало ссылкой?</em></li>
            <li><em>Какое CSS-свойство позволяет изображению плавать справа или слева от текста?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_links.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_images_imagemap.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>


