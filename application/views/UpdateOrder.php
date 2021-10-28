<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>CRUD Operations using CodeIgniter </title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

   
</head>
<body>
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Insert Record | Create Order</h3>
            <hr />
        </div>
    </div>

<!--- Success Message --->
<?php if ($this->session->flashdata('success')) { ?>
<p style="font-size: 18px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
<?php }?>
<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) { ?>
<p style="font-size: 18px; color:red"><?php	echo $this->session->flashdata('error'); ?></p>
 <?php } ?>
<?php echo form_open('OrderInsert/updatedetails',['name'=>'insertdata','autocomplete'=>'off']);?>
<?php echo form_hidden('rdOerID',$row->OrderID);?>

   
    <div class="row">
        <div class="col-md-4"><b>user_id </b>
            <?php echo form_input(['name' => 'user_id', 'class' => 'form-control', 'value' => set_value('user_id',$row->user_id)]); ?>
            <?php echo form_error('user_id', "<div style='color:red'>", "</div>"); ?>
        </div>
     
    </div>
    <div class="row">
       
        <div class="col-md-4"><b>Product Name</b>
            <?php echo form_input(['name' => 'ProductName', 'class' => 'form-control', 'value' => set_value('ProductName',$row->ProductName)]); ?>
            <?php echo form_error('ProductName', "<div style='color:red'>", "</div>"); ?>
        </div>
    </div>

     <div class="row">
        <div class="col-md-4"><b>Unite Price</b>
            <?php echo form_input(['name' => 'UnitePrice', 'class' => 'form-control', 'value' => set_value('UnitePrice',$row->UnitePrice)]); ?>
            <?php echo form_error('UnitePrice', "<div style='color:red'>", "</div>"); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"><b>Product Qty</b>
            <?php echo form_input(['name' => 'ProductQty', 'class' => 'form-control', 'value' => set_value('ProductQty',$row->ProductQty)]); ?>
            <?php echo form_error('ProductQty', "<div style='color:red'>", "</div>"); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"><b>Total Amount</b>
            <?php echo form_input(['name' => 'TotalAmount', 'class' => 'form-control', 'value' => set_value('TotalAmount',$row->TotalAmount)]); ?>
            <?php echo form_error('TotalAmount', "<div style='color:red'>", "</div>"); ?>
        </div>
    </div>


    <div class="row" style="margin-top:1%">
        <div class="col-md-4">
            <?php echo form_submit(['name' => 'insert', 'value' => 'UpdateOrder']); ?>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
</body>
</html>