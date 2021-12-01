<?php include '../include/head.php'; ?>

<title>React Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='React Учебник. Библиотека JavaScript для создания пользовательских интерфейсов. React используется для создания одностраничных приложений.<?php include '../include/description.php'; ?>'>
    <script src="../scripts/prism1.js"></script>
    <link rel="stylesheet" href="../styles/prism1.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_react.php'; ?>
<?php include '../include/before_content_react.php'; ?>

<article>
    <h1>React Учебник</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="react_intro.php">Next &#10095;</a>
    </div>
    <div class="w3-panel w3-info intro">
        <p>React - это библиотека JavaScript для создания пользовательских интерфейсов.</p>
        <p>React используется для создания одностраничных приложений.</p>
        <p>React позволяет нам создавать повторно используемые компоненты пользовательского интерфейса.</p>
        <a class="w3-btn w3-margin-bottom shadow-black-1" href="react_intro.php">Начать изучение React немедленно &raquo;</a>
    </div>
    <hr>

    <h2>Обучение на примерах</h2>
    <p>Наш инструмент "Показать React" позволяет легко продемонстрировать React, он показывает и код, и результат.</p>

    <div class="w3-example">
        <h3>Пример:</h3>

        <pre class="language-jsx w3-white"><code>import React from 'react';
import ReactDOM from 'react-dom';

class Test extends React.Component {
  render() {
    return &lt;h1&gt;Hello World!&lt;/h1&gt;;
  }
}

ReactDOM.render(&lt;Test /&gt;, document.getElementById('root'));
</code></pre>
        <p>
            <a target="_blank" class="w3-btn" href="../reacttryit/demo2_react_test.html">Выполнить пример &raquo;</a>
        </p>
    </div>
    <hr>

    <h2>Создать приложение React</h2>

    <p>Чтобы изучить и протестировать React, вы должны настроить React среду на своем компьютере.</p>
    <p>В этом учебнике используется <code class="w3-codespan">create-react-app</code>.</p>

    <p><code class="w3-codespan">create-react-app</code> - официально поддерживаемый способ создания приложений React.</p>

    <p>Если у вас установлены NPM и Node.js, вы можете создать приложение React, предварительно установив create-react-app.</p>
    <p>Установите create-react-app, выполнив эту команду в своём терминале (командной строке):</p>

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
            C:\Users\<em>Your Name</em>&gt;npm install -g create-react-app</div>
    </div>

    <p>Теперь вы готовы создать свое первое приложение React!</p>
    <p>Запустите эту команду, чтобы создать приложение React с именем <code class="w3-codespan">myfirstreact</code>:</p>

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
            C:\Users\<em>Your Name</em>&gt;npx create-react-app myfirstreact
        </div>
    </div>

    <p><code class="w3-codespan">create-react-app</code> настроит все необходимое для запуска приложения React.</p>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> В этом учебнике для демонстрации примеров React используется <code class="w3-codespan">create-react-app</code>. Вы не сможете запускать те же примеры на своем компьютере, если не установите среду <code class="w3-codespan">create-react-app</code>.</p>
    </div>
    <hr>

    <h2>Запустите приложение React</h2>

    <p>Если вы выполнили две приведенные выше команды, вы готовы запустить свое первое <em>настоящее</em> приложение React!</p>

    <p>Выполните эту команду, чтобы перейти в каталог <code class="w3-codespan">myfirstreact</code>:</p>

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
            C:\Users\<em>Your Name</em>&gt;cd myfirstreact
        </div>
    </div>

    <p>Запустите эту команду, чтобы запустить приложение React <code class="w3-codespan">myfirstreact</code>:</p>

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
            C:\Users\<em>Your Name</em>\myfirstreact&gt;npm start
        </div>
    </div>

    <p>Появится новое окно браузера с вашим недавно созданным приложением React! Если нет, откройте браузер и введите <code class="w3-codespan">localhost:3000</code> в адресной строке.</p>

    <p>Результат:</p>

    <div class="w3-container w3-margin-top">
        <img src="../images/screenshot_myfirstreact.png" style="max-width:100%">
    </div>
    <br>

    <div class="w3-panel w3-note">
        <p>Вы узнаете больше о приложении create-react-app в главе <a href="react_getstarted.php">React СТАРТ</a>.</p>
    </div>
    <hr>

    <h2>Что вы уже должны знать</h2>
    <p>Прежде чем начать работу с React.JS, вы должны иметь некоторый опыт работы с:</p>
    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
    </ul>

    <p>Вы также должны иметь некоторый опыт работы с новыми функциями JavaScript, представленными в ECMAScript 6 (ES6), вы узнаете о них в главе <a href="react_es6.php">React ES6</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="react_intro.php">Next &#10095;</a>
    </div>

</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>