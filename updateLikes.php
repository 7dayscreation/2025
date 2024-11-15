<?php
$likeCount = $_POST['likeCount'];
$file = fopen("likes.txt", "w");
fwrite($file, $likeCount);
fclose($file);
?>
