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

        <link href="{{ asset('/CSS/map.css') }}" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	 
	  <div class="row header">
	  	   
	  </div>
	  
	  <div class="row mapCover">
	  	   <div class="col-sm-6 mapOuterContainer">
	  	   	   <div id="map" style="height: 700px;">
	  	    	    
	  	       </div>
	  	   </div>
	  	   <div class="col-sm-6 prop">
	  	   	   <div class="props" style="display: flex;">
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
	  	  	 <form name="welcomeForm" class="welm_form" encType="multipart/form-data" method="POST" action="{{URL::to('/searchDB')}}" >{{ csrf_field() }}
	  	  	 	<select id="city" name="city" onchange="selectCity(this)" required>
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
	  	   	    <select name="locaGv" id="locaGv"></select>
	  	   	    <p id="error_message" style="display: none;">please select a valid city ...</p>
	  	  	 	<button>enter!</button>
	  	  	 </form>
	  	  </div>
	  	  <div class="col-sm-6 welm_form_right">
	  	  	 <i class="fas fa-home"></i>
	  	  </div>
	  </div>
	  <div class="custom-modal-wrapper">
	  	<div class="custom-wrapper">
	  			<div class="row">
	  				<div class="col-md-6 pixCont">
	  					<div class="pictures_section">
	  	   	  	              
	  	   	            </div>
	  	   	            <div class="picture_tray">
	  	   	  	 
	  	   	            </div>
	  				</div>
	  				<div class="col-md-4 pixCont">
	  					 <div class="prop_facilities">
	  					 	      <div>
	  					 	      	 <h3>Quantity</h3>
                                    <div>
			  	   	  	              	   <div id="totalUnit">
			  	   	  	              	   	   <p>units</p>
			  	   	  	              	   </div>
			  	   	  	              	   <div id="the_unit">
			  	   	  	              	   	   <p></p>
			  	   	  	              	   </div>
		  	   	  	                 </div>
		  	   	  	                 <h3>Price of Property</h3>
	  					 	      	 <div>
			  	   	  	              	   <div>
			  	   	  	              	   	   <i></i>
			  	   	  	              	   </div>
			  	   	  	              	   <div id="propPrice">
			  	   	  	              	   	   <p></p>
			  	   	  	              	   </div>
		  	   	  	                 </div>
	  					 	      </div>
		  	   	  	              <h3>Address of Property</h3>
		  	   	  	              <div>
		  	   	  	              	 <div>
		  	   	  	              	 	<i></i>
		  	   	  	              	 </div>
		  	   	  	              	 <div id="full_address">
		  	   	  	              	 	<p></p>
		  	   	  	              	 </div>
		  	   	  	              </div>

		  	   	  	              <div>
		  	   	  	              	   <div>
		  	   	  	              	   	   <i></i>
		  	   	  	              	   </div>
		  	   	  	              	   <div id="locaGv_state">
		  	   	  	              	   	   <p></p>
		  	   	  	              	   	   <p></p>
		  	   	  	              	   </div>
		  	   	  	              </div>
		  	   	  	              <h3>Category</h3>
		  	   	  	              <p id="category_value"></p>
		  	   	  	              <h3>Type of Property</h3>
		  	   	  	              <p id="propType"></p>
		  	   	  	              <h3>size of property</h3>
		  	   	  	              
		  	   	  	              <div>
		  	   	  	              	   <div>
		  	   	  	              	   	   <i></i>
		  	   	  	              	   </div>
		  	   	  	              	   <div id="stateFa">
		  	   	  	              	   	   <p></p>
		  	   	  	              	   </div>
		  	   	  	              </div>
		  	   	         </div>
	  				</div>
	  				<div class="col-md-2 pixCont">
	  					<div class="property_hanler">
				  	   	  	  <form name="contactAgent" class="contact_agent" encType="multipart/form-data" method="POST" action="{{URL::to('/searchDB')}}" >{{ csrf_field() }}
				  	   	  	  	 <label>Full Name</label>
				  	   	  	  	 <input type="text" placeholder="your fullname">
				  	   	  	  	 <label>Telephone</label>
				  	   	  	  	 <input type="number" placeholder="000-0000-0000">
				  	   	  	  	 <label>Email</label>
				  	   	  	  	 <input type="email" placeholder="Email">
				  	   	  	  	 <label>short Message</label>
				  	   	  	  	 <textarea name="" id="short_note"></textarea>
				  	   	  	  	 <button>contact agent</button>
				  	   	  	  </form>
		  	   	  </div>
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col-md-12" style="color: black; cursor: pointer; text-align: center;" id="closemodal"> close </div>
	  			</div>
	  	</div>
	  </div>
	 
	 
      <script type="text/JavaScript">
            
            window.onload = function(){
               document.getElementsByClassName('props')[0].style.backgroundImage = 'url(/storage/images/smartcribpix1.jpg)';
               document.getElementsByClassName('props')[0].style.backgroundPosition = 'center';
               document.getElementsByClassName('props')[0].style.backgroundSize = 'cover';
               document.getElementsByClassName('property_modal')[0].style.display = 'none';
            }

      	    function setPointersOnMap(map, param){
      	    	 console.log('setPointersOnMap');
      	    	 var counter = 0;
      	    	 console.log(param['data'].length);
                 for (var i =0; i < param['data'].length; i++) {
                       counter++;
                       console.log(counter);
	                   marker = new google.maps.Marker({
	                       map: map,
	                       position: new google.maps.LatLng(param['data'][i].latitude , param['data'][i].longitude)
	                   }); 

	                   google.maps.event.addListener(marker, 'click', (function(marker, i) {
					        return function() {
					          infowindow.setContent(locations[i][0]);
					          infowindow.open(map, marker);
					        }
				       })(marker, i));
                 } 
      	    }

            var propStore = {}

      	    function generateHtml(map, result, city){
                  	   const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      	               var formData = new FormData();
      	                   formData.append('city', city);
                       console.log(result);
                       
                       var xhttp = new XMLHttpRequest();
	        	       xhttp.open('POST', '/searchDB', true);
	        	       xhttp.onreadystatechange = function(){
	        	       	    if (this.readyState == 4 && this.status == 200) {
	        	       	    	 var data = JSON.parse(this.responseText);
	        	       	    	      console.log('Debug');
	        	       	    	      console.log(data);
	        	       	    	      
                                      propStore[city] = data['data'];
                                      setPointersOnMap(map, data);
	        	       	    	     
	        	       	    	      function showHTML(){
                                           var elem = document.getElementsByClassName('props')[0];
                                               elem.innerHTML = '';
                                               elem.innerHTML = finalElem;
                                               document.getElementsByClassName('ltnInterface')[0].style.display = 'none';
                                               document.getElementsByClassName('props')[0].style.backgroundImage = '';
	        	       	    	      }
                                      
                                      var finalElem = '';
	        	       	    	      function useData(param){
	        	       	    	      	   var coverpicture;
       									   var category;
       									   var price;
       									   var bedroom;
       									   var address;
       									   var counter = 0;

                                           for(x in param){
                                           	   counter++;
                                           	   console.log(param);
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
                                               	  var a_component = '<div class="a_property" onclick="display_property(' + param['identity'] + ')">' + '<div class="cover_pix" style="background-image: url(/storage/images/' + param['cover_picture'] + ')" );"></div>' + '<ul>' + category + price + address + '</ul></div>';
                                               	  finalElem = finalElem.concat(a_component);
                                               }
                                           }
	        	       	    	      }

	        	       	    	      for (var i = 0; i < data['data'].length; i++) {
	        	       	    	      	   useData(data['data'][i]);
	        	       	    	      	   if (i + 1 == data['data'].length) {
	        	       	    	      	   	   setTimeout(function(){
	        	       	    	      	   	   	   showHTML();
	        	       	    	      	   	   }, 40);
	        	       	    	      	   }
	        	       	    	      }
	        	       	    }
	        	       }

	        	       xhttp.setRequestHeader('X-CSRF-TOKEN', theToken);
	                   xhttp.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
	                   xhttp.setRequestHeader("processData", 'false');
	                   xhttp.setRequestHeader('cache', 'false');
	                   xhttp.setRequestHeader("ContentType", "application/x-www-form-urlencoded");
	                   xhttp.send(formData);
        
      	    }
            
            var city;
            var locaGv;
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
 					locaGv = document.getElementById('locaGv').value;
                    var concatedLocation = locaGv.concat(',').concat(' ').concat(city).concat(',').concat(' ').concat("Nigeria");
                    //console.log(concatedLocation);
                	cityMap(concatedLocation, function(map, result){
                        setTimeout(function(){
                        	generateHtml(map, result, city);
                        }, 1000);
                        console.log('did the code ever got here');
                	});
                }
                
                function selectCity(param){
                	 console.log(param);
				     var parentE = document.getElementById('locaGv');
				     parentE.innerHTML = '';
				     useCity(lGA[param.value]);

                     if (param.value == '... Select City (state)') {
                     	document.getElementById('city').style.border = '2px solid red';
                     	document.getElementById('error_message').style.display = 'block';
                     }

                     setTimeout(function(){
                     	document.getElementById('city').style.border = '1px solid orange';
                     	document.getElementById('error_message').style.display = 'none';
                     }, 7000); // thats 7 seconds thereafter the event.
                }


                function display_property(param){
                		//document.querySelector(".custom-modal-wrapper").style.display = "block";
                	 function usePropStore(param){
                	 	 var ul = '<ul class="ul_of_props">';
                	 	 var counter = 0;
                	 	 var microImages = '';
                         var facilities = '';
                         var title_document = '';

                         for(x in param){
                         	  counter++;
                              if (x.indexOf('otherpicture') !=  -1) {
                              	  if (param[x] == null) {
                                      ul = ul + '</ul>';
	                              	  document.getElementsByClassName('pictures_section')[0].innerHTML = ul;
	                              	  //document.getElementsByClassName('picture_tray')[0].innerHTML = microImages;
	                              	  document.getElementsByClassName('custom-modal-wrapper')[0].style.display = 'block';
	                              	      continue;
                              	  }

                              	  var li = '<li style="background-image: url(/storage/images/' + param[x] + ')" class="other_images"></li>';
                                  ul = ul + li;
                
                                  if (x == '' && param[x] != null) {
                                  	  var each_Facilities = 
	                                  	   '<div style="display: flex;" class="propContainer">' +
	                                  	       '<div class="an_icon">' + 
	                                  	            '<i></i>' +
	                                  	       '</div>'+
	                                  	       '<div class="actual_content">' + 
	                                  	           '<p class="propHeading">' + '</p>' +
	                                  	           '<p class="propContent">' + '</p>' +
	                                  	       '</div>' +
	                                  	   '</div>';

                                  	   facilities = facilities + each_Facilities;
                                  }

                                  if(x == '' && param[x] != null){
                                  	  var prop_document = 
                                  	        '<div class="titleDocument">' +
                                  	             '<div class="forIcon">' +
                                  	                 '<i></i>' +
                                  	             '</div>' + 
                                  	             '<div class="documentValue">' +
          											 '<p>' + '</p>' +
                                  	             '</div>' +
                                  	        '</div>';

                                  	      title_document = title_document + prop_document;
                                  }

                             

                                  // var micro = '<li style="background-image: url(/storage/images/' + param[x] + ')" class=""></li>';
                                  // microImages = microImages + micro;

                              }

                              // if (Object.keys(param).length == counter) {
                              	  
                              // }
                         }
                	 }

 					 for (var i = 0; i < propStore[city].length; i++) {
 					 	   console.log(propStore[city][i]);
 					 	if (propStore[city][i]['identity'] == param) {
 					 		// if (propStore[city]['identity']) {}
 					 		 usePropStore(propStore[city][i]);
 					 	}
 					 }
                }


      </script>
      <script src="{{ asset('js/displayProp.js') }}" type="text/javascript"></script>
      <script src="{{ asset('js/searchDB.js') }}" type="text/javascript"></script>
      <script src="{{ asset('js/localgovernments.js') }}"></script>
      <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4D1-koeikvwYczC2EpHU-mwLSzTH6UIE&callback=initialize">
      </script>
      <script src="{{ asset('js/google-map-api.js') }}"></script>
      <script type="text/javascript">
      	document.querySelector("#closemodal").addEventListener("click", () => {
      		document.querySelector(".custom-modal-wrapper").style.display = "none";
      	});
      </script>
</body>
</html>