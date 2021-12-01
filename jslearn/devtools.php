<?php include '../include/head.php'; ?>

<title>Консоль разработчика JavaScript. <?php include '../include/title_jslearn.php'; ?></title>
<meta name='description' content='Консоль разработчика JavaScript. Отладка кода. <?php include '../include/description_jslearn.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jslearn.php'; ?>
<?php include '../include/before_content_jslearn.php'; ?>

<article>
  <h1>JavaScript Консоль разработчика</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='code_editors.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='hello_world.php'>Next &#10095;</a>
  </div>
  <hr>
  <p class='intro'>Код уязвим для ошибок. И вы, скорее всего, будете делать ошибки в коде…</p>
  <p class='intro'>Впрочем, давайте будем откровенны: вы точно будете совершать ошибки в коде. В конце концов, вы человек, а не робот.</p>
  <hr>
  <p>Но по умолчанию в браузере ошибки не видны. То есть, если что-то пойдёт не так, мы не увидим, что именно сломалось, и не сможем это починить.</p>
  <p>Для решения задач такого рода в браузер встроены так называемые «Инструменты разработки» (Developer tools или сокращённо — devtools).</p>
  <p>Chrome и Firefox снискали любовь подавляющего большинства программистов во многом благодаря своим отменным инструментам разработчика. Остальные браузеры, хотя и оснащены подобными инструментами, но все же зачастую находятся в роли догоняющих и по качеству, и по количеству свойств и особенностей. В общем, почти у всех программистов есть свой «любимый» браузер. Другие используются только для отлова и исправления специфичных «браузерозависимых» ошибок.</p>
  <p>Для начала знакомства с этими мощными инструментами давайте выясним, как их открывать, смотреть ошибки и запускать команды JavaScript.</p>
  <hr>
  <h2>Google Chrome</h2>
  <p>Откройте страницу <a href="bug.html" target="_blank">bug.html</a>.</p>
  <p>В её JavaScript-коде закралась ошибка. Она не видна обычному посетителю, поэтому давайте найдём её при помощи инструментов разработки.</p>
  <p>Нажмите <kbd class="shortcut">F12</kbd> или, если вы используете Mac, <kbd class="shortcut">Cmd<span class="shortcut__plus">+</span>Opt<span class="shortcut__plus">+</span>J</kbd>.</p>
  <p>По умолчанию в инструментах разработчика откроется вкладка Console (консоль).</p>
  <p>Она выглядит приблизительно следующим образом:</p>
  <a href="../images/devtools_chrome.png" target="_blank"><img src="../images/devtools_chrome.png" alt="Инструмент разработчика в Chrome" style="max-width: 100%; padding: 10px"></a>
  <p>Точный внешний вид инструментов разработки зависит от используемой версии Chrome. Время от времени некоторые детали изменяются, но в целом внешний вид остаётся примерно похожим на предыдущие версии.</p>
  <ul>
    <li>В консоли мы можем увидеть сообщение об ошибке, отрисованное красным цветом. В нашем случае скрипт содержит неизвестную команду «lalala».</li>
    <li>Справа присутствует ссылка на исходный код <code class="w3-codespan">bug.html:12</code> с номером строки кода, в которой эта ошибка и произошла.</li>
  </ul>
    <p>Под сообщением об ошибке находится синий символ <code class="w3-codespan">&gt;</code>. Он обозначает командную строку, в ней мы можем редактировать и запускать JavaScript-команды. Для их запуска нажмите <kbd class="shortcut">Enter</kbd>.</p>
  <hr>
    <div class="w3-panel w3-note">
  <h2>Многострочный ввод</h2>
  <p>Обычно при нажатии <kbd class="shortcut">Enter</kbd> введённая строка кода сразу выполняется.</p>
        <p>Чтобы перенести строку, нажмите <kbd class="shortcut">Shift<span class="shortcut__plus">+</span>Enter</kbd>. Так можно вводить более длинный JS-код.</p>
    </div>
  <p>Теперь мы явно видим ошибки, для начала этого вполне достаточно. Мы ещё вернёмся к инструментам разработчика позже и более подробно рассмотрим отладку кода в главе <a href="debugging_chrome.php">Отладка в браузере Chrome</a>.</p>
    <?php include '../include/addown_content.php'; ?>
  <h2>Firefox, Edge и другие</h2>
    <p>Инструменты разработчика в большинстве браузеров открываются при нажатии на <kbd class="shortcut">F12</kbd>.</p>
  <p>Их внешний вид и принципы работы мало чем отличаются. Разобравшись с инструментами в одном браузере, вы без труда сможете работать с ними и в другом.</p>
  <hr>
  <h2>Safari</h2>
  <p>Safari (браузер для Mac, не поддерживается в системах Windows/Linux) всё же имеет небольшое отличие. Для начала работы нам нужно включить «Меню разработки» («Developer menu»).</p>
  <p>Откройте Настройки (Preferences) и перейдите к панели «Продвинутые» (Advanced). В самом низу вы найдёте чекбокс:</p>
    <a href="../images/devtools_safari.png" target="_blank"><img src="../images/devtools_safari.png" alt="Инструмент разработчика в Safari" style="max-width: 100%; padding: 10px"></a>
  <p>Теперь консоль можно активировать нажатием клавиш <kbd class="shortcut">Cmd<span class="shortcut__plus">+</span>Opt<span class="shortcut__plus">+</span>C</kbd>. Также обратите внимание на новый элемент меню «Разработка» («Develop»). В нём содержится большое количество команд и настроек.</p>
  <hr>
  <h3>Резюме</h3>
    <ul>
      <li>Инструменты разработчика позволяют нам смотреть ошибки, выполнять команды, проверять значение переменных и ещё много всего полезного.</li>
      <li>В большинстве браузеров, работающих под Windows, инструменты разработчика можно открыть, нажав <kbd class="shortcut">F12</kbd>. В Chrome для Mac используйте комбинацию <kbd class="shortcut">Cmd<span class="shortcut__plus">+</span>Opt<span class="shortcut__plus">+</span>J</kbd>, Safari: <kbd class="shortcut">Cmd<span class="shortcut__plus">+</span>Opt<span class="shortcut__plus">+</span>C</kbd> (необходимо предварительное включение «Меню разработчика»).</li>
    </ul>
  <p>Теперь наше окружение полностью настроено. В следующем разделе мы перейдём непосредственно к JavaScript.</p>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='code_editors.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='hello_world.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>