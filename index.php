<?php
session_start();
include('functions/userfunctions.php');
include('includes/header.php');
include('includes/slider.php');
?>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Our Best Selling Products</h4>
        <div class="underline"></div>
        <div class="row">

          <?php

          $trendingProducts = getAllTrending();
          if (mysqli_num_rows($trendingProducts) > 0) {
            foreach ($trendingProducts as $item) {
          ?>
              <div class="col-md-3 mb-2">
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
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Available Products</h4>
        <div class="underline"></div>
        <div class="row">

          <?php

          $Products = getAllActive("products");
          if (mysqli_num_rows($Products) > 0) {
            foreach ($Products as $item) {
          ?>
              <div class="col-md-3 mb-2">
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
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-5 bg-f2f2f2" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>About Us</h4>
        <div class="underline "></div>
        <p class="mt-2">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus error assumenda repellat? Maxime, minima exercitationem asperiores nostrum id atque? Esse architecto sapiente dolorum tempora modi ab numquam quasi tempore.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus error assumenda repellat? Maxime, minima exercitationem asperiores nostrum id atque? Esse architecto sapiente dolorum tempora modi ab numquam quasi tempore.
          <br>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas ad ipsam blanditiis reiciendis iste vero aut, quisquam dolores nihil, itaque, quam maiores repellat laborum nobis dolor nesciunt necessitatibus voluptatum laboriosam!
        </p>
      </div>
    </div>
  </div>
</div>


<div class="py-5 bg-dark" >
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h4 class="text-white">FAST & FOODIES AGENCY</h4>
        <div class="underline "></div>
        <a href="index.php" class="text-white"><i class="bi bi-house-door">Home</i></a><br>
        <a href="#" class="text-white"><i class="bi bi-file-person-fill"></i>About Us</i></a><br>
        <a href="#" class="text-white"><i class="bi bi-instagram"></i>Follow Us</a>
      </div>
      <div class="col-md-3">
        <h4 class="text-white"><i class="bi bi-building"></i>Address</h4>
        <p class="text-white">
          Lorem ipsum dolor sit amet consectetur,
          quod et ipsa architecto eligendi! 
        </p>
      </div>
      <div class="col-md-3">
        <h4 class="text-white"><i class="bi bi-phone-fill"></i>Contact Us</h4>
        <p class="text-white"><i class="bi bi-telephone-fill"></i>
         +91 00000 00000
        </p>
        <p class="text-white"><i class="bi bi-envelope-fill"></i>
        example888@gm.com
        </p>
      </div>
      <div class="col-md-3">
        <h4 class="text-white">Follow Us Us</h4>
        <i class="bi bi-instagram text-white"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="bi bi-facebook text-white"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="bi bi-whatsapp text-white"></i>&nbsp;&nbsp;&nbsp;&nbsp;
        
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>