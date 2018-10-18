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
        <!--<link href="/CSS/home.css" rel="stylesheet" type="text/css">---->
</head>
<body>
	   <div>
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
	   	     <div class="row banner">
	   	     	<div class="col-sm-12 bannerContent">
	   	     		 <h1>Let's go Home</h1>
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
	   	     <div class="row">
	   	     	 <div class="col-sm-6 login">
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
	   	     	 <div class="col-sm-6 description">
	   	     	 	 <p>something</p>
	   	     	 </div>
	   	     </div>
	   	      <div class="row">
	   	     	 <div class="col-sm-6 login">
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
	   	     	 <div class="col-sm-6 description">
	   	     	 	 <p>something</p>
	   	     	 </div>
	   	     </div>
	   	     <div class="theFooter">
	   	     	<ul>
	   	     		<li>About Us</li>
	   	     		<li>Our Contacts</li>
	   	     	</ul>
	   	     	<p>Terms and Policies</p>
	   	     </div>
	  
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
                window.location = '/login';
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
        		//window.location = '/signup';
        	}

        	function searchForInput(param){
        		var input = document.getElementById('input-Text').value;
                switch(param.innerHTML){
                   case Continue:
                      
                   case Search:
                      getProperties(input);
                }
        	}

        </script>
</body>
</html>