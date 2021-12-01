<?php include '../include/head.php'; ?>

  <title>HTML Видео. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML Видео на сайте. Как добавить видео на веб-страницу? Видеоплеер на сайте. Как вставить видео с YouTube? Форматы видео в Интернете. <?php include '../include/description.php'; ?>'>
  <link rel='stylesheet' href='../styles/browserref.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class='color_h1'>Видео</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_media.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_audio.php'>Next &#10095;</a>
    </div>
    <hr>

    <div class='w3-example'>
      <h3>HTML Видео пример.  Взято из <a href='https://www.bigbuckbunny.org/' target='_blank'>Big Buck Bunny</a>.</h3>
      <div class='w3-padding w3-white notranslate'>
        <div style='text-align:center'>
          <video id='video1' style='width:600px;max-width:100%;' controls>
            <source src='mov_bbb.mp4' type='video/mp4'>
            <source src='mov_bbb.ogg' type='video/ogg'>
            Ваш браузер не поддерживает HTML5 видео.
          </video>
        </div>
      </div>
      <a target='_blank' href='../htmltryit/tryit420a.html?filename=tryhtml5_video' class='w3-btn w3-margin-bottom w3-margin-top'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Воспроизведение видео в HTML</h2>
    <p>До появления спецификации HTML5 видео можно было воспроизвести лишь в веб-браузере с плагином (например, flash).</p>
    <p>HTML5 элемент <code class='w3-codespan'>&lt;video&gt;</code> указывает стандартный способ встраивания видео в веб-страницу.</p>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Цифры в таблице определяют первую версию браузера, которая полностью поддерживает элемент <code class='w3-codespan'>&lt;video&gt;</code>.</p>
    <table class='browserref notranslate'>
      <tr>
        <th style='width:20%;font-size:16px;text-align:left;'>Элемент</th>
        <th style='width:16%;' class='bsChrome' title='Chrome'></th>
        <th style='width:16%;' class='bsEdge' title='Internet Explorer / Edge'></th>
        <th style='width:16%;' class='bsFirefox' title='Firefox'></th>
        <th style='width:16%;' class='bsSafari' title='Safari'></th>
        <th style='width:16%;' class='bsOpera' title='Opera'></th>
      </tr>
      <tr>
        <td style='text-align:left;'>&lt;video&gt;</td>
        <td>4.0</td>
        <td>9.0</td>
        <td>3.5</td>
        <td>4.0</td>
        <td>10.5</td>
      </tr>
    </table>
    <hr>

    <h2>HTML элемент &lt;video&gt;</h2>
    <p>Чтобы показать видео в HTML, используйте элемент <code class='w3-codespan'>&lt;video&gt;</code>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;video width=&quot;320&quot; height=&quot;240&quot; controls&gt;<br>
        &nbsp; &lt;source src=&quot;movie.mp4&quot; type=&quot;video/mp4&quot;&gt;<br>
        &nbsp; &lt;source src=&quot;movie.ogg&quot; type=&quot;video/ogg&quot;&gt;<br>
        Ваш браузер не поддерживает тег video.<br>
        &lt;/video&gt;
      </div>
      <a target='_blank' href='../htmltryit/tryit8456.html?filename=tryhtml5_video_all' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Как это работает</h2>
    <p>Атрибут <code class='w3-codespan'>controls</code> добавляет элементы управления видео, такие как воспроизведение, приостановка и уровень звука.</p>
    <p>Рекомендуется всегда включать атрибуты <code class='w3-codespan'>width</code> и <code class='w3-codespan'>height</code>. Если height (высота) и width (ширина) не заданы, страница может мерцать при проигрывании видео.</p>
    <p>Элемент <code class='w3-codespan'>&lt;source&gt;</code> позволяет указывать альтернативные видеофайлы, с которых браузер может выбирать. Браузер будет использовать первый распознанный формат.</p>
    <p>Текст между тегами <code class='w3-codespan'>&lt;video&gt;</code> и <code class='w3-codespan'>&lt;/video&gt;</code> будет отображаться лишь в браузерах, которые не поддерживают элемент <code class='w3-codespan'>&lt;video&gt;</code>.</p>
    <hr>

    <h2>HTML &lt;video&gt; Autoplay</h2>
    <p>Чтобы проигрывание видео начиналось автоматически, используйте атрибут <code class='w3-codespan'>autoplay</code>:</p>

    <div class='w3-example'>
      <h3>Example</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;video width=&quot;320&quot; height=&quot;240&quot; autoplay&gt;<br>
        &nbsp; &lt;source src=&quot;movie.mp4&quot; type=&quot;video/mp4&quot;&gt;<br>
        &nbsp; &lt;source src=&quot;movie.ogg&quot; type=&quot;video/ogg&quot;&gt;<br>
        Ваш браузер не поддерживает тег video.<br>
        &lt;/video&gt;
      </div>
      <a target='_blank' href='../htmltryit/tryit7842.html?filename=tryhtml5_video_autoplay' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
      <p>Атрибут autoplay не работает на мобильных устройствах, таких как iPad и iPhone.</p>
    </div>
    <hr>

    <h2>HTML Video - Поддержка браузерами</h2>
    <p>В HTML5 есть три поддерживаемых видеоформата: MP4, WebM и Ogg.</p>
    <p>Поддержка браузерами разных форматов:</p>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:25%'>Браузер</th>
        <th style='width:25%'>MP4</th>
        <th style='width:25%'>WebM</th>
        <th style='width:25%'>Ogg</th>
      </tr>
      <tr>
        <td>Internet Explorer</td>
        <td>YES</td>
        <td>NO</td>
        <td>NO</td>
      </tr>
      <tr>
        <td>Chrome</td>
        <td>YES</td>
        <td>YES</td>
        <td>YES</td>
      </tr>
      <tr>
        <td>Firefox</td>
        <td>YES</td>
        <td>YES</td>
        <td>YES</td>
      </tr>
      <tr>
        <td>Safari</td>
        <td>YES</td>
        <td>NO</td>
        <td>NO</td>
      </tr>
      <tr>
        <td>Opera</td>
        <td>YES (from Opera 25)</td>
        <td>YES</td>
        <td>YES</td>
      </tr>
    </table>
    <hr>

    <h2>HTML Видео - Типы Медиа</h2>
    <table class='w3-table-all notranslate' id='table1'>
      <tr>
        <th style='width:50%'>Формат файла</th>
        <th style='width:50%'>Тип медиа</th>
      </tr>
      <tr>
        <td>MP4</td>
        <td>video/mp4</td>
      </tr>
      <tr>
        <td>WebM</td>
        <td>video/webm</td>
      </tr>
      <tr>
        <td>Ogg</td>
        <td>video/ogg</td>
      </tr>
    </table>
    <hr>

    <h2>HTML видео - методы, свойства и события</h2>
    <p>HTML5 определяет методы, свойства и события DOM для элемента <code class='w3-codespan'>&lt;video&gt;</code>.</p>
    <p>Это позволяет загружать, воспроизводить и приостанавливать видео, а также устанавливать продолжительность и громкость.</p>
    <p>Есть также события DOM, которые могут сообщать вам, когда видео начинает воспроизводиться, приостанавливаться и т.д.</p>
    <div class='w3-example'>
      <h3>Пример: использование JavaScript</h3>
      <br>
      <div style='text-align:center;' class='w3-white w3-padding-16'>
        <button onclick='playPause()'>Play/Pause</button>
        <button onclick='makeBig()'>Big</button>
        <button onclick='makeSmall()'>Small</button>
        <button onclick='makeNormal()'>Normal</button>
        <br><br>
        <video id='video2' width='480' style='max-width:100%'>
          <source src='mov_bbb.mp4' type='video/mp4'>
          <source src='mov_bbb.ogg' type='video/ogg'>
          Ваш браузер не поддерживает HTML5 видео.
        </video>
        <script>
            var myVideo = document.getElementById('video2');
            function playPause() {
                if (myVideo.paused)
                    myVideo.play();
                else
                    myVideo.pause();
            }

            function makeBig() {
                myVideo.width = 600;
            }

            function makeSmall() {
                myVideo.width = 320;
            }

            function makeNormal() {
                myVideo.width = 480;
            }
        </script>
        <p>Видео взято из <a href='https://www.bigbuckbunny.org/' target='_blank'>Big Buck Bunny</a>.</p>
      </div>
      <a target='_blank' href='../htmltryit/tryited54.html?filename=tryhtml5_video_js_prop' class='w3-btn w3-margin-bottom w3-margin-top'>Попробуйте сами &raquo;</a>
    </div>
    <p>Для полной DOM справки, перейдите на <a href='../tags/ref_av_dom.php'>HTML5 Аудио/Видео DOM Справочник</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
    <hr>

    <h2>HTML5 Видео теги</h2>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:20%'>Тег</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href='../tags/tag_video.php'>&lt;video&gt;</a></td>
        <td>Определяет видео или фильм</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_source.php'>&lt;source&gt;</a></td>
        <td>Определяет множество мультимедийных ресурсов для элементов медиа, такие как &lt;video&gt; и &lt;audio&gt;</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_track.php'>&lt;track&gt;</a></td>
        <td>Определяет текстовые дорожки в медиаплеерах</td>
      </tr>
    </table>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_media.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_audio.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>