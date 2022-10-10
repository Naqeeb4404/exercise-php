<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <tittle></title>
    </head>
    <body>
<?php
//Here is a sting
$string = "My name is Naqeeb, Naqeeb is my name";

echo preg_match("/\^.*e$/", $string);

function generatekey(){
    $keyLength = 1;
    $str = "abcdefg";
    $randStr = substr(str_shuffle($str), 0, $keyLength);

    $checkkey = checkKey($conn, $randStr);

    while ($checkkey == true) {
        $randStr = substr(str_shuffle($str), 0, $keyLength);
        $checkkey = checkKeys($conn, $randStr);
    }
}
?>

</body>
</html>