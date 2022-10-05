<head>
    <title></title>
    </head>
    <body>
    
    <?php
    $data = "Admin";
    //Created a template
    $sql = "SELECT * FROM users WHERE user_id=?;";
    //Create a prepared statment
    $stmt = mysqli_stmt_init($conn);
    //Preapare the prepared statment
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } else{
        //Bind parameters to the placeholder
        mysqli_stmt_bind_param($stmt, "s", $data);
        //Run parameters inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_uid'] . "<br>";
        }
    }
    ?>
    </body>