<?php   
//Please fix the registration form, we lost some data when moving to Git also make sure it adds the user when registering
/*Code referral.php you will have to create a table database named referral with following columns username,friend_name,date_ref. Check the structure of referral link 
is https://www.smartinvesta.co.za/Registration.php?ref=Raps so you can see we are passing variable named ref with username of
Raps using GET method. The task is the check during registration whether ref is set and if it is set take the value store it in referral table 
and also store the name of person registering with this link*/

//Code referral members table in referral.php using the table database above to do the work

/*Make sure the equity is updated everytime we enter dashboard, like now my balance is $125 and Invested_amount is
$115  but my equity is zero 
 */ 
/*fix investment table, leave the amount column as it is don't delete it anymore. date column must be added. Change Datatype for period to text
//referral bonus amount it shoulb be the total number of (referrals*10)

*/

//In the recent trading history, the trading action column shoulb be sell or buy and status column shoulb be opened
/*Please initialize the dashboard for a user after registration( we discussed about this) so that when we insert for a user
 in dashboard we don't get error.
 */
 
/*redirect the user to login.php after registration if the registration was successfully with the message of
your 'Registration is successfully' */
//There was a conflict in withdrawal table database, please dob't change anything just import it as it is You added date_with =, remove that
//send us database for investment 
//code compound to properly, please import time_server table for your compound to work, login with password of Smartinvesta@2021.
//The compound works in interval of 10 mins
//Please push registration database for us don't duplicate it

/* 
We moving to online server now so you need to learn about cpanel and web server it's easy like XAMPP server and github,
to understand how cpanel works google it you can also read some guide here https://www.hostgator.com/blog/beginner-guide-cpanel/#:~:text=cPanel%20is%20the%20control%20panel%20that%20allows%20you,interface%20that%E2%80%99ll%20enable%20you%20to%20manage%20your%20website.
From now onwards if there is any change you want to make in the website you will have make it in github and then login to web host using 
URL: https://da12.domains.co.za:2222
Username: weballco
Password:xKg08J9se1
also in cpanel under file manager
*/

/*
We must start with portifolio website for Company to prepare for upwork and some projects. So I created repository
  named Portifolio, please fork it to your github account then clone it to your local repo(local github) so you can have it in your computer and 
  VS code the connect your remote repository of Portifolio with Local repo so that you can push your changes to online and pull request
*/
 
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


if(isset($_POST["Admin_Password"]) ){

  if($_POST["Admin_Password"]=="Smartinvesta@2021." && $time<0){

    $times = time() + 10*60;

    $checking = "UPDATE time_server SET times=$times WHERE username = 'Admin'";
    $conn->query($checking);

     
$deposit=0;
$balance= $equity =0;
$Bal = $nwBal = 0;
$Proft = 0;
$amount = 0; 

function balance($A,$i,$n) {
    $Bal = $A * pow((1 + $i),$n);
   return $Bal;
}
function Nwbalance($Ba,$rowB){
  $nwBal = $rowB + $Ba;
  return $nwBal; 
}
function profit($B,$d){
   $Proft = $B - $d ;
   return $Proft;
}
$sql="SELECT balance, deposit, invested_amount FROM dashboard WHERE  username='$user' ";
$result = $conn->query($sql);
if($result->num_rows> 0){
  $row = $result->fetch_assoc();
  $balance1 =  $row["balance"];
$deposit = $row["deposit"];
$investd_amount = $row["invested_amount"];
}

    $sql="SELECT typeOfInv,periods,user FROM investment";
    $result1 = $conn->query($sql);
    
if($result1->num_rows> 0){ 
  while($type = $result1->fetch_assoc()){
      
           $typeOfinv = $type["typeOfInv"];
            $user = $type["user"];
           
          if($typeOfinv=="Bronze"){
            $i = 0.04;
            $n=1;
            $balance = balance($investd_amount,0.04,1);      
            $nwBal = Nwbalance($balance1,$balance);
            $equity = $nwBal - $investd_amount;          
            $Proft = profit($nwBal,$deposit);
            
            $sql ="UPDATE dashboard SET balance = $nwBal , profit_return = $Proft, equity = $equity
             WHERE username = '$user'";
            $result3 = $conn->query($sql);

         }else if($typeOfinv=="Titanium"){
          $i = 0.05;
          $n=1;
          $balance = balance($investd_amount,0.05,1);    
            $nwBal = Nwbalance($balance1,$balance);
            $equity = $nwBal - $investd_amount;           
            $Proft = profit($nwBal,$deposit);

          $sql ="UPDATE dashboard SET balance = $nwBal , profit_return = $Proft, equity = $equity
          WHERE username = '$user'";
          $result3 = $conn->query($sql);
            
          }else if($typeOfinv=="Gold"){
            $i = 0.10;
            $n=1;
            $balance = balance($investd_amount,0.10,1);
            $nwBal = Nwbalance($balance1,$balance);
            $equity = $nwBal - $investd_amount;
            $Proft = profit($nwBal,$deposit);

            $sql ="UPDATE dashboard SET balance = $nwBal , profit_return = $Proft, equity = $equity
            WHERE username = '$user'";
            $result3 = $conn->query($sql);
            
          }elseif($typeOfinv=="Diamond"){
            $i = 0.20;
            $n=1;
            $balance = balance($investd_amount,0.20,1); 
            $nwBal = Nwbalance($balance1,$balance);
            $equity = $nwBal - $investd_amount;
            $Proft = profit($nwBal,$deposit);

            $sql ="UPDATE dashboard SET balance = $nwBal , profit_return = $Proft, equity = $equity
            WHERE username = '$user'";
            $result3 = $conn->query($sql);
          }
        
    }

}
$result = "All investments are compounded successfully";
header("location:compound.php?results=$result");
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

