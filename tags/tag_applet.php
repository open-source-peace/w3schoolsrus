<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;applet&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Тег &lt;applet&gt;. Не поддерживается в HTML5. Что такое апплеты? Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML тег <span class='color_h1'>&lt;applet&gt;</span>. <span class='deprecated'>Не поддерживается в HTML5.</span></h1>
    <div class='w3-clear w3-center nextprev'>
        <a class='w3-left w3-btn' href='tag_address.php'>&#10094;<span class='w3-hide-small'> Prev</span></a>
        <a class='w3-btn' href='index.php'><span class='w3-hide-small'>Полный HTML </span>Справочник</a>
        <a class='w3-right w3-btn' href='tag_area.php'><span class='w3-hide-small'>Next </span>&#10095;</a>
    </div>
    <hr>

    <div class='w3-example'>
        <h3>Пример</h3>
        <p>Встроенный Java-апплет:</p>
        <div class='w3-code notranslate htmlHigh'>
            &lt;applet code=&quot;Bubbles.class&quot; width=&quot;350&quot; height=&quot;350&quot;&gt;<br>
            Java-апплет, который рисует анимированные пузыри.<br>
            &lt;/applet&gt;
        </div>
        <br>
    </div>
    <hr>

    <h2>Определение и использование</h2>
    <p><span class='deprecated'>Тег <code>&lt;applet&gt;</code> не поддерживается в HTML5. Используйте <a href='tag_embed.php'>&lt;embed&gt;</a> или <a href='tag_object.php'>&lt;object&gt;</a> вместо этого.</span></p>
    <p>Тег <code>&lt;applet&gt;</code> определяет встроенный апплет.</p>
    <hr>

    <h2>Поддержка браузерами</h2>
    <table class='browserref notranslate'>
        <tr>
            <th style='width:20%;font-size:16px;text-align:left;'>Элемент</th>
            <th style='width:16%;' class='bsChrome' title='Chrome'></th>
            <th style='width:16%;' class='bsEdge' title='Internet Explorer / Edge'></th>
            <th style='width:16%;' class='bsFirefox' title='Firefox'></th>
            <th style='width:16%;' class='bsSafari' title='Safari'></th>
            <th style='width:16%;' class='bsOpera' title='Opera'></th>
        </tr>
        <tr>
            <td style='text-align:left;'>&lt;applet&gt;</td>
            <td><span class='deprecated'>Не поддерживается</span></td>
            <td><span class='deprecated'>Не поддерживается</span></td>
            <td>Yes</td>
            <td>Yes</td>
            <td><span class='deprecated'>Не поддерживается</span></td>
        </tr>
    </table>
    <p><b>Примечание</b>: В некоторых браузерах все ещё есть некоторая поддержка тега <code>&lt;applet&gt;</code>, но для его работы требуются дополнительные плагины / установки.</p>
    <p><strong>Примечание:</strong> Тег <code>&lt;applet&gt;</code> поддерживается в Internet Explorer 11 и его более ранних версиях с использованием плагина.</p>
    <hr>

    <h2>Отличия между HTML 4.01 и HTML5</h2>
    <p>Тег <code>&lt;applet&gt;</code> не поддерживается в HTML5.</p>
    <hr>

    <h2>Обязательные атрибуты</h2>
    <table class='w3-table-all notranslate'>
        <tr>
            <th style='width:20%'>Атрибут</th>
            <th style='width:20%'>Значение</th>
            <th style='width:60%'>Описание</th>
        </tr>
        <tr>
            <td>code</td>
            <td><i>URL</i></td>
            <td>Определяет имя файла Java-апплета</td>
        </tr>
        <tr>
            <td>object</td>
            <td><i>name</i></td>
            <td>Определяет ссылку на сериализованное представление апплета</td>
        </tr>
    </table>

    <h2>Необязательные атрибуты</h2>
    <table class='w3-table-all notranslate'>
        <tr>
            <th style='width:20%'>Атрибут</th>
            <th style='width:20%'>Значение</th>
            <th style='width:60%'>Описание</th>
        </tr>
        <tr>
            <td>align</td>
            <td>left<br>
                right<br>
                top<br>
                bottom<br>
                middle<br>
                baseline</td>
            <td>Определяет выравнивание апплета в соответствии с окружающими элементами</td>
        </tr>
        <tr>
            <td>alt</td>
            <td><i>text</i></td>
            <td>Определяет альтернативный текст для апплета</td>
        </tr>
        <tr>
            <td>archive</td>
            <td><i>URL</i></td>
            <td>Определяет местоположение файла архива</td>
        </tr>
        <tr>
            <td>codebase</td>
            <td><i>URL</i></td>
            <td>Указывает относительный базовый URL для апплетов, указанных в атрибуте кода</td>
        </tr>
        <tr>
            <td>height</td>
            <td><i>pixels</i></td>
            <td>Определяет высоту апплета</td>
        </tr>
        <tr>
            <td>hspace</td>
            <td><i>pixels</i></td>
            <td>Определяет горизонтальный отступ вокруг апплета</td>
        </tr>
        <tr>
            <td>name</td>
            <td><i>name</i></td>
            <td>Определяет имя для апплета (для использования в скриптах)</td>
        </tr>
        <tr>
            <td>vspace</td>
            <td><i>pixels</i></td>
            <td>Определяет вертикальный интервал вокруг апплета</td>
        </tr>
        <tr>
            <td>width</td>
            <td><i>pixels</i></td>
            <td>Определяет ширину апплета</td>
        </tr>
    </table>
    <hr>
    <div class='w3-clear w3-center nextprev'>
        <a class='w3-left w3-btn' href='tag_address.php'>&#10094;<span class='w3-hide-small'> Prev</span></a>
        <a class='w3-btn' href='index.php'><span class='w3-hide-small'>Полный HTML </span>Справочник</a>
        <a class='w3-right w3-btn' href='tag_area.php'><span class='w3-hide-small'>Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>