<?php include '../include/head.php'; ?>

<title>Java Справочник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Java Справочник. Ключевые слова. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_java.php'; ?>
<?php include '../include/before_content_java.php'; ?>

  <article>
      <h1>Java <span class='color_h1'>Ключевые слова</span></h1>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='java_howto_add_two_numbers.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='java_ref_string.php'>Next &#10095;</a>
      </div>
      <hr>

      <h2>Зарезервированные ключевые слова Java</h2>
      <p>В Java есть набор ключевых слов, которые представляют собой зарезервированные слова, которые нельзя использовать в качестве переменных, методов, классов или любых других идентификаторов:</p>

      <table class='w3-table-all notranslate'>
          <tr>
              <th style='width:20%'>Ключевое слово</th>
              <th>Описание</th>
          </tr>
          <tr>
              <td><a href='ref_keyword_abstract.php'>abstract</a></td>
              <td>Модификатор отсутствия доступа. Используется для классов и методов: абстрактный класс нельзя использовать для создания объектов (для доступа к нему он должен быть унаследован от другого класса). Абстрактный метод может использоваться только в абстрактном классе, и у него нет тела. Тело предоставляется подклассом (унаследованным от)</td>
          </tr>
          <tr>
              <td>assert</td>
              <td>Для отладки</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_boolean.php'>boolean</a></td>
              <td>Тип данных, который может хранить только  true и false значения.</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_break.php'>break</a></td>
              <td>Вырывается из цикла или блока switch</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_byte.php'>byte</a></td>
              <td>Тип данных, который может хранить целые числа от -128 до 127</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_case.php'>case</a></td>
              <td>Маркирует блок кода в инструкциях switch</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_catch.php'>catch</a></td>
              <td>Перехватывает исключения, созданные инструкциями try</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_char.php'>char</a></td>
              <td>Тип данных, который используется для хранения одного символа.</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_class.php'>class</a></td>
              <td>Определяет класс</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_break.php'>continue</a></td>
              <td>Переход к следующей итерации цикла</td>
          </tr>
          <tr>
              <td>const</td>
              <td>Определяет константу. <span class='deprecated'>Не используется</span> - используйте <a href='ref_keyword_final.php'>final</a> вместо этого</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_default.php'>default</a></td>
              <td>Задает блок кода по умолчанию в инструкции switch</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_do.php'>do</a></td>
              <td>Используется вместе с while для создания цикла do-while</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_double.php'>double</a></td>
              <td>Тип данных, который может хранить целые числа от 1.7e&#8722;308 до 1.7e+308</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_else.php'>else</a></td>
              <td>Используется в условных инструкциях</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_enum.php'>enum</a></td>
              <td>Объявляет перечисляемый (неизменяемый) тип</td>
          </tr>
          <tr>
              <td>exports</td>
              <td>Экспортирует пакет с модулем. Новое в Java 9</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_extends.php'>extends</a></td>
              <td>Расширяет класс (указывает, что класс унаследован от другого класса)</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_final.php'>final</a></td>
              <td>Модификатор отсутствия доступа, используемый для классов, атрибутов и методов, что делает их неизменяемыми (невозможными для наследования или переопределения)</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_finally.php'>finally</a></td>
              <td>Используется с исключениями, блок кода, который будет выполняться независимо от того, есть исключение или нет.</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_float.php'>float</a></td>
              <td>Тип данных, который может хранить целые числа от 3.4e&#8722;038 до 3.4e+038</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_for.php'>for</a></td>
              <td>Создаёт цикл for</td>
          </tr>
          <tr>
              <td>goto</td>
              <td><span class='deprecated'>Не используется и не работает</span></td>
          </tr>
          <tr>
              <td><a href='ref_keyword_if.php'>if</a></td>
              <td>Выполняет условную инструкцию</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_implements.php'>implements</a></td>
              <td>Реализует интерфейс</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_import.php'>import</a></td>
              <td>Используется для импорта пакета, класса или интерфейса</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_instanceof.php'>instanceof</a></td>
              <td>Проверяет, является ли объект экземпляром определенного класса или интерфейса</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_int.php'>int</a></td>
              <td>Тип данных, который может хранить целые числа от -2147483648 до 2147483647</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_interface.php'>interface</a></td>
              <td>Используется для объявления особого типа класса, который содержит только абстрактные методы</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_long.php'>long</a></td>
              <td>Тип данных, который может хранить целые числа от -9223372036854775808 до 9223372036854775808</td>
          </tr>
          <tr>
              <td>module</td>
              <td>Объявляет модуль. Новое в Java 9</td>
          </tr>
          <tr>
              <td>native</td>
              <td>Указывает, что метод не реализован в том же исходном файле Java (но на другом языке)</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_new.php'>new</a></td>
              <td>Создает новые объекты</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_package.php'>package</a></td>
              <td>Объявляет пакет</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_private.php'>private</a></td>
              <td>Модификатор доступа, используемый для атрибутов, методов и конструкторов, что делает их доступными только в пределах объявленного класса</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_protected.php'>protected</a></td>
              <td>Модификатор доступа, используемый для атрибутов, методов и конструкторов, что делает их доступными в одном пакете и подклассах</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_public.php'>public</a></td>
              <td>Модификатор доступа, используемый для классов, атрибутов, методов и конструкторов, что делает их доступными для любого другого класса</td>
          </tr>
          <tr>
              <td>requires</td>
              <td>Задает необходимые библиотеки внутри модуля. Новое в Java 9</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_return.php'>return</a></td>
              <td>Завершено выполнение метода, может использоваться для возврата значения из метода.</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_short.php'>short</a></td>
              <td>Тип данных, который может хранить целые числа из -32768 до 32767</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_static.php'>static</a></td>
              <td>Модификатор отсутствия доступа, используемый для методов и атрибутов. Доступ к статическим методам / атрибутам можно получить без создания объекта класса</td>
          </tr>
          <tr>
              <td>strictfp</td>
              <td>Ограничьте точность и округление вычислений с плавающей запятой</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_super.php'>super</a></td>
              <td>Относится к объектам суперкласса (родительского)</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_switch.php'>switch</a></td>
              <td>Выбирает один из множества блоков кода для выполнения</td>
          </tr>
          <tr>
              <td>synchronized</td>
              <td>Модификатор отсутствия доступа, который указывает, что методы могут быть доступны только одному потоку за раз.</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_this.php'>this</a></td>
              <td>Ссылается на текущий объект в методе или конструкторе</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_throw.php'>throw</a></td>
              <td>Создает настраиваемую ошибку</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_throws.php'>throws</a></td>
              <td>Указывает, какие исключения могут быть вызваны методом</td>
          </tr>
          <tr>
              <td>transient</td>
              <td>Модификатор отсутствия доступа, который указывает, что атрибут не является частью постоянного состояния объекта</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_try.php'>try</a></td>
              <td>Создает инструкцию try... catch</td>
          </tr>
          <tr>
              <td>var</td>
              <td>Объявляет переменную. Новое в Java 10</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_void.php'>void</a></td>
              <td>Указывает, что метод не должен иметь возвращаемого значения</td>
          </tr>
          <tr>
              <td>volatile</td>
              <td>Указывает, что атрибут не кэшируется локально в потоке и всегда читается из "основной памяти"</td>
          </tr>
          <tr>
              <td><a href='ref_keyword_while.php'>while</a></td>
              <td>Создает цикл while</td>
          </tr>
      </table>

      <p><strong>Примечание:</strong> <code class='w3-codespan'>true</code>, <code class='w3-codespan'>false</code> и <code class='w3-codespan'>null</code> не являются ключевыми словами, это литералы и зарезервированные слова, которые нельзя использовать в качестве идентификаторов.</p>
      <hr>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='java_howto_add_two_numbers.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='java_ref_string.php'>Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>