// google map api

  function concatAddress(){
       var stateValue = document.getElementById('theStates').value;
       var loGv = document.getElementById('locaGv').value;
       var addressValue = document.getElementById('addressValue').value;
       return addressValue.concat(',').concat(' ').concat(loGv).concat(',')
              .concat(' ').concat(stateValue).concat(',').concat(' ')
              .concat('Nigeria');
  }

  function concatSearchedAddress(){
  	  var state = document.getElementById('theStates').value;
  	  var locaGv = document.getElementById('locaGv_for_search').value;
  	  return locaGv.concat(',').concat(' ').concat('state').concat(',').concat(' ')
  	          .concat('Nigeria');
  }

  var geocoder;
  var map;

  function initialize() {
    geocoder = new google.maps.Geocoder();

    map = new google.maps.Map(document.getElementById('map'), {
		  center : {lat: 6.465422, lng: 3.406448},
		  zoom: 14
    });
    console.log('map was initialized ....');
  }

  function cityMap(concatedLocation, callback){
  	  geocoder.geocode( {'address': concatedLocation}, function(results, status){
  	  	  if (status == 'OK') {
  	  	  	      console.log();
  	  	  	      
	              var latlng = new google.maps.LatLng(results[0].geometry.location.lat(),
	                  results[0].geometry.location.lng());
			      var mapOptions = {
			          zoom: 16,
			          center: latlng
			      }

			      map = new google.maps.Map(document.getElementById('map'), mapOptions);

			      callback(map, results[0]);
  	  	  }else{
  	  	  	 console.log('CityMap() Function ....');
  	  	  	 console.log('geocode was not suceefully');
  	  	  	 console.lo('initializing Geocoder again ...');
  	  	  	 cityMap(concatedLocation, callback);
  	  	  }
  	  });
  }

  function codeAddress(callback) {
    geocoder.geocode( { 'address': concatAddress()}, function(results, status) {
      if (status == 'OK') {
        /* map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        }); */
           callback(results[0]);

      } else {
        //alert('Geocode was not successful for the following reason: ' + status);
          console.log('codeAddress() Function ....');
  	  	  console.log('geocode was not suceefully');
  	  	  console.lo('initializing Geocoder again ...');
          codeAddress(callback);
      }
    });
  }

  function codeSearchedAddress(callback) {
    geocoder.geocode( { 'address': concatSearchedAddress()}, function(results, status) {
      if (status == 'OK') {
          var latlng = new google.maps.LatLng(results[0].geometry.location.lat(),
              results[0].geometry.location.lng());
	      var mapOptions = {
	          zoom: 16,
	          center: latlng
	      }

	      map = new google.maps.Map(document.getElementById('map'), mapOptions);

	      callback(map, results[0]);
      } else {
           codeSearchedAddress(callback);
      }
    });
  }
