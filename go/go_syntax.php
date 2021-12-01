<?php include '../include/head.php'; ?>

<title>Go Синтаксис. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Go Синтаксис. Пакеты. Инструкции. Компактный код. Примеры кода. Полный справочник по языку Golang. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_go.php'; ?>
<?php include '../include/before_content_go.php'; ?>

<article>
    <h1>Go <span class="color_h1">Синтаксис</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="go_getting_started.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="go_comments.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Go Синтаксис</h2>
    <p>Любые Go файлы состоят из следующих частей:</p>
    <ul>
        <li>Объявленный пакет</li>
        <li>Импортируемые пакеты</li>
        <li>Функции</li>
        <li>Инструкции и выражения</li>
    </ul>

    <p>Давайте разберём следующий код, чтобы лучше его понять:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br>
            <br>
            func main() { <br>
            &nbsp;&nbsp;fmt.Println("Hello World!") <br>
            }<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../gotryit/demo_helloworld.html">Попробуйте сами &raquo;</a>
    </div>

    <h3>Объяснение примера</h3>
    <p><b>Строка 1:</b> В Go каждая программа является частью пакета. Мы определяем это с помощью ключевого слова <strong>package</strong>. В этом примере программа принадлежит &quot;основному&quot; пакету.</p>
    <p><b>Строка 2:</b> <code class="w3-codespan">import ("fmt")</code> позволяет импортировать файлы, включенные в пакет <code class="w3-codespan">fmt</code>.</p>
    <p><b>Строка 3:</b> Пустая строка. Go игнорирует пробелы. Наличие пробелов в коде делает его более читабельным.</p>
    <p><b>Строка 4:</b> <code class="w3-codespan">func main() {}</code> является функцией. Любой код внутри фигурных скобок <code class="w3-codespan">{}</code> будет выполнен.</p>
    <p><b>Строка 5:</b> <code class="w3-codespan">fmt.Println()</code> это функция, доступная из пакета <code class="w3-codespan">fmt</code>. Используется для вывода/печати текста. В нашем примере она выведет "Hello World!".</p>

    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> В Go любой исполняемый код принадлежит &quot;main&quot; (главному) пакету.</p>
    </div>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
      <?php include '../include/adup_content.php'; ?>
    </div>
    <hr>

    <h2>Go Инструкции</h2>
    <p><code class="w3-codespan">fmt.Println("Hello World!")</code> - это инструкция.</p>
    <p>В Go инструкции разделяются завершением строки (нажатие клавиши Enter) или символом "<code class="w3-codespan">;</code>".
    <p>Нажатие клавиши Enter добавляет "<code class="w3-codespan">;</code>" в конец строки неявно (не отображается в исходном коде).</p>
    <p>Левая фигурная скобка <code class="w3-codespan">{</code> не может стоять в начале строки.</p>
    <p>Запустите следующий код и посмотрите, что произойдет:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br>
            <br>
            func main() <br>{ <br>
            &nbsp;&nbsp;fmt.Println("Hello World!") <br>
            } <br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../gotryit/demo_helloworld2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Go Компактный код</h2>

    <p>Вы можете написать более компактный код, как показано ниже (это не рекомендуется, потому что это затрудняет чтение кода):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            package main; import ("fmt"); func main() { fmt.Println("Hello World!");}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../gotryit/demo_helloworld3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div>
        <h2>Go Упражнения</h2>
        <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/go/exercise.php?filename=exercise_syntax1" method="post" target="_blank">
            <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
            <div class="exercisewindow">
                <h2>Упражнение:</h2>
                <p>Вставьте недостающую часть кода ниже, чтобы вывести "Hello World".</p>
                <div class="exerciseprecontainer">
<pre style="overflow: auto;">
package main
import ("fmt")<br>
func main() {
  <input name="ex1" maxlength="11" style="width: 115px;">("Hello World!")
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
        <a class="w3-left w3-btn" href="go_getting_started.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="go_comments.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>