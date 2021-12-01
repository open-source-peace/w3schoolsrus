<?php include '../include/head.php'; ?>
<title>HTML Цвета HEX. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Цвета HEX. Полный справочник. Какие цвета используются на веб-сайтах? Шестнадцатеричные цвета. Цветовые стандарты. <?php include '../include/description.php'; ?>'>
<link rel='canonical' href='https://w3schoolsrus.github.io/colors/colors_hex.html' />
<script src='../lib/w3color.js'></script>
<style>
        .colorbox{
            padding:5px;
        }
        .innerbox{
            padding-top:30px;
            font-size:120%;
            font-family:"xSegoe UI",Arial,sans-serif;
            font-weight:bold;
        }
        .colornamespan {
            font-size:90%;
        }
        .linktocolormixerdiv {
            width:100%;
            margin-top:5px;
            font-size:80%;
            text-align:left;
            padding-left:5px;
            padding-bottom:5px;
            opacity:0.7;
        }
        .linktocolorpickerdiv {
            width:100%;
            margin-top:5px;
            font-size:80%;
            text-align:right;
            padding-right:5px;
            padding-bottom:5px;
            opacity:0.7;
        }

        .colorlinkcontainer {
            visibility:hidden;
            margin-top:9px;
            background-color:rgba(0,0,0,0.2);
        }
        #colornamestable a:link,#colornamestable a:hover,#colornamestable a:visited,#colornamestable a:active {
            text-decoration:none;
            color:inherit;
            opacity:0.8;
        }
        #colornamestable a:hover,#colornamestable a:active {
            opacity:1;
        }

        @media screen and (max-width:992px) {
            .colorlinkcontainer{
                visibility:visible;
            }
            .colorlinkcontainer{
                visibility:visible;
            }
        }
        .petter {
            visibility:visible;
        }
        .petter {
            visibility:visible;
        }
    </style>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1>HTML Значения цвета HEX</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_names.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_groups.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Именуемые цвета, отсортированные по значению HEX</h2>
    <p><a href="colors_names.php">Кликните здесь, чтобы увидеть цвета, отсортированные по названию</a></p>

    <div id="colornamestable" class="w3-row">
        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box1" onmouseover="color_mouseover(this, 1)" onmouseout="color_mouseout(this, 1)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=000000">#000000</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Black">Black</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer1">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer1"><a href="../colors/colors_mixer.php?colorbottom=000000&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker1"><a href="../colors/colors_picker.php?colorhex=000000">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box2" onmouseover="color_mouseover(this, 2)" onmouseout="color_mouseout(this, 2)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=000080">#000080</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Navy">Navy</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer2">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer2"><a href="../colors/colors_mixer.php?colorbottom=000080&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker2"><a href="../colors/colors_picker.php?colorhex=000080">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box3" onmouseover="color_mouseover(this, 3)" onmouseout="color_mouseout(this, 3)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=00008B">#00008B</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkBlue">DarkBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer3">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer3"><a href="../colors/colors_mixer.php?colorbottom=00008B&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker3"><a href="../colors/colors_picker.php?colorhex=00008B">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box4" onmouseover="color_mouseover(this, 4)" onmouseout="color_mouseout(this, 4)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=0000CD">#0000CD</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=MediumBlue">MediumBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer4">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer4"><a href="../colors/colors_mixer.php?colorbottom=0000CD&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker4"><a href="../colors/colors_picker.php?colorhex=0000CD">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box5" onmouseover="color_mouseover(this, 5)" onmouseout="color_mouseout(this, 5)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=0000FF">#0000FF</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Blue">Blue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer5">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer5"><a href="../colors/colors_mixer.php?colorbottom=0000FF&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker5"><a href="../colors/colors_picker.php?colorhex=0000FF">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box6" onmouseover="color_mouseover(this, 6)" onmouseout="color_mouseout(this, 6)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=006400">#006400</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkGreen">DarkGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer6">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer6"><a href="../colors/colors_mixer.php?colorbottom=006400&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker6"><a href="../colors/colors_picker.php?colorhex=006400">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box7" onmouseover="color_mouseover(this, 7)" onmouseout="color_mouseout(this, 7)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=008000">#008000</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Green">Green</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer7">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer7"><a href="../colors/colors_mixer.php?colorbottom=008000&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker7"><a href="../colors/colors_picker.php?colorhex=008000">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box8" onmouseover="color_mouseover(this, 8)" onmouseout="color_mouseout(this, 8)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=008080">#008080</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Teal">Teal</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer8">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer8"><a href="../colors/colors_mixer.php?colorbottom=008080&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker8"><a href="../colors/colors_picker.php?colorhex=008080">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box9" onmouseover="color_mouseover(this, 9)" onmouseout="color_mouseout(this, 9)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=008B8B">#008B8B</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkCyan">DarkCyan</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer9">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer9"><a href="../colors/colors_mixer.php?colorbottom=008B8B&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker9"><a href="../colors/colors_picker.php?colorhex=008B8B">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box10" onmouseover="color_mouseover(this, 10)" onmouseout="color_mouseout(this, 10)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=00BFFF">#00BFFF</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DeepSkyBlue">DeepSkyBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer10">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer10"><a href="../colors/colors_mixer.php?colorbottom=00BFFF&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker10"><a href="../colors/colors_picker.php?colorhex=00BFFF">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box11" onmouseover="color_mouseover(this, 11)" onmouseout="color_mouseout(this, 11)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=00CED1">#00CED1</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkTurquoise">DarkTurquoise</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer11">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer11"><a href="../colors/colors_mixer.php?colorbottom=00CED1&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker11"><a href="../colors/colors_picker.php?colorhex=00CED1">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box12" onmouseover="color_mouseover(this, 12)" onmouseout="color_mouseout(this, 12)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=00FA9A">#00FA9A</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=MediumSpringGreen">MediumSpringGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer12">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer12"><a href="../colors/colors_mixer.php?colorbottom=00FA9A&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker12"><a href="../colors/colors_picker.php?colorhex=00FA9A">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box13" onmouseover="color_mouseover(this, 13)" onmouseout="color_mouseout(this, 13)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=00FF00">#00FF00</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Lime">Lime</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer13">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer13"><a href="../colors/colors_mixer.php?colorbottom=00FF00&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker13"><a href="../colors/colors_picker.php?colorhex=00FF00">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box14" onmouseover="color_mouseover(this, 14)" onmouseout="color_mouseout(this, 14)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=00FF7F">#00FF7F</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=SpringGreen">SpringGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer14">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer14"><a href="../colors/colors_mixer.php?colorbottom=00FF7F&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker14"><a href="../colors/colors_picker.php?colorhex=00FF7F">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box15" onmouseover="color_mouseover(this, 15)" onmouseout="color_mouseout(this, 15)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=00FFFF">#00FFFF</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Aqua">Aqua</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer15">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer15"><a href="../colors/colors_mixer.php?colorbottom=00FFFF&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker15"><a href="../colors/colors_picker.php?colorhex=00FFFF">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box16" onmouseover="color_mouseover(this, 16)" onmouseout="color_mouseout(this, 16)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=00FFFF">#00FFFF</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Cyan">Cyan</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer16">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer16"><a href="../colors/colors_mixer.php?colorbottom=00FFFF&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker16"><a href="../colors/colors_picker.php?colorhex=00FFFF">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box17" onmouseover="color_mouseover(this, 17)" onmouseout="color_mouseout(this, 17)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=191970">#191970</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=MidnightBlue">MidnightBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer17">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer17"><a href="../colors/colors_mixer.php?colorbottom=191970&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker17"><a href="../colors/colors_picker.php?colorhex=191970">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box18" onmouseover="color_mouseover(this, 18)" onmouseout="color_mouseout(this, 18)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=1E90FF">#1E90FF</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DodgerBlue">DodgerBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer18">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer18"><a href="../colors/colors_mixer.php?colorbottom=1E90FF&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker18"><a href="../colors/colors_picker.php?colorhex=1E90FF">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box19" onmouseover="color_mouseover(this, 19)" onmouseout="color_mouseout(this, 19)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=20B2AA">#20B2AA</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightSeaGreen">LightSeaGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer19">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer19"><a href="../colors/colors_mixer.php?colorbottom=20B2AA&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker19"><a href="../colors/colors_picker.php?colorhex=20B2AA">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box20" onmouseover="color_mouseover(this, 20)" onmouseout="color_mouseout(this, 20)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=228B22">#228B22</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=ForestGreen">ForestGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer20">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer20"><a href="../colors/colors_mixer.php?colorbottom=228B22&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker20"><a href="../colors/colors_picker.php?colorhex=228B22">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box21" onmouseover="color_mouseover(this, 21)" onmouseout="color_mouseout(this, 21)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=2E8B57">#2E8B57</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=SeaGreen">SeaGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer21">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer21"><a href="../colors/colors_mixer.php?colorbottom=2E8B57&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker21"><a href="../colors/colors_picker.php?colorhex=2E8B57">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box22" onmouseover="color_mouseover(this, 22)" onmouseout="color_mouseout(this, 22)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=2F4F4F">#2F4F4F</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkSlateGray">DarkSlateGray</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer22">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer22"><a href="../colors/colors_mixer.php?colorbottom=2F4F4F&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker22"><a href="../colors/colors_picker.php?colorhex=2F4F4F">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box23" onmouseover="color_mouseover(this, 23)" onmouseout="color_mouseout(this, 23)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=2F4F4F">#2F4F4F</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkSlateGrey">DarkSlateGrey</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer23">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer23"><a href="../colors/colors_mixer.php?colorbottom=2F4F4F&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker23"><a href="../colors/colors_picker.php?colorhex=2F4F4F">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box24" onmouseover="color_mouseover(this, 24)" onmouseout="color_mouseout(this, 24)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=32CD32">#32CD32</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LimeGreen">LimeGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer24">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer24"><a href="../colors/colors_mixer.php?colorbottom=32CD32&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker24"><a href="../colors/colors_picker.php?colorhex=32CD32">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box25" onmouseover="color_mouseover(this, 25)" onmouseout="color_mouseout(this, 25)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=3CB371">#3CB371</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=MediumSeaGreen">MediumSeaGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer25">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer25"><a href="../colors/colors_mixer.php?colorbottom=3CB371&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker25"><a href="../colors/colors_picker.php?colorhex=3CB371">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box26" onmouseover="color_mouseover(this, 26)" onmouseout="color_mouseout(this, 26)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=40E0D0">#40E0D0</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Turquoise">Turquoise</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer26">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer26"><a href="../colors/colors_mixer.php?colorbottom=40E0D0&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker26"><a href="../colors/colors_picker.php?colorhex=40E0D0">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box27" onmouseover="color_mouseover(this, 27)" onmouseout="color_mouseout(this, 27)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=4169E1">#4169E1</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=RoyalBlue">RoyalBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer27">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer27"><a href="../colors/colors_mixer.php?colorbottom=4169E1&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker27"><a href="../colors/colors_picker.php?colorhex=4169E1">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box28" onmouseover="color_mouseover(this, 28)" onmouseout="color_mouseout(this, 28)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=4682B4">#4682B4</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=SteelBlue">SteelBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer28">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer28"><a href="../colors/colors_mixer.php?colorbottom=4682B4&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker28"><a href="../colors/colors_picker.php?colorhex=4682B4">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box29" onmouseover="color_mouseover(this, 29)" onmouseout="color_mouseout(this, 29)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=483D8B">#483D8B</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkSlateBlue">DarkSlateBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer29">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer29"><a href="../colors/colors_mixer.php?colorbottom=483D8B&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker29"><a href="../colors/colors_picker.php?colorhex=483D8B">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box30" onmouseover="color_mouseover(this, 30)" onmouseout="color_mouseout(this, 30)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=48D1CC">#48D1CC</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=MediumTurquoise">MediumTurquoise</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer30">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer30"><a href="../colors/colors_mixer.php?colorbottom=48D1CC&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker30"><a href="../colors/colors_picker.php?colorhex=48D1CC">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box31" onmouseover="color_mouseover(this, 31)" onmouseout="color_mouseout(this, 31)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=4B0082">#4B0082</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Indigo  ">Indigo  </a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer31">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer31"><a href="../colors/colors_mixer.php?colorbottom=4B0082&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker31"><a href="../colors/colors_picker.php?colorhex=4B0082">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box32" onmouseover="color_mouseover(this, 32)" onmouseout="color_mouseout(this, 32)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=556B2F">#556B2F</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkOliveGreen">DarkOliveGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer32">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer32"><a href="../colors/colors_mixer.php?colorbottom=556B2F&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker32"><a href="../colors/colors_picker.php?colorhex=556B2F">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box33" onmouseover="color_mouseover(this, 33)" onmouseout="color_mouseout(this, 33)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=5F9EA0">#5F9EA0</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=CadetBlue">CadetBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer33">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer33"><a href="../colors/colors_mixer.php?colorbottom=5F9EA0&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker33"><a href="../colors/colors_picker.php?colorhex=5F9EA0">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box34" onmouseover="color_mouseover(this, 34)" onmouseout="color_mouseout(this, 34)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=6495ED">#6495ED</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=CornflowerBlue">CornflowerBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer34">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer34"><a href="../colors/colors_mixer.php?colorbottom=6495ED&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker34"><a href="../colors/colors_picker.php?colorhex=6495ED">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box35" onmouseover="color_mouseover(this, 35)" onmouseout="color_mouseout(this, 35)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=663399">#663399</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=RebeccaPurple">RebeccaPurple</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer35">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer35"><a href="../colors/colors_mixer.php?colorbottom=663399&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker35"><a href="../colors/colors_picker.php?colorhex=663399">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box36" onmouseover="color_mouseover(this, 36)" onmouseout="color_mouseout(this, 36)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=66CDAA">#66CDAA</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=MediumAquaMarine">MediumAquaMarine</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer36">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer36"><a href="../colors/colors_mixer.php?colorbottom=66CDAA&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker36"><a href="../colors/colors_picker.php?colorhex=66CDAA">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box37" onmouseover="color_mouseover(this, 37)" onmouseout="color_mouseout(this, 37)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=696969">#696969</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DimGray">DimGray</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer37">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer37"><a href="../colors/colors_mixer.php?colorbottom=696969&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker37"><a href="../colors/colors_picker.php?colorhex=696969">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box38" onmouseover="color_mouseover(this, 38)" onmouseout="color_mouseout(this, 38)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=696969">#696969</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DimGrey">DimGrey</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer38">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer38"><a href="../colors/colors_mixer.php?colorbottom=696969&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker38"><a href="../colors/colors_picker.php?colorhex=696969">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box39" onmouseover="color_mouseover(this, 39)" onmouseout="color_mouseout(this, 39)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=6A5ACD">#6A5ACD</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=SlateBlue">SlateBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer39">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer39"><a href="../colors/colors_mixer.php?colorbottom=6A5ACD&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker39"><a href="../colors/colors_picker.php?colorhex=6A5ACD">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box40" onmouseover="color_mouseover(this, 40)" onmouseout="color_mouseout(this, 40)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=6B8E23">#6B8E23</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=OliveDrab">OliveDrab</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer40">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer40"><a href="../colors/colors_mixer.php?colorbottom=6B8E23&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker40"><a href="../colors/colors_picker.php?colorhex=6B8E23">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box41" onmouseover="color_mouseover(this, 41)" onmouseout="color_mouseout(this, 41)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=708090">#708090</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=SlateGray">SlateGray</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer41">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer41"><a href="../colors/colors_mixer.php?colorbottom=708090&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker41"><a href="../colors/colors_picker.php?colorhex=708090">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box42" onmouseover="color_mouseover(this, 42)" onmouseout="color_mouseout(this, 42)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=708090">#708090</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=SlateGrey">SlateGrey</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer42">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer42"><a href="../colors/colors_mixer.php?colorbottom=708090&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker42"><a href="../colors/colors_picker.php?colorhex=708090">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box43" onmouseover="color_mouseover(this, 43)" onmouseout="color_mouseout(this, 43)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=778899">#778899</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightSlateGray">LightSlateGray</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer43">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer43"><a href="../colors/colors_mixer.php?colorbottom=778899&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker43"><a href="../colors/colors_picker.php?colorhex=778899">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box44" onmouseover="color_mouseover(this, 44)" onmouseout="color_mouseout(this, 44)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=778899">#778899</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightSlateGrey">LightSlateGrey</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer44">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer44"><a href="../colors/colors_mixer.php?colorbottom=778899&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker44"><a href="../colors/colors_picker.php?colorhex=778899">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box45" onmouseover="color_mouseover(this, 45)" onmouseout="color_mouseout(this, 45)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=7B68EE">#7B68EE</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=MediumSlateBlue">MediumSlateBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer45">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer45"><a href="../colors/colors_mixer.php?colorbottom=7B68EE&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker45"><a href="../colors/colors_picker.php?colorhex=7B68EE">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box46" onmouseover="color_mouseover(this, 46)" onmouseout="color_mouseout(this, 46)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=7CFC00">#7CFC00</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LawnGreen">LawnGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer46">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer46"><a href="../colors/colors_mixer.php?colorbottom=7CFC00&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker46"><a href="../colors/colors_picker.php?colorhex=7CFC00">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box47" onmouseover="color_mouseover(this, 47)" onmouseout="color_mouseout(this, 47)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=7FFF00">#7FFF00</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Chartreuse">Chartreuse</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer47">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer47"><a href="../colors/colors_mixer.php?colorbottom=7FFF00&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker47"><a href="../colors/colors_picker.php?colorhex=7FFF00">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box48" onmouseover="color_mouseover(this, 48)" onmouseout="color_mouseout(this, 48)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=7FFFD4">#7FFFD4</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Aquamarine">Aquamarine</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer48">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer48"><a href="../colors/colors_mixer.php?colorbottom=7FFFD4&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker48"><a href="../colors/colors_picker.php?colorhex=7FFFD4">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box49" onmouseover="color_mouseover(this, 49)" onmouseout="color_mouseout(this, 49)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=800000">#800000</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Maroon">Maroon</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer49">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer49"><a href="../colors/colors_mixer.php?colorbottom=800000&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker49"><a href="../colors/colors_picker.php?colorhex=800000">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box50" onmouseover="color_mouseover(this, 50)" onmouseout="color_mouseout(this, 50)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=800080">#800080</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Purple">Purple</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer50">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer50"><a href="../colors/colors_mixer.php?colorbottom=800080&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker50"><a href="../colors/colors_picker.php?colorhex=800080">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box51" onmouseover="color_mouseover(this, 51)" onmouseout="color_mouseout(this, 51)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=808000">#808000</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Olive">Olive</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer51">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer51"><a href="../colors/colors_mixer.php?colorbottom=808000&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker51"><a href="../colors/colors_picker.php?colorhex=808000">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box52" onmouseover="color_mouseover(this, 52)" onmouseout="color_mouseout(this, 52)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=808080">#808080</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Gray">Gray</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer52">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer52"><a href="../colors/colors_mixer.php?colorbottom=808080&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker52"><a href="../colors/colors_picker.php?colorhex=808080">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box53" onmouseover="color_mouseover(this, 53)" onmouseout="color_mouseout(this, 53)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=808080">#808080</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Grey">Grey</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer53">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer53"><a href="../colors/colors_mixer.php?colorbottom=808080&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker53"><a href="../colors/colors_picker.php?colorhex=808080">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box54" onmouseover="color_mouseover(this, 54)" onmouseout="color_mouseout(this, 54)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=87CEEB">#87CEEB</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=SkyBlue">SkyBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer54">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer54"><a href="../colors/colors_mixer.php?colorbottom=87CEEB&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker54"><a href="../colors/colors_picker.php?colorhex=87CEEB">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box55" onmouseover="color_mouseover(this, 55)" onmouseout="color_mouseout(this, 55)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=87CEFA">#87CEFA</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightSkyBlue">LightSkyBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer55">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer55"><a href="../colors/colors_mixer.php?colorbottom=87CEFA&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker55"><a href="../colors/colors_picker.php?colorhex=87CEFA">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box56" onmouseover="color_mouseover(this, 56)" onmouseout="color_mouseout(this, 56)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=8A2BE2">#8A2BE2</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=BlueViolet">BlueViolet</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer56">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer56"><a href="../colors/colors_mixer.php?colorbottom=8A2BE2&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker56"><a href="../colors/colors_picker.php?colorhex=8A2BE2">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box57" onmouseover="color_mouseover(this, 57)" onmouseout="color_mouseout(this, 57)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=8B0000">#8B0000</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkRed">DarkRed</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer57">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer57"><a href="../colors/colors_mixer.php?colorbottom=8B0000&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker57"><a href="../colors/colors_picker.php?colorhex=8B0000">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box58" onmouseover="color_mouseover(this, 58)" onmouseout="color_mouseout(this, 58)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=8B008B">#8B008B</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkMagenta">DarkMagenta</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer58">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer58"><a href="../colors/colors_mixer.php?colorbottom=8B008B&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker58"><a href="../colors/colors_picker.php?colorhex=8B008B">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box59" onmouseover="color_mouseover(this, 59)" onmouseout="color_mouseout(this, 59)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=8B4513">#8B4513</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=SaddleBrown">SaddleBrown</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer59">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer59"><a href="../colors/colors_mixer.php?colorbottom=8B4513&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker59"><a href="../colors/colors_picker.php?colorhex=8B4513">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box60" onmouseover="color_mouseover(this, 60)" onmouseout="color_mouseout(this, 60)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=8FBC8F">#8FBC8F</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkSeaGreen">DarkSeaGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer60">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer60"><a href="../colors/colors_mixer.php?colorbottom=8FBC8F&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker60"><a href="../colors/colors_picker.php?colorhex=8FBC8F">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box61" onmouseover="color_mouseover(this, 61)" onmouseout="color_mouseout(this, 61)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=90EE90">#90EE90</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightGreen">LightGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer61">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer61"><a href="../colors/colors_mixer.php?colorbottom=90EE90&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker61"><a href="../colors/colors_picker.php?colorhex=90EE90">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box62" onmouseover="color_mouseover(this, 62)" onmouseout="color_mouseout(this, 62)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=9370DB">#9370DB</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=MediumPurple">MediumPurple</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer62">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer62"><a href="../colors/colors_mixer.php?colorbottom=9370DB&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker62"><a href="../colors/colors_picker.php?colorhex=9370DB">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box63" onmouseover="color_mouseover(this, 63)" onmouseout="color_mouseout(this, 63)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=9400D3">#9400D3</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkViolet">DarkViolet</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer63">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer63"><a href="../colors/colors_mixer.php?colorbottom=9400D3&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker63"><a href="../colors/colors_picker.php?colorhex=9400D3">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box64" onmouseover="color_mouseover(this, 64)" onmouseout="color_mouseout(this, 64)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=98FB98">#98FB98</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=PaleGreen">PaleGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer64">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer64"><a href="../colors/colors_mixer.php?colorbottom=98FB98&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker64"><a href="../colors/colors_picker.php?colorhex=98FB98">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box65" onmouseover="color_mouseover(this, 65)" onmouseout="color_mouseout(this, 65)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=9932CC">#9932CC</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkOrchid">DarkOrchid</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer65">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer65"><a href="../colors/colors_mixer.php?colorbottom=9932CC&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker65"><a href="../colors/colors_picker.php?colorhex=9932CC">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box66" onmouseover="color_mouseover(this, 66)" onmouseout="color_mouseout(this, 66)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=9ACD32">#9ACD32</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=YellowGreen">YellowGreen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer66">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer66"><a href="../colors/colors_mixer.php?colorbottom=9ACD32&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker66"><a href="../colors/colors_picker.php?colorhex=9ACD32">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box67" onmouseover="color_mouseover(this, 67)" onmouseout="color_mouseout(this, 67)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=A0522D">#A0522D</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Sienna">Sienna</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer67">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer67"><a href="../colors/colors_mixer.php?colorbottom=A0522D&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker67"><a href="../colors/colors_picker.php?colorhex=A0522D">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box68" onmouseover="color_mouseover(this, 68)" onmouseout="color_mouseout(this, 68)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=A52A2A">#A52A2A</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Brown">Brown</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer68">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer68"><a href="../colors/colors_mixer.php?colorbottom=A52A2A&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker68"><a href="../colors/colors_picker.php?colorhex=A52A2A">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box69" onmouseover="color_mouseover(this, 69)" onmouseout="color_mouseout(this, 69)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=A9A9A9">#A9A9A9</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkGray">DarkGray</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer69">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer69"><a href="../colors/colors_mixer.php?colorbottom=A9A9A9&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker69"><a href="../colors/colors_picker.php?colorhex=A9A9A9">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box70" onmouseover="color_mouseover(this, 70)" onmouseout="color_mouseout(this, 70)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=A9A9A9">#A9A9A9</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkGrey">DarkGrey</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer70">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer70"><a href="../colors/colors_mixer.php?colorbottom=A9A9A9&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker70"><a href="../colors/colors_picker.php?colorhex=A9A9A9">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box71" onmouseover="color_mouseover(this, 71)" onmouseout="color_mouseout(this, 71)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=ADD8E6">#ADD8E6</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightBlue">LightBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer71">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer71"><a href="../colors/colors_mixer.php?colorbottom=ADD8E6&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker71"><a href="../colors/colors_picker.php?colorhex=ADD8E6">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box72" onmouseover="color_mouseover(this, 72)" onmouseout="color_mouseout(this, 72)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=ADFF2F">#ADFF2F</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=GreenYellow">GreenYellow</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer72">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer72"><a href="../colors/colors_mixer.php?colorbottom=ADFF2F&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker72"><a href="../colors/colors_picker.php?colorhex=ADFF2F">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box73" onmouseover="color_mouseover(this, 73)" onmouseout="color_mouseout(this, 73)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=AFEEEE">#AFEEEE</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=PaleTurquoise">PaleTurquoise</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer73">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer73"><a href="../colors/colors_mixer.php?colorbottom=AFEEEE&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker73"><a href="../colors/colors_picker.php?colorhex=AFEEEE">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box74" onmouseover="color_mouseover(this, 74)" onmouseout="color_mouseout(this, 74)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=B0C4DE">#B0C4DE</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightSteelBlue">LightSteelBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer74">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer74"><a href="../colors/colors_mixer.php?colorbottom=B0C4DE&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker74"><a href="../colors/colors_picker.php?colorhex=B0C4DE">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box75" onmouseover="color_mouseover(this, 75)" onmouseout="color_mouseout(this, 75)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=B0E0E6">#B0E0E6</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=PowderBlue">PowderBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer75">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer75"><a href="../colors/colors_mixer.php?colorbottom=B0E0E6&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker75"><a href="../colors/colors_picker.php?colorhex=B0E0E6">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box76" onmouseover="color_mouseover(this, 76)" onmouseout="color_mouseout(this, 76)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=B22222">#B22222</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=FireBrick">FireBrick</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer76">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer76"><a href="../colors/colors_mixer.php?colorbottom=B22222&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker76"><a href="../colors/colors_picker.php?colorhex=B22222">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box77" onmouseover="color_mouseover(this, 77)" onmouseout="color_mouseout(this, 77)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=B8860B">#B8860B</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkGoldenRod">DarkGoldenRod</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer77">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer77"><a href="../colors/colors_mixer.php?colorbottom=B8860B&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker77"><a href="../colors/colors_picker.php?colorhex=B8860B">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box78" onmouseover="color_mouseover(this, 78)" onmouseout="color_mouseout(this, 78)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=BA55D3">#BA55D3</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=MediumOrchid">MediumOrchid</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer78">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer78"><a href="../colors/colors_mixer.php?colorbottom=BA55D3&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker78"><a href="../colors/colors_picker.php?colorhex=BA55D3">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box79" onmouseover="color_mouseover(this, 79)" onmouseout="color_mouseout(this, 79)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=BC8F8F">#BC8F8F</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=RosyBrown">RosyBrown</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer79">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer79"><a href="../colors/colors_mixer.php?colorbottom=BC8F8F&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker79"><a href="../colors/colors_picker.php?colorhex=BC8F8F">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box80" onmouseover="color_mouseover(this, 80)" onmouseout="color_mouseout(this, 80)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=BDB76B">#BDB76B</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkKhaki">DarkKhaki</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer80">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer80"><a href="../colors/colors_mixer.php?colorbottom=BDB76B&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker80"><a href="../colors/colors_picker.php?colorhex=BDB76B">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box81" onmouseover="color_mouseover(this, 81)" onmouseout="color_mouseout(this, 81)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=C0C0C0">#C0C0C0</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Silver">Silver</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer81">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer81"><a href="../colors/colors_mixer.php?colorbottom=C0C0C0&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker81"><a href="../colors/colors_picker.php?colorhex=C0C0C0">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box82" onmouseover="color_mouseover(this, 82)" onmouseout="color_mouseout(this, 82)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=C71585">#C71585</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=MediumVioletRed">MediumVioletRed</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer82">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer82"><a href="../colors/colors_mixer.php?colorbottom=C71585&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker82"><a href="../colors/colors_picker.php?colorhex=C71585">Color Picker</a></div></div>
                </div>
            </div>
        </div>
        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box83" onmouseover="color_mouseover(this, 83)" onmouseout="color_mouseout(this, 83)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=CD5C5C">#CD5C5C</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=IndianRed ">IndianRed </a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer83">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer83"><a href="../colors/colors_mixer.php?colorbottom=CD5C5C&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker83"><a href="../colors/colors_picker.php?colorhex=CD5C5C">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box84" onmouseover="color_mouseover(this, 84)" onmouseout="color_mouseout(this, 84)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=CD853F">#CD853F</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Peru">Peru</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer84">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer84"><a href="../colors/colors_mixer.php?colorbottom=CD853F&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker84"><a href="../colors/colors_picker.php?colorhex=CD853F">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box85" onmouseover="color_mouseover(this, 85)" onmouseout="color_mouseout(this, 85)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=D2691E">#D2691E</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Chocolate">Chocolate</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer85">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer85"><a href="../colors/colors_mixer.php?colorbottom=D2691E&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker85"><a href="../colors/colors_picker.php?colorhex=D2691E">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box86" onmouseover="color_mouseover(this, 86)" onmouseout="color_mouseout(this, 86)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=D2B48C">#D2B48C</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Tan">Tan</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer86">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer86"><a href="../colors/colors_mixer.php?colorbottom=D2B48C&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker86"><a href="../colors/colors_picker.php?colorhex=D2B48C">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box87" onmouseover="color_mouseover(this, 87)" onmouseout="color_mouseout(this, 87)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=D3D3D3">#D3D3D3</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightGray">LightGray</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer87">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer87"><a href="../colors/colors_mixer.php?colorbottom=D3D3D3&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker87"><a href="../colors/colors_picker.php?colorhex=D3D3D3">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box88" onmouseover="color_mouseover(this, 88)" onmouseout="color_mouseout(this, 88)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=D3D3D3">#D3D3D3</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightGrey">LightGrey</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer88">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer88"><a href="../colors/colors_mixer.php?colorbottom=D3D3D3&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker88"><a href="../colors/colors_picker.php?colorhex=D3D3D3">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box89" onmouseover="color_mouseover(this, 89)" onmouseout="color_mouseout(this, 89)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=D8BFD8">#D8BFD8</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Thistle">Thistle</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer89">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer89"><a href="../colors/colors_mixer.php?colorbottom=D8BFD8&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker89"><a href="../colors/colors_picker.php?colorhex=D8BFD8">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box90" onmouseover="color_mouseover(this, 90)" onmouseout="color_mouseout(this, 90)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=DA70D6">#DA70D6</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Orchid">Orchid</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer90">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer90"><a href="../colors/colors_mixer.php?colorbottom=DA70D6&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker90"><a href="../colors/colors_picker.php?colorhex=DA70D6">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box91" onmouseover="color_mouseover(this, 91)" onmouseout="color_mouseout(this, 91)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=DAA520">#DAA520</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=GoldenRod">GoldenRod</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer91">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer91"><a href="../colors/colors_mixer.php?colorbottom=DAA520&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker91"><a href="../colors/colors_picker.php?colorhex=DAA520">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box92" onmouseover="color_mouseover(this, 92)" onmouseout="color_mouseout(this, 92)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=DB7093">#DB7093</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=PaleVioletRed">PaleVioletRed</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer92">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer92"><a href="../colors/colors_mixer.php?colorbottom=DB7093&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker92"><a href="../colors/colors_picker.php?colorhex=DB7093">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box93" onmouseover="color_mouseover(this, 93)" onmouseout="color_mouseout(this, 93)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=DC143C">#DC143C</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Crimson">Crimson</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer93">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer93"><a href="../colors/colors_mixer.php?colorbottom=DC143C&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker93"><a href="../colors/colors_picker.php?colorhex=DC143C">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box94" onmouseover="color_mouseover(this, 94)" onmouseout="color_mouseout(this, 94)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=DCDCDC">#DCDCDC</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Gainsboro">Gainsboro</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer94">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer94"><a href="../colors/colors_mixer.php?colorbottom=DCDCDC&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker94"><a href="../colors/colors_picker.php?colorhex=DCDCDC">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box95" onmouseover="color_mouseover(this, 95)" onmouseout="color_mouseout(this, 95)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=DDA0DD">#DDA0DD</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Plum">Plum</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer95">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer95"><a href="../colors/colors_mixer.php?colorbottom=DDA0DD&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker95"><a href="../colors/colors_picker.php?colorhex=DDA0DD">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box96" onmouseover="color_mouseover(this, 96)" onmouseout="color_mouseout(this, 96)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=DEB887">#DEB887</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=BurlyWood">BurlyWood</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer96">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer96"><a href="../colors/colors_mixer.php?colorbottom=DEB887&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker96"><a href="../colors/colors_picker.php?colorhex=DEB887">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box97" onmouseover="color_mouseover(this, 97)" onmouseout="color_mouseout(this, 97)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=E0FFFF">#E0FFFF</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightCyan">LightCyan</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer97">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer97"><a href="../colors/colors_mixer.php?colorbottom=E0FFFF&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker97"><a href="../colors/colors_picker.php?colorhex=E0FFFF">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box98" onmouseover="color_mouseover(this, 98)" onmouseout="color_mouseout(this, 98)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=E6E6FA">#E6E6FA</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Lavender">Lavender</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer98">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer98"><a href="../colors/colors_mixer.php?colorbottom=E6E6FA&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker98"><a href="../colors/colors_picker.php?colorhex=E6E6FA">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box99" onmouseover="color_mouseover(this, 99)" onmouseout="color_mouseout(this, 99)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=E9967A">#E9967A</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkSalmon">DarkSalmon</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer99">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer99"><a href="../colors/colors_mixer.php?colorbottom=E9967A&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker99"><a href="../colors/colors_picker.php?colorhex=E9967A">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box100" onmouseover="color_mouseover(this, 100)" onmouseout="color_mouseout(this, 100)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=EE82EE">#EE82EE</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Violet">Violet</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer100">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer100"><a href="../colors/colors_mixer.php?colorbottom=EE82EE&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker100"><a href="../colors/colors_picker.php?colorhex=EE82EE">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box101" onmouseover="color_mouseover(this, 101)" onmouseout="color_mouseout(this, 101)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=EEE8AA">#EEE8AA</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=PaleGoldenRod">PaleGoldenRod</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer101">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer101"><a href="../colors/colors_mixer.php?colorbottom=EEE8AA&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker101"><a href="../colors/colors_picker.php?colorhex=EEE8AA">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box102" onmouseover="color_mouseover(this, 102)" onmouseout="color_mouseout(this, 102)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=F08080">#F08080</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightCoral">LightCoral</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer102">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer102"><a href="../colors/colors_mixer.php?colorbottom=F08080&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker102"><a href="../colors/colors_picker.php?colorhex=F08080">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box103" onmouseover="color_mouseover(this, 103)" onmouseout="color_mouseout(this, 103)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=F0E68C">#F0E68C</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Khaki">Khaki</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer103">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer103"><a href="../colors/colors_mixer.php?colorbottom=F0E68C&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker103"><a href="../colors/colors_picker.php?colorhex=F0E68C">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box104" onmouseover="color_mouseover(this, 104)" onmouseout="color_mouseout(this, 104)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=F0F8FF">#F0F8FF</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=AliceBlue">AliceBlue</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer104">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer104"><a href="../colors/colors_mixer.php?colorbottom=F0F8FF&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker104"><a href="../colors/colors_picker.php?colorhex=F0F8FF">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box105" onmouseover="color_mouseover(this, 105)" onmouseout="color_mouseout(this, 105)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=F0FFF0">#F0FFF0</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=HoneyDew">HoneyDew</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer105">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer105"><a href="../colors/colors_mixer.php?colorbottom=F0FFF0&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker105"><a href="../colors/colors_picker.php?colorhex=F0FFF0">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box106" onmouseover="color_mouseover(this, 106)" onmouseout="color_mouseout(this, 106)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=F0FFFF">#F0FFFF</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Azure">Azure</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer106">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer106"><a href="../colors/colors_mixer.php?colorbottom=F0FFFF&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker106"><a href="../colors/colors_picker.php?colorhex=F0FFFF">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box107" onmouseover="color_mouseover(this, 107)" onmouseout="color_mouseout(this, 107)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=F4A460">#F4A460</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=SandyBrown">SandyBrown</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer107">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer107"><a href="../colors/colors_mixer.php?colorbottom=F4A460&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker107"><a href="../colors/colors_picker.php?colorhex=F4A460">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box108" onmouseover="color_mouseover(this, 108)" onmouseout="color_mouseout(this, 108)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=F5DEB3">#F5DEB3</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Wheat">Wheat</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer108">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer108"><a href="../colors/colors_mixer.php?colorbottom=F5DEB3&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker108"><a href="../colors/colors_picker.php?colorhex=F5DEB3">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box109" onmouseover="color_mouseover(this, 109)" onmouseout="color_mouseout(this, 109)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=F5F5DC">#F5F5DC</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Beige">Beige</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer109">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer109"><a href="../colors/colors_mixer.php?colorbottom=F5F5DC&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker109"><a href="../colors/colors_picker.php?colorhex=F5F5DC">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box110" onmouseover="color_mouseover(this, 110)" onmouseout="color_mouseout(this, 110)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=F5F5F5">#F5F5F5</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=WhiteSmoke">WhiteSmoke</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer110">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer110"><a href="../colors/colors_mixer.php?colorbottom=F5F5F5&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker110"><a href="../colors/colors_picker.php?colorhex=F5F5F5">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box111" onmouseover="color_mouseover(this, 111)" onmouseout="color_mouseout(this, 111)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=F5FFFA">#F5FFFA</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=MintCream">MintCream</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer111">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer111"><a href="../colors/colors_mixer.php?colorbottom=F5FFFA&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker111"><a href="../colors/colors_picker.php?colorhex=F5FFFA">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box112" onmouseover="color_mouseover(this, 112)" onmouseout="color_mouseout(this, 112)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=F8F8FF">#F8F8FF</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=GhostWhite">GhostWhite</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer112">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer112"><a href="../colors/colors_mixer.php?colorbottom=F8F8FF&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker112"><a href="../colors/colors_picker.php?colorhex=F8F8FF">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box113" onmouseover="color_mouseover(this, 113)" onmouseout="color_mouseout(this, 113)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FA8072">#FA8072</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Salmon">Salmon</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer113">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer113"><a href="../colors/colors_mixer.php?colorbottom=FA8072&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker113"><a href="../colors/colors_picker.php?colorhex=FA8072">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box114" onmouseover="color_mouseover(this, 114)" onmouseout="color_mouseout(this, 114)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FAEBD7">#FAEBD7</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=AntiqueWhite">AntiqueWhite</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer114">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer114"><a href="../colors/colors_mixer.php?colorbottom=FAEBD7&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker114"><a href="../colors/colors_picker.php?colorhex=FAEBD7">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box115" onmouseover="color_mouseover(this, 115)" onmouseout="color_mouseout(this, 115)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FAF0E6">#FAF0E6</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Linen">Linen</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer115">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer115"><a href="../colors/colors_mixer.php?colorbottom=FAF0E6&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker115"><a href="../colors/colors_picker.php?colorhex=FAF0E6">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box116" onmouseover="color_mouseover(this, 116)" onmouseout="color_mouseout(this, 116)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FAFAD2">#FAFAD2</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightGoldenRodYellow">LightGoldenRodYellow</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer116">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer116"><a href="../colors/colors_mixer.php?colorbottom=FAFAD2&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker116"><a href="../colors/colors_picker.php?colorhex=FAFAD2">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box117" onmouseover="color_mouseover(this, 117)" onmouseout="color_mouseout(this, 117)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FDF5E6">#FDF5E6</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=OldLace">OldLace</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer117">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer117"><a href="../colors/colors_mixer.php?colorbottom=FDF5E6&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker117"><a href="../colors/colors_picker.php?colorhex=FDF5E6">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box118" onmouseover="color_mouseover(this, 118)" onmouseout="color_mouseout(this, 118)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FF0000">#FF0000</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Red">Red</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer118">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer118"><a href="../colors/colors_mixer.php?colorbottom=FF0000&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker118"><a href="../colors/colors_picker.php?colorhex=FF0000">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box119" onmouseover="color_mouseover(this, 119)" onmouseout="color_mouseout(this, 119)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FF00FF">#FF00FF</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Fuchsia">Fuchsia</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer119">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer119"><a href="../colors/colors_mixer.php?colorbottom=FF00FF&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker119"><a href="../colors/colors_picker.php?colorhex=FF00FF">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box120" onmouseover="color_mouseover(this, 120)" onmouseout="color_mouseout(this, 120)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FF00FF">#FF00FF</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Magenta">Magenta</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer120">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer120"><a href="../colors/colors_mixer.php?colorbottom=FF00FF&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker120"><a href="../colors/colors_picker.php?colorhex=FF00FF">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box121" onmouseover="color_mouseover(this, 121)" onmouseout="color_mouseout(this, 121)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FF1493">#FF1493</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DeepPink">DeepPink</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer121">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer121"><a href="../colors/colors_mixer.php?colorbottom=FF1493&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker121"><a href="../colors/colors_picker.php?colorhex=FF1493">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box122" onmouseover="color_mouseover(this, 122)" onmouseout="color_mouseout(this, 122)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FF4500">#FF4500</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=OrangeRed">OrangeRed</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer122">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer122"><a href="../colors/colors_mixer.php?colorbottom=FF4500&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker122"><a href="../colors/colors_picker.php?colorhex=FF4500">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box123" onmouseover="color_mouseover(this, 123)" onmouseout="color_mouseout(this, 123)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FF6347">#FF6347</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Tomato">Tomato</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer123">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer123"><a href="../colors/colors_mixer.php?colorbottom=FF6347&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker123"><a href="../colors/colors_picker.php?colorhex=FF6347">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box124" onmouseover="color_mouseover(this, 124)" onmouseout="color_mouseout(this, 124)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FF69B4">#FF69B4</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=HotPink">HotPink</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer124">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer124"><a href="../colors/colors_mixer.php?colorbottom=FF69B4&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker124"><a href="../colors/colors_picker.php?colorhex=FF69B4">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box125" onmouseover="color_mouseover(this, 125)" onmouseout="color_mouseout(this, 125)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FF7F50">#FF7F50</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Coral">Coral</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer125">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer125"><a href="../colors/colors_mixer.php?colorbottom=FF7F50&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker125"><a href="../colors/colors_picker.php?colorhex=FF7F50">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box126" onmouseover="color_mouseover(this, 126)" onmouseout="color_mouseout(this, 126)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FF8C00">#FF8C00</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=DarkOrange">DarkOrange</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer126">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer126"><a href="../colors/colors_mixer.php?colorbottom=FF8C00&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker126"><a href="../colors/colors_picker.php?colorhex=FF8C00">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box127" onmouseover="color_mouseover(this, 127)" onmouseout="color_mouseout(this, 127)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFA07A">#FFA07A</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightSalmon">LightSalmon</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer127">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer127"><a href="../colors/colors_mixer.php?colorbottom=FFA07A&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker127"><a href="../colors/colors_picker.php?colorhex=FFA07A">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box128" onmouseover="color_mouseover(this, 128)" onmouseout="color_mouseout(this, 128)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFA500">#FFA500</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Orange">Orange</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer128">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer128"><a href="../colors/colors_mixer.php?colorbottom=FFA500&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker128"><a href="../colors/colors_picker.php?colorhex=FFA500">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box129" onmouseover="color_mouseover(this, 129)" onmouseout="color_mouseout(this, 129)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFB6C1">#FFB6C1</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightPink">LightPink</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer129">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer129"><a href="../colors/colors_mixer.php?colorbottom=FFB6C1&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker129"><a href="../colors/colors_picker.php?colorhex=FFB6C1">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box130" onmouseover="color_mouseover(this, 130)" onmouseout="color_mouseout(this, 130)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFC0CB">#FFC0CB</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Pink">Pink</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer130">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer130"><a href="../colors/colors_mixer.php?colorbottom=FFC0CB&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker130"><a href="../colors/colors_picker.php?colorhex=FFC0CB">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box131" onmouseover="color_mouseover(this, 131)" onmouseout="color_mouseout(this, 131)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFD700">#FFD700</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Gold">Gold</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer131">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer131"><a href="../colors/colors_mixer.php?colorbottom=FFD700&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker131"><a href="../colors/colors_picker.php?colorhex=FFD700">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box132" onmouseover="color_mouseover(this, 132)" onmouseout="color_mouseout(this, 132)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFDAB9">#FFDAB9</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=PeachPuff">PeachPuff</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer132">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer132"><a href="../colors/colors_mixer.php?colorbottom=FFDAB9&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker132"><a href="../colors/colors_picker.php?colorhex=FFDAB9">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box133" onmouseover="color_mouseover(this, 133)" onmouseout="color_mouseout(this, 133)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFDEAD">#FFDEAD</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=NavajoWhite">NavajoWhite</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer133">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer133"><a href="../colors/colors_mixer.php?colorbottom=FFDEAD&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker133"><a href="../colors/colors_picker.php?colorhex=FFDEAD">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box134" onmouseover="color_mouseover(this, 134)" onmouseout="color_mouseout(this, 134)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFE4B5">#FFE4B5</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Moccasin">Moccasin</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer134">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer134"><a href="../colors/colors_mixer.php?colorbottom=FFE4B5&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker134"><a href="../colors/colors_picker.php?colorhex=FFE4B5">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box135" onmouseover="color_mouseover(this, 135)" onmouseout="color_mouseout(this, 135)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFE4C4">#FFE4C4</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Bisque">Bisque</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer135">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer135"><a href="../colors/colors_mixer.php?colorbottom=FFE4C4&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker135"><a href="../colors/colors_picker.php?colorhex=FFE4C4">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box136" onmouseover="color_mouseover(this, 136)" onmouseout="color_mouseout(this, 136)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFE4E1">#FFE4E1</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=MistyRose">MistyRose</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer136">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer136"><a href="../colors/colors_mixer.php?colorbottom=FFE4E1&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker136"><a href="../colors/colors_picker.php?colorhex=FFE4E1">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box137" onmouseover="color_mouseover(this, 137)" onmouseout="color_mouseout(this, 137)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFEBCD">#FFEBCD</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=BlanchedAlmond">BlanchedAlmond</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer137">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer137"><a href="../colors/colors_mixer.php?colorbottom=FFEBCD&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker137"><a href="../colors/colors_picker.php?colorhex=FFEBCD">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box138" onmouseover="color_mouseover(this, 138)" onmouseout="color_mouseout(this, 138)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFEFD5">#FFEFD5</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=PapayaWhip">PapayaWhip</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer138">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer138"><a href="../colors/colors_mixer.php?colorbottom=FFEFD5&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker138"><a href="../colors/colors_picker.php?colorhex=FFEFD5">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box139" onmouseover="color_mouseover(this, 139)" onmouseout="color_mouseout(this, 139)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFF0F5">#FFF0F5</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LavenderBlush">LavenderBlush</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer139">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer139"><a href="../colors/colors_mixer.php?colorbottom=FFF0F5&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker139"><a href="../colors/colors_picker.php?colorhex=FFF0F5">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box140" onmouseover="color_mouseover(this, 140)" onmouseout="color_mouseout(this, 140)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFF5EE">#FFF5EE</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=SeaShell">SeaShell</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer140">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer140"><a href="../colors/colors_mixer.php?colorbottom=FFF5EE&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker140"><a href="../colors/colors_picker.php?colorhex=FFF5EE">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box141" onmouseover="color_mouseover(this, 141)" onmouseout="color_mouseout(this, 141)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFF8DC">#FFF8DC</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Cornsilk">Cornsilk</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer141">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer141"><a href="../colors/colors_mixer.php?colorbottom=FFF8DC&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker141"><a href="../colors/colors_picker.php?colorhex=FFF8DC">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box142" onmouseover="color_mouseover(this, 142)" onmouseout="color_mouseout(this, 142)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFFACD">#FFFACD</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LemonChiffon">LemonChiffon</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer142">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer142"><a href="../colors/colors_mixer.php?colorbottom=FFFACD&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker142"><a href="../colors/colors_picker.php?colorhex=FFFACD">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box143" onmouseover="color_mouseover(this, 143)" onmouseout="color_mouseout(this, 143)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFFAF0">#FFFAF0</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=FloralWhite">FloralWhite</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer143">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer143"><a href="../colors/colors_mixer.php?colorbottom=FFFAF0&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker143"><a href="../colors/colors_picker.php?colorhex=FFFAF0">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box144" onmouseover="color_mouseover(this, 144)" onmouseout="color_mouseout(this, 144)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFFAFA">#FFFAFA</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Snow">Snow</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer144">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer144"><a href="../colors/colors_mixer.php?colorbottom=FFFAFA&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker144"><a href="../colors/colors_picker.php?colorhex=FFFAFA">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box145" onmouseover="color_mouseover(this, 145)" onmouseout="color_mouseout(this, 145)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFFF00">#FFFF00</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Yellow">Yellow</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer145">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer145"><a href="../colors/colors_mixer.php?colorbottom=FFFF00&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker145"><a href="../colors/colors_picker.php?colorhex=FFFF00">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box146" onmouseover="color_mouseover(this, 146)" onmouseout="color_mouseout(this, 146)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFFFE0">#FFFFE0</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=LightYellow">LightYellow</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer146">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer146"><a href="../colors/colors_mixer.php?colorbottom=FFFFE0&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker146"><a href="../colors/colors_picker.php?colorhex=FFFFE0">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box147" onmouseover="color_mouseover(this, 147)" onmouseout="color_mouseout(this, 147)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFFFF0">#FFFFF0</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=Ivory">Ivory</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer147">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer147"><a href="../colors/colors_mixer.php?colorbottom=FFFFF0&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker147"><a href="../colors/colors_picker.php?colorhex=FFFFF0">Color Picker</a></div></div>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m6 w3-center colorbox">
            <div class="innerbox" id="box148" onmouseover="color_mouseover(this, 148)" onmouseout="color_mouseout(this, 148)">
                <span class="colorhexspan"><a target="_blank" href="../colors/color_tryit.php?hex=FFFFFF">#FFFFFF</a></span><br>
                <div><span class="colornamespan"><a target="_blank" href="../colors/color_tryit.php?color=White">White</a></span></div>
                <div class="w3-row colorlinkcontainer" id="colorlinkcontainer148">
                    <div style="float:left;width:50%"><div class="linktocolormixerdiv" id="linktomixer148"><a href="../colors/colors_mixer.php?colorbottom=FFFFFF&colortop=FFFFFF">Color Mixer</a></div></div>
                    <div style="float:left;width:50%"><div class="linktocolorpickerdiv" id="linktopicker148"><a href="../colors/colors_picker.php?colorhex=FFFFFF">Color Picker</a></div></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var col;
        var colARR = [];
        colARR.push("");
        colARR.push('Black');colARR.push('Navy');colARR.push('DarkBlue');colARR.push('MediumBlue');colARR.push('Blue');colARR.push('DarkGreen');colARR.push('Green');colARR.push('Teal');colARR.push('DarkCyan');colARR.push('DeepSkyBlue');colARR.push('DarkTurquoise');colARR.push('MediumSpringGreen');colARR.push('Lime');colARR.push('SpringGreen');colARR.push('Aqua');colARR.push('Cyan');colARR.push('MidnightBlue');colARR.push('DodgerBlue');colARR.push('LightSeaGreen');colARR.push('ForestGreen');colARR.push('SeaGreen');colARR.push('DarkSlateGray');colARR.push('DarkSlateGrey');colARR.push('LimeGreen');colARR.push('MediumSeaGreen');colARR.push('Turquoise');colARR.push('RoyalBlue');colARR.push('SteelBlue');colARR.push('DarkSlateBlue');colARR.push('MediumTurquoise');colARR.push('Indigo  ');colARR.push('DarkOliveGreen');colARR.push('CadetBlue');colARR.push('CornflowerBlue');colARR.push('RebeccaPurple');colARR.push('MediumAquaMarine');colARR.push('DimGray');colARR.push('DimGrey');colARR.push('SlateBlue');colARR.push('OliveDrab');colARR.push('SlateGray');colARR.push('SlateGrey');colARR.push('LightSlateGray');colARR.push('LightSlateGrey');colARR.push('MediumSlateBlue');colARR.push('LawnGreen');colARR.push('Chartreuse');colARR.push('Aquamarine');colARR.push('Maroon');colARR.push('Purple');colARR.push('Olive');colARR.push('Gray');colARR.push('Grey');colARR.push('SkyBlue');colARR.push('LightSkyBlue');colARR.push('BlueViolet');colARR.push('DarkRed');colARR.push('DarkMagenta');colARR.push('SaddleBrown');colARR.push('DarkSeaGreen');colARR.push('LightGreen');colARR.push('MediumPurple');colARR.push('DarkViolet');colARR.push('PaleGreen');colARR.push('DarkOrchid');colARR.push('YellowGreen');colARR.push('Sienna');colARR.push('Brown');colARR.push('DarkGray');colARR.push('DarkGrey');colARR.push('LightBlue');colARR.push('GreenYellow');colARR.push('PaleTurquoise');colARR.push('LightSteelBlue');colARR.push('PowderBlue');colARR.push('FireBrick');colARR.push('DarkGoldenRod');colARR.push('MediumOrchid');colARR.push('RosyBrown');colARR.push('DarkKhaki');colARR.push('Silver');colARR.push('MediumVioletRed');colARR.push('IndianRed ');colARR.push('Peru');colARR.push('Chocolate');colARR.push('Tan');colARR.push('LightGray');colARR.push('LightGrey');colARR.push('Thistle');colARR.push('Orchid');colARR.push('GoldenRod');colARR.push('PaleVioletRed');colARR.push('Crimson');colARR.push('Gainsboro');colARR.push('Plum');colARR.push('BurlyWood');colARR.push('LightCyan');colARR.push('Lavender');colARR.push('DarkSalmon');colARR.push('Violet');colARR.push('PaleGoldenRod');colARR.push('LightCoral');colARR.push('Khaki');colARR.push('AliceBlue');colARR.push('HoneyDew');colARR.push('Azure');colARR.push('SandyBrown');colARR.push('Wheat');colARR.push('Beige');colARR.push('WhiteSmoke');colARR.push('MintCream');colARR.push('GhostWhite');colARR.push('Salmon');colARR.push('AntiqueWhite');colARR.push('Linen');colARR.push('LightGoldenRodYellow');colARR.push('OldLace');colARR.push('Red');colARR.push('Fuchsia');colARR.push('Magenta');colARR.push('DeepPink');colARR.push('OrangeRed');colARR.push('Tomato');colARR.push('HotPink');colARR.push('Coral');colARR.push('DarkOrange');colARR.push('LightSalmon');colARR.push('Orange');colARR.push('LightPink');colARR.push('Pink');colARR.push('Gold');colARR.push('PeachPuff');colARR.push('NavajoWhite');colARR.push('Moccasin');colARR.push('Bisque');colARR.push('MistyRose');colARR.push('BlanchedAlmond');colARR.push('PapayaWhip');colARR.push('LavenderBlush');colARR.push('SeaShell');colARR.push('Cornsilk');colARR.push('LemonChiffon');colARR.push('FloralWhite');colARR.push('Snow');colARR.push('Yellow');colARR.push('LightYellow');colARR.push('Ivory');colARR.push('White');
        console.log("148")
        for (i = 1; i <= 148; i++) {
            col = w3color(colARR[i]);
            document.getElementById("box" + i).style.backgroundColor = col.toRgbString();
            if (col.isDark(150)) {
                document.getElementById("box" + i).style.color = "#ffffff";
            } else {
                document.getElementById("box" + i).style.color = "#1f2d3d";
            }
        }
        function color_mouseover(elmnt, n) {
            document.getElementById("linktomixer" + n).className += " petter";
            document.getElementById("linktopicker" + n).className += " petter";
            document.getElementById("colorlinkcontainer" + n).className += " petter";
//  document.getElementById("linktomixer" + n).style.visibility = "visible";
//  document.getElementById("linktopicker" + n).style.visibility = "visible";
        }
        function color_mouseout(elmnt, n) {
            document.getElementById("linktomixer" + n).className = document.getElementById("linktomixer" + n).className.replace(" petter", "");
            document.getElementById("linktopicker" + n).className = document.getElementById("linktopicker" + n).className.replace(" petter", "");
            document.getElementById("colorlinkcontainer" + n).className = document.getElementById("colorlinkcontainer" + n).className.replace(" petter", "");
//  document.getElementById("linktomixer" + n).style.visibility = "hidden";
//  document.getElementById("linktopicker" + n).style.visibility = "hidden";
        }
    </script>
    <hr>
    <p>Уроки по применению цветов на веб-страницах смотрите на нашем сайте <?php include '../include/w3schools.php'; ?> в разделах
        <a href="../html/html_colors.php">HTML Цвета</a> и <a href="../css/css_colors.php">CSS Цвета</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_names.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_groups.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>