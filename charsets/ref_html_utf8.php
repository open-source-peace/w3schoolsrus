<?php include '../include/head.php'; ?>
<title>HTML Справочник Unicode (UTF-8). <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Справочник Unicode (UTF-8). Полный справочник символов. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_charsets.php'; ?>
<?php include '../include/before_content_charsets.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Unicode (UTF-8) Справочник</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="ref_html_symbols.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="ref_utf_basic_latin.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Консорциум Unicode</h2>
    <p>Консорциум Unicode разрабатывает <strong>стандарт Unicode</strong>. Их цель - заменить существующие наборы символов стандартным форматом преобразования Unicode (UTF).</p>
    <p>Стандарт Unicode стал успешным и реализован в HTML, XML, Java, JavaScript, электронной почте, ASP, PHP и т.д. Стандарт Unicode также поддерживается во многих операционных системах и во всех современных браузерах.</p>
    <p>Консорциум Unicode сотрудничает с ведущими организациями по разработке стандартов, такими как ISO, W3C и ECMA.</p>
    <hr>

    <h2>Наборы символов Unicode</h2>
    <p>Unicode (Юникод) может быть реализован различными наборами символов. Наиболее часто используемые кодировки - UTF-8 и UTF-16:</p>

    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th style="width:20%">Набор символов</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td>UTF-8</td>
                <td>Символ в UTF-8 может иметь длину от 1 до 4 байтов. UTF-8 может представлять любой символ в стандарте Unicode. UTF-8 обратно совместим с ASCII. UTF-8 является самой предпочтительной кодировкой для электронной почты и веб-страниц</td>
            </tr>
            <tr>
                <td>UTF-16</td>
                <td>16-битный формат преобразования Unicode - это кодировка символов переменной длины для Unicode, способная кодировать весь набор Unicode. UTF-16 используется в основных операционных системах и средах, таких как Microsoft Windows, Java и .NET.</td>
            </tr>
        </table>
    </div>
    <p>
        <b>Совет:</b>Первые 128 символов Unicode (которые соответствуют один к одному с ASCII) кодируются с использованием одного октета с тем же двоичным значением, что и ASCII, что делает действительный текст ASCII допустимым также в кодировке UTF-8 Unicode.</p>
    <div class="w3-panel w3-note">
        <p>HTML 4 поддерживает UTF-8. HTML 5 поддерживает как UTF-8, так и UTF-16!</p>
    </div>

    <hr>
    <h2>HTML5 Стандарт: Unicode UTF-8</h2>

    <p>Поскольку наборы символов в ISO-8859 были ограничены по размеру и несовместимы в многоязычных средах, Консорциум Unicode разработал стандарт Unicode.</p>

    <p>Стандарт Unicode охватывает (почти) все символы, знаки препинания и символы в мире.</p>
    <p>Unicode позволяет обрабатывать, хранить и транспортировать текст независимо от платформы и языка.</p>
    <p><strong>Кодировка символов по умолчанию в HTML-5 - UTF-8.</strong></p>
    <p>Если веб-страница HTML5 использует набор символов, отличный от UTF-8, это должно быть указано в теге <code class="w3-codespan">&lt;meta&gt;</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate">
            &lt;meta charset=&quot;ISO-8859-1&quot;&gt;
        </div>
    </div>
    <hr>

    <h2>Разница между Unicode и UTF-8</h2>
    <p>Unicode - это <strong>набор символов</strong>. UTF-8 - это <strong>кодировка</strong>.</p>
    <p>Unicode - это список символов с уникальными десятичными числами (кодовые точки). A = 65, B = 66, C = 67, ....</p>
    <p>Этот список десятичных чисел представляет строку &quot;hello&quot;: 104 101 108 108 111</p>
    <p>Кодировка - это то, как эти числа переводятся в двоичные числа для хранения на компьютере:</p>
    <p>Кодировка UTF-8 сохранит &quot;hello&quot;, например, как (бинарный код): 01101000 01100101 01101100 01101100 01101111</p>
    <div class="w3-panel w3-note">
        <p><strong>Кодировка</strong> переводит числа в двоичные числа. <strong>Набор символов</strong> переводит символы в числа.</p>
    </div>
    <hr>

    <h2>Коды HTML5 символов UTF-8</h2>
    <p>Ниже приведен список некоторых кодов символов UTF-8, поддерживаемых HTML5: </p>

    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th>Коды символов</th>
                <th>Десятичный</th>
                <th>Шестнадцатеричный</th>
            </tr>
            <tr>
                <td><a href="ref_utf_basic_latin.php">C0 Controls and Basic Latin</a></td>
                <td>0-127</td>
                <td>0000-007F</td>
            </tr>
            <tr>
                <td><a href="ref_utf_latin1_supplement.php">C1 Controls and Latin-1 Supplement</a></td>
                <td>128-255</td>
                <td>0080-00FF</td>
            </tr>
            <tr>
                <td><a href="ref_utf_latin_extended_a.php">Latin Extended-A</a></td>
                <td>256-383</td>
                <td>0100-017F</td>
            </tr>
            <tr>
                <td><a href="ref_utf_latin_extended_b.php">Latin Extended-B</a></td>
                <td>384-591</td>
                <td>0180-024F</td>
            </tr>
            <tr>
                <td><a href="ref_utf_modifiers.php">Spacing Modifiers</a></td>
                <td>688-767</td>
                <td>02B0-02FF</td>
            </tr>
            <tr>
                <td><a href="ref_utf_diacritical.php">Diacritical Marks</a></td>
                <td>768-879</td>
                <td>0300-036F</td>
            </tr>
            <tr>
                <td><a href="ref_utf_greek.php">Greek and Coptic</a></td>
                <td>880-1023</td>
                <td>0370-03FF</td>
            </tr>
            <tr>
                <td><a href="ref_utf_cyrillic.php">Cyrillic Basic</a></td>
                <td>1024-1279</td>
                <td>0400-04FF</td>
            </tr>
            <tr>
                <td><a href="ref_utf_cyrillic_supplement.php">Cyrillic Supplement</a></td>
                <td>1280-1327</td>
                <td>0500-052F</td>
            </tr>
            <tr>
                <td><a href="ref_utf_punctuation.php">General Punctuation</a></td>
                <td>8192-8303</td>
                <td>2000-206F</td>
            </tr>
            <tr>
                <td><a href="ref_utf_currency.php">Currency Symbols</a></td>
                <td>8352-8399</td>
                <td>20A0-20CF</td>
            </tr>
            <tr>
                <td><a href="ref_utf_letterlike.php">Letterlike Symbols</a></td>
                <td>8448-8527</td>
                <td>2100-214F</td>
            </tr>
            <tr>
                <td><a href="ref_utf_arrows.php">Arrows</a></td>
                <td>8592-8703</td>
                <td>2190-21FF</td>
            </tr>
            <tr>
                <td><a href="ref_utf_math.php">Mathematical Operators</a></td>
                <td>8704-8959</td>
                <td>2200-22FF</td>
            </tr>
            <tr>
                <td><a href="ref_utf_box.php">Box Drawings</a></td>
                <td>9472-9599</td>
                <td>2500-257F</td>
            </tr>
            <tr>
                <td><a href="ref_utf_block.php">Block Elements</a></td>
                <td>9600-9631</td>
                <td>2580-259F</td>
            </tr>
            <tr>
                <td><a href="ref_utf_geometric.php">Geometric Shapes</a></td>
                <td>9632-9727</td>
                <td>25A0-25FF</td>
            </tr>
            <tr>
                <td><a href="ref_utf_symbols.php">Miscellaneous Symbols</a></td>
                <td>9728-9983</td>
                <td>2600-26FF</td>
            </tr>
            <tr>
                <td><a href="ref_utf_dingbats.php">Dingbats</a></td>
                <td>9984-10175</td>
                <td>2700-27BF</td>
            </tr>
        </table>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="ref_html_symbols.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="ref_utf_basic_latin.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>