<?php
session_start();
if(isset($_SESSION['auth']))
{
    $_SESSION['message']="You are already logged in..";
    header('Location: index.php');
    exit();
}
include('includes/header.php')

?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Heyyy!</strong> <?= $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['message']);
                }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h1>Registration Form</h1>
                    </div>
                    <div class="card-body">
                        <form action="functions/authcode.php" method="post">
                            <div class="mb-3">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your Email">

                            </div>
                            <div class="mb-3">
                                <label>Shop Name</label>
                                <input type="text" name="sname" class="form-control" id="exampleInputEmail1" placeholder="Enter your Shop name">

                            </div>
                            <div class="mb-3">
                                <label>Mobile No</label>
                                <input type="number" name="mo_no"  class="form-control" maxlength="10" placeholder="Enter your Mobile No">

                            </div>
                            <div class="mb-3">
                                <label>address</label>
                                <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter your Address">

                            </div>

                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
                            </div>
                            <div class="mb-3">
                                <label>Comfirm Password</label>
                                <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                            </div>
                            <button type="submit" name="register-btn" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php') ?>