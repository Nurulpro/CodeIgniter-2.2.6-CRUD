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
    <?php echo form_open('', ['name' => 'insertdata', 'autocomplete' => 'off']); ?>
    <div class="row">
        <div class="col-md-4"><b>user_id </b>
            <?php echo form_input(['name' => 'user_id', 'class' => 'form-control', 'value' => set_value('user_id')]); ?>
            <?php echo form_error('user_id', "<div style='color:red'>", "</div>"); ?>
        </div>
     
    </div>
    <div class="row">
       
        <div class="col-md-4"><b>Product Name</b>
            <?php echo form_input(['name' => 'ProductName', 'class' => 'form-control', 'value' => set_value('ProductName')]); ?>
            <?php echo form_error('ProductName', "<div style='color:red'>", "</div>"); ?>
        </div>
    </div>

     <div class="row">
        <div class="col-md-4"><b>Unite Price</b>
            <?php echo form_input(['name' => 'UnitePrice', 'class' => 'form-control', 'value' => set_value('UnitePrice')]); ?>
            <?php echo form_error('UnitePrice', "<div style='color:red'>", "</div>"); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"><b>Product Qty</b>
            <?php echo form_input(['name' => 'ProductQty', 'class' => 'form-control', 'value' => set_value('ProductQty')]); ?>
            <?php echo form_error('ProductQty', "<div style='color:red'>", "</div>"); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"><b>Total Amount</b>
            <?php echo form_input(['name' => 'TotalAmount', 'class' => 'form-control', 'value' => set_value('TotalAmount')]); ?>
            <?php echo form_error('TotalAmount', "<div style='color:red'>", "</div>"); ?>
        </div>
    </div>


    <div class="row" style="margin-top:1%">
        <div class="col-md-4">
            <?php echo form_submit(['name' => 'insert', 'value' => 'Submit']); ?>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
</body>
</html>