<?php include '../include/head.php'; ?>

  <title>jQuery Эффекты. Скрыть/Показать. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Учебник по jQuery. Эффект Скрыть/Показать. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/jquery/jquery_hide_show.html' />
  <script src="../cdn/jquery/3.5.1/jquery.min.js"></script>
  <script>
      $(document).ready(function(){
          $(".flip").click(function(){
              $(".panel").toggle();
          });
      });
  </script>
  <style>
      div.panel,p.flip {line-height: 30px;margin:auto;font-size:16px;padding:5px;text-align:center;background:#555;border:solid 1px #666;color:#ffffff;border-radius:3px;user-select:none}
      div.panel {display:none;}
      p.flip {cursor:pointer;}
  </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jquery.php'; ?>
<?php include '../include/before_content_jquery.php'; ?>

  <article>
    <h1>jQuery Эффекты - <span class="color_h1">Скрыть и Показать</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='jquery_events.php' title='Предыдущая страница'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='jquery_fade.php' title='Следующая страница'>Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Скрыть, показать, переключить, сдвинуть, исчезнуть и анимировать. ВОТ ЭТО ДА!</p>
    <p class="flip">Кликните, чтобы показать/скрыть панель</p>
    <div class="panel">
      <p>Поскольку время ценно, мы быстро и легко обучаемся.</p>
      <p>В W3Schools вы можете изучить все, что вам нужно, в доступном и удобном формате.</p>
    </div>
    <hr>

    <h2>Примеры</h2>
    <p><a target='_blank' href="tryit.html?filename=tryjquery_hide">jQuery hide()</a><br>
      Демонстрирует простой метод jQuery hide().</p>
    <p><a target='_blank' href="tryit.html?filename=tryjquery_hide_explanations">jQuery hide()</a><br>
      Еще одна демонстрация hide(). Как скрыть части текста.</p>
    <hr>

    <h2>jQuery hide() и show()</h2>
    <p>С помощью jQuery вы можете скрывать и отображать элементы HTML с помощью методов <code class='w3-codespan'>hide()</code> и <code class='w3-codespan'>show()</code>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate jsHigh">
        $(&quot;#hide&quot;).click(function(){<br>
        &nbsp;&nbsp;$(&quot;p&quot;).hide();<br>
        });<br>
        <br>
        $(&quot;#show&quot;).click(function(){<br>
        &nbsp;&nbsp;$(&quot;p&quot;).show();<br>
        });</div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="tryit.html?filename=tryjquery_hide_show">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Синтаксис:</b></p>
    <div class="w3-code w3-border notranslate jsHigh"><div>
        $(<i>selector</i>).hide(<i>speed,callback</i>);<br>
        <br>
        $(<i>selector</i>).show(<i>speed,callback</i>);
      </div></div>
    <p>Необязательный параметр скорости указывает скорость скрытия / отображения и может принимать следующие значения: &quot;slow&quot; (медленно), &quot;fast&quot; (быстро), или миллисекунды.</p>
    <p>Необязательный параметр обратного вызова - это функция, которая должна выполняться после завершения метода <code class='w3-codespan'>hide()</code> или <code class='w3-codespan'>show()</code> method completes  (вы узнаете больше о функциях обратного вызова в следующей главе).</p>
    <p>В следующем примере демонстрируется параметр скорости с <code class='w3-codespan'>hide()</code>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate jsHigh">
        $(&quot;button&quot;).click(function(){<br>
        &nbsp; $(&quot;p&quot;).hide(1000);<br>
        });</div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="tryit.html?filename=tryjquery_hide_slow">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>jQuery метод toggle()</h2>
    <p>Вы также можете переключаться между скрытием и отображением элемента с помощью метода <code class='w3-codespan'>toggle()</code>.</p>
    <p>Показанные элементы скрыты, а скрытые элементы показаны:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate jsHigh">
        $(&quot;button&quot;).click(function(){<br>
        &nbsp; $(&quot;p&quot;).toggle();<br>
        });</div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="tryit.html?filename=tryjquery_toggle">Попробуйте сами &raquo;</a>
    </div>

    <p><b>Синтаксис:</b></p>
    <div class="w3-code w3-border notranslate jsHigh"><div>
        $(<i>selector</i>).toggle(<i>speed,callback</i>);
      </div></div>
    <p>Необязательный параметр скорости может принимать следующие значения: &quot;slow&quot; (медленно), &quot;fast&quot; (быстро) или миллисекунды.</p>
    <p>Необязательный параметр обратного вызова - это функция, которая должна выполняться после завершения <code class='w3-codespan'>toggle()</code>.</p>
    <hr>

    <h2>jQuery Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/jquery/exercise_jq.asp?filename=exercise_jq_hide_show1" method="post" target='_blank'>
      <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
      <div class="exercisewindow">
        <h2>Упражнение:</h2>
        <p>Используйте метод jQuery, чтобы <strong>скрыть</strong> элемент &lt;p&gt; при клике на него.</p>
        <div class="exerciseprecontainer">
<pre style="background-color:transparent;border:none;">

$("p").click(function(){
  $(this).<input name="ex1" maxlength="4" style="width: 45px;">();
});
</pre>
        </div>
        <br>
        <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
      </div>
    </form>
    <hr>

    <h2>jQuery Справочник эффектов</h2>
    <p>Чтобы получить полный обзор всех эффектов jQuery, перейдите на <a href='jquery_ref_effects.php'>jQuery Справочник эффектов</a> на нашем сайте W3Schools.</p>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='jquery_events.php' title='Предыдущая страница'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='jquery_fade.php' title='Следующая страница'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>