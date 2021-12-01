<?php include '../include/head.php'; ?>

  <title>jQuery Эффекты. Затухание (исчезновение/появление). <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Учебник по jQuery. Эффекты затухания (исчезновение - появление). Методы: fadeIn(), fadeOut(), fadeToggle(), fadeTo(). <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/jquery/jquery_fade.html' />
  <script src="../cdn/jquery/3.5.1/jquery.min.js"></script>
  <script>
      $(document).ready(function(){
          $(".flip").click(function(){
              $(".panel").fadeToggle(1000);
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
    <h1>jQuery Эффекты - <span class="color_h1">Затухание (исчезновение/появление)</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='jquery_hide_show.php' title='Предыдущая страница'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='jquery_slide.php' title='Следующая страница'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>С помощью jQuery вы можете сделать элементы затухающими в зоне и вне зоны видимости.</p>
    <p class='flip'>Нажмите для появления/исчезновения панели</p>
    <div class='panel'>
      <p>Поскольку время ценно, мы быстро и легко обучаемся.</p>
      <p>В W3Schools вы можете изучить все, что вам нужно, в доступном и удобном формате.</p>
    </div>
    <hr>

    <h2>Примеры</h2>
    <p><a target='_blank' href="tryit.html?filename=tryjquery_fadein">jQuery fadeIn()</a><br>
    Демонстрирует метод jQuery fadeIn().</p>

    <p><a target='_blank' href="tryit.html?filename=tryjquery_fadeout">jQuery fadeOut()</a><br>
    Демонстрирует метод jQuery fadeOut().</p>

    <p><a target='_blank' href="tryit.html?filename=tryjquery_fadetoggle">jQuery
        fadeToggle()</a><br>
    Демонстрирует метод jQuery fadeToggle().</p>

    <p><a target='_blank' href="tryit.html?filename=tryjquery_fadeto">jQuery fadeTo()</a><br>
    Демонстрирует метод jQuery fadeTo().</p>
    <hr>

    <h2>jQuery Методы затухания</h2>
    <p>С помощью jQuery вы можете сделать затухающий элемент видимым и скрытым.</p>
    <p>jQuery имеет следующие методы затухания:</p>
    <ul>
      <li><code class='w3-codespan'>fadeIn()</code></li>
      <li><code class='w3-codespan'>fadeOut()</code></li>
      <li><code class='w3-codespan'>fadeToggle()</code></li>
      <li><code class='w3-codespan'>fadeTo()</code></li>
    </ul>
    <hr>

    <h2>Метод jQuery fadeIn()</h2>
    <p>Метод jQuery <code class='w3-codespan'>fadeIn()</code> используется для исчезновения скрываемого элемента.</p>
    <p><b>Синтаксис:</b></p>
    <div class="w3-code w3-border notranslate jsHigh"><div>
        $(<i>selector</i>).fadeIn(<i>speed,callback</i>);</div></div>
    <p>Необязательный параметр скорости (<i>speed</i>) определяет продолжительность эффекта. Может принимать следующие значения: &quot;slow&quot; (медленно), &quot;fast&quot; (быстро) или миллисекунды.</p>
    <p>Необязательный параметр обратного вызова (<i>callback</i>) - это функция, которая будет выполняться после завершения затухания.</p>
    <p>В следующем примере демонстрируется метод <code class='w3-codespan'>fadeIn()</code> с разными параметрами:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;button&quot;).click(function(){<br>
        &nbsp;&nbsp;$(&quot;#div1&quot;).fadeIn();<br>
        &nbsp;&nbsp;$(&quot;#div2&quot;).fadeIn(&quot;slow&quot;);<br>
        &nbsp;&nbsp;$(&quot;#div3&quot;).fadeIn(3000);<br>
        });</div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href="tryit.html?filename=tryjquery_fadein">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    
    <h2>Метод jQuery fadeOut()</h2>
    <p>Метод jQuery <code class='w3-codespan'>fadeOut()</code> используется для исчезновения видимого элемента.</p>
    <p><b>Синтаксис:</b></p>
    <div class='w3-code w3-border notranslate'><div>
        $(<i>selector</i>).fadeOut(<i>speed,callback</i>);</div></div>
    <p>Необязательный параметр скорости определяет продолжительность эффекта. Может принимать следующие значения: &quot;slow&quot; (медленно), &quot;fast&quot; (быстро) или миллисекунды.</p>
    <p>Необязательный параметр обратного вызова - это функция, которая будет выполняться после завершения затухания.</p>
    <p>В следующем примере демонстрируется метод <code class='w3-codespan'>fadeOut()</code> с разными параметрами:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;button&quot;).click(function(){<br>
        &nbsp; $(&quot;#div1&quot;).fadeOut();<br>
        &nbsp;&nbsp;$(&quot;#div2&quot;).fadeOut(&quot;slow&quot;);<br>
        &nbsp;&nbsp;$(&quot;#div3&quot;).fadeOut(3000);<br>
        });</div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href="tryit.html?filename=tryjquery_fadeout">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод jQuery fadeToggle()</h2>
    <p>Метод jQuery <code class='w3-codespan'>fadeToggle()</code> переключает между методами <code class='w3-codespan'>fadeIn()</code> и <code class='w3-codespan'>fadeOut()</code>.</p>
    <p>Если элементы затухают, <code class='w3-codespan'>fadeToggle()</code> сделает затухание постепенным.</p>
    <p>Если элементы появляются, <code class='w3-codespan'>fadeToggle()</code> сделает появление постепенным.</p>
    <p><b>Синтаксис:</b></p>
    <div class='w3-code w3-border notranslate'><div>
        $(<i>selector</i>).fadeToggle(<i>speed,callback</i>);</div></div>
    <p>Необязательный параметр скорости определяет продолжительность эффекта. Может принимать следующие значения: &quot;slow&quot; (медленно), &quot;fast&quot; (быстро) или миллисекунды.</p>
    <p>Необязательный параметр обратного вызова - это функция, которая будет выполняться после завершения затухания.</p>
    <p>В следующем примере демонстрируется метод <code class='w3-codespan'>fadeToggle()</code> с разными параметрами:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;button&quot;).click(function(){<br>
        &nbsp; $(&quot;#div1&quot;).fadeToggle();<br>
        &nbsp; $(&quot;#div2&quot;).fadeToggle(&quot;slow&quot;);<br>
        &nbsp; $(&quot;#div3&quot;).fadeToggle(3000);<br>
        });</div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href="tryit.html?filename=tryjquery_fadetoggle">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод jQuery fadeTo()</h2>
    <p>Метод jQuery <code class='w3-codespan'>fadeTo()</code> позволяет плавно переходить к заданной непрозрачности (значение от 0 до 1).</p>
    <p><b>Синтаксис:</b></p>
    <div class="w3-code w3-border notranslate jsHigh"><div>
        $(<i>selector</i>).fadeTo(<i>speed,opacity,callback</i>);</div></div>
    <p>Обязательный параметр скорости (speed) определяет продолжительность эффекта. Может принимать следующие значения: &quot;slow&quot; (медленно), &quot;fast&quot; (быстро) или миллисекунды.</p>
    <p>Обязательный параметр непрозрачности (opacity) в методе <code class='w3-codespan'>fadeTo()</code> указывает переход к заданной непрозрачности (значение от 0 до 1).</p>
    <p>Необязательный параметр обратного вызова (callback) - это функция, которая будет выполняться после завершения функции.</p>
    <p>В следующем примере демонстрируется метод <code class='w3-codespan'>fadeTo()</code> с разными параметрами:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(&quot;button&quot;).click(function(){<br>
        &nbsp;&nbsp;$(&quot;#div1&quot;).fadeTo(&quot;slow&quot;, 0.15);<br>
        &nbsp;&nbsp;$(&quot;#div2&quot;).fadeTo(&quot;slow&quot;, 0.4);<br>
        &nbsp; $(&quot;#div3&quot;).fadeTo(&quot;slow&quot;, 0.7);<br>
        });</div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href="tryit.html?filename=tryjquery_fadeto">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>jQuery Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/jquery/exercise_jq.asp?filename=exercise_jq_fade1" method="post" target='_blank'>
      <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
      <div class="exercisewindow">
        <h2>Упражнение:</h2>
        <p>Используйте метод jQuery, чтобы элемент &lt;div&gt; стал <strong>затухающим</strong>.</p>
        <div class="exerciseprecontainer">
<pre style="background-color:transparent;border:none;">
$("div").<input name="ex1" maxlength="7" style="width: 74px;">();
</pre>
        </div>
        <br>
        <button type="submit" class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
      </div>
    </form>
    <hr>

    <h2>Справочник jQuery эффектов</h2>
    <p>Чтобы получить полный обзор всех эффектов jQuery, перейдите на <a href="jquery_ref_effects.php">
        Справочник jQuery эффектов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='jquery_hide_show.php' title='Предыдущая страница'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='jquery_slide.php' title='Следующая страница'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>