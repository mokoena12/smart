<?php
//Belmiro's Tasks 
//Need to test withdrawal
//Create investment history when they are done
//Need to fix the profile.php


function test_input($data) {
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}
  
require_once "connect.php"; //connection 


session_start(); //check for login

if (isset($_SESSION["investa_user"])){

  $user = $_SESSION["investa_user"];
}
else{
  $err = "Please login before you access dashboard";
  header("Location:login.php?user2=$err");
}

//Start of investing 
  if(isset($_POST["selectplans"])){
//check if there is any existing investments
$amount = $_POST["invest"];
$check = "SELECT invested_amount FROM dashboard WHERE username='$user'";
$outcome = $conn->query($check);
if($outcome->num_rows> 0){
  $row = $outcome->fetch_assoc();
  $amount =   $amount + $row["invested_amount"];
}
    $type = $_POST["selectplans"];
    
    $period = $_POST["selectperiod"];
      $invest = "INSERT INTO investment(typeOfInv,periods,user) VALUES('$type','$period','$user')"; 
      $invest1 = "UPDATE dashboard SET invested_amount=$amount WHERE  username = '$user'"; 
      if($conn->query($invest) && $conn->query($invest1)){
        $invest_results = "Your Investment is successfully placed";
        header("Location:Dashboard.php?results=$invest_results");
      }
      
  }
  //END of Investing 

  //Start of live trading 

  if(isset($_POST["currency_pair"])){
    
  $currency_type = $_POST["live"];
  $currency_pair = test_input($_POST["currency_pair"]);
  $lot_size = $_POST["lot"];
  $entry = $_POST["entry"];
  $stop =  $_POST["stop"];
  $take =  $_POST["take"];
  $action =  $_POST["buyORsell"];

  if(empty($stop)){
    $stop = "";
  }

  if(empty( $take)){
    $take = "";
  }
  $trade = "INSERT INTO live_trading(username,trading_type,currency_pair,lot_size,entry_price,stop_loss,take_profit,trading_action) 
  VALUES('$user','$currency_type','$currency_pair', $lot_size,$entry,$stop,$take,'$action')";

if($conn->query($trade)){
  $invest_results = "Your trade is successfully placed";
  header("Location:Dashboard.php?results=$invest_results");
}

  
  }

  //=====End====//
  //Processing deposits depositing-methods

  if(isset($_POST["depositing-methods"])){
    $selecting = "SELECT balance,deposit FROM dashboard WHERE  username='$user' ";
    $old_bal = $conn->query($selecting)->fetch_assoc();
    $old = $old_bal["balance"];

    $amount = $_POST["amount-paybtc"];
    $method =  $_POST["depositing-methods"];
    $sql = "INSERT INTO deposit(username,amount,method) VALUES('$user',$amount,'$method')";
    $nwBal = $old + $amount;
    $dash = "UPDATE dashboard SET balance = $nwBal,deposit=$nwBal
    WHERE username = '$user' ";


    if($conn->query($sql) && $conn->query($dash)){
      $invest_results = "Deposit successfully of amount $amount using method of $method";
      header("Location:Dashboard.php?results=$invest_results");
    }
    

  }

  //=====End======//
  
  ?>

<?php 
//widthdrawal process 
if(isset($_POST["widthdraw"])){
  $selecting = "SELECT balance,total_withdrawal FROM dashboard WHERE  username='$user' ";
    $old_bal = $conn->query($selecting)->fetch_assoc();
    $old = $old_bal["balance"];
    $with = $old_bal["total_withdrawal"];

    $amount = $_POST["amount"];
    $method =  $_POST["payment-options"];
    $value = $_POST["widthdraw"];
    $nwBal = $old - $amount;
    $nw_with = $with +  $amount;
    $dash = "UPDATE dashboard SET balance = $nwBal, total_withdrawal = $nw_with
    WHERE username = '$user' ";
      /*
  $to = $email;;
  $subject ="Widthdrawal";

  $message = "
  <html>
  <head>
  <title>Widthdrawal</title>
</head>
<body >
<p><strong>Hi $firstname </strong></p>
<p>Your widthdrawal of  $amount using method $method is successfully placed. 
It will be processed within 1-2 working days, it might take long that that depending on your local bank</p>

<p><a href='https://www.smartinvesta.co.za' 
style='background-color:red; color:white;border-radius:3px;font-weight:bold;font-size:12px;padding:5px;text-decoration:none;box-shadow:3px 3px 2px black;'>Visit Our site</a></p>
<p>Kind Regards</p>
<p> Smart Investa</p>
</body>

  </html>
  ";
  $headers = "MIME-version:1.0"."\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
  $headers .= "From:info@smartinvesta.co.za"."\r\n";

  mail($to,$subject,$message,$headers); */
  if($amount<$value){
    $invest_results = "unsuccessful, your amount ($amount) is less than min widthdrawal $value";
    header("Location:withdrawal.php?results=$invest_results");
  }
  else{
    $sql = "INSERT INTO withdrawal(username,amount,method) VALUES('$user',$amount,'$method')";
    if($conn->query($sql) && $conn->query($dash)){
      $invest_results = "Withdrawal Successfully of amount $amount using method of $method";
      header("Location:Dashboard.php?results=$invest_results");
    }
   
  }
  

  }




  
if(isset($_POST["referral"])){
$amount = $_POST["amount1"];
$method =  $_POST["payment-options1"];
  /*
  $to = $email;;
  $subject ="Referral Widthdrawal";

  $message = "
  <html>
  <head>
  <title>Referral Widthdrawal</title>
</head>
<body >
<p><strong>Hi $firstname </strong></p>
<p>Your referral widthdrawal of  $amount  using method $method is successfully placed. 
It will be processed within 1-2 working days, it might take long that that depending on your local bank</p>

<p><a href='https://www.smartinvesta.co.za' 
style='background-color:red; color:white;border-radius:3px;font-weight:bold;font-size:12px;padding:5px;text-decoration:none;box-shadow:3px 3px 2px black;'>Visit Our site</a></p>
<p>Kind Regards</p>
<p> Smart Investa</p>
</body>

  </html>
  ";
  $headers = "MIME-version:1.0"."\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
  $headers .= "From:info@smartinvesta.co.za"."\r\n";

  mail($to,$subject,$message,$headers); */
  $sql = "INSERT INTO widthdrawal(username,amount,method) VALUES('$user',$amount,'$method')";
    if($conn->query($sql)){
      $invest_results = "Withdrawal Successfully of amount $amount using method of $method";
      header("Location:Dashboard.php?results=$invest_results");
    }

}
                                  
                                    
                                    ?>

<Doctype html>
<html lang="en">
<head>
<!-- start meta tags-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Admin side" />
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
 <?php echo $login_err?>
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
        <form class="box" action="#" method="post">
            <div>
                <h1 class="h1_style">Login</h1>
                <div style="color:green"><?php if(isset($_GET["user2"])){
                        echo $_GET["user2"];
                } ?>
                </div>
            </div>
            <div class="icon">
                <i class="fas fa-lightbulb">Login to your dashboard and start investing</i>
            </div>

            <div class="credentials">
                <div>
                    <input type="text" name="name" placeholder="Enter Username or Email" class="login1" required><br>
                    <input type="password" name="Password" placeholder="Enter Password" class="login1" required>
                </div>
               <div class="check">
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </div>
                <input type="submit"  name="Signin" value="Sign in" class="subbtn button">
                <p style="color:red"><?php echo $pasword_username_err ?></p>
            </div>
            <div class="link_reg">
                <a href="forgot.php">Forget password</a><br>
                Don't have an account? <a href="#">Sigh up</a>
            </div>
        
        
        </form>
        <!-- end of form -->
    </div>

</body>
<!-- end of body -->
</html>