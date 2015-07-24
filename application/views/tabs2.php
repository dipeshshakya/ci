
<style type="text/css">
   #map-canvas { height:480px;
                 margin-bottom:50px;
                 padding:0px;
                 margin-top:0px;
	  }
    #mysearch{
		  height:78px;
		  width:1000px;
		  background-color:#BEE8D9;
		  z-index:5;
		  opacity:0.9;
		  padding:5px;	  
		  
		  margin-top:0px;
		  position:absolute;
		  margin-left:250px;
		  border-radius:8px;
                    display:none;
                    border:5px outset #59917D;
                     height: auto !important;
                    overflow: visible !important;
			
			
	  }
          
	  
    </style>
    

<div class="container-fluid">

			<div id="mysearch">
			<?php include ("search.php");?>
				
                        </div><!---search-->
        <div class="row">
        <div  class="col-md-3"> 
                 <div class="well-sm container">
                     
                 
                 
                 
                 
                 
                 </div>
              </div><!---col-md-3 well-lg----->
            <div class="col-md-9 ">
                <div class="well-lg container">
                
                    <!-- tabs right -->

                         <ul class="nav nav-tabs">
                              <li class="active"><a href="#AddListing"  data-toggle="tab">Add Listing</a></li>
                             <li><a href="#MyFavourite" data-toggle="tab">My Favourite</a></li>
                          </ul>


   
   
   
   
                        <!-- Tab panes -->
                        <div class="tab-content">
                                      <div role="tabpanel" class="tab-pane active" id="AddListing">
                                              

                                                    <?php include('addlisting.php');?>


                                            



                                      </div><!---tab-map-->
                                      <div role="tabpanel" class="tab-pane" id="MyFavourite">
                                                      <div id ="body-map" style="height:480px;">
                                                          
                                                      </div>

                                      </div><!--tab-list-->


                                  </div><!--tab-content-->


                </div>
             </div><!---col-md-9 well-lg----->
                        
	</div><!---row--->	
	


