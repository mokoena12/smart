
<?php   
//Please fix the registration form, we lost some data when moving to Git also make sure it adds the user when registering
/*Code referral.php you will have to create a table database named referral with following columns username,friend_name,date_ref. Check the structure of referral link 
is https://www.smartinvesta.co.za/Registration.php?ref=Raps so you can see we are passing variable named ref with username of
Raps using GET method. The task is the check during registration whether ref is set and is is set take the value store it in referral table 
and also store the name of person registering with this link*/

//Code referral members table in referral.php using the table database above to do the work

/*Make sure the equity is updated everytime we enter dashboard, like now my balance is $125 and Invested_amount is
$115  but my equity is zero 
 */
//Fix your table for registration it is dublicated is registration(1).sql
//Activity logs is not fixed, activity description must be "Registration " then date it will be retrived from database
//deposit is not fixed
//Withdrawal history not fixed
/*You did not fix investment table as suggested, leave the amount column as it is don't delete it. date column must be added
//referral bonus amount it shoulb be the total number of (referrals*10)

*/

session_start();
if (isset($_SESSION["investa_user"])){

  $user = $_SESSION["investa_user"];

}
else{

  $err = "Please login as Administrator";
  header("Location:login.php?user2=$err");
  
}/*
if($_SESSION["investa_user"] != "Admin"){
  header("Location:index.html");
}*/
require_once "connect.php";
 
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

?>

<Doctype html>
  <html lang="en">
  <head>
  <!-- start meta tags-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Adminitration Site" />
  <meta http-equiv="refresh" content="">
  <!-- End of meta tags -->

  <title>Compound</title>
  
  
  </head>
  <body  >

</body>


</html>

