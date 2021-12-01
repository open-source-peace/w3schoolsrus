<?php include '../include/head.php'; ?>

<title>CSS Эффекты текста. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Эффекты текста. Как добавить текстовые эффекты на HTML-странице с помощью CSS? Переполнение, перенос слов, правила разрыва строк и режимы записи. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<style>
        #overflow1 {
            white-space: nowrap;
            width: 200px;
            overflow: hidden;
            text-overflow: clip;
            border: 1px solid #000;
        }
        #overflow2 {
            white-space: nowrap;
            width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            border: 1px solid #000;
        }
        #wordwrap {
            width: 11em;
            border: 1px solid #000;
            word-wrap: break-word;
        }
        #normal {
            width: 11em;
            border: 1px solid #000;
            word-wrap: normal;
        }
        p.test1 {
            width: 140px;
            border: 1px solid #000;
            word-break: keep-all;
        }
        p.test2 {
            width: 140px;
            border: 1px solid #000;
            word-break: break-all;
        }
        span.wmtest2 {
            writing-mode: vertical-rl;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Эффекты текста</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_shadows.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_fonts.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS Текст. <span class="color_h1">Переполнение, перенос слов, правила разрыва строк и режимы записи</span></h2>
    <p>В этой главе вы узнаете о следующих свойствах:</p>
    <ul>
        <li><code class="w3-codespan">text-overflow</code></li>
        <li><code class="w3-codespan">word-wrap</code></li>
        <li><code class="w3-codespan">word-break</code></li>
        <li><code class="w3-codespan">writing-mode</code></li>
    </ul>
    <hr>
    <h2>CSS text-overflow - Переполнение</h2>
    <p>CSS свойство <code class="w3-codespan">text-overflow</code> свойство указывает, как переполненный контент, который не отображается, должен быть передан пользователю.</p>
    <p>Он может быть обрезан:</p>
    <p id="overflow1">Это длинный текст, который не поместится в поле</p>
    <p>или он может быть представлен как многоточие (...):</p>
    <p id="overflow2">Это длинный текст, который не поместится в поле</p>

    <p>CSS код выглядит следующим образом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p.test1 {<br>&nbsp;
            white-space: nowrap; <br>&nbsp;&nbsp;width: 200px; <br>&nbsp;&nbsp;border: 1px solid #000000;<br>
            &nbsp;
            overflow: hidden;<br>&nbsp;
            text-overflow: clip; <br>}<br><br>p.test2 {<br>&nbsp;&nbsp;&nbsp;
            white-space: nowrap; <br>&nbsp;&nbsp;&nbsp; width: 200px; <br>&nbsp;&nbsp;&nbsp; border: 1px solid #000;<br>&nbsp;&nbsp;&nbsp;
            overflow: hidden;<br>&nbsp;&nbsp;&nbsp;
            text-overflow: ellipsis; <br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_text-overflow.html">Попробуйте сами &raquo;</a>
    </div>
    <p>В следующем примере показано, как можно отобразить переполненное содержимое при наведении мыши на элемент:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div.test:hover {<br>&nbsp;&nbsp;overflow: visible;<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_text-overflow_hover.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS word-wrap - Перенос слов</h2>
    <p>CSS свойство <code class="w3-codespan">word-wrap</code> позволяет разбивать длинные слова и переносить их на следующую строку.</p>
    <p>Если слово слишком длинное, чтобы вписаться в область, оно расширяется за пределы:</p>
    <p id="normal">Этот параграф содержит очень длинное слово: это оченьоченьоченьдлинное слово. Длинное слово будет разбито и перенесено на следующую строку.</p>
    <p>Свойство word-wrap позволяет принудительно переносить текст - даже если это означает разбиение его на середину слова:</p>
    <p id="wordwrap">Этот параграф содержит очень длинное слово: это оченьоченьоченьдлинное слово. Длинное слово будет разбито и перенесено на следующую строку.</p>
    <p>CSS код выглядит следующим образом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Разрешить разбивать длинные слова и переносить их на следующую строку:</p>
        <div class="w3-code notranslate cssHigh">
            p {<br>&nbsp; word-wrap: break-word;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_word-wrap.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS word-break - Обрывание слов</h2>
    <p>CSS свойство <code class="w3-codespan">word-break</code> определяет правила разрыва строки.</p>
    <p class="test1">Этот параграф содержит текст. Эта строка будет-обрываться-в-дефис.</p>
    <p class="test2">Этот параграф содержит текст. Строки будут обрываться у любого символа.</p>
    <p>CSS код выглядит следующим образом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p.test1 {<br>&nbsp;&nbsp;word-break:
            keep-all;<br>}<br><br>p.test2 {<br>&nbsp; word-break:
            break-all;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_word-break.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS writing-mode - Режим записи</h2>
    <p>CSS свойство <code class="w3-codespan">writing-mode</code> указывает, расположены ли строки текста горизонтально или вертикально.</p>
    <p>Некоторый текст с элементом span из writing-mode <span class="wmtest2">vertical-rl</span>.</p>
    <p>В следующем примере показаны несколько разных режимов записи:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p.test1 {<br>&nbsp; writing-mode: horizontal-tb; <br>}<br><br>span.test2 {<br>&nbsp; writing-mode: vertical-rl; <br>}<br><br>p.test2 {<br>&nbsp;&nbsp;writing-mode:
            vertical-rl; <br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_writing-mode.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_text_effects1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_text_effects2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_text_effects3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>CSS Свойства текстовых эффектов</h2>
    <p>В следующей таблице перечислены свойства текстовых эффектов CSS:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:28%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_text-align-last.php">text-align-last</a></td>
            <td>Определяет, как выровнять последнюю строку текста</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_text-justify.php">text-justify</a></td>
            <td>Определяет, как выровненный текст должен быть выровнен и разнесен</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_text-overflow.php">text-overflow</a></td>
            <td>Определяет, как переполненный контент, который не отображается, должен передаваться пользователю</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_word-break.php">word-break</a></td>
            <td>Определяет правила разрыва строк для не-CJK-скриптов</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_word-wrap.php">word-wrap</a></td>
            <td>Позволяет разбивать длинные слова и переносить их на следующую строку</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_writing-mode.php">writing-mode</a></td>
            <td>Определяет, расположены ли строки текста горизонтально или вертикально</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_shadows.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_fonts.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>