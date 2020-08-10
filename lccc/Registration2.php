<?php
/* Set e-mail recipient */
$myemail  = "info@londoncomputercollege.co.uk";
// $myemail  = "sabbirsp038@gmail.com";

$subject = "Corporate Training Registration";
$name = "";
$business    = "";
$address1    = "";
$address2    = "";
$city    = "";
$country    = "";
$website  = "";
$email    = "";
$phone    = "";

$Prince2   = "No";
$Risk_Management   = "No";
$Quality_Management   = "No";
$Project_2016   = "No";
$Agile   = "No";
$Strategic   = "No";
$Business_Case   = "No";

$how_find = "";
$comments = "";

/* Check all form inputs using check_input function */
$name =addslashes($_POST['name']);
$business    =addslashes($_POST['business']);
$address1    =addslashes($_POST['address1']);
$address2    =addslashes($_POST['address2']);
$city    =addslashes($_POST['city']);
$country    =addslashes($_POST['country']);
$website  =addslashes($_POST['website']);
$email    =addslashes($_POST['email']);
$phone    =addslashes($_POST['phone']);

$Prince2   =addslashes($_POST['Prince2']);
$Risk_Management   =addslashes($_POST['Risk_Management']);
$Quality_Management   =addslashes($_POST['Quality_Management']);
$Project_2016   =addslashes($_POST['Project_2016']);
$Agile   =addslashes($_POST['Agile']);
$Strategic   =addslashes($_POST['Strategic']);
$Business_Case   =addslashes($_POST['Business_Case']);

$how_find =addslashes($_POST['how']);
$comments =addslashes($_POST['comments'] );

/* If email is not valid show error message */
// if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
// {
//     show_error("E-mail address not valid");
// }

/* If URL is not valid set $website to empty */
// if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $website))
// {
//     $website = '';
// } 

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
$success = mail($myemail, $subject, $message, "From: <$s>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"1;URL=thanks.html\">";
}
else{
 // print "<meta http-equiv=\"refresh\" content=\"1;URL=form.html\">";
    print_r($success);
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