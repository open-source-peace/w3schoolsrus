<?php include '../include/head.php'; ?>
<title>Bootstrap 4 Базовая сетка / Grid. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Bootstrap 4 Базовая сетка / Grid. Система сетки Bootstrap построена с помощью flexbox и позволяет разместить до 12 столбцов на странице. Система сетки реагирует, и столбцы будут автоматически переставляться в зависимости от размера экрана. Классы Bootstrap 4 сетки: .col- .col-sm- .col-md- .col-lg- .col-xl- . <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/w3-fix.css">
<style>
    table.grid {
        width:100%;
        border:none;
        background-color:#f1f1f1;
        padding:0;
    }
    table.grid tr {
        text-align:center;
    }
    table.grid td {
        border:4px solid white;
        padding:8px;
    }
    .test [class*="col-"] {
        padding: 15px;
        background-color: #f1f1f1;
        border: 1px solid #D8D8D8;
    }
</style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_bootstrap4.php'; ?>
<?php include '../include/before_content_bootstrap.php'; ?>

<article>
    <h1>Bootstrap <span class="color_h1">4 Сетка / Grid</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="bootstrap_containers.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="bootstrap_typography.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Bootstrap 4 Система сетки</h2>
    <p>Система сетки Bootstrap построена с помощью flexbox и позволяет разместить до 12 столбцов на странице.</p>
    <p>Если вы не хотите использовать все 12 столбцов по отдельности, вы можете сгруппировать столбцы вместе, чтобы создать более широкие столбцы:</p>
    <div class="table-responsive">
        <table class="table grid">
            <tr>
                <td>пролет 1</td>
                <td>пролет 1</td>
                <td>пролет 1</td>
                <td>пролет 1</td>
                <td>пролет 1</td>
                <td>пролет 1</td>
                <td>пролет 1</td>
                <td>пролет 1</td>
                <td>пролет 1</td>
                <td>пролет 1</td>
                <td>пролет 1</td>
                <td>пролет 1</td>
            </tr>
            <tr>
                <td colspan="4">&nbsp;пролет 4</td>
                <td colspan="4">&nbsp;пролет 4</td>
                <td colspan="4">&nbsp;пролет 4</td>
            </tr>
            <tr>
                <td colspan="4">пролет 4</td>
                <td colspan="8">пролет 8</td>
            </tr>
            <tr>
                <td colspan="6">пролет 6</td>
                <td colspan="6">пролет 6</td>
            </tr>
            <tr>
                <td colspan="12">пролет 12</td>
            </tr>
        </table>
    </div>
    <p>Система сетки реагирует, и столбцы будут автоматически переставляться в зависимости от размера экрана.</p>
    <p>Убедитесь, что количество столбцов составляет 12 или менее (не обязательно использовать все 12 доступных столбцов).</p>
    <hr>

    <h2>Классы сетки</h2>
    <p>Система сетки Bootstrap 4 имеет пять классов:</p>
    <ul>
        <li><code class="w3-codespan">.col-</code> (extra small / экстрамалые устройства - ширина экрана менее 576 пикселей)</li>
        <li><code class="w3-codespan">.col-sm-</code> (small devices / маленькие устройства - ширина экрана равна или больше 576 пикселей)</li>
        <li><code class="w3-codespan">.col-md-</code> (medium devices / средние устройства - ширина экрана равна или больше 768 пикселей)</li>
        <li><code class="w3-codespan">.col-lg-</code> (large devices / большие устройства - ширина экрана не менее 992 пикселей)</li>
        <li><code class="w3-codespan">.col-xl-</code> (xlarge devices / экстрабольшие устройства - ширина экрана равна или превышает 1200 пикселей)</li>
    </ul>
    <p>Указанные выше классы можно комбинировать для создания более динамичных и гибких макетов.</p>
    <p><strong>Совет:</strong> Каждый класс масштабируется, поэтому, если вы хотите установить одинаковую ширину для
        <code class="w3-codespan">sm</code> и <code class="w3-codespan">md</code>, вам нужно только указать <code class="w3-codespan">sm</code>.</p>
    <hr>

    <h2>Базовая структура сетки Bootstrap 4</h2>
    <p>Ниже приведена базовая структура сетки Bootstrap 4:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Контроль ширины столбцов, и как они должны отображаться на разных устройствах --&gt;<br>&lt;div class=&quot;row&quot;&gt;<br>&nbsp; &lt;div class=&quot;col-*-*&quot;&gt;&lt;/div&gt;<br>&nbsp;
            &lt;div class=&quot;col-*-*&quot;&gt;&lt;/div&gt;<br>&lt;/div&gt;<br>&lt;div class=&quot;row&quot;&gt;<br>&nbsp; &lt;div class=&quot;col-*-*&quot;&gt;&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col-*-*&quot;&gt;&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col-*-*&quot;&gt;&lt;/div&gt;<br>&lt;/div&gt;<br>
            <br>&lt;!-- Или пусть Bootstrap автоматически обрабатывает макет --&gt;<br>&lt;div class=&quot;row&quot;&gt;<br>&nbsp; &lt;div class=&quot;col&quot;&gt;&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col&quot;&gt;&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col&quot;&gt;&lt;/div&gt;<br>&lt;/div&gt;</div>
    </div>
    <p>Первый пример: создать строку (<code class="w3-codespan">&lt;div
            class="row"&gt;</code>). Затем добавьте нужное количество столбцов (теги с соответствующими
        <code class="w3-codespan">.col-*-*</code> классами). Первая звезда (*) представляет отзывчивость: sm, md, lg или xl, а вторая звезда представляет число, которое должно составлять до 12 для каждой строки.</p>
    <p>Второй пример: вместо добавления номера к каждому <code class="w3-codespan">col</code>, пусть bootstrap обрабатывает макет, чтобы создать столбцы равной ширины: два <code class="w3-codespan">&quot;col&quot;</code> элемента = 50% ширины для каждого столбца. три столбца = 33,33% ширины каждого столбца. четыре столбца = 25% ширины и т.д. Вы также можете использовать <code class="w3-codespan">.col-sm|md|lg|xl</code> чтобы сделать столбцы адаптивными.</p>
    <p>Ниже мы собрали несколько примеров основных макетов сетки Bootstrap 4.</p>
    <hr>

    <h2>Три равных столбца</h2>
    <div class="container-fluid" style="margin:8px 0 15px 0;">
        <div class="row test">
            <div class="col-sm-4">.col</div>
            <div class="col-sm-4">.col</div>
            <div class="col-sm-4">.col</div>
        </div>
    </div>
    <p>В следующем примере показано, как создать три столбца одинаковой ширины на всех устройствах и ширине экрана:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;row&quot;&gt;<br>&nbsp; &lt;div class=&quot;col&quot;&gt;.col&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col&quot;&gt;.col&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col&quot;&gt;.col&lt;/div&gt;<br>&lt;/div&gt;</div>
        <a target="_blank" href="../bootstrap4tryit/trybs_grid_ex.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Адаптивные столбцы</h2>
    <div class="container-fluid" style="margin:8px 0 15px 0;">
        <div class="row test">
            <div class="col-sm-3">.col-sm-3</div>
            <div class="col-sm-3">.col-sm-3</div>
            <div class="col-sm-3">.col-sm-3</div>
            <div class="col-sm-3">.col-sm-3</div>
        </div>
    </div>
    <p>В следующем примере показано, как создать четыре столбца одинаковой ширины, начиная с планшетов и масштабируя их до экстра больших (extra large) десктопов. <strong>На мобильных телефонах или экранах шириной менее 576 пикселей столбцы автоматически накладываются друг на друга</strong>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;row&quot;&gt;<br>&nbsp; &lt;div class=&quot;col-sm-3&quot;&gt;.col-sm-3&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col-sm-3&quot;&gt;.col-sm-3&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col-sm-3&quot;&gt;.col-sm-3&lt;/div&gt;<br>&nbsp;
            &lt;div class=&quot;col-sm-3&quot;&gt;.col-sm-3&lt;/div&gt;<br>&lt;/div&gt;</div>
        <a target="_blank" href="../bootstrap4tryit/trybs_grid_ex1.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Два неравных адаптивных столбца</h2>
    <div class="container-fluid" style="margin:8px 0 15px 0;">
        <div class="row test">
            <div class="col-sm-4">.col-sm-4</div>
            <div class="col-sm-8">.col-sm-8</div>
        </div>
    </div>
    <p>В следующем примере показано, как получить два столбца различной ширины, начиная с планшетов и масштабируя их до экстра больших (extra large) десктопов:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;row&quot;&gt;<br>&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;.col-sm-4&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col-sm-8&quot;&gt;.col-sm-8&lt;/div&gt;<br>&lt;/div&gt;</div>
        <a target="_blank" href="../bootstrap4tryit/trybs_grid_ex3.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p style="margin-bottom:8px"><strong>Примечание:</strong> Вы узнаете больше о сетках Bootstrap 4 позже в этом учебнике на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="bootstrap_containers.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="bootstrap_typography.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>