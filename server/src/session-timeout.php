<?php
require "../config/connect.php";
session_start();
if(isset($_SESSION['timeout']) ) {
    if((time() - $_SESSION['timestamp']) > 300) {
        echo "0";
    } else {
        echo "1";
    }
} else {
    $_SESSION['timestamp'] = time();
}

?>