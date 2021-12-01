<?php include '../include/head.php'; ?>

  <title>CSS Счётчики. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Счётчики. Автоматическая нумерация с помощью счётчиков. Вложенные счётчики. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<style>
        .container {
            counter-reset: section;
            background:#4CAF50;
            padding: 10px;
            font: 400 12px/1.8 "Lato", sans-serif;
            color: white;
        }
        .container h3::before {
            counter-increment: section;
            content: counter(section);
            display:inline-block;
            color:white;
            background: #555;
            border: 5px solid #555;
            padding:1px 15px;
            margin-right:16px;
            border-radius: 50%;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Счётчики</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_form.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_website_layout.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-dark-grey">
        <div class="container w3-content w3-green" style="max-width:500px">
            <h3>Пицца</h3>
            <h3>Гамбургер</h3>
            <h3>Хотдоги</h3>
        </div>
    </div>

    <p class="intro"><strong>CSS счётчики</strong> - это &quot;переменные&quot;, поддерживаемые CSS, значения которых можно увеличивать с помощью правил CSS (чтобы отслеживать, сколько раз они используются). Счетчики позволяют настраивать внешний вид контента в зависимости от его размещения в документе.</p>
    <hr>

    <h2>Автоматическая нумерация с помощью счётчиков</h2>
    <p>CSS счётчики похожи на &quot;переменные&quot;. Значения переменных могут быть увеличены с помощью правил CSS (которые будут отслеживать, сколько раз они используются).</p>
    <p>Для работы со счетчиками CSS мы будем использовать следующие свойства:</p>
    <ul>
        <li><code class="w3-codespan">counter-reset</code> - создает или сбрасывает счетчик</li>
        <li><code class="w3-codespan">counter-increment</code> - увеличивает значение счетчика</li>
        <li><code class="w3-codespan">content</code> - вставляет сгенерированный контент</li>
        <li><code class="w3-codespan">counter()</code> или <code class="w3-codespan">counters()</code> функция - добавляет значение счетчика к элементу</li>
    </ul>
    <p>Чтобы использовать счетчик CSS, его необходимо сначала создать с помощью <code class="w3-codespan">counter-reset</code>.</p>
    <p>В следующем примере создается счетчик для страницы (в селекторе body), затем увеличивается значение счетчика для каждого элемента <code class="w3-codespan">&lt;h2&gt;</code> и добавляется &quot;Section &lt;<em>значение счётчика</em>&gt;:&quot; в начало каждого элемента <code class="w3-codespan">&lt;h2&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            body {<br>&nbsp;&nbsp;counter-reset: section;<br>}<br><br>h2::before {<br>&nbsp; counter-increment: section;<br>&nbsp;&nbsp;content: &quot;Section &quot; counter(section) &quot;: &quot;;<br>}
        </div>
        <a target="_blank" href="../csstryit/trycss_counters1.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Вложенные счётчики</h2>
    <p>В следующем примере создается один счетчик для страницы (section) и один счетчик для каждого элемента &lt;h1&gt; (subsection). Счётчик &quot;section&quot; будет  подсчитываться для каждого элемента <code class="w3-codespan">&lt;h1&gt;</code> с помощью &quot;Section &lt;<em>значения счётчика section</em>&gt;.&quot;, а счётчик &quot;subsection&quot; будет подсчитываться для каждого элемента <code class="w3-codespan">&lt;h2&gt;</code> с помощью &quot;&lt;<em>значения счётчика section</em>&gt;.&lt;<em>значение счётчика subsection</em>&gt;&quot;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            body {<br>&nbsp;&nbsp;counter-reset: section;<br>}<br><br>h1 {<br>&nbsp;
            counter-reset: subsection;<br>}<br><br>h1::before {<br>&nbsp; counter-increment:
            section;<br>&nbsp; content: &quot;Section &quot; counter(section) &quot;. &quot;;<br>
            }<br><br>h2::before {<br>&nbsp;
            counter-increment: subsection;<br>&nbsp; content:
            counter(section) &quot;.&quot; counter(subsection) &quot; &quot;;<br>} </div>
        <a target="_blank" href="../csstryit/trycss_counters2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Счетчик также может быть полезен для составления списков, поскольку в дочерних элементах автоматически создается новый экземпляр счетчика. Здесь мы используем функцию <code class="w3-codespan">counters()</code> для вставки строки между различными уровнями вложенных счетчиков:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            ol {<br>&nbsp; counter-reset: section;<br>&nbsp;
            list-style-type: none;<br>}<br><br>
            li::before {<br>&nbsp; counter-increment: section;<br>&nbsp;
            content: counters(section,&quot;.&quot;) &quot; &quot;;<br>} </div>
        <a target="_blank" href="../csstryit/trycss_counters3.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Свойства CSS счётчика</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/pr_gen_content.php">content</a></td>
            <td>Используется с псевдоэлементами <code class="w3-codespan">::before</code> и <code class="w3-codespan">::after</code> для вставки сгенерированного контента</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_gen_counter-increment.php">counter-increment</a></td>
            <td>Увеличивает одно или несколько значений счетчика</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_gen_counter-reset.php">counter-reset</a></td>
            <td>Создает или сбрасывает один или несколько счетчиков</td>
        </tr>
    </table>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_form.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_website_layout.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>