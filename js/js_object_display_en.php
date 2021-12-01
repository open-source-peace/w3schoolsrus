<?php include '../include/head_en.php'; ?>

<title>JavaScript Display Objects. <?php include '../include/title_en.php'; ?></title>
<meta name='description' content='JavaScript Display Objects. How to Display JavaScript Objects? Displaying Object Properties. Using JSON.stringify(). <?php include '../include/description_en.php'; ?>'>

<?php include '../include/topmenu_en.php'; ?>
<?php include '../include/leftmenu_js_en.php'; ?>
<?php include '../include/before_content_js_en.php'; ?>

    <p class="w3-right">
        <a href="js_object_display.php" title="Go to Russian language">Ru</a>
        <a href="<?php include '../include/w3schools_link_ua.php'; ?>js/js_object_display.php" target="_blank" title="Go to Ukrainian language">Ua</a>
    </p>
<article>
    <h1>JavaScript Display Objects</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_object_methods.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_object_accessors.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>How to Display JavaScript Objects?</h2>
    <p>Displaying a JavaScript object will output <b>[object Object]</b>.</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; name: &quot;John&quot;,<br>
            &nbsp; age: 30,<br>
            &nbsp; city: &quot;New York&quot;<br>
            };<br>
            <br>
            document.getElementById("demo").innerHTML = person;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_display.html">Try it Yourself &raquo;</a>
    </div>

    <p>Some common solutions to display JavaScript objects are:</p>
    <ul>
        <li>Displaying the Object Properties by name</li>
        <li>Displaying the Object Properties in a Loop</li>
        <li>Displaying the Object using Object.values()</li>
        <li>Displaying the Object using JSON.stringify()</li>
    </ul>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Displaying Object Properties</h2>
    <p>The properties of an object can be displayed as a string:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; name: &quot;John&quot;,<br>
            &nbsp; age: 30,<br>
            &nbsp; city: &quot;New York&quot;<br>
            };<br>
            <br>
            document.getElementById("demo").innerHTML =<br>
            person.name + "," + person.age + "," + person.city;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_display_properties_all.html">Try it Yourself &raquo;</a>
    </div>
    <hr>

    <h2>Displaying the Object in a Loop</h2>
    <p>The properties of an object can be collected in a loop:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; name: &quot;John&quot;,<br>
            &nbsp; age: 30,<br>
            &nbsp; city: &quot;New York&quot;<br>
            };<br>
            <br>
            let txt = &quot;&quot;;<br>
            for (let x in person) {<br>
            txt += person[x] + &quot; &quot;;<br>
            };<br><br>
            document.getElementById("demo").innerHTML = txt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_display_properties_loop.html">Try it Yourself &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>You must use <b>person[x]</b> in the loop.</p>
        <p><b>person.x</b> will not work (Because <b>x</b> is a variable).</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Using Object.values()</h2>
    <p>Any JavaScript object can be converted to an array using <code class="w3-codespan">Object.values()</code>:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; name: &quot;John&quot;,<br>
            &nbsp; age: 30,<br>
            &nbsp; city: &quot;New York&quot;<br>
            };<br>
            <br>
            const myArray = Object.values(person);</div>
    </div>

    <p><code class="w3-codespan">myArray</code> is now a JavaScript array, ready to be displayed:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; name: &quot;John&quot;,<br>
            &nbsp; age: 30,<br>
            &nbsp; city: &quot;New York&quot;<br>
            };<br>
            <br>
            const myArray = Object.values(person);<br>
            document.getElementById(&quot;demo&quot;).innerHTML = myArray;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_display_values.html">Try it Yourself &raquo;</a>
    </div>

    <p><code class="w3-codespan">Object.values()</code> is supported in all major browsers since 2016.</p>

    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr>
                <th style="width:20%;" class="bsChrome" title="Chrome"></th>
                <th style="width:20%;" class="bsEdge" title="Edge"></th>
                <th style="width:20%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:20%;" class="bsSafari" title="Safari"></th>
                <th style="width:20%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>54 (2016)</td>
                <td>14 (2016)</td>
                <td>47 (2016)</td>
                <td>10 (2016)</td>
                <td>41 (2016)</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Using JSON.stringify()</h2>
    <p>Any JavaScript object can be stringified (converted to a string) with the JavaScript function
        <code class="w3-codespan">JSON.stringify()</code>:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; name: &quot;John&quot;,<br>
            &nbsp; age: 30,<br>
            &nbsp; city: &quot;New York&quot;<br>
            };<br>
            <br>
            let myString = JSON.stringify(person);</div>
    </div>

    <p><code class="w3-codespan">myString</code> is now a JavaScript string, ready to be displayed:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; name: &quot;John&quot;,<br>
            &nbsp; age: 30,<br>
            &nbsp; city: &quot;New York&quot;<br>
            };<br>
            <br>
            let myString = JSON.stringify(person);<br>
            document.getElementById(&quot;demo&quot;).innerHTML = myString;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_display_stringify.html">Try it Yourself &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>The result will be a string following the JSON notation:</p>
        <p>{"name":"John","age":50,"city":"New York"}</p>
    </div>

    <p><code class="w3-codespan">JSON.stringify()</code> is included in JavaScript and supported in all major browsers.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Stringify Dates</h2>
    <p><code class="w3-codespan">JSON.stringify</code> converts dates into strings:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; name: &quot;John&quot;,<br>
            &nbsp; today: new Date()<br>
            };<br>
            <br>
            let myString = JSON.stringify(person);<br>
            document.getElementById(&quot;demo&quot;).innerHTML = myString;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_display_stringify_date.html" target="_blank">Try it Yourself &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Stringify Functions</h2>
    <p><code class="w3-codespan">JSON.stringify</code> will not stringify functions:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; name: &quot;John&quot;,<br>
            &nbsp; age: function () {return 30;}<br>
            };<br>
            <br>
            let myString = JSON.stringify(person);<br>
            document.getElementById(&quot;demo&quot;).innerHTML = myString;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_display_stringify_function.html" target="_blank">Try it Yourself &raquo;</a>
    </div>

    <p>This can be "fixed" if you convert the functions into strings before stringifying.</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; name: &quot;John&quot;,<br>
            &nbsp; age: function () {return 30;}<br>
            };<br>
            person.age = person.age.toString();<br><br>
            let myString = JSON.stringify(person);<br>
            document.getElementById(&quot;demo&quot;).innerHTML = myString;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_display_stringify_function_tostring.html" target="_blank">Try it Yourself &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Stringify Arrays</h2>
    <p>It is also possible to stringify JavaScript arrays:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const arr = [&quot;John&quot;, &quot;Peter&quot;, &quot;Sally&quot;, &quot;Jane&quot;];<br><br>
            let myString = JSON.stringify(arr);<br>
            document.getElementById(&quot;demo&quot;).innerHTML = myString;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_display_stringify.html" target="_blank">Try it Yourself &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>The result will be a string following the JSON notation:</p>
        <p>["John","Peter","Sally","Jane"]</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_object_methods.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_object_accessors.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar_en.php'; ?>
<?php include '../include/footer_en.php'; ?>