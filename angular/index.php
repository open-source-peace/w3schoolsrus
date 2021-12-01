<?php include '../include/head.php'; ?>

<title>Angular JS Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Angular JS Учебник. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_angular.php'; ?>
<?php include '../include/before_content_angular.php'; ?>

  <article>
      <h1>AngularJS Учебник</h1>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
          <a class='w3-right w3-btn' href='angular_intro.php'>Next &#10095;</a>
      </div>
      <br>

      <div class='w3-panel w3-info intro'>
          <p>AngularJS расширяет HTML новыми атрибутами.</p>
          <p>AngularJS идеально подходит для одностраничных приложений (Single Page Applications - SPA).</p>
          <p>AngularJS легко выучить.</p>
          <a class='w3-btn w3-margin-bottom shadow-black-1'  href='angular_intro.php'>Начать изучение AngularJS немедленно &raquo;</a>
      </div>
      <hr>

      <h2>Про этот учебник</h2>
      <p>Этот учебник специально разработано, чтобы помочь вам изучить AngularJS как можно быстрее и эффективнее.</p>
      <p>Сначала вы изучите основы AngularJS: директивы, выражения, фильтры, модули и контроллеры.</p>
      <p>Затем вы узнаете все, что вам нужно знать об AngularJS:</p>
      <p>События, DOM, формы, ввод, проверка, HTTP и др.</p>
      <hr>

      <h2>Примеры "Попробуйте сами" в каждой главе</h2>
      <p>В каждой главе вы можете редактировать примеры онлайн и нажимать кнопку, чтобы просмотреть результат.</p>
      <div class='w3-example'>
          <h3>AngularJS Пример</h3>
          <div class='w3-code notranslate htmlHigh'>
              &lt;!DOCTYPE html&gt;<br>
              &lt;html lang="en-US"&gt;<br>&lt;script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"&gt;&lt;/script&gt;<br>
              &lt;body&gt;<br><br>
              &lt;div ng-app=""&gt;<br>
              &nbsp;    &lt;p&gt;Name : &lt;input type="text" ng-model="name"&gt;&lt;/p&gt;<br>
              &nbsp;    &lt;h1&gt;Hello {{name}}&lt;/h1&gt;<br>
              &lt;/div&gt;<br><br>
              &lt;/body&gt;<br>
              &lt;/html&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' href='../angulartryit/try_ng_default.html' target='_blank'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Что вы уже должны знать</h2>
      <p>Прежде чем изучать AngularJS, вы должны иметь базовое понимание:</p>
      <ul>
          <li><a href='../html/index.php'>HTML</a></li>
          <li><a href='../css/index.php'>CSS</a></li>
          <li><a href='../js/index.php'>JavaScript</a></li>
      </ul>
      <hr>

      <h2>AngularJS История</h2>
      <p>AngularJS версии 1.0 был выпущен в 2012 году.</p>
      <p>Miško Hevery, сотрудник Google, начал работать с AngularJS в 2009 году.</p>
      <p>Идея оказалась очень удачной, и теперь проект официально поддерживает Google.</p>
      <hr>

      <h2>AngularJS Примеры</h2>
      <p>Учебник W3Schools по AngularJS содержит множество примеров AngularJS!</p>
      <p><a href='angular_examples.php' class="w3-button w3-blue shadow-black-1">AngularJS Примеры</a></p>
      <hr>

      <h2>AngularJS Справочник</h2>
      <p>Справочник AngularJS содержит все директивы и фильтры, используемые в этом учебнике.</p>
      <p><a href='angular_ref_directives.php' class="w3-btn w3-deep-orange shadow-black-1">AngularJS Справочник</a></p>

      <hr>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
          <a class='w3-right w3-btn' href='angular_intro.php'>Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>