<?php include '../include/head.php'; ?>

  <title>CSS Селекторы атрибутов. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Селекторы атрибутов. Стилизация html элементов, которые имеют определённые атрибуты или значения атрибутов. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Селекторы</span> атрибутов</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_image_sprites.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_form.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Стиль HTML-элементов с конкретными атрибутами</h2>
    <p>Можно стилизовать элементы HTML, которые имеют определенные атрибуты или значения атрибутов.</p>
    <hr>

    <h2>CSS селектор [attribute]</h2>
    <p>Селектор <code class="w3-codespan">[attribute]</code> используется для выбора элементов с указанным атрибутом.</p>
    <p>В следующем примере выбираются все элементы  <code class="w3-codespan">&lt;a&gt;</code> с атрибутом <code class="w3-codespan">target</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            a[target] {<br>&nbsp; background-color: yellow;<br>} </div>
        <a target="_blank" href="../csstryit/trycss_sel_attribute.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS селектор [attribute=&quot;value&quot;]</h2>
    <p>Селектор <code class="w3-codespan">[attribute=&quot;value&quot;]</code> используется для выбора элементов с указанным атрибутом и значением.</p>
    <p>В следующем примере выбираются все элементы <code class="w3-codespan">&lt;a&gt;</code> с атрибутом <code class="w3-codespan">target=&quot;_blank&quot;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            a[target=&quot;_blank&quot;] { <br>&nbsp; background-color: yellow;<br>}
        </div>
        <a target="_blank" href="../csstryit/trycss_sel_attribute_value.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS селектор [attribute~=&quot;value&quot;]</h2>
    <p>Селектор <code class="w3-codespan">[attribute~=&quot;value&quot;]</code> используется для выбора элементов со значением атрибута, содержащим указанное слово.</p>
    <p>В следующем примере выбираются все элементы с атрибутом <code class="w3-codespan">title</code>, который содержит разделенный пробелами список слов, одним из которых является &quot;flower&quot;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            [title~=&quot;flower&quot;] {<br>&nbsp; border: 5px solid yellow;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_sel_attribute_value2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Приведенный выше пример будет соответствовать элементам с title="flower", title="summer flower" и title="flower new", но не title="my-flower" или title="flowers".</p>
    <hr>

    <h2>CSS селектор [attribute|=&quot;value&quot;]</h2>
    <p>Селектор <code class="w3-codespan">[attribute|=&quot;value&quot;]</code> используется для выбора элементов с указанным атрибутом, начиная с указанного значения.</p>
    <p>В следующем примере выбираются все элементы со значением атрибута <code class="w3-codespan">class</code>, которое начинается с <code class="w3-codespan">&quot;top&quot;</code>:</p>
    <p><strong>Примечание:</strong> Значение должно быть целым словом, либо одно, как <code class="w3-codespan">class=&quot;top&quot;</code>, или с последующим дефисом ( - ), как <code class="w3-codespan">class=&quot;top-text&quot;</code>!</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            [class|=&quot;top&quot;] {<br>&nbsp; background: yellow;<br>}
        </div>
        <a target="_blank" href="../csstryit/trycss_sel_attribute_hyphen.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS [attribute^=&quot;value&quot;] Selector</h2>
    <p>Селектор <code class="w3-codespan">[attribute^=&quot;value&quot;]</code> используется для выбора элементов, значение атрибута которых начинается с указанного значения.</p>
    <p>В следующем примере выбираются все элементы со значением атрибута <code class="w3-codespan">class</code>, которое начинается с <code class="w3-codespan">&quot;top&quot;</code>:</p>
    <p><strong>Примечание:</strong> Значение не должно быть целым словом!</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            [class^=&quot;top&quot;] {<br>&nbsp;&nbsp;background: yellow;<br>}
        </div>
        <a target="_blank" href="../csstryit/trycss_sel_attribute_start.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS селектор [attribute$=&quot;value&quot;]</h2>
    <p>Селектор <code class="w3-codespan">[attribute$=&quot;value&quot;]</code> используется для выбора элементов, значение атрибута которых заканчивается указанным значением.</p>
    <p>В следующем примере выбираются все элементы со значением атрибута <code class="w3-codespan">class</code>, которое заканчивается &quot;test&quot;:</p>
    <p><strong>Примечание:</strong> Значение не должно быть целым словом!</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            [class$=&quot;test&quot;] {<br>&nbsp;&nbsp;background: yellow;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss_sel_attribute_end.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS селектор [attribute*=&quot;value&quot;]</h2>
    <p>Селектор <code class="w3-codespan">[attribute*=&quot;value&quot;]</code> используется для выбора элементов, значение атрибута которых содержит указанное значение.</p>
    <p>В следующем примере выбираются все элементы со значением атрибута <code class="w3-codespan">class</code>, которое содержит &quot;te&quot;:</p>
    <p><strong>Примечание:</strong> Значение не должно быть целым словом!</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            [class*=&quot;te&quot;] {<br>&nbsp; background: yellow;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss_sel_attribute_contain.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Стилизация форм</h2>
    <p>Селекторы атрибутов могут быть полезны для стилизации форм без класса или ID:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            input[type=&quot;text&quot;]
            {<br>
            &nbsp;&nbsp;width: 150px;<br>
            &nbsp;
            display: block;<br>
            &nbsp;
            margin-bottom: 10px;<br>
            &nbsp;
            background-color: yellow;<br>
            }<br><br>
            input[type=&quot;button&quot;]
            {<br>
            &nbsp;&nbsp;width: 120px;<br>
            &nbsp;&nbsp;margin-left: 35px;<br>
            &nbsp;&nbsp;display: block;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_attselector_form.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Совет:</strong> Посетите наш <a href="css_form.php">CSS Учебник форм</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы получить дополнительные примеры того, как стилизовать формы с помощью CSS.</p>
    <hr>
    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_attribute_selectors1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_attribute_selectors2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_attribute_selectors3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_attribute_selectors4" target="_blank" rel="nofollow">Упражнение 4 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_attribute_selectors5" target="_blank" rel="nofollow">Упражнение 5 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_attribute_selectors6" target="_blank" rel="nofollow">Упражнение 6 &raquo;</a>
        </div>
    </div>
    <hr>
    <h2>Все CSS селекторы атрибутов</h2>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th style="width:20%">Селектор</th>
                <th style="width:20%">Пример</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td><a href="../cssref/sel_attribute.php">[<i>attribute</i>]</a></td>
                <td class="notranslate">[target]</td>
                <td>Выбирает все элементы с атрибутом <code class="w3-codespan">target</code></td>
            </tr>
            <tr>
                <td><a href="../cssref/sel_attribute_value.php">[<i>attribute</i>=<i>value</i>]</a></td>
                <td class="notranslate">[target=_blank]</td>
                <td>Выбирает все элементы с <code class="w3-codespan">target=&quot;_blank&quot;</code></td>
            </tr>
            <tr>
                <td><a href="../cssref/sel_attribute_value_contains.php">[<i>attribute</i>~=<i>value</i>]</a></td>
                <td class="notranslate">[title~=flower]</td>
                <td>Выбирает все элементы с атрибутом <code class="w3-codespan">title</code>, содержащим слово &quot;flower&quot;</td>
            </tr>
            <tr>
                <td><a href="../cssref/sel_attribute_value_lang.php">[<i>attribute</i>|=<i>value</i>]</a></td>
                <td class="notranslate">[lang|=en]</td>
                <td>Выбирает все элементы со значением атрибута <code class="w3-codespan">lang</code>, начинающимся с &quot;en&quot;</td>
            </tr>
            <tr>
                <td><a href="../cssref/sel_attr_begin.php">[<i>attribute</i>^=<i>value</i>]</a></td>
                <td>a[href^=&quot;https&quot;]</td>
                <td>Выбирает каждый элемент <code class="w3-codespan">&lt;a&gt;</code>, значение атрибута <code class="w3-codespan">href</code> которого начинается с &quot;https&quot;</td>
            </tr>
            <tr>
                <td><a href="../cssref/sel_attr_end.php">[<i>attribute</i>$=<i>value</i>]</a></td>
                <td>a[href$=&quot;.pdf&quot;]</td>
                <td>Выбирает каждый элемент <code class="w3-codespan">&lt;a&gt;</code>, значение атрибута <code class="w3-codespan">href</code> которого заканчивается на &quot;.pdf&quot;</td>
            </tr>
            <tr>
                <td><a href="../cssref/sel_attr_contain.php">[<i>attribute</i>*=<i>value</i>]</a></td>
                <td>a[href*=&quot;w3schools&quot;]</td>
                <td>Выбирает каждый элемент <code class="w3-codespan">&lt;a&gt;</code>, значение атрибута <code class="w3-codespan">href</code> которого содержит подстроку &quot;w3schools&quot;</td>
            </tr>
        </table>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_image_sprites.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_form.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>