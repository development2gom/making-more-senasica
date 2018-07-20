$(document).ready(function(){

});

//numeros enteros en telefono y extension
$(document).on({
    'keypress': function(e){
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

            return false;
        }
    }
}, '#catoisas-txt_telefono, #catoisas-txt_extension');