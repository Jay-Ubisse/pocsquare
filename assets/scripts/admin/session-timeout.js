setInterval(function() {
    $.get("../../server/src/session-timeout.php", function(data) {
        console.log(data);
        if (data == 0) {
            window.location.href = "../../server/src/logout-route.php";
        }
    });
}, 1000);