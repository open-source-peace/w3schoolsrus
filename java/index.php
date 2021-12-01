<?php include '../include/head_java.php'; ?>

<title>Java Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Java Учебник. Где применяется язык программирования Java? <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/bigbtn.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_java.php'; ?>
<?php include '../include/before_content_java.php'; ?>

  <article>
      <h1>Java <span class='color_h1'>Учебник</span></h1>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
          <a class='w3-right w3-btn' href='java_intro.php'>Next &#10095;</a>
      </div>

      <div class='w3-panel w3-info intro'>
          <p><strong>Java</strong> - это язык программирования.</p>
          <p><strong>Java</strong> используется для разработки мобильных приложений, веб-приложений, настольных приложений, игр и многого другого.</p>
          <a class='w3-btn w3-margin-bottom shadow-black-1' href='java_intro.php'>Начать изучение Java немедленно &raquo;</a>
      </div>
      <hr>

      <h2>Примеры в каждой главе</h2>
      <p>Наш редактор <b>&quot;Попробуйте сами&quot;</b> упрощает изучение Java. Вы можете редактировать Java-код и сразу просматривать результат в своем браузере.</p>

      <div class='w3-example'>
          <h3>Пример</h3>
          <pre class='language-java w3-white'><code>public class Main {
  public static void main(String[] args) {
    System.out.println(&quot;Hello World&quot;);
  }
}
</code></pre>
          <p>
              <a target='_blank' class='w3-btn' href='tryjava.html?filename=demo_helloworld'>Попробуйте сами &raquo;</a>
          </p>
      </div>

      <p>В редакторе кликните на кнопку <b>&quot;Выполнить пример&quot;</b> чтобы посмотреть, как она работает.</p>
      <div class='w3-panel w3-note'>
          <p>Мы рекомендуем изучать темы этого учебника в последовательности, указанной в левом меню (или открыв меню бургер, если вы пользуетесь мобильными гаджетами).</p>
          <p><strong>Java</strong> - объектно-ориентированный язык, и некоторые концепции могут быть новыми. Делайте перерывы, когда это необходимо, и просматривайте примеры столько раз, сколько необходимо.</p>
      </div>
      <?php include '../include/addown_content.php'; ?>

      <div>
          <h2>Java Упражнения</h2>
          <form autocomplete='off' spellcheck='false' id='w3-exerciseform' action='https://www.w3schools.com/java/exercise.asp?filename=exercise_syntax1' method='post' target='_blank'>
              <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
              <div class='exercisewindow'>
                  <h2>Упражнение:</h2>
                  <p>Вставьте недостающую часть кода ниже, чтобы вывести "Hello World".</p>
                  <div class='exerciseprecontainer'>
<pre class='language-java' style='overflow: auto;'><code>public class MyClass {
  public static void main(String[] args) {</code>
    <input name='ex1' maxlength='6' style='width: 65px;'>.<input name='ex2' maxlength='3' style='width: 35px;'>.<input name='ex3' maxlength='7' style='width: 75px;'><code>("Hello World");
  }
}
</code></pre>
                  </div>
                  <br>
                  <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
              </div>
          </form>
          <hr>
      </div>

      <h2>Учиться на примерах</h2>
      <p>Учитесь на примерах! Этот учебник дополняет все пояснения поясняющими примерами.</p>
      <p><a href='java_examples.php' class='w3-button w3-light-grey'>Смотреть все Java Примеры</a></p>
      <hr>

      <h2>Java Викторина</h2>
      <p>Проверьте ваши Java скилы с помощью викторины.</p>
      <p><a href='java_quiz.php' class='w3-button w3-blue shadow-black-1'>Начать Java Викторину</a></p>
      <hr>

      <h2>Java Справочник</h2>
      <a class='bigbtn' href='java_ref_keywords.php'>Java Ключевые слова</a>
      <a class='bigbtn' href='java_ref_string.php'>Java Строковые методы</a>
      <a class='bigbtn' href='java_ref_math.php'>Java Математические методы</a>
      <hr>

      <h2>Скачать Java</h2>
      <p><strong>Скачать Java</strong> можно из официального сайта Java: <a href='https://www.oracle.com/technetwork/java/javase/overview/index.html' target='_blank' rel='nofollow'>https://www.oracle.com</a></p>
      <hr>
      <h2>Сдайте Java экзамен - получите свой Диплом!</h2>
      <?php include '../include/footer_cert.php'; ?>
      <hr>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
          <a class='w3-right w3-btn' href='java_intro.php'>Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>