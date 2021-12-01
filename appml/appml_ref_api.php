<?php include '../include/head.php'; ?>

  <title>AppML Справочник - API. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Справочник - API. Методы. Свойства. Методы формы. Свойства фильтра. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_ref_api.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1>App<span class='color_h1'>ML</span> Справочник - API</h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_ref_databases.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_architecture.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>AppML Методы</h2>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style="width:30%">Метод</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>new AppML()</td>
        <td>Создает новый объект AppML</td>
      </tr>
      <tr>
        <td>appml("name")</td>
        <td>Возвращает объект appml с указанным именем</td>
      </tr>
      <tr>
        <td>displayMessage(text)</td>
        <td>Отображает указанное сообщение</td>
      </tr>
      <tr>
        <td>getData()</td>
        <td>Получает данные приложения</td>
      </tr>
      <tr>
        <td>run()</td>
        <td>Запускает объект приложения</td>
      </tr>
      <tr>
        <td>setError(no, description)</td>
        <td>Устанавливает указанную ошибку и описание ошибки</td>
      </tr>
    </table>
    <hr>

    <h2>AppML Свойства</h2>

    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:30%">Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>appName</td>
        <td>Название приложения (id контейнера)</td>
      </tr>
      <tr>
        <td>container</td>
        <td>Элемент контейнера приложения</td>
      </tr>
      <tr>
        <td>controller</td>
        <td>Контроллер приложения</td>
      </tr>
      <tr>
        <td>data</td>
        <td>Объект данных приложения</td>
      </tr>
      <tr>
        <td>dataSource</td>
        <td>Источник данных приложения</td>
      </tr>
      <tr>
        <td>displayType</td>
        <td>Тип приложения ("form" или "list")</td>
      </tr>
      <tr>
        <td>message</td>
        <td>Объект сообщения приложения</td>
      </tr>
      <tr>
        <td>error</td>
        <td>Объект ошибка приложения</td>
      </tr>
    </table>
    <hr>

    <h2>Свойства объекта данных</h2>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:30%">Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>data.model</td>
        <td>Модель данных приложения</td>
      </tr>
      <tr>
        <td>data.records</td>
        <td>Записи приложения (данные)</td>
      </tr>
    </table>
    <hr>

    <h2>AppML Методы формы</h2>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:30%">Метод</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>newRecord()</td>
        <td>Сбросить текущую форму</td>
      </tr>
      <tr>
        <td>saveRecord()</td>
        <td>Сохранить текущую запись</td>
      </tr>
      <tr>
        <td>deleteRecord()</td>
        <td>Удалить текущую запись</td>
      </tr>
      <tr>
        <td>closeForm()</td>
        <td>Закрыть текущую форму</td>
      </tr>
    </table>
    <hr>

    <h2>AppML Свойства фильтра</h2>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:30%">Метод</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>orderBys</td>
        <td>Массив заказа по именам полей</td>
      </tr>
      <tr>
        <td>orderByDirections</td>
        <td>Массив заказа по направлениям</td>
      </tr>
      <tr>
        <td>queryFields</td>
        <td>Массив имен полей запроса</td>
      </tr>
      <tr>
        <td>queryValues</td>
        <td>Массив значений запроса</td>
      </tr>
      <tr>
        <td>queryTypes</td>
        <td>Массив типов запросов</td>
      </tr>
    </table>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_ref_api.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_architecture.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>