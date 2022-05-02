<?php
session_start();
?>
<?php
unset($_SESSION["Eid"]);
unset($_SESSION["Pass"]);
header('Location:index');
?>