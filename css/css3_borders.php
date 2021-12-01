<?php include '../include/head.php'; ?>

  <title>CSS Границы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Границы. Как сделать закруглённые углы с помощью CSS? Виды границы элементов веб-страницы. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        #rcorners1 {border-radius: 25px;padding: 20px;width: 200px;height: 150px;}
        #rcorners2 {border-radius: 25px;border-width: 2px;border-style: solid;padding: 20px;width: 200px;height: 150px;}
        #rcorners3 {border-radius: 25px;background: url(../images/paper.gif);background-position: left top;background-repeat: repeat; padding: 20px;width: 200px;height: 150px;}
        #rcorners4 {border-radius: 15px 50px 30px 5px;padding: 20px;width: 200px;height: 150px;}
        #rcorners5 {border-radius: 15px 50px 30px;padding: 20px;width: 200px;height: 150px;}
        #rcorners6 {border-radius: 15px 50px;padding: 20px;width: 200px;height: 150px;}
        #rcorners7 {border-radius: 15px;padding: 20px;width: 200px;height: 150px;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Закруглённые углы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_specificity.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_border_images.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="w3-theme-border" style="border-width:3px;border-style:solid;margin-top:20px;font-size:15px;padding:25px;border-radius:25px;">
        <h2>CSS Закруглённые углы</h2>
        <p>С помощью CSS свойства <code class="w3-codespan">border-radius</code> вы можете придать любому элементу на веб-странице &quot;закруглённые углы&quot;.</p>
    </div>
    <hr>

    <h2>CSS свойство border-radius</h2>
    <p>CSS свойство <code class="w3-codespan">border-radius</code> определяет радиус углов элемента.</p>
    <p><strong>Совет:</strong> Это свойство позволяет добавлять закругленные углы к элементам!</p>
    <p>Здесь три примера:</p>
    <p>1. Закругленные углы для элемента с заданным цветом фона:</p>
    <p id="rcorners1" class="w3-theme">Закруглённые углы!</p>
    <p>2. Закругленные углы для элемента с границей:</p>
    <p id="rcorners2" class="w3-theme-border">Закруглённые углы!</p>
    <p>3. Закругленные углы для элемента с фоновым изображением:</p>
    <p id="rcorners3">Закруглённые углы!</p>
    <p>Вот код:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #rcorners1 {<br>&nbsp;&nbsp;border-radius: 25px;<br>&nbsp;&nbsp;background: #73AD21;<br>&nbsp;&nbsp;padding: 20px; <br>&nbsp;&nbsp;width: 200px;<br>&nbsp;&nbsp;height: 150px; <br>}<br><br>#rcorners2 {<br>&nbsp;&nbsp;border-radius: 25px;<br>&nbsp;&nbsp;border: 2px solid #73AD21;<br>&nbsp;&nbsp;padding: 20px; <br>&nbsp;&nbsp;width: 200px;<br>&nbsp;&nbsp;height: 150px; <br>}<br><br>#rcorners3 {<br>&nbsp;&nbsp;border-radius: 25px;<br>&nbsp;&nbsp;background: url(paper.gif);<br>&nbsp;&nbsp;background-position: left top;<br>&nbsp; background-repeat:
            repeat;<br>&nbsp;&nbsp;padding: 20px; <br>&nbsp;&nbsp;width:
            200px;<br>&nbsp;&nbsp;height: 150px; <br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_border-radius.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Совет:</b> Свойство <code class="w3-codespan">border-radius</code> на самом деле является сокращенным свойством для свойств <code class="w3-codespan">border-top-left-radius</code>, <code class="w3-codespan">border-top-right-radius</code>, <code class="w3-codespan">border-bottom-right-radius</code> и <code class="w3-codespan">border-bottom-left-radius</code>.</p>
    </div>
    <hr>

    <h2>CSS border-radius - Укажите каждый угол</h2>
    <p>Свойство <code class="w3-codespan">border-radius</code> может иметь от одного до четырех значений. Вот правила:</p>
    <p><strong>Четыре значения - border-radius: 15px 50px 30px 5px;</strong> (первое значение применяется к верхнему левому углу, второе значение применяется к верхнему правому углу, третье значение применяется к нижнему правому углу и четвертое значение применяется к нижнему левому углу). Чтобы легче было запомнить, считайте так, как будто углы считаются по направлению движения часовой стрелке, начиная с верхнего левого угла:</p>
    <p id="rcorners4" class="w3-theme"></p>
    <p><strong>Три значения - border-radius: 15px 50px 30px;</strong> (первое значение применяется к верхнему левому углу, второе значение применяется к верхнему правому и нижнему левому углам, а третье значение применяется к нижнему правому углу):</p>
    <p id="rcorners5" class="w3-theme"></p>
    <p><strong>Два значения - border-radius: 15px 50px;</strong> (первое значение применяется к верхнему левому и нижнему правому углам, а второе значение применяется к верхнему правому и нижнему левому углам):</p>
    <p id="rcorners6" class="w3-theme"></p>
    <p><strong>Одно значение - border-radius: 15px;</strong> (значение применяется ко всем четырем углам, которые округлены одинаково:</p>
    <p id="rcorners7" class="w3-theme"></p>
    <p>Вот код:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #rcorners1 {<br>&nbsp; border-radius: 15px 50px 30px 5px;<br>&nbsp;
            background: #73AD21;<br>&nbsp; padding: 20px; <br>&nbsp;
            width: 200px;<br>&nbsp;&nbsp;height: 150px; <br>}<br><br>#rcorners2 {<br>&nbsp;&nbsp;border-radius: 15px 50px 30px;<br>
            &nbsp; background: #73AD21;<br>&nbsp;
            padding: 20px; <br>&nbsp; width: 200px;<br>&nbsp;
            height: 150px; <br>}<br><br>#rcorners3 {<br>&nbsp;&nbsp;border-radius: 15px 50px;<br>&nbsp;&nbsp;background: #73AD21;<br>&nbsp;&nbsp;padding: 20px; <br>&nbsp;&nbsp;width: 200px;<br>
            &nbsp;
            height: 150px; <br>}<br><br>#rcorners4 {<br>&nbsp;&nbsp;border-radius: 15px;<br>
            &nbsp; background: #73AD21;<br>&nbsp;
            padding: 20px; <br>&nbsp; width: 200px;<br>&nbsp;&nbsp;height: 150px; <br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_border-radius2.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Вы также можете создать эллиптические углы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #rcorners1 {<br>&nbsp; border-radius: 50px / 15px;<br>&nbsp;
            background: #73AD21;<br>&nbsp; padding: 20px; <br>&nbsp;&nbsp;width: 200px;<br>&nbsp;&nbsp;height: 150px; <br>}<br><br>#rcorners2 {<br>&nbsp;&nbsp;border-radius: 15px / 50px;<br>&nbsp;&nbsp;background: #73AD21;<br>
            &nbsp;
            padding: 20px; <br>&nbsp;&nbsp;width: 200px;<br>&nbsp;&nbsp;height: 150px; <br>}<br><br>#rcorners3 {<br>
            &nbsp;
            border-radius: 50%;<br>&nbsp; background: #73AD21;<br>&nbsp;
            padding: 20px; <br>&nbsp;&nbsp;width: 200px;<br>&nbsp;&nbsp;height: 150px;<br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_border-radius3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_borders1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_borders2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>CSS Свойства для создания закруглённых углов</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:30%">Свойства</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_border-radius.php">border-radius</a></td>
            <td>Сокращенное свойство для установки всех четырех свойств border-*-*-radius</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_border-top-left-radius.php">border-top-left-radius</a></td>
            <td>Определяет форму границы верхнего левого угла</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_border-top-right-radius.php">border-top-right-radius</a></td>
            <td>Определяет форму границы верхнего правого угла</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_border-bottom-right-radius.php">border-bottom-right-radius</a></td>
            <td>Определяет форму границы нижнего правого угла</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_border-bottom-left-radius.php">border-bottom-left-radius</a></td>
            <td>Определяет форму границы нижнего левого угла</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_specificity.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_border_images.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>