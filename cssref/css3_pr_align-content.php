<?php include '../include/head.php'; ?>

<title>CSS Свойство align-content. <?php include '../include/title.php'; ?></title>
<meta name='description' content="CSS Свойство align-content. Определение и использование. Свойство значений. <?php include '../include/description.php'; ?>">
<link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cssref.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS Свойство <span class="color_h1">align-content</span></h1>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="css_entities.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный CSS </span>Справочник</a>
        <a class="w3-right w3-btn" href="css3_pr_align-items.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
    <br>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Линии упаковки по направлению к центру гибкого контейнера:</p>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>&nbsp;&nbsp;width: 70px;<br>&nbsp;&nbsp;height: 300px;<br>&nbsp; border: 1px solid #c3c3c3;<br>&nbsp;&nbsp;display: flex;<br>
            &nbsp; flex-wrap: wrap;<br>&nbsp;&nbsp;align-content: center;<br>}
        </div>
        <a target="_blank" href="../csstryit/trycss3_align-content.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Определение и использование</h2>
    <p>Свойство <code class="w3-codespan">align-content</code> изменяет поведение свойства <a href="css3_pr_flex-wrap.php">flex-wrap</a>. Оно похоже на <a href="css3_pr_align-items.php">align-items</a>, но вместо выравнивания гибких элементов выравнивает гибкие линии.</p>
    <p><b>Примечание:</b> Чтобы это свойство могло иметь какое-либо действие, должно быть несколько строк элементов!</p>
    <p><b>Совет:</b> Используйте свойство <a href="css3_pr_justify-content.php">justify-content</a> чтобы выровнять элементы по главной оси (по горизонтали).</p>
    <div class="w3-responsive">
        <table class="ws-table-all">
            <tr>
                <th style="width:25%">Значение по умолчанию:</th>
                <td style="width:75%">stretch</td>
            </tr>
            <tr>
                <th>Унаследовано:</th>
                <td>нет</td>
            </tr>
            <tr>
                <th>Анимируемый:</th>
                <td>нет. <a href="css_animatable.php">Читать об <em>анимировании</em></a>
                </td>
            </tr>
            <tr>
                <th>Версия:</th>
                <td>CSS3</td>
            </tr>
            <tr>
                <th>JavaScript синтаксис:</th>
                <td><i>object</i>.style.alignContent=&quot;center&quot;
                    <a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss3_js_align-content.html">Попробуй это</a>
                </td>
            </tr>
        </table>
    </div>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, полностью поддерживающую свойство.</p>
    <p>Цифры, за которыми следует -webkit-, указывают первую версию, которая работала с префиксом.</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:25%;font-size:16px;text-align:left;">Свойство</th>
                <th style="width:15%;" class="bsChrome" title="Chrome"></th>
                <th style="width:15%;" class="bsEdge" title="Internet Explorer / Edge"></th>
                <th style="width:15%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:15%;" class="bsSafari" title="Safari"></th>
                <th style="width:15%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td style="text-align:left;">align-content</td>
                <td>21.0</td>
                <td>11.0</td>
                <td>28.0</td>
                <td>9.0<br>7.0&nbsp;-webkit-</td>
                <td>12.1</td>
            </tr>
        </table>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>CSS Синтаксис</h2>
    <div class="w3-code w3-border notranslate"><div>
            align-content: stretch|center|flex-start|flex-end|space-between|space-around|initial|inherit;</div></div>

    <h2>Свойство значений</h2>
    <div class="w3-responsive">
        <table class="ws-table-all notranslate">
            <tr>
                <th style="width:22%">Значение</th>
                <th style="width:68%">Описание</th>
                <th style="width:10%">Просмотреть</th>
            </tr>
            <tr>
                <td>stretch</td>
                <td>Значение по умолчанию. Линии растягиваются, чтобы занять оставшееся место</td>
                <td><a target="_blank" class="w3-btn btnplayit" href="../csstryit/playcss_align-content&preval=stretch.html">Просмотреть &raquo;</a></td>
            </tr>
            <tr>
                <td>center</td>
                <td>Линии упакованы к центру гибкого контейнера</td>
                <td><a target="_blank" class="w3-btn btnplayit" href="../csstryit/playcss_align-content&preval=center.html">Просмотреть &raquo;</a></td>
            </tr>
            <tr>
                <td>flex-start</td>
                <td>Линии упаковываются к началу гибкого контейнера</td>
                <td><a target="_blank" class="w3-btn btnplayit" href="../csstryit/playcss_align-content&preval=flex-start.html">Просмотреть &raquo;</a></td>
            </tr>
            <tr>
                <td>flex-end</td>
                <td>Линии упаковываются ближе к концу гибкого контейнера</td>
                <td><a target="_blank" class="w3-btn btnplayit" href="../csstryit/playcss_align-content&preval=flex-end.html">Просмотреть &raquo;</a></td>
            </tr>
            <tr>
                <td>space-between</td>
                <td>Линии равномерно распределены в гибком контейнере</td>
                <td><a target="_blank" class="w3-btn btnplayit" href="../csstryit/playcss_align-content&preval=space-between.html">Просмотреть &raquo;</a></td>
            </tr>
            <tr>
                <td>space-around</td>
                <td>Линии равномерно распределены в гибком контейнере, с промежутками половинного размера на обоих концах</td>
                <td><a target="_blank" class="w3-btn btnplayit" href="../csstryit/playcss_align-content&preval=space-around.html">Просмотреть &raquo;</a></td>
            </tr>
            <tr>
                <td>space-evenly</td>
                <td>Линии равномерно распределены в гибком контейнере с равным пространством вокруг них</td>
                <td><a target="_blank" class="w3-btn btnplayit" href="../csstryit/playcss_align-content&preval=space-evenly.html">Просмотреть &raquo;</a></td>
            </tr>
            <tr>
                <td>initial</td>
                <td>Устанавливает для этого свойства значение по умолчанию. <a href="css_initial.php">Читать об <em>initial</em></a></td>
                <td><a target="_blank" class="w3-btn btnplayit" href="../csstryit/playcss_align-content&preval=initial.html">Просмотреть &raquo;</a></td>
            </tr>
            <tr>
                <td>inherit</td>
                <td>Наследует это свойство от своего родительского элемента. <a href="css_inherit.php">Читать об <em>inherit</em></a></td>
                <td></td>
            </tr>
        </table>
    </div>
    <hr>
    <h2>Связанные страницы</h2>
    <p>CSS Справочник: <a href="css3_pr_align-items.php">Свойство align-items</a></p>
    <p>CSS Справочник: <a href="css3_pr_align-self.php">Свойство align-self</a></p>
    <p>CSS Справочник: <a href="css3_pr_justify-content.php">Свойство justify-content</a></p>
    <p>HTML DOM Справочник: <a href="../jsref/prop_style_aligncontent.php">Свойство alignContent</a></p>
    <hr>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="css_entities.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный CSS </span>Справочник</a>
        <a class="w3-right w3-btn" href="css3_pr_align-items.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>