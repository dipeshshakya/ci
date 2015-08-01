
<style>
    
    
    
body {
    color: #888;   
}
a {
    color: #03a1d1;
    text-decoration: none!important;
}

/**** LAYOUT ****/
.list-inline>li {
    padding: 0 10px 0 0;
}
.container-pad {
    padding: 30px 15px;
}


/**** MODULE ****/
.bgc-fff {
    background-color: #fff!important;
}
.box-shad {
    -webkit-box-shadow: 1px 1px 0 rgba(0,0,0,.2);
    box-shadow: 1px 1px 0 rgba(0,0,0,.2);
}
.brdr {
    border: 1px solid #ededed;
}

/* Font changes */
.fnt-smaller {
    font-size: .9em;
}
.fnt-lighter {
    color: #bbb;
}

/* Padding - Margins */
.pad-10 {
    padding: 10px!important;
}
.mrg-0 {
    margin: 0!important;
}
.btm-mrg-10 {
    margin-bottom: 10px!important;
}
.btm-mrg-20 {
    margin-bottom: 20px!important;
}

/* Color  */
.clr-535353 {
    color: #535353;
}




/**** MEDIA QUERIES ****/
@media only screen and (max-width: 991px) {
    #property-listings .property-listing {
        padding: 5px!important;
    }
    #property-listings .property-listing a {
        margin: 0;
    }
    #property-listings .property-listing .media-body {
        padding: 10px;
    }
}

@media only screen and (min-width: 992px) {
    #property-listings .property-listing img {
        max-width: 180px;
    }
}






















</style>


<div class="container-fluid ">
    <div class="row">
        <div class="col-xs-8">
             <?php echo $map['html'];?>
            </div>
        <div class="col-xs-4">
           
                     <ul class="nav nav-tabs">
                    <li class="active"><a href="#Map"  data-toggle="tab">Recent Listing</a></li>
                    <li><a href="#List" data-toggle="tab">Popular</a></li>
                   </ul>

<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="Map">
                    <div style=" height: 400px;overflow-y : scroll;">       
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
        

        