
$(".mc-field").show();
$(".mp-field").hide();
$(".gz-field").hide();
$(".in-field").hide();

function toggleFields() {
    let provinceVal = $("#province").val();
    
    switch (provinceVal) {
        case "MC":           
            $(".mc-field").show();
            $(".mp-field").hide();
            $(".gz-field").hide();
            $(".in-field").hide();
            break;
        case "MP":           
            $(".mc-field").hide();
            $(".mp-field").show();
            $(".gz-field").hide();
            $(".in-field").hide();
            break;
        case "GZ":           
            $(".mc-field").hide();
            $(".mp-field").hide();
            $(".gz-field").show();
            $(".in-field").hide();
            break;
        case "IN":           
            $(".mc-field").hide();
            $(".mp-field").hide();
            $(".gz-field").hide();
            $(".in-field").show();
            break;
        default:
            break;
    }
}