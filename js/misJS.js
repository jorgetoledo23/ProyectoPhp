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

$('#editModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })


function editarCat(catid){
    $('#editModal').modal();
    $('#categoriaid').val(catid);
}

function editarCategoriaAjax(){

    let id, descripcion;
    id = $('#categoriaid').val();
    descripcion = $('#descripcion').val();

    $.ajax({
        type: "POST",
        url: "http://localhost//proyectophp-2/controller/editarcategoriaajax.php",
        data: $('#formEdit').serialize(),
        success: function (response) {
            if(response== '1'){
                // UPDATE CON EXITO
                location.reload();
            }else if(response== '2'){
                // UPDATE CON ERROR
                $('#Error').show();
            }
        }
    });

}


