
/*
    LOAD HEADER AND FOOTER SECTIONS
*/
$("header").load("../../client/components/header.html");
$("footer").load("../../client/components/footer.html");

/*
Mobile menu
*/


/*
  SEARCH ENGINE
*/
$('#searchValue').on('input', function (e) {
    var input = $(this);
    var value = input.val();
    $("#results").load("../../server/src/search.php", { data: value });
});

$("#location-info").hide();
function showInfo(data) {
    let dataArray = data.split(",");

    $("#location-info").show();
    document.getElementById("primary-address").innerHTML = dataArray[0] + ", " + dataArray[1];
    document.getElementById("road-name").innerHTML = dataArray[2];
    document.getElementById("neighborhood").innerHTML = dataArray[3];
    document.getElementById("province").innerHTML = dataArray[4];
    document.getElementById("cep").innerHTML = dataArray[5];
    document.getElementById("tel").innerHTML = dataArray[6];
    document.getElementById("email").innerHTML = dataArray[7];
    document.getElementById("website").innerHTML = dataArray[8];
}

$('#mz-search-field').hide();
$('#hidden-search-field').show();
$('#ao-search-field').hide();
$('#cv-search-field').hide();
$('#info-field').hide();
function toggleSearchField() {

    let value = $(".country").val();

    switch (value) {
        case "select-country":
            $('#mz-search-field').hide();
            $('#hidden-search-field').show();
            $('#ao-search-field').hide();
            $('#cv-search-field').hide();
            $('#info-field').hide();
            break;
        case "mozambique":
            $('#mz-search-field').show();
            $('#hidden-search-field').hide();
            $('#ao-search-field').hide();
            $('#cv-search-field').hide();
            $('#info-field').hide();
            break;
        case "angola":
            $('#mz-search-field').hide();
            $('#hidden-search-field').hide();
            $('#ao-search-field').hide();
            $('#cv-search-field').hide();
            $('#info-field').show();
            break;
        case "cabo-verde":
            $('#mz-search-field').hide();
            $('#hidden-search-field').hide();
            $('#ao-search-field').hide();
            $('#cv-search-field').hide();
            $('#info-field').show();
            break;

        default:
            break;
    }

}