

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title of the Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <ul>
        <li><a href="index.php>HOME</a></li>
        <li><a href="contact.php>CONTACT</a></li>
</ul>

    <?php
$_SESSION['username'] = "dania948a";
echo $_SESSION['username'];
 
 if (isset( $_SESSION['username'])){
    echo"YOU ARE NOT LOGGED IN!";
 }else{
    echo "YOU ARE LOGGED IN!";
 }

 ?>


</body>

</html>