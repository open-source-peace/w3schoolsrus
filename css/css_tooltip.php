<?php include '../include/head.php'; ?>

<title>CSS Всплывающие подсказки. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Всплывающие подсказки на веб-странице. Как создать подсказку при наведении мыши? Как создать всплывающие подсказки с помощью CSS? Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .tooltip {position: relative;display: inline-block;border-bottom: 1px dotted #ccc; cursor: help; color: #006080;}
        .tooltip .tooltiptext {visibility: hidden;position: absolute;width: 120px;background-color: #555;color: #fff;text-align: center;padding: 5px 0;border-radius: 6px;z-index: 1;opacity: 0;transition: opacity .6s;}
        .tooltip:hover .tooltiptext {visibility: visible;opacity: 1;}
        .tooltip .tooltiptext2 {visibility: hidden;position: absolute;width: 120px;background-color: #555;color: #fff;text-align: center;padding: 5px 0;border-radius: 6px;z-index: 1;}
        .tooltip:hover .tooltiptext2 {visibility: visible;}
        .tooltip-right {top: -5px;left: 125%;}
        .tooltip-right2 {top: -5px;left: 105%;}
        .tooltip-right::after {content: "";position: absolute;top: 50%;right: 100%;margin-top: -5px;border-width: 5px;border-style: solid;border-color: transparent #555 transparent transparent;}
        .tooltip-bottom {top: 135%;left: 50%;margin-left: -60px;}
        .tooltip-bottom2 {top: 125%;left: 50%;margin-left: -60px;}
        .tooltip-bottom::after {content: "";position: absolute;bottom: 100%;left: 50%;margin-left: -5px;border-width: 5px;    border-style: solid;border-color: transparent transparent #555 transparent;}
        .tooltip-top {bottom: 125%;left: 50%;margin-left: -60px;}
        .tooltip-top2 {bottom: 115%;left: 50%;margin-left: -60px;}
        .tooltip-top::after {content: "";position: absolute;top: 100%;left: 50%;margin-left: -5px;border-width: 5px;    border-style: solid;border-color: #555 transparent transparent transparent;}
        .tooltip-left {top: -5px;bottom:auto;right: 128%;}
        .tooltip-left2 {top: -5px;bottom:auto;right: 105%;}
        .tooltip-left::after {content: "";position: absolute;top: 50%;left: 100%;margin-top: -5px;border-width: 5px;    border-style: solid;border-color: transparent transparent transparent #555;}
        .tooltip .tooltiptext-bottomarrow {visibility: hidden;width: 120px;background-color: #111;color: #fff;text-align: center;border-radius: 6px;padding: 5px 0;position: absolute;z-index: 1;bottom: 130%;left: 50%;margin-left: -60px;}
        .tooltip .tooltiptext-bottomarrow::after {content: "";position: absolute;top: 100%;left: 50%;margin-left: -5px; border-width: 5px;border-style: solid;border-color: black transparent transparent transparent;}
        .tooltip:hover .tooltiptext-bottomarrow {visibility: visible;}
        .tooltip .tooltiptext-toparrow {visibility: hidden;width: 120px;background-color: #111;color: #fff;text-align: center;border-radius: 6px;padding: 5px 0;position: absolute;z-index: 1;top: 150%;left: 50%;margin-left: -60px;}
        .tooltip .tooltiptext-toparrow::after {content: "";position: absolute;bottom: 100%;left: 50%;margin-left: -5px;border-width: 5px;border-style: solid;border-color: transparent transparent black transparent;}
        .tooltip:hover .tooltiptext-toparrow {visibility: visible;}
        .tooltip .tooltiptext-leftarrow {visibility: hidden;width: 120px;background-color: #111;color: #fff;text-align:center;border-radius: 6px;padding: 5px 0;position: absolute;z-index: 1;top: -5px;left: 110%;}
        .tooltip .tooltiptext-leftarrow::after {content: "";position: absolute;top: 50%;right: 100%;margin-top: -5px;border-width: 5px;border-style: solid;border-color: transparent black transparent transparent;}
        .tooltip:hover .tooltiptext-leftarrow {visibility: visible;}
        .tooltip .tooltiptext-rightarrow {visibility: hidden;width: 120px;background-color: #111;color: #fff;text-align: center;border-radius: 6px;padding: 5px 0;position: absolute;z-index: 1;top: -5px;right: 110%;}
        .tooltip .tooltiptext-rightarrow::after {content: "";position: absolute;top: 50%;left: 100%;margin-top: -5px;border-width: 5px;border-style: solid;border-color: transparent transparent transparent black;}
        .tooltip:hover .tooltiptext-rightarrow {visibility: visible;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Подсказка</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_animations.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_images.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Как создать всплывающие подсказки с помощью CSS?</strong></p>
    <hr>
    <h2>Демо: Примеры подсказок</h2>
    <p>Подсказка часто используется для указания дополнительной информации о чем-либо, когда пользователь наводит указатель мыши на элемент:</p>

    <div class="w3-row w3-center" style="margin-top:35px;margin-bottom:35px;">
        <div class="w3-quarter">
            <div class="tooltip">Вверху
                <span class="tooltiptext tooltip-top">Текст подсказки</span>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="tooltip">Справа
                <span class="tooltiptext tooltip-right">Текст подсказки</span>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="tooltip">Внизу
                <span class="tooltiptext tooltip-bottom">Текст подсказки</span>
            </div>
        </div>


        <div class="w3-quarter">
            <div class="tooltip">Слева
                <span class="tooltiptext tooltip-left">Текст подсказки</span>
            </div>
        </div>

    </div>
    <p style="clear:both"></p>
    <hr>

    <h2>Основная подсказка</h2>

    <p>Создайте всплывающую подсказку, которая появляется, когда пользователь наводит указатель мыши на элемент:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            &lt;style&gt;<br>/* Контейнер подсказок */<br>.tooltip {<br>&nbsp;&nbsp;position: relative;<br>
            &nbsp;
            display: inline-block;<br>&nbsp; border-bottom: 1px dotted
            black; /* Если вы хотите точки под текстом при наведении мыши */<br>}<br><br>/* Текст подсказки
            */<br>.tooltip .tooltiptext {<br>&nbsp;&nbsp;visibility: hidden;<br>&nbsp;&nbsp;width: 120px;<br>
            &nbsp;
            background-color: black;<br>&nbsp;&nbsp;color: #fff;<br>&nbsp;&nbsp;text-align: center;<br>
            &nbsp; padding: 5px 0;<br>&nbsp;
            border-radius: 6px;<br>&nbsp;<br>&nbsp;
            /* Разместите текст всплывающей подсказки - см. Примеры ниже! */<br>&nbsp; position: absolute;<br>
            &nbsp; z-index: 1;<br>}<br><br>/* Показывать текст всплывающей подсказки при наведении указателя мыши на контейнер всплывающей подсказки */<br>.tooltip:hover
            .tooltiptext {<br>&nbsp;&nbsp;visibility: visible;<br>}<br>&lt;/style&gt;<br><br><span class="htmlHigh">&lt;div class="tooltip"&gt;<span style="color:black !important">Наведите на меня</span><br>
&nbsp; &lt;span class=&quot;tooltiptext&quot;&gt;<span style="color:black;">Текст подсказки</span>&lt;/span&gt;<br>&lt;/div&gt;</span></div>
        <a target="_blank" href="../csstryit/trycss_tooltip.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <h3>Объяснение примера</h3>
    <p><strong>HTML:</strong> Используйте элемент контейнера (например &lt;div&gt;) и добавьте в него класс <code class="w3-codespan">&quot;tooltip&quot;</code>. Когда пользователь наведет курсор на этот &lt;div&gt;, он покажет текст всплывающей подсказки.</p>
    <p>Текст всплывающей подсказки помещается внутри встроенного элемента (например, &lt;span&gt;) с <code class="w3-codespan">class=&quot;tooltiptext&quot;</code>.</p>
    <p><strong>CSS:</strong> Класс <code class="w3-codespan">tooltip</code> применяется <code class="w3-codespan">position:relative</code>, который необходим для позиционирования текста всплывающей подсказки (<code class="w3-codespan">position:absolute</code>).
        <strong>Примечание:</strong> Ниже приведены примеры того, как расположить подсказку.</p>
    <p>Класс <code class="w3-codespan">tooltiptext</code> содержит фактический текст всплывающей подсказки. По умолчанию он скрыт и будет виден при наведении (см. выше). Мы также добавили в него несколько основных стилей: ширину 120px, цвет черного фона, цвет белого текста, центрированный текст, верхний и нижний отступы 5px.</p>
    <p>CSS свойство <code class="w3-codespan">border-radius</code> используется для добавления закругленных углов к тексту всплывающей подсказки.</p>
    <p>Селектор <code class="w3-codespan">:hover</code> используется для отображения текста всплывающей подсказки, когда пользователь наводит указатель мыши на &lt;div&gt; с <code class="w3-codespan">class=&quot;tooltip&quot;</code>.</p>
    <hr>

    <h2>Позиционирование всплывающих подсказок</h2>
    <p>В этом примере всплывающая подсказка находится справа (<code class="w3-codespan">left:105%</code>) от &quot;наведенного&quot; текста (&lt;div&gt;). Также обратите внимание, что <code class="w3-codespan">top:-5px</code> используется для размещения его в середине элемента контейнера. Мы используем число <b>5</b>, потому что текст всплывающей подсказки имеет верхний и нижний отступы 5px. Если вы увеличите его отступ, также увеличьте значение свойства <code class="w3-codespan">top</code>, чтобы оно оставалось посередине (если это то, что вам нужно). То же самое необходимо, если вы хотите, чтобы подсказка была расположена слева.</p>

    <div class="w3-example">
        <h3>Подсказка справа</h3>
        <div class="w3-code notranslate cssHigh">
            .tooltip .tooltiptext {<br>&nbsp; top: -5px;<br>&nbsp;
            left:
            105%; <br>}
        </div>
        <p>Результат:</p>
        <div class="w3-padding w3-white notranslate w3-center">
            <div class="tooltip">Наведите на меня
                <span class="tooltiptext2 tooltip-right2">Текст подсказки</span>
            </div>
        </div>
        <a target="_blank" href="../csstryit/trycss_tooltip_right.html" class="w3-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Подсказка слева</h3>
        <div class="w3-code notranslate cssHigh">
            .tooltip .tooltiptext {<br>&nbsp; top: -5px;<br>&nbsp;
            right:
            105%; <br>}
        </div>
        <p>Результат:</p>
        <div class="w3-padding w3-white notranslate w3-center">
            <div class="tooltip">Наведите на меня
                <span class="tooltiptext2 tooltip-left2">Текст подсказки</span>
            </div>
        </div>
        <a target="_blank" href="../csstryit/trycss_tooltip_left.html" class="w3-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы хотите, чтобы всплывающая подсказка появлялась сверху или снизу, см. примеры ниже. Обратите внимание, что мы используем свойство <code class="w3-codespan">margin-left</code> со значением минус 60 пикселей. Это должно центрировать всплывающую подсказку выше / ниже текста, на который нужно навести текст. Устанавливается на половину ширины всплывающей подсказки (120/2 = 60).</p>

    <div class="w3-example">
        <h3>Подсказка вверху</h3>
        <div class="w3-code notranslate cssHigh">
            .tooltip .tooltiptext {<br>&nbsp; width: 120px;<br>&nbsp;
            bottom: 100%;<br>&nbsp; left:
            50%; <br>&nbsp;&nbsp;margin-left: -60px; /* Используйте половину ширины (120/2 = 60), чтобы центрировать подсказку */<br>}
        </div>
        <p>Результат:</p>
        <div class="w3-padding w3-white notranslate w3-center">
            <div class="tooltip">Наведите на меня
                <span class="tooltiptext2 tooltip-top2">Текст подсказки</span>
            </div>
        </div>
        <a target="_blank" href="../csstryit/trycss_tooltip_top.html" class="w3-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Подсказка внизу</h3>
        <div class="w3-code notranslate cssHigh">
            .tooltip .tooltiptext {<br>&nbsp; width: 120px;<br>&nbsp; top: 100%;<br>&nbsp; left:
            50%; <br>&nbsp;&nbsp;margin-left: -60px; /* Используйте половину ширины (120/2 = 60), чтобы центрировать подсказку */<br>}
        </div>
        <p>Результат:</p>
        <div class="w3-padding w3-white notranslate w3-center">
            <div class="tooltip">Наведите на меня
                <span class="tooltiptext2 tooltip-bottom2">Текст подсказки</span>
            </div>
        </div>
        <a target="_blank" href="../csstryit/trycss_tooltip_bottom.html" class="w3-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Подсказка со стрелкой</h2>

    <p>Чтобы создать стрелку, которая должна появляться с определенной стороны всплывающей подсказки, добавьте &quot;пустое&quot; содержимое после всплывающей подсказки с классом псевдоэлемента <code class="w3-codespan">::after </code> вместе со свойством <code class="w3-codespan">content</code>. Сама стрелка создана с использованием границ. Это сделает подсказку похожей на речевой пузырь.</p>
    <p>Этот пример демонстрирует, как добавить стрелку внизу всплывающей подсказки:</p>

    <div class="w3-example">
        <h3>Нижняя стрелка</h3>
        <div class="w3-code notranslate cssHigh">
            .tooltip .tooltiptext::after {<br>&nbsp; content: &quot; &quot;;<br>&nbsp; position: absolute;<br>
            &nbsp; top: 100%;
            /* В нижней части всплывающей подсказки */<br>&nbsp; left: 50%;<br>&nbsp; margin-left: -5px;<br>
            &nbsp;
            border-width: 5px;<br>&nbsp; border-style: solid;<br>&nbsp;
            border-color: black transparent transparent transparent;<br>}
        </div>
        <p>Результат:</p>
        <div class="w3-padding w3-white notranslate w3-center">
            <div class="tooltip">Наведите на меня
                <span class="tooltiptext-bottomarrow">Текст подсказки</span>
            </div>
        </div>
        <a target="_blank" href="../csstryit/trycss_tooltip_arrow_bottom.html" class="w3-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h3>Объяснение примера</h3>
    <p>Поместите стрелку внутри подсказки: <code class="w3-codespan">top: 100%</code> поместит стрелку внизу всплывающей подсказки. <code class="w3-codespan">left: 50%</code> будет центрировать стрелку.</p>

    <p><strong>Примечание:</strong> Свойство <code class="w3-codespan">border-width</code> определяет размер стрелки. Если вы измените его, также измените значение <code class="w3-codespan">margin-left</code> на то же самое. Это будет располагать стрелку в центре.</p>
    <p>Свойство <code class="w3-codespan">border-color</code> используется для преобразования содержимого в стрелку. Мы устанавливаем верхнюю границу черным, а остальное прозрачным. Если бы все стороны были черными, вы бы получили черный квадрат.</p>
    <p>Этот пример демонстрирует, как добавить стрелку в верхнюю часть всплывающей подсказки. Обратите внимание, что на этот раз мы установили цвет нижней границы:</p>

    <div class="w3-example">
        <h3>Верхняя стрелка</h3>
        <div class="w3-code notranslate cssHigh">
            .tooltip .tooltiptext::after {<br>&nbsp;&nbsp;content: &quot; &quot;;<br>&nbsp;&nbsp;position: absolute;<br>&nbsp;&nbsp;bottom: 100%;&nbsp; /* В верхней части всплывающей подсказки */<br>
            &nbsp; left: 50%;<br>&nbsp; margin-left: -5px;<br>&nbsp;
            border-width: 5px;<br>&nbsp; border-style: solid;<br>&nbsp;
            border-color: transparent transparent black transparent;<br>}
        </div>
        <p>Результат:</p>
        <div class="w3-padding w3-white notranslate w3-center">
            <div class="tooltip">Наведите на меня
                <span class="tooltiptext-toparrow">Текст подсказки</span>
            </div>
        </div>
        <a target="_blank" href="../csstryit/trycss_tooltip_arrow_top.html" class="w3-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Этот пример демонстрирует, как добавить стрелку слева от всплывающей подсказки:</p>

    <div class="w3-example">
        <h3>Стрелка слева</h3>
        <div class="w3-code notranslate cssHigh">
            .tooltip .tooltiptext::after {<br>&nbsp; content: &quot; &quot;;<br>&nbsp;&nbsp;position: absolute;<br>&nbsp;&nbsp;top: 50%;<br>
            &nbsp; right: 100%; /* Слева от всплывающей подсказки */<br>&nbsp; margin-top: -5px;<br>&nbsp;
            border-width: 5px;<br>&nbsp; border-style: solid;<br>&nbsp;
            border-color: transparent black transparent transparent;<br>}
        </div>
        <p>Результат:</p>
        <div class="w3-padding w3-white notranslate w3-center">
            <div class="tooltip">Наведите на меня
                <span class="tooltiptext-leftarrow">Текст подсказки</span>
            </div>
        </div>
        <a target="_blank" href="../csstryit/trycss_tooltip_arrow_left.html" class="w3-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Этот пример демонстрирует, как добавить стрелку справа от всплывающей подсказки:</p>

    <div class="w3-example">
        <h3>Стрелка справа</h3>
        <div class="w3-code notranslate cssHigh">
            .tooltip .tooltiptext::after {<br>&nbsp; content: &quot; &quot;;<br>&nbsp; position: absolute;<br>
            &nbsp; top: 50%;<br>&nbsp; left: 100%; /* Справа от всплывающей подсказки */<br>&nbsp; margin-top: -5px;<br>&nbsp;
            border-width: 5px;<br>&nbsp; border-style: solid;<br>&nbsp;
            border-color: transparent transparent transparent black;<br>}
        </div>
        <p>Результат:</p>
        <div class="w3-padding w3-white notranslate w3-center">
            <div class="tooltip">Наведите на меня
                <span class="tooltiptext-rightarrow">Текст подсказки</span>
            </div>
        </div>
        <a target="_blank" href="../csstryit/trycss_tooltip_arrow_right.html" class="w3-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Всплывающие подсказки (анимация)</h2>
    <p>Если вы хотите затемнить текст всплывающей подсказки, когда он собирается быть видимым, вы можете использовать свойство CSS <code class="w3-codespan">transition</code> вместе со свойством <code class="w3-codespan">opacity</code>, и оно становится от полностью невидимого до 100% видимым за указанное количество секунд (в нашем примере это 1 секунда):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .tooltip .tooltiptext {<br>&nbsp; opacity: 0;<br>&nbsp;
            transition: opacity 1s;<br>}<br><br>.tooltip:hover
            .tooltiptext {<br>&nbsp;&nbsp;opacity: 1;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_tooltip_transition.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_animations.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_images.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>