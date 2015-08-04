<head>
    <?php echo $map['js']; ?>
</head>


<div class="container-fluid ">
    <div class="row">
        <div class="col-xs-8">
             <?php echo $map['html'];?>
            </div>
        <div class="col-xs-4" >
           
                     <ul class="nav nav-tabs">
                    <li class="active"><a href="#Map"  data-toggle="tab">Recent Listing</a></li>
                    <li><a href="#List" data-toggle="tab">Popular</a></li>
                   </ul>

<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="Map">
                    <div style=" height: 400px;overflow-y : auto;">       
                    <div class="row">
                         <?php foreach($info as $list_info)
                                       {?> 
            		
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
                                  <a href="#" target="_parent">Rs:<?php echo $list_info['price'];?> <small class="pull-right"><?php echo $list_info['address'];?></small></a></h4>
                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                  

                                  

                                    <li><?php echo $list_info['room_id'];?>Room</li>

                                   

                                  
                                </ul>

                            

                                <p class="hidden-xs"><?php echo $list_info['description'];?>
                                </p>
                            </div>
                            </div>         
                        </div>
                    </div><!-- End Listing-->
	</div>
                          <?php  }?>
                         </div>
                       	
		
</div>

</div>
       
                    
                    
                    
                    
                    
                    
                    
                    
                    </div>
            </div>
        </div>
    </div>
        

        