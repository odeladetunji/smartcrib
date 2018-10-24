// google map api

  function concatAddress(){
       var stateValue = document.getElementById('theStates').value;
       var loGv = document.getElementById('locaGv').value;
       var addressValue = document.getElementById('addressValue').value;
       return addressValue.concat(',').concat(' ').concat(loGv).concat(',')
              .concat(' ').concat(stateValue).concat(',').concat(' ')
              .concat('Nigeria');
  }

 
  var geocoder;
  var map;

  function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(6.5244, 3.3792);
    var mapOptions = {
      zoom: 8,
      center: latlng
    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
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
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }


/* <div id="map" style="width: 320px; height: 480px;"></div>
  <div>
    <input id="address" type="textbox" value="Sydney, NSW">
    <input type="button" value="Encode" onclick="codeAddress()">
  </div>
</body> */