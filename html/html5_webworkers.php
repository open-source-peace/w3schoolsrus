<?php include '../include/head.php'; ?>

  <title>HTML5 Web Workers API. Веб-работники. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML5 Web Workers. Веб-работники. Что такое web-работники? Что такое web-workers? Для чего нужны веб-работники? <?php include '../include/description.php'; ?>'>
  <link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class='color_h1'>Веб-работники</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_webstorage.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_serversentevents.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'><strong>Веб-работник</strong> - это JavaScript, который работает в фоновом режиме, не влияя на продуктивность страницы.</p>
    <hr>
    <h2>Что такое веб-работник на веб-странице?</h2>
    <p>Во время выполнения скриптов на странице HTML страница перестаёт отвечать, пока сценарий (выполнение скрипта) не закончится.</p>
    <p>Веб-работник - это JavaScript, который работает в фоновом режиме, независимо от других скриптов, не влияя на продуктивность страницы. Вы можете продолжать делать всё, что хотите: нажимать, выбирая вещи и т.д., а веб-работник будет работать в фоновом режиме.</p>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Цифры в таблице определяют первую версию браузера, которая полностью пподдерживает Web Workers (веб-работники).</p>
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
        <td style='text-align:left;'>Веб-работники</td>
        <td>4.0</td>
        <td>10.0</td>
        <td>3.5</td>
        <td>4.0</td>
        <td>11.5</td>
      </tr>
    </table>
    <hr>

    <h2>HTML Веб-работник. Пример</h2>
    <p>Приведённый ниже пример создаёт простого веб-работника, который подсчитывает числа в фоновом режиме:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-padding w3-white notranslate'>
        Считать числа: <output id='result'></output>
        <p>
          <button onclick='startWorker()'>Start Worker</button>
          <button onclick='stopWorker()'>Stop Worker</button>

          <script>
              var w;
              function startWorker()
              {
                  if(typeof(Worker)!=='undefined') {
                      if(typeof(w)=='undefined') {
                          w=new Worker('demo_workers.js');
                      }
                      w.onmessage = function (event) {
                          document.getElementById('result').innerHTML=event.data;
                      };
                  } else {
                      document.getElementById('result').innerHTML='К сожалению, ваш браузер не поддерживает Web Workers...';
                  }
              }

              function stopWorker()
              {
                  w.terminate();
                  w = undefined;
              }
          </script>
      </div>
      <a target='_blank' href='../htmltryit/tryiteefb.html?filename=tryhtml5_webworker' class='w3-btn w3-margin-bottom w3-margin-top'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Проверьте поддержку Веб-работника</h2>
    <p>Перед тем, как создать веб-работника, проверьте, поддерживает ли его браузер пользователя:</p>
    <div class='w3-code w3-border notranslate jsHigh'><div>
        if (typeof(Worker) !== &quot;undefined&quot;) {<br>
        &nbsp;&nbsp;// Да! Веб-работник поддерживается!<br>
        &nbsp; // <i>Какой-то код.....</i><br>
        }
        else {<br>
        &nbsp; // Извините! Веб-работник не поддерживается..<br>
        }
      </div></div>
    <hr>

    <h2>Создать файл Веб-работника</h2>
    <p>Теперь давайте создадим нашего веб-работника во внешнем JavaScript файле.</p>
    <p>Здесь мы создаём скрипт, который считает. Скрипт сохраняется в файле &quot;demo_workers.js&quot;:</p>
    <div class='w3-code w3-border notranslate jsHigh'>
      <div>
        var i = 0;<br>
        <br>
        function timedCount()
        {<br>
        &nbsp;
        i = i + 1;<br>
        &nbsp;
        postMessage(i);<br>
        &nbsp;&nbsp;setTimeout(&quot;timedCount()&quot;,500);<br>
        }<br>
        <br>
        timedCount();
      </div></div>

    <p>Важной частью вышеуказанного кода является метод <code class='w3-codespan'>postMessage()</code>, который используется для публикации сообщения на HTML-странице.</p>
    <p><b>Примечание:</b> Обычно веб-работники не используются для таких простых скриптов, а используются для более ресурсоёмких задач.</p>
    <hr>

    <h2>Создать объект Веб-работника</h2>
    <p>Теперь, когда у нас есть файл веб-работника, нам необходимо вызвать его с HTML-страницы.</p>
    <p>Следующие строки проверяют, существует ли уже работник, если нет - он создаёт новый веб-объект и выполняет код в &quot;demo_workers.js&quot;:</p>
    <div class='w3-code w3-border notranslate jsHigh'><div>
        if (typeof(w) == &quot;undefined&quot;) {<br>
        &nbsp; w = new Worker(&quot;demo_workers.js&quot;);<br>
        }</div></div>
    <p>Потом мы можем отправлять и получать сообщение от веб-работника.</p>
    <p>Добавьте к веб-работнику слушателя событий &quot;onmessage&quot;.</p>
    <div class='w3-code w3-border notranslate jsHigh'><div>
        w.onmessage = function(event){<br>
        &nbsp;&nbsp;document.getElementById(&quot;result&quot;).innerHTML = event.data;<br>
        };
      </div></div>

    <p>Когда веб-работник отправляет сообщение, выполняется код в слушателе события. Данные веб-работника сохраняются в event.data.</p>
    <hr>

    <h2>Завершить работу Веб-работника</h2>
    <p>Когда объект веб-работника создан, он будет продолжать прослушивать сообщение (даже после завершения внешнего скрипта), пока он не будет завершен.</p>
    <p>Для прекращения работы веб-работника и свободных ресурсов браузера/компьютера используйте метод <code class='w3-codespan'>terminate()</code>:</p>
    <div class='w3-code w3-border notranslate'><div>
        w.terminate();</div></div>
    <hr>

    <h2>Повторное использование Веб-работника</h2>
    <p>Если для рабочей переменной задано значение undefined, после её завершения вы можете повторно использовать код:</p>
    <div class='w3-code w3-border notranslate'><div>
        w = undefined;</div></div>
    <hr>

    <h2>Полный пример кода Веб-работника</h2>
    <p>Мы уже видели код Веб-работника в файле .js. Ниже приведён код для HTML-страницы:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>
        &lt;html&gt;<br>
        &lt;body&gt;<br>
        <br>
        &lt;p&gt;Считать числа: &lt;output id=&quot;result&quot;&gt;&lt;/output&gt;&lt;/p&gt;<br>
        &lt;button onclick=&quot;startWorker()&quot;&gt;Start Worker&lt;/button&gt; <br>
        &lt;button onclick=&quot;stopWorker()&quot;&gt;Stop Worker&lt;/button&gt;<br>
        <br>
        &lt;script&gt;<br>
        var w;<br>
        <br>
        function startWorker()
        {<br>
        &nbsp;
        if (typeof(Worker) !== &quot;undefined&quot;)
        {<br>
        &nbsp;&nbsp;&nbsp; if (typeof(w) == &quot;undefined&quot;) {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; w = new Worker(&quot;demo_workers.js&quot;);<br>
        &nbsp;&nbsp;&nbsp; }<br>
        &nbsp;&nbsp;&nbsp;&nbsp;w.onmessage = function(event) {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; document.getElementById(&quot;result&quot;).innerHTML = event.data;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;};<br>
        &nbsp;&nbsp;}
        else
        {<br>
        &nbsp;&nbsp;&nbsp;
        document.getElementById(&quot;result&quot;).innerHTML = &quot;К сожалению веб-работник не поддерживается.&quot;;<br>
        &nbsp;&nbsp;}<br>
        }<br>
        <br>
        function stopWorker()
        { <br>
        &nbsp;&nbsp;w.terminate();<br>&nbsp;&nbsp;w = undefined;<br>
        }<br>
        &lt;/script&gt;<br>
        <br>
        &lt;/body&gt;<br>
        &lt;/html&gt;</div>
      <a target='_blank' href='../htmltryit/tryiteefb.html?filename=tryhtml5_webworker' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Веб-работники и DOM</h2>
    <p>Поскольку веб-работники находятся во внешних файлах, они не имеют доступа к таким объектам JavaScript:</p>
    <ul>
      <li>Объект окна</li>
      <li>Объект документа</li>
      <li>Родительский объект</li>
    </ul>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_webstorage.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_serversentevents.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>