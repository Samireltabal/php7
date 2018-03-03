$(document).ready(function(){

/*=============================================
/*=============================================
DELETE CUSTOMER
=============================================*/
 $('.deletecustomer').click(function(){
  var idClient = $(this).attr("idCustomer");
 
  // AJAX Request
  $.ajax({
   url: '../../php7/ajax/customer.ajax.php',
   type: 'POST',
   data: { id:idClient },
   success: function(respuesta){

  	    		swal({
				  title: "¡Deleted client!",
				  text: "",
				  type: "warning",
				  showCancelButton: false,
				  confirmButtonColor: "#DD6B55",
				  confirmButtonText: "Regresar",
				  closeOnConfirm: false
				},

				function(isConfirm){
				 if (isConfirm) {	   
				    window.location = "index.php";
				  } 
				});				

    }

   });
  });

 });


/*=============================================
/*=============================================
UPDATE CUSTOMER
=============================================*/
$(".updatecustomer").click(function(){
	$("#main").html("updatecustomer");
})


