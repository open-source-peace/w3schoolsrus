<?php include '../include/head.php'; ?>

<title>CSS Веб-шрифты. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Веб-шрифты. Различные форматы шрифтов. Правило @font-face. Как использовать нужный шрифт? Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Веб-шрифты</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_text_effects.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_2dtransforms.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS правило @font-face</h2>
    <p><strong>Веб-шрифты</strong> позволяют веб-дизайнерам использовать шрифты, которые не установлены на компьютере пользователя.</p>
    <p>Когда вы нашли/купили шрифт, который хотите использовать, просто подключите файл шрифта на своём веб-сервере, и он будет автоматически подгружаться пользователю при необходимости.</p>
    <p>Ваши &quot;собственные&quot; шрифты определяются в <strong>CSS правиле</strong> <code class="w3-codespan">@font-face</code>.</p>
    <hr>

    <h2>Различные форматы шрифтов</h2>
    <p><strong>TrueType Fonts (TTF)</strong></p>
    <p>TrueType - это стандарт шрифтов, разработанный в конце 1980-х годов компаниями Apple и Microsoft. TrueType является наиболее распространенным форматом шрифтов для операционных систем Mac OS и Microsoft Windows.</p>
    <p><strong>OpenType Fonts (OTF)</strong></p>
    <p>OpenType - это формат для масштабируемых компьютерных шрифтов. Он был построен на TrueType и является зарегистрированным товарным знаком Microsoft. Шрифты OpenType обычно используются сегодня на основных компьютерных платформах.</p>
    <p><strong>Web Open Font Format (WOFF)</strong></p>
    <p>WOFF - это формат шрифта для использования на веб-страницах. Он был разработан в 2009 году и в настоящее время является рекомендацией W3C. WOFF - это, по сути, OpenType или TrueType со сжатием и дополнительными метаданными. Цель состоит в том, чтобы поддержать распространение шрифтов с сервера на клиент по сети с ограничениями пропускной способности.</p>
    <p><strong>Web Open Font Format (WOFF 2.0)</strong></p>
    <p>TrueType/OpenType шрифт, обеспечивающий лучшее сжатие, чем WOFF 1.0.</p>
    <p><strong>SVG Шрифты/Формы</strong></p>
    <p>Шрифты SVG позволяют использовать SVG в качестве символов при отображении текста. Спецификация SVG 1.1 определяет модуль шрифта, который позволяет создавать шрифты в документе SVG. Вы также можете применять CSS к документам SVG, а правило @font-face можно применять к тексту в документах SVG.</p>
    <p><strong>Embedded OpenType Шрифты (EOT)</strong></p>
    <p>EOT-шрифты - это компактная форма шрифтов OpenType, разработанная Microsoft для использования в качестве встроенных шрифтов на веб-страницах.</p>
    <hr>

    <h2>Браузерная поддержка форматов шрифтов</h2>
    <p>Числа в таблице указывают первую версию браузера, которая полностью поддерживает формат шрифта.</p>
    <table class="browserref notranslate">
        <tr>
            <th style="width:15%;font-size:16px;text-align:left;">Font format</th>
            <th style="width:15%;" class="bsEdge" title="Internet Explorer / Edge"></th>
            <th style="width:17%;" class="bsChrome" title="Chrome"></th>
            <th style="width:18%;" class="bsFirefox" title="Firefox"></th>
            <th style="width:18%;" class="bsSafari" title="Safari"></th>
            <th style="width:17%;" class="bsOpera" title="Opera"></th>
        </tr>
        <tr>
            <td>TTF/OTF</td>
            <td>9.0*</td>
            <td>4.0</td>
            <td>3.5</td>
            <td>3.1</td>
            <td>10.0</td>
        </tr>
        <tr>
            <td>WOFF</td>
            <td>9.0</td>
            <td>5.0</td>
            <td>3.6</td>
            <td>5.1</td>
            <td>11.1</td>
        </tr>
        <tr>
            <td>WOFF2</td>
            <td><span class="deprecated">Нет</span></td>
            <td>36.0</td>
            <td>35.0*</td>
            <td><span class="deprecated">Нет</span></td>
            <td>26.0</td>
        </tr>
        <tr>
            <td>SVG</td>
            <td><span class="deprecated">Нет</span></td>
            <td>4.0</td>
            <td><span class="deprecated">Нет</span></td>
            <td>3.2</td>
            <td>9.0</td>
        </tr>
        <tr>
            <td>EOT</td>
            <td>6.0</td>
            <td><span class="deprecated">Нет</span></td>
            <td><span class="deprecated">Нет</span></td>
            <td><span class="deprecated">Нет</span></td>
            <td><span class="deprecated">Нет</span></td>
        </tr>
    </table>
    <p>*IE: Формат шрифта работает только в том случае, если он установлен как &quot;устанавливаемый&quot;.</p>
    <p>*Firefox: По умолчанию не поддерживается, но может быть включен (необходимо установить флажок &quot;true&quot; чтобы использовать WOFF2).</p>
    <hr>

    <h2>Как использовать нужный шрифт?</h2>
    <p>В правиле <code class="w3-codespan">@font-face</code> сначала определите имя для шрифта (например, myFirstFont), а затем укажите на файл шрифта.</p>

    <div class="w3-panel w3-note">
        <p><strong>Совет:</strong> Всегда используйте буквы в нижнем регистре для указания URL-адреса шрифта. Буквы в верхнем регистре могут дать неожиданные результаты в Internet Explorer.</p>
    </div>

    <p>Чтобы использовать шрифт для элемента HTML, обратитесь к имени шрифта (myFirstFont) через свойство <code class="w3-codespan">font-family</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            @font-face
            {<br>
            &nbsp;
            font-family: myFirstFont;<br>
            &nbsp;
            src: url(sansation_light.woff);<br>
            }<br>
            <br>
            div
            {<br>
            &nbsp;
            font-family: myFirstFont;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_font-face_rule.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Использование (полу)жирного текста</h2>
    <p>Вы должны добавить другое правило <code class="w3-codespan">@font-face</code>, содержащее дескрипторы для полужирного текста:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            @font-face
            {<br>
            &nbsp;&nbsp;font-family: myFirstFont;<br>
            &nbsp;&nbsp;src: url(sansation_bold.woff);<br>
            &nbsp;
            font-weight: bold;<br>
            }<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_font-face_rule_bold.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Файл "sansation_bold.woff" - это другой файл шрифта, содержащий жирный шрифт для шрифта Sansation.</p>
    <p>Браузеры будут использовать это всякий раз, когда фрагмент текста с семейством шрифтов "myFirstFont" должен отображаться жирным шрифтом.</p>
    <p>Таким образом, вы можете иметь много правил <code class="w3-codespan">@font-face</code> для одного и того же шрифта.</p>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_fonts1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_fonts2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>CSS Дескрипторы шрифтов</h2>
    <p>В следующей таблице перечислены все дескрипторы шрифта, которые могут быть определены внутри правила <code class="w3-codespan">@font-face</code>:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:17%">Дескриптор</th>
            <th style="width:20%">Значения</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>font-family</td>
            <td><i>name</i></td>
            <td>Обязательный. Определяет имя для шрифта</td>
        </tr>
        <tr>
            <td>src</td>
            <td><i>URL</i></td>
            <td>Обязательный. Определяет URL файла шрифта</td>
        </tr>
        <tr>
            <td>font-stretch</td>
            <td>normal<br>
                condensed<br>
                ultra-condensed<br>
                extra-condensed<br>
                semi-condensed<br>
                expanded<br>
                semi-expanded<br>
                extra-expanded<br>
                ultra-expanded
            </td>
            <td>Необязательный. Определяет, как шрифт должен быть растянут. По умолчанию это &quot;normal&quot;</td>
        </tr>
        <tr>
            <td>font-style</td>
            <td>normal<br>italic<br>oblique
            </td>
            <td>Необязательный. Определяет, как шрифт должен быть стилизован. По умолчанию это &quot;normal&quot;</td>
        </tr>
        <tr>
            <td>font-weight</td>
            <td>normal<br>
                bold<br>
                100<br>
                200<br>
                300<br>
                400<br>
                500<br>
                600<br>
                700<br>
                800<br>
                900</td>
            <td>Необязательный. Определяет жирность шрифта. По умолчанию это &quot;normal&quot;</td>
        </tr>
        <tr>
            <td>unicode-range</td>
            <td><i>unicode-range</i></td>
            <td>Необязательный. Определяет диапазон символов UNICODE, которые поддерживает шрифт. По умолчанию это &quot;U+0-10FFFF&quot;</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_text_effects.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_2dtransforms.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>