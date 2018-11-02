<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Smart-Crib</title>
        <base href="http://127.0.0.1:8000/">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <script src="/bootstrap/js/bootstrap.min.js" type="text/JavaScript"></script>
        <script src="/js/jquery-3.2.1.min(first).js" type='text/JavaScript'></script>
        <!--CSS---->
        <link href="{{ asset('CSS/home.css') }}" rel="stylesheet" type="text/css" >

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        
<body>

	   	     <div class="row topHead">
	   	     	<div class="col-sm-12 theHead">
	   	     		<ul>
		   	     		<li>Buy</li>
		   	     		<li>Rent</li>
		   	     		<li>Sell</li>
		   	     		<li>Mortgage</li>
		   	     		<li>Agent Finder</li>
		   	     		<li>More</li>
		   	     		<li onclick="gotoSignUp()">Signup</li>
		   	     		<li onclick="gotoLogin()">Login</li>
	   	     	    </ul>
	   	     	</div>
	   	     </div>
	   	     <div class="row banner" style="background-image: url(/storage/images/smartapartment.jpg);">
	   	     	<div class="col-sm-12 bannerContent">
	   	     		 <h1 id="welcome_note">Let's go Home</h1>
	   	     		 <button id="postingARequest" onclick="makeRequest()">Post A Request</button>
	   	     		 <p> <span id="Buy"  onclick="hilightAction(this)">Buy</span>
	   	     		     <span id="Rent" onclick="hilightAction(this)">Rent</span>
	   	     		     <span id="Sell" onclick="hilightAction(this)">Sell</span>
	   	     		     <span id="Estimate" onclick="hilightAction(this)">Estimate</span>
	   	     		 </p>
	   	     		 <div class="inputContainer">
	   	     		 	<input type="text" placeholder="Search for property to rent" id="input-Text">
	   	     		 	<button id="search-Button" onclick="searchForInput(this)">Search</button>
	   	     		 </div>
	   	     	</div>
	   	     </div>

	   	     <div class="row login_form">
	   	     	 <div class="col-md-6 login">
	   	     	 	  <i class="fas fa-window-close" onclick="closeForm()"></i>
	   	     	 	  <form class="loginForm" encType="multipart/form-data" method="POST" action="{{URL::to('/')}}"> {{ csrf_field() }}
	   	     	 	  	   <p>Login</p>
	   	     	 	  	   <input type="email" placeholder="Email" id="email"><br>
	   	     	 	  	   <input type="password" placeholder="Password" id="password">
	   	     	 	  	   <button>submit</button>
	   	     	 	  </form>

	   	     	 	  <form class="actualForm1" encType="multipart/form-data" method="POST" action="{{URL::to('/')}}" style="display: none;">{{ csrf_field() }}
	   	     	 	  	  <input type="text" name="email" id="email1">
	   	     	 	  	  <input type="text" name="password" id="password1">
	   	     	 	  </form>
	   	     	 </div>
	   	     	 <div class="col-md-6 description">
	   	     	 	 <p>something</p>
	   	     	 </div>
	   	     </div>
	   	      <div class="row signup_form">
	   	     	 <div class="col-md-6 login">
	   	     	 	  <i class="fas fa-window-close" onclick="closeForm2()"></i>
	   	     	 	  <form class="signupForm" encType="multipart/form-data" method="POST" action="{{URL::to('/signup')}}"> {{ csrf_field() }}
	   	     	 	  	   <p>SignUp</p>
	   	     	 	  	   <input type="email" placeholder="Email" id="name" required><br>
	   	     	 	  	   <input type="password" placeholder="Password" id="pass" required>
	   	     	 	  	   <button>submit</button>
	   	     	 	  </form>

	   	     	 	  <form class="actualForm" encType="multipart/form-data" method="POST" action="{{URL::to('/account')}}" style="display: none;">{{ csrf_field() }}
	   	     	 	  	  <input type="text" name="email" id="name1">
	   	     	 	  	  <input type="text" name="password" id="pass1">
	   	     	 	  </form>
	   	     	 </div>
	   	     	 <div class="col-md-6 description">
	   	     	 	 <p>something</p>
	   	     	 </div>
	   	     </div>
	   	      <div class="coverForPost">
	   	      	  <div class="forheader">
	   	      	  	   <button id="quitRequest" onclick="makeRequest()">Quit Post</button>
	   	      	  </div>
	   	      	   <div class="postingRequest" style="display: flex;">
	   	     	  
	   	     	   <div class="requestForm" >

	   	     	   	  <p id="subtileMessage">Lets get your request</p>
	   	     	   <form name="thePropertyForm" class="propertyForm" encType="multipart/form-data" method="POST" action="{{URL::to('/reqProp')}}" >{{ csrf_field() }}
                        <p class="stage">1</p>
	  	   	    		<p class="theTitle">Property Category</p>
	  	   	    		<select name="category" class="category" required>
	  	   	    			<option value="For Rent">For Rent</option>
	  	   	    			<option value="For Sale">For Sale</option>
	  	   	    			<option value="Short Let">Short Let</option>
	  	   	    			<option value="Joint Venture">Joint Venture</option>
	  	   	    			<option value="Government Scheme">Government Scheme</option>
	  	   	    			<option value="Private Development Scheme">Private Development Scheme</option>
	  	   	    		</select><br>
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
                              <input type="email" name="email" class="theEmail" required>
                              <input type="telephone" name="telephone" placeholder="Your Phone Number" class="add" required>         
                              
                              <button>Post Request</button>
	  	   	    	</form>
	   	     	   </div>
	   	     	   <div class="advertSection">
	   	     	     	 <div>
	   	     	     	 	<p>properties will be advertised here!</p>
	   	     	     	 	<p>this will definitely be sponsored properties</p>
	   	     	     	 </div>
	   	     	   </div>
	   	      </div>
	   	      </div>
             
	   	     <div class="theFooter">
	   	     	<ul>
	   	     		<li>About Us</li>
	   	     		<li>Our Contacts</li>
	   	     	</ul>
	   	     	<p>Terms and Policies</p>
	   	     </div>
	    <script src="{{ asset('js/localgovernments.js') }}" type="text/javascript"></script>
	   <!-- <script src="{{ asset('js/google-map-api.js') }}" type="text/javascript"></script> --> 
        <script type="text/JavaScript">
        	// dont forget to use babal script!
        	window.onload = () => {
        		function loadContent(){
	        	 	 const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
		        	 const xhttp = new XMLHttpRequest();
		        	       xhttp.open('GET', '/initialContent', true);
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

        	    loadContent();
        	}

        	function hilightAction(param){
        	  var button = document.getElementById('search-Button');
			  switch(param.innerHTML){
				case 'Estimate':
				   document.getElementById('Estimate').style.backgroundColor = '';
				   button.innerHTML = 'Continue';
				case 'Rent':
				   document.getElementById('Rent').style.backgroundColor = '';
        		   button.innerHTML = 'Search';
				case 'Buy':
				   document.getElementById('Buy').style.backgroundColor = '';
                   button = 'Search';
				case 'Sell':
				   document.getElementById('Sell').style.backgroundColor = '';
                   button.innerHTML = 'Continue';
                   document.getElementById('inputContainer').style.backgroundImage = '';
			  }
        	}

        	function getProperties(){
                 const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
	        	 const xhttp = new XMLHttpRequest();
	        	       xhttp.open('POST', '/searchProp', true);
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

        	function gotoLogin(){
                document.getElementsByClassName('login_form')[0].style.display = 'block';
        	}

        	function checkForEmailandPassword(param){
                     const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                     var password = document.getElementById('name').value;
                     var email = document.getElementById('pass').value;
                     document.getElementById('name1').value = password;
                     document.getElementById('pass1').value = email;

		        	 var xhttp = new XMLHttpRequest();
		        	       xhttp.open('POST', '/signup', true);
		        	       xhttp.onreadystatechange = function() {

		        	       	    if (this.readyState == 4 && this.status == 200) {
		        	       	    	console.log('something is wrong');
		        	       	    	var data = JSON.parse(this.responseText);
		        	       	    	      console.log(data);
		        	       	    	      if (data.data == true) {
		        	       	    	      	 var theForm = document.getElementsByClassName('actualForm')[0];
		        	       	    	      	 //return;
		        	       	    	      	 theForm.submit();
		        	       	    	      }
		        	       	    	      if (data.data == false) {
                                             var warning = document.getElementById('wan');
                                             warning.style.display = 'block';

                                             setTimeout(function(){
           										warning.style.display = 'none';
                                             }, 5000);
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

        	function checkLoginCredentials(param){
                     const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                     var password = document.getElementById('password').value;
                     var email = document.getElementById('email').value;
                     document.getElementById('password1').value = password;
                     document.getElementById('email1').value = email;

		        	 const xhttp = new XMLHttpRequest();
		        	       xhttp.open('POST', '/login', true);
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

        	var loginForm = document.getElementsByClassName('loginForm')[0];
        	loginForm.onsubmit = function(){
        		event.preventDefault();
        		const loginForm = document.getElementsByClassName('loginForm')[0];
        		var formData = new FormData(loginForm);
        		checkLoginCredentials(formData);
        	}

        	var signupForm = document.getElementsByClassName('signupForm')[0];
        	signupForm.onsubmit = function(){
        		event.preventDefault();
        		const signupForm = document.getElementsByClassName('signupForm')[0];
        		var formData = new FormData(signupForm);
        		checkForEmailandPassword(formData);
        	}

        	function gotoSignUp(){
        		document.getElementsByClassName('signup_form')[0].style.display = 'block';
        	}

        	function searchForInput(param){
        		var input = document.getElementById('input-Text').value;
                switch(param.innerHTML){
                   case Continue:
                      
                   case Search:
                      getProperties(input);
                }
        	}

        	function makeRequest(){
        		console.log('this was called');
        		var hiddenForm = document.getElementsByClassName('coverForPost')[0];
        		    if (hiddenForm.style.display == 'block') {
                        hiddenForm.style.display = 'none';
        		    }else{
        		    	hiddenForm.style.display = 'block';
        		    }
        	}
            
            function submitPostRequest(param){
                     const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
		        	 const xhttp = new XMLHttpRequest();
		        	       xhttp.open('POST', '/reqProp', true);
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
		                   xhttp.setRequestHeader("ContentType", "application/json");
		                   xhttp.send(param);
            }

        	var postRequest = document.getElementsByClassName('propertyForm')[0];
        	    postRequest.onsubmit = function(){
        	    	var postRequest = document.getElementsByClassName('propertyForm')[0];
        	    	var formData = new FormData(postRequest);
                        submitPostRequest(formData);
        	    }
            
            function closeForm(){
            	var formModal = document.getElementsByClassName('signup_form')[0];
            	    if (formModal.style.display == 'none') {
            	    	formModal.style.display = 'block';
            	    }else{
            	    	formModal.style.display = 'none';
            	    }
            }

            function closeForm2(){
            	var formModal = document.getElementsByClassName('login_form')[0];
            	    if (formModal.style.display == 'none') {
            	    	formModal.style.display = 'block';
            	    }else{
            	    	formModal.style.display = 'none';
            	    }
            }
           
        </script>
</body>
</html>