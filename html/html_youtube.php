<?php include '../include/head.php'; ?>

  <title>HTML YouTube видео. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML YouTube видео. Как добавить видео с Youtube на сайт? Способы вставки видео с Ютуба. Как сделать видео с YouTube адаптивным? <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML <span class='color_h1'>YouTube Видео</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_object.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_geolocation.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>Самым простым способом воспроизведения <strong>видео в HTML</strong> является использование сайта <a href='https://www.youtube.com/' target='_blank' rel='nofollow'>YouTube</a>.</p>

    <h2>Что такое YouTube и для чего он нужен?</h2>
    <img src='../svg/youtube-logo.svg' alt='Добавление видео с YouTube на сайт' width='90' class='w3-left'>
    <p><strong>YouTube</strong> (от англ. you «ты, вы» + tube «труба» = «телик» жарг. «телевизор») - самый большой и самый популярный мировой видеохостинг, который предоставляет услуги размещения видеоматериалов. Основан 14 февраля 2005 тремя работниками PayPal: Чадом Герли, Стивеном Чени и Джаведом Каримом. Является подразделением компании Google. По состоянию на декабрь 2020 года YouTube является вторым по посещаемости сайтом в Интернете (по данным компании <a href='https://www.alexa.com/' target='_blank' rel='nofollow'>Alexa Internet</a>).</p>
    <p>Пользователи могут добавлять, просматривать и комментировать те или иные видеозаписи. Благодаря простоте и удобству использования YouTube стал одним из самых популярных видеохостингов. Служба содержит как профессиональные, так и любительские видеозаписи, включая видеоблоги.</p>
    <p>Любой человек может бесплатно зарегистрироваться на сайте <a href='https://www.google.com/' target='_blank' rel='nofollow'>Google</a> (создать собственный email), а потом перейти на сайт <a href='https://www.youtube.com/' target='_blank' rel='nofollow'>YouTube</a> и открыть собственный видео-канал. Затем все свои видео с YouTube можно встраивать на любые другие веб-страницы, используя обычный html-код.</p>
    <hr>
    <h2>Борьба с видеоформатами</h2>
    <p>Ранее в этом учебном пособии вы видели, что вам придется конвертировать видео в различные форматы, чтобы сделать их воспроизводимым во всех браузерах.</p>
    <p>Но конвертирование видеофайлов в различные форматы может быть довольно сложным и занимать много времени.</p>
    <p>Более простое решение - это встроить <strong>видео с YouTube</strong> для воспроизведения на вашей веб-странице.</p>
    <hr>
    <h2>YouTube видео идентификатор - Id</h2>
    <p>YouTube будет отображать идентификатор (например, tgbNymZ7vqY) при сохранении (или воспроизведение) видео.</p>
    <p>Вы можете использовать этот идентификатор и ссылаться на свое видео в HTML-коде.</p>
    <hr>
    <h2>Воспроизведение видео с YouTube на HTML-странице</h2>
    <p>Чтобы воспроизвести видео с YouTube на веб-странице, выполните приведенные ниже действия:</p>
    <ul>
      <li>Загрузите видео на YouTube</li>
      <li>Обратите внимание на идентификатор видео - Id</li>
      <li>Определите элемент <code class='w3-codespan'>&lt;iframe&gt;</code> на вашей веб-странице</li>
      <li>Атрибут <code class='w3-codespan'>src</code> указывает URL-адрес видео</li>
      <li>Используйте атрибуты <code class='w3-codespan'>width</code> (ширина) и <code class='w3-codespan'>height</code> (высота), чтобы определить размеры плеера</li>
      <li>Добавьте к URL другие необходимые параметры (см. ниже)</li>
    </ul>

    <div class='w3-example'>
      <h3>Например - Использование iFrame (рекомендуется)</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;iframe width=&quot;420&quot; height=&quot;315&quot;<br>src=&quot;https://www.youtube.com/embed/tgbNymZ7vqY&quot;&gt;<br>
        &lt;/iframe&gt;
      </div>
      <a target='_blank' href='../htmltryit/tryit2b2d.html?filename=tryhtml_youtubeiframe' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>YouTube Autoplay - автоматическое воспроизведение</h2>
    <p>Вы можете сделать автоматическое воспроизведение видео, когда пользователь посещает страницу, добавив простой параметр к URL-адресу YouTube.</p>
    <div class='w3-panel w3-note'>
      <p><strong>Примечание:</strong> Будьте внимательны при принятии решения об автоматическом воспроизведении видео. Автоматический запуск видео может раздражать вашего посетителя и в конечном итоге причинить больше вреда, чем пользы, так как пользователи могут сразу покинуть сайт.</p>
    </div>
    <p>Значение 0 (по умолчанию): видео не будет воспроизводиться автоматически во время загрузки плеера.</p>
    <p>Значение 1: видео будет воспроизводиться автоматически во время загрузки плеера.</p>
    <div class='w3-example'>
      <h3>YouTube - Autoplay</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;iframe width=&quot;420&quot; height=&quot;315&quot;<br>src=&quot;https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&quot;&gt;<br>
        &lt;/iframe&gt;
      </div>
      <a target='_blank' href='../htmltryit/tryit30b6.html?filename=tryhtml_youtubeiframe_autoplay' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>YouTube Playlist - Список воспроизведения</h2>
    <p>Разделённый запятыми список видео для воспроизведения (кроме исходного URL-адреса).</p>
    <hr>
    <h2>YouTube Loop - повторение воспроизведения видео</h2>
    <p>Значение 0 (по умолчанию): видео будет воспроизводиться лишь один раз.</p>
    <p>Значение 1: воспроизведение видео будет приостановлено после окончания.</p>
    <div class='w3-example'>
      <h3>YouTube - Повторение</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;iframe width=&quot;420&quot; height=&quot;315&quot;<br>src=&quot;https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&amp;loop=1&quot;&gt;<br>
        &lt;/iframe&gt;
      </div>
      <a target='_blank' href='../htmltryit/tryit91db.html?filename=tryhtml_youtubeiframe_loop' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>YouTube Controls - панель управления</h2>
    <p>Значение 0: элементы управления плеера не отображаются.</p>
    <p>Значение 1 (по умолчанию): элементы управления плеера отображаются.</p>
    <div class='w3-example'>
      <h3>YouTube - Панель управления</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;iframe width=&quot;420&quot; height=&quot;315&quot;<br>src=&quot;https://www.youtube.com/embed/tgbNymZ7vqY?controls=0&quot;&gt;<br>
        &lt;/iframe&gt;
      </div>
      <a target='_blank' href='../htmltryit/tryit403d.html?filename=tryhtml_youtubeiframe_controls' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>YouTube - Использование &lt;object&gt; или &lt;embed&gt;</h2>
    <p><strong>Примечание:</strong> YouTube <code class='w3-codespan'>&lt;object&gt;</code> и <code class='w3-codespan'>&lt;embed&gt;</code> считаются устаревшими с января 2015 года. Вы должны изменить способ добавления вашего видео, используя <code class='w3-codespan'>&lt;iframe&gt;</code> вместо этого.</p>
    <div class='w3-example'>
      <h3>Пример - использование &lt;object&gt; (устаревшее)</h3>
      <div class='w3-code notranslate htmlHigh' style='border-left-color:red'>
        &lt;object width=&quot;420&quot; height=&quot;315&quot;<br>
        data=&quot;https://www.youtube.com/embed/tgbNymZ7vqY&quot;&gt;<br>&lt;/object&gt;<br>
      </div>
      <a target='_blank' href='../htmltryit/tryit2b2b.html?filename=tryhtml_youtubeobject' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-example'>
      <h3>Пример - использование &lt;embed&gt; (устаревшее)</h3>
      <div class='w3-code notranslate htmlHigh' style='border-left-color:red'>
        &lt;embed width=&quot;420&quot; height=&quot;315&quot;<br>
        src=&quot;https://www.youtube.com/embed/tgbNymZ7vqY&quot;&gt;<br>
      </div>
      <a target='_blank' href='../htmltryit/tryit24e0.html?filename=tryhtml_youtube_embed' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
      <hr>
      <p>Также вы можете посмотреть, <a href="../blog/youtube_responsive.php">Как сделать адаптивным вставленное видео с YouTube?</a> т.е. меняющимся при изменении размера окна просмотра.</p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_object.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_geolocation.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>