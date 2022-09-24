<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tittle Of the Document</title>
</head>

<body>

<form method="GET">
    <input type="text" name = "person">
    <button>SUBMIT</button>
</form>

<?php
 $name = $_GET['person'];
 echo $name." is soo Handsome Fellow!";

 ?>

</body>

</html>