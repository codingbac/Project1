<?php
session_start();
session_destroy();
echo "<script> location.href= 'index.php';</script>";

?>

<a href="../logout.php">logut</a>