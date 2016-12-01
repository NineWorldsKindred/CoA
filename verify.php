<?php
  require_once('scripts/recaptchalib.php');
  $privatekey = "6LfLSc8SAAAAANw7HXuAJyPQmbhgRpJauYVtMqVw";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
      header ('Location: error.html');
      exit();
  } else {  
            $EmailFrom = "visitor@centralohioasatru.org";
            $EmailTo = "contact.nineworlds@gmail.com";
            $Subject = "Contact from CentralOhioAsatru.org";
            $Name = Trim(stripslashes($_POST['Name'])); 
            $Email = Trim(stripslashes($_POST['Email'])); 
            $Message = Trim(stripslashes($_POST['Message'])); 

            // validation
            $validationOK=true;
            if (!$validationOK) {
            print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
            exit;
            }

            // prepare email body text
            $Body = "";
            $Body .= "Name: ";
            $Body .= $Name;
            $Body .= "\n";
            $Body .= "Email: ";
            $Body .= $Email;
            $Body .= "\n";
            $Body .= "Message: ";
            $Body .= $Message;
            $Body .= "\n";

            // send email 
            $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

            // redirect to success page 
            if ($success){
            print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.html\">";
            }
            else{
            print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
        }



      }
  ?>
