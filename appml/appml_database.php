<?php include '../include/head.php'; ?>

  <title>AppML База данных. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML База данных. Использование AppML для создания собственной базы данных Web SQL. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_database.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML</span> База данных</h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_forms.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_php.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Создайте свою собственную базу данных SQL в Интернете</h2>
    <p>С помощью небольшой утилиты, приведенной ниже, вы можете использовать AppML для создания собственной базы данных Web SQL.</p>
    <p>Напишите свой собственный SQL или используйте кнопки для импорта существующего SQL.</p>
    <div class='w3-panel w3-note'><b>Примечание</b>. WebSQL работает только в Chrome и Safari.</div>
    <p>
      <button type='button' onclick="importSQL('local_customers')" class='w3-btn w3-dark-grey'>Клиенты</button>
      <button type='button' onclick="importSQL('local_products')" class='w3-btn w3-dark-grey'>Продукты</button>
      <button type='button' onclick="importSQL('local_suppliers')" class='w3-btn w3-dark-grey'>Поставщики</button>
      <button type='button' onclick="importSQL('local_shippers')" class='w3-btn w3-dark-grey'>Отправители</button>
      <button type='button' onclick="importSQL('local_categories')" class='w3-btn w3-dark-grey'>Категории</button>
      <button type='button' onclick="importSQL('local_employees')" class='w3-btn w3-dark-grey'>Сотрудники</button>
      <button type='button' onclick="importSQL('local_orders')" class='w3-btn w3-dark-grey'>Заказы</button>
    </p>
    <textarea id='sql' style="width:99%;height:500px;font-family:consolas,'courier new',monospace;"></textarea>
    <p>
    <button type='button' onclick='runSQL()' class='w3-btn'> Запустить SQL </button></p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_forms.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_php.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>