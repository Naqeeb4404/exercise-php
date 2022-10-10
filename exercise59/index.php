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

$string2 = preg_replace("/Naqeeb/", "John", $string);

echo $string2;
?>

</body>
</html>