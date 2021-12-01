<?php include '../include/head.php'; ?>

  <title>AppML Google Cloud SQL. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML с использованием Google Cloud SQL (Google Облако SQL). Google Cloud SQL - облачный сервис базы данных. Как использовать? Как создать экземпляр базы данных MySQL? Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_google_cloud_sql.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML с использованием Google Cloud SQL (Google Облако SQL)</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_dotnet.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_amazon_rds.php'>Next &#10095;</a>
    </div>
    <hr>
    <div class='jumbotron'>
      <img src='../images/img_gcs_logo.png' alt='Google Cloud Services' style='float:left;margin-right:5%;'><br>
      <p><strong>Google Cloud SQL</strong> - облачный сервис базы данных.</p>
      <p>Легко настроить и управлять.</p>
      <p>Это можно попробовать бесплатно!</p>
    </div>
    <div class='w3-clear'></div>
    <h2>Что такое Google Cloud SQL</h2>
    <p><strong>Google Cloud SQL</strong> - это облачная служба баз данных.</p>
    <hr>

    <h2>Зачем использовать Google Cloud SQL?</h2>
    <p>Google Cloud SQL предлагает базы данных MySQL, развернутые в облаке, без лишних хлопот.</p>
    <p>Google предлагает мощные базы данных, которые работают быстро, и гибкую тарификацию (оплата за использование).</p>
    <p>Google управляет автоматическим резервным копированием, установкой исправлений и восстановлением.</p>
    <hr>

    <h2>Начало использования Google Cloud SQL</h2>
    <p>Прежде чем вы сможете начать использовать Google Cloud SQL, вам потребуется учетная запись Google и регистрация в Google Developers Console.</p>
    <p>Если у вас нет учетной записи Google, вы можете зарегистрироваться здесь:
      <a href='https://accounts.google.com/SignUp' target="_blank" rel='nofollow'>Создайте свой аккаунт Google</a></p>
    <hr>

    <h2>Зарегистрируйтесь в Google Developers Console</h2>
    <p>Когда вы регистрируетесь в Google Developers Console, ваша учетная запись Google автоматически регистрируется для всех сервисов в Google Cloud, включая SQL.</p>
    <p>Если вы новый пользователь Cloud Platform, вы можете бесплатно воспользоваться пробным периодом.</p>
    <p>Бесплатная пробная версия Cloud Platform позволяет вам бесплатно опробовать Cloud SQL в течение 60 дней. Для получения дополнительной информации смотрите <a href="https://cloud.google.com/free-trial/" target="_blank" rel="nofollow">Бесплатная пробная версия Cloud Platform</a>.</p>
    <p>Если вы решите продолжить использование Cloud Platform после окончания бесплатного периода (или если вам нужно больше места для хранения или производительности, чем предлагает уровень бесплатного использования), вы платите только за те ресурсы, которые используете.</p>
    <p>Чтобы создать учетную запись Google Developers Console, перейдите по ссылке: <a href='https://console.developers.google.com/freetrial' target="_blank" rel="nofollow">https://console.developers.google.com/freetrial</a>, и следуйте инструкциям на экране.</p>
    <hr>

    <h2>Создать экземпляр базы данных MySQL</h2>
    <p>В этом примере мы создадим экземпляр базы данных с MySQL.</p>
    <p>Создать экземпляр MySQL DB:</p>
    <ul>
      <li>Как только вы создадите свою учетную запись, Google автоматически создаст для вас новый проект под названием "My First Project" ("Мой первый проект"). В этом примере мы просто будем использовать этот проект;</li>
      <li>В меню выберите "Storage" ("Хранилице"), а затем "Cloud SQL" ("Облако SQL");</li>
      <li>Кликните "Create an instance" ("Создать экземпляр");</li>
      <li>На странице "Create Cloud SQL instance" ("Создать экземпляр Cloud SQL") выберите имя, регион и уровень производительности для своего экземпляра DB. В этом примере мы пропустим дополнительные параметры;</li>
      <li>Кликните "Create" ("Создать");</li>
      <li>Новый DB экземляр появится в списке DB экземпляров (когда он имеет статус "Runnable" ("Выполняется"), он готов к использованию)</li>
      <li>Кликните имя экземпляра, и кликните "Access Control" ("Контроль доступа") на палели навигации;</li>
      <li>Кликните "IP address" ("IP-адрес") на суб-навигационной панели и кликните кнопку "Request IPv4 address" ("Запросить IPv4 адрес");</li>
      <li>Сохраните этот IP-адрес, так как это будет IP-адрес, который вы используете для подключения к вашей базе данных;</li>
      <li>Кликните "Users" ("Пользователи") на суб-навигационной панели и кликните кнопку "New user" ("Новый пользователь");</li>
      <li>Укажите имя пользователя и пароль для своей базы данных;</li>
      <li>Кликните "Authorization" ("Авторизация") на суб-навигационной панели и кликните кнопку "+ Add item" ("Добавить элемент") в разделе Allowed Networks (Разрешенные сети);</li>
      <li>Здесь вы можете указать, кто имеет доступ к вашей базе данных. Это может быть:
        <ul>
          <li>Ваш собственный IP или IP вашего сервера. Таким образом, только у вас есть доступ к вашей базе данных;</li>
          <li>или 0.0.0.0/0, что позволяет подключать все внешние IP-адреса (это может представлять угрозу безопасности и вызывать дополнительные расходы).</li>
        </ul>
      </li>
      <li>Кликните "Save" ("Сохранить")</li>
      <li>Кликните "Databases" ("Базы данных") на панели навигации и кликните кнопку "New database" ("Новая база данных");</li>
      <li>Укажите имя для своей базы данных (вы можете оставить другие параметры как есть, если у вас нет особых требований).</li>
    </ul>

    <p>Теперь у вас есть база данных Google Cloud SQL с IP-адресом, к которому вы можете подключиться.</p>
    <hr>

    <h2>Настроить подключение к базе данных в AppML</h2>
    <p>Чтобы настроить подключение к базе данных, отредактируйте файл appml_config:</p>
    <div class='w3-example'>
      <h3>PHP пример: appml_config.php</h3>
      <div class='w3-code notranslate'>
        &lt;?php echo("Access Forbidden");exit();?&gt;<br>{<br>"dateformat" :
        "yyyy-mm-dd",<br>"databases" : [{<br>"connection" : "<em>mydatabase</em>",<br>
        "host" : "<em>yourDatabaseURL</em>",<br>"dbname" : "<em>yourDatabaseName</em>",<br>
        "username" : "<em>yourUserName</em>",<br>"password" : "<em>yourPassword</em>"
        <br>}]<br>}</div>
    </div>

    <p>Отредактируйте следующие:</p>
    <ol>
      <li><em>mydatabase</em> - измените на то, что вы хотите, чтобы соединение с базой данных вызывалось в вашем приложении</li>
      <li><em>yourDatabaseURL</em> - измените IP-адрес с предыдущего шага и добавьте порт 3306 (например, <em>192.168.1.1</em>:3306)</li>
      <li><em>yourDatabaseName</em> - измените имя вашего экземпляра базы данных в Google Cloud SQL</li>
      <li><em>yourUserName</em> - измените имя пользователя, которое вы указали для своей базы данных в Google Cloud SQL</li>
      <li><em>yourPassword</em> - измените пароль, который вы указали для своей базы данных в Google Cloud SQL</li>
    </ol>
    <p>AppML теперь должен быть настроен для подключения к вашей базе данных Google Cloud SQL.</p>
    <p>Теперь вы можете заполнить свою базу данных данными:</p>
    <ul>
      <li>Если у вас есть доступ к PHP-серверу, это описано в разделе <a href='appml_php.php'>AppML PHP</a></li>
      <li>Если у вас есть доступ к серверу ASP.NET, это описано в разделе <a href='appml_dotnet.php'>AppML .NET</a></li>
    </ul>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_dotnet.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_amazon_rds.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>