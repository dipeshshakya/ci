
<div class="container-pad ">
    <div class="row">
                         <?php foreach($s as $search)
                                       {?> 
            		
              <div class="col-md-4">
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
                                            <a href="#" target="_parent">Rs:<?php echo $search['price'];?> <small class="pull-right"><?php echo $search['address'];?></small></a></h4>
                                             <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                                                   
                                          <li><?php echo $search['room_id'];?>Room</li>
                                             </ul>

                            

                                         <p class="hidden-xs"><?php echo $search['description'];?>  </p>
                              
                                             </div>
                                         </div>         
                                </div>
                        </div><!-- End Listing-->
                </div>
                                             
             </div> 
                          <?php  }?>
  </div>    
</div>