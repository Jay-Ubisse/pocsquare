
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