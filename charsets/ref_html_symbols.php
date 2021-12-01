<?php include '../include/head.php'; ?>
<title>HTML Символы и символьные объекты. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Символы и символьные объекты. Математические символы, греческие буквы. Полный справочник символов. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_charsets.php'; ?>
<?php include '../include/before_content_charsets.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Символы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="ref_html_8859.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="ref_html_utf8.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>HTML Символьные объекты</h2>
    <p>Символы HTML, такие как математические операторы, стрелки, технические символы и фигуры, отсутствуют на обычной клавиатуре.</p>
    <p>Чтобы добавить эти символы на страницу HTML, вы можете использовать имя объекта HTML.</p>
    <p>Если имя объекта не существует, вы можете использовать номер объекта.</p>
    <p>Если у символа нет имени объекта, вы можете использовать десятичное (или шестнадцатеричное) значение.</p>

    <div class="w3-panel w3-note">
        <p>Если вы используете имя объекта HTML или шестнадцатеричное число, символ всегда будет отображаться правильно. <br>Это не зависит от того, какой набор символов (кодировку) использует ваша страница!</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;Я буду отображать &amp;euro;&lt;/p&gt;<br>
            &lt;p&gt;Я буду отображать &amp;#8364;&lt;/p&gt;<br>
            &lt;p&gt;Я буду отображать &amp;#x20AC;&lt;/p&gt;
        </div>
        <h3>Будет отображаться как:</h3>
        <div class="w3-code notranslate">
            Я буду отображать &euro;<br><br>
            Я буду отображать &#8364;<br><br>
            Я буду отображать &#x20AC;
        </div>
        <a class="w3-btn w3-margin-bottom" href="tryutf_euro.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Некоторые математические символы, поддерживаемые HTML</h2>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate charset-tryit">
            <tr>
                <th style="width:10%">Символ</th>
                <th style="width:10%">Число</th>
                <th style="width:15%">Объект</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td>&#8704;</td>
                <td>&amp;#8704;</td>
                <td>&amp;forall;</td>
                <td>for all</td>
            </tr>
            <tr>
                <td>&#8706;</td>
                <td>&amp;#8706;</td>
                <td>&amp;part;</td>
                <td>part</td>
            </tr>
            <tr>
                <td>&#8707;</td>
                <td>&amp;#8707;</td>
                <td>&amp;exist;</td>
                <td>exists</td>
            </tr>
            <tr>
                <td>&#8709;</td>
                <td>&amp;#8709;</td>
                <td>&amp;empty;</td>
                <td>empty</td>
            </tr>
            <tr>
                <td>&#8711;</td>
                <td>&amp;#8711;</td>
                <td>&amp;nabla;</td>
                <td>nabla</td>
            </tr>
            <tr>
                <td>&#8712;</td>
                <td>&amp;#8712;</td>
                <td>&amp;isin;</td>
                <td>isin</td>
            </tr>
            <tr>
                <td>&#8713;</td>
                <td>&amp;#8713;</td>
                <td>&amp;notin;</td>
                <td>notin</td>
            </tr>
            <tr>
                <td>&#8715;</td>
                <td>&amp;#8715;</td>
                <td>&amp;ni;</td>
                <td>ni</td>
            </tr>
            <tr>
                <td>&#8719;</td>
                <td>&amp;#8719;</td>
                <td>&amp;prod;</td>
                <td>prod</td>
            </tr>
            <tr>
                <td>&#8721;</td>
                <td>&amp;#8721;</td>
                <td>&amp;sum;</td>
                <td>sum</td>
            </tr>
        </table>
    </div>
    <p><a href="ref_utf_math.php">Полный математический справочник</a></p>
    <hr>

    <h2>Некоторые греческие буквы, поддерживаемые HTML</h2>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate charset-tryit">
            <tr>
                <th style="width:10%">Символ</th>
                <th style="width:10%">Число</th>
                <th style="width:15%">Объект</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td>&#913;</td>
                <td>&amp;#913;</td>
                <td>&amp;Alpha;</td>
                <td>Alpha</td>
            </tr>
            <tr>
                <td>&#914;</td>
                <td>&amp;#914;</td>
                <td>&amp;Beta;</td>
                <td>Beta</td>
            </tr>
            <tr>
                <td>&#915;</td>
                <td>&amp;#915;</td>
                <td>&amp;Gamma;</td>
                <td>Gamma</td>
            </tr>
            <tr>
                <td>&#916;</td>
                <td>&amp;#916;</td>
                <td>&amp;Delta;</td>
                <td>Delta</td>
            </tr>
            <tr>
                <td>&#917;</td>
                <td>&amp;#917;</td>
                <td>&amp;Epsilon;</td>
                <td>Epsilon</td>
            </tr>
            <tr>
                <td>&#918;</td>
                <td>&amp;#918;</td>
                <td>&amp;Zeta;</td>
                <td>Zeta</td>
            </tr>
        </table>
    </div>
    <p><a href="ref_utf_greek.php">Полный справочник греческих символов</a></p>
    <hr>
    <h2>Некоторые другие объекты, поддерживаемые HTML</h2>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate charset-tryit">
            <tr>
                <th style="width:10%">Символ</th>
                <th style="width:10%">Число</th>
                <th style="width:15%">Объект</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td>&#169;</td>
                <td>&amp;#169;</td>
                <td>&amp;copy;</td>
                <td>COPYRIGHT SYMBOL</td>
            </tr>
            <tr>
                <td>&#174;</td>
                <td>&amp;#174;</td>
                <td>&amp;reg;</td>
                <td>REGISTERED SIGN</td>
            </tr>
            <tr>
                <td>&#8364;</td>
                <td>&amp;#8364;</td>
                <td>&amp;euro;</td>
                <td>EURO SIGN</td>
            </tr>
            <tr>
                <td>&#8482;</td>
                <td>&amp;#8482;</td>
                <td>&amp;trade;</td>
                <td>trademark</td>
            </tr>
            <tr>
                <td>&#8592;</td>
                <td>&amp;#8592;</td>
                <td>&amp;larr;</td>
                <td>LEFTWARDS ARROW</td>
            </tr>
            <tr>
                <td>&#8593;</td>
                <td>&amp;#8593;</td>
                <td>&amp;uarr;</td>
                <td>UPWARDS ARROW</td>
            </tr>
            <tr>
                <td>&#8594;</td>
                <td>&amp;#8594;</td>
                <td>&amp;rarr;</td>
                <td>RIGHTWARDS ARROW</td>
            </tr>
            <tr>
                <td>&#8595;</td>
                <td>&amp;#8595;</td>
                <td>&amp;darr;</td>
                <td>DOWNWARDS ARROW</td>
            </tr>
            <tr>
                <td>&#9824;</td>
                <td>&amp;#9824;</td>
                <td>&amp;spades;</td>
                <td>BLACK SPADE SUIT</td>
            </tr>
            <tr>
                <td>&#9827;</td>
                <td>&amp;#9827;</td>
                <td>&amp;clubs;</td>
                <td>BLACK CLUB SUIT</td>
            </tr>
            <tr>
                <td>&#9829;</td>
                <td>&amp;#9829;</td>
                <td>&amp;hearts;</td>
                <td>BLACK HEART SUIT</td>
            </tr>
            <tr>
                <td>&#9830;</td>
                <td>&amp;#9830;</td>
                <td>&amp;diams;</td>
                <td>BLACK DIAMOND SUIT</td>
            </tr>
        </table>
    </div>
    <p><a href="ref_utf_currency.php">Полный справочник валют</a></p>
    <p><a href="ref_utf_arrows.php">Полный справочник стрелок</a></p>
    <p><a href="ref_utf_symbols.php">Полный справочник символов</a></p>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="ref_html_8859.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="ref_html_utf8.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>