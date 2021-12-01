<?php include '../include/head.php'; ?>

  <title>CSS Адаптивность таблицы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Адаптивность таблицы. Стилизация таблиц. Как сделать таблицу адаптивной (отзывчивой)? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        table {
            font-size:16px;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
        }
        #customers td, #customers th {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }
        #customers tr:nth-child(even){background-color: #f2f2f2}
        #customers th {
            padding-top: 11px;
            padding-bottom: 11px;
            background-color: #4CAF50;
            color: white;
        }
        .tabletest th,
        .tabletest td {
            padding: 8px;
            text-align: left;
        }
        .tabletest2 th,
        .tabletest2 td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .tabletest3 th,
        .tabletest3 td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .tabletest4 th,
        .tabletest4 td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .tabletest4 tr:hover {
            background-color: #f5f5f5
        }
        .tabler2 th,
        .tabler2 td {
            border: none;
            text-align: left;
            padding: 8px;
        }
        .tabler2 tbody tr:nth-child(even) {
            background-color: #f2f2f2
        }
        .tabler th,
        .tabler td {
            border: none;
            text-align: left;
            padding: 8px;
        }
        .tabler tbody tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Адаптивная (отзывчивая) таблица</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_table_style.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_display_visibility.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Адаптивная таблица</h2>
    <p>В адаптивной таблице будет отображаться горизонтальная полоса прокрутки, если экран слишком мал для отображения всего содержимого:</p>

    <div class="w3-responsive">
        <table class="w3-table w3-striped w3-bordered"><tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
            </tr>

            <tr>
                <td>Jill</td>
                <td>Smith</td>
                <td>50</td>
                <td>50</td>
                <td>50</td>
                <td>50</td>
                <td>50</td>
                <td>50</td>
                <td>50</td>
                <td>50</td>
                <td>50</td>
                <td>50</td>
                <td>50</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Eve</td>
                <td>Jackson</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
                <td>94</td>
            </tr>
            <tr>
                <td>Adam</td>
                <td>Johnson</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
                <td>67</td>
            </tr></table>
    </div>

    <p>Добавьте элемент контейнера (например, <code class="w3-codespan">&lt;div&gt;</code>) с помощью <code class="w3-codespan">overflow-x:auto</code> вокруг элемента <code class="w3-codespan">&lt;table&gt;</code>, чтобы сделать его адаптивным:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div style="overflow-x:auto;"&gt;<br><br>&lt;table&gt;<br>
            ... содержимое таблицы ...<br>&lt;/table&gt;<br>
            <br>&lt;/div&gt;
        </div>
        <a target="_blank" href="../csstryit/trycss_table_responsive.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note w3-panel">
        <p><strong>Примечание:</strong> В OS X Lion (на Mac) полосы прокрутки по умолчанию скрыты и отображаются только при использовании (даже если установлено <code class="w3-codespan">"overflow:scroll"</code>).</p>
    </div>
    <hr>

    <h2>Больше примеров</h2>
    <p><a target="_blank" href="../csstryit/trycss_table_fancy.html">Сделать красивую таблицу</a><br>
        Этот пример демонстрирует, как создать красивую таблицу.</p>
    <p><a target="_blank" href="../csstryit/trycss_table_caption-side.html">Установить положение заголовка таблицы</a><br>
        Этот пример демонстрирует, как разместить заголовок таблицы.</p>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_table1" target="_blank">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_table2" target="_blank">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_table3" target="_blank">Упражнение 3 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_table4" target="_blank">Упражнение 4 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_table5" target="_blank">Упражнение 5 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_table6" target="_blank">Упражнение 6 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>CSS Свойства таблицы</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/pr_border.php">border</a></td>
            <td>Устанавливает все свойства границы в одном объявлении</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_border-collapse.php">border-collapse</a></td>
            <td>Указывает, должны ли быть свернуты границы таблицы</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_border-spacing.php">border-spacing</a></td>
            <td>Задаёт расстояние между границами соседних ячеек</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_tab_caption-side.php">caption-side</a></td>
            <td>Задаёт размещение заголовка таблицы</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_tab_empty-cells.php">empty-cells</a></td>
            <td>Указывает, следует ли отображать границы и фон в пустых ячейках таблицы</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_tab_table-layout.php">table-layout</a></td>
            <td>Устанавливает алгоритм компоновки (макет), который будет использоваться для таблицы</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_table_style.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_display_visibility.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>