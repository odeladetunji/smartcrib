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

        <link href="{{ asset('/CSS/agentFinder.css') }}" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        
</head>
<body>
	   	     <div class="banner" style="background-image: url({{ asset('/storage/images/agentpix.jpg') }});">
	   	     	  <div class="bannerContent">

	   	     	  	   <h2>Agent Finder</h2>
	   	     	  </div>
	   	     </div>

	   	     <div class="agentsAndProperties">
             	<div class="row" style="margin-left: 0px;">
		   	     	  <div class="col-md-4 theAgents" style="margin-left: 0px;">
		   	     	  	    <p>some</p>
		   	     	  </div>
		   	     	  <div class="col-md-4 theAgents" style="margin-left: 0px;">
		   	     	  	  <p>properties are ment to be here</p>
		   	     	  </div>
		   	     	  <div class="col-md-4 someProps">
		   	     	  	  <p>properties are ment to be here</p>
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
	   	     <div class="row welcome_modal">
	   	     	 <div class="col-md-6">
	   	     	 	  <ul>
	   	     	 	  	<li onclick="gotoSignUp()">signup</li>
	   	     	 	  	<li onclick="gotoLogin()">login</li>
	   	     	 	  </ul>

	   	     	 	  <label id="labelForForm"> Find An Agent </label>
	   	     	 	  <form name="searchForm" class="searchForm" encType="multipart/form-data" method="POST" action="{{URL::to('/listP')}}">{{ csrf_field() }}
	   	     	 	  	   <select id="theStates" name="state" onchange="useSelectedItem(this)" required>
	   	     	 	  	   	         <option value="Select State">Select State</option>
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

                              <select id="locaGv" name="local-government" required>
                                    <!--<option value="" id="optG">LGA</option>-->
                              </select>

                              <button>submit</button>
	   	     	 	  </form>
	   	     	 </div>
	   	     	 <div class="col-md-6">
	   	     	 	  <p>something is here</p>
	   	     	 </div>
	   	     </div>

	   	     <div class="row login_form">
	   	     	 <div class="col-md-6 login">
	   	     	 	  <i class="fas fa-window-close" onclick="closeForm()"></i>
	   	     	 	  <form class="loginForm" encType="multipart/form-data" method="POST" action="{{URL::to('/')}}"> {{ csrf_field() }}
	   	     	 	  	   <label id="wan2" style="padding: 10px; text-align: center; color: red; display: none;">wrong username or password!</label>
	   	     	 	  	    <label id="wan3" style="padding: 10px; text-align: center; color: red; display: none;">user does not exit</label>
	   	     	 	  	   <p>Login</p>
	   	     	 	  	   <input type="email" placeholder="Email" name="email" id="email"><br>
	   	     	 	  	   <input type="password" placeholder="Password" name="password" id="password">
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
	   	     	 	  	   <label id="wan" style="padding: 10px; text-align: center; color: red; display: none;">user already exist</label>
	   	     	 	  	   <p>SignUp</p>
	   	     	 	  	   <input type="email" placeholder="Email" name= "email" id="name" required><br>
	   	     	 	  	   <input type="password" placeholder="Password" name="password" id="pass" required>
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
        <script>
        	    function getProperties(){
        	    	 var formData = new FormData();
        	    	     var theState = document.getElementById('theStates').value;
        	    	     formData.append('theStates', theState);
                         
	        	 	 var theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
		        	 var xhttp = new XMLHttpRequest();
		        	       xhttp.open('POST', '/searchProps', true);
		        	       xhttp.onreadystatechange = function() {
		        	       	    if (this.readyState == 4 && this.status == 200) {
		        	       	    	var data = JSON.parse(this.responseText);
		        	       	    	     console.log(data.data);
		        	       	    	document.getElementsByClassName('welcome_modal')[0].style.display = 'none';
		        	       	    	     
		        	       	    }
		        	       }

		        	       xhttp.setRequestHeader('X-CSRF-TOKEN', theToken);
		                   xhttp.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
		                   xhttp.setRequestHeader("processData", 'false');
		                   xhttp.setRequestHeader('cache', 'false');
		                   xhttp.setRequestHeader("ContentType", "application/json");
		                   xhttp.send(formData);

        	    }

        		function searchAgent(formData){
	        	 	 var theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
		        	 var xhttp = new XMLHttpRequest();
		        	       xhttp.open('POST', '/searchAgent', true);
		        	       xhttp.onreadystatechange = function(){
		        	       	    if (this.readyState == 4 && this.status == 200) {
		        	       	    	var data = JSON.parse(this.responseText);
		        	       	    	      console.log(data.data);
                                          return;

                                          if (data.data == false) {

                                          }

                                          if (data.data != false) {
                                          	    function showElems(){
                                          	    	var parentElm = document.getElementsByClassName('theAgents')[0];
                                          	    	    parentElm.innerHTML = comp;
                                          	    }

                                          	    var comp = '';
	                                            function useData(param){
      												var component = '<div class="parentComp" style="display: flex;">' + 
		   	     	  	    	                   '<div class="leftComp">' +
							   	     	  	    	 	'<div id="agentPicture" style="background-image: url( {{ asset("/storage/images/' + param[picture] + '") }} )">' +
							   	     	  	    	 		
							   	     	  	    	 	'</div>' +
							   	     	  	    	 '</div>' +
							   	     	  	    	 '<div class="rightComp">' +
							   	     	  	    	 	'<div id="badge">' +
							   	     	  	    	 		'<i class="fas fa-ribbon"></i>' +
							   	     	  	    	 	'</div>' +
							   	     	  	    	 	'<p id="agentName">' + param[first_name] + param[lastname] + '</p>' +
							   	     	  	    	 	'<p id="tele"> <span id="telSpan"><i class="fas fa-phone"></i></span>' + param[telephone] + '</p>' +
							   	     	  	    	 	'<div class="ratings" style="display: flex;">' +
	 														'<div><i class="fas fa-star"></i></div>' + 
	 														'<div><i class="fas fa-star"></i></div>' +
	 														'<div><i class="fas fa-star"></i></div>' +
	 														'<div><i class="fas fa-star"></i></div>' +
	 														'<div><i class="fas fa-star"></i></div>' +
							   	     	  	    	 	'</div>' +
							   	     	  	    	 	'<p id="address"> <span id="addSpan"><i class="far fa-building"></i></span>' + param[office_address] + '</p>' +
							   	     	  	    	 	'<p id="local"> <span id="locSpan"><i class="fas fa-mountain"></i></span>' + param[local_government] + '</p>' + 
							   	     	  	    	 	'<p id="agent_state"> <span id="agentSpan"><i class="fas fa-home"></i></span>' + param[state] + '</p>' +
							   	     	  	    	 '</div>' +
							   	     	  	       '</div>';
							   	     	  	            comp = comp + component;
	                                            }

							   	     	  	    for(var i=0; i < data.data.length; i++){
                                                    useData(data.data[i]);
                                                    if (i + 1 == data.data.length) {
                                                    	showElems()
                                                    	break;
                                                    }
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

        	    var searchForm = document.getElementsByClassName('searchForm')[0];
                searchForm.onsubmit = function(){
                	 event.preventDefault();
                	 var searchForm = document.getElementsByClassName('searchForm')[0];
                	 var formData = new FormData(searchForm);
                	 searchAgent(formData);
                	 getProperties();  //On big screen this properties should show on the left
                	 // if otherwise it will not show!
                }

            function checkForEmailandPassword(param){
                     const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                     var password = document.getElementById('name').value;
                     var email = document.getElementById('pass').value;
                     document.getElementById('pass1').value = password;
                     document.getElementById('name1').value = email;

		        	 var xhttp = new XMLHttpRequest();
		        	       xhttp.open('POST', '/signupAgent', true);
		        	       xhttp.onreadystatechange = function() {
		        	       	    if (this.readyState == 4 && this.status == 200) {
		        	       	    	console.log('something is wrong');
		        	       	    	var data = JSON.parse(this.responseText)
		        	       	    	      console.log(data);
		        	       	    	      if (data.data == true) {
		        	       	    	      	 var theForm = document.getElementsByClassName('actualForm')[0];

		        	       	    	      	 theForm.submit();
		        	       	    	      }

		        	       	    	      if (data.data == false) {
                                             var warning = document.getElementById('wan');
                                             warning.style.display = 'block';

                                             setTimeout(function(){
           										warning.style.display = 'none';
                                             }, 2000);
		        	       	    	      }
		        	       	    }
		        	       }

		        	       xhttp.setRequestHeader('X-CSRF-TOKEN', theToken);
		                   xhttp.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
		                   xhttp.setRequestHeader("processData", 'false');
		                   xhttp.setRequestHeader('cache', 'false');
		                   xhttp.setRequestHeader("ContentType", "application/json");
		                   xhttp.send(param);
        	}

        	function checkLoginCredentials(param){
                     const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                     var password = document.getElementById('password').value;
                     var email = document.getElementById('email').value;
                     document.getElementById('pass1').value = password;
                     document.getElementById('name1').value = email;

		        	 const xhttp = new XMLHttpRequest();
		        	       xhttp.open('POST', '/loginAgent', true);
		        	       xhttp.onreadystatechange = function(){
		        	       	    if (this.readyState == 4 && this.status == 200) {
		        	       	    	const data = JSON.parse(this.responseText)
		        	       	    	      console.log(data);
		        	       	    	      if (data.data == true) {
		        	       	    	      	 var theForm = document.getElementsByClassName('actualForm')[0];
		        	       	    	      	 //document.getElementById('name1').value = data.data.email;
		        	       	    	      	 theForm.submit();
		        	       	    	      }

		        	       	    	      if (data.data == "Wrong Username or Password") {
		        	       	    	      	  var warning = document.getElementById('wan2');
                                                  warning.style.display = 'block';

	                                              setTimeout(function(){
	           										 warning.style.display = 'none';
	                                              }, 2000);
		        	       	    	      }

		        	       	    	      if (data.data == false) {
	                                          //console.log('this ran');
	                                          var warning = document.getElementById('wan3');
	                                              warning.innerHTML = 'user does not exist';
	                                              warning.style.display = 'block';

	                                              setTimeout(function(){
	                                                  warning.style.display = 'none';
	                                              }, 2000);
	                                     }
		        	       	    }
		        	       }

		        	       xhttp.setRequestHeader('X-CSRF-TOKEN', theToken);
		                   xhttp.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
		                   xhttp.setRequestHeader("processData", 'false');
		                   xhttp.setRequestHeader('cache', 'false');
		                   xhttp.setRequestHeader("ContentType", "application/json");
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

            function closeForm(){
            	var formModal = document.getElementsByClassName('login_form')[0];
            	    if (formModal.style.display == 'none') {
            	    	formModal.style.display = 'block';
            	    }else{
            	    	formModal.style.display = 'none';
            	    }
            }

            function closeForm2(){
            	var formModal = document.getElementsByClassName('signup_form')[0];
            	    if (formModal.style.display == 'none') {
            	    	formModal.style.display = 'block';
            	    }else{
            	    	formModal.style.display = 'none';
            	    }
            }

            function gotoSignUp(){
        		document.getElementsByClassName('signup_form')[0].style.display = 'block';
        	}

            
        	function gotoLogin(){
                     document.getElementsByClassName('login_form')[0].style.display = 'block';
        	}

        	    
        </script>
        <script src="{{ asset('js/localgovernments.js') }}"></script>
</body>
</html>