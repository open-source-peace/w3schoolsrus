<?php include '../include/head_cpp.php'; ?>

<title>C++ Справочники. <?php include '../include/title.php'; ?></title>
<meta name='description' content='C++ Справочники. Создание справочников. Уроки для начинающих. W3Schools на русском'>
    <link rel='canonical' href='https://w3schoolsrus.github.io/cpp/cpp_references.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cpp.php'; ?>
<?php include '../include/before_content_cpp.php'; ?>

  <article>
      <h1>C++ <span class='color_h1'>Ссылки</span></h1>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='cpp_arrays_omit.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='cpp_references_memory.php'>Next &#10095;</a>
      </div>
      <hr>

      <h2>Создание ссылок</h2>
      <p>Ссылочная переменная - это &quot;ссылка&quot; на существующую переменную, и она создается с помощью оператора <code class='w3-codespan'>&amp;</code>:</p>
      <div class='w3-example'>
          <div class='w3-code notranslate javaHigh'>
              string food = &quot;Pizza&quot;;&nbsp; // переменная food<br>string &amp;meal = food;&nbsp;&nbsp;&nbsp;
              // ссылка на food<br>
          </div>
      </div>

      <p>Теперь мы можем использовать либо имя переменной <code class='w3-codespan'>food</code>, либо ссылочное имя <code class='w3-codespan'>meal</code> для ссылки на <code class='w3-codespan'>food</code> переменную:</p>

      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate javaHigh'>
              string food = &quot;Pizza&quot;;<br>string &amp;meal = food;<br><br>
              cout &lt;&lt; food &lt;&lt; &quot;\n&quot;;&nbsp;
              // Выведет Pizza<br>cout &lt;&lt; meal &lt;&lt; &quot;\n&quot;;&nbsp; // Выведет Pizza<br>
          </div>
          <a target='_blank' class='w3-btn w3-margin-bottom' href='trycpp.html?filename=demo_reference'>Попробуйте сами &raquo;</a>
      </div>
      <hr>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='cpp_arrays_omit.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='cpp_references_memory.php'>Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar_cpp.php'; ?>
<?php include '../include/footer.php'; ?>