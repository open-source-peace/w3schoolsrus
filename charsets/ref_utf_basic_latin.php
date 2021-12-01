<?php include '../include/head.php'; ?>
<title>HTML Справочник UTF-8 C0 Управляющие и Базовая латынь. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Справочник UTF-8 C0 Управляющие и Базовая латынь. Полный справочник символов. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_charsets.php'; ?>
<?php include '../include/before_content_charsets.php'; ?>

<article>
    <h1>UTF-8 <span class="color_h1">C0 Управляющие и Базовая латынь</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="ref_html_utf8.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="ref_utf_latin1_supplement.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Диапазон: десятичный 0-127. Hex 0000-007F.</h2>
    <div class="w3-panel w3-note"><p>Набор символов совпадает с исходным набором символов ASCII.</p></div>

    <p>Если вы хотите, чтобы специальные символы отображались в HTML, вы можете использовать объект HTML, представленный в таблице ниже.</p>
    <p>Если у символа нет HTML-объекта, вы можете использовать десятичную (dec) или шестнадцатеричную (hex) ссылку.</p>

    <div class="w3-example">
        <h3>Пример</h3>

        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;My name is Johnny &amp;quot;Bang&amp;quot; Johnson&lt;/p&gt;<br><br>
            &lt;p&gt;My name is Johnny &amp;#34;Bang&amp;#34; Johnson&lt;/p&gt;<br>
            <br>&lt;p&gt;My name is Johnny &amp;#x0022;Bang&amp;#x0022; Johnson&lt;/p&gt;
        </div>
        <h3>Будет отображаться как:</h3>
        <div class="w3-code notranslate">
            My name is Johnny "Bang" Johnson<br><br>
            My name is Johnny "Bang" Johnson<br><br>
            My name is Johnny "Bang" Johnson
        </div>

        <a class="w3-btn w3-margin-bottom" href="tryutf_quote.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Управляющие символы</h2>
    <p>Управляющие символы ASCII (диапазон 0-31, плюс 127) предназначены для управления аппаратными устройствами.</p>
    <p>Управляющие символы <a href="ref_html_ascii.php">перечислены здесь</a>.</p>

    <hr>
    <h2>UTF-8 Базовая латынь</h2>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate charset-tryit">
            <tr>
                <th style="width:7%">Символ</th>
                <th style="width:7%">Dec</th>
                <th style="width:7%">Hex</th>
                <th style="width:15%">Объект</th>
                <th>Имя</th>
            </tr>
            <tr><td>&#32;</td><td>32</td><td>0020</td><td>&nbsp;</td><td>SPACE</td></tr>
            <tr><td>!</td><td>33</td><td>0021</td><td>&nbsp;</td><td>EXCLAMATION MARK</td></tr>
            <tr><td>"</td><td>34</td><td>0022</td><td>&amp;quot;</td><td>QUOTATION MARK</td></tr>
            <tr><td>#</td><td>35</td><td>0023</td><td>&nbsp;</td><td>NUMBER SIGN</td></tr>
            <tr><td>$</td><td>36</td><td>0024</td><td>&nbsp;</td><td>DOLLAR SIGN</td></tr>
            <tr><td>%</td><td>37</td><td>0025</td><td>&nbsp;</td><td>PERCENT SIGN</td></tr>
            <tr><td>&amp;</td><td>38</td><td>0026</td><td>&amp;amp;</td><td>AMPERSAND</td></tr>
            <tr><td>'</td><td>39</td><td>0027</td><td>&nbsp;</td><td>APOSTROPHE</td></tr>
            <tr><td>(</td><td>40</td><td>0028</td><td>&nbsp;</td><td>LEFT PARENTHESIS</td></tr>
            <tr><td>)</td><td>41</td><td>0029</td><td>&nbsp;</td><td>RIGHT PARENTHESIS</td></tr>
            <tr><td>*</td><td>42</td><td>002A</td><td>&nbsp;</td><td>ASTERISK</td></tr>
            <tr><td>+</td><td>43</td><td>002B</td><td>&nbsp;</td><td>PLUS SIGN</td></tr>
            <tr><td>,</td><td>44</td><td>002C</td><td>&nbsp;</td><td>COMMA</td></tr>
            <tr><td>-</td><td>45</td><td>002D</td><td>&nbsp;</td><td>HYPHEN-MINUS</td></tr>
            <tr><td>.</td><td>46</td><td>002E</td><td>&nbsp;</td><td>FULL STOP</td></tr>
            <tr><td>/</td><td>47</td><td>002F</td><td>&nbsp;</td><td>SOLIDUS</td></tr>
            <tr><td>0</td><td>48</td><td>0030</td><td>&nbsp;</td><td>DIGIT ZERO</td></tr>
            <tr><td>1</td><td>49</td><td>0031</td><td>&nbsp;</td><td>DIGIT ONE</td></tr>
            <tr><td>2</td><td>50</td><td>0032</td><td>&nbsp;</td><td>DIGIT TWO</td></tr>
            <tr><td>3</td><td>51</td><td>0033</td><td>&nbsp;</td><td>DIGIT THREE</td></tr>
            <tr><td>4</td><td>52</td><td>0034</td><td>&nbsp;</td><td>DIGIT FOUR</td></tr>
            <tr><td>5</td><td>53</td><td>0035</td><td>&nbsp;</td><td>DIGIT FIVE</td></tr>
            <tr><td>6</td><td>54</td><td>0036</td><td>&nbsp;</td><td>DIGIT SIX</td></tr>
            <tr><td>7</td><td>55</td><td>0037</td><td>&nbsp;</td><td>DIGIT SEVEN</td></tr>
            <tr><td>8</td><td>56</td><td>0038</td><td>&nbsp;</td><td>DIGIT EIGHT</td></tr>
            <tr><td>9</td><td>57</td><td>0039</td><td>&nbsp;</td><td>DIGIT NINE</td></tr>
            <tr><td>:</td><td>58</td><td>003A</td><td>&nbsp;</td><td>COLON</td></tr>
            <tr><td>;</td><td>59</td><td>003B</td><td>&nbsp;</td><td>SEMICOLON</td></tr>
            <tr><td>&lt;</td><td>60</td><td>003C</td><td>&amp;lt;</td><td>LESS-THAN SIGN</td></tr>
            <tr><td>=</td><td>61</td><td>003D</td><td>&nbsp;</td><td>EQUALS SIGN</td></tr>
            <tr><td>&gt;</td><td>62</td><td>003E</td><td>&amp;gt;</td><td>GREATER-THAN SIGN</td></tr>
            <tr><td>?</td><td>63</td><td>003F</td><td>&nbsp;</td><td>QUESTION MARK</td></tr>
            <tr><td>@</td><td>64</td><td>0040</td><td>&nbsp;</td><td>COMMERCIAL AT</td></tr>
            <tr><td>A</td><td>65</td><td>0041</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER A</td></tr>
            <tr><td>B</td><td>66</td><td>0042</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER B</td></tr>
            <tr><td>C</td><td>67</td><td>0043</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER C</td></tr>
            <tr><td>D</td><td>68</td><td>0044</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER D</td></tr>
            <tr><td>E</td><td>69</td><td>0045</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER E</td></tr>
            <tr><td>F</td><td>70</td><td>0046</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER F</td></tr>
            <tr><td>G</td><td>71</td><td>0047</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER G</td></tr>
            <tr><td>H</td><td>72</td><td>0048</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER H</td></tr>
            <tr><td>I</td><td>73</td><td>0049</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER I</td></tr>
            <tr><td>J</td><td>74</td><td>004A</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER J</td></tr>
            <tr><td>K</td><td>75</td><td>004B</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER K</td></tr>
            <tr><td>L</td><td>76</td><td>004C</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER L</td></tr>
            <tr><td>M</td><td>77</td><td>004D</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER M</td></tr>
            <tr><td>N</td><td>78</td><td>004E</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER N</td></tr>
            <tr><td>O</td><td>79</td><td>004F</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER O</td></tr>
            <tr><td>P</td><td>80</td><td>0050</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER P</td></tr>
            <tr><td>Q</td><td>81</td><td>0051</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER Q</td></tr>
            <tr><td>R</td><td>82</td><td>0052</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER R</td></tr>
            <tr><td>S</td><td>83</td><td>0053</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER S</td></tr>
            <tr><td>T</td><td>84</td><td>0054</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER T</td></tr>
            <tr><td>U</td><td>85</td><td>0055</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER U</td></tr>
            <tr><td>V</td><td>86</td><td>0056</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER V</td></tr>
            <tr><td>W</td><td>87</td><td>0057</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER W</td></tr>
            <tr><td>X</td><td>88</td><td>0058</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER X</td></tr>
            <tr><td>Y</td><td>89</td><td>0059</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER Y</td></tr>
            <tr><td>Z</td><td>90</td><td>005A</td><td>&nbsp;</td><td>LATIN CAPITAL LETTER Z</td></tr>
            <tr><td>[</td><td>91</td><td>005B</td><td>&nbsp;</td><td>LEFT SQUARE BRACKET</td></tr>
            <tr><td>\</td><td>92</td><td>005C</td><td>&nbsp;</td><td>REVERSE SOLIDUS</td></tr>
            <tr><td>]</td><td>93</td><td>005D</td><td>&nbsp;</td><td>RIGHT SQUARE BRACKET</td></tr>
            <tr><td>^</td><td>94</td><td>005E</td><td>&nbsp;</td><td>CIRCUMFLEX ACCENT</td></tr>
            <tr><td>_</td><td>95</td><td>005F</td><td>&nbsp;</td><td>LOW LINE</td></tr>
            <tr><td>`</td><td>96</td><td>0060</td><td>&nbsp;</td><td>GRAVE ACCENT</td></tr>
            <tr><td>a</td><td>97</td><td>0061</td><td>&nbsp;</td><td>LATIN SMALL LETTER A</td></tr>
            <tr><td>b</td><td>98</td><td>0062</td><td>&nbsp;</td><td>LATIN SMALL LETTER B</td></tr>
            <tr><td>c</td><td>99</td><td>0063</td><td>&nbsp;</td><td>LATIN SMALL LETTER C</td></tr>
            <tr><td>d</td><td>100</td><td>0064</td><td>&nbsp;</td><td>LATIN SMALL LETTER D</td></tr>
            <tr><td>e</td><td>101</td><td>0065</td><td>&nbsp;</td><td>LATIN SMALL LETTER E</td></tr>
            <tr><td>f</td><td>102</td><td>0066</td><td>&nbsp;</td><td>LATIN SMALL LETTER F</td></tr>
            <tr><td>g</td><td>103</td><td>0067</td><td>&nbsp;</td><td>LATIN SMALL LETTER G</td></tr>
            <tr><td>h</td><td>104</td><td>0068</td><td>&nbsp;</td><td>LATIN SMALL LETTER H</td></tr>
            <tr><td>i</td><td>105</td><td>0069</td><td>&nbsp;</td><td>LATIN SMALL LETTER I</td></tr>
            <tr><td>j</td><td>106</td><td>006A</td><td>&nbsp;</td><td>LATIN SMALL LETTER J</td></tr>
            <tr><td>k</td><td>107</td><td>006B</td><td>&nbsp;</td><td>LATIN SMALL LETTER K</td></tr>
            <tr><td>l</td><td>108</td><td>006C</td><td>&nbsp;</td><td>LATIN SMALL LETTER L</td></tr>
            <tr><td>m</td><td>109</td><td>006D</td><td>&nbsp;</td><td>LATIN SMALL LETTER M</td></tr>
            <tr><td>n</td><td>110</td><td>006E</td><td>&nbsp;</td><td>LATIN SMALL LETTER N</td></tr>
            <tr><td>o</td><td>111</td><td>006F</td><td>&nbsp;</td><td>LATIN SMALL LETTER O</td></tr>
            <tr><td>p</td><td>112</td><td>0070</td><td>&nbsp;</td><td>LATIN SMALL LETTER P</td></tr>
            <tr><td>q</td><td>113</td><td>0071</td><td>&nbsp;</td><td>LATIN SMALL LETTER Q</td></tr>
            <tr><td>r</td><td>114</td><td>0072</td><td>&nbsp;</td><td>LATIN SMALL LETTER R</td></tr>
            <tr><td>s</td><td>115</td><td>0073</td><td>&nbsp;</td><td>LATIN SMALL LETTER S</td></tr>
            <tr><td>t</td><td>116</td><td>0074</td><td>&nbsp;</td><td>LATIN SMALL LETTER T</td></tr>
            <tr><td>u</td><td>117</td><td>0075</td><td>&nbsp;</td><td>LATIN SMALL LETTER U</td></tr>
            <tr><td>v</td><td>118</td><td>0076</td><td>&nbsp;</td><td>LATIN SMALL LETTER V</td></tr>
            <tr><td>w</td><td>119</td><td>0077</td><td>&nbsp;</td><td>LATIN SMALL LETTER W</td></tr>
            <tr><td>x</td><td>120</td><td>0078</td><td>&nbsp;</td><td>LATIN SMALL LETTER X</td></tr>
            <tr><td>y</td><td>121</td><td>0079</td><td>&nbsp;</td><td>LATIN SMALL LETTER Y</td></tr>
            <tr><td>z</td><td>122</td><td>007A</td><td>&nbsp;</td><td>LATIN SMALL LETTER Z</td></tr>
            <tr><td>{</td><td>123</td><td>007B</td><td>&nbsp;</td><td>LEFT CURLY BRACKET</td></tr>
            <tr><td>|</td><td>124</td><td>007C</td><td>&nbsp;</td><td>VERTICAL LINE</td></tr>
            <tr><td>}</td><td>125</td><td>007D</td><td>&nbsp;</td><td>RIGHT CURLY BRACKET</td></tr>
            <tr><td>~</td><td>126</td><td>007E</td><td>&nbsp;</td><td>TILDE</td></tr>
        </table>
    </div>
    <hr>

    <h2>C0 Управляющие</h2>
    <p>Управляющие символы изначально были предназначены для управления аппаратными устройствами..</p>
    <p>Управляющие символы (кроме горизонтальной табуляции, возврата каретки и перевода строки) не имеют никакого отношения к документу HTML.</p>

    <div class="w3-responsive">
        <table class="w3-table w3-bordered w3-striped w3-border notranslate">
            <tr>
                <th style="width:7%">Символ</th>
                <th style="width:7%">Dec</th>
                <th style="width:7%">Hex</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td>NUL</td>
                <td>0</td>
                <td>0000</td>
                <td>null character</td>
            </tr>
            <tr>
                <td>SOH</td>
                <td>1</td>
                <td>0001</td>
                <td>start of header</td>
            </tr>
            <tr>
                <td>STX</td>
                <td>2</td>
                <td>0002</td>
                <td>start of text</td>
            </tr>
            <tr>
                <td>ETX</td>
                <td>3</td>
                <td>0003</td>
                <td>end of text</td>
            </tr>
            <tr>
                <td>EOT</td>
                <td>4</td>
                <td>0004</td>
                <td>end of transmission</td>
            </tr>
            <tr>
                <td>ENQ</td>
                <td>5</td>
                <td>0005</td>
                <td>enquiry</td>
            </tr>
            <tr>
                <td>ACK</td>
                <td>6</td>
                <td>0006</td>
                <td>acknowledge</td>
            </tr>
            <tr>
                <td>BEL</td>
                <td>7</td>
                <td>0007</td>
                <td>bell (ring)</td>
            </tr>
            <tr>
                <td>BS</td>
                <td>8</td>
                <td>0008</td>
                <td>backspace</td>
            </tr>
            <tr>
                <td>HT</td>
                <td>9</td>
                <td>0009</td>
                <td>horizontal tab</td>
            </tr>
            <tr>
                <td>LF</td>
                <td>10</td>
                <td>000A</td>
                <td>line feed</td>
            </tr>
            <tr>
                <td>VT</td>
                <td>11</td>
                <td>000B</td>
                <td>vertical tab</td>
            </tr>
            <tr>
                <td>FF</td>
                <td>12</td>
                <td>000C</td>
                <td>form feed</td>
            </tr>
            <tr>
                <td>CR</td>
                <td>13</td>
                <td>000D</td>
                <td>carriage return</td>
            </tr>
            <tr>
                <td>SO</td>
                <td>14</td>
                <td>000E</td>
                <td>shift out</td>
            </tr>
            <tr>
                <td>SI</td>
                <td>15</td>
                <td>000F</td>
                <td>shift in</td>
            </tr>
            <tr>
                <td>DLE</td>
                <td>16</td>
                <td>0010</td>
                <td>data link escape</td>
            </tr>
            <tr>
                <td>DC1</td>
                <td>17</td>
                <td>0011</td>
                <td>device control 1</td>
            </tr>
            <tr>
                <td>DC2</td>
                <td>18</td>
                <td>0012</td>
                <td>device control 2</td>
            </tr>
            <tr>
                <td>DC3</td>
                <td>19</td>
                <td>0013</td>
                <td>device control 3</td>
            </tr>
            <tr>
                <td>DC4</td>
                <td>20</td>
                <td>0014</td>
                <td>device control 4</td>
            </tr>
            <tr>
                <td>NAK</td>
                <td>21</td>
                <td>0015</td>
                <td>negative acknowledge</td>
            </tr>
            <tr>
                <td>SYN</td>
                <td>22</td>
                <td>0016</td>
                <td>synchronize</td>
            </tr>
            <tr>
                <td>ETB</td>
                <td>23</td>
                <td>0017</td>
                <td>end transmission block</td>
            </tr>
            <tr>
                <td>CAN</td>
                <td>24</td>
                <td>0018</td>
                <td>cancel</td>
            </tr>
            <tr>
                <td>EM</td>
                <td>25</td>
                <td>0019</td>
                <td>end of medium</td>
            </tr>
            <tr>
                <td>SUB</td>
                <td>26</td>
                <td>001A</td>
                <td>substitute</td>
            </tr>
            <tr>
                <td>ESC</td>
                <td>27</td>
                <td>001B</td>
                <td>escape</td>
            </tr>
            <tr>
                <td>FS</td>
                <td>28</td>
                <td>001C</td>
                <td>file separator</td>
            </tr>
            <tr>
                <td>GS</td>
                <td>29</td>
                <td>001D</td>
                <td>group separator</td>
            </tr>
            <tr>
                <td>RS</td>
                <td>30</td>
                <td>001E</td>
                <td>record separator</td>
            </tr>
            <tr>
                <td>US</td>
                <td>31</td>
                <td>001F</td>
                <td>unit separator</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>DEL</td>
                <td>127</td>
                <td>007F</td>
                <td>delete (rubout)</td>
            </tr>
        </table>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="ref_html_utf8.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="ref_utf_latin1_supplement.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>