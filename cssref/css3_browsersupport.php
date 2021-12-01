<?php include '../include/head.php'; ?>

<title>CSS Справочник. Поддержка браузерами. <?php include '../include/title.php'; ?></title>
<meta name="description" content="CSS Полный справочник. Поддержка браузерами. <?php include '../include/description.php'; ?>">

<style>
    table.bsReference td {
        vertical-align:middle;
        background-position:center;
        background-repeat:no-repeat;
        text-align:right;
        font-size:10px;
    }
    table.bsReference td.bsProperty {
        white-space:nowrap;
        text-align:left;
        font-size:14px;
    }
    table.bsReference .bsEdge  {width:100px;background-image:url('../images/compatible_edge2020.gif');}
    table.bsReference .bsIE   {width:100px;background-image:url('../images/compatible_ie2020.gif');}
    table.bsReference .bsFirefox {width:100px;background-image:url('../images/compatible_firefox2020.gif')}
    table.bsReference .bsChrome  {width:100px;background-image:url('../images/compatible_chrome2020.gif');}
    table.bsReference .bsSafari  {width:100px;background-image:url('../images/compatible_safari2020.gif');}
    table.bsReference .bsOpera  {width:100px;background-image:url('../images/compatible_opera2020.gif')}
    table.bsReference .bsNoEdge  {width:100px;}
    table.bsReference .bsNoIE  {width:100px;}
    table.bsReference .bsNoFirefox {width:100px;}
    table.bsReference .bsNoChrome {width:100px;}
    table.bsReference .bsNoSafari {width:100px;}
    table.bsReference .bsNoOpera {width:100px;}
    table.bsReference .bsPreEdge  {width:100px;background-image:url('../images/precompatible_edge5920.gif');}
    table.bsReference .bsPreIE  {width:100px;background-image:url('../images/precompatible_ie5920.gif');}
    table.bsReference .bsPreFirefox {width:120px;background-image:url('../images/precompatible_firefox5920.gif');}
    table.bsReference .bsPreChrome {width:120px;background-image:url('../images/precompatible_chrome5920.gif');}
    table.bsReference .bsPreSafari {width:100px;background-image:url('../images/precompatible_safari5920.gif');}
    table.bsReference .bsPreOpera {width:120px;background-image:url('../images/precompatible_opera5920.gif');}
    table.bsReference td.bsExp  {text-align:left;font-size:15px;}
    table.bsReference td.bsExpIcon {width:120px;}
</style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cssref.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Справочник поддержки браузерами</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_selectors.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS Справочник поддержки браузерами</h2>
    <p>В таблице ниже перечислены все свойства CSS и то, как каждое свойство поддерживается в разных браузерах.</p>
    <p>Число справа от значка браузера указывает, в какой версии браузера свойство было поддержано впервые.</p>

    <div class="w3-responsive">
        <table class="w3-table-all bsReference">
            <tr>
                <th>Свойство</th>
                <th style="text-align:center;">IE</th>
                <th style="text-align:center;">Firefox</th>
                <th style="text-align:center;">Chrome</th>
                <th style="text-align:center;">Safari</th>
                <th style="text-align:center;">Opera</th>
            </tr>
            <tr>
                <td class="bsProperty"><strong>A</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_align-content.php">align-content</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">28</td>
                <td class="bsChrome">21</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">12.1</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_align-items.php">align-items</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">20</td>
                <td class="bsChrome">21</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">12.1</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_align-self.php">align-self</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">20</td>
                <td class="bsChrome">21</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">12.1</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_all.php">all</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">27</td>
                <td class="bsChrome">37</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">24</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_animation.php">animation</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">43</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">30</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_animation-delay.php">animation-delay</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">43</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">30</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_animation-direction.php">animation-direction</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">43</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">30</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_animation-duration.php">animation-duration</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">43</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">30</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_animation-fill-mode.php">animation-fill-mode</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">43</td>
                <td class="bsPreSafari">4</td>
                <td class="bsPreOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_animation-iteration-count.php">animation-iteration-count</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">43</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">30</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_animation-name.php">animation-name</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">43</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">30</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_animation-play-state.php">animation-play-state</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">43</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">30</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_animation-timing-function.php">animation-timing-function</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">43</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">30</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>B</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_backface-visibility.php">backface-visibility</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">36</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">23</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_background.php">background</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_background-attachment.php">background-attachment</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_background-blend-mode.php">background-blend-mode</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">30</td>
                <td class="bsChrome">35</td>
                <td class="bsSafari">7.1</td>
                <td class="bsOpera">22</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_background-clip.php">background-clip</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">4</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3</td>
                <td class="bsOpera">10.5</td>
            </tr>

            <tr>
                <td class="bsProperty"><a href="pr_background-color.php">background-color</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_background-image.php">background-image</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_background-origin.php">background-origin</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">4</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3</td>
                <td class="bsOpera">10.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_background-position.php">background-position</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_background-repeat.php">background-repeat</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_background-size.php">background-size</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">4</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">4.1</td>
                <td class="bsOpera">10</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border.php">border</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-bottom.php">border-bottom</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-bottom_color.php">border-bottom-color</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_border-bottom-left-radius.php">border-bottom-left-radius</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">4</td>
                <td class="bsChrome">5</td>
                <td class="bsSafari">5</td>
                <td class="bsOpera">10.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_border-bottom-right-radius.php">border-bottom-right-radius</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">4</td>
                <td class="bsChrome">5</td>
                <td class="bsSafari">5</td>
                <td class="bsOpera">10.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-bottom_style.php">border-bottom-style</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">9.2</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-bottom_width.php">border-bottom-width</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-collapse.php">border-collapse</a></td>
                <td class="bsEdge">5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1.2</td>
                <td class="bsOpera">4</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-color.php">border-color</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_border-image.php">border-image</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">15</td>
                <td class="bsChrome">16</td>
                <td class="bsSafari">6</td>
                <td class="bsOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_border-image-outset.php">border-image-outset</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">15</td>
                <td class="bsChrome">15</td>
                <td class="bsSafari">6</td>
                <td class="bsOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_border-image-repeat.php">border-image-repeat</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">15</td>
                <td class="bsChrome">15</td>
                <td class="bsSafari">6</td>
                <td class="bsOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_border-image-slice.php">border-image-slice</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">15</td>
                <td class="bsChrome">15</td>
                <td class="bsSafari">6</td>
                <td class="bsOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_border-image-source.php">border-image-source</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">15</td>
                <td class="bsChrome">15</td>
                <td class="bsSafari">6</td>
                <td class="bsOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_border-image-width.php">border-image-width</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">13</td>
                <td class="bsChrome">15</td>
                <td class="bsSafari">6</td>
                <td class="bsOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-left.php">border-left</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-left_color.php">border-left-color</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-left_style.php">border-left-style</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">9.2</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-left_width.php">border-left-width</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_border-radius.php">border-radius</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">4</td>
                <td class="bsChrome">5</td>
                <td class="bsSafari">5</td>
                <td class="bsOpera">10.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-right.php">border-right</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-right_color.php">border-right-color</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-right_style.php">border-right-style</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">9.2</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-right_width.php">border-right-width</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-spacing.php">border-spacing</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">4</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-style.php">border-style</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-top.php">border-top</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-top_color.php">border-top-color</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_border-top-left-radius.php">border-top-left-radius</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">4</td>
                <td class="bsChrome">5</td>
                <td class="bsSafari">5</td>
                <td class="bsOpera">10.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_border-top-right-radius.php">border-top-right-radius</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">4</td>
                <td class="bsChrome">5</td>
                <td class="bsSafari">5</td>
                <td class="bsOpera">10.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-top_style.php">border-top-style</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">9.2</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-top_width.php">border-top-width</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_border-width.php">border-width</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_pos_bottom.php">bottom</a></td>
                <td class="bsEdge">5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">6</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_box-decoration-break.php">box-decoration-break</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">32</td>
                <td class="bsPreChrome">22</td>
                <td class="bsPreSafari">6.1</td>
                <td class="bsPreOpera">11.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_box-shadow.php">box-shadow</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">4</td>
                <td class="bsChrome">10</td>
                <td class="bsSafari">5.1</td>
                <td class="bsOpera">10.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_box-sizing.php">box-sizing</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">29</td>
                <td class="bsChrome">10</td>
                <td class="bsSafari">5.1</td>
                <td class="bsOpera">9.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>C</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_tab_caption-side.php">caption-side</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">4</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_caret-color.php">caret-color</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">53</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_charset_rule.php">@charset</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">1.5</td>
                <td class="bsChrome">2</td>
                <td class="bsSafari">4</td>
                <td class="bsOpera">9</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_class_clear.php">clear</a></td>
                <td class="bsEdge">5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">6</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_pos_clip.php">clip</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_clip-path.php">clip-path</a></td>
                <td class="bsEdge">12</td>
                <td class="bsFirefox">54</td>
                <td class="bsChrome">55</td>
                <td class="bsSafari">9.1</td>
                <td class="bsOpera">42</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_text_color.php">color</a></td>
                <td class="bsEdge">3</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_column-count.php">column-count</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">50</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">37</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_column-fill.php">column-fill</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">50</td>
                <td class="bsSafari">10</td>
                <td class="bsOpera">37</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_column-gap.php">column-gap</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">50</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">37</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_column-rule.php">column-rule</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">50</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">37</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_column-rule-color.php">column-rule-color</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">50</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">37</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_column-rule-style.php">column-rule-style</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">50</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">37</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_column-rule-width.php">column-rule-width</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">50</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">37</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_column-span.php">column-span</a></td>
                <td class="bsEdge">10</td>
                <td class="bsNoFirefox"></td>
                <td class="bsChrome">50</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">37</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_column-width.php">column-width</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">50</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">37</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_columns.php">columns</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">50</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">37</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_gen_content.php">content</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">4</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_gen_counter-increment.php">counter-increment</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">2</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3.1</td>
                <td class="bsOpera">9.6</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_gen_counter-reset.php">counter-reset</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">2</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3.1</td>
                <td class="bsOpera">9.6</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_class_cursor.php">cursor</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">4</td>
                <td class="bsChrome">5</td>
                <td class="bsSafari">5</td>
                <td class="bsOpera">9.6</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>D</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_text_direction.php">direction</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">2</td>
                <td class="bsSafari">1.3</td>
                <td class="bsOpera">9.2</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_class_display.php">display</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">3</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3.1</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>E</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_tab_empty-cells.php">empty-cells</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1.2</td>
                <td class="bsOpera">4</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>F</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_filter.php">filter</a></td>
                <td class="bsEdge">13</td>
                <td class="bsFirefox">35</td>
                <td class="bsChrome">53</td>
                <td class="bsSafari">9.1</td>
                <td class="bsOpera">40</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_flex.php">flex</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">28</td>
                <td class="bsChrome">29</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">17</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_flex-basis.php">flex-basis</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">28</td>
                <td class="bsChrome">29</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">17</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_flex-direction.php">flex-direction</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">28</td>
                <td class="bsChrome">29</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">17</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_flex-flow.php">flex-flow</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">28</td>
                <td class="bsChrome">29</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">17</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_flex-grow.php">flex-grow</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">28</td>
                <td class="bsChrome">29</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">17</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_flex-shrink.php">flex-shrink</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">28</td>
                <td class="bsChrome">29</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">17</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_flex-wrap.php">flex-wrap</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">28</td>
                <td class="bsChrome">29</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">17</td>
            </tr>

            <tr>
                <td class="bsProperty"><a href="pr_class_float.php">float</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_font_font.php">font</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_font-face_rule.php">@font-face</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">3.6</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3</td>
                <td class="bsOpera">10</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_font_font-family.php">font-family</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty">font-feature-settings</td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">34</td>
                <td class="bsChrome">48</td>
                <td class="bsSafari">9.1</td>
                <td class="bsOpera">35</td>
            </tr>
            <tr>
                <td class="bsProperty">@font-feature-values</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">34</td>
                <td class="bsNoChrome"></td>
                <td class="bsNoSafari"></td>
                <td class="bsNoOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_font-kerning.php">font-kerning</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">34</td>
                <td class="bsPreChrome">32</td>
                <td class="bsSafari">7</td>
                <td class="bsNoOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty">font-language-override</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">34</td>
                <td class="bsNoChrome"></td>
                <td class="bsNoSafari"></td>
                <td class="bsNoOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_font_font-size.php">font-size</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_font-size-adjust.php">font-size-adjust</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">3</td>
                <td class="bsNoChrome"></td>
                <td class="bsNoSafari"></td>
                <td class="bsNoOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_font-stretch.php">font-stretch</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">9</td>
                <td class="bsChrome">48</td>
                <td class="bsSafari">11</td>
                <td class="bsOpera">35</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_font_font-style.php">font-style</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty">font-synthesis</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">34</td>
                <td class="bsNoChrome"></td>
                <td class="bsSafari">10</td>
                <td class="bsNoOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_font_font-variant.php">font-variant</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty">font-variant-alternates</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">34</td>
                <td class="bsNoChrome"></td>
                <td class="bsSafari">9.1</td>
                <td class="bsNoOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty">font-variant-caps</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">34</td>
                <td class="bsChrome">52</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">39</td>
            </tr>
            <tr>
                <td class="bsProperty">font-variant-east-asian</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">34</td>
                <td class="bsNoChrome"></td>
                <td class="bsNoSafari"></td>
                <td class="bsNoOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty">font-variant-ligatures</td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">34</td>
                <td class="bsChrome">34</td>
                <td class="bsPreSafari">7</td>
                <td class="bsPreOpera">19</td>
            </tr>
            <tr>
                <td class="bsProperty">font-variant-numeric</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">34</td>
                <td class="bsChrome">52</td>
                <td class="bsSafari"></td>
                <td class="bsOpera">39</td>
            </tr>
            <tr>
                <td class="bsProperty">font-variant-position</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">34</td>
                <td class="bsNoChrome"></td>
                <td class="bsNoSafari"></td>
                <td class="bsNoOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_font_weight.php">font-weight</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">2</td>
                <td class="bsSafari">1.3</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>G</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid.php">grid</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsSafari">10.1</td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-area.php">grid-area</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsSafari">10.1</td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-auto-columns.php">grid-auto-columns</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsSafari">10.1</td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-auto-flow.php">grid-auto-flow</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-auto-rows.php">grid-auto-rows</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-column.php">grid-column</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsSafari">10.1</td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-column-end.php">grid-column-end</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-column-gap.php">grid-column-gap</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-column-start.php">grid-column-start</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-gap.php">grid-gap</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-row.php">grid-row</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsSafari">10.1</td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-row-end.php">grid-row-end</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-row-gap.php">grid-row-gap</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-row-start.php">grid-row-start</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-template.php">grid-template</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-template-areas.php">grid-template-areas</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsSafari">10.1</td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-template-columns.php">grid-template-columns</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_grid-template-rows.php">grid-template-rows</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">57</td>
                <td class="bsSafari">10.1</td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>H</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_hanging-punctuation.php">hanging-punctuation</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsNoFirefox"></td>
                <td class="bsNoChrome"></td>
                <td class="bsNoSafari"></td>
                <td class="bsNoOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_dim_height.php">height</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_hyphens.php">hyphens</a></td>
                <td class="bsPreEdge">10</td>
                <td class="bsFirefox">43</td>
                <td class="bsChrome">55</td>
                <td class="bsPreSafari">5.1</td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>I</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty">image-rendering</td>
                <td class="bsNoEdge"></td>
                <td class="bsPreFirefox">3.6</td>
                <td class="bsChrome">41</td>
                <td class="bsSafari">10</td>
                <td class="bsOpera">28</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_import_rule.php">@import</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox"></td>
                <td class="bsChrome"></td>
                <td class="bsSafari"></td>
                <td class="bsOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_isolation.php">isolation</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">36</td>
                <td class="bsChrome">41</td>
                <td class="bsSafari">7.1</td>
                <td class="bsOpera">30</td>
            </tr>

            <tr>
                <td class="bsProperty"><strong>J</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_justify-content.php">justify-content</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">28</td>
                <td class="bsChrome">29</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">17</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>K</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_animation-keyframes.php">@keyframes</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">43</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">30</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>L</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_pos_left.php">left</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_text_letter-spacing.php">letter-spacing</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty">line-break</td>
                <td class="bsEdge">5.5</td>
                <td class="bsNoFirefox"></td>
                <td class="bsChrome">1</td>
                <td class="bsSafari"></td>
                <td class="bsOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_dim_line-height.php">line-height</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_list-style.php">list-style</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_list-style-image.php">list-style-image</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_list-style-position.php">list-style-position</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_list-style-type.php">list-style-type</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>M</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_margin.php">margin</a></td>
                <td class="bsEdge">6</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_margin-bottom.php">margin-bottom</a></td>
                <td class="bsEdge">6</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_margin-left.php">margin-left</a></td>
                <td class="bsEdge">6</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_margin-right.php">margin-right</a></td>
                <td class="bsEdge">6</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_margin-top.php">margin-top</a></td>
                <td class="bsEdge">6</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty">mask</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">53</td>
                <td class="bsPreChrome">4</td>
                <td class="bsPreSafari">4</td>
                <td class="bsPreOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty">mask-type</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">53</td>
                <td class="bsPreChrome">4</td>
                <td class="bsPreSafari">4</td>
                <td class="bsPreOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_dim_max-height.php">max-height</a></td>
                <td class="bsEdge">7</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">2</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_dim_max-width.php">max-width</a></td>
                <td class="bsEdge">7</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">2</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_mediaquery.php">@media</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">3.5</td>
                <td class="bsChrome">21</td>
                <td class="bsSafari">4</td>
                <td class="bsOpera">9</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_dim_min-height.php">min-height</a></td>
                <td class="bsEdge">7</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">2</td>
                <td class="bsOpera">4</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_dim_min-width.php">min-width</a></td>
                <td class="bsEdge">7</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">2</td>
                <td class="bsOpera">4</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_mix-blend-mode.php">mix-blend-mode</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">32</td>
                <td class="bsChrome">41</td>
                <td class="bsSafari">8</td>
                <td class="bsOpera">35</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>N</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty">@namespace</td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">8</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>O</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_object-fit.php">object-fit</a></td>
                <td class="bsEdge">16</td>
                <td class="bsFirefox">36</td>
                <td class="bsChrome">31</td>
                <td class="bsSafari">7.1</td>
                <td class="bsOpera">19</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_object-position.php">object-position</a></td>
                <td class="bsEdge">16</td>
                <td class="bsFirefox">36</td>
                <td class="bsChrome">31</td>
                <td class="bsSafari">7.1</td>
                <td class="bsOpera">19</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_opacity.php">opacity</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">2</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3.1</td>
                <td class="bsOpera">9</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_order.php">order</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">28</td>
                <td class="bsChrome">29</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">17</td>
            </tr>
            <tr>
                <td class="bsProperty">orphans</td>
                <td class="bsEdge">10</td>
                <td class="bsNoFirefox"></td>
                <td class="bsChrome">25</td>
                <td class="bsSafari">7</td>
                <td class="bsOpera">12.1</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_outline.php">outline</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">1.5</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1.2</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_outline-color.php">outline-color</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">1.5</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1.2</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_outline-offset.php">outline-offset</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">3.5</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3</td>
                <td class="bsOpera">10.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_outline-style.php">outline-style</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">1.5</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1.2</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_outline-width.php">outline-width</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">1.5</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1.2</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_pos_overflow.php">overflow</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty">overflow-wrap</td>
                <td class="bsEdge">18&nbsp;</td>
                <td class="bsFirefox">49</td>
                <td class="bsChrome">23</td>
                <td class="bsSafari">6.1</td>
                <td class="bsOpera">12.1</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_overflow-x.php">overflow-x</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox">3.5</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3</td>
                <td class="bsOpera">9.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_overflow-y.php">overflow-y</a></td>
                <td class="bsEdge">9</td>
                <td class="bsFirefox"></td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3</td>
                <td class="bsOpera">9.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>P</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_padding.php">padding</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_padding-bottom.php">padding-bottom</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_padding-left.php">padding-left</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_padding-right.php">padding-right</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_padding-top.php">padding-top</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty">@page</td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">19</td>
                <td class="bsChrome">15</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_print_pageba.php">page-break-after</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1.2</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_print_pagebb.php">page-break-before</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1.2</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_print_pagebi.php">page-break-inside</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">19</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1.3</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_perspective.php">perspective</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">36</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">23</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_perspective-origin.php">perspective-origin</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">36</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">23</td>
            </tr>
            <tr>
                <td class="bsProperty">place-content</td>
                <td class="bsEdge"></td>
                <td class="bsFirefox">60</td>
                <td class="bsChrome">59</td>
                <td class="bsSafari">11.1</td>
                <td class="bsOpera">51</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_pointer-events.php">pointer-events</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">3.6</td>
                <td class="bsChrome">2</td>
                <td class="bsSafari">4</td>
                <td class="bsOpera">9</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_class_position.php">position</a></td>
                <td class="bsEdge">7</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1.2</td>
                <td class="bsOpera">4</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>Q</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_gen_quotes.php">quotes</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">1.5</td>
                <td class="bsChrome">11</td>
                <td class="bsSafari">5.1</td>
                <td class="bsOpera">4</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>R</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_resize.php">resize</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">5</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">4</td>
                <td class="bsOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_pos_right.php">right</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">5</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>S</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_scroll-behavior.php">scroll-behavior</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">36</td>
                <td class="bsChrome">61</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">48</td>
            </tr>
            <tr>
                <td class="bsProperty">shape-image-treshold</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">62</td>
                <td class="bsChrome">37</td>
                <td class="bsSafari">10.1</td>
                <td class="bsOpera">24</td>
            </tr>
            <tr>
                <td class="bsProperty">shape-margin</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">62</td>
                <td class="bsChrome">37</td>
                <td class="bsSafari">10.1</td>
                <td class="bsOpera">24</td>
            </tr>
            <tr>
                <td class="bsProperty">@supports</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">22</td>
                <td class="bsChrome">28</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">12.1</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>T</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_tab-size.php">tab-size</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsPreFirefox">4</td>
                <td class="bsChrome">21</td>
                <td class="bsSafari">6.1</td>
                <td class="bsOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_tab_table-layout.php">table-layout</a></td>
                <td class="bsEdge">5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">14</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_text_text-align.php">text-align</a></td>
                <td class="bsEdge">3</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_text-align-last.php">text-align-last</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">49</td>
                <td class="bsChrome">47</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">34</td>
            </tr>
            <tr>
                <td class="bsProperty">text-combine-upright</td>
                <td class="bsPreEdge">11</td>
                <td class="bsFirefox">48</td>
                <td class="bsPreChrome">48</td>
                <td class="bsPreSafari"></td>
                <td class="bsPreOpera">34</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_text_text-decoration.php">text-decoration</a></td>
                <td class="bsEdge">3</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_text-decoration-color.php">text-decoration-color</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">36</td>
                <td class="bsChrome">57</td>
                <td class="bsPreSafari">7.1</td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_text-decoration-line.php">text-decoration-line</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">36</td>
                <td class="bsChrome">57</td>
                <td class="bsPreSafari">7.1</td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_text-decoration-style.php">text-decoration-style</a></td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">36</td>
                <td class="bsChrome">57</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">44</td>
            </tr>
            <tr>
                <td class="bsProperty">text-emphasis</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">46</td>
                <td class="bsChrome">25</td>
                <td class="bsSafari">7.1</td>
                <td class="bsPreOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty">text-emphasis-color</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">46</td>
                <td class="bsChrome">25</td>
                <td class="bsSafari">7.1</td>
                <td class="bsPreOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty">text-emphasis-position</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">46</td>
                <td class="bsChrome">25</td>
                <td class="bsSafari">7.1</td>
                <td class="bsPreOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty">text-emphasis-style</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">46</td>
                <td class="bsChrome">25</td>
                <td class="bsSafari">7.1</td>
                <td class="bsPreOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_text_text-indent.php">text-indent</a></td>
                <td class="bsEdge">3</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_text-justify.php">text-justify</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">55</td>
                <td class="bsNoChrome"></td>
                <td class="bsNoSafari"></td>
                <td class="bsNoOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty">text-orientation</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">41</td>
                <td class="bsChrome">48</td>
                <td class="bsPreSafari">10.1</td>
                <td class="bsPreOpera">35</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_text-overflow.php">text-overflow</a></td>
                <td class="bsEdge">6</td>
                <td class="bsFirefox">7</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3.1</td>
                <td class="bsOpera">11</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_text-shadow.php">text-shadow</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">3.5</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">4</td>
                <td class="bsOpera">9.6</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_text_text-transform.php">text-transform</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">7</td>
            </tr>
            <tr>
                <td class="bsProperty">text-underline-position</td>
                <td class="bsNoEdge"></td>
                <td class="bsNoFirefox"></td>
                <td class="bsChrome">33</td>
                <td class="bsNoSafari"></td>
                <td class="bsNoOpera"></td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_pos_top.php">top</a></td>
                <td class="bsEdge">5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">6</td>
            </tr>
            <tr>
                <td class="bsProperty">touch-action</td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">52</td>
                <td class="bsChrome">36</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">23</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_transform.php">transform</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">36</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">23</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_transform-origin.php">transform-origin</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">36</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">23</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_transform-style.php">transform-style</a></td>
                <td class="bsEdge">11</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">36</td>
                <td class="bsSafari">9</td>
                <td class="bsOpera">23</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_transition.php">transition</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">26</td>
                <td class="bsSafari">6.1</td>
                <td class="bsOpera">12.1</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_transition-delay.php">transition-delay</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">26</td>
                <td class="bsSafari">6.1</td>
                <td class="bsOpera">12.1</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_transition-duration.php">transition-duration</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">26</td>
                <td class="bsSafari">6.1</td>
                <td class="bsOpera">12.1</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_transition-property.php">transition-property</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">26</td>
                <td class="bsSafari">6.1</td>
                <td class="bsOpera">12.1</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_transition-timing-function.php">transition-timing-function</a></td>
                <td class="bsEdge">10</td>
                <td class="bsFirefox">16</td>
                <td class="bsChrome">26</td>
                <td class="bsSafari">6.1</td>
                <td class="bsOpera">12.1</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>U</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_text_unicode-bidi.php">unicode-bidi</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">2</td>
                <td class="bsSafari">1.3</td>
                <td class="bsOpera">9.2</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_user-select.php">user-select</a></td>
                <td class="bsPreEdge">10</td>
                <td class="bsPreFirefox">2</td>
                <td class="bsChrome">54</td>
                <td class="bsPreSafari">3.1</td>
                <td class="bsOpera">41</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>V</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_pos_vertical-align.php">vertical-align</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">4</td>
            </tr>
            <tr>
                <td class="bsProperty">@viewport</td>
                <td class="bsEdge">10</td>
                <td class="bsNoFirefox"></td>
                <td class="bsChrome">29</td>
                <td class="bsNoSafari"></td>
                <td class="bsOpera">16</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_class_visibility.php">visibility</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">4</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>W</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_text_white-space.php">white-space</a></td>
                <td class="bsEdge">8</td>
                <td class="bsFirefox">3.5</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">3</td>
                <td class="bsOpera">9.5</td>
            </tr>
            <tr>
                <td class="bsProperty">widows</td>
                <td class="bsEdge">10</td>
                <td class="bsNoFirefox"></td>
                <td class="bsChrome">25</td>
                <td class="bsSafari">7</td>
                <td class="bsOpera">12.1</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_dim_width.php">width</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty">will-change</td>
                <td class="bsNoEdge"></td>
                <td class="bsFirefox">36</td>
                <td class="bsChrome">36</td>
                <td class="bsSafari">9.1</td>
                <td class="bsOpera">24</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_word-break.php">word-break</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">15</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3.1</td>
                <td class="bsOpera">15</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_text_word-spacing.php">word-spacing</a></td>
                <td class="bsEdge">6</td>
                <td class="bsFirefox">1</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">3.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_word-wrap.php">word-wrap</a></td>
                <td class="bsEdge">5.5</td>
                <td class="bsFirefox">3.5</td>
                <td class="bsChrome">4</td>
                <td class="bsSafari">3.1</td>
                <td class="bsOpera">10.5</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="css3_pr_writing-mode.php">writing-mode</a></td>
                <td class="bsEdge">12</td>
                <td class="bsFirefox">41</td>
                <td class="bsChrome">48</td>
                <td class="bsSafari">11</td>
                <td class="bsOpera">35</td>
            </tr>
            <tr>
                <td class="bsProperty"><strong>Z</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="bsProperty"><a href="pr_pos_z-index.php">z-index</a></td>
                <td class="bsEdge">4</td>
                <td class="bsFirefox">3</td>
                <td class="bsChrome">1</td>
                <td class="bsSafari">1</td>
                <td class="bsOpera">4</td>
            </tr>
        </table>
    </div>

    <h2>Объяснение иконок</h2>
    <table class="bsReference table">
        <tr><td class="bsEdge bsExpIcon"></td><td class="bsExp">Поддерживается Edge/Internet Explorer</td></tr>
        <tr><td class="bsFirefox bsExpIcon"></td><td class="bsExp">Поддерживается Firefox</td></tr>
        <tr><td class="bsChrome bsExpIcon"></td><td class="bsExp">Поддерживается Google Chrome</td></tr>
        <tr><td class="bsSafari bsExpIcon"></td><td class="bsExp">Поддерживается Safari</td></tr>
        <tr><td class="bsOpera bsExpIcon"></td><td class="bsExp">Поддерживается Opera</td></tr>
    </table>
    <br>

    <table class="bsReference table">
        <tr><td class="bsPreEdge bsExpIcon"></td><td class="bsExp">Поддерживается Edge/Internet Explorer из префиксом -ms-</td></tr>
        <tr><td class="bsPreFirefox bsExpIcon"></td><td class="bsExp">Поддерживается Firefox из префиксом -moz-</td></tr>
        <tr><td class="bsPreChrome bsExpIcon"></td><td class="bsExp">Поддерживается Google Chrome из префиксом -webkit-</td></tr>
        <tr><td class="bsPreSafari bsExpIcon"></td><td class="bsExp">Поддерживается Safari из префиксом -webkit-</td></tr>
        <tr><td class="bsPreOpera bsExpIcon"></td><td class="bsExp">Поддерживается Opera из префиксом -webkit-</td></tr>
    </table>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_selectors.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>