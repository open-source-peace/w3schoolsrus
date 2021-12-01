<?php include '../include/head.php'; ?>

    <title>HTML Цвета. Учебник. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='HTML Цвета. Учебник. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/colors/index.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

  <article>
      <h1><span class='color_h1'>Учебник цветов</span></h1>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
          <a class='w3-right w3-btn' href='colors_names.php'>Next &#10095;</a>
      </div>
      <hr>

      <div class='w3-panel w3-info intro'>
          <p>Цвета отображаются в сочетании красного (red), зеленого (green) и синего (blue) света.</p>
      </div>
      <hr>

      <h2>Названия цветов</h2>
      <p>В CSS цвета можно установить с помощью названий (имён) цветов:</p>
      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='notranslate'>
              <div class='w3-responsive'>
                  <table class='w3-table-all notranslate'>
                      <tr>
                          <th style='width:50%'>Цвет</th>
                          <th>Название</th>
                      </tr>
                      <tr><td style='background-color:red'>&nbsp;</td><td>Red</td></tr>
                      <tr><td style='background-color:yellow'>&nbsp;</td><td>Yellow</td></tr>
                      <tr><td style='background-color:cyan'>&nbsp;</td><td>Cyan</td></tr>
                      <tr><td style='background-color:blue'>&nbsp;</td><td>Blue</td></tr>
                      <tr><td style='background-color:magenta'>&nbsp;</td><td>Magenta</td></tr>
                  </table>
              </div>
          </div>
          <a class='w3-btn w3-margin-bottom' href='../colorstryit/trycolors_colornames.html' target='_blank'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>CSS Значения цвета</h2>
      <p>С помощью CSS цвета можно указывать по-разному:</p>
      <ul>
          <li>По названиям цветов</li>
          <li>В качестве значений RGB</li>
          <li>В виде шестнадцатеричных значений</li>
          <li>В качестве значений HSL (CSS3)</li>
          <li>В качестве значений HWB (CSS4)</li>
      </ul>
      <hr>

      <h2>RGB Цвета</h2>
      <p>Значения цвета RGB поддерживаются во всех браузерах.</p>
      <p><b>Значение цвета RGB расшифровывается как: rgb(
              <span style='color:red'>RED</span> - красный,
              <span style='color:green'>GREEN</span> - зелёный,
              <span style='color:blue'>BLUE</span> - синий).</b></p>
      <p>Каждый параметр определяет интенсивность цвета в виде целого числа от 0 до 255.</p>
      <p>Например, rgb (0,0,255) отображается синим цветом, поскольку для параметра <span style='color:blue'><b>blue</b></span> установлено самое высокое значение (255), а для остальных - 0.</p>

      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate'>
              <div class='w3-responsive'>
                  <table class='w3-table-all notranslate'>
                      <tr>
                          <th style='width:25%'>Цвет</th>
                          <th style='width:25%'>RGB</th>
                          <th>Цвет</th>
                      </tr>
                      <tr>
                          <td style='background-color:#FF0000'>&nbsp;</td>
                          <td>rgb(255,0,0)</td>
                          <td>Красный</td>
                      </tr>
                      <tr>
                          <td style='background-color:#00FF00'>&nbsp;</td>
                          <td>rgb(0,255,0)</td>
                          <td>Зелёный</td>
                      </tr>
                      <tr>
                          <td style='background-color:#0000FF'>&nbsp;</td>
                          <td>rgb(0,0,255)</td>
                          <td>Синий</td>
                      </tr>
                  </table>
              </div>
          </div>
          <a class='w3-btn w3-margin-bottom' href='tryitc2b4.html?filename=trycolors_rgbvalues' target='_blank'>Попробуйте сами &raquo;</a>
      </div>

      <p>Оттенки серого часто определяются с использованием равных значений для всех 3 источников света:</p>

      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate'>
              <div class='w3-responsive'>
                  <table class='w3-table-all notranslate'>
                      <tr>
                          <th style='width:25%'>Цвет</th>
                          <th style='width:25%'>RGB</th>
                          <th>Цвет</th>
                      </tr>
                      <tr>
                          <td style='background-color:#000000'>&nbsp;</td>
                          <td>rgb(0,0,0)</td>
                          <td>Чёрный</td>
                      </tr>
                      <tr>
                          <td style='background-color:#808080'>&nbsp;</td>
                          <td>rgb(128,128,128)</td>
                          <td>Серый</td>
                      </tr>
                      <tr>
                          <td style='background-color:#FFFFFF'>&nbsp;</td>
                          <td>rgb(255,255,255)</td>
                          <td>Белый</td>
                      </tr>
                  </table>
              </div>
          </div>
          <a class='w3-btn w3-margin-bottom' href='tryit94f9.html?filename=trycolors_rgbgray' target='_blank'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Шестнадцатеричные значения цвета - HEX</h2>
      <p>Шестнадцатеричные значения цвета также поддерживаются во всех браузерах.</p>
      <p><b>Шестнадцатеричный цвет указывается с помощью:
              #<span style='color:#ff0000'>RR</span><span style='color:green'>GG</span><span style='color:#0000ff'>BB</span></b>.</p>
      <p>RR (<span style='color:#ff0000'>red</span>), GG (<span style='color:green'>green</span>) и BB (<span style='color:#0000ff'>blue</span>) шестнадцатеричные целые числа от 00 до FF, определяющие интенсивность цвета.</p>
      <p>Например, #0000FF отображается синим цветом, потому что синий компонент установлен на самое высокое значение (FF), а остальные установлены на 00.</p>

      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate'>
              <div class='w3-responsive'>
                  <table class='w3-table-all notranslate'>
                      <tr>
                          <th style='width:25%'>Цвет</th>
                          <th style='width:25%'>HEX</th>
                          <th style='width:25%'>RGB</th>
                          <th>Цвет</th>
                      </tr>
                      <tr>
                          <td style='background-color:#FF0000'>&nbsp;</td>
                          <td>#FF0000</td>
                          <td>rgb(255,0,0)</td>
                          <td>Красный</td>
                      </tr>
                      <tr>
                          <td style='background-color:#00FF00'>&nbsp;</td>
                          <td>#00FF00</td>
                          <td>rgb(0,255,0)</td>
                          <td>Зелёный</td>
                      </tr>
                      <tr>
                          <td style='background-color:#0000FF'>&nbsp;</td>
                          <td>#0000FF</td>
                          <td>rgb(0,0,255)</td>
                          <td>Синий</td>
                      </tr>
                  </table>
              </div>
          </div>
          <a class='w3-btn w3-margin-bottom' href='tryitfd09.html?filename=trycolors_hexvalues' target='_blank'>Попробуйте сами &raquo;</a>
      </div>

      <p>Оттенки серого часто определяются с использованием равных значений для всех 3 источников света:</p>

      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate'>
              <div class='w3-responsive'>
                  <table class='w3-table-all notranslate'>
                      <tr>
                          <th style='width:25%'>Цвет</th>
                          <th style='width:25%'>HEX</th>
                          <th style='width:25%'>RGB</th>
                          <th>Цвет</th>
                      </tr>
                      <tr>
                          <td style='background-color:#000000'>&nbsp;</td>
                          <td>#000000</td>
                          <td>rgb(0,0,0)</td>
                          <td>Чёрный</td>
                      </tr>
                      <tr>
                          <td style='background-color:#808080'>&nbsp;</td>
                          <td>#808080</td>
                          <td>rgb(128,128,128)</td>
                          <td>Серый</td>
                      </tr>
                      <tr>
                          <td style='background-color:#FFFFFF'>&nbsp;</td>
                          <td>#FFFFFF</td>
                          <td>rgb(255,255,255)</td>
                          <td>Белый</td>
                      </tr>
                  </table>
              </div>
          </div>
          <a class='w3-btn w3-margin-bottom' href='tryita845.html?filename=trycolors_hexgray' target='_blank'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Верхний регистр или нижний регистр?</h2>
      <p>Вы можете использовать буквы в верхнем или нижнем регистре, чтобы указать шестнадцатеричные значения цвета.</p>
      <div class='w3-panel w3-note'>
          <p>Буквы в нижнем регистре легче писать. Буквы в верхнем регистре легче читать.</p>
      </div>

      <!-- стандарт для навигации снизу -->
      <hr>
      <h2>Названия цветов</h2>
      <p>CSS поддерживает 140 стандартных названий (имён) цветов.</p>
      <p>В следующей главе вы найдете полный алфавитный список названий цветов с шестнадцатеричными значениями:</p>

      <div class='w3-responsive'>
          <table class='w3-table-all notranslate'>
              <tr>
                  <th style='width:25%'>Название цвета</th>
                  <th style='width:25%'>Hex</th>
                  <th>Цвет</th>
              </tr>
              <tr>
                  <td>AliceBlue</td>
                  <td>#F0F8FF</td>
                  <td style='background: #F0F8FF'>&nbsp;</td>
              </tr>
              <tr>
                  <td>AntiqueWhite</td>
                  <td>#FAEBD7</td>
                  <td style='background: #FAEBD7'>&nbsp;</td>
              </tr>
              <tr>
                  <td>Aqua</td>
                  <td>#00FFFF</td>
                  <td style='background: #00FFFF'>&nbsp;</td>
              </tr>
              <tr>
                  <td>Aquamarine</td>
                  <td>#7FFFD4</td>
                  <td style='background: #7FFFD4'>&nbsp;</td>
              </tr>
              <tr>
                  <td>Azure</td>
                  <td>#F0FFFF</td>
                  <td style='background: #F0FFFF'>&nbsp;</td>
              </tr>
              <tr>
                  <td>Beige</td>
                  <td>#F5F5DC</td>
                  <td style='background: #F5F5DC'>&nbsp;</td>
              </tr>
              <tr>
                  <td>Bisque</td>
                  <td>#FFE4C4</td>
                  <td style='background: #FFE4C4'>&nbsp;</td>
              </tr>
          </table>
      </div>
      <hr>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
          <a class='w3-right w3-btn' href='colors_names.php'>Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>