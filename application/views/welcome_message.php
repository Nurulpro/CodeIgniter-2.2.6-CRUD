
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>CURD Operation using CodeIgniter  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>

<div class="container">

<div class="row">
<div class="col-md-12">
<h3>Insert Record |  CRUD Operations using CodeIgniter</h3>
<hr />
</div>
</div>
	

<form action="<?php echo base_url('welcome/insert'); ?>" name="insertdata" autocomplete="off" method="post" accept-charset="utf-8">
<div class="row">
<div class="col-md-4"><b>First Name</b>
<input type="text" name="firstname" value="" class="form-control"  />
	
</div>
<div class="col-md-4"><b>Last Name</b>
<input type="text" name="lastname" value="" class="form-control"  />
	

</div>
</div>

<div class="row">
<div class="col-md-4"><b>Email id</b>
<input type="text" name="emailid" value="" class="form-control"  />
	
	
</div>
<div class="col-md-4"><b>Contactno</b>
<input type="text" name="contactno" value="" class="form-control"  />
	
	
</div>
</div>  



<div class="row">
<div class="col-md-8"><b>Address</b>
<textarea name="address" cols="40" rows="10" class="form-control" ></textarea>
	
</div>
</div>  

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit"  />
	

</div>
</div> 
     
</form>       
</div>
</div>
</body>
</html>