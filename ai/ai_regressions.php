<?php include '../include/head_ai.php'; ?>

  <title>Регрессии - Искусственный интеллект. W3Schools на русском</title>
  <meta name='description' content='Искусственный интеллект (ИИ). Регрессии. Где и как применяется искусственный интеллект? Уроки для начинающих. Полный курс. Языки программирования. W3Schools на русском'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_ai.php'; ?>
<?php include '../include/before_content_ai.php'; ?>

  <article>
    <h1>Искусственный интеллект. Регрессии</h1>
    <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="ai_graphs.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="index.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info">
      <h2>Машинное обучение (ML)</h2>
      <ul>
        <li>Метки</li>
        <li>Характеристики</li>
        <li>Наклон</li>
        <li>Перехват</li>
        <li>Модели</li>
        <li>Линейные регрессии</li>
      </ul>
    </div>
    <hr>

    <h2>Метки</h2>
    <p>В машинном обучении <b>метка</b> - это то, что мы хотим предсказать.</p>
    <p>Метка - это <b>y</b> на линейном графике:</p>
    <p class="w3-xlarge"><b>y</b> = x</p>
    <hr>
    <h2>Характеристики</h2>
    <p><b>Характеристики</b> - это входные переменные.</p>
    <p>Характеристики - это значения <b>x</b> на линейном графике:</p>
    <p class="w3-xlarge">y = <b>x</b></p>

    <img alt="y = x" style="width:80%" src="../images/img_graph_x_y.png">
    <hr>

    <h2>Наклон</h2>
    <p><b>Наклон</b> - это угол графика.</p>
    <p>Наклон - это значение <b>a</b> на линейном графике:</p>
    <p class="w3-xlarge">y = <b>a</b>x</p>
    <img alt="y = x" style="width:80%" src="../images/img_graph_x_12.png">
    <hr>

    <h2>Перехват</h2>
    <p><b>Перехват</b> - это начальное значение графика.</p>
    <p>Перехват - это значение <b>b</b> на линейном графике:</p>
    <p class="w3-xlarge">y = ax + <b>b</b></p>
    <img alt="y = x" style="width:80%" src="../images/img_graph_x_12_2.png">
    <hr>

    <h2>Модели</h2>
    <p><b>Модель</b> определяет отношение между меткой (y) и функциями (x).
    <p>В жизни модели есть два этапа:</p>
    <ul>
      <li>Подготовка</li>
      <li>Вмешательство<li>
    </ul>
    <hr>

    <h2>Линейные регрессии</h2>
    <p><b>Регрессия</b> - это метод, используемый для определения взаимосвязи между одной переменной (обычно называемой Y) и другими переменными.</p>
    <p>В статистике <b>линейная регрессия</b> - это линейный подход к моделированию взаимосвязи между результатом (y) и другими переменными (x).</p>
    <p>Это <b>диаграмма рассеяния</b> (из предыдущей главы):</p>
    <img alt="Цены" style="width:80%" src="../images/img_plot_houseprices.png">
    <p>Это <b>линейный график</b>, соединяющий самую низкую и самую высокую цену:</p>
    <img alt="Цены" style="width:80%" src="../images/img_plot_houseprices2.png">

    <p>Это модель <b>линейной регрессии</b>, которая пытается предсказать будущие цены:</p>
    <img alt="Prices" style="width:80%" src="../images/img_plot_houseprices3.png">

    <hr>
    <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="ai_graphs.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="index.php">Next &#10095;</a>
    </div>
  </article>
  </div>
<?php include '../include/rightbar_ai.php'; ?>
<?php include '../include/footer.php'; ?>