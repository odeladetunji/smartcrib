// script for querying DB engine!
var searchForm = document.getElementsByClassName('search_form')[0];
    searchForm.onsubmit = function(){
         event.preventDefault();
         var searchForm = document.getElementsByClassName('search_form')[0];
         
         var formData = new FormData(searchForm);
             formData.append('searchDB', 'searchDB');

             var category = document.getElementById('category').value;
             var state = document.getElementById('theStates').value;
             var locaGv = document.getElementById('locaGv_for_search').value;

             var maxNumber = document.getElementById('maxcheck').value;
             var price_component = document.getElementById('price_component').value;
                 
             if (price_component != 'select price') {
                   if (parseInt(maxNumber) < parseInt(price_component)) {
	                   	  document.getElementById('maxError').style.display = 'block';
	                   	  setTimeout(function(){
	                         document.getElementById('maxError').style.display = 'none';
	                   	  }, 3000);
	                   	  return;
                   }
             }

             if (category == 'Category') {
             	document.getElementById('category').style.backgroundColor = 'orange';
             	document.getElementById('enterCategory').style.display = 'block';
             	    setTimeout(function(){
                        document.getElementById('category').style.backgroundColor = 'transparent';
             	        document.getElementById('enterCategory').style.display = 'none';
             	    }, 2000);
             	return;
             }

             if (locaGv == '') {
             	document.getElementById('locaGv_for_search').style.backgroundColor = 'orange';
             	document.getElementById('enterLocalGov').style.display = 'block';
             	    setTimeout(function(){
             	    	document.getElementById('locaGv_for_search').style.backgroundColor = 'transparent';
                     	document.getElementById('enterLocalGov').style.display = 'none';
             	    }, 2000);
             	return;
             }

             if (state == 'select state of property') {
             	document.getElementById('theStates').style.backgroundColor = 'orange';
             	return;
             }
             
             console.log('got to this point');
             
             codeSearchedAddress(function(map, results){
                 searchDB(formData, map, results);
             })

             var menuIcon = document.getElementsByClassName('menuIcon')[0];
                 if (menuIcon.style.display == 'none') {
                 	 menuIcon.style.display = 'block';
                 }else{
                 	 menuIcon.style.display = 'none';
                 }
    }

var searchDBPropertyContainer;
function searchDB(formData, map, results){
     const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
     const xhttp = new XMLHttpRequest();
       xhttp.open('POST', '/searchDB', true);
       xhttp.onreadystatechange = function() {
       	    if (this.readyState == 4 && this.status == 200) {
       	    	const data = JSON.parse(this.responseText);
       	    	      console.log(data);
                      setPointersOnMap(map, data);
       	    	      function showHTML(finalElem){
                           var elem = document.getElementsByClassName('props')[0];
                               elem.innerHTML = '';
                               elem.innerHTML = finalElem;
                               console.log(finalElem);
                               document.getElementsByClassName('search_section')[0].style.display = 'none';
       	    	      }
                      
                      var finalElem = '';
                      function loopObject(param){
                           var counter = 0;
                           for(x in param){
                           	   counter++;
                           	   //console.log(param);
                           	   if (x == 'coverpicture') {
                           	   	     coverpicture = '<li>' + param[x] + '</li>';
                           	   }
                               if (x == 'category') { 
                               	     category = '<li>' + param[x] + '</li>'; 
                               }
                               if (x == 'price') { 
                               	     price = '<li>' + param[x] + '</li>'; 
                               }
                               if (x == 'bedroom') { 
                               	     bedroom = '<li>' + param[x] + '</li>'; 
                               }
                               if (x == 'address') { 
                               	     address = '<li>' + param[x] + '</li>';
                               }

                               if (Object.keys(param).length == counter) {
                               	  var a_component = '<div class="a_property" onclick="display_property(' + param['identity'] + ',' + ' ' + 'searchDBPropertyContainer' + ')">' + 
                               	                        '<div class="cover_pix" style="background-image: url(/storage/images/' + param['cover_picture'] + ');"></div>' 
                               	                            + '<ul>' + category + price + address + 
                               	                              '</ul>' + 
                               	                    '</div>';
                               	  finalElem = finalElem.concat(a_component);
                               	  console.log(finalElem);
                               }
                           }
       	    	      }

       	    	      function useData(outOfRange, inRange){
                           console.log('did we get here');
                           if (inRange.length == 0 && outOfRange.length != 0) {
                           	    console.log('1');
                                for(var i=0; i < outOfRange.length; i++){
  									loopObject(outOfRange[i]);
                                }
                           }

                           if (inRange.length != 0 && outOfRange.length != 0) {
                                console.log('2');
                           	    for(var i=0; i < inRange.length; i++){
  									loopObject(inRange[i]);
                                }

                           		for(var i=0; i < outOfRange.length; i++){
  									loopObject(outOfRange[i]);
                                }
                           }

                           if (inRange.length != 0 && outOfRange.length == 0) {
                           	    console.log('3');
                           		for(var i=0; i < inRange.length; i++){
  									loopObject(inRange[i]);
                                }
                           }
       	    	      }
                   
                      
                      var outOfRange = [];
                      var inRange = [];
                      var maxPrice = document.getElementById('maxcheck').value;
       	    	      for (var i = 0; i < data['data'].length; i++) {

       	    	      	   if (parseInt(data['data'][i].price) > parseInt(maxPrice)) {
       	    	      	   	  outOfRange.push(data['data'][i]);
       	    	      	   }else{
       	    	      	   	  inRange.push(data['data'][i]);
       	    	      	   }

       	    	      	   if (i + 1 == data['data'].length) {
       	    	      	   	   	useData(outOfRange, inRange);
       	    	      	   	   	console.log(outOfRange);
       	    	      	   	   	console.log(inRange);
       	    	      	   	   	setTimeout(function(){
       	    	      	   	   		showHTML(finalElem);
       	    	      	   	   	}, 40);
       	    	      	   }
       	    	      }
       	    }
       }

       xhttp.setRequestHeader('X-CSRF-TOKEN', theToken);
       xhttp.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
       xhttp.setRequestHeader("processData", 'false');
       xhttp.setRequestHeader('cache', 'false');
       xhttp.setRequestHeader("ContentType", "application/json");
       xhttp.send(formData);
}