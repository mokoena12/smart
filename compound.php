<?php   


require_once "connect.php";
session_start();
if (isset($_SESSION["investa_user"])){

  $user = $_SESSION["investa_user"];

}
else{

  $err = "Please login as Administrator";
  header("Location:login.php?user2=$err");
  
}

$date = time();
$get_time = "SELECT times FROM time_server WHERE username = 'Admin'";
$get_time = $conn->query($get_time)->fetch_assoc();
$get_time = $get_time["times"];
$date = ($get_time - $date)/60;
$time =  round($date);
//


if(isset($_POST["Admin_Password"]) ){

  if($_POST["Admin_Password"]=="bbb" && $time<0){

    $times = time() + 10*60;

    $checking = "UPDATE time_server SET times=$times WHERE username = 'Admin'";
    $conn->query($checking);

     
$deposit=0; $comp_balance = 0;
$Old_balance = $equity =0;
$Inv_balance = $New_bal = 0;
$Proft = 0;
$investd_amount = 0; 

function balance($A,$i,$n) {
    $Bal = $A * pow((1 + $i),$n);
   return $Bal;
}
$test = " not compounded";

function Nwbalance($rowB, $Ba){
  $nwBal = $rowB + $Ba;
  return $nwBal; 
}
function profit($B,$d){
   $Proft =  $B -$d ;
   return $Proft;
}
$sql5="SELECT typeOfInv,periods,user,amount FROM investment";
$result4 = $conn->query($sql5);
$user = $result4->fetch_assoc();

$user = $user["user"];


if($result4->num_rows> 0){ 
  $new = $conn->query($sql5);
  while($type = $new->fetch_assoc()){  
    $investd_amount =$type["amount"];
    $typeOfinv = $type["typeOfInv"];
    $sql="SELECT balance, deposit,invested_amount FROM dashboard WHERE  username='$user' ";
    $result = $conn->query($sql);


    $row = $result->fetch_assoc();
    $Old_balance =  $row["balance"];
    $deposit = $row["deposit"];

    $invested = $row["invested_amount"];
          if($typeOfinv=="Bronze"){
            $i = 0.04;
            $n=1;
            $comp_balance = balance($investd_amount,0.04,1); 
            $Inv_balance = profit($comp_balance,$investd_amount);                 
            $New_bal = Nwbalance($Old_balance,$Inv_balance);
            $equity = $New_bal - $invested;          
            $Proft = profit($New_bal,$deposit);
            
            $sql ="UPDATE dashboard SET balance = $New_bal , profit_return = $Proft, equity = $equity
             WHERE username = '$user'";
            $conn->query($sql);


         }else if($typeOfinv=="Titanium"){
          $i = 0.05;
          $n=1;
          $comp_balance = balance($investd_amount,0.05,1); 
            $Inv_balance = profit($comp_balance,$investd_amount);                 
            $New_bal = Nwbalance($Old_balance,$Inv_balance);
            $equity = $New_bal - $invested;          
            $Proft = profit($New_bal,$deposit);
          
          $sql ="UPDATE dashboard SET balance = $New_bal , profit_return = $Proft, equity = $equity
           WHERE username = '$user'";
           $conn->query($sql);
            
          }else if($typeOfinv=="Gold"){
            $i = 0.10;
            $n=1;
            $comp_balance = balance($investd_amount,0.10,1); 
            $Inv_balance = profit($comp_balance,$investd_amount);                 
            $New_bal = Nwbalance($Old_balance,$Inv_balance);
            $equity = $New_bal - $invested;          
            $Proft = profit($New_bal,$deposit);
          
          $sql ="UPDATE dashboard SET balance = $New_bal , profit_return = $Proft, equity = $equity
           WHERE username = '$user'";
           $conn->query($sql);
            
          }elseif($typeOfinv=="Diamond"){
            $i = 0.20;
            $n=1;
            $comp_balance = balance($investd_amount,0.20,1); 
            $Inv_balance = profit($comp_balance,$investd_amount);                 
            $New_bal = Nwbalance($Old_balance,$Inv_balance);
            $equity = $New_bal - $invested;          
            $Proft = profit($New_bal,$deposit);
            
            $sql ="UPDATE dashboard SET balance = $New_bal , profit_return = $Proft, equity = $equity
             WHERE username = '$user'";
            $conn->query($sql);
          }
          $result = "All investments are compounded successfully";
          header("location:compound.php?results=$result");
    }

    
}
  }
  else{

    $result = "Your password is wrong or time left is greater than 0 mins";
    header("location:compound.php?results=$result");
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
<title>Smart Investa/Compound</title>
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
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="js/dash.js"></script>

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
        <form class="box" action="#" method="post">
          <span style="color:rgb(255, 0, 119)"> <b>Time left: <?php echo $time?> mins</b></span>
            <div>
                <h2 class="h1_style">Compound Investments</h2>
                </div>
            <div class="credentials">
                <div>
                    <input type="password" name="Admin_Password" placeholder="Enter Admin Password" class="login1" required/>
                </div>
                <input type="submit"  value="Compound All" class="button"/>
            </div>
            
        
        
        </form>
        <!-- end of form -->
    </div>
    <?php if(isset($_GET["results"])){
                echo "
                <div class='notification-centerbox'>".$_GET['results']."
            <div class='closing2'>
              <i class='fa fa-close'></i>
            </div> 
          </div>
                ";
              } ?>

</body>
<!-- end of body -->
</html>

