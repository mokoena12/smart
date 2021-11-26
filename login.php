<!DOCTYPE html>
<html>
<head>
    <!--start meta-->
    <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    <meta name="description" content="Oficial Smart Invest site, create account and start making....." />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="refresh" content="">
    <!--end meta-->
<!--site title-->
<title>Smart Investa me</title>

<!--end site title-->

<!-- Bootstrap styles-->
<link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/css/bootstrap.css" >
<link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" >
<!--end bootstap styles-->
 <!--Fonts for icons-->
 <link rel="stylesheet" href="fonts/css/all.css">
 <link rel="stylesheet" href="fonts/css/all.min.css" >
 <link rel="stylesheet" href="fonts/css/brands.css" >
 <link rel="stylesheet" href="fonts/css/brands.min.css" >
 <link rel="stylesheet" href="fonts/css/fontawesome.css" >
 <link rel="stylesheet" href="fonts/css/fontawesome.min.css" >
 <link rel="stylesheet" href="fonts/css/regular.css" >
 <link rel="stylesheet" href="fonts/css/regular.min.css" >
 <link rel="stylesheet" href="fonts/css/brands.css" >
 <link rel="stylesheet" href="fonts/css/solid.min.css" >
 <link rel="stylesheet" href="fonts/css/solid.css" >
 <link rel="stylesheet" href="fonts/css/svg-with-js.css" >
 <link rel="stylesheet" href="fonts/css/svg-with-js.min.css" >
 <link rel="stylesheet" href="fonts/css/v4-shims.css" >
 <link rel="stylesheet" href="fonts/css/v4-shims.min.css" > 
 <!--end of fonts for icon-->
<!--scripts-->

<script type="text/javascript" src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/smart.js"></script>
<!--Widget scripts for loading price-->
<script type="text/javascript" src="js/widget.js"></script>
<script type="text/javascript" src="js/coingecko-coin-compare-chart-widget.js"></script>
<script type="text/javascript" src="js/coingecko-coin-price-marquee-widget.js"></script>
<!--end scripts https://widgets.coingecko.com-->
<!--styles-->
<link rel="stylesheet" href="css/desktop.css" >
<link rel="stylesheet" href="css/phone.css" >
<link rel="stylesheet" href="css/tablet.css" >
<link rel="stylesheet" href="css/smart.css" >
<!--end styles.-->

</head>
<!--start body section-->
<body onload="Loading()" onscroll="swipe()">

    <!--Start of Loader-->
    <div class="Loading" id="Loading">
        <div id="slide1"></div>
        <div id="slide2"></div>
    </div>
    <div class="rotation" id="rotation">
        <span>Loading...</span>
        <div  id="rot1"></div>
        <div  id="rot2"></div>
        <div  id="rot3"></div>
        <div  id="rot4" ></div>
    </div>
    <!--End of loader-->

    <div class="web_content">

<!--menu bar-->
    <header class="header" id="header">
        <div class="logo"><img src="img/smart.investa.logo2.png"></div>
        <div class="menu">
            <div class="bars"></div>
            <div class="bars"></div>
            <div class="bars"></div>

           <div class="menu_content">

               <div class="dropdown">
                <span class="closing">
                    <i class="fa fa-close"></i>
                     </span>
                   <div style="animation-delay: 0.6s;">     
                    <a href="#"><b>Home</b></a>
                   </div>
                
                   <div  style="animation-delay: 0.8s;">     
                    <a href="#"><b>services</b></a>
                   </div>
               

                   <div  style="animation-delay: 1s;">     
                    <a href="#"><b>FAQ</b></a>
                   </div>
            

                   <div  style="animation-delay: 1.2s;">     
                    <a href="#"><b>Contact</b></a>
                   </div>
                   
                   <div  style="animation-delay: 1.4s;">     
                    <a href="#"><b>About</b></a>
                   </div>
               
            
               </div>
               <hr class="hrline"/>

               <div class="log_reg "   >
                   <div class="button" style="animation-delay: 1.6s;">
                   <a href="login.php" ><b>Login</b></a>
                    </div>
                    <div class="button" style="animation-delay: 1.7s;">
                       <a href="Registration.php"><b>Register</b></a>
                   </div>
               </div>         
            </div>     
        </div>   
        <!--Widget for Bitcoin Prices-->
        <div class="widget">
        <coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" background-color="white" color="black" locale="en" vce-ready="">
        </coingecko-coin-price-marquee-widget>
        </div>
        <!--End of Widget-->
        <div class="loginn">
            <div class="button"> 
                <a href="login.php">Login</a>
            </div> 
            
            <div class="button"> 
                <a href="Registration.php">Register</a>
                 </div>
        </div>
    </header>
       <!--bakground theme-->
       <div class="background-theme" id="background-theme">
        <div class="text-animate">
            <div id="back"></div>
            <div id="forward"> </div>
            <div id="text1" class="text_an">Create Account and start investing</div>
            <div id="text2" class="text_an">Make a Deposit </div> 
            <div id="text3" class="text_an">Choose investment </div> 
            <div id="text4" class="text_an" >Refer  a friend and earn $10 each</div>
            <div id="text5" class="text_an">Make widthdrawal</div> 
        </div>
        <div class="text_welcome"><strong>Welcome to the world's most liquid investing plattform.</strong></div>
         <!--Start of banner-->
        <div class="milestone">
            <div  class="fill" id="fill1"></div>
            <span class="line1"></span>
            <span class="line2"></span>
            <span class="amount_invested"  style="animation-delay: 0.6s;"> Total amount Invested</span>
            <span class="milestone_invested"  style="animation-delay: 0.8s;">Milestone</span>
            <span class="amount_invested BTC1" id="BTC1"  style="animation-delay: 1s;"></span>
            <span class="amount_invested BTC2" id="BTC2"  style="animation-delay: 1.2s;">100000 BTC</span>
       </div>
        <div class="smart_investor">
           <span class="text_smart" style="animation-delay: 1.4s;"> Smart Investa-Safe &</span> <br> <span  class="text_smart">Secure Way Of Investing Bitcoin</span> 
        </div>
      
         <!--End of banner-->
                    
         <div class="dollar opa">  
            <i class="fa fa-usd" aria-hidden="true"></i>
                 </div>
         
                   <div class="credit-card opa">
                       <i class="fa fa-credit-card" aria-hidden="true"></i>
                   </div>

                   <div class="line-chart opa">
                       <i class="fa fa-line-chart" aria-hidden="true"></i>
                   </div>
                   <div class="money opa">
                       <i class="fa fa-money"aria-hidden="true"></i>
                   </div>

                   <div class="industry opa">
                    <i class="fa fa-industry"aria-hidden="true"></i>
                   </div>

                   <div class="tree opa">
                    <i class="fa fa-tree"aria-hidden="true"></i>
                   </div>

                   <div class="tree2 opa">
                    <i class="fa fa-tree"aria-hidden="true"></i>
                   </div>

                   <div class="tree3 opa">
                    <i class="fa fa-tree"aria-hidden="true"></i>
                   </div>

                   <div class="tree4 opa">
                    <i class="fa fa-tree"aria-hidden="true"></i>
                   </div>
                 
                   <div class="sun opa">
                    <i class="fa fa-sun"aria-hidden="true"></i>
                   </div>  

    
                   <div class="home opa">
                    <i class="fa fa-home"aria-hidden="true"></i>
                   </div>  

                   <div class="home2 opa">
                    <i class="fa fa-home"aria-hidden="true"></i>
                   </div>  

                   <div class="home3 opa">
                    <i class="fa fa-home"aria-hidden="true"></i>
                   </div>  

                   <div class="home4 opa">
                    <i class="fa fa-home"aria-hidden="true"></i>
                   </div>  

                   <div class="cloud opa">
                    <i class="fas fa-cloud" aria-hidden="true"></i>
                   </div>

                   <div class="cloud2 opa">
                    <i class="fas fa-cloud" aria-hidden="true"></i>
                   </div>
                
                   <div class="lightning opa">
                    <i class="fas fa-lightning" aria-hidden="true"></i>
                   </div>

                   <div class="car opa">
                    <i class="fas fa-car" aria-hidden="true"></i>
                   </div>

                   <div class="money2 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div>
                  
                <div class="money3 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div>

                  <div class="money4 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div>
                
                <div class="money5 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div>
                
                <div class="money6 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div> 
                
                <div class="money7 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div> 
                  <div class="money8 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div> 
                
                <div class="money9 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div> 
                
                <div class="money10 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div>
                
                <div class="money11 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div>
                
                <div class="money12 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div>
                  
                <div class="money13 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div> 

                <div class="money14 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div>  

                <div class="money15 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div>

                  
                <div class="money16 opa">
                    <i class="fa fa-money"aria-hidden="true"></i>
                </div>

                <div class="tree5 opa">
                    <i class="fa fa-tree"aria-hidden="true"></i>
                   </div>

                   <div class="dollar2 opa">
                    <i class="fa fa-dollar"aria-hidden="true"></i>
                   </div>
                   
                   <div class="euro opa">
                    <i class="fa fa-euro" aria-hidden="true"></i>
                   </div>
                  
                   <div class="yen opa">
                    <i class="fa fa-yen" aria-hidden="true"></i>
                   </div>
                             
            <div class="investt" >
                <div class="button invest_btn">INVEST BITCOIN<i class="fa fa-angle-double-right"></i> </div>
                <div class="iconss">
                    <i class="fab fa-cc-mastercard"></i>   <i class="fab fa-cc-visa"></i>  <i class="fab fa-paypal"></i>  <i class="fab fa-btc"></i>
                </div>
            </div>
      

</div>
<!--end of backound theme-->
<!--about-->
<div class="About">
    <div class="img_network">
     <img  src="img/About.jpg"/>
    </div>
    <div class="mission">
        <div>
           
            <div class="card" >
                <h2> About Us </h2>
                Smart Investa is an investing plattform rendering a wide range of Investment Plans for Bitcoin.
                We are number one choice in the world to invest Bicoin. This platform was developed in 2014, using ideas of
                most profitable investors in the world.
            </div>
        </div>


        <div>
            <div class="card"  style="animation-delay: 0.2s;">
                <h2>History </h2>
                Smart Investa started in 2014 when we recognized that the growing interest in Bitcoins also
                 contributed to the growing interest in Bitcoin mining. Hence as a team of investors 
                 we concluded to blend minds together and come up with investing platform to make all the deams of investing in Bitcoin 
                 come true
            </div>
        </div>

        
        <div>
            <div class="card"  style="animation-delay: 0.4s;">
                <h2>Vission</h2> 
                Our vission is to provide quality services to all Bitcoin Investors and  thrive their investing skills.
                To provide leadership, guidence and advice of Investing in Bitcoin.
            </div>
        </div>

         
        <div>
            <div class="card"  style="animation-delay: 0.4s;">
                <h2>Mission</h2> 
                To ensure all investors triumph and keep good quality of our platform.
                To offer investing plans and strategies that are going to fit all
            </div>
        </div>


    </div>

</div>

<!--end-about-->
<!--youtube video-->
<div class="y_video">
    <h3>Introduction to Bitcoin</h3>
    <iframe  src="https://www.youtube.com/embed/R2zXZOsPQ1Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<!--end-youtube video-->
           <!--three steps-->
     <div class="three-steps">

                          <br><br><br><div class="threestep-text">
            <h1 class="h11">Three steps to start earning</h1>
                  <h5>How it works</h5><i class="fas fa-arrow-down"></i>
                          </div>

                <div class="steps">
                    
                               <div class="card" >
                         <h4>Create an acount</h4> 
                     <p class="pp3">Creating an account is a free and 
                         painless process. Complete the registration
                        form and get one step closer to earning.</p>
                               </div>

                                <div class="card" >
                        <h4> Make a deposit</h4><br>
                                     <p class="pp3">
                            Continue to make deposits on a range of plans
                             available on your account - as provided
                              by the platform
                                   </p>
                               </div>         

                                 <div class="card" >
                        <h4> Start earning</h4> <br>
                                <p class="pp3">
                            Start earning with a return on investment
                             by the percentage of the plans you made
                              investments on. You also earn referral
                               bonuses and commissions.
                              </p>
                                 </div>

                 </div>


        </div>
           <!--end-three steps-->
                               
                <!--why chose us -->
               <div class="chose">

           <br><br> <div class="chose-text"> 
                <h2>Why Chose Us ?</h2> 
                <br> <p>Excepteur sint occaecat
                    cupidatat non proident,
                    sunt in culpa qui 
                 officia <br> deserunt mollit 
                    animid est laborum.</p>
             </div>
         

            <div class="security">
                  <div class="card">
        <h3> Fully Secured Data</h3>
        <p class="pp4">Using state-of-the art servers
                       , we have guarded our servers 
                       with high-end SSL technology and 
                      the latest DDoS Guard to 
                      protect against attacks.
                    </p>

                  </div>

                  <div class="card">
        <h3>Seamless Experience</h3>
        <p class="pp4">Earning has never been this easy. Whether you are 
                      making payments or making payouts or you are simply 
                      checking up on your investments, navigating 
                      the platform is seamless and easy.
                    </p>

                  </div>

                  <div class="card">
        <h3>Experienced Support</h3>
        <p class="pp4"> With trained and experienced support staffs,
                       all your queries are just one click away 
                       from getting answered. Our support team provides
                       24/7 support and assistance to customers.
                    </p>

                  </div>

            </div>

           </div>
                <!--end-why chose us -->
<!--investment plans-->
              <div class="investmentss">

                      <div class="invest-text">

                 <br> <h3>Investments Plans</h3>
                          <p>
      Select an investment package and join thousands of investors
     already on the platform to start earning.
                          </p>
                         </div>

                             <div class="planns-cards">

                       <div class="card">
                           <h4>Bronze</h4>
                      <p>Interest: 4% <br>
                         Min:$30 <br>
                         Max:$1k 
                        </p>
                        <div>
                        <a href="#" class="button">Make a deposit</a>
                        </div>
                       </div>
                            
                       <div class="card">
                        <h4>Titanium</h4>
                      <p>
                        Interest:5% <br>
                        Min: $50 <br>
                        Max: $1.5k 
                      </p>
                     <div>
                        <a href="#" class="button">Make a deposit</a>
                     </div>
                       </div>


                       <div class="card">

                        <h4>Gold</h4>
                           <p class="pp5">
                            Interest: 10% <br>
                            Min: $100 <br>
                            Max: $5k 
                           </p>
                     <div class="plans">
                        <a href="#" class="button">Make a deposit</a>
                     </div>
                       </div>

                          <div class="card">
                        <h4>diamond</h4>
                        <p class="pp5">
                            Interest: 20% <br> 
                            Min: $200 <br>
                            Max: $10k 
                        </p>
                      <div class="plans">
                        <a href="#"  class="button">Make a deposit</a>
                      </div>
                       </div>

                       </div>

               </div>
                        <!--end-investment plans-->
                   
                        <!--statistics-->
                        <div class="statistics">

                                     <div class="stat-text">
                    <br><h1><u>Platform Statistics</u></h1><br>
                    <p>Live statistics on the platform including withdrawals and deposits.</p>
                                     </div>
                
                                <div class="peoplee">

                                 <div class="card">
                                  <p>
                                    150K+
                                    MEMBERS 
                                  </p> 
                                 </div>
                              
                                 <div class="card">
                                     <p>
                                        100k+
                                        VISITORS ONLINE
                                     </p>
                                 </div>

                                 <div class="card">
                                     <p>
                                        $ 45M+
                                        TOTAL DEPOSITS  
                                     </p>
                                 </div>

                                 <div class="card">
                                   <p>
                                    $ 65M+
                                    TOTAL WITHDRAWALS
                                   </p> 
                                 </div>

                                </div>
                               
                                <div class="imagess">
                              <div class="imgg">
                                  <img src="img/bitcoinnn.jpg" alt="withdraws">
                              </div>
                               </div>
                     
                   </div>
                        <!--end-statistics-->

                        <!--FAG-->
                                <div class="faqq">
                                    <div class="faq-text">
                          <br><h3>Frequently ask questions</h3>
                         <br> <p>Questions and Answers (Q&A), 
                            are listed questions and answers,
                             all supposed to be commonly
                              asked in some context
                         </p>
                                    </div>

                                    <div class="questions">
                                  <div class="card">
                                     <h4>What is cryptocurrency?</h4> 
                                     <p>
                                         A cryptocurrency is an encrypted data string that denotes a unit of currency.
                                         It is monitored and organized by a peer-to-peer network called a blockchain,
                                          which also serves as a secure ledger of transactions, e.g., buying, selling,
                                           and transferring. ... Bitcoin, Ether, Litecoin, and Monero are popular 
                                           cryptocurrencies.                                       
                                        </p>
                                  </div>

                                   <div class="card">
                                       <h4>Which cryptocurrency is to buy today?</h4>
                                       <p>
                                        The best cryptocurrency to buy is one we are willing to 
                                        hold onto even if it goes down. For example, I 
                                       in Steem enough that I am willing to hold it even if it goes
                                        down 99% and would start buying more of it if the price dropped.
                                    </p>
                                    
                                   </div>
                                
                                     <div class="card ">
                                         <h4>How about trading crypto?</h4>
                                         <p>While profits are possible trading cryptocurrencies, so are losses. 
                                             My first year involved me spending hundreds of hours trading
                                              Bitcoin with a result of losing over $5,000 with nothing to show for 
                                              it. Simply trading digital currencies is very similar to gambling 
                                              because no one really knows what is going to happen next although 
                                              anyone can guess! While I was lucky to do nothing expect lose money 
                                              when I started, the worst thing that can happen is to get lucky right
                                               away and get a big ego about what an amazing cryptocurrency trader we are.
                                            </p>
                                     </div>
                                             
                                     <div class="card">
                                         <h4>When to sell a cryptocurrency?</h4>
                                         <p>Before Steem I was all in an another altcoin and really excited about it. When
                                              I first bought the price was low and made payments to me every week just
                                               for holding it. As I tried to participate in the community over the next
                                                several months, I was consistently met with a mix of excitement and hostility.
                                                 When I began talking openly about this, the negative emotions won over in 
                                                 the community and in me. Originally I had invested and been happy to hold
                                                  no matter what the price which quickly went up after I bought it.
                                                </p>
                                     </div>

                                </div>


                                    </div>
                                     <!--end-FAG-->
                                  
                                     <!--about-->
                                     <div class="aboutbitcoin">

                                     <div class="about-head"><h1>ABOUT</h1></div> 
                                  
                                      <div class="about-content">

                                        <div class="picc">
                                 <img src="img/bitcoin.jpg" alt="coins">
                                        </div>

                                        <div class="para">
                                          <p  class="card">With us its a very sure increase on returns with our AI programs 
                                                that work with our investment structure we help take you to your 
                                                dream home, location or vacation. With a push of the button you too 
                                                can be a self employed Techpreneur.
                                            </p>
                                            <i class="fa fa-bitcoin" style="font-size: 2em;color: rgb(0, 0, 0);"></i>
                                            <u>698 Support countries</u>
                                            <br><br><i class="fa fa-bank" style="font-size: 2em;color: rgb(3, 3, 3);"></i>
                                            <u>145 Bank support</u>
                                            <br><br><i class="fa fa-credit-card" style="font-size: 2em;color:  rgb(7, 7, 7);"></i>
                                           <u> 7758 Bitcoin ATMs</u>
                                            <br><br><i class="fa fa-bitcoin" style="font-size: 2em;color:  rgb(2, 2, 2);"></i>
                                            <u>698 Producers ready</u>

                                            
                                        </div>

                                      </div>  

                                     </div>
                                   
                                     <!--end-about-->


                              <!--leave a message form-->
                              <div class="form-div">
                                         
                                           <div class="containerr">

                                            <div class="widgett">
                    <img src="img/bitcoinimage.png" alt="">
                                            </div>

                                            <div class="formmm">
                                      <div style="background-image: linear-gradient(to bottom right,white, rgb(0, 183, 255), rgb(32, 85, 230));
                                      ;border-radius: 7px;">
                                        <h3>Leave a mesagge <i class="fa fa-arrow-down"></i></h3>
                                        <i class="fa fa-bitcoin">-<b>If You have any questions? we're happy to help</b></i>
                                      </div>
                                                <form action="action_page.php" class="formmmm">
                                              
                                                  <label for="fname">First Name</label>
                                                  <input type="text" id="fname" name="firstname" placeholder="Your name..">
                                              
                                                  <label for="lname">Last Name</label>
                                                  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                                              
                                                  <label for="country">Country</label>
                                                  <select id="country" name="country">
                                                    <option value="australia">Australia</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao">Macao</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                                        </select>
                                              
                                                  <label for="subject">Subject</label>
                                                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
                                              
                                                  <input type="submit" value="Submit" class="button">
                                              
                                                </form>
                                    
                                              </div>

                                           </div>

                              </div>
                              <!--end-leave a message form-->
                       
    <!--smart investa last block -->
         <div class="lastblock">
           <h2>Smart Investa</h2>

           <div class="last-blockdiv">

               <div class="block-para">
<p>Smart Investa stands firmly in <br> support 
     of financial freedom  and <br>the liberty that 
     Bitcoin provides <br> globally for anyone.</p>
<i class="fa fa-facebook" style="font-size: 1.5em;color: rgb(24, 84, 212);"></i> &nbsp <i class="fa fa-twitter"style="font-size: 1.5em; color:white"></i>  &nbsp <i class="fa fa-whatsapp" style="font-size: 1.5em;color: rgb(52, 241, 14);"></i> &nbsp <i class="fa fa-instagram" style="font-size: 1.5em;color: rgb(250, 154, 28);"></i>

               </div>

               <div class="quick-links">
                <h5><u>Quick links</u></h5>   
                <a href="#">Home</a> <br>
              <a href="#">Services</a> <br>
              <a href="#">Team</a> <br>
                <a href="#">Contact</a>
               </div>

               <div class="services">
                   <h5><u>Services</u></h5>
             <a href="#">Forex</a> <br>
             <a href="#">CFD</a> <br>
             <a href="#">Binary</a> <br>
             <a href="#">Indices</a>
               </div>
           </div>
           <hr style="color: black;"> 
           <p style="text-align: center;">Copyright Smart Investa © 2021 All Rights Reserved.</p>
         </div>
    <!--This is the end of web content-->
</body>
<!--end body section-->
</html>
