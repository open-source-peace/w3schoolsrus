<?php include '../include/head.php'; ?>

<title>Git Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Git Учебник. Что такое Git и зачем он нужен? <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/prism_coy.css">
    <script src="../scripts/prism_coy.js"></script>
    <style>
        .pagemenu{
            float:right;
            margin-left:20px;
            padding:20px;
            background-color:#f1f1f1;
            font-size:90%;
            line-height:2.8em;
            color:#555;
        }
        .pagemenu a {
            display:block;
            text-decoration:none!important;
        }
        .pagemenu a:hover {
            color:#000;
        }
        .pagemenu h2 {
            margin-top:1px;
            color:#999;
            font-size:20px;
        }
        .pagemenu hr {
            border-top: 1px solid #ccc;
            margin: 8px 0;
        }
        @media only screen and (max-width: 700px) {
            .pagemenu{
                float:none;
                margin-right:20px;
            }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_git.php'; ?>
<?php include '../include/before_content_git.php'; ?>

  <article>
      <section id="mainContent">
          <h1>Git <span class="color_h1">Учебник</span></h1>
          <div class="w3-clear nextprev">
              <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
              <a class="w3-right w3-btn" href="git_intro.php">Next &#10095;</a>
          </div>
          <div class="w3-panel w3-info intro" style="background-color:#f3ecea">
              <div class="w3-hide-small" style="float:right;font-size:70px;color:#ffc0c7">[+:</div>
              <p><strong>Git</strong> - это система контроля версий.</p>
              <p><strong>Git</strong> помогает отслеживать изменения кода.</p>
              <p><strong>Git</strong> используется для совместной работы над кодом.</p>
          </div>

          <h2>Обучение на примерах</h2>
          <p>В этом учебнике мы покажем вам такие команды Git:</p>

          <div class="w3-example">
              <h3>Пример</h3>
              <pre class="command-line" data-output="2" data-user="user" data-host="localhost"><code class="language-shell">git --version
git version 2.30.2.windows.1</code></pre>
          </div>

          <p>Для новых пользователей использование представления терминала может показаться немного сложным. Не волнуйтесь! Мы будем делать это очень просто, и изучение этого способа даст вам хорошее представление о том, как работает Git.</p>
          <p>В приведенном выше коде вы можете видеть команды ввод и вывод.</p>
          <p>Такие строки - это команды, которые мы вводим:</p>
          <div class="w3-example">
              <h3>Пример</h3>
              <pre class="command-line" data-user="user" data-host="localhost"><code class="language-shell">git --version</code></pre>
          </div>
          <p>Подобные строки являются выводом/ответом на наши команды:</p>
          <div class="w3-example">
              <h3>Пример</h3>
              <pre class="command-line" data-output="1" data-user="user" data-host="localhost"><code class="language-shell">git version 2.30.2.windows.1</code></pre>
          </div>
          <p>Обычно вводятся строки с символом <code>$</code> перед ними. Это команды, которые вы можете скопировать и запустить в своем терминале.</p>
          <hr>
          <div style="position:relative">
              <div class="pagemenu">
                  <h2>Изменить платформу:</h2>
                  <hr>
                  <a href="?remote=github"><img src="../images/img_remote_github.png" alt="Shift focus to GitHub" style="height:100%;max-height:25px;margin:auto;margin-right:10px;">GitHub</a>
                  <a href="?remote=bitbucket"><img src="../images/img_remote_bitbucket.png" alt="Shift focus to Bitbucket" style="height:100%;max-height:25px;margin-right:10px;">Bitbucket</a>
                  <a href="?remote=gitlab"><img src="../images/img_remote_gitlab.png" alt="Shift focus to GitLab" style="height:100%;max-height:25px;margin-right:10px;">GitLab</a>
              </div>
          </div>

          <h2>Git и удалённые репозитории</h2>
          <p>Git и GitHub - разные вещи.</p>
          <p>В этом учебнике вы поймете, что такое Git и как его использовать на платформах удаленных репозиториев, таких как <strong>GitHub</strong>.</p>
          <p>Вы можете выбрать и изменить, на какой платформе сосредоточиться, кликнув в меню справа:</p>
          <hr style="clear:both">

          <h2>Git Упражнения</h2>
          <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/git/exercise.asp?filename=exercise_getstarted1" method="post" target="_blank">
              <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
              <div class="exercisewindow">
                  <h2>Упражнение:</h2>
                  <p>Вставьте недостающую часть команды, чтобы проверить, какая версия Git (если есть) установлена.</p>
                  <div class="exerciseprecontainer">
<pre>
git <input name="ex1" maxlength="9" style="width: 100px;">
</pre>
                  </div>
                  <br>
                  <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
              </div>
          </form>
          <hr>

          <h2>Git Викторина</h2>
          <p>Проверьте свои навыки Git с помощью викторины.</p>
          <p><a href="git_quiz.php" class="w3-button w3-blue">Git Викторина</a></p>
          <hr>
          <div class="w3-clear nextprev">
              <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
              <a class="w3-right w3-btn" href="git_intro.php">Next &#10095;</a>
          </div>
      </section>
      <script src="../lib/w3.js"></script>
      <script src="../scripts/git_remote.js"></script>
      <script>
          updateParts();
      </script>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>