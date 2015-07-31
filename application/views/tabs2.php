
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
<!-------------------------------------------------start search-------------------------------------------------------->
			<div id="mysearch">
			<div class="row">

	   
           
            <!-- searchForm -->
<ul class="horizontal">    <!-- Text input-->
			<li> <a href="#"> <div class="control-group">
              <label class="control-label" for="address"></label>
              <div class="controls">
                <input required="" id="address" name="address" type="text" class="form-control" placeholder="Search location" class="input-small" style="width:280px;">
              </div>
            </div></a>
			</li>
			<li><a href="#">
		<div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
                <input id="MINprice"  type="text" class="form-control" placeholder="Minprice" class="input-small" style="width:80px;top:10px;">
              </div>
            </div></a>
		</li>
		
		<li>
		<a href="#">
		<div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
                <input  id="Maxprice"  type="text" class="form-control" placeholder="Maxprice" class="input-small" style="width:80px;top:10px;">
              </div>
        </div>
		</a>
		</li>
		
                
    <li>                  
    <div class="btn-group">
      <a class="btn dropdown-toggle btn-select2" data-toggle="dropdown" href="#">Property Type<span class="caret"></span></a>
      <ul class="dropdown-menu"aria-labelledby="dropdownMenuDivider">
          <li class="dropdown-header">Property type</li>
            <li role="separator" class="divider"></li>
        <li><a href="#">Apartment</a></li>
        <li><a href="#">House</a></li>
        <li><a href="#">Room</a></li>
        
      </ul>
    </div>
    </li>
    
    
    <li>
		   <div class="btn-group">
      <a class="btn dropdown-toggle btn-select2" data-toggle="dropdown" href="#">Room<span class="caret"></span></a>
      <ul class="dropdown-menu"aria-labelledby="dropdownMenuDivider">
         <li class="dropdown-header">Room</li>
         <li role="separator" class="divider"></li>
        <li><a href="#">1+</a></li>
        <li><a href="#">2+</a></li>
        <li><a href="#">3+</a></li>
        <li><a href="#">4+</a></li>
        <li><a href="#">5+</a></li>
      </ul>
    </div>
    </li>
	
    <li>
		   <div class="btn-group">
      <a class="btn dropdown-toggle btn-select2" data-toggle="dropdown" href="#">Parking<span class="caret"></span></a>
      <ul class="dropdown-menu"aria-labelledby="dropdownMenuDivider">
          <li class="dropdown-header">Parking</li>
         <li role="separator" class="divider"></li>
        <li><a href="#">Yes</a></li>
        <li><a href="#">No</a></li>
       
      </ul>
    </div>
    </li>
<div class="btn-group">
      <button type="button" id="btnSearch" class="btn btn-primary"onclick="codeAddress()">Search</button>
</div>
    </ul>
	</div>

				
                        </div>
    <!----------------------------------------------------end-search--------------------------------------------------------->
   <div class="row">
        <div  class="col-xs-3"> 
            
           
     <!----------------------------------------------------user- profile------------------------------------------------------->
                  
                  <div class="panel panel-info">
                            <div class="panel-heading">
                                <h2 class="panel-title"><center>Profile</center></h2>
                            </div>
                            <div class="panel-body">
                           
                              <div class="row">
                                  <div class="col-md-12">
                                <br> <center> <img src="http://placehold.it/180x200" alt="" class="img-rounded img-responsive" /><center></br>
                                 
                                 <strong>  <h4><?php echo $this->session->userdata('name'); ?></h4></strong>
                            
                              <br>  <i class="glyphicon glyphicon-map-marker">
                                </i><small><?php echo $this->session->userdata('address'); ?></small></br>
                                <br>
                                    <i class="glyphicon glyphicon-envelope"></i><?php echo $this->session->userdata('email'); ?>
                                    </br>
                                   
                                 
                                 
                                <!-- Split button -->

                                </div>
                                </div>
                                         
                                
                            </div><!---pannel body--->
                        </div><!pannel>
                 
                  
                 
                 
               
              </div><!---col-md-3 well-lg----->
    <!------------------------------profile sidebar-end-------------------------------------------------------------------->
              
            <div class="col-xs-9 ">
                   <div align="center" style="color:#F00"><strong><?php echo $this->session->flashdata('success_message');?></strong></div>
           
           <div align="center" style="color:#F00"><strong><?php echo $this->session->flashdata('success_upload');?></strong></div>
                <div class="container">
                
                    <!-- tabs right -->

                         <ul class="nav nav-tabs">
                              <li class="active"><a href="#Mypost"  data-toggle="tab">My post</a></li>
                              <li><a href="#AddListing"  data-toggle="tab">Add Listing</a></li>
                             <li><a href="#MyFavourite" data-toggle="tab">My Favourite</a></li>
                          </ul>


   
   
   
   
                        <!-- Tab panes -->
                        <div class="tab-content">
                            
                            
                            
                                    <div role="tabpanel" class="tab-pane active" id="Mypost">
                                                      <div id ="body-map" style="height:480px;">
                                                         
                                                      </div>

                                      </div><!--mypost-->
  <!-------------------------------------------------addlisting start----------------------------------------------------------->                                    
                                      <div role="tabpanel" class="tab-pane " id="AddListing">
                                              
<?php echo form_open_multipart('addlisting/uploadpost'); ?>



                                          <div class="row">
                                              <div class="col-xs-6">

            <div class="pannel"> 
                 <div class="panel-body ">
           
            <form  class="form-horizontal">    <!-- Text input-->
         
           
           <br>  <div class="form-group">
             <label for="address" class="col-sm-4 control-label">Address:</label>
             
             
             <div class="col-sm-8">
                 <input type="text" class="form-control" name="address" id="address" placeholder="Enter the location" value="<?php echo set_value('address'); ?>" >
                 <span class="text-danger"><?php echo form_error('address'); ?></span>
             </div>
             </div>	
            </br>

           <br>  <div class="form-group">
             <label for="Price" class="col-sm-4 control-label">Price:</label>
             <div class="col-sm-8">
                 <input type="text" class="form-control" id="price"  name="price"placeholder="Rs"value="<?php echo set_value('price'); ?>" >
                  <span class="text-danger"><?php echo form_error('price'); ?></span>
             </div>
             </div></br>
		
	<br><div class="form-group">
             <label for="Property type" class="col-sm-4 control-label">Property Type:</label>
             <div class="col-sm-8">
<!--                  <select class="form-control" >
                <option value="house"id="house">House </option>
                <option value="apartment"id="apartment"> Apartment </option>
                <option value="room"id="room"> Room </option>
            </select>-->
                            <?php
                          $property_type=array(
                              'house'=>'house',
                              'apartment'=>'apartment',
                              'room'=>'room'
                          );
                $attributes = 'class = "form-control" id = "property_type" name="property_type"';
              echo form_dropdown('property_type',$property_type,set_value('property_type'),$attributes);?>
                <span class="text-danger"><?php echo form_error('property_type'); ?></span>
             </div>
             </div></br>
             

<br>
         <div class="form-group">
             <label for="room" class="col-sm-4 control-label">Room:</label>
             <div class="col-sm-8">
<!--                 <select class="form-control">
                <option value="one"id="one">1+</option>
                <option value="two"id="two" >2+</option>
                <option value="three" id="three">3+</option>
                <option value="three"id="four">4+</option>
                <option value="five"id="five">5+</option>
                  </select>-->
                 <?php
                 $room=array(
                                            '1'=>'1+',
                                            '2'=>'2+',
                                            '3'=>'3+',
                                             '4'=>'4+',
                                            '5'=>'5+');
                $attributes = 'class = "form-control" id = "room" name="room"';
               echo form_dropdown('room',$room,set_value('room'),$attributes);?>
                <span class="text-danger"><?php echo form_error('room'); ?></span>
             </div>
             </div>
 </br>   
  <br>  
            <div class="form-group">
             <label for="room" class="col-sm-4 control-label">Parking:</label>
             <div class="col-sm-8">
<!--                 <select class="form-control">
                <option value="yes"id="yes">Yes</option>
                <option value="no" id="no">NO</option>
                </select>-->
                            <?php
                            $parking=array(
                                            'yes'=>'yes',
                                            'no'=>'no');
                $attributes = 'class = "form-control" id = "parking"name="parking"';
                echo form_dropdown('parking',$parking,set_value('parking'),$attributes);?>
                <span class="text-danger"><?php echo form_error('parking'); ?></span>
             </div>
             </div>
  </br>       
       
<br>	
         <div class="form-group">
        <label for="upload photo"class="col-sm-4 control-label">upload photo</label>
         <div class="col-sm-8">
             
           
            <input type="file" id="img_upload" name="img_upload"   size="20" >
           
            
         </div>
        </div>
  
  </br>         
 
  <br>
    <label for="description" class="col-sm-4 control-label">Description:</label>
    <textarea id="description" class="form-control" rows="3" name="description"value="<?php echo set_value('description'); ?>"></textarea>           
    </br> 
     <br>
        <!-- Button -->
           
              
              <div class="controls control-group">
                  <button type="submit" id="confirm" name="confirm" class="btn btn-success" >confirm</button>
            
            </div>
        </br>
            </form>
   <?php echo form_close(); ?>
                     </div><!---pannel body-->
    </div><!--pannel-->
    </div><!----col-xs-6---->
                                          
    </div><!----row---->
   
  



                                                   


                                            



    </div><!----addlisting end------------->
  <!----------------------------------------------tab-addlisting-end-------------------------------------------------------------------------------------------------->
                                      <div role="tabpanel" class="tab-pane" id="MyFavourite">
                                                      <div id ="body-map" style="height:480px;">
                                                          
                                                      </div>

                                      </div><!--tab-list-->


                                  </div><!--tab-content-->


                </div><!----container-->
             </div><!---col-xs-9 ----->
                        
	</div><!---row--->	
</div><!---container--->       
	


