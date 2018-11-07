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
                     document.getElementById('password1').value = password;
                     document.getElementById('email1').value = email;

		        	 const xhttp = new XMLHttpRequest();
		        	       xhttp.open('POST', '/login', true);
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

        	function gotoSignUp(){
        		document.getElementsByClassName('signup_form')[0].style.display = 'block';
        	}

        	