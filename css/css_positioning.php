<?php include '../include/head.php'; ?>

  <title>CSS Макет. Свойство Position. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Макет. Свойство Position. Метод позиционирования для элемента. Статический, относительный, фиксированный, абсолютный или прикреплённый. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS Макет<span class="color_h1"> - Свойство</span> position</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_max-width.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_overflow.php">Next &#10095;</a>
    </div>
    <hr>

    <p class="intro"><strong>Свойство <code class="w3-codespan">position</code></strong> указывает тип метода позиционирования, используемого для элемента (статический, относительный, фиксированный, абсолютный или закрепленный - static, relative, fixed, absolute или sticky).</p>
    <hr>

    <h2>Свойство position</h2>
    <p><strong>Свойство <code class="w3-codespan">position</code></strong> определяет тип метода позиционирования, используемого для элемента.</p>
    <p>Есть пять разных значений <strong>position</strong> (позиции):</p>
    <ul>
        <li><code class="w3-codespan">static</code> - статический</li>
        <li><code class="w3-codespan">relative</code> - относительный</li>
        <li><code class="w3-codespan">fixed</code> - фиксированный</li>
        <li><code class="w3-codespan">absolute</code> - абсолютный</li>
        <li><code class="w3-codespan">sticky</code> - закреплённый</li>
    </ul>
    <p>Затем элементы располагаются с использованием свойств top, bottom, left и right. Однако эти свойства не будут работать, если сначала не установлено свойство <code class="w3-codespan">position</code>. Они также работают по-разному в зависимости от значения position.</p>
    <hr>

    <h2>position: static;</h2>
    <p>HTML-элементы по умолчанию расположены статически.</p>
    <p>На статические элементы не влияют свойства top, bottom, left и right.</p>
    <p>Элемент с <code class="w3-codespan">position: static;</code> не позиционируется каким-либо особым образом; он всегда располагается в соответствии с обычным потоком страницы:</p>
    <div class="w3-theme-border w3-margin-bottom" style="border-width:3px;border-style:solid;position:static;">
        Этот элемент &lt;div&gt; имеет position: static;</div>
    <p>Вот CSS, который используется:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div.static {<br>&nbsp;&nbsp;position: static;<br>&nbsp;&nbsp;border: 3px solid #73AD21;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_position_static.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>position: relative;</h2>
    <p>Элемент с <code class = "w3-codespan">position: relative;</code> позиционируется относительно своего нормального положения.</p>
    <p>Установка свойств top, right, bottom и left относительно позиционированного элемента приведет к его отклонению от его нормального положения. Другое содержимое не будет откорректировано, чтобы вписаться в любой пробел, оставленный элементом.</p>
    <div class="w3-theme-border w3-margin-bottom" style="border-width:3px;border-style:solid;position:relative;left:30px;">
        Этот элемент &lt;div&gt; имеет position: relative;</div>
    <p>Вот CSS, который используется:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div.relative {<br>&nbsp; position: relative;<br>&nbsp;
            left: 30px;<br>&nbsp; border: 3px solid #73AD21;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_position_relative.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>position: fixed;</h2>
    <p>Элемент с <code class = "w3-codespan">position: fixed;</code> располагается относительно области просмотра, что означает, что он всегда остается на том же месте, даже если страница прокручивается. Свойства top, right, bottom и left используются для позиционирования элемента.</p>
    <p>Фиксированный (fixed) элемент не оставляет пробела на странице, где он обычно находился бы.</p>
    <p>Обратите внимание на фиксированный элемент в правом нижнем углу данной страницы. Вот CSS, который используется:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div.fixed {<br>&nbsp; position: fixed;<br>&nbsp;
            bottom: 0;<br>&nbsp; right: 0;<br>&nbsp; width:
            300px;<br>&nbsp; border: 3px solid #73AD21;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_position_fixed.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-theme-border" style="border-width:3px;background-color:#cae8ca;border-style:solid;position:fixed;padding:7px;bottom:0;right:0;max-width:450px;z-index:999">
        Этот элемент &lt;div&gt; имеет <code class="w3-codespan">position: fixed;</code></div>
    <hr>

    <h2>position: absolute;</h2>
    <p>Элемент с <code class="w3-codespan">position: absolute;</code> позиционируется относительно ближайшего позиционированного предка (вместо позиционирования относительно окна просмотра, как фиксированный).</p>
    <p>Однако, если элемент с абсолютным позиционированием не имеет позиционированных предков, он использует тело документа и перемещается вместе с прокруткой страницы.</p>
    <p><strong>Примечание:</strong> &quot;Позиционируемый&quot; элемент - это тот, чья позиция что угодно, кроме <code class="w3-codespan">static</code>.</p>
    <p>Вот простой пример:</p>

    <div class="w3-theme-border" style="border-width:3px;border-style:solid;position: relative;width: 400px;height: 200px;">
        Этот элемент &lt;div&gt; имеет position: relative;

        <div class="w3-theme-border w3-margin-bottom" style="border-width:3px;border-style:solid;position: absolute;top: 80px;right: 0;width: 200px;height: 100px;">
            Этот элемент &lt;div&gt; имеет position: absolute;
        </div>
    </div>

    <p>Вот CSS, который используется:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div.relative {<br>&nbsp;&nbsp;position: relative;<br>&nbsp;
            width: 400px;<br>&nbsp; height: 200px;<br>&nbsp; border: 3px solid #73AD21;<br>}
            <br><br>
            div.absolute {<br>&nbsp;&nbsp;position: absolute;<br>&nbsp;
            top: 80px;<br>&nbsp; right: 0;<br>&nbsp; width: 200px;<br>&nbsp; height: 100px;<br>&nbsp; border: 3px solid #73AD21;<br>}
        </div>
        <a target="_blank" href="../csstryit/trycss_position_absolute.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>position: sticky;</h2>
    <p>Элемент с <code class="w3-codespan">position: sticky;</code> (прикреплённый) позиционируется на основе позиции прокрутки пользователя.</p>
    <p>Элемент sticky переключается между <code class="w3-codespan">relative</code> и <code class="w3-codespan">fixed</code>, в зависимости от положения прокрутки. Он позиционируется относительно до тех пор, пока в окне просмотра не будет достигнута заданная позиция смещения, а затем он &quot;закрепится&quot; на месте (например, position:fixed).</p>
    <iframe src="../csstryit/trycss_position_sticky_ifr.html" style="width:100%;border:4px solid #e5e5e5" class="w3-padding"></iframe>
    <div class="w3-note w3-panel">
        <p><strong>Примечание: </strong>Internet Explorer, Edge 15 и более ранние не поддерживают position: sticky. Safari требует -webkit-prefix (см. пример ниже). Вы также должны указать хотя бы одно из значений: <code class="w3-codespan">top</code>, <code class="w3-codespan">right</code>, <code class="w3-codespan">bottom</code> или <code class="w3-codespan">left</code> для работы sticky позиционирования.</p>
    </div><p>В этом примере sticky элемент придерживается верхней части страницы (<code class="w3-codespan">top: 0</code>), когда вы достигнете своей позиции прокрутки.</p><div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div.sticky {<br>&nbsp; position: -webkit-sticky; /* Safari */<br>&nbsp; position:
            sticky;<br>&nbsp; top: 0;<br>&nbsp; background-color: green;<br>&nbsp;
            border: 2px solid #4CAF50;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_position_sticky.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Перекрывающиеся элементы</h2>
    <p>Когда элементы располагаются на странице, они могут перекрывать другие элементы.</p>
    <p>Свойство <code class="w3-codespan">z-index</code> определяет порядок стека элемента (какой элемент должен быть расположен перед или позади других, т.е. какой элемент перекрывает другой).</p>
    <p>Элемент может иметь положительный или отрицательный порядок в стеке:</p>

    <div class="w3-example w3-white" style="position:relative;padding:80px;">
        <h1 style="position:absolute;left:35px;top:15px;z-index:2;">Это заголовок</h1>
        <img style="position:absolute;left:30px;top:15px;z-index:1;width: 100px;height: 140px" src="../images/w3css.gif" alt="w3css">
        <p style="position:absolute;left:35px;top:65px;z-index:2;">Поскольку изображение имеет z-index -1, оно будет помещено за текстом, т.е. текст будет находится сверху изображения.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img
            {<br>
            &nbsp;
            position: absolute;<br>
            &nbsp;&nbsp;left: 0px;<br>
            &nbsp;
            top: 0px;<br>
            &nbsp;
            z-index: -1;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_zindex.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Элемент с более высоким порядком стека всегда находится перед элементом с более низким порядком стека.</p>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Если два позиционированных элемента перекрываются без указания <code class="w3-codespan">z-index</code>, элемент, расположенный последним в HTML коде, будет показан сверху.</p>
    </div>
    <hr>

    <h2>Позиционирование текста в изображении</h2>
    <p>Как разместить текст поверх изображения:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate">
            <div style="position:relative;text-align:center;">
                <img src="../images/img_5terre_wide.jpg" alt="Cinque Terre" style="width:100%;height:auto;opacity:0.3">
                <div style="position:absolute;bottom:8px;left:16px;font-size:18px">Снизу слева</div>
                <div style="position:absolute;top:8px;left:16px;font-size:18px">Сверху слева</div>
                <div style="position:absolute;top:8px;right:16px;font-size:18px">Сверху справа</div>
                <div style="position:absolute;bottom:8px;right:16px;font-size:18px">Снизу справа</div>
                <div style="position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);font-size:18px">По центру</div>
            </div>
        </div>

        <p style="font-size:17px;">Попробуйте сами:</p>
        <a target="_blank" href="../csstryit/trycss_image_text_top_left.html" class="w3-btn w3-margin-bottom">Вверху слева &raquo;</a>
        <a target="_blank" href="../csstryit/trycss_image_text_top_right.html" class="w3-btn w3-margin-bottom">Вверху справа &raquo;</a>
        <a target="_blank" href="../csstryit/trycss_image_text_bottom_left.html" class="w3-btn w3-margin-bottom">Снизу слева &raquo;</a>
        <a target="_blank" href="../csstryit/trycss_image_text_bottom_right.html" class="w3-btn w3-margin-bottom">Снизу справа &raquo;</a>
        <a target="_blank" href="../csstryit/trycss_image_text_center.html" class="w3-btn w3-margin-bottom">По центру &raquo;</a>
    </div>
    <hr>

    <h2>Больше примеров</h2>
    <p><a target="_blank" href="../csstryit/trycss_clip.html">Установить форму элемента</a><br>
        Этот пример демонстрирует, как установить форму элемента. Элемент обрезается до этой формы и отображается.</p>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_positioning1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_positioning2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_positioning3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_positioning4" target="_blank" rel="nofollow">Упражнение 4 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_positioning5" target="_blank" rel="nofollow">Упражнение 5 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>Все CSS свойства позиционирования</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Свойство</th>
            <th style="width:55%">Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/pr_pos_bottom.php">bottom</a></td>
            <td>Устанавливает нижний край поля для позиционированного блока</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_pos_clip.php">clip</a></td>
            <td>Закрепляет абсолютно позиционированный элемент</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_pos_left.php">left</a></td>
            <td>Устанавливает край левого поля для позиционированного блока</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_class_position.php">position</a></td>
            <td>Определяет тип позиционирования для элемента</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_pos_right.php">right</a></td>
            <td>Устанавливает правый край поля для позиционированного блока</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_pos_top.php">top</a></td>
            <td>Устанавливает верхний край поля для позиционированного блока</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_pos_z-index.php">z-index</a></td>
            <td>Устанавливает порядок стека элемента</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_max-width.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_overflow.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>