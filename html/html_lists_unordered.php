<?php include '../include/head.php'; ?>
<title>HTML Неупорядоченные списки. <?php include '../include/title.php'; ?></title>
<meta name="description" content="HTML Неупорядоченные списки. Как создать неупорядоченный список на веб-странице? Неупорядоченный список начинается с тега ul. Каждый элемент списка начинается с тега li. Элементы списка по умолчанию будут обозначены маркерами (маленькие чорные кружки). <?php include '../include/description.php'; ?>">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Неупорядоченные списки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_lists.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_lists_ordered.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">HTML тег <code class="w3-codespan">&lt;ul&gt;</code> определяет неупорядоченный (маркированный) список.</p>
    <hr>

    <h2>Неупорядоченный HTML список</h2>
    <p>Неупорядоченный список начинается с тега <code class="w3-codespan">&lt;ul&gt;</code>. Каждый элемент списка начинается с тега <code class="w3-codespan">&lt;li&gt;</code>.</p>
    <p>Элементы списка по умолчанию будут обозначены маркерами (маленькие черные кружки):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul&gt;<br>
            &nbsp;
            &lt;li&gt;Кофе&lt;/li&gt;<br>&nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>
            &lt;/ul&gt;
        </div>
        <p><a class="w3-btn" href="../htmltryit/tryit56b2.html?filename=tryhtml_lists_unordered" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>

    <h2>Неупорядоченный HTML список - Выберите маркер элемента списка</h2>
    <p>CSS свойство <code class="w3-codespan">list-style-type</code> используется для определения стиля маркера элемента списка. Он может иметь одно из следующих значений:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Значение</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>disc</td>
            <td>Устанавливает маркер элемента списка на маркер (по умолчанию)</td>
        </tr>
        <tr>
            <td>circle</td>
            <td>Устанавливает маркер элемента списка в виде круга</td>
        </tr>
        <tr>
            <td>square</td>
            <td>Устанавливает маркер элемента списка в виде квадрата</td>
        </tr>
        <tr>
            <td>none</td>
            <td>Элементы списка не будут обозначены</td>
        </tr>
    </table>
    <div class="w3-example">
        <h3>Пример - Disc</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul style=&quot;list-style-type:disc;&quot;&gt;<br>&nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>&nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>&lt;/ul&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit678a.html?filename=tryhtml_lists_unordered_disc" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример - Circle</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br>&nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>&nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>&lt;/ul&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitfcf7.html?filename=tryhtml_lists_unordered_circle" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример - Square</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul style=&quot;list-style-type:square;&quot;&gt;<br>&nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>&nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>&lt;/ul&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit0e3c.html?filename=tryhtml_lists_unordered_square" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример - None</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul style=&quot;list-style-type:none;&quot;&gt;<br>&nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>&nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>&lt;/ul&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit023a.html?filename=tryhtml_lists_unordered_none" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Вложенные HTML списки</h2>
    <p>Списки могут быть вложенными (список внутри списку):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul&gt;<br>&nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>&nbsp; &lt;li&gt;Чай<br>
            &nbsp; &nbsp; &lt;ul&gt;<br>&nbsp;&nbsp;&nbsp; &nbsp;
            &lt;li&gt;Чорний чай&lt;/li&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;Зелений чай&lt;/li&gt;<br>
            &nbsp;&nbsp;&nbsp; &lt;/ul&gt;<br>&nbsp;
            &lt;/li&gt;<br>&nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>&lt;/ul&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit4479.html?filename=tryhtml_lists_nested" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Элемент списка (<code class="w3-codespan">&lt;li&gt;</code>) может содержать новый список и другие элементы HTML, такие как изображения и ссылки.</p>
    </div>
    <hr>

    <h2>Горизонтальный список с помощью CSS</h2>
    <p>Списки HTML можно стилизировать различными способами с помощью CSS.</p>
    <p>Одним из популярных способов является стилизация списка по горизонтали, создания меню навигации:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>ul {<br>&nbsp; list-style-type: none;<br>
            &nbsp; margin: 0;<br>&nbsp; padding: 0;<br>&nbsp;&nbsp;overflow: hidden;<br>&nbsp;&nbsp;background-color: #333333;<br>}<br><br>li {<br>&nbsp;&nbsp;float: left;<br>}<br><br>li a {<br>&nbsp;&nbsp;display: block;<br>&nbsp;&nbsp;color: white;<br>&nbsp;&nbsp;text-align: center;<br>&nbsp;&nbsp;padding: 16px;<br>&nbsp; text-decoration: none;<br>}<br>
            <br>li a:hover {<br>&nbsp;&nbsp;background-color: #111111;<br>}<br>
            &lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;ul&gt;<br>&nbsp; &lt;li&gt;&lt;a href=&quot;#home&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;<br>&nbsp; &lt;li&gt;&lt;a href=&quot;#news&quot;&gt;News&lt;/a&gt;&lt;/li&gt;<br>&nbsp; &lt;li&gt;&lt;a href=&quot;#contact&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;<br>&nbsp; &lt;li&gt;&lt;a href=&quot;#about&quot;&gt;About&lt;/a&gt;&lt;/li&gt;<br>
            &lt;/ul&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit0464.html?filename=tryhtml_lists_menu" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Вы можете узнать намного больше о CSS в <a href="/css/index.php">CSS Учебнике</a> на нашем сайте.</p>
    </div>
    <hr>

    <h2>Резюме</h2>
    <ul>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;ul&gt;</code>, чтобы определить неупорядоченный список</li>
        <li>Используйте CSS свойство <code class="w3-codespan">list-style-type</code>, чтобы определить маркер элемента списка</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;li&gt;</code>, чтобы определить элемент списка</li>
        <li>Списки можно влаживать</li>
        <li>Элементы списка могут содержать другие элементы HTML</li>
        <li>Используйте CSS свойство <code class="w3-codespan">float:left</code> для горизонтального отображения списка</li>
    </ul>
    <hr>

    <h2>HTML Теги списка</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../tags/tag_ul.php">&lt;ul&gt;</a></td>
            <td>Определяет неупорядоченный список</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_ol.php">&lt;ol&gt;</a></td>
            <td>Определяет упорядоченный список</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_li.php">&lt;li&gt;</a></td>
            <td>Определяет элемент списка</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_dl.php">&lt;dl&gt;</a></td>
            <td>Определяет список описаний</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_dt.php">&lt;dt&gt;</a></td>
            <td>Определяет термин в списке описаний</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_dd.php">&lt;dd&gt;</a></td>
            <td>Описывает термин в списке описаний</td>
        </tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для ознакомления с полным списком всех доступных HTML тегов посетите <a href="../tags/index.php">HTML Справочник тегов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_lists.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_lists_ordered.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
