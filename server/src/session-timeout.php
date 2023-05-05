<?php
require "../config/connect.php";
session_start();

if((time() - $_SESSION['timestamp']) > 300) {
    echo "0";
} else {
    echo "1";
}

?>