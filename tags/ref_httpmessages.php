<?php include '../include/head.php'; ?>
<title>HTTP Сообщения. Справочник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Http сообщения на веб-странице. Справочник. Как кодируются http-сообщения веб-документов. Курс по основам HTML5. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
  <h1>HTTP <span class='color_h1'>Статус сообщений</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_country_codes.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_httpmethods.php'>Next &#10095;</a>
  </div>
  <hr>
  <p class='intro'>Когда браузер запрашивает услугу с веб-сервера, может произойти ошибка.</p>
  <p class='intro'>Это список сообщений о состоянии HTTP, которые могут быть возвращены:</p>
  <hr>

  <h2>1xx: Информация</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:40%'>Сообщение:</th>
      <th style='width:60%'>Описание:</th>
    </tr>
    <tr>
      <td>100 Продолжить</td>
      <td>Сервер получил заголовки запроса, и клиент должен приступить к отправке тела запроса</td>
    </tr>
    <tr>
      <td>101 Протоколы переключения</td>
      <td>Заказчик попросил сервер переключить протоколы</td>
    </tr>
    <tr>
      <td>103 Контрольная точка</td>
      <td>Используется в предложении о возобновляемых запросах для возобновления прерванных запросов PUT или POST</td>
    </tr>
  </table>

  <h2>2xx: Успешный</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:40%'>Сообщение:</th>
      <th>Описание:</th>
    </tr>
    <tr>
      <td>200 OK</td>
      <td>Запрос в порядке (это стандартный ответ для успешных запросов HTTP)</td>
    </tr>
    <tr>
      <td>201 Создан</td>
      <td>Запрос был выполнен, и создан новый ресурс</td>
    </tr>
    <tr>
      <td>202 Принято</td>
      <td>Запрос принят к обработке, но обработка не завершена</td>
    </tr>
    <tr>
      <td>203 Неавторизованная информация</td>
      <td>Запрос был успешно обработан, но возвращает информацию, которая может быть из другого источника</td>
    </tr>
    <tr>
      <td>204 Без содержания</td>
      <td>Запрос был успешно обработан, но не возвращает никакого содержания</td>
    </tr>
    <tr>
      <td>205 Сбросить содержимое</td>
      <td>Запрос был успешно обработан, но не возвращает никакого содержимого и требует, чтобы запрашивающая сторона сбросила представление документа</td>
    </tr>
    <tr>
      <td>206 Частичное содержание</td>
      <td>Сервер доставляет только часть ресурса из-за заголовка диапазона, отправленного клиентом</td>
    </tr>
  </table>

  <h2>3xx: Перенаправление</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:40%'>Сообщение:</th>
      <th>Описание:</th>
    </tr>
    <tr>
      <td>300 Множественный выбор</td>
      <td>Список ссылок. Пользователь может выбрать ссылку и перейти в это место. Максимум пять адресов</td>
    </tr>
    <tr>
      <td>301 Перемещено постоянно</td>
      <td>Запрашиваемая страница перемещена на новый URL</td>
    </tr>
    <tr>
      <td>302 Найдено</td>
      <td>Запрашиваемая страница временно перемещена на новый URL</td>
    </tr>
    <tr>
      <td>303 Смотрите Другое</td>
      <td>Запрошенную страницу можно найти по другому URL</td>
    </tr>
    <tr>
      <td>304 Не модифицировано</td>
      <td>Указывает, что запрошенная страница не была изменена с момента последнего запроса</td>
    </tr>
    <tr>
      <td>306 Переключить прокси</td>
      <td><i>Больше не используется</i></td>
    </tr>
    <tr>
      <td>307 Временный редирект</td>
      <td>Запрашиваемая страница временно перемещена на новый URL</td>
    </tr>
    <tr>
      <td>308 Резюме неполное</td>
      <td>Используется в предложении о возобновляемых запросах для возобновления прерванных запросов PUT или POST</td>
    </tr>
  </table>
  <hr>
  <h2>4xx: Ошибка клиента</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:40%'>Сообщение:</th>
      <th>Описание:</th>
    </tr>
    <tr>
      <td>400&nbsp;Неверный запрос</td>
      <td>Запрос не может быть выполнен из-за неправильного синтаксиса</td>
    </tr>
    <tr>
      <td>401 Неразрешенный</td>
      <td>Запрос был законным, но сервер отказывается отвечать на него. Используется, когда аутентификация возможна, но не прошла или ещё не была предоставлена</td>
    </tr>
    <tr>
      <td>402 Требуется оплата</td>
      <td><i>Зарезервировано для будущего использования</i>
      </td>
    </tr>
    <tr>
      <td>403 Запрещено</td>
      <td>Запрос был законным, но сервер отказывается отвечать на него.</td>
    </tr>
    <tr>
      <td>404 Не обнаружено</td>
      <td>Запрашиваемая страница не может быть найдена, но может быть снова доступна в будущем</td>
    </tr>
    <tr>
      <td>405 Метод не разрешен</td>
      <td>Был сделан запрос на странице с использованием метода запроса, не поддерживаемого этой страницей</td>
    </tr>
    <tr>
      <td>406 Неприемлимо</td>
      <td>Сервер может генерировать только тот ответ, который не принят клиентом</td>
    </tr>
    <tr>
      <td>407 Требуется проверка подлинности прокси</td>
      <td>Клиент должен сначала аутентифицировать себя с прокси</td>
    </tr>
    <tr>
      <td>408 Тайм-аут запроса</td>
      <td>Тайм-аут сервера в ожидании запроса</td>
    </tr>
    <tr>
      <td>409 Конфликт</td>
      <td>Запрос не может быть выполнен из-за конфликта в запросе</td>
    </tr>
    <tr>
      <td>410 Потеряно</td>
      <td>Запрашиваемая страница больше не доступна</td>
    </tr>
    <tr>
      <td>411 Требуемая длина</td>
      <td>«Длина содержимого» не определена. Сервер не примет запрос без него</td>
    </tr>
    <tr>
      <td>412 Предварительное условие не выполнено</td>
      <td>Предварительное условие, указанное в запросе, оценивается сервером как ложное</td>
    </tr>
    <tr>
      <td>413 Слишком большой объект запроса</td>
      <td>Сервер не примет запрос, так как объект запроса слишком большой</td>
    </tr>
    <tr>
      <td>414 Слишком длинный запрос URI</td>
      <td>Сервер не примет запрос, потому что URL слишком длинный. Происходит при преобразовании запроса POST в запрос GET с длинной информацией о запросе</td>
    </tr>
    <tr>
      <td>415 Неподдерживаемый тип носителя</td>
      <td>Сервер не примет запрос, потому что тип носителя не поддерживается</td>
    </tr>
    <tr>
      <td>416 Запрошенный диапазон не удовлетворяется</td>
      <td>Клиент запросил часть файла, но сервер не может предоставить эту часть</td>
    </tr>
    <tr>
      <td>417 Ожидание не удалось</td>
      <td>Сервер не может удовлетворить требования поля ожидать заголовок запроса</td>
    </tr>
  </table>

  <h2>5xx: Ошибка сервера</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:40%'>Сообщение:</th>
      <th>Описание:</th>
    </tr>
    <tr>
      <td>500 Внутренняя ошибка сервера</td>
      <td>Общее сообщение об ошибке, которое появляется, когда более подходящее сообщение не подходит</td>
    </tr>
    <tr>
      <td>501 Не реализовано</td>
      <td>Сервер либо не распознает метод запроса, либо ему не хватает возможности выполнить запрос</td>
    </tr>
    <tr>
      <td>502 Плохой шлюз</td>
      <td>Сервер действовал как шлюз или прокси и получил неверный ответ от вышестоящего сервера</td>
    </tr>
    <tr>
      <td>503 Сервис недоступен</td>
      <td>Сервер в данный момент недоступен (перегружен или выключен)</td>
    </tr>
    <tr>
      <td>504 Время ожидания шлюза</td>
      <td>Сервер действовал как шлюз или прокси и не получил своевременного ответа от вышестоящего сервера.</td>
    </tr>
    <tr>
      <td>505 Версия HTTP не поддерживается</td>
      <td>Сервер не поддерживает версию протокола HTTP, используемую в запросе</td>
    </tr>
    <tr>
      <td>511 Требуется сетевая аутентификация</td>
      <td>Клиент должен пройти аутентификацию, чтобы получить доступ к сети</td>
    </tr>
  </table>
  <hr>

  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_country_codes.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_httpmethods.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
