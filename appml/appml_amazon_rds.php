<?php include '../include/head.php'; ?>

  <title>AppML База данных Amazon. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML с использованием базы данных Amazon. Облачная служба баз данных. Зачем использовать Amazon RDS? Как зарегистрироваться в Amazon Web Services. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_amazon_rds.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML с использованием базы данных Amazon</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_google_cloud_sql.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_reference.php'>Next &#10095;</a>
    </div>
    <hr>

    <div class='jumbotron'>
      <img src='../images/img_aws_logo.png' alt='Amazon Web Services Logo' style="float:left;margin-right:5%"><br>
      <p><strong>Amazon RDS</strong> - облачный сервис баз данных.</p>
      <p>Легко настроить и управлять.</p>
      <p>Это можно попробовать БЕСПЛАТНО!</p>
    </div>
    <div class="w3-clear"></div>
    <hr>
    <h2>Что такое Amazon Relational Database Service (RDS)</h2>
    <p><strong>Amazon Relational Database Service (RDS)</strong> - это облачная служба баз данных.</p>
    <hr>

    <h2>Зачем использовать Amazon RDS?</h2>
    <p>Amazon RDS решает многие проблемы, связанные с запуском базы данных.</p>
    <p>Amazon RDS позволяет масштабировать производительность и объем хранилища по мере необходимости.</p>
    <p>Amazon RDS управляет автоматическим резервным копированием, установкой исправлений и восстановлением.</p>
    <p>Он поддерживает популярные продукты баз данных, такие как:</p>
    <ul>
      <li>MySQL</li>
      <li>PostgreSQL</li>
      <li>Oracle</li>
      <li>Microsoft SQL Server</li>
      <li>и новый MySQL-совместимый движок Amazon Aurora DB</li>
    </ul>
    <hr>

    <h2>Начиная использовать...</h2>
    <p>Прежде чем вы сможете начать использовать RDS, вам необходимо зарегистрироваться в Amazon Web Services и настроить пользователя базы данных и группу безопасности.</p>
    <hr>

    <h2>Зарегистрируйтесь в Amazon Web Services</h2>
    <p>Когда вы регистрируетесь в Amazon Web Services (AWS), ваша учетная запись AWS автоматически регистрируется для всех сервисов в AWS, включая Amazon RDS.</p>
    <p>Если вы новый клиент AWS, вы можете начать работу с Amazon RDS бесплатно.</p>
    <p>Уровень бесплатного пользования AWS позволяет вам пробовать AWS бесплатно в течение 12 месяцев после регистрации. Для получения дополнительной информации смотрите <a href="https://aws.amazon.com/free/" target="_blank" rel="nofollow">Уровень бесплатного использования AWS</a>.</p>
    <p>Если вы решите продолжить использование AWS по истечении бесплатного периода (или если вам нужно больше места для хранения или производительности, чем предлагает уровень бесплатного использования), вы платите только за те ресурсы, которые используете.</p>
    <p>Чтобы создать учетную запись AWS, перейдите на: <a href="https://aws.amazon.com/" target="_blank" rel="nofollow">https://aws.amazon.com/</a>, а затем нажмите Зарегистрироваться.</p>
    <p>Следуйте инструкциям на экране. Запишите номер своей учетной записи AWS, потому что он понадобится вам позже.</p>
    <hr>

    <h2>Создать экземпляр базы данных MySQL</h2>
    <p>В этом примере мы настроим бесплатный экземпляр базы данных с MySQL. (Это бесплатно, потому что предназначено для тестирования).</p>
    <p>Создать экземпляр БД MySQL:</p>
    <ol>
      <li>Перейти в консоль Amazon RDS: <a href="https://console.aws.amazon.com/rds/" target="_blank" rel="nofollow">https://console.aws.amazon.com/rds/</a></li>
      <li>На панели навигации кликните Instances (Экземпляры).</li>
      <li>Кликните Launch DB Instance (Запустить DB экземпляр)</li>
      <li>На странице Select Engine щелкните значок MySQL, а затем нажмите Select для механизма MySQL DB.</li>
      <li>На Production? странице, установите флажок рядом с "Нет, этот экземпляр предназначен для использования вне производственной среды.......", а затем кликните Next Step (следующий шаг)</li>
      <li>На странице Specify DB Details следуйте инструкциям (следуйте <a id="dbDetailsLink" href="javascript:void(0)">этим инструкциям</a> для создания бесплатной тестовой базы данных)<div id="dbDetailsTable">
          <table class="w3-table-all notranslate">
            <tr><th style="width:25%">Для этого варианта:</th><th>Типичный Input</th></tr>
            <tr><td>Лицензия модели</td><td>general-public-license</td></tr>
            <tr><td>DB Engine Version</td><td>Выберите версию MySQL по умолчанию</td></tr>
            <tr><td>DB Instance Class</td><td>Выберите db.t2.micro, чтобы выбрать конфигурацию, подходящую для бесплатного тестового использования</td></tr>
            <tr><td>Multi-AZ Deployment</td><td>Выберите No</td></tr>
            <tr><td>Storage Type</td><td>Magnetic (Стандарт)</td></tr>
            <tr><td>Allocated Storage</td><td>5</td></tr>
            <tr><td>DB Instance Identifier</td><td>Введите имя экземпляра вашей базы данных (это не имя вашей базы данных)</td></tr>
            <tr><td>Master Username</td><td>Введите главное имя пользователя для своей базы данных</td></tr>
            <tr><td>Master Password</td><td>Введите пароль для своего главного пользователя</td></tr>
            <tr><td>Confirm Password</td><td>Подтвердите пароль</td></tr>
          </table>
        </div>
      </li>
      <li>На странице "Настройка дополнительных параметров" следуйте инструкциям (следуйте <a id="dbAdvSettLink" href="javascript:void(0)">эти инструкции</a> для создания бесплатной тестовой базы данных)
        <div id="dbAdvSettTable">
          <table class="w3-table-all notranslate">
            <tr><th style="width:25%">Для этого варианта:</th><th>Typical Input</th></tr>
            <tr><td>VPC</td><td>Default VPC</td></tr>
            <tr><td>Subnet Group</td><td>default</td></tr>
            <tr><td>Publicly Accessible</td><td>Yes</td></tr>
            <tr><td>Availability Zone</td><td>No Preference</td></tr>
            <tr><td>VPC Security Group(s)</td><td>default</td></tr>
            <tr><td>Database Name</td><td>Введите имя своей базы данных (в этом примере мы покажем вам, как создать базу данных Northwind, которую мы используем для примеров в руководстве по AppML)</td></tr>
            <tr><td>Database Port</td><td>3306 (если вам не нужно, чтобы он работал на определенном порту)</td></tr>
            <tr><td>DB Parameter Group</td><td>Оставить значение по умолчанию</td></tr>
            <tr><td>Option Group</td><td>Оставить значение по умолчанию</td></tr>
            <tr><td>Enable Encryption</td><td>No</td></tr>
            <tr><td>Backup Retention Period</td><td>7</td></tr>
            <tr><td>Backup Window</td><td>Нет предпочтений</td></tr>
            <tr><td>Auto Minor Version Upgrade</td><td>Yes</td></tr>
            <tr><td>Maintenance Window</td><td>Нет предпочтений</td></tr>
          </table>
        </div>
      </li>
      <li>Кликните Запустить DB экземпляр</li>
      <li>Кликните Просмотр ваших DB экземпляров</li>
      <li>Новый экземпляр БД появится в списке экземпляров БД (он будет иметь статус "создается", пока не будет готов к использованию)</li>
      <li>Когда статус изменится на "доступен", вы можете подключиться к базе данных</li>
      <li>Кликните значок сведений, чтобы просмотреть сведения и скопировать URL-адрес из "Конечной точки", включая порт.</li>
    </ol>

    <div class="w3-example">
      <h3>URL-адрес конечной точки должен выглядеть примерно так:</h3>
      <div class="w3-code notranslate">
        <em>databasename</em>.<em>aaabbbcccddd</em>.<em>region</em>.rds.amazonaws.com:3306</div>
    </div>
    <hr>

    <h2>Настройка подключения к базе данных в AppML</h2>
    <p>Чтобы настроить подключение к базе данных, отредактируйте файл appml_config:</p>
    <div class="w3-example">
      <h3>PHP пример: appml_config.php</h3>
      <div class="w3-code notranslate">
        &lt;?php echo("Access Forbidden");exit();?&gt;<br>{<br>"dateformat" :
        "yyyy-mm-dd",<br>"databases" : [{<br>"connection" : "<em>mydatabase</em>",<br>
        "host" : "<em>yourDatabaseURL</em>",<br>"dbname" : "<em>yourDatabaseName</em>",<br>
        "username" : "<em>yourUserName</em>",<br>"password" : "<em>yourPassword</em>"
        <br>}]<br>}</div>
    </div>

    <p>Отредактируйте следующее:</p>
    <ol>
      <li><em>mydatabase</em> - изменить на то, что вы хотите, чтобы соединение с базой данных вызывалось в вашем приложении</li>
      <li><em>yourDatabaseURL</em> - изменить URL-адрес конечной точки с предыдущего шага</li>
      <li><em>yourDatabaseName</em> - изменить имя, указанное вами для своей базы данных в Amazon RDS</li>
      <li><em>yourUserName</em> - изменить имя пользователя, указанное вами для своей базы данных в Amazon RDS</li>
      <li><em>yourPassword</em> - изменить пароль, который вы указали для своей базы данных в Amazon RDS</li>
    </ol>
    <p>AppML теперь должен быть настроен для подключения к вашей базе данных Amazon RDS.</p>
    <p>Теперь вы можете заполнить свою базу данных данными:</p>
    <ul>
      <li>Если у вас есть доступ к серверу PHP, это описано в разделе <a href="appml_php.php">AppML PHP</a></li>
      <li>Если у вас есть доступ к серверу ASP.NET, это описано в разделе <a href="appml_dotnet.php">AppML .NET</a></li>
    </ul>
    <a href="javascript:void(0)"><p id="iamuser">Необязательно: создайте пользователя IAM для повышения безопасности</p></a>
    <div id="iamuser_div">
      <p>Amazon RDS, требует, чтобы вы указали имя пользователя и пароль при доступе к нему.</p>
      <p>Вы можете получить доступ к учетной записи со своим именем пользователя Amazon, но в целях безопасности мы рекомендуем вам создать пользователя Identity and Access Management (IAM) для своей базы данных.</p>
      <p>Сначала создайте группу администраторов:</p>
      <ol>
        <li>Войдите в Консоль управления AWS и откройте консоль IAM по адресу
          <a href="https://console.aws.amazon.com/iam/" target="_blank">https://console.aws.amazon.com/iam/</a></li>
        <li>В меню кликните Группы, затем кликните Создать новую группу</li>
        <li>В поле "Имя группы" введите "Администраторы" и нажмите "Далее"</li>
        <li>В списке политик установите флажок рядом с политикой AdministratorAccess.</li>
        <li>Кликните Следующий шаг, затем кликните Создать групу</li>
      </ol>
      <p>Затем создайте пользователя IAM и добавьте его в группу администраторов:</p>
      <ol>
        <li>В меню кликните "Пользователи", затем кликните "Создать нового пользователя"</li>
        <li>В поле 1 введите имя пользователя</li>
        <li>Снимите флажок "Создать ключ доступа для каждого пользователя" и нажмите "Создать"</li>
        <li>В списке пользователей кликните имя (а не флажок) только что созданного пользователя</li>
        <li>В разделе "Группы" нажмите "Добавить пользователя в группы"</li>
        <li>Установите флажок рядом с группой "Администраторы", затем нажмите "Добавить в группы"</li>
        <li>Прокрутите вниз до раздела "Учетные данные безопасности" и нажмите "Управление паролем"</li>
        <li>Выберите "Назначить собственный пароль", затем введите пароль в поля "Пароль" и "Подтверждение пароля", нажмите "Применить"</li>
      </ol>
      <p>Чтобы войти в систему как новый пользователь IAM, выйдите из консоли AWS и используйте следующий URL-адрес:</p>
      <div class='w3-example'>
        <h3>Залогиниться с IAM</h3>
        <div class='w3-code notranslate'>
          https://<em>your_aws_account_id</em>.signin.aws.amazon.com/console/
        </div>
      </div>
      <p>Замените <em>your_aws_account_id</em> номером своей учетной записи AWS без дефисов (если номер вашей учетной записи 1234-5678-9012, идентификатор вашей учетной записи AWS - 123456789012)</p>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_google_cloud_sql.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_reference.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>