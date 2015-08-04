



<nav class="navbar  navbar-static-top " role="banner"style="height:60px;border-bottom-color:grey;">
    <div class="row">
        <div class="container-fluid">
        <div class="col-lg-2">
    
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
        </div>
            <div class="col-lg-10">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="active"><a href="welcome/index.php" title="HomePage" target="_self"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbspHome</a></li>
          
	</ul>	
            
      
      
      <ul class="nav navbar-nav navbar-right ">
          
          
        <li><p class="navbar-text">Already have an account?</p></li>
    
		<li><a href="#" data-toggle="modal" data-target="#myModal">login</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
    </div>
  </div><!-- /.container-fluid -->
 </div>
</nav>


<!------------------------------------------------modal------------------------------------------------------------->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Login</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
             
            </ul>
        </div>
     <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <!------------------------------------------start login -------------------------------------------------->
                 <div class="tab-pane fade active in" id="signin">
                      <?php echo form_open('User_controller/login'); ?>
  <?php echo validation_errors(); ?>  

<form class="form-horizontal">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="email">Email:</label>
              <div class="controls">
                <input required="" id="email" name="email" type="text" class="form-control" placeholder="" class="input-medium" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
                <label class="control-label" for="password">Password:</label>
                <div class="controls">
                      <input required="" id="password" name="password" class="form-control" type="password" placeholder="********" class="input-medium">
                    <div class="help-block text-right"><a href="">Forget the password ?</a></div>

                 </div>
            </div>

          
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                  <button type="submit" id="btn_login" name="signin" class="btn btn-success"  >Sign In</button>
               
              </div>
            </div>
            </fieldset>
            </form>
<?php echo form_close(); ?>
                 </div>
     <!------------------------------------------End login -------------------------------------------------->
       <!------------------------------------------Start register -------------------------------------------------->     
                <div class="tab-pane fade" id="signup">
                    <?php echo form_open('User_controller/signup'); ?>
<?php echo validation_errors(); ?>

<form class="form-horizontal">
            <fieldset>
            
	<!-- Sign Up Form -->	
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="firstname">Firstname:</label>
              <div class="controls">
                <input id="firstname" name="firstname" class="form-control" type="text" placeholder= ""class="input-large" required="">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="lastname">Lastname</label>
              <div class="controls">
                <input id="lastname" name="lastname" class="form-control" type="text" placeholder= ""class="input-large" required="">
              </div>
            </div>
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="email">Email:</label>
              <div class="controls">
                <input id="email" name="email" class="form-control" type="text" placeholder="" class="input-large" required="">
              </div>
            </div>
            
           
            
            <!-- Address -->
            <div class="control-group">
              <label class="control-label" for="address">Address:</label>
              <div class="controls">
                <input id="address" class="form-control" name="address" type="Text" placeholder="" class="input-large" required="">
              </div>
            </div>
            <!-- Phonenumber -->
            <div class="control-group">
              <label class="control-label" for="phone">Phone:</label>
              <div class="controls">
                <input id="Phone" class="form-control" name="Phone" type="Text" placeholder="" class="input-large" required="">
              </div>
            </div>
			 <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Password:</label>
              <div class="controls">
                <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                <em>1-8 Characters</em>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="passconf">Re-Enter Password:</label>
              <div class="controls">
                <input id="passconf" class="form-control" name="passconf" type="password" placeholder="********" class="input-large" required="">
              </div>
            </div>
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                  <button type="submit" id="confirmsignup" name="confirmsignup" class="btn btn-success" >Sign Up</button>
              </div>
            </div>
                    
            </fieldset>
</form>
<?php echo form_close(); ?>
                </div>
        <!------------------------------------------End register -------------------------------------------------->    
        </div><!--mytabcontent--->
    </div><!---model-body--->
     <!-- <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div><!--footer----->
    </div><!---model-content-->
  </div><!--model-dialog-->
</div><!--model--->


