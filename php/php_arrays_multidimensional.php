<?php include '../include/head.php'; ?>
<title>PHP Многомерные массивы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Многомерные массивы. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Многомерные массивы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_arrays_associative.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_arrays_sort.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">На предыдущих страницах мы описали массивы, представляющие собой единый список пар ключ/значение.</p>
    <p class = "intro">Однако иногда необходимо сохранить значения с более чем одним ключом. Для этого есть многомерные массивы.</p>
    <hr>

    <h2>PHP - Многомерные массивы</h2>
    <p><strong>Многомерный массив</strong> - это массив, содержащий один или несколько массивов.</p>
    <p>PHP поддерживает многомерные массивы двух, трех, четырех, пяти и более уровней. Однако большинству людей трудно управлять массивами глубиной более трех уровней.</p>

    <div class="w3-panel w3-note">
        <p><strong>Размерность массива указывает количество индексов, необходимых для выбора элемента.</strong></p>
        <ul>
            <li>Для двумерного массива необходимо два индекса для выбора элемента</li>
            <li>Для трехмерного массива необходимо три индекса для выбора элемента</li>
        </ul>
    </div>
    <hr>

    <h2>PHP - Двумерные массивы</h2>
    <p><strong>Двумерный массив</strong> - это массив из массивов (трехмерный массив - это массив массивов из массивов).</p>
    <p>Сначала взгляните на следующую таблицу:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Название</th>
            <th>Акции</th>
            <th>Продажи</th>
        </tr>
        <tr>
            <td>Volvo</td>
            <td>22</td>
            <td>18</td>
        </tr>
        <tr>
            <td>BMW</td>
            <td>15</td>
            <td>13</td>
        </tr>
        <tr>
            <td>Saab</td>
            <td>5</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Land Rover</td>
            <td>17</td>
            <td>15</td>
        </tr>
    </table>

    <p>Мы можем хранить данные из таблицы выше в двумерном массиве, например:</p>
    <div class="w3-code w3-border notranslate"><div>
            $cars = array (<br>&nbsp; array(&quot;Volvo&quot;,22,18),<br>&nbsp; array(&quot;BMW&quot;,15,13),<br>&nbsp; array(&quot;Saab&quot;,5,2),<br>&nbsp; array(&quot;Land Rover&quot;,17,15)<br>);</div></div>

    <p>Теперь двумерный массив $cars содержит четыре массива и имеет два индекса: строку и столбец.</p>
    <p>Чтобы получить доступ к элементам массива $cars, мы должны указать на два индекса (строку и столбец):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>echo $cars[0][0].&quot;: In stock: &quot;.$cars[0][1].&quot;, sold: &quot;.$cars[0][2].&quot;.&lt;br&gt;&quot;;<br>echo $cars[1][0].&quot;: In stock: &quot;.$cars[1][1].&quot;, sold: &quot;.$cars[1][2].&quot;.&lt;br&gt;&quot;;<br>echo $cars[2][0].&quot;: In stock: &quot;.$cars[2][1].&quot;, sold: &quot;.$cars[2][2].&quot;.&lt;br&gt;&quot;;<br>echo $cars[3][0].&quot;: In stock: &quot;.$cars[3][1].&quot;, sold: &quot;.$cars[3][2].&quot;.&lt;br&gt;&quot;;<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_multi.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Можно поместить цикл <code class="w3-codespan">for</code> в другой цикл <code class="w3-codespan">for</code>, чтобы получить элементы массива $cars (ещё необходимо указать на два индекса):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>for ($row = 0; $row &lt; 4; $row++) {<br>&nbsp; echo &quot;&lt;p&gt;&lt;b&gt;Row number $row&lt;/b&gt;&lt;/p&gt;&quot;;<br>&nbsp; echo &quot;&lt;ul&gt;&quot;;<br>&nbsp; for ($col = 0; $col &lt; 3; $col++) {<br>&nbsp;&nbsp;&nbsp; echo &quot;&lt;li&gt;&quot;.$cars[$row][$col].&quot;&lt;/li&gt;&quot;;<br>&nbsp; }<br>&nbsp; echo &quot;&lt;/ul&gt;&quot;;<br>}<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_multi2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Полный справочник PHP массивов</h2>
    <p>Чтобы получить полную информацию обо всех функциях массива, перейдите в полный <a href="php_ref_array.php">Справочник PHP массивов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит краткое описание и примеры использования для каждой функции!</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_arrays_associative.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_arrays_sort.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>