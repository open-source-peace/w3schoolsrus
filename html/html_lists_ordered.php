<?php include '../include/head.php'; ?>
<title>HTML Упорядоченные списки. <?php include '../include/title.php'; ?></title>
<meta name="description" content="HTML Упорядоченные списки. Как создать упорядоченный список на веб-странице? Упорядоченный список начинается с тега ol. Каждый элемент списка начинается с тега li. <?php include '../include/description.php'; ?>">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Упорядоченные списки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_lists_unordered.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_lists_other.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">HTML тег <code class="w3-codespan">&lt;ol&gt;</code> определяет упорядоченный список. Упорядоченный список может быть числовым или алфавитным.</p>
    <hr>

    <h2>Упорядоченный HTML список</h2>
    <p>Упорядоченный список начинается с тега <code class="w3-codespan">&lt;ol&gt;</code>. Каждый элемент списка начинается с тега <code class="w3-codespan">&lt;li&gt;</code>.</p>
    <p>Элементы списка по умолчанию будут обозначены цифрами:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol&gt;<br>
            &nbsp;
            &lt;li&gt;Кофе&lt;/li&gt;<br>&nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>
            &nbsp;&lt;li&gt;Молоко&lt;/li&gt;<br>
            &lt;/ol&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit2865.html?filename=tryhtml_lists_ordered" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Упорядоченный HTML список - Атрибут type</h2>
    <p>Атрибут <code class="w3-codespan">type</code> тега <code class="w3-codespan">&lt;ol&gt;</code> определяет тип маркера элемента списка:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Тип</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>type=&quot;1&quot;</td>
            <td>Элементы списка будут маркированные цифрами (по умолчанию)</td>
        </tr>
        <tr>
            <td>type=&quot;A&quot;</td>
            <td>Элементы списка будут нумерованные большими (заглавными) буквами</td>
        </tr>
        <tr>
            <td>type=&quot;a&quot;</td>
            <td>Элементы списка будут нумерованные маленькими (строчными) буквами</td>
        </tr>
        <tr>
            <td>type=&quot;I&quot;</td>
            <td>Элементы списка будут нумерованные большими римскими цифрами</td>
        </tr>
        <tr>
            <td>type=&quot;i&quot;</td>
            <td>Элементы списка будут нумерованные малыми римскими цифрами</td>
        </tr>
    </table>

    <div class="w3-example">
        <h3>Числа:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol type=&quot;1&quot;&gt;<br>&nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>&nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>&lt;/ol&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit1046.html?filename=tryhtml_lists_ordered_numbers" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Большие буквы (в верхнем регистре):</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol type=&quot;A&quot;&gt;<br>&nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>&nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>&lt;/ol&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitbc1a.html?filename=tryhtml_lists_ordered_ucase" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Строчные буквы (в нижнем регистре):</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol type=&quot;a&quot;&gt;<br>&nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>&nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>&lt;/ol&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitbb71.html?filename=tryhtml_lists_ordered_lcase" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Большие римские цифры (в верхнем регистре):</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol type=&quot;I&quot;&gt;<br>&nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>&nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>&lt;/ol&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit2272.html?filename=tryhtml_lists_ordered_roman_ucase" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Малые римские цифры (в нижнем регистре):</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol type=&quot;i&quot;&gt;<br>&nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>&nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>&lt;/ol&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitb795.html?filename=tryhtml_lists_ordered_roman_lcase" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Подсчет контрольного списка</h2>
    <p>По умолчанию упорядоченный список начнет отсчет с 1. Если вы хотите начать отсчет с указанного числа, вы можете использовать атрибут <code class="w3-codespan">start</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol start=&quot;50&quot;&gt;<br>&nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>&nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Молоко&lt;/li&gt;<br>&lt;/ol&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit9fe3.html?filename=tryhtml_lists_start" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Вложенные HTML списки</h2>
    <p>Списки могут быть вложенными (список внутри списка):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ol&gt;<br>&nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>&nbsp; &lt;li&gt;Чай<br>
            &nbsp; &nbsp; &lt;ol&gt;<br>&nbsp;&nbsp;&nbsp; &nbsp;
            &lt;li&gt;Черный чай&lt;/li&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;Зеленый чай&lt;/li&gt;<br>
            &nbsp;&nbsp;&nbsp; &lt;/ol&gt;<br>&nbsp;
            &lt;/li&gt;<br>&nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>&lt;/ol&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit4479.html?filename=tryhtml_lists_nested_ol" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Элемент списка (<code class="w3-codespan">&lt;li&gt;</code>) может содержать новый список и другие элементы HTML, такие как изображения и ссылки и т.д.</p>
    </div>
    <hr>

    <h2>Резюме</h2>
    <ul>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;ol&gt;</code> для определения упорядоченного списка</li>
        <li>Используйте HTML атрибут <code class="w3-codespan">type</code> для определения типа нумерации</li>
        <li>Используйте HTML елемент <code class="w3-codespan">&lt;li&gt;</code> для определения элемента списка</li>
        <li>Списки могут быть вложенными</li>
        <li>Элементы списка могут содержать другие элементы HTML</li>
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
        <a class="w3-left w3-btn" href="html_lists_unordered.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_lists_other.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>