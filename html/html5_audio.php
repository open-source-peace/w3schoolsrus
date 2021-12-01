<?php include '../include/head.php'; ?>

  <title>HTML Аудио. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML Аудио на сайте. Как добавить аудио на веб-страницу? Аудиоплеер на сайте. Как вставить аудио-файл на веб-странице? Форматы аудио в Интернете. <?php include '../include/description.php'; ?>'>
  <link rel='stylesheet' href='../styles/browserref.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class='color_h1'>Аудио</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_video.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_object.php'>Next &#10095;</a>
    </div>
    <hr>
    <h2>Аудио в Интернете</h2>
    <p>До появления стандарта <strong>HTML5</strong> аудиофайлы можно было воспроизводить в веб-браузере лишь с помощью плагина (на подобие flash).</p>
    <p><strong>HTML5</strong> элемент <code class='w3-codespan'>&lt;audio&gt;</code> указывает стандартный способ встраивания аудио в веб-страницу.</p>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Цифры в таблице определяют первую версию браузера, которая полностью поддерживает элемент <code class='w3-codespan'>&lt;audio&gt;</code>.</p>
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
        <td style='text-align:left;'>&lt;audio&gt;</td>
        <td>4.0</td>
        <td>9.0</td>
        <td>3.5</td>
        <td>4.0</td>
        <td>10.5</td>
      </tr>
    </table>
    <hr>

    <h2>HTML элемент &lt;audio&gt;</h2>
    <p>Чтобы воспроизвести аудиофайл в HTML, используйте элемент <code class='w3-codespan'>&lt;audio&gt;</code>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;audio controls&gt;<br>
        &nbsp; &lt;source src=&quot;horse.ogg&quot; type=&quot;audio/ogg&quot;&gt;<br>
        &nbsp; &lt;source src=&quot;horse.mp3&quot; type=&quot;audio/mpeg&quot;&gt;<br>
        Ваш веб-браузер не поддерживает элемент audio.<br>
        &lt;/audio&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit19ba.html?filename=tryhtml5_audio_all' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr><h2>HTML Аудио - Как это работает</h2>

    <p>Атрибут <code class='w3-codespan'>controls</code> добавляет элементы управления звуком, такие как воспроизведение, пауза и громкость.</p>
    <p>Элемент <code class='w3-codespan'>&lt;source&gt;</code> позволяет указать альтернативные аудиофайлы, с которых браузер может выбирать. Браузер будет использовать первый распознанный формат.</p>
    <p>Текст между <code class='w3-codespan'>&lt;audio&gt;</code> и <code class='w3-codespan'>&lt;/audio&gt;</code> тегами будет отображаться лишь в браузерах, которые не поддерживают элемент <code class='w3-codespan'>&lt;audio&gt;</code>.</p>
    <hr>

    <h2>HTML Аудио - Поддержка браузерами</h2>
    <p>В <strong>HTML5</strong> есть три поддерживаемых аудиоформата: MP3, WAV и OGG.</p>
    <p>Поддержка браузерами разных форматов:</p>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:25%'>Браузер</th>
        <th style='width:25%'>MP3</th>
        <th style='width:25%'>WAV</th>
        <th style='width:25%'>OGG</th>
      </tr>
      <tr>
        <td>Edge/IE</td>
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
        <td>YES</td>
        <td>NO</td>
      </tr>
      <tr>
        <td>Opera</td>
        <td>YES</td>
        <td>YES</td>
        <td>YES</td>
      </tr>
    </table>
    <hr><h2>HTML Аудио - Медиа типы</h2>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:50%'>Формат файла</th>
        <th style='width:50%'>Медиа тип</th>
      </tr>
      <tr>
        <td>MP3</td>
        <td>audio/mpeg</td>
      </tr>
      <tr>
        <td>OGG</td>
        <td>audio/ogg</td>
      </tr>
      <tr>
        <td>WAV</td>
        <td>audio/wav</td>
      </tr>
    </table>
    <hr>

    <h2>HTML Аудио - Методы, свойства и события</h2>
    <p>HTML5 определяет методы, свойства и события DOM для элемента <code class='w3-codespan'>&lt;audio&gt;</code>.</p>
    <p>Это позволяет загружать, воспроизводить и приостанавливать аудио, а также устанавливать продолжительность и громкость.</p>
    <p>Есть также события DOM, которые могут извещать вас, когда звук начинает воспроизводиться, приостанавливаться и т.д.</p>
    <p>Для получения полной справки на DOM перейдите к <a href='../tags/ref_av_dom.php'>HTML5 Аудио/Видео DOM Справочника</a>.</p>
    <hr><h2>HTML5 Аудио теги</h2>

    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:150px'>Тег</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href='../tags/tag_audio.php'>&lt;audio&gt;</a></td>
        <td>Определяет звуковой (аудио) контент</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_source.php'>&lt;source&gt;</a></td>
        <td>Определяет множество мультимедийных ресурсов для элементов медиа, таких как &lt;video&gt; и &lt;audio&gt;</td>
      </tr>
    </table>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_video.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_object.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>