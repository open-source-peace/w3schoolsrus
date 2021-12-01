<?php include '../include/head.php'; ?>
<title>Bootstrap 4 Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Bootstrap 4. Самый полный и лучший учебник для начинающих. Здесь вы можете выучить Бутстрап 4 за 1 час! <?php include '../include/description.php'; ?>'>
    <link rel='stylesheet' href='../styles/bigbtn.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_bootstrap4.php'; ?>
<?php include '../include/before_content_bootstrap.php'; ?>

<article>
    <h1>Bootstrap 4 <span class='color_h1'>Учебник</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='bootstrap_get_started.php'>Next &#10095;</a>
    </div>

    <div class='w3-panel w3-info intro w3-padding-16'>
        <p style='margin-top:15px;'><strong>Bootstrap 4</strong> - это версия* <a href='../bootstrap/index.php'>Bootstrap</a>, которая является самой популярной платформой HTML, CSS и JavaScript для разработки адаптивных мобильных сайтов.</p>
        <p>Фреймворк <strong>Bootstrap 4</strong> полностью бесплатен для загрузки и использования!</p>
        <p><a href='bootstrap_get_started.php' class='w3-btn w3-padding-large w3-hide-small shadow-black-05 box-shadow-black-05'>Начать изучение Bootstrap 4 &raquo;</a></p>
        <p><a href='bootstrap_get_started.php' class='w3-btn w3-block w3-hide-large w3-hide-medium' style='padding:8px 16px'>Выучить Bootstrap 4</a></p>
        <p><b>Примечание*.</b> По состоянию на декабрь 2020 года вышла новая версия <a href='https://getbootstrap.com/' target='_blank' rel='nofollow' title='Перейти на официальный сайт Bootstrap'><strong>Bootstrap 5</strong></a>.</p>
    </div>
    <hr>

    <h2>Примеры "Попробуйте сами"</h2>
    <p>Этот учебник Bootstrap 4 содержит сотни примеров Bootstrap 4.</p>
    <p>С помощью нашего онлайн-редактора <b>"Попробуйте сами"</b> вы можете отредактировать код и, нажав на кнопку, сразу просмотреть результат.</p>
    <img src='../images/imgdefault.jpg' alt='Адаптивная Bootstrap страница' style='width:95%;margin:16px auto;display:block'>

    <div class='w3-example'>
        <h3>Bootstrap 4 Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;div class=&quot;jumbotron text-center&quot;&gt;<br>&nbsp;&nbsp;&lt;h1&gt;Моя первая Bootstrap страница&lt;/h1&gt;<br>&nbsp; &lt;p&gt;Измените размер этой адаптивной страницы, чтобы увидеть эффект!&lt;/p&gt; <br>&lt;/div&gt;<br><br>&lt;div class=&quot;container&quot;&gt;<br>&nbsp; &lt;div class=&quot;row&quot;&gt;<br>
            &nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h3&gt;Столбец 1&lt;/h3&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;Lorem ipsum
            dolor..&lt;/p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h3&gt;Столбец 2&lt;/h3&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;Lorem ipsum
            dolor..&lt;/p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h3&gt;Столбец 3&lt;/h3&gt; <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;Lorem ipsum
            dolor..&lt;/p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</div>
        <a target='_blank' href='../bootstrap4tryit/trybs_default.html?&amp;stacked=h' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a></div>
    <div class='w3-panel w3-note'>
        <p style='margin-bottom:8px'>Нажмите на кнопку <b>&quot;Попробуйте сами&quot;</b> чтобы увидеть, как это работает.</p>
    </div>
    <hr>

    <h2>Bootstrap 3 vs. Bootstrap 4</h2>
    <p>Bootstrap 4 - более новая версия Bootstrap; с новыми компонентами, более быстрой таблицей стилей и большей отзывчивостью (адаптивностью).</p>
    <p>Bootstrap 4 поддерживает последние стабильные выпуски всех основных браузеров и платформ. Однако Internet Explorer 9 и более ранние версии не поддерживаются.</p>
    <div class='w3-panel w3-note'>
        <p style='margin-bottom:8px'><strong>Если вам требуется поддержка IE8-9, используйте <a href='../bootstrap/index.php'>Bootstrap 3.</a></strong> Это самая стабильная версия Bootstrap, и она все ещё поддерживается группой для критических исправлений и изменений в документации. Тем не менее, новые функции не будут добавлены к нему.</p>
    </div>
    <a href='../bootstrap/index.php' class='w3-btn w3-dark-grey shadow-black-1'>Перейти к изучению Bootstrap 3 &raquo;</a>
    <hr>

    <h2>Bootstrap 4 Основной шаблон</h2>
    <p>Мы создали адаптивный начальный шаблон с Bootstrap 4. Вы можете свободно изменять, сохранять, делиться и использовать его в своих проектах:</p>
    <div class='w3-content' style='max-width:1500px'>
        <iframe src='../howto/tryhow_website_bootstrap4_ifr.html' class='w3-round' style='width:100%;border:5px solid #e9e9e9;height:600px'></iframe>
        <div class='w3-row-padding' style='margin:16px -16px 0 -16px'>
            <div class='w3-col m6'>
                <a href='../bootstrap4tryit/trybs_template1_demo.html' target='_blank' class='w3-btn w3-padding-large w3-dark-grey w3-block'>Демо</a>
            </div>
            <div class='w3-col m6'>
                <a href='../bootstrap4tryit/trybs_template1.html' target='_blank' class='w3-btn w3-padding-large w3-green w3-block'>Попробуйте сами</a>
            </div>
        </div>
    </div>
    <hr>

    <h2>Bootstrap Справочники</h2>
    <p>Полный список всех CSS-классов Bootstrap 4 с описанием и примерами:</p>
    <div class='w3-bar-block' style='margin-bottom:12px'>
        <a class='w3-button w3-bar-item w3-light-grey' href='bootstrap_ref_all_classes.php'>Все CSS классы Bootstrap <span class='w3-tag w3-blue' style='margin-left:5px'>Popular</span></a>
    </div>
    <p>Если вы хотите сделать больше с компонентами Bootstrap, посмотрите наш полный справочник по Bootstrap 4 - JavaScript/jQuery - все с примерами <b>&quot;Попробуйте сами&quot;</b>:</p>
    <div class='w3-bar-block'>
        <a class='bigbtn' href='bootstrap_ref_js_alert.php'>Bootstrap JS Оповещение</a>
        <a class='bigbtn' href='bootstrap_ref_js_button.php'>Bootstrap JS Кнопка</a>
        <a class='bigbtn' href='bootstrap_ref_js_carousel.php'>Bootstrap JS Карусель</a>
        <a class='bigbtn' href='bootstrap_ref_js_collapse.php'>Bootstrap JS Свертывание</a>
        <a class='bigbtn' href='bootstrap_ref_js_dropdown.php'>Bootstrap JS Dropdown</a>
        <a class='bigbtn' href='bootstrap_ref_js_modal.php'>Bootstrap JS Модал</a>
        <a class='bigbtn' href='bootstrap_ref_js_popover.php'>Bootstrap JS Popover</a>
        <a class='bigbtn' href='bootstrap_ref_js_scrollspy.php'>Bootstrap JS Scrollspy</a>
        <a class='bigbtn' href='bootstrap_ref_js_tab.php'>Bootstrap JS Вкладка</a>
        <a class='bigbtn' href='bootstrap_ref_js_toasts.php'>Bootstrap JS Toast</a>
        <a class='bigbtn' href='bootstrap_ref_js_tooltip.php'>Bootstrap JS Подсказка</a>
    </div>
    <hr>

    <h2>Знаете ли вы?</h2>
    <p><strong>W3.CSS</strong> - это отличная альтернатива Bootstrap 4.</p>
    <p><strong>W3.CSS</strong> меньше, быстрее и проще в использовании.</p>
    <p>Если вы хотите изучить <strong>W3.CSS</strong>, переходите в <a href='../w3css/index.php'>W3.CSS Учебник</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>

    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='bootstrap_get_started.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>