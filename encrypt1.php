<?php 

//echo $encoded_value = encrypt();

// function encrypt() {
//     $encode_64 = strtr(base64_encode('20.00'), '0123456789+/', '5432109876+/');
//     return trim($encode_64);
// }

//echo base64_encode("35.55");



echo strtr(base64_encode("20.00"),"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/","RQPONMLKJIHGFEDCBAZYXWVUTSrqponmlkjihgfedcbazyxwvuts5432109876+/");
//echo base64_encode("20");

?>

<script>

function customBase64Encode(input) {
    // Step 1: Standard Base64 encoding
    let base64 = btoa(input);

    // Step 2: Custom character translation
    const originalChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
    const customChars = "RQPONMLKJIHGFEDCBAZYXWVUTSrqponmlkjihgfedcbazyxwvuts5432109876+/";
    
    // Translate characters using a mapping
    let translated = base64.split('').map(char => {
        const index = originalChars.indexOf(char);
        return index !== -1 ? customChars[index] : char;
    }).join('');

    return translated;
}

// Example Usage
const encoded = customBase64Encode("20.00");
console.log(encoded); // Outputs the custom Base64 encoded string

</script>