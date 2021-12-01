<?php include '../include/head.php'; ?>

<title>Строгий режим JavaScript. <?php include '../include/title_jslearn.php'; ?></title>
<meta name='description' content='Строгий режим JavaScript - use strict. Консоль браузера. Всегда ли нужно использовать строгий режим? Современный онлайн учебник по JavaScript на русском языке. <?php include '../include/description_jslearn.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jslearn.php'; ?>
<?php include '../include/before_content_jslearn.php'; ?>

<article>
  <h1>JavaScript Строгий режим — 'use strict'</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='structure.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='variables.php'>Next &#10095;</a>
  </div>
  <hr>
  <p class='intro'>На протяжении долгого времени JavaScript развивался без проблем с обратной совместимостью. Новые функции добавлялись в язык, в то время как старая функциональность не менялась.</p>
  <p>Преимуществом данного подхода было то, что существующий код продолжал работать. А недостатком – что любая ошибка или несовершенное решение, принятое создателями JavaScript, застревали в языке навсегда.</p>
  <p>Так было до 2009 года, когда появился <strong>ECMAScript 5 (ES5)</strong>. Он добавил новые возможности в язык и изменил некоторые из существующих. Чтобы устаревший код работал, как и раньше, по умолчанию подобные изменения не применяются. Поэтому нам нужно явно их активировать с помощью специальной директивы: <code>'use strict'</code>.</p>
  <hr>
  <h2>«use strict»</h2>
  <p>Директива выглядит как строка: <code>"use strict"</code> или <code>'use strict'</code>. Когда она находится в начале скрипта, весь скрипт работает в «современном» режиме.</p>
  <p>Например:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
  'use strict';<br>
      <br>
  // этот код работает в современном режиме<br>
  ...
    </div>
  </div>
    <p>Позже мы изучим функции (способ группировки команд). Забегая вперёд, заметим, что вместо всего скрипта <code>'use strict'</code> можно поставить в начале большинства видов функций. Это позволяет включить строгий режим только в конкретной функции. Но обычно люди используют его для всего файла.</p>
    <div class='important'>
        <p><span class='warning_sign'>&#x26a0;</span><b>Убедитесь, что «use strict» находится в начале</b></p>
        <p>Проверьте, что <code>'use strict'</code> находится в первой исполняемой строке скрипта, иначе строгий режим может не включиться.</p>
        <p>Здесь строгий режим не включён:</p>
        <div class='w3-code notranslate jsHigh'>
            alert('some code');<br>
            // 'use strict' ниже игнорируется - он должен быть в первой строке<br>
            <br>
            'use strict';<br>
            <br>
            // строгий режим не активирован
        </div>
        <p>Над <code>'use strict'</code> могут быть записаны только комментарии.</p>
    </div>
    <br>
    <div class='important'>
        <p><span class='warning_sign'>&#x26a0;</span><b>Нет никакого способа отменить use strict</b></p>
        <p>Нет директивы типа <code>'no use strict'</code>, которая возвращала бы движок к старому поведению.</p>
        <p>Как только мы входим в строгий режим, отменить это невозможно.</p>
    </div>
    <hr>
    <h2>Консоль браузера</h2>
    <p>В дальнейшем, когда вы будете использовать консоль браузера для тестирования функций, обратите внимание, что <code>use strict</code> по умолчанию в ней выключен.</p>
    <p>Иногда, когда <code>use strict</code> имеет значение, вы можете получить неправильные результаты.</p>
    <p>Можно использовать <kbd class='shortcut'>Shift<span class='shortcut__plus'>+</span>Enter</kbd> для ввода нескольких строк и написать в верхней строке <code>use strict</code>:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
          'use strict'; &lt;Shift+Enter для перехода на новую строку&gt;<br>
          //  ...ваш код...<br>
          &lt;Enter для запуска&gt;
        </div>
    </div>
    <p>В большинстве браузеров, включая Chrome и Firefox, это работает.</p>
    <p>В старых браузерах консоль не учитывает такой <code>use strict</code>, там можно «оборачивать» код в функцию, вот так:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            (function() {<br>
            'use strict';<br>
            // ...ваш код...<br>
            })()
        </div>
    </div>
    <hr>
    <h2>Всегда ли нужно использовать «use strict»?</h2>
    <p>Вопрос кажется риторическим, но это не так.</p>
    <p>Кто-то посоветует начинать каждый скрипт с <code>'use strict'</code>… Но есть способ покруче.</p>
    <p>Современный JavaScript поддерживает «классы» и «модули» — продвинутые структуры языка (и мы, конечно, до них доберёмся), которые автоматически включают строгий режим. Поэтому в них нет нужды добавлять директиву <code>'use strict'</code>.</p>
    <p><b>Подытожим: пока очень желательно добавлять <code>'use strict'</code>; в начале ваших скриптов. Позже, когда весь ваш код будет состоять из классов и модулей, директиву можно будет опускать.</b></p>
    <p>Пока мы узнали о <code>use strict</code> только в общих чертах.</p>
    <p>В следующих главах, по мере расширения знаний о возможностях языка, мы яснее увидим отличия между строгим и стандартным режимом. К счастью, их не так много, и все они делают жизнь разработчика лучше.</p>
    <p>Все примеры в этом учебнике подразумевают исполнение в строгом режиме, за исключением случаев (очень редких), когда оговорено иное.</p>
  <hr>
  <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='structure.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='variables.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>