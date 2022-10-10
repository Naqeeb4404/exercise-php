<?php
$fileNames = $_POST['filename'];
$removeSpaces = str_replace(" ", "", $fileNames);
$allFileNames = explode(",", $removeSpace);
$countAllNames = count($allFileNames);

for ($i=0; $i < $countAllNames; $i++) {
    if (file_exists("upload/" .$allFileNames[$i]) == false) {
        header("Location: index.php?deleterror");
        exit();
    }
}

for ($i=0; $i < $countAllNames; $i++) {
    $path = "uploads/" .$allFileNames[$i];
    if (!unlink($path)) {
        echo "You have an error!";
        exit();
    }
}
header("Location: index.php?deletsuccess");