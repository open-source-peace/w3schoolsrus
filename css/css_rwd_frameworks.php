<?php include '../include/head.php'; ?>

<title>CSS Фреймворки. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Адаптивный веб-дизайн. Фреймворки. Что такое фреймворки и как их применять для стилизации веб-страниц? Применение Bootstrap и W3.CSS. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>Адаптивный веб-дизайн - <span class="color_h1">Фреймворки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_videos.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_templates.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Есть много CSS-фреймворков, которые предлагают <strong>адаптивный дизайн</strong>.</p>
    <p class="intro">Они бесплатны и просты в использовании.</p>

    <h3>Что такое CSS-фреймворк</h3>
    <p><strong>CSS-фреймворк</strong> — это фреймворк (набор готовых стилей), созданный для упрощения работы верстальщика, быстроты разработки и исключения максимально возможного числа ошибок вёрстки (проблемы совместимости различных версий браузеров и т.д.). Как и библиотеки скриптовых языков программирования, CSS-библиотеки, обычно имеющие вид внешнего css-файла, подключаются к проекту (добавляются в раздел &lt;head&gt; веб-страницы).</p>
    <hr>
    <h3>Преимущества использования CSS-фреймворков</h3>
    <ul>
        <li>Позволяет верстальщику сайтов быстро и правильно создать HTML-макет.</li>
        <li>Вёрстка производится на базе слоёв, а не таблиц.</li>
        <li>Кроссбраузерность.</li>
        <li>Возможность использования генераторов кода и визуальных редакторов.</li>
        <li>Один стиль кода при работе в команде позволяет снизить число разногласий при разработке.</li>
    </ul>
    <hr>

    <h2>Использование W3.CSS</h2>
    <p>Отличным способом создания адаптивного дизайна является использование адаптивной таблицы стилей, например <a href="../w3css/index.php">W3.CSS</a></p>
    <p><strong>W3.CSS</strong> позволяет легко создавать сайты, которые выглядят красиво в любом размере; настольный компьютер, ноутбук, планшет или телефон:</p>

    <div class="w3-container w3-green">
        <h1>W3.CSS Демо</h1>
        <p>Измените размер страницы, чтобы увидеть адаптивность!</p>
    </div>

    <div class="w3-row-padding w3-light-grey">
        <div class="w3-third">
            <h2>Лондон</h2>
            <p>Лондон - столица Англии.</p>
            <p>Это самый густонаселенный город в Соединенном Королевстве, с населением более 13 миллионов человек.</p>
        </div>
        <div class="w3-third">
            <h2>Париж</h2>
            <p>Париж - столица Франции.</p>
            <p>Агломерация Парижа является одним из крупнейших населенных пунктов в Европе с населением более 12 миллионов человек.</p>
        </div>
        <div class="w3-third">
            <h2>Токио</h2>
            <p>Токио - столица Японии.</p>
            <p>Это центр Большого Токио, и самый густонаселенный мегаполис в мире.</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;meta name=&quot;viewport&quot;
            content=&quot;width=device-width, initial-scale=1&quot;&gt;<br>&lt;link rel=&quot;stylesheet&quot;
            href=&quot;https://www.w3schools.com/w3css/4/w3.css&quot;&gt;<br>&lt;body&gt;<br><br>&lt;div
            class=&quot;w3-container w3-green&quot;&gt;<br>&nbsp; &lt;h1&gt;W3Schools Демо&lt;/h1&gt; <br>&nbsp;
            &lt;p&gt;Измените размер этой адаптивной веб-страницы!&lt;/p&gt; <br>&lt;/div&gt;<br><br>&lt;div
            class=&quot;w3-row-padding&quot;&gt;<br>&nbsp; &lt;div class=&quot;w3-third&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h2&gt;London&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;London is the capital city of England.&lt;/p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;It is the most populous city in the United Kingdom,<br>&nbsp;&nbsp;&nbsp; with a metropolitan area of over 13 million inhabitants.&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br><br>&nbsp; &lt;div
            class=&quot;w3-third&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h2&gt;Paris&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;Paris is the capital of France.&lt;/p&gt; <br>&nbsp;&nbsp;&nbsp; &lt;p&gt;The Paris area is one of the largest population centers in Europe,<br>&nbsp;&nbsp;&nbsp; with more than 12 million inhabitants.&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br><br>&nbsp; &lt;div class=&quot;w3-third&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;h2&gt;Tokyo&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;Tokyo is the capital of Japan.&lt;/p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;It is the center of the Greater Tokyo Area,<br>&nbsp;&nbsp;&nbsp; and the most populous metropolitan area in the world.&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>
            &lt;/html&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/tryresponsive_w3css.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Чтобы узнать больше о W3.CSS, прочитайте <a href="../w3css/index.php">W3.CSS Учебник</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>

    <h2>Bootstrap</h2>
    <p>Другой <strong>популярный фреймворк - Bootstrap</strong>, он использует HTML, CSS и jQuery для создания адаптивных веб-страниц.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html lang=&quot;en&quot;&gt;<br>&lt;head&gt;<br>&lt;title&gt;Bootstrap
            Пример&lt;/title&gt;<br>&lt;meta charset=&quot;utf-8&quot;&gt;<br>&lt;meta name=&quot;viewport&quot;
            content=&quot;width=device-width, initial-scale=1&quot;&gt;<br>&lt;link rel=&quot;stylesheet&quot;
            href=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css&quot;&gt;<br>
            &lt;script
            src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js&quot;&gt;&lt;/script&gt;<br>
            &lt;script
            src=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js&quot;&gt;&lt;/script&gt;<br>
            &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div class=&quot;container&quot;&gt;<br>&nbsp; &lt;div
            class=&quot;jumbotron&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h1&gt;Моя первая Bootstrap страница&lt;/h1&gt;<br>&nbsp;
            &lt;/div&gt;<br>&nbsp; &lt;div class=&quot;row&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div
            class=&quot;col-sm-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ...<br>&nbsp;&nbsp;&nbsp;
            &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ...<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div
            class=&quot;col-sm-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp; ...<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;
            &lt;/div&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
        <a target="_blank" href="../csstryit/tryresponsive_bootstrap.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Чтобы узнать больше о Bootstrap, перейдите на <a href="../bootstrap/index.php">Bootstrap Учебник</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>

    <h3>Популярные CSS-фреймворки</h3>
    <ul>
        <li><a href="https://www.w3schools.com/w3css/default.asp" target="_blank" rel="nofollow">W3.CSS</a></li>
        <li><a href="https://getbootstrap.com/" target="_blank" rel="nofollow">Bootstrap</a></li>
        <li><a href="https://semantic-ui.com/" target="_blank" rel="nofollow">Semantic UI</a></li>
        <li><a href="https://foundation.zurb.com/" target="_blank" rel="nofollow">Foundation</a></li>
        <li><a href="https://materializecss.com/" target="_blank" rel="nofollow">Materialize</a></li>
        <li><a href="https://bulma.io/" target="_blank" rel="nofollow">Bulma</a></li>
        <li><a href="https://agilecss.com/" target="_blank" rel="nofollow">Agile CSS</a></li>
        <li><a href="https://milligram.io/" target="_blank" rel="nofollow">Milligram</a></li>
        <li><a href="https://purecss.io/" target="_blank" rel="nofollow">PURE.CSS</a></li>
        <li><a href="https://tailwindcss.com/" target="_blank" rel="nofollow">Tailwind CSS</a></li>
        <li><a href="http://tachyons.io/" target="_blank" rel="nofollow">Tachyons</a></li>
        <li><a href="https://getuikit.com/" target="_blank" rel="nofollow">Uikit</a></li>
    </ul>
    <h3>Популярные JavaScript-фреймворки</h3>
    <ul>
        <li><a href="https://reactjs.org/" target="_blank" rel="nofollow">React.js</a></li>
        <li><a href="https://angular.io/" target="_blank" rel="nofollow">Angular</a></li>
        <li><a href="https://vuejs.org/" target="_blank" rel="nofollow">Vue.js</a></li>
        <li><a href="https://svelte.dev/" target="_blank" rel="nofollow">Svelte</a></li>
        <li><a href="https://emberjs.com/" target="_blank" rel="nofollow">Ember.js</a></li>
    </ul>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_videos.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_templates.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>