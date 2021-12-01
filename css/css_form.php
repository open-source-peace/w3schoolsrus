<?php include '../include/head.php'; ?>

  <title>CSS Формы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Формы. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<style>
        .test label {
            font-weight: 200;
            font-size: 15px;
        }
        .test input[type=text],
        .test select {
            width: 100%;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 3px #ddd;
            border-radius: 4px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 20px 12px;
        }
        input[type=text].icon {
            width: 100%;
            padding: 12px 40px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url('../images/searchicon.png');
            background-position: 10px 15px;
            background-repeat: no-repeat;
        }
        .test input[type=button], .test .button {
            width: 100%;
            text-align:center;
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            margin: 14px 0 8px 0;
            display: inline-block;
            border: none;
            border-radius: 4px;
            box-shadow: inset 0 1px 3px #ddd;
        }
        .test input[type=button]:hover, .test .button:hover {
            background-color: #45a049;
        }
        .test input[type=text]:focus,
        .test select:focus {
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        }
        .focus1 {
            width:100%;
            padding: 12px 20px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #555;
            margin-bottom: 4px;
        }
        .focus1:focus {
            background-color: lightblue;
        }
        .focus2 {
            width: 100%;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 3px solid #ccc;
            transition: 0.5s;
        }
        .focus2:focus {
            border: 3px solid #555 !important;
            outline: none;
        }
        .label {
            color: green;
            display: inline-block;
            width: 130px;
            text-align: right;
            padding-right: 15px;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-decoration: none;
            margin: 4px 2px;
        }
        .input1 {
            width: 100%;
            padding: 12px 20px;
            box-sizing: border-box;
            margin: 8px 0;
        }
        .inputborder {
            width: 100%;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid red;
            border-radius: 4px;
        }
        .inputborder2 {
            width: 100%;
            padding: 12px 20px;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid red;
        }
        .inputcolor {
            width:100%;
            padding: 12px 20px;
            box-sizing: border-box;
            border:none;
            background-color:#3CBC8D;
            color:white;
        }
        input[type=text]#myInp {
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url('../images/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width .4s ease-in-out;
            transition: width .4s ease-in-out;
        }
        input[type=text]#myInp:focus {width: 100%;}
        .myfr {height:450px;}
        @media (max-width: 653px) {
            .myfr {
                height:600px;
            }
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Формы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_attribute_selectors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_counters.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Внешний вид HTML-формы может быть значительно улучшен с помощью CSS:</p>

    <div style="border-radius:5px;background-color:#f2f2f2;padding:40px;">
        <form action="https://www.w3schools.com/action_page.php" class="test">
            <label for="fname">Имя</label>
            <input type="text" id="fname" name="firstname" placeholder="Ваше имя..">
            <label for="lname">Фамилия</label>
            <input type="text" id="lname" name="lastname" placeholder="Ваша фамилия..">
            <label for="country">Страна</label>
            <select id="country" name="country">
                <option value="ukraine">Украина</option>
                <option value="australia">Австралия</option>
                <option value="canada">Канада</option>
                <option value="usa">США</option>
            </select>
            <a target="_blank" href="../csstryit/trycss_forms.html" class="button">Попробуйте сами &raquo;</a>
        </form>
    </div>
    <hr>

    <h2>Стилизация полей ввода (input)</h2>
    <p>Используйте свойство <code class="w3-codespan">width</code> чтобы определить ширину поля ввода:</p>
    <label for="fname2">Имя</label>
    <input type="text" id="fname2" name="firstname" style="width:100%;">
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            input
            {<br>
            &nbsp;&nbsp;width: 100%;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_form_width.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Приведенный выше пример относится ко всем элементам <code class="w3-codespan">&lt;input&gt;</code>. Если вы хотите стилизовать только определенный тип ввода, вы можете использовать атрибуты селекторов:</p>
    <ul>
        <li><code class="w3-codespan">input[type=text]</code> - выберет только текстовые поля</li>
        <li><code class="w3-codespan">input[type=password]</code> - выберет только поля пароля</li>
        <li><code class="w3-codespan">input[type=number]</code> - выберет только числовые поля</li>
        <li>и т.д.</li>
    </ul>
    <hr>

    <h2>Пространство внутри и снаружи поля Input</h2>
    <p>Используйте свойство <code class="w3-codespan">padding</code> чтобы добавить пространство внутри текстового поля.</p>
    <p><strong>Совет:</strong> Если у вас много полей input, следующих друг за другом, вы также можете добавить немного <code class="w3-codespan">margin</code>, чтобы добавить больший отступ между ними:</p>
    <label for="fname3">Имя</label>
    <input type="text" id="fname3" name="firstname" class="input1">
    <label for="lname3">Фамилия</label>
    <input type="text" id="lname3" name="lastname" class="input1">
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            input[type=text]
            {<br>
            &nbsp; width: 100%;<br>&nbsp; padding: 12px 20px;<br>&nbsp; margin: 8px 0;<br>&nbsp;
            box-sizing: border-box;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_form_padding.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Обратите внимание, что мы установили свойство <code class="w3-codespan">box-sizing</code> на <code class="w3-codespan">border-box</code>. Это гарантирует, что отступы и в конечном итоге границы включены в общую ширину и высоту элементов. <br>Вы можете узнать больше о свойстве <code class="w3-codespan">box-sizing</code> в разделе <a href="css3_box-sizing.php">CSS Размер блока</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>

    <h2>Поля Input с границами</h2>
    <p>Используйте свойство <code class="w3-codespan">border</code> чтобы изменить размер и цвет границы, и используйте свойство <code class="w3-codespan">border-radius</code>, чтобы добавить округлые углы:</p>

    <label for="fname4">Имя</label>
    <input type="text" id="fname4" name="firstname" class="inputborder">

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            input[type=text]
            {<br>&nbsp;&nbsp;border: 2px solid red;<br>&nbsp;
            border-radius: 4px;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_form_border.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Если необходимо отобразить только нижнюю границу, используйте свойство <code class="w3-codespan">border-bottom</code>:</p>
    <label for="fname7">Имя</label>
    <input type="text" id="fname7" name="firstname" class="inputborder2">
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            input[type=text]
            {<br>&nbsp;&nbsp;border: none;<br>&nbsp;
            border-bottom: 2px solid red;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_form_border2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Цветные поля Input</h2>
    <p>Используйте свойство <code class="w3-codespan">background-color</code>, чтобы добавить цвет фона для input, и свойство <code class="w3-codespan">color</code> чтобы изменить цвет текста:</p>

    <input type="text" value="John" name="firstname" class="inputcolor">

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            input[type=text]
            {<br>&nbsp;&nbsp;background-color: #3CBC8D;<br>&nbsp; color: white;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_form_color.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Фокусированные поля Input</h2>
    <p>По умолчанию некоторые браузеры добавляют синий контур вокруг ввода, когда он получает фокус (нажатие). Вы можете удалить это поведение, добавив <code class="w3-codespan">outline: none;</code> к данным input.</p>
    <p>Используйте селектор <code class="w3-codespan">:focus</code> чтобы сделать что-то с полем input, когда он получает фокус:</p>

    <div class="w3-row-padding" style="margin-left:-16px;margin-right:-16px;">
        <div class="w3-half">
            <input class="focus1" type="text" name="firstname">
            <div class="w3-example">
                <h3>Пример</h3>
                <div class="w3-code notranslate cssHigh">
                    input[type=text]:focus
                    {<br>
                    &nbsp;&nbsp;background-color: lightblue;<br>
                    }</div>
                <a target="_blank" href="../csstryit/trycss_form_focus.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
            </div>
        </div>
        <div class="w3-half">
            <input class="focus2" type="text" name="firstname">
            <div class="w3-example">
                <h3>Пример</h3>
                <div class="w3-code notranslate cssHigh">
                    input[type=text]:focus
                    {<br>
                    &nbsp;&nbsp;border: 3px solid #555;<br>
                    }</div>
                <a target="_blank" href="../csstryit/trycss_form_focus2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
            </div>
        </div>
    </div>
    <hr>

    <h2>Input с иконкой/изображением</h2>
    <p>Если необходима иконка внутри input, используйте свойство <code class="w3-codespan">background-image</code> и
        расположите его с помощью свойства <code class="w3-codespan">background-position</code>. Также обратите внимание, что мы добавили большой левый отступ (padding), чтобы зарезервировать пространство для иконки:</p>

    <input type="text" name="search" placeholder="Search.." class="icon">

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            input[type=text]
            {<br>&nbsp; background-color: white;<br>&nbsp; background-image: url('../images/searchicon.png');<br>&nbsp;
            background-position: 10px 10px; <br>&nbsp; background-repeat:
            no-repeat;<br>&nbsp;
            padding-left: 40px;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_form_icon.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Анимированный поиск Input</h2>
    <p>В этом примере мы используем CSS свойство <code class="w3-codespan">transition</code> чтобы анимировать ширину поискового ввода, когда он получает фокус. Подробнее о свойстве <code class="w3-codespan">transition</code> вы узнаете позже в главе <a href="css3_transitions.php">CSS Переходы</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>

    <input id="myInp" type="text" name="search" placeholder="Поиск..">

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            input[type=text] {<br>&nbsp; -webkit-transition: width 0.4s
            ease-in-out;<br>&nbsp; transition: width 0.4s ease-in-out;<br>}<br><br>input[type=text]:focus {<br>
            &nbsp;
            width: 100%;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_form_search_anim.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Стилизация поля Textarea</h2>
    <p><strong>Совет:</strong> Используйте свойство <code class="w3-codespan">resize</code> чтобы предотвратить изменение размера текстовых областей (отключите &quot;захват&quot; в правом нижнем углу поля):</p>
    <textarea name="firstname" style="background-color:#f8f8f8;width:100%;padding: 12px 20px;resize:none;height:150px;box-sizing: border-box;border:2px solid #ccc;border-radius:4px;">
Какой-то текст...
</textarea>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            textarea
            {<br>&nbsp; width: 100%;<br>&nbsp; height: 150px;<br>&nbsp; padding: 12px 20px;<br>&nbsp;
            box-sizing: border-box;<br>&nbsp; border: 2px solid #ccc;<br>&nbsp;
            border-radius: 4px;<br>&nbsp; background-color: #f8f8f8;<br>&nbsp; resize: none;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_form_textarea.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Стилизация меню Select</h2>
    <form class="test">
        <select id="country2" name="country" style="background-color:#f1f1f1;border:none;">
            <option value="ukraine">Украина</option>
            <option value="australia">Австралия</option>
            <option value="canada">Канада</option>
            <option value="usa">США</option>
        </select>
    </form>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            select
            {<br>&nbsp; width: 100%;<br>&nbsp; padding: 16px 20px;<br>&nbsp;
            border: none;<br>&nbsp; border-radius: 4px;<br>&nbsp;&nbsp;background-color: #f1f1f1;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_form_select.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Стилизация кнопок Input</h2>

    <input type="button" value="Button" class="button">
    <input type="button" value="Button" class="button" style="width:100%;">

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            input[type=button], input[type=submit], input[type=reset]
            {<br>&nbsp; background-color: #4CAF50;<br>&nbsp; border:
            none;<br>&nbsp; color: white;<br>&nbsp; padding:
            16px 32px;<br>&nbsp; text-decoration: none;<br>&nbsp;
            margin: 4px 2px;<br>&nbsp; cursor: pointer;<br>
            }<br><br>/* Совет: используйте <strong>width: 100%</strong> для кнопок на всю ширину */</div>
        <a target="_blank" href="../csstryit/trycss_form_button.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Для получения дополнительной информации о том, как стилизовать кнопки с помощью CSS, прочитайте раздел <a href="css3_buttons.php">CSS Кнопки</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>

    <h2>Адаптивная форма</h2>
    <p>Измените размер окна браузера, чтобы увидеть эффект. Если ширина экрана меньше 600 пикселей, расположите два столбца друг над другом, а не рядом друг с другом.</p>
    <div class="w3-note w3-panel">
        <p><strong>Дополнительно:</strong> В следующем примере используется <a href="css3_mediaqueries.php">медиа запрос</a> для создания адаптивной формы. Вы узнаете больше об этом в следующей главе.</p>
    </div>
    <iframe src="../csstryit/trycss_form_responsive_ifr.html" style="margin-left:-8px;border:none;width:100%;" class="myfr"></iframe>
    <a target="_blank" href="../csstryit/trycss_form_responsive.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_attribute_selectors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_counters.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>