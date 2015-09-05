<div class="container-fluid">
    <?php foreach ($preview as $preview) {
        ?> 
        <div class="row">
            <div class="col-md-4">
                <div class="row">  
                    <div class="col-md-4">
                        <br> <center> <i class="fa fa-user" style="font-size: 80px;"></i><center></br>
                                </div>
                                <div class="col-md-8">
                                    <strong>  <h4><?php echo $preview['firstname']; ?>&nbsp;<?php echo $preview['lastname']; ?></h4></strong>

                                    <br> <i class="glyphicon glyphicon-map-marker"></i><?php echo $preview['address']; ?></br>
                                    <br>  <i class="glyphicon glyphicon-envelope"></i><?php echo $preview['email']; ?></br>
                                </div>

                                </div><hr style="background-color:#000;">
                                <div class="row">

                                    <div class="container-fluid">


                                        <a href="#" target="_parent">Rs:<?php echo $preview['price']; ?> 
                                            <strong class="pull-right"><?php echo $preview['address']; ?></strong></a>


                                        <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">




                                            <li>Room:<?php echo $preview['room']; ?></li>|
                                            <li><?php echo $preview['property_type']; ?></li>|
                                            <li>Parking:<?php echo $preview['parking']; ?></li>



                                        </ul>


                                        <label>Description:</label>   
                                        <p class="hidden-xs"><?php echo $preview['description']; ?>
                                        </p>
                                    </div>
                                </div>

                                </div>
                                <!--  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>comment section>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->

                                <div class="col-md-8">





                                    <div class="row">

                                        <?php echo $preview['image']; ?>

                                    </div>  

                                </div>         


                                </div>

                                </div>   
                                </div>  
                                <!-------comment section--->
                                <div class="row">

                                </div>  


                            <?php } ?>
                            </div>    
