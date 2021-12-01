<?php include '../include/head.php'; ?>
  <title>CSS Контур. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Контур. Как сделать контур для элементов HTML? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
  <style>
        .w3-boxmodel {
            font-family: Lato, sans-serif;
        }
        .w3-boxmodel {
            margin:25px 0;
        }
        .w3-boxmodel .outline {
            background: #f1f1f1;
            padding: 45px;
            width: 100%;
            height: 100%;
            position: relative;
            border: 2px dashed #f1f1f1;
            transition: all .25s ease-in-out;
        }
        .w3-boxmodel .outline:before {
            content: 'Outline';
            font-size: 1.4em;
            position: absolute;
            left: 0;
            top: 1.8%;
            width: 100%;
            text-align: center;
        }
        .w3-boxmodel .border {
            color:black;
            padding: 45px;
            width: 100%;
            height: 100%;
            position: relative;
            background: #f1f1f1;
            border: 1px solid #555;
        }
        .w3-boxmodel .border:before {
            content: 'Border';
            font-size: 1.4em;
            position: absolute;
            left: 0;
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
            border: 1px solid #555;
        }
        .w3-boxmodel .content:before {
            content: 'Content';
            font-size: 1.4em;
            display: block;
            text-align: center;
            line-height: 3.5;
        }

        @media screen and (max-width: 450px) {
            .w3-boxmodel .outline {
                padding: 35px;
            }
            .w3-boxmodel .outline:before {
                font-size: 1em;
                left: 0;
                top: 2.5%;
            }
            .w3-boxmodel .border {
                padding: 35px;
            }
            .w3-boxmodel .border:before {
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
            .w3-boxmodel .outline{
                padding: 25px;
            }
            .w3-boxmodel .outline:before {
                font-size: 0.9em;
                left: 0;
                top: 1.5%;
            }
            .w3-boxmodel .border {
                padding: 25px;
            }
            .w3-boxmodel .border:before {
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
    <h1>CSS <span class='color_h1'>Контур</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_boxmodel.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_outline_width.php'>Next &#10095;</a>
    </div>
    <hr>
    <div style='width:98%;border:2px solid black;outline:#4CAF50 solid 10px;padding:20px;margin:auto;text-align:center'>
        Этот элемент имеет черную границу и зеленый контур шириной 10px.
    </div>
    <br>
    <a target='_blank' href='../csstryit/trycss_outline_intro.html' class='w3-btn'>Попробуйте сами &raquo;</a>
    <hr>

    <h2>CSS Контур</h2>
    <p>Контур - это линия, которая проводится вокруг элементов ВНЕ границ, чтобы сделать элемент &quot;выделяющимся&quot;. </p>
    <div class='w3-boxmodel'>
      <div class='outline w3-theme'>
        <div class='border'>
          <div class='content'></div>
        </div>
      </div>
    </div>

    <p>CSS имеет следующие свойства контура:</p>
    <ul>
      <li> <code class='w3-codespan'>outline-style</code></li>
      <li> <code class='w3-codespan'>outline-color</code></li>
      <li> <code class='w3-codespan'>outline-width</code></li>
      <li> <code class='w3-codespan'>outline-offset</code></li>
      <li> <code class='w3-codespan'>outline</code></li>
    </ul>

    <div class='w3-panel w3-note'>
      <p><b>Примечание:</b> Контур отличается от <a href='css_border.php'>границ</a>! В отличие от границы, контур рисуется за пределами границы элемента и может перекрывать другое содержимое. Кроме того, контур НЕ является частью размеров элемента; общая ширина и высота элемента не зависит от ширины контура.</p>
    </div>
    <hr>

    <h2>CSS Стиль контура</h2>
    <p>Свойство <code class='w3-codespan'>outline-style</code> определяет стиль контура и может иметь одно из следующих значений:</p>
    <ul>
      <li><code class='w3-codespan'>dotted</code> - Определяет точечный контур</li>
      <li><code class='w3-codespan'>dashed</code> - Определяет пунктирный контур</li>
      <li><code class='w3-codespan'>solid</code> - Определяет сплошной контур</li>
      <li><code class='w3-codespan'>double</code> - Определяет двойной контур</li>
      <li><code class='w3-codespan'>groove</code> - Определяет 3D рифленый контур</li>
      <li><code class='w3-codespan'>ridge</code> - Определяет 3D ребристый контур</li>
      <li><code class='w3-codespan'>inset</code> - Определяет 3D внутренний контур</li>
      <li><code class='w3-codespan'>outset</code> - Определяет 3D наружный контур</li>
      <li><code class='w3-codespan'>none</code> - Определяет отсутствие контура</li>
      <li><code class='w3-codespan'>hidden</code> - Определяет скрытый контур</li>
    </ul>

    <p>В следующем примере показаны различные значения <code class='w3-codespan'>outline-style</code>:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Демонстрация различных стилей контура:</p>
      <div class='w3-code notranslate cssHigh'>
        p.dotted {outline-style: dotted;}<br>
        p.dashed {outline-style: dashed;}<br>p.solid {outline-style: solid;}<br>
        p.double {outline-style: double;}<br>p.groove {outline-style: groove;}<br>
        p.ridge {outline-style: ridge;}<br>p.inset {outline-style: inset;}<br>
        p.outset {outline-style: outset;}
      </div>
      <p>Результат:</p>
      <div class='w3-white w3-padding notranslate'>

        <p style='outline-style:dotted;outline-color:red;padding:2px 4px'>Точечный контур.</p>
        <p style='outline-style:dashed;outline-color:red;padding:2px 4px'>Пунктирный контур.</p>
        <p style='outline-style:solid;outline-color:red;padding:2px 4px'>Сплошной контур.</p>
        <p style='outline-style:double;outline-color:red;padding:2px 4px'>Двойной контур.</p>
        <p style='outline-style:groove;outline-color:red;padding:2px 4px'>Рифленый контур. Эффект зависит от значения цвета контура.</p>
        <p style='outline-style:ridge;outline-color:red;padding:2px 4px'>Ребристый контур. Эффект зависит от значения цвета контура.</p>
        <p style='outline-style:inset;outline-color:red;padding:2px 4px'>Внутренний контур. Эффект зависит от значения цвета контура.</p>
        <p style='outline-style:outset;outline-color:red;padding:2px 4px'>Наружный контур. Эффект зависит от значения цвета контура.</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_outline-style.html' class='w3-btn w3-margin-top w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
      <p><b>Примечание:</b> Ни одно из других свойств контура (о которых вы узнаете больше в следующих главах) не будет иметь ЛЮБОГО эффекта, если не установлено свойство <code class='w3-codespan'>outline-style</code>!</p>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_boxmodel.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_outline_width.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>