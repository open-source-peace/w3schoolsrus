<?php include '../include/head.php'; ?>
<title>HTML Таблицы. <?php include '../include/title.php'; ?></title>
<meta name="description" content="HTML Таблицы. Как создать таблицу? Строки, столбцы, заголовки, яцейки с данными. Стилизация таблицы. <?php include '../include/description.php'; ?>">
<style>
    table#customers {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    #customers td, #customers th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    #customers tr:nth-child(even) {
        background-color: #dddddd;
    }
    .tryiticon {
        background-color: #4CAF50;
        color: #fff!important;
        text-decoration: none;
        padding: 0 8px 4px 8px;
        border-radius: 50px;
        font-size: 15px;
        position: absolute;
        margin-left: 6px;
        transition: padding 0.2s;
    }
    .tryiticon span{
        color:#fff!important;
        font-size:14px;
        font-weight:normal;
        position:absolute;
        width:0px;
        overflow:hidden;
        transition: width 0.2s;
    }
    .tryiticon:hover {
        padding:0 12px 4px 116px;
    }
    .tryiticon:hover span{
        width:116px;
        padding-top:2px;
        left:10px;
    }
    .htmltut_table, .htmltut_table th, .htmltut_table td
    {
        border:1px solid black;
    }
    .htmltut_table1, .htmltut_table1 th, .htmltut_table1 td
    {
        border:1px solid black;
    }
    .htmltut_table1 th, .htmltut_table1 td
    {
        padding:5px;
    }
</style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Таблицы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_images_picture.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_lists.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Таблицы HTML позволяют веб-разработчикам упорядочить данные в строки и столбцы.</p>
    <hr>
    <div class="w3-example">
        <h3>HTML Пример таблицы</h3>
        <div class="w3-white w3-padding notranslate w3-padding-16">
            <table id="customers">
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>Ernst Handel</td>
                    <td>Roland Mendel</td>
                    <td>Austria</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>Helen Bennett</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Yoshi Tannamuri</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Giovanni Rovelli</td>
                    <td>Italy</td>
                </tr>
            </table>
        </div>
        <a class="w3-btn w3-margin-top w3-margin-bottom" href="../htmltryit/tryitbc0f.html?filename=tryhtml_table_intro" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Определение HTML таблицы - table</h2>
    <p>HTML таблицы определяются с помощью тега <code class="w3-codespan">&lt;table&gt;</code>.</p>
    <p>Каждая строка таблицы определяется с помощью тега <code class="w3-codespan">&lt;tr&gt;</code>. Заголовок таблицы определяется с помощью тега <code class="w3-codespan">&lt;th&gt;</code>. По умолчанию заголовки таблиц выделены жирным шрифтом и центрированы. Данные таблицы/ячейка определяются с помощью тега <code class="w3-codespan">&lt;td&gt;</code>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table style=&quot;width:100%&quot;&gt;<br>&nbsp;
            &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Firstname&lt;/th&gt;<br>
            &nbsp;&nbsp;&nbsp; &lt;th&gt;Lastname&lt;/th&gt; <br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Age&lt;/th&gt;<br>
            &nbsp;
            &lt;/tr&gt;<br>&nbsp;
            &lt;tr&gt;<br>&nbsp; &nbsp; &lt;td&gt;Jill&lt;/td&gt;<br>
            &nbsp;&nbsp;&nbsp; &lt;td&gt;Smith&lt;/td&gt; <br>&nbsp;&nbsp;&nbsp; &lt;td&gt;50&lt;/td&gt;<br>
            &nbsp;
            &lt;/tr&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;Eve&lt;/td&gt;<br>
            &nbsp;&nbsp;&nbsp; &lt;td&gt;Jackson&lt;/td&gt; <br>&nbsp;&nbsp;&nbsp; &lt;td&gt;94&lt;/td&gt;<br>
            &nbsp; &lt;/tr&gt;<br>&lt;/table&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryit59fb.html?filename=tryhtml_table" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Элементы <code class="w3-codespan">&lt;td&gt;</code> - это контейнеры данных таблицы. Они могут содержать все виды элементов HTML: текст, изображения, списки, другие таблицы и т.д.</p>
    </div>
    <hr>

    <h2>HTML Таблица - Добавление границы - border</h2>
    <p>Если вы не укажете границу для таблицы, она будет отображаться без границ.</p>
    <p>Граница устанавливается с помощью CSS свойства <code class="w3-codespan">border</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            table, th, td
            {<br>
            &nbsp;&nbsp;border: 1px solid black;<br>
            }</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit046c.html?filename=tryhtml_table_border" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Не забудьте определить границы как для таблицы, так и для ячеек таблицы.</p>
    </div>
    <hr>

    <h2>HTML Таблица - Свернутые границы - border-collapse</h2>
    <p>Если вы хотите, чтобы границы сворачивались в одну, добавьте CSS свойство <code class="w3-codespan">border-collapse</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            table, th, td {<br>&nbsp;&nbsp;border: 1px solid black;<br>
            &nbsp;
            border-collapse: collapse;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitf636.html?filename=tryhtml_table_collapse" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML Таблица - Добавление отступа в ячейках - padding</h2>
    <p>Отступ (padding) в ячейке определяет пространство между содержимым ячейки и ее границами.</p>
    <p>Если вы не укажете отступ (padding), ячейки таблицы будут отображаться без отступа.</p>
    <p>Чтобы установить отступ, используйте CSS свойство <code class="w3-codespan">padding</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            th, td {<br>&nbsp; padding: 15px;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit7de9.html?filename=tryhtml_table_cellpadding" target="_blank">Попробуйте сами &raquo;</a>

    </div>
    <hr>

    <h2>HTML Таблица - Заголовки по левому краю - text-align</h2>
    <p>По умолчанию заголовки таблицы выделены жирным шрифтом и выравнены по центру.</p>
    <p>Чтобы выровнять заголовки таблицы по левому краю, используйте CSS свойство <code class="w3-codespan">text-align</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            th {<br>&nbsp;&nbsp;text-align: left;<br>}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit5052.html?filename=tryhtml_table_headings_left" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML Таблица - Добавление интервала границы - border-spacing</h2>
    <p>Интервал границы (border spacing) определяет пространство между ячейками.</p>
    <p>Чтобы установить интервал границ для таблицы, используйте CSS свойство <code class="w3-codespan">border-spacing</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            table {<br>&nbsp; border-spacing: 5px;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitec91.html?filename=tryhtml_table_cellspacing" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Если таблица имеет свернутые границы (т.е. значение <code class="w3-codespan">border-collapse</code>), то <code class="w3-codespan">border-spacing</code> не действует.</p>
    </div>
    <hr>

    <h2>HTML Таблица - Ячейки, которые охватывают много столбцов - colspan</h2>
    <p>Чтобы размер ячейки охватывал более, чем один столбец, используйте атрибут <code class="w3-codespan">colspan</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table style=&quot;width:100%&quot;&gt;<br>&nbsp; &lt;tr&gt;<br>
            &nbsp;&nbsp;&nbsp; &lt;th&gt;Name&lt;/th&gt;<br>
            &nbsp;&nbsp;&nbsp;
            &lt;th colspan=&quot;2&quot;&gt;Telephone&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>
            &nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;td&gt;Bill Gates&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;55577854&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;td&gt;55577855&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit66d3.html?filename=tryhtml_table_colspan" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML Таблица - Ячейки, которые охватывают много строк - rowspan</h2>
    <p>Чтобы размер ячейки охватывал более, чем одну строку, используйте атрибут <code class="w3-codespan">rowspan</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table style=&quot;width:100%&quot;&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Name:&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;Bill Gates&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp;
            &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th rowspan=&quot;2&quot;&gt;Telephone:&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;td&gt;55577854&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;td&gt;55577855&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit914a.html?filename=tryhtml_table_rowspan" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML Таблица - Добавление подписи - caption</h2>
    <p>Чтобы добавить подпись к таблице, используйте тег <code class="w3-codespan">&lt;caption&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table style=&quot;width:100%&quot;&gt;<br>&nbsp; &lt;caption&gt;Monthly savings&lt;/caption&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Month&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Savings&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;January&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;$100&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;February&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;$50&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>
            &lt;/table&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitaabb.html?filename=tryhtml_tables2" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Тег <code class="w3-codespan">&lt;caption&gt;</code> должен быть вставлен сразу после тега <code class="w3-codespan">&lt;table&gt;</code>.</p>
    </div>
    <hr>

    <h2>Специальный стиль для одной таблицы - атрибут Id</h2>
    <p>Чтобы определить специальный стиль для отдельной таблицы, добавьте атрибут <code class="w3-codespan">id</code> к тегу <code class="w3-codespan">&lt;table&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table id=&quot;t01&quot;&gt;<br>
            &nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Firstname&lt;/th&gt;<br>
            &nbsp;&nbsp;&nbsp; &lt;th&gt;Lastname&lt;/th&gt; <br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Age&lt;/th&gt;<br>
            &nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;Eve&lt;/td&gt;<br>
            &nbsp;&nbsp;&nbsp; &lt;td&gt;Jackson&lt;/td&gt; <br>&nbsp;&nbsp;&nbsp; &lt;td&gt;94&lt;/td&gt;<br>
            &nbsp; &lt;/tr&gt;<br>&lt;/table&gt;
        </div>
    </div>

    <div class="w3-example">
        <h3>Теперь вы можете определить специальный стиль для этой таблицы:</h3>
        <div class="w3-code notranslate cssHigh">
            table#t01 {<br>&nbsp;&nbsp;width: 100%; <br>
            &nbsp;&nbsp;background-color: #f1f1c1;<br>}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitdc1a.html?filename=tryhtml_table_id1" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>И добавить больше стилей:</h3>
        <div class="w3-code notranslate cssHigh">
            table#t01 tr:nth-child(even) {<br>
            &nbsp;&nbsp;background-color: #eee;<br>}<br>
            table#t01 tr:nth-child(odd) {<br>
            &nbsp;&nbsp;background-color: #fff;<br>}<br>
            table#t01 th {<br>&nbsp;&nbsp;color: white;<br>&nbsp;&nbsp;background-color: black;<br>}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitdfb2.html?filename=tryhtml_table_id2" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Резюме раздела</h2>

    <ul>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;table&gt;</code> для определения таблицы</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;tr&gt;</code> для определения строки таблицы</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;td&gt;</code> для определения ячейки (данных) таблицы</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;th&gt;</code> для определения заголовка таблицы</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;caption&gt;</code> для определения подписи таблицы</li>
        <li>Используйте CSS свойство <code class="w3-codespan">border</code> для определения границы</li>
        <li>Используйте CSS свойство <code class="w3-codespan">border-collapse</code> для свёртывания границ таблицы</li>
        <li>Используйте CSS свойство <code class="w3-codespan">padding</code> для добавления отступов в ячейках</li>
        <li>Используйте CSS свойство <code class="w3-codespan">text-align</code> для выравнивания текста в ячейках</li>
        <li>Используйте CSS свойство <code class="w3-codespan">border-spacing</code> для установки интервала между ячейками</li>
        <li>Используйте атрибут <code class="w3-codespan">colspan</code>, чтобы ячейка занимала много столбцов</li>
        <li>Используйте атрибут <code class="w3-codespan">rowspan</code>, чтобы ячейка занимала много строк</li>
        <li>Используйте атрибут <code class="w3-codespan">id</code> для указания одной определённой таблицы</li>
    </ul>
    <hr>
    <h2>HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_tables1" method="post" target="_blank" rel="nofollow">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Добавить строку таблицы с двумя заголовками таблицы.</p>
            <p>Заголовки двух таблиц должны иметь значения "Name" (имя) и "Age" (возраст).</p>
            <div class="exerciseprecontainer">
                &lt;table&gt;
                <br>
                &nbsp;&nbsp;<input name="ex1" spellcheck="false" maxlength="4" style="width: 46px;">
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;<input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;">
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;<input name="ex3" spellcheck="false" maxlength="12" style="width: 125px;">
                <br>
                &nbsp;&nbsp;<input name="ex4" spellcheck="false" maxlength="5" style="width: 56px;">
                <br>
                &nbsp;&nbsp;&lt;tr&gt;
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Jill Smith&lt;/td&gt;
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;50&lt;/td&gt;
                <br>
                &nbsp;&nbsp;&lt;/tr&gt;
                <br>
                &lt;/table&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2>HTML Теги таблицы</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../tags/tag_table.php">&lt;table&gt;</a></td>
            <td>Определяет таблицу</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_th.php">&lt;th&gt;</a></td>
            <td>Определяет ячейку заголовка в таблице</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_tr.php">&lt;tr&gt;</a></td>
            <td>Определяет строку в таблице</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_td.php">&lt;td&gt;</a></td>
            <td>Определяет ячейку в таблице</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_caption.php">&lt;caption&gt;</a></td>
            <td>Определяет подпись таблицы</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_colgroup.php">&lt;colgroup&gt;</a></td>
            <td>Определяет группу из одного или нескольких столбцов в таблице для форматирования</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_col.php">&lt;col&gt;</a></td>
            <td>Определяет свойства столбца для каждого столбца в элементе &lt;colgroup&gt;</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_thead.php">&lt;thead&gt;</a></td>
            <td>Группирует содержимое заголовка в таблице</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_tbody.php">&lt;tbody&gt;</a></td>
            <td>Группирует содержимое body в таблице</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_tfoot.php">&lt;tfoot&gt;</a></td>
            <td>Группирует содержимое footer в таблице</td>
        </tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для получения полного списка всех доступных тегов HTML, посетите наш <a href="../tags/index.php">HTML Справочник тегов</a>.</p>
    </div>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
           <li><em>Для чего нужны HTML-таблицы?</em></li>
           <li><em>Какой тег определяет HTML-таблицу?</em></li>
           <li><em>Каким тегом определяется каждая строка HTML-таблицы?</em></li>
           <li><em>Каким тегом определяется каждый заголовок HTML-таблицы?</em></li>
           <li><em>Каким тегом определяется каждая ячейка с данными HTML-таблицы?</em></li>
           <li><em>Какие элементы могут содержать ячейки с данными HTML-таблицы?</em></li>
           <li><em>С помощью какого CSS-свойства можно добавить границу к HTML-таблице?</em></li>
           <li><em>С помощью какого CSS-свойства можно свернуть границы HTML-таблицы в одну линию?</em></li>
           <li><em>Как добавить внутренний отступ в ячейках HTML-таблицы?</em></li>
           <li><em>Как выровнять заголовки HTML-таблицы по левому краю?</em></li>
           <li><em>Как добавить интервал между границами HTML-таблицы?</em></li>
           <li><em>Как сделать ячейку, которая охватывает более одного столбца HTML-таблицы?</em></li>
           <li><em>Как сделать ячейку, которая охватывает более одной строки HTML-таблицы?</em></li>
           <li><em>Как добавить подпись к HTML-таблице?</em></li>
           <li><em>Где нужно вставить тег <code class = "w3-codespan">&lt;caption&gt;</code> HTML-таблицы?</em></li>
           <li><em>Как определить специальный стиль для одной конкретной HTML-таблицы?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_images_picture.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_lists.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
