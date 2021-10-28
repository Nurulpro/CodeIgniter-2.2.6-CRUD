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
            <h3>CRUD Operations using CodeIgniter</h3>
            <hr />
            <!--- Success Message --->
            <?php if ($this->session->flashdata('success')) { ?>
                <p style="font-size: 20px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
            <?php } ?>

            <!---- Error Message ---->
            <?php if ($this->session->flashdata('error')) { ?>
                <p style="font-size: 20px; color:red"><?php echo $this->session->flashdata('error'); ?></p>
            <?php } ?>


         
            <a href="<?php echo site_url('insert'); ?>">
                <button class="btn btn-primary">Create Users</button></a>

                <a href="<?php echo site_url('Order'); ?>">
                <button class="btn btn-primary">Orders</button></a>


            <div class="table-responsive">



                <table id="mytable" class="table table-bordred table-striped">
                    <thead>
                        <th>SL</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Posting Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        $cnt = 1;
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <td><?php echo htmlentities($cnt); ?></td>
                                <td><?php echo htmlentities($row->FirstName); ?></td>
                                <td><?php echo htmlentities($row->LastName); ?></td>
                                <td><?php echo htmlentities($row->EmailId); ?></td>
                                <td><?php echo htmlentities($row->ContactNumber); ?></td>
                                <td><?php echo htmlentities($row->Address); ?></td>
                                <td><?php echo htmlentities($row->PostingDate); ?></td>
                                <td>
                                    <?php
                                    //for passing row id to controller
                                    echo  anchor("Read/getdetails/{$row->id}", ' ', 'class="btn btn-primary btn-xs glyphicon glyphicon-pencil"') ?>
                                </td>
                                <td>
                                    <?php
                                    //for passing row id to controller
                                    echo anchor("Delete/index/{$row->id}", ' ', 'class="glyphicon glyphicon-trash btn-danger btn-xs"') ?>
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