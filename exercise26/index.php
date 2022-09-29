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

 echo $_POST['name'];

?>

<form method="POST">
    <input type="hidden" name="name" value ="Naqeeb">
    <button type="submit">PRESS ME!</button>
</form>
</body>


</html>