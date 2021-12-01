<?php include '../include/head.php'; ?>
<title>CSS Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Уроки. Бесплатные курсы онлайн. Примеры кода. Полный справочник CSS3. Стилизация веб-страниц. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/bigbtn.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class='color_h1'>Учебник</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='css_intro.php'>Next &#10095;</a>
    </div>
    <hr>
    <p><strong>CSS</strong> (англ. <em>Cascading Style Sheets</em>, рус. <em>Каскадные таблицы стилей</em>) — специальный язык, который используется для описания внешнего вида страниц, написанных языками разметки данных.</p>
    <p>Наиболее часто CSS используют для визуальной презентации страниц, написанных на <strong>HTML</strong> и <strong>XHTML</strong>, но формат <strong>CSS</strong> может применяться и к другим видам XML-документов.</p>
    <p>Спецификации <strong>CSS</strong> были созданы и развиваются <em><a href='https://uk.wikipedia.org/wiki/W3C' target='_blank' rel='nofollow' title='W3C - World Wide Web Consortium'>Консорциумом Всемирной паутины</a></em> - W3C.</p>
    <p><strong>CSS</strong> имеет разные уровни и профили. Следующий уровень <strong>CSS</strong> создаётся на основе предыдущих, добавляя новую функциональность или расширяя уже существующие функции. Уровни обозначаются как <strong>CSS1</strong>, <strong>CSS2</strong> и <strong>CSS3</strong>. Профили — совокупность правил <strong>CSS</strong> одного или больше уровней, созданные для отдельных типов устройств или интерфейсов. Например, существуют профили <strong>CSS</strong> для принтеров, мобильных устройств и т.д.</p>
    <p><strong>CSS</strong> (каскадная или блочная вёрстка) пришла на замену табличной верстке веб-страниц. Главное преимущество блочной вёрстки — разделение содержания страницы (данных) и её визуальной презентации (оформления).</p>
    <p>По состоянию на 2021-й год актуальной версией является спецификация <strong>CSS3</strong>. Спецификация <strong>CSS4</strong> разрабатывается ещё с 2011 года. Модули <strong>CSS4</strong> построены на основе CSS3 и дополняют их новыми свойствами и значениями. Все они существуют пока в виде черновиков (working draft) и на данный момент официально не утверждены.</p>
    <p class='w3-right'><em>Информация взята из <a href='https://ru.wikipedia.org/wiki/CSS' title='Читать про CSS на Википедии' target='_blank' rel='nofollow'>Википедии</a></em></p>
    <br><br>
    <hr>

    <div class='w3-panel w3-info intro'>
        <p><strong>CSS</strong> - это язык, который описывает стиль <strong>HTML</strong> документа.</p>
        <p><strong>CSS</strong> описывает, как должны отображаться <strong>HTML</strong> элементы.</p>
        <p>Этот учебник научит вас писать <strong>CSS</strong> от базового уровня до расширенного.</p>
        <a class='w3-btn w3-margin-bottom shadow-black-1' href='css_intro.php'>Начать изучение CSS &raquo;</a>
    </div>

    <hr>
    <h2>Примеры в каждой главе</h2>
    <p>Этот учебник <strong>CSS</strong> содержит сотни примеров <strong>CSS</strong>.</p>
    <p>С помощью онлайн-редактора от W3Schools вы можете редактировать <strong>CSS</strong>, нажав кнопку <b>&quot;Попробуйте сами&quot;</b>, и сразу просматривать результат.</p>

    <div class='w3-example'>
        <h3>CSS Пример</h3>
        <div class='w3-code notranslate cssHigh'>
            body
            {<br>&nbsp;&nbsp;background-color: lightblue;<br>}<br>
            <br>h1
            {<br>
            &nbsp;&nbsp;color: white;<br>
            &nbsp;&nbsp;text-align: center;<br>
            }<br><br>
            p
            {<br>
            &nbsp;
            font-family: verdana;<br>
            &nbsp;&nbsp;font-size: 20px;<br>
            }</div>
        <a target='_blank' href='../csstryit/trycss_default.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a></div>
    <p><b>Кликните на кнопку &quot;Попробуйте сами&quot; чтобы увидеть, как она работает.</b></p>
    <p><a href='css_intro.php'>Начать изучение CSS сейчас!</a></p>

    <hr>
    <h2>CSS Примеры</h2>
    <p>Обучайтесь более чем на 300 примерах! С онлайн-редактором от W3Schools вы можете редактировать CSS и нажимать кнопку, чтобы просмотреть результат.</p>
    <p><a href='css_examples.php'>Перейти к CSS примерам!</a></p>
    <hr>

    <h2>CSS Шаблоны</h2>
    <p>Мы создали некоторые адаптивные шаблоны W3.CSS для использования.</p>
    <p>Вы можете изменять, сохранять, обмениваться и использовать их в любых своих проектах.</p>
    <p><a href='css_rwd_templates.php'>Свободные для использования CSS Шаблоны!</a></p>
    <hr>

    <h2>CSS Упражнения и Викторины</h2>
    <p>Проверьте ваши CSS знания и навычки на W3Schools!</p>
    <p><a href='css_exercises.php' class='w3-button w3-green shadow-black-05' style='width:250px'>Начать CSS Упражнения!</a></p>
    <p><a href='css_quiz.php' class='w3-button w3-blue shadow-black-1' style='width:250px'>Начать CSS Викторину!</a></p>
    <hr>

    <h2>CSS Справочники</h2>
    <p>На сайте вы найдёте ссылки на все CSS свойства и селекторы с синтаксисом, примерами, поддержкой веб-браузера и т.д.</p>
    <div class='refcont'>
        <a class='bigbtn' href='../cssref/index.php'>CSS Свойства</a>
        <a class='bigbtn' href='../cssref/css_selectors.php'>CSS Селекторы</a>
        <a class='bigbtn' href='../cssref/css_functions.php'>CSS Функции</a>
        <a class='bigbtn' href='../cssref/css_animatable.php'>CSS Анимации</a>
        <a class='bigbtn' href='../cssref/css_ref_aural.php'>CSS Аудио</a>
        <a class='bigbtn' href='../cssref/css_units.php'>CSS Единицы</a>
        <a class='bigbtn' href='../cssref/css_colors.php'>CSS Цвета</a>
        <a class='bigbtn' href='../cssref/css_default_values.php'>CSS По умолчанию</a>
        <a class='bigbtn' href='../cssref/css3_browsersupport.php'>CSS Поддержка</a>
    </div>
    <hr>
    <h2>Сдайте CSS Экзамен - Получите Ваш Диплом!</h2>
    <?php include '../include/footer_cert.php'; ?>
    <!--/CONTENT-->
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='css_intro.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>