function editThisProperty(param){
	   document.getElementsByClassName('askQuestion')[0].style.display = 'none';
       console.log('/////////////');
	   function outputHTML(){
           var parentElem = document.getElementsByClassName('prop_param')[0];
               parentElem.innerHTML = '<div>' + facilities + '</div>' + '<div>' + title_document + '</div>';
               console.log('code got here');
               document.getElementsByClassName('editModal')[0].style.display = 'block';
	   }
     
       var title_document = '';
       var facilities = '';
	   function useObject(param){
	          for(x in param){
	                  if (x == 'newly_built' && param[x] != null) {
                      var each_Facilities = 
                          '<p>Newly Built</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      facilities = facilities + each_Facilities;
                  }

                  if (x == 'newly_renovated' && param[x] != null) {
                      var each_Facilities = 
                         '<p>Newly Renovated</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                     facilities = facilities + each_Facilities;
                  }

                  if (x == 'pop' && param[x] != null) {
                      var each_Facilities = 
                         '<p>POP</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      facilities = facilities + each_Facilities;
                  }

                  if (x == 'dilapidated' && param[x] != null) {
                      var each_Facilities = 
                          '<p>Dilapidated</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      facilities = facilities + each_Facilities;
                  }

                   if (x == 'fenced' && param[x] != null) {
                      var each_Facilities = 
	                     '<p>Fenced</p>' +
	                     '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                     facilities = facilities + each_Facilities;
                  }

                  if (x == 'well_water' && param[x] != null) {
                      var each_Facilities = 
                           '<p>Well Water</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      facilities = facilities + each_Facilities;
                  }

                  if (x == 'borehole' && param[x] != null) {
                      var each_Facilities = 
                           '<p>Borehole</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      facilities = facilities + each_Facilities;
                  }

                  if (x == 'gated_estate' && param[x] != null) {
                      var each_Facilities = 
                          '<p>Gated Estate</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      facilities = facilities + each_Facilities;
                  }


                   if (x == 'security' && param[x] != null) {
                      var each_Facilities = 
                           '<p>Security</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      facilities = facilities + each_Facilities;
                  }

                  if (x == 'water_treatment_plant' && param[x] != null) {
                      var each_Facilities = 
                          '<p>Water Treatment Plant</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      facilities = facilities + each_Facilities;
                  }

                  if (x == 'all_room_ensuit' && param[x] != null) {
                      var each_Facilities = 
                          '<p>All Room Ensuit</p>' +
	                      '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      facilities = facilities + each_Facilities;
                  }

                  if (x == 'ample_parking_space' && param[x] != null) {
                      var each_Facilities = 
                          '<p>Ample Parking Space</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      facilities = facilities + each_Facilities;
                  }


                   //////////////////////////////////

                 if(x == 'fed_c_of_o' && param[x] != null){
                      var prop_document = 
                            '<p>Federal C of O</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      title_document = title_document + prop_document;
                  }

                  if(x == 'state_c_of_o' && param[x] != null){
                      var prop_document = 
                          '<p>State C of O</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      title_document = title_document + prop_document;
                  }

                  if(x == 'gazette' && param[x] != null){
                      var prop_document = 
                           '<p>Gazette</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      title_document = title_document + prop_document;
                  }

                   if(x == 'survey_plan' && param[x] != null){
                      var prop_document = 
                           '<p>Survey Plan</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      title_document = title_document + prop_document;

                          // title_document = title_document + prop_document;
                  }

                   if(x == 'family_reciept' && param[x] != null){
                      var prop_document = 
                           '<p>Family Reciept</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      title_document = title_document + prop_document;
                  }

                  if(x == 'registered_survey_plan' && param[x] != null){
                      var prop_document = 
                            '<p>Registered Survey Plan</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      title_document = title_document + prop_document;
                  }

                  if(x == 'registered_deed_of_conveyance' && param[x] != null){
                      var prop_document = 
                           '<p>Registered Deed of Conveyance</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      title_document = title_document + prop_document;
                  }

                   if(x == 'registered_deed_of_assignment' && param[x] != null){
                      var prop_document = 
                            '<p>Registered deed of Assignment</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      title_document = title_document + prop_document;
                  }

                   if(x == 'deed_of_assignment' && param[x] != null){
                      var prop_document = 
                             '<p>Deed of Assignment</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      title_document = title_document + prop_document;
                  }

                  if(x == 'deed_of_conveyance' && param[x] != null){
                      var prop_document = 
                          '<p>Deed of Conveyance</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      title_document = title_document + prop_document;
                  }

                  if(x == 'governors_consent_letter' && param[x] != null){
                      var prop_document = 
                          '<p>Governors Consent Letter</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      title_document = title_document + prop_document;
                  }

                  if(x == 'approved_building_plan' && param[x] != null){
                      var prop_document = 
                           '<p>Approved Building plan</p>' +
	                       '<button id="' + param + "|" + "" + '" onclick="updateThisProp(this.id)">Delete</button><hr />';
	                      title_document = title_document + prop_document;
                  }


	          }
	   }

	   if (typeof proplistStore == 'object') {
	         //console.log('condition met!');
	         for (var i = 0; i < proplistStore.length; i++) {
	             if (proplistStore[i]['identity'] == param) {
	                 useObject(proplistStore[i]);
	             }

	             if (proplistStore.length == i + 1) {
	             	 outputHTML();
	             }
	         } 

	         // document.getElementsByClassName('askQuestion')[0].style.display = 'none';

	   }

	   function updateThisProp(param){
	   	   var formData = new FormData(param.split('|')[1], param.split('|')[0]);
	   	   smartCribServer(method, "/updateMyProperty", formData, type1, theToken);
	   }
                  
}