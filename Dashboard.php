<?php
//Tasks to be completed by front-end

//Fix the html tag for withdrawal(is not closed and it has class) check this for all other files in dashboard(deposit.php,profile.php, etc....)
//Code investing History
//Code notification pop_up
//Change the deposit history in withdrawal it should be withdrawal history and also change it in activity logs it should be Activity logs History
//change Account details form in profile it shoulb be account holder's Full name and also add Bank name and card number
//Fix the hovering of dashboard panel it
//Put button in live trading history table, the button is named close under action column
//fix side_panel for deposit is not displaying name of user below avatar
//Fix the size of logo for login/registration and logout
//Fix the subscription link in side_panel href should be # on subscription.php
//Fix the search engine for deposit.php, withdrawal.php ,etc it should be working like dashboard.php
session_start();

if (isset($_SESSION["investa_user"])){

  $user = $_SESSION["investa_user"];
}
else{
  $err = "Please login before you access dashboard";
  header("Location:login.php?user2=$err");
}

require_once "connect.php";

$balance = $profit_return = $bonus = $total_deposit = $total_withdrawal = $deposit = $withdrawal = "";
$typeOfInv=  $invest_plan_err= $invest_period_err= $invest_results="";


$sql="SELECT balance, profit_return, bonus, total_deposit, total_withdrawal, deposit, withdrawal FROM dashboard WHERE  username='$user' ";
$result = $conn->query($sql);
if($result->num_rows> 0){
  $row = $result->fetch_assoc(); 
$balance =  $row["balance"];
 $profit_return = $row["profit_return"];
 
 $bonus = $row["bonus"];
 $total_deposit = $row["total_deposit"];
 $total_withdrawal = $row["total_withdrawal"];
 $deposit = $row["deposit"];
 $withdrawal = $row["withdrawal"];
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
  <title>Dashboard</title>
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
  
  <script type="text/javascript"> src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"</script>
  <script type="text/javascript"> src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.js"</script>
  <script type="text/javascript"> src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"</script>
  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="js/dash.js"></script>
  </head>
  <body class="turning">
  

  
<!--Widget scripts for loading price-->
<script type="text/javascript" src="js/widget.js"></script>
<script type="text/javascript" src="js/coingecko-coin-compare-chart-widget.js"></script>
<script type="text/javascript" src="js/coingecko-coin-price-marquee-widget.js"></script>
<!--end scripts -->
  </head>
  <body class="turning" >
    <div class="wrapper-box">
        <!-- start of the sidemanu -->
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
              <li>
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
          </header>
          <section>
            <div class="dash">
              <div>
                <h1>Dashboard <span style="color:green"><?php if(isset($_GET["results"])){
                echo $_GET["results"];
              } ?></span></h1>
              </div>
              <div>
                <ul class="style">
                  <li class="change1"><a href="index.html" style="text-decoration: none; color: blue; padding-right: 5px;">Home</a></li>
                  <li class="change active">Dashboard</li>
                </ul>
              </div>
            </div>
          </section>
          <!-- end of the header part -->
  
          <!-- start of a new section for boxes -->
            <div class="dash_content">
              <!-- start of balance box -->
              <div class="box_balance">
                <div class="info_icon">
                  <a href="#" class="elevation-1">
                    <i class="fa fa-money"></i>
                  </a>
                </div>
                <div class="infom">
                  <span class="personal_balance">Balance</span>
                  <span class="money_balance"></span>
                  <span class="money_balance">$ <?php echo $balance;?></span>

                </div>
              </div>
              <!-- end of the balance box  -->
      
              <!-- start of profit box money -->
              <div class="box_balance2">
                <div class="info_icon">
                  <a href="#" class="elevation-1">
                    <i class="fa fa-money"></i>
                  </a>
                </div>
                <div class="infom">
                  <span class="personal_balance">Profit Return</span>
                  <span class="money_balance">$ <?php echo $profit_return;?></span>
                </div>
              </div>
              <!-- end of profit box -->
      
              <!-- start of bonus box -->
              <div class="box_balance3">
                <div class="info_icon">
                  <a href="#" >
                    <i class="fa fa-money"></i>
                  </a>
                </div>
                <div class="infom">
                  <span class="personal_balance">Referral Bonus</span>
                  <span class="money_balance">$ <?php echo $bonus;?></span>
                </div>
              </div>
              <!-- end of bonus box -->
      
              <!-- start of total deposit box -->
              <div  class="box_balance4">
                <div class="info_icon">
                  <a href="#" >
                    <i class="fa fa-money"></i>
                  </a>
                </div>
                <div class="infom">
                  <span class="personal_balance">Invested Amount</span>
                  <span class="money_balance">$ <?php echo $total_deposit;?></span>
                </div>
      
              </div>
              <!-- end of deposit box -->
      
              <!-- start of total withdraw box -->
              <div  class="box_balance5">
                <div class="info_icon">
                  <a href="#" >
                    <i class="fa fa-money"></i>
                  </a>
                </div>
                <div class="infom">
                  <span class="personal_balance">Total withdrawal</span>
                  <span class="money_balance">$ <?php echo $total_withdrawal;?></span>
                </div>
              </div>
              <!-- end of total withdraw box -->
      
              <!-- start of deposit box -->
              <div  class="box_balance6">
                <div class="info_icon">
                  <a href="#" >
                    <i class="fa fa-exchange"></i>
                  </a>
                </div>
                <div class="infom">
                  <span class="personal_balance">Deposit</span>
                  <span class="money_balance">$ <?php echo $deposit;?></span>
                </div>
              </div>
              <!-- end of deposit box -->
      
      
              <!-- start of withdrawal -->
              <div  class="box_balance7">
                <div class="info_icon">
                  <a href="#" >
                    <i class="fa fa-exchange"></i>
                  </a>
                </div>
                <div class="infom">
                  <span class="personal_balance">Equity</span>
                  <span class="money_balance" id="prices2">$ <?php echo $withdrawal?></span>
                </div>
      
              </div>
              <!-- end of withdrawal -->
      
              <!-- start of subscription -->
              <div  class="box_balance8">
                    <div class="info_icon">
                      <a href="#" >
                        <i class="fa fa-credit-card"></i>
                      </a>
                    </div>
                    <div class="infom">
                      <span class="personal_balance">Subscription</span>
                      <span class="money_balance">Not Subscribed</span>
                    </div>
              </div>
              <!-- end of subscription -->
  
  
              <!-- start of the notification -->
              <div  class="box_balance9">
                <div class="info_icon">
                  <a href="#" >
                    <i class="fa fa-bullhorn"></i>
                  </a>
                </div>
                <div class="infom">
                  <span class="personal_balance">Notifications</span>
                  <span class="money_balance">Account is Active</span>
                </div>
              </div>
              <!-- end of the notification -->
            </div>
          <!-- end of a new section for boxes -->
          <div class="investing-BOX">
            <form class="trading1" action="processor.php" onsubmit="return invest_valid(<?php echo $balance; ?>)" method="POST">
              <div class="header_TO">
                <span>INVESTING PLAN</span>
              </div>
              
              <div class="control-plan"> 
                <div class="invest-inputs">
                  <div class="selectionplan">

                    <select name="selectplans" id="selectplans-period" onclick="swipe()">
                      <option value="invalid">--Choose Investment plan--</option>
                      <option value="Bronze">Bronze</option>
                      <option value="Titanium">Titanium</option>
                      <option value="Gold">Gold</option>
                      <option value="Diamond">Diamond</option>
                    </select>
                   
                  </div>
                  <div >
                    <input type="number" min="0"  name="invest" id="invest1" class="selectionplan2" placeholder="Amount to Invest" required>
                  </div>
                  <div>
                    <select name="selectperiod" id="selectplans-period1">
                      <option value="invalid">--Choose Investment period--</option>
                      <option value="1 week">1 week</option>
                      <option value="2 weeks">2 weeks</option>
                      <option value="3 weeks">3 weeks</option>
                      <option value="1 month">1 month</option>
                      <option value="2 months">2 months</option>
                      <option value="3 months">3 months</option>
                      <option value="4 months">4 months</option>
                      <option value="5 months">5 months</option>
                      <option value="6 months">6 months</option>
                      <option value="1 year">1 year</option>
                      <option value="2 years">2 years</option>

                    </select>
                    
                  </div>
                  <div class="btnex">
                    <input class="button" type="submit" id="btnexecute" value="Invest">
                  </div>
               </div>
               <div class="invest-cards card" id="invest-cards1">
                  <h3>Bronze</h3>
                  <h5>Minimun Amount: $30 <br>
                    Maximum Amount: $1000 <br>
                  Interest rate: 3% daily</h5>
                  <p>This investment is commpounded daily <br>
                    meaning your investment will increase by 3% <br>
                    every day. Investment period is the time you <br>
                    wand this investment to last before you can <br>
                    withdraw your money. 
                  </p>
               </div>
               <div class="invest-cards card" id="invest-cards2">
                  <h3>Titanium</h3>
                  <h5>Minimun Amount: $50 <br>
                    Maximum Amount: $1500 <br>
                  Interest rate: 5% daily</h5>
                  <p>This investment is commpounded daily <br>
                    meaning your investment will increase by 5% <br>
                    every day. Investment period is the time you <br>
                    wand this investment to last before you can <br>
                    withdraw your money. 
                  </p>
                </div> 
                <div class="invest-cards card" id="invest-cards3">
                  <h3>Gold</h3>
                  <h5>Minimun Amount: $100 <br>
                    Maximum Amount: $5000 <br>
                  Interest rate: 10% daily</h5>
                  <p>This investment is commpounded daily <br>
                    meaning your investment will increase by 10% <br>
                    every day. Investment period is the time you <br>
                    wand this investment to last before you can <br>
                    withdraw your money. 
                  </p>
               </div>
               <div class="invest-cards card" id="invest-cards4">
                  <h3>Diamond</h3>
                  <h5>Minimun Amount: $200 <br>
                    Maximum Amount: $10000 <br>
                  Interest rate: 20% daily</h5>
                  <p>This investment is commpounded daily <br>
                    meaning your investment will increase by 20% <br>
                    every day. Investment period is the time you <br>
                    wand this investment to last before you can <br>
                    withdraw your money. 
                  </p>
                </div>                                               
              </div>
              <div class="highlight-terms">
                <p>By executing this investment, You agree to our terms and conditions (visit <a href="#">Terms</a>) to read more</p>
              </div>
              <div class="btnex2">
                <input type="submit" id="btnexecute2" value="Invest">
              </div>
              
            </form>
          </div>
          <!-- end of investing plan -->
  
          <!-- start of wedge side -->
          <div class="wedges">
              <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%2C%7B%22description%22%3A%22LTC%2FUSD%22%2C%22proName%22%3A%22LITECOIN%22%7D%2C%7B%22description%22%3A%22XRP%2FUSD%22%2C%22proName%22%3A%22BITSTAMP%3AXRPUSD%22%7D%2C%7B%22description%22%3A%22ETH%2FXBT%22%2C%22proName%22%3A%22KRAKEN%3AETHXBT%22%7D%5D%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22largeChartUrl%22%3A%22%22%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22user.primefxtradeline.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%7D" style="box-sizing: border-box;  width: 100%;"></iframe>
          </div>
          <!-- end of wedge side -->
          <div class="chart">
            <div class="div-chart">
              <span>BTC/USD Chart</span>
            </div>
             <!-- TradingView Widget BEGIN -->

            <div class="btc-chart"> 
                  <iframe  src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_5a3ca&amp;symbol=COINBASE%3ABTCUSD&amp;interval=D&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=dark&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;showpopupbutton=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;showpopupbutton=1&amp;locale=en&amp;utm_source=user.primefxtradeline.com&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=COINBASE%3ABTCUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
            </div>

              <!-- TradingView Widget END -->
          </div>
  
          <!-- start of the live tradings -->
          <div class="container_box">
            <form class="trading" action="processor.php" method="post">
              <div class="header_for">
                <span>Live Trading</span>
              </div>
              <div class="control"> 
                <div>
                  <select name="live" id="cryptoforex">
                    <option value="Cryptocurrency">Cryptocurrency</option>
                    <option value="Forex">Forex</option>
                  </select>
                </div>
                <div class="controlmin_1">
                  <div>
                    <label for="currency">Currency pair*</label><br>
                    <input type="text" name="currency_pair" id="currency" placeholder="Enter currency pair for example:BTC/ETH" required>
                  </div>
                  <div>
                    <label for="lotsize">Lot size*</label><br>
                    <input type="number" min="0" name="lot" id="lotsize" placeholder="Enter lotsize" required>
                  </div>
                </div>
                <div class="controlmin_2">
                  <div>
                    <label for="entry">Entry Price*</label><br>
                    <input type="number" min="0" name="entry" id="entry" placeholder="Enter price entry" required>
                  </div>
                  <div>
                    <label for="stoploss">Stop loss(optional)</label><br>
                    <input type="number" min="0" name="stop" id="stoploss" placeholder="Enter stop loss" >
                  </div>
                  <div>
                    <label for="takeprofit">Take profit(optional)</label><br>
                    <input type="number" min="0" name="take" id="takeprofit" placeholder="Enter TP" required>
                  </div>
                </div>
                <div class="select-input">
                  <label for="input">Select Action*</label><br>
                  <select name="buyORsell" id="execute">
                    <option value="Buy">Buy</option>
                    <option value="Sell">Sell</option>
                  </select>
                </div>
                <div>
                  <input type="submit" class="btnsub" value="execute">
                </div>
                
              </div>
            </form>
            <!-- end of live trading -->
  
            <!-- start of table -->
            <div class="h5">
              <h5>Rencent Trading History</h5>
            </div>
            <div class="scoll-table">
              <table class="table">
                <thead class="tablehead">
                  <tr>
                    <th>Trading Type</th>
                    <th>Currency Pair</th>
                    <th>Trading Action</th>
                    <th>Entry Price</th>
                    <th>Stop Loss</th>
                    <th>Take Profit</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- This is the only part to be  changed-->
                  
                  <tr>
                    <td>FOREX</td>
                    <td>USDJPY</td>
                    <td></td>
                    <td>125.25</td>
                    <td>105.25</td>
                    <td>135.25</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <!-- This is the only part to be  changed-->

                </tbody>
              </table>
            </div>
          </div>
           <!-- end of table -->
  
           <!-- start of crossrate table chart -->
          <div class="crossrate">
            <div class="FOREX">
              <span>FOREX-cross Rate chart</span>
            </div>
               <!-- TradingView Widget BEGIN -->
            <div  class="cross-chart">
                  <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/forex-cross-rates/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A%22400%22%2C%22currencies%22%3A%5B%22BTC%22%2C%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%2C%22TRY%22%2C%22SEK%22%2C%22NOK%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22utm_source%22%3A%22user.primefxtradeline.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%7D" style="box-sizing: border-box; width: 100%;"></iframe>            
            </div>
            <!-- TradingView Widget END -->
  
          </div>
          <!-- end of crossrate chart -->
  
          <!-- start of the footer -->
        <footer class="footer">
          <strong>
            Copyright &copy
            <a href="#">SmartInvesta</a>
            .All right reseved
  
          </strong>
  
        </footer>
        <!-- end of the footer -->
  
        </div>
    </div>
  </body>
  </html>    