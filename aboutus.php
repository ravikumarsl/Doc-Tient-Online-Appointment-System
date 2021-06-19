<?php
include("header.php");
if(isset($_POST[submit]))
{  
	$message = "<strong>Dear $_POST[name],</strong><br />
				<strong>Your Email ID is :</strong> $_POST[email]<br />
				<strong>Message :-</strong> $_POST[comment]
				";
	
	sendmail("ravikumar.lubdhi@gmail.com","Mail from Appoint My Doctor",$message);
	
}
?>

<div class="wrapper col2">
  <div id="container">
    <div id="content">
      <h1>About Doc-Tient</h1>
      <p align="justify">We are passionate and compassionate professionals, driven by the mission of helping more people live a better and happier life every day. Making professional counseling accessible, affordable, convenient - so anyone who struggles with life’s challenges can get help, anytime, anywhere.</p>
      <p align="justify"> </p>
      <div class="homecontent">
        <ul>
          <li style="margin: 40px 0 40px 0;">
           <h2>Our Vision</h2>
            <p align="justify">"With cutting edge technology driven by innovative Artificial Intelligence & IoT, Doc-Tient envisions to reach remote India and help deliver best healthcare services at the bottom of the pyramid!"</p>
          </li>
        </ul>
      </div>
      </div>
    <div class="clear"></div>
  </div>
</div>

<div class="wrapper col2">
  <div id="container">
    <h6>Contact Us</h6>
    <p>
Vrindavan Apartment, 2nd Floor, <br/>
Near Vridhavan Hotel, <br/>
Sangli - 416416 <br/>
Maharashtra <br />

<strong>Phone</strong>:+91-976 513 3593<br />

<strong>Email ID</strong>: doctient2021@gmail.com</p>

        <h6>Contact Us by submitting following information</h6>
            <form action="" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>Name (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email" value="" size="22" />
            <label for="email"><small>Mail (required)</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form"  />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>

  </div>
  
</div>

    <div class="clear"></div>
  </div>
</div>
<?php
function sendmail($toaddress,$subject,$message)
{
	require 'PHPMailer-master/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;
	
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.dentaldiary.in';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'sendmail@dentaldiary.in';                 // SMTP username
	$mail->Password = 'q1w2e3r4/';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	
	$mail->From = 'sendmail@dentaldiary.in';
	$mail->FromName = 'Web Mall';
	$mail->addAddress($toaddress, 'Joe User');     // Add a recipient
	$mail->addAddress($toaddress);               // Name is optional
	$mail->addReplyTo('aravinda@technopulse.in', 'Information');
	$mail->addCC('cc@example.com');
	$mail->addBCC('bcc@example.com');
	
	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = $subject;
	$mail->Body    = $message;
	$mail->AltBody = $subject;
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo '<center><strong><font color=green>Mail sent.</font></strong></center>';
	}
}
?>



<?php
include("footer.php");
?>