<?php
//Tasks to be Completed

// Must create table for live trading with following columns : username, currency_type, currency_pair, lot_size, 
//take_profit, stop_loss, entry_price and action_select(be careful of datatypes)-- User Evidence
//Extend table of investment(Amount)
//Select Bal and deposit

// Create table for Recent trading history -- user Evidence
// Create php functions for live trading -- user Belmiro

session_start();
if (isset($_SESSION["investa_user"])){

  $user = $_SESSION["investa_user"];

}
else{

  $err = "Please login as Administrator";
  header("Location:login.php?user2=$err");
  
}
if($_SESSION["investa_user"] != "Admin"){
  header("Location:index.html");
}
require_once "connect.php";
 

//Fix this function, remember how compounds works, take the current bal
function balance($balance,int $i,int $n) {
    $Bal = $balance * (1 + $i);
   return $Bal;
}

 //this functions is correct
function profit( $Bal, $deposit){
   $Proft = $Bal - $deposit ;
   return $Proft;
}


    $sql="SELECT typeOfInv,periods,user FROM investment";
    $result1 = $conn->query($sql);
    
if($result1->num_rows> 0){ 
    //Remember we have to compound for all users in the table then using while loop it might help alot
    While($type = $result1->fetch_assoc() ){
           $typeOfinv = $type["typeOfInv"];
            $user = $type["user"];
            // Make sure you test all this functions by creating accounts with different investment types 
            if($typeOfinv=="Bronze"){
            $i = 0.03;
            $n=1;
            echo "Hi I'm $user and my investment type is $typeOfinv";
            $Proft = profit($deposit,$Bal);
            //Then go the dashboard table and update profit and Balance
            $sql ="UPDATE dashboard SET balance = '$Bal' , profit_return = '$Proft'
            WHERE username = '$user'";
            }
            elseif($typeOfinv=="Titanium"){
            $i = 0.03;
            $n=1;
            $Proft = profit($deposit,$Bal);
            echo "Hi I'm $user and my investment type is $typeOfinv";
            $sql ="UPDATE dashboard SET balance = '$Bal' , profit_return = '$Proft'
            WHERE username = '$user'";
            }
            elseif($typeOfinv=="Gold"){
            $i = 0.03;
            $n=1;
            $Proft = profit($deposit,$Bal);
            echo "Hi I'm $user and my investment type is $typeOfinv";
            $sql ="UPDATE dashboard SET balance = '$Bal' , profit_return = '$Proft'
            WHERE username = '$user'";
            }
            elseif($typeOfinv=="Diamond"){
            $i = 0.03;
            $n=1;
            $Proft = profit($deposit,$Bal);
            echo "Hi I'm $user and my investment type is $typeOfinv";
            $sql ="UPDATE dashboard SET balance = '$Bal' , profit_return = '$Proft'
            WHERE username = '$user'";
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

