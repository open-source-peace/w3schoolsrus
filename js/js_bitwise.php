<?php include '../include/head.php'; ?>

<title>JavaScript Побитовые операции. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Побитовые операции. 32-битные побитовые операнды. AND, OR, XOR, NOT. Сдвиг влево и вправо. Двоичные (бинарные) числа. Десятичное значение. Преобразование десятичного числа в двоичное и наоборот. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Побитовые операции</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_type_conversion.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_regexp.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>JavaScript Побитовые операции</h2>

    <table class="ws-table-all notranslate">
        <tr>
            <th>Оператор</th>
            <th>Имя</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>&amp;</td>
            <td>AND</td>
            <td>Устанавливает каждый бит в 1, если оба бита равны 1</td>
        </tr>
        <tr>
            <td>|</td>
            <td>OR</td>
            <td>Устанавливает каждый бит в 1, если один из двух битов равен 1</td>
        </tr>
        <tr>
            <td>^</td>
            <td>XOR</td>
            <td>Устанавливает каждый бит в 1, если только один из двух битов равен 1</td>
        </tr>
        <tr>
            <td>~</td>
            <td>NOT</td>
            <td>Инвертирует все биты</td>
        </tr>
        <tr>
            <td>&lt;&lt;</td>
            <td>Zero fill left shift</td>
            <td>Сдвигает влево, вставляя нули справа и позволяя крайним левым битам отпасть</td>
        </tr>
        <tr>
            <td>&gt;&gt;</td>
            <td>Сдвиг вправо</td>
            <td>Сдвигает вправо, вставляя копии крайнего левого бита слева и позволяя крайним правым битам отпасть</td>
        </tr>
        <tr>
            <td>&gt;&gt;&gt;</td>
            <td>Сдвиг вправо с нулевым заполнением</td>
            <td>Сдвигается вправо, вводя нули слева, и позволяя крайним правым битам упасть</td>
        </tr>
    </table>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Примеры</h2>
    <div class="w3-responsive">
        <table class="ws-table-all notranslate">
            <tr>
                <th>Операция</th>
                <th style>Результат</th>
                <th style>Такой же как</th>
                <th>Результат</th>
            </tr>
            <tr>
                <td>5 &amp; 1</td>
                <td>1</td>
                <td>0101 &amp; 0001</td>
                <td>&nbsp;0001</td>
            </tr>
            <tr>
                <td>5 | 1</td>
                <td>5</td>
                <td>0101 | 0001</td>
                <td>&nbsp;0101</td>
            </tr>
            <tr>
                <td>~ 5</td>
                <td>10</td>
                <td>&nbsp;~0101</td>
                <td>&nbsp;1010</td>
            </tr>
            <tr>
                <td>5 &lt;&lt; 1</td>
                <td>10</td>
                <td>0101 &lt;&lt; 1</td>
                <td>&nbsp;1010</td>
            </tr>
            <tr>
                <td>5 ^ 1</td>
                <td>4</td>
                <td>0101 ^ 0001</td>
                <td>&nbsp;0100</td>
            </tr>
            <tr>
                <td>5 &gt;&gt; 1</td>
                <td>2</td>
                <td>0101 &gt;&gt; 1</td>
                <td>&nbsp;0010</td>
            </tr>
            <tr>
                <td>5 &gt;&gt;&gt; 1</td>
                <td>2</td>
                <td>0101 &gt;&gt;&gt; 1</td>
                <td>&nbsp;0010</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>JavaScript использует 32-битные побитовые операнды</h2>
    <p>JavaScript хранит числа как 64-битные числа с плавающей запятой, но все побитовые операции выполняются с 32-битными двоичными числами.</p>
    <p>Перед выполнением побитовой операции JavaScript преобразует числа в 32-битные целые числа со знаком.</p>
    <p>После выполнения побитовой операции результат конвертируется обратно в 64-битные числа JavaScript.</p>
    <div class="w3-container w3-note">
        <p>В приведенных выше примерах используются 4-битные беззнаковые двоичные числа. Из-за этого ~ 5 возвращает 10.</p>
        <p>Поскольку JavaScript использует 32-битные целые числа со знаком, он не вернет 10. Он вернет -6.</p>
        <p>00000000000000000000000000000101 (5)</p>
        <p>11111111111111111111111111111010 (~5 = -6)</p>
        <p>Целое число со знаком использует крайний левый бит как знак минус.</p>
    </div>

    <?php include '../include/addown_content.php'; ?>

    <h2>Побитовое AND</h2>
    <p>Когда побитовое AND выполняется для пары битов, он возвращает 1, если оба бита равны 1.</p>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
            Один бит пример:
            <table class="ws-table-all">
                <tr><th>Операция</th><th>Результат</th></tr>
                <tr><td>0 &amp; 0</td><td>0</td></tr>
                <tr><td>0 &amp; 1</td><td>0</td></tr>
                <tr><td>1 &amp; 0</td><td>0</td></tr>
                <tr><td>1 &amp; 1</td><td>1</td></tr>
            </table>
        </div>
        <div class="w3-half">
            4 бит пример:
            <table class="ws-table-all">
                <tr><th>Операция</th><th>Результат</th></tr>
                <tr><td>1111 &amp; 0000</td><td>0000</td></tr>
                <tr><td>1111 &amp; 0001</td><td>0001</td></tr>
                <tr><td>1111 &amp; 0010</td><td>0010</td></tr>
                <tr><td>1111 &amp; 0100</td><td>0100</td></tr>
            </table>
        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Побитовое OR</h2>
    <p>Когда для пары битов выполняется побитовое OR, оно возвращает 1, если один из битов равен 1:</p>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
            Один бит пример:
            <table class="ws-table-all">
                <tr><th>Операция</th><th>Результат</th></tr>
                <tr><td>0 | 0</td><td>0</td></tr>
                <tr><td>0 | 1</td><td>1&nbsp;</td></tr>
                <tr><td>1 | 0</td><td>1</td></tr>
                <tr><td>1 | 1</td><td>1</td></tr>
            </table>
        </div>
        <div class="w3-half">
            4 бит пример:
            <table class="ws-table-all">
                <tr><th>Операция</th><th>Результат</th></tr>
                <tr><td>1111 | 0000</td><td>1111</td></tr>
                <tr><td>1111 | 0001</td><td>1111</td></tr>
                <tr><td>1111 | 0010</td><td>1111</td></tr>
                <tr><td>1111 | 0100</td><td>1111</td></tr>
            </table>
        </div>
    </div>
    <hr>

    <h2>Побитовое XOR</h2>
    <p>Когда побитовое XOR выполняется для пары битов, возвращает 1, если биты разные:</p>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
            Один бит пример:
            <table class="ws-table-all">
                <tr><th>Операция</th><th>Результат</th></tr>
                <tr><td>0 ^ 0</td><td>0</td></tr>
                <tr><td>0 ^ 1</td><td>1&nbsp;</td></tr>
                <tr><td>1 ^ 0</td><td>1</td></tr>
                <tr><td>1 ^ 1</td><td>0&nbsp;</td></tr>
            </table>
        </div>
        <div class="w3-half">
            4 бит пример:
            <table class="ws-table-all">
                <tr><th>Операция</th><th>Результат</th></tr>
                <tr><td>1111 ^ 0000</td><td>1111</td></tr>
                <tr><td>1111 ^ 0001</td><td>1110</td></tr>
                <tr><td>1111 ^ 0010</td><td>1101</td></tr>
                <tr><td>1111 ^ 0100</td><td>1011</td></tr>
            </table>
        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>JavaScript Побитовое AND (&amp;)</h2>
    <p>Побитовое AND возвращает 1, только если оба бита равны 1:</p>

    <table class="ws-table-all">
        <tr><th>Десятичное</th><th>Двоичное</th></tr>
        <tr><td>5</td><td>00000000000000000000000000000101</td></tr>
        <tr><td>1</td><td>00000000000000000000000000000001</td></tr>
        <tr><td>5 &amp; 1</td><td>00000000000000000000000000000001 (1)</td></tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 5 &amp; 1;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_bitwise_and.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>JavaScript Побитовое OR (|)</h2>
    <p>Побитовое OR возвращает 1, если один из битов равен 1:</p>
    <table class="ws-table-all">
        <tr><th>Десятичное</th><th>Двоичное</th></tr>
        <tr><td>5</td><td>00000000000000000000000000000101</td></tr>
        <tr><td>1</td><td>00000000000000000000000000000001</td></tr>
        <tr><td>5 | 1</td><td>00000000000000000000000000000101 (5)</td></tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 5 | 1;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_bitwise_or.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>JavaScript Побитовое XOR (^)</h2>
    <p>Побитовое XOR возвращает 1, если биты разные:</p>
    <table class="ws-table-all">
        <tr><th>Десятичное</th><th>Двоичное</th></tr>
        <tr><td>5</td><td>00000000000000000000000000000101</td></tr>
        <tr><td>1</td><td>00000000000000000000000000000001</td></tr>
        <tr><td>5 ^ 1</td><td>00000000000000000000000000000100 (4)</td></tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 5 ^ 1;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_bitwise_xor.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>JavaScript Побитовое NOT (~)</h2>
    <table class="ws-table-all">
        <tr><th>Десятичное</th><th>Двоичное</th></tr>
        <tr><td>5</td><td>00000000000000000000000000000101</td></tr>
        <tr><td>~5</td><td>11111111111111111111111111111010 (-6)</td></tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = ~5;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_bitwise_not.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>JavaScript (нулевое заполнение) Побитовый сдвиг влево (&lt;&lt;)</h2>
    <p>Это сдвиг влево с нулевым заполнением. Один или несколько нулевых бит вставляются справа, а крайние левые биты отваливаются:</p>
    <table class="ws-table-all">
        <tr><th>Десятичное</th><th>Двоичное</th></tr>
        <tr><td>5</td><td>00000000000000000000000000000101</td></tr>
        <tr><td>5 &lt;&lt; 1</td><td>00000000000000000000000000001010 (10)</td></tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 5 &lt;&lt; 1;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_bitwise_left.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>JavaScript (сохранение знака) Побитовый сдвиг вправо (&gt;&gt;)</h2>
    <p>Это знак, сохраняющий правый сдвиг. Копии самого левого бита вставляются слева, а крайние правые биты отваливаются:</p>
    <table class="ws-table-all">
        <tr><th>Десятичное</th><th>Двоичное</th></tr>
        <tr><td>-5</td><td>11111111111111111111111111111011</td></tr>
        <tr><td>-5 &gt;&gt; 1</td><td>11111111111111111111111111111101 (-3)</td></tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = -5 &gt;&gt; 1;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_bitwise_right_sign.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>JavaScript (Zero Fill) сдвиг вправо (&gt;&gt;&gt;)</h2>
    <p>Это сдвиг вправо с нулевым заполнением. Один или несколько нулевых бит вставляются слева, а крайние правые биты отваливаются:</p>
    <table class="ws-table-all">
        <tr><th>Десятичное</th><th>Двоичное</th></tr>
        <tr><td>5</td><td>00000000000000000000000000000101</td></tr>
        <tr><td>5 &gt;&gt;&gt; 1</td><td>00000000000000000000000000000010 (2)</td></tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 5 &gt;&gt;&gt; 1;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_bitwise_right.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Двоичные (бинарные) числа</h2>
    <p>Двоичные числа с одним набором битов легко понять:</p>
    <table class="ws-table-all">
        <tr><th>Двоичное представление</th><th>Десятичное значение</th></tr>
        <tr><td>00000000000000000000000000000001</td><td>1</td></tr>
        <tr><td>00000000000000000000000000000010</td><td>2</td></tr>
        <tr><td>00000000000000000000000000000100</td><td>4</td></tr>
        <tr><td>00000000000000000000000000001000</td><td>8</td></tr>
        <tr><td>00000000000000000000000000010000</td><td>16</td></tr>
        <tr><td>00000000000000000000000000100000</td><td>32</td></tr>
        <tr><td>00000000000000000000000001000000</td><td>64</td></tr>
    </table>
    <p>Установка ещё нескольких битов показывает двоичный паттерн:</p>
    <table class="ws-table-all">
        <tr><th>Двоичное представление</th><th>Десятичное значение</th></tr>
        <tr><td>00000000000000000000000000000101</td><td>5 (4 + 1)</td></tr>
        <tr><td>00000000000000000000000000001101</td><td>13 (8 + 4 + 1)</td></tr>
        <tr><td>00000000000000000000000000101101</td><td>45 (32 + 8 + 4 + 1)</td></tr>
    </table>
    <p>Двоичные числа JavaScript хранятся в формате дополнения до двух.</p>
    <p>Это означает, что отрицательное число - это побитовое NOT числа плюс 1:</p>
    <table class="ws-table-all">
        <tr><th>Двоичное представление</th><th>Десятичное значение</th></tr>
        <tr><td>00000000000000000000000000000101</td><td>5</td></tr>
        <tr><td>11111111111111111111111111111011</td><td>-5</td></tr>
        <tr><td>00000000000000000000000000000110</td><td>6</td></tr>
        <tr><td>11111111111111111111111111111010</td><td>-6</td></tr>
        <tr><td>00000000000000000000000000101000</td><td>40</td></tr>
        <tr><td>11111111111111111111111111011000</td><td>-40</td></tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Преобразование десятичного числа в двоичное</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function dec2bin(dec){<br>
            &nbsp;&nbsp;return (dec &gt;&gt;&gt; 0).toString(2);<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_bitwise_convert.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Преобразование двоичного числа в десятичное</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function bin2dec(bin){<br>
            &nbsp; return parseInt(bin, 2).toString(10);<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_bitwise_convert_binary.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_type_conversion.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_regexp.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>