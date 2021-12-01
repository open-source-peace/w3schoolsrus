<?php include '../include/head.php'; ?>

  <title>HTML URL кодирование. Унифицированные локаторы ресурсов. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML URL веб-страниц. Что такое web-адрес? Какой адрес сайта? <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML <span class='color_h1'>URL - Унифицированные локаторы ресурсов</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_charset.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_xhtml.php'>Next &#10095;</a>
    </div>
    <hr><p class='intro'><strong>URL</strong> - это другое слово для веб-адреса.</p>
    <p class='intro'>URL может состоять из слов (w3schools.com) или IP-адреса. (192.68.20.50).</p>
    <p class='intro'>Большинство людей вводят название при серфинге, потому что названия легче запомнить, чем цифры.</p>
    <hr><h2>URL - унифицированный указатель ресурса</h2>
    <p>Веб-браузеры запрашивают страницы с веб-серверов, используя URL.</p>
    <p>Унифицированный указатель ресурса (URL) используется для адресации документа (или других данных) в Интернете.</p>
    <p>Веб-адрес, например <a target="_blank" href="index.php">https://w3schoolsrus.github.io/html/index.php</a>следует этим правилам синтаксиса:</p>

    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        scheme://prefix.domain:port/path/filename
      </div></div>

    <p>Объяснение:</p>
    <ul>
      <li><b>scheme</b> - определяет <b>тип</b> Интернет-сервиса (наиболее распространенным является <b>http или https</b>)</li>
      <li><strong>prefix</strong> - определяет домен <b>prefix</b> (по умолчанию для http является <b>www</b>)</li>
      <li><b>domain</b> - определяет Интернет <b>доменное имя </b>(например w3schools.com)</li>
      <li><b>port</b> - определяет <b>номер порта </b>на хосте (по умолчанию для http является <b>80</b>)</li>
      <li><b>path</b> - определяет <b>path</b> на сервере (если не указан: корневой каталог сайта)</li>
      <li><b>filename</b> - определяет название документа или ресурса</li>
    </ul>
    <hr>

    <h2>Общие схемы URL</h2>
    <p>В таблице ниже перечислены некоторые распространенные схемы:</p>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:10%">Схема</th>
        <th style="width:35%">Короче для</th>
        <th>Используется для</th>
      </tr>
      <tr>
        <td>http</td>
        <td>Протокол передачи гипертекста</td>
        <td>Общие веб-страницы. Не зашифрованы</td>
      </tr>
      <tr>
        <td>https</td>
        <td>Безопасный протокол передачи гипертекста</td>
        <td>Безопасные веб-страницы. Зашифрованные</td>
      </tr>
      <tr>
        <td>ftp</td>
        <td>Протокол передачи файлов</td>
        <td>Скачивание или загрузка файлов</td>
      </tr>
      <tr>
        <td>file</td>
        <td>&nbsp;</td>
        <td>Файл на вашем компьютере</td>
      </tr>
    </table>
    <hr><h2>URL Кодирование</h2>
    <p>URL-адреса могут быть отправлены только через Интернет с помощью
      <a href="../charsets/ref_html_ascii.php">ASCII набор символов</a>. Если URL-адрес содержит символы вне набора ASCII, он должен быть преобразован.</p>
    <p>Кодировка URL преобразует не-ASCII символы в формат, который может быть передан через Интернет.</p>
    <p>Кодировка URL заменяет символы, не входящие в ASCII, на «%», за которым следуют шестнадцатеричные цифры.</p>
    <p>URL не могут содержать пробелы. Кодировка URL обычно заменяет пробел знаком плюс (+) или %20.</p>
    <hr>

    <h2>Попробуйте сами</h2>

    <form name="input" target="_blank" action="https://www.w3schools.com/action_page2.php" method="get">
      <input type="text" value="Hello Günter" name="text" size="30">
      <input type="Submit" value="Отправить">
    </form>
    <br>
    <p>Если вы нажмете «Отправить», браузер выполнит URL-кодирование ввода перед его отправкой на сервер.</p>
    <p>На странице сервера отобразятся полученные данные.</p>
    <p>Попробуйте ввести другие данные и снова нажмите "Отправить".</p>
    <hr><h2>ASCII кодирование. Примеры</h2>
    <p>Ваш браузер будет кодировать ввод в соответствии с набором символов, используемым на вашей странице.</p>
    <p>Набор символов по умолчанию в HTML5 - UTF-8.</p>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:20%">Символ</th>
        <th style="width:40%">Из Windows-1252</th>
        <th style="width:40%">Из UTF-8</th>
      </tr>
      <tr>
        <td>€</td>
        <td>%80</td>
        <td>%E2%82%AC</td>
      </tr>
      <tr>
        <td>£</td>
        <td>%A3</td>
        <td>%C2%A3</td>
      </tr>
      <tr>
        <td>©</td>
        <td>%A9</td>
        <td>%C2%A9</td>
      </tr>
      <tr>
        <td>®</td>
        <td>%AE</td>
        <td>%C2%AE</td>
      </tr>
      <tr>
        <td>À</td>
        <td>%C0</td>
        <td>%C3%80</td>
      </tr>
      <tr>
        <td>Á</td>
        <td>%C1</td>
        <td>%C3%81</td>
      </tr>
      <tr>
        <td>Â</td>
        <td>%C2</td>
        <td>%C3%82</td>
      </tr>
      <tr>
        <td>Ã</td>
        <td>%C3</td>
        <td>%C3%83</td>
      </tr>
      <tr>
        <td>Ä</td>
        <td>%C4</td>
        <td>%C3%84</td>
      </tr>
      <tr>
        <td>Å</td>
        <td>%C5</td>
        <td>%C3%85</td>
      </tr>
    </table>
    <p>Для получения полной справки на все кодировки URL, посетите <a href="../tags/ref_urlencode.php">URL кодирование. Справочник</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_charset.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_xhtml.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>