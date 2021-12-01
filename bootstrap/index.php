<?php include '../include/head.php'; ?>
    <title>Bootstrap 3 Учебник. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='Bootstrap 3. Самый полный и лучший учебник для начинающих. Бесплатные уроки онлайн для новичков <?php include '../include/description.php'; ?>'>
    <link rel='stylesheet' href='../styles/bigbtn.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_bootstrap3.php'; ?>
<?php include '../include/before_content_bootstrap.php'; ?>

    <article>
        <h1>Bootstrap 3 <span class='color_h1'>Учебник</span></h1>
        <div class='w3-clear nextprev'>
            <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
            <a class='w3-right w3-btn' href='bootstrap_get_started.php'>Next &#10095;</a>
        </div>

        <div class='w3-panel w3-info intro w3-padding-16' style='padding-bottom:32px!important'>
            <p><strong>Bootstrap</strong> - это самый популярный фреймворк HTML, CSS и JavaScript для разработки адаптивных веб-сайтов, ориентированных на мобильные устройства.</p>
            <p><strong>Bootstrap</strong> можно загрузить и использовать совершенно бесплатно!</p>
            <a href='bootstrap_get_started.php' class='w3-btn w3-padding-large w3-hide-small shadow-black-1' style='margin-top:5px'>Начать изучение Bootstrap 3 немедленно &raquo;</a>
            <a href='bootstrap_get_started.php' class='w3-btn w3-block w3-hide-large w3-hide-medium shadow-black-1' style='margin-top:5px;padding:8px 16px'>Выучить Bootstrap 3</a>
        </div>
        <hr>

        <h2>Примеры "Попробуйте сами"</h2>
        <p>Этот учебник по Bootstrap содержит сотни примеров Bootstrap.</p>
        <p>С помощью нашего онлайн-редактора вы можете редактировать код и кликнув на кнопку, просмотреть результат.</p>
        <img src='../images/imgdefault.jpg' alt='Адаптивная Bootstrap страница' style='width:95%;margin:16px auto;display:block'>

        <div class='w3-example'>
            <h3>Bootstrap Пример</h3>
            <div class='w3-code notranslate htmlHigh'>
                &lt;div class=&quot;jumbotron text-center&quot;&gt;<br>&nbsp;&nbsp;&lt;h1&gt;My First Bootstrap Page&lt;/h1&gt;<br>&nbsp; &lt;p&gt;Resize this responsive page to see the effect!&lt;/p&gt; <br>&lt;/div&gt;<br><br>&lt;div class=&quot;container&quot;&gt;<br>&nbsp; &lt;div class=&quot;row&quot;&gt;<br>
                &nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h3&gt;Column 1&lt;/h3&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;Lorem ipsum
                dolor..&lt;/p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h3&gt;Column 2&lt;/h3&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;Lorem ipsum
                dolor..&lt;/p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h3&gt;Column 3&lt;/h3&gt; <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;Lorem ipsum
                dolor..&lt;/p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</div>
            <a target='_blank' href='tryit.php?filename=trybs_default&stacked=h' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a></div>
        <div class='w3-panel w3-note'>
            <p>Кликните на кнопку <b>&quot;Попробуйте сами&quot;</b>, чтобы посмотреть, как она работает.</p>
        </div>
        <hr>

        <h2>Bootstrap Упражнения</h2>
        <form autocomplete='off' id='w3-exerciseform' action='exercise_bs3.php?filename=exercise_bs3_pagination1' method='post' target='_blank'>
            <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
            <div class='exercisewindow'>
                <h2>Упражнение:</h2>
                <p>Добавьте правильное имя класса, чтобы преобразовать список ниже в меню нумерации страниц.</p>
                <div class='exerciseprecontainer'>
<pre style='background-color:transparent;border:none;'>
&lt;ul class="<input name='ex1' maxlength='10' style='width: 107px;'>"&gt;
  &lt;li&gt;&lt;a href='#'&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href='#'&gt;2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href='#'&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href='#'&gt;4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href='#'&gt;5&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
                </div>
                <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
            </div>
        </form>
        <hr>

        <h2>Bootstrap Викторина</h2>
        <p>Проверьте ваши Bootstrap навыки на W3Schools!</p>
        <p><a href='bootstrap_quiz.php' class='w3-button w3-blue shadow-black-1'>Начать Bootstrap Викторину!</a></p>
        <hr>

        <h2>Bootstrap Справочники</h2>
        <p>На W3Schools вы найдёте полный справочник Bootstrap по всем классам CSS, компонентам и плагинам JavaScript - все с примерами &quot;Попробуйте сами&quot;:</p>

        <div class='w3-bar-block'>
            <a class='w3-button w3-bar-item w3-light-grey' href='bootstrap_ref_all_classes.php'>Полный список всех классов Bootstrap<span class='w3-margin-left w3-tag w3-blue'>Popular</span></a>
            <br>
            <a class='bigbtn' href='bootstrap_ref_css_text.php'>Bootstrap CSS Текст/Типография</a>
            <a class='bigbtn' href='bootstrap_ref_css_buttons.php'>Bootstrap CSS Кнопки</a>
            <a class='bigbtn' href='bootstrap_ref_css_forms.php'>Bootstrap CSS Формы</a>
            <a class='bigbtn' href='bootstrap_ref_css_helpers.php'>Bootstrap CSS Помощники</a>
            <a class='bigbtn' href='bootstrap_ref_css_images.php'>Bootstrap CSS Изображения</a>
            <a class='bigbtn' href='bootstrap_ref_css_tables.php'>Bootstrap CSS Таблицы</a>
            <a class='bigbtn' href='bootstrap_ref_comp_dropdowns.php'>Bootstrap Компоненты Dropdown</a>
            <a class='bigbtn' href='bootstrap_ref_comp_navs.php'>Bootstrap Компоненты Navs</a>
            <a class='bigbtn' href='bootstrap_ref_comp_glyphs.php'>Bootstrap Компоненты Glyphicons</a>
            <a class='bigbtn' href='bootstrap_ref_js_affix.php'>Bootstrap JS Affix</a>
            <a class='bigbtn' href='bootstrap_ref_js_alert.php'>Bootstrap JS Оповещение</a>
            <a class='bigbtn' href='bootstrap_ref_js_button.php'>Bootstrap JS Кнопка</a>
            <a class='bigbtn' href='bootstrap_ref_js_carousel.php'>Bootstrap JS Карусель</a>
            <a class='bigbtn' href='bootstrap_ref_js_collapse.php'>Bootstrap JS Collapse</a>
            <a class='bigbtn' href='bootstrap_ref_js_dropdown.php'>Bootstrap JS Dropdown</a>
            <a class='bigbtn' href='bootstrap_ref_js_modal.php'>Bootstrap JS Модал</a>
            <a class='bigbtn' href='bootstrap_ref_js_popover.php'>Bootstrap JS Popover</a>
            <a class='bigbtn' href='bootstrap_ref_js_scrollspy.php'>Bootstrap JS Scrollspy</a>
            <a class='bigbtn' href='bootstrap_ref_js_tab.php'>Bootstrap JS Tab</a>
            <a class='bigbtn' href='bootstrap_ref_js_tooltip.php'>Bootstrap JS Подсказка</a>
        </div>
        <hr>

        <h2>Bootstrap Темы / Шаблоны</h2>
        <p>Мы создали несколько шаблонов Bootstrap, с которыми вы можете поэкспериментировать. Их можно использовать совершенно бесплатно:</p>
        <div class='w3-row-padding w3-stretch'>
            <div class='w3-half'>
                <a href='trybs_theme_company_full.html' target='_blank' title='Theme Company Demo'>
                    <img src='../images/bs_themes.jpg' style='width:98%;margin:20px 0' alt='Theme Company'></a>
                <p class='w3-center'><a href='bootstrap_theme_me.html' class='w3-button w3-block w3-padding-large w3-dark-grey w3-margin-top'>Browse Themes</a></p>
            </div>
            <div class='w3-half'>
                <a href='bootstrap_templates.html' title='Templates Demo'>
                    <img src='../images/bs_templates2.jpg' style='width:98%;margin:20px 0' alt='Templates'></a>
                <p class='w3-center'><a href='bootstrap_templates.html' class='w3-button w3-block w3-padding-large w3-dark-grey w3-margin-top'>Browse Basic Templates</a></p>
            </div>
        </div>
        <hr>

        <h2>Bootstrap 3 vs. Bootstrap 4</h2>
        <p><a href='../bootstrap4/index.php'>Bootstrap 4</a> это более новая версия Bootstrap; с новыми компонентами, более быстрой таблицей стилей и большей отзывчивостью.</p>
        <p>Bootstrap 4 поддерживает последние стабильные версии всех основных браузеров и платформ. Однако Internet Explorer 9 и более ранние версии не поддерживаются.</p>
        <div class='w3-panel w3-note'>
            <p class='margin-bottom-remove'><strong>Если вам требуется поддержка IE8-9, используйте Bootstrap 3. </strong> Это самая стабильная версия Bootstrap, и команда по-прежнему поддерживает её для исправления критических ошибок и изменений документации. Однако никаких новых функций к нему добавляться не будет.</p>
        </div>
        <a href='../bootstrap4/index.php' class='w3-button w3-dark-grey'>Перейти к Bootstrap 4 &raquo;</a>
        <hr>

        <h2>Знаете ли вы?</h2>
        <p><strong>W3.CSS</strong> - это отличная альтернатива <strong>Bootstrap 4</strong> или <strong>Bootstrap 5</strong>.</p>
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