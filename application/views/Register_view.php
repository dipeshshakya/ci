
<?php echo form_open('Signup_controller/signup'); ?>
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
                <input id="phone" class="form-control" name="Phone" type="Text" placeholder="" class="input-large" required="">
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
                  <button type="submit" id="confirmsignup" name="confirmsignup" class="btn btn-success" >Sign Up</</button>
              </div>
            </div>
                    
            </fieldset>
</form>
<?php echo form_close(); ?>