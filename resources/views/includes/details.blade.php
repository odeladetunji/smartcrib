<!-- <div class="custom-modal-wrapper">
	  	<div class="custom-wrapper"> -->
	  			<div class="row propRow">
	  				<div class="col-md-6 pixCont">
	  					<i class="fas fa-window-close closeDetails" onclick="closePropDetails()"></i>
	  					<div class="pictures_section">
	  	   	  	              
	  	   	            </div>
	  	   	            <div class="picture_tray">
	  	   	  	 
	  	   	            </div>
	  				</div>
	  				<div class="col-md-4 pixCont midsection">
	  					 <div class="prop_facilities">
	  					 	      <div>
	  					 	      	 <h6>Quantity</h6>
                                    <div style="display: flex;">
			  	   	  	              	   <div class="left_part">
			  	   	  	              	   	   <p id="no_of_units">units</p>
			  	   	  	              	   </div>
			  	   	  	              	   <div class="right_part">
			  	   	  	              	   	   <p id="forbedroom"></p>
			  	   	  	              	   </div>
		  	   	  	                 </div>
		  	   	  	                 <h6>Price of Property</h6>
	  					 	      	 <div style="display: flex;">
			  	   	  	              	   <div class="left_part">
			  	   	  	              	   	   <i class="fas fa-money-bill-alt"></i>
			  	   	  	              	   </div>
			  	   	  	              	   <div class="right_part">
			  	   	  	              	   	   <p id="forprice"></p>
			  	   	  	              	   </div>
		  	   	  	                 </div>
	  					 	      </div>
		  	   	  	              <h6>Address of Property</h6>
		  	   	  	              <div style="display: flex;">
		  	   	  	              	 <div class="left_part">
		  	   	  	              	 	<i class="fas fa-address-book"></i>
		  	   	  	              	 </div>
		  	   	  	              	 <div class="right_part">
		  	   	  	              	 	<p id="foraddress"></p>
		  	   	  	              	 </div>
		  	   	  	              </div>

		  	   	  	              <div style="display: flex;">
		  	   	  	              	   <div class="left_part">
		  	   	  	              	   	   <i class="fas fa-thumbtack"></i>
		  	   	  	              	   </div>
		  	   	  	              	   <div class="right_part">
		  	   	  	              	   	   <p id="forlocaGv"></p>
		  	   	  	              	   	   <p id="forstate"></p>
		  	   	  	              	   </div>
		  	   	  	              </div>
		  	   	  	              <h6>Category</h6>
		  	   	  	              <p id="category_value" style="padding-left: 10px;"></p>
		  	   	  	              <h6>Type of Property</h6>
		  	   	  	              <p id="propType" style="padding-left: 10px;"></p>
		  	   	  	              <h6>size of property</h6>
		  	   	  	              
		  	   	  	              <div style="display: flex;">
		  	   	  	              	   <div class="left_part">
		  	   	  	              	   	   <p id="forsize"></p>
		  	   	  	              	   </div>
		  	   	  	              	   <div class="right_part">
		  	   	  	              	   	   <p id="formeasure"></p>
		  	   	  	              	   </div>
		  	   	  	              </div>
		  	   	         </div>
		  	   	         <div class="facilities_with_props">
		  	   	         	  
		  	   	         </div>
		  	   	         <div class="propTitle_documents">
		  	   	         	
		  	   	         </div>
	  				</div>
	  				<div class="col-md-2 pixCont">
	  					<div class="property_hanler">
				  	   	  	  <form name="contactAgent" class="contact_agent" encType="multipart/form-data" method="POST" action="{{URL::to('/searchDB')}}" >{{ csrf_field() }}
				  	   	  	  	 
				  	   	  	  	 <input type="text" placeholder="your fullname">
				  	   	  	  	 
				  	   	  	  	 <input type="number" placeholder="000-0000-0000">
				  	   	  	  	 
				  	   	  	  	 <input type="email" placeholder="Email">
				  	   	  	  	 
				  	   	  	  	 <textarea name="" id="short_note" placeholder="short message"></textarea>
				  	   	  	  	 <button>contact agent</button>
				  	   	  	  </form>
		  	   	  </div>
	  				</div>
	  			</div>
	  			<!-- <div class="row">
	  				<div class="col-md-12" style="color: black; cursor: pointer; text-align: center;" id="closemodal"> close </div>
	  			</div> -->
	  	<!-- </div>
	  </div> -->