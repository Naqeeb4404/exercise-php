<?php
include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <tittle></title>
</head>
<body>

<?php
  $sql = "SELECT * FROM user;";
  $result = mysqli_query();
  $resultCheck = mysqli_num_rows($result);


  if($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        echo $row['user_uid'] . "<br>";
    }
        #code...
    }
  }

?>

</body>
</html>