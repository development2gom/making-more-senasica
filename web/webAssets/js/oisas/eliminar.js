$(document).on({
    'click': function(){
        var id = $(this).data('id');
        
        swal({
            title: "Espera",
            text: "Estas seguro de eliminar esta oisa",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Si, elimanar!",
            closeOnConfirm: false
        },
        function(){
            $.ajax({
                url: baseUrl+'oisas/delete?id='+id,
                success: function(){
                    swal("Eliminado!", "La oisa ha sido eliminada correctamente.", "success");
                    //window.location.href = ;
                },
                error: function(){

                }
            });
        });
    }
}, '.js-eliminar-oisa');