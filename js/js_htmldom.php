<?php include '../include/head.php'; ?>

<title>JavaScript HTML DOM. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript HTML DOM (Document Object Model - Объектная модель документа). Что такое DOM? Что такое HTML DOM? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">HTML DOM</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_async.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_htmldom_methods.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">С помощью HTML DOM JavaScript может получать доступ ко всем элементам HTML-документа и изменять их.</p>
    <hr>


    <h2>HTML DOM (Document Object Model - Объектная модель документа)</h2>
    <p>Когда веб-страница загружается, браузер создает <strong>D</strong>ocument <strong>O</strong>bject <strong>M</strong>odel (объектную модель документа) HTML-страницы. </p>
    <p>Модель <strong>HTML DOM</strong> построена как дерево <strong>объектов</strong>:</p>
    <div class="w3-example">
        <h3 class="w3-center">Дерево объектов HTML DOM</h3>
        <div class="w3-padding w3-white w3-center w3-margin-bottom notranslate">
            <img style="max-width:100%" src="../images/pic_htmltree.gif" alt="DOM HTML tree">
        </div>
    </div>
    <p>Благодаря объектной модели JavaScript получает все возможности, необходимые для создания динамического HTML:</p>
    <ul>
        <li>JavaScript может изменять все элементы HTML на странице</li>
        <li>JavaScript может изменять все атрибуты HTML на странице</li>
        <li>JavaScript может изменять все стили CSS на странице</li>
        <li>JavaScript может удалять существующие элементы и атрибуты HTML</li>
        <li>JavaScript может добавлять новые элементы и атрибуты HTML</li>
        <li>JavaScript может реагировать на все существующие HTML-события на странице</li>
        <li>JavaScript может создавать новые HTML-события на странице</li>
    </ul>
    <hr>

    <h2>Что вы узнаете</h2>
    <p>В следующих главах этого учебника вы узнаете:</p>
    <ul>
        <li>Как изменить содержимое HTML-элементов</li>
        <li>Как изменить стиль (CSS) элементов HTML</li>
        <li>Как реагировать на события HTML DOM</li>
        <li>Как добавлять и удалять элементы HTML</li>
    </ul>
    <hr/>

    <h2>Что такое DOM?</h2>
    <p>DOM - это стандарт консорциума W3C (World Wide Web Consortium).</p>
    <p>DOM определяет стандарт для доступа к документам:</p>
    <p><i>&quot;Объектная модель документа W3C (DOM) - это не зависящий от платформы и языка интерфейс, который позволяет программам и скриптам динамически получать доступ и обновлять содержимое, структуру и стиль документа.&quot;</i></p>
    <p>Стандарт W3C DOM разделен на 3 части:</p>
    <ul>
        <li>Core DOM - стандартная модель для всех типов документов</li>
        <li>XML DOM - стандартная модель для XML-документов</li>
        <li>HTML DOM - стандартная модель для HTML-документов</li>
    </ul>
    <hr/>

    <h2>Что такое HTML DOM?</h2>
    <p>HTML DOM - это стандартная <strong>объектная</strong> модель и <strong>программный интерфейс</strong> для HTML. Он определяет:</p>
    <ul>
        <li>HTML элементы как <b>объекты</b>
        <li><b>Свойства</b> всех HTML элементов
        <li><b>Методы</b> доступа ко всем HTML элементам</li>
        <li><b>События</b> для всех HTML элементов</li>
    </ul>
    <p>Другими словами: <b>HTML DOM - это стандарт того, как получать, изменять, добавлять или удалять HTML элементы.</b></p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_async.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_htmldom_methods.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>