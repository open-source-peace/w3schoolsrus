<?php include '../include/head.php'; ?>

  <title>HTML5 Интро. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML5 Интро. Что такое стандарт HTML5? Какие бывают спецификации HTML? История создания и развития. Различия между HTML5 и HTML4. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class='color_h1'>Введение</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_form_attributes_form.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_browsers.php'>Next &#10095;</a>
    </div>

    <hr>
    <h2>Что такое HTML5?</h2>
    <p><strong>HTML5</strong> - это действующая версия языка <strong>HTML</strong>. В состав рабочей группы по <strong>HTML5</strong> вошли AOL, Apple, Google, IBM, Microsoft, Mozilla, Nokia, Opera и ещё несколько сотен других производителей. </p>
    <p>Существует некоторая путаница о версиях, поскольку существуют две независимые группы разработчиков - WHATWG и W3C.</p>
    <p>В WHATWG отказались от принципа «версийности» в пользу «вечной разработки» при принятии <strong>HTML</strong> спецификации. Такое решение было вызвано попыткой ускорить воплощение стандарта в жизнь, то есть разработчикам веб браузеров не нужно ждать, пока выйдет официально утверждённая версия спецификации (то есть, спецификация перейдет в состояние recomendation), они могут воплощать определённые части спецификации уже сейчас. Поэтому по версии WHATWG существует только одна спецификация, которая постоянно развивается - <strong>HTML</strong>.</p>
    <p>Эти две группы работали в тандеме, в WHATWG писали спецификации в режиме «живого стандарта» ( «Living Standard»), а в W3C принимали эти спецификации как «снимки», и внедряли их в чёткие версии своей спецификации. Группа W3C работала значительно медленнее, потому что необходимо было обеспечивать требования большего спектра пользователей, а не только веб-браузеров.</p>
    <p>28 октября 2014 года Консорциум Всемирной Паутины (W3C) объявил о предоставлении набору спецификаций <strong>HTML5</strong> статус рекомендованного стандарта. Интересно, что в этом виде спецификации <strong>HTML 5.0</strong> были сформированы ещё два года до того, после чего работа была сосредоточена на проведении тестирования и оценки совместимости доступных реализаций. На время стандартизации <strong>HTML5</strong> уже давно стал стандартом де-факто и активно использовался в веб-приложениях. Фактическое утверждение стандарта лишь формально поставило точку в продвижении <strong>HTML5</strong> и подтвердило вездесущность и корректность его реализации.</p>
    <p>Спецификация <strong>HTML5</strong> не ограничивается только разметкой и включает в себя ряд веб-технологий, которые в совокупности формируют открытую Веб-платформу - программное окружение для работы кросс-платформенных приложений, способных взаимодействовать с оборудованием, и которые поддерживают средства для работы с видео, графикой и анимацией, что даёт расширенные сетевые возможности.</p>
    <hr>

    <h2>Что нового в HTML5?</h2>
    <p>Объявление DOCTYPE для HTML5 очень простое:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;
      </div>
    </div>
    <p>Объявление кодировки символов (charset) также очень простое:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;meta charset=&quot;UTF-8&quot;&gt;
      </div>
    </div>

    <div class='w3-example'>
      <h3>HTML5 Пример:</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>
        &lt;html&gt;<br>
        &lt;head&gt;<br>&lt;meta charset=&quot;UTF-8&quot;&gt;<br>
        &lt;title&gt;<em>Title of the document</em>&lt;/title&gt;<br>
        &lt;/head&gt;<br><br>
        &lt;body&gt;<br>
        <em>Content of the document......</em><br>
        &lt;/body&gt;<br>
        <br>
        &lt;/html&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryitcbf7.html?filename=tryhtml5_intro'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-panel w3-note'>
      <p>Кодировка символов по умолчанию в <strong>HTML5</strong> - это <strong>UTF-8</strong>.</p>
    </div>
    <hr>

    <h2>Новые HTML5 элементы</h2>
    <p>Наиболее интересные новые HTML5 элементы:&nbsp;<p>Новые <strong>семантические элементы</strong>
      например <code class='w3-codespan'>&lt;header&gt;</code>, <code class='w3-codespan'>&lt;footer&gt;</code>,
      <code class='w3-codespan'>&lt;article&gt;</code> и <code class='w3-codespan'>&lt;section&gt;</code>.<p>Новые <strong>атрибуты элементов формы</strong> например number, date, time, calendar, and range.<p>Новые <strong> графические элементы</strong>: <code class='w3-codespan'>&lt;svg&gt;</code> и <code class='w3-codespan'>&lt;canvas&gt;</code>.<p>Новые <strong>мультимедиа элементы</strong>: <code class='w3-codespan'>&lt;audio&gt;</code> и <code class='w3-codespan'>&lt;video&gt;</code>.<p>
    <div class='w3-panel w3-note'>
      <p>В следующем разделе <a href='html5_browsers.php'>HTML5 Поддержка браузерами</a>, вы узнаете как &quot;научить&quot; старые браузеры обрабатывать &quot;неизвестные&quot; для них (новые) HTML элементы.</p>
    </div>
    <hr>

    <h2>Новые HTML5 API (Application Programming Interfaces / Интерфейсы Прикладного Программирования)</h2>
    <p>Наиболее интересными являются новые API в <strong>HTML5</strong>:</p>
    <ul>
      <li>HTML Геолокация
      <li>HTML Drag and Drop
      <li>HTML Локальное хранилище
      <li>HTML Кеш приложения
      <li>HTML Веб-работники
      <li>HTML SSE
    </ul>
    <div class='w3-panel w3-note'>
      <p><strong>Совет:</strong> Локальное хранилище является мощной заменой для файлов cookie.</p>
    </div>

    <hr>
    <h2>Удалённые элементы в HTML5</h2>
    <p>В <strong>HTML5</strong> удалены такие элементы <strong>HTML4</strong>:</p>
    <table class='w3-table-all'>
      <tr>
        <th>Удалённый элемент</th>
        <th>Используют вместо этого</th>
      </tr>
      <tr>
        <td>&lt;acronym&gt;</td>
        <td>&lt;abbr&gt;</td>
      </tr>
      <tr>
        <td>&lt;applet&gt;</td>
        <td>&lt;object&gt;</td>
      </tr>
      <tr>
        <td>&lt;basefont&gt;</td>
        <td>CSS</td>
      </tr>
      <tr>
        <td>&lt;big&gt;</td>
        <td>CSS</td>
      </tr>
      <tr>
        <td>&lt;center&gt;</td>
        <td>CSS</td>
      </tr>
      <tr>
        <td>&lt;dir&gt;</td>
        <td>&lt;ul&gt;</td>
      </tr>
      <tr>
        <td>&lt;font&gt;</td>
        <td>CSS</td>
      </tr>
      <tr>
        <td>&lt;frame&gt;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&lt;frameset&gt;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&lt;noframes&gt;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&lt;strike&gt;</td>
        <td>CSS, &lt;s&gt;, or &lt;del&gt;</td>
      </tr>
      <tr>
        <td>&lt;tt&gt;</td>
        <td>CSS</td>
      </tr>
    </table>

    <div class='w3-panel w3-note'>
      <p>В разделе <a href='html5_migration.php'>HTML5 Переход с HTML4</a>, вы узнаете, как легко перейти с <strong>HTML4</strong> на <strong>HTML5</strong></p>
    </div>
    <hr>

    <h2>HTML История. Как это было?</h2>
    <p>С первых дней существования Всемирной паутины существует много версий <strong>HTML</strong>:</p>
    <table class='w3-table-all notranslate'>
      <tr>
        <th>Год</th>
        <th>Версия</th>
      </tr>
      <tr>
        <td>1989</td>
        <td><a href='https://ru.wikipedia.org/wiki/Бернерс-Ли,_Тим' target='_blank' rel='nofollow' title='Прочитайте больше о Tim Berners-Lee на Википедии'>Tim Berners-Lee</a> изобрёл www</td>
      </tr>
      <tr>
        <td>1991</td>
        <td><a href='https://ru.wikipedia.org/wiki/Бернерс-Ли,_Тим' target='_blank' rel='nofollow' title='Прочитайте больше о Tim Berners-Lee на Википедии'>Tim Berners-Lee</a> изобрёл HTML</td>
      </tr>
      <tr>
        <td>1993</td>
        <td><a href='https://en.wikipedia.org/wiki/Dave_Raggett' target='_blank' rel='nofollow' title='Прочитайте больше о Dave Raggett на Википедии'>Dave Raggett</a> разработал HTML+</td>
      </tr>
      <tr>
        <td>1995</td>
        <td>Рабочая группа HTML разработала HTML 2.0</td>
      </tr>
      <tr>
        <td>1997</td>
        <td>W3C Рекомендация: HTML 3.2</td>
      </tr>
      <tr>
        <td>1999</td>
        <td>W3C Рекомендация: HTML 4.01</td>
      </tr>
      <tr>
        <td>2000</td>
        <td>W3C Рекомендация: XHTML 1.0</td>
      </tr>
      <tr>
        <td>2008</td>
        <td>WHATWG HTML5 Первый публичный проект</td>
      </tr>
      <tr>
        <td>2012</td>
        <td>WHATWG HTML5 Living Standard (Живой стандарт)</td>
      </tr>
      <tr>
        <td>2014</td>
        <td>W3C Рекомендация: HTML5</td>
      </tr>
      <tr>
        <td>2016</td>
        <td>W3C Кандидат рекомендации: HTML 5.1</td>
      </tr>
      <tr>
        <td>2017</td>
        <td>W3C Рекомендация: HTML5.1 2nd Edition</td>
      </tr>
      <tr>
        <td>2017</td>
        <td>W3C Рекомендация: HTML5.2</td>
      </tr>
      <tr>
        <td>2018</td>
        <td>W3C Рекомендация: HTML5.3</td>
      </tr>
    </table>
    <p>С 1991 по 1999 год HTML разрабатывался с версии 1 до версии 4.&nbsp; </p>
    <p>В 2000 году Консорциум Всемирной паутины - World Wide Web (<strong>W3C</strong>) - рекомендовал XHTML 1.0. Синтаксис XHTML был строгим, и разработчики были вынуждены писать валидный и 'хорошо сформированный' код.</p>
    <p>В 2004 году группа W3C решила закрыть разработку HTML в пользу XHTML.</p>
    <p>В 2004 году была сформирована <strong>WHATWG</strong> (Web Hypertext Application Technology Working Group - Рабочая группа веб-технологий по использованию гипертекста). WHATWG хотела разработать HTML, согласованный с тем, как использовался веб-сайт, когда он был совместим со старыми версиями HTML.</p>
    <p>В 2004 - 2006 годах компания WHATWG получила поддержку от основных производителей браузеров.</p>
    <p>В 2006 году группа W3C объявила про поддержку WHATWG.</p>
    <p>В 2008 году был выпущен первый публичный проект <strong>HTML5</strong>.</p>
    <p>В 2012 году WHATWG и W3C приняли решение о разделении:</p>
    <p><strong>Группа WHATWG хотела разработать HTML как 'Living Standard' ('Живой Стандарт')</strong>. 'Living Standard' всегда обновляется и усовершенствуется. Можно добавить новые функции, но старую функциональность нельзя удалить.</p>
    <p><a href='http://whatwg.org/html/' target='_blank' rel='nofollow'>WHATWG HTML5 Living Standard</a> был опубликован в 2012 году и постоянно обновляется.</p>
    <p><strong>Группа W3C хотела разработать окончательный стандарт HTML5 и XHTML.</strong></p>
    <p><a href='http://www.w3.org/TR/html5/' target='_blank' rel='nofollow'>W3C HTML5</a> Рекомендацию было выпущено 28 октября 2014 года.</p>
    <p><a href='http://www.w3.org/TR/html51/' target='_blank' rel='nofollow'>W3C HTML5.1 2nd Edition</a> Рекомендацию было выпущено 3 октября 2017 года.</p>
    <p><a href='http://www.w3.org/TR/html52/' target='_blank' rel='nofollow'>W3C HTML5.2</a> Рекомендацию было выпущено 14 декабря 2017 года.</p>
    <p><a href='http://www.w3.org/TR/html53/' target='_blank' rel='nofollow'>W3C HTML5.3</a> Рекомендацию было выпущено 18 октября 2018 года.</p>
    <hr>
    <p>В 2019 году WHATWG и W3C подписали соглашение о сотрудничестве и работе над единой версией HTML в будущем: этот документ <a href='https://html.spec.whatwg.org/' target='_blank' rel='nofollow'>опубликован на сайте WHATWG</a>.</p>
    <hr>
    <div class='w3-panel w3-note'>
      <p><strong>Примечание:</strong> Получить актуальную и более полную информацию о 'Living Standard' WHATWG и действующие Рекомендации W3C вы всегда можете на официальных сайтах <a href='https://whatwg.org/' target='_blank' rel='nofollow'>WHATWG</a> и <a href='https://www.w3.org/' target='_blank' rel='nofollow'>W3C</a>.</p>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_form_attributes_form.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_browsers.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>