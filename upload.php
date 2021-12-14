

<?php

session_start();

if (isset($_SESSION["investa_user"])){

  $user = $_SESSION["investa_user"];
 
}
else{
  $err = "Please login before you access dashboard";
  header("Location:login.php?user2=$err");

}
require_once "connect.php";

$username = $answer=$country = $address =$email1 = $bank_name = $accnt_holder = $bit_addres = ""; $accont_num = $phone = 0;
$username_rr = $phone_rr = $country_rr = $address_rr = $bank_namerr = $accnt_holderrr = $bit_addresrr = $accont_numrr =""; 


?>



<?php

$submit_err =$submit_err1 =$submit=  $submit1= "";
if( isset($_FILES["btnFileUpload"])){
  $file_name = $user;
$target_dir= "files/proof/"; //specifies the directory where the file is going to be placed

$target_file = $target_dir.basename($_FILES["btnFileUpload"]["name"]);  // specifies the path of uploaded file
$uploadok=1;

$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


//check the size of the file

if($_FILES["btnFileUpload"]["size"]>1737418240){
	
	$submit_err1="sorry your photo is too large. upload files that are less then 10MB";
	$uploadok=0;
}
//check the file type and limit it

if($FileType != "jpg" && $FileType != "jpeg" && $FileType != "png" ){
	$submit1="sorry, only JPG,JPEG and PNG files are allowed.";
	$uploadok = 0;
}

//check if upload was set to zero by error

if($uploadok==0){
    // , 
$submit="<div class='response'><span class='response_cancel'> &times </span>
		
		<p style='color:green;'><b><span style='color:red;'>Tip</span>: Take picture of yourself with  phone then upload it</b> </p></div>";
        echo "<script type='text/javascript'>alert('Your photot is not uploaded, error(101) name:".$submit1." $submit_err1 . $submit_err ') </script>";

}
else{
	if (move_uploaded_file($_FILES["btnFileUpload"]["tmp_name"],"files/proof/{$file_name}.png")){
		$submit="<div class='response'><span class='response_cancel'> &times </span>
		
		<br><span style='color:green;'>Your profile is successfully updated</span>
	</div>";
    $answer = "Your Proof of residence is successfully uploaded";
	}
	else{
        $answer = "Failed to upload your proof of residence";
		echo "<script type='text/javascript' > alert('Error encoutered while uploading the picture please try again later')</script>";
	}

}

}
?> 
<?php
 $avatar = "files/proof/$user.png";
 $proof = "files/Residence/$user.png";
 if(file_exists($avatar)){
     $answer="Account under review";
 }
 if(file_exists($proof)){
    $answer="Account under review";
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
  <title>Upload</title> 
  <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/css/bootstrap.css"> 
  <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
  
   <!-- start of fonts -->
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
  <!-- end of fonts-->
  
  <!-- start of links styling-->
  <link rel="stylesheet" href="css/tablet.css">
  <link rel="stylesheet" href="css/desktop.css">
  <link rel="stylesheet" href="css/phone.css">
  <link rel="stylesheet" href="css/smart.css">
  <!-- end of link styling -->
  
  
  <!-- javascript -->
    <script type="text/javascript" src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/dash.js"></script>
  
  
  </head>
   <body class="turning"  onload="init()">
        <div class="wrapper-box">
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
                        <li id="#">
                        <a href="#"><i class="fa fa-user"></i>Profile</a>
                        </li>
                        <li>
                        <a href="#"><i class="fa fa-tasks"></i>
                            Active Logs</a>
                        </li>
                        <li>
                        <a href="#"><i class="fa fa-exchange"></i>
                            Deposit</a>
                        </li>
                        <li>
                        <a href="#"><i class="fa fa-exchange"></i>
                            Withdrawal</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users"></i>  Referral</a>
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
                            <h1>Profile <span style="color:green"> <?php echo $answer ?></span></h1>
                        </div>
                        <div>
                            <ul class="style">
                                <li class="change1"><a href="index.html" style="text-decoration: none; color: blue; padding-right: 5px;">Home</a></li>
                                <li class="change active">Profile</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- end of the header part -->
            
                <!-- start of the profile contant -->
                    <div class="profile-content">
                        <div class="profile-container">
                            <div class="profile-avater">
                               
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="icon">
                                        <i class="fas fa-lightbulb">E.g: Bank Statement, Bill statement,etc..</i>
                                    </div>
                                    <div>
                                        <p> Upload Proof of residence</p>
                                        <input type="file" name="btnFileUpload" value="Choose file" id="filebtn" />
                                        <div class="avater-shift">
                                            <input type="submit" id="avator-upload" value="Update">
                                        </div>
                                    </div>
                                </form>
                            </div>
                                   
                                
                            </div>

                                <!-- end section for the avater -->


                                <!-- start sectin fo the profile contents -->
                
                            </div>
                       

                    </div>
               
                       
                
            </div>    <!-- end section for the footer -->
        </div>   
        
        <div>
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
                    </div>
    </body>
    </html>
