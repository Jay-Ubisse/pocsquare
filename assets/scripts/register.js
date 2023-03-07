
$(".mp-field").show();
$(".gz-field").hide();
$(".in-field").hide();

function reset() {
    $(".mp-field").show();
    $(".gz-field").hide();
    $(".in-field").hide();
}

function toggleFields() {
    let provinceVal = $("#province").val();
    
    switch (provinceVal) {
        case "MP":           
            $(".mp-field").show();
            $(".gz-field").hide();
            $(".in-field").hide();
            break;
        case "GZ":           
            $(".mp-field").hide();
            $(".gz-field").show();
            $(".in-field").hide();
            break;
        case "IN":           
            $(".mp-field").hide();
            $(".gz-field").hide();
            $(".in-field").show();
            break;
        default:
            break;
    }
}