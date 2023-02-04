
<?php
echo "<head>";
echo "<link href='style.css' rel='stylesheet'>";

echo "</head>";

echo "<body>";

echo "<script type='text/javascript'>

function testFunc() {
    let upc = document.getElementById('upctext').value;
    let upc_length = upc.length;
    if (upc_length < 11) {
        document.getElementById('output2').innerHTML = 'UPC not long enough, min length 11';
        return
    } 
    let header_text = 'Calculating check digit for : ';
    let header = header_text.concat(' ', upc);
    document.getElementById('output').innerHTML = header;

    const upc_reversed = [];
    for (let i = upc_length ; i >= 0; i--) {
        upc_reversed.push(upc.charAt(i));
    }

    const odd_digits = [];
    const even_digits = [];
    for (let i = 0; i < upc_length; i++) {
        if (i % 2 == 0) {
            even_digits.push(upc.charAt(i));
        } else {
            odd_digits.push(upc.charAt(i));
        }
    }

    let odd_product = 0;
    for (let i = 0; i < odd_digits.length; i++) {
        odd_product = odd_product + parseInt(odd_digits[i]);
    }
    odd_product = odd_product * 3;

    let even_sum = 0;
    for (let i = 0; i < even_digits.length; i++) {
        even_sum = even_sum + parseInt(even_digits[i]);
    }
    let combined_sum = odd_product + even_sum;
    let check_digit = 10 - (combined_sum % 10);
    let check_digit_header_text = 'Calculated check digit : ';
    let check_digit_header = check_digit_header_text.concat(' ', check_digit.toString());
    document.getElementById('output1').innerHTML = check_digit_header;

    let final_upc_header_text = 'Combined UPC : ';
    let final_upc = upc.concat('', check_digit.toString());
    let final_upc_header = final_upc_header_text.concat(' ', final_upc);
    document.getElementById('output2').innerHTML = final_upc_header;
}

echo </script>";

echo "<div class='topnav'>";
echo "<a href='http://jakevalue.com/wifispeeds.php'>WifiSpeeds</a>";
echo "<a href='http://jakevalue.com//sandbox.php'>ChessTracker</a>";
echo "<a href='http://jakevalue.com//GS1Checkdigit.php'>CheckDigit</a>";
echo "<a href='http://jakevalue.com//blog.php'>Blog</a>";
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

echo "<input type='button' onclick='testFunc(this)' value='return'></input>";

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