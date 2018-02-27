
/*=============================================
/*=============================================
ADD CUSTOMER
=============================================*/
$(".addcustomer").click(function(){
	$("#main").html("addcustomer");
})

/*=============================================
/*=============================================
DELETE CUSTOMER
=============================================*/
$(".deletecustomer").click(function(){

	var idClient = $(this).attr("idCustomer");

	/*$("#main").html("deletecustomer"+idClient);*/

	var datos = new FormData();

	datos.append("id", idClient);

		$.ajax({
		url:"/php7/ajax/customer.php",
		method:"POST",
      	data: datos,
      	cache: false,
      	contentType: false,
      	processData: false,
      	success:function(respuesta){
      	    
      	    if(respuesta == "true"){

  	    		swal({
				  title: "¡Deleted client!",
				  text: "",
				  type: "warning",
				  showCancelButton: false,
				  confirmButtonColor: "#DD6B55",
				  confirmButtonText: "Regresar",
				  closeOnConfirm: false
				})


      	    }else{

  	    		swal({
				  title: "¡There was a problem deleting the client!",
				  text: "",
				  type: "warning",
				  showCancelButton: false,
				  confirmButtonColor: "#DD6B55",
				  confirmButtonText: "Regresar",
				  closeOnConfirm: false
				})

      	    }

      	}

    })
})

/*=============================================
/*=============================================
UPDATE CUSTOMER
=============================================*/
$(".updatecustomer").click(function(){
	$("#main").html("updatecustomer");
})


