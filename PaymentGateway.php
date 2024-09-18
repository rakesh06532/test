<?php
$data['pg_status'] = "Success";

if ($data['pg_status'] === "success") {
    echo "True \n";
} else {
    echo "False \n";
}

echo 'This is your file path:- ' . $_SERVER['PHP_SELF'] . "\n";
echo 'This is your file name:- ' . $_SERVER['SCRIPT_FILENAME'] . "\n";
// echo 'This is the IP address: ' . $_SERVER['SERVER_NAME'] . '\n';





?>