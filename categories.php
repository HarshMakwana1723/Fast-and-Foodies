<?php
session_start();
include('includes/header.php');
include('functions/userfunctions.php');
?>
<div class="py-3 bg-dark">
  <div class="container">
    <h6 class="text-white">
      <a class="text-white" href="index.php">
      Home /
      </a>
       Categories</h6>
  </div>
</div>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Our Categories</h1>
        <hr>
        <div class="row">
          <?php

          $cat = getAllActive("categories");

          if (mysqli_num_rows($cat) > 0) {

            foreach ($cat as $item) {
          ?>
              <div class="col-md-3  mb-2">
                <a href="products.php?category=<?= $item['slug']; ?>">
                  <div class="card shadow">
                    <div class="card-body">
                      <img src="uploads/<?= $item['image']; ?>" alt="Category Image" class="w-100">
                      <h4 class="text-center"><?= $item['name']; ?></h4>
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
  </div>



  <?php include('includes/footer.php'); ?>