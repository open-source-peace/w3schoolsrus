<?php include '../include/head.php'; ?>

  <title>CSS Блочная модель. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Блочная модель. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
  <style>
        .w3-boxmodel {
            font-family: Lato, sans-serif;
        }
        .w3-boxmodel {
            margin: 30px 0;
        }
        .w3-boxmodel .margin {
            background: #f1f1f1;
            padding: 45px;
            width: 100%;
            height: 100%;
            position: relative;
            border: 2px dashed #bbb;
            transition: all .25s ease-in-out;
        }
        .w3-boxmodel .margin:before {
            content: 'Margin';
            font-size: 1.4em;
            position: absolute;
            left: 0;
            top: 1.8%;
            width: 100%;
            text-align: center;
        }
        .w3-boxmodel .border {
            padding: 45px;
            width: 100%;
            height: 100%;
            position: relative;
        }
        .w3-boxmodel .border:before {
            content: 'Border';
            font-size: 1.4em;
            color: black;
            position: absolute;
            left: 0;
            top: 2.5%;
            width: 100%;
            text-align: center;
        }
        .w3-boxmodel .padding {
            color:black;
            padding: 45px;
            width: 100%;
            height: 100%;
            position: relative;
            background: #f1f1f1;
        }
        .w3-boxmodel .padding:before {
            content: 'Padding';
            font-size: 1.4em;
            position: absolute;
            left: 0.5%;
            top:3.7%;
            width: 100%;
            text-align: center;
        }
        .w3-boxmodel .content {
            padding: 20px;
            width: 100%;
            height: 100%;
            position: relative;
            background: white;
            border: 2px dashed #bbb;
        }
        .w3-boxmodel .content:before {
            content: 'Content';
            font-size: 1.4em;
            display: block;
            text-align: center;
            line-height: 3.5;
        }

        @media screen and (max-width: 450px) {
            .w3-boxmodel .margin {
                padding: 35px;
            }
            .w3-boxmodel .margin:before {
                font-size: 1em;
                left: 0;
                top: 2.5%;
            }
            .w3-boxmodel .border {
                padding: 35px;
            }
            .w3-boxmodel .border:before {
                font-size: 1em;
                left: 0;
                top: 3.2%;
            }
            .w3-boxmodel .padding {
                padding: 35px;
            }
            .w3-boxmodel .padding:before {
                font-size: 1em;
                left: 0.5%;
                top:4.5%;
            }
            .w3-boxmodel .content {
                padding: 20px;
            }
            .w3-boxmodel .content:before {
                font-size: 1em;
            }
        }

        @media screen and (max-width: 360px) {
            .w3-boxmodel .margin {
                padding: 25px;
            }
            .w3-boxmodel .margin:before {
                font-size: 0.9em;
                left: 0;
                top: 1.5%;
            }
            .w3-boxmodel .border {
                padding: 25px;
            }
            .w3-boxmodel .border:before {
                font-size: 0.9em;
                left: 0;
                top: 2.2%;
            }
            .w3-boxmodel .padding {
                padding: 25px;
            }
            .w3-boxmodel .padding:before {
                font-size: 0.9em;
                left: 0.5%;
                top:2.5%;
            }
            .w3-boxmodel .content {
                padding: 15px;
            }
            .w3-boxmodel .content:before {
                font-size: 0.9em;
            }
        }
    </style>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Блочная модель</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_dimension.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_outline.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Блочная модель</h2>
    <p>Все элементы HTML можно рассматривать как блоки. В CSS термин &quot;блочная модель&quot; используется, когда говорят о дизайне и вёрстке.</p>
    <p>Модель CSS блока - это, по сути, блок, который охватывает каждый элемент HTML. Он состоит из полей, границ, отступов и фактического содержимого. Изображение ниже иллюстрирует блочную модель:</p>
    <div class='w3-boxmodel'>
      <div class='margin'>
        <div class='border w3-theme'>
          <div class='padding'>
            <div class='content'></div>
          </div>
        </div>
      </div>
    </div>
    <p>Объяснение различных частей:</p>
    <ul>
      <li><b>Content</b> - Содержимое поля, в котором появляются текст и изображения</li>
      <li><b>Padding</b> - Очищает область вокруг содержимого. Padding прозрачный</li>
      <li><b>Border</b> - Граница, охватывающая отступы и содержимое</li>
      <li><b>Margin</b> - Очищает область за пределами границы. Margin прозрачный</li>
    </ul>
    <p>Блочная модель позволяет нам добавлять границы вокруг элементов и определять расстояние между элементами.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Демонстрация блочной модели:</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp;&nbsp;width: 300px;<br>&nbsp;&nbsp;border: 15px solid green;<br>&nbsp;
        padding: 50px;<br>&nbsp;
        margin: 20px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_boxmodel.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Ширина и высота элемента</h2>
    <p>Чтобы правильно установить ширину и высоту элемента во всех браузерах, вам необходимо знать, как работает блочная модель.</p>

    <div class='w3-panel w3-note'>
      <p><b>Важно:</b> Когда вы устанавливаете свойства ширины (width) и высоты (height) элемента с помощью CSS, вы просто устанавливаете ширину и высоту <b>области содержимого</b>. Чтобы рассчитать полный размер элемента, вы также должны добавить отступ (padding), границы (border) и поля (margin).</p>
    </div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Этот &lt;div&gt; элемент будет иметь общую ширину 350px:</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp;
        width: 320px;<br>
        &nbsp;
        padding: 10px;<br>
        &nbsp;
        border: 5px solid gray;<br>
        &nbsp;
        margin: 0;
        <br>}</div>
      <a target='_blank' href='../csstryit/trycss_boxmodel_width.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Вот расчет:<br>
    <div class='w3-leftbar w3-border w3-padding w3-theme-border'>
      320px (width)<br>
      + 20px (левый + правый padding)<br>
      + 10px (левый + правый border)<br>
      + 0px (левый + правый margin)<br>
      <strong>= 350px
      </strong>
    </div>
    <p>Общая ширина элемента должна быть рассчитана следующим образом:</p>
    <p>Общая ширина элемента = width + левый padding + правый padding + левый border + правый border +левый margin + правый margin</p>
    <p>Общая высота элемента должна быть рассчитана следующим образом:</p>
    <p>Общая высота элемента = height + верхний padding + нижний padding + верхний border + нижний border + верхний margin + нижний margin</p>
    <hr>

    <div class='w3-container w3-dark-grey w3-padding'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений!</h2>
      <div class='w3-bar w3-margin-bottom'>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_boxmodel1' target='_blank'>Упражнение 1 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_boxmodel2' target='_blank'>Упражнение 2 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_boxmodel3' target='_blank'>Упражнение 3 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_boxmodel4' target='_blank'>Упражнение 4 &raquo;</a>
      </div>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_dimension.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_outline.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>