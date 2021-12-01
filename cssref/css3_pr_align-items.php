<?php include '../include/head.php'; ?>

<title>CSS Свойство align-items. <?php include '../include/title.php'; ?></title>
<meta name='description' content="CSS Свойство align-items. <?php include '../include/description.php'; ?>">
<link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cssref.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS Свойство <span class="color_h1">align-items</span></h1>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="css3_pr_align-content.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный CSS </span>Справочник</a>
        <a class="w3-right w3-btn" href="css3_pr_align-self.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
    <br>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Center the alignments for all the items of the flexible &lt;div&gt; element:</p>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;&nbsp;display: flex;<br>&nbsp;&nbsp;align-items: center;<br>
            }
        </div>
        <a target="_blank" href="tryit.asp?filename=trycss3_align-items" class="w3-btn w3-margin-bottom">Try it Yourself &raquo;</a>
    </div>
    <hr>

    <h2>Definition and Usage</h2>

    <p>The <code class="w3-codespan">align-items</code> property specifies the default alignment for items inside the flexible container.</p>

    <p><b>Tip:</b> Use the <a href="css3_pr_align-self.php">align-self</a> property of each item to override the <code class="w3-codespan">align-items</code> property.</p>

    <div class="w3-responsive">
        <table class="ws-table-all">
            <tr>
                <th style="width:25%">Default value:</th>
                <td style="width:75%">stretch</td>
            </tr>
            <tr>
                <th>Inherited:</th>
                <td>no</td>
            </tr>
            <tr>
                <th>Animatable:</th>
                <td>no. <a href="css_animatable.php">Read about <em>animatable</em></a>
                </td>
            </tr>
            <tr>
                <th>Version:</th>
                <td>CSS3</td>
            </tr>
            <tr>
                <th>JavaScript syntax:</th>
                <td><i>object</i>.style.alignItems=&quot;center&quot;
                    <a target="_blank" class="w3-btn btnsmall" href="tryit.asp?filename=trycss3_js_align-items">Try it</a>
                </td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>Browser Support</h2>
    <p>The numbers in the table specify the first browser version that fully supports the property.</p>
    <p>Numbers followed by -webkit- specify the first version that worked with a prefix.</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:20%;font-size:16px;text-align:left;">Property</th>
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Internet Explorer / Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td style="text-align:left;">align-items</td>
                <td>21.0</td>
                <td>11.0</td>
                <td>20.0</td>
                <td>9.0<br>7.0&nbsp;-webkit-</td>
                <td>12.1</td>
            </tr>
        </table>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>CSS Syntax</h2>
    <div class="w3-code w3-border notranslate">
        <div>
            align-items: stretch|center|flex-start|flex-end|baseline|initial|inherit;
        </div>
    </div>
    <h2>Property Values</h2>
    <div class="w3-responsive">
        <table class="ws-table-all notranslate">
            <tr>
                <th style="width:22%">Value</th>
                <th style="width:68%">Description</th>
                <th style="width:10%">Play it</th>
            </tr>
            <tr>
                <td>stretch</td>
                <td>Default. Items are stretched to fit the container</td>
                <td><a target="_blank" class="w3-btn btnplayit" href="playit.asp?filename=playcss_align-items&preval=stretch">Play it &raquo;</a></td>
            </tr>
            <tr>
                <td>center</td>
                <td>Items are positioned at the center of the container</td>
                <td><a target="_blank" class="w3-btn btnplayit" href="playit.asp?filename=playcss_align-items&preval=center">Play it &raquo;</a></td>
            </tr>
            <tr>
                <td>flex-start</td>
                <td>Items are positioned at the beginning of the container</td>
                <td><a target="_blank" class="w3-btn btnplayit" href="playit.asp?filename=playcss_align-items&preval=flex-start">Play it &raquo;</a></td>
            </tr>
            <tr>
                <td>flex-end</td>
                <td>Items are positioned at the end of the container</td>
                <td><a target="_blank" class="w3-btn btnplayit" href="playit.asp?filename=playcss_align-items&preval=flex-end">Play it &raquo;</a></td>
            </tr>
            <tr>
                <td>baseline</td>
                <td>Items are positioned at the baseline of the container</td>
                <td><a target="_blank" class="w3-btn btnplayit" href="playit.asp?filename=playcss_align-items&preval=baseline">Play it &raquo;</a></td>
            </tr>
            <tr>
                <td>initial</td>
                <td>Sets this property to its default value. <a href="css_initial.php">Read about <em>initial</em></a></td>
                <td><a target="_blank" class="w3-btn btnplayit" href="playit.asp?filename=playcss_align-items&preval=initial">Play it &raquo;</a></td>
            </tr>
            <tr>
                <td>inherit</td>
                <td>Inherits this property from its parent element. <a href="css_inherit.php">Read about <em>inherit</em></a></td>
                <td></td>
            </tr>
        </table>
    </div>
    <hr>
    <h2>Related Pages</h2>
    <p>CSS Reference: <a href="css3_pr_align-content.php">align-content property</a></p>
    <p>CSS Reference: <a href="css3_pr_align-self.php">align-self property</a></p>
    <p>HTML DOM reference: <a href="../jsref/prop_style_alignitems.php">alignItems property</a></p>
    <hr>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="css3_pr_align-content.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный CSS </span>Справочник</a>
        <a class="w3-right w3-btn" href="css3_pr_align-self.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>