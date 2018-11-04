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
	 
	  <div class="menuIcon">
	  	   <i class="fas fa-bars" onclick="closeMenu()"></i>
	  </div>
	  
	  <div class="row mapCover">
	  	   <div class="col-sm-6 mapOuterContainer" style="padding-left: 0px; padding-right: 0px;">
	  	   	   <div id="map" style="">
	  	    	    
	  	       </div>
	  	   </div>
	  	   <div class="col-sm-6 prop">
	  	   	    <p id="propertiesFound"></p>
	  	   	   <div class="props" style="display: flex;">
	  	   	   	    
	  	   	   </div>
	  	   </div>
	  </div>
	  <div class="row propDetails">
	  	  <div class="col-sm-6 pix">
	  	  	   
	  	  </div>
	  	  <div class="col-sm-6 details">
	  	  	   
	  	  </div>
	  </div>
	  <p id="state"></p>
	  <p id="anonymousP" style="display: none;">{{ $value }}</p>
	  <div class="row ltnInterface">
	  	  <div class="col-sm-6 welm">
	  	  	 <form name="welcomeForm" class="welm_form" encType="multipart/form-data" method="POST" action="{{URL::to('/searchDB')}}" >{{ csrf_field() }}

	  	  	 	<select id="city" name="city" onchange="selectCity(this)" required>
	  	   	    			         <option value="... City (state)">... Select City (state)</option>
	  	   	    			         <option value="Abia">Abia</option>
                                     <option value="Adamawa">Adamawa</option>
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
	  					<i class="fas fa-window-close closeDetails" onclick="closePropDetails()"></i>
	  					<div class="pictures_section">
	  	   	  	              
	  	   	            </div>
	  	   	            <div class="picture_tray">
	  	   	  	 
	  	   	            </div>
	  				</div>
	  				<div class="col-md-4 pixCont midsection">
	  					 <div class="prop_facilities">
	  					 	      <div>
	  					 	      	 <h6>Quantity</h6>
                                    <div style="display: flex;">
			  	   	  	              	   <div class="left_part">
			  	   	  	              	   	   <p id="no_of_units">units</p>
			  	   	  	              	   </div>
			  	   	  	              	   <div class="right_part">
			  	   	  	              	   	   <p id="forbedroom"></p>
			  	   	  	              	   </div>
		  	   	  	                 </div>
		  	   	  	                 <h6>Price of Property</h6>
	  					 	      	 <div style="display: flex;">
			  	   	  	              	   <div class="left_part">
			  	   	  	              	   	   <i class="fas fa-money-bill-alt"></i>
			  	   	  	              	   </div>
			  	   	  	              	   <div class="right_part">
			  	   	  	              	   	   <p id="forprice"></p>
			  	   	  	              	   </div>
		  	   	  	                 </div>
	  					 	      </div>
		  	   	  	              <h6>Address of Property</h6>
		  	   	  	              <div style="display: flex;">
		  	   	  	              	 <div class="left_part">
		  	   	  	              	 	<i class="fas fa-address-book"></i>
		  	   	  	              	 </div>
		  	   	  	              	 <div class="right_part">
		  	   	  	              	 	<p id="foraddress"></p>
		  	   	  	              	 </div>
		  	   	  	              </div>

		  	   	  	              <div style="display: flex;">
		  	   	  	              	   <div class="left_part">
		  	   	  	              	   	   <i class="fas fa-thumbtack"></i>
		  	   	  	              	   </div>
		  	   	  	              	   <div class="right_part">
		  	   	  	              	   	   <p id="forlocaGv"></p>
		  	   	  	              	   	   <p id="forstate"></p>
		  	   	  	              	   </div>
		  	   	  	              </div>
		  	   	  	              <h6>Category</h6>
		  	   	  	              <p id="category_value" style="padding-left: 10px;"></p>
		  	   	  	              <h6>Type of Property</h6>
		  	   	  	              <p id="propType" style="padding-left: 10px;"></p>
		  	   	  	              <h6>size of property</h6>
		  	   	  	              
		  	   	  	              <div style="display: flex;">
		  	   	  	              	   <div class="left_part">
		  	   	  	              	   	   <p id="forsize"></p>
		  	   	  	              	   </div>
		  	   	  	              	   <div class="right_part">
		  	   	  	              	   	   <p id="formeasure"></p>
		  	   	  	              	   </div>
		  	   	  	              </div>
		  	   	         </div>
		  	   	         <div class="facilities_with_props">
		  	   	         	  
		  	   	         </div>
		  	   	         <div class="propTitle_documents">
		  	   	         	
		  	   	         </div>
	  				</div>
	  				<div class="col-md-2 pixCont">
	  					<div class="property_hanler">
				  	   	  	  <form name="contactAgent" class="contact_agent" encType="multipart/form-data" method="POST" action="{{URL::to('/searchDB')}}" >{{ csrf_field() }}
				  	   	  	  	 
				  	   	  	  	 <input type="text" placeholder="your fullname">
				  	   	  	  	 
				  	   	  	  	 <input type="number" placeholder="000-0000-0000">
				  	   	  	  	 
				  	   	  	  	 <input type="email" placeholder="Email">
				  	   	  	  	 
				  	   	  	  	 <textarea name="" id="short_note" placeholder="short message"></textarea>
				  	   	  	  	 <button>contact agent</button>
				  	   	  	  </form>
		  	   	  </div>
	  				</div>
	  			</div>
	  			<!-- <div class="row">
	  				<div class="col-md-12" style="color: black; cursor: pointer; text-align: center;" id="closemodal"> close </div>
	  			</div> -->
	  	</div>
	  </div>
	 
	  <div class="search_section">
	               <i class="fas fa-window-close" onclick="closeMenu()"></i><br>
			       <div class="cover_for_nav">
			       	   <button class="menuButton" id="buy_button">Buy</button>
				  	   <button class="menuButton" id="rent_button">Rent</button>
				  	   <button class="menuButton" id="sell_button">Sell</button>
				  	   <button class="menuButton" id="mortgage_button">Mortgage</button>
				  	   <button class="menuButton" id="agent_finder">Agent finder</button>
				  	   <button class="menuButton" id="the_more_button">more</button>
				  	   <button class="menuButton" id="user_signup_button">signup</button>
				  	   <button class="menuButton" id="userLogin">login</button>
			       </div>
	  	  	  <form name="searchForm" class="search_form" encType="multipart/form-data" method="POST" action="{{URL::to('/')}}" >{{ csrf_field() }}
		  	  	  	<select name="category" id="category" required>
		  	  	  		    <option value="Category">Category</option>
		   	    			<option value="For Rent">For Rent</option>
		   	    			<option value="For Sale">For Sale</option>
		   	    			<option value="Short Let">Short Let</option>
		   	    			<option value="Joint Venture">Joint Venture</option>
		   	    			<option value="Government Scheme">Government Scheme</option>
		   	    			<option value="Private Development Scheme">Private Development Scheme</option>
		  	   	   </select>
		  	   	   <p id="enterCategory">Select Category</p>
		  	  	  	<select name="price" id="price_component" onchange="showMaxInput(this)">
		  	  	  		<option value="select price">select price</option>
  	  	  				<option value="50000">N50,000+</option>
  	  	  				<option value="80000">N80,000+</option>
  	  	  				<option value="100000">N100,000+</option>
  	  	  				<option value="150000">N150,000+</option>
  	  	  				<option value="200000">N200,000+</option>
  	  	  				<option value="250000">250,000+</option>
  	  	  				<option value="300000">N300,000+</option>
  	  	  				<option value="350000">N350,000+</option>
  	  	  				<option value="400000">N400,000+</option>
  	  	  				<option value="450000">N450,000+</option>
  	  	  				<option value="500000">N500,000+</option>
  	  	  				<option value="550000">N550,000+</option>
  	  	  				<option value="600000">N600,000+</option>
  	  	  				<option value="650000">N650,000+</option>
  	  	  				<option value="700000">N700,000+</option>
  	  	  				<option value="800000">N800,000+</option>
  	  	  				<option value="1000000">N1,000,000+</option>
  	  	  				<option value="2000000">N2,000,000+</option>
  	  	  				<option value="3000000">N3,000,000+</option>
  	  	  				<option value="4000000">N4,000,000+</option>
  	  	  				<option value="6000000">N6,000,000+</option>
  	  	  				<option value="10000000">N10,000,000+</option>
			  	  	</select>
			  	  	<input type="number" name= "max" id="maxcheck" placeholder="maximum price">
			  	  	<p id="maxError">wrong maximum input</p>
	                <select name="bedrooms" id="">
                        <option value="Bedroom">No of Bedrooms</option>
	                	<option value="1">1+ bedroom</option>
	                	<option value="2">2+ bedroom</option>
	                	<option value="3">2+ bedroom</option>
	                	<option value="4">4+ bedroom</option>
	                	<option value="5">5+ bedroom</option>
	                	<option value="6">6+ bedroom</option>
	                </select>

	                 <select id="theStates" name="state" onchange="select_city_for_search(this)" required>
	                 	     <option value="">select state of property</option> 
	   	    			     <option value="Abia">Abia</option>
                             <option value="Adamawa">Adamawa</option>
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

	  	   	    		<select name="locaGv" id="locaGv_for_search" required>
	  	   	    			<option value="Local Government">Local Government</option>
	  	   	    		</select>
	  	   	    		<P id="enterLocalGov">Select local government</P>

	                <select id="type" name="title">
	                	<option value="Type of Property">Type of Property</option>
  	   	    			<option value="Land">Land</option>
  	   	    			<option value="Detached House"> Detached House </option>
  	   	    			<option value="Semi-Detached House">  Semi-Detached House</option>
  	   	    			<option value="Tarraced">Tarraced House</option>
  	   	    			<option value="Bungalow">Bungalow</option>
  	   	    			<option value="Commercial Property">Commercial Property</option>
  	   	    			<option value="Warehouse">Warehouse</option>
  	   	    			<option value="Factory">Factory</option>
  	   	    			<option value="Event Hall">Event Hall</option>
  	   	    			<option value="Filling Stations">Filling Stations</option>
  	   	    			<option value="School">School</option>
  	   	    			<option value="Tank Farm">Tank Farm</option>
	  	   	    	</select>
                    <button id="submit_Form">search database</button>
	  	  	  </form>
	  </div>
	 
      <script type="text/JavaScript">
            
            window.onload = function(){
               document.getElementsByClassName('props')[0].style.backgroundImage = 'url(/storage/images/smartcribpix1.jpg)';
               document.getElementsByClassName('props')[0].style.backgroundPosition = 'center';
               document.getElementsByClassName('props')[0].style.backgroundSize = 'cover';
               //document.getElementsByClassName('property_modal')[0].style.display = 'none';
            }

      	    function setPointersOnMap(map, param){
      	    	 console.log('setPointersOnMap');
      	    	 var counter = 0;
      	    	 var markerTriggered = null;

      	    	 console.log(param['data'].length);
                 for (var i =0; i < param['data'].length; i++) {
                       counter++;
                       console.log(counter);
	                   marker = new google.maps.Marker({
	                       map: map,
	                       position: new google.maps.LatLng(param['data'][i].latitude , param['data'][i].longitude)
	                   });

	                   var infowindow = new google.maps.InfoWindow({
                           content: param['data'][i].address.concat(',').concat(' ').concat(param['data'][i].local_government).concat(',').concat(' ').concat(param['data'][i].state_property_is_located) //address of location
                       });

	                   google.maps.event.addListener(marker, 'click', (function(marker, i) {
					        return function() {
					          infowindow.open(map, marker);
					          display_property(param['data'][i], markerTriggered);

					          //console.log('this is not working right');
					        }
				       })(marker, i));
 
				       google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
					        return function() {
					          infowindow.open(map, marker);
					        }
				       })(marker, i));
 
                       google.maps.event.addListener(marker, 'mouseout', (function(marker, i) {
					        return function() {
					          infowindow.close();
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
	        	       	    	      //console.log(data);
	        	       	    	      
                                      propStore[city] = data['data'];
                                      setPointersOnMap(map, data);
	        	       	    	     
	        	       	    	      function showHTML(){
                                           var elem = document.getElementsByClassName('props')[0];
                                               elem.innerHTML = '';
                                               elem.innerHTML = finalElem;
                                               document.getElementsByClassName('ltnInterface')[0].style.display = 'none';
                                               document.getElementsByClassName('props')[0].style.backgroundImage = '';
                                               document.getElementsByClassName('menuIcon')[0].style.display = 'block';
	        	       	    	      }

                                      var nullValue = "vintage";
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
                                               	  var a_component = '<div class="a_property" onclick="displayThisProperty(' + param['identity'] + ')">' + '<div class="cover_pix" style="background-image: url(/storage/images/' + param['cover_picture'] + ')" );"></div>' + '<ul>' + category + price + address + '</ul></div>';
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

                function select_city_for_search(param){
                    displayLGA(lGA[param.value]);
                }

                /// event handler function
                function togglePrices(){
                    var comp = document.getElementsByClassName('actualPrices')[0];
                    var component = document.getElementsByClassName('maxmin')[0];

                    if (comp.style.display == 'block') {
                    	comp.style.display = 'none';
                    }else{
                    	comp.style.display = 'block';
                    }

                    if (component.style.display == 'block') {
                    	component.style.display = 'none';
                    }else{
                    	component.style.display = 'block';
                    }
                }
                
                function showMaxInput(param){
                    if (param.value != 'select price') {
                    	document.getElementById('maxcheck').style.display = 'block';
                        document.getElementById('maxcheck').style.backgroundColor = '#eeeeee';
                    }else{
                    	document.getElementById('maxcheck').style.display = 'none';
                    }
                }

                function closeMenu(){
                	//console.log('am working');
                	var search_section = document.getElementsByClassName('search_section')[0];
                	   //console.log(search_section.style.display);
                	if (search_section.style.display == '') {
                		search_section.style.display = 'block';
                		//console.log('1');
                	}else if(search_section.style.display == 'none'){
                		search_section.style.display = 'block';
                		console.log('2');
                	}else{
                        search_section.style.display = 'none';
                		//console.log('3');
                	}
                    
                    var menuIcon = document.getElementsByClassName('menuIcon')[0];
                        if (menuIcon.style.display == 'none') {
                        	menuIcon.style.display = 'block';
                        }else{
                        	menuIcon.style.display = 'none';
                        }

                }

                function closePropDetails(){
                     var closePropDetails = document.getElementsByClassName('custom-modal-wrapper')[0];
                         if (closePropDetails.style.display == 'block') {
                         	 closePropDetails.style.display = 'none';
                         }else{
                         	 closePropDetails.style.display = 'block';
                         }

                         document.getElementsByClassName('menuIcon')[0].style.display = 'block';
                }
                
      </script>
      <script src="{{ asset('js/google-map-api.js') }}"></script>
      <script src="{{ asset('js/propertydetails.js') }}"></script>
      <script src="{{ asset('js/displayProp.js') }}" type="text/javascript"></script>
      <script src="{{ asset('js/searchDB.JS') }}" type="text/javascript"></script>
      <script src="{{ asset('js/localgovernments.js') }}"></script>
      <script src="{{ asset('js/secondPropertyDetails.js') }}"></script>
      <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4D1-koeikvwYczC2EpHU-mwLSzTH6UIE&callback=initialize">
      </script>
</body>
</html>