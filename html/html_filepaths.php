<?php include '../include/head.php'; ?>

<title>HTML Пути к файлу. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Пути к файлу. Абсолютный и относительный путь к файлу. Лучшие практики. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class='color_h1'>Пути к файлу</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_scripts.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_head.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>Путь к файлу описывает расположение файла в структуре папок веб-сайта.</p>
    <hr>

    <h2>Примеры пути к файлу</h2>
    <table class='w3-table-all'>
        <tr><th style="width:280px">Путь</th><th>Описание</th></tr>
        <tr>
            <td>&lt;img src=&quot;picture.jpg&quot;&gt;</td>
            <td>Файл &quot;picture.jpg&quot; находится в той же папке, что и текущая страница</td>
        </tr>
        <tr>
            <td>&lt;img src=&quot;images/picture.jpg&quot;&gt;</td>
            <td>Файл &quot;picture.jpg&quot; находится в папке изображений в текущей папке</td>
        </tr>
        <tr>
            <td>&lt;img src=&quot;/images/picture.jpg&quot;&gt;</td>
            <td>Файл &quot;picture.jpg&quot; находится в папке изображений в корне текущего веб-сайта</td>
        </tr>
        <tr>
            <td>&lt;img src=&quot;../picture.jpg&quot;&gt;</td>
            <td>Файл &quot;picture.jpg&quot; находится в папке на один уровень выше текущей папки</td>
        </tr>
    </table>
    <hr>

    <h2>HTML Пути к файлу</h2>
    <p>Путь к файлу описывает расположение файла в структуре папок веб-сайта..</p>
    <p>Пути к файлам используются при ссылках на внешние файлы, например:</p>
    <ul>
        <li>Веб-страницы</li>
        <li>Изображения</li>
        <li>Таблицы стилей</li>
        <li>JavaScripts</li>
    </ul>
    <hr>

    <h2>Абсолютный путь к файлу</h2>
    <p>Абсолютный путь к файлу - это полный URL-адрес файла:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;img src=&quot;https://www.w3schools.com/images/picture.jpg&quot;
            alt=&quot;Гора&quot;&gt;
        </div>
        <p><a class='w3-btn' href="../htmltryit/tryit8b3d.html?filename=tryhtml_files_absoulute" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <div class='w3-panel w3-note'>
        <p>Тег &lt;img&gt; объясняется в главе: <a href="html_images.php">HTML Изображения</a>.</p>
    </div>
    <hr>

    <h2>Относительный путь к файлу</h2>
    <p>Относительный путь к файлу указывает на файл относительно текущей страницы.</p>
    <p>В следующем примере путь к файлу указывает на файл в папке изображений, расположенный в корне текущего веб-сайта:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;img src=&quot;/images/picture.jpg&quot;
            alt=&quot;Гора&quot;&gt;
        </div>
        <p><a class='w3-btn' href="../htmltryit/tryit31a4.html?filename=tryhtml_files_relative" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>

    <p>В следующем примере путь к файлу указывает на файл в папке изображений, находящейся в текущей папке:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;img src=&quot;images/picture.jpg&quot;
            alt=&quot;Гора&quot;&gt;
        </div>
        <p><a class='w3-btn' href="../htmltryit/tryitf045.html?filename=tryhtml_files_relative_1" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>

    <p>В следующем примере путь к файлу указывает на файл в папке изображений, расположенный в папке на один уровень выше текущей папки:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;img src=&quot;../images/picture.jpg&quot;
            alt=&quot;Гора&quot;&gt;
        </div>
        <p><a class='w3-btn' href="../htmltryit/tryitc7b3.html?filename=tryhtml_files_relative_2" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <hr>

    <h2>Лучшая практика</h2>
    <p>Лучше всего использовать относительные пути к файлам (если возможно).</p>
    <p>При использовании относительных путей к файлам ваши веб-страницы не будут привязаны к вашему текущему базовому URL. Все ссылки будут работать на вашем собственном компьютере (localhost), а также в вашем текущем общедоступном домене и ваших будущих общедоступных доменах.</p>

    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_scripts.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_head.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>