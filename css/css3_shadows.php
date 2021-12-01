<?php include '../include/head.php'; ?>

<title>CSS Эффекты тени. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Эффекты тени. Как создать тень текста. Несколько теней. Граница вокруг текста. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<style>
        #textintro {
            text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue;
            color: white;
            font-size: 30px;
        }
        #simpleshadow {
            text-shadow: 2px 2px;
        }
        #simpleshadow2 {
            text-shadow: 2px 2px red;
        }
        #simpleshadow3 {
            text-shadow: 2px 2px 5px red;
        }
        #simpleshadow4 {
            color: white;
            text-shadow: 2px 2px 4px #000;
        }
        #simpleshadow5 {
            text-shadow: 0 0 3px #ff0000;
        }
        #simpleshadow6 {
            text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
        }
        #simpleshadow7 {
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            color: white;
        }
        #simpleshadowborder {
            color: yellow;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        }

        div.card {
            margin:15px 0;
            width: 266px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
        }

        div.cardcontainer {
            padding: 10px;
        }
        .bordershadow {
            height:70px;
            width:80%;
            line-height:70px;
            text-align:center;
            border:2px solid #ddd;
            border-radius: 3px;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
            transition: all 200ms ease-out;
        }
        .bordershadow:hover {
            box-shadow: 0 0 6px rgba(35, 173, 278, 1);
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Эффекты тени</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_gradients_radial.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_shadows_box.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-row">
        <div class="w3-half">
            <div class="card" style="width:80%;max-width:400px;box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                <img src="../images/rock600x400.jpg" alt="Norway" style="width:100%">
                <div class="cardcontainer">
                    <p>Тени</p>
                </div>
            </div>
        </div>

        <div class="w3-half">
            <p id="textintro">С помощью CSS вы можете создавать эффекты тени!</p>
            <div class="bordershadow">Наведи надо мной курсор!</div>
        </div>
    </div>
    <hr>

    <h2>CSS Эффекты тени</h2>
    <p>С помощью CSS вы можете добавлять тень к тексту и элементам.</p>
    <p>В этих главах вы узнаете о следующих свойствах:</p>
    <ul>
        <li><code class="w3-codespan">text-shadow</code></li>
        <li><code class="w3-codespan">box-shadow</code></li>
    </ul>
    <hr>

    <h2>CSS Тень текста</h2>
    <p>CSS свойство <code class="w3-codespan">text-shadow</code> применяет тень к тексту.</p>
    <p>В простейшем случае вы указываете только горизонтальную тень (2 пикселя) и вертикальную тень (2 пикселя):</p>
    <h2 id="simpleshadow">Эффект тени от текста!</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1
            {<br>
            &nbsp;&nbsp;text-shadow: 2px 2px;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_text-shadow1.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Далее добавляем цвет тени:</p>
    <h2 id="simpleshadow2">Эффект тени от текста!</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1
            {<br>
            &nbsp;&nbsp;text-shadow: 2px 2px red;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_text-shadow2.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Затем добавьте эффект размытия к тени:</p>
    <h2 id="simpleshadow3">Эффект тени от текста!</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1
            {<br>
            &nbsp;&nbsp;text-shadow: 2px 2px 5px red;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_text-shadow3.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере показан белый текст с черной тенью:</p>
    <h2 id="simpleshadow4">Эффект тени от текста!</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1
            {<br>
            &nbsp;&nbsp;color: white;<br>
            &nbsp;&nbsp;text-shadow: 2px 2px 4px #000000;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_text-shadow4.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере показана красная неоновая светящаяся тень:</p>
    <h2 id="simpleshadow5">Эффект тени от текста!</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1
            {<br>
            &nbsp;&nbsp;text-shadow: 0 0 3px #FF0000;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_text-shadow5.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Несколько теней</h2>
    <p>Чтобы добавить к тексту более одной тени, вы можете добавить список теней, разделённых запятыми.</p>
    <p>В следующем примере показана красная и синяя неоновая светящаяся тень:</p>
    <h2 id="simpleshadow6">Эффект тени от текста!</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1
            {<br>
            &nbsp;&nbsp;text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_text-shadow6.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере показан белый текст с черной, синей и темно-синей тенью:</p>
    <h2 id="simpleshadow7">Эффект тени от текста!</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1
            {<br>&nbsp;&nbsp;color: white;<br>
            &nbsp;&nbsp;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_text-shadow7.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Вы также можете использовать свойство text-shadow для создания простой границы вокруг текста (без теней):</p>
    <h2 id="simpleshadowborder">Граница вокруг текста!</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1
            {<br>&nbsp;&nbsp;color: yellow;<br>&nbsp;&nbsp;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_text-shadow_border.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_gradients_radial.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_shadows_box.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>