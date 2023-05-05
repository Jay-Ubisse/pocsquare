<?php
if (isset($_SESSION['registration-info'])) {
    if ($_SESSION['error']) {
        echo "<div class='bg-red-600 text-white font-semibold flex justify-center my-6 py-4'>";
        echo $_SESSION['registration-info'];
        unset($_SESSION['registration-info']);
        unset($_SESSION['error']);
        echo "</div>";
    } else {
        echo "<div class='bg-green-600 text-white font-semibold flex justify-center my-6 py-4'>";
        echo $_SESSION['registration-info'];
        unset($_SESSION['registration-info']);
        unset($_SESSION['error']);
        echo "</div>";
    }
}
?>