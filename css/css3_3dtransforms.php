<?php include '../include/head.php'; ?>

<title>CSS 3D Трансформации. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS 3D Трансформации (преобразования). Методы 3D Трансформаций. Объёмные фигуры на веб-страницах. Перемещение, поворот и вращение элементов на веб-странице. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">
    <style>
        #rotate2D,#rotate3D {
            width: 80px;
            height: 70px;
            color: white;
            position:relative;
            font-weight:bold;
            font-size:15px;
            padding:10px;
            float:left;
            border-radius:5px;
            border:1px solid #000000;
            background:red;
            margin:10px 50px 10px 10px;
        }
    </style>
    <script>
        var x,y,n=0,ny=0,rotINT,rotYINT
        function rotateDIV()
        {
            x=document.getElementById("rotate2D")
            clearInterval(rotINT)
            rotINT=setInterval("startRotate()",10)
        }
        function rotateYDIV()
        {
            y=document.getElementById("rotate3D")
            clearInterval(rotYINT)
            rotYINT=setInterval("startYRotate()",10)
        }
        function startRotate()
        {
            n=n+1
            x.style.transform="rotate(" + n + "deg)"
            x.style.webkitTransform="rotate(" + n + "deg)"
            x.style.OTransform="rotate(" + n + "deg)"
            x.style.MozTransform="rotate(" + n + "deg)"
            if (n==180 || n==360)
            {
                clearInterval(rotINT)
                if (n==360){n=0}
            }
        }
        function startYRotate()
        {
            ny=ny+1
            y.style.transform="rotateY(" + ny + "deg)"
            y.style.webkitTransform="rotateY(" + ny + "deg)"
            y.style.OTransform="rotateY(" + ny + "deg)"
            y.style.MozTransform="rotateY(" + ny + "deg)"
            if (ny==180 || ny>=360)
            {
                clearInterval(rotYINT)
                if (ny>=360){ny=0}
            }
        }
    </script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">3D Трансформации</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_2dtransforms.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_transitions.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS 3D Трансформации</h2>
    <p>CSS также поддерживает 3D-трансформации.</p>
    <p>Наведите курсор мыши на элементы ниже, чтобы увидеть разницу между 2D и 3D трансформациями:</p>
    <div style="height:80px;">
        <div onmouseover="rotateDIV()" id="rotate2D">2D поворот</div>
        <div onmouseover="rotateYDIV()" id="rotate3D">3D поворот</div>
    </div>
    <p>В этой главе вы узнаете о следующем свойстве CSS:</p>
    <ul>
        <li><code class="w3-codespan">transform</code></li>
    </ul>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, которая полностью поддерживает свойство.</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:25%;font-size:16px;text-align:left;">Свойство</th>
                <th style="width:15%;" class="bsChrome" title="Chrome"></th>
                <th style="width:15%;" class="bsEdge" title="Internet Explorer / Edge"></th>
                <th style="width:15%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:15%;" class="bsSafari" title="Safari"></th>
                <th style="width:15%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td style="text-align:left;">transform</td>
                <td>36.0<br></td>
                <td>10.0<br></td>
                <td>16.0<br></td>
                <td>9.0<br></td>
                <td>23.0<br></td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>Специальные браузерные префиксы</h2>
    <p>Некоторым старым браузерам нужны специальные префиксы (-webkit-) для понимания свойств 3D-преобразования:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #myDiv
            {<br>&nbsp; -webkit-transform: rotateY(130deg); /* Safari до 9.0 */<br>&nbsp;
            transform: rotateY(130deg); /*
            Стандартный синтаксис */<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_rotateY.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Методы 3D Трансформаций</h2>
    <p>С помощью CSS свойства <code class="w3-codespan">transform</code> вы можете использовать следующие методы 3D трансформации:</p>
    <ul>
        <li><code class="w3-codespan">rotateX()</code></li>
        <li><code class="w3-codespan">rotateY()</code></li>
        <li><code class="w3-codespan">rotateZ()</code></li>
    </ul>
    <p>Rotate (в переводе с анг.) - Поворот, вращение.</p>
    <hr>

    <h2>Метод rotateX()</h2>
    <img src="../images/transform_rotatex.gif" alt="Поворот по X" /><br><br>
    <p>Метод <code class="w3-codespan">rotateX()</code> вращает элемент вокруг своей оси X в заданном градусе:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #myDiv
            {<br>
            &nbsp;
            transform: rotateX(150deg);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_rotateX.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод rotateY()</h2>
    <img src="../images/transform_rotatey.gif" alt="Поворот по Y" /><br><br>
    <p>Метод <code class="w3-codespan">rotateY()</code> вращает элемент вокруг своей оси Y в заданном градусе:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #myDiv
            {<br>
            &nbsp;
            transform: rotateY(130deg);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_rotateY.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод rotateZ()</h2>
    <p>Метод <code class="w3-codespan">rotateZ()</code> вращает элемент вокруг своей оси Z в заданном градусе:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #myDiv
            {<br>
            &nbsp;
            transform: rotateZ(90deg);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_rotateZ.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_3dtransforms1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_3dtransforms2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_3dtransforms3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>CSS Свойства трансформации</h2>
    <p>В следующей таблице перечислены все свойства 3D-трансформации:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:22%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_transform.php">transform</a></td>
            <td>Применяет 2D или 3D трансформацию к элементу</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_transform-origin.php">transform-origin</a></td>
            <td>Позволяет изменить положение трансформированных элементов</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_transform-style.php">transform-style</a></td>
            <td>Определяет, как вложенные элементы отображаются в трехмерном (3D) пространстве</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_perspective.php">perspective</a></td>
            <td>Определяет перспективу просмотра 3D-элементов.</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_perspective-origin.php">perspective-origin</a></td>
            <td>Определяет нижнюю позицию 3D-элементов</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_backface-visibility.php">backface-visibility</a></td>
            <td>Определяет, должен ли элемент быть видимым, если он не обращен к экрану</td>
        </tr>
    </table>

    <h2>CSS Методы 3D трансформации</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:22%">Функция</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>matrix3d<br>
                (<i>n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n</i>)</td>
            <td>Определяет 3D трансформацию, используя матрицу 4x4 из 16 значений</td>
        </tr>
        <tr>
            <td>translate3d(<i>x,y,z</i>)</td>
            <td>Определяет 3D перемещение</td>
        </tr>
        <tr>
            <td>translateX(<i>x</i>)</td>
            <td>Определяет 3D-перемещение, используя только значение для оси X</td>
        </tr>
        <tr>
            <td>translateY(<i>y</i>)</td>
            <td>Определяет 3D-перемещение, используя только значение для оси Y</td>
        </tr>
        <tr>
            <td>translateZ(<i>z</i>)</td>
            <td>Определяет 3D-перемещение, используя только значение для оси Z</td>
        </tr>
        <tr>
            <td>scale3d(<i>x,y,z</i>)</td>
            <td>Определяет размер 3D трансформации</td>
        </tr>
        <tr>
            <td>scaleX(<i>x</i>)</td>
            <td>Определяет размер 3D трансформации, применяя значения вдоль оси X</td>
        </tr>
        <tr>
            <td>scaleY(<i>y</i>)</td>
            <td>Определяет размер 3D трансформации, применяя значения вдоль оси Y</td>
        </tr>
        <tr>
            <td>scaleZ(<i>z</i>)</td>
            <td>Определяет размер 3D трансформации, применяя значения вдоль оси Z</td>
        </tr>
        <tr>
            <td>rotate3d(<i>x,y,z,angle</i>)</td>
            <td>Определяет 3D поворот</td>
        </tr>
        <tr>
            <td>rotateX(<i>angle</i>)</td>
            <td>Определяет 3D поворот вдоль оси X</td>
        </tr>
        <tr>
            <td>rotateY(<i>angle</i>)</td>
            <td>Определяет 3D поворот вдоль оси Y</td>
        </tr>
        <tr>
            <td>rotateZ(<i>angle</i>)</td>
            <td>Определяет 3D поворот вдоль оси Y</td>
        </tr>
        <tr>
            <td>perspective(<i>n</i>)</td>
            <td>Определяет вид в перспективе для 3D трансформированного элемента</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_2dtransforms.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_transitions.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>