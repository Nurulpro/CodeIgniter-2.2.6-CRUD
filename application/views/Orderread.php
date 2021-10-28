<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>CRUD Operations using CodeIgniter </title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  

</head>

<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Total Order List</h3> <hr />

        <!--- Success Message --->
        <?php if ($this->session->flashdata('success')) { ?>
                <p style="font-size: 20px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
            <?php } ?>

            <!---- Error Message ---->
            <?php if ($this->session->flashdata('error')) { ?>
                <p style="font-size: 20px; color:red"><?php echo $this->session->flashdata('error'); ?></p>
            <?php } ?>


         
            <a href="<?php echo site_url('insert'); ?>">
                <button class="btn btn-primary">Create User</button></a>

                <a href="<?php echo site_url('Orderinsert'); ?>">
                <button class="btn btn-primary">Create Order</button></a>


            <div class="table-responsive">

<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>OrderID</th>
<th>user_id</th>
<th>OrderNumber</th>
<th>OrderDate</th>
<th>ProductName</th>
<th>UnitePrice</th>
<th>ProductQty</th>
<th>TotalAmount</th>

<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>
<?php
$cnt=1;
foreach($result as $row)
{
?>
    <tr>
    <td><?php echo htmlentities($cnt);?></td>
    <td><?php echo htmlentities($row->user_id);?></td>
    <td><?php echo htmlentities($row->OrderNumber);?></td>
    <td><?php echo htmlentities($row->OrderDate);?></td>
    <td><?php echo htmlentities($row->ProductName);?></td>
    <td><?php echo htmlentities($row->UnitePrice);?></td>
    <td><?php echo htmlentities($row->ProductQty);?></td>
   
    <td><?php echo htmlentities($row->TotalAmount);?></td>
    <td>
<?php
//for passing row id to controller
 echo  anchor("Order/getdetails/{$row->OrderID}",' ','class="btn btn-primary btn-xs glyphicon glyphicon-pencil"')?>
</td>
<td>
<?php
//for passing row id to controller
 echo anchor("DeleteOrder/index/{$row->OrderID}",' ','class="glyphicon glyphicon-trash btn-danger btn-xs"')?>
</td>
</tr>
<?php
// for serial number increment
$cnt++;
} ?>
</tbody>
</table>
</div>
</div>
</div>
</div>