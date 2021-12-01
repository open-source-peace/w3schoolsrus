<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;audio&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='>HTML Тег &lt;audio&gt;. Определяет аудио-содержимое. Как добавить аудиофайл на веб-страницу? Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML тег <span class="color_h1">&lt;audio&gt;</span></h1>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_aside.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_b.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
    <hr>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Играть звук:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;audio controls&gt;<br>
            &nbsp; &lt;source src=&quot;horse.ogg&quot; type=&quot;audio/ogg&quot;&gt;<br>
            &nbsp; &lt;source src=&quot;horse.mp3&quot; type=&quot;audio/mpeg&quot;&gt;<br>
            &nbsp; Ваш браузер не поддерживает элемент audio.<br>
            &lt;/audio&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml5_audio.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Определение и использование</h2>
    <p>Тег <code>&lt;audio&gt;</code> определяет звук, например музыку или другие аудиопотоки.</p>
    <p>В настоящее время существует 3 поддерживаемых формата файлов для элемента <code>&lt;audio&gt;</code>: MP3, WAV и OGG:</p>
    <table class="w3-table-all notranslate" id="table1">
        <tr>
            <th style="width:25%">Браузер</th>
            <th style="width:25%">MP3</th>
            <th style="width:25%">WAV</th>
            <th style="width:25%">OGG</th>
        </tr>
        <tr>
            <td>Internet Explorer</td>
            <td>YES</td>
            <td style="color:red">NO</td>
            <td style="color:red">NO</td>
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
            <td style="color:red">NO</td>
        </tr>
        <tr>
            <td>Opera</td>
            <td>YES</td>
            <td>YES</td>
            <td>YES</td>
        </tr>
    </table>

    <h3>MIME Типы для аудио форматов</h3>
    <table class="w3-table-all notranslate" id="table2">
        <tr>
            <th style="width:50%">Формат</th>
            <th style="width:50%">MIME-type</th>
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

    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, которая полностью поддерживает элемент.</p>
    <table class="browserref notranslate">
        <tr>
            <th style="width:20%;font-size:16px;text-align:left;">Элемент</th>
            <th style="width:16%;" class="bsChrome" title="Chrome"></th>
            <th style="width:16%;" class="bsEdge" title="Internet Explorer / Edge"></th>
            <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
            <th style="width:16%;" class="bsSafari" title="Safari"></th>
            <th style="width:16%;" class="bsOpera" title="Opera"></th>
        </tr><tr>
            <td style="text-align:left;">&lt;audio&gt;</td>
            <td>4.0</td>
            <td>9.0</td>
            <td>3.5</td>
            <td>4.0</td>
            <td>10.5</td>
        </tr>
    </table>

    <hr>

    <h2>Отличия между HTML 4.01 и HTML5</h2>
    <p>Тег <code>&lt;audio&gt;</code> новый в HTML5.</p>
    <hr>

    <h2>Советы и примечания</h2>
    <p><b>Примечание:</b> Любой текст внутри между <code>&lt;audio&gt;</code> и <code>&lt;/audio&gt;</code> будет отображаться в браузерах, которые не поддерживают тег <code>&lt;audio&gt;</code>.</p>
    <hr>

    <h2>Атрибуты</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Атрибут</th>
            <th style="width:15%">Значение</th>
            <th style="width:55%">Описание</th>
        </tr>
        <tr>
            <td><a href="att_audio_autoplay.php">autoplay</a></td>
            <td>autoplay</td>
            <td>Указывает, что звук начнет воспроизводиться, как только он будет готов</td>
        </tr>
        <tr>
            <td><a href="att_audio_controls.php">controls</a></td>
            <td>controls</td>
            <td>Указывает, что должны отображаться элементы управления звуком (например, кнопка воспроизведения/паузы и т.д.)</td>
        </tr>
        <tr>
            <td><a href="att_audio_loop.php">loop</a></td>
            <td>loop</td>
            <td>Указывает, что звук будет начинаться заново, каждый раз, когда он закончится</td>
        </tr>
        <tr>
            <td><a href="att_audio_muted.php">muted</a></td>
            <td>muted</td>
            <td>Указывает, что аудиовыход должен быть отключен</td>
        </tr>
        <tr>
            <td><a href="att_audio_preload.php">preload</a></td>
            <td>auto<br>
                metadata<br>
                none</td>
            <td>Определяет, будет ли загружаться звук при загрузке страницы</td>
        </tr>
        <tr>
            <td><a href="att_audio_src.php">src</a></td>
            <td><i>URL</i></td>
            <td>Определяет URL аудиофайла</td>
        </tr>
    </table>

    <h2>Глобальные атрибуты</h2>
    <p>Тег <code>&lt;audio&gt;</code> также поддерживает <a href="ref_standardattributes.php">Глобальные атрибуты в HTML</a>.</p>
    <hr>
    <h2>Атрибуты событий</h2>
    <p>Тег <code>&lt;audio&gt;</code> также поддерживает <a href="ref_eventattributes.php">Атрибуты событий в HTML</a>.</p>
    <hr>
    <h2>Связанные страницы</h2>
    <p>HTML DOM справочник: <a href="ref_av_dom.php">HTML Аудио/Видео DOM Справочник</a></p>
    <hr>
    <h2>Настройки CSS по умолчанию</h2>
    <p>Отсутствуют.</p>
    <hr>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_aside.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_b.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>