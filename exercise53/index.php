<?php
indlude_once 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user (first, last, username, password)
VALUES ('$first', '$last', '$uid', '$pwd')";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM user WHERE username='$uid' AND first='$first'";
$result = mysqli_query($conn, $sql;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

    }
} else {
    echo "You have an error!";
}