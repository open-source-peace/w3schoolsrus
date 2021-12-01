<?php include '../include/head.php'; ?>
<title>HTML Справочник атрибутов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Полный справочник HTML атрибутов. Все атрибуты HTML5. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
  <h1>HTML <span class='color_h1'>Атрибуты</span>. Справочник</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_html_browsersupport.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_standardattributes.php'>Next &#10095;</a>
  </div>
  <hr>

  <h2>Все HTML Атрибуты</h2>
  <p>В данной таблице собраны <strong>все атрибуты</strong>, используемые в <strong>HTML5</strong> на данный момент.</p>
  <div class='w3-responsive'>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:25%; height: 37px;'>Атрибуты</th>
        <th style='height: 37px'>Принадлежность</th>
        <th style='height: 37px'>Описание</th>
      </tr>
      <tr>
        <td><a href='att_accept.php'>accept</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a></td>
        <td>Указывает типы файлов, которые принимает сервер (только для type='file')</td>
      </tr>
      <tr>
        <td><a href='att_accept-charset.php'>accept-charset</a></td>
        <td><a href='tag_form.php'>&lt;form&gt;</a></td>
        <td>Указывает кодировки символов, которые будут использоваться для отправки формы</td>
      </tr>
      <tr>
        <td><a href='att_accesskey.php'>accesskey</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Указывает сочетание клавиш для активации / фокусировки элемента</td>
      </tr>
      <tr>
        <td><a href='att_action.php'>action</a></td>
        <td><a href='tag_form.php'>&lt;form&gt;</a></td>
        <td>Указывает, куда отправлять данные формы при отправке формы</td>
      </tr>
      <tr>
        <td>align</td>
        <td><span class='deprecated'>Не поддерживается в HTML5.</span></td>
        <td>Задает выравнивание в соответствии с окружающими элементами. Используйте CSS</td>
      </tr>
      <tr>
        <td><a href='att_alt.php'>alt</a></td>
        <td><a href='tag_area.php'>&lt;area&gt;</a>, <a href='tag_img.php'>&lt;img&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a></td>
        <td>Задает альтернативный текст, если исходный элемент не отображается</td>
      </tr>
      <tr>
        <td><a href='att_async.php'>async</a></td>
        <td><a href='tag_script.php'>&lt;script&gt;</a></td>
        <td>Указывает, что скрипт выполняется асинхронно (только для внешних скриптов)</td>
      </tr>
      <tr>
        <td><a href='att_autocomplete.php'>autocomplete</a></td>
        <td><a href='tag_form.php'>&lt;form&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a></td>
        <td>Указывает, будет ли в элементе &lt;form&gt; или &lt;input&gt;, должен иметь автозаполнения enabled</td>
      </tr>
      <tr>
        <td><a href='att_autofocus.php'>autofocus</a></td>
        <td><a href='tag_button.php'>&lt;button&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_select.php'>&lt;select&gt;</a>, <a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Указывает, что элемент должен автоматически получать фокус при загрузке страницы</td>
      </tr>
      <tr>
        <td><a href='att_autoplay.php'>autoplay</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Указывает, что воспроизведение аудио/видео начнется, как только оно будет готово</td>
      </tr>
      <tr>
        <td>bgcolor</td>
        <td><span class='deprecated'>Не поддерживается в HTML 5.</span></td>
        <td>Задает цвет фона элемента. Используйте CSS</td>
      </tr>
      <tr>
        <td>border</td>
        <td><span class='deprecated'>Не поддерживается в HTML 5.</span></td>
        <td>Задает ширину границы элемента. Используйте CSS</td>
      </tr>
      <tr>
        <td><a href='att_charset.php'>charset</a></td>
        <td><a href='tag_meta.php'>&lt;meta&gt;</a>, <a href='tag_script.php'>&lt;script&gt;</a></td>
        <td>Указывает кодировку символов</td>
      </tr>
      <tr>
        <td><a href='att_checked.php'>checked</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a></td>
        <td>Указывает, что элемент &lt;input&gt; должен быть предварительно выбран при загрузке страницы (для type=&quot;checkbox&quot; или type=&quot;radio&quot;)</td>
      </tr>
      <tr>
        <td><a href='att_cite.php'>cite</a></td>
        <td>&lt;blockquote&gt;, <a href='tag_del.php'>&lt;del&gt;</a>, <a href='tag_ins.php'>&lt;ins&gt;</a>, &lt;q&gt;</td>
        <td>Задает URL, который объясняет цитату / удаленный / вставленный текст</td>
      </tr>
      <tr>
        <td><a href='att_class.php'>class</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Задает одно или несколько имен классов для элемента (ссылается на класс в таблице стилей)</td>
      </tr>
      <tr>
        <td>color</td>
        <td><span class='deprecated'>Не поддерживается в HTML 5.</span></td>
        <td>Задает цвет текста элемента. Используйте CSS</td>
      </tr>
      <tr>
        <td><a href='att_cols.php'>cols</a></td>
        <td><a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Задает видимую ширину текстовой области</td>
      </tr>
      <tr>
        <td><a href='att_colspan.php'>colspan</a></td>
        <td><a href='tag_td.php'>&lt;td&gt;</a>, <a href='tag_th.php'>&lt;th&gt;</a></td>
        <td>Указывает количество столбцов, которое должна охватывать ячейка таблицы</td>
      </tr>
      <tr>
        <td><a href='att_content.php'>content</a></td>
        <td><a href='tag_meta.php'>&lt;meta&gt;</a></td>
        <td>Дает значение, связанное с http-equiv или атрибутом name</td>
      </tr>
      <tr>
        <td><a href='att_contenteditable.php'>contenteditable</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Указывает, является ли содержимое элемента редактируемым или нет</td>
      </tr>
      <tr>
        <td><a href='att_contextmenu.php'>contextmenu</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Задает контекстное меню для элемента. Контекстное меню появляется, когда пользователь щелкает правой кнопкой мыши на элементе</td>
      </tr>
      <tr>
        <td><a href='att_controls.php'>controls</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Указывает, что должны отображаться элементы управления аудио/видео (например, кнопка воспроизведения / паузы и т. д)</td>
      </tr>
      <tr>
        <td><a href='att_coords.php'>coords</a></td>
        <td><a href='tag_area.php'>&lt;area&gt;</a></td>
        <td>Задает координаты области</td>
      </tr>
      <tr>
        <td><a href='att_data.php'>data</a></td>
        <td><a href='tag_object.php'>&lt;object&gt;</a></td>
        <td>Задает URL ресурса, используемого объектом</td>
      </tr>
      <tr>
        <td><a href='att_data-.php'>data-*</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Используется для хранения личных данных пользователя на странице или в приложении</td>
      </tr>
      <tr>
        <td><a href='att_datetime.php'>datetime</a></td>
        <td><a href='tag_del.php'>&lt;del&gt;</a>, <a href='tag_ins.php'>&lt;ins&gt;</a>, <a href='tag_time.php'>&lt;time&gt;</a></td>
        <td>Указывает дату и время</td>
      </tr>
      <tr>
        <td><a href='att_default.php'>default</a></td>
        <td><a href='tag_track.php'>&lt;track&gt;</a></td>
        <td>Указывает, что трек должен быть включен, если предпочтения пользователя не указывают, что другой трек будет более подходящим</td>
      </tr>
      <tr>
        <td><a href='att_defer.php'>defer</a></td>
        <td><a href='tag_script.php'>&lt;script&gt;</a></td>
        <td>Указывает, что сценарий выполняется после завершения синтаксического анализа страницы (только для внешних сценариев)</td>
      </tr>
      <tr>
        <td><a href='att_dir.php'>dir</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Задает направление текста для содержимого элемента</td>
      </tr>
      <tr>
        <td><a href='att_dirname.php'>dirname</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Указывает, что направление текста будет отправлено</td>
      </tr>
      <tr>
        <td><a href='att_disabled.php'>disabled</a></td>
        <td><a href='tag_button.php'>&lt;button&gt;</a>, <a href='tag_fieldset.php'>&lt;fieldset&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a>, &lt;optgroup&gt;, <a href='tag_option.php'>&lt;option&gt;</a>, <a href='tag_select.php'>&lt;select&gt;</a>,
          <a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Указывает, что указанный элементы элемент/группа должны быть отключены</td>
      </tr>
      <tr>
        <td><a href='att_download.php'>download</a></td>
        <td><a href='tag_a.php'>&lt;a&gt;</a>, <a href='tag_area.php'>&lt;area&gt;</a></td>
        <td>Указывает, что целевой объект будет загружен при нажатии пользователем гиперссылки</td>
      </tr>
      <tr>
        <td><a href='att_draggable.php'>draggable</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Указывает, является ли элемент перетаскиваемым или нет</td>
      </tr>
      <tr>
        <td><a href='att_dropzone.php'>dropzone</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Указывает, копируются, перемещаются или связываются перетаскиваемые данные</td>
      </tr>
      <tr>
        <td><a href='att_enctype.php'>enctype</a></td>
        <td><a href='tag_form.php'>&lt;form&gt;</a></td>
        <td>Указывает, как данные формы должны быть закодированы при отправке на сервер (только для method=&quot;post&quot;)</td>
      </tr>
      <tr>
        <td><a href='att_for.php'>for</a></td>
        <td>&lt;label&gt;, <a href='tag_output.php'>&lt;output&gt;</a></td>
        <td>Определяет форму элемента(ов) метки/расчет обязан</td>
      </tr>
      <tr>
        <td><a href='att_form.php'>form</a></td>
        <td><a href='tag_button.php'>&lt;button&gt;</a>, <a href='tag_fieldset.php'>&lt;fieldset&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a>, &lt;label&gt;, <a href='tag_meter.php'>&lt;meter&gt;</a>, <a href='tag_object.php'>&lt;object&gt;</a>,
          <a href='tag_output.php'>&lt;output&gt;</a>, <a href='tag_select.php'>&lt;select&gt;</a>, <a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Задает имя формы элемент принадлежит</td>
      </tr>
      <tr>
        <td><a href='att_formaction.php'>formaction</a></td>
        <td><a href='tag_button.php'>&lt;button&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a></td>
        <td>Указывает, куда отправлять данные формы при отправке. Только для type=&quot;submit&quot;</td>
      </tr>
      <tr>
        <td><a href='att_headers.php'>headers</a></td>
        <td><a href='tag_td.php'>&lt;td&gt;</a>, <a href='tag_th.php'>&lt;th&gt;</a></td>
        <td>Задает одну или несколько ячеек заголовков, с которыми связана ячейка</td>
      </tr>
      <tr>
        <td><a href='att_height.php'>height</a></td>
        <td>&lt;canvas&gt;, <a href='tag_embed.php'>&lt;embed&gt;</a>, <a href='tag_iframe.php'>&lt;iframe&gt;</a>, <a href='tag_img.php'>&lt;img&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_object.php'>&lt;object&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Задает высоту элемента</td>
      </tr>
      <tr>
        <td><a href='att_hidden.php'>hidden</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Указывает, что элемент еще не релевантен или больше не имеет значения</td>
      </tr>
      <tr>
        <td><a href='att_high.php'>high</a></td>
        <td><a href='tag_meter.php'>&lt;meter&gt;</a></td>
        <td>Задает диапазон, который считается высоким значением</td>
      </tr>
      <tr>
        <td><a href='att_href.php'>href</a></td>
        <td><a href='tag_a.php'>&lt;a&gt;</a>, <a href='tag_area.php'>&lt;area&gt;</a>, <a href='tag_base.php'>&lt;base&gt;</a>, <a href='tag_link.php'>&lt;link&gt;</a></td>
        <td>Указывает URL страницы, на которую переходит ссылка</td>
      </tr>
      <tr>
        <td><a href='att_hreflang.php'>hreflang</a></td>
        <td><a href='tag_a.php'>&lt;a&gt;</a>, <a href='tag_area.php'>&lt;area&gt;</a>, <a href='tag_link.php'>&lt;link&gt;</a></td>
        <td>Указывает язык связанного документа</td>
      </tr>
      <tr>
        <td><a href='att_http-equiv.php'>http-equiv</a></td>
        <td><a href='tag_meta.php'>&lt;meta&gt;</a></td>
        <td>Предоставляет заголовок HTTP для информации / значения атрибута содержания</td>
      </tr>
      <tr>
        <td><a href='att_id.php'>id</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Задает уникальный идентификатор элемента</td>
      </tr>
      <tr>
        <td><a href='att_ismap.php'>ismap</a></td>
        <td><a href='tag_img.php'>&lt;img&gt;</a></td>
        <td>Задает изображение в качестве серверной карты изображений</td>
      </tr>
      <tr>
        <td><a href='att_kind.php'>kind</a></td>
        <td><a href='tag_track.php'>&lt;track&gt;</a></td>
        <td>Указывает тип текстовой дорожки</td>
      </tr>
      <tr>
        <td><a href='att_label.php'>label</a></td>
        <td><a href='tag_track.php'>&lt;track&gt;</a>, <a href='tag_option.php'>&lt;option&gt;</a>, <a href='tag_optgroup.php'>&lt;optgroup&gt;</a></td>
        <td>Задает заголовок текстовой дорожки</td>
      </tr>
      <tr>
        <td><a href='att_lang.php'>lang</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Задает язык содержимого элемента</td>
      </tr>
      <tr>
        <td><a href='att_list.php'>list</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a></td>
        <td>Относится к элементу &lt;datalist&gt;, который содержит предопределенные параметры для элемента &lt;input&gt;</td>
      </tr>
      <tr>
        <td><a href='att_loop.php'>loop</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Указывает, что аудио / видео будет начинаться снова, каждый раз, когда он будет завершено</td>
      </tr>
      <tr>
        <td><a href='att_low.php'>low</a></td>
        <td><a href='tag_meter.php'>&lt;meter&gt;</a></td>
        <td>Определяет диапазон, который считается низким значением</td>
      </tr>
      <tr>
        <td><a href='att_manifest.php'>manifest</a></td>
        <td><a href='tag_html.php'>&lt;html&gt;</a></td>
        <td>Указывает расположение манифеста кэша документа</td>
      </tr>
      <tr>
        <td><a href='att_max.php'>max</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_meter.php'>&lt;meter&gt;</a>, <a href='tag_progress.php'>&lt;progress&gt;</a></td>
        <td>Задает максимальное значение</td>
      </tr>
      <tr>
        <td><a href='att_maxlength.php'>maxlength</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Задает максимальное количество символов, разрешенных в элементе</td>
      </tr>
      <tr>
        <td><a href='att_media.php'>media</a></td>
        <td><a href='tag_a.php'>&lt;a&gt;</a>, <a href='tag_area.php'>&lt;area&gt;</a>, <a href='tag_link.php'>&lt;link&gt;</a>, <a href='tag_source.php'>&lt;source&gt;</a>, <a href='tag_style.php'>&lt;style&gt;</a></td>
        <td>Указывает, для какого носителя / устройства оптимизирован связанный документ</td>
      </tr>
      <tr>
        <td><a href='att_method.php'>method</a></td>
        <td><a href='tag_form.php'>&lt;form&gt;</a></td>
        <td>Задает метод HTTP, используемый при отправке данных формы</td>
      </tr>
      <tr>
        <td><a href='att_min.php'>min</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_meter.php'>&lt;meter&gt;</a></td>
        <td>Задает минимальное значение</td>
      </tr>
      <tr>
        <td><a href='att_multiple.php'>multiple</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_select.php'>&lt;select&gt;</a></td>
        <td>Указывает, что пользователь может ввести несколько значений</td>
      </tr>
      <tr>
        <td><a href='att_muted.php'>muted</a></td>
        <td><a href='tag_video.php'>&lt;video&gt;</a>, <a href='tag_audio.php'>&lt;audio&gt;</a></td>
        <td>Указывает, что аудиовыход видео должен быть отключен</td>
      </tr>
      <tr>
        <td><a href='att_name.php'>name</a></td>
        <td><a href='tag_button.php'>&lt;button&gt;</a>, <a href='tag_fieldset.php'>&lt;fieldset&gt;</a>, <a href='tag_form.php'>&lt;form&gt;</a>, <a href='tag_iframe.php'>&lt;iframe&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_map.php'>&lt;map&gt;</a>, <a href='tag_meta.php'>&lt;meta&gt;</a>,
          <a href='tag_object.php'>&lt;object&gt;</a>, <a href='tag_output.php'>&lt;output&gt;</a>, <a href='tag_param.php'>&lt;param&gt;</a>, <a href='tag_select.php'>&lt;select&gt;</a>, <a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Задает имя элемента</td>
      </tr>
      <tr>
        <td><a href='att_novalidate.php'>novalidate</a></td>
        <td><a href='tag_form.php'>&lt;form&gt;</a></td>
        <td>Указывает, что форма не должна проверяться при отправке</td>
      </tr>
      <tr>
        <td><a href='att_onabort.php'>onabort</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_embed.php'>&lt;embed&gt;</a>, <a href='tag_img.php'>&lt;img&gt;</a>, <a href='tag_object.php'>&lt;object&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий для запуска при прерывании</td>
      </tr>
      <tr>
        <td><a href='att_onafterprint.php'>onafterprint</a></td>
        <td><a href='tag_body.php'>&lt;body&gt;</a></td>
        <td>Сценарий, запускаемый после печати документа</td>
      </tr>
      <tr>
        <td><a href='att_onbeforeprint.php'>onbeforeprint</a></td>
        <td><a href='tag_body.php'>&lt;body&gt;</a></td>
        <td>Сценарий, выполняемый перед печатью документа</td>
      </tr>
      <tr>
        <td><a href='att_onbeforeunload.php'>onbeforeunload</a></td>
        <td><a href='tag_body.php'>&lt;body&gt;</a></td>
        <td>Скрипт будет выполняться, когда документ будет выгружен</td>
      </tr>
      <tr>
        <td><a href='att_onblur.php'>onblur</a></td>
        <td>Все видимые элементы.</td>
        <td>Сценарий для запуска, когда элемент теряет фокус</td>
      </tr>
      <tr>
        <td><a href='att_oncanplay.php'>oncanplay</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_embed.php'>&lt;embed&gt;</a>, <a href='tag_object.php'>&lt;object&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий для запуска, когда файл готов к запуску воспроизведения (когда он достаточно буферизован, чтобы начать)</td>
      </tr>
      <tr>
        <td><a href='att_oncanplaythrough.php'>oncanplaythrough</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Скрипт должен быть запущен, когда файл может быть воспроизведен до конца без паузы для буферизации</td>
      </tr>
      <tr>
        <td><a href='att_onchange.php'>onchange</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при изменении значения элемента</td>
      </tr>
      <tr>
        <td><a href='att_onclick.php'>onclick</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при щелчке по элементу</td>
      </tr>
      <tr>
        <td><a href='att_oncontextmenu.php'>oncontextmenu</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при вызове контекстного меню</td>
      </tr>
      <tr>
        <td><a href='att_oncopy.php'>oncopy</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при копировании содержимого элемента</td>
      </tr>
      <tr>
        <td><a href='att_oncuechange.php'>oncuechange</a></td>
        <td><a href='tag_track.php'>&lt;track&gt;</a></td>
        <td>Сценарий, который будет выполняться при изменении ключа в элементе <a href='tag_track.php'>&lt;track&gt;</a></td>
      </tr>
      <tr>
        <td><a href='att_oncut.php'>oncut</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при вырезании содержимого элемента</td>
      </tr>
      <tr>
        <td><a href='att_ondblclick.php'>ondblclick</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при двойном щелчке по элементу</td>
      </tr>
      <tr>
        <td><a href='att_ondrag.php'>ondrag</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при перетаскивании элемента</td>
      </tr>
      <tr>
        <td><a href='att_ondragend.php'>ondragend</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый в конце операции перетаскивания</td>
      </tr>
      <tr>
        <td><a href='att_ondragenter.php'>ondragenter</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при перетаскивании элемента в допустимый целевой объект</td>
      </tr>
      <tr>
        <td><a href='att_ondragleave.php'>ondragleave</a></td>
        <td>Все видимые элементы.</td>
        <td>Сценарий для запуска, когда элемент оставляет допустимый целевой объект отбрасывания</td>
      </tr>
      <tr>
        <td><a href='att_ondragover.php'>ondragover</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при перетаскивании элемента по допустимому целевому объекту</td>
      </tr>
      <tr>
        <td><a href='att_ondragstart.php'>ondragstart</a></td>
        <td>Все видимые элементы.</td>
        <td>Сценарий для запуска в начале операции перетаскивания</td>
      </tr>
      <tr>
        <td><a href='att_ondrop.php'>ondrop</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при перетаскивании элемента</td>
      </tr>
      <tr>
        <td><a href='att_ondurationchange.php'>ondurationchange</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий для запуска при изменении длины носителя</td>
      </tr>
      <tr>
        <td><a href='att_onemptied.php'>onemptied</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий, который нужно запустить когда что-то плохое случается и архив внезапно недоступен (как непредвиденно разъединения)</td>
      </tr>
      <tr>
        <td><a href='att_onended.php'>onended</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Скрипт должен быть запущен, когда в СМИ уже дойдет до конца (полезное мероприятие для сообщения &quot;спасибо за прослушивание&quot;)</td>
      </tr>
      <tr>
        <td><a href='att_onerror.php'>onerror</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_body.php'>&lt;body&gt;</a>, <a href='tag_embed.php'>&lt;embed&gt;</a>, <a href='tag_img.php'>&lt;img&gt;</a>, <a href='tag_object.php'>&lt;object&gt;</a>, <a href='tag_script.php'>&lt;script&gt;</a>, <a href='tag_style.php'>&lt;style&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий для запуска при возникновении ошибки</td>
      </tr>
      <tr>
        <td><a href='att_onfocus.php'>onfocus</a></td>
        <td>Все видимые элементы.</td>
        <td>Сценарий для запуска, когда элемент получает фокус</td>
      </tr>
      <tr>
        <td><a href='att_onhashchange.php'>onhashchange</a></td>
        <td><a href='tag_body.php'>&lt;body&gt;</a></td>
        <td>Скрипт, запускаемый при изменении привязки URL</td>
      </tr>
      <tr>
        <td><a href='att_oninput.php'>oninput</a></td>
        <td>Все видимые элементы.</td>
        <td>Сценарий для запуска, когда элемент получает пользовательский ввод</td>
      </tr>
      <tr>
        <td><a href='att_oninvalid.php'>oninvalid</a></td>
        <td>Все видимые элементы.</td>
        <td>Сценарий для запуска при недопустимом элементе</td>
      </tr>
      <tr>
        <td><a href='att_onkeydown.php'>onkeydown</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при нажатии пользователем клавиши</td>
      </tr>
      <tr>
        <td><a href='att_onkeypress.php'>onkeypress</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при нажатии пользователем клавиши</td>
      </tr>
      <tr>
        <td><a href='att_onkeyup.php'>onkeyup</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при нажатии пользователем клавиши</td>
      </tr>
      <tr>
        <td><a href='att_onload.php'>onload</a></td>
        <td><a href='tag_body.php'>&lt;body&gt;</a>, <a href='tag_iframe.php'>&lt;iframe&gt;</a>, <a href='tag_img.php'>&lt;img&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_link.php'>&lt;link&gt;</a>, <a href='tag_script.php'>&lt;script&gt;</a>, <a href='tag_style.php'>&lt;style&gt;</a></td>
        <td>Скрипт, запускаемый после завершения загрузки элемента</td>
      </tr>
      <tr>
        <td><a href='att_onloadeddata.php'>onloadeddata</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий для запуска при загрузке данных мультимедиа</td>
      </tr>
      <tr>
        <td><a href='att_onloadedmetadata.php'>onloadedmetadata</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Скрипт, запускаемый при загрузке метаданных (например, измерений и длительности) </td>
      </tr>
      <tr>
        <td><a href='att_onloadstart.php'>onloadstart</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Скрипт должен быть запущен и файл начинает загружаться до загружаемого</td>
      </tr>
      <tr>
        <td><a href='att_onmousedown.php'>onmousedown</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при нажатии кнопки мыши на элементе</td>
      </tr>
      <tr>
        <td><a href='att_onmousemove.php'>onmousemove</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт должен выполняться до тех пор, пока указатель мыши перемещается по элементу</td>
      </tr>
      <tr>
        <td><a href='att_onmouseout.php'>onmouseout</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при перемещении указателя мыши из элемента</td>
      </tr>
      <tr>
        <td><a href='att_onmouseover.php'>onmouseover</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при наведении указателя мыши на элемент</td>
      </tr>
      <tr>
        <td><a href='att_onmouseup.php'>onmouseup</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при отпускании кнопки мыши над элементом</td>
      </tr>
      <tr>
        <td><a href='att_onmousewheel.php'>onmousewheel</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при прокрутке колесика мыши по элементу</td>
      </tr>
      <tr>
        <td><a href='att_onoffline.php'>onoffline</a></td>
        <td><a href='tag_body.php'>&lt;body&gt;</a></td>
        <td>Скрипт, запускаемый при запуске браузера в автономном режиме</td>
      </tr>
      <tr>
        <td><a href='att_ononline.php'>ononline</a></td>
        <td><a href='tag_body.php'>&lt;body&gt;</a></td>
        <td>Скрипт, запускаемый при запуске браузера в оперативном режиме</td>
      </tr>
      <tr>
        <td>onpagehide</td>
        <td><a href='tag_body.php'>&lt;body&gt;</a></td>
        <td>Скрипт, запускаемый при переходе пользователя со страницы</td>
      </tr>
      <tr>
        <td><a href='att_onpageshow.php'>onpageshow</a></td>
        <td><a href='tag_body.php'>&lt;body&gt;</a></td>
        <td>Сценарий, выполняемый при переходе пользователя на страницу</td>
      </tr>
      <tr>
        <td><a href='att_onpaste.php'>onpaste</a></td>
        <td>Все видимые элементы.</td>
        <td>Сценарий, выполняемый при вставке пользователем некоторого содержимого в элемент</td>
      </tr>
      <tr>
        <td><a href='att_onpause.php'>onpause</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий, запускаемый при приостановке носителя пользователем или программным способом</td>
      </tr>
      <tr>
        <td><a href='att_onplay.php'>onplay</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Скрипт должен быть запущен, когда СМИ готовы начать играть</td>
      </tr>
      <tr>
        <td><a href='att_onplaying.php'>onplaying</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий для запуска, когда носитель фактически начал играть.</td>
      </tr>
      <tr>
        <td>onpopstate</td>
        <td><a href='tag_body.php'>&lt;body&gt;</a></td>
        <td>Скрипт, запускаемый при изменении истории окна.</td>
      </tr>
      <tr>
        <td><a href='att_onprogress.php'>onprogress</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий для запуска, когда браузер находится в процессе получения данных мультимедиа</td>
      </tr>
      <tr>
        <td><a href='att_onratechange.php'>onratechange</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий для запуска при каждом изменении скорости воспроизведения (например, когда пользователь переключается в режим замедленной или быстрой перемотки вперед).</td>
      </tr>
      <tr>
        <td><a href='att_onreset.php'>onreset</a></td>
        <td><a href='tag_form.php'>&lt;form&gt;</a></td>
        <td>Сценарий для запуска при нажатии кнопки сброса в форме.</td>
      </tr>
      <tr>
        <td><a href='att_onresize.php'>onresize</a></td>
        <td><a href='tag_body.php'>&lt;body&gt;</a></td>
        <td>Скрипт, запускаемый при изменении размера окна браузера.</td>
      </tr>
      <tr>
        <td><a href='att_onscroll.php'>onscroll</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при прокрутке полосы прокрутки элемента</td>
      </tr>
      <tr>
        <td><a href='att_onsearch.php'>onsearch</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a></td>
        <td>Сценарий, выполняемый при записи пользователем чего-либо в поле поиска (для &lt;input=&quot;search&quot;&gt;)</td>
      </tr>
      <tr>
        <td><a href='att_onseeked.php'>onseeked</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий, который будет выполняться, когда атрибут поиска имеет значение false, указывающее, что поиск закончился</td>
      </tr>
      <tr>
        <td><a href='att_onseeking.php'>onseeking</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий, который будет выполняться, если атрибут поиска имеет значение true, указывающее, что поиск активен</td>
      </tr>
      <tr>
        <td><a href='att_onselect.php'>onselect</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при выборе элемента</td>
      </tr>
      <tr>
        <td><a href='att_onshow.php'>onshow</a></td>
        <td><a href='tag_menu.php'>&lt;menu&gt;</a></td>
        <td>Скрипт, запускаемый при отображении элемента &lt;menu&gt; в виде контекстного меню</td>
      </tr>
      <tr>
        <td><a href='att_onstalled.php'>onstalled</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Скрипт должен быть запущен, когда браузер не может получить данные по какой-либо причине</td>
      </tr>
      <tr>
        <td>onstorage</td>
        <td><a href='tag_body.php'>&lt;body&gt;</a></td>
        <td>Сценарий для запуска при обновлении области веб-хранилища</td>
      </tr>
      <tr>
        <td><a href='att_onsubmit.php'>onsubmit</a></td>
        <td><a href='tag_form.php'>&lt;form&gt;</a></td>
        <td>Сценарий для запуска при отправке формы</td>
      </tr>
      <tr>
        <td><a href='att_onsuspend.php'>onsuspend</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий, который будет выполняться при извлечении данных мультимедиа останавливается перед полной загрузкой по какой-либо причине</td>
      </tr>
      <tr>
        <td><a href='att_ontimeupdate.php'>ontimeupdate</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Скрипт для запуска при изменении игровой позиции (например, когда пользователь быстро переходит к другой точке в СМИ)</td>
      </tr>
      <tr>
        <td><a href='att_ontoggle.php'>ontoggle</a></td>
        <td><a href='tag_details.php'>&lt;details&gt;</a></td>
        <td>Сценарий, запускаемый при открытии или закрытии пользователем элемента &lt;details&gt;</td>
      </tr>
      <tr>
        <td><a href='att_onunload.php'>onunload</a></td>
        <td><a href='tag_body.php'>&lt;body&gt;</a></td>
        <td>Скрипт, запускаемый при выгрузке страницы (или закрытии окна браузера)</td>
      </tr>
      <tr>
        <td><a href='att_onvolumechange.php'>onvolumechange</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Сценарий, который будет выполняться каждый раз, когда видео / аудио громкость была изменена</td>
      </tr>
      <tr>
        <td><a href='att_onwaiting.php'>onwaiting</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Скрипт должен быть запущен, когда СМИ приостановлена, но возобновится (например, когда СМИ останавливается для буферизации данных)</td>
      </tr>
      <tr>
        <td><a href='att_onwheel.php'>onwheel</a></td>
        <td>Все видимые элементы.</td>
        <td>Скрипт, запускаемый при накатывании колесика мыши вверх или вниз по элементу</td>
      </tr>
      <tr>
        <td><a href='att_open.php'>open</a></td>
        <td><a href='tag_details.php'>&lt;details&gt;</a></td>
        <td>Указывает, что сведения должны быть видны (открыты) пользователю</td>
      </tr>
      <tr>
        <td><a href='att_optimum.php'>optimum</a></td>
        <td><a href='tag_meter.php'>&lt;meter&gt;</a></td>
        <td>Указывает, какое значение является оптимальным для датчика</td>
      </tr>
      <tr>
        <td><a href='att_pattern.php'>pattern</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a></td>
        <td>Задает регулярное выражение, по которому проверяется значение элемента &lt;input&gt;</td>
      </tr>
      <tr>
        <td><a href='att_placeholder.php'>placeholder</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Задает короткую подсказку, описывающую ожидаемое значение элемента</td>
      </tr>
      <tr>
        <td><a href='att_poster.php'>poster</a></td>
        <td><a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Указывает изображение, которое будет отображаться во время загрузки видео или до тех пор, пока пользователь не нажмет кнопку воспроизведения</td>
      </tr>
      <tr>
        <td><a href='att_preload.php'>preload</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Указывает, если автор считает, что аудио / видео должно быть загружено при загрузке страницы</td>
      </tr>
      <tr>
        <td><a href='att_readonly.php'>readonly</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Указывает, что элемент доступен только для чтения</td>
      </tr>
      <tr>
        <td><a href='att_rel.php'>rel</a></td>
        <td><a href='tag_a.php'>&lt;a&gt;</a>, <a href='tag_area.php'>&lt;area&gt;</a>, <a href='tag_link.php'>&lt;link&gt;</a></td>
        <td>Задает связь между текущим документом и связанным документом</td>
      </tr>
      <tr>
        <td><a href='att_required.php'>required</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_select.php'>&lt;select&gt;</a>, <a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Указывает, что элемент должен быть заполнен перед отправкой формы</td>
      </tr>
      <tr>
        <td><a href='att_reversed.php'>reversed</a></td>
        <td><a href='tag_ol.php'>&lt;ol&gt;</a></td>
        <td>Указывает, что порядок списка должен быть по убыванию (9,8,7...)</td>
      </tr>
      <tr>
        <td><a href='att_rows.php'>rows</a></td>
        <td><a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Указывает видимое количество строк в текстовой области</td>
      </tr>
      <tr>
        <td><a href='att_rowspan.php'>rowspan</a></td>
        <td><a href='tag_td.php'>&lt;td&gt;</a>, <a href='tag_th.php'>&lt;th&gt;</a></td>
        <td>Задает количество строк, которое должна занимать ячейка таблицы</td>
      </tr>
      <tr>
        <td><a href='att_sandbox.php'>sandbox</a></td>
        <td><a href='tag_iframe.php'>&lt;iframe&gt;</a></td>
        <td>Включает дополнительный набор ограничений для содержимого в &lt;iframe&gt;</td>
      </tr>
      <tr>
        <td><a href='att_scope.php'>scope</a></td>
        <td><a href='tag_th.php'>&lt;th&gt;</a></td>
        <td>Указывает, является ли ячейка заголовка заголовком столбца, строки или группы столбцов или строк</td>
      </tr>
      <tr>
        <td><a href='att_scoped.php'>scoped</a></td>
        <td><a href='tag_style.php'>&lt;style&gt;</a></td>
        <td>Указывает, что стили применяются только к родительскому элементу этого элемента и дочерним элементам этого элемента</td>
      </tr>
      <tr>
        <td><a href='att_selected.php'>selected</a></td>
        <td><a href='tag_option.php'>&lt;option&gt;</a></td>
        <td>Указывает, что параметр должен быть предварительно выбран при загрузке страницы</td>
      </tr>
      <tr>
        <td><a href='att_shape.php'>shape</a></td>
        <td><a href='tag_area.php'>&lt;area&gt;</a></td>
        <td>Определяет форму области</td>
      </tr>
      <tr>
        <td><a href='att_size.php'>size</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_select.php'>&lt;select&gt;</a></td>
        <td>Задает ширину в символах (для &lt;input&gt;) или указывает количество видимых параметров (для &lt;select&gt;)</td>
      </tr>
      <tr>
        <td><a href='att_sizes.php'>sizes</a></td>
        <td><a href='tag_img.php'>&lt;img&gt;</a>, <a href='tag_link.php'>&lt;link&gt;</a>,
          <a href='tag_source.php'>&lt;source&gt;</a></td>
        <td>Задает размер связанного ресурса</td>
      </tr>
      <tr>
        <td><a href='att_span.php'>span</a></td>
        <td><a href='tag_col.php'>&lt;col&gt;</a>, <a href='tag_colgroup.php'>&lt;colgroup&gt;</a></td>
        <td>Задает количество столбцов для интервала</td>
      </tr>
      <tr>
        <td><a href='att_spellcheck.php'>spellcheck</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Указывает, следует ли проверять орфографию и грамматику элемента</td>
      </tr>
      <tr>
        <td><a href='att_src.php'>src</a></td>
        <td><a href='tag_audio.php'>&lt;audio&gt;</a>, <a href='tag_embed.php'>&lt;embed&gt;</a>, <a href='tag_iframe.php'>&lt;iframe&gt;</a>, <a href='tag_img.php'>&lt;img&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_script.php'>&lt;script&gt;</a>, <a href='tag_source.php'>&lt;source&gt;</a>, <a href='tag_track.php'>&lt;track&gt;</a>,
          <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Задает URL файла мультимедиа</td>
      </tr>
      <tr>
        <td><a href='att_srcdoc.php'>srcdoc</a></td>
        <td><a href='tag_iframe.php'>&lt;iframe&gt;</a></td>
        <td>Задает содержимое HTML страницы для отображения в &lt;iframe&gt;</td>
      </tr>
      <tr>
        <td><a href='att_srclang.php'>srclang</a></td>
        <td><a href='tag_track.php'>&lt;track&gt;</a></td>
        <td>Задает язык текстовых данных дорожки (требуется, если kind=&quot;subtitles&quot;)</td>
      </tr>
      <tr>
        <td><a href='att_source_srcset.php'>srcset</a></td>
        <td><a href='tag_img.php'>&lt;img&gt;</a>, <a href='tag_source.php'>&lt;source&gt;</a></td>
        <td>Задает URL изображения для использования в различных ситуациях</td>
      </tr>
      <tr>
        <td><a href='att_start.php'>start</a></td>
        <td><a href='tag_ol.php'>&lt;ol&gt;</a></td>
        <td>Задает начальное значение упорядоченного списка</td>
      </tr>
      <tr>
        <td><a href='att_step.php'>step</a></td>
        <td><a href='tag_input.php'>&lt;input&gt;</a></td>
        <td>Задает допустимые интервалы номеров для поля ввода</td>
      </tr>
      <tr>
        <td><a href='att_style.php'>style</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Задает встроенный стиль CSS для элемента</td>
      </tr>
      <tr>
        <td><a href='att_tabindex.php'>tabindex</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Задает порядок табуляции элемента</td>
      </tr>
      <tr>
        <td><a href='att_target.php'>target</a></td>
        <td><a href='tag_a.php'>&lt;a&gt;</a>, <a href='tag_area.php'>&lt;area&gt;</a>, <a href='tag_base.php'>&lt;base&gt;</a>, <a href='tag_form.php'>&lt;form&gt;</a></td>
        <td>Указывает целевой объект для открытия связанного документа или отправки формы</td>
      </tr>
      <tr>
        <td><a href='att_title.php'>title</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Задает дополнительные сведения об элементе</td>
      </tr>
      <tr>
        <td><a href='att_translate.php'>translate</a></td>
        <td><a href='ref_standardattributes.php'>Глобальные Атрибуты</a></td>
        <td>Указывает, следует ли переводить содержимое элемента</td>
      </tr>
      <tr>
        <td style='height: 56px'><a href='att_type.php'>type</a></td>
        <td style='height: 56px'><a href='tag_button.php'>&lt;button&gt;</a>, <a href='tag_embed.php'>&lt;embed&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_link.php'>&lt;link&gt;</a>, <a href='tag_menu.php'>&lt;menu&gt;</a>, <a href='tag_object.php'>&lt;object&gt;</a>, <a href='tag_script.php'>&lt;script&gt;</a>,
          <a href='tag_source.php'>&lt;source&gt;</a>, <a href='tag_style.php'>&lt;style&gt;</a></td>
        <td style='height: 56px'>Указывает тип элемента</td>
      </tr>
      <tr>
        <td><a href='att_usemap.php'>usemap</a></td>
        <td><a href='tag_img.php'>&lt;img&gt;</a>, <a href='tag_object.php'>&lt;object&gt;</a></td>
        <td>Задает изображение в качестве клиентской карты изображений</td>
      </tr>
      <tr>
        <td><a href='att_value.php'>value</a></td>
        <td><a href='tag_button.php'>&lt;button&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_li.php'>&lt;li&gt;</a>, <a href='tag_option.php'>&lt;option&gt;</a>,
          <a href='tag_meter.php'>&lt;meter&gt;</a>, <a href='tag_progress.php'>&lt;progress&gt;</a>, <a href='tag_param.php'>&lt;param&gt;</a></td>
        <td>Задает значение элемента</td>
      </tr>
      <tr>
        <td><a href='att_width.php'>width</a></td>
        <td>&lt;canvas&gt;, <a href='tag_embed.php'>&lt;embed&gt;</a>, <a href='tag_iframe.php'>&lt;iframe&gt;</a>, <a href='tag_img.php'>&lt;img&gt;</a>, <a href='tag_input.php'>&lt;input&gt;</a>, <a href='tag_object.php'>&lt;object&gt;</a>, <a href='tag_video.php'>&lt;video&gt;</a></td>
        <td>Задает ширину элемента</td>
      </tr>
      <tr>
        <td><a href='att_wrap.php'>wrap</a></td>
        <td><a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Указывает, как текст в текстовой области должен быть обернут при отправке в форме</td>
      </tr>
    </table>
  </div>

  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_html_browsersupport.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_standardattributes.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
