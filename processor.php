<?php

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

    $type = $_POST["selectplans"];
    $period = $_POST["selectperiod"];
      $invest = "INSERT INTO investment(typeOfInv,periods,user) VALUES('$type','$period','$user')"; 

      if($conn->query($invest)){
        $invest_results = "Your Investment was successfully";
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
  $trade = "INSERT INTO live_trading(username,currency_type,currency_pair,lot_size,entry_price,stop_loss,take_profit,action) 
  VALUES('$user','$currency_type','$currency_pair', $lot_size,$entry,$stop,$take,'$action')";

if($conn->query($trade)){
  $invest_results = "Your trade is successfully placed";
  header("Location:Dashboard.php?results=$invest_results");
}

  
  }

  //=====End====//
  ?>