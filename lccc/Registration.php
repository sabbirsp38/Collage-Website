<?php
/* Set e-mail recipient */
$myemail  = "info@londoncomputercollege.co.uk";
$subject = "Corporate Training Registration";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name']);
$business    = check_input($_POST['business']);
$address1    = check_input($_POST['address1']);
$address2    = check_input($_POST['address2']);
$city    = check_input($_POST['city']);
$country    = check_input($_POST['country']);
$website  = check_input($_POST['website']);
$email    = check_input($_POST['email']);
$phone    = check_input($_POST['phone']);

$Prince2   = check_input($_POST['Prince2']);
$Risk_Management   = check_input($_POST['Risk_Management']);
$Quality_Management   = check_input($_POST['Quality_Management']);
$Project_2016   = check_input($_POST['Project_2016']);
$Agile   = check_input($_POST['Agile']);
$Strategic   = check_input($_POST['Strategic']);
$Business_Case   = check_input($_POST['Business_Case']);

$how_find = check_input($_POST['how']);
$comments = check_input($_POST['comments'], "Complete all sections of the form");

/* If email is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

/* If URL is not valid set $website to empty */
if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $website))
{
    $website = '';
} 

/* Let's prepare the message for the e-mail */
$message = "Hello !

Your Registration form has been submitted by: <p>
Subject: 	$subject
Name: 		$name
Business: 	$business
Address1: 	$address1
Address2: 	$address2
City: 		$city
Country: 	$country
URL: 		$website
Email: 		$email
Telephone: 	$phone

Is interested in the following Project Management training: <p>
Prince2 Project Management: 	$Prince2
Risk Management: 				$Risk_Management
Quality Management: 			$Quality_Management
MS Project 2016: 				$Project_2016
Agile Project Management: 		$Agile
Strategic Management: 			$Strategic 
Business Case Analysis: 		$Business_Case

Found out through: 				$how_find

Comments: 	$comments

End of message
";

/* Send the message using mail() function */
$success = mail($myemail, $subject, $message, "From: <$email>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"1;URL=thanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"1;URL=form.html\">";
}


/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>