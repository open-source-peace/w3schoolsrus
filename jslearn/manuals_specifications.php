<?php include '../include/head.php'; ?>

<title>Справочники и спецификации в JavaScript. <?php include '../include/title_jslearn.php'; ?></title>
<meta name='description' content='Справочники и спецификации в JavaScript. Таблицы совместимости. Уроки для новичков. <?php include '../include/description_jslearn.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jslearn.php'; ?>
<?php include '../include/before_content_jslearn.php'; ?>

<article>
    <h1>JavaScript Справочники и спецификации</h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='intro.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='code_editors.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>Эта книга является полноценным учебником и нацелена на то, чтобы помочь вам постепенно освоить язык программирования <strong>JavaScript</strong>. Но когда вы хорошо изучите основы, вам понадобятся дополнительные источники информации.</p>
    <hr>

    <h2>Спецификация</h2>
    <p><a href="https://www.ecma-international.org/publications-and-standards/standards/ecma-262/" target="_blank" rel="nofollow">Спецификация ECMA-262</a> содержит самую глубокую, детальную и формализованную информацию о JavaScript. Она определяет сам язык.</p>
    <p>Вначале спецификация может показаться тяжеловатой для понимания из-за слишком формального стиля изложения. Если вы ищете источник самой достоверной информации, то это правильное место, но она не для ежедневного использования.</p>
    <p>Новая версия спецификации появляется каждый год. А пока она не вышла официально, все желающие могут ознакомиться с текущим черновиком на <a href="https://tc39.es/ecma262/" target="_blank" rel="nofollow">https://tc39.es/ecma262/</a>.</p>
    <p>Чтобы почитать о самых последних возможностях, включая те, которые «почти в стандарте» (так называемые «stage 3 proposals»), посетите <a href="https://github.com/tc39/proposals" target="_blank" rel="nofollow">https://github.com/tc39/proposals</a>.</p>
    <p>Если вы разрабатываете под браузеры, то существуют и другие спецификации, о которых рассказывается во второй части этого учебника.</p>
    <hr>

    <h2>Справочники</h2>
    <ul>
        <li>
            <p><strong>MDN (Mozilla) JavaScript Reference</strong> – это справочник с примерами и другой информацией. Хороший источник для получения подробных сведений о функциях языка, методах встроенных объектов и так далее.</p>
            <p>Располагается по адресу <a href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference" target="_blank" rel="nofollow">https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference</a>.</p>
            <p>Хотя зачастую вместо их сайта удобнее использовать какой-нибудь интернет-поисковик, вводя там запрос «MDN [что вы хотите найти]», например
                <a href="https://www.google.com/search?q=MDN+parseInt" target="_blank" rel="nofollow">https://google.com/search?q=MDN+parseInt</a> для поиска информации о функции parseInt.</p>
        </li>
        <li><p><strong>MSDN – справочник от Microsoft</strong>, содержащий много информации, в том числе по JavaScript (который там часто обозначается как JScript). Если вам нужно найти что-то специфическое по браузеру Internet Explorer, лучше искать там:
                <a href="http://msdn.microsoft.com/" target="_blank" rel="nofollow">http://msdn.microsoft.com/</a>.</p>
            <p>Так же, как и в предыдущем случае, можно использовать интернет-поиск, набирая фразы типа «RegExp MSDN» или «RegExp MSDN jscript».</p>
        </li>
    </ul>
    <hr>

    <h2>Таблицы совместимости</h2>
    <p><strong>JavaScript</strong> – это развивающийся язык, в который постоянно добавляется что-то новое.</p>
    <p>Посмотреть, какие возможности поддерживаются в разных браузерах и других движках, можно в следующих источниках:</p>
    <ul>
        <li><a href="http://caniuse.com" target="_blank" rel="nofollow">http://caniuse.com</a> – таблицы с информацией о поддержке по каждой возможности языка. Например, чтобы узнать, какие движки поддерживают современные криптографические функции, посетите: http://caniuse.com/#feat=cryptography.</li>
        <li><a href="https://kangax.github.io/compat-table/es6/" target="_blank" rel="nofollow">https://kangax.github.io/compat-table</a> – таблица с возможностями языка и движками, которые их поддерживают и не поддерживают.</li>
    </ul>
    <p>Все эти ресурсы полезны в ежедневной работе программиста, так как они содержат ценную информацию о возможностях использования языка, их поддержке и так далее.</p>
    <p>Пожалуйста, запомните эти ссылки (или ссылку на эту страницу) на случай, когда вам понадобится подробная информация о какой-нибудь конкретной возможности JavaScript.</p>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='intro.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='code_editors.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
