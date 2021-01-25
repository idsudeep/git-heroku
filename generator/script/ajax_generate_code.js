

$(document).ready(function() {
	$("#codeForm").submit(function(e)
                        
          {
         e.preventDefault();
         
	   /*   $("#con").change(function(){
              
              alert('here');*/
        
      
        /*  alert("high");*/ 
        var qrcode = new QRCode(document.getElementById("qr_code"), {
         text:  $("#content").val(),
         width: 260,
         height: 260,
         colorDark : "#000000",
         colorLight : "#ffffff",
         correctLevel : QRCode.CorrectLevel.H
       });

     /* qrcode.clear();*/
       const parent = document.getElementById('qr_code');

        var can = document.getElementsByTagName("canvas");
        var src = can[0].toDataURL("image/png");
        var cs = document.getElementById('can');
        
        $('#can').attr('src', src);
       /* window.location.reload(true);*/
        
        
        console.log(qrcode);   
              
              
       /*   });*/
    });
});
