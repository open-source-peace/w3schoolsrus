<?php include '../include/head.php'; ?>

<title>CSS Справочник. Единицы измерения. <?php include '../include/title.php'; ?></title>
<meta name='description' content="CSS Справочник. Единицы измерения. Какие единицы измерения используются при создании веб-страниц? <?php include '../include/description.php'; ?>">
<link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cssref.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Единицы измерения</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_animatable.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_pxtoemconversion.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Единицы измерения</h2>
    <p>CSS имеет несколько различных единиц для выражения длины.</p>
    <p>Многие свойства CSS принимают значения &quot;длины&quot;, такие как <code class="w3-codespan">width</code>, <code class="w3-codespan">margin</code>, <code class="w3-codespan">padding</code>, <code class="w3-codespan">font-size</code> и др.</p>
    <p>Длина - это число, за которым следует единица длины, например 10px, 2em и др.</p>
    <p>Между числом и единицей не должно быть пробела. Однако, если значение равно 0, единица может быть опущена.</p>
    <p>Для некоторых свойств CSS допустимы отрицательные длины.</p>
    <p>Существует два типа единиц длины: <strong>абсолютная</strong> и <strong>относительная</strong>.</p>
    <hr>
    <h2>Абсолютные длины</h2>
    <p>Единицы абсолютной длины являются фиксированными, и длина, выраженная в любом из них, будет отображаться именно как этот размер.</p>
    <p>Абсолютные единицы длины не рекомендуются для использования на экране, потому что размеры экрана сильно различаются. Однако их можно использовать, если известен выходной носитель, например, для макета печати.</p>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th style="width:12%">Единица измерения</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td>cm</td>
                <td>сантиметры
                    <a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_cm.php">Попробуй это</a>
                </td>
            </tr>
            <tr>
                <td>mm</td>
                <td>миллиметры
                    <a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_mm.html">Попробуй это</a>
                </td>
            </tr>
            <tr>
                <td>in</td>
                <td>дюймы (1дюйм = 96px = 2.54cm)
                    <a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_in.html">Попробуй это</a>
                </td>
            </tr>
            <tr>
                <td>px *</td>
                <td>пиксели (1px = 1/96th of 1in)
                    <a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_px.html">Попробуй это</a>
                </td>
            </tr>
            <tr>
                <td>pt</td>
                <td>точки (1pt = 1/72 1дюйма)
                    <a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_pt.html">Попробуй это</a>
                </td>
            </tr>
            <tr>
                <td>pc</td>
                <td>пики (1pc = 12 pt)
                    <a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_pc.html">Попробуй это</a>
                </td>
            </tr>
        </table>
    </div>
    <p>* Пиксели (px) относительно устройства просмотра. Для устройств с низким разрешением 1 пиксель - это один пиксель (точка) устройства на дисплее. Для принтеров и экранов с высоким разрешением 1px подразумевает несколько пикселей устройства.</p>
    <hr>
    <h2>Относительные длины</h2>
    <p>Единицы относительной длины определяют длину относительно другого свойства длины. Относительные единицы длины лучше масштабируются между различными средами рендеринга.</p>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th style="width:12%">Единица измерения</th>
                <th>Описание</th>
                <th></th>
            </tr>
            <tr>
                <td>em</td>
                <td>Относительно размера шрифта элемента (2em означает 2-кратный размер текущего шрифта)</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_em.html">Попробуй это</a></td>
            </tr>
            <tr>
                <td>ex</td>
                <td>Относительно x-высоты текущего шрифта (редко используется)</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_ex.html">Попробуй это</a></td>
            </tr>
            <tr>
                <td>ch</td>
                <td>Относительно ширины &quot;0&quot; (ноль)</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_ch.html">Попробуй это</a></td>
            </tr>
            <tr>
                <td>rem</td>
                <td>Относительно размера шрифта корневого элемента</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_rem.html">Попробуй это</a></td>
            </tr>
            <tr>
                <td>vw</td>
                <td>Относительно 1% ширины области просмотра*</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_vw.html">Попробуй это</a></td>
            </tr>
            <tr>
                <td>vh</td>
                <td>Относительно 1% высоты окна просмотра*</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_vh.html">Попробуй это</a></td>
            </tr>
            <tr>
                <td>vmin</td>
                <td>Относительно 1% *меньшего размера области просмотра</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_vmin.html">Попробуй это</a></td>
            </tr>
            <tr>
                <td>vmax</td>
                <td>Относительно 1% *большего размера области просмотра</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_vmax.html">Попробуй это</a></td>
            </tr>
            <tr>
                <td>%</td>
                <td>Относительно родительского элемента</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_unit_percentage.html">Попробуй это</a></td>
            </tr>
        </table>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Совет:</strong> Единицы em и rem удобны в создании идеально масштабируемого макета! <br> *Viewport = размер окна браузера. Если ширина окна составляет 50 см, 1vw = 0.5 см.</p>
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
                <td>12.0</td>
                <td>19.0</td>
                <td>6.0</td>
                <td>20.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">vmax</td>
                <td>26.0</td>
                <td>16.0</td>
                <td>19.0</td>
                <td>7.0</td>
                <td>20.0</td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_animatable.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_pxtoemconversion.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>