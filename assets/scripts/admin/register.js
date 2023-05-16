
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

            break;
        default:
            break;
    }
}