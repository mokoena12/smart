<?php
session_start();
if (isset($_SESSION["investa_user"])){

  $user = $_SESSION["investa_user"];

}
else{

  $err = "Please login as Administrator";
  header("Location:login.php?user2=$err");
  
}
require_once "connect.php";
$deposit = 10;
$bal = 10.6;

//Fix this function, remember how compounds works, take the current bal
function balance($deposit,int $i,int $n) {
    $Bal = $deposit * (1 + $i);
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
            $proft = profit($deposit,$bal);
            //Then go the dashboard table and update profit and Balance
            }
            elseif($typeOfinv=="Titanium"){
            $i = 0.03;
            $n=1;
            $proft = profit($deposit,$bal);
            echo "Hi I'm $user and my investment type is $typeOfinv";
            }
            elseif($typeOfinv=="Gold"){
            $i = 0.03;
            $n=1;
            $proft = profit($deposit,$bal);
            echo "Hi I'm $user and my investment type is $typeOfinv";
            }
            elseif($typeOfinv=="Diamond"){
            $i = 0.03;
            $n=1;
            $proft = profit($deposit,$bal);
            echo "Hi I'm $user and my investment type is $typeOfinv";
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

