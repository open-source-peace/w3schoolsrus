<?php include '../include/head.php'; ?>
<title>HTML Canvas Справочник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Canvas - Холст для рисования в HTML. Полный справочник по CANVAS. Как рисовать с помощью HTML, CSS, JavaScript? <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
  <h1>HTML <span class='color_h1'>Canvas</span> Справочник</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_colornames.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_av_dom.php'>Next &#10095;</a>
  </div>
  <hr>

  <h2>Описание</h2>
  <p><em>Canvas</em> - переводится с англ. <em>Холст</em>.</p>
  <p><strong>HTML5</strong> тег <code class='w3-codespan'>&lt;canvas&gt;</code> используется для рисования графики на лету с помощью скриптов (обычно с помощью JavaScript).</p>
  <p>Однако элемент <code class='w3-codespan'>&lt;canvas&gt;</code> не имеет собственных возможностей для рисования (он является лишь контейнером для графики) - необходимо использовать скрипты, чтобы рисовать графику.</p>
  <p>Метод <code class='w3-codespan'>getContext()</code> возвращает объект, который предоставляет методы и свойства для рисования в <strong>canvas</strong>.</p>
  <p>Эта справка будет охватывать свойства и методы объекта <code class='w3-codespan'>getContext('2d')</code>, который можно использовать для рисования текста, линий, кубов, кругов и многого другого - в <strong>canvas</strong>.</p>
  <hr>

  <h2>Поддержка браузерами</h2>
  <p>Цифры в таблице определяют первую версию браузера, которая полностью поддерживает этот элемент.</p>
  <table class='browserref notranslate'>
    <tr>
      <th style='width:20%;font-size:16px;text-align:left;'>Element</th>
      <th style='width:16%;' class='bsChrome' title='Chrome'></th>
      <th style='width:16%;' class='bsEdge' title='Internet Explorer / Edge'></th>
      <th style='width:16%;' class='bsFirefox' title='Firefox'></th>
      <th style='width:16%;' class='bsSafari' title='Safari'></th>
      <th style='width:16%;' class='bsOpera' title='Opera'></th>
    </tr>
    <tr>
      <td style='text-align:left;'>&lt;canvas&gt;</td>
      <td>4.0</td>
      <td>9.0</td>
      <td>2.0</td>
      <td>3.1</td>
      <td>9.0</td>
    </tr>
  </table>
  <p>Internet Explorer 9, Firefox, Opera, Chrome и Safari поддерживают <code class='w3-codespan'>&lt;canvas&gt;</code> и его свойства и методы.</p>
  <p><b>Примечание:</b> Internet Explorer 8 и более ранние версии не поддерживают элемент <code class='w3-codespan'>&lt;canvas&gt;</code>.</p>
  <hr>

  <h2>Цвета, стили и тени</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Свойства</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='canvas_fillstyle.php'>fillStyle</a></td>
      <td>Устанаввливает или возвращает цвет, градиент или шаблон, используемый для заполнения рисунка</td>
    </tr>
    <tr>
      <td><a href='canvas_strokestyle.php'>strokeStyle</a></td>
      <td>Устанавливает или возвращает цвет, градиент или шаблон для штрихов</td>
    </tr>
    <tr>
      <td><a href='canvas_shadowcolor.php'>shadowColor</a></td>
      <td>Устанавливает или возвращает цвет для использования при создании теней</td>
    </tr>
    <tr>
      <td><a href='canvas_shadowblur.php'>shadowBlur</a></td>
      <td>Устанавливает или возвращает уровень размытия для теней</td>
    </tr>
    <tr>
      <td><a href='canvas_shadowoffsetx.php'>shadowOffsetX</a></td>
      <td>Устанавливает или возвращает горизонтальное расстояние тени от формы</td>
    </tr>
    <tr>
      <td><a href='canvas_shadowoffsety.php'>shadowOffsetY</a></td>
      <td>Устанавливает или возвращает вертикальное расстояние тени от формы</td>
    </tr>
  </table>
  <br>

  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Метод</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='canvas_createlineargradient.php'>
          createLinearGradient()</a></td>
      <td>Создает линейный градиент (для использования на содержимом canvas)</td>
    </tr>
    <tr>
      <td><a href='canvas_createpattern.php'>createPattern()</a></td>
      <td>Повторяет указанный элемент в указанном направлении</td>
    </tr>
    <tr>
      <td><a href='canvas_createradialgradient.php'>createRadialGradient()</a></td>
      <td>Создает радиальный / круговой градиент (для использования на содержимом canvas)</td>
    </tr>
    <tr>
      <td><a href='canvas_addcolorstop.php'>addColorStop()</a></td>
      <td>Определяет цвета и позиции остановки в объекте градиента</td>
    </tr>
  </table>
  <hr>

  <h2>Стили строк</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Свойства</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='canvas_linecap.php'>lineCap</a></td>
      <td>Устанавливает или возвращает стиль заглавных букв для строки</td>
    </tr>
    <tr>
      <td><a href='canvas_linejoin.php'>lineJoin</a></td>
      <td>Устанавливает или возвращает тип созданного угла, когда встречаются две линии</td>
    </tr>
    <tr>
      <td><a href='canvas_linewidth.php'>lineWidth</a></td>
      <td>Устанавливает или возвращает текущую ширину строки</td>
    </tr>
    <tr>
      <td><a href='canvas_miterlimit.php'>miterLimit</a></td>
      <td>Устанавливает или возвращает максимальную длину митры (скоса)</td>
    </tr>
  </table>
  <h2>Прямоугольники</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Метод</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='canvas_rect.php'>rect()</a></td>
      <td>Создаёт прямоугольник</td>
    </tr>
    <tr>
      <td><a href='canvas_fillrect.php'>fillRect()</a></td>
      <td>Рисует 'заполненный' прямоугольник</td>
    </tr>
    <tr>
      <td><a href='canvas_strokerect.php'>strokeRect()</a></td>
      <td>Рисует прямоугольник (без заливки)</td>
    </tr>
    <tr>
      <td><a href='canvas_clearrect.php'>clearRect()</a></td>
      <td>Очищает указанные пиксели в пределах данного прямоугольника</td>
    </tr>
  </table>

  <h2>Контуры</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Метод</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='canvas_fill.php'>fill()</a></td>
      <td>Заполняет текущий рисунок (контур)</td>
    </tr>
    <tr>
      <td><a href='canvas_stroke.php'>stroke()</a></td>
      <td>Фактически рисует определённый вами контур</td>
    </tr>
    <tr>
      <td><a href='canvas_beginpath.php'>beginPath()</a></td>
      <td>Начинается контур или сбрасывается текущий контур</td>
    </tr>
    <tr>
      <td><a href='canvas_moveto.php'>moveTo()</a></td>
      <td>Перемещает контур к указанной точке на холсте, не создавая строки</td>
    </tr>
    <tr>
      <td><a href='canvas_closepath.php'>closePath()</a></td>
      <td>Создаёт контур от текущей точки до начальной точки</td>
    </tr>
    <tr>
      <td><a href='canvas_lineto.php'>lineTo()</a></td>
      <td>Добавляет новую точку и создаёт линию к этой точке с последней указаной точки на холсте</td>
    </tr>
    <tr>
      <td><a href='canvas_clip.php'>clip()</a></td>
      <td>Закрепляет область любой формы и размера с оригинального холста</td>
    </tr>
    <tr>
      <td><a href='canvas_quadraticcurveto.php'>quadraticCurveTo()</a></td>
      <td>Создаёт квадратичную кривую Безье</td>
    </tr>
    <tr>
      <td><a href='canvas_beziercurveto.php'>bezierCurveTo()</a></td>
      <td>Создаёт кубическую кривую Безье</td>
    </tr>
    <tr>
      <td><a href='canvas_arc.php'>arc()</a></td>
      <td>Создаёт дугу/кривую (используется для создания кругов или частей кругов)</td>
    </tr>
    <tr>
      <td><a href='canvas_arcto.php'>arcTo()</a></td>
      <td>Создаёт дугу/кривую между двумя касаемыми</td>
    </tr>
    <tr>
      <td><a href='canvas_ispointinpath.php'>isPointInPath()</a></td>
      <td>Возвращает true (истина), если указанная точка находится в текущем контуре, иначе false (ложь)</td>
    </tr>
  </table>

  <h2>Трансформации</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Метод</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='canvas_scale.php'>scale()</a></td>
      <td>Масштабирует текущий рисунок, делая большим или меньшим</td>
    </tr>
    <tr>
      <td><a href='canvas_rotate.php'>rotate()</a></td>
      <td>Возвращает текущий рисунок</td>
    </tr>
    <tr>
      <td><a href='canvas_translate.php'>translate()</a></td>
      <td>Изменяет позицию (0,0) на холсте</td>
    </tr>
    <tr>
      <td><a href='canvas_transform.php'>transform()</a></td>
      <td>Заменяет текущую матрицу преобразования для чертежа (рисунка)</td>
    </tr>
    <tr>
      <td><a href='canvas_settransform.php'>setTransform()</a></td>
      <td>Сбрасывает текущее преобразование на идентичную матрицу. Затем запускается <a href='canvas_transform.php'> transform()</a></td>
    </tr>
  </table>

  <h2>Текст</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Свойства</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='canvas_font.php'>font</a></td>
      <td>Устанавливает или возвращает текущие свойства шрифта для текстового содержания</td>
    </tr>
    <tr>
      <td><a href='canvas_textalign.php'>textAlign</a></td>
      <td>Устанавливает или возвращает текущее выравнивание для текстового содержимого</td>
    </tr>
    <tr>
      <td><a href='canvas_textbaseline.php'>textBaseline</a></td>
      <td>Устанавливает или возвращает текущую текстовую базовую линию, которая используется при рисовании текста</td>
    </tr>
  </table>

  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Метод</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='canvas_filltext.php'>fillText()</a></td>
      <td>Рисует 'заполненный' текст (из заливкой) на холсте</td>
    </tr>
    <tr>
      <td><a href='canvas_stroketext.php'>strokeText()</a></td>
      <td>Рисует текст на холсте (без заливки)</td>
    </tr>
    <tr>
      <td><a href='canvas_measuretext.php'>measureText()</a></td>
      <td>Возвращает объект, который содержит ширину указанного текста</td>
    </tr>
  </table>

  <h2>Рисование изображения</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Метод</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='canvas_drawimage.php'>drawImage()</a></td>
      <td>Рисует изображение, холст или видео на холсте</td>
    </tr>
  </table>

  <h2>Пиксельная манипуляция</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Свойства</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='canvas_imagedata_width.php'>width</a></td>
      <td>Возвращает ширину объекта ImageData</td>
    </tr>
    <tr>
      <td><a href='canvas_imagedata_height.php'>height</a></td>
      <td>Возвращает высоту объекта ImageData</td>
    </tr>
    <tr>
      <td><a href='canvas_imagedata_data.php'>data</a></td>
      <td>Возвращает объект, который содержит данные изображения указанного объекта ImageData</td>
    </tr>
  </table>

  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Метод</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='canvas_createimagedata.php'>createImageData()</a></td>
      <td>Создаёт новый, пустой объект ImageData</td>
    </tr>
    <tr>
      <td><a href='canvas_getimagedata.php'>getImageData()</a></td>
      <td>Возвращает объект ImageData, который копирует пиксельные даные для заданного прямоугольника на холсте</td>
    </tr>
    <tr>
      <td><a href='canvas_putimagedata.php'>putImageData()</a></td>
      <td>Возвращает данные изображения (из указанного объекта ImageData) назад на холст</td>
    </tr>
  </table>

  <h2>Композиция</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Свойства</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td><a href='canvas_globalalpha.php'>globalAlpha</a></td>
      <td>Устанавливает или возвращает текущее значение альфа или прозрачности рисунка</td>
    </tr>
    <tr>
      <td><a href='canvas_globalcompositeoperation.php'>globalCompositeOperation</a></td>
      <td>Устанавливает или возвращает способ рисования нового изображения на существующем изображении.</td>
    </tr>
  </table>

  <h2>Прочее</h2>
  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Метод</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td>save()</td>
      <td>Сохраняет состояние текущего контекста</td>
    </tr>
    <tr>
      <td>restore()</td>
      <td>Возвращает ранее сохранённое состояние контура и атрибуты</td>
    </tr>
    <tr>
      <td>createEvent()</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>getContext()</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>toDataURL()</td>
      <td>&nbsp;</td>
    </tr>
  </table>

  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_colornames.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_av_dom.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
