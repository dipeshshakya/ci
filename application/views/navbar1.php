



<nav class="navbar navbar-custom  navbar-static-top nav navbar-inverse" role="banner"style="height:60px;border-bottom-color:grey;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">OnlineRentalSystem</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="active"><a href="index.php" title="HomePage" target="_self"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbspHome</a></li>
        <li><a href="#" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true" style="font-size: 20px;"></span></a></li>    
      </ul>
							
							
		
      
      
      
      <ul class="nav navbar-nav navbar-right">
	  
        <li><p class="navbar-text">Already have an account?</p></li>
    
		<li><a href="#" data-toggle="modal" data-target="#myModal">login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
 
</nav>


<!---modal--->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
              
            </ul>
        </div>
     <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        
                 <div class="tab-pane fade active in" id="signin">
                     <?php include_once 'Login_view.php';?>
                 </div>
     
           
                <div class="tab-pane fade" id="signup">
                    <?php include_once 'Register_view.php';?>
                </div>
           
        </div><!--mytabcontent--->
    </div><!---model-body--->
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div><!--footer----->
    </div><!---model-content-->
  </div><!--model-dialog-->
</div><!--model--->


