
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

	$("#main").html("deletecustomer"+idClient);



var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("main").innerHTML=xmlhttp.responseText;

    /*alert("deberia de funcionar");
        	swal({
				  title: "¡Deleted client!",
				  text: "",
				  type: "warning",
				  showCancelButton: false,
				  confirmButtonColor: "#DD6B55",
				  confirmButtonText: "Regresar",
				  closeOnConfirm: false
				})*/
	

						swal({
						  title: "¡Deleted client!",
						  text: "",
						  type: "warning",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							   	window.location="http://localhost/php7/index.php";
							  } 
					});
    }

  }
xmlhttp.open("POST","http://localhost/php7/ajax/customer.ajax.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("id="+idClient);


	/*var datos = new FormData();

	datos.append("id", 1);


		$.ajax({
		url:"ajax/customer.ajax.php",
		method:"POST",
      	data: datos,
      	cache: false,
      	contentType: false,
      	processData: false,
      	success:function(respuesta){
      	    
      	    if(respuesta == "ok"){

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

    })*/
})

/*=============================================
/*=============================================
UPDATE CUSTOMER
=============================================*/
$(".updatecustomer").click(function(){
	$("#main").html("updatecustomer");
})


