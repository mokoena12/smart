<?php
 $to = "belmiromohlala34@gmail.com";
        $subject ="New Account";

        $message = "
        <html>
        <head>
        <title>New Account</title>
      </head>
      <body >
      <p><strong>Dear Belmiro </strong></p>
      <p>Your Investment Account was successfully created. 
      Your Login details are as follows: <br> <ul><li><b>Username</b>: bel </li> <li>Password:  bbbb  </ul>
      You can go to <a href='http://wwww.weball.co.za/login.php'>Dashboard</a> and start Investing</p>
      
      <p><a href='https://www.smartinvesta.co.za' 
      style='background-color:red; color:white;border-radius:3px;font-weight:bold;font-size:12px;padding:5px;text-decoration:none;box-shadow:3px 3px 2px black;'>Visit Our site</a></p>
      <p>Kind Regards</p>
      <p> Smart Investa</p>
      </body>

        </html>
        ";
        $headers = "MIME-version:1.0"."\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
        $headers .= "From:info@weball.co.za"."\r\n";
       if(mail($to,$subject,$message,$headers)) {
           echo "Email sent"; 
       }
       else{
           echo "Error encoutered";
       }
   ?>