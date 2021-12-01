<?php include '../include/head.php'; ?>

  <title>jQuery Учебник. Начало использования. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Учебник по jQuery. Начало использования. Как добавить jQuery на веб-страницы? Скачать jQuery. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/jquery/jquery_get_started.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jquery.php'; ?>
<?php include '../include/before_content_jquery.php'; ?>

  <article>
    <h1>jQuery <span class='color_h1'>Начало использования</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='jquery_intro.php' title="Предыдущая страница">&#10094; Prev</a>
      <a class='w3-right w3-btn' href='jquery_syntax.php' title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>

    <h2>Добавление jQuery на ваши веб-страницы</h2>
    <p>Есть несколько способов начать использовать jQuery на своем веб-сайте. Вы можете:</p>
    <ul>
      <li>Скачать библиотеку jQuery из jQuery.com</li>
      <li>Включить jQuery из CDN, например Google</li>
    </ul>
    <hr>

    <h2>Скачивание jQuery</h2>
    <p>Для скачивания доступны две версии jQuery:</p>
    <ul>
      <li>Production version (Производственная версия) - это для вашего работающего веб-сайта, потому что эта версия была уменьшена и сжата</li>
      <li>Development version (Версия для разработки) - это для тестирования и разработки (несжатый и хорошо читаемый код)</li>
    </ul>
    <p>Обе версии можно скачать с <a target='_blank' href='http://jquery.com/download/'>jQuery.com</a>.</p>
    <p>Библиотека jQuery - это отдельный файл JavaScript, и вы ссылаетесь на него с помощью HTML тега <code class='w3-codespan'>&lt;script&gt;</code> (обратите внимание, что тег <code class='w3-codespan'>&lt;script&gt;</code> должен находиться внутри раздела <code class='w3-codespan'>&lt;head&gt;</code>):</p>

    <div class='w3-code w3-border notranslate htmlHigh'><div>
        &lt;head&gt;<br>
        &lt;script src=&quot;jquery-3.6.0.min.js&quot;&gt;&lt;/script&gt;<br>
        &lt;/head&gt;
      </div></div>
    <p><b>Совет:</b> Поместите загруженный файл в тот же каталог, что и страницы, на которых вы хотите его использовать.<br>
    </p>
    <hr>

    <h2>jQuery CDN</h2>
    <p>Если вы не хотите загружать и размещать jQuery самостоятельно, вы можете включить его из CDN (Content Delivery Network - сети доставки контента).</p>
    <p>Google - это пример того, кто размещает jQuery:</p>
    <div class='w3-example'>
      <h3>Google CDN:</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;head&gt;<br>
        &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js&quot;&gt;&lt;/script&gt;<br>
        &lt;/head&gt;
      </div>
      <a target='_blank' href='../jquerytryit/tryjquery_lib_google.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
      <p><b>Одно большое преимущество использования размещенного jQuery от Google:</b><br><br>
        Многие пользователи уже загрузили jQuery из Google при посещении другого сайта. В результате он будет загружен из кеша при посещении вашего сайта, что приведет к сокращению времени загрузки. Кроме того, большинство CDN гарантируют, что после того, как пользователь запросит у него файл, он будет обслуживаться с ближайшего к нему сервера, что также приводит к более быстрому времени загрузки.</p>
    </div>
    <p>Или вариант от Microsoft:</p>

    <div class='w3-example'>
    <h3>Microsoft CDN:</h3>
    <div class='w3-code notranslate htmlHigh'>
    &lt;head&gt;<br>
    &lt;script src=&quot;https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js&quot;&gt;&lt;/script&gt;<br>
    &lt;/head&gt;
    </div>
    <a target='_blank' href='../jquerytryit/tryjquery_lib_microsoft.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-panel w3-note'>
        <b>Примечание.</b> Версия jQuery может отличаться от указанной в данных примерах. Всегда смотрите самую новую и актуальную версию jQuery на официальном сайте <a href="https://jquery.com/" target="_blank" rel="nofollow">https://jquery.com/</a>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='jquery_intro.php' title="Предыдущая страница">&#10094; Prev</a>
      <a class='w3-right w3-btn' href='jquery_syntax.php' title="Следующая страница">Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>