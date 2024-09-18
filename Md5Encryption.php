<?php 

$str = "Hello World";

echo "After Encrypted string using md5 Hexa Data: " . md5($str) . "\n";

echo "After Encrypted string using md5 Binary Data: " . md5($str, true) . "\n";

echo "After Encrypted string using sha1 Hexa Data: " . sha1($str) . "\n";

echo "Afrer Encrypted string using sha1 Binary Data: " . sha1($str, true) . "\n";

?>