<?php include '../include/head.php'; ?>

<title>CSS Сущности (объекты). <?php include '../include/title.php'; ?></title>
<meta name='description' content="CSS Сущности (объекты). Как добавить сущности на веб-странице? <?php include '../include/description.php'; ?>">
<style>
        .w3-table-all td:first-child {
            font-size:22px; padding-top:0; padding-bottom:0;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cssref.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS  <span class="color_h1">Сущности</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_default_values.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_pr_align-content.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Полный справочник CSS сущностей (символов)</h2>
    <p>Если вы используете CSS для отображения любого из этих символов в HTML, вы можете использовать CSS сущность, приведенную в таблице ниже.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;style&gt;<br>h2:after {<br>&nbsp; content: ' \00A7';<br>}<br>&lt;/style&gt;</div>
        <p>Все &lt;h2&gt; элементы будут отображаться с этим символом в конце:</p>
        <div class="w3-white w3-padding notranslate">
            <h2>Я покажу &#167;</h2>
        </div>
        <a class="w3-btn w3-margin-bottom w3-margin-top" href="../csstryit/trycss_entity.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-responsive">
        <table class="w3-table-all notranslate charset-tryit">
            <tr>
                <th style="width:10%">Кодировка</th>
                <th style="width:15%">CSS объект</th>
                <th>Название</th>
            </tr>
            <tr><td>&#32;</td><td>0020</td><td>SPACE</td></tr>
            <tr><td>!</td><td>0021</td><td>EXCLAMATION MARK</td></tr>
            <tr><td>"</td><td>0022</td><td>QUOTATION MARK</td></tr>
            <tr><td>#</td><td>0023</td><td>NUMBER SIGN</td></tr>
            <tr><td>$</td><td>0024</td><td>DOLLAR SIGN</td></tr>
            <tr><td>%</td><td>0025</td><td>PERCENT SIGN</td></tr>
            <tr><td>&amp;</td><td>0026</td><td>AMPERSAND</td></tr>
            <tr><td>'</td><td>0027</td><td>APOSTROPHE</td></tr>
            <tr><td>(</td><td>0028</td><td>LEFT PARENTHESIS</td></tr>
            <tr><td>)</td><td>0029</td><td>RIGHT PARENTHESIS</td></tr>
            <tr><td>*</td><td>002A</td><td>ASTERISK</td></tr>
            <tr><td>+</td><td>002B</td><td>PLUS SIGN</td></tr>
            <tr><td>,</td><td>002C</td><td>COMMA</td></tr>
            <tr><td>-</td><td>002D</td><td>HYPHEN-MINUS</td></tr>
            <tr><td>.</td><td>002E</td><td>FULL STOP</td></tr>
            <tr><td>/</td><td>002F</td><td>SOLIDUS</td></tr>
            <tr><td>0</td><td>0030</td><td>DIGIT ZERO</td></tr>
            <tr><td>1</td><td>0031</td><td>DIGIT ONE</td></tr>
            <tr><td>2</td><td>0032</td><td>DIGIT TWO</td></tr>
            <tr><td>3</td><td>0033</td><td>DIGIT THREE</td></tr>
            <tr><td>4</td><td>0034</td><td>DIGIT FOUR</td></tr>
            <tr><td>5</td><td>0035</td><td>DIGIT FIVE</td></tr>
            <tr><td>6</td><td>0036</td><td>DIGIT SIX</td></tr>
            <tr><td>7</td><td>0037</td><td>DIGIT SEVEN</td></tr>
            <tr><td>8</td><td>0038</td><td>DIGIT EIGHT</td></tr>
            <tr><td>9</td><td>0039</td><td>DIGIT NINE</td></tr>
            <tr><td>:</td><td>003A</td><td>COLON</td></tr>
            <tr><td>;</td><td>003B</td><td>SEMICOLON</td></tr>
            <tr><td>&lt;</td><td>003C</td><td>LESS-THAN SIGN</td></tr>
            <tr><td>=</td><td>003D</td><td>EQUALS SIGN</td></tr>
            <tr><td>&gt;</td><td>003E</td><td>GREATER-THAN SIGN</td></tr>
            <tr><td>?</td><td>003F</td><td>QUESTION MARK</td></tr>
            <tr><td>@</td><td>0040</td><td>COMMERCIAL AT</td></tr>
            <tr><td>A</td><td>0041</td><td>LATIN CAPITAL LETTER A</td></tr>
            <tr><td>B</td><td>0042</td><td>LATIN CAPITAL LETTER B</td></tr>
            <tr><td>C</td><td>0043</td><td>LATIN CAPITAL LETTER C</td></tr>
            <tr><td>D</td><td>0044</td><td>LATIN CAPITAL LETTER D</td></tr>
            <tr><td>E</td><td>0045</td><td>LATIN CAPITAL LETTER E</td></tr>
            <tr><td>F</td><td>0046</td><td>LATIN CAPITAL LETTER F</td></tr>
            <tr><td>G</td><td>0047</td><td>LATIN CAPITAL LETTER G</td></tr>
            <tr><td>H</td><td>0048</td><td>LATIN CAPITAL LETTER H</td></tr>
            <tr><td>I</td><td>0049</td><td>LATIN CAPITAL LETTER I</td></tr>
            <tr><td>J</td><td>004A</td><td>LATIN CAPITAL LETTER J</td></tr>
            <tr><td>K</td><td>004B</td><td>LATIN CAPITAL LETTER K</td></tr>
            <tr><td>L</td><td>004C</td><td>LATIN CAPITAL LETTER L</td></tr>
            <tr><td>M</td><td>004D</td><td>LATIN CAPITAL LETTER M</td></tr>
            <tr><td>N</td><td>004E</td><td>LATIN CAPITAL LETTER N</td></tr>
            <tr><td>O</td><td>004F</td><td>LATIN CAPITAL LETTER O</td></tr>
            <tr><td>P</td><td>0050</td><td>LATIN CAPITAL LETTER P</td></tr>
            <tr><td>Q</td><td>0051</td><td>LATIN CAPITAL LETTER Q</td></tr>
            <tr><td>R</td><td>0052</td><td>LATIN CAPITAL LETTER R</td></tr>
            <tr><td>S</td><td>0053</td><td>LATIN CAPITAL LETTER S</td></tr>
            <tr><td>T</td><td>0054</td><td>LATIN CAPITAL LETTER T</td></tr>
            <tr><td>U</td><td>0055</td><td>LATIN CAPITAL LETTER U</td></tr>
            <tr><td>V</td><td>0056</td><td>LATIN CAPITAL LETTER V</td></tr>
            <tr><td>W</td><td>0057</td><td>LATIN CAPITAL LETTER W</td></tr>
            <tr><td>X</td><td>0058</td><td>LATIN CAPITAL LETTER X</td></tr>
            <tr><td>Y</td><td>0059</td><td>LATIN CAPITAL LETTER Y</td></tr>
            <tr><td>Z</td><td>005A</td><td>LATIN CAPITAL LETTER Z</td></tr>
            <tr><td>[</td><td>005B</td><td>LEFT SQUARE BRACKET</td></tr>
            <tr><td>\</td><td>005C</td><td>REVERSE SOLIDUS</td></tr>
            <tr><td>]</td><td>005D</td><td>RIGHT SQUARE BRACKET</td></tr>
            <tr><td>^</td><td>005E</td><td>CIRCUMFLEX ACCENT</td></tr>
            <tr><td>_</td><td>005F</td><td>LOW LINE</td></tr>
            <tr><td>`</td><td>0060</td><td>GRAVE ACCENT</td></tr>
            <tr><td>a</td><td>0061</td><td>LATIN SMALL LETTER A</td></tr>
            <tr><td>b</td><td>0062</td><td>LATIN SMALL LETTER B</td></tr>
            <tr><td>c</td><td>0063</td><td>LATIN SMALL LETTER C</td></tr>
            <tr><td>d</td><td>0064</td><td>LATIN SMALL LETTER D</td></tr>
            <tr><td>e</td><td>0065</td><td>LATIN SMALL LETTER E</td></tr>
            <tr><td>f</td><td>0066</td><td>LATIN SMALL LETTER F</td></tr>
            <tr><td>g</td><td>0067</td><td>LATIN SMALL LETTER G</td></tr>
            <tr><td>h</td><td>0068</td><td>LATIN SMALL LETTER H</td></tr>
            <tr><td>i</td><td>0069</td><td>LATIN SMALL LETTER I</td></tr>
            <tr><td>j</td><td>006A</td><td>LATIN SMALL LETTER J</td></tr>
            <tr><td>k</td><td>006B</td><td>LATIN SMALL LETTER K</td></tr>
            <tr><td>l</td><td>006C</td><td>LATIN SMALL LETTER L</td></tr>
            <tr><td>m</td><td>006D</td><td>LATIN SMALL LETTER M</td></tr>
            <tr><td>n</td><td>006E</td><td>LATIN SMALL LETTER N</td></tr>
            <tr><td>o</td><td>006F</td><td>LATIN SMALL LETTER O</td></tr>
            <tr><td>p</td><td>0070</td><td>LATIN SMALL LETTER P</td></tr>
            <tr><td>q</td><td>0071</td><td>LATIN SMALL LETTER Q</td></tr>
            <tr><td>r</td><td>0072</td><td>LATIN SMALL LETTER R</td></tr>
            <tr><td>s</td><td>0073</td><td>LATIN SMALL LETTER S</td></tr>
            <tr><td>t</td><td>0074</td><td>LATIN SMALL LETTER T</td></tr>
            <tr><td>u</td><td>0075</td><td>LATIN SMALL LETTER U</td></tr>
            <tr><td>v</td><td>0076</td><td>LATIN SMALL LETTER V</td></tr>
            <tr><td>w</td><td>0077</td><td>LATIN SMALL LETTER W</td></tr>
            <tr><td>x</td><td>0078</td><td>LATIN SMALL LETTER X</td></tr>
            <tr><td>y</td><td>0079</td><td>LATIN SMALL LETTER Y</td></tr>
            <tr><td>z</td><td>007A</td><td>LATIN SMALL LETTER Z</td></tr>
            <tr><td>{</td><td>007B</td><td>LEFT CURLY BRACKET</td></tr>
            <tr><td>|</td><td>007C</td><td>VERTICAL LINE</td></tr>
            <tr><td>}</td><td>007D</td><td>RIGHT CURLY BRACKET</td></tr>
            <tr><td>~</td><td>007E</td><td>TILDE</td></tr>
            <tr><td>&#160;</td><td>00A0</td><td>NO-BREAK SPACE</td></tr>
            <tr><td>&#161;</td><td>00A1</td><td>INVERTED EXCLAMATION MARK</td></tr>
            <tr><td>&#162;</td><td>00A2</td><td>CENT SIGN</td></tr>
            <tr><td>&#163;</td><td>00A3</td><td>POUND SIGN</td></tr>
            <tr><td>&#164;</td><td>00A4</td><td>CURRENCY SIGN</td></tr>
            <tr><td>&#165;</td><td>00A5</td><td>YEN SIGN</td></tr>
            <tr><td>&#166;</td><td>00A6</td><td>BROKEN BAR</td></tr>
            <tr><td>&#167;</td><td>00A7</td><td>SECTION SIGN</td></tr>
            <tr><td>&#168;</td><td>00A8</td><td>DIAERESIS</td></tr>
            <tr><td>&#169;</td><td>00A9</td><td>COPYRIGHT SIGN</td></tr>
            <tr><td>&#170;</td><td>00AA</td><td>FEMININE ORDINAL INDICATOR</td></tr>
            <tr><td>&#171;</td><td>00AB</td><td>LEFT-POINTING DOUBLE ANGLE QUOTATION MARK</td></tr>
            <tr><td>&#172;</td><td>00AC</td><td>NOT SIGN</td></tr>
            <tr><td>&#173;</td><td>00AD</td><td>SOFT HYPHEN</td></tr>
            <tr><td>&#174;</td><td>00AE</td><td>REGISTERED SIGN</td></tr>
            <tr><td>&#175;</td><td>00AF</td><td>MACRON</td></tr>
            <tr><td>&#176;</td><td>00B0</td><td>DEGREE SIGN</td></tr>
            <tr><td>&#177;</td><td>00B1</td><td>PLUS-MINUS SIGN</td></tr>
            <tr><td>&#178;</td><td>00B2</td><td>SUPERSCRIPT TWO</td></tr>
            <tr><td>&#179;</td><td>00B3</td><td>SUPERSCRIPT THREE</td></tr>
            <tr><td>&#180;</td><td>00B4</td><td>ACUTE ACCENT</td></tr>
            <tr><td>&#181;</td><td>00B5</td><td>MICRO SIGN</td></tr>
            <tr><td>&#182;</td><td>00B6</td><td>PILCROW SIGN</td></tr>
            <tr><td>&#183;</td><td>00B7</td><td>MIDDLE DOT</td></tr>
            <tr><td>&#184;</td><td>00B8</td><td>CEDILLA</td></tr>
            <tr><td>&#185;</td><td>00B9</td><td>SUPERSCRIPT ONE</td></tr>
            <tr><td>&#186;</td><td>00BA</td><td>MASCULINE ORDINAL INDICATOR</td></tr>
            <tr><td>&#187;</td><td>00BB</td><td>RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK</td></tr>
            <tr><td>&#188;</td><td>00BC</td><td>VULGAR FRACTION ONE QUARTER</td></tr>
            <tr><td>&#189;</td><td>00BD</td><td>VULGAR FRACTION ONE HALF</td></tr>
            <tr><td>&#190;</td><td>00BE</td><td>VULGAR FRACTION THREE QUARTERS</td></tr>
            <tr><td>&#191;</td><td>00BF</td><td>INVERTED QUESTION MARK</td></tr>
            <tr><td>&#192;</td><td>00C0</td><td>LATIN CAPITAL LETTER A WITH GRAVE</td></tr>
            <tr><td>&#193;</td><td>00C1</td><td>LATIN CAPITAL LETTER A WITH ACUTE</td></tr>
            <tr><td>&#194;</td><td>00C2</td><td>LATIN CAPITAL LETTER A WITH CIRCUMFLEX</td></tr>
            <tr><td>&#195;</td><td>00C3</td><td>LATIN CAPITAL LETTER A WITH TILDE</td></tr>
            <tr><td>&#196;</td><td>00C4</td><td>LATIN CAPITAL LETTER A WITH DIAERESIS </td></tr>
            <tr><td>&#197;</td><td>00C5</td><td>LATIN CAPITAL LETTER A WITH RING ABOVE</td></tr>
            <tr><td>&#198;</td><td>00C6</td><td>LATIN CAPITAL LETTER AE</td></tr>
            <tr><td>&#199;</td><td>00C7</td><td>LATIN CAPITAL LETTER C WITH CEDILLA</td></tr>
            <tr><td>&#200;</td><td>00C8</td><td>LATIN CAPITAL LETTER E WITH GRAVE</td></tr>
            <tr><td>&#201;</td><td>00C9</td><td>LATIN CAPITAL LETTER E WITH ACUTE</td></tr>
            <tr><td>&#202;</td><td>00CA</td><td>LATIN CAPITAL LETTER E WITH CIRCUMFLEX</td></tr>
            <tr><td>&#203;</td><td>00CB</td><td>LATIN CAPITAL LETTER E WITH DIAERESIS</td></tr>
            <tr><td>&#204;</td><td>00CC</td><td>LATIN CAPITAL LETTER I WITH GRAVE</td></tr>
            <tr><td>&#205;</td><td>00CD</td><td>LATIN CAPITAL LETTER I WITH ACUTE</td></tr>
            <tr><td>&#206;</td><td>00CE</td><td>LATIN CAPITAL LETTER I WITH CIRCUMFLEX</td></tr>
            <tr><td>&#207;</td><td>00CF</td><td>LATIN CAPITAL LETTER I WITH DIAERESIS</td></tr>
            <tr><td>&#208;</td><td>00D0</td><td>LATIN CAPITAL LETTER ETH</td></tr>
            <tr><td>&#209;</td><td>00D1</td><td>LATIN CAPITAL LETTER N WITH TILDE</td></tr>
            <tr><td>&#210;</td><td>00D2</td><td>LATIN CAPITAL LETTER O WITH GRAVE</td></tr>
            <tr><td>&#211;</td><td>00D3</td><td>LATIN CAPITAL LETTER O WITH ACUTE</td></tr>
            <tr><td>&#212;</td><td>00D4</td><td>LATIN CAPITAL LETTER O WITH CIRCUMFLEX</td></tr>
            <tr><td>&#213;</td><td>00D5</td><td>LATIN CAPITAL LETTER O WITH TILDE</td></tr>
            <tr><td>&#214;</td><td>00D6</td><td>LATIN CAPITAL LETTER O WITH DIAERESIS</td></tr>
            <tr><td>&#215;</td><td>00D7</td><td>MULTIPLICATION SIGN</td></tr>
            <tr><td>&#216;</td><td>00D8</td><td>LATIN CAPITAL LETTER O WITH STROKE</td></tr>
            <tr><td>&#217;</td><td>00D9</td><td>LATIN CAPITAL LETTER U WITH GRAVE</td></tr>
            <tr><td>&#218;</td><td>00DA</td><td>LATIN CAPITAL LETTER U WITH ACUTE</td></tr>
            <tr><td>&#219;</td><td>00DB</td><td>LATIN CAPITAL LETTER U WITH CIRCUMFLEX</td></tr>
            <tr><td>&#220;</td><td>00DC</td><td>LATIN CAPITAL LETTER U WITH DIAERESIS</td></tr>
            <tr><td>&#221;</td><td>00DD</td><td>LATIN CAPITAL LETTER Y WITH ACUTE</td></tr>
            <tr><td>&#222;</td><td>00DE</td><td>LATIN CAPITAL LETTER THORN</td></tr>
            <tr><td>&#223;</td><td>00DF</td><td>LATIN SMALL LETTER SHARP S</td></tr>
            <tr><td>&#224;</td><td>00E0</td><td>LATIN SMALL LETTER A WITH GRAVE</td></tr>
            <tr><td>&#225;</td><td>00E1</td><td>LATIN SMALL LETTER A WITH ACUTE </td></tr>
            <tr><td>&#226;</td><td>00E2</td><td>LATIN SMALL LETTER A WITH CIRCUMFLEX</td></tr>
            <tr><td>&#227;</td><td>00E3</td><td>LATIN SMALL LETTER A WITH TILDE</td></tr>
            <tr><td>&#228;</td><td>00E4</td><td>LATIN SMALL LETTER A WITH DIAERESIS</td></tr>
            <tr><td>&#229;</td><td>00E5</td><td>LATIN SMALL LETTER A WITH RING ABOVE</td></tr>
            <tr><td>&#230;</td><td>00E6</td><td>LATIN SMALL LETTER AE</td></tr>
            <tr><td>&#231;</td><td>00E7</td><td>LATIN SMALL LETTER C WITH CEDILLA</td></tr>
            <tr><td>&#232;</td><td>00E8</td><td>LATIN SMALL LETTER E WITH GRAVE</td></tr>
            <tr><td>&#233;</td><td>00E9</td><td>LATIN SMALL LETTER E WITH ACUTE</td></tr>
            <tr><td>&#234;</td><td>00EA</td><td>LATIN SMALL LETTER E WITH CIRCUMFLEX</td></tr>
            <tr><td>&#235;</td><td>00EB</td><td>LATIN SMALL LETTER E WITH DIAERESIS</td></tr>
            <tr><td>&#236;</td><td>00EC</td><td>LATIN SMALL LETTER I WITH GRAVE</td></tr>
            <tr><td>&#237;</td><td>00ED</td><td>LATIN SMALL LETTER I WITH ACUTE</td></tr>
            <tr><td>&#238;</td><td>00EE</td><td>LATIN SMALL LETTER I WITH CIRCUMFLEX</td></tr>
            <tr><td>&#239;</td><td>00EF</td><td>LATIN SMALL LETTER I WITH DIAERESIS</td></tr>
            <tr><td>&#240;</td><td>00F0</td><td>LATIN SMALL LETTER ETH</td></tr>
            <tr><td>&#241;</td><td>00F1</td><td>LATIN SMALL LETTER N WITH TILDE</td></tr>
            <tr><td>&#242;</td><td>00F2</td><td>LATIN SMALL LETTER O WITH GRAVE</td></tr>
            <tr><td>&#243;</td><td>00F3</td><td>LATIN SMALL LETTER O WITH ACUTE</td></tr>
            <tr><td>&#244;</td><td>00F4</td><td>LATIN SMALL LETTER O WITH CIRCUMFLEX</td></tr>
            <tr><td>&#245;</td><td>00F5</td><td>LATIN SMALL LETTER O WITH TILDE</td></tr>
            <tr><td>&#246;</td><td>00F6</td><td>LATIN SMALL LETTER O WITH DIAERESIS</td></tr>
            <tr><td>&#247;</td><td>00F7</td><td>DIVISION SIGN</td></tr>
            <tr><td>&#248;</td><td>00F8</td><td>LATIN SMALL LETTER O WITH STROKE</td></tr>
            <tr><td>&#249;</td><td>00F9</td><td>LATIN SMALL LETTER U WITH GRAVE</td></tr>
            <tr><td>&#250;</td><td>00FA</td><td>LATIN SMALL LETTER U WITH ACUTE</td></tr>
            <tr><td>&#251;</td><td>00FB</td><td>LATIN SMALL LETTER U WITH CIRCUMFLEX</td></tr>
            <tr><td>&#252;</td><td>00FC</td><td>LATIN SMALL LETTER U WITH DIAERESIS</td></tr>
            <tr><td>&#253;</td><td>00FD</td><td>LATIN SMALL LETTER Y WITH ACUTE</td></tr>
            <tr><td>&#254;</td><td>00FE</td><td>LATIN SMALL LETTER THORN</td></tr>
            <tr><td>&#255;</td><td>00FF</td><td>LATIN SMALL LETTER Y WITH DIAERESIS</td></tr>
            <tr><td>&#256;</td><td>0100</td><td>LATIN CAPITAL LETTER A WITH MACRON</td></tr>
            <tr><td>&#257;</td><td>0101</td><td>LATIN SMALL LETTER A WITH MACRON</td></tr>
            <tr><td>&#258;</td><td>0102</td><td>LATIN CAPITAL LETTER A WITH BREVE</td></tr>
            <tr><td>&#259;</td><td>0103</td><td>LATIN SMALL LETTER A WITH BREVE</td></tr>
            <tr><td>&#260;</td><td>0104</td><td>LATIN CAPITAL LETTER A WITH OGONEK</td></tr>
            <tr><td>&#261;</td><td>0105</td><td>LATIN SMALL LETTER A WITH OGONEK</td></tr>
            <tr><td>&#262;</td><td>0106</td><td>LATIN CAPITAL LETTER C WITH ACUTE</td></tr>
            <tr><td>&#263;</td><td>0107</td><td>LATIN SMALL LETTER C WITH ACUTE</td></tr>
            <tr><td>&#264;</td><td>0108</td><td>LATIN CAPITAL LETTER C WITH CIRCUMFLEX</td></tr>
            <tr><td>&#265;</td><td>0109</td><td>LATIN SMALL LETTER C WITH CIRCUMFLEX</td></tr>
            <tr><td>&#266;</td><td>010A</td><td>LATIN CAPITAL LETTER C WITH DOT ABOVE</td></tr>
            <tr><td>&#267;</td><td>010B</td><td>LATIN SMALL LETTER C WITH DOT ABOVE</td></tr>
            <tr><td>&#268;</td><td>010C</td><td>LATIN CAPITAL LETTER C WITH CARON</td></tr>
            <tr><td>&#269;</td><td>010D</td><td>LATIN SMALL LETTER C WITH CARON</td></tr>
            <tr><td>&#270;</td><td>010E</td><td>LATIN CAPITAL LETTER D WITH CARON</td></tr>
            <tr><td>&#271;</td><td>010F</td><td>LATIN SMALL LETTER D WITH CARON</td></tr>
            <tr><td>&#272;</td><td>0110</td><td>LATIN CAPITAL LETTER D WITH STROKE</td></tr>
            <tr><td>&#273;</td><td>0111</td><td>LATIN SMALL LETTER D WITH STROKE</td></tr>
            <tr><td>&#274;</td><td>0112</td><td>LATIN CAPITAL LETTER E WITH MACRON</td></tr>
            <tr><td>&#275;</td><td>0113</td><td>LATIN SMALL LETTER E WITH MACRON</td></tr>
            <tr><td>&#276;</td><td>0114</td><td>LATIN CAPITAL LETTER E WITH BREVE</td></tr>
            <tr><td>&#277;</td><td>0115</td><td>LATIN SMALL LETTER E WITH BREVE</td></tr>
            <tr><td>&#278;</td><td>0116</td><td>LATIN CAPITAL LETTER E WITH DOT ABOVE</td></tr>
            <tr><td>&#279;</td><td>0117</td><td>LATIN SMALL LETTER E WITH DOT ABOVE</td></tr>
            <tr><td>&#280;</td><td>0118</td><td>LATIN CAPITAL LETTER E WITH OGONEK</td></tr>
            <tr><td>&#281;</td><td>0119</td><td>LATIN SMALL LETTER E WITH OGONEK</td></tr>
            <tr><td>&#282;</td><td>011A</td><td>LATIN CAPITAL LETTER E WITH CARON</td></tr>
            <tr><td>&#283;</td><td>011B</td><td>LATIN SMALL LETTER E WITH CARON</td></tr>
            <tr><td>&#284;</td><td>011C</td><td>LATIN CAPITAL LETTER G WITH CIRCUMFLEX</td></tr>
            <tr><td>&#285;</td><td>011D</td><td>LATIN SMALL LETTER G WITH CIRCUMFLEX</td></tr>
            <tr><td>&#286;</td><td>011E</td><td>LATIN CAPITAL LETTER G WITH BREVE</td></tr>
            <tr><td>&#287;</td><td>011F</td><td>LATIN SMALL LETTER G WITH BREVE</td></tr>
            <tr><td>&#288;</td><td>0120</td><td>LATIN CAPITAL LETTER G WITH DOT ABOVE</td></tr>
            <tr><td>&#289;</td><td>0121</td><td>LATIN SMALL LETTER G WITH DOT ABOVE</td></tr>
            <tr><td>&#290;</td><td>0122</td><td>LATIN CAPITAL LETTER G WITH CEDILLA</td></tr>
            <tr><td>&#291;</td><td>0123</td><td>LATIN SMALL LETTER G WITH CEDILLA</td></tr>
            <tr><td>&#292;</td><td>0124</td><td>LATIN CAPITAL LETTER H WITH CIRCUMFLEX</td></tr>
            <tr><td>&#293;</td><td>0125</td><td>LATIN SMALL LETTER H WITH CIRCUMFLEX</td></tr>
            <tr><td>&#294;</td><td>0126</td><td>LATIN CAPITAL LETTER H WITH STROKE</td></tr>
            <tr><td>&#295;</td><td>0127</td><td>LATIN SMALL LETTER H WITH STROKE</td></tr>
            <tr><td>&#296;</td><td>0128</td><td>LATIN CAPITAL LETTER I WITH TILDE</td></tr>
            <tr><td>&#297;</td><td>0129</td><td>LATIN SMALL LETTER I WITH TILDE</td></tr>
            <tr><td>&#298;</td><td>012A</td><td>LATIN CAPITAL LETTER I WITH MACRON</td></tr>
            <tr><td>&#299;</td><td>012B</td><td>LATIN SMALL LETTER I WITH MACRON</td></tr>
            <tr><td>&#300;</td><td>012C</td><td>LATIN CAPITAL LETTER I WITH BREVE</td></tr>
            <tr><td>&#301;</td><td>012D</td><td>LATIN SMALL LETTER I WITH BREVE</td></tr>
            <tr><td>&#302;</td><td>012E</td><td>LATIN CAPITAL LETTER I WITH OGONEK</td></tr>
            <tr><td>&#303;</td><td>012F</td><td>LATIN SMALL LETTER I WITH OGONEK</td></tr>
            <tr><td>&#304;</td><td>0130</td><td>LATIN CAPITAL LETTER I WITH DOT ABOVE</td></tr>
            <tr><td>&#305;</td><td>0131</td><td>LATIN SMALL LETTER DOTLESS I</td></tr>
            <tr><td>&#306;</td><td>0132</td><td>LATIN CAPITAL LIGATURE IJ</td></tr>
            <tr><td>&#307;</td><td>0133</td><td>LATIN SMALL LIGATURE IJ</td></tr>
            <tr><td>&#308;</td><td>0134</td><td>LATIN CAPITAL LETTER J WITH CIRCUMFLEX</td></tr>
            <tr><td>&#309;</td><td>0135</td><td>LATIN SMALL LETTER J WITH CIRCUMFLEX</td></tr>
            <tr><td>&#310;</td><td>0136</td><td>LATIN CAPITAL LETTER K WITH CEDILLA</td></tr>
            <tr><td>&#311;</td><td>0137</td><td>LATIN SMALL LETTER K WITH CEDILLA</td></tr>
            <tr><td>&#312;</td><td>0138</td><td>LATIN SMALL LETTER KRA</td></tr>
            <tr><td>&#313;</td><td>0139</td><td>LATIN CAPITAL LETTER L WITH ACUTE</td></tr>
            <tr><td>&#314;</td><td>013A</td><td>LATIN SMALL LETTER L WITH ACUTE</td></tr>
            <tr><td>&#315;</td><td>013B</td><td>LATIN CAPITAL LETTER L WITH CEDILLA</td></tr>
            <tr><td>&#316;</td><td>013C</td><td>LATIN SMALL LETTER L WITH CEDILLA</td></tr>
            <tr><td>&#317;</td><td>013D</td><td>LATIN CAPITAL LETTER L WITH CARON</td></tr>
            <tr><td>&#318;</td><td>013E</td><td>LATIN SMALL LETTER L WITH CARON</td></tr>
            <tr><td>&#319;</td><td>013F</td><td>LATIN CAPITAL LETTER L WITH MIDDLE DOT</td></tr>
            <tr><td>&#320;</td><td>0140</td><td>LATIN SMALL LETTER L WITH MIDDLE DOT</td></tr>
            <tr><td>&#321;</td><td>0141</td><td>LATIN CAPITAL LETTER L WITH STROKE</td></tr>
            <tr><td>&#322;</td><td>0142</td><td>LATIN SMALL LETTER L WITH STROKE</td></tr>
            <tr><td>&#323;</td><td>0143</td><td>LATIN CAPITAL LETTER N WITH ACUTE</td></tr>
            <tr><td>&#324;</td><td>0144</td><td>LATIN SMALL LETTER N WITH ACUTE</td></tr>
            <tr><td>&#325;</td><td>0145</td><td>LATIN CAPITAL LETTER N WITH CEDILLA</td></tr>
            <tr><td>&#326;</td><td>0146</td><td>LATIN SMALL LETTER N WITH CEDILLA</td></tr>
            <tr><td>&#327;</td><td>0147</td><td>LATIN CAPITAL LETTER N WITH CARON</td></tr>
            <tr><td>&#328;</td><td>0148</td><td>LATIN SMALL LETTER N WITH CARON</td></tr>
            <tr><td>&#329;</td><td>0149</td><td>LATIN SMALL LETTER N PRECEDED BY APOSTROPHE</td></tr>
            <tr><td>&#330;</td><td>014A</td><td>LATIN CAPITAL LETTER ENG</td></tr>
            <tr><td>&#331;</td><td>014B</td><td>LATIN SMALL LETTER ENG</td></tr>
            <tr><td>&#332;</td><td>014C</td><td>LATIN CAPITAL LETTER O WITH MACRON</td></tr>
            <tr><td>&#333;</td><td>014D</td><td>LATIN SMALL LETTER O WITH MACRON</td></tr>
            <tr><td>&#334;</td><td>014E</td><td>LATIN CAPITAL LETTER O WITH BREVE</td></tr>
            <tr><td>&#335;</td><td>014F</td><td>LATIN SMALL LETTER O WITH BREVE</td></tr>
            <tr><td>&#336;</td><td>0150</td><td>LATIN CAPITAL LETTER O WITH DOUBLE ACUTE</td></tr>
            <tr><td>&#337;</td><td>0151</td><td>LATIN SMALL LETTER O WITH DOUBLE ACUTE</td></tr>
            <tr><td>&#338;</td><td>0152</td><td>LATIN CAPITAL LIGATURE OE</td></tr>
            <tr><td>&#339;</td><td>0153</td><td>LATIN SMALL LIGATURE OE</td></tr>
            <tr><td>&#340;</td><td>0154</td><td>LATIN CAPITAL LETTER R WITH ACUTE</td></tr>
            <tr><td>&#341;</td><td>0155</td><td>LATIN SMALL LETTER R WITH ACUTE</td></tr>
            <tr><td>&#342;</td><td>0156</td><td>LATIN CAPITAL LETTER R WITH CEDILLA</td></tr>
            <tr><td>&#343;</td><td>0157</td><td>LATIN SMALL LETTER R WITH CEDILLA</td></tr>
            <tr><td>&#344;</td><td>0158</td><td>LATIN CAPITAL LETTER R WITH CARON</td></tr>
            <tr><td>&#345;</td><td>0159</td><td>LATIN SMALL LETTER R WITH CARON</td></tr>
            <tr><td>&#346;</td><td>015A</td><td>LATIN CAPITAL LETTER S WITH ACUTE</td></tr>
            <tr><td>&#347;</td><td>015B</td><td>LATIN SMALL LETTER S WITH ACUTE</td></tr>
            <tr><td>&#348;</td><td>015C</td><td>LATIN CAPITAL LETTER S WITH CIRCUMFLEX</td></tr>
            <tr><td>&#349;</td><td>015D</td><td>LATIN SMALL LETTER S WITH CIRCUMFLEX</td></tr>
            <tr><td>&#350;</td><td>015E</td><td>LATIN CAPITAL LETTER S WITH CEDILLA</td></tr>
            <tr><td>&#351;</td><td>015F</td><td>LATIN SMALL LETTER S WITH CEDILLA</td></tr>
            <tr><td>&#352;</td><td>0160</td><td>LATIN CAPITAL LETTER S WITH CARON</td></tr>
            <tr><td>&#353;</td><td>0161</td><td>LATIN SMALL LETTER S WITH CARON</td></tr>
            <tr><td>&#354;</td><td>0162</td><td>LATIN CAPITAL LETTER T WITH CEDILLA</td></tr>
            <tr><td>&#355;</td><td>0163</td><td>LATIN SMALL LETTER T WITH CEDILLA</td></tr>
            <tr><td>&#356;</td><td>0164</td><td>LATIN CAPITAL LETTER T WITH CARON</td></tr>
            <tr><td>&#357;</td><td>0165</td><td>LATIN SMALL LETTER T WITH CARON</td></tr>
            <tr><td>&#358;</td><td>0166</td><td>LATIN CAPITAL LETTER T WITH STROKE</td></tr>
            <tr><td>&#359;</td><td>0167</td><td>LATIN SMALL LETTER T WITH STROKE</td></tr>
            <tr><td>&#360;</td><td>0168</td><td>LATIN CAPITAL LETTER U WITH TILDE</td></tr>
            <tr><td>&#361;</td><td>0169</td><td>LATIN SMALL LETTER U WITH TILDE</td></tr>
            <tr><td>&#362;</td><td>016A</td><td>LATIN CAPITAL LETTER U WITH MACRON</td></tr>
            <tr><td>&#363;</td><td>016B</td><td>LATIN SMALL LETTER U WITH MACRON</td></tr>
            <tr><td>&#364;</td><td>016C</td><td>LATIN CAPITAL LETTER U WITH BREVE</td></tr>
            <tr><td>&#365;</td><td>016D</td><td>LATIN SMALL LETTER U WITH BREVE</td></tr>
            <tr><td>&#366;</td><td>016E</td><td>LATIN CAPITAL LETTER U WITH RING ABOVE</td></tr>
            <tr><td>&#367;</td><td>016F</td><td>LATIN SMALL LETTER U WITH RING ABOVE</td></tr>
            <tr><td>&#368;</td><td>0170</td><td>LATIN CAPITAL LETTER U WITH DOUBLE ACUTE</td></tr>
            <tr><td>&#369;</td><td>0171</td><td>LATIN SMALL LETTER U WITH DOUBLE ACUTE</td></tr>
            <tr><td>&#370;</td><td>0172</td><td>LATIN CAPITAL LETTER U WITH OGONEK</td></tr>
            <tr><td>&#371;</td><td>0173</td><td>LATIN SMALL LETTER U WITH OGONEK</td></tr>
            <tr><td>&#372;</td><td>0174</td><td>LATIN CAPITAL LETTER W WITH CIRCUMFLEX</td></tr>
            <tr><td>&#373;</td><td>0175</td><td>LATIN SMALL LETTER W WITH CIRCUMFLEX</td></tr>
            <tr><td>&#374;</td><td>0176</td><td>LATIN CAPITAL LETTER Y WITH CIRCUMFLEX</td></tr>
            <tr><td>&#375;</td><td>0177</td><td>LATIN SMALL LETTER Y WITH CIRCUMFLEX</td></tr>
            <tr><td>&#376;</td><td>0178</td><td>LATIN CAPITAL LETTER Y WITH DIAERESIS</td></tr>
            <tr><td>&#377;</td><td>0179</td><td>LATIN CAPITAL LETTER Z WITH ACUTE</td></tr>
            <tr><td>&#378;</td><td>017A</td><td>LATIN SMALL LETTER Z WITH ACUTE</td></tr>
            <tr><td>&#379;</td><td>017B</td><td>LATIN CAPITAL LETTER Z WITH DOT ABOVE</td></tr>
            <tr><td>&#380;</td><td>017C</td><td>LATIN SMALL LETTER Z WITH DOT ABOVE</td></tr>
            <tr><td>&#381;</td><td>017D</td><td>LATIN CAPITAL LETTER Z WITH CARON</td></tr>
            <tr><td>&#382;</td><td>017E</td><td>LATIN SMALL LETTER Z WITH CARON</td></tr>
            <tr><td>&#383;</td><td>017F</td><td>LATIN SMALL LETTER LONG S</td></tr>
            <tr><td>&#384;</td><td>0180</td><td>LATIN SMALL LETTER B WITH STROKE</td></tr>
            <tr><td>&#385;</td><td>0181</td><td>LATIN CAPITAL LETTER B WITH HOOK</td></tr>
            <tr><td>&#386;</td><td>0182</td><td>LATIN CAPITAL LETTER B WITH TOPBAR</td></tr>
            <tr><td>&#387;</td><td>0183</td><td>LATIN SMALL LETTER B WITH TOPBAR</td></tr>
            <tr><td>&#388;</td><td>0184</td><td>LATIN CAPITAL LETTER TONE SIX</td></tr>
            <tr><td>&#389;</td><td>0185</td><td>LATIN SMALL LETTER TONE SIX</td></tr>
            <tr><td>&#390;</td><td>0186</td><td>LATIN CAPITAL LETTER OPEN O</td></tr>
            <tr><td>&#391;</td><td>0187</td><td>LATIN CAPITAL LETTER C WITH HOOK</td></tr>
            <tr><td>&#392;</td><td>0188</td><td>LATIN SMALL LETTER C WITH HOOK</td></tr>
            <tr><td>&#393;</td><td>0189</td><td>LATIN CAPITAL LETTER AFRICAN D</td></tr>
            <tr><td>&#394;</td><td>018A</td><td>LATIN CAPITAL LETTER D WITH HOOK</td></tr>
            <tr><td>&#395;</td><td>018B</td><td>LATIN CAPITAL LETTER D WITH TOPBAR</td></tr>
            <tr><td>&#396;</td><td>018C</td><td>LATIN SMALL LETTER D WITH TOPBAR</td></tr>
            <tr><td>&#397;</td><td>018D</td><td>LATIN SMALL LETTER TURNED DELTA</td></tr>
            <tr><td>&#398;</td><td>018E</td><td>LATIN CAPITAL LETTER REVERSED E</td></tr>
            <tr><td>&#399;</td><td>018F</td><td>LATIN CAPITAL LETTER SCHWA</td></tr>
            <tr><td>&#400;</td><td>0190</td><td>LATIN CAPITAL LETTER OPEN E</td></tr>
            <tr><td>&#401;</td><td>0191</td><td>LATIN CAPITAL LETTER F WITH HOOK</td></tr>
            <tr><td>&#402;</td><td>0192</td><td>LATIN SMALL LETTER F WITH HOOK</td></tr>
            <tr><td>&#403;</td><td>0193</td><td>LATIN CAPITAL LETTER G WITH HOOK</td></tr>
            <tr><td>&#404;</td><td>0194</td><td>LATIN CAPITAL LETTER GAMMA</td></tr>
            <tr><td>&#405;</td><td>0195</td><td>LATIN SMALL LETTER HV</td></tr>
            <tr><td>&#406;</td><td>0196</td><td>LATIN CAPITAL LETTER IOTA</td></tr>
            <tr><td>&#407;</td><td>0197</td><td>LATIN CAPITAL LETTER I WITH STROKE</td></tr>
            <tr><td>&#408;</td><td>0198</td><td>LATIN CAPITAL LETTER K WITH HOOK</td></tr>
            <tr><td>&#409;</td><td>0199</td><td>LATIN SMALL LETTER K WITH HOOK</td></tr>
            <tr><td>&#410;</td><td>019A</td><td>LATIN SMALL LETTER L WITH BAR</td></tr>
            <tr><td>&#411;</td><td>019B</td><td>LATIN SMALL LETTER LAMBDA WITH STROKE</td></tr>
            <tr><td>&#412;</td><td>019C</td><td>LATIN CAPITAL LETTER TURNED M</td></tr>
            <tr><td>&#413;</td><td>019D</td><td>LATIN CAPITAL LETTER N WITH LEFT HOOK</td></tr>
            <tr><td>&#414;</td><td>019E</td><td>LATIN SMALL LETTER N WITH LONG RIGHT LEG</td></tr>
            <tr><td>&#415;</td><td>019F</td><td>LATIN CAPITAL LETTER O WITH MIDDLE TILDE</td></tr>
            <tr><td>&#416;</td><td>01A0</td><td>LATIN CAPITAL LETTER O WITH HORN</td></tr>
            <tr><td>&#417;</td><td>01A1</td><td>LATIN SMALL LETTER O WITH HORN</td></tr>
            <tr><td>&#418;</td><td>01A2</td><td>LATIN CAPITAL LETTER OI</td></tr>
            <tr><td>&#419;</td><td>01A3</td><td>LATIN SMALL LETTER OI</td></tr>
            <tr><td>&#420;</td><td>01A4</td><td>LATIN CAPITAL LETTER P WITH HOOK</td></tr>
            <tr><td>&#421;</td><td>01A5</td><td>LATIN SMALL LETTER P WITH HOOK</td></tr>
            <tr><td>&#422;</td><td>01A6</td><td>LATIN LETTER YR</td></tr>
            <tr><td>&#423;</td><td>01A7</td><td>LATIN CAPITAL LETTER TONE TWO</td></tr>
            <tr><td>&#424;</td><td>01A8</td><td>LATIN SMALL LETTER TONE TWO</td></tr>
            <tr><td>&#425;</td><td>01A9</td><td>LATIN CAPITAL LETTER ESH</td></tr>
            <tr><td>&#426;</td><td>01AA</td><td>LATIN LETTER REVERSED ESH LOOP</td></tr>
            <tr><td>&#427;</td><td>01AB</td><td>LATIN SMALL LETTER T WITH PALATAL HOOK</td></tr>
            <tr><td>&#428;</td><td>01AC</td><td>LATIN CAPITAL LETTER T WITH HOOK</td></tr>
            <tr><td>&#429;</td><td>01AD</td><td>LATIN SMALL LETTER T WITH HOOK</td></tr>
            <tr><td>&#430;</td><td>01AE</td><td>LATIN CAPITAL LETTER T WITH RETROFLEX HOOK</td></tr>
            <tr><td>&#431;</td><td>01AF</td><td>LATIN CAPITAL LETTER U WITH HORN</td></tr>
            <tr><td>&#432;</td><td>01B0</td><td>LATIN SMALL LETTER U WITH HORN</td></tr>
            <tr><td>&#433;</td><td>01B1</td><td>LATIN CAPITAL LETTER UPSILON</td></tr>
            <tr><td>&#434;</td><td>01B2</td><td>LATIN CAPITAL LETTER V WITH HOOK</td></tr>
            <tr><td>&#435;</td><td>01B3</td><td>LATIN CAPITAL LETTER Y WITH HOOK</td></tr>
            <tr><td>&#436;</td><td>01B4</td><td>LATIN SMALL LETTER Y WITH HOOK</td></tr>
            <tr><td>&#437;</td><td>01B5</td><td>LATIN CAPITAL LETTER Z WITH STROKE</td></tr>
            <tr><td>&#438;</td><td>01B6</td><td>LATIN SMALL LETTER Z WITH STROKE</td></tr>
            <tr><td>&#439;</td><td>01B7</td><td>LATIN CAPITAL LETTER EZH</td></tr>
            <tr><td>&#440;</td><td>01B8</td><td>LATIN CAPITAL LETTER EZH REVERSED</td></tr>
            <tr><td>&#441;</td><td>01B9</td><td>LATIN SMALL LETTER EZH REVERSED</td></tr>
            <tr><td>&#442;</td><td>01BA</td><td>LATIN SMALL LETTER EZH WITH TAIL</td></tr>
            <tr><td>&#443;</td><td>01BB</td><td>LATIN LETTER TWO WITH STROKE</td></tr>
            <tr><td>&#444;</td><td>01BC</td><td>LATIN CAPITAL LETTER TONE FIVE</td></tr>
            <tr><td>&#445;</td><td>01BD</td><td>LATIN SMALL LETTER TONE FIVE</td></tr>
            <tr><td>&#446;</td><td>01BE</td><td>LATIN LETTER INVERTED GLOTTAL STOP WITH STROKE</td></tr>
            <tr><td>&#447;</td><td>01BF</td><td>LATIN LETTER WYNN</td></tr>
            <tr><td>&#448;</td><td>01C0</td><td>LATIN LETTER DENTAL CLICK</td></tr>
            <tr><td>&#449;</td><td>01C1</td><td>LATIN LETTER LATERAL CLICK</td></tr>
            <tr><td>&#450;</td><td>01C2</td><td>LATIN LETTER ALVEOLAR CLICK</td></tr>
            <tr><td>&#451;</td><td>01C3</td><td>LATIN LETTER RETROFLEX CLICK</td></tr>
            <tr><td>&#452;</td><td>01C4</td><td>LATIN CAPITAL LETTER DZ WITH CARON</td></tr>
            <tr><td>&#453;</td><td>01C5</td><td>LATIN CAPITAL LETTER D WITH SMALL LETTER Z WITH CARON</td></tr>
            <tr><td>&#454;</td><td>01C6</td><td>LATIN SMALL LETTER DZ WITH CARON</td></tr>
            <tr><td>&#455;</td><td>01C7</td><td>LATIN CAPITAL LETTER LJ</td></tr>
            <tr><td>&#456;</td><td>01C8</td><td>LATIN CAPITAL LETTER L WITH SMALL LETTER J</td></tr>
            <tr><td>&#457;</td><td>01C9</td><td>LATIN SMALL LETTER LJ</td></tr>
            <tr><td>&#458;</td><td>01CA</td><td>LATIN CAPITAL LETTER NJ</td></tr>
            <tr><td>&#459;</td><td>01CB</td><td>LATIN CAPITAL LETTER N WITH SMALL LETTER J</td></tr>
            <tr><td>&#460;</td><td>01CC</td><td>LATIN SMALL LETTER NJ</td></tr>
            <tr><td>&#461;</td><td>01CD</td><td>LATIN CAPITAL LETTER A WITH CARON</td></tr>
            <tr><td>&#462;</td><td>01CE</td><td>LATIN SMALL LETTER A WITH CARON</td></tr>
            <tr><td>&#463;</td><td>01CF</td><td>LATIN CAPITAL LETTER I WITH CARON</td></tr>
            <tr><td>&#464;</td><td>01D0</td><td>LATIN SMALL LETTER I WITH CARON</td></tr>
            <tr><td>&#465;</td><td>01D1</td><td>LATIN CAPITAL LETTER O WITH CARON</td></tr>
            <tr><td>&#466;</td><td>01D2</td><td>LATIN SMALL LETTER O WITH CARON</td></tr>
            <tr><td>&#467;</td><td>01D3</td><td>LATIN CAPITAL LETTER U WITH CARON</td></tr>
            <tr><td>&#468;</td><td>01D4</td><td>LATIN SMALL LETTER U WITH CARON</td></tr>
            <tr><td>&#469;</td><td>01D5</td><td>LATIN CAPITAL LETTER U WITH DIAERESIS AND MACRON</td></tr>
            <tr><td>&#470;</td><td>01D6</td><td>LATIN SMALL LETTER U WITH DIAERESIS AND MACRON</td></tr>
            <tr><td>&#471;</td><td>01D7</td><td>LATIN CAPITAL LETTER U WITH DIAERESIS AND ACUTE</td></tr>
            <tr><td>&#472;</td><td>01D8</td><td>LATIN SMALL LETTER U WITH DIAERESIS AND ACUTE</td></tr>
            <tr><td>&#473;</td><td>01D9</td><td>LATIN CAPITAL LETTER U WITH DIAERESIS AND CARON</td></tr>
            <tr><td>&#474;</td><td>01DA</td><td>LATIN SMALL LETTER U WITH DIAERESIS AND CARON</td></tr>
            <tr><td>&#475;</td><td>01DB</td><td>LATIN CAPITAL LETTER U WITH DIAERESIS AND GRAVE</td></tr>
            <tr><td>&#476;</td><td>01DC</td><td>LATIN SMALL LETTER U WITH DIAERESIS AND GRAVE</td></tr>
            <tr><td>&#477;</td><td>01DD</td><td>LATIN SMALL LETTER TURNED E</td></tr>
            <tr><td>&#478;</td><td>01DE</td><td>LATIN CAPITAL LETTER A WITH DIAERESIS AND MACRON</td></tr>
            <tr><td>&#479;</td><td>01DF</td><td>LATIN SMALL LETTER A WITH DIAERESIS AND MACRON</td></tr>
            <tr><td>&#480;</td><td>01E0</td><td>LATIN CAPITAL LETTER A WITH DOT ABOVE AND MACRON</td></tr>
            <tr><td>&#481;</td><td>01E1</td><td>LATIN SMALL LETTER A WITH DOT ABOVE AND MACRON</td></tr>
            <tr><td>&#482;</td><td>01E2</td><td>LATIN CAPITAL LETTER AE WITH MACRON</td></tr>
            <tr><td>&#483;</td><td>01E3</td><td>LATIN SMALL LETTER AE WITH MACRON</td></tr>
            <tr><td>&#484;</td><td>01E4</td><td>LATIN CAPITAL LETTER G WITH STROKE</td></tr>
            <tr><td>&#485;</td><td>01E5</td><td>LATIN SMALL LETTER G WITH STROKE</td></tr>
            <tr><td>&#486;</td><td>01E6</td><td>LATIN CAPITAL LETTER G WITH CARON</td></tr>
            <tr><td>&#487;</td><td>01E7</td><td>LATIN SMALL LETTER G WITH CARON</td></tr>
            <tr><td>&#488;</td><td>01E8</td><td>LATIN CAPITAL LETTER K WITH CARON</td></tr>
            <tr><td>&#489;</td><td>01E9</td><td>LATIN SMALL LETTER K WITH CARON</td></tr>
            <tr><td>&#490;</td><td>01EA</td><td>LATIN CAPITAL LETTER O WITH OGONEK</td></tr>
            <tr><td>&#491;</td><td>01EB</td><td>LATIN SMALL LETTER O WITH OGONEK</td></tr>
            <tr><td>&#492;</td><td>01EC</td><td>LATIN CAPITAL LETTER O WITH OGONEK AND MACRON</td></tr>
            <tr><td>&#493;</td><td>01ED</td><td>LATIN SMALL LETTER O WITH OGONEK AND MACRON</td></tr>
            <tr><td>&#494;</td><td>01EE</td><td>LATIN CAPITAL LETTER EZH WITH CARON</td></tr>
            <tr><td>&#495;</td><td>01EF</td><td>LATIN SMALL LETTER EZH WITH CARON</td></tr>
            <tr><td>&#496;</td><td>01F0</td><td>LATIN SMALL LETTER J WITH CARON</td></tr>
            <tr><td>&#497;</td><td>01F1</td><td>LATIN CAPITAL LETTER DZ</td></tr>
            <tr><td>&#498;</td><td>01F2</td><td>LATIN CAPITAL LETTER D WITH SMALL LETTER Z</td></tr>
            <tr><td>&#499;</td><td>01F3</td><td>LATIN SMALL LETTER DZ</td></tr>
            <tr><td>&#500;</td><td>01F4</td><td>LATIN CAPITAL LETTER G WITH ACUTE</td></tr>
            <tr><td>&#501;</td><td>01F5</td><td>LATIN SMALL LETTER G WITH ACUTE</td></tr>
            <tr><td>&#502;</td><td>01F6</td><td>LATIN CAPITAL LETTER HWAIR</td></tr>
            <tr><td>&#503;</td><td>01F7</td><td>LATIN CAPITAL LETTER WYNN</td></tr>
            <tr><td>&#504;</td><td>01F8</td><td>LATIN CAPITAL LETTER N WITH GRAVE</td></tr>
            <tr><td>&#505;</td><td>01F9</td><td>LATIN SMALL LETTER N WITH GRAVE</td></tr>
            <tr><td>&#506;</td><td>01FA</td><td>LATIN CAPITAL LETTER A WITH RING ABOVE AND ACUTE</td></tr>
            <tr><td>&#507;</td><td>01FB</td><td>LATIN SMALL LETTER A WITH RING ABOVE AND ACUTE</td></tr>
            <tr><td>&#508;</td><td>01FC</td><td>LATIN CAPITAL LETTER AE WITH ACUTE</td></tr>
            <tr><td>&#509;</td><td>01FD</td><td>LATIN SMALL LETTER AE WITH ACUTE</td></tr>
            <tr><td>&#510;</td><td>01FE</td><td>LATIN CAPITAL LETTER O WITH STROKE AND ACUTE</td></tr>
            <tr><td>&#511;</td><td>01FF</td><td>LATIN SMALL LETTER O WITH STROKE AND ACUTE</td></tr>
            <tr><td>&#512;</td><td>0200</td><td>LATIN CAPITAL LETTER A WITH DOUBLE GRAVE</td></tr>
            <tr><td>&#513;</td><td>0201</td><td>LATIN SMALL LETTER A WITH DOUBLE GRAVE</td></tr>
            <tr><td>&#514;</td><td>0202</td><td>LATIN CAPITAL LETTER A WITH INVERTED BREVE</td></tr>
            <tr><td>&#515;</td><td>0203</td><td>LATIN SMALL LETTER A WITH INVERTED BREVE</td></tr>
            <tr><td>&#516;</td><td>0204</td><td>LATIN CAPITAL LETTER E WITH DOUBLE GRAVE</td></tr>
            <tr><td>&#517;</td><td>0205</td><td>LATIN SMALL LETTER E WITH DOUBLE GRAVE</td></tr>
            <tr><td>&#518;</td><td>0206</td><td>LATIN CAPITAL LETTER E WITH INVERTED BREVE</td></tr>
            <tr><td>&#519;</td><td>0207</td><td>LATIN SMALL LETTER E WITH INVERTED BREVE</td></tr>
            <tr><td>&#520;</td><td>0208</td><td>LATIN CAPITAL LETTER I WITH DOUBLE GRAVE</td></tr>
            <tr><td>&#521;</td><td>0209</td><td>LATIN SMALL LETTER I WITH DOUBLE GRAVE</td></tr>
            <tr><td>&#522;</td><td>020A</td><td>LATIN CAPITAL LETTER I WITH INVERTED BREVE</td></tr>
            <tr><td>&#523;</td><td>020B</td><td>LATIN SMALL LETTER I WITH INVERTED BREVE</td></tr>
            <tr><td>&#524;</td><td>020C</td><td>LATIN CAPITAL LETTER O WITH DOUBLE GRAVE</td></tr>
            <tr><td>&#525;</td><td>020D</td><td>LATIN SMALL LETTER O WITH DOUBLE GRAVE</td></tr>
            <tr><td>&#526;</td><td>020E</td><td>LATIN CAPITAL LETTER O WITH INVERTED BREVE</td></tr>
            <tr><td>&#527;</td><td>020F</td><td>LATIN SMALL LETTER O WITH INVERTED BREVE</td></tr>
            <tr><td>&#528;</td><td>0210</td><td>LATIN CAPITAL LETTER R WITH DOUBLE GRAVE</td></tr>
            <tr><td>&#529;</td><td>0211</td><td>LATIN SMALL LETTER R WITH DOUBLE GRAVE</td></tr>
            <tr><td>&#530;</td><td>0212</td><td>LATIN CAPITAL LETTER R WITH INVERTED BREVE</td></tr>
            <tr><td>&#531;</td><td>0213</td><td>LATIN SMALL LETTER R WITH INVERTED BREVE</td></tr>
            <tr><td>&#532;</td><td>0214</td><td>LATIN CAPITAL LETTER U WITH DOUBLE GRAVE</td></tr>
            <tr><td>&#533;</td><td>0215</td><td>LATIN SMALL LETTER U WITH DOUBLE GRAVE</td></tr>
            <tr><td>&#534;</td><td>0216</td><td>LATIN CAPITAL LETTER U WITH INVERTED BREVE</td></tr>
            <tr><td>&#535;</td><td>0217</td><td>LATIN SMALL LETTER U WITH INVERTED BREVE</td></tr>
            <tr><td>&#536;</td><td>0218</td><td>LATIN CAPITAL LETTER S WITH COMMA BELOW</td></tr>
            <tr><td>&#537;</td><td>0219</td><td>LATIN SMALL LETTER S WITH COMMA BELOW</td></tr>
            <tr><td>&#538;</td><td>021A</td><td>LATIN CAPITAL LETTER T WITH COMMA BELOW</td></tr>
            <tr><td>&#539;</td><td>021B</td><td>LATIN SMALL LETTER T WITH COMMA BELOW</td></tr>
            <tr><td>&#540;</td><td>021C</td><td>LATIN CAPITAL LETTER YOGH</td></tr>
            <tr><td>&#541;</td><td>021D</td><td>LATIN SMALL LETTER YOGH</td></tr>
            <tr><td>&#542;</td><td>021E</td><td>LATIN CAPITAL LETTER H WITH CARON</td></tr>
            <tr><td>&#543;</td><td>021F</td><td>LATIN SMALL LETTER H WITH CARON</td></tr>
            <tr><td>&#544;</td><td>0220</td><td>LATIN CAPITAL LETTER N WITH LONG RIGHT LEG</td></tr>
            <tr><td>&#545;</td><td>0221</td><td>LATIN SMALL LETTER D WITH CURL</td></tr>
            <tr><td>&#546;</td><td>0222</td><td>LATIN CAPITAL LETTER OU</td></tr>
            <tr><td>&#547;</td><td>0223</td><td>LATIN SMALL LETTER OU</td></tr>
            <tr><td>&#548;</td><td>0224</td><td>LATIN CAPITAL LETTER Z WITH HOOK</td></tr>
            <tr><td>&#549;</td><td>0225</td><td>LATIN SMALL LETTER Z WITH HOOK</td></tr>
            <tr><td>&#550;</td><td>0226</td><td>LATIN CAPITAL LETTER A WITH DOT ABOVE</td></tr>
            <tr><td>&#551;</td><td>0227</td><td>LATIN SMALL LETTER A WITH DOT ABOVE</td></tr>
            <tr><td>&#552;</td><td>0228</td><td>LATIN CAPITAL LETTER E WITH CEDILLA</td></tr>
            <tr><td>&#553;</td><td>0229</td><td>LATIN SMALL LETTER E WITH CEDILLA</td></tr>
            <tr><td>&#554;</td><td>022A</td><td>LATIN CAPITAL LETTER O WITH DIAERESIS AND MACRON</td></tr>
            <tr><td>&#555;</td><td>022B</td><td>LATIN SMALL LETTER O WITH DIAERESIS AND MACRON</td></tr>
            <tr><td>&#556;</td><td>022C</td><td>LATIN CAPITAL LETTER O WITH TILDE AND MACRON</td></tr>
            <tr><td>&#557;</td><td>022D</td><td>LATIN SMALL LETTER O WITH TILDE AND MACRON</td></tr>
            <tr><td>&#558;</td><td>022E</td><td>LATIN CAPITAL LETTER O WITH DOT ABOVE</td></tr>
            <tr><td>&#559;</td><td>022F</td><td>LATIN SMALL LETTER O WITH DOT ABOVE</td></tr>
            <tr><td>&#560;</td><td>0230</td><td>LATIN CAPITAL LETTER O WITH DOT ABOVE AND MACRON</td></tr>
            <tr><td>&#561;</td><td>0231</td><td>LATIN SMALL LETTER O WITH DOT ABOVE AND MACRON</td></tr>
            <tr><td>&#562;</td><td>0232</td><td>LATIN CAPITAL LETTER Y WITH MACRON</td></tr>
            <tr><td>&#563;</td><td>0233</td><td>LATIN SMALL LETTER Y WITH MACRON</td></tr>
            <tr><td>&#564;</td><td>0234</td><td>LATIN SMALL LETTER L WITH CURL</td></tr>
            <tr><td>&#565;</td><td>0235</td><td>LATIN SMALL LETTER N WITH CURL</td></tr>
            <tr><td>&#566;</td><td>0236</td><td>LATIN SMALL LETTER T WITH CURL</td></tr>
            <tr><td>&#567;</td><td>0237</td><td>LATIN SMALL LETTER DOTLESS J</td></tr>
            <tr><td>&#568;</td><td>0238</td><td>LATIN SMALL LETTER DB DIGRAPH</td></tr>
            <tr><td>&#569;</td><td>0239</td><td>LATIN SMALL LETTER QP DIGRAPH</td></tr>
            <tr><td>&#570;</td><td>023A</td><td>LATIN CAPITAL LETTER A WITH STROKE</td></tr>
            <tr><td>&#571;</td><td>023B</td><td>LATIN CAPITAL LETTER C WITH STROKE</td></tr>
            <tr><td>&#572;</td><td>023C</td><td>LATIN SMALL LETTER C WITH STROKE</td></tr>
            <tr><td>&#573;</td><td>023D</td><td>LATIN CAPITAL LETTER L WITH BAR</td></tr>
            <tr><td>&#574;</td><td>023E</td><td>LATIN CAPITAL LETTER T WITH DIAGONAL STROKE</td></tr>
            <tr><td>&#575;</td><td>023F</td><td>LATIN SMALL LETTER S WITH SWASH TAIL</td></tr>
            <tr><td>&#576;</td><td>0240</td><td>LATIN SMALL LETTER Z WITH SWASH TAIL</td></tr>
            <tr><td>&#577;</td><td>0241</td><td>LATIN CAPITAL LETTER GLOTTAL STOP</td></tr>
            <tr><td>&#578;</td><td>0242</td><td>LATIN SMALL LETTER GLOTTAL STOP</td></tr>
            <tr><td>&#579;</td><td>0243</td><td>LATIN CAPITAL LETTER B WITH STROKE</td></tr>
            <tr><td>&#580;</td><td>0244</td><td>LATIN CAPITAL LETTER U BAR</td></tr>
            <tr><td>&#581;</td><td>0245</td><td>LATIN CAPITAL LETTER TURNED V</td></tr>
            <tr><td>&#582;</td><td>0246</td><td>LATIN CAPITAL LETTER E WITH STROKE</td></tr>
            <tr><td>&#583;</td><td>0247</td><td>LATIN SMALL LETTER E WITH STROKE</td></tr>
            <tr><td>&#584;</td><td>0248</td><td>LATIN CAPITAL LETTER J WITH STROKE</td></tr>
            <tr><td>&#585;</td><td>0249</td><td>LATIN SMALL LETTER J WITH STROKE</td></tr>
            <tr><td>&#586;</td><td>024A</td><td>LATIN CAPITAL LETTER SMALL Q WITH HOOK TAIL</td></tr>
            <tr><td>&#587;</td><td>024B</td><td>LATIN SMALL LETTER Q WITH HOOK TAIL</td></tr>
            <tr><td>&#588;</td><td>024C</td><td>LATIN CAPITAL LETTER R WITH STROKE</td></tr>
            <tr><td>&#589;</td><td>024D</td><td>LATIN SMALL LETTER R WITH STROKE</td></tr>
            <tr><td>&#590;</td><td>024E</td><td>LATIN CAPITAL LETTER Y WITH STROKE</td></tr>
            <tr><td>&#591;</td><td>024F</td><td>LATIN SMALL LETTER Y WITH STROKE</td></tr>
            <tr><td>&#688;</td><td>02B0</td><td>MODIFIER LETTER SMALL H</td></tr>
            <tr><td>&#689;</td><td>02B1</td><td>MODIFIER LETTER SMALL H WITH HOOK</td></tr>
            <tr><td>&#690;</td><td>02B2</td><td>MODIFIER LETTER SMALL J</td></tr>
            <tr><td>&#691;</td><td>02B3</td><td>MODIFIER LETTER SMALL R</td></tr>
            <tr><td>&#692;</td><td>02B4</td><td>MODIFIER LETTER SMALL TURNED R</td></tr>
            <tr><td>&#693;</td><td>02B5</td><td>MODIFIER LETTER SMALL TURNED R WITH HOOK</td></tr>
            <tr><td>&#694;</td><td>02B6</td><td>MODIFIER LETTER SMALL CAPITAL INVERTED R</td></tr>
            <tr><td>&#695;</td><td>02B7</td><td>MODIFIER LETTER SMALL W</td></tr>
            <tr><td>&#696;</td><td>02B8</td><td>MODIFIER LETTER SMALL Y</td></tr>
            <tr><td>&#697;</td><td>02B9</td><td>MODIFIER LETTER PRIME</td></tr>
            <tr><td>&#698;</td><td>02BA</td><td>MODIFIER LETTER DOUBLE PRIME</td></tr>
            <tr><td>&#699;</td><td>02BB</td><td>MODIFIER LETTER TURNED COMMA</td></tr>
            <tr><td>&#700;</td><td>02BC</td><td>MODIFIER LETTER APOSTROPHE</td></tr>
            <tr><td>&#701;</td><td>02BD</td><td>MODIFIER LETTER REVERSED COMMA</td></tr>
            <tr><td>&#702;</td><td>02BE</td><td>MODIFIER LETTER RIGHT HALF RING</td></tr>
            <tr><td>&#703;</td><td>02BF</td><td>MODIFIER LETTER LEFT HALF RING</td></tr>
            <tr><td>&#704;</td><td>02C0</td><td>MODIFIER LETTER GLOTTAL STOP</td></tr>
            <tr><td>&#705;</td><td>02C1</td><td>MODIFIER LETTER REVERSED GLOTTAL STOP</td></tr>
            <tr><td>&#706;</td><td>02C2</td><td>MODIFIER LETTER LEFT ARROWHEAD</td></tr>
            <tr><td>&#707;</td><td>02C3</td><td>MODIFIER LETTER RIGHT ARROWHEAD</td></tr>
            <tr><td>&#708;</td><td>02C4</td><td>MODIFIER LETTER UP ARROWHEAD</td></tr>
            <tr><td>&#709;</td><td>02C5</td><td>MODIFIER LETTER DOWN ARROWHEAD</td></tr>
            <tr><td>&#710;</td><td>02C6</td><td>MODIFIER LETTER CIRCUMFLEX ACCENT</td></tr>
            <tr><td>&#711;</td><td>02C7</td><td>CARON</td></tr>
            <tr><td>&#712;</td><td>02C8</td><td>MODIFIER LETTER VERTICAL LINE</td></tr>
            <tr><td>&#713;</td><td>02C9</td><td>MODIFIER LETTER MACRON</td></tr>
            <tr><td>&#714;</td><td>02CA</td><td>MODIFIER LETTER ACUTE ACCENT</td></tr>
            <tr><td>&#715;</td><td>02CB</td><td>MODIFIER LETTER GRAVE ACCENT</td></tr>
            <tr><td>&#716;</td><td>02CC</td><td>MODIFIER LETTER LOW VERTICAL LINE</td></tr>
            <tr><td>&#717;</td><td>02CD</td><td>MODIFIER LETTER LOW MACRON</td></tr>
            <tr><td>&#718;</td><td>02CE</td><td>MODIFIER LETTER LOW GRAVE ACCENT</td></tr>
            <tr><td>&#719;</td><td>02CF</td><td>MODIFIER LETTER LOW ACUTE ACCENT</td></tr>
            <tr><td>&#720;</td><td>02D0</td><td>MODIFIER LETTER TRIANGULAR COLON</td></tr>
            <tr><td>&#721;</td><td>02D1</td><td>MODIFIER LETTER HALF TRIANGULAR COLON</td></tr>
            <tr><td>&#722;</td><td>02D2</td><td>MODIFIER LETTER CENTRED RIGHT HALF RING</td></tr>
            <tr><td>&#723;</td><td>02D3</td><td>MODIFIER LETTER CENTRED LEFT HALF RING</td></tr>
            <tr><td>&#724;</td><td>02D4</td><td>MODIFIER LETTER UP TACK</td></tr>
            <tr><td>&#725;</td><td>02D5</td><td>MODIFIER LETTER DOWN TACK</td></tr>
            <tr><td>&#726;</td><td>02D6</td><td>MODIFIER LETTER PLUS SIGN</td></tr>
            <tr><td>&#727;</td><td>02D7</td><td>MODIFIER LETTER MINUS SIGN</td></tr>
            <tr><td>&#728;</td><td>02D8</td><td>BREVE</td></tr>
            <tr><td>&#729;</td><td>02D9</td><td>DOT ABOVE</td></tr>
            <tr><td>&#730;</td><td>02DA</td><td>RING ABOVE</td></tr>
            <tr><td>&#731;</td><td>02DB</td><td>OGONEK</td></tr>
            <tr><td>&#732;</td><td>02DC</td><td>SMALL TILDE</td></tr>
            <tr><td>&#733;</td><td>02DD</td><td>DOUBLE ACUTE ACCENT</td></tr>
            <tr><td>&#734;</td><td>02DE</td><td>MODIFIER LETTER RHOTIC HOOK</td></tr>
            <tr><td>&#735;</td><td>02DF</td><td>MODIFIER LETTER CROSS ACCENT</td></tr>
            <tr><td>&#736;</td><td>02E0</td><td>MODIFIER LETTER SMALL GAMMA</td></tr>
            <tr><td>&#737;</td><td>02E1</td><td>MODIFIER LETTER SMALL L</td></tr>
            <tr><td>&#738;</td><td>02E2</td><td>MODIFIER LETTER SMALL S</td></tr>
            <tr><td>&#739;</td><td>02E3</td><td>MODIFIER LETTER SMALL X</td></tr>
            <tr><td>&#740;</td><td>02E4</td><td>MODIFIER LETTER SMALL REVERSED GLOTTAL STOP</td></tr>
            <tr><td>&#741;</td><td>02E5</td><td>MODIFIER LETTER EXTRA-HIGH TONE BAR</td></tr>
            <tr><td>&#742;</td><td>02E6</td><td>MODIFIER LETTER HIGH TONE BAR</td></tr>
            <tr><td>&#743;</td><td>02E7</td><td>MODIFIER LETTER MID TONE BAR</td></tr>
            <tr><td>&#744;</td><td>02E8</td><td>MODIFIER LETTER LOW TONE BAR</td></tr>
            <tr><td>&#745;</td><td>02E9</td><td>MODIFIER LETTER EXTRA-LOW TONE BAR</td></tr>
            <tr><td>&#746;</td><td>02EA</td><td>MODIFIER LETTER YIN DEPARTING TONE MARK</td></tr>
            <tr><td>&#747;</td><td>02EB</td><td>MODIFIER LETTER YANG DEPARTING TONE MARK</td></tr>
            <tr><td>&#748;</td><td>02EC</td><td>MODIFIER LETTER VOICING</td></tr>
            <tr><td>&#749;</td><td>02ED</td><td>MODIFIER LETTER UNASPIRATED</td></tr>
            <tr><td>&#750;</td><td>02EE</td><td>MODIFIER LETTER DOUBLE APOSTROPHE</td></tr>
            <tr><td>&#751;</td><td>02EF</td><td>MODIFIER LETTER LOW DOWN ARROWHEAD</td></tr>
            <tr><td>&#752;</td><td>02F0</td><td>MODIFIER LETTER LOW UP ARROWHEAD</td></tr>
            <tr><td>&#753;</td><td>02F1</td><td>MODIFIER LETTER LOW LEFT ARROWHEAD</td></tr>
            <tr><td>&#754;</td><td>02F2</td><td>MODIFIER LETTER LOW RIGHT ARROWHEAD</td></tr>
            <tr><td>&#755;</td><td>02F3</td><td>MODIFIER LETTER LOW RING</td></tr>
            <tr><td>&#756;</td><td>02F4</td><td>MODIFIER LETTER MIDDLE GRAVE ACCENT</td></tr>
            <tr><td>&#757;</td><td>02F5</td><td>MODIFIER LETTER MIDDLE DOUBLE GRAVE ACCENT</td></tr>
            <tr><td>&#758;</td><td>02F6</td><td>MODIFIER LETTER MIDDLE DOUBLE ACUTE ACCENT</td></tr>
            <tr><td>&#759;</td><td>02F7</td><td>MODIFIER LETTER LOW TILDE</td></tr>
            <tr><td>&#760;</td><td>02F8</td><td>MODIFIER LETTER RAISED COLON</td></tr>
            <tr><td>&#761;</td><td>02F9</td><td>MODIFIER LETTER BEGIN HIGH TONE</td></tr>
            <tr><td>&#762;</td><td>02FA</td><td>MODIFIER LETTER END HIGH TONE</td></tr>
            <tr><td>&#763;</td><td>02FB</td><td>MODIFIER LETTER BEGIN LOW TONE</td></tr>
            <tr><td>&#764;</td><td>02FC</td><td>MODIFIER LETTER END LOW TONE</td></tr>
            <tr><td>&#765;</td><td>02FD</td><td>MODIFIER LETTER SHELF</td></tr>
            <tr><td>&#766;</td><td>02FE</td><td>MODIFIER LETTER OPEN SHELF</td></tr>
            <tr><td>&#767;</td><td>02FF</td><td>MODIFIER LETTER LOW LEFT ARROW</td></tr>
            <tr><td>o&#768;</td><td>0300</td><td>GRAVE ACCENT</td></tr>
            <tr><td>o&#769;</td><td>0301</td><td>ACUTE ACCENT</td></tr>
            <tr><td>o&#770;</td><td>0302</td><td>CIRCUMFLEX ACCENT</td></tr>
            <tr><td>o&#771;</td><td>0303</td><td>TILDE</td></tr>
            <tr><td>o&#772;</td><td>0304</td><td>MACRON</td></tr>
            <tr><td>o&#773;</td><td>0305</td><td>OVERLINE</td></tr>
            <tr><td>o&#774;</td><td>0306</td><td>BREVE</td></tr>
            <tr><td>o&#775;</td><td>0307</td><td>DOT ABOVE</td></tr>
            <tr><td>o&#776;</td><td>0308</td><td>DIAERESIS</td></tr>
            <tr><td>o&#777;</td><td>0309</td><td>HOOK ABOVE</td></tr>
            <tr><td>o&#778;</td><td>030A</td><td>RING ABOVE</td></tr>
            <tr><td>o&#779;</td><td>030B</td><td>DOUBLE ACUTE ACCENT</td></tr>
            <tr><td>o&#780;</td><td>030C</td><td>CARON</td></tr>
            <tr><td>o&#781;</td><td>030D</td><td>VERTICAL LINE ABOVE</td></tr>
            <tr><td>o&#782;</td><td>030E</td><td>DOUBLE VERTICAL LINE ABOVE</td></tr>
            <tr><td>o&#783;</td><td>030F</td><td>DOUBLE GRAVE ACCENT</td></tr>
            <tr><td>o&#784;</td><td>0310</td><td>CANDRABINDU</td></tr>
            <tr><td>o&#785;</td><td>0311</td><td>INVERTED BREVE</td></tr>
            <tr><td>o&#786;</td><td>0312</td><td>TURNED COMMA ABOVE</td></tr>
            <tr><td>o&#787;</td><td>0313</td><td>COMMA ABOVE</td></tr>
            <tr><td>o&#788;</td><td>0314</td><td>REVERSED COMMA ABOVE</td></tr>
            <tr><td>o&#789;</td><td>0315</td><td>COMMA ABOVE RIGHT</td></tr>
            <tr><td>o&#790;</td><td>0316</td><td>GRAVE ACCENT BELOW</td></tr>
            <tr><td>o&#791;</td><td>0317</td><td>ACUTE ACCENT BELOW</td></tr>
            <tr><td>o&#792;</td><td>0318</td><td>LEFT TACK BELOW</td></tr>
            <tr><td>o&#793;</td><td>0319</td><td>RIGHT TACK BELOW</td></tr>
            <tr><td>o&#794;</td><td>031A</td><td>LEFT ANGLE ABOVE</td></tr>
            <tr><td>o&#795;</td><td>031B</td><td>HORN</td></tr>
            <tr><td>o&#796;</td><td>031C</td><td>LEFT HALF RING BELOW</td></tr>
            <tr><td>o&#797;</td><td>031D</td><td>UP TACK BELOW</td></tr>
            <tr><td>o&#798;</td><td>031E</td><td>DOWN TACK BELOW</td></tr>
            <tr><td>o&#799;</td><td>031F</td><td>PLUS SIGN BELOW</td></tr>
            <tr><td>o&#800;</td><td>0320</td><td>MINUS SIGN BELOW</td></tr>
            <tr><td>o&#801;</td><td>0321</td><td>PALATALIZED HOOK BELOW</td></tr>
            <tr><td>o&#802;</td><td>0322</td><td>RETROFLEX HOOK BELOW</td></tr>
            <tr><td>o&#803;</td><td>0323</td><td>DOT BELOW</td></tr>
            <tr><td>o&#804;</td><td>0324</td><td>DIAERESIS BELOW</td></tr>
            <tr><td>o&#805;</td><td>0325</td><td>RING BELOW</td></tr>
            <tr><td>o&#806;</td><td>0326</td><td>COMMA BELOW</td></tr>
            <tr><td>o&#807;</td><td>0327</td><td>CEDILLA</td></tr>
            <tr><td>o&#808;</td><td>0328</td><td>OGONEK</td></tr>
            <tr><td>o&#809;</td><td>0329</td><td>VERTICAL LINE BELOW</td></tr>
            <tr><td>o&#810;</td><td>032A</td><td>BRIDGE BELOW</td></tr>
            <tr><td>o&#811;</td><td>032B</td><td>INVERTED DOUBLE ARCH BELOW</td></tr>
            <tr><td>o&#812;</td><td>032C</td><td>CARON BELOW</td></tr>
            <tr><td>o&#813;</td><td>032D</td><td>CIRCUMFLEX ACCENT BELOW</td></tr>
            <tr><td>o&#814;</td><td>032E</td><td>BREVE BELOW</td></tr>
            <tr><td>o&#815;</td><td>032F</td><td>INVERTED BREVE BELOW</td></tr>
            <tr><td>o&#816;</td><td>0330</td><td>TILDE BELOW</td></tr>
            <tr><td>o&#817;</td><td>0331</td><td>MACRON BELOW</td></tr>
            <tr><td>o&#818;</td><td>0332</td><td>LOW LINE</td></tr>
            <tr><td>o&#819;</td><td>0333</td><td>DOUBLE LOW LINE</td></tr>
            <tr><td>o&#820;</td><td>0334</td><td>TILDE OVERLAY</td></tr>
            <tr><td>o&#821;</td><td>0335</td><td>SHORT STROKE OVERLAY</td></tr>
            <tr><td>o&#822;</td><td>0336</td><td>LONG STROKE OVERLAY</td></tr>
            <tr><td>o&#823;</td><td>0337</td><td>SHORT SOLIDUS OVERLAY</td></tr>
            <tr><td>o&#824;</td><td>0338</td><td>LONG SOLIDUS OVERLAY</td></tr>
            <tr><td>o&#825;</td><td>0339</td><td>RIGHT HALF RING BELOW</td></tr>
            <tr><td>o&#826;</td><td>033A</td><td>INVERTED BRIDGE BELOW</td></tr>
            <tr><td>o&#827;</td><td>033B</td><td>SQUARE BELOW</td></tr>
            <tr><td>o&#828;</td><td>033C</td><td>SEAGULL BELOW</td></tr>
            <tr><td>o&#829;</td><td>033D</td><td>X ABOVE</td></tr>
            <tr><td>o&#830;</td><td>033E</td><td>VERTICAL TILDE</td></tr>
            <tr><td>o&#831;</td><td>033F</td><td>DOUBLE OVERLINE</td></tr>
            <tr><td>o&#832;</td><td>0340</td><td>GRAVE TONE MARK</td></tr>
            <tr><td>o&#833;</td><td>0341</td><td>ACUTE TONE MARK</td></tr>
            <tr><td>o&#834;</td><td>0342</td><td>GREEK PERISPOMENI (combined with theta)</td></tr>
            <tr><td>o&#835;</td><td>0343</td><td>GREEK KORONIS (combined with theta)</td></tr>
            <tr><td>o&#836;</td><td>0344</td><td>GREEK DIALYTIKA TONOS (combined with theta)</td></tr>
            <tr><td>o&#837;</td><td>0345</td><td>GREEK YPOGEGRAMMENI (combined with theta)</td></tr>
            <tr><td>o&#838;</td><td>0346</td><td>BRIDGE ABOVE</td></tr>
            <tr><td>o&#839;</td><td>0347</td><td>EQUALS SIGN BELOW</td></tr>
            <tr><td>o&#840;</td><td>0348</td><td>DOUBLE VERTICAL LINE BELOW</td></tr>
            <tr><td>o&#841;</td><td>0349</td><td>LEFT ANGLE BELOW</td></tr>
            <tr><td>o&#842;</td><td>034A</td><td>NOT TILDE ABOVE</td></tr>
            <tr><td>o&#843;</td><td>034B</td><td>HOMOTHETIC ABOVE</td></tr>
            <tr><td>o&#844;</td><td>034C</td><td>ALMOST EQUAL TO ABOVE</td></tr>
            <tr><td>o&#845;</td><td>034D</td><td>LEFT RIGHT ARROW BELOW</td></tr>
            <tr><td>o&#846;</td><td>034E</td><td>UPWARDS ARROW BELOW</td></tr>
            <tr><td>o&#847;</td><td>034F</td><td>GRAPHEME JOINER</td></tr>
            <tr><td>o&#848;</td><td>0350</td><td>RIGHT ARROWHEAD ABOVE</td></tr>
            <tr><td>o&#849;</td><td>0351</td><td>LEFT HALF RING ABOVE</td></tr>
            <tr><td>o&#850;</td><td>0352</td><td>FERMATA</td></tr>
            <tr><td>o&#851;</td><td>0353</td><td>X BELOW</td></tr>
            <tr><td>o&#852;</td><td>0354</td><td>LEFT ARROWHEAD BELOW</td></tr>
            <tr><td>o&#853;</td><td>0355</td><td>RIGHT ARROWHEAD BELOW</td></tr>
            <tr><td>o&#854;</td><td>0356</td><td>RIGHT ARROWHEAD AND UP ARROWHEAD BELOW</td></tr>
            <tr><td>o&#855;</td><td>0357</td><td>RIGHT HALF RING ABOVE</td></tr>
            <tr><td>o&#856;</td><td>0358</td><td>DOT ABOVE RIGHT</td></tr>
            <tr><td>o&#857;</td><td>0359</td><td>ASTERISK BELOW</td></tr>
            <tr><td>o&#858;</td><td>035A</td><td>DOUBLE RING BELOW</td></tr>
            <tr><td>o&#859;</td><td>035B</td><td>ZIGZAG ABOVE</td></tr>
            <tr><td>&#860;o</td><td>035C</td><td>DOUBLE BREVE BELOW</td></tr>
            <tr><td>&#861;o</td><td>035D</td><td>DOUBLE BREVE</td></tr>
            <tr><td>&#862;o</td><td>035E</td><td>DOUBLE MACRON</td></tr>
            <tr><td>&#863;o</td><td>035F</td><td>DOUBLE MACRON BELOW</td></tr>
            <tr><td>&#864;o</td><td>0360</td><td>DOUBLE TILDE</td></tr>
            <tr><td>&#865;o</td><td>0361</td><td>DOUBLE INVERTED BREVE</td></tr>
            <tr><td>&#866;o</td><td>0362</td><td>DOUBLE RIGHTWARDS ARROW BELOW</td></tr>
            <tr><td>o&#867;</td><td>0363</td><td>LATIN SMALL LETTER A</td></tr>
            <tr><td>o&#868;</td><td>0364</td><td>LATIN SMALL LETTER E</td></tr>
            <tr><td>o&#869;</td><td>0365</td><td>LATIN SMALL LETTER I</td></tr>
            <tr><td>o&#870;</td><td>0366</td><td>LATIN SMALL LETTER O</td></tr>
            <tr><td>o&#871;</td><td>0367</td><td>LATIN SMALL LETTER U</td></tr>
            <tr><td>o&#872;</td><td>0368</td><td>LATIN SMALL LETTER C</td></tr>
            <tr><td>o&#873;</td><td>0369</td><td>LATIN SMALL LETTER D</td></tr>
            <tr><td>o&#874;</td><td>036A</td><td>LATIN SMALL LETTER H</td></tr>
            <tr><td>o&#875;</td><td>036B</td><td>LATIN SMALL LETTER M</td></tr>
            <tr><td>o&#876;</td><td>036C</td><td>LATIN SMALL LETTER R</td></tr>
            <tr><td>o&#877;</td><td>036D</td><td>LATIN SMALL LETTER T</td></tr>
            <tr><td>o&#878;</td><td>036E</td><td>LATIN SMALL LETTER V</td></tr>
            <tr><td>o&#879;</td><td>036F</td><td>LATIN SMALL LETTER X</td></tr>
            <tr><td>&#880;</td><td>0370</td><td>GREEK CAPITAL LETTER HETA</td></tr>
            <tr><td>&#881;</td><td>0371</td><td>GREEK SMALL LETTER HETA</td></tr>
            <tr><td>&#882;</td><td>0372</td><td>GREEK CAPITAL LETTER ARCHAIC SAMPI</td></tr>
            <tr><td>&#883;</td><td>0373</td><td>GREEK SMALL LETTER ARCHAIC SAMPI</td></tr>
            <tr><td>&#884;</td><td>0374</td><td>GREEK NUMERAL SIGN</td></tr>
            <tr><td>&#885;</td><td>0375</td><td>GREEK LOWER NUMERAL SIGN</td></tr>
            <tr><td>&#886;</td><td>0376</td><td>GREEK CAPITAL LETTER PAMPHYLIAN DIGAMMA</td></tr>
            <tr><td>&#887;</td><td>0377</td><td>GREEK SMALL LETTER PAMPHYLIAN DIGAMMA</td></tr>
            <tr><td>&#890;</td><td>037A</td><td>GREEK YPOGEGRAMMENI</td></tr>
            <tr><td>&#891;</td><td>037B</td><td>GREEK SMALL REVERSED LUNATE SIGMA SYMBOL</td></tr>
            <tr><td>&#892;</td><td>037C</td><td>GREEK SMALL DOTTED LUNATE SIGMA SYMBOL</td></tr>
            <tr><td>&#893;</td><td>037D</td><td>GREEK SMALL REVERSED DOTTED LUNATE SIGMA SYMBOL</td></tr>
            <tr><td>&#894;</td><td>037E</td><td>GREEK QUESTION MARK</td></tr>
            <tr><td>&#900;</td><td>0384</td><td>GREEK TONOS</td></tr>
            <tr><td>&#901;</td><td>0385</td><td>GREEK DIALYTIKA TONOS</td></tr>
            <tr><td>&#902;</td><td>0386</td><td>GREEK CAPITAL LETTER ALPHA WITH TONOS</td></tr>
            <tr><td>&#903;</td><td>0387</td><td>GREEK ANO TELEIA</td></tr>
            <tr><td>&#904;</td><td>0388</td><td>GREEK CAPITAL LETTER EPSILON WITH TONOS</td></tr>
            <tr><td>&#905;</td><td>0389</td><td>GREEK CAPITAL LETTER ETA WITH TONOS</td></tr>
            <tr><td>&#906;</td><td>038A</td><td>GREEK CAPITAL LETTER IOTA WITH TONOS</td></tr>
            <tr><td>&#908;</td><td>038C</td><td>GREEK CAPITAL LETTER OMICRON WITH TONOS</td></tr>
            <tr><td>&#910;</td><td>038E</td><td>GREEK CAPITAL LETTER UPSILON WITH TONOS</td></tr>
            <tr><td>&#911;</td><td>038F</td><td>GREEK CAPITAL LETTER OMEGA WITH TONOS</td></tr>
            <tr><td>&#912;</td><td>0390</td><td>GREEK SMALL LETTER IOTA WITH DIALYTIKA AND TONOS</td></tr>
            <tr><td>&#913;</td><td>0391</td><td>GREEK CAPITAL LETTER ALPHA</td></tr>
            <tr><td>&#914;</td><td>0392</td><td>GREEK CAPITAL LETTER BETA</td></tr>
            <tr><td>&#915;</td><td>0393</td><td>GREEK CAPITAL LETTER GAMMA</td></tr>
            <tr><td>&#916;</td><td>0394</td><td>GREEK CAPITAL LETTER DELTA</td></tr>
            <tr><td>&#917;</td><td>0395</td><td>GREEK CAPITAL LETTER EPSILON</td></tr>
            <tr><td>&#918;</td><td>0396</td><td>GREEK CAPITAL LETTER ZETA</td></tr>
            <tr><td>&#919;</td><td>0397</td><td>GREEK CAPITAL LETTER ETA</td></tr>
            <tr><td>&#920;</td><td>0398</td><td>GREEK CAPITAL LETTER THETA</td></tr>
            <tr><td>&#921;</td><td>0399</td><td>GREEK CAPITAL LETTER IOTA</td></tr>
            <tr><td>&#922;</td><td>039A</td><td>GREEK CAPITAL LETTER KAPPA</td></tr>
            <tr><td>&#923;</td><td>039B</td><td>GREEK CAPITAL LETTER LAMBDA</td></tr>
            <tr><td>&#924;</td><td>039C</td><td>GREEK CAPITAL LETTER MU</td></tr>
            <tr><td>&#925;</td><td>039D</td><td>GREEK CAPITAL LETTER NU</td></tr>
            <tr><td>&#926;</td><td>039E</td><td>GREEK CAPITAL LETTER XI</td></tr>
            <tr><td>&#927;</td><td>039F</td><td>GREEK CAPITAL LETTER OMICRON</td></tr>
            <tr><td>&#928;</td><td>03A0</td><td>GREEK CAPITAL LETTER PI</td></tr>
            <tr><td>&#929;</td><td>03A1</td><td>GREEK CAPITAL LETTER RHO</td></tr>
            <tr><td>&#931;</td><td>03A3</td><td>GREEK CAPITAL LETTER SIGMA</td></tr>
            <tr><td>&#932;</td><td>03A4</td><td>GREEK CAPITAL LETTER TAU</td></tr>
            <tr><td>&#933;</td><td>03A5</td><td>GREEK CAPITAL LETTER UPSILON</td></tr>
            <tr><td>&#934;</td><td>03A6</td><td>GREEK CAPITAL LETTER PHI</td></tr>
            <tr><td>&#935;</td><td>03A7</td><td>GREEK CAPITAL LETTER CHI</td></tr>
            <tr><td>&#936;</td><td>03A8</td><td>GREEK CAPITAL LETTER PSI</td></tr>
            <tr><td>&#937;</td><td>03A9</td><td>GREEK CAPITAL LETTER OMEGA</td></tr>
            <tr><td>&#938;</td><td>03AA</td><td>GREEK CAPITAL LETTER IOTA WITH DIALYTIKA</td></tr>
            <tr><td>&#939;</td><td>03AB</td><td>GREEK CAPITAL LETTER UPSILON WITH DIALYTIKA</td></tr>
            <tr><td>&#940;</td><td>03AC</td><td>GREEK SMALL LETTER ALPHA WITH TONOS</td></tr>
            <tr><td>&#941;</td><td>03AD</td><td>GREEK SMALL LETTER EPSILON WITH TONOS</td></tr>
            <tr><td>&#942;</td><td>03AE</td><td>GREEK SMALL LETTER ETA WITH TONOS</td></tr>
            <tr><td>&#943;</td><td>03AF</td><td>GREEK SMALL LETTER IOTA WITH TONOS</td></tr>
            <tr><td>&#944;</td><td>03B0</td><td>GREEK SMALL LETTER UPSILON WITH DIALYTIKA AND TONOS</td></tr>
            <tr><td>&#945;</td><td>03B1</td><td>GREEK SMALL LETTER ALPHA</td></tr>
            <tr><td>&#946;</td><td>03B2</td><td>GREEK SMALL LETTER BETA</td></tr>
            <tr><td>&#947;</td><td>03B3</td><td>GREEK SMALL LETTER GAMMA</td></tr>
            <tr><td>&#948;</td><td>03B4</td><td>GREEK SMALL LETTER DELTA</td></tr>
            <tr><td>&#949;</td><td>03B5</td><td>GREEK SMALL LETTER EPSILON</td></tr>
            <tr><td>&#950;</td><td>03B6</td><td>GREEK SMALL LETTER ZETA</td></tr>
            <tr><td>&#951;</td><td>03B7</td><td>GREEK SMALL LETTER ETA</td></tr>
            <tr><td>&#952;</td><td>03B8</td><td>GREEK SMALL LETTER THETA</td></tr>
            <tr><td>&#953;</td><td>03B9</td><td>GREEK SMALL LETTER IOTA</td></tr>
            <tr><td>&#954;</td><td>03BA</td><td>GREEK SMALL LETTER KAPPA</td></tr>
            <tr><td>&#955;</td><td>03BB</td><td>GREEK SMALL LETTER LAMBDA</td></tr>
            <tr><td>&#956;</td><td>03BC</td><td>GREEK SMALL LETTER MU</td></tr>
            <tr><td>&#957;</td><td>03BD</td><td>GREEK SMALL LETTER NU</td></tr>
            <tr><td>&#958;</td><td>03BE</td><td>GREEK SMALL LETTER XI</td></tr>
            <tr><td>&#959;</td><td>03BF</td><td>GREEK SMALL LETTER OMICRON</td></tr>
            <tr><td>&#960;</td><td>03C0</td><td>GREEK SMALL LETTER PI</td></tr>
            <tr><td>&#961;</td><td>03C1</td><td>GREEK SMALL LETTER RHO</td></tr>
            <tr><td>&#962;</td><td>03C2</td><td>GREEK SMALL LETTER FINAL SIGMA</td></tr>
            <tr><td>&#963;</td><td>03C3</td><td>GREEK SMALL LETTER SIGMA</td></tr>
            <tr><td>&#964;</td><td>03C4</td><td>GREEK SMALL LETTER TAU</td></tr>
            <tr><td>&#965;</td><td>03C5</td><td>GREEK SMALL LETTER UPSILON</td></tr>
            <tr><td>&#966;</td><td>03C6</td><td>GREEK SMALL LETTER PHI</td></tr>
            <tr><td>&#967;</td><td>03C7</td><td>GREEK SMALL LETTER CHI</td></tr>
            <tr><td>&#968;</td><td>03C8</td><td>GREEK SMALL LETTER PSI</td></tr>
            <tr><td>&#969;</td><td>03C9</td><td>GREEK SMALL LETTER OMEGA</td></tr>
            <tr><td>&#970;</td><td>03CA</td><td>GREEK SMALL LETTER IOTA WITH DIALYTIKA</td></tr>
            <tr><td>&#971;</td><td>03CB</td><td>GREEK SMALL LETTER UPSILON WITH DIALYTIKA</td></tr>
            <tr><td>&#972;</td><td>03CC</td><td>GREEK SMALL LETTER OMICRON WITH TONOS</td></tr>
            <tr><td>&#973;</td><td>03CD</td><td>GREEK SMALL LETTER UPSILON WITH TONOS</td></tr>
            <tr><td>&#974;</td><td>03CE</td><td>GREEK SMALL LETTER OMEGA WITH TONOS</td></tr>
            <tr><td>&#975;</td><td>03CF</td><td>GREEK CAPITAL KAI SYMBOL</td></tr>
            <tr><td>&#976;</td><td>03D0</td><td>GREEK BETA SYMBOL</td></tr>
            <tr><td>&#977;</td><td>03D1</td><td>GREEK THETA SYMBOL</td></tr>
            <tr><td>&#978;</td><td>03D2</td><td>GREEK UPSILON WITH HOOK SYMBOL</td></tr>
            <tr><td>&#979;</td><td>03D3</td><td>GREEK UPSILON WITH ACUTE AND HOOK SYMBOL</td></tr>
            <tr><td>&#980;</td><td>03D4</td><td>GREEK UPSILON WITH DIAERESIS AND HOOK SYMBOL</td></tr>
            <tr><td>&#981;</td><td>03D5</td><td>GREEK PHI SYMBOL</td></tr>
            <tr><td>&#982;</td><td>03D6</td><td>GREEK PI SYMBOL</td></tr>
            <tr><td>&#983;</td><td>03D7</td><td>GREEK KAI SYMBOL</td></tr>
            <tr><td>&#984;</td><td>03D8</td><td>GREEK LETTER ARCHAIC KOPPA</td></tr>
            <tr><td>&#985;</td><td>03D9</td><td>GREEK SMALL LETTER ARCHAIC KOPPA</td></tr>
            <tr><td>&#986;</td><td>03DA</td><td>GREEK LETTER STIGMA</td></tr>
            <tr><td>&#987;</td><td>03DB</td><td>GREEK SMALL LETTER STIGMA</td></tr>
            <tr><td>&#988;</td><td>03DC</td><td>GREEK LETTER DIGAMMA</td></tr>
            <tr><td>&#989;</td><td>03DD</td><td>GREEK SMALL LETTER DIGAMMA</td></tr>
            <tr><td>&#990;</td><td>03DE</td><td>GREEK LETTER KOPPA</td></tr>
            <tr><td>&#991;</td><td>03DF</td><td>GREEK SMALL LETTER KOPPA</td></tr>
            <tr><td>&#992;</td><td>03E0</td><td>GREEK LETTER SAMPI</td></tr>
            <tr><td>&#993;</td><td>03E1</td><td>GREEK SMALL LETTER SAMPI</td></tr>
            <tr><td>&#994;</td><td>03E2</td><td>COPTIC CAPITAL LETTER SHEI</td></tr>
            <tr><td>&#995;</td><td>03E3</td><td>COPTIC SMALL LETTER SHEI</td></tr>
            <tr><td>&#996;</td><td>03E4</td><td>COPTIC CAPITAL LETTER FEI</td></tr>
            <tr><td>&#997;</td><td>03E5</td><td>COPTIC SMALL LETTER FEI</td></tr>
            <tr><td>&#998;</td><td>03E6</td><td>COPTIC CAPITAL LETTER KHEI</td></tr>
            <tr><td>&#999;</td><td>03E7</td><td>COPTIC SMALL LETTER KHEI</td></tr>
            <tr><td>&#1000;</td><td>03E8</td><td>COPTIC CAPITAL LETTER HORI</td></tr>
            <tr><td>&#1001;</td><td>03E9</td><td>COPTIC SMALL LETTER HORI</td></tr>
            <tr><td>&#1002;</td><td>03EA</td><td>COPTIC CAPITAL LETTER GANGIA</td></tr>
            <tr><td>&#1003;</td><td>03EB</td><td>COPTIC SMALL LETTER GANGIA</td></tr>
            <tr><td>&#1004;</td><td>03EC</td><td>COPTIC CAPITAL LETTER SHIMA</td></tr>
            <tr><td>&#1005;</td><td>03ED</td><td>COPTIC SMALL LETTER SHIMA</td></tr>
            <tr><td>&#1006;</td><td>03EE</td><td>COPTIC CAPITAL LETTER DEI</td></tr>
            <tr><td>&#1007;</td><td>03EF</td><td>COPTIC SMALL LETTER DEI</td></tr>
            <tr><td>&#1008;</td><td>03F0</td><td>GREEK KAPPA SYMBOL</td></tr>
            <tr><td>&#1009;</td><td>03F1</td><td>GREEK RHO SYMBOL</td></tr>
            <tr><td>&#1010;</td><td>03F2</td><td>GREEK LUNATE SIGMA SYMBOL</td></tr>
            <tr><td>&#1011;</td><td>03F3</td><td>GREEK LETTER YOT</td></tr>
            <tr><td>&#1012;</td><td>03F4</td><td>GREEK CAPITAL THETA SYMBOL</td></tr>
            <tr><td>&#1013;</td><td>03F5</td><td>GREEK LUNATE EPSILON SYMBOL</td></tr>
            <tr><td>&#1014;</td><td>03F6</td><td>GREEK REVERSED LUNATE EPSILON SYMBOL</td></tr>
            <tr><td>&#1015;</td><td>03F7</td><td>GREEK CAPITAL LETTER SHO</td></tr>
            <tr><td>&#1016;</td><td>03F8</td><td>GREEK SMALL LETTER SHO</td></tr>
            <tr><td>&#1017;</td><td>03F9</td><td>GREEK CAPITAL LUNATE SIGMA SYMBOL</td></tr>
            <tr><td>&#1018;</td><td>03FA</td><td>GREEK CAPITAL LETTER SAN</td></tr>
            <tr><td>&#1019;</td><td>03FB</td><td>GREEK SMALL LETTER SAN</td></tr>
            <tr><td>&#1020;</td><td>03FC</td><td>GREEK RHO WITH STROKE SYMBOL</td></tr>
            <tr><td>&#1021;</td><td>03FD</td><td>GREEK CAPITAL REVERSED LUNATE SIGMA SYMBOL</td></tr>
            <tr><td>&#1022;</td><td>03FE</td><td>GREEK CAPITAL DOTTED LUNATE SIGMA SYMBOL</td></tr>
            <tr><td>&#1023;</td><td>03FF</td><td>GREEK CAPITAL REVERSED DOTTED LUNATE SIGMA SYMBOL</td></tr>
            <tr><td>&#1024;</td><td>0400</td><td>CYRILLIC CAPITAL LETTER IE WITH GRAVE</td></tr>
            <tr><td>&#1025;</td><td>0401</td><td>CYRILLIC CAPITAL LETTER IO</td></tr>
            <tr><td>&#1026;</td><td>0402</td><td>CYRILLIC CAPITAL LETTER DJE</td></tr>
            <tr><td>&#1027;</td><td>0403</td><td>CYRILLIC CAPITAL LETTER GJE</td></tr>
            <tr><td>&#1028;</td><td>0404</td><td>CYRILLIC CAPITAL LETTER UKRAINIAN IE</td></tr>
            <tr><td>&#1029;</td><td>0405</td><td>CYRILLIC CAPITAL LETTER DZE</td></tr>
            <tr><td>&#1030;</td><td>0406</td><td>CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I</td></tr>
            <tr><td>&#1031;</td><td>0407</td><td>CYRILLIC CAPITAL LETTER YI</td></tr>
            <tr><td>&#1032;</td><td>0408</td><td>CYRILLIC CAPITAL LETTER JE</td></tr>
            <tr><td>&#1033;</td><td>0409</td><td>CYRILLIC CAPITAL LETTER LJE</td></tr>
            <tr><td>&#1034;</td><td>040A</td><td>CYRILLIC CAPITAL LETTER NJE</td></tr>
            <tr><td>&#1035;</td><td>040B</td><td>CYRILLIC CAPITAL LETTER TSHE</td></tr>
            <tr><td>&#1036;</td><td>040C</td><td>CYRILLIC CAPITAL LETTER KJE</td></tr>
            <tr><td>&#1037;</td><td>040D</td><td>CYRILLIC CAPITAL LETTER I WITH GRAVE</td></tr>
            <tr><td>&#1038;</td><td>040E</td><td>CYRILLIC CAPITAL LETTER SHORT U</td></tr>
            <tr><td>&#1039;</td><td>040F</td><td>CYRILLIC CAPITAL LETTER DZHE</td></tr>
            <tr><td>&#1040;</td><td>0410</td><td>CYRILLIC CAPITAL LETTER A</td></tr>
            <tr><td>&#1041;</td><td>0411</td><td>CYRILLIC CAPITAL LETTER BE</td></tr>
            <tr><td>&#1042;</td><td>0412</td><td>CYRILLIC CAPITAL LETTER VE</td></tr>
            <tr><td>&#1043;</td><td>0413</td><td>CYRILLIC CAPITAL LETTER GHE</td></tr>
            <tr><td>&#1044;</td><td>0414</td><td>CYRILLIC CAPITAL LETTER DE</td></tr>
            <tr><td>&#1045;</td><td>0415</td><td>CYRILLIC CAPITAL LETTER IE</td></tr>
            <tr><td>&#1046;</td><td>0416</td><td>CYRILLIC CAPITAL LETTER ZHE</td></tr>
            <tr><td>&#1047;</td><td>0417</td><td>CYRILLIC CAPITAL LETTER ZE</td></tr>
            <tr><td>&#1048;</td><td>0418</td><td>CYRILLIC CAPITAL LETTER I</td></tr>
            <tr><td>&#1049;</td><td>0419</td><td>CYRILLIC CAPITAL LETTER SHORT I</td></tr>
            <tr><td>&#1050;</td><td>041A</td><td>CYRILLIC CAPITAL LETTER KA</td></tr>
            <tr><td>&#1051;</td><td>041B</td><td>CYRILLIC CAPITAL LETTER EL</td></tr>
            <tr><td>&#1052;</td><td>041C</td><td>CYRILLIC CAPITAL LETTER EM</td></tr>
            <tr><td>&#1053;</td><td>041D</td><td>CYRILLIC CAPITAL LETTER EN</td></tr>
            <tr><td>&#1054;</td><td>041E</td><td>CYRILLIC CAPITAL LETTER O</td></tr>
            <tr><td>&#1055;</td><td>041F</td><td>CYRILLIC CAPITAL LETTER PE</td></tr>
            <tr><td>&#1056;</td><td>0420</td><td>CYRILLIC CAPITAL LETTER ER</td></tr>
            <tr><td>&#1057;</td><td>0421</td><td>CYRILLIC CAPITAL LETTER ES</td></tr>
            <tr><td>&#1058;</td><td>0422</td><td>CYRILLIC CAPITAL LETTER TE</td></tr>
            <tr><td>&#1059;</td><td>0423</td><td>CYRILLIC CAPITAL LETTER U</td></tr>
            <tr><td>&#1060;</td><td>0424</td><td>CYRILLIC CAPITAL LETTER EF</td></tr>
            <tr><td>&#1061;</td><td>0425</td><td>CYRILLIC CAPITAL LETTER HA</td></tr>
            <tr><td>&#1062;</td><td>0426</td><td>CYRILLIC CAPITAL LETTER TSE</td></tr>
            <tr><td>&#1063;</td><td>0427</td><td>CYRILLIC CAPITAL LETTER CHE</td></tr>
            <tr><td>&#1064;</td><td>0428</td><td>CYRILLIC CAPITAL LETTER SHA</td></tr>
            <tr><td>&#1065;</td><td>0429</td><td>CYRILLIC CAPITAL LETTER SHCHA</td></tr>
            <tr><td>&#1066;</td><td>042A</td><td>CYRILLIC CAPITAL LETTER HARD SIGN</td></tr>
            <tr><td>&#1067;</td><td>042B</td><td>CYRILLIC CAPITAL LETTER YERU</td></tr>
            <tr><td>&#1068;</td><td>042C</td><td>CYRILLIC CAPITAL LETTER SOFT SIGN</td></tr>
            <tr><td>&#1069;</td><td>042D</td><td>CYRILLIC CAPITAL LETTER E</td></tr>
            <tr><td>&#1070;</td><td>042E</td><td>CYRILLIC CAPITAL LETTER YU</td></tr>
            <tr><td>&#1071;</td><td>042F</td><td>CYRILLIC CAPITAL LETTER YA</td></tr>
            <tr><td>&#1072;</td><td>0430</td><td>CYRILLIC SMALL LETTER A</td></tr>
            <tr><td>&#1073;</td><td>0431</td><td>CYRILLIC SMALL LETTER BE</td></tr>
            <tr><td>&#1074;</td><td>0432</td><td>CYRILLIC SMALL LETTER VE</td></tr>
            <tr><td>&#1075;</td><td>0433</td><td>CYRILLIC SMALL LETTER GHE</td></tr>
            <tr><td>&#1076;</td><td>0434</td><td>CYRILLIC SMALL LETTER DE</td></tr>
            <tr><td>&#1077;</td><td>0435</td><td>CYRILLIC SMALL LETTER IE</td></tr>
            <tr><td>&#1078;</td><td>0436</td><td>CYRILLIC SMALL LETTER ZHE</td></tr>
            <tr><td>&#1079;</td><td>0437</td><td>CYRILLIC SMALL LETTER ZE</td></tr>
            <tr><td>&#1080;</td><td>0438</td><td>CYRILLIC SMALL LETTER I</td></tr>
            <tr><td>&#1081;</td><td>0439</td><td>CYRILLIC SMALL LETTER SHORT I</td></tr>
            <tr><td>&#1082;</td><td>043A</td><td>CYRILLIC SMALL LETTER KA</td></tr>
            <tr><td>&#1083;</td><td>043B</td><td>CYRILLIC SMALL LETTER EL</td></tr>
            <tr><td>&#1084;</td><td>043C</td><td>CYRILLIC SMALL LETTER EM</td></tr>
            <tr><td>&#1085;</td><td>043D</td><td>CYRILLIC SMALL LETTER EN</td></tr>
            <tr><td>&#1086;</td><td>043E</td><td>CYRILLIC SMALL LETTER O</td></tr>
            <tr><td>&#1087;</td><td>043F</td><td>CYRILLIC SMALL LETTER PE</td></tr>
            <tr><td>&#1088;</td><td>0440</td><td>CYRILLIC SMALL LETTER ER</td></tr>
            <tr><td>&#1089;</td><td>0441</td><td>CYRILLIC SMALL LETTER ES</td></tr>
            <tr><td>&#1090;</td><td>0442</td><td>CYRILLIC SMALL LETTER TE</td></tr>
            <tr><td>&#1091;</td><td>0443</td><td>CYRILLIC SMALL LETTER U</td></tr>
            <tr><td>&#1092;</td><td>0444</td><td>CYRILLIC SMALL LETTER EF</td></tr>
            <tr><td>&#1093;</td><td>0445</td><td>CYRILLIC SMALL LETTER HA</td></tr>
            <tr><td>&#1094;</td><td>0446</td><td>CYRILLIC SMALL LETTER TSE</td></tr>
            <tr><td>&#1095;</td><td>0447</td><td>CYRILLIC SMALL LETTER CHE</td></tr>
            <tr><td>&#1096;</td><td>0448</td><td>CYRILLIC SMALL LETTER SHA</td></tr>
            <tr><td>&#1097;</td><td>0449</td><td>CYRILLIC SMALL LETTER SHCHA</td></tr>
            <tr><td>&#1098;</td><td>044A</td><td>CYRILLIC SMALL LETTER HARD SIGN</td></tr>
            <tr><td>&#1099;</td><td>044B</td><td>CYRILLIC SMALL LETTER YERU</td></tr>
            <tr><td>&#1100;</td><td>044C</td><td>CYRILLIC SMALL LETTER SOFT SIGN</td></tr>
            <tr><td>&#1101;</td><td>044D</td><td>CYRILLIC SMALL LETTER E</td></tr>
            <tr><td>&#1102;</td><td>044E</td><td>CYRILLIC SMALL LETTER YU</td></tr>
            <tr><td>&#1103;</td><td>044F</td><td>CYRILLIC SMALL LETTER YA</td></tr>
            <tr><td>&#1104;</td><td>0450</td><td>CYRILLIC SMALL LETTER IE WITH GRAVE</td></tr>
            <tr><td>&#1105;</td><td>0451</td><td>CYRILLIC SMALL LETTER IO</td></tr>
            <tr><td>&#1106;</td><td>0452</td><td>CYRILLIC SMALL LETTER DJE</td></tr>
            <tr><td>&#1107;</td><td>0453</td><td>CYRILLIC SMALL LETTER GJE</td></tr>
            <tr><td>&#1108;</td><td>0454</td><td>CYRILLIC SMALL LETTER UKRAINIAN IE</td></tr>
            <tr><td>&#1109;</td><td>0455</td><td>CYRILLIC SMALL LETTER DZE</td></tr>
            <tr><td>&#1110;</td><td>0456</td><td>CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I</td></tr>
            <tr><td>&#1111;</td><td>0457</td><td>CYRILLIC SMALL LETTER YI</td></tr>
            <tr><td>&#1112;</td><td>0458</td><td>CYRILLIC SMALL LETTER JE</td></tr>
            <tr><td>&#1113;</td><td>0459</td><td>CYRILLIC SMALL LETTER LJE</td></tr>
            <tr><td>&#1114;</td><td>045A</td><td>CYRILLIC SMALL LETTER NJE</td></tr>
            <tr><td>&#1115;</td><td>045B</td><td>CYRILLIC SMALL LETTER TSHE</td></tr>
            <tr><td>&#1116;</td><td>045C</td><td>CYRILLIC SMALL LETTER KJE</td></tr>
            <tr><td>&#1117;</td><td>045D</td><td>CYRILLIC SMALL LETTER I WITH GRAVE</td></tr>
            <tr><td>&#1118;</td><td>045E</td><td>CYRILLIC SMALL LETTER SHORT U</td></tr>
            <tr><td>&#1119;</td><td>045F</td><td>CYRILLIC SMALL LETTER DZHE</td></tr>
            <tr><td>&#1120;</td><td>0460</td><td>CYRILLIC CAPITAL LETTER OMEGA</td></tr>
            <tr><td>&#1121;</td><td>0461</td><td>CYRILLIC SMALL LETTER OMEGA</td></tr>
            <tr><td>&#1122;</td><td>0462</td><td>CYRILLIC CAPITAL LETTER YAT</td></tr>
            <tr><td>&#1123;</td><td>0463</td><td>CYRILLIC SMALL LETTER YAT</td></tr>
            <tr><td>&#1124;</td><td>0464</td><td>CYRILLIC CAPITAL LETTER IOTIFIED E</td></tr>
            <tr><td>&#1125;</td><td>0465</td><td>CYRILLIC SMALL LETTER IOTIFIED E</td></tr>
            <tr><td>&#1126;</td><td>0466</td><td>CYRILLIC CAPITAL LETTER LITTLE YUS</td></tr>
            <tr><td>&#1127;</td><td>0467</td><td>CYRILLIC SMALL LETTER LITTLE YUS</td></tr>
            <tr><td>&#1128;</td><td>0468</td><td>CYRILLIC CAPITAL LETTER IOTIFIED LITTLE YUS</td></tr>
            <tr><td>&#1129;</td><td>0469</td><td>CYRILLIC SMALL LETTER IOTIFIED LITTLE YUS</td></tr>
            <tr><td>&#1130;</td><td>046A</td><td>CYRILLIC CAPITAL LETTER BIG YUS</td></tr>
            <tr><td>&#1131;</td><td>046B</td><td>CYRILLIC SMALL LETTER BIG YUS</td></tr>
            <tr><td>&#1132;</td><td>046C</td><td>CYRILLIC CAPITAL LETTER IOTIFIED BIG YUS</td></tr>
            <tr><td>&#1133;</td><td>046D</td><td>CYRILLIC SMALL LETTER IOTIFIED BIG YUS</td></tr>
            <tr><td>&#1134;</td><td>046E</td><td>CYRILLIC CAPITAL LETTER KSI</td></tr>
            <tr><td>&#1135;</td><td>046F</td><td>CYRILLIC SMALL LETTER KSI</td></tr>
            <tr><td>&#1136;</td><td>0470</td><td>CYRILLIC CAPITAL LETTER PSI</td></tr>
            <tr><td>&#1137;</td><td>0471</td><td>CYRILLIC SMALL LETTER PSI</td></tr>
            <tr><td>&#1138;</td><td>0472</td><td>CYRILLIC CAPITAL LETTER FITA</td></tr>
            <tr><td>&#1139;</td><td>0473</td><td>CYRILLIC SMALL LETTER FITA</td></tr>
            <tr><td>&#1140;</td><td>0474</td><td>CYRILLIC CAPITAL LETTER IZHITSA</td></tr>
            <tr><td>&#1141;</td><td>0475</td><td>CYRILLIC SMALL LETTER IZHITSA</td></tr>
            <tr><td>&#1142;</td><td>0476</td><td>CYRILLIC CAPITAL LETTER IZHITSA WITH DOUBLE GRAVE ACCENT</td></tr>
            <tr><td>&#1143;</td><td>0477</td><td>CYRILLIC SMALL LETTER IZHITSA WITH DOUBLE GRAVE ACCENT</td></tr>
            <tr><td>&#1144;</td><td>0478</td><td>CYRILLIC CAPITAL LETTER UK</td></tr>
            <tr><td>&#1145;</td><td>0479</td><td>CYRILLIC SMALL LETTER UK</td></tr>
            <tr><td>&#1146;</td><td>047A</td><td>CYRILLIC CAPITAL LETTER ROUND OMEGA</td></tr>
            <tr><td>&#1147;</td><td>047B</td><td>CYRILLIC SMALL LETTER ROUND OMEGA</td></tr>
            <tr><td>&#1148;</td><td>047C</td><td>CYRILLIC CAPITAL LETTER OMEGA WITH TITLO</td></tr>
            <tr><td>&#1149;</td><td>047D</td><td>CYRILLIC SMALL LETTER OMEGA WITH TITLO</td></tr>
            <tr><td>&#1150;</td><td>047E</td><td>CYRILLIC CAPITAL LETTER OT</td></tr>
            <tr><td>&#1151;</td><td>047F</td><td>CYRILLIC SMALL LETTER OT</td></tr>
            <tr><td>&#1152;</td><td>0480</td><td>CYRILLIC CAPITAL LETTER KOPPA</td></tr>
            <tr><td>&#1153;</td><td>0481</td><td>CYRILLIC SMALL LETTER KOPPA</td></tr>
            <tr><td>&#1154;</td><td>0482</td><td>CYRILLIC THOUSANDS SIGN</td></tr>
            <tr><td>&#1086;&#1155;</td><td>0483</td><td>COMBINING CYRILLIC TITLO (combined with &#1086;)</td></tr>
            <tr><td>&#1086;&#1156;</td><td>0484</td><td>COMBINING CYRILLIC PALATALIZATION (combined with &#1086;)</td></tr>
            <tr><td>&#1086;&#1157;</td><td>0485</td><td>COMBINING CYRILLIC DASIA PNEUMATA (combined with &#1086;)</td></tr>
            <tr><td>&#1086;&#1158;</td><td>0486</td><td>COMBINING CYRILLIC PSILI PNEUMATA (combined with &#1086;)</td></tr>
            <tr><td>&#1086;&#1159;</td><td>0487</td><td>COMBINING CYRILLIC POKRYTIE (combined with &#1086;)</td></tr>
            <tr><td>&#1086;&#1160;</td><td>0488</td><td>COMBINING CYRILLIC HUNDRED THOUSANDS SIGN (combined with &#1086;)</td></tr>
            <tr><td>&#1086;&#1161;</td><td>0489</td><td>COMBINING CYRILLIC MILLIONS SIGN (combined with &#1086;)</td></tr>
            <tr><td>&#1162;</td><td>048A</td><td>CYRILLIC CAPITAL LETTER SHORT I WITH TAIL</td></tr>
            <tr><td>&#1163;</td><td>048B</td><td>CYRILLIC SMALL LETTER SHORT I WITH TAIL</td></tr>
            <tr><td>&#1164;</td><td>048C</td><td>CYRILLIC CAPITAL LETTER SEMISOFT SIGN</td></tr>
            <tr><td>&#1165;</td><td>048D</td><td>CYRILLIC SMALL LETTER SEMISOFT SIGN</td></tr>
            <tr><td>&#1166;</td><td>048E</td><td>CYRILLIC CAPITAL LETTER ER WITH TICK</td></tr>
            <tr><td>&#1167;</td><td>048F</td><td>CYRILLIC SMALL LETTER ER WITH TICK</td></tr>
            <tr><td>&#1168;</td><td>0490</td><td>CYRILLIC CAPITAL LETTER GHE WITH UPTURN</td></tr>
            <tr><td>&#1169;</td><td>0491</td><td>CYRILLIC SMALL LETTER GHE WITH UPTURN</td></tr>
            <tr><td>&#1170;</td><td>0492</td><td>CYRILLIC CAPITAL LETTER GHE WITH STROKE</td></tr>
            <tr><td>&#1171;</td><td>0493</td><td>CYRILLIC SMALL LETTER GHE WITH STROKE</td></tr>
            <tr><td>&#1172;</td><td>0494</td><td>CYRILLIC CAPITAL LETTER GHE WITH MIDDLE HOOK</td></tr>
            <tr><td>&#1173;</td><td>0495</td><td>CYRILLIC SMALL LETTER GHE WITH MIDDLE HOOK</td></tr>
            <tr><td>&#1174;</td><td>0496</td><td>CYRILLIC CAPITAL LETTER ZHE WITH DESCENDER</td></tr>
            <tr><td>&#1175;</td><td>0497</td><td>CYRILLIC SMALL LETTER ZHE WITH DESCENDER</td></tr>
            <tr><td>&#1176;</td><td>0498</td><td>CYRILLIC CAPITAL LETTER ZE WITH DESCENDER</td></tr>
            <tr><td>&#1177;</td><td>0499</td><td>CYRILLIC SMALL LETTER ZE WITH DESCENDER</td></tr>
            <tr><td>&#1178;</td><td>049A</td><td>CYRILLIC CAPITAL LETTER KA WITH DESCENDER</td></tr>
            <tr><td>&#1179;</td><td>049B</td><td>CYRILLIC SMALL LETTER KA WITH DESCENDER</td></tr>
            <tr><td>&#1180;</td><td>049C</td><td>CYRILLIC CAPITAL LETTER KA WITH VERTICAL STROKE</td></tr>
            <tr><td>&#1181;</td><td>049D</td><td>CYRILLIC SMALL LETTER KA WITH VERTICAL STROKE</td></tr>
            <tr><td>&#1182;</td><td>049E</td><td>CYRILLIC CAPITAL LETTER KA WITH STROKE</td></tr>
            <tr><td>&#1183;</td><td>049F</td><td>CYRILLIC SMALL LETTER KA WITH STROKE</td></tr>
            <tr><td>&#1184;</td><td>04A0</td><td>CYRILLIC CAPITAL LETTER BASHKIR KA</td></tr>
            <tr><td>&#1185;</td><td>04A1</td><td>CYRILLIC SMALL LETTER BASHKIR KA</td></tr>
            <tr><td>&#1186;</td><td>04A2</td><td>CYRILLIC CAPITAL LETTER EN WITH DESCENDER</td></tr>
            <tr><td>&#1187;</td><td>04A3</td><td>CYRILLIC SMALL LETTER EN WITH DESCENDER</td></tr>
            <tr><td>&#1188;</td><td>04A4</td><td>CYRILLIC CAPITAL LIGATURE EN GHE</td></tr>
            <tr><td>&#1189;</td><td>04A5</td><td>CYRILLIC SMALL LIGATURE EN GHE</td></tr>
            <tr><td>&#1190;</td><td>04A6</td><td>CYRILLIC CAPITAL LETTER PE WITH MIDDLE HOOK</td></tr>
            <tr><td>&#1191;</td><td>04A7</td><td>CYRILLIC SMALL LETTER PE WITH MIDDLE HOOK</td></tr>
            <tr><td>&#1192;</td><td>04A8</td><td>CYRILLIC CAPITAL LETTER ABKHASIAN HA</td></tr>
            <tr><td>&#1193;</td><td>04A9</td><td>CYRILLIC SMALL LETTER ABKHASIAN HA</td></tr>
            <tr><td>&#1194;</td><td>04AA</td><td>CYRILLIC CAPITAL LETTER ES WITH DESCENDER</td></tr>
            <tr><td>&#1195;</td><td>04AB</td><td>CYRILLIC SMALL LETTER ES WITH DESCENDER</td></tr>
            <tr><td>&#1196;</td><td>04AC</td><td>CYRILLIC CAPITAL LETTER TE WITH DESCENDER</td></tr>
            <tr><td>&#1197;</td><td>04AD</td><td>CYRILLIC SMALL LETTER TE WITH DESCENDER</td></tr>
            <tr><td>&#1198;</td><td>04AE</td><td>CYRILLIC CAPITAL LETTER STRAIGHT U</td></tr>
            <tr><td>&#1199;</td><td>04AF</td><td>CYRILLIC SMALL LETTER STRAIGHT U</td></tr>
            <tr><td>&#1200;</td><td>04B0</td><td>CYRILLIC CAPITAL LETTER STRAIGHT U WITH STROKE</td></tr>
            <tr><td>&#1201;</td><td>04B1</td><td>CYRILLIC SMALL LETTER STRAIGHT U WITH STROKE</td></tr>
            <tr><td>&#1202;</td><td>04B2</td><td>CYRILLIC CAPITAL LETTER HA WITH DESCENDER</td></tr>
            <tr><td>&#1203;</td><td>04B3</td><td>CYRILLIC SMALL LETTER HA WITH DESCENDER</td></tr>
            <tr><td>&#1204;</td><td>04B4</td><td>CYRILLIC CAPITAL LIGATURE TE TSE</td></tr>
            <tr><td>&#1205;</td><td>04B5</td><td>CYRILLIC SMALL LIGATURE TE TSE</td></tr>
            <tr><td>&#1206;</td><td>04B6</td><td>CYRILLIC CAPITAL LETTER CHE WITH DESCENDER</td></tr>
            <tr><td>&#1207;</td><td>04B7</td><td>CYRILLIC SMALL LETTER CHE WITH DESCENDER</td></tr>
            <tr><td>&#1208;</td><td>04B8</td><td>CYRILLIC CAPITAL LETTER CHE WITH VERTICAL STROKE</td></tr>
            <tr><td>&#1209;</td><td>04B9</td><td>CYRILLIC SMALL LETTER CHE WITH VERTICAL STROKE</td></tr>
            <tr><td>&#1210;</td><td>04BA</td><td>CYRILLIC CAPITAL LETTER SHHA</td></tr>
            <tr><td>&#1211;</td><td>04BB</td><td>CYRILLIC SMALL LETTER SHHA</td></tr>
            <tr><td>&#1212;</td><td>04BC</td><td>CYRILLIC CAPITAL LETTER ABKHASIAN CHE</td></tr>
            <tr><td>&#1213;</td><td>04BD</td><td>CYRILLIC SMALL LETTER ABKHASIAN CHE</td></tr>
            <tr><td>&#1214;</td><td>04BE</td><td>CYRILLIC CAPITAL LETTER ABKHASIAN CHE WITH DESCENDER</td></tr>
            <tr><td>&#1215;</td><td>04BF</td><td>CYRILLIC SMALL LETTER ABKHASIAN CHE WITH DESCENDER</td></tr>
            <tr><td>&#1216;</td><td>04C0</td><td>CYRILLIC LETTER PALOCHKA</td></tr>
            <tr><td>&#1217;</td><td>04C1</td><td>CYRILLIC CAPITAL LETTER ZHE WITH BREVE</td></tr>
            <tr><td>&#1218;</td><td>04C2</td><td>CYRILLIC SMALL LETTER ZHE WITH BREVE</td></tr>
            <tr><td>&#1219;</td><td>04C3</td><td>CYRILLIC CAPITAL LETTER KA WITH HOOK</td></tr>
            <tr><td>&#1220;</td><td>04C4</td><td>CYRILLIC SMALL LETTER KA WITH HOOK</td></tr>
            <tr><td>&#1221;</td><td>04C5</td><td>CYRILLIC CAPITAL LETTER EL WITH TAIL</td></tr>
            <tr><td>&#1222;</td><td>04C6</td><td>CYRILLIC SMALL LETTER EL WITH TAIL</td></tr>
            <tr><td>&#1223;</td><td>04C7</td><td>CYRILLIC CAPITAL LETTER EN WITH HOOK</td></tr>
            <tr><td>&#1224;</td><td>04C8</td><td>CYRILLIC SMALL LETTER EN WITH HOOK</td></tr>
            <tr><td>&#1225;</td><td>04C9</td><td>CYRILLIC CAPITAL LETTER EN WITH TAIL</td></tr>
            <tr><td>&#1226;</td><td>04CA</td><td>CYRILLIC SMALL LETTER EN WITH TAIL</td></tr>
            <tr><td>&#1227;</td><td>04CB</td><td>CYRILLIC CAPITAL LETTER KHAKASSIAN CHE</td></tr>
            <tr><td>&#1228;</td><td>04CC</td><td>CYRILLIC SMALL LETTER KHAKASSIAN CHE</td></tr>
            <tr><td>&#1229;</td><td>04CD</td><td>CYRILLIC CAPITAL LETTER EM WITH TAIL</td></tr>
            <tr><td>&#1230;</td><td>04CE</td><td>CYRILLIC SMALL LETTER EM WITH TAIL</td></tr>
            <tr><td>&#1231;</td><td>04CF</td><td>CYRILLIC SMALL LETTER PALOCHKA</td></tr>
            <tr><td>&#1232;</td><td>04D0</td><td>CYRILLIC CAPITAL LETTER A WITH BREVE</td></tr>
            <tr><td>&#1233;</td><td>04D1</td><td>CYRILLIC SMALL LETTER A WITH BREVE</td></tr>
            <tr><td>&#1234;</td><td>04D2</td><td>CYRILLIC CAPITAL LETTER A WITH DIAERESIS</td></tr>
            <tr><td>&#1235;</td><td>04D3</td><td>CYRILLIC SMALL LETTER A WITH DIAERESIS</td></tr>
            <tr><td>&#1236;</td><td>04D4</td><td>CYRILLIC CAPITAL LIGATURE A IE</td></tr>
            <tr><td>&#1237;</td><td>04D5</td><td>CYRILLIC SMALL LIGATURE A IE</td></tr>
            <tr><td>&#1238;</td><td>04D6</td><td>CYRILLIC CAPITAL LETTER IE WITH BREVE</td></tr>
            <tr><td>&#1239;</td><td>04D7</td><td>CYRILLIC SMALL LETTER IE WITH BREVE</td></tr>
            <tr><td>&#1240;</td><td>04D8</td><td>CYRILLIC CAPITAL LETTER SCHWA</td></tr>
            <tr><td>&#1241;</td><td>04D9</td><td>CYRILLIC SMALL LETTER SCHWA</td></tr>
            <tr><td>&#1242;</td><td>04DA</td><td>CYRILLIC CAPITAL LETTER SCHWA WITH DIAERESIS</td></tr>
            <tr><td>&#1243;</td><td>04DB</td><td>CYRILLIC SMALL LETTER SCHWA WITH DIAERESIS</td></tr>
            <tr><td>&#1244;</td><td>04DC</td><td>CYRILLIC CAPITAL LETTER ZHE WITH DIAERESIS</td></tr>
            <tr><td>&#1245;</td><td>04DD</td><td>CYRILLIC SMALL LETTER ZHE WITH DIAERESIS</td></tr>
            <tr><td>&#1246;</td><td>04DE</td><td>CYRILLIC CAPITAL LETTER ZE WITH DIAERESIS</td></tr>
            <tr><td>&#1247;</td><td>04DF</td><td>CYRILLIC SMALL LETTER ZE WITH DIAERESIS</td></tr>
            <tr><td>&#1248;</td><td>04E0</td><td>CYRILLIC CAPITAL LETTER ABKHASIAN DZE</td></tr>
            <tr><td>&#1249;</td><td>04E1</td><td>CYRILLIC SMALL LETTER ABKHASIAN DZE</td></tr>
            <tr><td>&#1250;</td><td>04E2</td><td>CYRILLIC CAPITAL LETTER I WITH MACRON</td></tr>
            <tr><td>&#1251;</td><td>04E3</td><td>CYRILLIC SMALL LETTER I WITH MACRON</td></tr>
            <tr><td>&#1252;</td><td>04E4</td><td>CYRILLIC CAPITAL LETTER I WITH DIAERESIS</td></tr>
            <tr><td>&#1253;</td><td>04E5</td><td>CYRILLIC SMALL LETTER I WITH DIAERESIS</td></tr>
            <tr><td>&#1254;</td><td>04E6</td><td>CYRILLIC CAPITAL LETTER O WITH DIAERESIS</td></tr>
            <tr><td>&#1255;</td><td>04E7</td><td>CYRILLIC SMALL LETTER O WITH DIAERESIS</td></tr>
            <tr><td>&#1256;</td><td>04E8</td><td>CYRILLIC CAPITAL LETTER BARRED O</td></tr>
            <tr><td>&#1257;</td><td>04E9</td><td>CYRILLIC SMALL LETTER BARRED O</td></tr>
            <tr><td>&#1258;</td><td>04EA</td><td>CYRILLIC CAPITAL LETTER BARRED O WITH DIAERESIS</td></tr>
            <tr><td>&#1259;</td><td>04EB</td><td>CYRILLIC SMALL LETTER BARRED O WITH DIAERESIS</td></tr>
            <tr><td>&#1260;</td><td>04EC</td><td>CYRILLIC CAPITAL LETTER E WITH DIAERESIS</td></tr>
            <tr><td>&#1261;</td><td>04ED</td><td>CYRILLIC SMALL LETTER E WITH DIAERESIS</td></tr>
            <tr><td>&#1262;</td><td>04EE</td><td>CYRILLIC CAPITAL LETTER U WITH MACRON</td></tr>
            <tr><td>&#1263;</td><td>04EF</td><td>CYRILLIC SMALL LETTER U WITH MACRON</td></tr>
            <tr><td>&#1264;</td><td>04F0</td><td>CYRILLIC CAPITAL LETTER U WITH DIAERESIS</td></tr>
            <tr><td>&#1265;</td><td>04F1</td><td>CYRILLIC SMALL LETTER U WITH DIAERESIS</td></tr>
            <tr><td>&#1266;</td><td>04F2</td><td>CYRILLIC CAPITAL LETTER U WITH DOUBLE ACUTE</td></tr>
            <tr><td>&#1267;</td><td>04F3</td><td>CYRILLIC SMALL LETTER U WITH DOUBLE ACUTE</td></tr>
            <tr><td>&#1268;</td><td>04F4</td><td>CYRILLIC CAPITAL LETTER CHE WITH DIAERESIS</td></tr>
            <tr><td>&#1269;</td><td>04F5</td><td>CYRILLIC SMALL LETTER CHE WITH DIAERESIS</td></tr>
            <tr><td>&#1270;</td><td>04F6</td><td>CYRILLIC CAPITAL LETTER GHE WITH DESCENDER</td></tr>
            <tr><td>&#1271;</td><td>04F7</td><td>CYRILLIC SMALL LETTER GHE WITH DESCENDER</td></tr>
            <tr><td>&#1272;</td><td>04F8</td><td>CYRILLIC CAPITAL LETTER YERU WITH DIAERESIS</td></tr>
            <tr><td>&#1273;</td><td>04F9</td><td>CYRILLIC SMALL LETTER YERU WITH DIAERESIS</td></tr>
            <tr><td>&#1274;</td><td>04FA</td><td>CYRILLIC CAPITAL LETTER GHE WITH STROKE AND HOOK</td></tr>
            <tr><td>&#1275;</td><td>04FB</td><td>CYRILLIC SMALL LETTER GHE WITH STROKE AND HOOK</td></tr>
            <tr><td>&#1276;</td><td>04FC</td><td>CYRILLIC CAPITAL LETTER HA WITH HOOK</td></tr>
            <tr><td>&#1277;</td><td>04FD</td><td>CYRILLIC SMALL LETTER HA WITH HOOK</td></tr>
            <tr><td>&#1278;</td><td>04FE</td><td>CYRILLIC CAPITAL LETTER HA WITH STROKE</td></tr>
            <tr><td>&#1279;</td><td>04FF</td><td>CYRILLIC SMALL LETTER HA WITH STROKE</td></tr>
            <tr><td>&#1280;</td><td>0500</td><td>CYRILLIC CAPITAL LETTER KOMI DE</td></tr>
            <tr><td>&#1281;</td><td>0501</td><td>CYRILLIC SMALL LETTER KOMI DE</td></tr>
            <tr><td>&#1282;</td><td>0502</td><td>CYRILLIC CAPITAL LETTER KOMI DJE</td></tr>
            <tr><td>&#1283;</td><td>0503</td><td>CYRILLIC SMALL LETTER KOMI DJE</td></tr>
            <tr><td>&#1284;</td><td>0504</td><td>CYRILLIC CAPITAL LETTER KOMI ZJE</td></tr>
            <tr><td>&#1285;</td><td>0505</td><td>CYRILLIC SMALL LETTER KOMI ZJE</td></tr>
            <tr><td>&#1286;</td><td>0506</td><td>CYRILLIC CAPITAL LETTER KOMI DZJE</td></tr>
            <tr><td>&#1287;</td><td>0507</td><td>CYRILLIC SMALL LETTER KOMI DZJE</td></tr>
            <tr><td>&#1288;</td><td>0508</td><td>CYRILLIC CAPITAL LETTER KOMI LJE</td></tr>
            <tr><td>&#1289;</td><td>0509</td><td>CYRILLIC SMALL LETTER KOMI LJE</td></tr>
            <tr><td>&#1290;</td><td>050A</td><td>CYRILLIC CAPITAL LETTER KOMI NJE</td></tr>
            <tr><td>&#1291;</td><td>050B</td><td>CYRILLIC SMALL LETTER KOMI NJE</td></tr>
            <tr><td>&#1292;</td><td>050C</td><td>CYRILLIC CAPITAL LETTER KOMI SJE</td></tr>
            <tr><td>&#1293;</td><td>050D</td><td>CYRILLIC SMALL LETTER KOMI SJE</td></tr>
            <tr><td>&#1294;</td><td>050E</td><td>CYRILLIC CAPITAL LETTER KOMI TJE</td></tr>
            <tr><td>&#1295;</td><td>050F</td><td>CYRILLIC SMALL LETTER KOMI TJE</td></tr>
            <tr><td>&#1300;</td><td>0514</td><td>CYRILLIC CAPITAL LETTER LHA</td></tr>
            <tr><td>&#1301;</td><td>0515</td><td>CYRILLIC SMALL LETTER LHA</td></tr>
            <tr><td>&#1302;</td><td>0516</td><td>CYRILLIC CAPITAL LETTER RHA</td></tr>
            <tr><td>&#1303;</td><td>0517</td><td>CYRILLIC SMALL LETTER RHA</td></tr>
            <tr><td>&#1304;</td><td>0518</td><td>CYRILLIC CAPITAL LETTER YAE</td></tr>
            <tr><td>&#1305;</td><td>0519</td><td>CYRILLIC SMALL LETTER YAE</td></tr>
            <tr><td>&#1306;</td><td>051A</td><td>CYRILLIC CAPITAL LETTER QA</td></tr>
            <tr><td>&#1307;</td><td>051B</td><td>CYRILLIC SMALL LETTER QA</td></tr>
            <tr><td>&#1308;</td><td>051C</td><td>CYRILLIC CAPITAL LETTER WE</td></tr>
            <tr><td>&#1309;</td><td>051D</td><td>CYRILLIC SMALL LETTER WE</td></tr>
            <tr><td>&#1310;</td><td>051E</td><td>CYRILLIC CAPITAL LETTER ALEUT KA</td></tr>
            <tr><td>&#1311;</td><td>051F</td><td>CYRILLIC SMALL LETTER ALEUT KA</td></tr>
            <tr><td>&#1312;</td><td>0520</td><td>CYRILLIC CAPITAL LETTER EL WITH MIDDLE HOOK</td></tr>
            <tr><td>&#1313;</td><td>0521</td><td>CYRILLIC SMALL LETTER EL WITH MIDDLE HOOK</td></tr>
            <tr><td>&#1314;</td><td>0522</td><td>CYRILLIC CAPITAL LETTER EN WITH MIDDLE HOOK</td></tr>
            <tr><td>&#1315;</td><td>0523</td><td>CYRILLIC SMALL LETTER EN WITH MIDDLE HOOK</td></tr>
            <tr><td>&#1316;</td><td>0524</td><td>CYRILLIC CAPITAL LETTER PE WITH DESCENDER</td></tr>
            <tr><td>&#1317;</td><td>0525</td><td>CYRILLIC SMALL LETTER PE WITH DESCENDER</td></tr>
            <tr><td>&#1318;</td><td>0526</td><td>CYRILLIC CAPITAL LETTER SHHA WITH DESCENDER</td></tr>
            <tr><td>&#1319;</td><td>0527</td><td>CYRILLIC SMALL LETTER SHHA WITH DESCENDER</td></tr>
            <tr><td>&#1320;</td><td>0528</td><td></td></tr>
            <tr><td>&#1321;</td><td>0529</td><td></td></tr>
            <tr><td>&#1322;</td><td>052A</td><td></td></tr>
            <tr><td>&#1323;</td><td>052B</td><td></td></tr>
            <tr><td>&#1324;</td><td>052C</td><td></td></tr>
            <tr><td>&#1325;</td><td>052D</td><td></td></tr>
            <tr><td>&#1326;</td><td>052E</td><td></td></tr>
            <tr><td>&#1327;</td><td>052F</td><td></td></tr>
            <tr><td>&#8192;</td><td>2000</td><td>EN QUAD</td></tr>
            <tr><td>&#8193;</td><td>2001</td><td>EM QUAD</td></tr>
            <tr><td>&#8194;</td><td>2002</td><td>EN SPACE</td></tr>
            <tr><td>&#8195;</td><td>2003</td><td>EM SPACE</td></tr>
            <tr><td>&#8196;</td><td>2004</td><td>THREE-PER-EM SPACE</td></tr>
            <tr><td>&#8197;</td><td>2005</td><td>FOUR-PER-EM SPACE</td></tr>
            <tr><td>&#8198;</td><td>2006</td><td>SIX-PER-EM SPACE</td></tr>
            <tr><td>&#8199;</td><td>2007</td><td>FIGURE SPACE</td></tr>
            <tr><td>&#8200;</td><td>2008</td><td>PUNCTUATION SPACE</td></tr>
            <tr><td>&#8201;</td><td>2009</td><td>THIN SPACE</td></tr>
            <tr><td>&#8202;</td><td>200A</td><td>HAIR SPACE</td></tr>
            <tr><td>&#8203;</td><td>200B</td><td>ZERO WIDTH SPACE</td></tr>
            <tr><td>&#8204;</td><td>200C</td><td>ZERO WIDTH NON-JOINER</td></tr>
            <tr><td>&#8205;</td><td>200D</td><td>ZERO WIDTH JOINER</td></tr>
            <tr><td>&#8206;</td><td>200E</td><td>LEFT-TO-RIGHT MARK</td></tr>
            <tr><td>&#8207;</td><td>200F</td><td>RIGHT-TO-LEFT MARK</td></tr>
            <tr><td>&#8208;</td><td>2010</td><td>HYPHEN</td></tr>
            <tr><td>&#8209;</td><td>2011</td><td>NON-BREAKING HYPHEN</td></tr>
            <tr><td>&#8210;</td><td>2012</td><td>FIGURE DASH</td></tr>
            <tr><td>&#8211;</td><td>2013</td><td>EN DASH</td></tr>
            <tr><td>&#8212;</td><td>2014</td><td>EM DASH</td></tr>
            <tr><td>&#8213;</td><td>2015</td><td>HORIZONTAL BAR</td></tr>
            <tr><td>&#8214;</td><td>2016</td><td>DOUBLE VERTICAL LINE</td></tr>
            <tr><td>&#8215;</td><td>2017</td><td>DOUBLE LOW LINE</td></tr>
            <tr><td>&#8216;</td><td>2018</td><td>LEFT SINGLE QUOTATION MARK</td></tr>
            <tr><td>&#8217;</td><td>2019</td><td>RIGHT SINGLE QUOTATION MARK</td></tr>
            <tr><td>&#8218;</td><td>201A</td><td>SINGLE LOW-9 QUOTATION MARK</td></tr>
            <tr><td>&#8219;</td><td>201B</td><td>SINGLE HIGH-REVERSED-9 QUOTATION MARK</td></tr>
            <tr><td>&#8220;</td><td>201C</td><td>LEFT DOUBLE QUOTATION MARK</td></tr>
            <tr><td>&#8221;</td><td>201D</td><td>RIGHT DOUBLE QUOTATION MARK</td></tr>
            <tr><td>&#8222;</td><td>201E</td><td>DOUBLE LOW-9 QUOTATION MARK</td></tr>
            <tr><td>&#8223;</td><td>201F</td><td>DOUBLE HIGH-REVERSED-9 QUOTATION MARK</td></tr>
            <tr><td>&#8224;</td><td>2020</td><td>DAGGER</td></tr>
            <tr><td>&#8225;</td><td>2021</td><td>DOUBLE DAGGER</td></tr>
            <tr><td>&#8226;</td><td>2022</td><td>BULLET</td></tr>
            <tr><td>&#8227;</td><td>2023</td><td>TRIANGULAR BULLET</td></tr>
            <tr><td>&#8228;</td><td>2024</td><td>ONE DOT LEADER</td></tr>
            <tr><td>&#8229;</td><td>2025</td><td>TWO DOT LEADER</td></tr>
            <tr><td>&#8230;</td><td>2026</td><td>HORIZONTAL ELLIPSIS</td></tr>
            <tr><td>&#8231;</td><td>2027</td><td>HYPHENATION POINT</td></tr>
            <tr><td>&#8232;</td><td>2028</td><td>LINE SEPARATOR</td></tr>
            <tr><td>&#8233;</td><td>2029</td><td>PARAGRAPH SEPARATOR</td></tr>
            <tr><td>&#8234;</td><td>202A</td><td>LEFT-TO-RIGHT EMBEDDING</td></tr>
            <tr><td>&#8235;</td><td>202B</td><td>RIGHT-TO-LEFT EMBEDDING</td></tr>
            <tr><td>&#8236;</td><td>202C</td><td>POP DIRECTIONAL FORMATTING</td></tr>
            <tr><td>&#8237;</td><td>202D</td><td>LEFT-TO-RIGHT OVERRIDE</td></tr>
            <tr><td>&#8238;</td><td>202E</td><td>RIGHT-TO-LEFT OVERRIDE</td></tr>
            <tr><td>&#8239;</td><td>202F</td><td>NARROW NON-BREAK SPACE</td></tr>
            <tr><td>&#8240;</td><td>2030</td><td>PER MILLE SIGN</td></tr>
            <tr><td>&#8241;</td><td>2031</td><td>PER TEN THOUSAND SIGN</td></tr>
            <tr><td>&#8242;</td><td>2032</td><td>PRIME</td></tr>
            <tr><td>&#8243;</td><td>2033</td><td>DOUBLE PRIME</td></tr>
            <tr><td>&#8244;</td><td>2034</td><td>TRIPLE PRIME</td></tr>
            <tr><td>&#8245;</td><td>2035</td><td>REVERSED PRIME</td></tr>
            <tr><td>&#8246;</td><td>2036</td><td>REVERSED DOUBLE PRIME</td></tr>
            <tr><td>&#8247;</td><td>2037</td><td>REVERSED TRIPLE PRIME</td></tr>
            <tr><td>&#8248;</td><td>2038</td><td>CARET</td></tr>
            <tr><td>&#8249;</td><td>2039</td><td>SINGLE LEFT-POINTING ANGLE QUOTATION MARK</td></tr>
            <tr><td>&#8250;</td><td>203A</td><td>SINGLE RIGHT-POINTING ANGLE QUOTATION MARK</td></tr>
            <tr><td>&#8251;</td><td>203B</td><td>REFERENCE MARK</td></tr>
            <tr><td>&#8252;</td><td>203C</td><td>DOUBLE EXCLAMATION MARK</td></tr>
            <tr><td>&#8253;</td><td>203D</td><td>INTERROBANG</td></tr>
            <tr><td>&#8254;</td><td>203E</td><td>OVERLINE</td></tr>
            <tr><td>&#8255;</td><td>203F</td><td>UNDERTIE</td></tr>
            <tr><td>&#8256;</td><td>2040</td><td>CHARACTER TIE</td></tr>
            <tr><td>&#8257;</td><td>2041</td><td>CARET INSERTION POINT</td></tr>
            <tr><td>&#8258;</td><td>2042</td><td>ASTERISM</td></tr>
            <tr><td>&#8259;</td><td>2043</td><td>HYPHEN BULLET</td></tr>
            <tr><td>&#8260;</td><td>2044</td><td>FRACTION SLASH</td></tr>
            <tr><td>&#8261;</td><td>2045</td><td>LEFT SQUARE BRACKET WITH QUILL</td></tr>
            <tr><td>&#8262;</td><td>2046</td><td>RIGHT SQUARE BRACKET WITH QUILL</td></tr>
            <tr><td>&#8263;</td><td>2047</td><td>DOUBLE QUESTION MARK</td></tr>
            <tr><td>&#8264;</td><td>2048</td><td>QUESTION EXCLAMATION MARK</td></tr>
            <tr><td>&#8265;</td><td>2049</td><td>EXCLAMATION QUESTION MARK</td></tr>
            <tr><td>&#8266;</td><td>204A</td><td>TIRONIAN SIGN ET</td></tr>
            <tr><td>&#8267;</td><td>204B</td><td>REVERSED PILCROW SIGN</td></tr>
            <tr><td>&#8268;</td><td>204C</td><td>BLACK LEFTWARDS BULLET</td></tr>
            <tr><td>&#8269;</td><td>204D</td><td>BLACK RIGHTWARDS BULLET</td></tr>
            <tr><td>&#8270;</td><td>204E</td><td>LOW ASTERISK</td></tr>
            <tr><td>&#8271;</td><td>204F</td><td>REVERSED SEMICOLON</td></tr>
            <tr><td>&#8272;</td><td>2050</td><td>CLOSE UP</td></tr>
            <tr><td>&#8273;</td><td>2051</td><td>TWO ASTERISKS ALIGNED VERTICALLY</td></tr>
            <tr><td>&#8274;</td><td>2052</td><td>COMMERCIAL MINUS SIGN</td></tr>
            <tr><td>&#8275;</td><td>2053</td><td>SWUNG DASH</td></tr>
            <tr><td>&#8276;</td><td>2054</td><td>INVERTED UNDERTIE</td></tr>
            <tr><td>&#8277;</td><td>2055</td><td>FLOWER PUNCTUATION MARK</td></tr>
            <tr><td>&#8278;</td><td>2056</td><td>THREE DOT PUNCTUATION</td></tr>
            <tr><td>&#8279;</td><td>2057</td><td>QUADRUPLE PRIME</td></tr>
            <tr><td>&#8280;</td><td>2058</td><td>FOUR DOT PUNCTUATION</td></tr>
            <tr><td>&#8281;</td><td>2059</td><td>FIVE DOT PUNCTUATION</td></tr>
            <tr><td>&#8282;</td><td>205A</td><td>TWO DOT PUNCTUATION</td></tr>
            <tr><td>&#8283;</td><td>205B</td><td>FOUR DOT MARK</td></tr>
            <tr><td>&#8284;</td><td>205C</td><td>DOTTED CROSS</td></tr>
            <tr><td>&#8285;</td><td>205D</td><td>TRICOLON</td></tr>
            <tr><td>&#8286;</td><td>205E</td><td>VERTICAL FOUR DOTS</td></tr>
            <tr><td>&#8287;</td><td>205F</td><td>MEDIUM MATHEMATICAL SPACE</td></tr>
            <tr><td>&#8288;</td><td>2060</td><td>WORD JOINER</td></tr>
            <tr><td>&#8289;</td><td>2061</td><td>FUNCTION APPLICATION</td></tr>
            <tr><td>&#8290;</td><td>2062</td><td>INVISIBLE TIMES</td></tr>
            <tr><td>&#8291;</td><td>2063</td><td>INVISIBLE SEPARATOR</td></tr>
            <tr><td>&#8292;</td><td>2064</td><td>INVISIBLE PLUS</td></tr>
            <tr><td>&#8294;</td><td>2066</td><td>LEFT-TO-RIGHT ISOLATE</td></tr>
            <tr><td>&#8295;</td><td>2067</td><td>RIGHT-TO-LEFT ISOLATE</td></tr>
            <tr><td>&#8296;</td><td>2068</td><td>FIRST STRONG ISOLATE</td></tr>
            <tr><td>&#8297;</td><td>2069</td><td>POP DIRECTIONAL ISOLATE</td></tr>
            <tr><td>&#8298;</td><td>206A</td><td>INHIBIT SYMMETRIC SWAPPING</td></tr>
            <tr><td>&#8299;</td><td>206B</td><td>ACTIVATE SYMMETRIC SWAPPING</td></tr>
            <tr><td>&#8300;</td><td>206C</td><td>INHIBIT ARABIC FORM SHAPING</td></tr>
            <tr><td>&#8301;</td><td>206D</td><td>ACTIVATE ARABIC FORM SHAPING</td></tr>
            <tr><td>&#8302;</td><td>206E</td><td>NATIONAL DIGIT SHAPES</td></tr>
            <tr><td>&#8303;</td><td>206F</td><td>NOMINAL DIGIT SHAPES</td></tr>
            <tr><td>&#8352;</td><td>20A0</td><td>EURO-CURRENCY SIGN</td></tr>
            <tr><td>&#8353;</td><td>20A1</td><td>COLON SIGN</td></tr>
            <tr><td>&#8354;</td><td>20A2</td><td>CRUZEIRO SIGN</td></tr>
            <tr><td>&#8355;</td><td>20A3</td><td>FRENCH FRANC SIGN</td></tr>
            <tr><td>&#8356;</td><td>20A4</td><td>LIRA SIGN</td></tr>
            <tr><td>&#8357;</td><td>20A5</td><td>MILL SIGN</td></tr>
            <tr><td>&#8358;</td><td>20A6</td><td>NAIRA SIGN</td></tr>
            <tr><td>&#8359;</td><td>20A7</td><td>PESETA SIGN</td></tr>
            <tr><td>&#8360;</td><td>20A8</td><td>RUPEE SIGN</td></tr>
            <tr><td>&#8361;</td><td>20A9</td><td>WON SIGN</td></tr>
            <tr><td>&#8362;</td><td>20AA</td><td>NEW SHEQEL SIGN</td></tr>
            <tr><td>&#8363;</td><td>20AB</td><td>DONG SIGN</td></tr>
            <tr><td>&#8364;</td><td>20AC</td><td>EURO SIGN</td></tr>
            <tr><td>&#8365;</td><td>20AD</td><td>KIP SIGN</td></tr>
            <tr><td>&#8366;</td><td>20AE</td><td>TUGRIK SIGN</td></tr>
            <tr><td>&#8367;</td><td>20AF</td><td>DRACHMA SIGN</td></tr>
            <tr><td>&#8368;</td><td>20B0</td><td>GERMAN PENNY SYMBOL</td></tr>
            <tr><td>&#8369;</td><td>20B1</td><td>PESO SIGN</td></tr>
            <tr><td>&#8370;</td><td>20B2</td><td>GUARANI SIGN</td></tr>
            <tr><td>&#8371;</td><td>20B3</td><td>AUSTRAL SIGN</td></tr>
            <tr><td>&#8372;</td><td>20B4</td><td>HRYVNIA SIGN</td></tr>
            <tr><td>&#8373;</td><td>20B5</td><td>CEDI SIGN</td></tr>
            <tr><td>&#8374;</td><td>20B6</td><td>LIVRE TOURNOIS SIGN</td></tr>
            <tr><td>&#8375;</td><td>20B7</td><td>SPESMILO SIGN</td></tr>
            <tr><td>&#8376;</td><td>20B8</td><td>TENGE SIGN</td></tr>
            <tr><td>&#8377;</td><td>20B9</td><td>INDIAN RUPEE SIGN</td></tr>
            <tr><td>&#8448;</td><td>2100</td><td>ACCOUNT OF</td></tr>
            <tr><td>&#8449;</td><td>2101</td><td>ADDRESSED TO THE SUBJECT</td></tr>
            <tr><td>&#8450;</td><td>2102</td><td>DOUBLE-STRUCK CAPITAL C</td></tr>
            <tr><td>&#8451;</td><td>2103</td><td>DEGREE CELSIUS</td></tr>
            <tr><td>&#8452;</td><td>2104</td><td>CENTRE LINE SYMBOL</td></tr>
            <tr><td>&#8453;</td><td>2105</td><td>CARE OF</td></tr>
            <tr><td>&#8454;</td><td>2106</td><td>CADA UNA</td></tr>
            <tr><td>&#8455;</td><td>2107</td><td>EULER CONSTANT</td></tr>
            <tr><td>&#8456;</td><td>2108</td><td>SCRUPLE</td></tr>
            <tr><td>&#8457;</td><td>2109</td><td>DEGREE FAHRENHEIT</td></tr>
            <tr><td>&#8458;</td><td>210A</td><td>SCRIPT SMALL G</td></tr>
            <tr><td>&#8459;</td><td>210B</td><td>SCRIPT CAPITAL H</td></tr>
            <tr><td>&#8460;</td><td>210C</td><td>BLACK-LETTER CAPITAL H</td></tr>
            <tr><td>&#8461;</td><td>210D</td><td>DOUBLE-STRUCK CAPITAL H</td></tr>
            <tr><td>&#8462;</td><td>210E</td><td>PLANCK CONSTANT</td></tr>
            <tr><td>&#8463;</td><td>210F</td><td>PLANCK CONSTANT OVER TWO PI</td></tr>
            <tr><td>&#8464;</td><td>2110</td><td>SCRIPT CAPITAL I</td></tr>
            <tr><td>&#8465;</td><td>2111</td><td>BLACK-LETTER CAPITAL I</td></tr>
            <tr><td>&#8466;</td><td>2112</td><td>SCRIPT CAPITAL L</td></tr>
            <tr><td>&#8467;</td><td>2113</td><td>SCRIPT SMALL L</td></tr>
            <tr><td>&#8468;</td><td>2114</td><td>L B BAR SYMBOL</td></tr>
            <tr><td>&#8469;</td><td>2115</td><td>DOUBLE-STRUCK CAPITAL N</td></tr>
            <tr><td>&#8470;</td><td>2116</td><td>NUMERO SIGN</td></tr>
            <tr><td>&#8471;</td><td>2117</td><td>SOUND RECORDING COPYRIGHT</td></tr>
            <tr><td>&#8472;</td><td>2118</td><td>SCRIPT CAPITAL P</td></tr>
            <tr><td>&#8473;</td><td>2119</td><td>DOUBLE-STRUCK CAPITAL P</td></tr>
            <tr><td>&#8474;</td><td>211A</td><td>DOUBLE-STRUCK CAPITAL Q</td></tr>
            <tr><td>&#8475;</td><td>211B</td><td>SCRIPT CAPITAL R</td></tr>
            <tr><td>&#8476;</td><td>211C</td><td>BLACK-LETTER CAPITAL R</td></tr>
            <tr><td>&#8477;</td><td>211D</td><td>DOUBLE-STRUCK CAPITAL R</td></tr>
            <tr><td>&#8478;</td><td>211E</td><td>PRESCRIPTION TAKE</td></tr>
            <tr><td>&#8479;</td><td>211F</td><td>RESPONSE</td></tr>
            <tr><td>&#8480;</td><td>2120</td><td>SERVICE MARK</td></tr>
            <tr><td>&#8481;</td><td>2121</td><td>TELEPHONE SIGN</td></tr>
            <tr><td>&#8482;</td><td>2122</td><td>TRADE MARK SIGN</td></tr>
            <tr><td>&#8483;</td><td>2123</td><td>VERSICLE</td></tr>
            <tr><td>&#8484;</td><td>2124</td><td>DOUBLE-STRUCK CAPITAL Z</td></tr>
            <tr><td>&#8485;</td><td>2125</td><td>OUNCE SIGN</td></tr>
            <tr><td>&#8486;</td><td>2126</td><td>OHM SIGN</td></tr>
            <tr><td>&#8487;</td><td>2127</td><td>INVERTED OHM SIGN</td></tr>
            <tr><td>&#8488;</td><td>2128</td><td>BLACK-LETTER CAPITAL Z</td></tr>
            <tr><td>&#8489;</td><td>2129</td><td>TURNED GREEK SMALL LETTER IOTA</td></tr>
            <tr><td>&#8490;</td><td>212A</td><td>KELVIN SIGN</td></tr>
            <tr><td>&#8491;</td><td>212B</td><td>ANGSTROM SIGN</td></tr>
            <tr><td>&#8492;</td><td>212C</td><td>SCRIPT CAPITAL B</td></tr>
            <tr><td>&#8493;</td><td>212D</td><td>BLACK-LETTER CAPITAL C</td></tr>
            <tr><td>&#8494;</td><td>212E</td><td>ESTIMATED SYMBOL</td></tr>
            <tr><td>&#8495;</td><td>212F</td><td>SCRIPT SMALL E</td></tr>
            <tr><td>&#8496;</td><td>2130</td><td>SCRIPT CAPITAL E</td></tr>
            <tr><td>&#8497;</td><td>2131</td><td>SCRIPT CAPITAL F</td></tr>
            <tr><td>&#8498;</td><td>2132</td><td>TURNED CAPITAL F</td></tr>
            <tr><td>&#8499;</td><td>2133</td><td>SCRIPT CAPITAL M</td></tr>
            <tr><td>&#8500;</td><td>2134</td><td>SCRIPT SMALL O</td></tr>
            <tr><td>&#8501;</td><td>2135</td><td>ALEF SYMBOL</td></tr>
            <tr><td>&#8502;</td><td>2136</td><td>BET SYMBOL</td></tr>
            <tr><td>&#8503;</td><td>2137</td><td>GIMEL SYMBOL</td></tr>
            <tr><td>&#8504;</td><td>2138</td><td>DALET SYMBOL</td></tr>
            <tr><td>&#8505;</td><td>2139</td><td>INFORMATION SOURCE</td></tr>
            <tr><td>&#8506;</td><td>213A</td><td>ROTATED CAPITAL Q</td></tr>
            <tr><td>&#8507;</td><td>213B</td><td>FACSIMILE SIGN</td></tr>
            <tr><td>&#8508;</td><td>213C</td><td>DOUBLE-STRUCK SMALL PI</td></tr>
            <tr><td>&#8509;</td><td>213D</td><td>DOUBLE-STRUCK SMALL GAMMA</td></tr>
            <tr><td>&#8510;</td><td>213E</td><td>DOUBLE-STRUCK CAPITAL GAMMA</td></tr>
            <tr><td>&#8511;</td><td>213F</td><td>DOUBLE-STRUCK CAPITAL PI</td></tr>
            <tr><td>&#8512;</td><td>2140</td><td>DOUBLE-STRUCK N-ARY SUMMATION</td></tr>
            <tr><td>&#8513;</td><td>2141</td><td>TURNED SANS-SERIF CAPITAL G</td></tr>
            <tr><td>&#8514;</td><td>2142</td><td>TURNED SANS-SERIF CAPITAL L</td></tr>
            <tr><td>&#8515;</td><td>2143</td><td>REVERSED SANS-SERIF CAPITAL L</td></tr>
            <tr><td>&#8516;</td><td>2144</td><td>TURNED SANS-SERIF CAPITAL Y</td></tr>
            <tr><td>&#8517;</td><td>2145</td><td>DOUBLE-STRUCK ITALIC CAPITAL D</td></tr>
            <tr><td>&#8518;</td><td>2146</td><td>DOUBLE-STRUCK ITALIC SMALL D</td></tr>
            <tr><td>&#8519;</td><td>2147</td><td>DOUBLE-STRUCK ITALIC SMALL E</td></tr>
            <tr><td>&#8520;</td><td>2148</td><td>DOUBLE-STRUCK ITALIC SMALL I</td></tr>
            <tr><td>&#8521;</td><td>2149</td><td>DOUBLE-STRUCK ITALIC SMALL J</td></tr>
            <tr><td>&#8522;</td><td>214A</td><td>PROPERTY LINE</td></tr>
            <tr><td>&#8523;</td><td>214B</td><td>TURNED AMPERSAND</td></tr>
            <tr><td>&#8524;</td><td>214C</td><td>PER SIGN</td></tr>
            <tr><td>&#8525;</td><td>214D</td><td>AKTIESELSKAB</td></tr>
            <tr><td>&#8526;</td><td>214E</td><td>TURNED SMALL F</td></tr>
            <tr><td>&#8527;</td><td>214F</td><td>SYMBOL FOR SAMARITAN SOURCE</td></tr>
            <tr><td>&#8592;</td><td>2190</td><td>LEFTWARDS ARROW</td></tr>
            <tr><td>&#8593;</td><td>2191</td><td>UPWARDS ARROW</td></tr>
            <tr><td>&#8594;</td><td>2192</td><td>RIGHTWARDS ARROW</td></tr>
            <tr><td>&#8595;</td><td>2193</td><td>DOWNWARDS ARROW</td></tr>
            <tr><td>&#8596;</td><td>2194</td><td>LEFT RIGHT ARROW</td></tr>
            <tr><td>&#8597;</td><td>2195</td><td>UP DOWN ARROW</td></tr>
            <tr><td>&#8598;</td><td>2196</td><td>NORTH WEST ARROW</td></tr>
            <tr><td>&#8599;</td><td>2197</td><td>NORTH EAST ARROW</td></tr>
            <tr><td>&#8600;</td><td>2198</td><td>SOUTH EAST ARROW</td></tr>
            <tr><td>&#8601;</td><td>2199</td><td>SOUTH WEST ARROW</td></tr>
            <tr><td>&#8602;</td><td>219A</td><td>LEFTWARDS ARROW WITH STROKE</td></tr>
            <tr><td>&#8603;</td><td>219B</td><td>RIGHTWARDS ARROW WITH STROKE</td></tr>
            <tr><td>&#8604;</td><td>219C</td><td>LEFTWARDS WAVE ARROW</td></tr>
            <tr><td>&#8605;</td><td>219D</td><td>RIGHTWARDS WAVE ARROW</td></tr>
            <tr><td>&#8606;</td><td>219E</td><td>LEFTWARDS TWO HEADED ARROW</td></tr>
            <tr><td>&#8607;</td><td>219F</td><td>UPWARDS TWO HEADED ARROW</td></tr>
            <tr><td>&#8608;</td><td>21A0</td><td>RIGHTWARDS TWO HEADED ARROW</td></tr>
            <tr><td>&#8609;</td><td>21A1</td><td>DOWNWARDS TWO HEADED ARROW</td></tr>
            <tr><td>&#8610;</td><td>21A2</td><td>LEFTWARDS ARROW WITH TAIL</td></tr>
            <tr><td>&#8611;</td><td>21A3</td><td>RIGHTWARDS ARROW WITH TAIL</td></tr>
            <tr><td>&#8612;</td><td>21A4</td><td>LEFTWARDS ARROW FROM BAR</td></tr>
            <tr><td>&#8613;</td><td>21A5</td><td>UPWARDS ARROW FROM BAR</td></tr>
            <tr><td>&#8614;</td><td>21A6</td><td>RIGHTWARDS ARROW FROM BAR</td></tr>
            <tr><td>&#8615;</td><td>21A7</td><td>DOWNWARDS ARROW FROM BAR</td></tr>
            <tr><td>&#8616;</td><td>21A8</td><td>UP DOWN ARROW WITH BASE</td></tr>
            <tr><td>&#8617;</td><td>21A9</td><td>LEFTWARDS ARROW WITH HOOK</td></tr>
            <tr><td>&#8618;</td><td>21AA</td><td>RIGHTWARDS ARROW WITH HOOK</td></tr>
            <tr><td>&#8619;</td><td>21AB</td><td>LEFTWARDS ARROW WITH LOOP</td></tr>
            <tr><td>&#8620;</td><td>21AC</td><td>RIGHTWARDS ARROW WITH LOOP</td></tr>
            <tr><td>&#8621;</td><td>21AD</td><td>LEFT RIGHT WAVE ARROW</td></tr>
            <tr><td>&#8622;</td><td>21AE</td><td>LEFT RIGHT ARROW WITH STROKE</td></tr>
            <tr><td>&#8623;</td><td>21AF</td><td>DOWNWARDS ZIGZAG ARROW</td></tr>
            <tr><td>&#8624;</td><td>21B0</td><td>UPWARDS ARROW WITH TIP LEFTWARDS</td></tr>
            <tr><td>&#8625;</td><td>21B1</td><td>UPWARDS ARROW WITH TIP RIGHTWARDS</td></tr>
            <tr><td>&#8626;</td><td>21B2</td><td>DOWNWARDS ARROW WITH TIP LEFTWARDS</td></tr>
            <tr><td>&#8627;</td><td>21B3</td><td>DOWNWARDS ARROW WITH TIP RIGHTWARDS</td></tr>
            <tr><td>&#8628;</td><td>21B4</td><td>RIGHTWARDS ARROW WITH CORNER DOWNWARDS</td></tr>
            <tr><td>&#8629;</td><td>21B5</td><td>DOWNWARDS ARROW WITH CORNER LEFTWARDS</td></tr>
            <tr><td>&#8630;</td><td>21B6</td><td>ANTICLOCKWISE TOP SEMICIRCLE ARROW</td></tr>
            <tr><td>&#8631;</td><td>21B7</td><td>CLOCKWISE TOP SEMICIRCLE ARROW</td></tr>
            <tr><td>&#8632;</td><td>21B8</td><td>NORTH WEST ARROW TO LONG BAR</td></tr>
            <tr><td>&#8633;</td><td>21B9</td><td>LEFTWARDS ARROW TO BAR OVER RIGHTWARDS ARROW TO BAR</td></tr>
            <tr><td>&#8634;</td><td>21BA</td><td>ANTICLOCKWISE OPEN CIRCLE ARROW</td></tr>
            <tr><td>&#8635;</td><td>21BB</td><td>CLOCKWISE OPEN CIRCLE ARROW</td></tr>
            <tr><td>&#8636;</td><td>21BC</td><td>LEFTWARDS HARPOON WITH BARB UPWARDS</td></tr>
            <tr><td>&#8637;</td><td>21BD</td><td>LEFTWARDS HARPOON WITH BARB DOWNWARDS</td></tr>
            <tr><td>&#8638;</td><td>21BE</td><td>UPWARDS HARPOON WITH BARB RIGHTWARDS</td></tr>
            <tr><td>&#8639;</td><td>21BF</td><td>UPWARDS HARPOON WITH BARB LEFTWARDS</td></tr>
            <tr><td>&#8640;</td><td>21C0</td><td>RIGHTWARDS HARPOON WITH BARB UPWARDS</td></tr>
            <tr><td>&#8641;</td><td>21C1</td><td>RIGHTWARDS HARPOON WITH BARB DOWNWARDS</td></tr>
            <tr><td>&#8642;</td><td>21C2</td><td>DOWNWARDS HARPOON WITH BARB RIGHTWARDS</td></tr>
            <tr><td>&#8643;</td><td>21C3</td><td>DOWNWARDS HARPOON WITH BARB LEFTWARDS</td></tr>
            <tr><td>&#8644;</td><td>21C4</td><td>RIGHTWARDS ARROW OVER LEFTWARDS ARROW</td></tr>
            <tr><td>&#8645;</td><td>21C5</td><td>UPWARDS ARROW LEFTWARDS OF DOWNWARDS ARROW</td></tr>
            <tr><td>&#8646;</td><td>21C6</td><td>LEFTWARDS ARROW OVER RIGHTWARDS ARROW</td></tr>
            <tr><td>&#8647;</td><td>21C7</td><td>LEFTWARDS PAIRED ARROWS</td></tr>
            <tr><td>&#8648;</td><td>21C8</td><td>UPWARDS PAIRED ARROWS</td></tr>
            <tr><td>&#8649;</td><td>21C9</td><td>RIGHTWARDS PAIRED ARROWS</td></tr>
            <tr><td>&#8650;</td><td>21CA</td><td>DOWNWARDS PAIRED ARROWS</td></tr>
            <tr><td>&#8651;</td><td>21CB</td><td>LEFTWARDS HARPOON OVER RIGHTWARDS HARPOON</td></tr>
            <tr><td>&#8652;</td><td>21CC</td><td>RIGHTWARDS HARPOON OVER LEFTWARDS HARPOON</td></tr>
            <tr><td>&#8653;</td><td>21CD</td><td>LEFTWARDS DOUBLE ARROW WITH STROKE</td></tr>
            <tr><td>&#8654;</td><td>21CE</td><td>LEFT RIGHT DOUBLE ARROW WITH STROKE</td></tr>
            <tr><td>&#8655;</td><td>21CF</td><td>RIGHTWARDS DOUBLE ARROW WITH STROKE</td></tr>
            <tr><td>&#8656;</td><td>21D0</td><td>LEFTWARDS DOUBLE ARROW</td></tr>
            <tr><td>&#8657;</td><td>21D1</td><td>UPWARDS DOUBLE ARROW</td></tr>
            <tr><td>&#8658;</td><td>21D2</td><td>RIGHTWARDS DOUBLE ARROW</td></tr>
            <tr><td>&#8659;</td><td>21D3</td><td>DOWNWARDS DOUBLE ARROW</td></tr>
            <tr><td>&#8660;</td><td>21D4</td><td>LEFT RIGHT DOUBLE ARROW</td></tr>
            <tr><td>&#8661;</td><td>21D5</td><td>UP DOWN DOUBLE ARROW</td></tr>
            <tr><td>&#8662;</td><td>21D6</td><td>NORTH WEST DOUBLE ARROW</td></tr>
            <tr><td>&#8663;</td><td>21D7</td><td>NORTH EAST DOUBLE ARROW</td></tr>
            <tr><td>&#8664;</td><td>21D8</td><td>SOUTH EAST DOUBLE ARROW</td></tr>
            <tr><td>&#8665;</td><td>21D9</td><td>SOUTH WEST DOUBLE ARROW</td></tr>
            <tr><td>&#8666;</td><td>21DA</td><td>LEFTWARDS TRIPLE ARROW</td></tr>
            <tr><td>&#8667;</td><td>21DB</td><td>RIGHTWARDS TRIPLE ARROW</td></tr>
            <tr><td>&#8668;</td><td>21DC</td><td>LEFTWARDS SQUIGGLE ARROW</td></tr>
            <tr><td>&#8669;</td><td>21DD</td><td>RIGHTWARDS SQUIGGLE ARROW</td></tr>
            <tr><td>&#8670;</td><td>21DE</td><td>UPWARDS ARROW WITH DOUBLE STROKE</td></tr>
            <tr><td>&#8671;</td><td>21DF</td><td>DOWNWARDS ARROW WITH DOUBLE STROKE</td></tr>
            <tr><td>&#8672;</td><td>21E0</td><td>LEFTWARDS DASHED ARROW</td></tr>
            <tr><td>&#8673;</td><td>21E1</td><td>UPWARDS DASHED ARROW</td></tr>
            <tr><td>&#8674;</td><td>21E2</td><td>RIGHTWARDS DASHED ARROW</td></tr>
            <tr><td>&#8675;</td><td>21E3</td><td>DOWNWARDS DASHED ARROW</td></tr>
            <tr><td>&#8676;</td><td>21E4</td><td>LEFTWARDS ARROW TO BAR</td></tr>
            <tr><td>&#8677;</td><td>21E5</td><td>RIGHTWARDS ARROW TO BAR</td></tr>
            <tr><td>&#8678;</td><td>21E6</td><td>LEFTWARDS WHITE ARROW</td></tr>
            <tr><td>&#8679;</td><td>21E7</td><td>UPWARDS WHITE ARROW</td></tr>
            <tr><td>&#8680;</td><td>21E8</td><td>RIGHTWARDS WHITE ARROW</td></tr>
            <tr><td>&#8681;</td><td>21E9</td><td>DOWNWARDS WHITE ARROW</td></tr>
            <tr><td>&#8682;</td><td>21EA</td><td>UPWARDS WHITE ARROW FROM BAR</td></tr>
            <tr><td>&#8683;</td><td>21EB</td><td>UPWARDS WHITE ARROW ON PEDESTAL</td></tr>
            <tr><td>&#8684;</td><td>21EC</td><td>UPWARDS WHITE ARROW ON PEDESTAL WITH HORIZONTAL BAR</td></tr>
            <tr><td>&#8685;</td><td>21ED</td><td>UPWARDS WHITE ARROW ON PEDESTAL WITH VERTICAL BAR</td></tr>
            <tr><td>&#8686;</td><td>21EE</td><td>UPWARDS WHITE DOUBLE ARROW</td></tr>
            <tr><td>&#8687;</td><td>21EF</td><td>UPWARDS WHITE DOUBLE ARROW ON PEDESTAL</td></tr>
            <tr><td>&#8688;</td><td>21F0</td><td>RIGHTWARDS WHITE ARROW FROM WALL</td></tr>
            <tr><td>&#8689;</td><td>21F1</td><td>NORTH WEST ARROW TO CORNER</td></tr>
            <tr><td>&#8690;</td><td>21F2</td><td>SOUTH EAST ARROW TO CORNER</td></tr>
            <tr><td>&#8691;</td><td>21F3</td><td>UP DOWN WHITE ARROW</td></tr>
            <tr><td>&#8692;</td><td>21F4</td><td>RIGHT ARROW WITH SMALL CIRCLE</td></tr>
            <tr><td>&#8693;</td><td>21F5</td><td>DOWNWARDS ARROW LEFTWARDS OF UPWARDS ARROW</td></tr>
            <tr><td>&#8694;</td><td>21F6</td><td>THREE RIGHTWARDS ARROWS</td></tr>
            <tr><td>&#8695;</td><td>21F7</td><td>LEFTWARDS ARROW WITH VERTICAL STROKE</td></tr>
            <tr><td>&#8696;</td><td>21F8</td><td>RIGHTWARDS ARROW WITH VERTICAL STROKE</td></tr>
            <tr><td>&#8697;</td><td>21F9</td><td>LEFT RIGHT ARROW WITH VERTICAL STROKE</td></tr>
            <tr><td>&#8698;</td><td>21FA</td><td>LEFTWARDS ARROW WITH DOUBLE VERTICAL STROKE</td></tr>
            <tr><td>&#8699;</td><td>21FB</td><td>RIGHTWARDS ARROW WITH DOUBLE VERTICAL STROKE</td></tr>
            <tr><td>&#8700;</td><td>21FC</td><td>LEFT RIGHT ARROW WITH DOUBLE VERTICAL STROKE</td></tr>
            <tr><td>&#8701;</td><td>21FD</td><td>LEFTWARDS OPEN-HEADED ARROW</td></tr>
            <tr><td>&#8702;</td><td>21FE</td><td>RIGHTWARDS OPEN-HEADED ARROW</td></tr>
            <tr><td>&#8703;</td><td>21FF</td><td>LEFT RIGHT OPEN-HEADED ARROW</td></tr>
            <tr><td>&#8704;</td><td>2200</td><td>FOR ALL</td></tr>
            <tr><td>&#8705;</td><td>2201</td><td>COMPLEMENT</td></tr>
            <tr><td>&#8706;</td><td>2202</td><td>PARTIAL DIFFERENTIAL</td></tr>
            <tr><td>&#8707;</td><td>2203</td><td>THERE EXISTS</td></tr>
            <tr><td>&#8708;</td><td>2204</td><td>THERE DOES NOT EXIST</td></tr>
            <tr><td>&#8709;</td><td>2205</td><td>EMPTY SET</td></tr>
            <tr><td>&#8710;</td><td>2206</td><td>INCREMENT</td></tr>
            <tr><td>&#8711;</td><td>2207</td><td>NABLA</td></tr>
            <tr><td>&#8712;</td><td>2208</td><td>ELEMENT OF</td></tr>
            <tr><td>&#8713;</td><td>2209</td><td>NOT AN ELEMENT OF</td></tr>
            <tr><td>&#8714;</td><td>220A</td><td>SMALL ELEMENT OF</td></tr>
            <tr><td>&#8715;</td><td>220B</td><td>CONTAINS AS MEMBER</td></tr>
            <tr><td>&#8716;</td><td>220C</td><td>DOES NOT CONTAIN AS MEMBER</td></tr>
            <tr><td>&#8717;</td><td>220D</td><td>SMALL CONTAINS AS MEMBER</td></tr>
            <tr><td>&#8718;</td><td>220E</td><td>END OF PROOF</td></tr>
            <tr><td>&#8719;</td><td>220F</td><td>N-ARY PRODUCT</td></tr>
            <tr><td>&#8720;</td><td>2210</td><td>N-ARY COPRODUCT</td></tr>
            <tr><td>&#8721;</td><td>2211</td><td>N-ARY SUMMATION</td></tr>
            <tr><td>&#8722;</td><td>2212</td><td>MINUS SIGN</td></tr>
            <tr><td>&#8723;</td><td>2213</td><td>MINUS-OR-PLUS SIGN</td></tr>
            <tr><td>&#8724;</td><td>2214</td><td>DOT PLUS</td></tr>
            <tr><td>&#8725;</td><td>2215</td><td>DIVISION SLASH</td></tr>
            <tr><td>&#8726;</td><td>2216</td><td>SET MINUS</td></tr>
            <tr><td>&#8727;</td><td>2217</td><td>ASTERISK OPERATOR</td></tr>
            <tr><td>&#8728;</td><td>2218</td><td>RING OPERATOR</td></tr>
            <tr><td>&#8729;</td><td>2219</td><td>BULLET OPERATOR</td></tr>
            <tr><td>&#8730;</td><td>221A</td><td>SQUARE ROOT</td></tr>
            <tr><td>&#8731;</td><td>221B</td><td>CUBE ROOT</td></tr>
            <tr><td>&#8732;</td><td>221C</td><td>FOURTH ROOT</td></tr>
            <tr><td>&#8733;</td><td>221D</td><td>PROPORTIONAL TO</td></tr>
            <tr><td>&#8734;</td><td>221E</td><td>INFINITY</td></tr>
            <tr><td>&#8735;</td><td>221F</td><td>RIGHT ANGLE</td></tr>
            <tr><td>&#8736;</td><td>2220</td><td>ANGLE</td></tr>
            <tr><td>&#8737;</td><td>2221</td><td>MEASURED ANGLE</td></tr>
            <tr><td>&#8738;</td><td>2222</td><td>SPHERICAL ANGLE</td></tr>
            <tr><td>&#8739;</td><td>2223</td><td>DIVIDES</td></tr>
            <tr><td>&#8740;</td><td>2224</td><td>DOES NOT DIVIDE</td></tr>
            <tr><td>&#8741;</td><td>2225</td><td>PARALLEL TO</td></tr>
            <tr><td>&#8742;</td><td>2226</td><td>NOT PARALLEL TO</td></tr>
            <tr><td>&#8743;</td><td>2227</td><td>LOGICAL AND</td></tr>
            <tr><td>&#8744;</td><td>2228</td><td>LOGICAL OR</td></tr>
            <tr><td>&#8745;</td><td>2229</td><td>INTERSECTION</td></tr>
            <tr><td>&#8746;</td><td>222A</td><td>UNION</td></tr>
            <tr><td>&#8747;</td><td>222B</td><td>INTEGRAL</td></tr>
            <tr><td>&#8748;</td><td>222C</td><td>DOUBLE INTEGRAL</td></tr>
            <tr><td>&#8749;</td><td>222D</td><td>TRIPLE INTEGRAL</td></tr>
            <tr><td>&#8750;</td><td>222E</td><td>CONTOUR INTEGRAL</td></tr>
            <tr><td>&#8751;</td><td>222F</td><td>SURFACE INTEGRAL</td></tr>
            <tr><td>&#8752;</td><td>2230</td><td>VOLUME INTEGRAL</td></tr>
            <tr><td>&#8753;</td><td>2231</td><td>CLOCKWISE INTEGRAL</td></tr>
            <tr><td>&#8754;</td><td>2232</td><td>CLOCKWISE CONTOUR INTEGRAL</td></tr>
            <tr><td>&#8755;</td><td>2233</td><td>ANTICLOCKWISE CONTOUR INTEGRAL</td></tr>
            <tr><td>&#8756;</td><td>2234</td><td>THEREFORE</td></tr>
            <tr><td>&#8757;</td><td>2235</td><td>BECAUSE</td></tr>
            <tr><td>&#8758;</td><td>2236</td><td>RATIO</td></tr>
            <tr><td>&#8759;</td><td>2237</td><td>PROPORTION</td></tr>
            <tr><td>&#8760;</td><td>2238</td><td>DOT MINUS</td></tr>
            <tr><td>&#8761;</td><td>2239</td><td>EXCESS</td></tr>
            <tr><td>&#8762;</td><td>223A</td><td>GEOMETRIC PROPORTION</td></tr>
            <tr><td>&#8763;</td><td>223B</td><td>HOMOTHETIC</td></tr>
            <tr><td>&#8764;</td><td>223C</td><td>TILDE OPERATOR</td></tr>
            <tr><td>&#8765;</td><td>223D</td><td>REVERSED TILDE</td></tr>
            <tr><td>&#8766;</td><td>223E</td><td>INVERTED LAZY S</td></tr>
            <tr><td>&#8767;</td><td>223F</td><td>SINE WAVE</td></tr>
            <tr><td>&#8768;</td><td>2240</td><td>WREATH PRODUCT</td></tr>
            <tr><td>&#8769;</td><td>2241</td><td>NOT TILDE</td></tr>
            <tr><td>&#8770;</td><td>2242</td><td>MINUS TILDE</td></tr>
            <tr><td>&#8771;</td><td>2243</td><td>ASYMPTOTICALLY EQUAL TO</td></tr>
            <tr><td>&#8772;</td><td>2244</td><td>NOT ASYMPTOTICALLY EQUAL TO</td></tr>
            <tr><td>&#8773;</td><td>2245</td><td>APPROXIMATELY EQUAL TO</td></tr>
            <tr><td>&#8774;</td><td>2246</td><td>APPROXIMATELY BUT NOT ACTUALLY EQUAL TO</td></tr>
            <tr><td>&#8775;</td><td>2247</td><td>NEITHER APPROXIMATELY NOR ACTUALLY EQUAL TO</td></tr>
            <tr><td>&#8776;</td><td>2248</td><td>ALMOST EQUAL TO</td></tr>
            <tr><td>&#8777;</td><td>2249</td><td>NOT ALMOST EQUAL TO</td></tr>
            <tr><td>&#8778;</td><td>224A</td><td>ALMOST EQUAL OR EQUAL TO</td></tr>
            <tr><td>&#8779;</td><td>224B</td><td>TRIPLE TILDE</td></tr>
            <tr><td>&#8780;</td><td>224C</td><td>ALL EQUAL TO</td></tr>
            <tr><td>&#8781;</td><td>224D</td><td>EQUIVALENT TO</td></tr>
            <tr><td>&#8782;</td><td>224E</td><td>GEOMETRICALLY EQUIVALENT TO</td></tr>
            <tr><td>&#8783;</td><td>224F</td><td>DIFFERENCE BETWEEN</td></tr>
            <tr><td>&#8784;</td><td>2250</td><td>APPROACHES THE LIMIT</td></tr>
            <tr><td>&#8785;</td><td>2251</td><td>GEOMETRICALLY EQUAL TO</td></tr>
            <tr><td>&#8786;</td><td>2252</td><td>APPROXIMATELY EQUAL TO OR THE IMAGE OF</td></tr>
            <tr><td>&#8787;</td><td>2253</td><td>IMAGE OF OR APPROXIMATELY EQUAL TO</td></tr>
            <tr><td>&#8788;</td><td>2254</td><td>COLON EQUALS</td></tr>
            <tr><td>&#8789;</td><td>2255</td><td>EQUALS COLON</td></tr>
            <tr><td>&#8790;</td><td>2256</td><td>RING IN EQUAL TO</td></tr>
            <tr><td>&#8791;</td><td>2257</td><td>RING EQUAL TO</td></tr>
            <tr><td>&#8792;</td><td>2258</td><td>CORRESPONDS TO</td></tr>
            <tr><td>&#8793;</td><td>2259</td><td>ESTIMATES</td></tr>
            <tr><td>&#8794;</td><td>225A</td><td>EQUIANGULAR TO</td></tr>
            <tr><td>&#8795;</td><td>225B</td><td>STAR EQUALS</td></tr>
            <tr><td>&#8796;</td><td>225C</td><td>DELTA EQUAL TO</td></tr>
            <tr><td>&#8797;</td><td>225D</td><td>EQUAL TO BY DEFINITION</td></tr>
            <tr><td>&#8798;</td><td>225E</td><td>MEASURED BY</td></tr>
            <tr><td>&#8799;</td><td>225F</td><td>QUESTIONED EQUAL TO</td></tr>
            <tr><td>&#8800;</td><td>2260</td><td>NOT EQUAL TO</td></tr>
            <tr><td>&#8801;</td><td>2261</td><td>IDENTICAL TO</td></tr>
            <tr><td>&#8802;</td><td>2262</td><td>NOT IDENTICAL TO</td></tr>
            <tr><td>&#8803;</td><td>2263</td><td>STRICTLY EQUIVALENT TO</td></tr>
            <tr><td>&#8804;</td><td>2264</td><td>LESS-THAN OR EQUAL TO</td></tr>
            <tr><td>&#8805;</td><td>2265</td><td>GREATER-THAN OR EQUAL TO</td></tr>
            <tr><td>&#8806;</td><td>2266</td><td>LESS-THAN OVER EQUAL TO</td></tr>
            <tr><td>&#8807;</td><td>2267</td><td>GREATER-THAN OVER EQUAL TO</td></tr>
            <tr><td>&#8808;</td><td>2268</td><td>LESS-THAN BUT NOT EQUAL TO</td></tr>
            <tr><td>&#8809;</td><td>2269</td><td>GREATER-THAN BUT NOT EQUAL TO</td></tr>
            <tr><td>&#8810;</td><td>226A</td><td>MUCH LESS-THAN</td></tr>
            <tr><td>&#8811;</td><td>226B</td><td>MUCH GREATER-THAN</td></tr>
            <tr><td>&#8812;</td><td>226C</td><td>BETWEEN</td></tr>
            <tr><td>&#8813;</td><td>226D</td><td>NOT EQUIVALENT TO</td></tr>
            <tr><td>&#8814;</td><td>226E</td><td>NOT LESS-THAN</td></tr>
            <tr><td>&#8815;</td><td>226F</td><td>NOT GREATER-THAN</td></tr>
            <tr><td>&#8816;</td><td>2270</td><td>NEITHER LESS-THAN NOR EQUAL TO</td></tr>
            <tr><td>&#8817;</td><td>2271</td><td>NEITHER GREATER-THAN NOR EQUAL TO</td></tr>
            <tr><td>&#8818;</td><td>2272</td><td>LESS-THAN OR EQUIVALENT TO</td></tr>
            <tr><td>&#8819;</td><td>2273</td><td>GREATER-THAN OR EQUIVALENT TO</td></tr>
            <tr><td>&#8820;</td><td>2274</td><td>NEITHER LESS-THAN NOR EQUIVALENT TO</td></tr>
            <tr><td>&#8821;</td><td>2275</td><td>NEITHER GREATER-THAN NOR EQUIVALENT TO</td></tr>
            <tr><td>&#8822;</td><td>2276</td><td>LESS-THAN OR GREATER-THAN</td></tr>
            <tr><td>&#8823;</td><td>2277</td><td>GREATER-THAN OR LESS-THAN</td></tr>
            <tr><td>&#8824;</td><td>2278</td><td>NEITHER LESS-THAN NOR GREATER-THAN</td></tr>
            <tr><td>&#8825;</td><td>2279</td><td>NEITHER GREATER-THAN NOR LESS-THAN</td></tr>
            <tr><td>&#8826;</td><td>227A</td><td>PRECEDES</td></tr>
            <tr><td>&#8827;</td><td>227B</td><td>SUCCEEDS</td></tr>
            <tr><td>&#8828;</td><td>227C</td><td>PRECEDES OR EQUAL TO</td></tr>
            <tr><td>&#8829;</td><td>227D</td><td>SUCCEEDS OR EQUAL TO</td></tr>
            <tr><td>&#8830;</td><td>227E</td><td>PRECEDES OR EQUIVALENT TO</td></tr>
            <tr><td>&#8831;</td><td>227F</td><td>SUCCEEDS OR EQUIVALENT TO</td></tr>
            <tr><td>&#8832;</td><td>2280</td><td>DOES NOT PRECEDE</td></tr>
            <tr><td>&#8833;</td><td>2281</td><td>DOES NOT SUCCEED</td></tr>
            <tr><td>&#8834;</td><td>2282</td><td>SUBSET OF</td></tr>
            <tr><td>&#8835;</td><td>2283</td><td>SUPERSET OF</td></tr>
            <tr><td>&#8836;</td><td>2284</td><td>NOT A SUBSET OF</td></tr>
            <tr><td>&#8837;</td><td>2285</td><td>NOT A SUPERSET OF</td></tr>
            <tr><td>&#8838;</td><td>2286</td><td>SUBSET OF OR EQUAL TO</td></tr>
            <tr><td>&#8839;</td><td>2287</td><td>SUPERSET OF OR EQUAL TO</td></tr>
            <tr><td>&#8840;</td><td>2288</td><td>NEITHER A SUBSET OF NOR EQUAL TO</td></tr>
            <tr><td>&#8841;</td><td>2289</td><td>NEITHER A SUPERSET OF NOR EQUAL TO</td></tr>
            <tr><td>&#8842;</td><td>228A</td><td>SUBSET OF WITH NOT EQUAL TO</td></tr>
            <tr><td>&#8843;</td><td>228B</td><td>SUPERSET OF WITH NOT EQUAL TO</td></tr>
            <tr><td>&#8844;</td><td>228C</td><td>MULTISET</td></tr>
            <tr><td>&#8845;</td><td>228D</td><td>MULTISET MULTIPLICATION</td></tr>
            <tr><td>&#8846;</td><td>228E</td><td>MULTISET UNION</td></tr>
            <tr><td>&#8847;</td><td>228F</td><td>SQUARE IMAGE OF</td></tr>
            <tr><td>&#8848;</td><td>2290</td><td>SQUARE ORIGINAL OF</td></tr>
            <tr><td>&#8849;</td><td>2291</td><td>SQUARE IMAGE OF OR EQUAL TO</td></tr>
            <tr><td>&#8850;</td><td>2292</td><td>SQUARE ORIGINAL OF OR EQUAL TO</td></tr>
            <tr><td>&#8851;</td><td>2293</td><td>SQUARE CAP</td></tr>
            <tr><td>&#8852;</td><td>2294</td><td>SQUARE CUP</td></tr>
            <tr><td>&#8853;</td><td>2295</td><td>CIRCLED PLUS</td></tr>
            <tr><td>&#8854;</td><td>2296</td><td>CIRCLED MINUS</td></tr>
            <tr><td>&#8855;</td><td>2297</td><td>CIRCLED TIMES</td></tr>
            <tr><td>&#8856;</td><td>2298</td><td>CIRCLED DIVISION SLASH</td></tr>
            <tr><td>&#8857;</td><td>2299</td><td>CIRCLED DOT OPERATOR</td></tr>
            <tr><td>&#8858;</td><td>229A</td><td>CIRCLED RING OPERATOR</td></tr>
            <tr><td>&#8859;</td><td>229B</td><td>CIRCLED ASTERISK OPERATOR</td></tr>
            <tr><td>&#8860;</td><td>229C</td><td>CIRCLED EQUALS</td></tr>
            <tr><td>&#8861;</td><td>229D</td><td>CIRCLED DASH</td></tr>
            <tr><td>&#8862;</td><td>229E</td><td>SQUARED PLUS</td></tr>
            <tr><td>&#8863;</td><td>229F</td><td>SQUARED MINUS</td></tr>
            <tr><td>&#8864;</td><td>22A0</td><td>SQUARED TIMES</td></tr>
            <tr><td>&#8865;</td><td>22A1</td><td>SQUARED DOT OPERATOR</td></tr>
            <tr><td>&#8866;</td><td>22A2</td><td>RIGHT TACK</td></tr>
            <tr><td>&#8867;</td><td>22A3</td><td>LEFT TACK</td></tr>
            <tr><td>&#8868;</td><td>22A4</td><td>DOWN TACK</td></tr>
            <tr><td>&#8869;</td><td>22A5</td><td>UP TACK</td></tr>
            <tr><td>&#8870;</td><td>22A6</td><td>ASSERTION</td></tr>
            <tr><td>&#8871;</td><td>22A7</td><td>MODELS</td></tr>
            <tr><td>&#8872;</td><td>22A8</td><td>TRUE</td></tr>
            <tr><td>&#8873;</td><td>22A9</td><td>FORCES</td></tr>
            <tr><td>&#8874;</td><td>22AA</td><td>TRIPLE VERTICAL BAR RIGHT TURNSTILE</td></tr>
            <tr><td>&#8875;</td><td>22AB</td><td>DOUBLE VERTICAL BAR DOUBLE RIGHT TURNSTILE</td></tr>
            <tr><td>&#8876;</td><td>22AC</td><td>DOES NOT PROVE</td></tr>
            <tr><td>&#8877;</td><td>22AD</td><td>NOT TRUE</td></tr>
            <tr><td>&#8878;</td><td>22AE</td><td>DOES NOT FORCE</td></tr>
            <tr><td>&#8879;</td><td>22AF</td><td>NEGATED DOUBLE VERTICAL BAR DOUBLE RIGHT TURNSTILE</td></tr>
            <tr><td>&#8880;</td><td>22B0</td><td>PRECEDES UNDER RELATION</td></tr>
            <tr><td>&#8881;</td><td>22B1</td><td>SUCCEEDS UNDER RELATION</td></tr>
            <tr><td>&#8882;</td><td>22B2</td><td>NORMAL SUBGROUP OF</td></tr>
            <tr><td>&#8883;</td><td>22B3</td><td>CONTAINS AS NORMAL SUBGROUP</td></tr>
            <tr><td>&#8884;</td><td>22B4</td><td>NORMAL SUBGROUP OF OR EQUAL TO</td></tr>
            <tr><td>&#8885;</td><td>22B5</td><td>CONTAINS AS NORMAL SUBGROUP OR EQUAL TO</td></tr>
            <tr><td>&#8886;</td><td>22B6</td><td>ORIGINAL OF</td></tr>
            <tr><td>&#8887;</td><td>22B7</td><td>IMAGE OF</td></tr>
            <tr><td>&#8888;</td><td>22B8</td><td>MULTIMAP</td></tr>
            <tr><td>&#8889;</td><td>22B9</td><td>HERMITIAN CONJUGATE MATRIX</td></tr>
            <tr><td>&#8890;</td><td>22BA</td><td>INTERCALATE</td></tr>
            <tr><td>&#8891;</td><td>22BB</td><td>XOR</td></tr>
            <tr><td>&#8892;</td><td>22BC</td><td>NAND</td></tr>
            <tr><td>&#8893;</td><td>22BD</td><td>NOR</td></tr>
            <tr><td>&#8894;</td><td>22BE</td><td>RIGHT ANGLE WITH ARC</td></tr>
            <tr><td>&#8895;</td><td>22BF</td><td>RIGHT TRIANGLE</td></tr>
            <tr><td>&#8896;</td><td>22C0</td><td>N-ARY LOGICAL AND</td></tr>
            <tr><td>&#8897;</td><td>22C1</td><td>N-ARY LOGICAL OR</td></tr>
            <tr><td>&#8898;</td><td>22C2</td><td>N-ARY INTERSECTION</td></tr>
            <tr><td>&#8899;</td><td>22C3</td><td>N-ARY UNION</td></tr>
            <tr><td>&#8900;</td><td>22C4</td><td>DIAMOND OPERATOR</td></tr>
            <tr><td>&#8901;</td><td>22C5</td><td>DOT OPERATOR</td></tr>
            <tr><td>&#8902;</td><td>22C6</td><td>STAR OPERATOR</td></tr>
            <tr><td>&#8903;</td><td>22C7</td><td>DIVISION TIMES</td></tr>
            <tr><td>&#8904;</td><td>22C8</td><td>BOWTIE</td></tr>
            <tr><td>&#8905;</td><td>22C9</td><td>LEFT NORMAL FACTOR SEMIDIRECT PRODUCT</td></tr>
            <tr><td>&#8906;</td><td>22CA</td><td>RIGHT NORMAL FACTOR SEMIDIRECT PRODUCT</td></tr>
            <tr><td>&#8907;</td><td>22CB</td><td>LEFT SEMIDIRECT PRODUCT</td></tr>
            <tr><td>&#8908;</td><td>22CC</td><td>RIGHT SEMIDIRECT PRODUCT</td></tr>
            <tr><td>&#8909;</td><td>22CD</td><td>REVERSED TILDE EQUALS</td></tr>
            <tr><td>&#8910;</td><td>22CE</td><td>CURLY LOGICAL OR</td></tr>
            <tr><td>&#8911;</td><td>22CF</td><td>CURLY LOGICAL AND</td></tr>
            <tr><td>&#8912;</td><td>22D0</td><td>DOUBLE SUBSET</td></tr>
            <tr><td>&#8913;</td><td>22D1</td><td>DOUBLE SUPERSET</td></tr>
            <tr><td>&#8914;</td><td>22D2</td><td>DOUBLE INTERSECTION</td></tr>
            <tr><td>&#8915;</td><td>22D3</td><td>DOUBLE UNION</td></tr>
            <tr><td>&#8916;</td><td>22D4</td><td>PITCHFORK</td></tr>
            <tr><td>&#8917;</td><td>22D5</td><td>EQUAL AND PARALLEL TO</td></tr>
            <tr><td>&#8918;</td><td>22D6</td><td>LESS-THAN WITH DOT</td></tr>
            <tr><td>&#8919;</td><td>22D7</td><td>GREATER-THAN WITH DOT</td></tr>
            <tr><td>&#8920;</td><td>22D8</td><td>VERY MUCH LESS-THAN</td></tr>
            <tr><td>&#8921;</td><td>22D9</td><td>VERY MUCH GREATER-THAN</td></tr>
            <tr><td>&#8922;</td><td>22DA</td><td>LESS-THAN EQUAL TO OR GREATER-THAN</td></tr>
            <tr><td>&#8923;</td><td>22DB</td><td>GREATER-THAN EQUAL TO OR LESS-THAN</td></tr>
            <tr><td>&#8924;</td><td>22DC</td><td>EQUAL TO OR LESS-THAN</td></tr>
            <tr><td>&#8925;</td><td>22DD</td><td>EQUAL TO OR GREATER-THAN</td></tr>
            <tr><td>&#8926;</td><td>22DE</td><td>EQUAL TO OR PRECEDES</td></tr>
            <tr><td>&#8927;</td><td>22DF</td><td>EQUAL TO OR SUCCEEDS</td></tr>
            <tr><td>&#8928;</td><td>22E0</td><td>DOES NOT PRECEDE OR EQUAL</td></tr>
            <tr><td>&#8929;</td><td>22E1</td><td>DOES NOT SUCCEED OR EQUAL</td></tr>
            <tr><td>&#8930;</td><td>22E2</td><td>NOT SQUARE IMAGE OF OR EQUAL TO</td></tr>
            <tr><td>&#8931;</td><td>22E3</td><td>NOT SQUARE ORIGINAL OF OR EQUAL TO</td></tr>
            <tr><td>&#8932;</td><td>22E4</td><td>SQUARE IMAGE OF OR NOT EQUAL TO</td></tr>
            <tr><td>&#8933;</td><td>22E5</td><td>SQUARE ORIGINAL OF OR NOT EQUAL TO</td></tr>
            <tr><td>&#8934;</td><td>22E6</td><td>LESS-THAN BUT NOT EQUIVALENT TO</td></tr>
            <tr><td>&#8935;</td><td>22E7</td><td>GREATER-THAN BUT NOT EQUIVALENT TO</td></tr>
            <tr><td>&#8936;</td><td>22E8</td><td>PRECEDES BUT NOT EQUIVALENT TO</td></tr>
            <tr><td>&#8937;</td><td>22E9</td><td>SUCCEEDS BUT NOT EQUIVALENT TO</td></tr>
            <tr><td>&#8938;</td><td>22EA</td><td>NOT NORMAL SUBGROUP OF</td></tr>
            <tr><td>&#8939;</td><td>22EB</td><td>DOES NOT CONTAIN AS NORMAL SUBGROUP</td></tr>
            <tr><td>&#8940;</td><td>22EC</td><td>NOT NORMAL SUBGROUP OF OR EQUAL TO</td></tr>
            <tr><td>&#8941;</td><td>22ED</td><td>DOES NOT CONTAIN AS NORMAL SUBGROUP OR EQUAL</td></tr>
            <tr><td>&#8942;</td><td>22EE</td><td>VERTICAL ELLIPSIS</td></tr>
            <tr><td>&#8943;</td><td>22EF</td><td>MIDLINE HORIZONTAL ELLIPSIS</td></tr>
            <tr><td>&#8944;</td><td>22F0</td><td>UP RIGHT DIAGONAL ELLIPSIS</td></tr>
            <tr><td>&#8945;</td><td>22F1</td><td>DOWN RIGHT DIAGONAL ELLIPSIS</td></tr>
            <tr><td>&#8946;</td><td>22F2</td><td>ELEMENT OF WITH LONG HORIZONTAL STROKE</td></tr>
            <tr><td>&#8947;</td><td>22F3</td><td>ELEMENT OF WITH VERTICAL BAR AT END OF HORIZONTAL STROKE</td></tr>
            <tr><td>&#8948;</td><td>22F4</td><td>SMALL ELEMENT OF WITH VERTICAL BAR AT END OF HORIZONTAL STROKE</td></tr>
            <tr><td>&#8949;</td><td>22F5</td><td>ELEMENT OF WITH DOT ABOVE</td></tr>
            <tr><td>&#8950;</td><td>22F6</td><td>ELEMENT OF WITH OVERBAR</td></tr>
            <tr><td>&#8951;</td><td>22F7</td><td>SMALL ELEMENT OF WITH OVERBAR</td></tr>
            <tr><td>&#8952;</td><td>22F8</td><td>ELEMENT OF WITH UNDERBAR</td></tr>
            <tr><td>&#8953;</td><td>22F9</td><td>ELEMENT OF WITH TWO HORIZONTAL STROKES</td></tr>
            <tr><td>&#8954;</td><td>22FA</td><td>CONTAINS WITH LONG HORIZONTAL STROKE</td></tr>
            <tr><td>&#8955;</td><td>22FB</td><td>CONTAINS WITH VERTICAL BAR AT END OF HORIZONTAL STROKE</td></tr>
            <tr><td>&#8956;</td><td>22FC</td><td>SMALL CONTAINS WITH VERTICAL BAR AT END OF HORIZONTAL STROKE</td></tr>
            <tr><td>&#8957;</td><td>22FD</td><td>CONTAINS WITH OVERBAR</td></tr>
            <tr><td>&#8958;</td><td>22FE</td><td>SMALL CONTAINS WITH OVERBAR</td></tr>
            <tr><td>&#8959;</td><td>22FF</td><td>Z NOTATION BAG MEMBERSHIP</td></tr>
            <tr><td>&#9472;</td><td>2500</td><td>BOX DRAWINGS LIGHT HORIZONTAL</td></tr>
            <tr><td>&#9473;</td><td>2501</td><td>BOX DRAWINGS HEAVY HORIZONTAL</td></tr>
            <tr><td>&#9474;</td><td>2502</td><td>BOX DRAWINGS LIGHT VERTICAL</td></tr>
            <tr><td>&#9475;</td><td>2503</td><td>BOX DRAWINGS HEAVY VERTICAL</td></tr>
            <tr><td>&#9476;</td><td>2504</td><td>BOX DRAWINGS LIGHT TRIPLE DASH HORIZONTAL</td></tr>
            <tr><td>&#9477;</td><td>2505</td><td>BOX DRAWINGS HEAVY TRIPLE DASH HORIZONTAL</td></tr>
            <tr><td>&#9478;</td><td>2506</td><td>BOX DRAWINGS LIGHT TRIPLE DASH VERTICAL</td></tr>
            <tr><td>&#9479;</td><td>2507</td><td>BOX DRAWINGS HEAVY TRIPLE DASH VERTICAL</td></tr>
            <tr><td>&#9480;</td><td>2508</td><td>BOX DRAWINGS LIGHT QUADRUPLE DASH HORIZONTAL</td></tr>
            <tr><td>&#9481;</td><td>2509</td><td>BOX DRAWINGS HEAVY QUADRUPLE DASH HORIZONTAL</td></tr>
            <tr><td>&#9482;</td><td>250A</td><td>BOX DRAWINGS LIGHT QUADRUPLE DASH VERTICAL</td></tr>
            <tr><td>&#9483;</td><td>250B</td><td>BOX DRAWINGS HEAVY QUADRUPLE DASH VERTICAL</td></tr>
            <tr><td>&#9484;</td><td>250C</td><td>BOX DRAWINGS LIGHT DOWN AND RIGHT</td></tr>
            <tr><td>&#9485;</td><td>250D</td><td>BOX DRAWINGS DOWN LIGHT AND RIGHT HEAVY</td></tr>
            <tr><td>&#9486;</td><td>250E</td><td>BOX DRAWINGS DOWN HEAVY AND RIGHT LIGHT</td></tr>
            <tr><td>&#9487;</td><td>250F</td><td>BOX DRAWINGS HEAVY DOWN AND RIGHT</td></tr>
            <tr><td>&#9488;</td><td>2510</td><td>BOX DRAWINGS LIGHT DOWN AND LEFT</td></tr>
            <tr><td>&#9489;</td><td>2511</td><td>BOX DRAWINGS DOWN LIGHT AND LEFT HEAVY</td></tr>
            <tr><td>&#9490;</td><td>2512</td><td>BOX DRAWINGS DOWN HEAVY AND LEFT LIGHT</td></tr>
            <tr><td>&#9491;</td><td>2513</td><td>BOX DRAWINGS HEAVY DOWN AND LEFT</td></tr>
            <tr><td>&#9492;</td><td>2514</td><td>BOX DRAWINGS LIGHT UP AND RIGHT</td></tr>
            <tr><td>&#9493;</td><td>2515</td><td>BOX DRAWINGS UP LIGHT AND RIGHT HEAVY</td></tr>
            <tr><td>&#9494;</td><td>2516</td><td>BOX DRAWINGS UP HEAVY AND RIGHT LIGHT</td></tr>
            <tr><td>&#9495;</td><td>2517</td><td>BOX DRAWINGS HEAVY UP AND RIGHT</td></tr>
            <tr><td>&#9496;</td><td>2518</td><td>BOX DRAWINGS LIGHT UP AND LEFT</td></tr>
            <tr><td>&#9497;</td><td>2519</td><td>BOX DRAWINGS UP LIGHT AND LEFT HEAVY</td></tr>
            <tr><td>&#9498;</td><td>251A</td><td>BOX DRAWINGS UP HEAVY AND LEFT LIGHT</td></tr>
            <tr><td>&#9499;</td><td>251B</td><td>BOX DRAWINGS HEAVY UP AND LEFT</td></tr>
            <tr><td>&#9500;</td><td>251C</td><td>BOX DRAWINGS LIGHT VERTICAL AND RIGHT</td></tr>
            <tr><td>&#9501;</td><td>251D</td><td>BOX DRAWINGS VERTICAL LIGHT AND RIGHT HEAVY</td></tr>
            <tr><td>&#9502;</td><td>251E</td><td>BOX DRAWINGS UP HEAVY AND RIGHT DOWN LIGHT</td></tr>
            <tr><td>&#9503;</td><td>251F</td><td>BOX DRAWINGS DOWN HEAVY AND RIGHT UP LIGHT</td></tr>
            <tr><td>&#9504;</td><td>2520</td><td>BOX DRAWINGS VERTICAL HEAVY AND RIGHT LIGHT</td></tr>
            <tr><td>&#9505;</td><td>2521</td><td>BOX DRAWINGS DOWN LIGHT AND RIGHT UP HEAVY</td></tr>
            <tr><td>&#9506;</td><td>2522</td><td>BOX DRAWINGS UP LIGHT AND RIGHT DOWN HEAVY</td></tr>
            <tr><td>&#9507;</td><td>2523</td><td>BOX DRAWINGS HEAVY VERTICAL AND RIGHT</td></tr>
            <tr><td>&#9508;</td><td>2524</td><td>BOX DRAWINGS LIGHT VERTICAL AND LEFT</td></tr>
            <tr><td>&#9509;</td><td>2525</td><td>BOX DRAWINGS VERTICAL LIGHT AND LEFT HEAVY</td></tr>
            <tr><td>&#9510;</td><td>2526</td><td>BOX DRAWINGS UP HEAVY AND LEFT DOWN LIGHT</td></tr>
            <tr><td>&#9511;</td><td>2527</td><td>BOX DRAWINGS DOWN HEAVY AND LEFT UP LIGHT</td></tr>
            <tr><td>&#9512;</td><td>2528</td><td>BOX DRAWINGS VERTICAL HEAVY AND LEFT LIGHT</td></tr>
            <tr><td>&#9513;</td><td>2529</td><td>BOX DRAWINGS DOWN LIGHT AND LEFT UP HEAVY</td></tr>
            <tr><td>&#9514;</td><td>252A</td><td>BOX DRAWINGS UP LIGHT AND LEFT DOWN HEAVY</td></tr>
            <tr><td>&#9515;</td><td>252B</td><td>BOX DRAWINGS HEAVY VERTICAL AND LEFT</td></tr>
            <tr><td>&#9516;</td><td>252C</td><td>BOX DRAWINGS LIGHT DOWN AND HORIZONTAL</td></tr>
            <tr><td>&#9517;</td><td>252D</td><td>BOX DRAWINGS LEFT HEAVY AND RIGHT DOWN LIGHT</td></tr>
            <tr><td>&#9518;</td><td>252E</td><td>BOX DRAWINGS RIGHT HEAVY AND LEFT DOWN LIGHT</td></tr>
            <tr><td>&#9519;</td><td>252F</td><td>BOX DRAWINGS DOWN LIGHT AND HORIZONTAL HEAVY</td></tr>
            <tr><td>&#9520;</td><td>2530</td><td>BOX DRAWINGS DOWN HEAVY AND HORIZONTAL LIGHT</td></tr>
            <tr><td>&#9521;</td><td>2531</td><td>BOX DRAWINGS RIGHT LIGHT AND LEFT DOWN HEAVY</td></tr>
            <tr><td>&#9522;</td><td>2532</td><td>BOX DRAWINGS LEFT LIGHT AND RIGHT DOWN HEAVY</td></tr>
            <tr><td>&#9523;</td><td>2533</td><td>BOX DRAWINGS HEAVY DOWN AND HORIZONTAL</td></tr>
            <tr><td>&#9524;</td><td>2534</td><td>BOX DRAWINGS LIGHT UP AND HORIZONTAL</td></tr>
            <tr><td>&#9525;</td><td>2535</td><td>BOX DRAWINGS LEFT HEAVY AND RIGHT UP LIGHT</td></tr>
            <tr><td>&#9526;</td><td>2536</td><td>BOX DRAWINGS RIGHT HEAVY AND LEFT UP LIGHT</td></tr>
            <tr><td>&#9527;</td><td>2537</td><td>BOX DRAWINGS UP LIGHT AND HORIZONTAL HEAVY</td></tr>
            <tr><td>&#9528;</td><td>2538</td><td>BOX DRAWINGS UP HEAVY AND HORIZONTAL LIGHT</td></tr>
            <tr><td>&#9529;</td><td>2539</td><td>BOX DRAWINGS RIGHT LIGHT AND LEFT UP HEAVY</td></tr>
            <tr><td>&#9530;</td><td>253A</td><td>BOX DRAWINGS LEFT LIGHT AND RIGHT UP HEAVY</td></tr>
            <tr><td>&#9531;</td><td>253B</td><td>BOX DRAWINGS HEAVY UP AND HORIZONTAL</td></tr>
            <tr><td>&#9532;</td><td>253C</td><td>BOX DRAWINGS LIGHT VERTICAL AND HORIZONTAL</td></tr>
            <tr><td>&#9533;</td><td>253D</td><td>BOX DRAWINGS LEFT HEAVY AND RIGHT VERTICAL LIGHT</td></tr>
            <tr><td>&#9534;</td><td>253E</td><td>BOX DRAWINGS RIGHT HEAVY AND LEFT VERTICAL LIGHT</td></tr>
            <tr><td>&#9535;</td><td>253F</td><td>BOX DRAWINGS VERTICAL LIGHT AND HORIZONTAL HEAVY</td></tr>
            <tr><td>&#9536;</td><td>2540</td><td>BOX DRAWINGS UP HEAVY AND DOWN HORIZONTAL LIGHT</td></tr>
            <tr><td>&#9537;</td><td>2541</td><td>BOX DRAWINGS DOWN HEAVY AND UP HORIZONTAL LIGHT</td></tr>
            <tr><td>&#9538;</td><td>2542</td><td>BOX DRAWINGS VERTICAL HEAVY AND HORIZONTAL LIGHT</td></tr>
            <tr><td>&#9539;</td><td>2543</td><td>BOX DRAWINGS LEFT UP HEAVY AND RIGHT DOWN LIGHT</td></tr>
            <tr><td>&#9540;</td><td>2544</td><td>BOX DRAWINGS RIGHT UP HEAVY AND LEFT DOWN LIGHT</td></tr>
            <tr><td>&#9541;</td><td>2545</td><td>BOX DRAWINGS LEFT DOWN HEAVY AND RIGHT UP LIGHT</td></tr>
            <tr><td>&#9542;</td><td>2546</td><td>BOX DRAWINGS RIGHT DOWN HEAVY AND LEFT UP LIGHT</td></tr>
            <tr><td>&#9543;</td><td>2547</td><td>BOX DRAWINGS DOWN LIGHT AND UP HORIZONTAL HEAVY</td></tr>
            <tr><td>&#9544;</td><td>2548</td><td>BOX DRAWINGS UP LIGHT AND DOWN HORIZONTAL HEAVY</td></tr>
            <tr><td>&#9545;</td><td>2549</td><td>BOX DRAWINGS RIGHT LIGHT AND LEFT VERTICAL HEAVY</td></tr>
            <tr><td>&#9546;</td><td>254A</td><td>BOX DRAWINGS LEFT LIGHT AND RIGHT VERTICAL HEAVY</td></tr>
            <tr><td>&#9547;</td><td>254B</td><td>BOX DRAWINGS HEAVY VERTICAL AND HORIZONTAL</td></tr>
            <tr><td>&#9548;</td><td>254C</td><td>BOX DRAWINGS LIGHT DOUBLE DASH HORIZONTAL</td></tr>
            <tr><td>&#9549;</td><td>254D</td><td>BOX DRAWINGS HEAVY DOUBLE DASH HORIZONTAL</td></tr>
            <tr><td>&#9550;</td><td>254E</td><td>BOX DRAWINGS LIGHT DOUBLE DASH VERTICAL</td></tr>
            <tr><td>&#9551;</td><td>254F</td><td>BOX DRAWINGS HEAVY DOUBLE DASH VERTICAL</td></tr>
            <tr><td>&#9552;</td><td>2550</td><td>BOX DRAWINGS DOUBLE HORIZONTAL</td></tr>
            <tr><td>&#9553;</td><td>2551</td><td>BOX DRAWINGS DOUBLE VERTICAL</td></tr>
            <tr><td>&#9554;</td><td>2552</td><td>BOX DRAWINGS DOWN SINGLE AND RIGHT DOUBLE</td></tr>
            <tr><td>&#9555;</td><td>2553</td><td>BOX DRAWINGS DOWN DOUBLE AND RIGHT SINGLE</td></tr>
            <tr><td>&#9556;</td><td>2554</td><td>BOX DRAWINGS DOUBLE DOWN AND RIGHT</td></tr>
            <tr><td>&#9557;</td><td>2555</td><td>BOX DRAWINGS DOWN SINGLE AND LEFT DOUBLE</td></tr>
            <tr><td>&#9558;</td><td>2556</td><td>BOX DRAWINGS DOWN DOUBLE AND LEFT SINGLE</td></tr>
            <tr><td>&#9559;</td><td>2557</td><td>BOX DRAWINGS DOUBLE DOWN AND LEFT</td></tr>
            <tr><td>&#9560;</td><td>2558</td><td>BOX DRAWINGS UP SINGLE AND RIGHT DOUBLE</td></tr>
            <tr><td>&#9561;</td><td>2559</td><td>BOX DRAWINGS UP DOUBLE AND RIGHT SINGLE</td></tr>
            <tr><td>&#9562;</td><td>255A</td><td>BOX DRAWINGS DOUBLE UP AND RIGHT</td></tr>
            <tr><td>&#9563;</td><td>255B</td><td>BOX DRAWINGS UP SINGLE AND LEFT DOUBLE</td></tr>
            <tr><td>&#9564;</td><td>255C</td><td>BOX DRAWINGS UP DOUBLE AND LEFT SINGLE</td></tr>
            <tr><td>&#9565;</td><td>255D</td><td>BOX DRAWINGS DOUBLE UP AND LEFT</td></tr>
            <tr><td>&#9566;</td><td>255E</td><td>BOX DRAWINGS VERTICAL SINGLE AND RIGHT DOUBLE</td></tr>
            <tr><td>&#9567;</td><td>255F</td><td>BOX DRAWINGS VERTICAL DOUBLE AND RIGHT SINGLE</td></tr>
            <tr><td>&#9568;</td><td>2560</td><td>BOX DRAWINGS DOUBLE VERTICAL AND RIGHT</td></tr>
            <tr><td>&#9569;</td><td>2561</td><td>BOX DRAWINGS VERTICAL SINGLE AND LEFT DOUBLE</td></tr>
            <tr><td>&#9570;</td><td>2562</td><td>BOX DRAWINGS VERTICAL DOUBLE AND LEFT SINGLE</td></tr>
            <tr><td>&#9571;</td><td>2563</td><td>BOX DRAWINGS DOUBLE VERTICAL AND LEFT</td></tr>
            <tr><td>&#9572;</td><td>2564</td><td>BOX DRAWINGS DOWN SINGLE AND HORIZONTAL DOUBLE</td></tr>
            <tr><td>&#9573;</td><td>2565</td><td>BOX DRAWINGS DOWN DOUBLE AND HORIZONTAL SINGLE</td></tr>
            <tr><td>&#9574;</td><td>2566</td><td>BOX DRAWINGS DOUBLE DOWN AND HORIZONTAL</td></tr>
            <tr><td>&#9575;</td><td>2567</td><td>BOX DRAWINGS UP SINGLE AND HORIZONTAL DOUBLE</td></tr>
            <tr><td>&#9576;</td><td>2568</td><td>BOX DRAWINGS UP DOUBLE AND HORIZONTAL SINGLE</td></tr>
            <tr><td>&#9577;</td><td>2569</td><td>BOX DRAWINGS DOUBLE UP AND HORIZONTAL</td></tr>
            <tr><td>&#9578;</td><td>256A</td><td>BOX DRAWINGS VERTICAL SINGLE AND HORIZONTAL DOUBLE</td></tr>
            <tr><td>&#9579;</td><td>256B</td><td>BOX DRAWINGS VERTICAL DOUBLE AND HORIZONTAL SINGLE</td></tr>
            <tr><td>&#9580;</td><td>256C</td><td>BOX DRAWINGS DOUBLE VERTICAL AND HORIZONTAL</td></tr>
            <tr><td>&#9581;</td><td>256D</td><td>BOX DRAWINGS LIGHT ARC DOWN AND RIGHT</td></tr>
            <tr><td>&#9582;</td><td>256E</td><td>BOX DRAWINGS LIGHT ARC DOWN AND LEFT</td></tr>
            <tr><td>&#9583;</td><td>256F</td><td>BOX DRAWINGS LIGHT ARC UP AND LEFT</td></tr>
            <tr><td>&#9584;</td><td>2570</td><td>BOX DRAWINGS LIGHT ARC UP AND RIGHT</td></tr>
            <tr><td>&#9585;</td><td>2571</td><td>BOX DRAWINGS LIGHT DIAGONAL UPPER RIGHT TO LOWER LEFT</td></tr>
            <tr><td>&#9586;</td><td>2572</td><td>BOX DRAWINGS LIGHT DIAGONAL UPPER LEFT TO LOWER RIGHT</td></tr>
            <tr><td>&#9587;</td><td>2573</td><td>BOX DRAWINGS LIGHT DIAGONAL CROSS</td></tr>
            <tr><td>&#9588;</td><td>2574</td><td>BOX DRAWINGS LIGHT LEFT</td></tr>
            <tr><td>&#9589;</td><td>2575</td><td>BOX DRAWINGS LIGHT UP</td></tr>
            <tr><td>&#9590;</td><td>2576</td><td>BOX DRAWINGS LIGHT RIGHT</td></tr>
            <tr><td>&#9591;</td><td>2577</td><td>BOX DRAWINGS LIGHT DOWN</td></tr>
            <tr><td>&#9592;</td><td>2578</td><td>BOX DRAWINGS HEAVY LEFT</td></tr>
            <tr><td>&#9593;</td><td>2579</td><td>BOX DRAWINGS HEAVY UP</td></tr>
            <tr><td>&#9594;</td><td>257A</td><td>BOX DRAWINGS HEAVY RIGHT</td></tr>
            <tr><td>&#9595;</td><td>257B</td><td>BOX DRAWINGS HEAVY DOWN</td></tr>
            <tr><td>&#9596;</td><td>257C</td><td>BOX DRAWINGS LIGHT LEFT AND HEAVY RIGHT</td></tr>
            <tr><td>&#9597;</td><td>257D</td><td>BOX DRAWINGS LIGHT UP AND HEAVY DOWN</td></tr>
            <tr><td>&#9598;</td><td>257E</td><td>BOX DRAWINGS HEAVY LEFT AND LIGHT RIGHT</td></tr>
            <tr><td>&#9599;</td><td>257F</td><td>BOX DRAWINGS HEAVY UP AND LIGHT DOWN</td></tr>
            <tr><td>&#9600;</td><td>2580</td><td>UPPER HALF BLOCK</td></tr>
            <tr><td>&#9601;</td><td>2581</td><td>LOWER ONE EIGHTH BLOCK</td></tr>
            <tr><td>&#9602;</td><td>2582</td><td>LOWER ONE QUARTER BLOCK</td></tr>
            <tr><td>&#9603;</td><td>2583</td><td>LOWER THREE EIGHTHS BLOCK</td></tr>
            <tr><td>&#9604;</td><td>2584</td><td>LOWER HALF BLOCK</td></tr>
            <tr><td>&#9605;</td><td>2585</td><td>LOWER FIVE EIGHTHS BLOCK</td></tr>
            <tr><td>&#9606;</td><td>2586</td><td>LOWER THREE QUARTERS BLOCK</td></tr>
            <tr><td>&#9607;</td><td>2587</td><td>LOWER SEVEN EIGHTHS BLOCK</td></tr>
            <tr><td>&#9608;</td><td>2588</td><td>FULL BLOCK</td></tr>
            <tr><td>&#9609;</td><td>2589</td><td>LEFT SEVEN EIGHTHS BLOCK</td></tr>
            <tr><td>&#9610;</td><td>258A</td><td>LEFT THREE QUARTERS BLOCK</td></tr>
            <tr><td>&#9611;</td><td>258B</td><td>LEFT FIVE EIGHTHS BLOCK</td></tr>
            <tr><td>&#9612;</td><td>258C</td><td>LEFT HALF BLOCK</td></tr>
            <tr><td>&#9613;</td><td>258D</td><td>LEFT THREE EIGHTHS BLOCK</td></tr>
            <tr><td>&#9614;</td><td>258E</td><td>LEFT ONE QUARTER BLOCK</td></tr>
            <tr><td>&#9615;</td><td>258F</td><td>LEFT ONE EIGHTH BLOCK</td></tr>
            <tr><td>&#9616;</td><td>2590</td><td>RIGHT HALF BLOCK</td></tr>
            <tr><td>&#9617;</td><td>2591</td><td>LIGHT SHADE</td></tr>
            <tr><td>&#9618;</td><td>2592</td><td>MEDIUM SHADE</td></tr>
            <tr><td>&#9619;</td><td>2593</td><td>DARK SHADE</td></tr>
            <tr><td>&#9620;</td><td>2594</td><td>UPPER ONE EIGHTH BLOCK</td></tr>
            <tr><td>&#9621;</td><td>2595</td><td>RIGHT ONE EIGHTH BLOCK</td></tr>
            <tr><td>&#9622;</td><td>2596</td><td>QUADRANT LOWER LEFT</td></tr>
            <tr><td>&#9623;</td><td>2597</td><td>QUADRANT LOWER RIGHT</td></tr>
            <tr><td>&#9624;</td><td>2598</td><td>QUADRANT UPPER LEFT</td></tr>
            <tr><td>&#9625;</td><td>2599</td><td>QUADRANT UPPER LEFT AND LOWER LEFT AND LOWER RIGHT</td></tr>
            <tr><td>&#9626;</td><td>259A</td><td>QUADRANT UPPER LEFT AND LOWER RIGHT</td></tr>
            <tr><td>&#9627;</td><td>259B</td><td>QUADRANT UPPER LEFT AND UPPER RIGHT AND LOWER LEFT</td></tr>
            <tr><td>&#9628;</td><td>259C</td><td>QUADRANT UPPER LEFT AND UPPER RIGHT AND LOWER RIGHT</td></tr>
            <tr><td>&#9629;</td><td>259D</td><td>QUADRANT UPPER RIGHT</td></tr>
            <tr><td>&#9630;</td><td>259E</td><td>QUADRANT UPPER RIGHT AND LOWER LEFT</td></tr>
            <tr><td>&#9631;</td><td>259F</td><td>QUADRANT UPPER RIGHT AND LOWER LEFT AND LOWER RIGHT</td></tr>
            <tr><td>&#9632;</td><td>25A0</td><td>BLACK SQUARE</td></tr>
            <tr><td>&#9633;</td><td>25A1</td><td>WHITE SQUARE</td></tr>
            <tr><td>&#9634;</td><td>25A2</td><td>WHITE SQUARE WITH ROUNDED CORNERS</td></tr>
            <tr><td>&#9635;</td><td>25A3</td><td>WHITE SQUARE CONTAINING BLACK SMALL SQUARE</td></tr>
            <tr><td>&#9636;</td><td>25A4</td><td>SQUARE WITH HORIZONTAL FILL</td></tr>
            <tr><td>&#9637;</td><td>25A5</td><td>SQUARE WITH VERTICAL FILL</td></tr>
            <tr><td>&#9638;</td><td>25A6</td><td>SQUARE WITH ORTHOGONAL CROSSHATCH FILL</td></tr>
            <tr><td>&#9639;</td><td>25A7</td><td>SQUARE WITH UPPER LEFT TO LOWER RIGHT FILL</td></tr>
            <tr><td>&#9640;</td><td>25A8</td><td>SQUARE WITH UPPER RIGHT TO LOWER LEFT FILL</td></tr>
            <tr><td>&#9641;</td><td>25A9</td><td>SQUARE WITH DIAGONAL CROSSHATCH FILL</td></tr>
            <tr><td>&#9642;</td><td>25AA</td><td>BLACK SMALL SQUARE</td></tr>
            <tr><td>&#9643;</td><td>25AB</td><td>WHITE SMALL SQUARE</td></tr>
            <tr><td>&#9644;</td><td>25AC</td><td>BLACK RECTANGLE</td></tr>
            <tr><td>&#9645;</td><td>25AD</td><td>WHITE RECTANGLE</td></tr>
            <tr><td>&#9646;</td><td>25AE</td><td>BLACK VERTICAL RECTANGLE</td></tr>
            <tr><td>&#9647;</td><td>25AF</td><td>WHITE VERTICAL RECTANGLE</td></tr>
            <tr><td>&#9648;</td><td>25B0</td><td>BLACK PARALLELOGRAM</td></tr>
            <tr><td>&#9649;</td><td>25B1</td><td>WHITE PARALLELOGRAM</td></tr>
            <tr><td>&#9650;</td><td>25B2</td><td>BLACK UP-POINTING TRIANGLE</td></tr>
            <tr><td>&#9651;</td><td>25B3</td><td>WHITE UP-POINTING TRIANGLE</td></tr>
            <tr><td>&#9652;</td><td>25B4</td><td>BLACK UP-POINTING SMALL TRIANGLE</td></tr>
            <tr><td>&#9653;</td><td>25B5</td><td>WHITE UP-POINTING SMALL TRIANGLE</td></tr>
            <tr><td>&#9654;</td><td>25B6</td><td>BLACK RIGHT-POINTING TRIANGLE</td></tr>
            <tr><td>&#9655;</td><td>25B7</td><td>WHITE RIGHT-POINTING TRIANGLE</td></tr>
            <tr><td>&#9656;</td><td>25B8</td><td>BLACK RIGHT-POINTING SMALL TRIANGLE</td></tr>
            <tr><td>&#9657;</td><td>25B9</td><td>WHITE RIGHT-POINTING SMALL TRIANGLE</td></tr>
            <tr><td>&#9658;</td><td>25BA</td><td>BLACK RIGHT-POINTING POINTER</td></tr>
            <tr><td>&#9659;</td><td>25BB</td><td>WHITE RIGHT-POINTING POINTER</td></tr>
            <tr><td>&#9660;</td><td>25BC</td><td>BLACK DOWN-POINTING TRIANGLE</td></tr>
            <tr><td>&#9661;</td><td>25BD</td><td>WHITE DOWN-POINTING TRIANGLE</td></tr>
            <tr><td>&#9662;</td><td>25BE</td><td>BLACK DOWN-POINTING SMALL TRIANGLE</td></tr>
            <tr><td>&#9663;</td><td>25BF</td><td>WHITE DOWN-POINTING SMALL TRIANGLE</td></tr>
            <tr><td>&#9664;</td><td>25C0</td><td>BLACK LEFT-POINTING TRIANGLE</td></tr>
            <tr><td>&#9665;</td><td>25C1</td><td>WHITE LEFT-POINTING TRIANGLE</td></tr>
            <tr><td>&#9666;</td><td>25C2</td><td>BLACK LEFT-POINTING SMALL TRIANGLE</td></tr>
            <tr><td>&#9667;</td><td>25C3</td><td>WHITE LEFT-POINTING SMALL TRIANGLE</td></tr>
            <tr><td>&#9668;</td><td>25C4</td><td>BLACK LEFT-POINTING POINTER</td></tr>
            <tr><td>&#9669;</td><td>25C5</td><td>WHITE LEFT-POINTING POINTER</td></tr>
            <tr><td>&#9670;</td><td>25C6</td><td>BLACK DIAMOND</td></tr>
            <tr><td>&#9671;</td><td>25C7</td><td>WHITE DIAMOND</td></tr>
            <tr><td>&#9672;</td><td>25C8</td><td>WHITE DIAMOND CONTAINING BLACK SMALL DIAMOND</td></tr>
            <tr><td>&#9673;</td><td>25C9</td><td>FISHEYE</td></tr>
            <tr><td>&#9674;</td><td>25CA</td><td>LOZENGE</td></tr>
            <tr><td>&#9675;</td><td>25CB</td><td>WHITE CIRCLE</td></tr>
            <tr><td>&#9676;</td><td>25CC</td><td>DOTTED CIRCLE</td></tr>
            <tr><td>&#9677;</td><td>25CD</td><td>CIRCLE WITH VERTICAL FILL</td></tr>
            <tr><td>&#9678;</td><td>25CE</td><td>BULLSEYE</td></tr>
            <tr><td>&#9679;</td><td>25CF</td><td>BLACK CIRCLE</td></tr>
            <tr><td>&#9680;</td><td>25D0</td><td>CIRCLE WITH LEFT HALF BLACK</td></tr>
            <tr><td>&#9681;</td><td>25D1</td><td>CIRCLE WITH RIGHT HALF BLACK</td></tr>
            <tr><td>&#9682;</td><td>25D2</td><td>CIRCLE WITH LOWER HALF BLACK</td></tr>
            <tr><td>&#9683;</td><td>25D3</td><td>CIRCLE WITH UPPER HALF BLACK</td></tr>
            <tr><td>&#9684;</td><td>25D4</td><td>CIRCLE WITH UPPER RIGHT QUADRANT BLACK</td></tr>
            <tr><td>&#9685;</td><td>25D5</td><td>CIRCLE WITH ALL BUT UPPER LEFT QUADRANT BLACK</td></tr>
            <tr><td>&#9686;</td><td>25D6</td><td>LEFT HALF BLACK CIRCLE</td></tr>
            <tr><td>&#9687;</td><td>25D7</td><td>RIGHT HALF BLACK CIRCLE</td></tr>
            <tr><td>&#9688;</td><td>25D8</td><td>INVERSE BULLET</td></tr>
            <tr><td>&#9689;</td><td>25D9</td><td>INVERSE WHITE CIRCLE</td></tr>
            <tr><td>&#9690;</td><td>25DA</td><td>UPPER HALF INVERSE WHITE CIRCLE</td></tr>
            <tr><td>&#9691;</td><td>25DB</td><td>LOWER HALF INVERSE WHITE CIRCLE</td></tr>
            <tr><td>&#9692;</td><td>25DC</td><td>UPPER LEFT QUADRANT CIRCULAR ARC</td></tr>
            <tr><td>&#9693;</td><td>25DD</td><td>UPPER RIGHT QUADRANT CIRCULAR ARC</td></tr>
            <tr><td>&#9694;</td><td>25DE</td><td>LOWER RIGHT QUADRANT CIRCULAR ARC</td></tr>
            <tr><td>&#9695;</td><td>25DF</td><td>LOWER LEFT QUADRANT CIRCULAR ARC</td></tr>
            <tr><td>&#9696;</td><td>25E0</td><td>UPPER HALF CIRCLE</td></tr>
            <tr><td>&#9697;</td><td>25E1</td><td>LOWER HALF CIRCLE</td></tr>
            <tr><td>&#9698;</td><td>25E2</td><td>BLACK LOWER RIGHT TRIANGLE</td></tr>
            <tr><td>&#9699;</td><td>25E3</td><td>BLACK LOWER LEFT TRIANGLE</td></tr>
            <tr><td>&#9700;</td><td>25E4</td><td>BLACK UPPER LEFT TRIANGLE</td></tr>
            <tr><td>&#9701;</td><td>25E5</td><td>BLACK UPPER RIGHT TRIANGLE</td></tr>
            <tr><td>&#9702;</td><td>25E6</td><td>WHITE BULLET</td></tr>
            <tr><td>&#9703;</td><td>25E7</td><td>SQUARE WITH LEFT HALF BLACK</td></tr>
            <tr><td>&#9704;</td><td>25E8</td><td>SQUARE WITH RIGHT HALF BLACK</td></tr>
            <tr><td>&#9705;</td><td>25E9</td><td>SQUARE WITH UPPER LEFT DIAGONAL HALF BLACK</td></tr>
            <tr><td>&#9706;</td><td>25EA</td><td>SQUARE WITH LOWER RIGHT DIAGONAL HALF BLACK</td></tr>
            <tr><td>&#9707;</td><td>25EB</td><td>WHITE SQUARE WITH VERTICAL BISECTING LINE</td></tr>
            <tr><td>&#9708;</td><td>25EC</td><td>WHITE UP-POINTING TRIANGLE WITH DOT</td></tr>
            <tr><td>&#9709;</td><td>25ED</td><td>UP-POINTING TRIANGLE WITH LEFT HALF BLACK</td></tr>
            <tr><td>&#9710;</td><td>25EE</td><td>UP-POINTING TRIANGLE WITH RIGHT HALF BLACK</td></tr>
            <tr><td>&#9711;</td><td>25EF</td><td>LARGE CIRCLE</td></tr>
            <tr><td>&#9712;</td><td>25F0</td><td>WHITE SQUARE WITH UPPER LEFT QUADRANT</td></tr>
            <tr><td>&#9713;</td><td>25F1</td><td>WHITE SQUARE WITH LOWER LEFT QUADRANT</td></tr>
            <tr><td>&#9714;</td><td>25F2</td><td>WHITE SQUARE WITH LOWER RIGHT QUADRANT</td></tr>
            <tr><td>&#9715;</td><td>25F3</td><td>WHITE SQUARE WITH UPPER RIGHT QUADRANT</td></tr>
            <tr><td>&#9716;</td><td>25F4</td><td>WHITE CIRCLE WITH UPPER LEFT QUADRANT</td></tr>
            <tr><td>&#9717;</td><td>25F5</td><td>WHITE CIRCLE WITH LOWER LEFT QUADRANT</td></tr>
            <tr><td>&#9718;</td><td>25F6</td><td>WHITE CIRCLE WITH LOWER RIGHT QUADRANT</td></tr>
            <tr><td>&#9719;</td><td>25F7</td><td>WHITE CIRCLE WITH UPPER RIGHT QUADRANT</td></tr>
            <tr><td>&#9720;</td><td>25F8</td><td>UPPER LEFT TRIANGLE</td></tr>
            <tr><td>&#9721;</td><td>25F9</td><td>UPPER RIGHT TRIANGLE</td></tr>
            <tr><td>&#9722;</td><td>25FA</td><td>LOWER LEFT TRIANGLE</td></tr>
            <tr><td>&#9723;</td><td>25FB</td><td>WHITE MEDIUM SQUARE</td></tr>
            <tr><td>&#9724;</td><td>25FC</td><td>BLACK MEDIUM SQUARE</td></tr>
            <tr><td>&#9725;</td><td>25FD</td><td>WHITE MEDIUM SMALL SQUARE</td></tr>
            <tr><td>&#9726;</td><td>25FE</td><td>BLACK MEDIUM SMALL SQUARE</td></tr>
            <tr><td>&#9727;</td><td>25FF</td><td>LOWER RIGHT TRIANGLE</td></tr>
            <tr><td>&#9728;</td><td>2600</td><td>BLACK SUN WITH RAYS</td></tr>
            <tr><td>&#9729;</td><td>2601</td><td>CLOUD</td></tr>
            <tr><td>&#9730;</td><td>2602</td><td>UMBRELLA</td></tr>
            <tr><td>&#9731;</td><td>2603</td><td>SNOWMAN</td></tr>
            <tr><td>&#9732;</td><td>2604</td><td>COMET</td></tr>
            <tr><td>&#9733;</td><td>2605</td><td>BLACK STAR</td></tr>
            <tr><td>&#9734;</td><td>2606</td><td>WHITE STAR</td></tr>
            <tr><td>&#9735;</td><td>2607</td><td>LIGHTNING</td></tr>
            <tr><td>&#9736;</td><td>2608</td><td>THUNDERSTORM</td></tr>
            <tr><td>&#9737;</td><td>2609</td><td>SUN</td></tr>
            <tr><td>&#9738;</td><td>260A</td><td>ASCENDING NODE</td></tr>
            <tr><td>&#9739;</td><td>260B</td><td>DESCENDING NODE</td></tr>
            <tr><td>&#9740;</td><td>260C</td><td>CONJUNCTION</td></tr>
            <tr><td>&#9741;</td><td>260D</td><td>OPPOSITION</td></tr>
            <tr><td>&#9742;</td><td>260E</td><td>BLACK TELEPHONE</td></tr>
            <tr><td>&#9743;</td><td>260F</td><td>WHITE TELEPHONE</td></tr>
            <tr><td>&#9744;</td><td>2610</td><td>BALLOT BOX</td></tr>
            <tr><td>&#9745;</td><td>2611</td><td>BALLOT BOX WITH CHECK</td></tr>
            <tr><td>&#9746;</td><td>2612</td><td>BALLOT BOX WITH X</td></tr>
            <tr><td>&#9747;</td><td>2613</td><td>SALTIRE</td></tr>
            <tr><td>&#9748;</td><td>2614</td><td>UMBRELLA WITH RAIN DROPS</td></tr>
            <tr><td>&#9749;</td><td>2615</td><td>HOT BEVERAGE</td></tr>
            <tr><td>&#9750;</td><td>2616</td><td>WHITE SHOGI PIECE</td></tr>
            <tr><td>&#9751;</td><td>2617</td><td>BLACK SHOGI PIECE</td></tr>
            <tr><td>&#9752;</td><td>2618</td><td>SHAMROCK</td></tr>
            <tr><td>&#9753;</td><td>2619</td><td>REVERSED ROTATED FLORAL HEART BULLET</td></tr>
            <tr><td>&#9754;</td><td>261A</td><td>BLACK LEFT POINTING INDEX</td></tr>
            <tr><td>&#9755;</td><td>261B</td><td>BLACK RIGHT POINTING INDEX</td></tr>
            <tr><td>&#9756;</td><td>261C</td><td>WHITE LEFT POINTING INDEX</td></tr>
            <tr><td>&#9757;</td><td>261D</td><td>WHITE UP POINTING INDEX</td></tr>
            <tr><td>&#9758;</td><td>261E</td><td>WHITE RIGHT POINTING INDEX</td></tr>
            <tr><td>&#9759;</td><td>261F</td><td>WHITE DOWN POINTING INDEX</td></tr>
            <tr><td>&#9760;</td><td>2620</td><td>SKULL AND CROSSBONES</td></tr>
            <tr><td>&#9761;</td><td>2621</td><td>CAUTION SIGN</td></tr>
            <tr><td>&#9762;</td><td>2622</td><td>RADIOACTIVE SIGN</td></tr>
            <tr><td>&#9763;</td><td>2623</td><td>BIOHAZARD SIGN</td></tr>
            <tr><td>&#9764;</td><td>2624</td><td>CADUCEUS</td></tr>
            <tr><td>&#9765;</td><td>2625</td><td>ANKH</td></tr>
            <tr><td>&#9766;</td><td>2626</td><td>ORTHODOX CROSS</td></tr>
            <tr><td>&#9767;</td><td>2627</td><td>CHI RHO</td></tr>
            <tr><td>&#9768;</td><td>2628</td><td>CROSS OF LORRAINE</td></tr>
            <tr><td>&#9769;</td><td>2629</td><td>CROSS OF JERUSALEM</td></tr>
            <tr><td>&#9770;</td><td>262A</td><td>STAR AND CRESCENT</td></tr>
            <tr><td>&#9771;</td><td>262B</td><td>FARSI SYMBOL</td></tr>
            <tr><td>&#9772;</td><td>262C</td><td>KHANDA</td></tr>
            <tr><td>&#9773;</td><td>262D</td><td>HAMMER AND SICKLE</td></tr>
            <tr><td>&#9774;</td><td>262E</td><td>PEACE SYMBOL</td></tr>
            <tr><td>&#9775;</td><td>262F</td><td>YIN YANG</td></tr>
            <tr><td>&#9776;</td><td>2630</td><td>TRIGRAM FOR HEAVEN</td></tr>
            <tr><td>&#9777;</td><td>2631</td><td>TRIGRAM FOR LAKE</td></tr>
            <tr><td>&#9778;</td><td>2632</td><td>TRIGRAM FOR FIRE</td></tr>
            <tr><td>&#9779;</td><td>2633</td><td>TRIGRAM FOR THUNDER</td></tr>
            <tr><td>&#9780;</td><td>2634</td><td>TRIGRAM FOR WIND</td></tr>
            <tr><td>&#9781;</td><td>2635</td><td>TRIGRAM FOR WATER</td></tr>
            <tr><td>&#9782;</td><td>2636</td><td>TRIGRAM FOR MOUNTAIN</td></tr>
            <tr><td>&#9783;</td><td>2637</td><td>TRIGRAM FOR EARTH</td></tr>
            <tr><td>&#9784;</td><td>2638</td><td>WHEEL OF DHARMA</td></tr>
            <tr><td>&#9785;</td><td>2639</td><td>WHITE FROWNING FACE</td></tr>
            <tr><td>&#9786;</td><td>263A</td><td>WHITE SMILING FACE</td></tr>
            <tr><td>&#9787;</td><td>263B</td><td>BLACK SMILING FACE</td></tr>
            <tr><td>&#9788;</td><td>263C</td><td>WHITE SUN WITH RAYS</td></tr>
            <tr><td>&#9789;</td><td>263D</td><td>FIRST QUARTER MOON</td></tr>
            <tr><td>&#9790;</td><td>263E</td><td>LAST QUARTER MOON</td></tr>
            <tr><td>&#9791;</td><td>263F</td><td>MERCURY</td></tr>
            <tr><td>&#9792;</td><td>2640</td><td>FEMALE SIGN</td></tr>
            <tr><td>&#9793;</td><td>2641</td><td>EARTH</td></tr>
            <tr><td>&#9794;</td><td>2642</td><td>MALE SIGN</td></tr>
            <tr><td>&#9795;</td><td>2643</td><td>JUPITER</td></tr>
            <tr><td>&#9796;</td><td>2644</td><td>SATURN</td></tr>
            <tr><td>&#9797;</td><td>2645</td><td>URANUS</td></tr>
            <tr><td>&#9798;</td><td>2646</td><td>NEPTUNE</td></tr>
            <tr><td>&#9799;</td><td>2647</td><td>PLUTO</td></tr>
            <tr><td>&#9800;</td><td>2648</td><td>ARIES</td></tr>
            <tr><td>&#9801;</td><td>2649</td><td>TAURUS</td></tr>
            <tr><td>&#9802;</td><td>264A</td><td>GEMINI</td></tr>
            <tr><td>&#9803;</td><td>264B</td><td>CANCER</td></tr>
            <tr><td>&#9804;</td><td>264C</td><td>LEO</td></tr>
            <tr><td>&#9805;</td><td>264D</td><td>VIRGO</td></tr>
            <tr><td>&#9806;</td><td>264E</td><td>LIBRA</td></tr>
            <tr><td>&#9807;</td><td>264F</td><td>SCORPIUS</td></tr>
            <tr><td>&#9808;</td><td>2650</td><td>SAGITTARIUS</td></tr>
            <tr><td>&#9809;</td><td>2651</td><td>CAPRICORN</td></tr>
            <tr><td>&#9810;</td><td>2652</td><td>AQUARIUS</td></tr>
            <tr><td>&#9811;</td><td>2653</td><td>PISCES</td></tr>
            <tr><td>&#9812;</td><td>2654</td><td>WHITE CHESS KING</td></tr>
            <tr><td>&#9813;</td><td>2655</td><td>WHITE CHESS QUEEN</td></tr>
            <tr><td>&#9814;</td><td>2656</td><td>WHITE CHESS ROOK</td></tr>
            <tr><td>&#9815;</td><td>2657</td><td>WHITE CHESS BISHOP</td></tr>
            <tr><td>&#9816;</td><td>2658</td><td>WHITE CHESS KNIGHT</td></tr>
            <tr><td>&#9817;</td><td>2659</td><td>WHITE CHESS PAWN</td></tr>
            <tr><td>&#9818;</td><td>265A</td><td>BLACK CHESS KING</td></tr>
            <tr><td>&#9819;</td><td>265B</td><td>BLACK CHESS QUEEN</td></tr>
            <tr><td>&#9820;</td><td>265C</td><td>BLACK CHESS ROOK</td></tr>
            <tr><td>&#9821;</td><td>265D</td><td>BLACK CHESS BISHOP</td></tr>
            <tr><td>&#9822;</td><td>265E</td><td>BLACK CHESS KNIGHT</td></tr>
            <tr><td>&#9823;</td><td>265F</td><td>BLACK CHESS PAWN</td></tr>
            <tr><td>&#9824;</td><td>2660</td><td>BLACK SPADE SUIT</td></tr>
            <tr><td>&#9825;</td><td>2661</td><td>WHITE HEART SUIT</td></tr>
            <tr><td>&#9826;</td><td>2662</td><td>WHITE DIAMOND SUIT</td></tr>
            <tr><td>&#9827;</td><td>2663</td><td>BLACK CLUB SUIT</td></tr>
            <tr><td>&#9828;</td><td>2664</td><td>WHITE SPADE SUIT</td></tr>
            <tr><td>&#9829;</td><td>2665</td><td>BLACK HEART SUIT</td></tr>
            <tr><td>&#9830;</td><td>2666</td><td>BLACK DIAMOND SUIT</td></tr>
            <tr><td>&#9831;</td><td>2667</td><td>WHITE CLUB SUIT</td></tr>
            <tr><td>&#9832;</td><td>2668</td><td>HOT SPRINGS</td></tr>
            <tr><td>&#9833;</td><td>2669</td><td>QUARTER NOTE</td></tr>
            <tr><td>&#9834;</td><td>266A</td><td>EIGHTH NOTE</td></tr>
            <tr><td>&#9835;</td><td>266B</td><td>BEAMED EIGHTH NOTES</td></tr>
            <tr><td>&#9836;</td><td>266C</td><td>BEAMED SIXTEENTH NOTES</td></tr>
            <tr><td>&#9837;</td><td>266D</td><td>MUSIC FLAT SIGN</td></tr>
            <tr><td>&#9838;</td><td>266E</td><td>MUSIC NATURAL SIGN</td></tr>
            <tr><td>&#9839;</td><td>266F</td><td>MUSIC SHARP SIGN</td></tr>
            <tr><td>&#9840;</td><td>2670</td><td>WEST SYRIAC CROSS</td></tr>
            <tr><td>&#9841;</td><td>2671</td><td>EAST SYRIAC CROSS</td></tr>
            <tr><td>&#9842;</td><td>2672</td><td>UNIVERSAL RECYCLING SYMBOL</td></tr>
            <tr><td>&#9843;</td><td>2673</td><td>RECYCLING SYMBOL FOR TYPE-1 PLASTICS</td></tr>
            <tr><td>&#9844;</td><td>2674</td><td>RECYCLING SYMBOL FOR TYPE-2 PLASTICS</td></tr>
            <tr><td>&#9845;</td><td>2675</td><td>RECYCLING SYMBOL FOR TYPE-3 PLASTICS</td></tr>
            <tr><td>&#9846;</td><td>2676</td><td>RECYCLING SYMBOL FOR TYPE-4 PLASTICS</td></tr>
            <tr><td>&#9847;</td><td>2677</td><td>RECYCLING SYMBOL FOR TYPE-5 PLASTICS</td></tr>
            <tr><td>&#9848;</td><td>2678</td><td>RECYCLING SYMBOL FOR TYPE-6 PLASTICS</td></tr>
            <tr><td>&#9849;</td><td>2679</td><td>RECYCLING SYMBOL FOR TYPE-7 PLASTICS</td></tr>
            <tr><td>&#9850;</td><td>267A</td><td>RECYCLING SYMBOL FOR GENERIC MATERIALS</td></tr>
            <tr><td>&#9851;</td><td>267B</td><td>BLACK UNIVERSAL RECYCLING SYMBOL</td></tr>
            <tr><td>&#9852;</td><td>267C</td><td>RECYCLED PAPER SYMBOL</td></tr>
            <tr><td>&#9853;</td><td>267D</td><td>PARTIALLY-RECYCLED PAPER SYMBOL</td></tr>
            <tr><td>&#9854;</td><td>267E</td><td>PERMANENT PAPER SIGN</td></tr>
            <tr><td>&#9855;</td><td>267F</td><td>WHEELCHAIR SYMBOL</td></tr>
            <tr><td>&#9856;</td><td>2680</td><td>DIE FACE-1</td></tr>
            <tr><td>&#9857;</td><td>2681</td><td>DIE FACE-2</td></tr>
            <tr><td>&#9858;</td><td>2682</td><td>DIE FACE-3</td></tr>
            <tr><td>&#9859;</td><td>2683</td><td>DIE FACE-4</td></tr>
            <tr><td>&#9860;</td><td>2684</td><td>DIE FACE-5</td></tr>
            <tr><td>&#9861;</td><td>2685</td><td>DIE FACE-6</td></tr>
            <tr><td>&#9862;</td><td>2686</td><td>WHITE CIRCLE WITH DOT RIGHT</td></tr>
            <tr><td>&#9863;</td><td>2687</td><td>WHITE CIRCLE WITH TWO DOTS</td></tr>
            <tr><td>&#9864;</td><td>2688</td><td>BLACK CIRCLE WITH WHITE DOT RIGHT</td></tr>
            <tr><td>&#9865;</td><td>2689</td><td>BLACK CIRCLE WITH TWO WHITE DOTS</td></tr>
            <tr><td>&#9866;</td><td>268A</td><td>MONOGRAM FOR YANG</td></tr>
            <tr><td>&#9867;</td><td>268B</td><td>MONOGRAM FOR YIN</td></tr>
            <tr><td>&#9868;</td><td>268C</td><td>DIGRAM FOR GREATER YANG</td></tr>
            <tr><td>&#9869;</td><td>268D</td><td>DIGRAM FOR LESSER YIN</td></tr>
            <tr><td>&#9870;</td><td>268E</td><td>DIGRAM FOR LESSER YANG</td></tr>
            <tr><td>&#9871;</td><td>268F</td><td>DIGRAM FOR GREATER YIN</td></tr>
            <tr><td>&#9872;</td><td>2690</td><td>WHITE FLAG</td></tr>
            <tr><td>&#9873;</td><td>2691</td><td>BLACK FLAG</td></tr>
            <tr><td>&#9874;</td><td>2692</td><td>HAMMER AND PICK</td></tr>
            <tr><td>&#9875;</td><td>2693</td><td>ANCHOR</td></tr>
            <tr><td>&#9876;</td><td>2694</td><td>CROSSED SWORDS</td></tr>
            <tr><td>&#9877;</td><td>2695</td><td>STAFF OF AESCULAPIUS</td></tr>
            <tr><td>&#9878;</td><td>2696</td><td>SCALES</td></tr>
            <tr><td>&#9879;</td><td>2697</td><td>ALEMBIC</td></tr>
            <tr><td>&#9880;</td><td>2698</td><td>FLOWER</td></tr>
            <tr><td>&#9881;</td><td>2699</td><td>GEAR</td></tr>
            <tr><td>&#9882;</td><td>269A</td><td>STAFF OF HERMES</td></tr>
            <tr><td>&#9883;</td><td>269B</td><td>ATOM SYMBOL</td></tr>
            <tr><td>&#9884;</td><td>269C</td><td>FLEUR-DE-LIS</td></tr>
            <tr><td>&#9885;</td><td>269D</td><td>OUTLINED WHITE STAR</td></tr>
            <tr><td>&#9886;</td><td>269E</td><td>THREE LINES CONVERGING RIGHT</td></tr>
            <tr><td>&#9887;</td><td>269F</td><td>THREE LINES CONVERGING LEFT</td></tr>
            <tr><td>&#9888;</td><td>26A0</td><td>WARNING SIGN</td></tr>
            <tr><td>&#9889;</td><td>26A1</td><td>HIGH VOLTAGE SIGN</td></tr>
            <tr><td>&#9890;</td><td>26A2</td><td>DOUBLED FEMALE SIGN</td></tr>
            <tr><td>&#9891;</td><td>26A3</td><td>DOUBLED MALE SIGN</td></tr>
            <tr><td>&#9892;</td><td>26A4</td><td>INTERLOCKED FEMALE AND MALE SIGN</td></tr>
            <tr><td>&#9893;</td><td>26A5</td><td>MALE AND FEMALE SIGN</td></tr>
            <tr><td>&#9894;</td><td>26A6</td><td>MALE WITH STROKE SIGN</td></tr>
            <tr><td>&#9895;</td><td>26A7</td><td>MALE WITH STROKE AND MALE AND FEMALE SIGN</td></tr>
            <tr><td>&#9896;</td><td>26A8</td><td>VERTICAL MALE WITH STROKE SIGN</td></tr>
            <tr><td>&#9897;</td><td>26A9</td><td>HORIZONTAL MALE WITH STROKE SIGN</td></tr>
            <tr><td>&#9898;</td><td>26AA</td><td>MEDIUM WHITE CIRCLE</td></tr>
            <tr><td>&#9899;</td><td>26AB</td><td>MEDIUM BLACK CIRCLE</td></tr>
            <tr><td>&#9900;</td><td>26AC</td><td>MEDIUM SMALL WHITE CIRCLE</td></tr>
            <tr><td>&#9901;</td><td>26AD</td><td>MARRIAGE SYMBOL</td></tr>
            <tr><td>&#9902;</td><td>26AE</td><td>DIVORCE SYMBOL</td></tr>
            <tr><td>&#9903;</td><td>26AF</td><td>UNMARRIED PARTNERSHIP SYMBOL</td></tr>
            <tr><td>&#9904;</td><td>26B0</td><td>COFFIN</td></tr>
            <tr><td>&#9905;</td><td>26B1</td><td>FUNERAL URN</td></tr>
            <tr><td>&#9906;</td><td>26B2</td><td>NEUTER</td></tr>
            <tr><td>&#9907;</td><td>26B3</td><td>CERES</td></tr>
            <tr><td>&#9908;</td><td>26B4</td><td>PALLAS</td></tr>
            <tr><td>&#9909;</td><td>26B5</td><td>JUNO</td></tr>
            <tr><td>&#9910;</td><td>26B6</td><td>VESTA</td></tr>
            <tr><td>&#9911;</td><td>26B7</td><td>CHIRON</td></tr>
            <tr><td>&#9912;</td><td>26B8</td><td>BLACK MOON LILITH</td></tr>
            <tr><td>&#9913;</td><td>26B9</td><td>SEXTILE</td></tr>
            <tr><td>&#9914;</td><td>26BA</td><td>SEMISEXTILE</td></tr>
            <tr><td>&#9915;</td><td>26BB</td><td>QUINCUNX</td></tr>
            <tr><td>&#9916;</td><td>26BC</td><td>SESQUIQUADRATE</td></tr>
            <tr><td>&#9917;</td><td>26BD</td><td>SOCCER BALL</td></tr>
            <tr><td>&#9918;</td><td>26BE</td><td>BASEBALL</td></tr>
            <tr><td>&#9919;</td><td>26BF</td><td>SQUARED KEY</td></tr>
            <tr><td>&#9920;</td><td>26C0</td><td>WHITE DRAUGHTS MAN</td></tr>
            <tr><td>&#9921;</td><td>26C1</td><td>WHITE DRAUGHTS KING</td></tr>
            <tr><td>&#9922;</td><td>26C2</td><td>BLACK DRAUGHTS MAN</td></tr>
            <tr><td>&#9923;</td><td>26C3</td><td>BLACK DRAUGHTS KING</td></tr>
            <tr><td>&#9924;</td><td>26C4</td><td>SNOWMAN WITHOUT SNOW</td></tr>
            <tr><td>&#9925;</td><td>26C5</td><td>SUN BEHIND CLOUD</td></tr>
            <tr><td>&#9926;</td><td>26C6</td><td>RAIN</td></tr>
            <tr><td>&#9927;</td><td>26C7</td><td>BLACK SNOWMAN</td></tr>
            <tr><td>&#9928;</td><td>26C8</td><td>THUNDER CLOUD AND RAIN</td></tr>
            <tr><td>&#9929;</td><td>26C9</td><td>TURNED WHITE SHOGI PIECE</td></tr>
            <tr><td>&#9930;</td><td>26CA</td><td>TURNED BLACK SHOGI PIECE</td></tr>
            <tr><td>&#9931;</td><td>26CB</td><td>WHITE DIAMOND IN SQUARE</td></tr>
            <tr><td>&#9932;</td><td>26CC</td><td>CROSSING LANES</td></tr>
            <tr><td>&#9933;</td><td>26CD</td><td>DISABLED CAR</td></tr>
            <tr><td>&#9934;</td><td>26CE</td><td>OPHIUCHUS</td></tr>
            <tr><td>&#9935;</td><td>26CF</td><td>PICK</td></tr>
            <tr><td>&#9936;</td><td>26D0</td><td>CAR SLIDING</td></tr>
            <tr><td>&#9937;</td><td>26D1</td><td>HELMET WITH WHITE CROSS</td></tr>
            <tr><td>&#9938;</td><td>26D2</td><td>CIRCLED CROSSING LANES</td></tr>
            <tr><td>&#9939;</td><td>26D3</td><td>CHAINS</td></tr>
            <tr><td>&#9940;</td><td>26D4</td><td>NO ENTRY</td></tr>
            <tr><td>&#9941;</td><td>26D5</td><td>ALTERNATE ONE-WAY LEFT WAY TRAFFIC</td></tr>
            <tr><td>&#9942;</td><td>26D6</td><td>BLACK TWO-WAY LEFT WAY TRAFFIC</td></tr>
            <tr><td>&#9943;</td><td>26D7</td><td>WHITE TWO-WAY LEFT WAY TRAFFIC</td></tr>
            <tr><td>&#9944;</td><td>26D8</td><td>BLACK LEFT LANE MERGE</td></tr>
            <tr><td>&#9945;</td><td>26D9</td><td>WHITE LEFT LANE MERGE</td></tr>
            <tr><td>&#9946;</td><td>26DA</td><td>DRIVE SLOW SIGN</td></tr>
            <tr><td>&#9947;</td><td>26DB</td><td>HEAVY WHITE DOWN-POINTING TRIANGLE</td></tr>
            <tr><td>&#9948;</td><td>26DC</td><td>LEFT CLOSED ENTRY</td></tr>
            <tr><td>&#9949;</td><td>26DD</td><td>SQUARED SALTIRE</td></tr>
            <tr><td>&#9950;</td><td>26DE</td><td>FALLING DIAGONAL IN WHITE CIRCLE IN BLACK SQUARE</td></tr>
            <tr><td>&#9951;</td><td>26DF</td><td>BLACK TRUCK</td></tr>
            <tr><td>&#9952;</td><td>26E0</td><td>RESTRICTED LEFT ENTRY-1</td></tr>
            <tr><td>&#9953;</td><td>26E1</td><td>RESTRICTED LEFT ENTRY-2</td></tr>
            <tr><td>&#9954;</td><td>26E2</td><td>ASTRONOMICAL SYMBOL FOR URANUS</td></tr>
            <tr><td>&#9955;</td><td>26E3</td><td>HEAVY CIRCLE WITH STROKE AND TWO DOTS ABOVE</td></tr>
            <tr><td>&#9956;</td><td>26E4</td><td>PENTAGRAM</td></tr>
            <tr><td>&#9957;</td><td>26E5</td><td>RIGHT-HANDED INTERLACED PENTAGRAM</td></tr>
            <tr><td>&#9958;</td><td>26E6</td><td>LEFT-HANDED INTERLACED PENTAGRAM</td></tr>
            <tr><td>&#9959;</td><td>26E7</td><td>INVERTED PENTAGRAM</td></tr>
            <tr><td>&#9960;</td><td>26E8</td><td>BLACK CROSS ON SHIELD</td></tr>
            <tr><td>&#9961;</td><td>26E9</td><td>SHINTO SHRINE</td></tr>
            <tr><td>&#9962;</td><td>26EA</td><td>CHURCH</td></tr>
            <tr><td>&#9963;</td><td>26EB</td><td>CASTLE</td></tr>
            <tr><td>&#9964;</td><td>26EC</td><td>HISTORIC SITE</td></tr>
            <tr><td>&#9965;</td><td>26ED</td><td>GEAR WITHOUT HUB</td></tr>
            <tr><td>&#9966;</td><td>26EE</td><td>GEAR WITH HANDLES</td></tr>
            <tr><td>&#9967;</td><td>26EF</td><td>MAP SYMBOL FOR LIGHTHOUSE</td></tr>
            <tr><td>&#9968;</td><td>26F0</td><td>MOUNTAIN</td></tr>
            <tr><td>&#9969;</td><td>26F1</td><td>UMBRELLA ON GROUND</td></tr>
            <tr><td>&#9970;</td><td>26F2</td><td>FOUNTAIN</td></tr>
            <tr><td>&#9971;</td><td>26F3</td><td>FLAG IN HOLE</td></tr>
            <tr><td>&#9972;</td><td>26F4</td><td>FERRY</td></tr>
            <tr><td>&#9973;</td><td>26F5</td><td>SAILBOAT</td></tr>
            <tr><td>&#9974;</td><td>26F6</td><td>SQUARE FOUR CORNERS</td></tr>
            <tr><td>&#9975;</td><td>26F7</td><td>SKIER</td></tr>
            <tr><td>&#9976;</td><td>26F8</td><td>ICE SKATE</td></tr>
            <tr><td>&#9977;</td><td>26F9</td><td>PERSON WITH BALL</td></tr>
            <tr><td>&#9978;</td><td>26FA</td><td>TENT</td></tr>
            <tr><td>&#9979;</td><td>26FB</td><td>JAPANESE BANK SYMBOL</td></tr>
            <tr><td>&#9980;</td><td>26FC</td><td>HEADSTONE GRAVEYARD SYMBOL</td></tr>
            <tr><td>&#9981;</td><td>26FD</td><td>FUEL PUMP</td></tr>
            <tr><td>&#9982;</td><td>26FE</td><td>CUP ON BLACK SQUARE</td></tr>
            <tr><td>&#9983;</td><td>26FF</td><td>WHITE FLAG WITH HORIZONTAL MIDDLE BLACK STRIPE</td></tr>
            <tr><td>&#9985;</td><td>2701</td><td>UPPER BLADE SCISSORS</td></tr>
            <tr><td>&#9986;</td><td>2702</td><td>BLACK SCISSORS</td></tr>
            <tr><td>&#9987;</td><td>2703</td><td>LOWER BLADE SCISSORS</td></tr>
            <tr><td>&#9988;</td><td>2704</td><td>WHITE SCISSORS</td></tr>
            <tr><td>&#9989;</td><td>2705</td><td>WHITE HEAVY CHECK MARK</td></tr>
            <tr><td>&#9990;</td><td>2706</td><td>TELEPHONE LOCATION SIGN</td></tr>
            <tr><td>&#9991;</td><td>2707</td><td>TAPE DRIVE</td></tr>
            <tr><td>&#9992;</td><td>2708</td><td>AIRPLANE</td></tr>
            <tr><td>&#9993;</td><td>2709</td><td>ENVELOPE</td></tr>
            <tr><td>&#9994;</td><td>270A</td><td>RAISED FIST</td></tr>
            <tr><td>&#9995;</td><td>270B</td><td>RAISED HAND</td></tr>
            <tr><td>&#9996;</td><td>270C</td><td>VICTORY HAND</td></tr>
            <tr><td>&#9997;</td><td>270D</td><td>WRITING HAND</td></tr>
            <tr><td>&#9998;</td><td>270E</td><td>LOWER RIGHT PENCIL</td></tr>
            <tr><td>&#9999;</td><td>270F</td><td>PENCIL</td></tr>
            <tr><td>&#10000;</td><td>2710</td><td>UPPER RIGHT PENCIL</td></tr>
            <tr><td>&#10001;</td><td>2711</td><td>WHITE NIB</td></tr>
            <tr><td>&#10002;</td><td>2712</td><td>BLACK NIB</td></tr>
            <tr><td>&#10003;</td><td>2713</td><td>CHECK MARK</td></tr>
            <tr><td>&#10004;</td><td>2714</td><td>HEAVY CHECK MARK</td></tr>
            <tr><td>&#10005;</td><td>2715</td><td>MULTIPLICATION X</td></tr>
            <tr><td>&#10006;</td><td>2716</td><td>HEAVY MULTIPLICATION X</td></tr>
            <tr><td>&#10007;</td><td>2717</td><td>BALLOT X</td></tr>
            <tr><td>&#10008;</td><td>2718</td><td>HEAVY BALLOT X</td></tr>
            <tr><td>&#10009;</td><td>2719</td><td>OUTLINED GREEK CROSS</td></tr>
            <tr><td>&#10010;</td><td>271A</td><td>HEAVY GREEK CROSS</td></tr>
            <tr><td>&#10011;</td><td>271B</td><td>OPEN CENTRE CROSS</td></tr>
            <tr><td>&#10012;</td><td>271C</td><td>HEAVY OPEN CENTRE CROSS</td></tr>
            <tr><td>&#10013;</td><td>271D</td><td>LATIN CROSS</td></tr>
            <tr><td>&#10014;</td><td>271E</td><td>SHADOWED WHITE LATIN CROSS</td></tr>
            <tr><td>&#10015;</td><td>271F</td><td>OUTLINED LATIN CROSS</td></tr>
            <tr><td>&#10016;</td><td>2720</td><td>MALTESE CROSS</td></tr>
            <tr><td>&#10017;</td><td>2721</td><td>STAR OF DAVID</td></tr>
            <tr><td>&#10018;</td><td>2722</td><td>FOUR TEARDROP-SPOKED ASTERISK</td></tr>
            <tr><td>&#10019;</td><td>2723</td><td>FOUR BALLOON-SPOKED ASTERISK</td></tr>
            <tr><td>&#10020;</td><td>2724</td><td>HEAVY FOUR BALLOON-SPOKED ASTERISK</td></tr>
            <tr><td>&#10021;</td><td>2725</td><td>FOUR CLUB-SPOKED ASTERISK</td></tr>
            <tr><td>&#10022;</td><td>2726</td><td>BLACK FOUR POINTED STAR</td></tr>
            <tr><td>&#10023;</td><td>2727</td><td>WHITE FOUR POINTED STAR</td></tr>
            <tr><td>&#10024;</td><td>2728</td><td>SPARKLES</td></tr>
            <tr><td>&#10025;</td><td>2729</td><td>STRESS OUTLINED WHITE STAR</td></tr>
            <tr><td>&#10026;</td><td>272A</td><td>CIRCLED WHITE STAR</td></tr>
            <tr><td>&#10027;</td><td>272B</td><td>OPEN CENTRE BLACK STAR</td></tr>
            <tr><td>&#10028;</td><td>272C</td><td>BLACK CENTRE WHITE STAR</td></tr>
            <tr><td>&#10029;</td><td>272D</td><td>OUTLINED BLACK STAR</td></tr>
            <tr><td>&#10030;</td><td>272E</td><td>HEAVY OUTLINED BLACK STAR</td></tr>
            <tr><td>&#10031;</td><td>272F</td><td>PINWHEEL STAR</td></tr>
            <tr><td>&#10032;</td><td>2730</td><td>SHADOWED WHITE STAR</td></tr>
            <tr><td>&#10033;</td><td>2731</td><td>HEAVY ASTERISK</td></tr>
            <tr><td>&#10034;</td><td>2732</td><td>OPEN CENTRE ASTERISK</td></tr>
            <tr><td>&#10035;</td><td>2733</td><td>EIGHT SPOKED ASTERISK</td></tr>
            <tr><td>&#10036;</td><td>2734</td><td>EIGHT POINTED BLACK STAR</td></tr>
            <tr><td>&#10037;</td><td>2735</td><td>EIGHT POINTED PINWHEEL STAR</td></tr>
            <tr><td>&#10038;</td><td>2736</td><td>SIX POINTED BLACK STAR</td></tr>
            <tr><td>&#10039;</td><td>2737</td><td>EIGHT POINTED RECTILINEAR BLACK STAR</td></tr>
            <tr><td>&#10040;</td><td>2738</td><td>HEAVY EIGHT POINTED RECTILINEAR BLACK STAR</td></tr>
            <tr><td>&#10041;</td><td>2739</td><td>TWELVE POINTED BLACK STAR</td></tr>
            <tr><td>&#10042;</td><td>273A</td><td>SIXTEEN POINTED ASTERISK</td></tr>
            <tr><td>&#10043;</td><td>273B</td><td>TEARDROP-SPOKED ASTERISK</td></tr>
            <tr><td>&#10044;</td><td>273C</td><td>OPEN CENTRE TEARDROP-SPOKED ASTERISK</td></tr>
            <tr><td>&#10045;</td><td>273D</td><td>HEAVY TEARDROP-SPOKED ASTERISK</td></tr>
            <tr><td>&#10046;</td><td>273E</td><td>SIX PETALLED BLACK AND WHITE FLORETTE</td></tr>
            <tr><td>&#10047;</td><td>273F</td><td>BLACK FLORETTE</td></tr>
            <tr><td>&#10048;</td><td>2740</td><td>WHITE FLORETTE</td></tr>
            <tr><td>&#10049;</td><td>2741</td><td>EIGHT PETALLED OUTLINED BLACK FLORETTE</td></tr>
            <tr><td>&#10050;</td><td>2742</td><td>CIRCLED OPEN CENTRE EIGHT POINTED STAR</td></tr>
            <tr><td>&#10051;</td><td>2743</td><td>HEAVY TEARDROP-SPOKED PINWHEEL ASTERISK</td></tr>
            <tr><td>&#10052;</td><td>2744</td><td>SNOWFLAKE</td></tr>
            <tr><td>&#10053;</td><td>2745</td><td>TIGHT TRIFOLIATE SNOWFLAKE</td></tr>
            <tr><td>&#10054;</td><td>2746</td><td>HEAVY CHEVRON SNOWFLAKE</td></tr>
            <tr><td>&#10055;</td><td>2747</td><td>SPARKLE</td></tr>
            <tr><td>&#10056;</td><td>2748</td><td>HEAVY SPARKLE</td></tr>
            <tr><td>&#10057;</td><td>2749</td><td>BALLOON-SPOKED ASTERISK</td></tr>
            <tr><td>&#10058;</td><td>274A</td><td>EIGHT TEARDROP-SPOKED PROPELLER ASTERISK</td></tr>
            <tr><td>&#10059;</td><td>274B</td><td>HEAVY EIGHT TEARDROP-SPOKED PROPELLER ASTERISK</td></tr>
            <tr><td>&#10060;</td><td>274C</td><td>CROSS MARK</td></tr>
            <tr><td>&#10061;</td><td>274D</td><td>SHADOWED WHITE CIRCLE</td></tr>
            <tr><td>&#10062;</td><td>274E</td><td>NEGATIVE SQUARED CROSS MARK</td></tr>
            <tr><td>&#10063;</td><td>274F</td><td>LOWER RIGHT DROP-SHADOWED WHITE SQUARE</td></tr>
            <tr><td>&#10064;</td><td>2750</td><td>UPPER RIGHT DROP-SHADOWED WHITE SQUARE</td></tr>
            <tr><td>&#10065;</td><td>2751</td><td>LOWER RIGHT SHADOWED WHITE SQUARE</td></tr>
            <tr><td>&#10066;</td><td>2752</td><td>UPPER RIGHT SHADOWED WHITE SQUARE</td></tr>
            <tr><td>&#10067;</td><td>2753</td><td>BLACK QUESTION MARK ORNAMENT</td></tr>
            <tr><td>&#10068;</td><td>2754</td><td>WHITE QUESTION MARK ORNAMENT</td></tr>
            <tr><td>&#10069;</td><td>2755</td><td>WHITE EXCLAMATION MARK ORNAMENT</td></tr>
            <tr><td>&#10070;</td><td>2756</td><td>BLACK DIAMOND MINUS WHITE X</td></tr>
            <tr><td>&#10071;</td><td>2757</td><td>HEAVY EXCLAMATION MARK SYMBOL</td></tr>
            <tr><td>&#10072;</td><td>2758</td><td>LIGHT VERTICAL BAR</td></tr>
            <tr><td>&#10073;</td><td>2759</td><td>MEDIUM VERTICAL BAR</td></tr>
            <tr><td>&#10074;</td><td>275A</td><td>HEAVY VERTICAL BAR</td></tr>
            <tr><td>&#10075;</td><td>275B</td><td>HEAVY SINGLE TURNED COMMA QUOTATION MARK ORNAMENT</td></tr>
            <tr><td>&#10076;</td><td>275C</td><td>HEAVY SINGLE COMMA QUOTATION MARK ORNAMENT</td></tr>
            <tr><td>&#10077;</td><td>275D</td><td>HEAVY DOUBLE TURNED COMMA QUOTATION MARK ORNAMENT</td></tr>
            <tr><td>&#10078;</td><td>275E</td><td>HEAVY DOUBLE COMMA QUOTATION MARK ORNAMENT</td></tr>
            <tr><td>&#10079;</td><td>275F</td><td>HEAVY LOW SINGLE COMMA QUOTATION MARK ORNAMENT</td></tr>
            <tr><td>&#10080;</td><td>2760</td><td>HEAVY LOW DOUBLE COMMA QUOTATION MARK ORNAMENT</td></tr>
            <tr><td>&#10081;</td><td>2761</td><td>CURVED STEM PARAGRAPH SIGN ORNAMENT</td></tr>
            <tr><td>&#10082;</td><td>2762</td><td>HEAVY EXCLAMATION MARK ORNAMENT</td></tr>
            <tr><td>&#10083;</td><td>2763</td><td>HEAVY HEART EXCLAMATION MARK ORNAMENT</td></tr>
            <tr><td>&#10084;</td><td>2764</td><td>HEAVY BLACK HEART</td></tr>
            <tr><td>&#10085;</td><td>2765</td><td>ROTATED HEAVY BLACK HEART BULLET</td></tr>
            <tr><td>&#10086;</td><td>2766</td><td>FLORAL HEART</td></tr>
            <tr><td>&#10087;</td><td>2767</td><td>ROTATED FLORAL HEART BULLET</td></tr>
            <tr><td>&#10088;</td><td>2768</td><td>MEDIUM LEFT PARENTHESIS ORNAMENT</td></tr>
            <tr><td>&#10089;</td><td>2769</td><td>MEDIUM RIGHT PARENTHESIS ORNAMENT</td></tr>
            <tr><td>&#10090;</td><td>276A</td><td>MEDIUM FLATTENED LEFT PARENTHESIS ORNAMENT</td></tr>
            <tr><td>&#10091;</td><td>276B</td><td>MEDIUM FLATTENED RIGHT PARENTHESIS ORNAMENT</td></tr>
            <tr><td>&#10092;</td><td>276C</td><td>MEDIUM LEFT-POINTING ANGLE BRACKET ORNAMENT</td></tr>
            <tr><td>&#10093;</td><td>276D</td><td>MEDIUM RIGHT-POINTING ANGLE BRACKET ORNAMENT</td></tr>
            <tr><td>&#10094;</td><td>276E</td><td>HEAVY LEFT-POINTING ANGLE QUOTATION MARK ORNAMENT</td></tr>
            <tr><td>&#10095;</td><td>276F</td><td>HEAVY RIGHT-POINTING ANGLE QUOTATION MARK ORNAMENT</td></tr>
            <tr><td>&#10096;</td><td>2770</td><td>HEAVY LEFT-POINTING ANGLE BRACKET ORNAMENT</td></tr>
            <tr><td>&#10097;</td><td>2771</td><td>HEAVY RIGHT-POINTING ANGLE BRACKET ORNAMENT</td></tr>
            <tr><td>&#10098;</td><td>2772</td><td>LIGHT LEFT TORTOISE SHELL BRACKET ORNAMENT</td></tr>
            <tr><td>&#10099;</td><td>2773</td><td>LIGHT RIGHT TORTOISE SHELL BRACKET ORNAMENT</td></tr>
            <tr><td>&#10100;</td><td>2774</td><td>MEDIUM LEFT CURLY BRACKET ORNAMENT</td></tr>
            <tr><td>&#10101;</td><td>2775</td><td>MEDIUM RIGHT CURLY BRACKET ORNAMENT</td></tr>
            <tr><td>&#10102;</td><td>2776</td><td>DINGBAT NEGATIVE CIRCLED DIGIT ONE</td></tr>
            <tr><td>&#10103;</td><td>2777</td><td>DINGBAT NEGATIVE CIRCLED DIGIT TWO</td></tr>
            <tr><td>&#10104;</td><td>2778</td><td>DINGBAT NEGATIVE CIRCLED DIGIT THREE</td></tr>
            <tr><td>&#10105;</td><td>2779</td><td>DINGBAT NEGATIVE CIRCLED DIGIT FOUR</td></tr>
            <tr><td>&#10106;</td><td>277A</td><td>DINGBAT NEGATIVE CIRCLED DIGIT FIVE</td></tr>
            <tr><td>&#10107;</td><td>277B</td><td>DINGBAT NEGATIVE CIRCLED DIGIT SIX</td></tr>
            <tr><td>&#10108;</td><td>277C</td><td>DINGBAT NEGATIVE CIRCLED DIGIT SEVEN</td></tr>
            <tr><td>&#10109;</td><td>277D</td><td>DINGBAT NEGATIVE CIRCLED DIGIT EIGHT</td></tr>
            <tr><td>&#10110;</td><td>277E</td><td>DINGBAT NEGATIVE CIRCLED DIGIT NINE</td></tr>
            <tr><td>&#10111;</td><td>277F</td><td>DINGBAT NEGATIVE CIRCLED NUMBER TEN</td></tr>
            <tr><td>&#10112;</td><td>2780</td><td>DINGBAT CIRCLED SANS-SERIF DIGIT ONE</td></tr>
            <tr><td>&#10113;</td><td>2781</td><td>DINGBAT CIRCLED SANS-SERIF DIGIT TWO</td></tr>
            <tr><td>&#10114;</td><td>2782</td><td>DINGBAT CIRCLED SANS-SERIF DIGIT THREE</td></tr>
            <tr><td>&#10115;</td><td>2783</td><td>DINGBAT CIRCLED SANS-SERIF DIGIT FOUR</td></tr>
            <tr><td>&#10116;</td><td>2784</td><td>DINGBAT CIRCLED SANS-SERIF DIGIT FIVE</td></tr>
            <tr><td>&#10117;</td><td>2785</td><td>DINGBAT CIRCLED SANS-SERIF DIGIT SIX</td></tr>
            <tr><td>&#10118;</td><td>2786</td><td>DINGBAT CIRCLED SANS-SERIF DIGIT SEVEN</td></tr>
            <tr><td>&#10119;</td><td>2787</td><td>DINGBAT CIRCLED SANS-SERIF DIGIT EIGHT</td></tr>
            <tr><td>&#10120;</td><td>2788</td><td>DINGBAT CIRCLED SANS-SERIF DIGIT NINE</td></tr>
            <tr><td>&#10121;</td><td>2789</td><td>DINGBAT CIRCLED SANS-SERIF NUMBER TEN</td></tr>
            <tr><td>&#10122;</td><td>278A</td><td>DINGBAT NEGATIVE CIRCLED SANS-SERIF DIGIT ONE</td></tr>
            <tr><td>&#10123;</td><td>278B</td><td>DINGBAT NEGATIVE CIRCLED SANS-SERIF DIGIT TWO</td></tr>
            <tr><td>&#10124;</td><td>278C</td><td>DINGBAT NEGATIVE CIRCLED SANS-SERIF DIGIT THREE</td></tr>
            <tr><td>&#10125;</td><td>278D</td><td>DINGBAT NEGATIVE CIRCLED SANS-SERIF DIGIT FOUR</td></tr>
            <tr><td>&#10126;</td><td>278E</td><td>DINGBAT NEGATIVE CIRCLED SANS-SERIF DIGIT FIVE</td></tr>
            <tr><td>&#10127;</td><td>278F</td><td>DINGBAT NEGATIVE CIRCLED SANS-SERIF DIGIT SIX</td></tr>
            <tr><td>&#10128;</td><td>2790</td><td>DINGBAT NEGATIVE CIRCLED SANS-SERIF DIGIT SEVEN</td></tr>
            <tr><td>&#10129;</td><td>2791</td><td>DINGBAT NEGATIVE CIRCLED SANS-SERIF DIGIT EIGHT</td></tr>
            <tr><td>&#10130;</td><td>2792</td><td>DINGBAT NEGATIVE CIRCLED SANS-SERIF DIGIT NINE</td></tr>
            <tr><td>&#10131;</td><td>2793</td><td>DINGBAT NEGATIVE CIRCLED SANS-SERIF NUMBER TEN</td></tr>
            <tr><td>&#10132;</td><td>2794</td><td>HEAVY WIDE-HEADED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10133;</td><td>2795</td><td>HEAVY PLUS SIGN</td></tr>
            <tr><td>&#10134;</td><td>2796</td><td>HEAVY MINUS SIGN</td></tr>
            <tr><td>&#10135;</td><td>2797</td><td>HEAVY DIVISION SIGN</td></tr>
            <tr><td>&#10136;</td><td>2798</td><td>HEAVY SOUTH EAST ARROW</td></tr>
            <tr><td>&#10137;</td><td>2799</td><td>HEAVY RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10138;</td><td>279A</td><td>HEAVY NORTH EAST ARROW</td></tr>
            <tr><td>&#10139;</td><td>279B</td><td>DRAFTING POINT RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10140;</td><td>279C</td><td>HEAVY ROUND-TIPPED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10141;</td><td>279D</td><td>TRIANGLE-HEADED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10142;</td><td>279E</td><td>HEAVY TRIANGLE-HEADED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10143;</td><td>279F</td><td>DASHED TRIANGLE-HEADED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10144;</td><td>27A0</td><td>HEAVY DASHED TRIANGLE-HEADED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10145;</td><td>27A1</td><td>BLACK RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10146;</td><td>27A2</td><td>THREE-D TOP-LIGHTED RIGHTWARDS ARROWHEAD</td></tr>
            <tr><td>&#10147;</td><td>27A3</td><td>THREE-D BOTTOM-LIGHTED RIGHTWARDS ARROWHEAD</td></tr>
            <tr><td>&#10148;</td><td>27A4</td><td>BLACK RIGHTWARDS ARROWHEAD</td></tr>
            <tr><td>&#10149;</td><td>27A5</td><td>HEAVY BLACK CURVED DOWNWARDS AND RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10150;</td><td>27A6</td><td>HEAVY BLACK CURVED UPWARDS AND RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10151;</td><td>27A7</td><td>SQUAT BLACK RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10152;</td><td>27A8</td><td>HEAVY CONCAVE-POINTED BLACK RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10153;</td><td>27A9</td><td>RIGHT-SHADED WHITE RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10154;</td><td>27AA</td><td>LEFT-SHADED WHITE RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10155;</td><td>27AB</td><td>BACK-TILTED SHADOWED WHITE RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10156;</td><td>27AC</td><td>FRONT-TILTED SHADOWED WHITE RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10157;</td><td>27AD</td><td>HEAVY LOWER RIGHT-SHADOWED WHITE RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10158;</td><td>27AE</td><td>HEAVY UPPER RIGHT-SHADOWED WHITE RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10159;</td><td>27AF</td><td>NOTCHED LOWER RIGHT-SHADOWED WHITE RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10160;</td><td>27B0</td><td>CURLY LOOP</td></tr>
            <tr><td>&#10161;</td><td>27B1</td><td>NOTCHED UPPER RIGHT-SHADOWED WHITE RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10162;</td><td>27B2</td><td>CIRCLED HEAVY WHITE RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10163;</td><td>27B3</td><td>WHITE-FEATHERED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10164;</td><td>27B4</td><td>BLACK-FEATHERED SOUTH EAST ARROW</td></tr>
            <tr><td>&#10165;</td><td>27B5</td><td>BLACK-FEATHERED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10166;</td><td>27B6</td><td>BLACK-FEATHERED NORTH EAST ARROW</td></tr>
            <tr><td>&#10167;</td><td>27B7</td><td>HEAVY BLACK-FEATHERED SOUTH EAST ARROW</td></tr>
            <tr><td>&#10168;</td><td>27B8</td><td>HEAVY BLACK-FEATHERED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10169;</td><td>27B9</td><td>HEAVY BLACK-FEATHERED NORTH EAST ARROW</td></tr>
            <tr><td>&#10170;</td><td>27BA</td><td>TEARDROP-BARBED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10171;</td><td>27BB</td><td>HEAVY TEARDROP-SHANKED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10172;</td><td>27BC</td><td>WEDGE-TAILED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10173;</td><td>27BD</td><td>HEAVY WEDGE-TAILED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10174;</td><td>27BE</td><td>OPEN-OUTLINED RIGHTWARDS ARROW</td></tr>
            <tr><td>&#10175;</td><td>27BF</td><td>DOUBLE CURLY LOOP</td></tr>

        </table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_default_values.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_pr_align-content.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>