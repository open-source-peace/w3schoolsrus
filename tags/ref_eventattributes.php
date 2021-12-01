<?php include '../include/head.php'; ?>
<title>HTML Атрибуты событий. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Атрибуты событий в HTML. Полный справочник HTML атрибутов. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
  <h1>HTML <span class='color_h1'>Атрибуты событий</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_standardattributes.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_colornames.php'>Next &#10095;</a>
  </div>
  <hr>

  <h2>Глобальные атрибуты событий</h2>
  <p><strong>HTML 4</strong> добавил возможность позволить событиям запускать действия в браузере, например, запуск <strong>JavaScript</strong>, когда пользователь нажимает на элемент.</p>
  <p>Чтобы узнать больше о программировании событий, посетите <a href='../js/index.php'>JavaScript Учебник</a>.</p>
  <p>Ниже приведены глобальные атрибуты событий, которые можно добавить к <strong>HTML</strong> элементам, чтобы определить действия событий.</p>
  <hr>

  <h2>Окно атрибутов событий</h2>
  <p>События, что инициируются для объекта окна (применяются к тегу <code class='w3-codespan'>&lt;body&gt;</code>):</p>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:160px'>Атрибут</th>
      <th style='width:75px'>Значение</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='ev_onafterprint.php'>onafterprint</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен после печати документа</td>
    </tr>
    <tr>
      <td><a href='ev_onbeforeprint.php'>onbeforeprint</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен перед печатью документа</td>
    </tr>
    <tr>
      <td><a href='ev_onbeforeunload.php'>onbeforeunload</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда документ будет выгружен</td>
    </tr>
    <tr>
      <td><a href='ev_onerror.php'>onerror</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен при возникновении ошибки</td>
    </tr>
    <tr>
      <td><a href='ev_onhashchange.php'>onhashchange</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда произошло изменение привязки части URL-адреса</td>
    </tr>
    <tr>
      <td><a href='ev_onload.php'>onload</a></td>
      <td><i>script</i></td>
      <td>Запускается после завершения загрузки страницы</td>
    </tr>
    <tr>
      <td>onmessage</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда сообщение срабатывает</td>
    </tr>
    <tr>
      <td><a href='ev_onoffline.php'>onoffline</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда браузер начинает работать в автономном режиме</td>
    </tr>
    <tr>
      <td><a href='ev_ononline.php'>ononline</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда браузер начинает работать в Интернете</td>
    </tr>
    <tr>
      <td>onpagehide</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда пользователь покидает страницу</td>
    </tr>
    <tr>
      <td><a href='ev_onpageshow.php'>onpageshow</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда пользователь переходит на страницу</td>
    </tr>
    <tr>
      <td>onpopstate</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда история окна меняется</td>
    </tr>
    <tr>
      <td><a href='ev_onresize.php'>onresize</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда меняется размер окна веб-браузера</td>
    </tr>
    <tr>
      <td>onstorage</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда область веб-хранилища обновляется</td>
    </tr>
    <tr>
      <td><a href='ev_onunload.php'>onunload</a></td>
      <td><i>script</i></td>
      <td>Запускается после выгрузки страницы (или закрытия окна веб-браузера)</td>
    </tr>
  </table>
  <hr>

  <h2>События формы</h2>
  <p>События, вызванные действиями в форме HTML (применяется к почти всем элементам HTML, но наиболее часто используется в элементах формы):</p>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:160px'>Атрибут</th>
      <th style='width:75px'>Значение</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='ev_onblur.php'>onblur</a></td>
      <td><i>script</i></td>
      <td>Запускает момент, когда элемент теряет фокус</td>
    </tr>
    <tr>
      <td><a href='ev_onchange.php'>onchange</a></td>
      <td><i>script</i></td>
      <td>Запускает момент, когда меняется значение элемента</td>
    </tr>
    <tr>
      <td><a href='ev_oncontextmenu.php'>oncontextmenu</a></td>
      <td><i>script</i></td>
      <td>Скрипт запускается, когда срабатывает контекстное меню</td>
    </tr>
    <tr>
      <td><a href='ev_onfocus.php'>onfocus</a></td>
      <td><i>script</i></td>
      <td>Запускает момент, когда элемент получает фокус</td>
    </tr>
    <tr>
      <td><a href='ev_oninput.php'>oninput</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен, когда элемент получает ввод пользователя</td>
    </tr>
    <tr>
      <td><a href='ev_oninvalid.php'>oninvalid</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда элемент не действителен</td>
    </tr>
    <tr>
      <td><a href='ev_onreset.php'>onreset</a></td>
      <td><i>script</i></td>
      <td>Срабатывает при нажимании кнопки 'Сброс' в форме</td>
    </tr>
    <tr>
      <td><a href='ev_onsearch.php'>onsearch</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда пользователь записывает что-то в поле поиска (для &lt;input='search'&gt;)</td>
    </tr>
    <tr>
      <td><a href='ev_onselect.php'>onselect</a></td>
      <td><i>script</i></td>
      <td>Запускается после выбора текста в элементе</td>
    </tr>
    <tr>
      <td><a href='ev_onsubmit.php'>onsubmit</a></td>
      <td><i>script</i></td>
      <td>Запускается во время отправки формы</td>
    </tr>
  </table>
  <hr>

  <h2>События с помощью клавиатуры</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:160px'>Атрибут</th>
      <th style='width:75px'>Значение</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='ev_onkeydown.php'>onkeydown</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда пользователь нажимает клавишу</td>
    </tr>
    <tr>
      <td><a href='ev_onkeypress.php'>onkeypress</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда пользователь нажимает клавишу</td>
    </tr>
    <tr>
      <td><a href='ev_onkeyup.php'>onkeyup</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда пользователь отпускает клавишу</td>
    </tr>
  </table>
  <hr>

  <h2>События с помощью мыши</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:160px'>Атрибут</th>
      <th style='width:75px'>Значение</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='ev_onclick.php'>onclick</a></td>
      <td><i>script</i></td>
      <td>Запускается при нажимании мыши на элементе</td>
    </tr>
    <tr>
      <td><a href='ev_ondblclick.php'>ondblclick</a></td>
      <td><i>script</i></td>
      <td>Запускается при двойном клике мыши на элементе</td>
    </tr>
    <tr>
      <td><a href='ev_onmousedown.php'>onmousedown</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда кнопка мыши нажата на элементе</td>
    </tr>
    <tr>
      <td><a href='ev_onmousemove.php'>onmousemove</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда указатель мыши перемещается над элементом</td>
    </tr>
    <tr>
      <td><a href='ev_onmouseout.php'>onmouseout</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда указатель мыши выходит за пределы элемента</td>
    </tr>
    <tr>
      <td><a href='ev_onmouseover.php'>onmouseover</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда указатель мыши перемещается над элементом</td>
    </tr>
    <tr>
      <td><a href='ev_onmouseup.php'>onmouseup</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда кнопка мишы отпускается над элементом</td>
    </tr>
    <tr>
      <td>onmousewheel</td>
      <td><i>script</i></td>
      <td><span class='deprecated'>Устаревший.</span> Используйте атрибут <a href='ev_onwheel.php'>onwheel</a> вместо этого</td>
    </tr>
    <tr>
      <td><a href='ev_onwheel.php'>onwheel</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда колесо мыши прокручивается вверх или вниз над элементом</td>
    </tr>
  </table>
  <hr>

  <h2>События перетягивания</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:160px'>Атрибут</th>
      <th style='width:75px'>Значение</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='ev_ondrag.php'>ondrag</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда элемент перетягивается</td>
    </tr>
    <tr>
      <td><a href='ev_ondragend.php'>ondragend</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен после завершения операции перетягивания</td>
    </tr>
    <tr>
      <td><a href='ev_ondragenter.php'>ondragenter</a></td>
      <td><i>script</i></td>
      <td>Скрипт буде запущен когда элемент перетягивается к действительной цели скидывания</td>
    </tr>
    <tr>
      <td><a href='ev_ondragleave.php'>ondragleave</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда элемент оставляет действительную цель скидывания</td>
    </tr>
    <tr>
      <td style='height: 32px'><a href='ev_ondragover.php'>ondragover</a></td>
      <td style='height: 32px'><i>script</i></td>
      <td style='height: 32px'>Скрипт будет запущен когда элемент перетягивается через действительную цель скидывания</td>
    </tr>
    <tr>
      <td><a href='ev_ondragstart.php'>ondragstart</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен в начале перетягивания</td>
    </tr>
    <tr>
      <td><a href='ev_ondrop.php'>ondrop</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда перетягивается элемент</td>
    </tr>
    <tr>
      <td><a href='ev_onscroll.php'>onscroll</a></td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда полоса прокрутки элемента прокручивается</td>
    </tr>
  </table>
  <hr>

  <h2>События буфера обмена</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:160px'>Атрибут</th>
      <th style='width:75px'>Значение</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='ev_oncopy.php'>oncopy</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда пользователь копирует содержимое элемента</td>
    </tr>
    <tr>
      <td><a href='ev_oncut.php'>oncut</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда пользователь сокращает содержимое элемента</td>
    </tr>
    <tr>
      <td><a href='ev_onpaste.php'>onpaste</a></td>
      <td><i>script</i></td>
      <td>Запускается, когда пользователь вставляет определённое содержание в элемент</td>
    </tr>
  </table>
  <hr>

  <h2>События Медиа</h2>
  <p>События, которые запускаются средствами медиа, такими как видео, изображения и аудио (применяются ко всем элементам HTML, но наиболее часто встречаются в медиа-элементах, например &lt;audio&gt;, &lt;embed&gt;, &lt;img&gt;, &lt;object&gt; и &lt;video&gt;).</p>
  <div class='w3-note w3-panel'>
    <p><strong>Совет:</strong> Посетите <a href='ref_av_dom.php'>HTML Аудио и Видео DOM Справочник</a> для получения более подробной информации.</p>
  </div>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:180px'>Атрибут</th>
      <th style='width:75px'>Значение</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td>onabort</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен во время отмены</td>
    </tr>
    <tr>
      <td>oncanplay</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда файл готов к началу воспроизведения (когда он буферизирован для начала)</td>
    </tr>
    <tr>
      <td>oncanplaythrough</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда файл можно воспроизвести до конца, не останавливаясь для буферизации</td>
    </tr>
    <tr>
      <td>oncuechange</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда меняется сигнал в элементе &lt;track&gt;</td>
    </tr>
    <tr>
      <td>ondurationchange</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда меняется продолжительность медиа</td>
    </tr>
    <tr>
      <td>onemptied</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда случится что-то плохое и файл неожиданно становится недоступным (например, неожиданно отключается)</td>
    </tr>
    <tr>
      <td>onended</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда медиа достигли конца (полезное событие для сообщений типа 'спасибо за прослушивание/просмотр')</td>
    </tr>
    <tr>
      <td>onerror</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда возникает ошибка во время загрузки файла</td>
    </tr>
    <tr>
      <td>onloadeddata</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда медиа-данные загружены</td>
    </tr>
    <tr>
      <td>onloadedmetadata</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда загружаются метаданные (например, размеры и продолжительность)</td>
    </tr>
    <tr>
      <td>onloadstart</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда файл начинает загружаться до того, как что-то действительно загружено</td>
    </tr>
    <tr>
      <td>onpause</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда медиа приостановлено или пользователем, или программно</td>
    </tr>
    <tr>
      <td>onplay</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда медиа готово к началу воспроизведения</td>
    </tr>
    <tr>
      <td>onplaying</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда медиа фактически начало воспроизводиться</td>
    </tr>
    <tr>
      <td>onprogress</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда браузер находится в процессе получения медиаданных</td>
    </tr>
    <tr>
      <td>onratechange</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен каждый раз, когда скорость воспроизведения меняется (например, когда пользователь переключается на режим медленной или быстрой перемотки вперёд)</td>
    </tr>
    <tr>
      <td>onseeked</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда атрибут ищет значение false, что указывает, что поиск закончился</td>
    </tr>
    <tr>
      <td>onseeking</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда атрибут ищет значение true, что указывает на то, что поиск является активным</td>
    </tr>
    <tr>
      <td>onstalled</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда браузер не может получить данные медиа по какой-либо причине</td>
    </tr>
    <tr>
      <td>onsuspend</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен при получении медиаданных, останавливается перед полной загрузкой по какой-либо причине</td>
    </tr>
    <tr>
      <td>ontimeupdate</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда меняется позиция воспроизведения (например, когда пользователь быстро переходит в другую точку на медиа)</td>
    </tr>
    <tr>
      <td>onvolumechange</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен каждый раз, когда меняется громкость (включая настройки громкости на 'выключение звука')</td>
    </tr>
    <tr>
      <td>onwaiting</td>
      <td><i>script</i></td>
      <td>Скрипт будет запущен когда медиа приостановлено, но ожидается, что его будет возобновлено (например, когда медиа приостанавливается для буферизации большого объёма данных)</td>
    </tr>
  </table>
  <hr>

  <h2>Другие События</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:160px'>Атрибут</th>
      <th style='width:75px'>Значение</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='ev_ontoggle.php'>ontoggle</a></td>
      <td><i>script</i></td>
      <td>Запустится когда пользователь откроет или закроет элемент &lt;details&gt;</td>
    </tr>
  </table>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_standardattributes.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_colornames.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
