<?php include '../include/head.php'; ?>

<title>Go Переменные. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Go Переменные. Объявление (создание) переменных в Golang. Типы переменных. Объявление переменных с начальным и без начального значения. Различие между var и :=. Примеры кода. Полный справочник по языку Golang. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_go.php'; ?>
<?php include '../include/before_content_go.php'; ?>

<article>
    <h1>Go Переменные</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="go_comments.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="go_variable_multi.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Переменные</strong> - это контейнеры для хранения значений данных.</p>
    <hr>

    <h2>Go Типы переменных</h2>
    <p>В Go есть разные <strong>типы</strong> переменных, например:</p>

    <ul>
        <li><code class="w3-codespan">int</code> - хранит целые числа (integer), например 123 или -123</li>
        <li><code class="w3-codespan">float32</code> - хранит числа с плавающей запятой с десятичными знаками, например 19,99 или -19.99</li>
        <li><code class="w3-codespan">string</code> - хранит текст, например &quot;Hello World&quot;. Строковые значения заключены в двойные кавычки</li>
        <li><code class="w3-codespan">bool</code> - сохраняет значения с двумя состояниями: true или false (истина или ложь)</li>
    </ul>
    <p>Подробнее о различных типах переменных будет рассказано в главе <a href="go_data_types.php">Go Типы данных</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>

    <h2>Объявление (создание) переменных</h2>
    <p>В языке программирования Go есть два способа объявить переменную:</p>
    <h4>С помощью ключевого слова <code class="w3-codespan">var</code>:</h4>
    <p>Используйте ключевое слово <code class="w3-codespan">var</code>, за которым следует имя и тип переменной:</p>
    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code notranslate javaHigh">
            var <em>variable type</em> = <em>value</em>
        </div>
    </div>
    <p><b>Примечание:</b> Вы всегда должны указывать либо <code class="w3-codespan">type</code>, либо <code class="w3-codespan">value</code> (или оба).</p>
    <h4>С помощью знака <code class="w3-codespan">:=</code>:</h4>
    <p>Используйте знак <code class="w3-codespan">:=</code>, за которым следует значение переменной:</p>
    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code notranslate javaHigh">
            <em>variable </em> := <em>value</em>
        </div>
    </div>

    <p><b>Примечание:</b> В этом случае тип переменной <b>выводится</b> из значения (означает, что компилятор определяет тип переменной).</p>
    <p><b>Примечание:</b> Невозможно объявить переменную с помощью <code class="w3-codespan">:=</code> без присвоения ей значения.</p>
    <hr>

    <h2>Объявление переменной с начальным значением</h2>
    <p>Если значение переменной известно с самого начала, вы можете объявить переменную и присвоить ей значение в одной строке:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br><br>
            func main() {<br>
            &nbsp;&nbsp;var student1 string = "John" <em>//тип - строка</em> <br>
            &nbsp;&nbsp;var student2 = &quot;Jane&quot; <em>//тип выводится</em><br>
            &nbsp;&nbsp;x := 2 <em>//тип выводится</em><br>
            <br>&nbsp;&nbsp;fmt.Println(student1)<br>
            &nbsp;&nbsp;fmt.Println(student2)<br>
            &nbsp;&nbsp;fmt.Println(x)<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../gotryit/demo_variable_declaration1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p><b>Примечание:</b> Типы переменных <code class="w3-codespan">student2</code> и <code class="w3-codespan">x</code> <b>выводятся</b> из их значений.</p>
    <hr>

    <h2>Объявление переменной без начального значения</h2>
    <p>В Go инициализируются все переменные. Итак, если вы объявляете переменную без начального значения, для неё будет установлено значение по умолчанию для ее типа:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br><br>
            func main() {<br>
            &nbsp;&nbsp;var a string<br>
            &nbsp;&nbsp;var b int<br>
            &nbsp;&nbsp;var c bool<br>
            <br>
            &nbsp;&nbsp;fmt.Println(a)<br>
            &nbsp;&nbsp;fmt.Println(b)<br>
            &nbsp;&nbsp;fmt.Println(c)<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../gotryit/demo_variable_declaration2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <h4>Объяснение примера</h4>
    <p>В этом примере есть 3 переменные:</p>
    <ul>
        <li><code class="w3-codespan">a</code></li>
        <li><code class="w3-codespan">b</code></li>
        <li><code class="w3-codespan">c</code></li>
    </ul>
    <p>Эти переменные объявлены, но им не присвоены начальные значения.</p>
    <p>Запустив код, мы видим, что у них уже есть значения по умолчанию для соответствующих типов:</p>
    <ul>
        <li><code class="w3-codespan">a</code> - <code class="w3-codespan">""</code></li>
        <li><code class="w3-codespan">b</code> - <code class="w3-codespan">0</code></li>
        <li><code class="w3-codespan">c</code> - <code class="w3-codespan">false</code></li>
    </ul>
    <hr>

    <h2>Присвоение значения после объявления</h2>
    <p>Можно присвоить значение переменной после её объявления. Это полезно для случаев, когда значение изначально неизвестно.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br><br>
            func main() {<br>
            &nbsp;&nbsp;var student1 string<br>
            &nbsp;&nbsp;student1 = "John"<br>
            &nbsp;&nbsp;fmt.Println(student1)<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../gotryit/demo_variable_declaration3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Невозможно объявить переменную с помощью "<code class="w3-codespan">:=</code>" без присвоения ей значения.</p>
    </div>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
      <?php include '../include/adup_content.php'; ?>
    </div>
    <hr>

    <h2>Различие между <code class="w3-codespan">var</code> и <code class="w3-codespan">:=</code></h2>
    <p>Есть небольшие различия между <code class="w3-codespan">var</code> и <code class="w3-codespan">:=</code>:</p>

    <table class="ws-table-all notranslate">
        <tr>
            <th>var</th>
            <th>:=</th>
        </tr>
        <tr>
            <td>Может использоваться <b>внутри</b> и <b>вне</b> функций</td>
            <td>Может использоваться только <b>внутри</b> функций</td>
        </tr>
        <tr>
            <td>Объявление переменной и присвоение значения <b>можно выполнить отдельно</b></td>
            <td>Объявление переменной и присвоение значения <b>не могут выполняться отдельно</b> (должны выполняться в одной строке)</td>
        </tr>
    </table>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере показано объявление переменных вне функции с ключевым словом <code class="w3-codespan">var</code>:</p>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br><br>

            var a int<br>
            var b int = 2<br>
            var c = 3<br><br>

            func main() {<br>
            &nbsp;&nbsp;a = 1<br>
            &nbsp;&nbsp;fmt.Println(a)<br>
            &nbsp;&nbsp;fmt.Println(b)<br>
            &nbsp;&nbsp;fmt.Println(c)<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../gotryit/demo_variable_declaration4.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example w3-pale-red" >
        <h3>Пример</h3>
        <p>Поскольку <code class="w3-codespan">:=</code> используется вне функции, запуск программы приводит к ошибке.</p>
        <div class="w3-code notranslate javaHigh w3-border-red">
            package main<br>
            import ("fmt")<br>
            <br>
            a :=  1<br><br>

            func main() {<br>
            &nbsp;&nbsp;fmt.Println(a)<br>
            }
        </div>
        <p>Результат:</p>
        <div class="notranslate w3-black w3-padding">
            <code>
                ./prog.go:5:1: syntax error: non-declaration statement outside function body
            </code>
        </div>
        <a class="w3-btn w3-margin-bottom w3-margin-top" href="../gotryit/demo_variable_declaration5.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div>
        <h2>Go Упражнения</h2>
        <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/go/exercise.php?filename=exercise_variables1" method="post" target="_blank">
            <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
            <div class="exercisewindow">
                <h2>Упражнение:</h2>
                <p>Создайте переменную с именем <code class="w3-codespan">myNum</code> и присвойте ей значение <code class="w3-codespan">50</code>.</p>
                <div class="exerciseprecontainer">
<pre style="overflow: auto;">
package main
import ("fmt") <br>
func main() {
  var <input name="ex1" maxlength="5" style="width:65px;"> = <input name="ex2" maxlength="2" style="width:25px;">
  fmt.Println(<input name="ex3" maxlength="5" style="width:65px;">)
}
</pre>
                </div>
                <br>
                <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
            </div>
        </form>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="go_comments.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="go_variable_multi.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>