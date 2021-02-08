document.addEventListener("DOMContentLoaded", function(event) { 
   event.preventDefault();

   var buttons = document.querySelectorAll('button');

   buttons.forEach((button) => {
  button.addEventListener('click', () => {
    if(button.className == 'btn btn-primary'){
      $(button).removeClass("btn btn-primary").addClass("btn btn-danger");
      }
    else{
      $(button).removeClass("btn btn-danger").addClass("btn btn-primary");
    }
  });
});
});
