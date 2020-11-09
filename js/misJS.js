//alert('JQUERY FUNCIONANDO');

$("#regiones").on("change", function(){
    
    let regionID;
    regionID = $(this).val();
   // alert(regionID);

    $.ajax({
        type: "POST",
        url: "http://localhost/proyectophp-2/controller/cargaComunas.php",
        data: "regionID="+regionID,
        success: function (response) {
            $("#provincias").html(response);
            $("#comunas").html("<option selected>Choose...</option>");
        }
    });

})

$("#provincias").on("change", function(){
    
    let provinciaID;
    provinciaID = $(this).val();
    //alert(regionID);

    $.ajax({
        type: "POST",
        url: "http://localhost//proyectophp-2/controller/cargaComunas.php",
        data: "provinciaID="+provinciaID,
        success: function (response) {
            $("#comunas").html(response);
        }
    });

})