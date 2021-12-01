<?php include '../include/head.php'; ?>

<title>CSS Градиенты. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Градиенты. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<style>
        #grad1 {
            height: 250px;
            width:100%;
            background-color: #1fc8db; /* For browsers that do not support gradients */
            background-image: linear-gradient(140deg, #EADEDB 0%, #BC70A4 50%, #BFD641 75%);
            color:white;
            opacity:0.95;
        }

        #grad2 {
            height: 150px;
            width:100%;
            background-color: red; /* For browsers that do not support gradients */
            background-image: linear-gradient(red,yellow);
        }

        #grad3 {
            height: 150px;
            width:100%;
            background-color: red; /* For browsers that do not support gradients */
            background-image: linear-gradient(to right,red,yellow);
        }

        #grad4 {
            height: 150px;
            width:100%;
            background-color: red; /* For browsers that do not support gradients */
            background-image: linear-gradient(to bottom right,red,yellow);
        }

        #grad5 {
            height: 150px;
            width:100%;
            background-color: red; /* For browsers that do not support gradients */
            background-image: linear-gradient(180deg, red, yellow);
        }

        #grad6 {
            height: 150px;
            width:100%;
            background-color: red; /* For browsers that do not support gradients */
            background-image: linear-gradient(red, yellow, green);
        }

        #grad7 {
            height: 150px;
            width:100%;
            background-color: red; /* For browsers that do not support gradients */
            background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
        }

        #grad8 {
            height: 150px;
            width:100%;
            background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
        }

        #grad9 {
            height: 150px;
            width:100%;
            background-color: red; /* For browsers that do not support gradients */
            background-image: repeating-linear-gradient(red, yellow 10%, green 20%);
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Градиенты</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_colors_keywords.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_gradients_radial.php">Next &#10095;</a>
    </div>
    <hr>
    <div id="grad1" style="text-align:center;margin:auto;color:#f3f3f3;font-size:30px;font-weight:500;padding-top:105px;">
        Градиентные фоны</div>
    <hr>
    <p>Градиенты CSS позволяют отображать плавные переходы между двумя или более указанными цветами.</p>
    <p>CSS определяет два типа градиентов:</p>
    <ul>
        <li><strong>Линейные градиенты (идет вниз/вверх/влево/вправо/по диагонали)</strong></li>
        <li><strong>Радиальные градиенты (определяемые их центром)</strong></li>
    </ul>
    <hr>

    <h2>CSS Линейные градиенты</h2>
    <p>Чтобы создать линейный градиент, вы должны определить как минимум две точки цвета. Цветовые точки - это цвета, между которыми вы хотите сделать плавные переходы. Вы также можете установить начальную точку и направление (или угол) вместе с эффектом градиента.</p>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate">
        background-image: linear-gradient(<em>direction</em>, <em>color-stop1</em>, <em>color-stop2, ...</em>);
    </div>

    <p><strong>Направление - сверху вниз (по умолчанию)</strong></p>
    <p>В следующем примере показан линейный градиент, который начинается сверху. Он начинается с красного, переходя в желтый:</p>
    <div id="grad2" style="text-align:center;">сверху вниз (по умолчанию)</div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #grad {<br>&nbsp;&nbsp;background-image: linear-gradient(red, yellow);<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-linear.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p><strong>Направление - слева направо</strong></p>
    <p>В следующем примере показан линейный градиент, начинающийся слева. Он начинается с красного, переходя в желтый:</p>
    <div id="grad3" style="text-align:center;">слева направо</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #grad {<br>&nbsp; background-image: linear-gradient(to right, red , yellow);<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-linear_ltr.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p><strong>Направление - диагональ</strong></p>
    <p>Вы можете создать градиент по диагонали, указав как горизонтальное, так и вертикальное начальное положение.</p>
    <p>В следующем примере показан линейный градиент, который начинается слева вверху (и идёт вниз справа). Он начинает с красного, переходя в жёлтый:</p>
    <div id="grad4" style="text-align:center;">верхний левый нижний правый</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #grad {<br>&nbsp; background-image: linear-gradient(to bottom right, red, yellow);<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-linear_diagonal.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    
    <h2>Использование углов</h2>
    <p>Если вам нужен больший контроль над направлением градиента, вы можете определить угол вместо предопределенных направлений (вниз, вверх, вправо, влево, вправо внизу и т.д.). Значение 0deg эквивалентно &quot;вверху&quot;. Значение 90deg эквивалентно &quot;вправо&quot;. Значение 180deg эквивалентно &quot;вниз&quot;.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate">
        <div>
            background-image: linear-gradient(<em>angle</em>, <em>color-stop1</em>, <em>color-stop2</em>);
        </div></div>

    <p>В следующем примере показано, как использовать углы для линейных градиентов:</p>
    <div id="grad5" style="text-align:center;">180deg</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #grad {<br>&nbsp; background-image: linear-gradient(180deg, red, yellow);<br>
            } </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-linear_angles.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Использование нескольких цветовых точек</h2>
    <p>В следующем примере показан линейный градиент (сверху вниз) с несколькими цветовыми точками:</p>
    <div id="grad6"></div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #grad {<br>&nbsp; background-image: linear-gradient(red, yellow, green);<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-linear_cs.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>В следующем примере показано, как создать линейный градиент (слева направо) с цветом радуги и некоторым текстом:</p>
    <div id="grad7" style="text-align:center;margin:auto;color:#888888;font-size:40px;font-weight:bold">
        Радужный фон
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #grad {<br>&nbsp; background-image: linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet); <br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-linear_rainbow.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Использование прозрачности</h2>
    <p>Градиенты CSS также поддерживают прозрачность, которую можно использовать для создания эффектов затухания.</p>
    <p>Чтобы добавить прозрачности, мы используем функцию rgba() для определения цветовых точек. Последний параметр в функции rgba() может иметь значение от 0 до 1, и он определяет прозрачность цвета: 0 указывает на полную прозрачность, 1 указывает на полный цвет (без прозрачности).</p>
    <p>В следующем примере показан линейный градиент, начинающийся слева. Он начинается полностью прозрачным, переходя в полностью красный цвет:</p>
    <div id="grad8"></div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #grad {<br>&nbsp; background-image: linear-gradient(to right, rgba(255,0,0,0),
            rgba(255,0,0,1));<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-linear_trans.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Повторение линейного градиента</h2>
    <p>Функция repeat-linear-gradient() используется для повторения линейных градиентов:</p>
    <div id="grad9"></div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Повторяющийся линейный градиент:</p>
        <div class="w3-code notranslate cssHigh">
            #grad {<br>&nbsp; background-image:
            repeating-linear-gradient(red, yellow 10%, green 20%);<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-linear_repeating.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_colors_keywords.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_gradients_radial.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>