<?php include '../include/head.php'; ?>

<title>HTML Семантические элементы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Семантика. Зачем нужны семантические элементы на веб-странице? Что такое семантика? <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class="color_h1">Семантические элементы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_computercode_elements.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_syntax.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Что такое семантика?</h2>
    <p class="intro"><strong>Семантика</strong> - это изучение значений слов и фраз в языке.</p>
    <p class="intro"><strong>Семантические элементы</strong> = элементы со смыслом.</p>
    <hr>

    <h2>Что такое семантические элементы?</h2>
    <p><strong>Семантический элемент</strong> четко описывает его значение как для браузера, так и для разработчика.</p>
    <p>Примеры <strong>не семантических</strong> элементов: <code class="w3-codespan">&lt;div&gt;</code> и <code class="w3-codespan">&lt;span&gt;</code> - ничего не говорят о своём содержимом.</p>
    <p>Примеры <strong>семантических</strong> элементов: <code class="w3-codespan">&lt;form&gt;</code>, <code class="w3-codespan">&lt;table&gt;</code> и <code class="w3-codespan">&lt;article&gt;</code> - чётко указывают своё содержимое.</p>
    <hr>

    <h2>Поддержка браузерами семантических HTML элементов</h2>

    <table class="browserref notranslate">
      <tr>
        <th style="width:20%;font-size:20px;padding:22px" class="bsChrome" title="Chrome"></th>
        <th style="width:20%;font-size:16px;padding:22px" class="bsEdge" title="Internet Explorer / Edge"></th>
        <th style="width:20%;font-size:16px;padding:22px" class="bsFirefox" title="Firefox"></th>
        <th style="width:20%;font-size:16px;padding:22px" class="bsSafari" title="Safari"></th>
        <th style="width:20%;font-size:16px;padding:22px" class="bsOpera" title="Opera"></th>
      </tr>
      <tr>
        <td>Yes</td>
        <td>Yes</td>
        <td>Yes</td>
        <td>Yes</td>
        <td>Yes</td>
      </tr>
    </table>
    <p>Семантические элементы HTML5 поддерживаются во всех современных браузерах.</p>
    <p>Кроме того, вы можете &quot;научить&quot; старые браузеры обращаться с &quot;неизвестными элементами&quot;.</p>
    <p>Узнайте об этом больше в разделе <a href="html5_browsers.php">HTML5 Поддержка браузерами</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
    <hr>

    <h2>Новые семантические элементы в HTML5</h2>
    <p>Многие веб-сайты содержат HTML-код, например:
      &lt;div id=&quot;nav&quot;&gt;, &lt;div class=&quot;header&quot;&gt;, &lt;div id=&quot;footer&quot;&gt;, что определяет навигацию, верхний и нижний колонтитулы.</p>
    <p>HTML5 предлагает <strong>новые семантические элементы</strong> для определения различных частей веб-страницы:</p>

    <div style="width:374px;float:left">
      <ul>
        <li>&lt;article&gt;</li>
        <li>&lt;aside&gt;</li>
        <li>&lt;details&gt;</li>
        <li>&lt;figcaption&gt;</li>
        <li>&lt;figure&gt;</li>
        <li>&lt;footer&gt;</li>
        <li>&lt;header&gt;</li>
        <li>&lt;main&gt;</li>
        <li>&lt;mark&gt;</li>
        <li>&lt;nav&gt;</li>
        <li>&lt;section&gt;</li>
        <li>&lt;summary&gt;</li>
        <li>&lt;time&gt;</li>
      </ul>
    </div>
    <div style="width:260px;float:left;margin-bottom:15px;"><img alt="HTML5 Семантические элементы" src="../images/img_sem_elements.gif" width="219" height="258">
    </div>
    <p style="clear:both;"></p>
    <hr>

    <h2>HTML5 элемент &lt;section&gt; - секция</h2>
    <p>Элемент <code class="w3-codespan">&lt;section&gt;</code> определяет раздел в документе.</p>
    <p>Согласно документации W3C по HTML5: &quot;Раздел - это тематическая группировка контента, обычно с заголовком.&quot;</p>
    <p>Домашнюю страницу обычно можно разделить на разделы для ознакомления, содержания и контактной информации.</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;section&gt;<br>
        &nbsp; &lt;h1&gt;WWF&lt;/h1&gt;<br>
        &nbsp; &lt;p&gt;The World Wide Fund for Nature (WWF) is....&lt;/p&gt;<br>
        &lt;/section&gt;
      </div>
      <a target="_blank" href="../htmltryit/tryitfe11.html?filename=tryhtml5_section" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML5 элемент &lt;article&gt; - статья</h2>
    <p>Элемент <code class="w3-codespan">&lt;article&gt;</code> определяет независимый, автономный контент.</p>
    <p>Статья должна иметь смысл сама по себе, и должна быть возможность читать ее независимо от остальной части сайта.</p>
    <p>Примеры того, где элемент <code class="w3-codespan">&lt;article&gt;</code> может использоваться:</p>
    <ul>
      <li>Сообщение на форуме</li>
      <li>Публикация в блоге</li>
      <li>Газетная статья</li>
    </ul>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;article&gt;<br>
        &nbsp;
        &lt;h2&gt;Чем занимается WWF?&lt;/h2&gt;<br>
        &nbsp; &lt;p&gt;Миссия WWF - остановить деградацию природной среды нашей планеты, <br>и построить будущее, в котором люди будут жить в гармонии с природой.&lt;/p&gt;<br>
        &lt;/article&gt;
      </div>
      <a target="_blank" class="w3-btn w3-margin-bottom" href="../htmltryit/tryhtml5_article.html?filename=tryhtml5_article">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class="w3-example">
      <h3>Пример</h3>
      <p>Три статьи с независимым, автономным содержанием:</p>
      <div class="w3-code notranslate htmlHigh">
        &lt;article&gt;<br>&lt;h2&gt;Google Chrome&lt;/h2&gt;<br>&lt;p&gt;Google Chrome - это веб-браузер, разработанный Google, выпущенный в 2008 году. Chrome - самый популярный веб-браузер на сегодняшний день!&lt;/p&gt;<br>&lt;/article&gt;<br><br>
        &lt;article&gt;<br>&lt;h2&gt;Mozilla Firefox&lt;/h2&gt;<br>&lt;p&gt;Mozilla Firefox - это веб-браузер с открытым исходным кодом, разработанный Mozilla. Firefox был вторым по популярности веб-браузером с января 2018 года.&lt;/p&gt;<br>&lt;/article&gt;<br><br>
        &lt;article&gt;<br>&lt;h2&gt;Microsoft Edge&lt;/h2&gt;<br>&lt;p&gt;Microsoft Edge - это веб-браузер, разработанный Microsoft, выпущенный в 2015 году. Microsoft Edge заменил Internet Explorer.&lt;/p&gt;<br>&lt;/article&gt;
      </div>
      <a target="_blank" class="w3-btn w3-margin-bottom" href="../htmltryit/tryhtml5_article.html?filename=tryhtml5_article">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
      <h3>Пример</h3>
      <p>Используйте CSS для стилизации элемента &lt;article&gt;:</p>
      <div class="w3-code notranslate htmlHigh">
        &lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>.all-browsers {<br>&nbsp; margin: 0;<br>&nbsp;
        padding: 5px;<br>&nbsp; background-color: lightgray;<br>}<br><br>.all-browsers
        &gt; h1, .browser {<br>&nbsp; margin: 10px;<br>&nbsp; padding: 5px;<br>}<br><br>
        .browser {<br>&nbsp; background: white;<br>}<br><br>.browser &gt; h2,
        p {<br>&nbsp; margin: 4px;<br>&nbsp; font-size: 90%;<br>}<br>&lt;/style&gt;<br>
        &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;article class=&quot;all-browsers&quot;&gt;<br>&nbsp; &lt;h1&gt;Most
        Popular Browsers&lt;/h1&gt;<br>&nbsp; &lt;article class=&quot;browser&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;h2&gt;Google Chrome&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;Google Chrome - это веб-браузер, разработанный Google, выпущенный в 2008 году. Chrome - самый популярный веб-браузер на сегодняшний день!&lt;/p&gt;<br>&nbsp; &lt;/article&gt;<br>&nbsp; &lt;article class=&quot;browser&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;h2&gt;Mozilla Firefox&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;Mozilla Firefox - это веб-браузер с открытым исходным кодом, разработанный Mozilla. Firefox был вторым по популярности веб-браузером с января 2018 года.&lt;/p&gt;<br>&nbsp; &lt;/article&gt;<br>&nbsp;
        &lt;article class=&quot;browser&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h2&gt;Microsoft Edge&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;p&gt;Microsoft Edge - это веб-браузер, разработанный Microsoft, выпущенный в 2015 году. Microsoft Edge заменил Internet Explorer.&lt;/p&gt;<br>&nbsp; &lt;/article&gt;<br>
        &lt;/article&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
      </div>
      <a target="_blank" href="../htmltryit/tryhtml5_article2.html?filename=tryhtml5_article2" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Влаживать &lt;article&gt; в &lt;section&gt; или наоборот?</h2>
    <p>Элемент<code class="w3-codespan">&lt;article&gt;</code>определяет независимое, автономное содержание.</p>
    <p>Элемент <code class="w3-codespan">&lt;section&gt;</code> определяет раздел в документе.</p>
    <p>Можем ли мы использовать определение, чтобы решить, как вставить эти элементы? Нет, мы не можем!</p>
    <p>Итак, в Интернете вы найдете HTML-страницы с элементами <code class="w3-codespan">&lt;section&gt;</code> которые содержат элементы <code class="w3-codespan">&lt;article&gt;</code> и элементы <code class="w3-codespan">&lt;article&gt;</code>, которые содержат элементы <code class="w3-codespan">&lt;section&gt;</code>.</p>
    <p>Вы также найдёте страницы с элементами <code class="w3-codespan">&lt;section&gt;</code>, которые содержат элементы <code class="w3-codespan">&lt;section&gt;</code> и элементы <code class="w3-codespan">&lt;article&gt;</code>, которые содержат элементы <code class="w3-codespan">&lt;article&gt;</code>.</p>
    <div class="w3-panel w3-note">
      <p>Пример из газеты: Спортивная статья <code class="w3-codespan">&lt;article&gt;</code> в спортивном разделе <strong>section</strong>, может содержать технический раздел <strong>section</strong> в каждой статье <code class="w3-codespan">&lt;article&gt;</code>.
      </p>
    </div>
    <hr>

    <h2>HTML5 элемент &lt;header&gt; - заголовок</h2>
    <p>Элемент <code class="w3-codespan">&lt;header&gt;</code> представляет собой контейнер для вводного контента или набора навигационных ссылок.</p>
    <p>Элемент <code class="w3-codespan">&lt;header&gt;</code> обычно содержит:</p>
    <ul>
        <li>один или несколько элементов заголовка (&lt;h1&gt; - &lt;h6&gt;)</li>
        <li>лого или иконку</li>
        <li>информацию об авторстве</li>
    </ul>
    <p><b>Примечание:</b> В одном HTML-документе может быть несколько элементов <code class="w3-codespan">&lt;header&gt;</code> Однако <code class="w3-codespan">&lt;header&gt;</code> нельзя поместить в <code class="w3-codespan">&lt;footer&gt;</code>, <code class="w3-codespan">&lt;address&gt;</code> или другой элемент <code class="w3-codespan">&lt;header&gt;</code>.</p>

    <p>Следующий пример определяет заголовок статьи:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;article&gt;<br>
        &nbsp; &lt;header&gt;<br>
        &nbsp;&nbsp;&nbsp;
        &lt;h1&gt;What Does WWF Do?&lt;/h1&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;p&gt;WWF's mission:&lt;/p&gt;<br>
        &nbsp; &lt;/header&gt;<br>
        &nbsp; &lt;p&gt;WWF's mission is to stop the degradation of our planet's natural environment,<br>&nbsp; and build a future in which humans live in harmony with nature.&lt;/p&gt;<br>
        &lt;/article&gt;
      </div>
      <a target="_blank" class="w3-btn w3-margin-bottom" href="../htmltryit/tryit5401.html?filename=tryhtml5_header">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML5 Элемент &lt;footer&gt; - нижний колонтитул</h2>
    <p>Элемент <code class="w3-codespan">&lt;footer&gt;</code> определяет нижний колонтитул для документа или раздела.</p>
    <p>Элемент <code class="w3-codespan">&lt;footer&gt;</code> должен содержать информацию о его содержащем элементе.</p>
    <p>Элемент <code class="w3-codespan">&lt;footer&gt;</code> обычно содержит:</p>
    <ul>
      <li>информация об авторстве</li>
      <li>информация об авторских правах</li>
      <li>контактная информация</li>
      <li>карта сайта</li>
      <li>ссылка возврата вверх</li>
      <li>связанные документы</li>
    </ul>
    <p>Может быть несколько элементов <code class="w3-codespan">&lt;footer&gt;</code> в одном документе.</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;footer&gt;<br>
        &nbsp; &lt;p&gt;Posted by: Hege Refsnes&lt;/p&gt;<br>
        &nbsp; &lt;p&gt;Contact information: &lt;a href=&quot;mailto:someone@example.com&quot;&gt;<br>&nbsp; someone@example.com&lt;/a&gt;.&lt;/p&gt;<br>
        &lt;/footer&gt;
      </div>
      <a target="_blank" class="w3-btn w3-margin-bottom" href="../htmltryit/tryit8fd7.html?filename=tryhtml5_footer">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML5 элемент &lt;nav&gt; - навигация</h2>
    <p>Элемент <code class="w3-codespan">&lt;nav&gt;</code> определяет набор навигационных ссылок.</p>
    <div class="w3-panel w3-note">
      <p>Обратите внимание, что НЕ все ссылки документа должны быть внутри элемента <code class="w3-codespan">&lt;nav&gt;</code>. Элемент <code class="w3-codespan">&lt;nav&gt;</code> предназначен только для основного блока навигационных ссылок.</p>
      <p>Браузеры, такие как программы чтения с экрана для пользователей с ограниченными возможностями, могут использовать этот элемент, чтобы определить, следует ли пропустить начальную визуализацию этого содержимого.</p>
    </div>

    <div class="w3-example">
      <h3>Пример</h3>
      <p>Набор навигационных ссылок:</p>
      <div class="w3-code notranslate htmlHigh">
        &lt;nav&gt;<br>
        &nbsp;
        &lt;a href=&quot;/html/&quot;&gt;HTML&lt;/a&gt; |<br>
        &nbsp;
        &lt;a href=&quot;/css/&quot;&gt;CSS&lt;/a&gt; |<br>
        &nbsp;
        &lt;a href=&quot;/js/&quot;&gt;JavaScript&lt;/a&gt; |<br>
        &nbsp;
        &lt;a href=&quot;/jquery/&quot;&gt;jQuery&lt;/a&gt;<br>
        &lt;/nav&gt;
      </div>
      <a target="_blank" class="w3-btn w3-margin-bottom" href="../htmltryit/tryit0af9.html?filename=tryhtml5_nav">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML5 элемент &lt;aside&gt; - в стороне</h2>
    <p>Элемент <code class="w3-codespan">&lt;aside&gt;</code> определяет некоторый контент помимо контента, в который он помещен (например, боковая панель).</p>
    <p>Контент <code class="w3-codespan">&lt;aside&gt;</code> должен быть связан с окружающим контентом.</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;p&gt;My family and I visited The Epcot center this summer.&lt;/p&gt;<br>
        <br>
        &lt;aside&gt;<br>
        &nbsp;
        &lt;h4&gt;Epcot Center&lt;/h4&gt;<br>
        &nbsp; &lt;p&gt;The Epcot Center is a theme park in Disney World, Florida.&lt;/p&gt;<br>
        &lt;/aside&gt;
      </div>
      <a target="_blank" class="w3-btn w3-margin-bottom" href="../htmltryit/tryhtml5_aside.html?filename=tryhtml5_aside">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
      <h3>Пример 2</h3>
      <p>Используйте CSS для стилизации элемента &lt;aside&gt;:</p>
      <div class="w3-code notranslate htmlHigh">
        &lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>aside {<br>&nbsp; width: 30%;<br>&nbsp;
        padding-left: 15px;<br>&nbsp; margin-left: 15px;<br>&nbsp; float: right;<br>&nbsp;
        font-style: italic;<br>&nbsp; background-color: lightgray;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>
        <br>&lt;p&gt;Этим летом мы с семьей посетили центр Epcot. Погода была хорошей, и Epcot был восхитителен! Я отлично провел лето вместе с семьей!&lt;/p&gt;<br><br>&lt;aside&gt;<br>
        &lt;p&gt;Центр Epcot - это тематический парк на территории Walt Disney World Resort с захватывающими аттракционами, международными павильонами, отмеченными наградами фейерверками и сезонными специальными мероприятиями.&lt;/p&gt;<br>&lt;/aside&gt;<br><br>
        &lt;p&gt;Этим летом мы с семьей посетили центр Epcot. Погода была хорошей, и Epcot был восхитителен! Я отлично провела лето вместе с семьей!&lt;/p&gt;<br>
        &lt;p&gt;Этим летом мы с семьей посетили центр Epcot. Погода была хорошей, и Epcot был восхитителен! Я отлично провела лето вместе с семьей!&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
      </div>
      <a target="_blank" href="../htmltryit/tryitd466.html?filename=tryhtml5_aside2" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML5 элементы &lt;figure&gt; и &lt;figcaption&gt; - рисунок и подпись</h2>
    <p>Назначение подписи к рисунку - добавить визуальное объяснение к изображению.</p>
    <p>В HTML5 рисунок и подпись к нему могут быть сгруппированы в элемент <code class="w3-codespan">&lt;figure&gt;</code>:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;figure&gt;<br>
        &nbsp; &lt;img src=&quot;pic_trulli.jpg&quot; alt=&quot;Trulli&quot;&gt;<br>
        &nbsp; &lt;figcaption&gt;Fig1. - Trulli, Puglia, Italy.&lt;/figcaption&gt;<br>
        &lt;/figure&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitf32a.html?filename=tryhtml_figcaption" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Элемент <code class="w3-codespan">&lt;img&gt;</code> определяет изображение, элемент <code class="w3-codespan">&lt;figcaption&gt;</code> определяет подпись к нему.</p>
    <hr>

    <h2>Зачем нужны семантические элементы?</h2>
    <p>В HTML4 разработчики использовали свои собственные имена идентификаторов/классов для оформления элементов: header, top, bottom, footer, menu, navigation, main, container, content, article, sidebar, topnav и т.д.</p>
    <p>Это сделало невозможным для поисковых систем определить правильное содержание веб-страницы.</p>
    <p>С новыми HTML5 элементами (<code class="w3-codespan">&lt;header&gt; &lt;footer&gt; &lt;nav&gt; &lt;section&gt; &lt;article&gt;</code>) это стало легче.</p>
    <p>Согласно W3C, семантический Web: &quot;позволяет совместно использовать данные в приложениях, предприятиях и сообществах.&quot;</p>
    <hr>

    <h2>Семантические элементы в HTML5</h2>
    <p>Ниже приведен алфавитный список некоторых семантических элементов в HTML5.</p>
    <p>Ссылки ведут на полный <a href="../tags/index.php">HTML5 Справочник</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:20%">Тег</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href="../tags/tag_article.php">&lt;article&gt;</a></td>
        <td>Определяет статью</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_aside.php">&lt;aside&gt;</a></td>
        <td>Определяет содержание, кроме содержания страницы</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_details.php">&lt;details&gt;</a></td>
        <td>Определяет дополнительные детали, которые пользователь может просматривать или скрывать</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_figcaption.php">&lt;figcaption&gt;</a></td>
        <td>Определяет подпись для элемента &lt;figure&gt;</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_figure.php">&lt;figure&gt;</a></td>
        <td>Определяет автономное содержание, например, иллюстрации, диаграммы, фотографии, списки кодов и т.д.</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_footer.php">&lt;footer&gt;</a></td>
        <td>Определяет нижний колонтитул для документа или раздела</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_header.php">&lt;header&gt;</a></td>
        <td>Определяет заголовок для документа или раздела</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_main.php">&lt;main&gt;</a></td>
        <td>Определяет основное содержание документа</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_mark.php">&lt;mark&gt;</a></td>
        <td>Определяет помеченный / выделенный текст</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_nav.php">&lt;nav&gt;</a></td>
        <td>Определяет навигационные ссылки</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_section.php">&lt;section&gt;</a></td>
        <td>Определяет раздел в документе</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_summary.php">&lt;summary&gt;</a></td>
        <td>Определяет видимый заголовок для элемента &lt;details&gt;</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_time.php">&lt;time&gt;</a></td>
        <td>Определяет дату/время</td>
      </tr>
    </table>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_computercode_elements.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_syntax.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>