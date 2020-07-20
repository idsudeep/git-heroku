$(document).ready(function() {
	$("#codeForm").submit(function()
                        
                          {
       
		$.ajax({
			url:'generate_code.php',
			type:'POST',
			data: {formData:3,  ecc:$("#ecc").val(), size:$("#size").val()},
			success: function(response) {
                
                
                
               
                
				$(".showQRCode").html(response); 
                
                
			},
		 });
	});
});
