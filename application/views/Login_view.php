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