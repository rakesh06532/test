<?php 

if(isset($_POST['Encrypt'])) {

    $simple_string = $_POST['text'];
    echo "Original Data: ".$simple_string;
    echo "<br>";

    $ciphering = "AES-256-CTR";
    $option = 0;
    $encryption_iv = "1234567890123456";
   $iv = substr(hash('sha256',$encryption_iv),0,16);
   //$iv = random_bytes(16);
   
    $encryption_key = "HaThwAyCUstO12Two";

    $encryption = openssl_encrypt($simple_string,$ciphering, $encryption_key,$option,$iv);

    echo "Encrypted Data: ".$encryption;
    echo "<br>";
    echo "Secret Key: ".$encryption_key; 
}

if(isset($_POST['Decrypt'])) {

    $text = $_POST['text'];
    $ciphering = "AES-256-CTR";
    $option = 0;
    $decryption_key = "HaThwAyCUstO12Tw123";

    $decryption_iv = "1234567890123456";
    $iv = substr(hash('sha256',$decryption_iv),0,16);
    //$iv = random_bytes(16);

    $decryption = openssl_decrypt($text,$ciphering,$decryption_key,$option,$iv);

    echo "Decrypted Data: ".$decryption;
    echo "<br>";
    echo "Secret Key: ".$decryption_key;

}
?>