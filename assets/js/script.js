var baseurl = window.location.origin;
//console.log(baseurl);
$(document).ready(function () {

   $('#lastname,#firstname,#age,#zipcode,#gender,#description').on('input', function () {
      handleRequest(this.name);
   });

   var handleRequest = function (input_name) {

      var data = $("#subLove").serialize();
      //console.log(data);
      data += '&input_name=' + input_name;
      //console.log(baseurl + '/PHP/Love/controllers/index_controller.php');
      $.ajax({
         
         url: baseurl + '/PHP/Love/controllers/index_controller.php',
         type: 'POST',
         data: data,
         success(response) {
            console.log(response);

            if (response == 'ok') {
               $('#' + input_name).removeClass("has-error").addClass("has-success");

               if ($('#' + input_name).val() == '') {
                  $('#' + input_name).removeClass("has-success").addClass("has-error");
               }
            }
            else if (response == 'pas ok') {
               $('#' + input_name).removeClass("has-success").addClass("has-error");
            }

            if ($("#lastname").hasClass("has-success") && $("#firstname").hasClass("has-success") && $("#age").hasClass("has-success") && $("#gender").hasClass("has-success") && $("#description").hasClass("has-success")) {
               document.getElementById("subLove").disabled = false;
            }
         }
      });
   }
  

});

