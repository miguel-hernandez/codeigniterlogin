$(document).ready(function () {
  $.validator.addMethod("valueNotEquals", function(value, element, arg){
   return arg !== value;
  });

$("#form_login").validate({
        onclick:false, onfocusout: false, onkeypress:false, onkeydown:false, onkeyup:false,
        rules: {
            username: {required: true},
            password: {required: true}
        },
        messages: {
            username: {required: " *es requerido"},
            password: {required: " *es requerido"}
        }
    });
});

$("#btn_login").click(function(e){
  e.preventDefault();
  $("#form_login").submit();
});
