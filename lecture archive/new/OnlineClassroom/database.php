<?php

    $server = "localhost";
    $user = "root";
    $passdb = "";
    $db = "abc";
    $connect = mysqli_connect( $server, $user, $passdb, $db )or die( "Connection Error" );

?>