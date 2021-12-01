<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;address&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Тег &lt;address&gt; определяет контактную информацию для автора / владельца документа или статьи. Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
  <h1>HTML тег <span class='color_h1'>&lt;address&gt;</span></h1>
  <div class='w3-clear w3-center nextprev'>
    <a class='w3-left w3-btn' href='tag_acronym.php'>&#10094;<span class='w3-hide-small'> Prev</span></a>
    <a class='w3-btn' href='index.php'><span class='w3-hide-small'>Полный HTML </span>Справочник</a>
    <a class='w3-right w3-btn' href='tag_applet.php'><span class='w3-hide-small'>Next </span>&#10095;</a>
  </div>
  <br>
  <div class='w3-example'>
    <h3>Пример</h3>
    <p>Контактная информация для Example.com:</p>
    <div class='w3-code notranslate htmlHigh'>
      &lt;address&gt;<br>
      Written by &lt;a href=&quot;mailto:webmaster@example.com&quot;&gt;Jon Doe&lt;/a&gt;.&lt;br&gt; <br>
      Visit us at:&lt;br&gt;<br>
      Example.com&lt;br&gt;<br>
      Box 564, Disneyland&lt;br&gt;<br>
      USA<br>
      &lt;/address&gt;
    </div>
    <a target='_blank' href='../htmltryit/tryhtml_address.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Определение и использование</h2>
  <p>Тег <code>&lt;address&gt;</code> определяет контактную информацию для автора / владельца документа или статьи.</p>
  <p>Если элемент <code>&lt;address&gt;</code> находится внутри элемента <code>&lt;body&gt;</code>, он представляет контактную информацию для документа.</p>
  <p>Если элемент <code>&lt;address&gt;</code> находится внутри элемента <code>&lt;article&gt;</code>, он представляет контактную информацию для данной статьи.</p>
  <p>Текст в элементе <code>&lt;address&gt;</code> обычно отображается <i>курсивом</i>. Большинство браузеров добавляют разрыв строки до и после элемента <code>&lt;address&gt;</code>.</p>
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
      <td style='text-align:left;'>&lt;address&gt;</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
  </table>
  <hr>

  <h2>Советы и примечания</h2>
  <p><b>Примечание:</b> Тег <code>&lt;address&gt;</code> НЕ должен использоваться для описания почтового адреса, если только он не является частью контактной информации.</p>
  <p><b>Совет:</b> Элемент <code>&lt;address&gt;</code> как правило, включается вместе с другой информацией в элемент <a href='tag_footer.php'>&lt;footer&gt;</a>.</p>
  <hr>

  <h2>Отличия между HTML 4.01 и HTML5</h2>
  <p>HTML 4.01 не поддерживает тег <code>&lt;address&gt;</code>, поэтому в HTML 4.01 тег <code>&lt;address&gt;</code> всегда определяет контактную информацию автора / владельца <i>документа</i>.</p>
  <hr>

  <h2>Глобальные атрибуты</h2>
  <p>Тег <code>&lt;address&gt;</code> также поддерживает <a href='ref_standardattributes.php'>Глобальные атрибуты в HTML</a>.</p>
  <hr>
  <h2>Атрибуты событий</h2>
  <p>Тег <code>&lt;address&gt;</code> также поддерживает <a href='ref_eventattributes.php'>Атрибуты событий в HTML</a>.</p>
  <hr>
  <h2>Связанные страницы</h2>
  <p>HTML DOM справочник: <a href='../jsref/dom_obj_address.php'>Объект Address</a></p>
  <hr>
  <h2>Настройки CSS по умолчанию</h2>
  <p>Большинство браузеров отображают элемент <code>&lt;address&gt;</code> со следующими значениями по умолчанию:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate cssHigh'>
      address { <br>&nbsp; display: block;<br>&nbsp; font-style: italic;<br>} </div>
    <a target='_blank' href='../htmltryit/tryhtml_address_default_css.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
  <div class='w3-clear w3-center nextprev'>
    <a class='w3-left w3-btn' href='tag_acronym.php'>&#10094;<span class='w3-hide-small'> Prev</span></a>
    <a class='w3-btn' href='index.php'><span class='w3-hide-small'>Полный HTML </span>Справочник</a>
    <a class='w3-right w3-btn' href='tag_applet.php'><span class='w3-hide-small'>Next </span>&#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>