<?php
$filename = "likes.txt";

// Check if the file exists and is not empty
if (file_exists($filename) && filesize($filename) > 0) {
    $file = fopen($filename, "r");
    $likeCount = fread($file, filesize($filename));
    fclose($file);
    echo $likeCount;
} else {
    echo "0"; // Return 0 if the file is empty or not found
}
?>
