
//funcao que muda o conteudo automaticamente quando o valor do input muda
$('#searchValue').on('input',function(e){
    var input = $(this);
    var value = input.val();
    $("#results").load("../../server/src/search.php", {data: value});
});

function searchByClick() {
    let value = $("#searchValue").val();
    $("#results").load("../../server/src/search.php", {data: value});
}

$("#location-info").hide();
function showInfo(data) {
    let dataArray = data.split(",");

    $("#location-info").show();
    document.getElementById("province").innerHTML = dataArray[0];
    document.getElementById("district").innerHTML = dataArray[1];
    document.getElementById("administrative-post").innerHTML = dataArray[2];
    document.getElementById("cep").innerHTML = dataArray[3];
}

//MApa

// Initialize and add the map
function initMap() {
    // The location of Uluru
    const uluru = { lat: -25.344, lng: 131.031 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }
  
  window.initMap = initMap;