$("#idbtn").click(function(e){
      e.preventDefault();
});

function Usuario(){
        tmp_usuario = this;
        tmp_usuario.notification = new Notification();

        this.load = function(){
          // code...
        }

        this.example_ajax = function(){
          var ruta = base_url+"cct/get_ccts";
          $.ajax({
               url: ruta,
               type: "POST",
               data: {},
               beforeSend: function(){
                // code for loading....
               },
               success: function(data) {
                   // code ok
               },
               error: function(error) {
                    console.error("get_ccts");
               }
          });
        }// example_ajax()
}// Usuario
