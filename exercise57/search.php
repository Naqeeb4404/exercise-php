<?php
include 'header.php';
?>

<h1>Artcile page</h1>

<div class="article-container">
    <?php
    $title = mysqli_real_escape_string($conn, $_GET['title'];)

    $sql = "SELECT * FROM article";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='article-box'>
            <h3>" .$row['a_title']."</h3>
            <p>".$row['a_text']."</p>
            <p>".$row['a_title']."</p>
            <p>".$row['a_author']."</p>
        }
    } else {
        echo "There are no result matching your search hehe!;
    }
}
?>
</div>