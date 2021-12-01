<?php include '../include/head.php'; ?>

<title>CSS Тень блока. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Тень блока. Свойство box-shadow. Как создать тень блока? Тени вокруг блока. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        #boxshadow1 {
            width: 300px;
            height: 100px;
            padding: 15px;
            margin-bottom: 30px;
            background-color: yellow;
            box-shadow: 10px 10px;
        }
        #boxshadow2 {
            width: 300px;
            height: 100px;
            padding: 15px;
            margin-bottom: 30px;
            background-color: yellow;
            box-shadow: 10px 10px grey;
        }
        #boxshadow3 {
            width: 300px;
            height: 100px;
            padding: 15px;
            margin-bottom: 30px;
            background-color: yellow;
            box-shadow: 10px 10px 5px grey;
        }
        div.card {
            margin:15px 0;
            width: 266px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
        }
        div.cardheader {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        }
        div.cardcontainer {
            padding: 10px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Тень блока</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_shadows.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_text_effects.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS свойство box-shadow</h2>
    <p>CSS свойство <code class="w3-codespan">box-shadow</code> применяет тень к элементам.</p>
    <p>В простейшем случае вы указываете только горизонтальную тень и вертикальную тень:</p>
    <div id="boxshadow1">Это желтый &lt;div&gt; элемент с черной тенью блока</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;&nbsp;box-shadow: 10px 10px;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_box-shadow.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Далее добавляем цвет тени:</p>
    <div id="boxshadow2">Это желтый &lt;div&gt; элемент с серой тенью блока</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;&nbsp;box-shadow: 10px 10px grey;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_box-shadow2.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Затем добавьте эффект размытия к тени:</p>
    <div id="boxshadow3">Это желтый &lt;div&gt; элемент с размытой серой тенью блока</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;&nbsp;box-shadow: 10px 10px 5px grey;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_box-shadow3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Карточки</h2>
    <p>Вы также можете использовать свойство <code class="w3-codespan">box-shadow</code> для создания карточек, похожих на бумажные:</p>

    <div class="w3-row">
        <div class="w3-half">
            <div class="card">
                <div class="cardheader">
                    <h1 style="font-size:91px;font-family: 'Times New Roman', Times, serif;font-weight:bold;">1</h1>
                </div>

                <div class="cardcontainer">
                    <p>Январь 1, 2023</p>
                </div>
            </div>
        </div>

        <div class="w3-half">
            <div class="card">
                <img src="../images/rock600x400.jpg" alt="Норвегия" style="width:100%">
                <div class="cardcontainer">
                    <p>Hardanger, Norway</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div.card
            {<br>
            &nbsp;&nbsp;width: 250px;<br>&nbsp;&nbsp;box-shadow: 0 4px 8px 0 rgba(0, 0,
            0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);<br>&nbsp;&nbsp;text-align:
            center;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_box-shadow4.html">Попробуй это (Текстовая карточка) &raquo;</a>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_box-shadow5.html">Попробуй это (Карточка с изображением) &raquo;</a>
    </div>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_shadows1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_shadows2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_shadows3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_shadows4" target="_blank" rel="nofollow">Упражнение 4 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_shadows5" target="_blank" rel="nofollow">Упражнение 5 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>CSS Свойства тени</h2>
    <p>В следующей таблице перечислены CSS свойства тени:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:28%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_box-shadow.php">box-shadow</a></td>
            <td>Добавляет одну или несколько теней к элементу</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_text-shadow.php">text-shadow</a></td>
            <td>Добавляет одну или несколько теней к тексту</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_shadows.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_text_effects.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>