<?php include '../include/head.php'; ?>

  <title>CSS Единицы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Единицы длины. Абсолютные и относительные единицы. Сантиметры, миллиметры, пиксели, дюймы, точки. Как задать ширину и высоту? Какие единицы лучше использовать при создании веб-сайтов? Стилизация форм на веб-странице. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Единицы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_website_layout.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_specificity.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS Единицы длины</h2>
    <p>CSS имеет несколько различных <strong>единиц для выражения длины</strong>.</p>
    <p>Многие свойства CSS принимают значения &quot;длины&quot; такие как <code class="w3-codespan">width</code>, <code class="w3-codespan">margin</code>, <code class="w3-codespan">padding</code>, <code class="w3-codespan">font-size</code> и т.д.</p>
    <p><strong>Length (длина)</strong> - это число, за которым следует единица длины, например <code class="w3-codespan">10px</code>, <code class="w3-codespan">2em</code> и т.д.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Установите разные значения длины, используя px (пиксели):</p>
        <div class="w3-code notranslate cssHigh">
            h1 {<br>
            &nbsp;&nbsp;font-size: 60px;<br>
            }<br>
            <br>
            p {<br>
            &nbsp;&nbsp;font-size: 25px;<br>
            &nbsp;&nbsp;line-height: 50px;<br>
            }
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_units_px.html">Попробуйте сами »</a></p>
    </div>

    <p><b>Примечание:</b> Между числом и единицей не может быть пробела. Однако, если значение равно <code class="w3-codespan">0</code>, единицу измерения можно не указывать.</p>
    <p>Для некоторых свойств CSS разрешена отрицательная длина.</p>
    <p>Существует два типа единиц длины: <strong>абсолютная</strong> и <strong>относительная</strong>.</p>
    <hr>
    <h2>Абсолютные длины</h2>
    <p><strong>Единицы абсолютной длины</strong> являются фиксированными, и длина, выраженная в любом из них, будет отображаться именно как фиксированный размер.</p>
    <p>Абсолютные единицы длины не рекомендуются для использования вывода изображения на экране, потому что размеры экранов различных устройств могут сильно отличаться. Однако их можно использовать, если известен выходной носитель, например, для печатного макета (страницы для печати).</p>

    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th style="width:12%">Единица</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td>cm</td>
                <td>сантиметры
                    <a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_cm.html">Попробуй</a>
                </td>
            </tr>
            <tr>
                <td>mm</td>
                <td>миллиметры
                    <a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_mm.html">Попробуй</a>
                </td>
            </tr>
            <tr>
                <td>in</td>
                <td>дюймы (1 дюйм = 96px = 2.54см)
                    <a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_in.html">Попробуй</a>
                </td>
            </tr>
            <tr>
                <td>px *</td>
                <td>пиксели (1px = 1/96th в 1)
                    <a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_px.html">Попробуй</a>
                </td>
            </tr>
            <tr>
                <td>pt</td>
                <td>точки (1pt = 1/72 в 1)
                    <a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_pt.html">Попробуй</a>
                </td>
            </tr>
            <tr>
                <td>pc</td>
                <td>picas (1pc = 12 pt)
                    <a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_pc.html">Попробуй</a>
                </td>
            </tr>
        </table>
    </div>
    <p>* Пиксели (px) относительны и зависят от устройства просмотра. Для устройств с низким разрешением 1 пиксель - это один пиксель (точка) устройства на дисплее. Для принтеров и экранов с высоким разрешением 1px подразумевает несколько пикселей на устройстве.</p>
    <hr>
    <h2>Относительные длины</h2>
    <p><strong>Единицы относительной длины</strong> определяют длину относительно другого свойства длины. Относительные единицы длины лучше масштабируются между различными средами рендеринга (вывода на экран).</p>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th style="width:12%">Единица</th>
                <th>Описание</th>
                <th></th>
            </tr>
            <tr>
                <td>em</td>
                <td>Относительно размера шрифта элемента (2em означает 2-кратный размер текущего шрифта)</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_em.html">Попробуй</a></td>
            </tr>
            <tr>
                <td>ex</td>
                <td>Относительно x-высоты текущего шрифта (редко используется)</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_ex.html">Попробуй</a></td>
            </tr>
            <tr>
                <td>ch</td>
                <td>Относительно ширины &quot;0&quot; (нуля)</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_ch.html">Попробуй</a></td>
            </tr>
            <tr>
                <td>rem</td>
                <td>Относительно размера шрифта корневого элемента</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_rem.html">Попробуй</a></td>
            </tr>
            <tr>
                <td>vw</td>
                <td>Относительно 1% ширины области просмотра*</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_vw.html">Попробуй</a></td>
            </tr>
            <tr>
                <td>vh</td>
                <td>Относительно 1% высоты области просмотра*</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_vh.html">Попробуй</a></td>
            </tr>
            <tr>
                <td>vmin</td>
                <td>Относительно 1% меньшего размера области просмотра*</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_vmin.html">Попробуй</a></td>
            </tr>
            <tr>
                <td>vmax</td>
                <td>Относительно 1% большего размера области просмотра*</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_vmax.html">Попробуй</a></td>
            </tr>
            <tr>
                <td>%</td>
                <td>Относительно родительского элемента</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../cssref/trycss_unit_percentage.html">Попробуй</a></td>
            </tr>
        </table>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Совет:</strong> Единицы <b>em</b> и <b>rem</b> удобны в создании идеально масштабируемого макета! <br>*Viewport = размер окна браузера. Если ширина окна составляет 50 см, 1vw = 0.5 см.</p>
    </div>
    <hr>

    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, которая полностью поддерживает единицу длины.</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:20%;font-size:16px;text-align:left;">Единица длины</th>
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Internet Explorer"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td style="text-align:left;">em, ex, %, px, cm, mm, in, pt, pc</td>
                <td>1.0</td>
                <td>3.0</td>
                <td>1.0</td>
                <td>1.0</td>
                <td>3.5</td>
            </tr>
            <tr>
                <td style="text-align:left;">ch</td>
                <td>27.0</td>
                <td>9.0</td>
                <td>1.0</td>
                <td>7.0</td>
                <td>20.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">rem</td>
                <td>4.0</td>
                <td>9.0</td>
                <td>3.6</td>
                <td>4.1</td>
                <td>11.6</td>
            </tr>
            <tr>
                <td style="text-align:left;">vh, vw</td>
                <td>20.0</td>
                <td>9.0</td>
                <td>19.0</td>
                <td>6.0</td>
                <td>20.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">vmin</td>
                <td>20.0</td>
                <td>9.0*</td>
                <td>19.0</td>
                <td>6.0</td>
                <td>20.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">vmax</td>
                <td>26.0</td>
                <td><span class="deprecated">Не поддерживается</span></td>
                <td>19.0</td>
                <td>7.0</td>
                <td>20.0</td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_website_layout.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_specificity.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>