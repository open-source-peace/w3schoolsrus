<?php include '../include/head.php'; ?>

  <title>jQuery Учебник. Синтаксис. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Учебник по jQuery. Синтаксис. Событие готовности документа. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/jquery/jquery_syntax.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jquery.php'; ?>
<?php include '../include/before_content_jquery.php'; ?>

  <article>
    <h1>jQuery <span class='color_h1'>Синтаксис</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='jquery_get_started.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='jquery_selectors.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>С помощью jQuery вы выбираете (запрашиваете) элементы HTML и выполняете &quot;действия&quot; на них.</p>
    <hr>

    <h2>jQuery Синтаксис</h2>
    <p>Синтаксис jQuery адаптирован для <b>выбора</b> элементов HTML и выполнения некоторых <b>действий</b> с элементом(ами).</p>
    <p>Базовый синтаксис: <b>$(<i>selector</i>).<i>action</i>()</b></p>
    <ul>
      <li>Символ $ для определения/доступа к jQuery</li>
      <li>(<i>selector</i>) для &quot;запроса (или поиска)&quot; HTML элементов</li>
      <li>jQuery <i>action</i>() выполняемый над элементом(ами)</li>
    </ul>
    <p>Примеры:</p>
    <p><code class='w3-codespan'>$(this).hide()</code> - скрывает текущий элемент.</p>
    <p><code class='w3-codespan'>$(&quot;p&quot;).hide()</code> - скрывает все &lt;p&gt; элементы.</p>
    <p><code class='w3-codespan'>$(&quot;.test&quot;).hide()</code> - скрывает все элементы с class=&quot;test&quot;.</p>
    <p><code class='w3-codespan'>$(&quot;#test&quot;).hide()</code> - скрывает элемент с id=&quot;test&quot;.</p>


    <div class='w3-panel w3-note'>
      <p><b>Вы знакомы с селекторами CSS?</b><br><br>
        jQuery использует синтаксис CSS для выбора элементов. Вы узнаете больше о синтаксисе селектора в следующей главе этого учебника.</p>
      <p><b>Совет:</b> Если вы не знаете CSS, вы можете изучить <a href='../css/index.php'>CSS Учебник</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>

    <h2>Событие готовности документа</h2>
    <p>Вы могли заметить, что все методы jQuery в наших примерах находятся внутри события готовности документа:</p>
    <div class='w3-code w3-border notranslate jsHigh'>
      <div>
        $(document).ready(function(){<br>
        <br>&nbsp; <i>// jQuery методы идут здесь...</i><br><br>
        });
      </div>
    </div>
    <p>Это сделано для предотвращения запуска любого кода jQuery до того, как документ будет загружен (готов).</p>
    <p>Перед работой с ним рекомендуется дождаться полной загрузки и готовности документа. Это также позволяет размещать код JavaScript перед body документа в разделе head.</p>
    <p>Вот несколько примеров действий, которые могут завершиться ошибкой, если методы запускаются до полной загрузки документа:</p>
    <ul>
      <li>Попытка скрыть ещё не созданный элемент</li>
      <li>Попытка получить размер изображения, которое ещё не загружено</li>
    </ul>
    <p><b>Примечание:</b> Команда jQuery также создала ещё более короткий метод для события готовности документа:</p>
    <div class='w3-code w3-border notranslate jsHigh'>
      <div>
        $(function(){<br>
        <br>&nbsp; <i>// jQuery методы идут здесь...</i><br><br>
        });
      </div>
    </div>
    <p>Используйте тот синтаксис, который вам больше нравится. Мы думаем, что событие готовности документа легче понять при чтении кода.</p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='jquery_get_started.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='jquery_selectors.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>