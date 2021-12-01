<?php include '../include/head.php'; ?>

<title>CSS 2D Трансформации. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS 2D Трансформации (преобразования). Методы 2D трансформаций. Визуальные эффекты на веб-страницах. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
    <style>
        #rotate2D {
            width:80px;
            height:70px;
            color:white;
            position:relative;
            font-weight:bold;
            font-size:15px;
            padding:10px;
            float:left;
            border-radius:5px;
            border:1px solid #000;
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
    </script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">2D Трансформации</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_fonts.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_3dtransforms.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS 2D Трансформации</h2>
    <p><strong>CSS-трансформации</strong> (преобразования) позволяют перемещать, вращать, масштабировать и наклонять элементы.</p>
    <p>Наведите курсор мыши на элемент ниже, чтобы увидеть 2D-трансформацию:</p>
    <div style="height:80px;">
        <div onmouseover="rotateDIV()" id="rotate2D">2D поворот</div>
    </div>
    <p>В этой главе вы узнаете о следующем CSS свойстве:</p>
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
    <p>Некоторым старым браузерам нужны специальные префиксы (-ms- или -webkit-) для понимания свойств 2D-трансформации:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>&nbsp; -ms-transform: rotate(20deg); /* IE 9 */<br>&nbsp; -webkit-transform:
            rotate(20deg); /* Safari до 9.0 */<br>&nbsp; transform: rotate(20deg); /*
            Стандартный синтаксис */<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_rotate.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Методы 2D трансформаций</h2>
    <p>С помощью CSS свойства <code class="w3-codespan">transform</code> вы можете использовать следующие методы 2D-трансформации:</p>
    <ul>
        <li><code class="w3-codespan">translate()</code></li>
        <li><code class="w3-codespan">rotate()</code></li>
        <li><code class="w3-codespan">scaleX()</code></li>
        <li><code class="w3-codespan">scaleY()</code></li>
        <li><code class="w3-codespan">scale()</code></li>
        <li><code class="w3-codespan">skewX()</code></li>
        <li><code class="w3-codespan">skewY()</code></li>
        <li><code class="w3-codespan">skew()</code></li>
        <li><code class="w3-codespan">matrix()</code></li>
    </ul>
    <div class="w3-panel w3-note">
        <p><strong>Совет:</strong> Вы узнаете о 3D преобразованиях в следующей главе.</p>
    </div>
    <hr>

    <h2>Метод translate()</h2>
    <img src="../images/transform_translate.gif" alt="Translate"><br><br>
    <p>Метод <code class="w3-codespan">translate()</code> перемещает элемент из его текущей позиции (в соответствии с параметрами, указанными для оси X и оси Y).</p>
    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> перемещается на 50 пикселей вправо и на 100 пикселей ниже его текущей позиции:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: translate(50px, 100px);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_translate.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод rotate()</h2>
    <img src="../images/transform_rotate.gif" alt="Rotate">
    <p>Метод <code class="w3-codespan">rotate()</code> вращает элемент по часовой или против часовой стрелки в соответствии с заданным градусом.</p>
    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> поворачивается по часовой стрелке на 20 градусов:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;&nbsp;transform: rotate(20deg);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_rotate.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Использование отрицательных значений будет вращать элемент против часовой стрелки.</p>
    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> поворачивается против часовой стрелки на 20 градусов:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: rotate(-20deg);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_rotate2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод scale()</h2>
    <img src="../images/transform_scale.gif" alt="Scale"><br><br>
    <p>Метод <code class="w3-codespan">scale()</code> увеличивает или уменьшает размер элемента (в соответствии с параметрами, указанными для ширины и высоты).</p>
    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> увеличивается в два раза по сравнению с его первоначальной шириной и в три раза по сравнению с его первоначальной высотой:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: scale(2, 3);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_scale.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> уменьшается до половины его первоначальной ширины и высоты:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: scale(0.5, 0.5);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_scale2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод scaleX()</h2>
    <p>Метод <code class="w3-codespan">scaleX()</code> увеличивает или уменьшает ширину элемента.</p>
    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> увеличивается в два раза по сравнению с его первоначальной шириной:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: scaleX(2);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_scaleX.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> уменьшается до половины его первоначальной ширины:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: scaleX(0.5);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_scaleX2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод scaleY()</h2>
    <p>Метод <code class="w3-codespan">scaleY()</code> увеличивает или уменьшает высоту элемента.</p>
    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> увеличивается в три раза от его первоначальной высоты:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: scaleY(3);<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_scaleY.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> уменьшается до половины его первоначальной высоты:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: scaleY(0.5);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_scaleY2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод skewX()</h2>
    <!--
    <div id="skewx">
    Этот элемент div смещен на 20 градусов вдоль оси X.
    </div>
    -->

    <p>Метод <code class="w3-codespan">skewX()</code> наклоняет элемент вдоль оси X на заданный угол.</p>
    <p>Следующий пример наклоняет элемент <code class="w3-codespan">&lt;div&gt;</code> на 20 градусов по оси X:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: skewX(20deg);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_skewx.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод skewY()</h2>
    <!--
    <div id="skewy">
    This div element is skewed 20 degrees along the X-axis.
    </div>
    -->

    <p>Метод <code class="w3-codespan">skewY()</code> наклоняет элемент вдоль оси Y на заданный угол.</p>
    <p>Следующий пример наклоняет элемент <code class="w3-codespan">&lt;div&gt;</code> на 20 градусов вдоль оси Y:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: skewY(20deg);<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_skewy.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод skew()</h2>
    <!--
    <div id="skewy">
    This div element is skewed 20 degrees along the X-axis.
    </div>
    -->

    <p>Метод <code class="w3-codespan">skew()</code> наклоняет элемент вдоль оси X и Y на заданные углы.</p>
    <p>В следующем примере элемент <code class="w3-codespan">&lt;div&gt;</code> наклоняется на 20 градусов по оси X и на 10 градусов по оси Y:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: skew(20deg, 10deg);<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_skew.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Если второй параметр не указан, он имеет нулевое значение. Итак, следующий пример наклоняет элемент <code class="w3-codespan">&lt;div&gt;</code> на 20 градусов вдоль оси X:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: skew(20deg);<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_skew2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод matrix()</h2>
    <img src="../images/transform_rotate.gif" alt="Rotate">
    <p>Метод <code class="w3-codespan">matrix()</code> объединяет все методы 2D-преобразования в один.</p>
    <p>Метод matrix() принимает шесть параметров, содержащих математические функции, которые позволяют вращать, масштабировать, перемещать (переводить) и наклонять элементы.</p>
    <p>Параметры по порядку следования: matrix(scaleX(),skewY(),skewX(),scaleY(),translateX(),translateY())</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            transform: matrix(1, -0.3, 0, 1, 0, 0);<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_transform_matrix1.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_2dtransforms1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_2dtransforms2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_2dtransforms3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_2dtransforms4" target="_blank" rel="nofollow">Упражнение 4 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>CSS Свойства трансформации</h2>
    <p>В следующей таблице перечислены все свойства 2D-трансформации:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:23%">Свойство</th>
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
    </table>

    <h2>CSS 2D Методы трансформации</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:23%">Функция</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>matrix(<i>n,n,n,n,n,n</i>)</td>
            <td>Определяет 2D-трансформацию, используя матрицу из шести значений</td>
        </tr>
        <tr>
            <td>translate(<i>x,y</i>)</td>
            <td>Определяет 2D перемещение, перемещение элемента вдоль оси X и Y</td>
        </tr>
        <tr>
            <td>translateX(<i>n</i>)</td>
            <td>Определяет 2D-перемещение, перемещая элемент вдоль оси X</td>
        </tr>
        <tr>
            <td>translateY(<i>n</i>)</td>
            <td>Определяет 2D-перемещение, перемещая элемент вдоль оси Y</td>
        </tr>
        <tr>
            <td>scale(<i>x,y</i>)</td>
            <td>Определяет размер 2D трансформации, изменяя ширину и высоту элементов</td>
        </tr>
        <tr>
            <td>scaleX(<i>n</i>)</td>
            <td>Определяет размер 2D трансформации, изменяя ширину элемента</td>
        </tr>
        <tr>
            <td>scaleY(<i>n</i>)</td>
            <td>Определяет размер 2D трансформации, изменяя высоту элемента</td>
        </tr>
        <tr>
            <td>rotate(<i>angle</i>)</td>
            <td>Определяет 2D поворот, угол указывается в параметре</td>
        </tr>
        <tr>
            <td>skew(<i>x-angle,y-angle</i>)</td>
            <td>Определяет сдвиг 2D трансформации по оси X и Y</td>
        </tr>
        <tr>
            <td>skewX(<i>angle</i>)</td>
            <td>Определяет сдвиг 2D трансформации по оси X</td>
        </tr>
        <tr>
            <td>skewY(<i>angle</i>)</td>
            <td>Определяет сдвиг 2D трансформации по оси Y</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_fonts.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_3dtransforms.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>