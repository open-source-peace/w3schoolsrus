<?php include '../include/head.php'; ?>

  <title>jQuery Учебник. Селекторы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Учебник по jQuery. Селекторы - элемента, #id, .class. Примеры. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/jquery/jquery_selectors.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jquery.php'; ?>
<?php include '../include/before_content_jquery.php'; ?>

  <article>
    <h1>jQuery <span class='color_h1'>Селекторы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='jquery_syntax.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='jquery_events.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'><strong>Селекторы jQuery</strong> - одна из самых важных частей библиотеки jQuery.</p>
    <hr>

    <h2>jQuery Селекторы</h2>
    <p>Селекторы jQuery позволяют выбирать элементы HTML и управлять ими.</p>
    <p>jQuery селекторы используются для &quot;поиска&quot; (или выбора) HTML элементов на основе их имени, id, классов, типов, атрибутов, значений атрибутов и многого другого. Они основаны на существующих <a href="../cssref/css_selectors.php">CSS селекторах</a>, и кроме того, имеют несколько собственных настраиваемых селекторов.</p>
    <p>Все селекторы в jQuery начинаются со знака доллара и скобок: $().</p>
    <hr>

    <h2>Селектор элемента</h2>
    <p>Селектор элементов jQuery выбирает элементы на основе имени элемента.</p>
    <p>Вы можете выбрать все элементы <code class='w3-codespan'>&lt;p&gt;</code> на странице, например так:</p>
    <div class="w3-code w3-border notranslate jsHigh">
      <div>
        $(&quot;p&quot;)
      </div>
    </div>
    <p><b>Пример</b></p>
    <p>Когда пользователь нажимает кнопку, все элементы <code class='w3-codespan'>&lt;p&gt;</code> будут скрыты:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(document).ready(function(){<br>
        &nbsp;&nbsp;$(&quot;button&quot;).click(function(){<br>
        &nbsp;&nbsp;&nbsp; $(&quot;p&quot;).hide();<br>
        &nbsp;&nbsp;});<br>
        });
      </div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_hide_p.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Селектор #id</h2>
      <p>jQuery селектор <code class='w3-codespan'>#<em>id</em></code> использует атрибут <code class='w3-codespan'>id</code> HTML тега для поиска конкретного элемента.</p>
    <p>Идентификатор (id) должен быть уникальным на странице, поэтому вы должны использовать селектор #id, когда хотите найти единственный уникальный элемент.</p>
    <p>Чтобы найти элемент с определенным идентификатором, напишите символ решетки, за которым следует идентификатор элемента HTML:</p>
    <div class="w3-code w3-border notranslate jsHigh">
      <div>
        $(&quot;#test&quot;)
      </div>
    </div>
    <p><b>Пример</b></p>
    <p>Когда пользователь нажимает кнопку, элемент с id=&quot;test&quot; будет скрыт:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(document).ready(function(){<br>
        &nbsp;&nbsp;$(&quot;button&quot;).click(function(){<br>
        &nbsp;&nbsp;&nbsp; $(&quot;#test&quot;).hide();<br>
        &nbsp; });<br>
        });
      </div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_hide_id.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Селектор .class</h2>
    <p>jQuery селектор <code class='w3-codespan'><em>.class</em></code> находит элементы с определенным классом.</p>
    <p>Чтобы найти элементы с определенным классом, напишите символ точки, за которым следует имя класса:</p>
    <div class="w3-code w3-border notranslate jsHigh">
      <div>
        $(&quot;.test&quot;)
      </div>
    </div>

    <p><b>Пример</b></p>
    <p>Когда пользователь нажимает кнопку, элементы с class=&quot;test&quot; будут скрыты:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(document).ready(function(){<br>
        &nbsp; $(&quot;button&quot;).click(function(){<br>
        &nbsp;&nbsp;&nbsp; $(&quot;.test&quot;).hide();<br>
        &nbsp;&nbsp;});<br>
        });
      </div>
      <a target='_blank' class="w3-btn w3-margin-bottom" href="../jquerytryit/tryjquery_hide_class.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Больше примеров jQuery селекторов</h2>
    <div class="w3-responsive">
      <table class="w3-table-all notranslate">
        <tr>
          <th style="width:25%">Синтаксис</th>
          <th style="width:65%">Описание</th>
          <th>Пример</th>
        </tr>
        <tr>
          <td>$(&quot;*&quot;)</td>
          <td>Выбирает все элементы</td>
          <td><a target='_blank' class="w3-btn" href="../jquerytryit/tryjquery_sel_all2.html">Попробуй это</a></td>
        </tr>
        <tr>
          <td>$(this)</td>
          <td>Выбирает текущий элемент HTML</td>
          <td><a target='_blank' class="w3-btn" href="../jquerytryit/tryjquery_sel_this.html">Попробуй это</a></td>
        </tr>
        <tr>
          <td>$(&quot;p.intro&quot;)</td>
          <td>Выбирает все &lt;p&gt; элементы с class=&quot;intro&quot;</td>
          <td><a target='_blank' class="w3-btn" href="../jquerytryit/tryjquery_sel_pclass.html">Попробуй это</a></td>
        </tr>
        <tr>
          <td>$(&quot;p:first&quot;)</td>
          <td>Выбирает первый &lt;p&gt; элемент</td>
          <td><a target='_blank' class="w3-btn" href="../jquerytryit/tryjquery_sel_pfirst.html">Попробуй это</a></td>
        </tr>
        <tr>
          <td>$(&quot;ul li:first&quot;)</td>
          <td>Выбирает первый элемент &lt;li&gt; из первого &lt;ul&gt;</td>
          <td><a target='_blank' class="w3-btn" href="../jquerytryit/tryjquery_sel_ullifirst.html">Попробуй это</a></td>
        </tr>
        <tr>
          <td>$(&quot;ul li:first-child&quot;)</td>
          <td>Выбирает первый элемент &lt;li&gt; из каждого &lt;ul&gt;</td>
          <td><a target='_blank' class="w3-btn" href="../jquerytryit/tryjquery_sel_ullifirstchild.html">Попробуй это</a></td>
        </tr>
        <tr>
          <td>$(&quot;[href]&quot;)</td>
          <td>Выбирает все элементы с атрибутом href</td>
          <td><a target='_blank' class="w3-btn" href="../jquerytryit/tryjquery_sel_hrefattr.html">Попробуй это</a></td>
        </tr>
        <tr>
          <td>$(&quot;a[target='_blank']&quot;)</td>
          <td>Выбирает все &lt;a&gt; элементы с атрибутом target со значением &quot;_blank&quot;</td>
          <td><a target='_blank' class="w3-btn" href="../jquerytryit/tryjquery_sel_hrefattrblank.html">Попробуй это</a></td>
        </tr>
        <tr>
          <td>$(&quot;a[target!='_blank']&quot;)</td>
          <td>Выбирает все &lt;a&gt; элементы с атрибутом target со значением НЕ &quot;_blank&quot;</td>
          <td><a target='_blank' class="w3-btn" href="../jquerytryit/tryjquery_sel_hrefattrnotblank.html">Попробуй это</a></td>
        </tr>
        <tr>
          <td>$(&quot;:button&quot;)</td>
          <td>Выбирает все &lt;button&gt; элементы и &lt;input&gt; элементы с type=&quot;button&quot;</td>
          <td><a target='_blank' class="w3-btn" href="../jquerytryit/tryjquery_sel_button2.html">Попробуй это</a></td>
        </tr>
        <tr>
          <td>$(&quot;tr:even&quot;)</td>
          <td>Выбирает все четные &lt;tr&gt; элементы</td>
          <td><a target='_blank' class="w3-btn" href="../jquerytryit/tryjquery_sel_even.html">Попробуй это</a></td>
        </tr>
        <tr>
          <td>$(&quot;tr:odd&quot;)</td>
          <td>Выбирает все нечетные &lt;tr&gt; элементы</td>
          <td><a target='_blank' class="w3-btn" href="../jquerytryit/tryjquery_sel_odd.html">Попробуй это</a></td>
        </tr>
      </table>
    </div>
    <p>Воспользуйтесь нашим <a target='_blank' href="https://www.w3schools.com/jquery/trysel.asp" rel="nofollow">Тестер селектора jQuery</a> чтобы продемонстрировать различные селекторы.</p>
    <p>Полный справочник по всем селекторам jQuery см. в <a href="jquery_ref_selectors.php">Справочник jQuery селекторов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>

    <h2>Функции в отдельном файле</h2>
    <p>Если ваш веб-сайт содержит много страниц и вы хотите, чтобы ваши функции jQuery было легко поддерживать, вы можете поместить свои функции jQuery в отдельный файл .js.</p>
      <p>Когда мы демонстрируем jQuery в этом учебнике, функции добавляются непосредственно в раздел <code class='w3-codespan'>&lt;head&gt;</code>. Однако иногда предпочтительнее поместить их в отдельный файл, например этот (используйте атрибут <code class='w3-codespan'>src</code> для ссылки на файл .js):</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;head&gt;<br>
        &lt;script
        src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js&quot;&gt;&lt;/script&gt;<br>
        <span class="marked">&lt;script src=&quot;my_jquery_functions.js&quot;&gt;&lt;/script&gt;</span><br>
        &lt;/head&gt;
      </div>
    </div>
      <p><b>Примечание.</b> Название файла функций с расширением .js можете придумать своё.</p>
    <hr>

    <h2>jQuery Примеры</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/jquery/exercise_jq.asp?filename=exercise_jq_selectors1" method="post" target='_blank'>
      <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
      <div class="exercisewindow">
        <h2>Упражнение:</h2>
        <p>Используйте корректный <strong>селектор</strong>, чтобы скрыть все <code class="w3-codespan">&lt;p&gt;</code> элементы.</p>
        <div class="exerciseprecontainer">
<pre style="background-color:transparent;border:none;">
$("<input name="ex1" maxlength="1" style="width: 17px;">").hide();
</pre>
        </div>
        <br>
        <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
      </div>
    </form>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='jquery_syntax.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='jquery_events.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>