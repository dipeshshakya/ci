<div class="container-fluid">


    <div class="col-md-4 ">
        <div class="panel panel-primary">

            <div class="panel-heading">
                <h3 class="panel-title"><center><strong>Advance search</strong></center></h3>
            </div>
            <div class="panel-body">
                <form method="post"  class="form-horizontal"accept-charset="utf-8" action=" <?php echo site_url("search_post/advance_search"); ?>">

                    <!-- Text input-->


                    <br>  <div class="form-group">



                        <div class="col-xs-12 ">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter the location" value="" >

                        </div>
                    </div>	
                    </br>

                    <br>  <div class="form-group">

                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="minprice"  name="minprice"placeholder="Min Price"value="" >

                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="maxprice"  name="maxprice"placeholder="Max Price"value="" >

                        </div>
                    </div></br>

                    <br><div class="form-group">
                        <label for="Property type" class="col-sm-4 control-label">Property Type:</label>
                        <div class="col-sm-8">

                            <?php
                            $property_type = array(
                                'house' => 'house',
                                'apartment' => 'apartment',
                                'room' => 'room'
                            );
                            $attributes = 'class = "form-control pull-left" id = "property_type" name="property_type"';
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
                            $attributes = 'class = "form-control pull-left" id = "room" name="room"';
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
                            $attributes = 'class = "form-control pull-left" id = "parking"name="parking"';
                            echo form_dropdown('parking', $parking, set_value('parking'), $attributes);
                            ?>
                            <span class="text-danger"><?php echo form_error('parking'); ?></span>
                        </div>
                    </div>
                    </br>       



                    <div class="controls control-group pull-right">
                        <button type="submit" id="confirm" name="confirm" class="btn btn-success" >search</button>

                    </div>

                </form>
            </div>
        </div>

    </div>
    <div class="col-md-8">
        <div align="center" style="color:#F00"><strong><?php echo $this->session->flashdata('validation_error'); ?></strong></div>

        <div class="row " style="height: 550px;overflow-y:scroll;">

            <?php foreach ($s as $search) {
                ?> 

                <div class="col-md-6">
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="pull-left" href="#" target="_parent">
    <!--                                 <img alt="image" class="img-responsive" src="http://images.prd.mris.com/image/V2/1/Yu59d899Ocpyr_RnF0-8qNJX1oYibjwp9TiLy-bZvU9vRJ2iC1zSQgFwW-fTCs6tVkKrj99s7FFm5Ygwl88xIA.jpg"></a>-->

                                </div>  
                                <div class="col-md-8">
                                    <div class="media-body fnt-smaller">
                                        <a href="#" target="_parent"></a>

                                        <h4 class="media-heading">
                                            <a href="#" target="_parent">Rs:<?php echo $search['price']; ?> 
                                                <small class="pull-right"><?php echo $search['address']; ?></small></a></h4>
                                        <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">

                                            <li>Room:<?php echo $search['room']; ?></li>|
                                            <li><?php echo $search['property_type']; ?></li>|
                                            <li>Parking<?php echo $search['parking']; ?></li>
                                        </ul>



                                        <p class="hidden-xs"><?php echo $search['description']; ?>  </p>
                                        <a href="<?php echo base_url(); ?>/preview_controller/preview/<?php echo $search['post_id'] ?>?>">Details</a>
                                    </div>
                                </div>         
                            </div>
                        </div><!-- End Listing-->
                    </div>

                </div> 
            <?php } ?>

        </div>
    </div>
</div>