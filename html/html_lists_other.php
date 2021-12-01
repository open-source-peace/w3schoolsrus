<?php include '../include/head.php'; ?>
<title>HTML Списки описаний. <?php include '../include/title.php'; ?></title>
<meta name="description" content="HTML Списки описаний. Как создать список описаний? <?php include '../include/description.php'; ?>">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>
<article>
    <h1>HTML <span class="color_h1">Другие списки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_lists_ordered.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_blocks.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">HTML также поддерживает <strong>списки описаний</strong>.</p>
    <hr>

    <h2>HTML Списки описаний</h2>
    <p><strong>Список описаний</strong> - это список терминов с описанием каждого термина.</p>
    <p>Тег <code class="w3-codespan"><a href="../tags/tag_dl.php">&lt;dl&gt;</a></code> определяет список описаний, тег <code class="w3-codespan"><a href="../tags/tag_dt.php">&lt;dt&gt;</a></code> определяет термин (имя), а тег <code class="w3-codespan"><a href="../tags/tag_dd.php">&lt;dd&gt;</a></code> описывает каждый термин:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;dl&gt;<br>&nbsp;
            &lt;dt&gt;Кофе&lt;/dt&gt;<br>
            &nbsp;
            &lt;dd&gt;- черный гарячий напиток&lt;/dd&gt;<br>
            &nbsp;
            &lt;dt&gt;Молоко&lt;/dt&gt;<br>
            &nbsp;
            &lt;dd&gt;- белый холодный напиток&lt;/dd&gt;<br>
            &lt;/dl&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryita055.html?filename=tryhtml_lists_description" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Резюме</h2>
    <ul>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;dl&gt;</code> для определения списка описаний</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;dt&gt;</code> для определения термина описания</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;dd&gt;</code> для описания термина в списке описаний</li>
    </ul>
    <hr>
    <h2>HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_lists1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Добавьте элемент списка с текстом "Coffee" внутрь элемента <code class="w3-codespan">&lt;ul></code>.</p>
            <div class="exerciseprecontainer">
                &lt;ul&gt;<input name="ex1" spellcheck="false" maxlength="4" style="width: 46px;">Coffee<input name="ex2" spellcheck="false" maxlength="5" style="width: 56px;">&lt;/ul&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
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
        <a class="w3-left w3-btn" href="html_lists_ordered.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_blocks.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>