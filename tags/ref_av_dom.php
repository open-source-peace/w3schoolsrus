<?php include '../include/head.php'; ?>
<title>HTML Аудио/Видео DOM Справочник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Аудио/Видео DOM Справочник. Какие методы, свойства и события для элементов аудио и видео? Курс по основам HTML5. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
  <h1>HTML <span class='color_h1'>Аудио/Видео</span> DOM Справочник</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_canvas.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_charactersets.php'>Next &#10095;</a>
  </div>
  <hr>

  <h2>HTML Аудио и Видео DOM Справочник</h2>
  <p>HTML5 DOM имеет методы, свойства и события для <code class='w3-codespan'>&lt;audio&gt;</code> и <code class='w3-codespan'>&lt;video&gt;</code> элементов.</p>
  <p>Эти методы, свойства и события позволяют вам манипулировать <code class='w3-codespan'>&lt;audio&gt;</code> и <code class='w3-codespan'>&lt;video&gt;</code> элементами, используя JavaScript.</p>
  <hr>

  <h2>HTML Аудио/Видео Методы</h2>

  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Метод</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='av_met_addtexttrack.php'>addTextTrack()</a></td>
      <td>Добавляет новый текстовый трек к аудио/видео</td>
    </tr>
    <tr>
      <td><a href='av_met_canplaytype.php'>canPlayType()</a></td>
      <td>Проверяет, браузер может воспроизводить указанный тип аудио/видео</td>
    </tr>
    <tr>
      <td><a href='av_met_load.php'>load()</a></td>
      <td>Перегружает аудио/видео элемент</td>
    </tr>
    <tr>
      <td><a href='av_met_play.php'>play()</a></td>
      <td>Начинает воспроизведение аудио/видео</td>
    </tr>
    <tr>
      <td><a href='av_met_pause.php'>pause()</a></td>
      <td>Приостанавливает текущее воспроизведение аудио/видео</td>
    </tr>
  </table>

  <h2>HTML Аудио/Видео Свойства</h2>

  <div class='w3-responsive'>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:25%'>Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href='av_prop_audiotracks.php'>audioTracks</a></td>
        <td>Возвращает объект AudioTrackList, представляющий доступны звуковые дорожки</td>
      </tr>
      <tr>
        <td><a href='av_prop_autoplay.php'>autoplay</a></td>
        <td>Устанавливает или возвращает, следует ли начать воспроизведение аудио/видео, как только оно будет загружено</td>
      </tr>
      <tr>
        <td><a href='av_prop_buffered.php'>buffered</a></td>
        <td>Возвращает объект TimeRanges, представляющий буферизированные части аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_controller.php'>controller</a></td>
        <td>Возвращает объект MediaController, представляющий текущий контроллер медиа аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_controls.php'>controls</a></td>
        <td>Устанавливает или возвращает, должно ли аудио/видео отражать элементы управления (например, воспроизведение/пауза пр.)</td>
      </tr>
      <tr>
        <td>crossOrigin</td>
        <td>Устанавливает или возвращает настройки CORS аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_currentsrc.php'>currentSrc</a></td>
        <td>Возвращает URL текущего аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_currenttime.php'>currentTime</a></td>
        <td>Устанавливает или возвращает текущую позицию воспроизведения в аудио/видео (в секундах)</td>
      </tr>
      <tr>
        <td><a href='av_prop_defaultmuted.php'>defaultMuted</a></td>
        <td>Устанавливает или возвращает аудио/видео по умолчанию</td>
      </tr>
      <tr>
        <td><a href='av_prop_defaultplaybackrate.php'>defaultPlaybackRate</a></td>
        <td>Устанавливает или возвращает стандартную скорость воспроизведения аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_duration.php'>duration</a></td>
        <td>Возвращает продолжительность текущего аудио/видео (в секундах)</td>
      </tr>
      <tr>
        <td><a href='av_prop_ended.php'>ended</a></td>
        <td>Возвращает закончилось ли воспроизведения аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_error.php'>error</a></td>
        <td>Возвращает объект MediaError, представляющий состояние ошибки аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_loop.php'>loop</a></td>
        <td>Устанавливает или возвращает, следует ли повторять аудио/видео после завершения</td>
      </tr>
      <tr>
        <td><a href='av_prop_mediagroup.php'>mediaGroup</a></td>
        <td>Устанавливает или возвращает группу, к которой относится аудио/видео (используется для соединения нескольких аудио/видео элементов)</td>
      </tr>
      <tr>
        <td><a href='av_prop_muted.php'>muted</a></td>
        <td>Устанавливает или возвращает, выключено аудио/видео или нет</td>
      </tr>
      <tr>
        <td><a href='av_prop_networkstate.php'>networkState</a></td>
        <td>Возвращает текущее состояние сети аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_paused.php'>paused</a></td>
        <td>Возвращает если аудио/видео приостановлено либо нет</td>
      </tr>
      <tr>
        <td><a href='av_prop_playbackrate.php'>playbackRate</a></td>
        <td>Устанавливает или возвращает скорость воспроизведения аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_played.php'>played</a></td>
        <td>Возвращает объект TimeRanges, представляющий воспроизводимые части аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_preload.php'>preload</a></td>
        <td>Устанавливает или возвращает, нужно ли загружать аудио/видео при загрузке страницы</td>
      </tr>
      <tr>
        <td><a href='av_prop_readystate.php'>readyState</a></td>
        <td>Возвращает текущее состояние готовности аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_seekable.php'>seekable</a></td>
        <td>Возвращает объект TimeRanges, представляющий доступ для поиска части аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_seeking.php'>seeking</a></td>
        <td>Возвращает, ищет ли пользователь в данный момент аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_prop_src.php'>src</a></td>
        <td>Устанавливает или возвращает текущее источник аудио/видео элемента</td>
      </tr>
      <tr>
        <td><a href='av_prop_startdate.php'>startDate</a></td>
        <td>Возвращает объект Date, представляющий текущий сдвиг времени</td>
      </tr>
      <tr>
        <td><a href='av_prop_texttracks.php'>textTracks</a></td>
        <td>Возвращает объект TextTrackList, представляющий доступные текстовые дорожки</td>
      </tr>
      <tr>
        <td><a href='av_prop_videotracks.php'>videoTracks</a></td>
        <td>Возвращает объект VideoTrackList, представляющий доступные видеотреки</td>
      </tr>
      <tr>
        <td><a href='av_prop_volume.php'>volume</a></td>
        <td>Устанавливает или возвращает громкость аудио/видео</td>
      </tr>
    </table>
  </div>
  <hr>

  <h2>HTML Аудио/Видео События</h2>
  <div class='w3-responsive'>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:25%'>Событие</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href='av_event_abort.php'>abort</a></td>
        <td>Срабатывает, когда загрузка аудио/видео прервана</td>
      </tr>
      <tr>
        <td><a href='av_event_canplay.php'>canplay</a></td>
        <td>Срабатывает, когда браузер может запустить воспроизведение аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_event_canplaythrough.php'>canplaythrough</a></td>
        <td>Срабатывает, когда браузер может воспроизводить аудио/видео без остановки для буферизации</td>
      </tr>
      <tr>
        <td><a href='av_event_durationchange.php'>durationchange</a></td>
        <td>Срабатывает, когда меняется продолжительность аудио/видео</td>
      </tr>
      <tr>
        <td>emptied</td>
        <td>Срабатывает, когда текущий список воспроизведения пуст</td>
      </tr>
      <tr>
        <td><a href='av_event_ended.php'>ended</a></td>
        <td>Срабатывает после завершения текущего списка воспроизведения</td>
      </tr>
      <tr>
        <td><a href='av_event_error.php'>error</a></td>
        <td>Срабатывает, когда произошла ошибка при загрузке аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_event_loadeddata.php'>loadeddata</a></td>
        <td>Срабатывает, когда браузер загружает текущий фрейм (кадр) аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_event_loadedmetadata.php'>loadedmetadata</a></td>
        <td>Срабатывает, когда веб-браузер загрузил метаданные для аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_event_loadstart.php'>loadstart</a></td>
        <td>Срабатывает, когда браузер начинает искать аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_event_pause.php'>pause</a></td>
        <td>Срабатывает, когда аудио/видео было приостановлено</td>
      </tr>
      <tr>
        <td><a href='av_event_play.php'>play</a></td>
        <td>Срабатывает, когда аудио/видео было запущено или больше не приостановлено</td>
      </tr>
      <tr>
        <td><a href='av_event_playing.php'>playing</a></td>
        <td>Срабатывает, когда аудио/видео воспроизводится после паузы или остановки для буферизации</td>
      </tr>
      <tr>
        <td><a href='av_event_progress.php'>progress</a></td>
        <td>Срабатывает, когда браузер загружает аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_event_ratechange.php'>ratechange</a></td>
        <td>Срабатывает при изменении скорости воспроизведения аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_event_seeked.php'>seeked</a></td>
        <td>Срабатывает, когда пользователь заканчивает перемещение/пропуск к новой позиции в аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_event_seeking.php'>seeking</a></td>
        <td>Срабатывает, когда пользователь начинает перемещение/пропуск к новой позиции в аудио/видео</td>
      </tr>
      <tr>
        <td><a href='av_event_stalled.php'>stalled</a></td>
        <td>Срабатывает, когда веб-браузер пытается получить медиа-данные, но данные недоступны</td>
      </tr>
      <tr>
        <td><a href='av_event_suspend.php'>suspend</a></td>
        <td>Срабатывает, когда веб-браузер намеренно не получает медиаданных</td>
      </tr>
      <tr>
        <td><a href='av_event_timeupdate.php'>timeupdate</a></td>
        <td>Срабатывает, когда меняется текущая позиция воспроизведения</td>
      </tr>
      <tr>
        <td><a href='av_event_volumechange.php'>volumechange</a></td>
        <td>Срабатывает при изменении громкости</td>
      </tr>
      <tr>
        <td><a href='av_event_waiting.php'>waiting</a></td>
        <td>Срабатывает, когда видео останавливается, поскольку нужно сделать буферизацию следующего кадра</td>
      </tr>
    </table>
  </div>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_canvas.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_charactersets.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
