<style>
    body {
        font-family: 'Lucida Grande', 'Helvetica Neue', sans-serif;
        font-size: 13px;
    }

    #comment_form input, #comment_form textarea {
        border: 4px solid rgba(0,0,0,0.1);
        padding: 8px 10px;

        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;

        outline: 0;
    }

    #comment_form textarea {
        width: 100%;
    }

    #comment_form input[type="submit"] {
        cursor: pointer;
        background: -webkit-linear-gradient(top, #efefef, #ddd);
        background: -moz-linear-gradient(top, #efefef, #ddd);
        background: -ms-linear-gradient(top, #efefef, #ddd);
        background: -o-linear-gradient(top, #efefef, #ddd);
        background: linear-gradient(top, #efefef, #ddd);
        color: #333;
        text-shadow: 0px 1px 1px rgba(255,255,255,1);
        border: 1px solid #ccc;
    }

    #comment_form input[type="submit"]:hover {
        background: -webkit-linear-gradient(top, #eee, #ccc);
        background: -moz-linear-gradient(top, #eee, #ccc);
        background: -ms-linear-gradient(top, #eee, #ccc);
        background: -o-linear-gradient(top, #eee, #ccc);
        background: linear-gradient(top, #eee, #ccc);
        border: 1px solid #bbb;
    }

    #comment_form input[type="submit"]:active {
        background: -webkit-linear-gradient(top, #ddd, #aaa);
        background: -moz-linear-gradient(top, #ddd, #aaa);
        background: -ms-linear-gradient(top, #ddd, #aaa);
        background: -o-linear-gradient(top, #ddd, #aaa);
        background: linear-gradient(top, #ddd, #aaa);	
        border: 1px solid #999;
    }

    #comment_form div {
        margin-bottom: 8px;
    }
</style>








<?php
foreach ($preview as $preview)
    ; {
    ?> 

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">  
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-4">
                                <br> <center> <i class="fa fa-user" style="font-size: 80px;"></i><center></br>
                                        </div>
                                        <div class="col-md-8">
                                            <strong>  <h4><?php echo $preview['firstname']; ?>&nbsp;<?php echo $preview['lastname']; ?></h4></strong>

                                            <br> <i class="glyphicon glyphicon-map-marker"></i><?php echo $preview['address']; ?></br>
                                            <br>  <i class="glyphicon glyphicon-envelope"></i><?php echo $preview['email']; ?></br>
                                        </div>

                                        </div>
                                        </div> 
                                        </div>
                                        <div class="row">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    Features
                                                </div>
                                                <div class="panel-body">


                                                    <a href="#" target="_parent">Rs:<?php echo $preview['price']; ?> 
                                                        <strong class="pull-right"><?php echo $preview['address']; ?></strong></a>


                                                    <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">




                                                        <li>Room:<?php echo $preview['room']; ?></li>|
                                                        <li><?php echo $preview['property_type']; ?></li>|
                                                        <li>Parking:<?php echo $preview['parking']; ?></li>



                                                    </ul>

                                                    <label>Phone:</label>   
                                                    <p class="hidden-xs"><?php echo $preview['Phone']; ?>
                                                    </p>
                                                    <label>Description:</label>   
                                                    <p class="hidden-xs"><?php echo $preview['description']; ?>
                                                    </p>
                                                </div>
                                                <div>
                                                </div>

                                            </div>
                                            <!--  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>comment section>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                                        </div>

                                        </div>
                                        <div class="col-md-8">





                                            <div class="row">

                                                <img alt="image" class="img-responsive" src="ci/<?php echo $preview['image']; ?>"/>

                                            </div>  

                                        </div>         


                                        </div>



                                        <!-------comment section--->
                                        <div class="row">
                                            <div class="panel panel-default container-pad">
                                                <div class="panel-heading"><h4>Comments</h4></div>
                                                <div class="panel-body">

                                                    <div id="comment_form">
                                                        <?php echo form_open('preview_controller/postcomment/' . $post_id); ?>

                                                        <div class="row">
                                                            <div class="col-xs-6">

                                                                <input type="text" name="name" id="name" value="" placeholder="Name" required="">
                                                            </div>
                                                            <div class="col-xs-6">

                                                                <input type="text" name="email" id="email" value="" placeholder="Email" required="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <textarea  name="comment" id="comment" placeholder="Comment" required=""></textarea>
                                                            </div>

                                                            <div class="controls control-group pull-right">
                                                                <button type="submit" id="sumbit" name="submit" class="btn btn-sm btn-success" >ADD COMMENT</button>

                                                            </div>
                                                        </div>

                                                        <?php echo form_close(); ?>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <!-- ------------------------------------------   show comment ------------------------------------------------  
                                    -->  <?php
                                  
                                    foreach ($comment as $c) {
                                        ?>           
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <center> <i class="fa fa-user" style="font-size: 80px;"></i></center>
                                            </div>
                                            <div class="col-xs-10">
                                                <div class="panel panel-default container-pad">
                                                    <div class="panel-heading">
                                                    <h4>
                                                    <?php echo $c['name']; ?>|<?php echo $c ['email']; ?>
                                                    </h4></div>
                                                    <div class="panel-body container-pad">
                                                        <?php echo $c['comment'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>




