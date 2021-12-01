<?php include '../include/head.php'; ?>

<title>WordPress. Перевод Readme на русский язык. Установка CMS. <?php include '../include/title.php'; ?></title>
<meta name="description" content="WordPress. Перевод файла readme.html. Первая установка CMS на сервер. Как установить и настроить? <?php include '../include/description.php'; ?>">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_blog.php'; ?>
<?php include '../include/before_content_blog.php'; ?>

<article>
    <h1>WordPress<span class="color_h1"> Начальная установка</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html6_news.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="verbit.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="author">
        <p>Original: <strong>&quot;<a href="https://codex.wordpress.org/" target="_blank" rel="nofollow">Перевод на русский язык файла</a>
                    <a href="wp_readme.html">readme.html</a>, для ознакомления с установкой WordPress&quot;</strong>,<br><i>translating by WebSunSey - <time datetime="2020-12-03">03.12.2020</time></i></p>
    </div>
    <hr>

    <p><strong>WordPress</strong> - Семантическая платформа для персональных публикаций</p>
    <hr>
    <a href="https://wordpress.org/"><img src="../svg/wordpress-logo.svg" alt="WordPress. Начальная установка" class="w3-left w3-padding" title="WordPress для начинающих" width="90"></a>
    <h2>Что сделать в первую очередь?</h2>
    <blockquote cite="https://ru.wikipedia.org/wiki/Мулленвег,_Мэтт"><i>Добро пожаловать. WordPress для меня - особенный проект. Каждый разработчик и участник добавляет что-то уникальное, и вместе мы создаем нечто прекрасное, частью чего я горжусь. Тысячи часов потрачены на WordPress, и мы стремимся делать его лучше каждый день. Спасибо, что сделали его частью своего мира.</i></blockquote>
    <p style="text-align: right">&#8212; <a href="https://en.wikipedia.org/wiki/Matt_Mullenweg" target="_blank" rel="nofollow">Matt Mullenweg</a></p>
    <hr>
    <h2>Установка: Знаменитая 5-минутная установка</h2>
    <ol>
        <li>Разархивируйте пакет в пустой каталог и загрузите все.</li>
        <li>Откройте <span class="file"><a href="wp-admin/install.php">wp-admin/install.php</a></span> в вашем браузере. Он проведет вас через процесс создания файла <code>wp-config.php</code> с данными подключения к базе данных.
            <ol>
                <li>Если по какой-то причине это не работает, не волнуйтесь. Он работает не на всех веб-хостах. Откройте <code>wp-config-sample.php</code> с помощью текстового редактора, такого как WordPad или аналогичного, и введите данные подключения к базе данных.</li>
                <li>Сохраните файл как <code>wp-config.php</code> и загрузите его.</li>
                <li>Откройте <span class="file"><a href="wp-admin/install.php">wp-admin/install.php</a></span> в своем браузере.</li>
            </ol>
        </li>
        <li>После настройки файла конфигурации установщик настроит таблицы, необходимые для вашего сайта. Если возникла ошибка, дважды проверьте файл <code>wp-config.php</code> и повторите попытку. Если это снова не удастся, перейдите на <a href="https://wordpress.org/support/forums/" target="_blank" rel="nofollow">форумы поддержки WordPress</a>, где сможете узнать намного больше информации о WordPress.</li>
        <li><strong>Если вы не ввели пароль, запишите предоставленный вам пароль.</strong> Если вы не ввели имя пользователя, оно будет <code>admin</code>.</li>
        <li>После этого программа установки отправит вас на <a href="wp-login.php">страницу входа</a>. Войдите в систему, используя имя пользователя и пароль, которые вы выбрали во время установки. Если для вас был сгенерирован пароль, вы можете нажать &#8220;Профиль&#8221; и изменить пароль.</li>
    </ol>

    <h2>Обновление</h2>
    <h3>Использование автоматического обновления</h3>
    <ol>
        <li>Откройте в браузере <span class="file"><a href="wp-admin/update-core.php">wp-admin/update-core.php</a></span> и следуйте инструкциям.</li>
        <li>Возможно, вы хотели большего? Но это - всё!</li>
    </ol>

    <h3>Обновление вручную</h3>
    <ol>
        <li>Прежде чем что-либо обновлять, убедитесь, что у вас есть резервные копии всех файлов, которые вы могли изменить, например <code>index.php</code>.</li>
        <li>Удалите старые файлы WordPress, сохранив те, которые вы изменили.</li>
        <li>Загрузите новые файлы.</li>
        <li>Укажите в браузере <span class="file"><a href="wp-admin/upgrade.php">/wp-admin/upgrade.php</a>.</span></li>
    </ol>

    <h2>Переход с других систем</h2>
    <p>WordPress может <a href="https://wordpress.org/support/article/importing-content/" target="_blank" rel="nofollow">выполнять импорт из нескольких систем</a>. Сначала вам необходимо установить WordPress и работать, как описано выше, перед использованием <a href="wp-admin/import.php">наших инструментов импорта</a>.</p>

    <h2>Системные Требования</h2>
    <ul>
        <li><a href="https://secure.php.net/" target="_blank" rel="nofollow">PHP</a> версия <strong>5.6.20</strong> или выше.</li>
        <li><a href="https://www.mysql.com/" target="_blank" rel="nofollow">MySQL</a> версия <strong>5.0</strong> или выше.</li>
    </ul>

    <h3>Рекомендации</h3>
    <ul>
        <li><a href="https://secure.php.net/" target="_blank" rel="nofollow">PHP</a> версия <strong>7.4</strong> или выше.</li>
        <li><a href="https://www.mysql.com/" target="_blank" rel="nofollow">MySQL</a> версия <strong>5.6</strong> или выше.</li>
        <li><a href="https://httpd.apache.org/docs/2.2/mod/mod_rewrite.html" target="_blank" rel="nofollow">mod_rewrite</a> Apache модуль.</li>
        <li><a href="https://wordpress.org/news/2016/12/moving-toward-ssl/" target="_blank" rel="nofollow">HTTPS</a> поддержка.</li>
        <li>Ссылка <a href="https://wordpress.org/" target="_blank" rel="nofollow">wordpress.org</a> на твоем сайте.</li>
    </ul>

    <h2>Онлайн ресурсы</h2>
    <p>Если у вас есть какие-либо вопросы, которые не рассматриваются в этом документе, воспользуйтесь многочисленными онлайн-ресурсами WordPress:</p>
    <dl>
        <dt><a href="https://codex.wordpress.org/" target="_blank" rel="nofollow">The WordPress Codex</a></dt>
        <dd>Кодекс - это энциклопедия всего, что связано с WordPress. Это наиболее полный доступный источник информации о WordPress.</dd>
        <dt><a href="https://wordpress.org/news/" target="_blank" rel="nofollow">The WordPress Blog</a></dt>
        <dd>Здесь вы найдете последние обновления и новости, связанные с WordPress. Последние новости WordPress по умолчанию отображаются в вашей административной панели.</dd>
        <dt><a href="https://planet.wordpress.org/" target="_blank" rel="nofollow">WordPress Planet</a></dt>
        <dd>WordPress Planet - это агрегатор новостей, который объединяет сообщения из блогов WordPress со всего Интернета.</dd>
        <dt><a href="https://wordpress.org/support/forums/" target="_blank" rel="nofollow">WordPress Support Forums</a></dt>
        <dd>Если вы искали повсюду и все еще не можете найти ответ, форумы поддержки очень активны и имеют большое сообщество, готовое помочь. Чтобы помочь им, обязательно используйте описательный заголовок беседы и опишите свой вопрос как можно подробнее.</dd>
        <dt><a href="https://codex.wordpress.org/IRC" target="_blank" rel="nofollow">WordPress <abbr>IRC</abbr> (Internet Relay Chat) Channel</a></dt>
        <dd>Существует канал онлайн-чата, который используется для обсуждения людьми, использующими WordPress, и иногда для поддержки тем. Приведенная выше страница вики должна указать вам правильное направление. (<a href="irc://irc.freenode.net/wordpress">irc.freenode.net #wordpress</a>)</dd>
    </dl>

    <h2>Заключительные примечания</h2>
    <ul>
        <li>Если у вас есть предложения, идеи или комментарии, или если вы (ахте!) Обнаружили ошибку, присоединяйтесь к нам в <a href="https://wordpress.org/support/forums/" target="_blank" rel="nofollow">Форумы поддержки</a>.</li>
        <li>WordPress имеет надежный плагин <abbr>API</abbr> (интерфейс прикладного программирования), который упрощает расширение кода. Если вы разработчик, заинтересованный в использовании этого, см. <a href="https://developer.wordpress.org/plugins/" target="_blank" rel="nofollow">Руководство разработчика плагинов</a>. Вы не должны изменять какой-либо основной код.</li>
    </ul>

    <h2>Поделиться любовью</h2>
    <p>WordPress не имеет многомиллионной маркетинговой кампании или спонсоров-знаменитостей, но у нас есть кое-что еще лучше - вы. Если вам нравится WordPress, подумайте о том, чтобы рассказать другу, настроить его для кого-то менее образованного, чем вы, или написать автору статьи в СМИ, которая упускает из виду нас.</p>
    <p>WordPress является официальным продолжением <a href="http://cafelog.com/" target="_blank" rel="nofollow">b2/caf&#233;log</a>, созданного Michel V. Работа была продолжена <a href="https://wordpress.org/about/" target="_blank" rel="nofollow">разработчиками WordPress</a>. Если вы хотите поддержать WordPress, рассмотрите возможность <a href="https://wordpress.org/donate/" target="_blank" rel="nofollow">пожертвования</a>.</p>

    <h2>Лицензия</h2>
    <p>WordPress - бесплатное программное обеспечение, выпущенное на условиях <abbr>GPL</abbr> (Стандартная общественная лицензия GNU) версии 2 или (по вашему выбору) любой более поздней версии. Посмотреть текст лицензии <a href="wp_license.txt" target="_blank">license.txt</a>.</p>
    <!--/CONTENT-->
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html6_news.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="verbit.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>