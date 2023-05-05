<?php
if ($_SESSION['error']) {
    echo "<div class='status-info bg-red-600 text-white font-semibold flex justify-center my-6 py-4'>";

    unset($_SESSION['error']);
    echo "</div>";
} else {
    echo "<div class='status-info bg-green-600 text-white font-semibold flex justify-center my-6 py-4'>";

    unset($_SESSION['error']);
    echo "</div>";
}
?>