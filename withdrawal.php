<?php
//Create table 
//create functions for balance and profit
// profit = balance - deposit
// A = P(1  + i)^n 
// investment table (user, type,period) 

session_start();

if (isset($_SESSION["investa_user"])){

  $user = $_SESSION["investa_user"];
 
}
else{
  $err = "Please login before you access dashboard";
  header("Location:login.php?user2=$err");

}

?>

<Doctype html>
  <html lang="en" class="body-style">
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
  <!-- end of fonts -->
  
  <!-- start of links styling-->
  <link rel="stylesheet" href="css/tablet.css">
  <link rel="stylesheet" href="css/desktop.css">
  <link rel="stylesheet" href="css/phone.css">
  <link rel="stylesheet" href="css/smart.css">
  <!--end of link styling-->
  
  <!-- javascript -->
  <script type="text/javascript"> src="js/smart.js"</script>
  <script type="text/javascript"> src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"</script>
  <script type="text/javascript"> src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.js"</script>
  <script type="text/javascript"> src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"</script>
  
  
  </head>
  <body class="turning">
    <div class="wrapper-box">
        <!-- start of the sidemanu -->
           <!-- start of the sidebar -->
        <div class="sidebar">
          <div class="sidebar_profile">
            <div class="sidebar-flex" >
              <img class="Pcontrol" src="img/BITCOIN.png" alt="profile">

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
                <a href="#"><i class="fa fa-tasks"></i>
                  Active Logs</a>
              </li>
              <li>
                <a href="deposit"><i class="fa fa-exchange"></i>
                  Deposit</a>
              </li>
              <li>
                <a href="Withdrawal.php"><i class="fa fa-exchange"></i>
                  Withdrawal</a>
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
              <i class="fas fa-search"></i>
              <input type="search" placeholder="Search...">
            </div>
          </header>
          <section>
            <div class="dash">
              <div>
                <h1>Withdrawal</h1>
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
                                        <strong class="float-right">$30</strong>
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
                                    <form action="">
                                        <div class="method2">
                                            <div class=".h4changing">
                                                <h4>Select Payment Method</h4>
                                            </div>
                                            <div>
                                                <select name="payment-options" id="payment-options">
                                                    <option value="">--Select Payment Method</option>
                                                    <option value="Bank">Bank</option>
                                                    <option value="Bitcoin">Bitcoin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="method2">
                                            <div class=".h4changing">
                                                <h4>Enter Amount to Withdraw</h4>
                                            </div>
                                            <div>
                                            <input type="text" name="amount" id="amount-withdraw" class="input-withdraw" placeholder="Enter Amount">
                                            </div>
                                        </div>
                                        <div class="btn-withdraw">
                                            <input type="submit" id="subbtn-withdrawal" value="Withdraw">
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
                                        <form action="#" method="post">
                                            <div class="method2">
                                                <div class=".h4changing">
                                                    <h4>Select Payment Method</h4>
                                                </div>
                                                <div>
                                                    <select name="payment-options" id="payment-options">
                                                        <option value="">--Select Payment Method</option>
                                                        <option value="Bank">Bank</option>
                                                        <option value="Bitcoin">Bitcoin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="method2">
                                                <div class=".h4changing">
                                                    <h4>Enter Amount to Withdraw</h4>
                                                </div>
                                                <div>
                                                <input type="text" name="amount" id="amount-withdraw" class="input-withdraw" placeholder="Enter Amount">
                                                </div>
                                            </div>
                                            <div class="btn-withdraw">
                                                <input type="submit" id="subbtn-withdrawal" value="Withdraw">
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
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
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
