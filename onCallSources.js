
function checkDigitFunc() {
    //Sample UPC - 103600024145 (without check digit) -> Calculates to a 6
    let upc = document.getElementById('upctext').value;
    let upc_length = upc.length;
    if (upc_length < 11 || upc_length > 13) {
        document.getElementById('output2').innerHTML = 'UPC provided not withing length range, 11<=UPC<=13';

        document.getElementById('output').innerHTML = '';
        document.getElementById('output1').innerHTML = '';
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