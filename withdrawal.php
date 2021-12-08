<?php
require_once "connect.php";

session_start();

if (isset($_SESSION["investa_user"])){

  $user = $_SESSION["investa_user"];
 
}
else{
  $err = "Please login before you access dashboard";
  header("Location:login.php?user2=$err");

}

?>

<!DOCTYPE html>
  <html lang="en">
  <head>
  <!-- start meta tags-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sign in and start trading...." />
  <!-- End of meta tags -->
  
  <!-- SITE TITLE -->
  <title>Withdrawal</title>
  <!-- Latest Bootstrap min CSS -->
  <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
  
   <!--start of fonts -->
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
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="shortcut icon" href="img/smart.investa.logo2.png" />
  <!-- end of fonts -->
  
  <!-- start of links styling-->
  <link rel="stylesheet" href="css/tablet.css">
  <link rel="stylesheet" href="css/desktop.css">
  <link rel="stylesheet" href="css/phone.css">
  <link rel="stylesheet" href="css/smart.css">
  <!--end of link styling-->
  
  <!-- javascript -->
  <script type="text/javascript" src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.js"></script>
  <script type="text/javascript" src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="js/dash.js"></script>
  
  </head>
  <body class="turning">
    <div class="wrapper-box">
        <!-- start of the sidemanu -->
           <!-- start of the sidebar -->
        <div class="sidebar">
            <div class="closing2 closing3">
                <i class="fa fa-close"></i>
            </div> 
          <div class="sidebar_profile">
            <div class="sidebar-flex" >
            <?php 
                        $avatar = "profiles/$user.png";
                        if(!file_exists($avatar)){
                            $avatar = "profiles/male.png";
                        }
                        ?>
                        <img class="Pcontrol" src="<?php echo $avatar?>" alt="profile">

              <span><?php echo "Hi ".$user; ?></span>

             
            </div>
          </div>
          <div class="sidebar-manus">
            <ul>
              <li>
                <a href="Dashboard.php"><i class="fa fa-home"></i>
                Dashboard</a>
              </li>
              <li>
                <a href="profile.php"><i class="fa fa-user"></i>Profile</a>
              </li>
              <li>
                <a href="activity log.php"><i class="fa fa-tasks"></i>
                  Active Logs</a>
              </li>
              <li>
                <a href="deposit.php"><i class="fa fa-exchange"></i>
                  Deposit</a>
              </li>
              <li id="sidebar_active">
                <a href="withdrawal.php"><i class="fa fa-exchange"></i>
                  Withdrawal</a>
              </li>
              <li>
                <a href="refferal.php"><i class="fa fa-users"></i>  Referral</a>
                </li>
              <li>
                <a href="subscription.php">
                  <i class="fa fa-credit-card"></i>
                  Subscription
                </a>
                
              </li>
              <li>
                <a href="logout.php"><i class="fa fa-sign-out"></i>Log out</a>
              </li>
  
            </ul>
          </div>
        </div>
  
        <!-- start of the hearder part -->
        <div class="w-box" >
          <header class="header-dash">
            <div>
              <a href="#"><img src="img/smart.investa.logo2.png" class="logo_1" alt="logo"></a>
            </div>
            <div class="search">
              <i class="fas fa-search" onclick="search()"></i>
              <input type="search" name="search_d" id="search_d" placeholder="Search...">
            </div>
            <div class="menu-left manu-right">
              <div class="bars"></div>
              <div class="bars"></div>
              <div class="bars"></div>
            </div>
          </header>
          <section>
            <div class="dash">
              <div>
                <h1>Withdrawal </h1>
              </div>
              <div>
                <ul class="style">
                  <li class="change1"><a href="index.html" style="text-decoration: none; color: blue; padding-right: 5px;">Home</a></li>
                  <li class="change active">Withdrawal Transaction</li>
                </ul>
              </div>
            </div>
          </section>
          <!-- end of the header part -->
  

                <!-- start of withdrawal contents -->
                <section>
                    <div class="withdrawal-fullbody">
                        <div class="flexdive">
                            <div class="withdraw-box">
                                <div class="h5withdraw">
                                    <h5>BITCOIN</h5>
                                </div>
                                <div class="content-bances">
                                    <p class="pfloater">
                                        <span>Minimum Amount:</span>
                                        <?php
                                        $sql = "SELECT typeOfInv FROM investment WHERE user = '$user'";
                         
                                        $bal = "SELECT balance,equity,referral_bonus FROM dashboard WHERE username = '$user' ";
                                      
                                        $result = $conn->query($sql);
                                        $bal_r = $conn->query($bal);
                                        $bal_v =  $bal_r->fetch_assoc();
                                        $value=30;
                                        if($result->num_rows > 0){
                                            while($row = $result->fetch_assoc()){
                                                if($row["typeOfInv"] == "Bronze"){
                                                    $value= $value + 600;
                                                }
                                                else if($row["typeOfInv"] == "Titanium"){
                                                    $value= $value + 1000;
                                                }
                                                else if($row["typeOfInv"] == "Gold"){
                                                    $value= $value + 1500;
    
                                                }
                                                else{
                                                    $value= $value + 1600;
    
                                                }

                                            }
                                            

                                        }
                                        else{
                                            if($bal_v["balance"]<50){
                                                $value= $value + 30; 
                                            }
                                            else if($bal_v["balance"]>50 && $bal_v["balance"]<600){
                                                $value= $value + 600;
                                            }
                                            else if($bal_v["balance"]>600 && $bal_v["balance"]<1000){
                                                $value= $value + 1000;
                                            }
                                            else if($bal_v["balance"]>1000){
                                                $value= $value + 1600;
                                            }
                                        }
                                        
                                        ?>
                                        <strong class="float-right">$<?php echo $value?></strong>
                                    </p>
                                    <p class="pfloater">
                                        <span>Maximun Amount:</span>
                                        <strong class="float-right">$1 000 000.00</strong>
                                    </p>
                                    <p class="pfloater">
                                        <span>Charges:</span>
                                        <strong class="float-right">$0</strong>
                                    </p>
                                    <p class="pfloater">
                                        <span>Duration:</span>
                                        <strong class="float-right">1-2 days</strong>
                                    </p>
                                    
                                    <form action="processor.php" method="post" onsubmit="return withdrawal(<?php echo $bal_v['equity'] ?>)">
                                        <div class="method2">
                                            <div class=".h4changing">
                                                <h4>Select Payment Method</h4>
                                            </div>
                                            <div>
                                                <select name="payment-options" id="payment-options" required>
                                                    <option value="">--Select Payment Method</option>
                                                    <option value="Bank">Bank</option>
                                                    <option value="Bitcoin">Bitcoin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="number" value="<?php echo $value?>" name="widthdraw" hidden>
                                        <div class="method2">
                                            <div class=".h4changing">
                                                <h4>Enter Amount to Withdraw</h4>
                                            </div>
                                            <div>
                                            <input type="number" name="amount" min="30" id="amount-withdraw" class="input-withdraw" placeholder="Enter Amount" required>
                                            </div>
                                        </div>
                                        <div class="btn-withdraw">
                                            <input class="button" type="submit" id="subbtn-withdrawal" value="Withdraw">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="withdrawal-bonus">
                                <div>
                                    <div class="h5withdraw">
                                        <h5>REFFERAL BONUS</h5>
                                    </div>
                                    <div class="content-bances">
                                        <p class="pfloater">
                                            <span>Minimum Amount:</span>
                                            <strong class="float-right">$10</strong>
                                        </p>
                                        <p class="pfloater">
                                            <span>Maximun Amount:</span>
                                            <strong class="float-right">$100 000.00</strong>
                                        </p>
                                        <p class="pfloater">
                                            <span>Charges:</span>
                                            <strong class="float-right">$0</strong>
                                        </p>
                                        <p class="pfloater">
                                            <span>Duration:</span>
                                            <strong class="float-right">1-2 days</strong>
                                        </p>
                                        <form action="processor.php" method="post" onsubmit="return withdrawal_r(<?php echo $bal_v['referral_bonus'] ?>)">
                                            <div class="method2">
                                                <div class=".h4changing">
                                                    <h4>Select Payment Method</h4>
                                                </div>
                                                <div>
                                                    <select name="payment-options1" id="payment-options1" required>
                                                        <option value="">--Select Payment Method</option>
                                                        <option value="Bank">Bank</option>
                                                        <option value="Bitcoin">Bitcoin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="text" value="referral" name="widthdraw" hidden>
                                            <div class="method2">
                                                <div class=".h4changing">
                                                    <h4>Enter Amount to Withdraw</h4>
                                                </div>
                                                <div>
                                                <input type="number" min="10" name="amount1" id="amount-withdraw1" class="input-withdraw" placeholder="Enter Amount" required>
                                                </div>
                                            </div>
                                            <div class="btn-withdraw">
                                                <input class="button" type="submit" id="subbtn-withdrawal" value="Withdraw">
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- start section for table -->
                        <section>
                            <div class="history-deposit">
                                <div class="history-head">
                                    <h4>Withdrawal History</h4>
                                </div>
                                <div class="entry-search">
                                    <div class="select-entry">
                                        Show
                                        <select name="entries" id="entries">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        entries
                                    </div>
                                    <div class="search-btn">
                                        <label for="search" >
                                            Search:
                                            <input type="search" >
                                        </label>
                                    </div>
                                </div>
                                <div class="table-table">
                                    <table class="table-ta">
                                        <thead class="tablehead2">
                                            <tr>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Created At</th>
                                                <th>method</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                             
                   <?php  
                   $n = 0;
                    
                    $sql_w="SELECT amount, date_w, method FROM withdrawal WHERE username = '$user'";
                    
                   $result_w = $conn->query($sql_w); 
                    if($result_w !== FALSE && $result_w->num_rows> 0){
                    
                   while($n<=5 && $row2 = $result11->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row2['deposit']."</td>";
                    echo "<td></td>";
                    echo "<td>".$row2['date_w']."</td>";
                    echo "<td>".$row2['method']."</td>";
                    echo "</tr>";
                    $n++; 
                     }
                   }
                   ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="end-part">
                                    <div class="end-shift">
                                        Showing 0 to 0 0f 0 entries 
                                    </div>
                                    <div class="prev-next">
                                        <ul>
                                            <li>
                                                <a href="#">Previous</a>
                                            </li>
                                            <li>
                                                <a href="#">Next</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- end secton for table -->

                    </div>
                </section>
                <?php if(isset($_GET["results"])){
                echo "
                <div class='notification-centerbox'>".$_GET['results']."
            <div class='closing2'>
              <i class='fa fa-close'></i>
            </div> 
          </div>
                ";
              } ?>

                <!-- start section for the footer -->
                 <!-- start of the footer -->
                 <footer class="footer">
                    <strong>
                    Copyright &copy
                    <a href="#">SmartInvesta</a>
                    .All right reseved

                    </strong>

                </footer>
                <!-- end of the footer -->

                <!-- end section for the footer -->
        
            </div>
        </div>
        
    </body>
</html>
