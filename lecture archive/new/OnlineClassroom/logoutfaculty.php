<?php
session_start();
?>
<?php

unset($_SESSION["FID"]);
unset($_SESSION["Pass"]);
header('Location:index.php');
?>