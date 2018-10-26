<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Smart-Crib</title>
        <base href="http://127.0.0.1:8000/">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/JavaScript"></script>
        <script src="{{ asset('js/jquery-3.2.1.min(first).js') }}" type='text/JavaScript'></script>
        <!--CSS---->
        <link href="/CSS/map.css" rel="stylesheet" type="text/css">
</head>
<body>
	  <div class="row header">
	  	   
	  </div>
	  <div class="row">
	  	   <div class="col-sm-6 map">
	  	   	   
	  	   </div>
	  	   <div class="col-sm-6 prop">
	  	   	   <div class="props">
	  	   	   	    <p>something will be rendered here!</p>
	  	   	   </div>
	  	   </div>
	  </div>
	  <div class="row propDetails">
	  	  <div class="col-sm-6 pix">
	  	  	   <p>content will be replaced</p>
	  	  </div>
	  	  <div class="col-sm-6 details">
	  	  	   <p>content will be replaced</p>
	  	  </div>
	  </div>
	  <p id="state"></p>
	  <p id="anonymousP" style="display: none;">{{ $value }}</p>
	  <div class="row ltnInterface">
	  	  <div class="col-sm-6 welm">
	  	  	 <form name="welcomeForm" class="welm_form" encType="multipart/form-data" method="POST" action="{{URL::to('/reqProp')}}" >{{ csrf_field() }}
	  	  	 	<select id="city" name="state" onchange="selectCity(this)" required>
	  	   	    			         <option value="... City (state)">... Select City (state)</option>
                                     <option value="Adamawa">Abia</option>
                                     <option value="Anambra">Anambra</option>
                                     <option value="Bauchi">Bauchi</option>
                                     <option value="Bayelsa">Bayelsa</option>
                                     <option value="Benue">Benue</option>
                                     <option value="Borno">Borno</option>
                                     <option value="Cross River">Cross River</option>
                                     <option value="Delta">Delta</option>
                                     <option value="Ebonyi">Ebonyi</option>
                                     <option value="Edo">Edo</option>
                                     <option value="Ekiti">Ekiti</option>
                                     <option value="Enugu">Enugu</option>
                                     <option value="Gombe">Gombe</option>
                                     <option value="Imo">Imo</option>
                                     <option value="Jigawa">Jigawa</option>
                                     <option value="Kaduna">Kaduna</option>
                                     <option value="Kano">Kano</option>
                                     <option value="Katsina">Katsina</option>
                                     <option value="Kebbi">Kebbi</option>
                                     <option value="Kogi">Kogi</option>
                                     <option value="Kwara">Kwara</option>
                                     <option value="Lagos">Lagos</option>
                                     <option value="Nasarawa">Nasarawa</option>
                                     <option value="Niger">Niger</option>
                                     <option value="Ogun">Ogun</option>
                                     <option value="Ondo">Ondo</option>
                                     <option value="Osun">Osun</option>
                                     <option value="Oyo">Oyo</option>
                                     <option value="Plateau">Plateau</option>
                                     <option value="Rivers">Rivers</option>
                                     <option value="Sokoto">Sokoto</option>
                                     <option value="Taraba">Taraba</option>
                                     <option value="Yobe">Yobe</option>
                                     <option value="Zamfara">Zamfara</option>
                                     <option value="FCT">FCT</option>
	  	   	    </select>
	  	   	    <p id="error_message" style="display: none;">please select a valid city ...</p>
	  	  	 	<button onclick="closeThisInterface()">enter!</button>
	  	  	 </form>
	  	  </div>
	  	  <div class="col-sm-6 welm_form_right">
	  	  	 <i class=""></i>
	  	  </div>
	  </div>
      <script type="text/JavaScript">
      	    window.onload = function(){
      	    	     const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      	    	     var retContent = document.getElementById('anonymousP').innerHTML;
      	             console.log(retContent);
      	             var formData = new FormData();

      	             
      	    	     if (retContent == 'routing from accountpage') {
                         formData.append('routing', 'use navigator alone');
      	    	     }

                    
                     callAjax();
					    
                     function callAjax(param){
                           const xhttp = new XMLHttpRequest();
		        	       xhttp.open('POST', '/searchBD', true);
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
		                   xhttp.setRequestHeader("ContentType", "application/json");
		                   xhttp.send(formData);
                     }

      	    }

            var propStore = {}

      	    function setPointersOnMap(city, map){
                  	   const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      	               var formData = new FormData();
      	                   formData.append('city', city);

                       const xhttp = new XMLHttpRequest();
	        	       xhttp.open('POST', '/searchBD', true);
	        	       xhttp.onreadystatechange = () => {
	        	       	    if (this.readystate == 4 && this.status == 200) {
	        	       	    	const data = JSON.parse(this.responseText);
	        	       	    	      console.log(data);
                                      propStore[city] = data;
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
	                   xhttp.setRequestHeader("ContentType", "application/json");
	                   xhttp.send(formData);
                 

		               map.setCenter(results[0].geometry.location);
		               var marker = new google.maps.Marker({
		                        map: map,
		                        position: results[0].geometry.location
		                    }); 
        
      	    }
            
            var city;
            var welmForm = document.getElementsByClassName('welm_form')[0];
                welmForm.onsubmit = function(){
                	event.preventDefault();
                    var validate_input = document.getElementById('city').value;
                        if (validate_input == '... Select City (state)') {
                        	document.getElementById('city').style.border = '2px solid red';
                        	document.getElementById('error_message').style.display = 'block';
                        	return;
                        }

                    city = document.getElementById('city').value;
                    var concatedLocation = city.concat(',').concat(' ').concat("Nigeria");

                	cityMap(concatedLocation, function(map){
                        setPointersOnMap(city, map);
                	});
                }
                
                function selectCity(param){
                     if (param.value == '... Select City (state)') {
                     	document.getElementById('city').style.border = '2px solid red';
                     	document.getElementById('error_message').style.display = 'block';
                     }

                     setTimeout(function(){
                     	document.getElementById('city').style.border = '1px solid orange';
                     	document.getElementById('error_message').style.display = 'none';
                     }, 7000); // thats 7 seconds thereafter the event.
                }


      </script>
      <script src="{{ asset('js/displayProp.js') }}" type="text/javascript"></script>
      <script src="{{ asset('js/searchDB.js') }}" type="text/javascript"></script>
      <script src="{{ asset('js/google-map-api.js') }}"></script>
      <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4D1-koeikvwYczC2EpHU-mwLSzTH6UIE&callback=initialize">
      </script>
</body>
</html>