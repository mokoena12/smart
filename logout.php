

<?php 
//session_destroy();
if(isset($_POST["Yes"])){
    session_start();
  session_destroy();
 $out = "THANK YOU USING INVESTA platform";
 unset($_SESSION["investa_user"]);
   header("location:index.html");
   

//}elseif(isset($_POST["No"])){
//    header("location:Dashboard.php");
}
?>

<Doctype html>
<html lang="en">
<head>
<!-- start meta tags-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Sign in and start trading...." />
<!-- End of meta tags -->

<!-- SITE TITLE -->
<title>Smart Investa/Login</title>
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">

 <!-- fonts -->
 <link rel="stylesheet" href="fonts/css/all.css">
<link rel="stylesheet" href="fonts/css/all.min.css">
<link rel="stylesheet" href="fonts/css/brands.css">
<link rel="stylesheet" href="fonts/css/brands.min.css">
<link rel="stylesheet" href="fonts/css/fontawesome.css">
<link rel="stylesheet" href="fonts/css/regular.css">
<link rel="stylesheet" href="fonts/css/regular.min.css">
<link rel="stylesheet" href="fonts/css/solid.css">
<link rel="stylesheet" href="fonts/css/svg-with-js.css">
<link rel="stylesheet" href="fonts/css/svg-with-js.min.css">
<link rel="stylesheet" href="fonts/css/v4-shims.css">
<link rel="stylesheet" href="fonts/css/v4-shims.min.css">

<!-- links of styling-->
<link rel="stylesheet" href="css/tablet.css">
<link rel="stylesheet" href="css/desktop.css">
<link rel="stylesheet" href="css/phone.css">
<link rel="stylesheet" href="css/smart.css">
<!-- javascript -->
<script type="text/javascript"> src="js/smart.js"</script>
<script type="text/javascript"> src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"</script>
<script type="text/javascript"> src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.js"</script>
<script type="text/javascript"> src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"</script>


</head>
<!-- start of body -->
 <body class="body_style">
    <!--start of header -->
    <div class="nav_link2">
        <a href="index.html">Home</a>
    </div>
    <!-- end of header -->
    <!-- start of logo -->
    <div>
        <img src="img/smart.investa.logo2.png" class="logo_img" alt="logo">
    </div>
    <!-- end of logo -->
    </div>
            <script> function thanks(){
                    alert("Thank You for using Investa platform");
                }
                 </script>
    <!-- start of form -->
    <div class="center" >
        <form class="box" action="#" method="post">
            <div>
                <h1 class="h1_style">Log out?  </h1>
           
            <div class="credentials2-logout" >
              
                <input type="submit"  name="Yes" value="Yes" class="subbtn2 button" onclick="thanks()">
                <p style="color:red"><?php $out; ?></p>
                <input type="submit"  name="No" value="No" class="subbtn3 button">
                <p style="color:red"></p>
            </div>
        </form>
        <!-- end of form -->
    </div>

</body>
<!-- end of body -->
</html>

