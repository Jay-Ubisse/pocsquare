
$(".mc-field").show();
$(".mp-field").hide();
$(".gz-field").hide();
$(".in-field").hide();
$(".mn-field").hide();
$(".sf-field").hide();
$(".tt-field").hide();
$(".np-field").hide();
$(".ns-field").hide();
$(".zb-field").hide();
$(".cd-field").hide();

$(".neighborhood").show();
$(".locality").hide();

function toggleFields() {
    let provinceVal = $("#province").val();
    
    switch (provinceVal) {
        case "MC":
            $(".mc-field").show();           
            $(".mp-field").hide();
            $(".gz-field").hide();
            $(".in-field").hide();
            $(".mn-field").hide();
            $(".sf-field").hide();
            $(".tt-field").hide();
            $(".np-field").hide();
            $(".ns-field").hide();
            $(".zb-field").hide();
            $(".cd-field").hide();

            $(".neighborhood").show();
            $(".locality").hide();
            break;
        case "MP":
            $(".mc-field").hide();          
            $(".mp-field").show();
            $(".gz-field").hide();
            $(".in-field").hide();
            $(".mn-field").hide();
            $(".sf-field").hide();
            $(".tt-field").hide();
            $(".np-field").hide();
            $(".ns-field").hide();
            $(".zb-field").hide();
            $(".cd-field").hide();

            $(".neighborhood").hide();
            $(".locality").show();
            break;
        case "GZ":
            $(".mc-field").hide();            
            $(".mp-field").hide();
            $(".gz-field").show();
            $(".in-field").hide();
            $(".mn-field").hide();
            $(".sf-field").hide();
            $(".tt-field").hide();
            $(".np-field").hide();
            $(".ns-field").hide();
            $(".zb-field").hide();
            $(".cd-field").hide();

            $(".neighborhood").hide();
            $(".locality").show();
            break;
        case "IN": 
            $(".mc-field").hide();           
            $(".mp-field").hide();
            $(".gz-field").hide();
            $(".in-field").show();
            $(".mn-field").hide();
            $(".sf-field").hide();
            $(".tt-field").hide();
            $(".np-field").hide();
            $(".ns-field").hide();
            $(".zb-field").hide();
            $(".cd-field").hide();

            $(".neighborhood").hide();
            $(".locality").show();
            break;
        case "MN": 
            $(".mc-field").hide();           
            $(".mp-field").hide();
            $(".gz-field").hide();
            $(".in-field").hide();
            $(".mn-field").show();
            $(".sf-field").hide();
            $(".tt-field").hide();
            $(".np-field").hide();
            $(".ns-field").hide();
            $(".zb-field").hide();
            $(".cd-field").hide();

            $(".neighborhood").hide();
            $(".locality").show();
            break;
        case "SF": 
            $(".mc-field").hide();           
            $(".mp-field").hide();
            $(".gz-field").hide();
            $(".in-field").hide();
            $(".mn-field").hide();
            $(".sf-field").show();
            $(".tt-field").hide();
            $(".np-field").hide();
            $(".ns-field").hide();
            $(".zb-field").hide();
            $(".cd-field").hide();

            $(".neighborhood").hide();
            $(".locality").show();
            break;
        case "TT": 
            $(".mc-field").hide();           
            $(".mp-field").hide();
            $(".gz-field").hide();
            $(".in-field").hide();
            $(".mn-field").hide();
            $(".sf-field").hide();
            $(".tt-field").show();
            $(".np-field").hide();
            $(".ns-field").hide();
            $(".zb-field").hide();
            $(".cd-field").hide();

            $(".neighborhood").hide();
            $(".locality").show();
            break;
        case "NP": 
            $(".mc-field").hide();           
            $(".mp-field").hide();
            $(".gz-field").hide();
            $(".in-field").hide();
            $(".mn-field").hide();
            $(".sf-field").hide();
            $(".tt-field").hide();
            $(".np-field").show();
            $(".ns-field").hide();
            $(".zb-field").hide();
            $(".cd-field").hide();

            $(".neighborhood").hide();
            $(".locality").show();
            break;
        case "NS": 
            $(".mc-field").hide();           
            $(".mp-field").hide();
            $(".gz-field").hide();
            $(".in-field").hide();
            $(".mn-field").hide();
            $(".sf-field").hide();
            $(".tt-field").hide();
            $(".np-field").hide();
            $(".ns-field").show();
            $(".zb-field").hide();
            $(".cd-field").hide();

            $(".neighborhood").hide();
            $(".locality").show();
            break;
        case "ZB": 
            $(".mc-field").hide();           
            $(".mp-field").hide();
            $(".gz-field").hide();
            $(".in-field").hide();
            $(".mn-field").hide();
            $(".sf-field").hide();
            $(".tt-field").hide();
            $(".np-field").hide();
            $(".ns-field").hide();
            $(".zb-field").show();
            $(".cd-field").hide();

            $(".neighborhood").hide();
            $(".locality").show();
            break;
        case "CD": 
            $(".mc-field").hide();           
            $(".mp-field").hide();
            $(".gz-field").hide();
            $(".in-field").hide();
            $(".mn-field").hide();
            $(".sf-field").hide();
            $(".tt-field").hide();
            $(".np-field").hide();
            $(".ns-field").hide();
            $(".zb-field").hide();
            $(".cd-field").show();

            $(".neighborhood").hide();
            $(".locality").show();
            break;
        default:
            break;
    }
}