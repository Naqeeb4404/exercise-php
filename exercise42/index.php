<!DOCTYPE html>
<html>
<head>
    <tittle></title>
</head>
<body>
<h2>Signup</h2>
<form action="includes/singup.inc.php" methdod="POST">
<input type="text" name="first" placeholder="Firstname">
<input type="text" name="last" placeholder="Lastname">
<input type="text" name="email" placeholder="E-mail">
<input type="text" name="uid" placeholder="Username">
<input type="password" name="pwd" placeholder="Password">
<button type="submit" name="submit">Sign up</button>
</form>
<?php
$fullurl = "htpps://$_SERVER[HTPP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($fullurl, "signup=empty") == true) {
    echo"<P class='error'>You did not fill in all fields!</p>;
}
elseif (strpos($fullurl, "signup=char") == true) {
    echo"<P class='error'>You did not fill in all fields!</p>;
}
elseif (strpos($fullurl, "signup=email") == true) {
    echo'<P class='error'>You did not fill in all fields!</p>;
}
elseif (strpos($fullurl, "signup=success") == true) {
    echo"<P class='error'>You did not fill in all fields!</p>;
}*/

 if (!isset($_GET['signup'])) {
    exit();
 }
 else {
    $signupCheck = $_GET['signup'];

    elseif ($signupCheck == "empty") {
    echo"<P class='error'>You did not fill in all fields!</p>;
    exit();
    }
 }
 


?>
</body>
</html>