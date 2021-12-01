<?php include '../include/head.php'; ?>

  <title>CSS Изображение граница. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Изображения в качестве границы элемента. Как создать границы в виде изображения с помощью CSS? Как добавить виньетки и узоры на веб-странице. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        #border_image_top {
            border: 10px solid transparent;
            padding: 15px;
            -webkit-border-image: url(../images/border.png) 30 round; /* Safari 3.1-5 */
            -o-border-image: url(../images/border.png) 30 round; /* Opera 11-12.1 */
            border-image: url(../images/border.png) 30 round;
        }

        #border_image {
            border: 10px solid transparent;
            padding: 15px;
            -webkit-border-image: url(../images/border.png) 30 round; /* Safari 3.1-5 */
            -o-border-image: url(../images/border.png) 30 round; /* Opera 11-12.1 */
            border-image: url(../images/border.png) 30 round;
            text-align: center;
        }
        #border_image2 {
            border: 10px solid transparent;
            padding: 15px;
            -webkit-border-image: url(../images/border.png) 30 stretch; /* Safari 3.1-5 */
            -o-border-image: url(../images/border.png) 30 stretch; /* Opera 11-12.1 */
            border-image: url(../images/border.png) 30 stretch;
            text-align: center;
        }

        #border_image3 {
            border: 10px solid transparent;
            padding: 15px;
            -webkit-border-image: url(../images/border.png) 50 round; /* Safari 3.1-5 */
            -o-border-image: url(../images/border.png) 50 round; /* Opera 11-12.1 */
            border-image: url(../images/border.png) 50 round;
            text-align: center;
        }

        #border_image4 {
            border: 10px solid transparent;
            padding: 15px;
            -webkit-border-image: url(../images/border.png) 20% round; /* Safari 3.1-5 */
            -o-border-image: url(../images/border.png) 20% round; /* Opera 11-12.1 */
            border-image: url(../images/border.png) 20% round;
            text-align: center;
        }

        #border_image5 {
            border: 10px solid transparent;
            padding: 15px;
            -webkit-border-image: url(../images/border.png) 30% round; /* Safari 3.1-5 */
            -o-border-image: url(../images/border.png) 30% round; /* Opera 11-12.1 */
            border-image: url(../images/border.png) 30% round;
            text-align: center;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Изображение границы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_borders.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_backgrounds.php">Next &#10095;</a>
    </div>
    <hr>

    <div id="border_image_top">
        <h2>CSS Изображение в качестве границы элемента</h2>
        <p>С помощью CSS свойства <code class="w3-codespan">border-image</code> вы можете установить изображение, которое будет использоваться в качестве границы вокруг элемента.</p>
    </div>
    <hr>

    <h2>CSS свойство border-image</h2>
    <p>CSS свойство <code class="w3-codespan">border-image</code> позволяет указать изображение, которое будет использоваться вместо обычной рамки вокруг элемента.</p>

    <p>Это свойство имеет три части:</p>
    <ol>
        <li>Изображение для использования в качестве границы</li>
        <li>Где нарезать изображение</li>
        <li>Указание, должны ли средние секции повторяться или растягиваться</li>
    </ol>
    <p>Мы будем использовать следующее изображение (называется &quot;border.png&quot;):</p>
    <p><img src="../images/border.png" alt="Изображение в качестве границы" style="width:81px;height:81px"></p>
    <p>Свойство <code class="w3-codespan">border-image</code> берет изображение и разбивает его на девять частей,
        как крестики-нолики. Затем он размещает углы по углам, а средние участки повторяются или растягиваются, как вы укажете.</p>
    <p><strong>Примечание:</strong> Чтобы работал <code class="w3-codespan">border-image</code>, элементу также необходимо установить свойство <code class="w3-codespan">border</code>!</p>
    <p>Здесь средние участки изображения повторяются для создания границы:</p>
    <p id="border_image">Изображение как граница!</p>
    <p>Вот код:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #borderimg
            {<br>
            &nbsp;&nbsp;border: 10px solid transparent;<br>&nbsp;&nbsp;padding: 15px;<br>&nbsp; border-image: url(border.png)
            30 round;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_border-image.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Здесь средние участки изображения растягиваются для создания границы:</p>
    <p id="border_image2">Изображение как граница!</p>
    <p>Вот код:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #borderimg
            {<br>
            &nbsp; border: 10px solid transparent;<br>&nbsp;
            padding: 15px;<br>&nbsp; border-image: url(border.png)
            30 stretch;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_border-image2.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Совет:</b> Свойство <code class="w3-codespan">border-image</code> на самом деле является сокращенным свойством для свойств <code class="w3-codespan">border-image-source</code>, <code class="w3-codespan">border-image-slice</code>, <code class="w3-codespan">border-image-width</code>, <code class="w3-codespan">border-image-outset</code> и <code class="w3-codespan">border-image-repeat</code>.</p>
    </div>
    <hr>

    <h2>CSS border-image - Различные значения среза</h2>
    <p>Различные значения среза полностью изменяют внешний вид границы:</p>
    <p>Пример 1:</p>
    <p id="border_image3">border-image: url(border.png) 50 round;</p>

    <p>Пример 2:</p>
    <p id="border_image4">border-image: url(border.png) 20% round;</p>

    <p>Пример 3:</p>
    <p id="border_image5">border-image: url(border.png) 30% round;</p>
    <p>Вот код:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #borderimg1 {<br>&nbsp; border: 10px solid transparent;<br>&nbsp;
            padding: 15px;<br>&nbsp; border-image: url(border.png)
            50 round;<br>}<br><br>#borderimg2 {<br>&nbsp;
            border: 10px solid transparent;<br>&nbsp; padding: 15px;<br>&nbsp;
            border-image: url(border.png) 20% round;<br>}<br><br>
            #borderimg3 {<br>&nbsp; border: 10px solid transparent;<br>&nbsp;
            padding: 15px;<br>&nbsp;&nbsp;border-image: url(border.png)
            30% round;<br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_border-image3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_border_images1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_border_images2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>CSS Свойства изображений в качестве границ</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:30%">Свойства</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_border-image.php">border-image</a></td>
            <td>Сокращенное свойство для установки всех свойств border-image-*</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_border-image-source.php">border-image-source</a></td>
            <td>Указывает путь к изображению, которое будет использоваться в качестве границы</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_border-image-slice.php">border-image-slice</a></td>
            <td>Определяет, как нарезать изображение границы</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_border-image-width.php">border-image-width</a></td>
            <td>Определяет ширину границы изображения</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_border-image-outset.php">border-image-outset</a></td>
            <td>Определяет величину, на которую область изображения границы выходит за границы блока</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_border-image-repeat.php">border-image-repeat</a></td>
            <td>Определяет, должно ли изображение границы повторяться, округляться или растягиваться</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_borders.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_backgrounds.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>