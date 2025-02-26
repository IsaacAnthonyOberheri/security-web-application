<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
require '../db_dbase/dbConfig.php';

?>


<title>SECURE TECH ADMIN</title>
<link href="img/nis_logo.png" rel="icon">
   <link rel='stylesheet' type='text/css' href='login.css'>
  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SECURE TECH ADMIN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->


 <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Fonts -->

<style>

</style>
</head>
<body>



<div class="row">

        <div class="column" id='left'>
          <img src=''>
        </div>


        <?php

        $error = $wrongpassword = $err23 = $_SESSION['email_validate']=$_SESSION['errormessage'] = $_SESSION['status'] = $_SESSION['password'] = $_SESSION['emailm'] = "";
        $ref = ""; $error2 = '';

        if(isset($_POST["logss"])){

        if (!empty($_POST['userid']) && !empty($_POST['userlockid']) ){

          require_once 'loginlogs.php';
          //header("location:lo.php");

        }
        if(empty($_POST['userid'])){

            $error = "fil in your email";

          }

            if(empty($_POST['userlockid'])){

            $error2 = "fil in your password";

          }

        }


        ?>



        <?php

        // $verify = $_SESSION['validated'];
        ?>

        <div class="column2">
          <form method='POST'>

            <div class='form'>
              <a href='/index.php'><div class='swan_logo'><img src='img/nis_logo.png'></div></a>
              <!--<div id='head1'><a href='/index.php'>Swan Investment</a></div>-->
              <br>
              <div id='head2'>Welcome Admin</div>
              <!-- <div id='head3'>New to Union Micro Finance?   <span id='sign'> <a href='register.php'>Sign up</a> </span></div> -->
            <div id='email'>
              <i class="bi bi-envelope" style="color:;  padding-top:18px;"></i> <input type='email' class='email' name='userid' placeholder=" Your email address" onblur="this.placeholder='Your email address'" onfocus="this.placeholder='' " > </div>
              <span id='errd'><?php echo $error; ?></span>

            <div id='password'><i class="bi bi-key-fill" style="color:;  padding-top:18px;"></i> <input type='password' class='password' name='userlockid' placeholder='  Your password' onblur="this.placeholder=' Your password'" onfocus="this.placeholder='' "></div>
              <span id='errd'><?php echo $_SESSION['errormessage']; ?></span>
              <span id='errd'><?php echo $error2; ?></span>

              <div id='submit'><i class="bi bi-box-arrow-in-right " style="color:#ffffff;  padding-top:18px;"style=' '></i> <input type='submit' class='submit' name='logss' value='Login'></div>

              <div id='forgotpassword'><a href='resetpassword.php'>Forgot Password?</a></div><br><br>
              <!-- <div id='mailconfirm'><?php echo $verify; ?></div> -->
            </div>


        </form>
        </div>





</div>









</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=tryresponsive_breakpoints by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 02:07:53 GMT -->
</html>
