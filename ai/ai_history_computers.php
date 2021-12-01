<?php include '../include/head_ai.php'; ?>

    <title>История компьютеров. Искусственный интеллект. W3Schools на русском</title>
    <meta name='description' content='Искусственный интеллект (ИИ). История вычислительной техники. Первые счёты. Какие бывают компьютеры? Первые вычислительные машины. Уроки для начинающих. Полный курс. Языки программирования. W3Schools на русском'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_ai.php'; ?>
<?php include '../include/before_content_ai.php'; ?>

    <article>
        <h1>История вычислительной техники</h1>
        <div class="w3-clear nextprev">
            <a class="w3-left w3-btn" href="ai_history_numbers.php">&#10094; Prev</a>
            <a class="w3-right w3-btn" href="ai_examples.php">Next &#10095;</a>
        </div>
        <hr>
        <h2>Первые счеты</h2>
        <p><strong>Вавилонские счеты</strong> были разработаны, чтобы <b>сократить время</b> на выполнение вычислений.</p>
        <p>Как говорилось в предыдущей главе, мы считаем, что вавилоняне изобрели сложный счет.</p>
        <p>Период 2700–2300 гг. до н.э., вероятно, стал годом первого появления абака, таблицы из последовательных столбцов, которая определяла порядок <b>60-значной</b> системы счисления.</p>
        <hr>

        <h2>Abacus 2.0 (Счёты 2.0)</h2>
        <p>В <b>римских абаках</b> использовались 10-значные римские числа, чтобы <b>сократить время</b> на выполнение вычислений:</p>
        <figure>
        <img alt="Abacus" style="width:100%;max-width:300px" src="../images/img_roman_abacus.jpg">
        <figcaption>Изображение: 1911 Энциклопедия Британника (общественное достояние).</figcaption>
        </figure>
        <p>Римляне разработали римские счеты, портативную версию десятичных счётов, использовавшихся ранее вавилонянами.</p>
        <p>Это был первый в мире карманный компьютер. Используется римскими инженерами, купцами и сборщиками налогов.</p>
        <hr>

        <h2>Аналоговые компьютеры</h2>
        <p><strong>Разностная машина</strong> (Чарльз Бэббидж, 1822) была механической машиной, предназначенной для <b>сокращения времени</b> вычисления сложных математических функций.</p>
        <p><strong>Аналитическая машина</strong> (Чарльз Бэббидж, 1833) была механической машиной, спроектированной с использованием современных компьютерных элементов, таких как арифметика, логика и память.</p>
        <p>Оба этих "компьютера" использовали механические шестеренки из 10 цифр (десятичных знаков) для выполнения математических вычислений:</p>
            <a title="Bruno Barral (ByB) / CC BY-SA (https://creativecommons.org/licenses/by-sa/2.5)"
               target="_blank" href="https://commons.wikimedia.org/wiki/File:AnalyticalMachine_Babbage_London.jpg">
                <figure><img alt="Аналитическая машина" style="width:100%;max-width:600px" src="../images/img_analytical_machine.jpg">
                <figcaption>(Аналитическая машина Чарльза Бэббиджа. Музей науки. Лондон)</figcaption></figure>
            </a>
        <hr>

        <h2>Цифровые компьютеры</h2>
        <p>Цифровые компьютеры используют переключатели 0/1 для выполнения вычислений. Они работают с <strong>двоичными</strong> значениями, такими как 11100110, в отличие от <strong>аналоговых</strong> значений, таких как 230.</p>
        <p>Попробуйте сами:</p>
        <div class="w3-info">
            <form action="">
                <input id="bi01" style="width:200px;text-align:right" type="text" size="10" disabled value="11100110">
                <input id="in01" style="width:200px;text-align:right" onchange="myFunction();"
                       type="number" value="230"><p>+</p>
                <input id="bi02" style="width:200px;text-align:right" type="text" size="10" disabled value="11110">
                <input id="in02" style="width:200px;text-align:right" onchange="myFunction();"
                       type="number" value="30"><p>=</p>
                <input id="bi03" style="width:200px;text-align:right" type="text" size="10" disabled value="100000100">
                <input id="in03" style="width:200px;text-align:right" type="number" value="260" disabled><br><br>
            </form>
        </div>
        <p>Первый электрический цифровой компьютер был разработан и построен Konrad Zuse в Германии (1941).</p>
        <p>В качестве переключателей 0/1 использовалось 2600 электрических реле. Тактовая частота была около 5 Гц.</p>
        <figure>
            <a title="Venusianer / CC BY-SA (http://creativecommons.org/licenses/by-sa/3.0/)"
               target="_blank" href="https://commons.wikimedia.org/wiki/File:Z3_Deutsches_Museum.JPG">
                <img alt="Z3 Zuse" style="width:100%;max-width:600px" src="../images/img_z3_zuse.jpg"></a>
        <figcaption>Модель Zuse Z3. Немецкий музей. Мюнхен.</figcaption>
        </figure>
        <hr>

        <h2>Электронные компьютеры</h2>
        <p><strong>Компьютеры первого поколения</strong> (1945-1950) использовали вакуумные лампы в качестве бинарных переключателей.</p>
        <p>Вакуумные лампы намного быстрее электрических реле.</p>
        <p>Тактовая частота этих компьютеров составляла от 500 кГц до 1 МГц.</p>
        <figure>
        <a title="Daniele Napolitano / CC BY-SA (https://creativecommons.org/licenses/by-sa/2.0)"
           target="_blank" href="https://commons.wikimedia.org/wiki/File:CEP_arithmetic_part_close_up.jpg">
            <img alt="Вакуумные трубки" style="width:100%;max-width:600px" src="../images/img_vacuum_tubes.jpg"></a>
            <figcaption>Вакуумные трубки (лампы)</figcaption>
        </figure>
        <hr>

        <h2>Компьютеры второго поколения</h2>
        <p><strong>Компьютеры второго поколения</strong> (1950-1960) использовали транзисторы в качестве двоичных ключей 0/1.</p>
        <p>Транзисторы намного быстрее электронных ламп.</p>
        <figure>
        <a title="Historianbuff / CC BY-SA (https://creativecommons.org/licenses/by-sa/3.0)"
           target="_blank" href="https://commons.wikimedia.org/wiki/File:MIT_TX-0_computer_Philco_surface-barrier_transistors.JPG">
            <img style="width:100%;max-width:400px" alt="Транзисторы MIT TX-0" src="../images/img_computer_transistors.jpg"></a>
            <figcaption>Транзисторы MIT TX-0</figcaption>
        </figure>
        <hr>

        <h2>Компьютеры третьего поколения</h2>
        <p><strong>Компьютеры третьего поколения</strong> (1960) использовали интегральные схемы в качестве двоичных ключей.</p>
        <p>Интегральные схемы намного быстрее транзисторов.</p>
        <figure>
       <a title="T137 / CC BY-SA (https://creativecommons.org/licenses/by-sa/3.0)"
              target="_blank" href="https://commons.wikimedia.org/wiki/File:Integrated_circuits_(1).jpg">
                <img style="width:100%;max-width:400px" alt="Интегральные схемы" src="../images/img_integrated_circuits.jpg"></a>
            <figcaption>Интегральные схемы</figcaption>
        </figure>
        <hr>

        <h2>Скорость компьютера</h2>
        <p>Первый электрический компьютер (Z3 1941) мог выполнять 5 инструкций в секунду.</p>
        <p>Первый электронный компьютер (ENIAC 1945) делал 5000 инструкций в секунду.</p>
        <p>Современные компьютеры могут выполнять 5 миллиардов инструкций в секунду.</p>

        <table class="w3-table-all">
            <tr><th>Компьютер</th><th>Инструкции<br>в секунду</th><th>Биты<br>в инструкции</th></tr>
            <tr><td>1941 Z3</td><td>5</td><td>4</td></tr>
            <tr><td>1945 ENIAC</td><td>5.000</td><td>8</td></tr>
            <tr><td>1981 IBM PC</td><td>5.000.000</td><td>16</td></tr>
            <tr><td>1995 Intel Pentium</td><td>100.000.000</td><td>32</td></tr>
            <tr><td>2000 AMD</td><td>1.000.000.000</td><td>64</td></tr>
            <tr><td>2020</td><td>5.000.000.000</td><td>128</td></tr>
        </table>
        <hr>

        <h2>Когда это началось? Где это закончится?</h2>
        <p>Из истории выше вы узнали:</p>
        <ul>
            <li>Компьютеры созданы для вычислений.</li>
            <li>Чарльз Бэббидж создал первый механический компьютер.</li>
            <li>Первые цифровые компьютеры использовали электромеханические переключатели.</li>
            <li>Электронные лампы работают намного быстрее электромеханических переключателей.</li>
            <li>Транзисторы намного быстрее электронных ламп.</li>
            <li>Интегральные схемы намного быстрее транзисторов.</li>
            <li>Компьютеры завтрашнего дня будут быстрее человеческого мозга?</li>
        </ul>
        <hr>

        <h2>Умнее, чем люди?</h2>
        <p>Если мы верим в <a target="_blank" href="https://en.wikipedia.org/wiki/Moore%27s_law" title="Смотреть на Википедии">Закон Мура</a>:</p>
        <p>В 2020 году компьютеры станут сопоставимы с мозгом мыши.</p>
        <p>В 2030 году компьютеры станут обладать мощностью человеческого мозга:</p>
        <img class="w3-image" alt="Скорость компьютера" src="../images/img_speed.jpg">
        <p>Источник: <a target="_blank" href="https://en.wikipedia.org/wiki/Ray_Kurzweil" title="Смотреть на Википедии">Ray Kurzweil</a></p>
        <script>
            function myFunction(){
                v1=document.getElementById("in01").value;
                document.getElementById("bi01").value=(v1 >>> 0).toString(2);
                v2=document.getElementById("in02").value;
                document.getElementById("bi02").value=(v2 >>> 0).toString(2);
                document.getElementById("in03").value=Number(v1)+Number(v2);
                v3=document.getElementById("in03").value;
                document.getElementById("bi03").value=(v3 >>> 0).toString(2);
            }
        </script>
        <br>
        <div class='w3-clear nextprev'>
            <a class='w3-left w3-btn' href='ai_history_numbers.php'>&#10094; Prev</a>
            <a class='w3-right w3-btn' href='ai_examples.php'>Next &#10095;</a>
        </div>
    </article>
    </div>
<?php include '../include/rightbar_ai.php'; ?>
<?php include '../include/footer.php'; ?>