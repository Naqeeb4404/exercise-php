<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title of the Document</title>
</head>

<body>
    <?php
    
 /*

 $_COOKIE
 $_SESSION
 */

 setcookie("name", "Daniel", time() - 86400);

 $_SESSION['name'] = "12";
 
 ?>
</body>

</html>