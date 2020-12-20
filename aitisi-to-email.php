<html>asldkalsdklaskd</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$errors = array();

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = "";
$lastname = "";
$fathersname = "";
$street = "";
$streetno = "";
$city = "";
$postalcode = "";
$telephone = "";
$visitor_email = "";


$name = validate($_POST['name'])  ?? '';
$lastname = validate($_POST['lastname'])  ?? '';
$fathersname = validate($_POST['fathersname'])  ?? '';
$street = validate($_POST['street'])  ?? '';
$streetno = validate($_POST['streetno'])  ?? '';
$city = validate($_POST['city'])  ?? '';
$postalcode = validate($_POST['postalcode'])  ?? '';
$telephone = validate($_POST['telephone'])  ?? '';
$visitor_email = validate($_POST['email'])  ?? '';


$headers = 'From: hba registration form' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
$email_to = 'info@hba.org.gr';

$email_from = 'registration.info@hba.org.gr';
$email_subject = "Αίτηση Εγγραφής $name $lastname";
$email_body = "test";
$headers = "From: $email_from \r\n";
// $headers .= "Reply-To: $visitor_email \r\n";



//email success msg
$sendmail =  @mail($email_to, $email_subject, $email_body, $headers);

$msg='';
if (!$sendmail) {
    $msg = "<div class=\"mend\">Email could not send. Please contact admin !.</div>";
} else {
    $msg = "<span class=\"successMsg\">Thank you dear <span>$name</span> your message has been send successfully.</span>";
}
echo $msg;
?>