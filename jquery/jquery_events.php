<?php include '../include/head.php'; ?>

  <title>jQuery Учебник. События. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Учебник по jQuery. Методы событий. Что такое события? Синтаксис jQuery для методов событий. Часто используемые методы событий jQuery. Примеры. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/jquery/jquery_events.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jquery.php'; ?>
<?php include '../include/before_content_jquery.php'; ?>

  <article>
    <h1>jQuery <span class='color_h1'>Методы событий</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='jquery_selectors.php' title="Предыдущая страница">&#10094; Prev</a>
      <a class='w3-right w3-btn' href='jquery_hide_show.php' title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>jQuery адаптирован для реагирования на <strong>события</strong> на HTML-странице.</p>
    <hr>

    <h2>Что такое события?</h2>
    <p>Все действия посетителей, на которые может реагировать веб-страница, называются <strong>событиями</strong>.</p>
    <p>Событие представляет собой точный момент, когда что-то происходит.</p>
    <p>Пример:</p>
    <ul>
      <li>перемещение курсора мыши над элементом</li>
      <li>выбор радиокнопки</li>
      <li>нажатие на элемент</li>
    </ul>
    <p>Термин <b>&quot;fires/fired&quot;</b> (срабатывает) часто используется с событиями. Пример: &quot;Событие нажатия клавиши запускается в тот момент, когда вы нажимаете клавишу&quot;.</p>
    <p>Вот некоторые общие события DOM:</p>
    <div class='w3-responsive'>
      <table class='w3-table-all notranslate'>
        <tr>
          <th style='width:23%'>События мыши</th>
          <th style='width:25%'>События клавиатуры</th>
          <th style='width:22%'>События формы</th>
          <th>События документа/окна</th>
        </tr>
        <tr>
          <td>click</td>
          <td>keypress</td>
          <td>submit</td>
          <td>load</td>
        </tr>
        <tr>
          <td>dblclick</td>
          <td>keydown</td>
          <td>change</td>
          <td>resize</td>
        </tr>
        <tr>
          <td>mouseenter</td>
          <td>keyup</td>
          <td>focus</td>
          <td>scroll</td>
        </tr>
        <tr>
          <td>mouseleave</td>
          <td>&nbsp;</td>
          <td>blur</td>
          <td>unload</td>
        </tr>
      </table>
    </div>
    <hr>

    <h2>Синтаксис jQuery для методов событий</h2>
    <p>В jQuery у большинства событий DOM есть эквивалентный метод jQuery.</p>
    <p>Чтобы назначить событие клика для всех параграфов на странице, вы можете сделать это:</p>
    <div class='w3-code w3-border notranslate jsHigh'>
      <div>
        $(&quot;p&quot;).click();
      </div>
    </div>
    <p>Следующим шагом является определение того, что должно произойти при возникновении события. Вы должны передать функцию событию:</p>
    <div class='w3-code w3-border notranslate jsHigh'>
      <div>
        $(&quot;p&quot;).click(function(){<br>
        &nbsp; // действие идёт здесь!!<br>
        });
      </div>
    </div>
    <hr>

    <h2>Часто используемые методы событий jQuery</h2>
    <h3>Метод <b>$(document).ready()</b></h3>
    <p>Метод <code class='w3-codespan'>$(document).ready()</code> позволяет нам выполнять функцию, когда документ полностью загружен. Это событие уже объяснялось в разделе <a href="jquery_syntax.php">jQuery Синтаксис</a>.</p>
    <h3>Метод <b>click()</b></h3>
    <p>Метод <code class='w3-codespan'>click()</code> присоединяет функцию обработчика событий к элементу HTML.</p>
    <p>Функция выполняется, когда пользователь нажимает на элемент HTML.</p>
    <p>В следующем примере говорится: Когда событие клика возникает на элементе <code class='w3-codespan'>&lt;p&gt;</code>; скрыть текущий элемент <code class='w3-codespan'>&lt;p&gt;</code>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;p&quot;).click(function(){<br>
        &nbsp;&nbsp;$(this).hide();<br>
        });
      </div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_click.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Метод <b>dblclick()</b></h3>
    <p>Метод <code class='w3-codespan'>dblclick()</code> присоединяет функцию обработчика событий к элементу HTML.</p>
    <p>Функция выполняется, когда пользователь дважды кликает элемент HTML:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;p&quot;).dblclick(function(){<br>
        &nbsp; $(this).hide();<br>
        });
      </div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_dblclick.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Метод <b>mouseenter()</b></h3>
    <p>Метод <code class='w3-codespan'>mouseenter()</code> присоединяет функцию обработчика событий к элементу HTML.</p>
    <p>Функция выполняется, когда указатель мыши наводится на HTML-элемент:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;#p1&quot;).mouseenter(function(){<br>
        &nbsp; alert(&quot;Вы вошли в p1!&quot;);<br>
        });
      </div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_mouseenter.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Метод <b>mouseleave()</b></h3>
    <p>Метод <code class='w3-codespan'>mouseleave()</code> присоединяет функцию обработчика событий к элементу HTML.</p>
    <p>Функция выполняется, когда указатель мыши покидает HTML-элемент:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;#p1&quot;).mouseleave(function(){<br>
        &nbsp; alert(&quot;До свидания! Теперь ты покидаешь p1!&quot;);<br>
        });
      </div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_mouseleave.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Метод <b>mousedown()</b></h3>
    <p>Метод <code class='w3-codespan'>mousedown()</code> присоединяет функцию обработчика событий к элементу HTML.</p>
    <p>Функция выполняется, когда левая, средняя или правая кнопка мыши нажата, когда мышь находится над HTML-элементом:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;#p1&quot;).mousedown(function(){<br>
        &nbsp;&nbsp;alert(&quot;Наведите указатель мыши на p1!&quot;);<br>
        });
      </div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_mousedown.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Метод <b>mouseup()</b></h3>
    <p>Метод <code class='w3-codespan'>mouseup()</code> присоединяет функцию обработчика событий к элементу HTML.</p>
    <p>Функция выполняется, когда левая, средняя или правая кнопка мыши отпущена, когда мышь находится над HTML-элементом:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;#p1&quot;).mouseup(function(){<br>
        &nbsp; alert(&quot;Наведите указатель мыши на p1!&quot;);<br>
        });
      </div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_mouseup.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Метод <b>hover()</b></h3>
    <p>Метод <code class='w3-codespan'>hover()</code> принимает две функции и представляет собой комбинацию методов <code class='w3-codespan'>mouseenter()</code> и <code class='w3-codespan'>mouseleave()</code>.</p>
    <p>Первая функция выполняется, когда мышь заходит на элемент HTML, а вторая функция выполняется, когда мышь покидает элемент HTML:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;#p1&quot;).hover(function(){<br>
        &nbsp;&nbsp;alert(&quot;Вы вошли в p1!&quot;);<br>
        },<br>
        function(){<br>
        &nbsp;&nbsp;alert(&quot;До свидания! Теперь ты покидаешь p1!&quot;);<br>
        });
      </div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_hover.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Метод <b>focus()</b></h3>
    <p>Метод <code class='w3-codespan'>focus()</code> присоединяет функцию обработчика событий к полю HTML-формы.</p>
    <p>Функция выполняется, когда поле формы получает фокус:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;input&quot;).focus(function(){<br>
        &nbsp;&nbsp;$(this).css(&quot;background-color&quot;, &quot;#cccccc&quot;);<br>
        });
      </div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_focus_blur.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Метод <b>blur()</b></h3>
    <p>Метод <code class='w3-codespan'>blur()</code> присоединяет функцию обработчика событий к полю HTML-формы.</p>
    <p>Функция выполняется, когда поле формы теряет фокус:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;input&quot;).blur(function(){<br>
        &nbsp;&nbsp;$(this).css(&quot;background-color&quot;, &quot;#ffffff&quot;);<br>
        });
      </div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_focus_blur.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h3>Метод <b>on()</b></h3>
    <p>Метод <code class='w3-codespan'>on()</code> подключает один или несколько обработчиков событий для выбранных элементов.</p>
    <p>Присоедините событие клика к элементу <code class='w3-codespan'>&lt;p&gt;</code>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;p&quot;).on(&quot;click&quot;, function(){<br>&nbsp; $(this).hide();<br>});</div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_on_click.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Присоедините несколько обработчиков событий к элементу <code class='w3-codespan'>&lt;p&gt;</code>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;p&quot;).on({<br>&nbsp; mouseenter: function(){<br>&nbsp;&nbsp;&nbsp;&nbsp;$(this).css(&quot;background-color&quot;, &quot;lightgray&quot;);<br>&nbsp;&nbsp;}, <br>
        &nbsp; mouseleave: function(){<br>&nbsp;&nbsp;&nbsp; $(this).css(&quot;background-color&quot;, &quot;lightblue&quot;);<br>&nbsp;&nbsp;}, <br>&nbsp;&nbsp;click: function(){<br>&nbsp;&nbsp;&nbsp; $(this).css(&quot;background-color&quot;, &quot;yellow&quot;);<br>
        &nbsp;&nbsp;} <br>});</div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_on_multiple.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>jQuery Упражнения</h2>
    <form autocomplete='off' id='w3-exerciseform' action='https://www.w3schools.com/jquery/exercise_jq.asp?filename=exercise_jq_events1' method='post' target='_blank'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
      <div class='exercisewindow'>
        <h2>Упражнение:</h2>
          <p>Используйте корректное <strong>событие</strong> чтобы скрыть все <code class='w3-codespan'>&lt;p&gt;</code> элементы с помощью "click".</p>
        <div class='exerciseprecontainer'>
<pre style='background-color:transparent;border:none;'>
$("p").<input name="ex1" maxlength="5" style="width: 55px;">(function(){
  $(this).hide();
});
</pre>
        </div>
        <br>
        <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
      </div>
    </form>
    <hr>

    <h2>jQuery Методы событий</h2>
    <p>Для получения более полной информации о jQuery событии, перейдите на <a href='jquery_ref_events.php'>jQuery Справочник событий</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='jquery_selectors.php' title="Предыдущая страница">&#10094; Prev</a>
      <a class='w3-right w3-btn' href='jquery_hide_show.php' title="Следующая страница">Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>