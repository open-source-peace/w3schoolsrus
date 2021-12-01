<?php include '../include/head.php'; ?>

<title>Go Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Go Учебник. Бесплатные курсы онлайн по языку программирования Go. Примеры кода. Тесты и задачи. Полный справочник по Go. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/bigbtn.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_go.php'; ?>
<?php include '../include/before_content_go.php'; ?>

<article>
    <h1>Go (Golang)<span class="color_h1">Учебник</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="go_introduction.php">Next &#10095;</a>
    </div>
    <div class="w3-panel w3-info intro">
        <p><strong>Go</strong> - это популярный язык программирования.</p>
        <p><strong>Go</strong> используется для создания компьютерных программ.</p>
        <a class="w3-btn w3-margin-bottom shadow-black-1" href="go_introduction.php" style="font-size: 18px;padding-left:25px;padding-right:25px;font-family: 'Source Sans Pro', sans-serif;margin-top:6px;">Начать изучение Go немедленно &raquo;</a>
    </div>
    <hr>

    <h2>Примеры в каждой главе</h2>
    <p>Наш онлайн-редактор <b>&quot;Попробуйте сами&quot;</b> упрощает изучение языка Go. Вы можете редактировать код языка программирования Go и просматривать результат в своём браузере.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br>
            <br>
            func main() {<br>
            &nbsp; fmt.Println(&quot;Hello World!&quot;)<br>
            }<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../gotryit/demo_helloworld.html">Попробуйте сами &raquo;</a>
    </div>

    <p><b>Кликните на кнопку &quot;Попробуйте сами&quot;, чтобы увидеть, как она работает.</b></p>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
      <?php include '../include/adup_content.php'; ?>
    </div>
    <hr>

    <h2>Рекомендуется использовать меню уроков</h2>
    <p>Если вы новичок и только начинаете изучать <strong>язык программирования Go</strong>, то рекомендуется изучать этот учебник по языку Go в последовательности тем, указанных в меню.</p>
    <p>Если у вас большой экран (например, монитор компьютера), меню всегда будет слева.</p>
    <p>Если у вас маленький экран (например, если вы пользуетесь смартфоном или планшетом), откройте меню, кликнув иконку верхнего меню <span class="w3-xlarge">☰</span>.</p>
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
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="go_introduction.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>