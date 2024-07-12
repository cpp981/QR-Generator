
function oculta(){
    $('#respuesta').html("");
    $('#youQr').attr("hidden","");
    $('#cleanQR').attr("hidden","");
  
}

function enviar (){
    var direc = $("#direccion").val();
    var d = direc.trim();
    if((d == "")){
        alert("Please, insert a valid URL");
    }else{
        $.ajax({
            type: "POST", url: "../src/generator.php", data: "url="+d,
            statusCode: {
                404: function() {alert("Page not found");}
            },
            success: function(result){
                $('#respuesta').html(result);
                $('#youQr').removeAttr("hidden");
                $('#cleanQR').removeAttr("hidden");
            }
        });
        return false;
    }
}