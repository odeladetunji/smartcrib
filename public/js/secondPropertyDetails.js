function displayThisProperty(param){
                		//document.querySelector(".custom-modal-wrapper").style.display = "block";
                function usePropStore(param){
                	 	 var ul = '<ul class="ul_of_props">';
                	 	 var counter = 0;
                	 	 var microImages = '';
                     var facilities = '';
                     var title_document = '';

                         for(x in param){
                         	  counter++;
                              if (x.indexOf('otherpicture') !=  -1) {
                              	  if (param[x] == null) {
                                      ul = ul + '</ul>';
                                    // emptying the div content first!
                                    document.getElementsByClassName('pictures_section')[0].innerHTML = '';
                                    document.getElementsByClassName('facilities_with_props')[0].innerHTML = '';
                                    document.getElementsByClassName('propTitle_documents')[0].innerHTML = '';

                                    // populating thier content again!
	                              	  document.getElementsByClassName('pictures_section')[0].innerHTML = ul;
                                    document.getElementsByClassName('facilities_with_props')[0].innerHTML = '<h6 class="last_heading">Facilities of Properties</h6>'.concat(facilities);
                                    document.getElementsByClassName('propTitle_documents')[0].innerHTML = '<h6 class="last_heading">Title Documents</h6>'.concat(title_document);
                                   
	                              	  //document.getElementsByClassName('picture_tray')[0].innerHTML = microImages;
                                    if (typeof proplistStore == 'object') {
                                       document.getElementsByClassName('details')[0].style.display = 'block';
                                       document.getElementsByClassName('listedProps')[0].style.display = 'none';
                                       continue;
                                    }

	                              	  document.getElementsByClassName('custom-modal-wrapper')[0].style.display = 'block';
	                              	      continue;
                              	  } 

                              	  var li = '<li style="background-image: url(/storage/images/' + param[x] + ')" class="other_images"></li>';
                                  ul = ul + li;

               

                                  document.getElementById('no_of_units').innerHTML = param['units'] + ' ' + 'units';
                                  document.getElementById('forbedroom').innerHTML = param['bedroom'] + ' ' + 'bedroom';
                                  document.getElementById('forprice').innerHTML = 'N'.concat(param['price']);
                                  document.getElementById('foraddress').innerHTML = param['address'];
                                  document.getElementById('forlocaGv').innerHTML = param['local_government'];
                                  document.getElementById('forstate').innerHTML = param['state_property_is_located'];
                                  document.getElementById('forsize').innerHTML = param['size'];
                                  document.getElementById('formeasure').innerHTML = param['measure'];
                                  document.getElementById('category_value').innerHTML = param['category'];
                                  document.getElementById('propType').innerHTML = param['title'];


                                  // var micro = '<li style="background-image: url(/storage/images/' + param[x] + ')" class=""></li>';
                                  // microImages = microImages + micro;

                              }

                               // this section of code is to check for facilities that are available with respect to
                // a particular listing    ..........................................................
                
                                  if (x == 'newly_built' && param[x] != null) {
                                      var each_Facilities = 
                                         '<div style="display: flex;" class="propContainer">' +
                                             '<div class="an_icon">' + 
                                                  '<i class="fas fa-home"></i>' +
                                             '</div>'+
                                             '<div class="actual_content">' + 
                                                 //'<p class="propHeading">' + '</p>' +
                                                 '<p class="propContent">' + param[x] + '</p>' +
                                             '</div>' +
                                         '</div>';

                                       facilities = facilities + each_Facilities;
                                  }

                                  if (x == 'newly_renovated' && param[x] != null) {
                                      var each_Facilities = 
                                         '<div style="display: flex;" class="propContainer">' +
                                             '<div class="an_icon">' + 
                                                  '<i class="fas fa-home"></i>' +
                                             '</div>'+
                                             '<div class="actual_content">' + 
                                                 //'<p class="propHeading">' + '</p>' +
                                                 '<p class="propContent">' + param[x] + '</p>' +
                                             '</div>' +
                                         '</div>';

                                       facilities = facilities + each_Facilities;
                                  }

                                  if (x == 'pop' && param[x] != null) {
                                      var each_Facilities = 
                                         '<div style="display: flex;" class="propContainer">' +
                                             '<div class="an_icon">' + 
                                                  '<i class="fas fa-home"></i>' +
                                             '</div>'+
                                             '<div class="actual_content">' + 
                                                 //'<p class="propHeading">' + '</p>' +
                                                 '<p class="propContent">' + param[x] + '</p>' +
                                             '</div>' +
                                         '</div>';

                                       facilities = facilities + each_Facilities;
                                  }

                                  if (x == 'dilapidated' && param[x] != null) {
                                      var each_Facilities = 
                                         '<div style="display: flex;" class="propContainer">' +
                                             '<div class="an_icon">' + 
                                                  '<i class="fas fa-home"></i>' +
                                             '</div>'+
                                             '<div class="actual_content">' + 
                                                 //'<p class="propHeading">' + '</p>' +
                                                 '<p class="propContent">' + param[x] + '</p>' +
                                             '</div>' +
                                         '</div>';

                                       facilities = facilities + each_Facilities;
                                  }

                                   if (x == 'fenced' && param[x] != null) {
                                      var each_Facilities = 
                                         '<div style="display: flex;" class="propContainer">' +
                                             '<div class="an_icon">' + 
                                                  '<i class="fas fa-home"></i>' +
                                             '</div>'+
                                             '<div class="actual_content">' + 
                                                 //'<p class="propHeading">' + '</p>' +
                                                 '<p class="propContent">' + param[x] + '</p>' +
                                             '</div>' +
                                         '</div>';

                                       facilities = facilities + each_Facilities;
                                  }

                                  if (x == 'well_water' && param[x] != null) {
                                      var each_Facilities = 
                                         '<div style="display: flex;" class="propContainer">' +
                                             '<div class="an_icon">' + 
                                                  '<i class="fas fa-home"></i>' +
                                             '</div>'+
                                             '<div class="actual_content">' + 
                                                 //'<p class="propHeading">' + '</p>' +
                                                 '<p class="propContent">' + param[x] + '</p>' +
                                             '</div>' +
                                         '</div>';

                                       facilities = facilities + each_Facilities;
                                  }

                                  if (x == 'borehole' && param[x] != null) {
                                      var each_Facilities = 
                                         '<div style="display: flex;" class="propContainer">' +
                                             '<div class="an_icon">' + 
                                                  '<i class="fas fa-home"></i>' +
                                             '</div>'+
                                             '<div class="actual_content">' + 
                                                 //'<p class="propHeading">' + '</p>' +
                                                 '<p class="propContent">' + param[x] + '</p>' +
                                             '</div>' +
                                         '</div>';

                                       facilities = facilities + each_Facilities;
                                  }

                                  if (x == 'gated_estate' && param[x] != null) {
                                      var each_Facilities = 
                                         '<div style="display: flex;" class="propContainer">' +
                                             '<div class="an_icon">' + 
                                                  '<i class="fas fa-home"></i>' +
                                             '</div>'+
                                             '<div class="actual_content">' + 
                                                 //'<p class="propHeading">' + '</p>' +
                                                 '<p class="propContent">' + param[x] + '</p>' +
                                             '</div>' +
                                         '</div>';

                                       facilities = facilities + each_Facilities;
                                  }


                                   if (x == 'security' && param[x] != null) {
                                      var each_Facilities = 
                                         '<div style="display: flex;" class="propContainer">' +
                                             '<div class="an_icon">' + 
                                                  '<i class="fas fa-home"></i>' +
                                             '</div>'+
                                             '<div class="actual_content">' + 
                                                 //'<p class="propHeading">' + '</p>' +
                                                 '<p class="propContent">' + param[x] + '</p>' +
                                             '</div>' +
                                         '</div>';

                                       facilities = facilities + each_Facilities;
                                  }

                                  if (x == 'water_treatment_plant' && param[x] != null) {
                                      var each_Facilities = 
                                         '<div style="display: flex;" class="propContainer">' +
                                             '<div class="an_icon">' + 
                                                  '<i class="fas fa-home"></i>' +
                                             '</div>'+
                                             '<div class="actual_content">' + 
                                                 //'<p class="propHeading">' + '</p>' +
                                                 '<p class="propContent">' + param[x] + '</p>' +
                                             '</div>' +
                                         '</div>';

                                       facilities = facilities + each_Facilities;
                                  }

                                  if (x == 'all_room_ensuit' && param[x] != null) {
                                      var each_Facilities = 
                                         '<div style="display: flex;" class="propContainer">' +
                                             '<div class="an_icon">' + 
                                                  '<i class="fas fa-home"></i>' +
                                             '</div>'+
                                             '<div class="actual_content">' + 
                                                // '<p class="propHeading">' + '</p>' +
                                                 '<p class="propContent">' + param[x] + '</p>' +
                                             '</div>' +
                                         '</div>';

                                       facilities = facilities + each_Facilities;
                                  }

                                  if (x == 'ample_parking_space' && param[x] != null) {
                                      var each_Facilities = 
                                         '<div style="display: flex;" class="propContainer">' +
                                             '<div class="an_icon">' + 
                                                  '<i class="fas fa-home"></i>' +
                                             '</div>'+
                                             '<div class="actual_content">' + 
                                                 //'<p class="propHeading">' + '</p>' +
                                                 '<p class="propContent">' + param[x] + '</p>' +
                                             '</div>' +
                                         '</div>';

                                       facilities = facilities + each_Facilities;
                                  }


               //  checking for type of documents in this section ...........................
               //............................................................................
               //  I had to seperate the entire code into this page because it was too lengthy


                                  if(x == 'fed_c_of_o' && param[x] != null){
                                      var prop_document = 
                                            '<div class="titleDocument">' +
                                                 '<div class="forIcon">' +
                                                     '<i class="fas fa-file-alt"></i>' +
                                                 '</div>' + 
                                                 '<div class="documentValue">' +
                                                     '<p>' + param[x] + '</p>' +
                                                 '</div>' +
                                            '</div>';

                                          title_document = title_document + prop_document;
                                  }

                                  if(x == 'state_c_of_o' && param[x] != null){
                                      var prop_document = 
                                            '<div class="titleDocument">' +
                                                 '<div class="forIcon">' +
                                                     '<i class="fas fa-file-alt"></i>' +
                                                 '</div>' + 
                                                 '<div class="documentValue">' +
                                                     '<p>' + param[x] + '</p>' +
                                                 '</div>' +
                                            '</div>';

                                          title_document = title_document + prop_document;
                                  }

                                  if(x == 'gazette' && param[x] != null){
                                      var prop_document = 
                                            '<div class="titleDocument">' +
                                                 '<div class="forIcon">' +
                                                     '<i class="fas fa-file-alt"></i>' +
                                                 '</div>' + 
                                                 '<div class="documentValue">' +
                                                     '<p>' + param[x] + '</p>' +
                                                 '</div>' +
                                            '</div>';

                                          title_document = title_document + prop_document;
                                  }

                                   if(x == 'survey_plan' && param[x] != null){
                                      var prop_document = 
                                            '<div class="titleDocument">' +
                                                 '<div class="forIcon">' +
                                                     '<i class="fas fa-file-alt"></i>' +
                                                 '</div>' + 
                                                 '<div class="documentValue">' +
                                                     '<p>' + param[x] + '</p>' +
                                                 '</div>' +
                                            '</div>';

                                          title_document = title_document + prop_document;
                                  }

                                   if(x == 'family_reciept' && param[x] != null){
                                      var prop_document = 
                                            '<div class="titleDocument">' +
                                                 '<div class="forIcon">' +
                                                     '<i class="fas fa-file-alt"></i>' +
                                                 '</div>' + 
                                                 '<div class="documentValue">' +
                                                     '<p>' + param[x] + '</p>' +
                                                 '</div>' +
                                            '</div>';

                                          title_document = title_document + prop_document;
                                  }

                                  if(x == 'registered_survey_plan' && param[x] != null){
                                      var prop_document = 
                                            '<div class="titleDocument">' +
                                                 '<div class="forIcon">' +
                                                     '<i class="fas fa-file-alt"></i>' +
                                                 '</div>' + 
                                                 '<div class="documentValue">' +
                                                     '<p>' + param[x] + '</p>' +
                                                 '</div>' +
                                            '</div>';

                                          title_document = title_document + prop_document;
                                  }

                                  if(x == 'registered_deed_of_conveyance' && param[x] != null){
                                      var prop_document = 
                                            '<div class="titleDocument">' +
                                                 '<div class="forIcon">' +
                                                     '<i class="fas fa-file-alt"></i>' +
                                                 '</div>' + 
                                                 '<div class="documentValue">' +
                                                     '<p>' + param[x] + '</p>' +
                                                 '</div>' +
                                            '</div>';

                                          title_document = title_document + prop_document;
                                  }

                                   if(x == 'registered_deed_of_assignment' && param[x] != null){
                                      var prop_document = 
                                            '<div class="titleDocument">' +
                                                 '<div class="forIcon">' +
                                                     '<i class="fas fa-file-alt"></i>' +
                                                 '</div>' + 
                                                 '<div class="documentValue">' +
                                                     '<p>' + param[x] + '</p>' +
                                                 '</div>' +
                                            '</div>';

                                          title_document = title_document + prop_document;
                                  }

                                   if(x == 'deed_of_assignment' && param[x] != null){
                                      var prop_document = 
                                            '<div class="titleDocument">' +
                                                 '<div class="forIcon">' +
                                                     '<i class="fas fa-file-alt"></i>' +
                                                 '</div>' + 
                                                 '<div class="documentValue">' +
                                                     '<p>' + param[x] + '</p>' +
                                                 '</div>' +
                                            '</div>';

                                          title_document = title_document + prop_document;
                                  }

                                  if(x == 'deed_of_conveyance' && param[x] != null){
                                      var prop_document = 
                                            '<div class="titleDocument">' +
                                                 '<div class="forIcon">' +
                                                     '<i class="fas fa-file-alt"></i>' +
                                                 '</div>' + 
                                                 '<div class="documentValue">' +
                                                     '<p>' + param[x] + '</p>' +
                                                 '</div>' +
                                            '</div>';

                                          title_document = title_document + prop_document;
                                  }

                                  if(x == 'governors_consent_letter' && param[x] != null){
                                      var prop_document = 
                                            '<div class="titleDocument">' +
                                                 '<div class="forIcon">' +
                                                     '<i class="fas fa-file-alt"></i>' +
                                                 '</div>' + 
                                                 '<div class="documentValue">' +
                                                     '<p>' + param[x] + '</p>' +
                                                 '</div>' +
                                            '</div>';

                                          title_document = title_document + prop_document;
                                  }

                                   if(x == 'approved_building_plan' && param[x] != null){
                                      var prop_document = 
                                            '<div class="titleDocument">' +
                                                 '<div class="forIcon">' +
                                                     '<i class="fas fa-file-alt"></i>' +
                                                 '</div>' + 
                                                 '<div class="documentValue">' +
                                                     '<p>' + param[x] + '</p>' +
                                                 '</div>' +
                                            '</div>';

                                          title_document = title_document + prop_document;
                                  }
                              
                         }
                	 }


                   if (typeof proplistStore == 'object') {
                         console.log('condition met!');
                         console.log(proplistStore);
                         for (var i = 0; i < proplistStore.length; i++) {
                              if (proplistStore[i]['identity'] == param) {
                                 console.log('condition passed!');
                                 usePropStore(proplistStore[i]);
                              }
                              
                              if (proplistStore.length == i + 1) {
                                break;
                              }
                         } 

                         document.getElementsByClassName('askQuestion')[0].style.display = 'none';

                   }
                      
                   if (propStore != undefined) {
                       for (var i = 0; i < propStore[city].length; i++) {
                            if (propStore[city][i]['identity'] == param) {
                               usePropStore(propStore[city][i]);
                            }
                       }  

                       document.getElementsByClassName('menuIcon')[0].style.display = 'none';
                   }
  }
