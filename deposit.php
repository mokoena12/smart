

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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Sign in and start trading...." />
    <!-- End of meta tags -->
    
    <!-- SITE TITLE -->
    <title>Deposit</title>
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
    <body >
        <div class="wrapper-box">
            <!-- start of the sidebar -->
            <div class="sidebar">
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
                    <a href="Dashboard.php"><img  class="sidebarspace" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAH1JREFUSEvtlUsOgCAMRIeTqTfXk2lMxIUGfJnYbpRtB4bXDxQFrxJ8vtINZklDg2qPTUeM6m4E60PKKjHV/QbNhJ7Nc+0imluqs2vQ66JF0ljZXAI8n+kGFN0eNIpuFzncgKLbBHQj1dlz8GGDN+ag+1TQNsW69D8Z34wKN2WtKBmr5BH3AAAAAElFTkSuQmCC"/>
                    Dashboard</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-user"></i>Profile</a>
                </li>
                <li>
                    <a href="activity log.php"><i class="fa fa-tasks"></i>
                    Active Logs</a>
                </li>
                <li id="sidebar_active">
                    <a href="deposit.php"><i class="fa fa-exchange"></i>
                    Deposit</a>
                </li>
                <li>
                    <a href="withdrawal.php"><i class="fa fa-exchange"></i>
                    Withdrawal</a>
                </li>
                <li>
                    <a href="refferal.php"><i class="fa fa-users"></i>  Referral</a>
                    </li>
                <li>
                    <a href="#">
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
                            <h1>Deposit Transaction</h1>
                        </div>
                        <div>
                            <ul class="style">
                                <li class="change1"><a href="index.html" style="text-decoration: none; color: blue; padding-right: 5px;">Home</a></li>
                                <li class="change active">Deposit Transaction</li>
                            </ul>
                        </div>
                    </div>
                </section>
                   <!-- end of the header part -->

                   <!-- start of the content part -->
                   <section>
                    <div class="transact-flex">
                        <div class="payment">
                            <div class="span-payment">
                                <h5>Payment Methods</h5>
                            </div>
                            <form action="processor.php" method="post" >
                                <div class="payment-wallet">
                                    <select name="depositing-methods" id="methods-fund">
                                        <option value="">--Select Payment Method</option>
                                        <option value="BITCOIN">BITCOIN</option>
                                        <option value="BANK">BANK</option>
                                        <option value="Instant EFT">Instant EFT</option>
                                    </select>
                                </div>
                                <div class="for-bitcoin payment-wallet">
                                    <div>
                                        <input type="number" min="30" name="amount-paybtc" id="btc-amount" placeholder="Enter Amount" required>
                                    </div>
                                    <div class="button-sub">
                                        <input class="button" type="submit"  id="depo-btc" value="Deposit">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="notify-deposit">
                            <div class="h5change">
                                <h5>Instructions for Deposit</h5>
                            </div>
                            
                                <div class="text-deposit">
                                    <strong>
                                    <span style="color:red;">The minimun deposit is $30</span>

                                        <p>
                                            To deposit, please choose the payment method at the
                                            Payment Methods panel and make the payment.
                                        </p>
                                        <p>
                                            If you choose Bitcoin method then you will have to deposit using Bitcoin wallet like Luno
                                          </p>
                                          <p>
                                            If you choose Bank card please be adviced we only accept Visa/mastercard payment mathods
                                          </p>
                                          <p>
                                            If you choose Bank EFT then you must have online banking account and banking app
                                          </p>

                                    </strong>
                                </div>
                              
                               
                                

                        
                        </div>
                    </div>
        
                </section>

                <!-- start section for table -->
                <section>
                    <div class="history-deposit">
                        <div class="history-head">
                            <h4>Deposit History</h4>
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
                                        <th>Credited At</th>
                                        <th>Deposit Method</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                   <?php  
                   $n = 0;
                   $sql="SELECT deposit, method, deposit_date FROM deposit WHERE username = '$user'";
                    
                   $result11 = $conn->query($sql);
                      
                     if($result11 !== FALSE && $result11->num_rows> 0){
                    
                   while($n <=5 && $row2 = $result11->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row2['deposit']."</td>";
                    echo "<td></td>";
                    echo "<td>".$row2['deposit_date']."</td>";
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