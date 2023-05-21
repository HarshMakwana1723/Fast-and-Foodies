<?php
session_start();
    include ("config/dbcon.php");
    if (isset($_POST['register-btn'])) 
{
    $email = $_POST['email'];
    $shopname = $_POST['sname'];
    $number = $_POST['mo_no'];
    $add = $_POST['address'];
    $pass = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $check_email = "SELECT email FROM customer_reg WHERE email='$email' ";
    $check_email_run = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($check_email_run) > 0) 
    {
        $_SESSION['message'] = "Email already Exist";
        header("location : register.php");
    }
    else 
    {

        if ($password == $cpassword)
         {
            $insert_query = "INSERT INTO customer_reg(email,shop_name,mobile_no,address,password) VALUES('$email','$sname' ,'$mo_no','$address',$password)";
            $query_run = mysqli_query($conn, $insert_query);

            if ($query_run)
             {
                $_SESSION['message'] = "Registered Successfully";
               
                header('Location : login.php');
               
            } 
            else 
            {
                $_SESSION['message'] = "Something went wrong";
                header('Location : register.php');
            }
        } 
        else 
        {
            $_SESSION['message'] = "Password do not match";
            header('Location : register.php');
        }
    }
}
?>
