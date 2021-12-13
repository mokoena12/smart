

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

$username = $country = $address =$email1 = $bank_name = $accnt_holder = $bit_addres = ""; $accont_num = $phone = 0;
$username_rr = $phone_rr = $country_rr = $address_rr = $bank_namerr = $accnt_holderrr = $bit_addresrr = $accont_numrr =""; 
if(isset($_POST["phone"],$_POST["bank"],$_POST["role"])){
 
    $approved = 1;
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data; 
      }
    
      if(empty($_POST["bank"])){
        $bank_namerr = "Bank name is required";
        $approved = 0;
      }else{
        $bank_name = (test_input($_POST["bank"]));
        $sql ="UPDATE banking_details SET bank_name = $bank_name
      WHERE username = '$user'";
      $result2 = $conn->query($sql);
      }
         
     if(empty($_POST["Accountname"])){
        $accnt_holderrr = "Please enter your fullname";
        $approved = 0;
      }else{
        $accnt_holder = (test_input($_POST["Accountname"]));
        $sql ="UPDATE banking_details SET account_holder = $accnt_holder
      WHERE username = '$user'";
      $result2 = $conn->query($sql);
      }
         
     if(empty($_POST["a-number"])){
        $accont_numrr = "account number is required";
        $approved = 0;
      }else{
        $accont_num = (test_input($_POST["a-number"]));
        $sql ="UPDATE banking_details SET account_number = $accont_num
      WHERE username = '$user'";
      $result2 = $conn->query($sql);
      }

      if(empty($_POST["btc-adress"])){
        $bit_addresrr = "Bit-coin adddress is required";
        $approved = 0;
      }else{
        $bit_addres = (test_input($_POST["btc-adress"]));
        $sql ="UPDATE banking_details SET account_number = $bit_addres
      WHERE username = '$user'";
      $result2 = $conn->query($sql);
      }


    if(empty($_POST["phone"])){
        $phone_rr = "Phone number is required";
      }elseif(strlen($_POST["phone"])<=9){
        $approved=0;
        $Cell_rr = "phone number must be atleast 10";
       }else{
        $phone = test_input($_POST["phone"]);
        $sql ="UPDATE registration SET cellphone = $phone
      WHERE username = '$user'";
      $result2 = $conn->query($sql);
      }
        
     if(empty($_POST["countri"])){
        $country_rr = "country is required";
        $approved = 0;
      }else{
        $country = (test_input($_POST["countri"]));
        $sql ="UPDATE registration SET country = $country
      WHERE username = '$user'";
      $result2 = $conn->query($sql);
      }


      if(empty($_POST["role"])){
        $address_rr = "address is required";
        $approved = 0;
      }elseif(!filter_var($address, FILTER_VALIDATE_EMAIL)) {
        $address_rr = "Invalid email format";
        $approved = 0;
      }else{
      $address = test_input($_POST["role"]);
      $sql ="UPDATE registration SET  email = $address 
      WHERE username = '$user'";
      $result2 = $conn->query($sql);
      }
    
      if(empty($_POST["users"])){
        $username_rr = "username is required";
        $approved = 0;
      }else{
        $username =ucfirst(strtolower(test_input($_POST["users"]))) ;
        $sql ="UPDATE registration SET username = $username
    WHERE username = '$user'";
    $result2 = $conn->query($sql);
      }
    }
    
 ?>
<!--
<?php

$date_reg1 = ""; 
$email =  $answer="";
$sql_email = "SELECT email, date_reg FROM registration WHERE username='$user' ";
$results = $conn->query($sql_email);
if($results !== FALSE && $results->num_rows>0){
  $row = $results->fetch_assoc(); 
  $email = $row["email"];
  $date_reg1 = $row["date_reg"];

}
?>
-->


<?php

$submit_err =$submit_err1 =$submit=  $submit1= "";
if( isset($_FILES["btnFileUpload"])){
  $file_name = $user;
$target_dir= "profiles/"; //specifies the directory where the file is going to be placed

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
	if (move_uploaded_file($_FILES["btnFileUpload"]["tmp_name"],"profiles/{$file_name}.png")){
		$submit="<div class='response'><span class='response_cancel'> &times </span>
		
		<br><span style='color:green;'>Your profile is successfully updated</span>
	</div>";
    $answer = "Your profile is successfully updated";
	}
	else{
		echo "<script type='text/javascript' > alert('Error encoutered while uploading the picture please try again later')</script>";
	}

}

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
  <title>Profile</title> 
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
                        <li id="sidebar_active">
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
                <section> 
                    <div class="profile-content">
                        <div class="profile-container">
                            <div class="profile-avater">

                            <img class="Pcontrol" src="<?php echo $avatar?>" alt="profile">
                                <h5>
                                    <b><?php echo $user?></b>
                                </h5>
                                <span><?php echo $email;?></span>
                                <span class="users-control">
                                    <p>
                                        <b>Role:</b>
                                         user
                                    </p>
                                </span>
                                <span class="users-control2">
                                    <p>
                                        <b>Joined:</b>
                                        <?php 
                                    echo $date_reg1;    
                                        
                                        ?>
                                    </p>
                                </span>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div>
                                        <input type="file" name="btnFileUpload" value="Choose file" id="filebtn" >
                                        <div class="avater-shift">
                                            <input type="submit" id="avator-upload" value="Update">
                                        </div>
                                    </div>
                                </form>
                            </div>
                                   
                                
                            </div>

                                <!-- end section for the avater -->


                                <!-- start sectin fo the profile contents -->
                
                                <div class="prof" >
                                <div class="profile-flex">
                                        <button class="button profile" id="button_hover" onclick="profile(0)"> Account Details</button>
                                        <button class="button profile" onclick="profile(1)">Login Details</button>
                                        <button class="button profile" onclick="profile(2)">Banking Details</button>
                                     </div>
                                <section class="displayers">
                                
                                    <form action="processor.php" method="post">
                                        <div class="profile-content2">
                                            <div class="diveform" >
                                                <label for="role" >Role </label>
                                                <input class="name-inputs" type="text"  name="role" id="role" placeholder="user" disabled >
                                            </div>
                                            <div class="diveform">
                                                <label for="status">Status</label>
                                                <select  class="name-inputs" name="status"  id="status"  disabled>
                                                    <option value="Active">Active</option>
                                                </select>
                                            </div>                                         
                                            <div class="diveform">
                                                <label for="phone">Phone</label>
                                                <input type="tel" class="name-inputs" name="phone" id="phone" placeholder="Phone">
                                                <div class="red-text"><?php  echo $phone_rr; ?></div>
                                            </div>
                                            <div class="diveform">
                                                <label for="countri">Country</label> <div class="red-text"><?php  echo $country_rr; ?></div>
                                                <select name="countri" id="countri">
                                                    <option value="">--select your country--</option>
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

                                            </div>
                                            <div class="diveform">
                                                <label for="address">Address</label>
                                                <input type="text" class="name-inputs" name ="addres" id="adre" placeholder="Address">
                                                <div class="red-text"><?php  echo $address_rr; ?></div>
                                            </div>
                                        </div>
                                        <div class="p-btnsub">
                                            <input class="button" type="submit" id="profile-btn1" value="Update Accounts">
                                        </div>
                                    </form>
                                </section>

                                <!--start of the login details -->
                                <section class="displayers" > 
                                    <form action="#" method="post">
                                        <div class="profile-content2">
                                            <div class="diveform" >
                                                <label for="emall" >Email</label>
                                                <input class="name-inputs" type="text"  name="role" id="Emails" placeholder="Email">
                                            </div>
                                            <div class="diveform">
                                                <label for="userna">Username</label>
                                                <input type="text" class="name-inputs" name="users" id="userna" placeholder="Username">
                                                <div class="red-text"><?php  echo $username_rr; ?></div>
                                            </div>
                                        </div>
                                        <div class="p-btnsub">
                                            <input class="button" type="submit" id="profile-btn2" value="Update Logins">
                                        </div>
                                    </form>
                                </section>
                                <!--end of the login details -->

                                <!-- start of banking details -->
                                <section class="displayers"> 
                                    <form action="#" method="post">
                                        <div class="profile-content3">
                                            <div class="diveform3" >
                                                <label for="Bankname" >Bank Name</label>
                                                <input class="name-inputs" required type="text"  name="bank" id="bankname" placeholder="Bank Name" >
                                                <div class="red-text"><?php  echo $bank_namerr; ?></div>
                                            </div>
                                            <div class="diveform3">
                                                <label for="userna">Account Cardholder's Name</label>
                                                <input type="text" class="name-inputs" name="Accountname" id="accountname" placeholder="Account Name">
                                            </div>
                                            <div class="diveform3">
                                                <label for="Accountnumber">Account Number</label>
                                                    <input type="text" class="name-inputs" required name="a-number" id="accountnumber" placeholder="Account Number">
                                                    <div class="red-text"><?php  echo $accont_numrr; ?></div>
                                            </div>
                                            <div class="diveform3">
                                                <label for="BITCOIN">Bitcoin Address</label>
                                                <input type="text" class="name-inputs" required name="btc-adress" id="bitcoin-adress" placeholder="Bitcoin Address">
                                                <div class="red-text"><?php  echo $bit_addresrr; ?></div>
                                            </div>
                                        </div>
                                        <div class="p-btnsub3">
                                            <input class="button" type="submit" id="profile-btn3" value="Update Banking Details">
                                        </div>
                                    </form>
                                </section>
                        
                                <!-- end of banking details -->
                    </div>
                            </div>
                       

                    </div>
               
                       
                </section>
                
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
