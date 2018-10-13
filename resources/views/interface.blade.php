<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Smart-Crib</title>
        <base href="http://127.0.0.1:8000/">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="/CSS/home.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="/bootstrap/js/bootstrap.min.js" type="text/JavaScript"></script>
        <!-- JQuery -->
        <script src="/js/jquery-3.2.1.min(first).js" type='text/JavaScript'></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
	   	     <div class="row">
	   	     	<div class="col-sm-12">

	   	     		 <form action="" class="reg-Form">
	   	     		 	   <p>signup</p>
	   	     		 	   <input type="text" placeholder="Enter Your email" id="email">
	   	     		 	   <input type="text" placeholder="Enter Your Password" id="password">
	   	     		 	   <select name="" id="type">
	   	     		 	   	    <option value="NILL" id="type">NILL</option>
	   	     		 	   	    <option value="Real Estate Agent">Real Estate Agent</option>
	   	     		 	   	    <option value="Landlord">Landlord</option>
	   	     		 	   </select>
	   	     		 	   <button>submit</button>
	   	     		 </form><br>
	   	     		 <form action="" class="createUser">
	   	     		 	   <input type="text" placeholder="Enter Your email" id="email1">
	   	     		 	   <input type="text" placeholder="Enter Your Password" id="password1">
	   	     		 	   <select name="" id="" id="type1">
	   	     		 	   	    <option value="NILL">NILL</option>
	   	     		 	   	    <option value="Real Estate Agent">Estate Agent</option>
	   	     		 	   	    <option value="Landlord">Landlord</option>
	   	     		 	   </select>
	   	     		 	   <button>submit</button>
	   	     		 </form>
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