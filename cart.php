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
            <a class="text-white" href="cart.php">
                Cart
            </a>
        </h6>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="card card-body shadow">
            <div class="row">
                <div class="col-md-12">
                    <div id="mycart">
                <?php
                        $item = getcart();

                        if(mysqli_num_rows($item) > 0){
                            ?>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <h6>Product</h6>
                        </div>
                        <div class="col-md-3">
                            <h6>Price</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Quantity</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Remove</h6>
                        </div>
                    </div>
                    <div id="mycart">
                        <?php
                        foreach ($item as $cite) {
                        ?>
                            <div class="card prod_data shadow-sm mb-3]">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="uploads/<?= $cite['image']; ?>" alt="Product Image" width="80px">
                                    </div>
                                    <div class="col-md-3">
                                        <h5><?= $cite['name']; ?></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>Rs <?= $cite['selling_price']; ?></h5>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="hidden" class="prodId" value="<?= $cite['prod_id']; ?>">
                                        <div class="input-group mb-2" style="width:130px ;">
                                            <button class="input-group-text decre-btn updateQty">-</button>
                                            <input type="text" class="form-control bg-white inp-qty text-center" disabled value="<?= $cite['prod_qty']; ?>">
                                            <button class="input-group-text incre-btn updateQty">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-danger btn-sm deleteItem" value="<?= $cite['cid']; ?>">
                                            <i class="bi bi-trash3 me-2"></i>Remove
                                        </button>
                                    </div>
                                </div>
                            </div>

                        <?php
                        
                        }
                        ?>
                    </div>
                    <div class="float-end">
                        <a href="checkout.php" class="btn btn-outline-primary ">Procced to Checkout</a>
                    </div>
                        <?php 
                        } else{
                            ?>
                            <div class="card card-body text-center">
                                <h4 class="py-3">YOUR CART IS EMPTY</h4>
                            </div>
                            <?php

                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include('includes/footer.php'); ?>