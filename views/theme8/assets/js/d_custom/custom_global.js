
    var configs=[]; 
 function c(data) {
 	console.log(data);
 }


 function go(el) {  
   setTimeout(function() {
     window.location.href=el.getAttribute('locations');
  },300);

  // e.preventDefault();
 }
 function get(text) {  
            var url = new URL(window.location.href);
         return  url.searchParams.get(text);
            } 
 


 