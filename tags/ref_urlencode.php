<?php include '../include/head.php'; ?>
<title>HTML Кодировка URL адреса. Справочник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Кодирование URL адреса в HTML. Справочник. Как кодируются URL-адреса веб-документов. Курс по основам HTML5. <?php include '../include/description.php'; ?>'>
<script>
    function urlencode()
    {
        var txt=document.getElementById('txt').value;
//var encodetxt=encodeURI(txt);
        var encodetxt=encodeURIComponent(txt);
        document.getElementById('encodingresult').innerHTML=encodetxt;
    }
</script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
  <h1>HTML <span class='color_h1'>URL Кодирование</span>. Справочник</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_html_dtd.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_language_codes.php'>Next &#10095;</a>
  </div>
  <hr>
  <p class='intro'><strong>Кодирование URL</strong> преобразует символы в формат, который может быть передан через Интернет.</p>
  <hr>

  <h2>URL (Uniform Resource Locator) - Унифицированный указатель информационного ресурса</h2>
  <p>Веб-браузеры запрашивают страницы с веб-серверов с помощью URL-адреса.</p>
  <p>URL-адрес - это адрес веб-страницы, например: <b>https://www.w3schools.com.</b></p>
  <hr>
  <h2>Кодирование URL (кодирование с процентами)</h2>
  <p>URL-адреса можно отправлять только через Интернет с помощью <a href='/charsets/ref_html_ascii.php'>набора символов ASCII</a>.</p>
  <p>Поскольку URL-адреса часто содержат символы вне набора ASCII, URL-адрес должен быть преобразован в правильный формат ASCII.</p>
  <p><strong>Кодирование URL</strong> заменяет опасные символы ASCII на '%', за которыми следуют две шестнадцятеричные цифры.</p>
  <p>URL-адреса не могут содержать пробелы. Кодирование URL обычно заменяет пробел знаком плюс (+) или %20.</p>
  <hr>

  <h2>Попробуйте сами</h2>
  <p>Если нажать кнопку Submit (&quot;Отправить&quot;) ниже, браузер закодирует входной URL-адрес прежде, чем он будет отправлен на сервер. Страница на сервере отобразит полученные данные.</p>

  <form name='input' target='_blank' action='https://www.w3schools.com/action_page2.php' method='get'>
    <input type='text' value='Hello Günter' name='text' size='30' />
    <input type='submit' value='Submit' />
  </form>

  <p>Попробуйте ввести другие данные и опять нажмите Submit ('Отправить')</p>
  <hr>

  <h2>Функции кодирования URL-адресов</h2>
  <p>В JavaScript, PHP и ASP существуют функции, которые можно использовать для URL-кодирования строки.</p>
  <p>PHP имеет функцию rawurlencode(), а ASP имеет функцию Server.URLEncode().</p>
  <p>В JavaScript можно использовать функцию <b>encodeURIComponent()</b>.</p>
  <p>Нажмите кнопку 'URL Encode', чтобы увидеть, как функция JavaScript кодирует текст.</p>

  <input type='text' name='txt' id='txt' value='Hello Günter' size='30' />
  <input type='button' value='URL Encode' onclick='urlencode()' />
  <div id='encodingresult'></div>
  <p><b>Примечание: </b>Функция JavaScript кодирует пробел как %20.</p>
  <hr>

  <h2>ASCII Кодировки. Справочник</h2>
  <p>Ваш браузер будет кодировать входящие данные в соответствие набору символов, который используется на веб-странице.</p>
  <p>Типичный (стандартный) набор символов (кодировка) в HTML5 - это UTF-8.</p>

  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:33%'>Символ</th>
      <th style='width:33%'>Из Windows-1252</th>
      <th style='width:34%'>Из UTF-8</th>
    </tr>
    <tr>
      <td>space</td>
      <td>%20</td>
      <td>%20</td>
    </tr>
    <tr>
      <td>!</td>
      <td>%21</td>
      <td>%21</td>
    </tr>
    <tr>
      <td>'</td>
      <td>%22</td>
      <td>%22</td>
    </tr>
    <tr>
      <td>#</td>
      <td>%23</td>
      <td>%23</td>
    </tr>
    <tr>
      <td>$</td>
      <td>%24</td>
      <td>%24</td>
    </tr>
    <tr>
      <td>%</td>
      <td>%25</td>
      <td>%25</td>
    </tr>
    <tr>
      <td>&amp;</td>
      <td>%26</td>
      <td>%26</td>
    </tr>
    <tr>
      <td>'</td>
      <td>%27</td>
      <td>%27</td>
    </tr>
    <tr>
      <td>(</td>
      <td>%28</td>
      <td>%28</td>
    </tr>
    <tr>
      <td>)</td>
      <td>%29</td>
      <td>%29</td>
    </tr>
    <tr>
      <td>*</td>
      <td>%2A</td>
      <td>%2A</td>
    </tr>
    <tr>
      <td>+</td>
      <td>%2B</td>
      <td>%2B</td>
    </tr>
    <tr>
      <td>,</td>
      <td>%2C</td>
      <td>%2C</td>
    </tr>
    <tr>
      <td>-</td>
      <td>%2D</td>
      <td>%2D</td>
    </tr>
    <tr>
      <td>.</td>
      <td>%2E</td>
      <td>%2E</td>
    </tr>
    <tr>
      <td>/</td>
      <td>%2F</td>
      <td>%2F</td>
    </tr>
    <tr>
      <td>0</td>
      <td>%30</td>
      <td>%30</td>
    </tr>
    <tr>
      <td>1</td>
      <td>%31</td>
      <td>%31</td>
    </tr>
    <tr>
      <td>2</td>
      <td>%32</td>
      <td>%32</td>
    </tr>
    <tr>
      <td>3</td>
      <td>%33</td>
      <td>%33</td>
    </tr>
    <tr>
      <td>4</td>
      <td>%34</td>
      <td>%34</td>
    </tr>
    <tr>
      <td>5</td>
      <td>%35</td>
      <td>%35</td>
    </tr>
    <tr>
      <td>6</td>
      <td>%36</td>
      <td>%36</td>
    </tr>
    <tr>
      <td>7</td>
      <td>%37</td>
      <td>%37</td>
    </tr>
    <tr>
      <td>8</td>
      <td>%38</td>
      <td>%38</td>
    </tr>
    <tr>
      <td>9</td>
      <td>%39</td>
      <td>%39</td>
    </tr>
    <tr>
      <td>:</td>
      <td>%3A</td>
      <td>%3A</td>
    </tr>
    <tr>
      <td>;</td>
      <td>%3B</td>
      <td>%3B</td>
    </tr>
    <tr>
      <td>&lt;</td>
      <td>%3C</td>
      <td>%3C</td>
    </tr>
    <tr>
      <td>=</td>
      <td>%3D</td>
      <td>%3D</td>
    </tr>
    <tr>
      <td>&gt;</td>
      <td>%3E</td>
      <td>%3E</td>
    </tr>
    <tr>
      <td>?</td>
      <td>%3F</td>
      <td>%3F</td>
    </tr>
    <tr>
      <td>@</td>
      <td>%40</td>
      <td>%40</td>
    </tr>
    <tr>
      <td>A</td>
      <td>%41</td>
      <td>%41</td>
    </tr>
    <tr>
      <td>B</td>
      <td>%42</td>
      <td>%42</td>
    </tr>
    <tr>
      <td>C</td>
      <td>%43</td>
      <td>%43</td>
    </tr>
    <tr>
      <td>D</td>
      <td>%44</td>
      <td>%44</td>
    </tr>
    <tr>
      <td>E</td>
      <td>%45</td>
      <td>%45</td>
    </tr>
    <tr>
      <td>F</td>
      <td>%46</td>
      <td>%46</td>
    </tr>
    <tr>
      <td>G</td>
      <td>%47</td>
      <td>%47</td>
    </tr>
    <tr>
      <td>H</td>
      <td>%48</td>
      <td>%48</td>
    </tr>
    <tr>
      <td>I</td>
      <td>%49</td>
      <td>%49</td>
    </tr>
    <tr>
      <td>J</td>
      <td>%4A</td>
      <td>%4A</td>
    </tr>
    <tr>
      <td>K</td>
      <td>%4B</td>
      <td>%4B</td>
    </tr>
    <tr>
      <td>L</td>
      <td>%4C</td>
      <td>%4C</td>
    </tr>
    <tr>
      <td>M</td>
      <td>%4D</td>
      <td>%4D</td>
    </tr>
    <tr>
      <td>N</td>
      <td>%4E</td>
      <td>%4E</td>
    </tr>
    <tr>
      <td>O</td>
      <td>%4F</td>
      <td>%4F</td>
    </tr>
    <tr>
      <td>P</td>
      <td>%50</td>
      <td>%50</td>
    </tr>
    <tr>
      <td>Q</td>
      <td>%51</td>
      <td>%51</td>
    </tr>
    <tr>
      <td>R</td>
      <td>%52</td>
      <td>%52</td>
    </tr>
    <tr>
      <td>S</td>
      <td>%53</td>
      <td>%53</td>
    </tr>
    <tr>
      <td>T</td>
      <td>%54</td>
      <td>%54</td>
    </tr>
    <tr>
      <td>U</td>
      <td>%55</td>
      <td>%55</td>
    </tr>
    <tr>
      <td>V</td>
      <td>%56</td>
      <td>%56</td>
    </tr>
    <tr>
      <td>W</td>
      <td>%57</td>
      <td>%57</td>
    </tr>
    <tr>
      <td>X</td>
      <td>%58</td>
      <td>%58</td>
    </tr>
    <tr>
      <td>Y</td>
      <td>%59</td>
      <td>%59</td>
    </tr>
    <tr>
      <td>Z</td>
      <td>%5A</td>
      <td>%5A</td>
    </tr>
    <tr>
      <td>[</td>
      <td>%5B</td>
      <td>%5B</td>
    </tr>
    <tr>
      <td>\</td>
      <td>%5C</td>
      <td>%5C</td>
    </tr>
    <tr>
      <td>]</td>
      <td>%5D</td>
      <td>%5D</td>
    </tr>
    <tr>
      <td>^</td>
      <td>%5E</td>
      <td>%5E</td>
    </tr>
    <tr>
      <td>_</td>
      <td>%5F</td>
      <td>%5F</td>
    </tr>
    <tr>
      <td>`</td>
      <td>%60</td>
      <td>%60</td>
    </tr>
    <tr>
      <td>a</td>
      <td>%61</td>
      <td>%61</td>
    </tr>
    <tr>
      <td>b</td>
      <td>%62</td>
      <td>%62</td>
    </tr>
    <tr>
      <td>c</td>
      <td>%63</td>
      <td>%63</td>
    </tr>
    <tr>
      <td>d</td>
      <td>%64</td>
      <td>%64</td>
    </tr>
    <tr>
      <td>e</td>
      <td>%65</td>
      <td>%65</td>
    </tr>
    <tr>
      <td>f</td>
      <td>%66</td>
      <td>%66</td>
    </tr>
    <tr>
      <td>g</td>
      <td>%67</td>
      <td>%67</td>
    </tr>
    <tr>
      <td>h</td>
      <td>%68</td>
      <td>%68</td>
    </tr>
    <tr>
      <td>i</td>
      <td>%69</td>
      <td>%69</td>
    </tr>
    <tr>
      <td>j</td>
      <td>%6A</td>
      <td>%6A</td>
    </tr>
    <tr>
      <td>k</td>
      <td>%6B</td>
      <td>%6B</td>
    </tr>
    <tr>
      <td>l</td>
      <td>%6C</td>
      <td>%6C</td>
    </tr>
    <tr>
      <td>m</td>
      <td>%6D</td>
      <td>%6D</td>
    </tr>
    <tr>
      <td>n</td>
      <td>%6E</td>
      <td>%6E</td>
    </tr>
    <tr>
      <td>o</td>
      <td>%6F</td>
      <td>%6F</td>
    </tr>
    <tr>
      <td>p</td>
      <td>%70</td>
      <td>%70</td>
    </tr>
    <tr>
      <td>q</td>
      <td>%71</td>
      <td>%71</td>
    </tr>
    <tr>
      <td>r</td>
      <td>%72</td>
      <td>%72</td>
    </tr>
    <tr>
      <td>s</td>
      <td>%73</td>
      <td>%73</td>
    </tr>
    <tr>
      <td>t</td>
      <td>%74</td>
      <td>%74</td>
    </tr>
    <tr>
      <td>u</td>
      <td>%75</td>
      <td>%75</td>
    </tr>
    <tr>
      <td>v</td>
      <td>%76</td>
      <td>%76</td>
    </tr>
    <tr>
      <td>w</td>
      <td>%77</td>
      <td>%77</td>
    </tr>
    <tr>
      <td>x</td>
      <td>%78</td>
      <td>%78</td>
    </tr>
    <tr>
      <td>y</td>
      <td>%79</td>
      <td>%79</td>
    </tr>
    <tr>
      <td>z</td>
      <td>%7A</td>
      <td>%7A</td>
    </tr>
    <tr>
      <td>{</td>
      <td>%7B</td>
      <td>%7B</td>
    </tr>
    <tr>
      <td>|</td>
      <td>%7C</td>
      <td>%7C</td>
    </tr>
    <tr>
      <td>}</td>
      <td>%7D</td>
      <td>%7D</td>
    </tr>
    <tr>
      <td>~</td>
      <td>%7E</td>
      <td>%7E</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>%7F</td>
      <td>%7F</td>
    </tr>
    <tr>
      <td>`</td>
      <td>%80</td>
      <td>%E2%82%AC</td>
    </tr>
    <tr>
      <td></td>
      <td>%81</td>
      <td>%81</td>
    </tr>
    <tr>
      <td>‚</td>
      <td>%82</td>
      <td>%E2%80%9A</td>
    </tr>
    <tr>
      <td>ƒ</td>
      <td>%83</td>
      <td>%C6%92</td>
    </tr>
    <tr>
      <td>„</td>
      <td>%84</td>
      <td>%E2%80%9E</td>
    </tr>
    <tr>
      <td>…</td>
      <td>%85</td>
      <td>%E2%80%A6</td>
    </tr>
    <tr>
      <td>†</td>
      <td>%86</td>
      <td>%E2%80%A0</td>
    </tr>
    <tr>
      <td>‡</td>
      <td>%87</td>
      <td>%E2%80%A1</td>
    </tr>
    <tr>
      <td>ˆ</td>
      <td>%88</td>
      <td>%CB%86</td>
    </tr>
    <tr>
      <td>‰</td>
      <td>%89</td>
      <td>%E2%80%B0</td>
    </tr>
    <tr>
      <td>Š</td>
      <td>%8A</td>
      <td>%C5%A0</td>
    </tr>
    <tr>
      <td>‹</td>
      <td>%8B</td>
      <td>%E2%80%B9</td>
    </tr>
    <tr>
      <td>Œ</td>
      <td>%8C</td>
      <td>%C5%92</td>
    </tr>
    <tr>
      <td></td>
      <td>%8D</td>
      <td>%C5%8D</td>
    </tr>
    <tr>
      <td>Ž</td>
      <td>%8E</td>
      <td>%C5%BD</td>
    </tr>
    <tr>
      <td></td>
      <td>%8F</td>
      <td>%8F</td>
    </tr>
    <tr>
      <td></td>
      <td>%90</td>
      <td>%C2%90</td>
    </tr>
    <tr>
      <td>‘</td>
      <td>%91</td>
      <td>%E2%80%98</td>
    </tr>
    <tr>
      <td>’</td>
      <td>%92</td>
      <td>%E2%80%99</td>
    </tr>
    <tr>
      <td>“</td>
      <td>%93</td>
      <td>%E2%80%9C</td>
    </tr>
    <tr>
      <td>”</td>
      <td>%94</td>
      <td>%E2%80%9D</td>
    </tr>
    <tr>
      <td>•</td>
      <td>%95</td>
      <td>%E2%80%A2</td>
    </tr>
    <tr>
      <td>–</td>
      <td>%96</td>
      <td>%E2%80%93</td>
    </tr>
    <tr>
      <td>—</td>
      <td>%97</td>
      <td>%E2%80%94</td>
    </tr>
    <tr>
      <td>˜</td>
      <td>%98</td>
      <td>%CB%9C</td>
    </tr>
    <tr>
      <td>™</td>
      <td>%99</td>
      <td>%E2%84</td>
    </tr>
    <tr>
      <td>š</td>
      <td>%9A</td>
      <td>%C5%A1</td>
    </tr>
    <tr>
      <td>›</td>
      <td>%9B</td>
      <td>%E2%80</td>
    </tr>
    <tr>
      <td>œ</td>
      <td>%9C</td>
      <td>%C5%93</td>
    </tr>
    <tr>
      <td></td>
      <td>%9D</td>
      <td>%9D</td>
    </tr>
    <tr>
      <td>ž</td>
      <td>%9E</td>
      <td>%C5%BE</td>
    </tr>
    <tr>
      <td>Ÿ</td>
      <td>%9F</td>
      <td>%C5%B8</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>%A0</td>
      <td>%C2%A0</td>
    </tr>
    <tr>
      <td>¡</td>
      <td>%A1</td>
      <td>%C2%A1</td>
    </tr>
    <tr>
      <td>¢</td>
      <td>%A2</td>
      <td>%C2%A2</td>
    </tr>
    <tr>
      <td>£</td>
      <td>%A3</td>
      <td>%C2%A3</td>
    </tr>
    <tr>
      <td>¤</td>
      <td>%A4</td>
      <td>%C2%A4</td>
    </tr>
    <tr>
      <td>¥</td>
      <td>%A5</td>
      <td>%C2%A5</td>
    </tr>
    <tr>
      <td>¦</td>
      <td>%A6</td>
      <td>%C2%A6</td>
    </tr>
    <tr>
      <td>§</td>
      <td>%A7</td>
      <td>%C2%A7</td>
    </tr>
    <tr>
      <td>¨</td>
      <td>%A8</td>
      <td>%C2%A8</td>
    </tr>
    <tr>
      <td>©</td>
      <td>%A9</td>
      <td>%C2%A9</td>
    </tr>
    <tr>
      <td>ª</td>
      <td>%AA</td>
      <td>%C2%AA</td>
    </tr>
    <tr>
      <td>«</td>
      <td>%AB</td>
      <td>%C2%AB</td>
    </tr>
    <tr>
      <td>¬</td>
      <td>%AC</td>
      <td>%C2%AC</td>
    </tr>
    <tr>
      <td>­</td>
      <td>%AD</td>
      <td>%C2%AD</td>
    </tr>
    <tr>
      <td>®</td>
      <td>%AE</td>
      <td>%C2%AE</td>
    </tr>
    <tr>
      <td>¯</td>
      <td>%AF</td>
      <td>%C2%AF</td>
    </tr>
    <tr>
      <td>°</td>
      <td>%B0</td>
      <td>%C2%B0</td>
    </tr>
    <tr>
      <td>±</td>
      <td>%B1</td>
      <td>%C2%B1</td>
    </tr>
    <tr>
      <td>²</td>
      <td>%B2</td>
      <td>%C2%B2</td>
    </tr>
    <tr>
      <td>³</td>
      <td>%B3</td>
      <td>%C2%B3</td>
    </tr>
    <tr>
      <td>´</td>
      <td>%B4</td>
      <td>%C2%B4</td>
    </tr>
    <tr>
      <td>µ</td>
      <td>%B5</td>
      <td>%C2%B5</td>
    </tr>
    <tr>
      <td>¶</td>
      <td>%B6</td>
      <td>%C2%B6</td>
    </tr>
    <tr>
      <td>·</td>
      <td>%B7</td>
      <td>%C2%B7</td>
    </tr>
    <tr>
      <td>¸</td>
      <td>%B8</td>
      <td>%C2%B8</td>
    </tr>
    <tr>
      <td>¹</td>
      <td>%B9</td>
      <td>%C2%B9</td>
    </tr>
    <tr>
      <td>º</td>
      <td>%BA</td>
      <td>%C2%BA</td>
    </tr>
    <tr>
      <td>»</td>
      <td>%BB</td>
      <td>%C2%BB</td>
    </tr>
    <tr>
      <td>¼</td>
      <td>%BC</td>
      <td>%C2%BC</td>
    </tr>
    <tr>
      <td>½</td>
      <td>%BD</td>
      <td>%C2%BD</td>
    </tr>
    <tr>
      <td>¾</td>
      <td>%BE</td>
      <td>%C2%BE</td>
    </tr>
    <tr>
      <td>¿</td>
      <td>%BF</td>
      <td>%C2%BF</td>
    </tr>
    <tr>
      <td>À</td>
      <td>%C0</td>
      <td>%C3%80</td>
    </tr>
    <tr>
      <td>Á</td>
      <td>%C1</td>
      <td>%C3%81</td>
    </tr>
    <tr>
      <td>Â</td>
      <td>%C2</td>
      <td>%C3%82</td>
    </tr>
    <tr>
      <td>Ã</td>
      <td>%C3</td>
      <td>%C3%83</td>
    </tr>
    <tr>
      <td>Ä</td>
      <td>%C4</td>
      <td>%C3%84</td>
    </tr>
    <tr>
      <td>Å</td>
      <td>%C5</td>
      <td>%C3%85</td>
    </tr>
    <tr>
      <td>Æ</td>
      <td>%C6</td>
      <td>%C3%86</td>
    </tr>
    <tr>
      <td>Ç</td>
      <td>%C7</td>
      <td>%C3%87</td>
    </tr>
    <tr>
      <td>È</td>
      <td>%C8</td>
      <td>%C3%88</td>
    </tr>
    <tr>
      <td>É</td>
      <td>%C9</td>
      <td>%C3%89</td>
    </tr>
    <tr>
      <td>Ê</td>
      <td>%CA</td>
      <td>%C3%8A</td>
    </tr>
    <tr>
      <td>Ë</td>
      <td>%CB</td>
      <td>%C3%8B</td>
    </tr>
    <tr>
      <td>Ì</td>
      <td>%CC</td>
      <td>%C3%8C</td>
    </tr>
    <tr>
      <td>Í</td>
      <td>%CD</td>
      <td>%C3%8D</td>
    </tr>
    <tr>
      <td>Î</td>
      <td>%CE</td>
      <td>%C3%8E</td>
    </tr>
    <tr>
      <td>Ï</td>
      <td>%CF</td>
      <td>%C3%8F</td>
    </tr>
    <tr>
      <td>Ð</td>
      <td>%D0</td>
      <td>%C3%90</td>
    </tr>
    <tr>
      <td>Ñ</td>
      <td>%D1</td>
      <td>%C3%91</td>
    </tr>
    <tr>
      <td>Ò</td>
      <td>%D2</td>
      <td>%C3%92</td>
    </tr>
    <tr>
      <td>Ó</td>
      <td>%D3</td>
      <td>%C3%93</td>
    </tr>
    <tr>
      <td>Ô</td>
      <td>%D4</td>
      <td>%C3%94</td>
    </tr>
    <tr>
      <td>Õ</td>
      <td>%D5</td>
      <td>%C3%95</td>
    </tr>
    <tr>
      <td>Ö</td>
      <td>%D6</td>
      <td>%C3%96</td>
    </tr>
    <tr>
      <td>×</td>
      <td>%D7</td>
      <td>%C3%97</td>
    </tr>
    <tr>
      <td>Ø</td>
      <td>%D8</td>
      <td>%C3%98</td>
    </tr>
    <tr>
      <td>Ù</td>
      <td>%D9</td>
      <td>%C3%99</td>
    </tr>
    <tr>
      <td>Ú</td>
      <td>%DA</td>
      <td>%C3%9A</td>
    </tr>
    <tr>
      <td>Û</td>
      <td>%DB</td>
      <td>%C3%9B</td>
    </tr>
    <tr>
      <td>Ü</td>
      <td>%DC</td>
      <td>%C3%9C</td>
    </tr>
    <tr>
      <td>Ý</td>
      <td>%DD</td>
      <td>%C3%9D</td>
    </tr>
    <tr>
      <td>Þ</td>
      <td>%DE</td>
      <td>%C3%9E</td>
    </tr>
    <tr>
      <td>ß</td>
      <td>%DF</td>
      <td>%C3%9F</td>
    </tr>
    <tr>
      <td>à</td>
      <td>%E0</td>
      <td>%C3%A0</td>
    </tr>
    <tr>
      <td>á</td>
      <td>%E1</td>
      <td>%C3%A1</td>
    </tr>
    <tr>
      <td>â</td>
      <td>%E2</td>
      <td>%C3%A2</td>
    </tr>
    <tr>
      <td>ã</td>
      <td>%E3</td>
      <td>%C3%A3</td>
    </tr>
    <tr>
      <td>ä</td>
      <td>%E4</td>
      <td>%C3%A4</td>
    </tr>
    <tr>
      <td>å</td>
      <td>%E5</td>
      <td>%C3%A5</td>
    </tr>
    <tr>
      <td>æ</td>
      <td>%E6</td>
      <td>%C3%A6</td>
    </tr>
    <tr>
      <td>ç</td>
      <td>%E7</td>
      <td>%C3%A7</td>
    </tr>
    <tr>
      <td>è</td>
      <td>%E8</td>
      <td>%C3%A8</td>
    </tr>
    <tr>
      <td>é</td>
      <td>%E9</td>
      <td>%C3%A9</td>
    </tr>
    <tr>
      <td>ê</td>
      <td>%EA</td>
      <td>%C3%AA</td>
    </tr>
    <tr>
      <td>ë</td>
      <td>%EB</td>
      <td>%C3%AB</td>
    </tr>
    <tr>
      <td>ì</td>
      <td>%EC</td>
      <td>%C3%AC</td>
    </tr>
    <tr>
      <td>í</td>
      <td>%ED</td>
      <td>%C3%AD</td>
    </tr>
    <tr>
      <td>î</td>
      <td>%EE</td>
      <td>%C3%AE</td>
    </tr>
    <tr>
      <td>ï</td>
      <td>%EF</td>
      <td>%C3%AF</td>
    </tr>
    <tr>
      <td>ð</td>
      <td>%F0</td>
      <td>%C3%B0</td>
    </tr>
    <tr>
      <td>ñ</td>
      <td>%F1</td>
      <td>%C3%B1</td>
    </tr>
    <tr>
      <td>ò</td>
      <td>%F2</td>
      <td>%C3%B2</td>
    </tr>
    <tr>
      <td>ó</td>
      <td>%F3</td>
      <td>%C3%B3</td>
    </tr>
    <tr>
      <td>ô</td>
      <td>%F4</td>
      <td>%C3%B4</td>
    </tr>
    <tr>
      <td>õ</td>
      <td>%F5</td>
      <td>%C3%B5</td>
    </tr>
    <tr>
      <td>ö</td>
      <td>%F6</td>
      <td>%C3%B6</td>
    </tr>
    <tr>
      <td>÷</td>
      <td>%F7</td>
      <td>%C3%B7</td>
    </tr>
    <tr>
      <td>ø</td>
      <td>%F8</td>
      <td>%C3%B8</td>
    </tr>
    <tr>
      <td>ù</td>
      <td>%F9</td>
      <td>%C3%B9</td>
    </tr>
    <tr>
      <td>ú</td>
      <td>%FA</td>
      <td>%C3%BA</td>
    </tr>
    <tr>
      <td>û</td>
      <td>%FB</td>
      <td>%C3%BB</td>
    </tr>
    <tr>
      <td>ü</td>
      <td>%FC</td>
      <td>%C3%BC</td>
    </tr>
    <tr>
      <td>ý</td>
      <td>%FD</td>
      <td>%C3%BD</td>
    </tr>
    <tr>
      <td>þ</td>
      <td>%FE</td>
      <td>%C3%BE</td>
    </tr>
    <tr>
      <td>ÿ</td>
      <td>%FF</td>
      <td>%C3%BF</td>
    </tr>
  </table>

  <hr>
  <h2>Справочник URL кодировок</h2>
  <p>Набор символов ASCII <strong>%00-%1F</strong> сначала разрабатывался для управления аппаратными устройствами.</p>
  <p>Наборы символов не имеют никакого отношения к URL-адресам.</p>

  <table class='w3-table-all notranslate'>
    <tr>
      <th>ASCII Character</th>
      <th>Description</th>
      <th>URL-encoding</th>
    </tr>
    <tr>
      <td>NUL</td>
      <td>null character</td>
      <td>%00</td>
    </tr>
    <tr>
      <td>SOH</td>
      <td>start of header</td>
      <td>%01</td>
    </tr>
    <tr>
      <td>STX</td>
      <td>start of text</td>
      <td>%02</td>
    </tr>
    <tr>
      <td>ETX</td>
      <td>end of text</td>
      <td>%03</td>
    </tr>
    <tr>
      <td>EOT</td>
      <td>end of transmission</td>
      <td>%04</td>
    </tr>
    <tr>
      <td>ENQ</td>
      <td>enquiry</td>
      <td>%05</td>
    </tr>
    <tr>
      <td>ACK</td>
      <td>acknowledge</td>
      <td>%06</td>
    </tr>
    <tr>
      <td>BEL</td>
      <td>bell (ring)</td>
      <td>%07</td>
    </tr>
    <tr>
      <td>BS</td>
      <td>backspace</td>
      <td>%08</td>
    </tr>
    <tr>
      <td>HT</td>
      <td>horizontal tab</td>
      <td>%09</td>
    </tr>
    <tr>
      <td>LF</td>
      <td>line feed</td>
      <td>%0A</td>
    </tr>
    <tr>
      <td>VT</td>
      <td>vertical tab</td>
      <td>%0B</td>
    </tr>
    <tr>
      <td>FF</td>
      <td>form feed</td>
      <td>%0C</td>
    </tr>
    <tr>
      <td>CR</td>
      <td>carriage return</td>
      <td>%0D</td>
    </tr>
    <tr>
      <td>SO</td>
      <td>shift out</td>
      <td>%0E</td>
    </tr>
    <tr>
      <td>SI</td>
      <td>shift in</td>
      <td>%0F</td>
    </tr>
    <tr>
      <td>DLE</td>
      <td>data link escape</td>
      <td>%10</td>
    </tr>
    <tr>
      <td>DC1</td>
      <td>device control 1</td>
      <td>%11</td>
    </tr>
    <tr>
      <td>DC2</td>
      <td>device control 2</td>
      <td>%12</td>
    </tr>
    <tr>
      <td>DC3</td>
      <td>device control 3</td>
      <td>%13</td>
    </tr>
    <tr>
      <td>DC4</td>
      <td>device control 4</td>
      <td>%14</td>
    </tr>
    <tr>
      <td>NAK</td>
      <td>negative acknowledge</td>
      <td>%15</td>
    </tr>
    <tr>
      <td>SYN</td>
      <td>synchronize</td>
      <td>%16</td>
    </tr>
    <tr>
      <td>ETB</td>
      <td>end transmission block</td>
      <td>%17</td>
    </tr>
    <tr>
      <td>CAN</td>
      <td>cancel</td>
      <td>%18</td>
    </tr>
    <tr>
      <td>EM</td>
      <td>end of medium</td>
      <td>%19</td>
    </tr>
    <tr>
      <td>SUB</td>
      <td>substitute</td>
      <td>%1A</td>
    </tr>
    <tr>
      <td>ESC</td>
      <td>escape</td>
      <td>%1B</td>
    </tr>
    <tr>
      <td>FS</td>
      <td>file separator</td>
      <td>%1C</td>
    </tr>
    <tr>
      <td>GS</td>
      <td>group separator</td>
      <td>%1D</td>
    </tr>
    <tr>
      <td>RS</td>
      <td>record separator</td>
      <td>%1E</td>
    </tr>
    <tr>
      <td>US</td>
      <td>unit separator</td>
      <td>%1F</td>
    </tr>
  </table>

  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_html_dtd.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_language_codes.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
