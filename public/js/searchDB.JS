// script for querying DB engine!
var searchForm = document.getElementsByClassName('search_form')[0];
    searchForm.onsubmit = function(){
         event.preventDefault();
         var searchForm = document.getElementsByClassName('search_form')[0];
         var formData = new FormData(searchForm);
             formData.append('searchDB', 'searchDB');
             
             var category = document.getElementById('category').value;
             if (category == 'Category') {
             	return;
             }

             searchDB(formData);
    }

function searchDB(param){
     const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
     const xhttp = new XMLHttpRequest();
       xhttp.open('POST', '/searchDB', true);
       xhttp.onreadystatechange = () => {
       	    if (this.readystate == 4 && this.status == 200) {
       	    	const data = JSON.parse(this.responseText);
       	    	      console.log(data);
       	    	      // use data here!
       	    	      function showHTML(){
                           var elem = document.getElementsByClassName('props')[0];
                               elem.innerHTML = finalElem;
       	    	      }
                      
                      var finalElem;
       	    	      function useData(param){
                           for(x in param){
                              
                           }
       	    	      }

       	    	      for (var i = 0; i < data.length; i++) {
       	    	      	   useData(data[i]);
       	    	      	   if (i + 1 == data.length) {
       	    	      	   	   setTimeout(function(){
       	    	      	   	   	   showHTML();
       	    	      	   	   }, 20);
       	    	      	   }
       	    	      }
       	    }
       }

       xhttp.setRequestHeader('X-CSRF-TOKEN', theToken);
       xhttp.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
       xhttp.setRequestHeader("processData", 'false');
       xhttp.setRequestHeader('cache', 'false');
       xhttp.setRequestHeader("Content-Type", "application/json");
       xhttp.send(param);
}