<?php include '../include/head_icons.php'; ?>

<title>Иконки Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Иконки - Применение на веб-страницах. Font Awesome 5. Bootstrap. Google. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_icons.php'; ?>
<?php include '../include/before_content_icons.php'; ?>

<article>
    <h1>Учебник иконок</h1>
    <div class='w3-clear nextprev' style='margin: 16px 0'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='icons_reference.php'>Next &#10095;</a>
    </div>
    <hr>

    <div class='w3-row w3-center'>
        <div class='w3-third'>
            <i class='fa fa-cloud' style='font-size:36px;'></i>
            <i class='fa fa-cloud' style='font-size:60px;'></i>
            <i class='fa fa-cloud w3-text-red' style='font-size:72px;'></i>
        </div>
        <div class='w3-third'>
            <i class='fa fa-car' style='font-size:36px;'></i>
            <i class='fa fa-car w3-text-dark-grey' style='font-size:60px;'></i>
            <i class='fa fa-car w3-text-grey' style='font-size:72px;'></i>
        </div>
        <div class='w3-third'>
            <i class='fa fa-thumbs-o-up' style='font-size:36px;'></i>
            <i class='fa fa-thumbs-o-up' style='font-size:60px;'></i>
            <i class='fa fa-thumbs-o-up w3-text-indigo' style='font-size:72px;'></i>
        </div>
    </div>
    <hr>

    <h2>Как добавить иконки</h2>
    <p>Чтобы вставить иконку, добавьте имя класса иконки к любому встроенному элементу HTML.</p>
    <p>Элементы <code class='w3-codespan'>&lt;i&gt;</code> и <code class='w3-codespan'>&lt;span&gt;</code> широко используются для добавления иконок.</p>
    <p>Все иконки в библиотеках иконок ниже - это масштабируемые векторные иконки, которые можно настроить с помощью CSS (размер, цвет, тень и т.д.)</p>
    <hr>

    <h2>Font Awesome 5 иконки</h2>
    <p>Чтобы использовать иконки <strong>Free Font Awesome 5</strong>, перейдите на сайт <a href='https://fontawesome.com'>fontawesome.com</a> и войдите в систему, чтобы получить код для использования на своих веб-страницах.</p>
    <p>Узнайте больше о том, как начать работу с Font Awesome, в главе <a href='fontawesome5_intro.php'>Font Awesome 5</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p><strong>Примечание:</strong> Никакой загрузки или установки не требуется!</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>
            &lt;script src='https://kit.fontawesome.com/<em>ваш_код</em>.js'&gt;&lt;/script&gt;<br>
            &lt;!--Получите свой код на fontawesome.com--&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;i class='fas fa-band-aid'&gt;&lt;/i&gt;<br>&lt;i
            class='fas fa-cat'&gt;&lt;/i&gt;<br>&lt;i class='fas fa-dragon'&gt;&lt;/i&gt;<br>&lt;i class='far fa-clock'&gt;&lt;/i&gt;<br>
            &lt;i class='fas fa-clock'&gt;&lt;/i&gt;<br><br>
            &lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a class='w3-btn w3-margin-bottom' href='../iconstryit/tryicons_awesome5.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Font Awesome 4 Иконки</h2>
    <p>Чтобы использовать иконки <strong>Font Awesome 4</strong>, добавьте следующую строку в раздел <code class='w3-codespan'>&lt;head&gt;</code> вашей HTML страницы:</p>
    <p><strong>Примечание:</strong> Никакой загрузки или установки не требуется!</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>
            &lt;link rel='stylesheet'  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'&gt;<br>
            &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;i class='fa fa-cloud'&gt;&lt;/i&gt;<br>&lt;i  class='fa fa-heart'&gt;&lt;/i&gt;<br>&lt;i class='fa fa-car'&gt;&lt;/i&gt;<br>&lt;i class='fa fa-file'&gt;&lt;/i&gt;<br>
            &lt;i class='fa fa-bars'&gt;&lt;/i&gt;<br><br>
            &lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a class='w3-btn w3-margin-bottom' href='../iconstryit/tryicons_awesome.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Bootstrap 3 Иконки</h2>
    <p>Чтобы использовать <strong>глификоны Bootstrap 3</strong>, добавьте следующую строку в раздел <code class='w3-codespan'>&lt;head&gt;</code> своей HTML-страницы:</p>
    <p><strong>Примечание:</strong> Никакой загрузки или установки не требуется!</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>
            &lt;link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>
            <br>&lt;i class='glyphicon glyphicon-cloud'&gt;&lt;/i&gt;<br>&lt;i class='glyphicon  glyphicon-remove'&gt;&lt;/i&gt;<br>&lt;i class='glyphicon glyphicon-user'&gt;&lt;/i&gt;<br>&lt;i  class='glyphicon glyphicon-envelope'&gt;&lt;/i&gt;<br>&lt;i class='glyphicon glyphicon-thumbs-up'&gt;&lt;/i&gt;<br><br>
            &lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a class='w3-btn w3-margin-bottom' href='../iconstryit/tryicons_bootstrap.html' target='_blank'>Попробуйте сами &raquo;</a></div>
    <div class='w3-note w3-panel'>
        <p><strong>Примечание:</strong> Глификоны не поддерживаются в Bootstrap 4.</p>
        <p>Для получения дополнительной информации о Bootstrap 3 и Glyphicons посетите <a href='../bootstrap/index.php'>Bootstrap 3 Учебник</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
    </div>
    <hr>

    <h2>Google Иконки</h2>
    <p>Чтобы использовать <strong>иконки Google</strong>, добавьте следующую строку в раздел <code class='w3-codespan'>&lt;head&gt;</code> своей HTML страницы:</p>
    <p><strong>Примечание:</strong> Никакой загрузки или установки не требуется!</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>
            &lt;link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>
            <br>&lt;i class='material-icons'&gt;cloud&lt;/i&gt;<br>&lt;i  class='material-icons'&gt;favorite&lt;/i&gt;<br>&lt;i  class='material-icons'&gt;attachment&lt;/i&gt;<br>&lt;i  class='material-icons'&gt;computer&lt;/i&gt;<br>&lt;i  class='material-icons'&gt;traffic&lt;/i&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a class='w3-btn w3-margin-bottom' href='../iconstryit/tryicons_google.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
        <p>Для получения полного списка ВСЕХ иконок (<strong>Font Awesome</strong>, <strong>Bootstrap</strong> и <strong>Google</strong>) посетите <a href='icons_reference.php'>Справочник иконок</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='icons_reference.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>