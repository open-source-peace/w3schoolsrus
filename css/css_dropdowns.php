<?php include '../include/head.php'; ?>

  <title>CSS Горизонтальная панель навигации. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Выпадающие списки меню - dropdown. Как создать выпадающее меню? Стилизация списков. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown:hover .dropbtn {
            background-color:#3e8e41;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 100%;
            overflow: auto;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown2:hover .dropdown-content {
            display: block;
        }
        .right {
            right:0;
        }
        @media only screen and (max-width: 600px) {
            .dropdown {
                display:inline;
            }
            .dropbtn {
                width: 100%;
                margin-top:55px;
            }
            .dropbtn2 {
                margin-top:5px;
            }
            .dropspan {
                width: 100%;
                margin-top:5px;
            }
            .dropimg {
                margin-top:55px;
            }
            .right {
                left:0;
                min-width:300px;
            }
        }
        @media only screen and (max-width: 346px) {
            .right {
                left:0;
                min-width:252px;
            }
        }
        .dropdownimg {
            position: relative;
            display: inline-block;
        }
        .dropdown-contentimg {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .dropdownimg:hover .dropdown-contentimg {
            display: block;
        }
        .descimg {
            padding: 15px;
            text-align: center;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Выпадающие (раскрывающиеся) списки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_navbar.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_image_gallery.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Создание выпадающего (раскрывающегося) списка с помощью CSS.</p>
    <hr>
    <h2>Демо: Пример выпадающего списка</h2>
    <p>Наведите курсор на примеры ниже:</p>

    <div class="w3-row" style="margin-top:35px;margin-bottom:35px;">
        <div class="w3-third">
            <div class="dropdown dropdown2" style="position:relative;top:15px;">
                <span class="dropspan">выпадающий текст</span>
                <div class="dropdown-content" style="padding:8px 16px;min-width:150px;text-align:center">
                    <p>Hello World!</p>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="dropdown dropdown2">
                <button class="dropbtn">Выпадающее меню</button>
                <div class="dropdown-content">
                    <a href="javascript:void(0)">Ссылка 1</a>
                    <a href="javascript:void(0)">Ссылка 2</a>
                    <a href="javascript:void(0)">Ссылка 3</a>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="dropdown dropdown2">
                <span style="position:relative;bottom:15px;">Другое: </span><img class="dropimg" src="../images/img_5terre.jpg" alt="Dropdown" style="width: 100px;height: 50px">
                <div class="dropdown-content right">
                    <div class="img">
                        <img src="../images/img_5terre.jpg" alt="Выпадающий список" style="width:300px;height:200px">
                        <div style="padding:15px;text-align:center;">Прекрасная Cinque Terre</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p style="clear:both"></p>
    <hr>

    <h2>Основной выпадающий (раскрывающийся) список</h2>
    <p>Создайте раскрывающийся список, который появляется, когда пользователь наводит указатель мыши на элемент.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            &lt;style&gt;<br>.dropdown {<br>&nbsp; position: relative;<br>&nbsp;
            display: inline-block;<br>}<br><br>.dropdown-content {<br>&nbsp; display:
            none;<br>&nbsp; position: absolute;<br>&nbsp;
            background-color: #f9f9f9;<br>&nbsp; min-width: 160px;<br>&nbsp;&nbsp;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);<br>
            &nbsp; padding:
            12px 16px;<br>&nbsp; z-index: 1;<br>}<br><br>.dropdown:hover
            .dropdown-content {<br>&nbsp; display: block;<br>}<br>&lt;/style&gt;<br><br><span class="htmlHigh">&lt;div class="dropdown"&gt;<br>
&nbsp; &lt;span&gt;<span style="color:black;">Mouse over me</span>&lt;/span&gt;<br>&nbsp;
&lt;div class="dropdown-content"&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;<span style="color:black;">Hello World!</span>&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</span></div>
        <a target="_blank" href="../csstryit/trycss_dropdown_text.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h3>Объяснение примера</h3>
    <p><strong>HTML)</strong> Используйте любой элемент, чтобы открыть выпадающий контент, например элемент &lt;span&gt; или &lt;button&gt;.</p>
    <p>Используйте элемент контейнера (например, <code class="w3-codespan">&lt;div&gt;</code>), чтобы создать выпадающий контент и добавить в него все, что вы хотите.</p>
    <p>Оберните элемент <code class="w3-codespan">&lt;div&gt;</code> вокруг элементов, чтобы правильно разместить раскрывающийся контент с помощью CSS.</p>
    <p><strong>CSS)</strong>. Класс <code class="w3-codespan">.dropdown</code> использует <code class="w3-codespan">position: relative</code>, который нужен, когда мы хотим, чтобы содержимое раскрывающегося списка размещалось прямо под кнопкой раскрывающегося списка (используя <code class="w3-codespan">position: absolute</code>).</p>
    <p>Класс <code class="w3-codespan">.dropdown-content</code> содержит фактический раскрывающийся контент. По умолчанию он скрыт и будет отображаться при наведении мыши (см. ниже). Обратите внимание, что для <code class="w3-codespan">min-width</code> установлено значение 160px. Можете изменить его.</p>
    <p><strong>Совет</strong>. Если вы хотите, чтобы ширина раскрывающегося содержимого была такой же ширины, как и раскрывающаяся кнопка, установите для <code class="w3-codespan">width</code> значение 100% (и <code class="w3-codespan">overflow:auto</code> для включения прокрутки на маленьких экранах).</p>
    <p>Вместо использования border мы использовали свойство CSS <code class="w3-codespan">box-shadow</code>, чтобы раскрывающееся меню выглядело как &quot;карточка&quot;.</p>
    <p>Селектор <code class="w3-codespan">:hover</code> используется для отображения раскрывающегося меню, когда пользователь наводит указатель мыши на раскрывающуюся кнопку.</p>
    <hr>

    <h2>Выпадающее меню</h2>
    <p>Создайте выпадающее меню, которое позволяет пользователю выбрать опцию из списка:</p>
    <div class="dropdown dropdown2">
        <button class="dropbtn dropbtn2">Выпадающее меню</button>
        <div class="dropdown-content">
            <a href="javascript:void(0)">Ссылка 1</a>
            <a href="javascript:void(0)">Ссылка 2</a>
            <a href="javascript:void(0)">Ссылка 3</a>
        </div>
    </div>
    <p>Этот пример похож на предыдущий, за исключением того, что мы добавляем ссылки в раскрывающемся списке и стилизуем их под стилизованную кнопку раскрывающегося списка:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            &lt;style&gt;<br>/* Стилизация выпадающей кнопки */<br>.dropbtn {<br>&nbsp;
            background-color: #4CAF50;<br>&nbsp; color: white;<br>&nbsp;
            padding: 16px;<br>&nbsp; font-size: 16px;<br>&nbsp;
            border: none;<br>&nbsp; cursor: pointer;<br>}<br><br>/* Контейнер &lt;div&gt; - необходимо разместить выпадающий контент */<br>.dropdown {<br>
            &nbsp; position: relative;<br>&nbsp; display:
            inline-block;<br>}<br><br>/* Выпадающий контент (скрыт по умолчанию) */<br>
            .dropdown-content {<br>&nbsp; display: none;<br>&nbsp; position:
            absolute;<br>&nbsp; background-color: #f9f9f9;<br>&nbsp;
            min-width: 160px;<br>&nbsp; box-shadow:
            0px 8px 16px 0px rgba(0,0,0,0.2);<br>&nbsp; z-index: 1;<br>}<br><br>/* Ссылки внутри выпадающего */<br>
            .dropdown-content a {<br>&nbsp; color: black;<br>&nbsp;&nbsp;padding: 12px 16px;<br>&nbsp; text-decoration: none;<br>
            &nbsp;
            display: block;<br>}<br><br>/* Изменить цвет выпадающих ссылок при наведении */<br>
            .dropdown-content a:hover {background-color: #f1f1f1}<br><br>/* Показать выпадающее меню при наведении */<br>.dropdown:hover .dropdown-content {<br>&nbsp;
            display: block;<br>}<br><br>/* Изменить цвет фона кнопки выпадающего списка, когда отображается содержимое выпадающего списка. */<br>.dropdown:hover .dropbtn {<br>&nbsp;&nbsp;background-color: #3e8e41;<br>}<br>&lt;/style&gt;<br><br><span class="htmlHigh">&lt;div class="dropdown"&gt;<br>&nbsp; &lt;button class="dropbtn"&gt;<span style="color:black;">Выпадающее меню</span>&lt;/button&gt;<br>&nbsp;
&lt;div class="dropdown-content"&gt;<br>&nbsp;&nbsp;&nbsp; &lt;a href="#"&gt;<span style="color:black;">Ссылка
1</span>&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp;
&lt;a href="#"&gt;<span style="color:black;">Ссылка 2</span>&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp; &lt;a href="#"&gt;<span style="color:black;">Ссылка 3</span>&lt;/a&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</span></div>
        <a target="_blank" href="../csstryit/trycss_dropdown_button.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Выровненный по правому краю выпадающий контент</h2>

    <div class="dropdown dropdown2" style="float:left;">
        <button class="dropbtn dropbtn2">Слева</button>
        <div class="dropdown-content" style="min-width:160px;">
            <a href="javascript:void(0)">Ссылка 1</a>
            <a href="javascript:void(0)">Ссылка 2</a>
            <a href="javascript:void(0)">Ссылка 3</a>
        </div>
    </div>

    <div class="dropdown dropdown2" style="float:right;">
        <button class="dropbtn dropbtn2">Справа</button>
        <div class="dropdown-content" style="min-width:160px;right:0;">
            <a href="javascript:void(0)">Ссылка 1</a>
            <a href="javascript:void(0)">Ссылка 2</a>
            <a href="javascript:void(0)">Ссылка 3</a>
        </div>
    </div>
    <p style="clear:both;"></p>


    <p style="margin-top:30px;">Если вы хотите, чтобы выпадающее меню перемещалось справа налево, а не слева направо, добавьте <code class="w3-codespan">right: 0;</code></p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .dropdown-content {<br>&nbsp; right: 0;<br>}<br></div>
        <a target="_blank" href="../csstryit/trycss_dropdown_right.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Больше примеров</h2>

    <div class="w3-example">
        <h3>Выпадающее изображение</h3>
        <p>Как добавить изображение и другой контент внутри выпадающего списка.</p>

        <div class="w3-white w3-padding">
            <p>Наведите курсор на изображение:</p>
            <div class="dropdownimg" style="padding-bottom:15px;">
                <img src="../images/img_5terre.jpg" alt="Выпадающее изображение" style="width: 100px; height: 50px">
                <div class="dropdown-contentimg">
                    <img src="../images/img_5terre.jpg" alt="dropdown-изображение" style="width: 300px; height: 200px">
                    <div class="descimg">Красивая Чинкве Терре</div>
                </div><br>
            </div><br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../csstryit/trycss_dropdown_image.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Выпадающий навбар</h3>
        <p>Как добавить выпадающее меню внутри панели навигации.</p>

        <div class="w3-white">
            <iframe src="../csstryit/trycss_dropdown_navbar1.html" style="width:100%;border:none;height:200px"></iframe>
        </div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../csstryit/trycss_dropdown_navbar.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_navbar.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_image_gallery.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>