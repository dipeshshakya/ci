<?php echo form_open('Addlisting_controller/signup'); ?>
<?php echo validation_errors(); ?>



<div class="row container-fluid"> 
   <div  class="col-md-6"> 
            <div class="well "> 
                 
           
            <form  class="form-horizontal">    <!-- Text input-->
         
            <br><div class="form-group">
             
             <div class="col-sm-12">
                 <input type="text" class="form-control" id="address" placeholder="Enter the location">
             </div>
             </div>	</br>

           <br>  <div class="form-group">
             <label for="Price" class="col-sm-4 control-label">Price:</label>
             <div class="col-sm-8">
                 <input type="text" class="form-control" id="price" placeholder="Rs">
             </div>
             </div></br>
		
		<br><div class="form-group">
             <label for="Property type" class="col-sm-4 control-label">Property Type:</label>
             <div class="col-sm-8">
                  <select class="form-control" >
                <option value="house"id="house">House </option>
                <option value="apartment"id="apartment"> Apartment </option>
                <option value="room"id="room"> Room </option>
            </select>
             </div>
             </div></br>
                

<br>
         <div class="form-group">
             <label for="room" class="col-sm-4 control-label">Room:</label>
             <div class="col-sm-8">
                 <select class="form-control">
                <option value="one"id="one">1+</option>
                <option value="two"id="two" >2+</option>
                <option value="three" id="three">3+</option>
                <option value="three"id="four">4+</option>
                <option value="five"id="five">5+</option>
                  </select>
             </div>
             </div>
 </br>   
  <br>  
            <div class="form-group">
             <label for="room" class="col-sm-4 control-label">Parking:</label>
             <div class="col-sm-8">
                 <select class="form-control">
                <option value="yes"id="yes">Yes</option>
                <option value="no" id="no">NO</option>
                </select>
             </div>
             </div>
  </br>       
       
<br>	
         <div class="form-group">
        <label for="upload photo"class="col-sm-4 control-label">upload photo</label>
         <div class="col-sm-8">
        <input type="file" id="upload_photo">
         </div>
        </div>
  
  </br>         
 
  <br>
<textarea class="form-control" rows="3"></textarea>           
    </br> 
     <br>
        <div class="btn-group">
              <button type="submit" id="submit_list" class="btn btn-primary">Confirm</button>
        </div>
  </br>
            </form>
    </div><!--well-->
   
    </div><!---col-md-6-->
    <div  class="col-md-3"> 
       
        </div><!--col-md-6-->
</div>        <!---row-->
<?php echo form_close(); ?>

