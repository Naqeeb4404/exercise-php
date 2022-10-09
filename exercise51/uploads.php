<?php
if (isset($P_POST['submit'])) {
    $file = $_FILES['file'];

    $filename = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
}

$allowed = array('jpg', 'jpeg', 'png' 'pdf');

if (in_array($fileActualExt, $allowed)) {
    if($fileError === 0) {
        if ($fileSize < 1000000) {
            $fileNameNew = uniqid('', true).".".$
            fileActualExt;
            $filefileDestination = 'uploads/' .$fileNameNew;
        } else {
            echo "Your file is too big!";
            {
            } else {
                echo"There wa an error uploading your file!";
            }
        }
    } else {
     echo "You cannot upload files of this type!";
        }
    }
}