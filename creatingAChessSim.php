<?php
echo "<head>";
echo "<link href='style.css' rel='stylesheet'>";
echo "</head>";

echo "<body>";

echo "<div class='topnav'>";
echo "<a href='http://jakevalue.com/wifispeeds.php'>WifiSpeeds</a>";
echo "<a href='http://jakevalue.com/sandbox.php'>ChessTracker</a>";
echo "<a href='http://jakevalue.com/GS1checkdigit.php'>CheckDigit</a>";
echo "<a href='http://jakevalue.com/blog.php'>Blog</a>";
echo "</div>";

echo "<div class='flex-container'>";

echo "<h2>Building a chess game in python</h2>";

echo "<h4>04.11.2023 Version 1.1</h4>";
echo "<ul>";
echo "<li>Started with a simple 2D array as the board, using pawns only</li>";
echo "<li>A bit of thinking to come up with consistent way of translating the target positions such as A1 to 2D matrix indexes</li>";
echo "<li>Added some basic sanitations for input and black/white moves, do not have a game end condition at this point</li>";
echo "</ul>";

echo "<h4>Next features will include : </h4>";
echo "<ul>";
echo "<li>Adding other piece types such as bishops and rooks</li>";
echo "<li>Adding a status tracker and game end condition</li>";
echo "<li>Handling of borders and exception moves</li>";
echo "</ul>";

echo "<h4>A Sample Game Example V 1.1</h4>";

echo "<img src='chessSimV1.1_SampleScrnSht_1_04112023.png'>";
echo "<p></p>";
echo "<img src='chessSimV1.1_SampleScrnSht_2_04112023.png'>";
echo "<p></p>";
echo "<img src='chessSimV1.1_SampleScrnSht_3_04112023.png'>";
echo "<p></p>";
echo "<img src='chessSimV1.1_SampleScrnSht_4_04112023.png'>";


echo "</div>";

echo "</body>";
?>