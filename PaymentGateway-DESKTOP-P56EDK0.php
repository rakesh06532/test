<?php
$data['pg_status'] = "Success";

if ($data['pg_status'] == "success") {
    echo "True \n";
} else {
    echo "False \n";
}

$merchantkey = null;

if(is_null($merchantkey)) {
    echo "merchant value is " . $merchantkey;
}

?>