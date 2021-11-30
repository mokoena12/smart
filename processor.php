<?php
  
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
    $validate = 1;

    if( $type == "invalid"){
      $invest_plan_err = "Please choose valid investment Plan";
      $validate = 0;
    }
    if( $period == "invalid"){
      $invest_period_err = "Please choose valid investment Period";
      $validate = 0;
    }

    if($validate == 1){
      $invest = "INSERT INTO investment(typeOfInv,periods,user) VALUES('$type','$period','$user')";
      
      if($conn->query($invest)){
        $invest_results = "Your Investment was successfully";
        header("Location:Dashboard.php?results=$invest_results");
      }
    }

   
  }
  //END of Investing 
  
  
  ?>