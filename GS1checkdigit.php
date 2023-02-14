
<?php
echo "<head>";
echo "<link href='style.css' rel='stylesheet'>";

echo "</head>";

echo "<body>";

echo "<script src='onCallSources.js'></script>";

echo "<div class='topnav'>";
echo "<a href='http://jakevalue.com/wifispeeds.php'>WifiSpeeds</a>";
echo "<a href='http://jakevalue.com/sandbox.php'>ChessTracker</a>";
echo "<a href='http://jakevalue.com/GS1checkdigit.php'>CheckDigit</a>";
echo "<a href='http://jakevalue.com/blog.php'>Blog</a>";
echo "</div>";

echo "<div class='flex-container'>";

echo "<h2>GS1 GTIN Check Digit Calculator</h2>";

echo "<ul>";
echo "<li>Python tool written to calculate GS1 GTIN check digits</li>";
echo "<li>Code and more information available at : <a href='https://github.com/JPawlikowski/UPC_CheckDigit'>github.com/JPawlikowski/UPC_CheckDigit</a></li>";
echo "<li>Sample GTIN (Without check digit) : 103600024145</li>";
echo "</ul>";

echo "<h3 id='test'>Enter GTIN (length 11, 12, 13, 14) </h3>";

echo "<input id='upctext' type='text'></input>";

echo "<input type='button' id='checkDigitReturnBtn' onclick='checkDigitFunc(this)' value='return'></input>";

echo "<p id='output'></p>";
echo "<p id='output1'></p>";
echo "<p id='output2'></p>";
echo "<p id='output3'></p>";

echo "<ul>";
echo "<li>Information about calculation process can be found at : <a href='https://en.wikipedia.org/wiki/Check_digit'>wikipedia/checkdigit</a></li>";
echo "<li>Official calculator : <a href='https://www.gs1.org/services/check-digit-calculator'>GS1 Check Digit Calculator</li>";
echo "</ul>";

echo "</body>";
?>