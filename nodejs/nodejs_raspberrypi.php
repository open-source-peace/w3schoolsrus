<?php include '../include/head.php'; ?>

<title>Node.js и Raspberry Pi Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Node.js и Raspberry Pi Учебник. Что такое Raspberry Pi? Что необходимо? Записать образ ОС Raspbian на карту MicroSD. Настройка сети на Raspberry Pi. Включить SSH, изменить имя хоста и пароль. Установка Node.js на Raspberry Pi. Начало работы. Как начать работать? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_nodejs.php'; ?>
<?php include '../include/before_content_nodejs.php'; ?>

<article>
    <h1>Node.js и <span class="color_h1">Raspberry Pi</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="nodejs_mongodb_join.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="nodejs_raspberrypi_gpio_intro.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Raspberry Pi</strong> - небольшой многофункциональный компьютер.</p>
    <p class="intro">Из Node.js вы можете делать удивительные вещи с <strong>Raspberry Pi</strong>.</p>
    <hr>

    <h2>Что такое Raspberry Pi?</h2>
    <p><strong>Raspberry Pi</strong> - это небольшой, доступный и удивительно мощный компьютер размером с кредитную карту.</p>
    <p>Он разработан Raspberry Pi Foundation и может быть самой универсальной технологией из когда-либо созданных.</p>
    <p>Целью создателя Эбена Аптона было создание недорогого устройства, которое улучшило бы навыки программирования и понимание оборудования.</p>
    <p>Из-за небольшого размера и цены устройство стало центром широкого спектра проектов мастеров, производителей и энтузиастов электроники.</p>
    <hr>

    <h2>Raspberry Pi и Node.js</h2>
    <p>Raspberry Pi имеет ряд контактов GPIO (ввод/вывод общего назначения), которые можно использовать для удивительного взаимодействия с реальным миром. В этом руководстве мы сосредоточимся на том, как использовать их с Node.js.</p>
    <hr>

    <h2>Что мне нужно?</h2>
    <p>Для этого урока вам понадобится Raspberry Pi. В наших примерах мы используем Raspberry Pi 3, но это руководство должно работать для большинства версий.</p>
    <p>Требуется оборудование:</p>
    <ul>
        <li>Компьютер Raspberry Pi</li>
        <li>Карта памяти MicroSD (мы рекомендуем класс 10 с объемом памяти 16 ГБ или выше)</li>
        <li>Адаптер карты памяти MicroSD к SD (обычно прилагается к карте MicroSD)</li>
        <li>Блок питания Micro USB для питания Raspberry Pi (рекомендуется 2,5 или больше)</li>
        <li>Подключение кабеля Wi-Fi / Ethernet для Raspberry Pi (не требуется для Raspberry Pi 3, поскольку он имеет встроенный Wi-Fi)</li>
        <li>Рабочий компьютер с Интернетом и устройством чтения карт памяти SD (используется для установки ОС (операционной системы) Raspberry Pi на карту памяти). В нашем руководстве мы используем для этого компьютер с Windows, но вы можете использовать компьютер Mac или Linux, если хотите</li>
        <li>HDMI-монитор, USB-клавиатура (они нужны нам временно для первой загрузки Raspberry Pi)</li>
    </ul>
    <p>В последующих главах этого руководства мы будем использовать специальные датчики или устройства, которые мы подключаем к Raspberry Pi. Мы укажем это как особые требования в соответствующих главах.</p>
    <div class="w3-note w3-panel"><p>Если у вас уже есть Raspberry Pi, настроенный с Raspbian, Интернет и включенный SSH, вы можете перейти к шагу &quot;Установка Node.js на Raspberry Pi&quot;.</p></div>
    <hr>

    <h2>Записать образ ОС Raspbian на карту MicroSD</h2>
    <p>Прежде чем мы сможем начать использовать Raspberry Pi для чего-либо, нам нужно установить ОС.</p>
    <p>Raspbian - это бесплатная операционная система на основе Debian Linux, оптимизированная для Raspberry Pi.</p>
    <p>Загрузите последний образ Raspbian со страницы <a href="https://www.raspberrypi.org/downloads/raspbian/" target="_blank" rel="nofollow">https://www.raspberrypi.org/downloads/raspbian/</a> на свой компьютер.</p>
    <p>Мы используем &quot;LITE&quot; версии в нашем руководстве, так как мы настраиваем Raspberry Pi как безголовый сервер (мы будем подключаться к нему через SSH, без подключения к нему клавиатуры / дисплея). Вы можете использовать любую версию, которую хотите, но это руководство написано с использованием &quot;LITE&quot; версии как его фокус.</p>
    <p>Вставьте карту памяти MicroSD в компьютер (при необходимости через адаптер SD). Откройте проводник, чтобы убедиться, что он работает.</p>
    <p>Etcher - программа для записи изображений на карты памяти. Загрузите и установите Etcher из: <a href="https://etcher.io/" target="_blank" rel="nofollow">https://etcher.io/</a></p>
    <p>Запустите Etcher:</p>
    <img src="../images/img_etcher.png" alt="Launch Etcher" style="width:100%;max-width:1000px">
    <p>Нажмите кнопку &quot;Выбрать изображение&quot; и найдите загруженный zip-файл Raspbian.</p>
    <p>Нажмите кнопку &quot;Выбрать диск&quot; и укажите карту памяти в качестве целевого местоположения.</p>
    <p>Нажмите &quot;Flash!&quot; кнопку для записи изображения на карту памяти.</p>
    <p>После того, как Etcher закончит запись изображения на карту памяти, удалите его с компьютера.</p>
    <hr>

    <h2>Настройте свой Raspberry Pi</h2>
    <p>Чтобы подготовить Raspberry Pi к загрузке, нам нужно:</p>
    <ol>
        <li>Вставьте карту памяти MicroSD в Raspberry Pi</li>
        <li>Подключите USB-клавиатуру</li>
        <li>Подключите кабель HDMI</li>
        <li>Подключите USB-адаптер Wi-Fi (или кабель Ethernet). Пропустите этот шаг, если вы используете Raspberry Pi 3</li>
        <li>Подключите источник питания micro USB</li>
        <li>Raspberry Pi должен загружаться.</li>
    </ol>
    <p>Когда Raspberry Pi завершит загрузку, войдите в систему, используя имя пользователя: <code class="w3-codespan">pi</code> и пароль: <code class="w3-codespan">raspberry</code></p>
    <hr>

    <h2>Настройка сети на Raspberry Pi</h2>
    <p>Если вы будете использовать кабель Ethernet для подключения Raspberry Pi к Интернету, вы можете пропустить этот шаг.</p>
    <p>В этом разделе мы предполагаем, что у вас есть Raspberry Pi 3 со встроенным Wi-Fi.</p>
    <p>Начните с поиска беспроводных сетей:</p>
    <div class="w3-code notranslate w3-black">
        pi@raspberrypi:~ $
        sudo iwlist wlan0 scan
    </div>
    <p>В нем будут перечислены все доступные сети Wi-Fi. (Это также подтверждает, что ваш WiFi работает).</p>
    <p>Теперь нам нужно открыть файл wpa-supplicant, чтобы добавить сеть, к которой вы хотите подключиться:</p>
    <div class="w3-code notranslate w3-black">
        pi@raspberrypi:~ $ sudo
        nano /etc/wpa_supplicant/wpa_supplicant.conf</div>
    <p>Это откроет файл в редакторе Nano. Добавьте следующее в конец файла (замените <code class="w3-codespan">wifiName</code> и <code class="w3-codespan">wifiPassword</code> на фактическое имя сети и пароль):</p>

    <div class="w3-code notranslate w3-black">
        network={<br>&nbsp; ssid=&quot;wifiName&quot;<br>&nbsp; psk=&quot;wifiPassword&quot;<br>}
    </div>

    <p>Нажмите &quot;<code class="w3-codespan">Ctrl+x</code>&quot; чтобы сохранить код. Подтвердите, нажав "<code class="w3-codespan">y</code>", и подтвердите имя, нажав "<code class="w3-codespan">Enter</code>".</p>
    <p>И перезагрузите Raspberry Pi:</p>

    <div class="w3-code notranslate w3-black">
        pi@raspberrypi:~ $ sudo reboot
    </div>

    <p>После перезагрузки снова войдите в систему и убедитесь, что WiFi подключен и работает:</p>

    <div class="w3-code notranslate w3-black">
        pi@raspberrypi:~ $ ifconfig wlan0
    </div>

    <p>Если Wi-Fi работает нормально, отображаемая информация должна включать IP-адрес, подобный этому:</p>
    <div class="w3-code notranslate w3-black">
        inet addr:192.168.1.50
    </div>
    <p>Запишите этот IP-адрес, так как мы будем использовать его для подключения к Raspberry Pi через SSH.</p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Включить SSH, изменить имя хоста и пароль</h2>
    <p>Теперь ваш Raspberry Pi подключен к Интернету, пора включить SSH.</p>
    <p>SSH позволяет использовать Raspberry Pi без подключения к нему монитора и клавиатуры.</p>
    <p>Для этого вам понадобится SSH-клиент на вашем компьютере, отличном от Raspberry Pi. Мы используем <href src="http://www.putty.org" alt="PuTTY SSH client" target="_blank"><a href="http://www.putty.org/" target="_blank">PuTTY</a></href> для Windows)</p>
    <p>Откройте инструмент настройки программного обеспечения Raspberry Pi:</p>
    <div class="w3-code notranslate w3-black">
        pi@raspberrypi:~ $ sudo raspi-config
    </div>
    <p>Вы должны увидеть такое меню:</p>
    <img src="../images/img_raspi-config.png" alt="raspi-config Main Screen" style="width:100%;max-width:1000px">
    <p>Выберите вариант <code class="w3-codespan">5 Interfacing Options</code>:</p>
    <img src="../images/img_raspi-config_interfacing_options.png" alt="raspi-config Main Screen" style="width:100%;max-width:1000px">
    <p>Выберите опцию <code class="w3-codespan">P2 SSH</code>, чтобы активировать SSH:</p>
    <img src="../images/img_raspi-config_ssh.png" alt="raspi-config Main Screen" style="width:100%;max-width:1000px">
    <p>Подтвердите, нажав <code class="w3-codespan">YES</code>, чтобы активировать SSH:</p>
    <img src="../images/img_raspi-config_enable_ssh.png" alt="raspi-config Main Screen" style="width:100%;max-width:1000px">
    <p>SSH теперь включен, и вы снова должны быть в главном меню.</p>
    <p>Выберите <code class="w3-codespan">1 Change User Password</code>, и следуйте инструкциям по изменению пароля. Выберите надежный пароль, но то, что вы запомните:</p>
    <img src="../images/img_raspi-config.png" alt="raspi-config Main Screen" style="width:100%;max-width:1000px">
    <p>После того, как вы закончили менять пароль, вы должны вернуться в главное меню.</p>
    <p>Выберите <code class="w3-codespan">2 Hostname</code>, и следуйте инструкциям, чтобы изменить имя хоста:</p>
    <img src="../images/img_raspi-config_hostname.png" alt="raspi-config Main Screen" style="width:100%;max-width:1000px">
    <p>После того, как вы закончили изменять имя хоста, вы должны вернуться в главное меню.</p>
    <p>Теперь закроем меню и сохраним изменения:</p>
    <img src="../images/img_raspi-config_finish.png" alt="raspi-config Main Screen" style="width:100%;max-width:1000px">
    <p>При выборе <code class="w3-codespan">Finish</code>, вы получите возможность перезагрузки. Выберите <code class="w3-codespan">Yes</code> чтобы перезагрузить Raspberry Pi.</p>
    <img src="../images/img_raspi-config_finish_reboot.png" alt="raspi-config Main Screen" style="width:100%;max-width:1000px">
    <p>Теперь вы можете отключить монитор и клавиатуру от Raspberry Pi, и мы можем войти в систему с помощью клиента SSH.</p>
    <p>Откройте PuTTY, введите IP-адрес своего Raspberry Pi и нажмите <code class="w3-codespan">Open</code>:</p>
    <img src="../images/img_putty_connect.png" alt="raspi-config Main Screen" style="width:100%;max-width:500px">
    <p>Войдите в систему, используя имя пользователя <code class="w3-codespan">pi</code> и новый пароль, который вы указали.</p>
    <p>Теперь вы должны увидеть такую командную строку: we used w3demopi as our hostname (мы использовали w3demopi в качестве имени хоста)</p>
    <div class="w3-code notranslate w3-black">
        pi@w3demopi:~ $
    </div>
    <p>Теперь вы можете запустить свой Raspberry Pi в &quot;режиме без головы&quot;, что означает, что вам не нужен монитор или клавиатура. А если у вас есть соединение Wi-Fi, вам не нужен кабель Ethernet, только кабель питания!</p>
    <hr>

    <h2>Установка Node.js на Raspberry Pi</h2>
    <p>После правильной настройки Raspberry Pi войдите в систему через SSH и обновите системные пакеты Raspberry Pi до последних версий.</p>
    <p>Обновите список пакетов вашей системы:</p>
    <div class="w3-code notranslate w3-black">
        pi@w3demopi:~ $ sudo apt-get update
    </div>
    <p>Обновите все установленные пакеты до последней версии:</p>
    <div class="w3-code notranslate w3-black">
        pi@w3demopi:~ $ sudo apt-get dist-upgrade
    </div>
    <div class="w3-panel w3-note">
        <p>Если вы будете делать это регулярно, ваша установка Raspberry Pi будет обновляться.</p>
    </div>
    <p>Чтобы загрузить и установить новейшую версию Node.js, используйте следующую команду:</p>
    <div class="w3-code notranslate w3-black">
        pi@w3demopi:~ $ curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -</div>

    <p>Теперь установите его, запустив:</p>
    <div class="w3-code notranslate w3-black">
        pi@w3demopi:~ $ sudo apt-get install -y nodejs
    </div>
    <p>Убедитесь, что установка прошла успешно, и с номером версии Node.js:</p>
    <div class="w3-code notranslate w3-black">
        pi@w3demopi:~ $ node -v
    </div>
    <hr>

    <h2>Начните работу с Raspberry Pi и Node.js</h2>
    <p>Теперь у вас есть Raspberry Pi с установленным Node.js!</p>
    <p>Если вы хотите узнать больше о Node.js, перейдите на <a href="../nodejs/index.php">Учебник Node.js</a> на нашем сайте <?php include '../include/w3schools.php'; ?></p>
    <p>В следующей главе мы узнаем о GPIO и о том, как его использовать с Node.js.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="nodejs_mongodb_join.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="nodejs_raspberrypi_gpio_intro.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>