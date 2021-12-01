<?php include '../include/head.php'; ?>

  <title>HTML5 Drag and Drop. Перетянуть и кинуть. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML5 Drag and Drop. Что такое drag/drop на веб-сайте? Всё просто! - Перетянуть и кинуть! <?php include '../include/description.php'; ?>'>
  <link rel='stylesheet' href='../styles/browserref.css'>
  <style>
      #div1, #div2 {float:left; width:130px; height:50px; margin:10px;padding:10px;border:1px solid #aaa;}
  </style>
  <script>
      function allowDrop(ev)
      {
          ev.preventDefault();
      }
      function drag(ev)
      {
          ev.dataTransfer.setData('text',ev.target.id);
      }
      function drop(ev)
      {
          ev.preventDefault();
          var data=ev.dataTransfer.getData('text');
          ev.target.appendChild(document.getElementById(data));
      }
  </script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class='color_h1'>Drag and Drop</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_geolocation.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_webstorage.php'>Next &#10095;</a>
    </div>
    <hr>
    <div id='div1' ondrop='drop(event)' ondragover='allowDrop(event)'>
      <img src='../images/img_w3slogo.gif' draggable='true' ondragstart='drag(event)' id='drag1' alt='W3Schools Logo'></div>
    <div id='div2' ondrop='drop(event)' ondragover='allowDrop(event)'></div>
    <p style='clear:both'>Перетащите с помощью мыши изображение W3Schools из одного прямоугольника в другой прямоугольник.</p>
    <hr>

    <h2>Drag and Drop - Перетянуть и кинуть</h2>
    <p><strong>Drag and Drop</strong> - дословный перевод с английского языка - 'Перетянуть и кинуть'</p>
    <p>Перетягивание (Drag and drop) - очень распространённая функция. Это когда вы 'захватываете' мышкой объект и перетягиваете его в другое место.</p>
    <p>В <strong>HTML5</strong> перетягивание является частью стандарта: любой элемент может быть перетянутым. Для этого используется JavaScript.</p>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Цифры в таблице определяют первую версию браузера, которая полностью поддерживает перетягивание (Drag and Drop).</p>
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
        <td style='text-align:left;'>Drag and Drop</td>
        <td>4.0</td>
        <td>9.0</td>
        <td>3.5</td>
        <td>6.0</td>
        <td>12.0</td>
      </tr>
    </table>
    <hr>

    <h2>HTML Drag and Drop Пример</h2>
    <p>Ниже приведён пример простого перетягивания:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE HTML&gt;<br>
        &lt;html&gt;<br>
        &lt;head&gt;<br>
        &lt;script&gt;<br>
        function allowDrop(ev)
        {<br>
        &nbsp;&nbsp;ev.preventDefault();<br>
        }<br>
        <br>
        function drag(ev)
        {<br>
        &nbsp;
        ev.dataTransfer.setData(&quot;text&quot;, ev.target.id);<br>
        }<br>
        <br>
        function drop(ev)
        {<br>
        &nbsp;
        ev.preventDefault();<br>
        &nbsp;&nbsp;var data = ev.dataTransfer.getData(&quot;text&quot;);<br>
        &nbsp;&nbsp;ev.target.appendChild(document.getElementById(data));<br>
        }<br>
        &lt;/script&gt;<br>
        &lt;/head&gt;<br>
        &lt;body&gt;<br>
        <br>
        &lt;div id=&quot;div1&quot; ondrop=&quot;drop(event)&quot;
        ondragover=&quot;allowDrop(event)&quot;&gt;&lt;/div&gt;<br>
        <br>
        &lt;img id=&quot;drag1&quot; src=&quot;img_logo.gif&quot; draggable=&quot;true&quot;
        ondragstart=&quot;drag(event)&quot; width=&quot;336&quot; height=&quot;69&quot;&gt;<br>
        <br>
        &lt;/body&gt;<br>
        &lt;/html&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit01c2.html?filename=tryhtml5_draganddrop' target='_blank'>Попробуйте сами &raquo;</a></div>
    <p>Это может показаться сложным, но давайте рассмотрим все разные части перетягивания.</p>
    <hr>

    <h2>Создать элемент для перетягивания</h2>
    <p>Прежде всего: Чтобы сделать элемент перетягиваемым, установите атрибут <code class='w3-codespan'>draggable</code> на true (истина):</p>
    <div class='w3-code w3-border notranslate jsHigh'><div>
        &lt;img draggable=&quot;true&quot;&gt;</div></div>
    <hr>

    <h2>Чтобы перетянуть - ondragstart и setData()</h2>
    <p>Потом укажите, что должно произойти, когда элемент перетягивается.</p>
    <p>В приведённом выше примере атрибут <code class='w3-codespan'>ondragstart</code> вызывает функцию drag(event), которая указывает, какие данные необходимо перетягивать.</p>
    <p>Метод <code class='w3-codespan'>dataTransfer.setData()</code> устанавливает тип данных и значения перетягиваемых данных:</p>
    <div class='w3-code w3-border notranslate jsHigh'>
      <div>
        function drag(ev) {<br>&nbsp; ev.dataTransfer.setData(&quot;text&quot;, ev.target.id);<br>
        }
      </div></div>
    <p>В этом случае тип данных - 'text', а значение - id элемента перетягивания ('drag1').</p>
    <hr>
    <h2>Куда кинуть перетянувши - ondragover</h2>
    <p>Событие <code class='w3-codespan'>ondragover</code> указывает, куда можно перетянуть и скинуть данные.</p>
    <p>По умолчанию данные/элементы не могут быть скинуты в другие элементы. Чтобы позволить скидывание, мы должны предотвратить обработку элемента по умолчанию.</p>
    <p>Это делается путём вызова метода <code class='w3-codespan'>event.preventDefault()</code> для ondragover события:</p>
    <div class='w3-code w3-border notranslate jsHigh'>
      <div>
        <i>event</i>.preventDefault()</div>
    </div>
    <hr>

    <h2>Произвести скидывание - ondrop</h2>
    <p>Когда вытягиваются перетягиваемые данные, происходит событие скидывания.</p>
    <p>В приведённом выше примере атрибут ondrop вызывает функцию drop(event):</p>
    <div class='w3-code w3-border notranslate jsHigh'>
      <div>
        function drop(ev)
        {<br>
        &nbsp;
        ev.preventDefault();<br>
        &nbsp;
        var data = ev.dataTransfer.getData(&quot;text&quot;);<br>
        &nbsp;
        ev.target.appendChild(document.getElementById(data));<br>
        }</div>
    </div>
    <p>Объяснение кода:</p>
    <ul>
      <li>Вызвать функцию preventDefault(), чтобы запретить обработку данных по умолчанию браузером (по умолчанию открывается как ссылка при скидывании);</li>
      <li>Получить перетянутые данные с помощью метода dataTransfer.getData(). Этот метод возвратит любые данные, которые были установлены в том же типе в методе setData();</li>
      <li>Перетянутые данные - это id перетянутого элемента ('drag1');</li>
      <li>Добавьте перетянутый элемент в элемент drop.</li>
    </ul>
    <hr>

    <h2>Больше примеров</h2>
    <div class='w3-example'>
      <h3>Перетяните с помощью мышки изображение вперёд и назад</h3>
      <p>Как перетянуть (и скинуть) изображение вперёд и назад между двумя элементами &lt;div&gt; (с одного прямоугольника в другой):</p>

      <div class='w3-white w3-padding notranslate'>
        <iframe src='tryhtml5_draganddrop_ifr.html' style='width:100%;border:none'></iframe></div>
      <a class='w3-btn w3-margin-bottom w3-margin-top' href='../htmltryit/tryit2bae.html?filename=tryhtml5_draganddrop2' target='_blank'>Попробуйте сами &raquo;</a></div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_geolocation.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_webstorage.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>