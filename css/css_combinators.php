<?php include '../include/head.php'; ?>

  <title>CSS Комбинаторы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Комбинаторы. Отношения между селекторами. Что такое комбинаторы и зачем они нужны? Элементы-комбинаторы в таблице стилей. Селектор потомков, дочерний, соседний и общий родственный. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<style>
        .siblings * {
            display: block;
            border: 2px solid lightgrey;
            transition: all .7s;
            color: lightgrey;
            padding: 8px 22px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Комбинаторы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_align.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_pseudo_classes.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Комбинаторы</h2>

    <div class="w3-panel w3-note">
        <p><strong>Комбинатор</strong> - это то, что объясняет взаимосвязь между селекторами.</p>
    </div>
    <p>CSS селектор может содержать более одного простого селектора. Между простыми селекторами можно включить комбинатор.</p>

    <p>В CSS есть четыре разных комбинатора:</p>
    <ul>
        <li>селектор потомков (пробел)</li>
        <li>селектор дочерний (&gt;)</li>
        <li>селектор соседний родственный (+)</li>
        <li>селектор общий родственный (~)</li>
    </ul>
    <hr>

    <h2>Селектор потомков</h2>
    <p>Селектор потомков соответствует всем элементам, которые являются потомками указанного элемента.</p>
    <p>В следующем примере выбираются все элементы <code class="w3-codespan">&lt;p&gt;</code> внутри <code class="w3-codespan">&lt;div&gt;</code> элементов:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div p {<br>&nbsp;&nbsp;background-color: yellow;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_sel_element_element.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Селектор дочерний (&gt;)</h2>
    <p>Дочерний селектор выбирает все элементы, которые являются потомками указанного элемента.</p>
    <p>В следующем примере выбираются все элементы <code class="w3-codespan">&lt;p&gt;</code>, которые являются дочерними для элемента <code class="w3-codespan">&lt;div&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div &gt; p {<br>&nbsp;&nbsp;background-color: yellow;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_sel_element_gt.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Соседний родственный селектор (+)</h2>
    <p>Соседний родственный селектор используется для выбора элемента, который находится непосредственно после другого конкретного элемента.</p>
    <p>Родственные элементы должны иметь один и тот же родительский элемент, а &quot;смежные&quot; элементы должны &quot;следовать после&quot;.</p>
    <p>В следующем примере выбирается первый элемент <code class="w3-codespan">&lt;p&gt;</code>, который размещается сразу после элемента <code class="w3-codespan">&lt;div&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div + p {<br>&nbsp; background-color: yellow;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_sel_element_pluss.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Общий родственный селектор (~)</h2>
    <p>Общий (родственный) одноуровневый селектор выбирает все элементы, которые являются братьями и сестрами указанного элемента.</p>
    <p>В следующем примере выбираются все элементы <code class="w3-codespan">&lt;p&gt;</code>, которые являются родственниками элемента <code class="w3-codespan">&lt;div&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div ~ p {<br>&nbsp; background-color: yellow;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_sel_element_tilde.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_combinators1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_combinators2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_combinators3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_combinators4" target="_blank" rel="nofollow">Упражнение 4 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>Все CSS селекторы комбинатора</h2>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th style="width:20%">Селектор</th>
                <th style="width:20%">Пример</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td><a href="../cssref/sel_element_element.php"><i>элемент</i> <i>элемент</i></a></td>
                <td class="notranslate">div p</td>
                <td>Выбирает все элементы <code class="w3-codespan">&lt;p&gt;</code> внутри элемента <code class="w3-codespan">&lt;div&gt;</code></td>
            </tr>
            <tr>
                <td><a href="../cssref/sel_element_gt.php"><i>элемент</i>&gt;<i>элемент</i></a></td>
                <td class="notranslate">div &gt; p</td>
                <td>Выбирает все элементы <code class="w3-codespan">&lt;p&gt;</code> у которых родительский элемент <code class="w3-codespan">&lt;div&gt;</code></td>
            </tr>
            <tr>
                <td><a href="../cssref/sel_element_pluss.php"><i>элемент</i>+<i>элемент</i></a></td>
                <td class="notranslate">div + p</td>
                <td>Выбирает первый элемент <code class="w3-codespan">&lt;p&gt;</code>, который размещается сразу после элемента <code class="w3-codespan">&lt;div&gt;</code></td>
            </tr>
            <tr>
                <td><a href="../cssref/sel_gen_sibling.php"><i>элемент1</i>~<i>элемент2</i></a></td>
                <td>p ~ ul</td>
                <td>Выбирает каждый элемент <code class="w3-codespan">&lt;ul&gt;</code>, которому предшествует элемент <code class="w3-codespan">&lt;p&gt;</code></td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_align.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_pseudo_classes.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>