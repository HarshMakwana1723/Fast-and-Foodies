<?php
session_start();
include('includes/header.php');
include('functions/userfunctions.php');

if (isset($_GET['product'])) {
    $pro_slug = $_GET['product'];
    $pro_data = getSlugActive("products", $pro_slug);
    $pro = mysqli_fetch_array($pro_data);

    if ($pro) {
?>
        <div class="py-3 bg-dark">
            <div class="container">
                <h6 class="text-white">
                    <a class="text-white" href=""></a>
                    Home /
                    <a class="text-white" href="categories.php">
                        Categories /
                    </a>
                    <?= $pro['name'] ?>
                </h6>
            </div>
        </div>
        <div class="bg-light py-4">
            <div class="container product_data mt-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="shadow">
                            <img src="uploads/<?= $pro['image']; ?>" alt="Product Image" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="fw-bold"><?= $pro['name']; ?></h4>
                        <hr>
                        <h6>Product Description:</h6>
                        <p><?= $pro['small_description']; ?></p>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Rs.<span class="text-success fw-bold"><?= $pro['selling_price']; ?></span></h5>
                                <h5>Quantity: <span class="text fw-bold"><?= $pro['qty']; ?></span></h5>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group mb-3" style="width:130px ;">
                                        <button class="input-group-text decrement-btn">-</button>
                                        <input type="text" class="form-control bg-white input-qty text-center" disabled value="1">
                                        <button class="input-group-text increment-btn">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button class="btn btn-primary px-4 addToCartBtn" value="<?= $pro['id']; ?>"><i class="bi bi-cart"> </i> Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    } else {
        echo "Product Not Found🥲";
    }
} else {
    echo "Something Went Wrong🥲";
}

include('includes/footer.php');
