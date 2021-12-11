<?php
//Belmiro's Tasks 
//Need to test withdrawal when they are done
//Create investment history when they are done
//Fix the equity during live trading_type
//Create pdf for terms and conditions

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
$nw = $amount;
$check = "SELECT invested_amount,balance FROM dashboard WHERE username='$user'";
$outcome = $conn->query($check);
$bal_n = 0;
if($outcome->num_rows> 0){

  $row = $outcome->fetch_assoc();
  $amount =   $amount + $row["invested_amount"];
  $bal_n = $row["balance"];

}
$equity = $bal_n - $amount;
    $type = $_POST["selectplans"];
    $period = $_POST["selectperiod"];
    $invest = "INSERT INTO investment(typeOfInv,periods,user,amount) VALUES('$type','$period','$user',$nw)"; 
    $invest1 = "UPDATE dashboard SET invested_amount=$amount,equity =$equity  WHERE  username = '$user'"; 
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
    $equity = $old + $amount;
    $dash = "UPDATE dashboard SET balance = $nwBal,deposit=$nwBal,equity=$equity
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

  mail($to,$subject,$message,$headers);
  https://web.whatsapp.com/send?text=Luno:%20%E2%98%91%EF%B8%8F%20The%20Ultimate%20Guide%20for%20Beginners%20(%20Step%20By%20Step%20Guide%20)%20https://sgq.io/vlm0oom */
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
$selecting = "SELECT referral_bonus FROM dashboard WHERE  username='$user' ";
$old_bal = $conn->query($selecting)->fetch_assoc();
$old = $old_bal["referral_bonus"];
$with = $old - $amount; 
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
  $dash = "UPDATE dashboard SET referral_bonus = $with
  WHERE username = '$user' ";
    if($conn->query($sql) && $conn->query($dash)){
      $invest_results = "Withdrawal Successfully of amount $amount using method of $method";
      header("Location:Dashboard.php?results=$invest_results");
    }

}
                                  
                                    
                                    ?>


<?php
//Processing information from index.html leave us messag form 
if(isset($_POST["subject"])){
  $email = $_POST["email"];
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $country =  $_POST["country"];
  $body = $_POST["subject"];
  /*
  $to = "info@smartinvesta.co.za;belmiromohlala34@gmail.com";
  $subject ="New message";

  $message = "
  <html>
  <head>
  <title>Clint Message</title>
</head>
<body >
<p><strong>Hi Admin </strong></p>
<p>The following person send message </p>
<p> Full name:<b> $firstname $lastname </b></p>
<p> Email Adress : $email </p>

<p> message : $body  </p>

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
  $results = "message received";
  header("Location:index.html?results=$results");

}


?>

<?php 
//Code to delete investment
if(isset($_GET["invest_delete"])){
$user = $_GET["invest_delete"];
$amount = 0;
  $type= $_GET["type"];
  $sql = "DELETE FROM investment WHERE user = '$user' AND date_inv='$type'";
  $select = "SELECT amount FROM investment WHERE user = '$user' AND date_inv='$type'";
  $select= $conn->query($select);
  while($row = $select->fetch_assoc()){
$amount = $amount + $row["amount"];
  }
  $get_amount= "SELECT invested_amount,equity,balance FROM dashboard WHERE  username='$user'";
  $get_amount = $conn->query($get_amount)->fetch_assoc();
  $amount = $get_amount["invested_amount"] - $amount;
  $equity = $get_amount["balance"] - $amount;
  
  $update = "UPDATE dashboard SET invested_amount=$amount, equity=$equity";

  if($conn->query($sql) && $conn->query($update)){
    
    echo "Your  investment of $$amount is successfully closed and  your equity  is $$equity. Please refresh the browser to see this changes";
  }
  else{
    echo "Failed to close your $type investment, Try again later";
  }
}


?>
