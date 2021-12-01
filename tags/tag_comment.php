<?php include '../include/head.php'; ?>
<title>HTML Тег Комментариев &lt;!--...--&gt;. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML тег комментариев. Зачем нужны комментарии на html-странице? Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
  <h1>HTML <span class='color_h1'>&lt;!--...--&gt;</span> Тег комментария</h1>
  <div class='w3-clear w3-center nextprev'>
    <a class='w3-left w3-btn' href='ref_keyboardshortcuts.php'>&#10094;<span class='w3-hide-small'> Prev</span></a>
    <a class='w3-btn' href='index.php'><span class='w3-hide-small'>Полный HTML </span>справочник</a>
    <a class='w3-right w3-btn' href='tag_doctype.php'><span class='w3-hide-small'>Next </span>&#10095;</a>
  </div>

  <br>
  <div class='w3-example'>
    <h3>Пример</h3>
    <p>HTML комментарий:</p>
    <div class='w3-code notranslate htmlHigh'>
      &lt;!--Это комментарий. Комментарии не отображаются в браузере--&gt;<br><br>
      &lt;p&gt;Это параграф.&lt;/p&gt;
    </div>
    <a target='_blank' href='../htmltryit/tryhtml_comment.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Определение и использование</h2>
  <p>Тег комментария используется для вставки комментариев в исходный код. Комментарии не отображаются в браузерах.</p>
  <p>Вы можете использовать комментарии, чтобы объяснить свой код, который может помочь вам в дальнейшем редактировании исходного кода. Это особенно полезно, если у вас много кода.</p>
  <hr>
  <h2>Поддержка браузерами</h2>
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
      <td style='text-align:left;'>&lt;!--...--&gt;</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
  </table>
  <hr>

  <h2>Отличия между HTML 4.01 и HTML5</h2>
  <p>ОТСУТСТВУЮТ.</p>
  <hr>

  <h2>Советы и примечания</h2>
  <p>Вы также можете использовать тег комментариев, чтобы 'скрыть' скрипты от браузеров без поддержки сценариев (чтобы они не показывали их как обычный текст):</p>
  <div class='w3-code w3-border notranslate htmlHigh'>
    <div>
      &lt;script type=&quot;text/javascript&quot;&gt;<br>
      &lt;!--<br>
      function displayMsg()
      {<br>
      &nbsp;&nbsp;alert(&quot;Hello World!&quot;)<br>
      }<br>
      //--&gt;<br>
      &lt;/script&gt;&nbsp;
    </div></div>

  <p><b>Примечание:</b> Две косых черты в конце строки комментариев (//) являются символом комментария JavaScript. Это предотвращает исполнение JavaScript --&gt; тега.</p>
  <hr>

  <h2>Стандартные атрибуты</h2>
  <p>Тег комментария не поддерживает никаких стандартных атрибутов.</p>
  <p>Больше информации о стандартных атрибутах можно узнать в разделе <a href='ref_standardattributes.php'>Стандартные атрибуты</a>.</p>
  <hr>
  <h2>Атрибуты события</h2>
  <p>Тег комментария не поддерживает атрибуты событий.</p>
  <p>Больше информации об атрибутах события в разделе <a href='ref_eventattributes.php'>Атрибуты событий</a>.</p>
  <hr>
  <p><b>Примечание:</b> Комментарии нельзя влаживать внутрь других комментариев.</p>
  <div class='w3-example'>
    <h3>Пример:</h3>
    <div class='w3-code notranslate htmlHigh'>
      <span class='commentcolor' style='color:green'>&lt;!-- Один комментарий.<br>&nbsp; &nbsp;&lt;!-- Другой комментарий --&gt;<br> --&gt;</span>
    </div>
  </div>

  <hr>
  <div class='w3-clear w3-center nextprev'>
    <a class='w3-left w3-btn' href='ref_keyboardshortcuts.php'>&#10094;<span class='w3-hide-small'> Prev</span></a>
    <a class='w3-btn' href='index.php'><span class='w3-hide-small'>Полный HTML </span>Справочник</a>
    <a class='w3-right w3-btn' href='tag_doctype.php'><span class='w3-hide-small'>Next </span>&#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
