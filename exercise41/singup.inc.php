?php
include_once 'dbh.inc.php';

$first =  $_POST['first']);
$last =  $_POST['last']);
$email =  mysqli_real_escape_string($conn, $_POST['email']);
$uid =  mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);