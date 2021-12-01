<?php include '../include/head.php'; ?>

  <title>CSS Псевдо-классы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Псевдо-классы. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<style>
        p.tooltiptext {
            display: none;
            background-color: yellow;
            padding: 20px;
        }

        div.tooltip-container:hover p.tooltiptext {
            display: block;
        }

        .mouseover {
            background-color: #4CAF50;
            color: white;
            display: inline-block;
            padding: 2px 25px;
            text-align: center;
            width:93%;
        }
        .mouseover:hover {
            background-color:#008CBA;
        }
        .focus {
            width: 99%;
            padding: 16px 20px;
            box-sizing: border-box;
            border: 4px solid #ccc;
        }

        .focus:focus {
            background-color:#555555;
            color: white;
            outline: none;
        }
        @media screen and (max-width: 600px) {
            .focus, .mouseover {
                width:100%;
                margin:5px;
            }
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Псевдо-классы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_combinators.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_pseudo_elements.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Что такое Псевдо-классы?</h2>
    <p><strong>Псевдо-класс</strong> используется для определения особого состояния элемента.</p>
    <p>Например, его можно использовать для:</p>
    <ul>
        <li>Стилизации элемента, когда пользователь наводит на него курсор</li>
        <li>Стилизации посещённых и непосещённых ссылок по-разному</li>
        <li>Стилизации элемента, когда он находится в фокусе</li>
    </ul>

    <div class="w3-row">
        <div class="w3-half">
            <div class="mouseover">
                <p>Наведи курсор надо мной</p>
            </div>
        </div>

        <div class="w3-half">
            <input class="focus" type="text" name="fname" placeholder="Нажми меня, чтобы получить фокус">
        </div>
    </div>
    <p style="clear:both;"></p>
    <hr>

    <h2>Синтаксис</h2>
    <p><strong>Синтаксис псевдо-классов</strong>:</p>
    <div class="w3-example">
        <div class="w3-code notranslate cssHigh">
            selector:pseudo-class {<br>&nbsp;&nbsp;property:value;<br>}</div>
    </div>
    <hr>

    <h2>Якорные псевдо-классы</h2>
    <p>Ссылки могут отображаться по-разному:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* непосещенная ссылка */<br>a:link {<br>&nbsp; color: #FF0000;<br>}<br><br>/* посещенная ссылка */<br>a:visited {<br>&nbsp; color: #00FF00;<br>}<br><br>/* курсор над ссылкой */<br>
            a:hover {<br>&nbsp;&nbsp;color: #FF00FF;<br>}<br><br>/* выбранная (активная) ссылка */<br>a:active {<br>
            &nbsp;&nbsp;color: #0000FF;<br>}
        </div>
        <a target="_blank" href="../csstryit/trycss_link.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
        <br>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> <code class="w3-codespan">a:hover</code> ДОЛЖЕН прийти после <code class="w3-codespan">a:link</code> и
            <code class="w3-codespan">a:visited</code> в определении CSS для того, чтобы быть эффективным! <code class="w3-codespan">a:active</code> ДОЛЖЕН прийти после <code class="w3-codespan">a:hover</code> в определении CSS, чтобы быть эффективным! Имена псевдо-классов не чувствительны к регистру.</p>
    </div>
    <hr>

    <h2>Псевдо-классы и CSS-классы</h2>
    <p>Псевдо-классы можно комбинировать с CSS-классами:</p>
    <p>Когда вы наведёте курсор на ссылку в примере, она изменит цвет:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            a.highlight:hover {<br>&nbsp;&nbsp;color: #ff0000;<br>} </div>
        <a target="_blank" href="../csstryit/trycss_pseudo-class.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Наведение курсора на &lt;div&gt;</h2>
    <p>Пример использования псевдо-класса <code class="w3-codespan">:hover</code> на элементе <code class="w3-codespan">&lt;div&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div:hover {<br>&nbsp; background-color: blue;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_pseudo-class_hover_div.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
        <br>
    </div>
    <hr>

    <h2>Простая всплывающая подсказка</h2>
    <p>Наведите указатель мыши на элемент <code class="w3-codespan">&lt;div&gt;</code> чтобы отобразить элемент <code class="w3-codespan">&lt;p&gt;</code> (например, всплывающую подсказку):</p>
    <div class="tooltip-container w3-text-red"><b>Наведите указатель мыши на меня, чтобы отобразить элемент <code class="w3-codespan">&lt;p&gt;</code>.</b>
        <p class="tooltiptext w3-text-black">Опачки! А вот и я!</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p {<br>&nbsp; display: none;<br>&nbsp;
            background-color: yellow;<br>&nbsp; padding: 20px;<br>}<br><br>
            div:hover p {<br>&nbsp; display: block;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_pseudo-class_hover_tooltip.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
        <br>
    </div>

    <hr>

    <h2>CSS - Псевдо-класс :first-child</h2>
    <p>Псевдо-класс <code class="w3-codespan">:first-child</code> соответствует заданному элементу, который является первым дочерним элементом другого элемента.</p>

    <h2>Соответствует первому элементу &lt;p&gt;</h2>
    <p>В следующем примере селектор соответствует любому элементу <code class="w3-codespan">&lt;p&gt;</code>, который является первым дочерним элементом любого элемента:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p:first-child
            {<br>
            &nbsp;
            color: blue;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_first-child1.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Соответствует первому элементу &lt;i&gt; во всех элементах &lt;p&gt;</h2>
    <p>В следующем примере селектор соответствует первому элементу <code class="w3-codespan">&lt;i&gt;</code> во всех элементах <code class="w3-codespan">&lt;p&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p i:first-child
            {<br>
            &nbsp;
            color: blue;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_first-child2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Сопоставить все элементы &lt;i&gt; во всех первых дочерних элементах &lt;p&gt;</h2>
    <p>В следующем примере селектор сопоставляет все элементы <code class="w3-codespan">&lt;i&gt;</code> в элементах <code class="w3-codespan">&lt;p&gt;</code>, которые являются первыми дочерними элементами другого элемента:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p:first-child i
            {<br>
            &nbsp;&nbsp;color: blue;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_first-child3.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS - Псевдо-класс :lang</h2>
    <p>Псевдо-класс <code class="w3-codespan">:lang</code> позволяет определять специальные правила для разных языков.</p>
    <p>В приведенном ниже примере <code class="w3-codespan">:lang</code> определяет кавычки для элементов <code class="w3-codespan">&lt;q&gt;</code> с <code class="w3-codespan">lang=&quot;no&quot;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;html&gt;<br>
            &lt;head&gt;<br>
            &lt;style&gt;<br>
            q:lang(no) {<br>&nbsp; quotes: &quot;~&quot; &quot;~&quot;;<br>}<br>
            &lt;/style&gt;<br>
            &lt;/head&gt;<br>
            &lt;body&gt;<br><br>
            &lt;p&gt;Какой-то текст &lt;q lang=&quot;no&quot;&gt;Цитата в параграфе&lt;/q&gt;
            Какой-то текст.&lt;/p&gt;<br><br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" href="../csstryit/trycss_lang.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Больше примеров</h2>
    <p><a target="_blank" href="../csstryit/trycss_link2.html">Добавить разные стили к гиперссылкам</a><br>
        Этот пример демонстрирует, как добавить другие стили к гиперссылкам.</p>

    <p><a target="_blank" href="../csstryit/trycss_link_focus.html">Использование :focus</a><br>
        Этот пример демонстрирует, как использовать псевдо-класс :focus.</p>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_pseudo_classes1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_pseudo_classes2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_pseudo_classes3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_pseudo_classes4" target="_blank" rel="nofollow">Упражнение 4 &raquo;</a>
        </div>
    </div>
    <hr>

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
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code>, который не имеет дочерних элементов</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_enabled.php">:enabled</a></td>
            <td class="notranslate">input:enabled</td>
            <td>Выбирает каждый включенный элемент <code class="w3-codespan">&lt;input&gt;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_firstchild.php">:first-child</a></td>
            <td class="notranslate">p:first-child</td>
            <td>Выбирает все элементы <code class="w3-codespan">&lt;p&gt;</code>, которые являются первым потомком своего родителя</td>
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
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code> со значением атрибута <code class="w3-codespan">lang</code>, начинающимся с <code class="w3-codespan">&quot;it&quot;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_last-child.php">:last-child</a></td>
            <td class="notranslate">p:last-child</td>
            <td>Выбирает все элементы <code class="w3-codespan">&lt;p&gt;</code>, которые являются последним дочерним элементом своего родителя</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_last-of-type.php">:last-of-type</a></td>
            <td class="notranslate">p:last-of-type</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code>, который является последним элементом <code class="w3-codespan">&lt;p&gt;</code> своего родителя</td>
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
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code>, который является вторым дочерним элементом своего родителя</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_nth-last-child.php">:nth-last-child(n)</a></td>
            <td class="notranslate">p:nth-last-child(2)</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code>, который является вторым дочерним элементом своего родителя, считая от последнего дочернего элемента</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_nth-last-of-type.php">:nth-last-of-type(n)</a></td>
            <td class="notranslate">p:nth-last-of-type(2)</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code>, который является вторым элементом <code class="w3-codespan">&lt;p&gt;</code> своего родителя, считая от последнего потомка</td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_nth-of-type.php">:nth-of-type(n)</a></td>
            <td class="notranslate">p:nth-of-type(2)</td>
            <td>Выбирает каждый элемент <code class="w3-codespan">&lt;p&gt;</code> который является вторым элементом <code class="w3-codespan">&lt;p&gt;</code> своего родителя </td>
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
            <td>Выбирает текущий активный элемент #news (при нажатии на URL, содержащий это имя якоря)</td>
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

    <h2>Все CSS Псевдо-элементы</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Селектор</th>
            <th style="width:20%">Пример</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/sel_after.php">::after</a></td>
            <td class="notranslate">p::after</td>
            <td>Вставляет контент после каждого элемента <code class="w3-codespan">&lt;p&gt;</code></td>
        </tr>
        <tr>
            <td><a href="../cssref/sel_before.php">::before</a></td>
            <td class="notranslate">p::before</td>
            <td>Вставляет контент перед каждым элементом <code class="w3-codespan">&lt;p&gt;</code></td>
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
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_combinators.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_pseudo_elements.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>