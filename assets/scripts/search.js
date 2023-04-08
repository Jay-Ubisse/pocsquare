
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
    document.getElementById("neighborhood").innerHTML = dataArray[2];
    document.getElementById("locality").innerHTML = dataArray[3];
    document.getElementById("city-block").innerHTML = dataArray[4];
    document.getElementById("road-name").innerHTML = dataArray[5];
    document.getElementById("door-number").innerHTML = dataArray[6];
    document.getElementById("cep").innerHTML = dataArray[7];
    document.getElementById("tel").innerHTML = dataArray[8];
    document.getElementById("email").innerHTML = dataArray[9];
    document.getElementById("website").innerHTML = dataArray[10];
}