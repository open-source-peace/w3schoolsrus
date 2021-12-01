<?php include '../include/head.php'; ?>

  <title>HTML5 Web Storage. Веб-хранилище. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML5 Web Storage. Веб-хранилище. Что такое web-хранилище? Для чего нужен web storage? Лучше чем печеньки. <?php include '../include/description.php'; ?>'>
  <link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class='color_h1'>Веб хранилище</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_draganddrop.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_webworkers.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'><strong>HTML веб-хранилище</strong>; лучше чем cookies.</p>
    <hr>
    <h2>Что такое HTML веб-хранилище?</h2>
    <p>С помощью веб-хранилища веб-программы могут сохранять данные локально в браузере пользователя.</p>
    <p>До появления спецификации HTML5, данные приложений должны были сохраняться в куках (cookies), включенных в каждом запросе сервера. Веб-хранилище является более безопасным, и большие объёмы данных могут сохраняться локально, не влияя на работу веб-сайта.</p>
    <p>В отличие от файлов cookie, лимит хранилища намного больший (по крайней мере 5 МБ), и информация никогда не передаётся на сервер.</p>
    <p>Веб-хранилище - для каждого источника (для домена и протокола). Все страницы с одного источника (одинакового происхождения) могут сохранять и получать доступ к этим самым данным.</p>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Цифры в таблице определяют первую версию браузера, которая полностью поддерживает веб-хранилище.</p>
    <table class='browserref notranslate'>
      <tr>
        <th style='width:20%;font-size:16px;text-align:left;'>API</th>
        <th style='width:16%;' class='bsChrome' title='Chrome'></th>
        <th style='width:16%;' class='bsEdge' title='Internet Explorer / Edge'></th>
        <th style='width:16%;' class='bsFirefox' title='Firefox'></th>
        <th style='width:16%;' class='bsSafari' title='Safari'></th>
        <th style='width:16%;' class='bsOpera' title='Opera'></th>
      </tr>
      <tr>
        <td style='text-align:left;'>Веб-хранилище</td>
        <td>4.0</td>
        <td>8.0</td>
        <td>3.5</td>
        <td>4.0</td>
        <td>11.5</td>
      </tr>
    </table>
    <hr>

    <h2>HTML Объекты веб-хранилища</h2>
    <p>Веб-хранилище HTML обеспечивает два объекта для хранения данных на стороне клиента:</p>
    <ul>
      <li><code class='w3-codespan'>window.localStorage</code> - сохраняет данные без даты окончания строка действия;</li>
      <li><code class='w3-codespan'>window.sessionStorage</code> - сохраняет данные для одного сеанса (данные теряются при закрытии вкладки веб-браузера).</li>
    </ul>
    <p>Перед использованием веб-хранилища проверьте поддержку браузера localStorage и sessionStorage:</p>
    <div class='w3-code w3-border notranslate jsHigh'><div>
        if (typeof(Storage) !== &quot;undefined&quot;) {<br>
        &nbsp; // <i>Код для localStorage/sessionStorage.</i><br>
        }
        else {<br>
        &nbsp; // К сожалению, поддержка веб-хранилища отсутствует.<br>
        }</div></div>
    <hr>

    <h2>Объект localStorage</h2>
    <p>Объект <strong>localStorage</strong> сохраняет данные без даты окончания срока действия. Данные не будут удалены во время закрытия браузера и будут доступны на следующий день, неделю или год.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        // Сохраняем<br>localStorage.setItem(&quot;lastname&quot;, &quot;Smith&quot;);<br><br>// Возвращаем<br>
        document.getElementById(&quot;result&quot;).innerHTML = localStorage.getItem(&quot;lastname&quot;);
      </div>
      <a target='_blank' href='../htmltryit/tryitba72.html?filename=tryhtml5_webstorage_local' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Объяснение примера:</p>
    <ul>
      <li>Создаём пару localStorage name/value (имя/значение) с name='lastname' и value='Smith';</li>
      <li>Получаем значение 'lastname' и вставляем его в элемент с id='result' (результат).</li>
    </ul>
    <p>Приведённый выше пример также может быть написан таким образом:</p>
    <div class='w3-code w3-border notranslate jsHigh'><div>
        // Сохраняем<br>localStorage.lastname = &quot;Smith&quot;;<br>// Извлекаем<br>
        document.getElementById(&quot;result&quot;).innerHTML = localStorage.lastname;</div></div>
    <p>Синтаксис для удаления элемента 'lastname' localStorage является следующим:</p>
    <div class='w3-code w3-border notranslate jsHigh'><div>
        localStorage.removeItem(&quot;lastname&quot;);</div></div>

    <p><strong>Примечание:</strong> Пары name/value всегда сохраняются как строки. Не забывайте конвертировать их в другой формат, когда это необходимо!</p>
    <p>Следующий пример подсчитывает количество нажатий пользователем кнопки. В этом коде строка значений преобразуется в число, чтобы иметь возможность увеличить счетчик:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        if (localStorage.clickcount) {<br>&nbsp; localStorage.clickcount = Number(localStorage.clickcount) + 1;<br>
        } else {<br>&nbsp; localStorage.clickcount = 1;<br>}<br>
        document.getElementById(&quot;result&quot;).innerHTML = &quot;Вы нажали кнопку &quot; +<br>
        localStorage.clickcount + &quot; time(s).&quot;;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitdf50.html?filename=tryhtml5_webstorage_local_clickcount' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Объект sessionStorage</h2>
    <p>Объект <code class='w3-codespan'>sessionStorage</code> соответсвует объекту localStorage, <strong>кроме того</strong>, что он сохраняет данные лишь для одного сеанса. Данные удаляются, когда пользователь закрывает определённую вкладку веб-браузера.</p>
    <p>В следующем примере подсчитывается количество раз, когда пользователь нажал кнопку в текущей сесии:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        if (sessionStorage.clickcount) {<br>&nbsp; sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;<br>}
        else {<br>&nbsp; sessionStorage.clickcount = 1;<br>}<br>
        document.getElementById(&quot;result&quot;).innerHTML = &quot;Вы нажали кнопку &quot; +<br>
        sessionStorage.clickcount + &quot; time(s) in this session.&quot;;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit681b.html?filename=tryhtml5_webstorage_session' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_draganddrop.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_webworkers.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>