<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Значки. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Значки. Стилизация с помощью значков. Классы значков. Цветные значки. Значки в кнопках, списках, в таблицах. Размеры значка. UTF-8 Значки. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS Значки</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_input.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_tags.php">Next &#10095;</a>
    </div>
    <hr>
    <p>
        <span class="w3-badge">9</span>
        <span class="w3-badge w3-green">6</span>
        <span class="w3-badge w3-red">8</span>
        <span class="w3-badge w3-large w3-padding">33</span>
        <span class="w3-badge w3-xlarge w3-padding w3-green">66</span>
        <span class="w3-badge w3-xxxlarge w3-padding w3-red">99</span>
    </p>
    <hr>

    <h2>W3.CSS Классы значков</h2>
    <p>W3.CSS предоставляет только один класс для значков:</p>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tr>
            <th style="width:30%">Класс</th>
            <th>Определяет</th>
        </tr>
        <tr>
            <td>w3-badge</td>
            <td>Круглый черный значок</td>
        </tr>
    </table>
    <hr>

    <h2>Значки</h2>
    <p>Класс <strong>w3-badge</strong> создает круглый значок. Цвет по умолчанию черный.</p>
    <p>Обновления <span class="w3-badge">9</span></p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;Обновления &lt;span class=&quot;w3-badge&quot;&gt;9&lt;/span&gt;&lt;/p&gt;
            <br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_badge.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Цветные значки</h2>
    <p>Используйте класс <strong>w3-<em>color</em></strong> чтобы изменить цвет значка:</p>
    <p>Новости <span class="w3-badge w3-green w3-margin-right">6</span>Комментарии <span class="w3-badge w3-red">8</span></p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;Новости &lt;span class=&quot;w3-badge w3-green&quot;&gt;6&lt;/span&gt;&lt;/p&gt;<br>&lt;p&gt;Комментарии &lt;span class=&quot;w3-badge w3-red&quot;&gt;8&lt;/span&gt;&lt;/p&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_badges.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Значки в кнопках</h2>
    <p>Класс <strong>w3-badge</strong> может использоваться внутри других элементов:</p>

    <p><button class="w3-btn w3-black">Кнопка<span class="w3-badge w3-margin-left w3-white">1</span></button></p>
    <p><button class="w3-btn w3-red">Кнопка<span class="w3-badge w3-margin-left">2</span></button></p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;&lt;button class=&quot;w3-btn w3-black&quot;&gt;Button<br>&lt;span class=&quot;w3-badge w3-margin-left w3-white&quot;&gt;1&lt;/span&gt;<br>&lt;/button&gt;&lt;/p&gt;<br><br>&lt;p&gt;&lt;button class=&quot;w3-btn w3-red&quot;&gt;Button<br>&lt;span class=&quot;w3-badge w3-margin-left&quot;&gt;2&lt;/span&gt;<br>&lt;/button&gt;&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_badges_button.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Значки в списках</h2>
    <ul class="w3-ul">
        <li><span class="w3-badge">1</span> Jill</li>
        <li><span class="w3-badge">2</span> Eve</li>
        <li><span class="w3-badge">3</span> Adam</li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul&quot;&gt;<br>&nbsp; &lt;li&gt;&lt;span class=&quot;w3-badge&quot;&gt;1&lt;/span&gt; Jill&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;&lt;span class=&quot;w3-badge&quot;&gt;2&lt;/span&gt; Eve&lt;/li&gt;<br>&nbsp; &lt;li&gt;&lt;span
            class=&quot;w3-badge&quot;&gt;3&lt;/span&gt; Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_badges_list_numbers.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Класс <strong>w3-right</strong> делает обтекание элемента справа.</p>
    <p>Это идеально подходит для списков со значками:</p>
    <ul class="w3-ul w3-border">
        <li>Jill <span class="w3-badge w3-right w3-margin-right">1</span></li>
        <li>Eve <span class="w3-badge w3-right w3-margin-right">2</span></li>
        <li>Adam <span class="w3-badge w3-right w3-margin-right">3</span></li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-border&quot;&gt;<br>&nbsp; &lt;li&gt;Jill &lt;span
            class=&quot;w3-badge w3-right w3-margin-right&quot;&gt;1&lt;/span&gt;&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve &lt;span
            class=&quot;w3-badge w3-right w3-margin-right&quot;&gt;2&lt;/span&gt;&lt;/li&gt;<br>&nbsp; &lt;li&gt;Adam &lt;span
            class=&quot;w3-badge w3-right w3-margin-right&quot;&gt;3&lt;/span&gt;&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_badges_list.html" target='_blank'>
            Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Значки в таблицах</h2>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tr class="w3-green">
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Баллы</th>
        </tr>
        <tbody>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson <span class="w3-badge">1</span></td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson <span class="w3-badge">2</span></td>
            <td>67</td>
        </tr>
        <tr>
            <td>Bo</td>
            <td>Nilsson</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Mike</td>
            <td>Ross</td>
            <td>35</td>
        </tr>
        </tbody>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;tr&gt;<br>&nbsp; &lt;td&gt;Eve&lt;/td&gt;<br>&nbsp; &lt;td&gt;Jackson &lt;span
            class=&quot;w3-badge&quot;&gt;1&lt;/span&gt;&lt;/td&gt;<br>&nbsp; &lt;td&gt;94&lt;/td&gt;<br>&lt;/tr&gt;<br>&lt;tr&gt;<br>&nbsp;
            &lt;td&gt;Adam&lt;/td&gt;<br>&nbsp; &lt;td&gt;Johnson &lt;span class=&quot;w3-badge&quot;&gt;2&lt;/span&gt;&lt;/td&gt;<br>&nbsp;
            &lt;td&gt;67&lt;/td&gt;<br>&lt;/tr&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_badges_table.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Размеры значка</h2>
    <p>По умолчанию значок будет наследовать размер своего контейнера.</p>
    <p>Классы <strong>w3-<em>размер</em></strong> (w3-tiny, w3-small, w3-large, w3-xlarge, w3-xxlarge, w3-xxxlarge, w3-jumbo) могут использоваться для изменения размера значка:</p>
    <p>
        <span class="w3-badge w3-tiny w3-red">6</span>
        <span class="w3-badge w3-small w3-red">6</span>
        <span class="w3-badge w3-red">6</span>
    </p>
    <p>
        <span class="w3-badge w3-large w3-padding w3-red">66</span>
        <span class="w3-badge w3-xlarge w3-padding w3-red">66</span>
        <span class="w3-badge w3-xxlarge w3-padding w3-red">66</span>
    </p>
    <p>
        <span class="w3-badge w3-xxxlarge w3-padding w3-red">66</span>
        <span class="w3-badge w3-jumbo w3-padding w3-red">66</span></p>
    <p>Возможно, вы захотите добавить несколько дополнительных отступов к большим значкам:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;span class=&quot;w3-badge w3-jumbo w3-red&quot;&gt;66&lt;/span&gt;<br>&lt;span class=&quot;w3-badge w3-jumbo w3-red w3-padding&quot;&gt;66&lt;/span&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_badges_large.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>UTF-8 Значки</h2>
    <p>Поскольку HTML5 поддерживает набор символов UTF-8, вы можете использовать
        <a href="../charsets/ref_utf_dingbats.php">Дингбаты</a> для однозначных значков.</p>

    <div class="w3-xxlarge">
        &#x2776; &#x2777; &#x2778; &#x2779; &#x277A; &#x2785; &#x2786; &#x2787; &#x2788; &#x2789;
    </div>

    <div class="w3-xxlarge w3-text-red">
        &#x2776; &#x2777; &#x2778; &#x2779; &#x277A; &#x2785; &#x2786; &#x2787; &#x2788; &#x2789;
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-xxlarge&quot;&gt;<br>&amp;#x2776; &amp;#x2777; &amp;#x2778; &amp;#x2779; &amp;#x277A; &amp;#x2785; &amp;#x2786; &amp;#x2787; &amp;#x2788; &amp;#x2789;<br>&lt;/div&gt;<br><br>&lt;div class=&quot;w3-xxlarge w3-text-red&quot;&gt;<br>&amp;#x2776; &amp;#x2777; &amp;#x2778; &amp;#x2779; &amp;#x277A; &amp;#x2785; &amp;#x2786; &amp;#x2787; &amp;#x2788; &amp;#x2789;<br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_badges_utf8.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_input.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_tags.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>