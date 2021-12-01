<?php include '../include/head.php'; ?>

  <title>HTML5 Server-Sent Events. События, отправленные сервером. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML5 Server-sent events. События, отправленные сервером. Для чего они нужны? Как используют SSE? <?php include '../include/description.php'; ?>'>
  <link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class='color_h1'>События, отправленные сервером</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_webworkers.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_examples.php'>Next &#10095;</a>
    </div>
    <hr>
    <h2>Для чего нужны события, отправленные сервером? (Server-Sent Events - SSE)</h2>
    <p class='intro'><strong>События, отправленные сервером</strong> (SSE) позволяют веб-странице получать обновления с сервера.</p>
    <hr>
    <h2>События, отправленные сервером - это одностороние сообщения</h2>
    <p>События, отправленные сервером - это когда веб-страница автоматически получает обновления с сервера.</p>
    <p>Это также было возможным и раньше, но на веб-странице необходимо было сделать запрос, доступны ли обновления. Из событиями, отправленными сервером, обновления отправляются автоматически.</p>
    <p>Примеры: Facebook/Twitter обновления, обновления цен на акции, новостные ленты, спортивные результаты и т.д.</p>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Цифры в таблице определяют первую версию браузера, которая полностью поддерживает события, отправленные сервером.</p>
    <table class='browserref notranslate'>
      <tr>
        <th style='width:14%;font-size:16px;text-align:left;'>API</th>
        <th style='width:16%;' class='bsChrome' title='Chrome'></th>
        <th style='width:16%;' class='bsEdge' title='Internet Explorer / Edge'></th>
        <th style='width:16%;' class='bsFirefox' title='Firefox'></th>
        <th style='width:16%;' class='bsSafari' title='Safari'></th>
        <th style='width:16%;' class='bsOpera' title='Opera'></th>
      </tr>
      <tr>
        <td style='text-align:left;'>SSE</td>
        <td>6.0</td>
        <td><span class='marked'>Не поддерживается</span></td>
        <td>6.0</td>
        <td>5.0</td>
        <td>11.5</td>
      </tr>
    </table>
    <hr>

    <h2>Получать уведомления об отправленных сервером событиях</h2>
    <p>Объект EventSource используется для получения сообщений о событиях, которые отправляются сервером:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var source = new EventSource(&quot;demo_sse.php&quot;);<br>source.onmessage = function(event) {<br>&nbsp;&nbsp;document.getElementById(&quot;result&quot;).innerHTML += event.data + &quot;&lt;br&gt;&quot;;<br>};</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitec4b.html?filename=tryhtml5_sse' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Объяснение примера:</p>
    <ul>
      <li>Создайте новый объект EventSource и укажите URL-адрес страницы, которая отправляет обновления (в этом примере &quot;demo_sse.php&quot;)</li>
      <li>Каждый раз при получении обновления происходит событие onmessage</li>
      <li>Когда происходит событие onmessage, поместите полученные данные в элемент с id=&quot;result&quot;</li>
    </ul>
    <hr>

    <h2>Проверьте поддержку событий, отправленных сервером</h2>
    <p>В приведенном выше примере &quot;Попробуйте сами&quot; было несколько дополнительных строк кода для проверки поддержки браузером отправленных сервером событий:</p>
    <div class='w3-code w3-border notranslate jsHigh'><div>
        if(typeof(EventSource) !== &quot;undefined&quot;) {<br>
        &nbsp; // Да! Отправка событий на сервер поддерживается!<br>
        &nbsp; // <i>Какой-то код.....</i><br>
        }
        else {<br>
        &nbsp; // К сожалению не поддерживается отправка событий на сервер.<br>
        }
      </div>
    </div>
    <hr>

    <h2>Пример кода на стороне сервера</h2>
    <p>Для приведённого выше примера нужен сервер, который может отправлять обновления даных (например, PHP или ASP).</p>
    <p>Синтаксис потока событий на стороне сервера простой. Установите заголовок &quot;Content-Type&quot; на &quot;text/event-stream&quot;. Теперь вы можете начать отправлять потоки событий.</p>
    <p>Код на PHP (demo_sse.php):</p>
    <div class='w3-code w3-border notranslate htmlHigh'><div>
        &lt;?php<br>header('Content-Type: text/event-stream');<br>
        header('Cache-Control: no-cache');<br><br>$time = date('r');<br>echo &quot;data: The server time is: {$time}\n\n&quot;;<br>flush();<br>?&gt;
      </div></div>

    <p>Код на ASP (VB) (demo_sse.asp):</p>
    <div class='w3-code w3-border notranslate' style='color:brown;'><div>
        &lt;%<br>Response.ContentType = &quot;text/event-stream&quot;<br>Response.Expires = -1<br>
        Response.Write(&quot;data: The server time is: &quot; &amp; now())<br>Response.Flush()<br>%&gt;
      </div></div>

    <p>Объяснение кода:</p>
    <ul>
      <li>Установите заголовок &quot;Content-Type&quot; в &quot;text/event-stream&quot;</li>
      <li>Укажите, что страница не должна кешироваться (not cache)</li>
      <li>Выведите данные, которые необходимо отправить. (<strong>Всегда</strong> нужно начинать с &quot;data: &quot;)</li>
      <li>Скиньте исходные данные назад на веб-страницу</li>
    </ul>
    <hr>

    <h2>Объект EventSource</h2>
    <p>В приведённых выше примерах мы использовали событие <em>onmessage</em> для получения сообщений. Но доступны и другие события:
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:20%'>События</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>onopen</td>
        <td>Когда открыто соединение с сервером</td>
      </tr>
      <tr>
        <td>onmessage</td>
        <td>Когда получено сообщение</td>
      </tr>
      <tr>
        <td>onerror</td>
        <td>Когда возникла ошибка</td>
      </tr>
    </table>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_webworkers.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_examples.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>