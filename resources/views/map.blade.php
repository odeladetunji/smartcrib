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
        <link href="/CSS/map.css" rel="stylesheet" type="text/css">
</head>
<body>
	  <div class="row header">
	  	
	  </div>
	  <div class="row">
	  	   <div class="col-sm-6 map">
	  	   	   
	  	   </div>
	  	   <div class="col-sm-6 prop">
	  	   	   
	  	   </div>
	  </div>
      <script type="text/JavaScript">
      	    window.load = function(){
      	    	     const theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
		        	 const xhttp = new XMLHttpRequest();
		        	       xhttp.open('GET', '/', true);
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

      </script>
</body>
</html>