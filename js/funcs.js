
//Download function

$(window).on( "load", function(){
    $("#download").on( "click", function(){
        const downloadInstance = document.createElement('a');
        var imgSrc = $('#imgQr').attr('src');

        downloadInstance.href = imgSrc;
        downloadInstance.target = '_blank';
        downloadInstance.download = 'MyQR';
        downloadInstance.id = "adwl";
            
        document.body.appendChild(downloadInstance);
        downloadInstance.click();
        document.body.removeChild(downloadInstance);
    });
});


//Set size values function

$(window).on( "load", function() {
    $('#high').on("input", function(){
        var val = $(this).val();
         $('#highVal').val(val) = $('#high').val();
    });
    $('#width').on("input", function(){
        var valu = $(this).val();
         $('#widthVal').val(valu) = $('#width').val();
    });  
  });

  //Hidde ajax response

$(window).on( "load", function(){
    $('#cleanQR').on( "click", function(){
        $('#respuesta').html("");
        $('#youQr').attr("hidden","");
        $('#cleanQR').attr("hidden","");
        $('#download').attr("hidden","");
    });
});

//Send Ajax request

$(window).on( "load", function(){
    $("#Enviar").on( "click", function(){
        var direc = $("#direccion").val();
        var h = $("#high").val();
        var w = $("#width").val();
        var d = direc.trim();

    if((d == "")){
        alert("Please, insert a valid URL");
    }else{
        $.ajax({
            type: "POST", url: "../src/generator.php", 
            data: {
                url: d, 
                highV: h, 
                widthV: w
            },
            statusCode: {
                404: function() {alert("Page not found");}
            },
            success: function(result){
                $('#respuesta').html(result);
                $('#youQr').removeAttr("hidden");
                $('#cleanQR').removeAttr("hidden");
                $('#download').removeAttr("hidden");
            }
        });
        return false;
    }
    });
});