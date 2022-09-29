<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title of the Document</title>
</head>

<body>
    <?php
    
 /*
 $GLOBALS
 $_POST
 $_GET
 $_COOKIE
 $_SESSION
 */

 $x = 5;
 

 function something(){
    $y = 10;
    echo $GLOBALS['x'];
 }

 something();

?>

</body>


</html>