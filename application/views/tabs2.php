
<head>
    <?php echo $map['js']; ?>

</head>


<div class="container-fluid">




    <div class="row">
        <div  class="col-md-3"> 


            <!----------------------------------------------------user- profile------------------------------------------------------->

            <div class="well well-sm">



                <div class="row">
                    <div class="col-md-12">
                        <br> <center> <i class="fa fa-user" style="font-size: 120px;"></i><center></br>

                                <strong>  <h4><?php echo $this->session->userdata('name'); ?></h4></strong>

                                <br> <i class="glyphicon glyphicon-map-marker"></i><?php echo $this->session->userdata('address'); ?></br>
                                <br>  <i class="glyphicon glyphicon-envelope"></i><?php echo $this->session->userdata('email'); ?></br>





                                <!-- Split button -->

                                </div>
                                </div>



                                </div><!--well-->





                                </div><!---col-md-3 well-lg----->
                                <!------------------------------profile sidebar-end-------------------------------------------------------------------->

                                <div class="col-md-9 ">
                                    <div align="center" style="color:#F00"><strong><?php echo $this->session->flashdata('validation_error'); ?></strong></div>

                                    <div align="center" style="color:#F00"><strong><?php echo $this->session->flashdata('success_upload'); ?></strong></div>
                                    <div class="container" style="width:900px;">

                                        <!-- tabs right -->

                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#Mypost"  data-toggle="tab">My post</a></li>
                                            <li><a href="#AddListing"  data-toggle="tab">Add Listing</a></li>
                                            <li><a href="#MyFavourite" data-toggle="tab">My Favourite</a></li>
                                        </ul>






                                        <!-- Tab panes -->
                                        <div class="tab-content">



                                            <div role="tabpanel" class="tab-pane active" id="Mypost">
                                                <div class="pannel" style="margin: 10px;">
                                                    <div class="row">

                                                        <?php foreach ($mpost as $post) {
                                                            ?> 
                                                            <div class="col-md-6">
                                                                <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                                                                    <div class="media">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <a class="pull-left" href="#" target="_parent">
                                                                                    <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/Yu59d899Ocpyr_RnF0-8qNJX1oYibjwp9TiLy-bZvU9vRJ2iC1zSQgFwW-fTCs6tVkKrj99s7FFm5Ygwl88xIA.jpg"></a>

                                                                            </div>  
                                                                            <div class="col-md-8">
                                                                                <div class="media-body fnt-smaller">
                                                                                    <a href="#" target="_parent"></a>

                                                                                    <h4 class="media-heading">
                                                                                        <a href="#" target="_parent">Rs:<?php echo $post['price']; ?> <small class="pull-right"><?php echo $post['address']; ?></small></a></h4>
                                                                                    <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">

                                                                                        <li>Room<?php echo $post['room']; ?></li>|
                                                                                        <li><?php echo $post['property_type']; ?></li>|
                                                                                        <li>Parking:<?php echo $post['parking']; ?></li>
                                                                                    </ul>                    

                                                                                    <p class="hidden-xs"><?php echo $post['description']; ?>
                                                                                    </p>
                                                                                </div>
                                                                            </div>         
                                                                        </div>
                                                                    </div><!-- End Listing-->
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                    </div>
                                                </div>
                                            </div><!--mypost-->
                                            <!-------------------------------------------------addlisting start----------------------------------------------------------->                                    
                                            <div role="tabpanel" class="tab-pane " id="AddListing">

                                                <?php echo form_open_multipart('addlisting/uploadpost'); ?>


                                                <div class="well well-sm ">
                                                    <div class="row">

                                                        <div class="col-md-6">




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
                                                                        $property_type = array(
                                                                            'house' => 'house',
                                                                            'apartment' => 'apartment',
                                                                            'room' => 'room'
                                                                        );
                                                                        $attributes = 'class = "form-control" id = "property_type" name="property_type"';
                                                                        echo form_dropdown('property_type', $property_type, set_value('property_type'), $attributes);
                                                                        ?>
                                                                        <span class="text-danger"><?php echo form_error('property_type'); ?></span>
                                                                    </div>
                                                                </div></br>


                                                                <br>
                                                                <div class="form-group">
                                                                    <label for="room" class="col-sm-4 control-label">Room:</label>
                                                                    <div class="col-sm-8">
                                                     
                                                                        <?php
                                                                        $room = array(
                                                                            '1' => '1+',
                                                                            '2' => '2+',
                                                                            '3' => '3+',
                                                                            '4' => '4+',
                                                                            '5' => '5+');
                                                                        $attributes = 'class = "form-control" id = "room" name="room"';
                                                                        echo form_dropdown('room', $room, set_value('room'), $attributes);
                                                                        ?>
                                                                        <span class="text-danger"><?php echo form_error('room'); ?></span>
                                                                    </div>
                                                                </div>
                                                                </br>   
                                                                <br>  
                                                                <div class="form-group">
                                                                    <label for="room" class="col-sm-4 control-label">Parking:</label>
                                                                    <div class="col-sm-8">
                                                      
                                                                        <?php
                                                                        $parking = array(
                                                                            'yes' => 'yes',
                                                                            'no' => 'no');
                                                                        $attributes = 'class = "form-control" id = "parking"name="parking"';
                                                                        echo form_dropdown('parking', $parking, set_value('parking'), $attributes);
                                                                        ?>
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


                                                        </div><!----col-xs-6---->
                                                        <div class="col-md-6">
                                                            <div class="pannel" style="border-left :thick double black;">
<?php echo $map['html']; ?>
                                                            </div>
                                                        </div>


                                                    </div><!---pannel body-->








                                                </div>

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



