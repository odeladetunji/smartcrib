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
        <link href="/CSS/account.css" rel="stylesheet" type="text/css">
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
	  	   	    		<div class="widget">
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
	  	   	    	<form action="" class="propertyForm">
	  	   	    		<p class="theTitle">Property Category</p>
	  	   	    		<select name="" id="category">
	  	   	    			<option value="For Rent">For Rent</option>
	  	   	    			<option value="For Sale">For Sale</option>
	  	   	    			<option value="Short Let">Short Let</option>
	  	   	    			<option value="Joint Venture">Joint Venture</option>
	  	   	    			<option value="Government Scheme">Government Scheme</option>
	  	   	    			<option value="Private Development Scheme">Private Development Scheme</option>
	  	   	    		</select><br>
                        <p class="theTitle">Type of Property</p>
	  	   	    		<select name="" id="type">
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
	  	   	    				<input type="number" max="100" min="1" placeholder="0">
	  	   	    			</div>
	  	   	    			<div>
	  	   	    				<select name="" id="measure">
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
                        	  	<input type="checkbox" value="Federal C of O">
                        	  </div>
                        	  <div>
                        	  	<p>Federal C of O</p>
                        	  </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="State C of O">
                        	</div>
                        	<div>
                        		<p>State C of O</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Gazette">
                        	</div>
                        	<div>
                        		<p>Gazette</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Survey Plan">
                        	</div>
                        	<div>
                        		<p>Survey Plan</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Family Receipt">
                        	</div>
                        	<div>
                        		<p>Family Receipt</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Registered Survey Plan">
                        	</div>
                        	<div>
                        		<p>Registered Survey Plan</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Registered Deed of Conveyance">
                        	</div>
                        	<div>
                        		<p>Registered Deed of Conveyance</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Registered Deed of Assignment">
                        	</div>
                        	<div>
                        		<p>Registered Deed of Assignment</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="Deed of Assignment">
                        	</div>
                        	<div>
                        		<p>Deed of Assignment</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="Deed of Conveyance">
                        	</div>
                        	<div>
                        		<p>Deed of Conveyance</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="Governors Consent Letter">
                        	</div>
                        	<div>
                        		<p>Governors Consent Letter</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="Approved Building Plan">
                        	</div>
                        	<div>
                        		<p>Approved Building Plan</p>
                        	</div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                        	<div>
                        		<input type='checkbox' value="others"> 		
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
                        		<input type="checkbox" value="Newly Built">
                        	</div>
                        	<div>
                        		<p>Newly Built</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="New Renovated">
                        	</div>
                        	<div>
                        		<p>New Renovated</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="POP">
                        	</div>
                        	<div>
                        		<p>POP</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" Value="Dilapidated">
                        	</div>
                        	<div>
                        		<p>Dilapidated</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Fenced">
                        	</div>
                        	<div>
                        		<p>Fenced</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Well Water">
                        	</div>
                        	<div>
                        		<p>Well Water</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Borehole">
                        	</div>
                        	<div>
                        		<p>Borehole</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Gated Estate">
                        	</div>
                        	<div>
                        		<p>Gated Estate</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Security">
                        	</div>
                        	<div>
                        		<p>Security</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Water Treatment Plant">
                        	</div>
                        	<div>
                        		<p>Water Treatment Plant</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="All Room Ensuite">
                        	</div>
                        	<div>
                        		<p>All Room Ensuite</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="Ample parking Space">
                        	</div>
                        	<div>
                        		<p>Ample Parking Space</p>
                        	</div>
                        </div>
                        <div class="facilities" style="display: flex;">
                        	<div>
                        		<input type="checkbox" value="All others not Listed">
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
						     	<input type="number" max="200" min="1" placeholder="0">
						     </div>
						     <div>
						     	<p>Bedroom</p>
						     </div>
	  	   	    		</div>
	  	   	    		<div class="units" style="display: flex;">
	  	   	    			 <div class="noofunits">
	  	   	    			 	<input type="number" max="200" min="1" placeholder="0">
	  	   	    			 </div>
	  	   	    			 <div>
	  	   	    			 	<p>Unit</p>
	  	   	    			 </div>
	  	   	    		</div>

	  	   	    		<div class="price">
	  	   	    			<p>Price</p>
	  	   	    	    	<input type="number" placeholder="$2,000">
	  	   	    		</div>

	  	   	    		<select name="" id="">
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

	  	   	    		<input type="Local Government of Property">
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
                     const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
		        	 const xhttp = new XMLHttpRequest();
		        	       xhttp.open('POST', '/listP', true);
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
		                   xhttp.send(param);
      	    }

            var listP = document.getElementsByClassName('propertyForm')[0];
            listP.onsubmit = function(){
            	 event.preventDefault();
                 var formData = new FormData(listP);
                 submitData(formData);
            }
      </script>
</body>
</html>