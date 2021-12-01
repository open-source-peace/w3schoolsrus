<?php include '../include/head.php'; ?>

<title>XML Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='XML Учебник. Бесплатные уроки онлайн по XML. Что такое XML? Зачем изучать XML? Важные стандарты. Применение и использование. Примеры кода. Проверочная викторина. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_xml.php'; ?>
<?php include '../include/before_content_xml.php'; ?>

<article>
    <h1>XML <span class="color_h1">Учебник</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="xml_whatis.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info intro">
        <p><strong>XML</strong> расшифровывается как eXtensible Markup Language (расширяемый язык разметки).</p>
        <p><strong>XML</strong> был разработан для хранения и передачи данных.</p>
        <p><strong>XML</strong> был разработан таким образом, чтобы его можно было читать как человеком, так и машиной.</p>
    </div>
    <hr>

    <div class="w3-example">
        <h3>XML Пример 1</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;<br>
            &lt;note&gt;<br>&nbsp; &lt;to&gt;Tove&lt;/to&gt;<br>
            &nbsp; &lt;from&gt;Jani&lt;/from&gt;<br>
            &nbsp; &lt;heading&gt;Reminder&lt;/heading&gt;<br>
            &nbsp; &lt;body&gt;Don't forget me this weekend!&lt;/body&gt;<br>
            &lt;/note&gt;
        </div>
        <p>
            <a href="javascript:void(0)" onclick="displayXML('note.xml')" class="w3-btn">Отобразить XML-файл &raquo;</a>
            <a href="javascript:void(0)" onclick="loadXMLDoc()" class="w3-btn">Отобразить XML-файл как примечание &raquo;</a>
        </p>
    </div>

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container w3-yellow w3-display-container">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
                <div id="demo"></div>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>XML Пример 2</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;<br>&lt;breakfast_menu&gt;<br>
            &lt;food&gt;<br>&nbsp;&nbsp;&nbsp; &lt;name&gt;Belgian Waffles&lt;/name&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;price&gt;$5.95&lt;/price&gt;<br>&nbsp;&nbsp;&nbsp; &lt;description&gt;<br>&nbsp;&nbsp; Two of our famous
            Belgian Waffles with plenty of real maple syrup<br>&nbsp;&nbsp; &lt;/description&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;calories&gt;650&lt;/calories&gt;<br>&lt;/food&gt;<br>&lt;food&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;name&gt;Strawberry Belgian Waffles&lt;/name&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;price&gt;$7.95&lt;/price&gt;<br>&nbsp;&nbsp;&nbsp; &lt;description&gt;<br>&nbsp;&nbsp;&nbsp; Light Belgian
            waffles covered with strawberries and whipped cream<br>&nbsp;&nbsp;&nbsp; &lt;/description&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;calories&gt;900&lt;/calories&gt;<br>&lt;/food&gt;<br>&lt;food&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;name&gt;Berry-Berry Belgian Waffles&lt;/name&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;price&gt;$8.95&lt;/price&gt;<br>&nbsp;&nbsp;&nbsp; &lt;description&gt;<br>&nbsp;&nbsp;&nbsp; Belgian
            waffles covered with assorted fresh berries and whipped
            cream<br>&nbsp;&nbsp;&nbsp; &lt;/description&gt;<br>&nbsp;&nbsp;&nbsp; &lt;calories&gt;900&lt;/calories&gt;<br>
            &lt;/food&gt;<br>&lt;food&gt;<br>&nbsp;&nbsp;&nbsp; &lt;name&gt;French Toast&lt;/name&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;price&gt;$4.50&lt;/price&gt;<br>&nbsp;&nbsp;&nbsp; &lt;description&gt;<br>&nbsp;&nbsp;&nbsp; Thick slices made
            from our homemade sourdough bread<br>&nbsp;&nbsp;&nbsp; &lt;/description&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;calories&gt;600&lt;/calories&gt;<br>&lt;/food&gt;<br>&lt;food&gt;<br>&nbsp;&nbsp;&nbsp; &lt;name&gt;Homestyle
            Breakfast&lt;/name&gt;<br>&nbsp;&nbsp;&nbsp; &lt;price&gt;$6.95&lt;/price&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;description&gt;<br>&nbsp;&nbsp;&nbsp; Two eggs, bacon or sausage, toast, and our ever-popular hash
            browns<br>&nbsp;&nbsp;&nbsp; &lt;/description&gt;<br>&nbsp;&nbsp;&nbsp; &lt;calories&gt;950&lt;/calories&gt;<br>
            &lt;/food&gt;<br>&lt;/breakfast_menu&gt;
        </div>
        <p>
            <a href="javascript:void(0)" onclick="displayXML('simple.xml')" class="w3-btn">Отобразить XML-файл &raquo;</a>
            <a target="_blank" href="simplexsl.xml" class="w3-btn">Отобразить с помощью XSLT &raquo;</a>
        </p>
    </div>
    <div id="w3Modal01" class="w3-modal" style="width:100%">
        <div class="w3-modal-content w3-card-4" style="width:90%">
            <header class="w3-container w3-display-container w3-theme">
                <span onclick="document.getElementById('w3Modal01').style.display='none'" class="w3-button w3-xlarge w3-display-topright">&times;</span>
                <h3 id="w3ModalHeading01">Header</h3>
            </header>
            <div id="w3ModalContent01" class="w3-padding"></div>
        </div>
    </div>
    <script>
        function w3displayXML(file,div) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    display(this,div);
                }
            };
            xhttp.open("GET", file, true);
            xhttp.send();
        }
        function display(xml,div) {
            var x, parser, xmlDoc, txt, etxt;
            try {
                parser = new DOMParser();
                xmlDoc = parser.parseFromString(xml.responseText,"text/xml");
                x = xmlDoc.documentElement;
                txt = "<span  style='color:brown'>&lt;" + x.nodeName + "&gt;</span>"
                level = 1;
                txt += myLoop(x);
                level = 0;
                txt += "<br><span  style='color:brown'>&lt;/" + x.nodeName + "&gt;</span>"
                if (xmlDoc.getElementsByTagName("parsererror").length > 0) {
                    etxt = xmlDoc.getElementsByTagName("parsererror")[0].innerHTML;
                    if (etxt != undefined) {
                        txt = xmlDoc.getElementsByTagName("parsererror")[0].innerHTML + txt;
                    }
                }
            } catch(err) {
                txt = err.message
            }
            document.getElementById(div).innerHTML = txt;
        }
        function myLoop(x) {
            var i, j, y, z, txt;
            txt = "";
            z = x.childNodes;
            for (i = 0; i < z.length; i++) {
                y = z[i];
                if (y.nodeType == 1) {
                    if (y.nodeName != "parsererror") {
                        txt += "<br>" + makeSpace(level);
                        txt += "<span style='color:brown'>&lt;" +
                            y.nodeName + "</span>" + getAttributes(y) + "<span style='color:brown'>&gt;</span>";
                        level++;
                        txt += myLoop(y);
                        level--;
                        txt += "<span style='color:brown'>&lt;/" +
                            y.nodeName + "&gt;</span>";
                    }
                } else {
                    if (y.nodeType == 3) {
                        txt += y.nodeValue;
                    } else {
                        //txt += y.nodeType + y.nodeValue;
                    }
                }
            }
            return txt;
        }
        function getAttributes(xml) {
            var i;
            var txt = "";
            var x = xml.attributes;
            for (i = 0; i < x.length; i++) {
                if (x[i].name == "style") {return txt;}
                txt += " <span style='color:red'>" + x[i].name + "=" + "</span>" +
                    "<span style='color:blue'>" + '"' + x[i].value + '"' + "</span>";
            }
            return txt;
        }
        function makeSpace(x) {
            var i, txt = "";
            for (i = 0; i < level; i++) {
                txt += " &nbsp;&nbsp;&nbsp;";
            }
            return txt;
        }

        function displayXML(name) {
            document.getElementById('w3ModalHeading01').innerHTML = name;
            document.getElementById('w3ModalContent01').innerHTML = '';
            document.getElementById('w3Modal01').style.display='block';
            w3displayXML(name,'w3ModalContent01');
        }
    </script>

    <?php include '../include/addown_content.php'; ?>

    <h2>Зачем изучать XML?</h2>
    <p>XML играет важную роль во многих IT-системах.</p>
    <p>XML часто используется для распространения данных через Интернет.</p>
    <p>Важно (для всех типов разработчиков программного обеспечения!) хорошо разбираться в XML.</p>
    <hr>

    <h2>Что вы узнаете</h2>
    <p>Этот учебник даст вам четкое понимание того, что такое XML и как это работает:</p>
    <ul class="w3-ul">
        <li>Что такое XML?</li>
        <li>Как работает XML?</li>
        <li>Как я могу использовать XML?</li>
        <li>Для чего я могу использовать XML?</li>
    </ul>
    <hr>

    <h2>Важные стандарты XML</h2>
    <p>В этом учебнике также подробно рассматриваются следующие важные стандарты XML:</p>
    <ul>
        <li><a href="ajax_intro.php">XML AJAX</a></li>
        <li><a href="dom_intro.php">XML DOM</a></li>
        <li><a href="xpath_intro.php">XML XPath</a></li>
        <li><a href="xsl_intro.php">XML XSLT</a></li>
        <li><a href="xquery_intro.php">XML XQuery</a></li>
        <li><a href="xml_dtd_intro.php">XML DTD</a></li>
        <li><a href="schema_intro.php">XML Схема</a></li>
        <li><a href="xml_services.php">XML Сервисы</a></li>
    </ul>
    <div class="w3-panel w3-note">
        <p>Мы рекомендуем изучать этот учебник в последовательности, указанной в левом меню. Если вы используете мобильный гаджет, то для просмотра меню уроков нажмите меню бургер.</p>
    </div>
    <hr>

    <h2>Обучение на примерах</h2>
    <p>Примеры лучше 1000 слов. Примеры часто легче понять, чем текстовые пояснения.</p>
    <p>Этот учебник дополняет все объяснения примерами, которые можно увидеть, нажав кнопку &quot;Попробуйте сами&quot;.</p>
    <ul>
        <li><a href="xml_examples.php">XML Примеры</a></li>
        <li><a href="ajax_examples.php">AJAX Примеры</a></li>
        <li><a href="dom_examples.php">DOM Примеры</a></li>
        <li><a href="xpath_examples.php">XPath Примеры</a></li>
        <li><a href="xsl_examples.php">XSLT Примеры</a></li>
    </ul>
    <div class="w3-panel w3-note">
        <p>Если вы выполните все примеры, вы узнаете много нового об XML за очень короткое время!</p>
    </div>
    <hr>

    <h2>XML Проверочная викторина</h2>
    <p>Проверьте ваши XML навыки на W3Schools!</p>
    <a href="xml_quiz.php" class="w3-btn shadow-black-1">Начать XML Викторину!</a>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="xml_whatis.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>