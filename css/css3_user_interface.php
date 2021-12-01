<?php include '../include/head.php'; ?>

<title>CSS Пользовательский интерфейс. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Пользовательский интерфейс. Свойства пользовательского интерфейса: resize, outline-offset. Изменение размера, смещение контура. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">
    <style>
        #resize
        {
            border:2px solid;
            padding:20px;
            width:400px;
            resize:both;
            overflow:auto;
            margin-bottom:12px;
        }
        #outlineoffset
        {
            margin: 30px 20px;
            border: 1px solid black;
            outline: 4px solid red;
            outline-offset: 15px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Пользовательский интерфейс</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_multiple_columns.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_variables.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Пользовательский интерфейс</h2>
    <p>В этой главе вы узнаете о следующих свойствах пользовательского интерфейса CSS:</p>
    <ul>
        <li><code class="w3-codespan">resize</code></li>
        <li><code class="w3-codespan">outline-offset</code></li>
    </ul>
    <hr>

    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, которая полностью поддерживает свойство.</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:25%;font-size:16px;text-align:left;">Свойство</th>
                <th style="width:15%;" class="bsChrome" title="Chrome"></th>
                <th style="width:15%;" class="bsEdge" title="Internet Explorer / Edge"></th>
                <th style="width:15%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:15%;" class="bsSafari" title="Safari"></th>
                <th style="width:15%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td style="text-align:left;">resize</td>
                <td>4.0</td>
                <td>15.0</td>
                <td>5.0</td>
                <td>4.0</td>
                <td>15.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">outline-offset</td>
                <td>4.0</td>
                <td>15.0</td>
                <td>5.0</td>
                <td>4.0</td>
                <td>9.5</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>CSS Изменение размера</h2>
    <p>Свойство <code class="w3-codespan">resize</code> указывает, должен ли (и каким образом) пользователь изменять размеры элемента.</p>
    <div id="resize"><p>Этот элемент div может быть изменен пользователем!</p>
        <p>Чтобы изменить размер: нажмите и перетащите нижний правый угол этого элемента div.</p>
        <p><b>Примечание:</b> Internet Explorer не поддерживает свойство resize.</p>
    </div>

    <p>Следующий пример позволяет пользователю изменять размер только ширины элемента <code class="w3-codespan">&lt;div&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            resize: horizontal;<br>
            &nbsp;
            overflow: auto;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_resize_width.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Следующий пример позволяет пользователю переопределять только размер высоты элемента <code class="w3-codespan">&lt;div&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            resize: vertical;<br>
            &nbsp;&nbsp;overflow: auto;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_resize_height.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Следующий пример позволяет пользователю переопределять размер как высоты, так и ширины элемента <code class="w3-codespan">&lt;div&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;
            resize: both;<br>
            &nbsp;
            overflow: auto;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_resize.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Во многих браузерах <code class="w3-codespan">&lt;textarea&gt;</code> изменяет размер по умолчанию. Здесь мы использовали свойство <code class="w3-codespan">resize</code>, чтобы отключить изменение размера:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            textarea {<br>&nbsp; resize: none;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_resize_textarea.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Смещение контура</h2>
    <p>Свойство <code class="w3-codespan">outline-offset</code> добавляет пространство между контуром и краем или границей элемента.</p>

    <div id="outlineoffset">Этот div имеет контур 15px за пределами границы.</div>

    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Контур отличается от границ! В отличие от границы, контур рисуется вне границы элемента и может перекрывать другое содержимое. Кроме того, контур НЕ является частью размеров элемента; ширина и высота элемента не зависят от ширины контура.</p>
    </div>

    <p>В следующем примере используется свойство <code class="w3-codespan">outline-offset</code> для добавления пространства между границей и контуром:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div.ex1 {<br>&nbsp; margin: 20px;<br>&nbsp; border:
            1px solid black;<br>&nbsp; outline: 4px solid red;<br>&nbsp;
            outline-offset: 15px;<br>} <br><br>div.ex2 {<br>&nbsp;&nbsp;margin: 10px;<br>&nbsp;&nbsp;border: 1px solid black;<br>&nbsp;&nbsp;outline: 5px dashed blue;<br>&nbsp;&nbsp;outline-offset: 5px;<br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_outline-offset.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Свойства пользовательского интерфейса</h2>
    <p>В следующей таблице перечислены все свойства пользовательского интерфейса:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:28%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_outline-offset.php">outline-offset</a></td>
            <td>Добавляет пространство между контуром и краем или границей элемента</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_resize.php">resize</a></td>
            <td>Указывает, может ли пользователь изменять размер элемента</td>
        </tr>
    </table>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_multiple_columns.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_variables.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>