<?php include '../include/head.php'; ?>

<title>Go Комментарии. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Go Комментарии. Как пишутся комментарии в коде Golang? Однострочные и многострочные комментарии. Зачем нужны комментарии в коде? Примеры кода. Полный справочник по языку Golang. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_go.php'; ?>
<?php include '../include/before_content_go.php'; ?>

<article>
    <h1>Go Комментарии</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="go_syntax.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="go_variables.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Go Комментарии</h2>
    <p><strong>Комментарии в языке Go</strong> можно использовать, чтобы объяснить код и сделать его более читабельным.</p>
    <p>Их также можно использовать для предотвращения выполнения кода при тестировании альтернативного кода (при дебаггинге).</p>
    <p><strong>Комментарии</strong> могут быть <strong>однострочными</strong> или <strong>многострочными</strong>.</p>
    <hr>

    <h2>Go Однострочные комментарии</h2>
    <p>Однострочные комментарии начинаются с двух косых черт (слэшев). (<code class="w3-codespan">//</code>).</p>
    <p>Любой текст между <code class="w3-codespan">//</code> и окончанием строки игнорируется компилятором (не будет выполнен).</p>
    <p>В этом примере используются однострочные комментарии:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            <em>// Это комментарий</em><br>
            package main<br>
            import ("fmt")<br>
            <br>
            func main() {<br>
            &nbsp;&nbsp;<em>// Это комментарий</em><br>
            &nbsp;&nbsp;fmt.Println("Hello World!")<br>
            }<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../gotryit/demo_helloworld4.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В этом примере используется однострочный комментарий в конце строки кода:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br>
            <br>
            func main() {<br>
            &nbsp;&nbsp;fmt.Println("Hello World!") <em>// Это комментарий</em><br>
            }<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../gotryit/demo_helloworld5.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Go Многострочные комментарии</h2>
    <p>Многострочные комментарии начинаются <code class="w3-codespan">/*</code> и заканчиваются <code class="w3-codespan">*/</code>.</p>

    <p>Любой текст между <code class="w3-codespan">/*</code> и <code class="w3-codespan">*/</code> будет игнорироваться компилятором:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br>
            <br>
            func main() {<br>
            &nbsp;&nbsp;<em>/* Код ниже напечатает слова Hello World</em><br>
            &nbsp;&nbsp;<em>на экран, и это потрясающе */</em><br>
            &nbsp;&nbsp;fmt.Println("Hello World!")<br>
            }<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../gotryit/demo_helloworld6.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Вам решать, что вы хотите использовать. Обычно мы используем <code class="w3-codespan">//</code> для коротких комментариев и <code class="w3-codespan">/* */</code> для более длинных комментариев.</p>
    </div>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
      <?php include '../include/adup_content.php'; ?>
    </div>
    <hr>

    <h2>Комментарий для предотвращения выполнения кода</h2>
    <p>Вы можете использовать комментарии, чтобы предотвратить выполнение кода.</p>
    <p>Закомментированный код можно сохранить для дальнейшего использования и устранения неполадок.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br>
            <br>
            func main() {<br>
            &nbsp;&nbsp;fmt.Println("Hello World!")<br>
            &nbsp;&nbsp;<em>// fmt.Println("Эта строка не выполняется")</em><br>
            }<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../gotryit/demo_helloworld7.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div>
        <h2>Go Упражнения</h2>
        <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/go/exercise.php?filename=exercise_comments1" method="post" target="_blank">
            <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
            <div class="exercisewindow">
                <h2>Упражнение:</h2>
                <p>Комментарии в Go пишутся специальным символом, каким?</p>
                <div class="exerciseprecontainer">
<pre style="overflow: auto;">
package main
import ("fmt") <br>
func main() {
  <input name="ex1" maxlength="2" style="width:25px;"> это комментарий
  fmt.Println("Hello World!")
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
        <a class="w3-left w3-btn" href="go_syntax.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="go_variables.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>