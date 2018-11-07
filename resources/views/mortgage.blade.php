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
	   	     	    </ul>
	   	     	</div>
	   	     </div>
	   	    
	   	     <div class="theFooter">
	   	     	<ul>
	   	     		<li>About Us</li>
	   	     		<li>Our Contacts</li>
	   	     	</ul>
	   	     	<p>Terms and Policies</p>
	   	     </div>
	  
        <script>
        	// dont forget to use babal script!
        	    var regForm = document.getElementsByClassName('reg-Form')[0];
        	    regForm.onsubmit = function(){
        	    	event.preventDefault();
 					checkIfPropertyExit();
        	    }

        		function checkIfPropertyExit(){
        			 var email = document.getElementById('email').value;
        			 var password = document.getElementById('password').value;
        			 var type = document.getElementById('type').value;

        			 // setting the hidden form!
        			 document.getElementById('email1').value = email;
        			 document.getElementById('password1').value = password;
        			 document.getElementById('type1').value = type;

        	         var formData = new FormData(regForm);
	        	 	 var theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
		        	 var xhttp = new XMLHttpRequest();
		        	       xhttp.open('POST', '/checkIfPropertyExit', true);
		        	       xhttp.onreadystatechange = () => {
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
		                   xhttp.send();

        	    }

        	   // loadContent();
       


        </script>
</body>
</html>