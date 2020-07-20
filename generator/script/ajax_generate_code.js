$(document).ready(function() {
	$("#codeForm").submit(function()
                        
                          {
       
		$.ajax({
			url:'generate_code.php',
			type:'POST',
            datatype:'json',
			data: {formData:$("#content").val(),  ecc:$("#ecc").val(), size:$("#size").val()},
			success: function(response) {
                
                
                
               
                
				$(".showQRCode").html(response); 
                
                
			},
		 });
	});
});
