<?php include '../include/head.php'; ?>

<title>CSS Кнопки. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Кнопки. Стилизация кнопок на веб-странице. Как сделать красивую кнопку с помощью CSS? Эффекты для кнопок на сайте. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .btnfade {background-color: #f4511e;border: none;color: white;padding: 16px 32px;text-align: center;font-size: 16px;margin: 4px 2px; opacity: 0.7;transition: 0.3s;}
        .btnfade:hover {opacity: 1}
        .btn {background-color: #4CAF50;border: none;color: #FFF;padding: 15px 32px;text-align: center;-webkit-transition-duration: 0.4s; /* Safari */ transition-duration: 0.4s; margin: 16px 0 !important;text-decoration: none;font-size:16px;cursor:pointer;}
        .btn1 {background-color: #4CAF50;} /* Green */
        .btn2 {background-color: #008CBA;} /* Blue */
        .btn3 {background-color: #f44336;} /* Red */
        .btn4 {background-color: #e7e7e7;color:black;} /* Grey */
        .btn5 {background-color: #555555;} /* Orange */
        .btn1:hover {background-color: #4CAF50;}
        .btn2:hover {background-color: #008CBA;}
        .btn3:hover {background-color: #f44336;}
        .btn4:hover {background-color: #e7e7e7;color:black;}
        .btn5:hover {background-color: #555555;}
        .font1 {font-size:10px;}
        .font2 {font-size:12px;}
        .font3 {font-size:16px;}
        .font4 {font-size:20px;}
        .font5 {font-size:24px;}
        .padding1 {padding:10px 24px;font-size:15px}
        .padding2 {padding:12px 28px;}
        .padding3 {padding:14px 40px;}
        .padding4 {padding:32px 16px;}
        .padding5 {padding:16px 16px;}
        .round1 {border-radius:2px;padding:20px}
        .round2 {border-radius:4px;padding:20px}
        .round3 {border-radius:8px;padding:20px}
        .round4 {border-radius:12px;padding:20px}
        .round5 {border-radius:50%;padding:20px}
        .width1 {width: 250px}
        .width2 {width: 50%}
        .width3 {width: 100%}
        .border1 {border-radius:3px;background-color:white;color:black;border:2px solid #4CAF50;}
        .border2 {border-radius:3px;background-color:white;color:black;border:2px solid #008CBA;}
        .border3 {border-radius:3px;background-color:white;color:black;border:2px solid #f44336;}
        .border4 {border-radius:3px;background-color:white;color:black;border:2px solid #e7e7e7;}
        .border5 {border-radius:3px;background-color:white;color:black;border:2px solid #555555;}
        .border11:hover {background-color:#4CAF50;color:white;}
        .border22:hover {background-color:#008CBA;color:white;}
        .border33:hover {background-color:#f44336;color:white;}
        .border44:hover {background-color:#e7e7e7;}
        .border55:hover {background-color:#555555;color:white;}
        .border111{border-radius:3px;background-color:#4CAF50;color:white;}
        .border222{border-radius:3px;background-color:#008CBA;color:white;}
        .border333 {border-radius:3px;background-color:#f44336;color:white;}
        .border444 {border-radius:3px;background-color:#e7e7e7;}
        .border555 {border-radius:3px;background-color:#555555;color:white;}
        .border111:hover {background-color:white;color:black;border:2px solid #4CAF50;}
        .border222:hover {background-color:white;color:black;border:2px solid #008CBA;}
        .border333:hover {background-color:white;color:black;border:2px solid #f44336;}
        .border444:hover {background-color:white;color:black;border:2px solid #e7e7e7;}
        .border555:hover {background-color:white;color:black;border:2px solid #555555;}
        .shadow1{box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important}
        .shadow2:hover{box-shadow:0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19) !important}
        .disabled{cursor: not-allowed;opacity: 0.6;}
        .button {display: inline-block;border-radius: 4px;background-color: #f4511e;border: none;color: #FFF;text-align: center;font-size: 28px;padding: 20px;width: 180px;transition: all 0.5s;cursor: pointer;margin: 5px;}
        .button span {cursor: pointer;display: inline-block;position: relative;transition: 0.5s;}
        .button span:after {content: "\00bb";position: absolute;opacity: 0; top: 0;right: -20px;transition: 0.5s;}
        .button:hover span {padding-right: 25px;}
        .button:hover span:after {opacity: 1;right: 0;}
        .pressed {display: inline-block;padding: 15px 25px;font-size: 24px;cursor: pointer;text-align: center;text-decoration: none;outline: none;color: #fff;background-color: #4CAF50;border: none;border-radius: 15px;box-shadow: 0 9px #999;}
        .pressed:hover {background-color: #3e8e41}
        .pressed:active {background-color: #3e8e41;box-shadow: 0 5px #666;transform: translateY(4px);}
        .float {margin: 0 !important;float: left;transition: none;}
        .float:hover {background-color: #3e8e41;}
        .rippleripple {position: relative;background-color: #4CAF50;border: none;font-size: 28px;color: #FFF;padding: 20px;width: 200px;text-align: center;-webkit-transition-duration: 0.4s; /* Safari */transition-duration: 0.4s;text-decoration: none;overflow: hidden;cursor: pointer;}
        .rippleripple:after {content: "";background: #f1f1f1;display: block;position: absolute;padding-top: 300%;padding-left: 350%;margin-left: -20px !important;margin-top: -120%;opacity: 0;transition: all 0.8s}
        .rippleripple:active:after {padding: 0;margin: 0;opacity: 1;transition: 0s}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Кнопки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_object-position.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_pagination.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как стилизовать кнопки</strong> на веб-странице с помощью <strong>CSS</strong>.</p>
    <hr>
    <h2>Основные стили кнопок</h2>
    <p><button style="margin-right:25px;">Кнопка по умолчанию</button> <button class="btn w3-green">CSS кнопка</button></p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button {<br>&nbsp;&nbsp;background-color: #4CAF50; /* зеленый */<br>&nbsp; border: none;<br>
            &nbsp;
            color: white;<br>&nbsp; padding: 15px 32px;<br>&nbsp; text-align: center;<br>&nbsp;
            text-decoration: none;<br>&nbsp; display: inline-block;<br>&nbsp;&nbsp;font-size: 16px;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_buttons_basic.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Цвета кнопок</h2>

    <button type="button" class="btn btn1">Green</button>
    <button type="button" class="btn btn2">Blue</button>
    <button type="button" class="btn btn3">Red</button>
    <button type="button" class="btn btn4">Gray</button>
    <button type="button" class="btn btn5">Black</button>

    <p>Используйте свойство <code class="w3-codespan">background-color</code> чтобы изменить цвет фона кнопки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button1 {background-color: #4CAF50;} /* Зеленый */<br>.button2
            {background-color: #008CBA;} /* Синий */<br>.button3 {background-color:
            #f44336;} /* Красный */ <br>
            .button4 {background-color: #e7e7e7; color: black;} /* Серый */ <br>.button5
            {background-color: #555555;} /* Черный */</div>
        <a target="_blank" href="../csstryit/trycss_buttons_color.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Размер кнопок</h2>

    <button type="button" class="btn btn1 font1">10px</button>
    <button type="button" class="btn btn2 font2">12px</button>
    <button type="button" class="btn btn3 font3">16px</button>
    <button type="button" class="btn btn4 font4">20px</button>
    <button type="button" class="btn btn5 font5">24px</button>

    <p>Используйте свойство <code class="w3-codespan">font-size</code> чтобы изменить размер шрифта кнопки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button1 {font-size: 10px;}<br>.button2 {font-size: 12px;}<br>.button3
            {font-size: 16px;}<br>
            .button4 {font-size: 20px;}<br>.button5 {font-size: 24px;}</div>
        <a target="_blank" href="../csstryit/trycss_buttons_font.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>

    <p style="margin-top:35px">Используйте свойство <code class="w3-codespan">padding</code> чтобы изменить отступ кнопки:</p>

    <button type="button" class="btn btn1 padding1">10px 24px</button>
    <button type="button" class="btn btn2 padding2">12px 28px</button>
    <button type="button" class="btn btn3 padding3">14px 40px</button>
    <button type="button" class="btn btn4 padding4">32px 16px</button>
    <button type="button" class="btn btn5 padding5">16px</button>


    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button1 {padding: 10px
            24px;}<br>.button2 {padding: 12px 28px;}<br>.button3 {padding: 14px 40px;}<br>
            .button4 {padding: 32px 16px;}<br>.button5 {padding: 16px;}</div>
        <a target="_blank" href="../csstryit/trycss_buttons_padding.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Округлые кнопки</h2>

    <button type="button" class="btn btn1 round1">2px</button>
    <button type="button" class="btn btn2 round2">4px</button>
    <button type="button" class="btn btn3 round3">8px</button>
    <button type="button" class="btn btn4 round4">12px</button>
    <button type="button" class="btn btn5 round5">50%</button>

    <p>Используйте свойство <code class="w3-codespan">border-radius</code> чтобы добавить закругленные углы кнопке:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button1 {border-radius: 2px;}<br>.button2 {border-radius: 4px;}<br>.button3
            {border-radius: 8px;}<br>
            .button4 {border-radius: 12px;}<br>.button5 {border-radius: 50%;}</div>
        <a target="_blank" href="../csstryit/trycss_buttons_round.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Цветные границы кнопки</h2>

    <button type="button" class="btn border1">Green</button>
    <button type="button" class="btn border2">Blue</button>
    <button type="button" class="btn border3">Red</button>
    <button type="button" class="btn border4">Gray</button>
    <button type="button" class="btn border5">Black</button>

    <p>Используйте свойство <code class="w3-codespan">border</code> чтобы добавить цветную границу для кнопки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button1 {<br>&nbsp; background-color: white;<br>&nbsp;&nbsp;color: black;<br>&nbsp;
            border: 2px solid #4CAF50; /* Green */<br>}<br>...</div>
        <a target="_blank" href="../csstryit/trycss_buttons_border.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Кнопки при наведении мыши</h2>

    <button type="button" class="btn border1 border111">Green</button>
    <button type="button" class="btn border2 border222">Blue</button>
    <button type="button" class="btn border3 border333">Red</button>
    <button type="button" class="btn border4 border444">Grey</button>
    <button type="button" class="btn border5 border555">Black</button>
    <br>

    <button type="button" class="btn border1 border11">Green</button>
    <button type="button" class="btn border2 border22">Blue</button>
    <button type="button" class="btn border3 border33">Red</button>
    <button type="button" class="btn border4 border44">Grey</button>
    <button type="button" class="btn border5 border55">Black</button>

    <p>Используйте селектор <code class="w3-codespan">:hover</code> чтобы изменить стиль кнопки при наведении на неё мыши.</p>
    <p><strong>Совет:</strong> Используйте свойство <code class="w3-codespan">transition-duration</code> чтобы определить скорость эффекта "hover" (зависания):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button {<br>&nbsp; -webkit-transition-duration: 0.4s; /* Safari */<br>&nbsp;
            transition-duration: 0.4s;<br>}<br><br>.button:hover {<br>&nbsp;
            background-color: #4CAF50; /* Green */<br>&nbsp;&nbsp;color: white;<br>}<br>...</div>
        <a target="_blank" href="../csstryit/trycss_buttons_hover.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Тень кнопок</h2>

    <button type="button" class="btn shadow1">Кнопка с тенью</button>
    <button type="button" class="btn shadow2">Тень при наведении</button>
    <p>Используйте свойство <code class="w3-codespan">box-shadow</code> для добавления теней к кнопке:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button1 {<br>&nbsp; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0
            rgba(0,0,0,0.19);<br>}<br><br>.button2:hover {<br>&nbsp;&nbsp;box-shadow: 0 12px
            16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);<br>}</div>
        <a target="_blank" href="../csstryit/trycss_buttons_shadow.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Отключенные кнопки</h2>

    <button type="button" class="btn">Обычная кнопка</button>
    <button type="button" class="btn disabled">Отключенная кнопка</button>

    <p>Используйте свойство <code class="w3-codespan">opacity</code> свойство для добавления прозрачности к кнопке (создает &quot;отключенный&quot; вид).</p>
    <p><strong>Совет:</strong> Вы также можете добавить свойство <code class="w3-codespan">cursor</code>со значением &quot;not-allowed&quot; (не разрешено), которое будет отображать значок &quot;нет парковки&quot; при наведении курсора на кнопку:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .disabled {<br>&nbsp; opacity: 0.6;<br>&nbsp;&nbsp;cursor: not-allowed;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_buttons_disabled.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Ширина кнопок</h2>

    <button type="button" class="btn btn1 width1">250px</button><br>
    <button type="button" class="btn btn2 width2">50%</button>
    <button type="button" class="btn btn3 width3">100%</button>

    <p>По умолчанию размер кнопки определяется её текстовым содержимым (таким же по ширине, как её содержимое). Используйте свойство <code class="w3-codespan">width</code>, чтобы изменить ширину кнопки:</p>
    <p><strong>Совет:</strong> Используйте пиксели, если вы хотите установить фиксированную ширину, и используйте процент для адаптивных кнопок (например, 50% её родительского элемента).</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button1 {width: 250px;}<br>.button2 {width: 50%;}<br>.button3 {width:
            100%;}</div>
        <a target="_blank" href="../csstryit/trycss_buttons_width.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Группы кнопок</h2>

    <button type="button" class="btn btn1 float">Кнопка</button>
    <button type="button" class="btn btn1 float">Кнопка</button>
    <button type="button" class="btn btn1 float">Кнопка</button>
    <button type="button" class="btn btn1 float">Кнопка</button>

    <p style="clear:both"><br>Удалите поля и добавьте <code class="w3-codespan">float:left</code> к каждой кнопке, чтобы создать группу кнопок:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button {<br>&nbsp;&nbsp;float: left;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_buttons_group.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Группа кнопок с границами</h2>

    <button type="button" class="btn btn1 float" style="border:1px solid green;border-right:none;">Кнопка</button>
    <button type="button" class="btn btn1 float" style="border:1px solid green;border-right:none;">Кнопка</button>
    <button type="button" class="btn btn1 float" style="border:1px solid green;border-right:none;">Кнопка</button>
    <button type="button" class="btn btn1 float" style="border:1px solid green">Кнопка</button>

    <p style="clear:both"><br>Используйте свойство <code class="w3-codespan">border</code> для создания группы кнопок с границами:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button {<br>&nbsp;&nbsp;float: left;<br>&nbsp; border: 1px
            solid green;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_buttons_group_border.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Вертикальная группа кнопок</h2>

    <button type="button" class="btn btn1 float" style="float:none;display:block;width:150px;border: 1px solid green;border-bottom:none;margin:0!important">Кнопка</button>
    <button type="button" class="btn btn1 float" style="float:none;display:block;width:150px;border: 1px solid green;border-bottom:none;margin:0!important">Кнопка</button>
    <button type="button" class="btn btn1 float" style="float:none;display:block;width:150px;border: 1px solid green;border-bottom:none;margin:0!important">Кнопка</button>
    <button type="button" class="btn btn1 float" style="float:none;display:block;width:150px;border: 1px solid green;margin:0!important">Кнопка</button>

    <p style="clear:both"><br>Используйте <code class="w3-codespan">display:block</code> вместо <code class="w3-codespan">float:left</code> для группировки кнопок друг под другом, а не рядом друг с другом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .button {<br>&nbsp;&nbsp;display: block;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_buttons_group_vertical.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Кнопка на изображении</h2>

    <div class="w3-display-container" style="max-width:400px">
        <img src="../images/img_lights.jpg" alt="Snow" style="width:100%;">
        <button class="w3-button w3-light-grey w3-hover-black w3-round w3-display-middle">Кнопка</button>
    </div>

    <a target="_blank" href="../csstryit/trycss_buttons_image.html" class="w3-btn w3-margin-top">
        Попробуйте сами &raquo;</a>
    <hr>


    <h2>Анимированные кнопки</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Добавить стрелку при наведении мыши:</p>
        <div class="w3-padding w3-white">
            <button class="button" style="vertical-align:middle"><span>hover </span></button>
        </div>
        <a target="_blank" href="../csstryit/trycss_buttons_animate1.html" class="w3-btn w3-margin-top w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Добавить эффект &quot;нажатия&quot; при клике:</p>
        <div class="w3-padding w3-white">
            <button class="pressed" style="margin:5px;width:180px;padding:20px;font-size:28px;"><span>
Тыкни тут! </span></button>
        </div>
        <a target="_blank" href="../csstryit/trycss_buttons_animate3.html" class="w3-btn w3-margin-top w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Появляться при наведении:</p>
        <div class="w3-padding w3-white">
            <button class="btnfade" style="margin:5px;width:180px;padding:20px;font-size:28px;"><span>
Наведи на меня </span></button>
        </div>
        <a target="_blank" href="../csstryit/trycss_buttons_fade.html" class="w3-btn w3-margin-top w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Добавить эффект "ряби" при клике:</p>
        <div class="w3-padding w3-white">
            <button class="w3-btn rippleripple w3-hover-green w3-hover-none" style="box-shadow:none;margin:5px;width:180px;padding:20px;font-size:28px;"><span>
Тыкни! </span></button>
        </div>
        <a target="_blank" href="../csstryit/trycss_buttons_animate2.html" class="w3-btn w3-margin-top w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_object-position.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_pagination.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>