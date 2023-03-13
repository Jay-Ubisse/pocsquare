$(".admin-container").hide();
$(".sup-container").hide();
$(".tech-container").show();

function changeRole() {

    let role = $("#role").val();
    
    switch (role) {
        case "tech":
            $(".admin-container").hide();
            $(".sup-container").hide();
            $(".tech-container").show();
            break;
        case "admin":
            $(".admin-container").show();
            $(".sup-container").hide();
            $(".tech-container").hide();
            break;
        case "sup":
            $(".admin-container").hide();
            $(".sup-container").show();
            $(".tech-container").hide();
            break;
        default:
            break;
    }
}