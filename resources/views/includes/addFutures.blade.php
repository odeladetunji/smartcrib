    <div class="upDateProps">
                  <i class="fas fa-window-close closeForm" onclick="quitForm('upDateProps')"></i>
                  <form name="thePropertyForm" class="updateForm" encType="multipart/form-data" method="POST" action="{{URL::to('/')}}">{{ csrf_field() }}
                              <label>List Your Properties</label>
                              
                              
                              <select name="category" id="" required>
                                    <option value="Property Category">Type of Property</option>
                                    <option value="For Rent">For Rent</option>
                                    <option value="For Sale">For Sale</option>
                                    <option value="Short Let">Short Let</option>
                                    <option value="Joint Venture">Joint Venture</option>
                                    <option value="Government Scheme">Government Scheme</option>
                                    <option value="Private Development Scheme">Private Development Scheme</option>
                              </select><br>
                        
                              <select id="" name="title" required>
                                    <option value="Type of Property">Type of Property</option>
                                    <option value="Land">Land</option>
                                    <option value="Detached House"> Detached House </option>
                                    <option value="Semi-Detached House">  Semi-Detached House</option>
                                    <option value="Tarraced">Tarraced House</option>
                                    <option value="Bungalow">Bungalow</option>
                                    <option value="Commercial Property">Commercial Property</option>
                                    <option value="Warehouse">Warehouse</option>
                                    <option value="Factory">Factory</option>
                                    <option value="Event Hall">Event Hall</option>
                                    <option value="Filling Stations">Filling Stations</option>
                                    <option value="School">School</option>
                                    <option value="Tank Farm">Tank Farm</option>
                              </select><br>
                              
                              <div class="size-of-property" style="display: flex;">
                                    <div class="size">
                                          <input type="number" max="100" min="1" placeholder="0" name="size">
                                    </div>
                                    <div>
                                      <select id="" name="measure">
                                          <option value="Hectare">Hectare</option>
                                          <option value="Arce">Arce</option>
                                          <option value="Plot">Plot</option>
                                          <option value="Square meter">Square meter</option>
                                      </select>
                                    </div>
                              </div><br>
                        <p class="theTitle fac">Property Title Document (Type)</p>
                        <div class="property-Document" style="display: flex;">
                                <div>
                                    <input type="checkbox" value="Federal C of O" name="Federal-C-of-O">
                                </div>
                                <div>
                                    <p>Federal C of O</p>
                                </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="State C of O" name="State-C-of-O">
                              </div>
                              <div>
                                    <p>State C of O</p>
                              </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Gazette" name="Gazette">
                              </div>
                              <div>
                                    <p>Gazette</p>
                              </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Survey Plan" name="Survey-Plan">
                              </div>
                              <div>
                                    <p>Survey Plan</p>
                              </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Family Receipt" name="Family-Receipt">
                              </div>
                              <div>
                                    <p>Family Receipt</p>
                              </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Registered Survey Plan" name="Registered-Survey-Plan">
                              </div>
                              <div>
                                    <p>Registered Survey Plan</p>
                              </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Registered Deed of Conveyance" name="Registered-Deed-of-Conveyance">
                              </div>
                              <div>
                                    <p>Registered Deed of Conveyance</p>
                              </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Registered Deed of Assignment" name="Registered-Deed-of-Assignment">
                              </div>
                              <div>
                                    <p>Registered Deed of Assignment</p>
                              </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                              <div>
                                    <input type='checkbox' value="Deed of Assignment" name="Deed-of-Assignment">
                              </div>
                              <div>
                                    <p>Deed of Assignment</p>
                              </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                              <div>
                                    <input type='checkbox' value="Deed of Conveyance" name="Deed-of-Conveyance">
                              </div>
                              <div>
                                    <p>Deed of Conveyance</p>
                              </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                              <div>
                                    <input type='checkbox' value="Governors Consent Letter" name="Governors-Consent-Letter">
                              </div>
                              <div>
                                    <p>Governors Consent Letter</p>
                              </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                              <div>
                                    <input type='checkbox' value="Approved Building Plan" name="Approved-Building-Plan">
                              </div>
                              <div>
                                    <p>Approved Building Plan</p>
                              </div>
                        </div>
                        <div class="property-Document" style="display: flex;">
                              <div>
                                    <input type='checkbox' value="others" name="others">        
                              </div>
                              <div>
                                    <p>others
                                    </p>
                              </div>
                        </div>

                        <div class="Space">
                              <p class="stage">2</p>
                        </div>
                        <p class="theTitle fac">Facilities that comes with Property</p>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Newly Built" name="Newly-Built">
                              </div>
                              <div>
                                    <p>Newly Built</p>
                              </div>
                        </div>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Newly Renovated" name="Newly-Renovated">
                              </div>
                              <div>
                                    <p>Newly Renovated</p>
                              </div>
                        </div>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="POP" name="POP">
                              </div>
                              <div>
                                    <p>POP</p>
                              </div>
                        </div>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" Value="Dilapidated" name="Dilapidated">
                              </div>
                              <div>
                                    <p>Dilapidated</p>
                              </div>
                        </div>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Fenced" name="Fenced">
                              </div>
                              <div>
                                    <p>Fenced</p>
                              </div>
                        </div>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Well Water" name="Well-Water">
                              </div>
                              <div>
                                    <p>Well Water</p>
                              </div>
                        </div>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Borehole" name="Borehole">
                              </div>
                              <div>
                                    <p>Borehole</p>
                              </div>
                        </div>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Gated Estate" name="Gated-Estate">
                              </div>
                              <div>
                                    <p>Gated Estate</p>
                              </div>
                        </div>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Security" name="Security">
                              </div>
                              <div>
                                    <p>Security</p>
                              </div>
                        </div>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Water Treatment Plant" name="Water-Treatment-Plant">
                              </div>
                              <div>
                                    <p>Water Treatment Plant</p>
                              </div>
                        </div>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="All Room Ensuite" name="All-Room-Ensuite">
                              </div>
                              <div>
                                    <p>All Room Ensuit</p>
                              </div>
                        </div>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="Ample parking Space" name="Ample-parking-Space">
                              </div>
                              <div>
                                    <p>Ample Parking Space</p>
                              </div>
                        </div>
                        <div class="facilities" style="display: flex;">
                              <div>
                                    <input type="checkbox" value="All others not Listed" name="All-others-not-Listed">
                              </div>
                              <div>
                                    <p>All others not listed</p>
                              </div>
                        </div>
                              
                      
                        <p class="theTitle fac">Quantities</p>
                              <div class="bedroomQuantity" style="display: flex;">
                                         <div class="bedroom">
                                          <input type="number" max="200" min="1" placeholder="0" name="bedroom">
                                         </div>
                                         <div>
                                          <p>Bedroom</p>
                                         </div>
                              </div>
                              <div class="units" style="display: flex;">
                                     <div class="noofunits">
                                          <input type="number" max="200" min="1" placeholder="0" name="units">
                                     </div>
                                     <div>
                                          <p>Unit</p>
                                     </div>
                              </div>

                              <div class="price">
                                    <p>Price</p>
                              <input type="number" placeholder="$2,000" name="price">
                              </div>
                             
                             <p class="localhead">Adress of Property</p>
                             <select id="" name="state" onchange="useSelectedItem(this)" required>
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
                              
                              <select id="myLocal" name="local-government" required>
                                    <!--<option value="" id="optG">LGA</option>-->
                              </select>

                              <input type="telephone" name="telephone" placeholder="Telephone" class="add" required>
                              <input type="text" name="owners-name" placeholder="Owners Name" class="add" required>
                              <input type="text" name="address" placeholder="Street address 1" required class="add bot" id="addressValue">           
                              <textarea name="short-note" id="" placeholder="Short note about property (other info you want clients to know)"></textarea required>
                              <p class="localhead">Pictures Of Property</p>
                              <h6>select cover picture</h6>
                              <input type="file" name="coverpicture" required class="pictures"> 
                              <h6>select other property view</h6>
                              <input type="file" name="otherpictures[]" required  class="pictures" id="" multiple>
                              <button>submit</button>
                        </form>
        </div>