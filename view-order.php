<?php
session_start();
include('functions/userfunctions.php');
include('includes/header.php');
 include('authenticate.php');

 

?>
 <div class="py-3 bg-dark">
    <div class="container">

        <h6 class="text-white">
            <a class="text-white" href="index.php">
                Home /
            </a>
            <a class="text-white" href="my-orders.php">
                My Order /
            </a>
            <a class="text-white" href="view-order.php">
                View Order Order
            </a>
        </h6>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="card card-body shadow">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header">
                        View Order
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="border p-1">
                                    <? $data['name'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('includes/footer.php'); ?>