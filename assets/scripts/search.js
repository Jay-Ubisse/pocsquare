
/*
    LOAD HEADER AND FOOTER SECTIONS
*/
$("header").load("../../client/components/header.html");
$("footer").load("../../client/components/footer.html");


/*
  SEARCH ENGINE
*/
$('#searchValue').on('input',function(e){
    var input = $(this);
    var value = input.val();
    $("#results").load("../../server/src/search.php", {data: value});
});

$("#location-info").hide();
function showInfo(data) {
    let dataArray = data.split(",");

    $("#location-info").show();
    document.getElementById("province").innerHTML = dataArray[0];
    document.getElementById("district").innerHTML = dataArray[1];
    document.getElementById("administrative-post").innerHTML = dataArray[2];
    document.getElementById("cep").innerHTML = dataArray[3];
}