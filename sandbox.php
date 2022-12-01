
<?php
echo "<head>";
echo "<link href='style.css' rel='stylesheet'>";
echo "</head>";

echo "<body>";

echo "<div class='topnav'>";
echo "<a href='#wifispeeds'>WifiSpeeds</a>";
echo "<a href='#sandbox'>ChessTracker</a>";
echo "</div>";

echo "<div class='flex-container'>";

echo "<h2>Chess Tracker</h2>";

echo "<ul>";
echo "<li>Python tool written to track and visualize Chess ELO ranking and progress insight</li>";
echo "<li>Code and more information available at : <a>https://github.com/JPawlikowski/Chess_Tracking</a></li>";
echo "</ul>";

echo "<h3>Upcoming features</h3>";

echo "<ul>";
echo "<li>Improved x-ticks for times becoming too busy, looking to group by month</li>";
echo "<li>Additional analytics, such as win rate per color, longest win/loss streak, color frequency and more</li>";
echo "</ul>";

echo "<img src='Elo_plot_Blitz-5_202211301922.png'>";

echo "<img src='Elo_pie_Blitz-5_202211271913.png'>";

echo "<h4>Blitz 5 Notes</h4>";

echo "<ul>";
echo "<li>Started at 1000 which quickly dropped, since then pretty steady</li>";
echo "<li>Majority of games have been oppening with London-ish style</li>";
echo "<li>Most common wins are time and pressure related, early aggression leads to opponent wasting time</li>";
echo "<li>Most common loss is lack of agression or mid game blunder</li>";
echo "<li>Looking to play more games with same strategy before going into other oppennings</li>";
echo "</ul>";

echo "<img src='Elo_chart_Rapid-10_202211211908.png'>";

echo "<h4>Blitz 5 Notes</h4>";
echo "<ul>";
echo "<li>Not playing much Rapid 10 anymore due to games taking too much time if only have half an hour to play</li>";
echo "</ul>";

echo "</div>";

echo "</body>";
?>