<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "galleryexample";

$conn = mysqli_connect($servername, $username );

if (isset($_POST['submit'])) {

    $newFileName = $_POST['filename'];
    if ($_POST['filename']) {
        $newFileName = "gallery";
 } else {
    $newFileName = strtolower(str_replace(" ", " ", $newFileName));
}
$imageTitle = $_POST['filetitle'];
$imageDesc = $_POST['filedesc'];

$file = $_FILES['file'];

$fileName = $file["name"];
$filetype = $file["type"];
$filetmp_name = $file["tmp_name"];
$fileerror = $file["error"];
$filesize = $file["size"];
}
$fileExt = explode(".", $fileName);
$fileActual = strtolower(end($fileExt));

$allowed = array("jpg", "jpeg", "png");

if (in_array($fileActualExt, $allowed)) {
    if ($fileError ===0) {
        if ($fileSize > 2000000){
// code...
        } else {
            echo "File size is too big!";
            exit();
    }
} else {
    echo "You had an error!";
    exit();
    echo "You need to upload a proper file type!";