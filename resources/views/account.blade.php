<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Smart-Crib</title>

        <base href="http://127.0.0.1:8000">

        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <script src="/bootstrap/js/bootstrap.min.js" type="text/JavaScript"></script>
        <script src="/js/jquery-3.2.1.min(first).js" type='text/JavaScript'></script>
        <!--CSS---->
        <link href="{{ asset('CSS/account.css') }}" rel="stylesheet" type="text/css" >
        <!--<link href="/CSS/account.css" rel="stylesheet" type="text/css">---->
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
	  	   	    	<form class="propertyForm" encType="multipart/form-data" method="POST" action="{{URL::to('/')}}" style="display: none;">{{ csrf_field() }}
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
	  	   	    		<select name="" id="type" name="title" required>
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
	  	   	    				<select name="" id="measure" name="measure">
	  	   	    		            <option value="Hectare">Hectare</option>
	  	   	    		            <option value="Arce">Arce</option>
	  	   	    		            <option value="Plot">Plot</option>
	  	   	    		            <option value="Square meter">Square meter</option>
	  	   	    		        </select>
	  	   	    			</div>
	  	   	    		</div><br>
	  	   	    		<div class="Space">
                        	
                        </div>
                        <p class="theTitle fac">Type of Property Title Document</p>
                        <div class="property-Document" style="display: flex;">
                        	  <div>
                        	  	<input type="checkbox" value="Federal C of O" name="Federal C of O">
                        	  </div>
                        	  <div>
                        	  	<p>Federal C of O</p>
                        	  </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="State C of O" name="State C of O">
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
                        		<input type="checkbox" value="Survey Plan" name="Survey Plan">
                        	</div>
                        	<div>
                        		<p>Survey Plan</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Family Receipt" name="Family Receipt">
                        	</div>
                        	<div>
                        		<p>Family Receipt</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Registered Survey Plan" name="Registered Survey Plan">
                        	</div>
                        	<div>
                        		<p>Registered Survey Plan</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Registered Deed of Conveyance" name="Registered Deed of Conveyance">
                        	</div>
                        	<div>
                        		<p>Registered Deed of Conveyance</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Registered Deed of Assignment" name="Registered Deed of Assignment">
                        	</div>
                        	<div>
                        		<p>Registered Deed of Assignment</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="Deed of Assignment" name="Deed of Assignment">
                        	</div>
                        	<div>
                        		<p>Deed of Assignment</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="Deed of Conveyance" name="Deed of Conveyance">
                        	</div>
                        	<div>
                        		<p>Deed of Conveyance</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="Governors Consent Letter" name="Governors Consent Letter">
                        	</div>
                        	<div>
                        		<p>Governors Consent Letter</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="Approved Building Plan" name="Approved Building Plan">
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
                        	
                        </div>
                        <p class="theTitle fac">Facilities that comes with Property</p>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Newly Built" name="Newly Built">
                        	</div>
                        	<div>
                        		<p>Newly Built</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="New Renovated" name="New Renovated">
                        	</div>
                        	<div>
                        		<p>New Renovated</p>
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
                        		<input type="checkbox" value="Well Water" name="Well Water">
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
                        		<input type="checkbox" value="Gated Estate" name="Gated Estate">
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
                        		<input type="checkbox" value="Water Treatment Plant" name="Water Treatment Plant">
                        	</div>
                        	<div>
                        		<p>Water Treatment Plant</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="All Room Ensuite" name="All Room Ensuite">
                        	</div>
                        	<div>
                        		<p>All Room Ensuit</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Ample parking Space" name="Ample parking Space">
                        	</div>
                        	<div>
                        		<p>Ample Parking Space</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="All others not Listed" name="All others not Listed">
                        	</div>
                        	<div>
                        		<p>All others not listed</p>
                        	</div>
                        </div>
	  	   	    		
                       <div class="Space">
                       	
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
                              
                              </div>
                             <p id="localhead">Adress of Property</p>
	  	   	    	     <select name="" id="" name="state" required>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    			<option value=""></option>
	  	   	    		</select>
                              
                              <select name="" id="" name="local government" required>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                              </select>
                              <input type="text" placeholder="Street address 1" required class="add">
                              <input type="text" placeholder="Street address 2" required class="add bot">

                              <textarea name="" id="textarea" placeholder="Short note about property (other info you want clients to know)"></textarea required>
                              <button>submit</button>
	  	   	    	</form>
	  	   </div>
	  </div>
	  <p id="gottenValue" style="display: none;">{{ $owner }}</p>
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
		                   xhttp.setRequestHeader("Content-Type", "application/json");
		                   xhttp.send(param);
      	    }

            var listP = document.getElementsByClassName('propertyForm')[0];
            listP.onsubmit = function(){
            	 event.preventDefault();
            	 var listP = document.getElementsByClassName('propertyForm')[0];
                 var formData = new FormData(listP);
                 submitData(formData);
            }

            function showForm(){
  				var theForm = document.getElementsByClassName('propertyForm')[0];
  				if (theForm.style.display == 'block') {
                    theForm.style.display = 'none';
  				}else{
  					theForm.style.display = 'block';
  				}
            }
            
            

      </script>
</body>
</html>