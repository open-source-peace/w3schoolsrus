<?php include '../include/head.php'; ?>

<title>CSS Справочник. Селекторы. <?php include '../include/title.php'; ?></title>
<meta name="description" content="CSS Селекторы. Полный справочник. <?php include '../include/description.php'; ?>">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cssref.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Селекторы</span>. Справочник</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_browsersupport.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_functions.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Селекторы</h2>
    <p>В CSS селекторы - это шаблоны, используемые для выбора элементов, которые вы хотите стилизовать.</p>
    <p>Используйте наш <a target="_blank" href="../csstryit/trysel.html">Тестер CSS селекторов</a>, чтобы продемонстрировать различные селекторы.</p>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th style="width:20%">Селектор</th>
                <th style="width:20%">Пример</th>
                <th>Описание примера</th>
            </tr>
            <tr>
                <td><a href="sel_class.php">.<i>class</i></a></td>
                <td class="notranslate">.intro</td>
                <td>Выбирает все элементы с class=&quot;intro&quot;</td>
            </tr>
            <tr>
                <td><em>.class1.class2</em></td>
                <td class="notranslate">&lt;div class=&quot;name1 name2&quot;&gt;...&lt;/div&gt;</td>
                <td>Выбирает все элементы, для которых в атрибуте class установлены <em>name1</em> и <em>name2</em></td>
            </tr>
            <tr>
                <td><em>.class1 .class2</em></td>
                <td class="notranslate">&lt;div class=&quot;name1&quot;&gt;<br>&nbsp; &lt;div class=&quot;name2&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
                    ...<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</td>
                <td>Выбирает все элементы с <em>name2</em> который является потомком элемента с <em>name1</em></td>
            </tr>
            <tr>
                <td><a href="sel_id.php">#<i>id</i></a></td>
                <td class="notranslate">#firstname</td>
                <td>Выбирает элемент с id=&quot;firstname&quot;</td>
            </tr>  <tr>
                <td><a href="sel_all.php">*</a></td>
                <td class="notranslate">*</td>
                <td>Выбирает все элементы</td>
            </tr>
            <tr>
                <td><i><a href="sel_element.php">element</a></i></td>
                <td class="notranslate">p</td>
                <td>Выбирает все элементы &lt;p&gt;</td>
            </tr>
            <tr>
                <td><i><a href="sel_element_class.php">element.class</a></i></td>
                <td class="notranslate">p.intro</td>
                <td>Выбирает все элементы &lt;p&gt; с class=&quot;intro&quot;</td>
            </tr>
            <tr>
                <td><i><a href="sel_element_comma.php">element,element</a></i></td>
                <td class="notranslate">div, p</td>
                <td>Выбирает все элементы &lt;div&gt; и все элементы &lt;p&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_element_element.php"><i>element</i> <i>element</i></a></td>
                <td class="notranslate">div p</td>
                <td>Выбирает все элементы &lt;p&gt; внутри элементов &lt;div&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_element_gt.php"><i>element</i>&gt;<i>element</i></a></td>
                <td class="notranslate">div &gt; p</td>
                <td>Выбирает все элементы &lt;p&gt; где родительский элемент является элементом &lt;div&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_element_pluss.php"><i>element</i>+<i>element</i></a></td>
                <td class="notranslate">div + p</td>
                <td>Выбирает все элементы &lt;p&gt; которые размещаются сразу после элементов &lt;div&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_gen_sibling.php"><i>element1</i>~<i>element2</i></a></td>
                <td>p ~ ul</td>
                <td>Выбирает каждый элемент &lt;ul&gt; которому предшествует элемент &lt;p&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_attribute.php">[<i>attribute</i>]</a></td>
                <td class="notranslate">[target]</td>
                <td>Выбирает все элементы с атрибутом target</td>
            </tr>
            <tr>
                <td><a href="sel_attribute_value.php">[<i>attribute</i>=<i>value</i>]</a></td>
                <td class="notranslate">[target=_blank]</td>
                <td>Выбирает все элементы с target=&quot;_blank&quot;</td>
            </tr>
            <tr>
                <td><a href="sel_attribute_value_contains.php">[<i>attribute</i>~=<i>value</i>]</a></td>
                <td class="notranslate">[title~=flower]</td>
                <td>Выбирает все элементы с атрибутом title, содержащим слово &quot;flower&quot;</td>
            </tr>
            <tr>
                <td><a href="sel_attribute_value_lang.php">[<i>attribute</i>|=<i>value</i>]</a></td>
                <td class="notranslate">[lang|=en]</td>
                <td>Выбирает все элементы со значением атрибута lang, начинающимся с &quot;en&quot;</td>
            </tr>
            <tr>
                <td><a href="sel_attr_begin.php">[<i>attribute</i>^=<i>value</i>]</a></td>
                <td>a[href^=&quot;https&quot;]</td>
                <td>Выбирает каждый элемент &lt;a&gt; значение атрибута href которого начинается с &quot;https&quot;</td>
            </tr>
            <tr>
                <td><a href="sel_attr_end.php">[<i>attribute</i>$=<i>value</i>]</a></td>
                <td>a[href$=&quot;.pdf&quot;]</td>
                <td>Выбирает каждый элемент &lt;a&gt; значение атрибута href которого заканчивается на &quot;.pdf&quot;</td>
            </tr>
            <tr>
                <td><a href="sel_attr_contain.php">[<i>attribute</i>*=<i>value</i>]</a></td>
                <td>a[href*=&quot;w3schools&quot;]</td>
                <td>Выбирает каждый элемент &lt;a&gt; значение атрибута href которого содержит подстроку &quot;w3schools&quot;</td>
            </tr>
            <tr>
                <td><a href="sel_active.php">:active</a></td>
                <td class="notranslate">a:active</td>
                <td>Выбирает активную ссылку</td>
            </tr>
            <tr>
                <td><a href="sel_after.php">::after</a></td>
                <td class="notranslate">p::after</td>
                <td>Вставить что-нибудь после содержимого каждого элемента &lt;p&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_before.php">::before</a></td>
                <td class="notranslate">p::before</td>
                <td>Вставить что-то перед содержимым каждого элемента &lt;p&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_checked.php">:checked</a></td>
                <td>input:checked</td>
                <td>Выбирает каждый проверенный элемент &lt;input&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_default.php">:default</a></td>
                <td>input:default</td>
                <td>Выбирает элемент &lt;input&gt; по умолчанию</td>
            </tr>
            <tr>
                <td><a href="sel_disabled.php">:disabled</a></td>
                <td>input:disabled</td>
                <td>Выбирает каждый отключенный элемент &lt;input&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_empty.php">:empty</a></td>
                <td>p:empty</td>
                <td>Выбирает каждый элемент &lt;p&gt;, который не имеет дочерних элементов (включая текстовые узлы)</td>
            </tr>
            <tr>
                <td><a href="sel_enabled.php">:enabled</a></td>
                <td>input:enabled</td>
                <td>Выбирает каждый включенный элемент &lt;input&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_firstchild.php">:first-child</a></td>
                <td class="notranslate">p:first-child</td>
                <td>Выбирает каждый элемент &lt;p&gt;, который является первым дочерним элементом его родителя.</td>
            </tr>
            <tr>
                <td><a href="sel_firstletter.php">::first-letter</a></td>
                <td class="notranslate">p::first-letter</td>
                <td>Выбирает первую букву каждого элемента &lt;p&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_firstline.php">::first-line</a></td>
                <td class="notranslate">p::first-line</td>
                <td>Выбирает первую строку каждого элемента &lt;p&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_first-of-type.php">:first-of-type</a></td>
                <td>p:first-of-type</td>
                <td>Выбирает каждый элемент &lt;p&gt;, который является первым элементом &lt;p&gt; своего родителя</td>
            </tr>
            <tr>
                <td><a href="sel_focus.php">:focus</a></td>
                <td class="notranslate">input:focus</td>
                <td>Выбирает элемент input, который имеет фокус</td>
            </tr>
            <tr>
                <td><a href="sel_hover.php">:hover</a></td>
                <td class="notranslate">a:hover</td>
                <td>Выбирает ссылки при наведении мыши</td>
            </tr>
            <tr>
                <td><a href="sel_in-range.php">:in-range</a></td>
                <td class="notranslate">input:in-range</td>
                <td>Выбирает элементы input со значением в указанном диапазоне</td>
            </tr>
            <tr>
                <td><a href="sel_indeterminate.php">:indeterminate</a></td>
                <td class="notranslate">input:indeterminate</td>
                <td>Выбирает элементы input, которые находятся в неопределенном состоянии</td>
            </tr>
            <tr>
                <td><a href="sel_invalid.php">:invalid</a></td>
                <td class="notranslate">input:invalid</td>
                <td>Выбирает все input элементы с недопустимым значением</td>
            </tr>
            <tr>
                <td><a href="sel_lang.php">:lang(<i>language</i>)</a></td>
                <td class="notranslate">p:lang(it)</td>
                <td>Выбирает каждый элемент &lt;p&gt; с атрибутом lang, соответствующий &quot;it&quot; (итальянский)</td>
            </tr>
            <tr>
                <td><a href="sel_last-child.php">:last-child</a></td>
                <td>p:last-child</td>
                <td>Выбирает каждый элемент &lt;p&gt; который является последним дочерним элементом его родителя.</td>
            </tr>
            <tr>
                <td><a href="sel_last-of-type.php">:last-of-type</a></td>
                <td>p:last-of-type</td>
                <td>Выбирает каждый элемент &lt;p&gt;, который является последним элементом &lt;p&gt; своего родителя</td>
            </tr>
            <tr>
                <td><a href="sel_link.php">:link</a></td>
                <td class="notranslate">a:link</td>
                <td>Выбирает все не посещенные ссылки</td>
            </tr>
            <tr>
                <td><a href="sel_not.php">:not(<i>selector</i>)</a></td>
                <td>:not(p)</td>
                <td>Выбирает каждый элемент, который не является элементом &lt;p&gt;</td>
            </tr>
            <tr>
                <td><a href="sel_nth-child.php">:nth-child(<i>n</i>)</a></td>
                <td>p:nth-child(2)</td>
                <td>Выбирает каждый элемент &lt;p&gt; который является вторым дочерним элементом его родителя.</td>
            </tr>
            <tr>
                <td><a href="sel_nth-last-child.php">:nth-last-child(<i>n</i>)</a></td>
                <td>p:nth-last-child(2)</td>
                <td>Выбирает каждый элемент &lt;p&gt; который является вторым дочерним элементом своего родителя, считая от последнего дочернего элемента</td>
            </tr>
            <tr>
                <td><a href="sel_nth-last-of-type.php">:nth-last-of-type(<i>n</i>)</a></td>
                <td>p:nth-last-of-type(2)</td>
                <td>Выбирает каждый элемент &lt;p&gt; который является вторым элементом &lt;p&gt; своего родителя, начиная с последнего дочернего</td>
            </tr>
            <tr>
                <td><a href="sel_nth-of-type.php">:nth-of-type(<i>n</i>)</a></td>
                <td>p:nth-of-type(2)</td>
                <td>Выбирает каждый элемент &lt;p&gt; который является вторым элементом &lt;p&gt; своего родителя</td>
            </tr>
            <tr>
                <td><a href="sel_only-of-type.php">:only-of-type</a></td>
                <td>p:only-of-type</td>
                <td>Выбирает каждый элемент &lt;p&gt; который является единственным элементом &lt;p&gt; своего родителя</td>
            </tr>
            <tr>
                <td><a href="sel_only-child.php">:only-child</a></td>
                <td>p:only-child</td>
                <td>Выбирает каждый элемент &lt;p&gt; который является единственным потомком своего родителя</td>
            </tr>
            <tr>
                <td><a href="sel_optional.php">:optional</a></td>
                <td class="notranslate">input:optional</td>
                <td>Выбирает элементы input без "обязательного" атрибута</td>
            </tr>
            <tr>
                <td><a href="sel_out-of-range.php">:out-of-range</a></td>
                <td class="notranslate">input:out-of-range</td>
                <td>Выбирает элементы input со значением за пределами указанного диапазона</td>
            </tr>
            <tr>
                <td><a href="sel_placeholder.php">::placeholder</a></td>
                <td class="notranslate">input::placeholder</td>
                <td>Выбирает элементы input с заполнителем текста</td>
            </tr>
            <tr>
                <td><a href="sel_read-only.php">:read-only</a></td>
                <td class="notranslate">input:read-only</td>
                <td>Выбирает элементы input с указанным атрибутом "readonly" (только для чтения)</td>
            </tr>
            <tr>
                <td><a href="sel_read-write.php">:read-write</a></td>
                <td class="notranslate">input:read-write</td>
                <td>Выбирает элементы input с атрибутом "readonly", который НЕ указан</td>
            </tr>
            <tr>
                <td><a href="sel_required.php">:required</a></td>
                <td class="notranslate">input:required</td>
                <td>Выбирает элементы input с указанным атрибутом "required"</td>
            </tr>
            <tr>
                <td><a href="sel_root.php">:root</a></td>
                <td>:root</td>
                <td>Выбирает root (корневой) элемент документа</td>
            </tr>
            <tr>
                <td><a href="sel_selection.php">::selection</a></td>
                <td>::selection</td>
                <td>Выбирает часть элемента, которая выбрана пользователем</td>
            </tr>
            <tr>
                <td><a href="sel_target.php">:target</a></td>
                <td>#news:target</td>
                <td>Выбирает текущий активный элемент #news (клик на URL, содержащий это имя якоря)</td>
            </tr>
            <tr>
                <td><a href="sel_valid.php">:valid</a></td>
                <td class="notranslate">input:valid</td>
                <td>Выбирает все входные элементы с допустимым значением</td>
            </tr>
            <tr>
                <td><a href="sel_visited.php">:visited</a></td>
                <td class="notranslate">a:visited</td>
                <td>Выбирает все посещенные ссылки</td>
            </tr>
        </table>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_browsersupport.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_functions.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>