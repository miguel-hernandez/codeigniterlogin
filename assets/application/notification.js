$("#notification_btn_aceptar").click(function(e){
      e.preventDefault();
      tmp_notification.accept();
});

$("#notification_btn_cancelar").click(function(e){
      e.preventDefault();
      tmp_notification.cancel();
});

function Notification(){
        tmp_notification = this;
        tmp_notification.window = "modal_notification";
        tmp_notification.windowcallback = "modal_notificationcallback";
        tmp_notification.event_accept  = "notification_btn_aceptar";

        this.initnotification = function(message){
          $("#"+tmp_notification.window+" .modal-body #notification_content").empty();
          $("#"+tmp_notification.window+" .modal-body #notification_content").append(message);
          $("#"+tmp_notification.window).modal("show");
        }// initnotification()

        this.initcallback = function(message){
              $("#"+tmp_notification.windowcallback+" .modal-body #notification_content").empty();
              $("#"+tmp_notification.windowcallback+" .modal-body #notification_content").append(message);
              $("#"+tmp_notification.windowcallback).modal("show");
        }// initcallback()

        this.accept = function(){
          evento = new Event('aceptar');
          document.getElementById(tmp_notification.event_accept).dispatchEvent(evento);
        }// accept()

        this.cancel = function(){
            $(".modal-backdrop" ).remove();
            $("#"+tmp_notification.windowcallback).modal("hide");
            $("#"+tmp_notification.windowcallback+" .modal-body #notification_content").empty();
        }// cancel()

}// Notification
