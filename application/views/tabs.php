
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
    <div class="well well-sm">

<div class="container-fluid">

			<div id="mysearch">
			<?php include ("search.php");?>
				
                        </div><!---search-->

			

   <!-- tabs right -->
     
        <ul class="nav nav-pills">
    <li class="active"><a href="#Map"  data-toggle="tab">Map</a></li>
    <li><a href="#List" data-toggle="tab">List</a></li>
   </ul>
   

   
   
   
   
  <!-- Tab panes -->
  <div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="Map">
			<div id ="body-map" style="height:480px;">
	
				<div id="map-canvas"></div>
		
	
			</div><!--body-map-->

	
	
		</div><!---tab-map-->
		<div role="tabpanel" class="tab-pane" id="List">
				<div id ="body-map" style="height:480px;">
				</div>
	
		</div><!--tab-list-->
   
    
            </div><!--tab-content-->
	</div>
	<!--innercontainer-fluid-->
	
	
	</div><!--well-->

