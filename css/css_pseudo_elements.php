<?php include '../include/head.php'; ?>

  <title>CSS Псевдоэлементы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Псевдоэлементы.  Что такое псевдоэлементы и как они используются при стилизации веб-страниц? Псевдо-классы для вёрстки. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<style>
        div.ex:first-letter
        {
            color: #ff0000;
            font-size:xx-large;
        }
        div.ex2:first-line
        {
            color:#0000ff;
            font-variant:small-caps;
        }
        div.ex1:first-letter
        {
            color: #ff0000;
            font-size:xx-large;
        }
        div.ex1:first-line
        {
            color: #0000ff;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Псевдоэлементы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_pseudo_classes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_image_transparency.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Что такое псевдоэлементы?</h2>
    <p><strong>CSS псевдоэлемент используется для стилизации определенных частей элемента</strong>.</p>
    <p>Например, его можно использовать для:</p>
    <ul>
        <li>Стилизации первой буквы или строки элемента</li>
        <li>Вставки содержимого до или после содержимого элемента</li>
    </ul>
    <hr>
    <h2>Синтаксис</h2>
    <p>Синтаксис псевдоэлементов:</p>
    <div class="w3-example">
        <div class="w3-code notranslate cssHigh">
            selector::pseudo-element {<br>&nbsp;&nbsp;property:value;<br>}</div>
    </div>
    <hr>

    <h2>Псевдоэлемент ::first-line</h2>
    <p>Псевдоэлемент <code class="w3-codespan">::first-line</code> используется для добавления специального стиля к первой строке текста.</p>
    <p>В следующем примере форматируется первая строка текста во всех элементах <code class="w3-codespan"><code class="w3-codespan">&lt;p&gt;</code></code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p::first-line
            {<br>
            &nbsp;
            color: #ff0000;<br>
            &nbsp;
            font-variant: small-caps;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_firstline.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p><strong>Примечание:</strong> Псевдоэлемент <code class="w3-codespan">::first-line</code> может применяться только к блочным элементам.</p>
    <p>Следующие свойства относятся к псевдоэлементу <code class="w3-codespan">::first-line</code>:</p>
    <ul>
        <li>font properties</li>
        <li>color properties</li>
        <li>background properties</li>
        <li>word-spacing</li>
        <li>letter-spacing</li>
        <li>text-decoration</li>
        <li>vertical-align</li>
        <li>text-transform</li>
        <li>line-height</li>
        <li>clear</li>
    </ul>
    <div class="w3-panel w3-note">
        <p><strong>Обратите внимание на двойное двоеточие -</strong> <code class="w3-codespan">::first-line</code> в сравнении с <code class="w3-codespan">:first-line</code><br><br>Двойное двоеточие заменило запись с двоеточием для псевдоэлементов в <strong>CSS3</strong>. Это была попытка W3C провести различие между <strong>псевдо-классами</strong> и <strong>псевдоэлементами</strong>.<br><br>Синтаксис с одиночным двоеточием использовался для псевдо-классов и псевдоэлементов в CSS2 и CSS1.<br><br>Для обратной совместимости синтаксис с одним двоеточием приемлем для псевдоэлементов в <strong>CSS2</strong> и <strong>CSS1</strong>.</p>
    </div>
    <hr>

    <h2>Псевдоэлемент ::first-letter</h2>
    <p>Псевдоэлемент <code class="w3-codespan">::first-letter</code> псевдоэлемент используется для добавления специального стиля к первой букве текста.</p>
    <p>В следующем примере форматируется первая буква текста во всех элементах <code class="w3-codespan"><code class="w3-codespan">&lt;p&gt;</code></code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p::first-letter
            {<br>
            &nbsp;
            color: #ff0000;<br>
            &nbsp;
            font-size: xx-large;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_firstletter.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p><strong>Примечание:</strong> Псевдоэлемент <code class="w3-codespan">::first-letter</code> может применяться только к блочным элементам.</p>
    <p>Следующие свойства применяются к псевдоэлементу ::first-letter:</p>
    <ul>
        <li>font properties</li>
        <li>color properties</li>
        <li>background properties</li>
        <li>margin properties</li>
        <li>padding properties</li>
        <li>border properties</li>
        <li>text-decoration</li>
        <li>vertical-align (только если &quot;float&quot; установлен &quot;none&quot;)</li>
        <li>text-transform</li>
        <li>line-height</li>
        <li>float</li>
        <li>clear</li>
    </ul>
    <hr>

    <h2>Псевдоэлементы и CSS классы</h2>
    <p>Псевдоэлементы можно комбинировать с классами CSS:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p.intro::first-letter {<br>&nbsp;&nbsp;color: #ff0000;<br>&nbsp;
            font-size:200%;<br>} </div>
        <a target="_blank" href="../csstryit/trycss_pseudo-element.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>В приведенном выше примере первая буква параграфа будет отображаться с class=&quot;intro&quot;, красным и большим размером.</p>
    <hr>

    <h2>Несколько псевдоэлементов</h2>
    <p>Несколько псевдоэлементов также могут быть объединены.</p>
    <p>В следующем примере первая буква параграфа будет красного цвета с размером шрифта xx-Large. Остальная часть первой строки будет синей, а также заглавными буквами. Остальная часть параграфа будет размером и цветом шрифта по умолчанию:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p::first-letter
            {<br>
            &nbsp;&nbsp;color: #ff0000;<br>
            &nbsp;&nbsp;font-size: xx-large;<br>
            }<br><br>
            p::first-line
            {<br>
            &nbsp;
            color: #0000ff;<br>
            &nbsp;
            font-variant: small-caps;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_firstline_letter.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS псевдоэлемент - ::before</h2>
    <p>Псевдоэлемент <code class="w3-codespan">::before</code> может использоваться для вставки некоторого содержимого перед содержимым элемента.</p>
    <p>В следующем примере вставляется изображение перед содержимым каждого элемента <code class="w3-codespan">&lt;h1&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1::before
            {<br>
            &nbsp;&nbsp;content: url(smiley.gif);<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_before.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS псевдоэлемент - ::after</h2>
    <p>Псевдоэлемент <code class="w3-codespan">::after</code> может использоваться для вставки некоторого содержимого после содержимого элемента.</p>
    <p>В следующем примере вставляется изображение после содержимого каждого элемента <code class="w3-codespan">&lt;h1&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h1::after
            {<br>
            &nbsp;&nbsp;content: url(smiley.gif);<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_after.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS псевдоэлемент - ::marker</h2>
    <p>Псевдоэлемент <code class="w3-codespan">::marker</code> выбирает маркеры элементов списка.</p>
    <p>В следующем примере стили маркеров элементов списка:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ::marker { <br>
            &nbsp;&nbsp;color: red;<br>&nbsp; font-size: 23px;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_marker.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS псевдоэлемент - ::selection</h2>
    <p>Псевдоэлемент <code class="w3-codespan">::selection</code> соответствует части элемента, выбранной пользователем.</p>
    <p>Следующие свойства CSS могут быть применены к <code class="w3-codespan">::selection</code>:
        <code class="w3-codespan">color</code>, <code class="w3-codespan">background</code>, <code class="w3-codespan">cursor</code> и <code class="w3-codespan">outline</code>.</p>
    <p>В следующем примере выделенный текст становится красным на желтом фоне:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ::selection {<br>&nbsp;&nbsp;color: red; <br>&nbsp;
            background: yellow;<br>}</div>
        <a target="_blank" href="../csstryit/trycss3_selection.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_pseudo_elements1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_pseudo_elements2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_pseudo_elements3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>Все CSS Псевдоэлементы</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Селектор</th>
            <th style="width:20%">Пример</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/sel_after.php">::after</a></td>
            <td class="notranslate">p::after</td>
            <td>Вставляет что-то после содержания каждого элемента <code class="w3-codespan">&lt;p&gt;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_before.php">::before</a></td>
            <td class="notranslate">p::before</td>
            <td>Вставляет что-то перед содержанием каждого элемента <code class="w3-codespan">&lt;p&gt;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_firstletter.php">::first-letter</a></td>
            <td class="notranslate">p::first-letter</td>
            <td>Выбирает первую букву каждого элемента <code class="w3-codespan">&lt;p&gt;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_firstline.php">::first-line</a></td>
            <td class="notranslate">p::first-line</td>
            <td>Выбирает первую строку каждого элемента <code class="w3-codespan">&lt;p&gt;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_selection.php">::selection</a></td>
            <td class="notranslate">p::selection</td>
            <td>Выбирает часть элемента, которая выбрана пользователем</td>
        </tr>
    </table>

    <h2>Все CSS Псевдо-классы</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Селектор</th>
            <th style="width:20%">Пример</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/sel_active.php">:active</a></td>
            <td class="notranslate">a:active</td>
            <td>Выбирает активную ссылку</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_checked.php">:checked</a></td>
            <td class="notranslate">input:checked</td>
            <td>Выбирает каждый проверенный элемент <code class="w3-codespan">&lt;input&gt;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_disabled.php">:disabled</a></td>
            <td class="notranslate">input:disabled</td>
            <td>Выбирает каждый отключенный элемент <code class="w3-codespan">&lt;input&gt;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_empty.php">:empty</a></td>
            <td class="notranslate">p:empty</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code> который не имеет дочерних элементов</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_enabled.php">:enabled</a></td>
            <td class="notranslate">input:enabled</td>
            <td>Выбирает каждый включенный элемент <code class="w3-codespan">&lt;input&gt;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_firstchild.php">:first-child</a></td>
            <td class="notranslate">p:first-child</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code>, который является первым дочерним элементом своего родителя.</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_first-of-type.php">:first-of-type</a></td>
            <td class="notranslate">p:first-of-type</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code> который является первым элементом <code class="w3-codespan">&lt;p&gt;</code> своего родителя</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_focus.php">:focus</a></td>
            <td class="notranslate">input:focus</td>
            <td>Выбирает элемент <code class="w3-codespan">&lt;input&gt;</code> который имеет фокус</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_hover.php">:hover</a></td>
            <td class="notranslate">a:hover</td>
            <td>Выбирает ссылки при наведении мыши</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_in-range.php">:in-range</a></td>
            <td class="notranslate">input:in-range</td>
            <td>Выбирает элементы <code class="w3-codespan">&lt;input&gt;</code> со значением в указанном диапазоне</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_invalid.php">:invalid</a></td>
            <td class="notranslate">input:invalid</td>
            <td>Выбирает все элементы <code class="w3-codespan">&lt;input&gt;</code> с недопустимым значением</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_lang.php">:lang(<i>language</i>)</a></td>
            <td class="notranslate">p:lang(it)</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code> со значением атрибута lang, начинающимся с &quot;it&quot;</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_last-child.php">:last-child</a></td>
            <td class="notranslate">p:last-child</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code>, который является последним дочерним элементом своего родителя.</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_last-of-type.php">:last-of-type</a></td>
            <td class="notranslate">p:last-of-type</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code> который является последним элементом <code class="w3-codespan">&lt;p&gt;</code> своего родителя</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_link.php">:link</a></td>
            <td class="notranslate">a:link</td>
            <td>Выбирает все не посещенные ссылки</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_not.php">:not(selector)</a></td>
            <td class="notranslate">:not(p)</td>
            <td>Выбирает каждый элемент, который не является элементом <code class="w3-codespan">&lt;p&gt;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_nth-child.php">:nth-child(n)</a></td>
            <td class="notranslate">p:nth-child(2)</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code> который является вторым дочерним элементом его родителя.</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_nth-last-child.php">:nth-last-child(n)</a></td>
            <td class="notranslate">p:nth-last-child(2)</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code> который является вторым дочерним элементом своего родителя, считая от последнего дочернего элемента</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_nth-last-of-type.php">:nth-last-of-type(n)</a></td>
            <td class="notranslate">p:nth-last-of-type(2)</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code> который является вторым элементом <code class="w3-codespan">&lt;p&gt;</code> своего родителя, считая от последнего потомка</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_nth-of-type.php">:nth-of-type(n)</a></td>
            <td class="notranslate">p:nth-of-type(2)</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code>, который является вторым элементом <code class="w3-codespan">&lt;p&gt;</code> своего родителя</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_only-of-type.php">:only-of-type</a></td>
            <td class="notranslate">p:only-of-type</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code> который является единственным элементом <code class="w3-codespan">&lt;p&gt;</code> своего родителя</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_only-child.php">:only-child</a></td>
            <td class="notranslate">p:only-child</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code> который является единственным потомком своего родителя</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_optional.php">:optional</a></td>
            <td class="notranslate">input:optional</td>
            <td>Выбирает элементы <code class="w3-codespan">&lt;input&gt;</code> без атрибута <code class="w3-codespan">&quot;required&quot;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_out-of-range.php">:out-of-range</a></td>
            <td class="notranslate">input:out-of-range</td>
            <td>Выбирает элементы <code class="w3-codespan">&lt;input&gt;</code> со значением вне указанного диапазона</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_read-only.php">:read-only</a></td>
            <td class="notranslate">input:read-only</td>
            <td>Выбирает элементы <code class="w3-codespan">&lt;input&gt;</code> с указанным атрибутом <code class="w3-codespan">&quot;readonly&quot;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_read-write.php">:read-write</a></td>
            <td class="notranslate">input:read-write</td>
            <td>Выбирает элементы <code class="w3-codespan">&lt;input&gt;</code> без атрибута <code class="w3-codespan">&quot;readonly&quot;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_required.php">:required</a></td>
            <td class="notranslate">input:required</td>
            <td>Выбирает элементы <code class="w3-codespan">&lt;input&gt;</code> с указанным атрибутом <code class="w3-codespan">&quot;required&quot;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_root.php">:root</a></td>
            <td class="notranslate">root</td>
            <td>Выбирает корневой элемент документа</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_target.php">:target</a></td>
            <td class="notranslate">#news:target</td>
            <td>Выбирает текущий активный элемент #news (при нажатии на URL-адрес, содержащий это имя якоря)</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_valid.php">:valid</a></td>
            <td class="notranslate">input:valid</td>
            <td>Выбирает все элементы <code class="w3-codespan">&lt;input&gt;</code> с допустимым значением</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_visited.php">:visited</a></td>
            <td class="notranslate">a:visited</td>
            <td>Выбирает все посещенные ссылки</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_pseudo_classes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_image_transparency.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>