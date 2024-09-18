<?php

//Email Id Masking process
$email_id = "rks@gmail.com";
list($first, $last) = explode('@', $email_id);
echo $first."\n".$last."\n";
$first = str_replace(substr($first, '1'), str_repeat('x', strlen($first)-1), $first);
//echo $test = substr($first,'1');
//echo strlen($first)-1;
//echo str_repeat("X", strlen($first)-1);

$last = explode('.', $last);

$last_domain = str_repeat('x', strlen($last['0']));
echo $hideEmail = $first.'@'.$last_domain.'.'.$last[1];
echo "\n";

//Mobile Number masking process
$mobile = "1234567890";
 $last_four = substr($mobile, -4);
echo $masked = str_repeat('X', strlen($mobile) - 4).$last_four;
?>