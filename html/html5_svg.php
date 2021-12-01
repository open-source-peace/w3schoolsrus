<?php include '../include/head.php'; ?>

  <title>HTML5 SVG. Графика на сайте. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML5 SVG. Графика на сайте. Как добавить элементы svg на веб-странице? Создание графических объектов с помощью svg. <?php include '../include/description.php'; ?>'>
  <link rel='stylesheet' href='../styles/browserref.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class='color_h1'> SVG - Scalable Vector Graphics / Масштабируемая векторная графика</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_canvas.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_media.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Что такое SVG?</h2>
    <ul>
      <li><strong>SVG</strong> расшифровывается как Scalable Vector Graphics - Масштабируемая векторная графика
      <li><strong>SVG</strong> используется для определения Web-графики
      <li><strong>SVG</strong> рекомендуется W3C (Консорциумом всемирной паутины)
    </ul>
    <hr>

    <h2>HTML элемент &lt;svg&gt;</h2>
    <p>HTML элемент <code class='w3-codespan'>&lt;svg&gt;</code> является контейнером для SVG-графики.</p>
    <p>SVG имеет несколько методов для рисования контуров, боксов, кругов, текста и графических изображений.</p>
    <hr>

    <h2>Поддержка браузерами</h2>
    <p>Цифры в таблице определяют первую версию браузера, которая полностью поддерживает элемент <code class='w3-codespan'>&lt;svg&gt;</code>.</p>

    <table class='browserref notranslate'>
      <tr>
        <th style='width:20%;font-size:16px;text-align:left;'>Элемент</th>
        <th style='width:16%;' class='bsChrome' title='Chrome'></th>
        <th style='width:16%;' class='bsEdge' title='Internet Explorer / Edge'></th>
        <th style='width:16%;' class='bsFirefox' title='Firefox'></th>
        <th style='width:16%;' class='bsSafari' title='Safari'></th>
        <th style='width:16%;' class='bsOpera' title='Opera'></th>
      </tr>
      <tr>
        <td style='text-align:left;'>&lt;svg&gt;</td>
        <td>4.0</td>
        <td>9.0</td>
        <td>3.0</td>
        <td>3.2</td>
        <td>10.1</td>
      </tr>
    </table>
    <hr>

    <h2>SVG Круг</h2>
    <svg width='100' height='100'>
      <circle cx='50' cy='50' r='40' stroke='red' stroke-width='4' fill='orange' />
    </svg>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;svg
        width=&quot;100&quot; height=&quot;100&quot;&gt;<br>&nbsp; &lt;circle cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;40&quot; stroke=&quot;red&quot;
        stroke-width=&quot;4&quot; fill=&quot;orange&quot; /&gt;<br>&lt;/svg&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='tryit9978.html?filename=tryhtml_svg_circle' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>SVG Прямоугольник</h2>
    <svg width='400' height='100'>
      <rect width='400' height='100' style='fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)' />
    </svg>
    <br><br>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;svg width=&quot;400&quot; height=&quot;100&quot;&gt;<br>&nbsp; &lt;rect width=&quot;400&quot; height=&quot;100&quot; style=&quot;fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)&quot;
        /&gt;<br>&lt;/svg&gt;<br></div>
      <a class='w3-btn w3-margin-bottom' href='tryit7edc.html?filename=tryhtml_svg_rect' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>SVG Закругленный прямоугольник</h2>
    <svg width='300' height='180'>
      <rect x='10' y='10' rx='20' ry='20' width='150' height='150'
            style='fill:red;stroke:black;stroke-width:5;opacity:0.5' />
      К сожалению, ваш браузер не поддерживает встроенный SVG.
    </svg>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;svg width=&quot;400&quot; height=&quot;180&quot;&gt;<br>&nbsp; &lt;rect x=&quot;50&quot; y=&quot;20&quot; rx=&quot;20&quot; ry=&quot;20&quot;
        width=&quot;150&quot; height=&quot;150&quot;<br>&nbsp;
        style=&quot;fill:red;stroke:black;stroke-width:5;opacity:0.5&quot; /&gt;<br>&lt;/svg&gt;<br></div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href='tryit2a3b.html?filename=tryhtml_svg_rect_round'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>SVG Звезда</h2>
    <svg width='300' height='200'>
      <polygon points='100,10 40,198 190,78 10,78 160,198' style='fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;' />
      К сожалению, ваш браузер не поддерживает встроенный SVG.
    </svg>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;svg width=&quot;300&quot; height=&quot;200&quot;&gt;<br>
        &nbsp; &lt;polygon points=&quot;100,10 40,198 190,78 10,78 160,198&quot;<br>
        &nbsp; style=&quot;fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;&quot; /&gt;<br>
        &lt;/svg&gt;<br>
      </div>
      <a class='w3-btn w3-margin-bottom' href='tryit028e.html?filename=tryhtml_svg_star' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>SVG Лого</h2>
    <svg height='130' width='500'>
      <defs>
        <linearGradient id='grad1' x1='0%' y1='0%' x2='100%' y2='0%'>
          <stop offset='0%' style='stop-color:rgb(255,255,0);stop-opacity:1' />
          <stop offset='100%' style='stop-color:rgb(255,0,0);stop-opacity:1' />
        </linearGradient>
      </defs>
      <ellipse cx='100' cy='70' rx='85' ry='55' fill='url(#grad1)' />
      <text fill='#ffffff' font-size='45' font-family='Verdana' x='50' y='86'>SVG</text>
      К сожалению, ваш браузер не поддерживает встроенный SVG.
    </svg>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;svg height='130' width='500'&gt;<br>&nbsp; &lt;defs&gt;<br>&nbsp;&nbsp;&nbsp; &lt;linearGradient id='grad1' x1='0%'
        y1='0%' x2='100%' y2='0%'&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;stop offset='0%' style='stop-color:rgb(255,255,0);stop-opacity:1'
        /&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;stop offset='100%' style='stop-color:rgb(255,0,0);stop-opacity:1' /&gt;<br>
        &nbsp;&nbsp;&nbsp;
        &lt;/linearGradient&gt;<br>&nbsp; &lt;/defs&gt;<br>&nbsp; &lt;ellipse cx='100' cy='70' rx='85' ry='55'
        fill='url(#grad1)' /&gt;<br>&nbsp; &lt;text fill='#ffffff' font-size='45'
        font-family='Verdana' x='50' y='86'&gt;SVG&lt;/text&gt;<br>&nbsp; К сожалению, ваш браузер не поддерживает встроенный SVG.<br>&lt;/svg&gt;<br>
      </div>
      <a class='w3-btn w3-margin-bottom' href='tryitc8dd.html?filename=tryhtml_svg_logo' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2>Отличия между SVG и Canvas</h2>
    <p>SVG - это язык для описания 2D-графики в XML.</p>
    <p>Canvas рисует 2D графику на лету (с помощью JavaScript).</p>
    <p>SVG базируется на XML, что означает, что каждый элемент доступен в SVG DOM. Вы можете присоединить обработчики событий JavaScript для элемента.</p>
    <p>В SVG каждая нарисованная форма запоминается как объект. Если атрибуты объекта SVG изменены, браузер может автоматически повторно воспроизвести форму.</p>
    <p>Canvas визуализируется пиксель за пикселем. В canvas, когда рисуется рисунок, он забывается браузером. Если его позицию надо изменить, то необходимо перерисовать всю сцену, включая любые объекты, которые могли быть покрыты графикой.</p>
    <hr>
    <h2>Сравнение Canvas и SVG</h2>
    <p>В таблице ниже показаны некоторые важные отличия между Canvas и SVG:</p>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:50%'>Canvas</th>
        <th style='width:50%'>SVG</th>
      </tr>
      <tr>
        <td>
          <ul>
            <li>Зависит от разрешения</li>
            <li>Нет поддержки обработчиков событий</li>
            <li>Низкие возможности отображения текста</li>
            <li>Вы можете сохранить полученное изображение как .png или .jpg</li>
            <li>Хорошо подходит для графических интенсивных игр</li>
          </ul>
        </td>
        <td>
          <ul>
            <li>Не зависит от разрешения</li>
            <li>Поддержка обработчиков событий</li>
            <li>Лучше всего подходит для программ из большими областями рендеринга (Карты Google)</li>
            <li>Медленный рендеринг, если комплекс (все, что использует DOM) будет очень медленным</li>
            <li>Не подходит для игровых программ</li>
          </ul>
        </td>
      </tr>
    </table>
    <hr>
    <h2>SVG Учебник</h2>

    <p>Узнать больше про SVG можно, посетив <a href='../graphics/svg_intro.php'>SVG Учебник</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_canvas.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_media.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>