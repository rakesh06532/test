<?php

$string = "Hathway@1234";

echo $encodeString = base64_encode($string) . "\n";

echo base64_decode($encodeString) . '\n';

$string2 = "This is <b>Bold<b> text.";

$age = [
    "Peter"=>35, "Ben"=>37, "Joe"=>'43'
];



// $age2 = json_encode($age);

// $age3 = json_encode($age2);

// $age4 = json_encode($age3);

// $age5 = json_decode($age4);
// $age6 = json_decode($age5);

// echo $age6;


?>