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
  $selecting = "SELECT balance FROM dashboard WHERE  username='$user' ";
    $old_bal = $conn->query($selecting)->fetch_assoc();
    $old = $old_bal["balance"];

    $amount = $_POST["amount"];
    $method =  $_POST["payment-options"];
    $value = $_POST["widthdraw"];
    $nwBal = $old - $amount;
    $dash = "UPDATE dashboard SET balance = $nwBal
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
      $invest_results = "Withdrawal Successfully of amount $amount and method of $method";
      header("Location:Dashboard.php?results=$invest_results");
    }

}
                                  
                                    
                                    ?>