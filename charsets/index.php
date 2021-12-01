<?php include '../include/head.php'; ?>
<title>HTML Наборы символов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Наборы символов. Какая кодировка применяется при вёрстке веб-страниц? Полный справочник символов. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_charsets.php'; ?>
<?php include '../include/before_content_charsets.php'; ?>

<article>
    <h1>HTML Наборы символов</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="ref_html_ascii.php">Next &#10095;</a>
    </div>
    <hr>
    <p>Для правильного отображения HTML-страницы браузер должен знать, какой <strong>набор символов</strong> (кодировку) использовать:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;meta charset=&quot;UTF-8&quot;&gt;
        </div>
    </div>

    <hr>
    <h2>HTML Наборы символов</h2>
    <p>Для <strong>HTML5</strong> кодировка символов по умолчанию - <strong>UTF-8</strong>.</p>
    <p>Но так было не всегда. Кодировка символов для раннего веба была ASCII.</p>
    <p>Позже, с HTML 2.0 до HTML 4.01, ISO-8859-1 считался стандартом.</p>
    <p>С XML и HTML5 наконец-то появился UTF-8 и решил множество проблем кодировки символов.</p>

    <hr>
    <h2>В начале: ASCII</h2>
    <p>Компьютерные данные хранятся в виде двоичных кодов (01000101) в электронике.</p>
    <p>Для стандартизации хранения текста был создан Американский стандартный код для обмена информацией (ASCII). Он определил уникальное двоичное число для каждого сохраняемого символа для поддержки чисел от 0 до 9, прописных и строчных букв (a-z, A-Z) и специальных символов, таких как ! $ + - ( ) @ &lt; &gt; , .</p>
    <p>Поскольку ASCII использовал 7 бит для символа, он мог представлять только 128 различных символов.</p>
    <p>Самым большим недостатком ASCII было то, что он исключал неанглийские буквы.</p>
    <p>ASCII все ещё используется сегодня, особенно в крупных компьютерных системах.</p>
    <p>Для более детального ознакомления, пожалуйста, изучите наш <a href="ref_html_ascii.php">Полный справочник ASCII</a>.</p>
    <hr>
    <h2>В Windows: Windows-1252</h2>
    <p>Windows-1252 был набором символов по умолчанию в Windows, вплоть до Windows 95.</p>

    <p>Это расширение ASCII с добавлением международных символов.</p>
    <p>Он использует полный байт (8 бит) для представления 256 различных символов.</p>
    <p>Поскольку Windows-1252 по умолчанию используется в Windows, она поддерживается всеми браузерами.</p>
    <p>Для более детального изучения, пожалуйста, изучите: <a href="ref_html_ansi.php">Полный справочник Windows-1252</a>.</p>
    <hr>

    <h2>В HTML 4: ISO-8859-1</h2>
    <p>Набор символов по умолчанию в HTML 4 - это ISO-8859-1.</p>
    <p>ISO-8859-1 является расширением ASCII с добавлением международных символов.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html;charset=ISO-8859-1&quot;&gt;
        </div>
    </div>

    <p>В HTML 4 набор символов, отличный от ISO-8859-1, может быть указан в теге &lt;meta&gt;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html;charset=ISO-8859-8&quot;&gt;
        </div>
    </div>
    <p>Все процессоры HTML 4 также поддерживают UTF-8:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html;charset=UTF-8&quot;&gt;
        </div>
    </div>
    <div class="w3-panel w3-note">
        <p>Когда браузер обнаруживает ISO-8859-1, обычно по умолчанию используется Windows-1252, поскольку в Windows-1252 есть еще 32 международных символа.</p>
    </div>

    <p>Для более детального изучения, пожалуйста, изучите: <a href="ref_html_8859.php">Полный справочник ISO-8859-1</a></p>
    <hr>

    <h2>В HTML5: Unicode UTF-8</h2>

    <p>Набор символов по умолчанию для HTML5 - это UTF-8.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;meta charset=&quot;UTF-8&quot;&gt;
        </div>
    </div>

    <p>Набор символов, отличный от UTF-8, может быть указан в теге &lt;meta&gt;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;meta charset=&quot;ISO-8859-1&quot;&gt;
        </div>
    </div>

    <p>Консорциум Unicode разработал стандарты UTF-8 и UTF-16, поскольку наборы символов ISO-8859 ограничены и несовместимы с многоязычной средой.</p>
    <p>Стандарт Unicode охватывает (почти) все символы, знаки препинания и символы в мире.</p>

    <div class="w3-panel w3-note">
        <p>Все процессоры HTML5 и XML поддерживают UTF-8, UTF-16, Windows-1252 и ISO-8859.</p>
    </div>

    <p>Для более детального изучения, пожалуйста, изучите: <a href="ref_html_utf8.php">Полный справочник Unicode</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="ref_html_ascii.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>