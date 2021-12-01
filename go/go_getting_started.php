<?php include '../include/head.php'; ?>

<title>Go Учебник. Начало обучения. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Go Учебник. Начало обучения. Установка Go на компьютер. Установка IDE или редактора кода. Быстрый старт. Выучить онлайн язык программирования Go. Примеры кода. Полный справочник по языку Golang. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_go.php'; ?>
<?php include '../include/before_content_go.php'; ?>

<article>
    <h1>Go <span class="color_h1">СТАРТ</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="go_introduction.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="go_syntax.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Начало обучения</h2>
    <p>Чтобы начать использовать Go, вам понадобятся две вещи:</p>
    <ul>
        <li>Текстовый редактор, например VS Code (или другие <a href="../html/html_editors.php" target="_blank">редакторы кода</a>), для написания кода Go.</li>
        <li>Компилятор, например GCC, для перевода кода Go на язык, понятный компьютеру.</li>
    </ul>

    <p>Есть много текстовых редакторов и компиляторов на выбор. В этом учебнике мы будем использовать IDE (см. ниже).</p>
    <hr>

    <h2>Установка Go</h2>
    <p>Вы можете найти соответствующие установочные файлы по адресу <a href="https://golang.org/dl/" target="_blank" rel="nofollow">https://golang.org/dl/</a>.</p>
    <p>Следуйте инструкциям, относящимся к вашей операционной системе. Чтобы проверить, успешно ли был установлен Go, вы можете запустить следующую команду в окне терминала (командной строке):</p>

    <div class="w3-code notranslate javaHigh">
        go version
    </div>

    <p>Должна отображаться версия вашей установки Go.</p>
    <hr>

    <h2>Go Установка IDE</h2>
    <p>IDE (интегрированная среда разработки) используется для редактирования и компиляции кода.</p>
    <p>Популярные IDE: <a href="https://code.visualstudio.com/" target="_blank" rel="nofollow" title="Перейти на официальный сайт VS Code">Visual Studio Code (VS Code)</a>, <a href="https://www.vim.org/download.php" target="_blank" rel="nofollow" title="Перейти на официальный сайт Vim">Vim</a>, <a href="https://www.eclipse.org/downloads/" target="_blank" rel="nofollow" title="Перейти на официальный сайт Eclipse">Eclipse</a> и <a href="https://notepad-plus-plus.org/downloads/" target="_blank" rel="nofollow" title="Перейти на официальный сайт Notepad++">Notepad++</a>. Все они бесплатны, и их можно использовать как для редактирования, так и для отладки кода Go.</p>
    <p><b>Примечание:</b> Веб-IDE тоже могут работать с Go, но их функциональность ограничена.</p>
    <p>В нашем учебнике мы будем использовать редактор <strong>VS Code</strong>, который, по нашему мнению, является универсальным и достаточно удобным для начинающих программистов и веб-разработчиков.</p>
    <p>Вы можете найти последнюю версию VS Code по ссылке <a href="https://code.visualstudio.com/" target="_blank" rel="nofollow">https://code.visualstudio.com/</a>.</p>
    <hr>

    <h2>Go Быстрый старт</h2>
    <p>Создадим нашу первую программу Go.</p>
    <ul>
        <li>Запустите редактор VS Code.</li>
        <li>Откройте диспетчер расширений или нажмите комбинацию <kbd class="shortcut">Ctrl + Shift + x</kbd> на клавиатуре.</li>
        <li>В поле поиска введите &quot;go&quot; и нажмите <kbd class="shortcut">Enter</kbd>.</li>
        <li>Найдите расширение Go от команды GO в Google и установите его.</li>
        <li>Установите расширение.</li>
        <li>После завершения установки откройте палитру команд, нажав <kbd class="shortcut">Ctrl + Shift + p</kbd></li>
        <li>Выполните команду <code class="w3-codespan">Go: Install/Update Tools</code>.</li>
        <li>Выберите все предоставленные инструменты и нажмите ОК.</li>
    </ul>
    <p>VS Code теперь настроен на использование Go. </p>
    <p>Откройте окно терминала и введите:</p>

    <div class="w3-code notranslate javaHigh">
        go mod init example.com/hello
    </div>

    <p>Не волнуйтесь, если вы не понимаете, зачем мы вводим указанную выше команду. Просто думайте об этом как о чем-то, что вы делаете всегда, и что вы узнаете об этом больше в следующей главе.</p>
    <p>Создайте новый файл (Файл &gt; Новый файл). Скопируйте и вставьте следующий код и сохраните файл как <code class="w3-codespan">helloworld.go</code> (Файл &gt; Сохранить как):</p>

    <div class="w3-example">
        <h4>helloworld.go</h4>
        <div class="w3-code notranslate javaHigh">
            package main<br>
            import ("fmt")<br>
            <br>
            func main() { <br>
            &nbsp; fmt.Println("Hello World!") <br>
            } <br>
        </div>
    </div>

    <p>Не волнуйтесь, если вы не понимаете приведенный выше код - мы подробно обсудим его в следующих главах. А пока сосредоточьтесь на том, как запустить код.</p>
    <p>Откройте терминал в VS Code и введите:</p>

    <div class="w3-code notranslate javaHigh">
        go run .\helloworld.go
    </div>

    <div class="w3-example w3-padding-16">
        <div class="notranslate w3-black w3-padding">
            <code>
                Hello World!
            </code>
        </div>
    </div>

    <p><strong>Поздравляем!</strong> Вы написали и выполнили свою первую программу на Go.</p>
    <p>Если вы хотите сохранить программу как исполняемый файл, запустите:</p>

    <div class="w3-code notranslate javaHigh">
        go build .\helloworld.go
    </div>
    <hr>

    <h2>Обучение языку Go в школе W3Schools</h2>
    <p>Изучая язык программирования Go на сайте W3Schools, вы можете использовать наш инструмент <b>Попробуйте сами</b>. Он показывает и код, и результат. Это поможет вам понять каждую часть по мере нашего продвижения вперед:</p>
    <div class="w3-example">
        <h3>helloworld.go</h3>
        <p>Code:</p>
        <div class="w3-code notranslate javaHigh">
            package main
            <br>
            import ("fmt")
            <br>
            <br>
            func main() {
            <br>
            &nbsp;fmt.Println("Hello World!")
            <br>
            }
        </div>
        <p>Результат:</p>
        <div class="notranslate w3-black w3-padding">
            <code>Hello World!</code>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom w3-margin-top" href="../gotryit/demo_helloworld.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="go_introduction.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="go_syntax.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>