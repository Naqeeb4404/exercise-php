<!DOCTYPE html>
<html>
    <head>
        <tittle></title>
    </head>
    <body>
<?php 
if (isset($_SESSION['id'])) {
    if (isset($_SESSION['id'] ==1)) {
        echo"You are logged is as user #1";
    }
    echo "<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">upload</button>
</form>"
    } else {
        echo
?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">upload</button>
</form>

<form action="login.php" method="POST">
    <button type="submit"></button>
</form>
</body>
</html>
