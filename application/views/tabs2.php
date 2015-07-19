
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
    <li class="active"><a href="#Profile"  data-toggle="tab">Profile</a></li>
    <li><a href="#AddList" data-toggle="tab">AddList</a></li>
     <li><a href="#Mysave" data-toggle="tab">Mysave</a></li>
     <li><a href="#Myfavourite" data-toggle="tab">Myfavourite</a></li>
   </ul>
   

   
   
   
   
  <!-- Tab panes -->
  <div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="">
			<div id ="body-map" style="height:480px;">
	
				
		
	
			</div><!--body-map-->

	
	
		</div><!---tab-map-->
		<div role="tabpanel" class="tab-pane" id="AddList">
				<div id ="body-map" style="height:480px;">
				</div>
	
		</div><!--tab-list-->
   <div role="tabpanel" class="tab-pane" id="MySave">
				<div id ="body-map" style="height:480px;">
				</div>
	
		</div><!--tab-list-->
                <div role="tabpanel" class="tab-pane" id="Myfavourite">
				<div id ="body-map" style="height:480px;">
				</div>
	
		</div><!--tab-list-->
    
            </div><!--tab-content-->
	</div>
	<!--innercontainer-fluid-->
	
	
	</div><!--well-->


