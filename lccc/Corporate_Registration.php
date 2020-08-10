<?php

$EmailTo = "info@londoncomputercollege.co.uk";
$subject = "Corporate Training Registration";
$name = Trim(stripslashes($_POST['name']));
$business = Trim(stripslashes($_POST['business']));
$address1 = Trim(stripslashes($_POST['address1']));
$address2 = Trim(stripslashes($_POST['address2']));
$city = Trim(stripslashes($_POST['city']));
$country = Trim(stripslashes($_POST['country']));
$website = Trim(stripslashes($_POST['website']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['phone']));
$mobile = Trim(stripslashes($_POST['mobile']));

$Prince2 = Trim(stripslashes($_POST['Prince2']));
$Risk_Management = Trim(stripslashes($_POST['Risk_Management']));
$Quality_Management = Trim(stripslashes($_POST['Quality_Management']));
$Project_2016 = Trim(stripslashes($_POST['Project_2016']));
$Agile = Trim(stripslashes($_POST['Agile']));
$Strategic = Trim(stripslashes($_POST['Strategic']));
$Business_Case = Trim(stripslashes($_POST['Business_Case']));

$number = Trim(stripslashes($_POST['number']));
$how = Trim(stripslashes($_POST['how']));
$comment = Trim(stripslashes($_POST['comment']));

// validation
$validationOK=true;
if (!$validationOK) {
  echo "please check your details";
  header("Location: thanks.html");
  exit;
}

// prepare email body text

$Body = "";
$Body .= "name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "business: ";
$Body .= $business;
$Body .= "\n";
$Body .= "address1: ";
$Body .= $address1;
$Body .= "\n";
$Body .= "address2: ";
$Body .= $address2;
$Body .= "\n";
$Body .= "city: ";
$Body .= $city;
$Body .= "\n";
$Body .= "country: ";
$Body .= $country;
$Body .= "\n";
$Body .= "website: ";
$Body .= $website;
$Body .= "\n";
$Body .= "email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "mobile: ";
$Body .= $mobile;
$Body .= "\n";
$Body .= "Prince2: ";
$Body .= $Prince2;
$Body .= "\n";
$Body .= "Risk_Management: ";
$Body .= $Risk_Management;
$Body .= "\n";
$Body .= "Quality_Management: ";
$Body .= $Quality_Management;
$Body .= "\n";
$Body .= "Project_2016: ";
$Body .= $Project_2016;
$Body .= "\n";
$Body .= "Agile: ";
$Body .= $Agile;
$Body .= "\n";
$Body .= "Strategic: ";
$Body .= $Strategic;
$Body .= "\n";
$Body .= "Business_Case: ";
$Body .= $Business_Case;
$Body .= "\n";
$Body .= "number: ";
$Body .= $number;
$Body .= "\n";
$Body .= "how: ";
$Body .= $how;
$Body .= "\n";
$Body .= "comment: ";
$Body .= $comment;
$Body .= "\n";

// send email
$success = mail($EmailTo, $subject, $Body, "From: <$email>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"1;URL=thanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"1;URL=form.html\">";
}
?>


