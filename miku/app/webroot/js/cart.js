$(document).ready(function(){
    $('.numeric').on('keyup change', function(event){
        var cantidad = Math.round($(this).val());
        ajaxupdate($(this).attr("data-id"), cantidad);
    });
    function ajaxupdate(id, cantidad) {
        $.ajax({
            type: "POST",
            url: basePath + "item_previos/itemupdate",
            data: {
                id: id,
                cantidad: cantidad
            },
            dataType: "json",
            success: function (data) {
                if($('#subtotal_' + data.mostrar_item.id).html() != data.mostrar_item.subtotal){
                    $('#subtotal_' + data.mostrar_item.id).html(data.mostrar_item.subtotal).animate
                    ({backgroundColor: "#ff8"}, 100).animate({backgroundColor: "#fff"}, 500);
                }
                
                $('#total').html('S/ ' + data.mostrar_item.total).animate
                ({backgroundColor: "#ff8"}, 100).animate({backgroundColor: "#fff"}, 500);
            }
        });
    }

    $(".remove").click(function(){
        ajaxcart($(this).attr("id"), 0);
        return false;
    });

    function ajaxcart(id, cantidad){
        if(cantidad === 0){
            $('#row-' + id).fadeOut(1000, function(){
                $("#row-" + id).remove();
            });
        }
        $.ajax({
            type: "POST",
            url: basePath + "item_previos/remove",
            data: {
                id: id
            },
            dataType: "json",
            success: function(data){
                $('#msg').html('<div class="alert alert-success flash-msg">Su platillo fue eliminado</div>');
                $('.flash-msg').delay(2000).fadeOut('slow');

                $("#total").html("S/ " + data.mostrar_total_remove).animate({backgroundColor: "#ff8"}, 100).animate({backgroundColor: "#fff"}, 500);

                if(data.items == ""){
                    //si no hay ningún pedido, nos redireccionará al index
                    window.location.replace(basePath + "platillos/index");
                }
                actualizaVista();

            },
            error: function(){
                alert("Error al tratar de eliminar el platillo seleccionado");
            }
        });
    }
    function actualizaVista(){
        $.ajax({
            type: "POST",
            url: basePath + "item_previos/num_item_selected",
            dataType: "json",
            success: function (data) {
                console.log("Cantidad de productos: " + (data.muestra_cantidad.cantidad));
                $('.cant-selected').text((data.muestra_cantidad.cantidad)+' Platillos');
            }
        });
    }
});