 function compare(codes) {

        var header = document.getElementById("people").getElementsByTagName("td");
        for (var j = 0; j < header.length; j++) {
            for( var i =0; i< header.length; i++)
               
                    
          if (header[j].innerHTML == codes) 
         /*     console.log(header[i].innerHTML);*/
          
        {
          return header[j].innerHTML;
        }
            
        
                    
              
        
            
              /*   alert('col html>>'+col.innerHTML);*/    //Will give you the html content of the td
       /* alert('col>>'+col.innerText);   */ //Will give you the td valu
           

}
     
 }
