
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
			<?php //include ("search.php");?>
				
                        </div><!---search-->

			

   <!-- tabs right -->
     
        <ul class="nav nav-pills">
    <li class="active"><a href="#Map"  data-toggle="tab">Map</a></li>
    <li><a href="#List" data-toggle="tab">List</a></li>
   </ul>
   

   
   
   
   
  <!-- Tab panes -->
  <div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="Map">
			
	 <?php echo $map['html'];?>
				
		
	
			

	
	
		</div><!---tab-map-->
		<div role="tabpanel" class="tab-pane" id="List">
				
                                  
    <div class="row">
       
       <?php foreach($info as $list_info)
                                       {?>
        <div class="col-xs-2">
    <div class="thumbnail">
      <img src="http://images.prd.mris.com/image/V2/1/Yu59d899Ocpyr_RnF0-8qNJX1oYibjwp9TiLy-bZvU9vRJ2iC1zSQgFwW-fTCs6tVkKrj99s7FFm5Ygwl88xIA.jpg" alt="...">
      <div class="caption"><?php echo $list_info['address'];?> </div>
     <br> Price:<?php echo $list_info["price"];?>|Room:<?php echo $list_info["room_id"];?></br>
   <br>  Parking:<?php echo $list_info["parking_id"];?>|Poperty Type:<?php echo $list_info["property_type_id"];?></br>
         
        <br>  <p><?php echo $list_info["description"];?></p></br>
    </div>
        </div>
       <?php  }?>
          
    </div>
                                       
                                     
				
	
		</div><!--tab-list-->
   
    
            </div><!--tab-content-->
	</div>
	<!--innercontainer-fluid-->
	
	
	</div><!--well-->

