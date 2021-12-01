<?php include '../include/head.php'; ?>

<title>HTML Цвета. <?php include '../include/title.php'; ?></title>
<meta name="description" content="Цвета в HTML. Как добавить цвет на веб-странице? Какие бывают способы добавления цвета в HTML? Цвет текста, фона, границы, ссылок. <?php include '../include/description.php'; ?>">
<script src="../lib/w3color.js"></script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Цвета</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_comments.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_colors_rgb.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="sum">
        <h4>В этой теме:</h4>
        <ul>
            <li><a href="#c1"><em>Названия цветов</em></a></li>
            <li><a href="#c2"><em>Background Color - Цвет фона</em></a></li>
            <li><a href="#c3"><em>Text Color - Цвет текста</em></a></li>
            <li><a href="#c4"><em>Border Color - Цвет границы</em></a></li>
            <li><a href="#c5"><em>Значения цвета</em></a>
                <ul>
                    <li><a href="#c6"><em>RGB Значение</em></a></li>
                    <li><a href="#c7"><em>HEX значение</em></a></li>
                    <li><a href="#c8"><em>HSL значение</em></a></li>
                    <li><a href="#c9"><em>RGBA значение</em></a></li>
                    <li><a href="#c10"><em>HSLA значение</em></a></li>
                </ul>
            </li>
        </ul>
    </div>
    <hr>

    <p class="intro">Цвета HTML задаются с использованием предварительно определенных названий цветов или значений RGB, HEX, HSL, RGBA, HSLA.</p>
    <hr>
    <h2 id="c1">Названия цветов</h2>
    <p>В HTML цвет можно указать с помощью названия цвета:</p>

    <div class="w3-row w3-center" style="margin:0 -16px;line-height:80px;color:white;">
        <div class="w3-col l3 m6 w3-padding">
            <div style="background-color:tomato;">Tomato</div>
        </div>
        <div class="w3-col l3 m6 w3-padding">
            <div style="background-color:orange;">Orange</div>
        </div>
        <div class="w3-col l3 m6 w3-padding">
            <div style="background-color:dodgerblue;">DodgerBlue</div>
        </div>
        <div class="w3-col l3 m6 w3-padding">
            <div style="background-color:mediumseagreen;">MediumSeaGreen</div>
        </div>
        <div class="w3-col l3 m6 w3-padding">
            <div style="background-color:gray;">Gray</div>
        </div>
        <div class="w3-col l3 m6 w3-padding">
            <div style="background-color:slateblue;">SlateBlue</div>
        </div>
        <div class="w3-col l3 m6 w3-padding">
            <div style="background-color:violet;">Violet</div>
        </div>
        <div class="w3-col l3 m6 w3-padding">
            <div style="background-color:lightgray;color:#444444">LightGray</div>
        </div>
    </div>
    <p>
        <a target="_blank" href="../htmltryit/tryit8c5f.html?filename=tryhtml_color_names" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </p>
    <p>HTML поддерживает <a href="../colors/colors_names.php">140 стандартных названий цветов</a>.</p>
    <hr>

    <h2 id="c2">Background Color - Цвет фона</h2>
    <p>Вы можете установить цвет фона для элементов HTML:</p>

    <div style="background-color:dodgerblue; text-align:center;color:white;font-size:24px;">Hello World</div>
    <br>
    <div class="w3-container" style="background-color:tomato;color:white;"><br>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br><br>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1 style=&quot;background-color:DodgerBlue;&quot;&gt;Hello World&lt;/h1&gt;<br>&lt;p style=&quot;background-color:Tomato;&quot;&gt;Lorem
            ipsum...&lt;/p&gt;</div>
        <br>
        <a target="_blank" href="../htmltryit/tryit524a.html?filename=tryhtml_color_background" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2 id="c3">Text Color - Цвет текста</h2>
    <p>Вы можете установить цвет текста:</p>
    <h3 style="color:tomato">Hello World</h3>
    <p style="color:dodgerblue">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
    <p style="color:mediumseagreen">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1 style=&quot;color:Tomato;&quot;&gt;Hello
            World&lt;/h1&gt;<br>&lt;p style=&quot;color:DodgerBlue;&quot;&gt;Lorem
            ipsum...&lt;/p&gt;<br>&lt;p style=&quot;color:MediumSeaGreen;&quot;&gt;Ut wisi
            enim...&lt;/p&gt;</div>
        <a target="_blank" href="../htmltryit/tryita756.html?filename=tryhtml_color_text" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2 id="c4">Border Color - Цвет границы</h2>
    <p>Вы можете установить цвет границ:</p>
    <h2 style="border: 2px solid Tomato;">Hello World</h2>
    <h2 style="border: 2px solid DodgerBlue;">Hello World</h2>
    <h2 style="border: 2px solid Violet;">Hello World</h2>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1 style=&quot;border:2px
            solid Tomato;&quot;&gt;Hello
            World&lt;/h1&gt;<br>&lt;h1 style=&quot;border:2px
            solid DodgerBlue;&quot;&gt;Hello
            World&lt;/h1&gt;<br>&lt;h1 style=&quot;border:2px
            solid Violet;&quot;&gt;Hello
            World&lt;/h1&gt;</div>
        <a target="_blank" href="../htmltryit/tryita7cf.html?filename=tryhtml_color_border" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2 id="c5">Значения цвета</h2>
    <p>В HTML цвета также могут быть указаны с использованием значений RGB, HEX, HSL, RGBA и HSLA:</p>
    <p>То же, что и название цвета "Tomato":</p>

    <div class="w3-center" style="line-height:60px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
        <div style="background-color:rgb(255, 99, 71);margin:10px 0;">rgb(255, 99, 71)</div>
        <div style="background-color:#ff6347;margin:10px 0;">#ff6347</div>
        <div style="background-color:hsl(9, 100%, 64%);margin:10px 0;">hsl(9, 100%, 64%)</div>
    </div>
    <p>То же, что и название цвета "Tomato", но на 50% прозрачнее:</p>
    <div class="w3-center" style="line-height:60px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
        <div style="background-color:rgba(255, 99, 71, 0.5);margin:10px 0;">rgba(255, 99, 71, 0.5)</div>
        <div style="background-color:hsla(9, 100%, 64%, 0.5);margin:10px 0;">hsla(9, 100%, 64%, 0.5)</div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1 style=&quot;background-color:rgb(255,
            99, 71);&quot;&gt;...&lt;/h1&gt;<br>&lt;h1 style=&quot;background-color:#ff6347;&quot;&gt;...&lt;/h1&gt;<br>&lt;h1 style=&quot;background-color:hsl(9,
            100%, 64%);&quot;&gt;...&lt;/h1&gt;<br><br>&lt;h1 style=&quot;background-color:rgba(255,
            99, 71, 0.5);&quot;&gt;...&lt;/h1&gt;<br>&lt;h1 style=&quot;background-color:hsla(9,
            100%, 64%, 0.5);&quot;&gt;...&lt;/h1&gt;</div>
        <a target="_blank" href="../htmltryit/tryite2f3.html?filename=tryhtml_color_values" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2 id="c6">RGB Значение</h2>
    <p>В HTML цвет можно указать как значение RGB, используя эту формулу:</p>
    <p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">rgb(<em>red,</em> <em>green</em>, <em>blue</em>)</p>
    <p>Каждый параметр (red, green и blue) определяет интенсивность цвета от 0 до 255.</p>
    <p>Например, rgb(255, 0, 0) отображается как красный, потому что красный установлен на самое высокое значение (255), а остальные установлены на 0.</p>
    <p>Чтобы отобразить черный цвет, установите все цветовые параметры на 0, как здесь: rgb(0, 0, 0).</p>
    <p>Для отображения белого установите все параметры цвета на 255, как здесь: rgb(255, 255, 255).</p>
    <p>Экспериментируйте, смешивая значения RGB ниже:</p>

    <div class="w3-container xw3-light-grey">
        <div class="w3-row w3-container">
            <div class="w3-col m2 w3-container w3-center">
            </div>
            <div class="w3-col m8 w3-container w3-center">
                <div id="rgbresult" style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace;line-height:80px;"><p id="rgbresulttext">&nbsp;</p></div>
            </div>
            <div class="w3-col m2 w3-container w3-center">
            </div>
        </div>
        <div class="w3-row w3-container">
            <div class="w3-col m4 w3-container w3-center">
                <p>RED</p>
                <input onchange="changeRGB()" oninput="changeRGB()" type="range" id="slideRed" name="slideRed" value="255" min="0" max="255">
                <div id="valRed2" style="background-color:red;border-radius:5px;color:white;opacity:0.8">255</div>
            </div>
            <div class="w3-col m4 w3-container w3-center">
                <p>GREEN</p>
                <input onchange="changeRGB()" oninput="changeRGB()" type="range" id="slideGreen" name="slideGreen" value="125" min="0" max="255">
                <div id="valGreen2" style="background-color:#00ff00;border-radius:5px;opacity:0.8">0</div>
            </div>
            <div class="w3-col m4 w3-container w3-center">
                <p>BLUE</p>
                <input onchange="changeRGB()" oninput="changeRGB()" type="range" id="slideBlue" name="slideBlue" value="125" min="0" max="255">
                <div id="valBlue2" style="background-color:blue;border-radius:5px;color:white;opacity:0.8">0</div>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white w3-container">
            <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(255, 0, 0);">rgb(255, 0, 0)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(0, 0, 255);">rgb(0, 0, 255)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(60, 179, 113);">rgb(60, 179, 113)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(238, 130, 238);">rgb(238, 130, 238)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(255, 165, 0);">rgb(255, 165, 0)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(106, 90, 205);">rgb(106, 90, 205)</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryit77a4.html?filename=tryhtml_color_rgb" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>


    <p>Оттенки серого часто определяются с использованием равных значений для всех трёх источников света:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white w3-container">
            <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(0, 0, 0);">rgb(0, 0, 0)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(60, 60, 60);">rgb(60, 60, 60)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(120, 120, 120);">rgb(120, 120, 120)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(180, 180, 180);">rgb(180, 180, 180)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(240, 240, 240);color:#555555">rgb(240, 240, 240)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(255, 255, 255);color:#555555">rgb(255, 255, 255)</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryit5352.html?filename=tryhtml_color_rgb_gray" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2 id="c7">HEX значение</h2>
    <p>В HTML цвет можно указать, используя шестнадцатеричное значение в форме:</p>
    <p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">#<em>rrggbb</em></p>
    <p>Где rr (<span style="color:red">red</span>), gg (<span style="color:green">green</span>) и bb (<span style="color:blue">blue</span>) шестнадцатеричные значения от 00 до ff (такие же, как десятичные 0-255).</p>
    <p>Например, <span style="color:#ff0000">#ff0000</span> отображается как красный, потому что красный установлен на самое высокое значение (ff), а остальные установлены на самое низкое значение (00).</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white w3-container">

            <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#ff0000;">#ff0000</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#0000ff;">#0000ff</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#3cb371;">#3cb371</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#ee82ee;">#ee82ee</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#ffa500;">#ffa500</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#6a5acd;">#6a5acd</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryitb051.html?filename=tryhtml_color_hex" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>


    <p>Оттенки серого часто определяются с использованием равных значений для всех трёх источников света:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white w3-container">

            <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#000000;">#000000</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#3c3c3c;">#3c3c3c</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#787878;">#787878</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#b4b4b4;">#b4b4b4</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#f0f0f0;color:#555555">#f0f0f0</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#ffffff;color:#555555">#ffffff</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryit3d96.html?filename=tryhtml_color_hex_gray" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>

    <h2 id="c8">HSL значение</h2>
    <p>В HTML цвет можно указать с помощью оттенка (hue), насыщенности (saturation) и яркости (lightness) - HSL в форме:</p>
    <p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">hsl(<em>hue</em>, <em>saturation</em>, <em>lightness</em>)</p>
    <p>Оттенок (hue) - это градус цветового круга от 0 до 360. 0 - красный, 120 - зеленый, 240 - синий.</p>
    <p>Насыщенность (saturation) - это процентное значение, 0% означает оттенок серого, а 100% - это полный цвет.</p>
    <p>Яркость (lightness) также в процентах, 0% - черный, 50% - ни светлый, ни темный, 100% - белый.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white w3-container">

            <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(240, 100%, 50%)">hsl(240, 100%, 50%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(147, 50%, 47%);">hsl(147, 50%, 47%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(300, 76%, 72%);">hsl(300, 76%, 72%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(39, 100%, 50%);">hsl(39, 100%, 50%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(248, 53%, 58%);">hsl(248, 53%, 58%)</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryit5e5f.html?filename=tryhtml_color_hsl" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h3>Насыщенность</h3>
    <p>Насыщенность можно описать как интенсивность цвета.</p>
    <p>100% чистый цвет, без оттенков серого</p>
    <p>50% - это 50% серый, но вы всё равно можете видеть цвет.</p>
    <p>0% полностью серый, вы больше не видите цвет.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white w3-container">

            <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 80%, 50%)">hsl(0, 80%, 50%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 60%, 50%);">hsl(0, 60%, 50%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 40%, 50%);">hsl(0, 40%, 50%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 20%, 50%);">hsl(0, 20%, 50%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 0%, 50%);">hsl(0, 0%, 50%)</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryit4e78.html?filename=tryhtml_color_hsl_saturation" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h3>Яркость</h3>
    <p>Яркость цвета можно описать как количество света, которое вы хотите дать цвету, где 0% означает отсутствие света (черный), 50% означает 50% света (ни темно, ни светло), 100% означает полную яркость (белый цвет).</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white w3-container">
            <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 100%, 0%);">hsl(0, 100%, 0%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 100%, 25%)">hsl(0, 100%, 25%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 100%, 75%);">hsl(0, 100%, 75%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 100%, 90%);color:#555555">hsl(0, 100%, 90%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 100%, 100%);color:#555555;">hsl(0, 100%, 100%)</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryit09a1.html?filename=tryhtml_color_hsl_lightness" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <p>Оттенки серого часто определяются путем установки оттенка и насыщенности на 0 и регулировки яркости от 0% до 100%, чтобы получить более темные/более светлые оттенки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white w3-container">
            <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 0%, 0%);">hsl(0, 0%, 0%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 0%, 24%)">hsl(0, 0%, 24%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 0%, 47%);">hsl(0, 0%, 47%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 0%, 71%);">hsl(0, 0%, 71%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 0%, 94%);color:#555555">hsl(0, 0%, 94%)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsl(0, 0%, 100%);color:#555555;">hsl(0, 0%, 100%)</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryit9174.html?filename=tryhtml_color_hsl_gray" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2 id="c9">RGBA значение</h2>
    <p>Цветовые значения RGBA являются расширением цветовых значений RGB с альфа-каналом, который определяет непрозрачность для цвета.</p>
    <p>Значение цвета RGBA указывается с:</p>
    <p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">rgba(<em>red,</em> <em>green</em>, <em>blue, alpha</em>)</p>
    <p>Альфа-параметр - это число от 0,0 (полностью прозрачное) до 1,0 (совсем не прозрачное):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white">
            <div class="w3-row w3-center"
                 style="
    line-height:80px;
    color:white;
    font-size:20px;
    font-weight:bold;
    font-family:Consolas, 'Courier New', Courier, monospace;
    background-image:url(../images/img_bg_eyeicon.png), url(../images/img_bg_transparent.gif);
    background-repeat:no-repeat, repeat;
    background-position:center, top left;
    background-color:#fff;">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgba(255, 99, 71, 0);color:#555555;">rgba(255, 99, 71, 0)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgba(255, 99, 71, 0.2);color:#555555;">rgba(255, 99, 71, 0.2)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgba(255, 99, 71, 0.4);">rgba(255, 99, 71, 0.4)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgba(255, 99, 71, 0.6);">rgba(255, 99, 71, 0.6)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgba(255, 99, 71, 0.8);">rgba(255, 99, 71, 0.8)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgba(255, 99, 71, 1);">rgba(255, 99, 71, 1)</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryit3916.html?filename=tryhtml_color_rgba" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2 id="c10">HSLA значение</h2>
    <p>Значения цвета HSLA являются расширением значений цвета HSL с альфа-каналом, который определяет непрозрачность для цвета.</p>
    <p>Значение цвета HSLA задается с помощью:</p>
    <p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">hsla(<em>hue,</em> <em>saturation</em>, <em>lightness, alpha</em>)</p>
    <p>Альфа-параметр - это число от 0,0 (полностью прозрачное) до 1,0 (совсем не прозрачное):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white">
            <div class="w3-row w3-center"
                 style="
    line-height:80px;
    color:white;
    font-size:20px;
    font-weight:bold;
    font-family:Consolas, 'Courier New', Courier, monospace;
    background-image:url(../images/img_bg_eyeicon.png), url(../images/img_bg_transparent.gif);
    background-repeat:no-repeat, repeat;
    background-position:center, top left;
    background-color:#fff;">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsla(9, 100%, 64%, 0);color:#555555;">hsla(9, 100%, 64%, 0)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsla(9, 100%, 64%, 0.2);color:#555555;">hsla(9, 100%, 64%, 0.2)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsla(9, 100%, 64%, 0.4);">hsla(9, 100%, 64%, 0.4)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsla(9, 100%, 64%, 0.6);">hsla(9, 100%, 64%, 0.6)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsla(9, 100%, 64%, 0.8);">hsla(9, 100%, 64%, 0.8)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:hsla(9, 100%, 64%, 1);">hsla(9, 100%, 64%, 1)</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryitbaff.html?filename=tryhtml_color_hsla" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <script>
        //changeRed(255)
        //changeGreen(0)
        //changeBlue(0)
        changeRGB("r");
        function changeRGB(x) {
            var col, r, g, b;
            r = document.getElementById("slideRed").value;
            g = document.getElementById("slideGreen").value;
            b = document.getElementById("slideBlue").value;
            /*
              if (x == "r") {value = r;col = w3color("rgb(" + value + ", " + g + ", " + b + ")");}
              if (x == "g") {col = w3color("rgb(" + r + ", " + g + ", " + b + ")");}
              if (x == "b") {col = w3color("rgb(" + value + ", " + g + ", " + b + ")");}
                if (col.isDark()) {
                  document.getElementById('valRed2').style.color = "#ffffff";
                  document.getElementById('valRed2').style.opacity = "0.6";
                } else {
                  document.getElementById('valRed2').style.color = "#1f2d3d";
                  document.getElementById('valRed2').style.opacity = "0.4";
                }*/
            col = w3color("rgb(" + r + "," + g + "," + b + ")");
            document.getElementById('valRed2').innerHTML = r;
            document.getElementById('valGreen2').innerHTML = g;
            document.getElementById('valBlue2').innerHTML = b;
            document.getElementById('rgbresult').style.backgroundColor = col.toRgbString();
            document.getElementById('rgbresulttext').innerHTML = col.toRgbString();
            if (col.isDark(150)) {
                document.getElementById('rgbresulttext').style.color = "#ffffff";
            } else {
                document.getElementById('rgbresulttext').style.color = "#1f2d3d";
            }
//    document.getElementById('valRed').innerHTML = value;
//    changeAll();
        }
        function changeGreen(value) {
            document.getElementById('valGreen').innerHTML = value;
            changeAll();
        }
        function changeBlue(value) {
            document.getElementById('valBlue').innerHTML = value;
            changeAll();
        }
        function changeAll() {
            var r = document.getElementById('valRed').innerHTML;
            var g = document.getElementById('valGreen').innerHTML;
            var b = document.getElementById('valBlue').innerHTML;
            document.getElementById('change').style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
            document.getElementById('changetxt').innerHTML = "rgb(" + r + ", " + g + ", " + b + ")";
        }
    </script>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Как задать цвета на веб-странице?</em></li>
            <li><em>Какие названия цветов используются на веб-страницах?</em></li>
            <li><em>Сколько стандартных названий цветов поддерживается в HTML?</em></li>
            <li><em>С помощью какого свойства можно установить цвет фона HTML-страницы?</em></li>
            <li><em>С помощью какого свойства можно установить цвет тексту HTML-страницы?</em></li>
            <li><em>С помощью какого свойства можно установить цвет границы HTML-элемента?</em></li>
            <li><em>С помощью каких значений цвета можна установить цвета на веб-странице?</em></li>
            <li><em>Как расшифровывается RGB-значение цвета?</em></li>
            <li><em>Что определяет каждый параметр в RGB-значении цвета?</em></li>
            <li><em>Какое минимальное и максимальное значение каждого параметра в RGB-цвете?</em></li>
            <li><em>Какие должны быть значения каждого из источников света при установлении оттенков серого в RGB-цвете?</em></li>
            <li><em>В какой форме указывается цвет с помощью шестнадцатеричного (HEX) значения?</em></li>
            <li><em>Какое минимальное и максимальное значение каждого параметра в HEX-цвете?</em></li>
            <li><em>Какие должны быть значения каждого из источников света при установлении оттенков серого в HEX-цвете?</em></li>
            <li><em>Как расшифровывается HSL-значение цвета?</em></li>
            <li><em>Какое минимальное и максимальное значение каждого параметра в HSL-цвете?</em></li>
            <li><em>Какие должны быть значения каждого из источников света при установлении оттенков серого в HSL-цвете?</em></li>
            <li><em>Для чего нужен альфа-канал при установлении значений цвета RGBA и HSLA?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_comments.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_colors_rgb.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
