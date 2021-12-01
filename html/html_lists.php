<?php include '../include/head.php'; ?>
<title>HTML Списки. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Списки позволяют веб-разработчикам группировать набор связанных элементов в списках. Как создать списки на веб-странице? Какие бывают списки? Упорядоченные и неупорядоченные списки. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>
<article>
    <h1>HTML <span class="color_h1">Списки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_tables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_lists_unordered.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>HTML Списки</strong> позволяют веб-разработчикам группировать набор связанных элементов в списках.</p>
    <hr>

    <div class="w3-example">
        <h3>&nbsp;HTML Пример списка</h3>
        <div class="w3-padding w3-white">
            <div class="w3-row">
                <div class="w3col w3-half">
                    <h3>Неупорядоченный список:</h3>
                    <ul>
                        <li>Пункт</li>
                        <li>Пункт</li>
                        <li>Пункт</li>
                        <li>Пункт</li>
                    </ul>
                </div>
                <div class="w3col w3-half">
                    <h3>Упорядоченный список:</h3>
                    <ol>
                        <li>Первый пункт</li>
                        <li>Второй пункт</li>
                        <li>Третий пункт</li>
                        <li>Четвёртый пункт</li>
                    </ol>
                </div>
            </div>
        </div><a class="w3-btn w3-margin-top w3-margin-bottom" href="../htmltryit/tryit02f9.html?filename=tryhtml_lists_intro" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Неупорядоченный HTML Список</h2>
    <p>Неупорядоченный (ненумерованный) список начинается с тега <code class="w3-codespan"><a href="../tags/tag_ul.php">&lt;ul&gt;</a></code>. Каждый элемент списка начинается с тега <code class="w3-codespan"><a href="../tags/tag_li.php">&lt;li&gt;</a></code>.</p>
    <p>Элементы списка будут помечены маркерами (маленькие черные кружки) по умолчанию:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ul&gt;
        </div>
        <p><a class="w3-btn" href="../htmltryit/tryit56b2.html?filename=tryhtml_lists_unordered" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <h2>Неупорядоченный HTML Список - выберите маркер элемента списка</h2>
    <p>CSS свойство <code class="w3-codespan">list-style-type</code> используется для определения стиля маркера элемента списка:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Значение</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>disc</td>
            <td>Устанавливает маркер элемента списка как маленький чёрный кружок (по умолчанию)</td>
        </tr>
        <tr>
            <td>circle</td>
            <td>Устанавливает маркер элемента списка в виде маленького пустого кружка</td>
        </tr>
        <tr>
            <td>square</td>
            <td>Устанавливает маркер элемента списка в виде квадрата</td>
        </tr>
        <tr>
            <td>none</td>
            <td>Элементы списка не будут отмечены (маркеры отсутствуют)</td>
        </tr>
    </table>
    <div class="w3-example">
        <h3>Пример - Disc</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul style=&quot;list-style-type:disc;&quot;&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ul&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit678a.html?filename=tryhtml_lists_unordered_disc" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример - Circle</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ul&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitfcf7.html?filename=tryhtml_lists_unordered_circle" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример - Square</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul style=&quot;list-style-type:square;&quot;&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ul&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit0e3c.html?filename=tryhtml_lists_unordered_square" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример - None</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul style=&quot;list-style-type:none;&quot;&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ul&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit023a.html?filename=tryhtml_lists_unordered_none" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Упорядоченный HTML Список</h2>
    <p>Упорядоченный (нумерованный) список начинается с тега <code class="w3-codespan"><a href="../tags/tag_ol.php">&lt;ol&gt;</a></code>. Каждый элемент списка начинается с тега <code class="w3-codespan"><a href="../tags/tag_li.php">&lt;li&gt;</a></code>.</p>
    <p>Элементы списка будут помечены номерами по умолчанию:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ol&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit2865.html?filename=tryhtml_lists_ordered" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Упорядоченный HTML Список - Атрибут Type</h2>
    <p>Атрибут <code class="w3-codespan">type</code> тега <code class="w3-codespan"><a href="../tags/tag_ol.php">&lt;ol&gt;</a></code> определяет тип маркера элемента списка:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Тип</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>type=&quot;1&quot;</td>
            <td>Элементы списка будут пронумерованы цифрами (по умолчанию)</td>
        </tr>
        <tr>
            <td>type=&quot;A&quot;</td>
            <td>Элементы списка будут пронумерованы заглавными буквами</td>
        </tr>
        <tr>
            <td>type=&quot;a&quot;</td>
            <td>Элементы списка будут пронумерованы строчными буквами</td>
        </tr>
        <tr>
            <td>type=&quot;I&quot;</td>
            <td>Элементы списка будут пронумерованы большими римскими цифрами</td>
        </tr>
        <tr>
            <td>type=&quot;i&quot;</td>
            <td>Элементы списка будут пронумерованы маленькими римскими цифрами</td>
        </tr>
    </table>
    <div class="w3-example">
        <h3>Цифры:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol type=&quot;1&quot;&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ol&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit1046.html?filename=tryhtml_lists_ordered_numbers" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Заглавные буквы:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol type=&quot;A&quot;&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ol&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitbc1a.html?filename=tryhtml_lists_ordered_ucase" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Строчные буквы:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol type=&quot;a&quot;&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ol&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitbb71.html?filename=tryhtml_lists_ordered_lcase" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Большие римские цифры:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol type=&quot;I&quot;&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ol&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit2272.html?filename=tryhtml_lists_ordered_roman_ucase" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Маленькие римские цифры:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol type=&quot;i&quot;&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ol&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitb795.html?filename=tryhtml_lists_ordered_roman_lcase" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>HTML Списки описания</h2>
    <p>HTML также поддерживает списки описания.</p>
    <p>Список описания - это список терминов с описанием каждого термина.</p>
    <p>Тег <code class="w3-codespan"><a href="../tags/tag_dl.php">&lt;dl&gt;</a></code> определяет список описания, тег <code class="w3-codespan"><a href="../tags/tag_dt.php">&lt;dt&gt;</a></code> определяет термин (имя), а тег <code class="w3-codespan"><a href="../tags/tag_dd.php">&lt;dd&gt;</a></code> описывает каждый термин:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;dl&gt;<br>
            &nbsp; &lt;dt&gt;Coffee&lt;/dt&gt;<br>
            &nbsp; &lt;dd&gt;- black hot drink&lt;/dd&gt;<br>
            &nbsp; &lt;dt&gt;Milk&lt;/dt&gt;<br>
            &nbsp; &lt;dd&gt;- white cold drink&lt;/dd&gt;<br>
            &lt;/dl&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryita055.html?filename=tryhtml_lists_description" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Вложенные HTML-списки</h2>
    <p>Список может быть вложенным (списки внутри списков):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea<br>
            &nbsp; &nbsp; &lt;ul&gt;<br>
            &nbsp;&nbsp;&nbsp; &nbsp; &lt;li&gt;Black tea&lt;/li&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;Green tea&lt;/li&gt;<br>
            &nbsp;&nbsp;&nbsp; &lt;/ul&gt;<br>
            &nbsp; &lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ul&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit4479.html?filename=tryhtml_lists_nested" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Элементы списка могут содержать новый список и другие элементы HTML, такие как изображения и ссылки и т.д.</p>
    </div>
    <hr>
    <h2>Подсчет контрольного списка</h2>
    <p>По умолчанию упорядоченный список начинает отсчет с 1. Если вы хотите начать подсчет с указанного числа, вы можете использовать атрибут <code class="w3-codespan">start</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol start=&quot;50&quot;&gt;<br>
            &nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
            &lt;/ol&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit9fe3.html?filename=tryhtml_lists_start" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Горизонтальный список с помощью CSS</h2>
    <p>HTML-списки можно стилизовать различными способами с помощью CSS.</p>
    <p>Один из популярных способов - это стилизовать список по горизонтали для создания меню навигации:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>
            &lt;head&gt;<br>
            &lt;style&gt;<br>
            ul {<br>
            &nbsp; list-style-type: none;<br>
            &nbsp; margin: 0;<br>
            &nbsp; padding: 0;<br>
            &nbsp;&nbsp;overflow: hidden;<br>
            &nbsp;&nbsp;background-color: #333333;<br>
            }<br>
            <br>
            li {<br>
            &nbsp;&nbsp;float: left;<br>
            }<br>
            <br>
            li a {<br>
            &nbsp;&nbsp;display: block;<br>
            &nbsp;&nbsp;color: white;<br>
            &nbsp;&nbsp;text-align: center;<br>
            &nbsp;&nbsp;padding: 16px;<br>
            &nbsp; text-decoration: none;<br>
            }<br>
            <br>
            li a:hover {<br>
            &nbsp;&nbsp;background-color: #111111;<br>
            }<br>
            &lt;/style&gt;<br>
            &lt;/head&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;ul&gt;<br>
            &nbsp; &lt;li&gt;&lt;a href=&quot;#home&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;&lt;a href=&quot;#news&quot;&gt;News&lt;/a&gt;&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;&lt;a href=&quot;#contact&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;&lt;a href=&quot;#about&quot;&gt;About&lt;/a&gt;&lt;/li&gt;<br>
            &lt;/ul&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div><a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit0464.html?filename=tryhtml_lists_menu" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Совет:</strong> Вы можете узнать больше о CSS в нашем <a href="../css/index.php">CSS Учебнике</a>.</p>
    </div>
    <hr>
    <h2>Резюме раздела</h2>
    <ul>
        <li>Используйте HTML елемент <code class="w3-codespan">&lt;ul&gt;</code> для определения неупорядоченного списка</li>
        <li>Используйте CSS свойство <code class="w3-codespan">list-style-type</code> для определения маркера элемента списка</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;ol&gt;</code> для определения упорядоченного списка</li>
        <li>Используйте HTML атрибут <code class="w3-codespan">type</code> для определения типа нумерации</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;li&gt;</code> для определения элемента списка</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;dl&gt;</code> для определения списка описания</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;dt&gt;</code> для определения термина описания</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;dd&gt;</code> для описания термина в списке описания</li>
        <li>Списки могут быть вложены в списки</li>
        <li>Элементы списка могут содержать другие элементы HTML</li>
        <li>Используйте CSS свойство <code class="w3-codespan">float:left</code> или <code class="w3-codespan">display:inline</code> для горизонтального отображения списка</li>
    </ul>
    <hr>
    <h2>HTML Упражнения</h2>
    <form action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_lists1" autocomplete="off" id="w3-exerciseform" method="post" name="w3-exerciseform" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Добавьте элемент списка с текстом "Coffee" внутри элемента <code class="w3-codespan">&lt;ul&gt;</code>.</p>
            <div class="exerciseprecontainer">
                &lt;ul&gt;<input maxlength="4" name="ex1" spellcheck="false" style="width: 46px;">Coffee<input maxlength="5" name="ex2" spellcheck="false" style="width: 56px;">&lt;/ul&gt;
            </div><br>
            <button class="w3-btn w3-margin-bottom" type="submit">Оправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <h2>HTML Теги списка</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>
                <a href="../tags/tag_ul.php">&lt;ul&gt;</a>
            </td>
            <td>Определяет неупорядоченный (ненумерованный) список</td>
        </tr>
        <tr>
            <td>
                <a href="../tags/tag_ol.php">&lt;ol&gt;</a>
            </td>
            <td>Определяет упорядоченный (нумерованный) список</td>
        </tr>
        <tr>
            <td>
                <a href="../tags/tag_li.php">&lt;li&gt;</a>
            </td>
            <td>Определяет пункты списка</td>
        </tr>
        <tr>
            <td>
                <a href="../tags/tag_dl.php">&lt;dl&gt;</a>
            </td>
            <td>Определяет список описания</td>
        </tr>
        <tr>
            <td>
                <a href="../tags/tag_dt.php">&lt;dt&gt;</a>
            </td>
            <td>Определяет термин в списке описания</td>
        </tr>
        <tr>
            <td>
                <a href="../tags/tag_dd.php">&lt;dd&gt;</a>
            </td>
            <td>Описывает термин в списке описания</td>
        </tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для получения полного списка всех доступных тегов HTML, посетите наш <a href="../tags/index.php">HTML Справочник тегов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Для чего нужны HTML-списки?</em></li>
            <li><em>Какие бывают HTML-списки?</em></li>
            <li><em>Каким тегом определяется неупорядоченный HTML-список?</em></li>
            <li><em>Каким тегом определяется упорядоченный HTML-список?</em></li>
            <li><em>Каким тегом определяется каждый элемент в HTML-списке?</em></li>
            <li><em>Как по умолчанию обозначаются элементы неупорядоченного HTML-списка?</em></li>
            <li><em>Как по умолчанию обозначаются элементы упорядоченного HTML-списке?</em></li>
            <li><em>Что такое список описаний?</em></li>
            <li><em>Какой тег определяет список описаний?</em></li>
            <li><em>Какой тег определяет термин (имя) в списке описаний?</em></li>
            <li><em>Какой тег определяет описание каждого термина в списке описаний?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_tables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_lists_unordered.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
