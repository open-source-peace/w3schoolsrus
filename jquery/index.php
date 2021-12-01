<?php include '../include/head.php'; ?>

  <title>jQuery Учебник. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Учебник по jQuery. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/jquery/index.html' />
  <link rel='stylesheet' href='../styles/bigbtn.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jquery.php'; ?>
<?php include '../include/before_content_jquery.php'; ?>

  <article>
    <h1>jQuery <span class='color_h1'>Учебник</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='index.php' title='Главная'>&#10094; Home</a>
      <a class='w3-right w3-btn' href='jquery_intro.php' title='Следующая страница'>Next &#10095;</a>
    </div>

    <div class='w3-panel w3-info intro'>
      <p><strong>jQuery</strong> - это JavaScript библиотека.</p>
      <p><strong>jQuery</strong> - значительно упрощает программирование на JavaScript.</p>
      <p><strong>jQuery</strong> - легко изучить.</p>
      <a class='w3-btn w3-margin-bottom shadow-black-1'  href='jquery_intro.php'>Начать изучение jQuery немедленно &raquo;</a>
    </div>
    <hr>

    <h2>Примеры в каждом разделе</h2>
    <p>С помощью нашего онлайн-редактора вы можете редактировать код и нажимать кнопку, чтобы просмотреть результат.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        $(document).ready(function(){<br>
        &nbsp; $(&quot;p&quot;).click(function(){<br>
        &nbsp;&nbsp;&nbsp; $(this).hide();<br>
        &nbsp;&nbsp;});<br>
        });
      </div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href='../jquerytryit/tryjquery_hide.html'>Попробуйте сами &raquo;</a></div>
    <p><b>Кликните на кнопку &quot;Попробуйте сами&quot; чтобы увидеть, как она работает.</b></p>
    <hr>

    <h2>jQuery Упражнения</h2>
    <form autocomplete='off' id='w3-exerciseform' action='https://www.w3schools.com/jquery/exercise_jq.asp?filename=exercise_jq_selectors1' method='post' target='_blank'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
      <div class='exercisewindow'>
        <h2>Упражнение:</h2>
        <p>Используйте корректный <strong>селектор</strong> чтобы скрыть все &lt;p&gt; элементы.</p>
        <div class='exerciseprecontainer'>
<pre style='background-color:transparent;border:none;'>
$("<input name='ex1' maxlength='1' style='width: 17px;'>").hide();
</pre>
        </div>
        <br>
        <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
      </div>
    </form>
    <hr>

    <h2>jQuery Примеры</h2>
    <p>Учитесь на примерах! В W3Schools вы найдете множество примеров jQuery для редактирования и тестирования.</p>
    <a href='jquery_examples.php' class='w3-button w3-light-grey'>Смотреть все jQuery примеры</a>
    <hr><h2>jQuery Проверочная викторина</h2>
    <p>Проверьте свои навыки jQuery в W3Schools!</p>
    <a href='jquery_quiz.php' class='w3-button w3-blue shadow-black-1'>Начать jQuery Викторину!</a>
    <hr>

    <h2>jQuery Справочники</h2>
    <p>На W3Schools вы найдете полный справочник по всем селекторам, методам, свойствам и событиям jQuery.</p>
    <a href='jquery_ref_overview.php'>jQuery Справочник</a><br>
    <hr>

    <h2>Сдайте jQuery Экзамен - Получите свой Диплом!</h2>
    <?php include '../include/footer_cert.php'; ?>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='index.php' title='Главная'>&#10094; Home</a>
      <a class='w3-right w3-btn' href='jquery_intro.php' title='Следующая страница'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>