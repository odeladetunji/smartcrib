<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Smart-Crib</title>

        <base href="http://127.0.0.1:8000">

        <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
        <script src="/bootstrap/js/bootstrap.min.js" type="text/JavaScript"></script>
        <script src="{{ asset('/js/jquery-3.2.1.min(first).js') }}" type='text/JavaScript'></script>
        <!--CSS---->
        <link href="{{ asset('CSS/account.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
	  <div class="row">
	  	   <div class="col-sm-2 nav">
	  	   	   <ul class="inner-nav">
	  	   	    	<li id="navTitle">Welcome</li>
	  	   	    	<li id="navHome">home</li>
	  	   	    	<li>Listed Properties</li>
	  	   	   </ul>
	  	   </div>
	  	   <div class="col-sm-10 mainBody">
	  	   	    <div class="header">
	  	   	    	<button>smart-crib</button>
	  	   	    </div>
	  	   	    <div>
	  	   	    	<p id="owner" style="color: black;"></p>
	  	   	    </div>
	  	   	    	<div class="widgetContainer" style="display: flex;">
	  	   	    		<div class="widget" onclick="showForm()">
	  	   	    			<p>List A Property</p>
	  	   	    		</div>
	  	   	    		<div class="widget">
	  	   	    			<p>Available Properties</p>
	  	   	    			<p>000</p>
	  	   	    		</div>
	  	   	    		<div class="widget">
	  	   	    			<p>Edit Properties</p>
	  	   	    		</div>
	  	   	    		<div class="widget">
	  	   	    			<p>Total Asset Value</p>
	  	   	    			<p>$000</p>
	  	   	    		</div>
	  	   	    	</div>
	  	   	    	<form name="thePropertyForm" class="propertyForm" encType="multipart/form-data" method="POST" action="{{URL::to('/listP')}}" style="display: none;">{{ csrf_field() }}
                              <p class="stage">1</p>
	  	   	    		<p class="theTitle">Property Category</p>
	  	   	    		<select name="category" id="category" required>
	  	   	    			<option value="For Rent">For Rent</option>
	  	   	    			<option value="For Sale">For Sale</option>
	  	   	    			<option value="Short Let">Short Let</option>
	  	   	    			<option value="Joint Venture">Joint Venture</option>
	  	   	    			<option value="Government Scheme">Government Scheme</option>
	  	   	    			<option value="Private Development Scheme">Private Development Scheme</option>
	  	   	    		</select><br>
                        <p class="theTitle">Type of Property</p>
	  	   	    		<select id="type" name="title" required>
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
	  	   	    		</select><br>
	  	   	    		<p class="theTitle">Size of Property</p>
	  	   	    		<div class="size-of-property" style="display: flex;">
	  	   	    			<div class="size">
	  	   	    				<input type="number" max="100" min="1" placeholder="0" name="size">
	  	   	    			</div>
	  	   	    			<div>
	  	   	    			  <select id="measure" name="measure">
	  	   	    		            <option value="Hectare">Hectare</option>
	  	   	    		            <option value="Arce">Arce</option>
	  	   	    		            <option value="Plot">Plot</option>
	  	   	    		            <option value="Square meter">Square meter</option>
	  	   	    		        </select>
	  	   	    			</div>
	  	   	    		</div><br>
	  	   	    		<div class="Space">
                        	     <p class="stage" style="margin-bottom: 20px;">2</p>
                             </div><br>
                        <p class="theTitle fac">Property Title Document (Type)</p>
                        <div class="property-Document" style="display: flex;">
                        	  <div>
                        	  	<input type="checkbox" value="Federal C of O" name="Federal-C-of-O">
                        	  </div>
                        	  <div>
                        	  	<p>Federal C of O</p>
                        	  </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="State C of O" name="State-C-of-O">
                        	</div>
                        	<div>
                        		<p>State C of O</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Gazette" name="Gazette">
                        	</div>
                        	<div>
                        		<p>Gazette</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Survey Plan" name="Survey-Plan">
                        	</div>
                        	<div>
                        		<p>Survey Plan</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Family Receipt" name="Family-Receipt">
                        	</div>
                        	<div>
                        		<p>Family Receipt</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Registered Survey Plan" name="Registered-Survey-Plan">
                        	</div>
                        	<div>
                        		<p>Registered Survey Plan</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Registered Deed of Conveyance" name="Registered-Deed-of-Conveyance">
                        	</div>
                        	<div>
                        		<p>Registered Deed of Conveyance</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Registered Deed of Assignment" name="Registered-Deed-of-Assignment">
                        	</div>
                        	<div>
                        		<p>Registered Deed of Assignment</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="Deed of Assignment" name="Deed-of-Assignment">
                        	</div>
                        	<div>
                        		<p>Deed of Assignment</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="Deed of Conveyance" name="Deed-of-Conveyance">
                        	</div>
                        	<div>
                        		<p>Deed of Conveyance</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="Governors Consent Letter" name="Governors-Consent-Letter">
                        	</div>
                        	<div>
                        		<p>Governors Consent Letter</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="Approved Building Plan" name="Approved-Building-Plan">
                        	</div>
                        	<div>
                        		<p>Approved Building Plan</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="others" name="others"> 		
                        	</div>
                        	<div>
                        		<p>others
                        		</p>
                        	</div>
                        </div>

                        <div class="Space">
                        	<p class="stage">3</p>
                        </div>
                        <p class="theTitle fac">Facilities that comes with Property</p>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Newly Built" name="Newly-Built">
                        	</div>
                        	<div>
                        		<p>Newly Built</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Newly Renovated" name="Newly-Renovated">
                        	</div>
                        	<div>
                        		<p>Newly Renovated</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="POP" name="POP">
                        	</div>
                        	<div>
                        		<p>POP</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" Value="Dilapidated" name="Dilapidated">
                        	</div>
                        	<div>
                        		<p>Dilapidated</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Fenced" name="Fenced">
                        	</div>
                        	<div>
                        		<p>Fenced</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Well Water" name="Well-Water">
                        	</div>
                        	<div>
                        		<p>Well Water</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Borehole" name="Borehole">
                        	</div>
                        	<div>
                        		<p>Borehole</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Gated Estate" name="Gated-Estate">
                        	</div>
                        	<div>
                        		<p>Gated Estate</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Security" name="Security">
                        	</div>
                        	<div>
                        		<p>Security</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Water Treatment Plant" name="Water-Treatment-Plant">
                        	</div>
                        	<div>
                        		<p>Water Treatment Plant</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="All Room Ensuite" name="All-Room-Ensuite">
                        	</div>
                        	<div>
                        		<p>All Room Ensuit</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Ample parking Space" name="Ample-parking-Space">
                        	</div>
                        	<div>
                        		<p>Ample Parking Space</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="All others not Listed" name="All-others-not-Listed">
                        	</div>
                        	<div>
                        		<p>All others not listed</p>
                        	</div>
                        </div>
	  	   	    		
                       <div class="Space">
                       	    <p class="stage">4</p>
                       </div>
                        <p class="theTitle fac">Quantities</p>
	  	   	    		<div class="bedroomQuantity" style="display: flex;">
						     <div class="bedroom">
						     	<input type="number" max="200" min="1" placeholder="0" name="bedroom">
						     </div>
						     <div>
						     	<p>Bedroom</p>
						     </div>
	  	   	    		</div>
	  	   	    		<div class="units" style="display: flex;">
	  	   	    			 <div class="noofunits">
	  	   	    			 	<input type="number" max="200" min="1" placeholder="0" name="units">
	  	   	    			 </div>
	  	   	    			 <div>
	  	   	    			 	<p>Unit</p>
	  	   	    			 </div>
	  	   	    		</div>

	  	   	    		<div class="price">
	  	   	    			<p>Price</p>
	  	   	    	    	<input type="number" placeholder="$2,000" name="price">
	  	   	    		</div>
                              <div class="Space">
                                      <p class="stage">6</p>
                              </div>
                             <p class="localhead">Adress of Property</p>
	  	   	    	     <select id="theStates" name="state" onchange="useSelectedItem(this)" required>
	  	   	    			<option value="Abia">Abia</option>
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
                              
                              <select id="locaGv" name="local-government" required>
                                    <!--<option value="" id="optG">LGA</option>-->
                              </select>

                              <input type="telephone" name="telephone" placeholder="Telephone" class="add" required>
                              <input type="text" name="owners-name" placeholder="Owners Name" class="add" required>
                              <input type="text" name="address" placeholder="Street address 1" required class="add bot" id="addressValue">           
                              <textarea name="short-note" id="textarea" placeholder="Short note about property (other info you want clients to know)"></textarea required>
                              <div class="Space">
                                 <p class="stage">7</p>
                              </div>
                              <p class="localhead">Pictures Of Property</p>
                              <h6>select cover picture</h6>
                              <input type="file" name="coverpicture" required class="pictures"> 
                              <h6>select other property view</h6>
                              <input type="file" name="otherpictures[]" required  class="pictures" id="lastpicture" multiple>
                              <button>submit</button>
	  	   	    	</form>
	  	   </div>
	  </div>
	  <p id="gottenValue" style="display: none;">{{ $owner }}</p>
      <script src="{{ asset('js/localgovernments.js') }}" type="text/javascript"></script>
       <script src="{{ asset('js/google-map-api.js') }}" type="text/javascript"></script>
      <script type="text/JavaScript">
      	    window.load = function(){
      	    	     const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
		        	 const xhttp = new XMLHttpRequest();
		        	       xhttp.open('GET', '/accountContent', true);
		        	       xhttp.onreadystatechange = () => {
		        	       	    if (this.readystate == 4 && this.status == 200) {
		        	       	    	const data = JSON.parse(this.responseText);
		        	       	    	      console.log(data);
		        	       	    	      // use data here!
		        	       	    }
		        	       }

		        	       xhttp.setRequestHeader('X-CSRF-TOKEN', theToken);
		                   xhttp.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
		                   xhttp.setRequestHeader("processData", 'false');
		                   xhttp.setRequestHeader('cache', 'false');
		                   xhttp.setRequestHeader("Content-Type", "application/json");
		                   xhttp.send();

      	    }

             console.log(window.screen.width);
             if (window.screen.width < 576) {
             	document.getElementsByClassName('nav')[0].style.paddingBottom = '10px';
             	document.getElementsByClassName('inner-nav')[0].style.paddingTop = '10px';
             	document.getElementsByClassName('widget')[0].style.marginLeft = '30px';
             	document.getElementsByClassName('widget')[1].style.marginLeft = '30px';
             	document.getElementsByClassName('widget')[2].style.marginLeft = '30px';
             	document.getElementsByClassName('widget')[3].style.marginLeft = '30px';
             }
      	     var gottenValue = document.getElementById('gottenValue').innerHTML;
                           console.log(gottenValue);
		                   document.getElementById('owner').innerHTML = gottenValue;


      	    function submitData(param){
                     var theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

		        	 var xhttp = new XMLHttpRequest();
		        	       xhttp.open('POST', '/listP', true);
		        	       xhttp.onreadystatechange = function(){
		        	       	    if (this.readystate == 4 && this.status == 200) {
		        	       	    	var data = JSON.parse(this.responseText);
		        	       	    	      console.log(data);
		        	       	    	      // use data here!
		        	       	    }
		        	       }

		        	       xhttp.setRequestHeader('X-CSRF-TOKEN', theToken);
		                   xhttp.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
		                   xhttp.setRequestHeader("processData", 'false');
		                   xhttp.setRequestHeader('cache', 'false');
		                   xhttp.setRequestHeader("ContentType", "application/x-www-form-urlencoded");
		                   xhttp.send(param);
      	    }

            var listP = document.getElementsByClassName('propertyForm')[0];
            listP.onsubmit = function(){
            	 event.preventDefault();
            	 var listP = document.getElementsByClassName('propertyForm')[0];
                 var formData = new FormData(listP);
                 var theOwner = document.getElementById('gottenValue').innerHTML;
                         formData.append('email', theOwner);
                         codeAddress(function(param){
                             
                             console.log(param.geometry.location.lat());
                             console.log(param.geometry.location.lng());
                             formData.append('longitude', param.geometry.location.lng());
                             formData.append('latitude', param.geometry.location.lat());
                             return; //for debugging!
                             formData.append();
                             formData.append();
                             formData.append();
                             submitData(formData);
                         });
            }

            function showForm(){
  				var theForm = document.getElementsByClassName('propertyForm')[0];
  				if (theForm.style.display == 'block') {
                    theForm.style.display = 'none';
  				}else{
  					theForm.style.display = 'block';
  				}
            }

            function mapIsReady(){
               console.log('map api is ready');
            }

      </script>
      <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4D1-koeikvwYczC2EpHU-mwLSzTH6UIE&callback=initialize">
      </script>
</body>
</html>