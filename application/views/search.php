<style type="text/css">
ul.horizontal li{
display:block;
float:left;
padding:0 10px;
}
ul.horizontal{
margin:0;
padding:0;
}
.row{
	margin:5px;

	
	
}
.btn{
	margin:5px;
	float:right;
	alignment:right;
}
.dropdown{
	margin-left:-30px;
}

.dropdown-menu{
    z-index:30; 
}
</style> 


<div class="row">

	
           
            <!-- searchForm -->
<ul class="horizontal">    <!-- Text input-->
			<li> <a href="#"> <div class="control-group">
              <label class="control-label" for="address"></label>
              <div class="controls">
                <input required="" id="address" name="address" type="text" class="form-control" placeholder="Search location" class="input-small" style="width:280px;">
              </div>
            </div></a>
			</li>
			<li><a href="#">
		<div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
                <input id="MINprice"  type="text" class="form-control" placeholder="Minprice" class="input-small" style="width:80px;top:10px;">
              </div>
            </div></a>
		</li>
		
		<li>
		<a href="#">
		<div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
                <input  id="Maxprice"  type="text" class="form-control" placeholder="Maxprice" class="input-small" style="width:80px;top:10px;">
              </div>
        </div>
		</a>
		</li>
		
                
    <li>                  
    <div class="btn-group">
      <a class="btn dropdown-toggle btn-select2" data-toggle="dropdown" href="#">Property Type<span class="caret"></span></a>
      <ul class="dropdown-menu"aria-labelledby="dropdownMenuDivider">
          <li class="dropdown-header">Property type</li>
            <li role="separator" class="divider"></li>
        <li><a href="#">Apartment</a></li>
        <li><a href="#">House</a></li>
        <li><a href="#">Room</a></li>
        
      </ul>
    </div>
    </li>
    
    
    <li>
		   <div class="btn-group">
      <a class="btn dropdown-toggle btn-select2" data-toggle="dropdown" href="#">Room<span class="caret"></span></a>
      <ul class="dropdown-menu"aria-labelledby="dropdownMenuDivider">
         <li class="dropdown-header">Room</li>
         <li role="separator" class="divider"></li>
        <li><a href="#">1+</a></li>
        <li><a href="#">2+</a></li>
        <li><a href="#">3+</a></li>
        <li><a href="#">4+</a></li>
        <li><a href="#">5+</a></li>
      </ul>
    </div>
    </li>
	
    <li>
		   <div class="btn-group">
      <a class="btn dropdown-toggle btn-select2" data-toggle="dropdown" href="#">Parking<span class="caret"></span></a>
      <ul class="dropdown-menu"aria-labelledby="dropdownMenuDivider">
          <li class="dropdown-header">Parking</li>
         <li role="separator" class="divider"></li>
        <li><a href="#">Yes</a></li>
        <li><a href="#">No</a></li>
       
      </ul>
    </div>
    </li>
<div class="btn-group">
      <button type="button" id="btnSearch" class="btn btn-primary"onclick="codeAddress()">Search</button>
</div>
    </ul>
	</div>
