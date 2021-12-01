<?php include '../include/head.php'; ?>

<title>Go Объявление нескольких переменных. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Go Переменные. Объявление нескольких переменных в Golang.  Примеры кода. Полный справочник по языку Golang. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_go.php'; ?>
<?php include '../include/before_content_go.php'; ?>

<article>
    <h1>Go Объявление нескольких переменных</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="go_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="go_variable_naming_rules.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Объявление нескольких переменных</h2>
    <p>В языке программирования Go можно объявить несколько переменных в одной строке.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере показано, как объявить несколько переменных в одной строке:</p>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br><br>
            func main() {<br>
            &nbsp;&nbsp;var a, b, c, d int = 1, 3, 5, 7<br>
            <br>
            &nbsp;&nbsp;fmt.Println(a)<br>
            &nbsp;&nbsp;fmt.Println(b)<br>
            &nbsp;&nbsp;fmt.Println(c)<br>
            &nbsp;&nbsp;fmt.Println(d)<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../gotryit/demo_variable_declaration6.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Если вы используете ключевое слово <code class="w3-codespan">type</code>, можно объявить только <strong>один тип</strong> переменной в каждой строке.</p>
    </div>

    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
        <div class='w3-hide-small w3-hide-medium'>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- udup_content_media_horizontally -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4060216941760396" data-ad-slot="6582329806" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
        </div>
    </div>
    <hr>

    <p>If the type of variable is not specified, you can declare different types of variables in the same line:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br><br>
            func main() {<br>
            &nbsp;&nbsp;var a, b = 6, "Hello&quot;<br>
            &nbsp;&nbsp;c, d := 7, "World!"<br>
            <br>
            &nbsp;&nbsp;fmt.Println(a)<br>
            &nbsp;&nbsp;fmt.Println(b)<br>
            &nbsp;&nbsp;fmt.Println(c)<br>
            &nbsp;&nbsp;fmt.Println(d)<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../gotryit/trygo.html?filename=demo_variable_declaration7" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Go Variable Declaration in a Block</h2>
    <p>Multiple variable declarations can also be grouped together into a block for greater readability:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br><br>
            func main() {<br>
            &nbsp;&nbsp; var (<br>
            &nbsp;&nbsp;&nbsp;&nbsp; a int<br>
            &nbsp;&nbsp;&nbsp;&nbsp; b int = 1 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; c string = "hello"<br>
            &nbsp;&nbsp; )<br>
            <br>
            &nbsp;&nbsp;fmt.Println(a)<br>
            &nbsp;&nbsp;fmt.Println(b)<br>
            &nbsp;&nbsp;fmt.Println(c)<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../gotryit/demo_variable_declaration8.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="go_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="go_variable_naming_rules.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>