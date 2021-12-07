
<?php

require_once "connect.php";

function test_input($data) {
    $data = htmlspecialchars($data);
    return $data;
  }
  $validated = 1; $pass_err = $pop_up = '';

if(isset($_POST["name"])){
$user = test_input($_POST["name"]);
$pass = test_input($_POST["Password"]);

$sql = "SELECT passwords FROM registration WHERE username='$user' ";
$reset = "UPDATE registration SET passwords='$pass' WHERE username='$user' ";
$results = $conn->query($sql);

if($_POST["Password"] != $_POST["Password2"]){
    $validated = 0;
    $pass_err = "Your passwords don't match";
}

if($validated == 1){
            
        if($results->num_rows>0){

            if($conn->query($reset)){
                $value1 = "Password is successfully updated!";
                header("Location:login.php?user2=$value1");
            }
            else{
            echo "<script type='text/javascript'> alert('Error(101): Try again later'); </script>";
            }
        
        }
        else{
            echo  "<script type='text/javascript'> alert('Invalid Username'); </script>";
        }
}

   
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
<script type="text/javascript"> src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"</script>
<script type="text/javascript"> src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.js"</script>
<script type="text/javascript"> src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"</script>

<?php echo $pop_up;?>
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
    <!-- start of form -->
    <div class="center">
        <form class="box" action="forgot.php" method="post">
            <div>
                <h1 class="h1_style">Reset Password </h1>
            </div>
            <div class="icon">
                <i class="fas fa-lightbulb"> Enter credentials</i>
            </div>
            <div style ="color:red;"> <?php echo $pass_err;?> </div>
            <div class="credentials">
                <div>
                    <input type="text" name="name" placeholder="Enter Username" class="login1" required><br>
                    <input type="password" name="Password" placeholder="Enter new Password" class="login1" required>
                    <input type="password" name="Password2" placeholder="Re-enter new Password" class="login1" required>
                </div>
                <input type="submit"  name="Re-new" value="Re-new" class="subbtn button">
            </div>
        </form>
        <!-- end of form -->
    </div>

</body>
<!-- end of body -->
</html>
