<?php include '../include/head.php'; ?>
    <title>Установка сервера MySQL на Windows. <?php include '../include/title.php'; ?></title>
    <meta name="description" content="Как установить базу данных MySQL на компьютер с ОС Windows? Инструкция по установке и настройке MySQL на русском языке с официального сайта. <?php include '../include/description.php'; ?>">
    <style>
        .note {background:#D6ECE9;padding:5px;margin-left: 10px;}
        table {border-collapse: collapse;}
        table, th, td {border: 1px solid black;padding: 5px}
    </style>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_blog.php'; ?>
<?php include '../include/before_content_blog.php'; ?>

<article>
    <h1 class="w3-center">Установка MySQL на компьютер с Windows</h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="apache_install.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="youtube_responsive.php">Next &#10095;</a>
    </div>

    <div class="author">
        <p>Original: <strong>&quot;<a href="https://dev.mysql.com/doc/refman/8.0/en/windows-installation.html" target="_blank" rel="nofollow">Installing MySQL on Microsoft Windows</a>&quot;</strong>,<br><i>translating by WebSunSey - <time datetime="2019-12-09">09.12.2019</time></i></p>
    </div>
    <hr>
    <a href="https://dev.mysql.com/" target="_blank" rel="nofollow"><img src="../images/mysql.PNG" alt="Как установить MySQL?" class="w3-left w3-padding img-responsive" title="База данных MySQL" width="160"></a>
    <h2>Как установить базу данных MySQL 8.0 на компьютер с Windows?</h2>
    <h3>Установка MySQL на Microsoft Windows</h3>

    <ol>
        <li>Схема установки MySQL в Microsoft Windows</li>
        <li>Выбор установочного пакета</li>
        <li>MySQL Установщик для Windows</li>
        <li>Установка MySQL в Microsoft Windows с использованием ZIP-архива noinstall</li>
        <li>Устранение неполадок при установке Microsoft Windows MySQL Server</li>
        <li>Процедуры постустановки Windows</li>
        <li>Ограничения платформы Windows</li>
    </ol>
    <p class="note"><b>Важно!</b><br>MySQL 8.0 Server требует, чтобы распространяемый пакет Microsoft Visual C++ 2015 работал на платформах Windows. Пользователи должны убедиться, что пакет был установлен в системе перед установкой сервера. Пакет доступен в <a href="https://www.microsoft.com/uk-ua/download" target="_blank" rel="nofollow">Центре загрузки Microsoft</a>. Кроме того, двоичные файлы отладки MySQL требуют установки Visual Studio 2015.</p>
    <p>MySQL доступен только для 64-разрядных операционных систем Microsoft Windows. Для получения информации о поддерживаемой платформе Windows см. <a href="https://www.mysql.com/support/supportedplatforms/database.html" target="_blank" rel="nofollow">https://www.mysql.com/support/supportedplatforms/database.html</a>.</p>
    <p>Существуют разные способы установки MySQL в Microsoft Windows.</p>
    <h3>Метод установки MySQL</h3>
    <p>Самый простой и рекомендуемый способ - загрузить MySQL Installer (для Windows) и позволить ему установить и настроить определенную версию MySQL Server следующим образом:</p>
    <ol>
        <li>Загрузите MySQL установщик с <a href="https://dev.mysql.com/downloads/installer/" target="_blank" rel="nofollow">https://dev.mysql.com/downloads/installer/</a> и запустите его.
            <p class="note"><b>Примечание.</b> В отличие от стандартного установщика MySQL, меньшая версия &quot;web-community&quot; не объединяет никакие приложения MySQL, но загружает продукты MySQL, которые вы выбираете для установки.</p>
        </li>
        <li>Определите тип установки, который будет использоваться для первоначальной установки продуктов MySQL. Например:
            <ul>
                <li><b>Developer по умолчанию</b>: Предоставляет тип установки, который включает выбранную версию MySQL Server и другие инструменты MySQL, связанные с разработкой MySQL, такие как MySQL Workbench.</li>
                <li><b>Server Only</b>: Обеспечивает настройку для выбранной версии MySQL Server без других продуктов.</li>
                <li><b>Custom</b>: Позволяет выбрать любую версию MySQL Server и других продуктов MySQL.</li>
            </ul>
        </li>
        <li>Установите экземпляр сервера (и продукты), а затем начните настройку сервера, сначала выбрав один из следующих уровней доступности для экземпляра сервера:
            <ul>
                <li>Standalone MySQL Server / Classic MySQL Replication (default) - Автономный сервер MySQL / Классическая репликация MySQL (по умолчанию)<br>Настраивает экземпляр сервера для работы без высокой доступности.</li>
                <li>InnoDB cluster<br>Предоставляет два варианта конфигурации на основе MySQL Group Replication для:
                    <ul>
                        <li>Настройте несколько экземпляров сервера в кластере InnoDB изолированной программной среды на локальном хосте (только для тестирования).</li>
                        <li>Создайте новый кластер InnoDB и настройте один начальный экземпляр или добавьте новый экземпляр сервера в существующий кластер InnoDB.</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Завершите процесс настройки, следуя инструкциям на экране. Для получения дополнительной информации о каждом отдельном шаге см. раздел &quot;Конфигурация MySQL Server с MySQL Installer&quot;.</li>
    </ol>
    <p>MySQL теперь установлен. Если вы настроили MySQL как службу, то Windows будет автоматически запускать сервер MySQL при каждой перезагрузке системы. Кроме того, этот процесс устанавливает приложение MySQL Installer на локальный хост, который можно использовать позже для обновления или перенастройки сервера MySQL.</p>
    <p class="note"><b>Примечание.</b> Если вы установили MySQL Workbench в своей системе, рассмотрите возможность его использования для проверки вашего нового соединения с сервером MySQL. По умолчанию программа автоматически запускается после установки MySQL.</p>
    <h3>Дополнительная информация по установке</h3>
    <p>MySQL можно запускать как стандартное приложение или как службу Windows. Используя службу, вы можете отслеживать и контролировать работу сервера с помощью стандартных инструментов управления службами Windows. Для получения дополнительной информации см. раздел &quot;Запуск MySQL как службы Windows&quot;.</p>
    <p>Чтобы приспособить оператор RESTART, сервер MySQL разветвляется при запуске в качестве службы или автономно, чтобы процесс мониторинга мог контролировать процесс сервера. В этом случае вы увидите два процесса mysqld. Если возможность RESTART не требуется, сервер можно запустить с параметром --no-monitor. См. раздел &quot;Заявление о перезапуске&quot;.</p>
    <p>Как правило, вы должны установить MySQL в Windows, используя учетную запись с правами администратора. В противном случае могут возникнуть проблемы с некоторыми операциями, такими как редактирование переменной среды PATH или доступ к диспетчеру управления службами. После установки MySQL не нужно запускать, используя пользователя с правами администратора.</p>
    <p>Список ограничений на использование MySQL на платформе Windows см. В разделе &quot;Ограничения платформы Windows&quot;.</p>
    <p>В дополнение к пакету MySQL Server вам могут понадобиться или потребоваться дополнительные компоненты для использования MySQL с вашим приложением или средой разработки. Они включают, но не ограничиваются:</p>
    <ul>
        <li>Чтобы подключиться к серверу MySQL с помощью ODBC, у вас должен быть драйвер Connector / ODBC. Для получения дополнительной информации, включая инструкции по установке и настройке, см. Руководство разработчика MySQL Connector / ODBC.
            <p class="note"><b>Примечание.</b> MySQL Installer установит и настроит Connector / ODBC для вас.</p>
        </li>
        <li>Чтобы использовать сервер MySQL с приложениями .NET, у вас должен быть драйвер Connector / NET. Для получения дополнительной информации, включая инструкции по установке и настройке, см. Руководство разработчика MySQL Connector / NET.
            <p class="note"><b>Примечание.</b> MySQL Installer установит и настроит MySQL Connector / NET для вас.</p>
        </li>
    </ul>
    <p>Дистрибутивы MySQL для Windows можно загрузить по адресу <a href="https://dev.mysql.com/downloads/" target="_blank" rel="nofollow">https://dev.mysql.com/downloads/</a>. Смотрите Раздел &quot;Как получить MySQL&quot;.</p>
    <p>MySQL для Windows доступен в нескольких форматах распространения. Вообще говоря, удобнее всего использовать MySQL Installer. Он содержит больше функций и продуктов MySQL, чем старый MSI, его проще использовать, чем сжатый файл, и вам не нужны дополнительные инструменты для запуска и работы MySQL. MySQL Installer автоматически устанавливает MySQL Server и дополнительные продукты MySQL, создает файл параметров, запускает сервер и позволяет создавать учетные записи пользователей по умолчанию. Для получения дополнительной информации о выборе пакета см. Раздел &quot;Выбор установочного пакета&quot;.</p>
    <ul>
        <li>Дистрибутив MySQL Installer включает MySQL Server и дополнительные продукты MySQL, включая MySQL Workbench, MySQL для Visual Studio и MySQL для Excel. MySQL Installer также можно использовать для обновления этих продуктов в будущем (см. <a href="https://dev.mysql.com/doc/mysql-compat-matrix/en/" target="_blank" rel="nofollow">https://dev.mysql.com/doc/mysql-compat-matrix/en/</a>).
            <p>Инструкции по установке MySQL с помощью MySQL Installer см. в разделе &quot;<a href="https://dev.mysql.com/doc/refman/8.0/en/mysql-installer.html" target="_blank" rel="nofollow">MySQL Installer для Windows</a>&quot;.</p>
        </li>
        <li>Стандартный бинарный дистрибутив (упакованный в сжатый файл) содержит все необходимые файлы, которые вы распаковываете в выбранное вами место. Этот пакет содержит все файлы в полном пакете Windows MSI Installer, но не содержит программы установки.
            <p>Инструкции по установке MySQL с использованием сжатого файла см. В разделе &quot;<a href="https://dev.mysql.com/doc/refman/8.0/en/windows-install-archive.html" target="_blank" rel="nofollow">Установка MySQL в Microsoft Windows с использованием ZIP-архива noinstall</a>&quot;.</p>
        </li>
        <li>Исходный формат дистрибутива содержит весь код и вспомогательные файлы для сборки исполняемых файлов с использованием системы компиляторов Visual Studio.
            <p>Инструкции по сборке MySQL из исходного кода в Windows см. в разделе &quot;<a href="https://dev.mysql.com/doc/refman/8.0/en/source-installation.html" target="_blank" rel="nofollow">Установка MySQL из исходного кода</a>&quot;.</p>
        </li>
    </ul>
    <h3>MySQL на Windows</h3>
    <ul>
        <li><strong>Поддержка больших таблиц</strong>
            <p>Если вам нужны таблицы размером более 4 ГБ, установите MySQL в файловой системе NTFS или новее. Не забудьте использовать MAX_ROWS и AVG_ROW_LENGTH при создании таблиц. Смотрите Раздел &quot;CREATE TABLE Statement&quot;.</p>
        </li>
        <li><strong>MySQL и антивирусное программное обеспечение</strong>
            <p>Программное обеспечение для сканирования на вирусы, такое как Norton / Symantec Anti-Virus, в каталогах, содержащих данные MySQL и временные таблицы, может вызывать проблемы как с точки зрения производительности MySQL, так и программного обеспечения для сканирования на вирусы, которое неправильно определяет содержимое файлов как спам. Это связано с механизмом дактилоскопии, используемым антивирусным программным обеспечением, и тем, как MySQL быстро обновляет различные файлы, что может быть идентифицировано как потенциальная угроза безопасности.</p>
            <p>После установки MySQL Server рекомендуется отключить проверку на вирусы в главном каталоге (datadir), который используется для хранения данных таблицы MySQL. Обычно в антивирусную программу встроена система, позволяющая игнорировать определенные каталоги.</p>
            <p>Кроме того, по умолчанию MySQL создает временные файлы в стандартном временном каталоге Windows. Чтобы предотвратить также сканирование временных файлов, настройте отдельный временный каталог для временных файлов MySQL и добавьте этот каталог в список исключений из проверки на вирусы. Для этого добавьте параметр конфигурации для параметра tmpdir в файл конфигурации my.ini. Для получения дополнительной информации см. Раздел &quot;Создание файла опций&quot;.</p>
        </li>
    </ul>
    <hr>
    <h3>Схема установки MySQL в Microsoft Windows</h3>
    <p>Для MySQL 8.0 в Windows каталог установки по умолчанию - <code>C:\Program Files\MySQL\MySQL Server 8.0</code> для установок, выполняемых с помощью MySQL Installer. Если вы используете метод ZIP-архива для установки MySQL, вы можете установить его в C:\mysql. Тем не менее, расположение подкаталогов остается прежним.</p>
    <p>Все файлы расположены в этом родительском каталоге, используя структуру, показанную в следующей таблице.</p>
    <h4>Макет установки MySQL по умолчанию для Microsoft Windows</h4>
    <table>
        <tr>
            <th style="width:30%;">Директория</th>
            <th style="width:40%;">Содержимое директории</th>
            <th style="width:30%;">Примечания</th>
        </tr>
        <tr>
            <td><code>bin</code></td>
            <td><strong>mysqld</strong> серверные, клиентские и служебные программы</td>
            <td></td>
        </tr>
        <tr>
            <td><code>%PROGRAMDATA%\MySQL\MySQL Server 8.0\</code></td>
            <td>Лог-файлы, базы данных</td>
            <td>Системная переменная Windows <code>%PROGRAMDATA%</code> по умолчанию имеет <code>C:\ProgramData</code>.</td>
        </tr>
        <tr>
            <td><code>docs</code></td>
            <td>Выпуски документации</td>
            <td>С MySQL Installer, используйте операцию <code>Modify</code>, чтобы выбрать эту дополнительную папку.</td>
        </tr>
        <tr>
            <td><code>include</code></td>
            <td>Включить (заголовок) файлы</td>
            <td></td>
        </tr>
        <tr>
            <td><code>lib</code></td>
            <td>Библиотеки</td>
            <td></td>
        </tr><tr>
            <td><code>share</code></td>
            <td>Различные файлы поддержки, включая сообщения об ошибках, файлы набора символов, примеры файлов конфигурации, SQL для установки базы данных</td>
            <td></td>
        </tr>
    </table>
    <!-- / Content -->
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="apache_install.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="youtube_responsive.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>