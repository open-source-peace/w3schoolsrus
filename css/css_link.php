<?php include '../include/head.php'; ?>

<title>CSS Стилизация ссылок. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Ссылки. Как стилизуются ссылки на веб-страницах? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<style>
        .btn {
            display:inline-block;
            background-color:#f44336;
            color: #FFFFFF;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            font-size:16px;
            margin-left:20px;
            opacity:0.9;
        }
        .btn:hover {
            color:white;
            background-color:red;
            opacity:1;
        }
        .button {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left:20px;
        }
        .button:hover {
            background-color: #4CAF50;
            color: white;
        }
        .txtlink {
            color: green;
            text-decoration:none;
            margin-left:20px;
            font-size:16px;
        }
        .txtlink:hover {
            text-decoration:underline;
        }
        .txtlink2:hover {
            color:#008CBA;
        }
        @media only screen and (max-width: 547px) {
            .btn {
                margin:0 !important;
            }
        }
        @media only screen and (max-width: 381px) {
            .button {
                margin:0 !important;
            }
        }
        @media only screen and (max-width: 337px) {
            .button {
                margin:10px 0!important;
            }
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
  <h1>CSS <span class="color_h1">Ссылки</span></h1>
  <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="css_icons.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="css_list.php">Next &#10095;</a>
  </div>
  <hr>
  <p class="intro">С помощью CSS ссылки можно стилизовать разными способами.</p>
  <a href="javascript:void(0)" class="txtlink2">Текстовая ссылка</a>
  <a href="javascript:void(0)" class="txtlink">Текстовая ссылка</a>
  <a href="javascript:void(0)" class="button button1">Кнопочная ссылка</a>
  <a href="javascript:void(0)" class="btn">Кнопочная ссылка</a>
  <hr>
  <h2>Стилизация ссылок</h2>
  <p>Ссылки могут быть оформлены с помощью любого свойства CSS (например, <code class="w3-codespan">color</code>, <code class="w3-codespan">font-family</code>, <code class="w3-codespan">background</code> и т.д.).</p>
  <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate cssHigh">
          a {<br>&nbsp;&nbsp;color: hotpink;<br>}</div>
      <a target="_blank" href="../csstryit/trycss_link_all.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
  </div>
  <p>Кроме того, ссылки могут быть оформлены по-разному в зависимости от того, в каком <strong>состоянии</strong> они находятся.</p>
  <p>Четыре состояния ссылок:</p>
  <ul>
      <li><code class="w3-codespan">a:link</code> - обычная, не посещенная ссылка</li>
      <li><code class="w3-codespan">a:visited</code> - ссылка, которую посетил пользователь</li>
      <li><code class="w3-codespan">a:hover</code> - ссылка, когда пользователь наводит на неё курсор мыши</li>
      <li><code class="w3-codespan">a:active</code> - ссылка в тот момент, когда она нажата (активная)</li>
  </ul>
  <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate cssHigh">
          /* непосещенная ссылка */<br>a:link {<br>&nbsp; color: red;<br>}<br><br>/* посещенная ссылка */<br>a:visited {<br>&nbsp; color: green;<br>}<br><br>/* ссылка при наведении мыши */<br>
          a:hover {<br>&nbsp;&nbsp;color: hotpink;<br>}<br><br>/* активная ссылка */<br>a:active {<br>
          &nbsp;
          color: blue;<br>}</div>
      <a target="_blank" href="../csstryit/trycss_link.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
  </div>
  <p>При настройке стиля для нескольких состояний ссылок существуют некоторые правила порядка:</p>
  <ul>
      <li>a:hover ДОЛЖЕН следовать после a:link и a:visited</li>
      <li>a:active ДОЛЖЕН следовать после a:hover</li>
  </ul>
  <hr>

  <h2>Text Decoration - Оформление текста</h2>
  <p>Свойство <code class="w3-codespan">text-decoration</code> в основном используется для удаления подчеркиваний из ссылок:</p>

  <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate cssHigh">
          a:link {<br>&nbsp; text-decoration: none;<br>}<br>
          <br>a:visited {<br>&nbsp; text-decoration: none;<br>}<br>
          <br>a:hover {<br>&nbsp;&nbsp;text-decoration: underline;<br>}<br>
          <br>a:active {<br>&nbsp;&nbsp;text-decoration: underline;<br>}</div>
      <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_link_decoration.html">Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Background Color - Цвет фона</h2>
  <p>Свойство <code class="w3-codespan">background-color</code> может быть использовано для указания цвета фона для ссылок:</p>

  <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate cssHigh">
          a:link {<br>&nbsp;&nbsp;background-color: yellow;<br>}<br><br>
          a:visited {<br>&nbsp; background-color: cyan;<br>}<br><br>
          a:hover {<br>&nbsp;&nbsp;background-color: lightgreen;<br>}<br><br>
          a:active {<br>&nbsp;&nbsp;background-color: hotpink;<br>}&nbsp;
      </div>
      <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_link_background.html">Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Кнопки-ссылки</h2>
  <p>Этот пример демонстрирует более сложный пример, где объединяются несколько свойств CSS для отображения ссылок в виде блоков / кнопок:</p>

  <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate cssHigh">
          a:link, a:visited {<br>&nbsp;&nbsp;background-color: #f44336;<br>&nbsp;
          color: white;<br>&nbsp; padding: 14px 25px;<br>&nbsp;&nbsp;text-align: center; <br>&nbsp;&nbsp;text-decoration: none;<br>&nbsp;&nbsp;display: inline-block;<br>}<br><br>a:hover, a:active {<br>&nbsp;&nbsp;background-color: red;<br>}</div>
      <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_link_advanced.html">Попробуйте сами &raquo;</a>
  </div>
  <hr>

    <h2>Больше примеров</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Этот пример демонстрирует, как добавить другие стили к гиперссылкам:</p>
        <div class="w3-code notranslate cssHigh">
            a.one:link {color: #ff0000;}<br>a.one:visited {color: #0000ff;}<br>a.one:hover
            {color: #ffcc00;}<br><br>a.two:link {color: #ff0000;}<br>a.two:visited {color:
            #0000ff;}<br>a.two:hover {font-size: 150%;}<br><br>a.three:link {color:
            #ff0000;}<br>a.three:visited {color: #0000ff;}<br>a.three:hover {background:
            #66ff66;}<br><br>a.four:link {color: #ff0000;}<br>a.four:visited {color:
            #0000ff;}<br>a.four:hover {font-family: monospace;}<br><br>a.five:link {color:
            #ff0000; text-decoration: none;}<br>a.five:visited {color: #0000ff;
            text-decoration: none;}<br>a.five:hover {text-decoration: underline;}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_link2.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Еще один пример того, как создавать поля / кнопки ссылок:</p>
        <div class="w3-code notranslate cssHigh">
            a:link, a:visited {<br>&nbsp; background-color: white;<br>&nbsp; color: black;<br>&nbsp;
            border: 2px solid green;<br>&nbsp; padding: 10px 20px;<br>&nbsp; text-align:
            center;<br>&nbsp; text-decoration: none;<br>&nbsp; display: inline-block;<br>}<br><br>a:hover, a:active
            {<br>&nbsp; background-color: green;<br>&nbsp; color: white;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_link_advanced2.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Этот пример демонстрирует разные типы курсоров (может быть полезно для ссылок):</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;span style=&quot;cursor: auto&quot;&gt;auto&lt;/span&gt;&lt;br&gt;<br>&lt;span style=&quot;cursor:
            crosshair&quot;&gt;crosshair&lt;/span&gt;&lt;br&gt;<br>&lt;span style=&quot;cursor:
            default&quot;&gt;default&lt;/span&gt;&lt;br&gt;<br>&lt;span style=&quot;cursor: e-resize&quot;&gt;e-resize&lt;/span&gt;&lt;br&gt;<br>
            &lt;span style=&quot;cursor: help&quot;&gt;help&lt;/span&gt;&lt;br&gt;<br>&lt;span style=&quot;cursor:
            move&quot;&gt;move&lt;/span&gt;&lt;br&gt;<br>&lt;span style=&quot;cursor: n-resize&quot;&gt;n-resize&lt;/span&gt;&lt;br&gt;<br>
            &lt;span style=&quot;cursor: ne-resize&quot;&gt;ne-resize&lt;/span&gt;&lt;br&gt;<br>&lt;span style=&quot;cursor:
            nw-resize&quot;&gt;nw-resize&lt;/span&gt;&lt;br&gt;<br>&lt;span style=&quot;cursor:
            pointer&quot;&gt;pointer&lt;/span&gt;&lt;br&gt;<br>&lt;span style=&quot;cursor: progress&quot;&gt;progress&lt;/span&gt;&lt;br&gt;<br>
            &lt;span style=&quot;cursor: s-resize&quot;&gt;s-resize&lt;/span&gt;&lt;br&gt;<br>&lt;span style=&quot;cursor:
            se-resize&quot;&gt;se-resize&lt;/span&gt;&lt;br&gt;<br>&lt;span style=&quot;cursor: sw-resize&quot;&gt;sw-resize&lt;/span&gt;&lt;br&gt;<br>
            &lt;span style=&quot;cursor: text&quot;&gt;text&lt;/span&gt;&lt;br&gt;<br>&lt;span style=&quot;cursor:
            w-resize&quot;&gt;w-resize&lt;/span&gt;&lt;br&gt;<br>&lt;span style=&quot;cursor: wait&quot;&gt;wait&lt;/span&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_cursor.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_link1" target="_blank">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_link2" target="_blank">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_link3" target="_blank">Упражнение 3 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_link4" target="_blank">Упражнение 4 &raquo;</a>
        </div>
    </div>
  <hr>
  <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="css_icons.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="css_list.php">Next &#10095;</a>
  </div>
  </article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>