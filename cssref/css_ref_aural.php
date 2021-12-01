<?php include '../include/head.php'; ?>

<title>CSS Справочник. Aural (акустический). <?php include '../include/title.php'; ?></title>
<meta name='description' content="CSS акустический справочник. Применение таблицы стилей Aural. Свойства и значения. <?php include '../include/description.php'; ?>">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cssref.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Aural (акустический)</span>. Справочник</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_functions.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_websafe_fonts.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Таблица стилей Aural</h2>
    <p>Таблицы стилей Aural используют комбинацию синтеза речи и звуковых эффектов, чтобы предоставить пользователю возможность слушать информацию, а не читать информацию.</p>
    <p>Aural презентация может быть использована:</p>
    <ul>
        <li>слепыми людьми</li>
        <li>чтобы помочь пользователям научиться читать</li>
        <li>чтобы помочь пользователям, у которых проблемы с чтением</li>
        <li>для домашних развлечений</li>
        <li>в машине</li>
        <li>сообществами с плохой печатью</li>
    </ul>
    <p>Ауральная презентация преобразует документ в обычный текст и передает его в программу чтения с экрана (программу, которая читает все символы на экране).</p>
    <p>Пример таблицы стилей Aural:</p>

    <div class="w3-code w3-border notranslate cssHigh"><div>
            h1, h2, h3, h4
            {<br>
            &nbsp;
            voice-family: male;<br>
            &nbsp;
            richness: 80;<br>
            &nbsp;
            cue-before: url(&quot;beep.au&quot;)<br>
            }
        </div></div>

    <p>В приведенном выше примере синтезатор речи будет воспроизводить звук, а затем произносить заголовки очень насыщенным мужским голосом.</p>
    <hr>

    <h2>CSS Aural Справочник</h2>
    <p>&quot;CSS&quot; столбец указывает, в какой версии CSS определено свойство (CSS1 или CSS2).</p>

    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th style="width:25%">Свойство</th>
                <th style="width:43%">Описание</th>
                <th style="width:27%">Значения</th>
                <th>CSS</th>
            </tr>
            <tr>
                <td>azimuth</td>
                <td>Устанавливает, откуда должен исходить звук</td>
                <td><i>angle</i><br>
                    left-side<br>
                    far-left<br>
                    left<br>
                    center-left<br>
                    center<br>
                    center-right<br>
                    right<br>
                    far-right<br>
                    right-side<br>
                    behind<br>
                    leftwards<br>
                    rightwards</td>
                <td>2</td>
            </tr>
            <tr>
                <td>cue</td>
                <td>Устанавливает свойства cue в одном объявлении</td>
                <td><i>cue-before<br>
                        cue-after</i></td>
                <td>2</td>
            </tr>
            <tr>
                <td>cue-after</td>
                <td>Определяет звук, который будет воспроизводиться после произнесения содержимого элемента</td>
                <td>none<br>
                    <i>url</i></td>
                <td>2</td>
            </tr>
            <tr>
                <td>cue-before</td>
                <td>Определяет звук, который будет воспроизводиться перед произнесением содержимого элемента</td>
                <td>none<br>
                    <i>url</i></td>
                <td>2</td>
            </tr>
            <tr>
                <td>elevation</td>
                <td>Устанавливает, откуда должен исходить звук</td>
                <td>angle<br>
                    below<br>
                    level<br>
                    above<br>
                    higher<br>
                    lower</td>
                <td>2</td>
            </tr>
            <tr>
                <td>pause</td>
                <td>Устанавливает свойства паузы в одном объявлении</td>
                <td><i>pause-before<br>
                        pause-after</i></td>
                <td>2</td>
            </tr>
            <tr>
                <td>pause-after</td>
                <td>Определяет паузу после произнесения содержимого элемента</td>
                <td><i>time<br>
                        %</i></td>
                <td>2</td>
            </tr>
            <tr>
                <td>pause-before</td>
                <td>Определяет паузу перед произнесением содержимого элемента</td>
                <td><i>time<br>
                        %</i></td>
                <td>2</td>
            </tr>
            <tr>
                <td>pitch</td>
                <td>Определяет говорящий голос</td>
                <td><i>frequency</i><br>
                    x-low<br>
                    low<br>
                    medium<br>
                    high<br>
                    x-high</td>
                <td>2</td>
            </tr>
            <tr>
                <td>pitch-range</td>
                <td>Определяет изменение в голосе голоса. (Монотонный голос или анимированный голос?)</td>
                <td><i>number</i></td>
                <td>2</td>
            </tr>
            <tr>
                <td>play-during</td>
                <td>Определяет звук, который будет воспроизводиться при проигрывании содержимого элемента</td>
                <td>auto<br>
                    none<br>
                    <i>url</i><br>
                    mix<br>
                    repeat</td>
                <td>2</td>
            </tr>
            <tr>
                <td>richness</td>
                <td>Определяет богатство говорящего голоса. (Богатый голос или тонкий голос?)</td>
                <td><i>number</i></td>
                <td>2</td>
            </tr>
            <tr>
                <td>speak</td>
                <td>Определяет, будет ли содержимое выводиться на звук</td>
                <td>normal<br>
                    none<br>
                    spell-out</td>
                <td>2</td>
            </tr>
            <tr>
                <td>speak-header</td>
                <td>Определяет, как обрабатывать заголовки таблицы. Следует ли произносить заголовки перед каждой ячейкой или только перед ячейкой с заголовком, отличным от предыдущей ячейки</td>
                <td>always<br>
                    once<br>
                </td>
                <td>2</td>
            </tr>
            <tr>
                <td>speak-numeral</td>
                <td>Определяет, как говорить числа</td>
                <td>digits<br>
                    continuous</td>
                <td>2</td>
            </tr>
            <tr>
                <td>speak-punctuation</td>
                <td>Определяет, как произносить знаки препинания</td>
                <td>none<br>
                    code</td>
                <td>2</td>
            </tr>
            <tr>
                <td>speech-rate</td>
                <td>Определяет скорость речи</td>
                <td><i>number</i><br>
                    x-slow<br>
                    slow<br>
                    medium<br>
                    fast<br>
                    x-fast<br>
                    faster<br>
                    slower</td>
                <td>2</td>
            </tr>
            <tr>
                <td>stress</td>
                <td>Определяет &quot;стресс&quot; в говорящем голосе</td>
                <td><i>number</i></td>
                <td>2</td>
            </tr>
            <tr>
                <td>voice-family</td>
                <td>Определяет голосовую семью речи</td>
                <td><i>specific-voice<br>
                        generic-voice</i></td>
                <td>2</td>
            </tr>
            <tr>
                <td>volume</td>
                <td>Определяет громкость речи</td>
                <td><i>number<br>
                    </i><i>%<br>
                    </i>silent<br>
                    x-soft<br>
                    soft<br>
                    medium<br>
                    loud<br>
                    x-loud</td>
                <td>2</td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_functions.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_websafe_fonts.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>