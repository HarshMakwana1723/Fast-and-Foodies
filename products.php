<?php
session_start();
include('includes/header.php');
include('functions/userfunctions.php');

if (isset($_GET['category'])) {

  $cat_slug = $_GET['category'];
  $cat_data = getSlugActive("categories", $cat_slug);
  $cat = mysqli_fetch_array($cat_data);

  if ($cat) {

    $cid = $cat['id'];
?>
    <div class="py-3 bg-dark">
      <div class="container">
        <h6 class="text-white">
          <a class="text-white" href=""></a>
          Home /
          <a class="text-white" href="categories.php">
            Categories /
          </a>
          <?= $cat['name'] ?>
        </h6>
      </div>
    </div>
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><?= $cat['name'] ?></h1>
            <hr>
            <div class="row">
              <?php

              $pro = getProdByCategory($cid);

              if (mysqli_num_rows($pro) > 0) {

                foreach ($pro as $item) {
              ?>
                  <div class="col-md-3  mb-2">
                    <a href="product_view.php?product=<?= $item['slug']; ?>">
                      <div class="card shadow">
                        <div class="card-body">
                          <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                          <hr>
                          <h4 class="text-center text-dark"><?= $item['name']; ?></h4>
                          <hr>
                          <h4 class="text-center text-dark">Rs. <?= $item['selling_price']; ?></h4>
                        </div>
                      </div>
                    </a>
                  </div>
              <?php
                }
              } else {
                echo "No Data Available😓";
              }
              ?>
            </div>

          </div>
        </div>
        
    <?php
  } else {
    echo "Something Went Wrong🥲";
  }
} else {
  echo "Something Went Wrong🥲";
}


include('includes/footer.php'); ?>
