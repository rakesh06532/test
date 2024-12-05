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