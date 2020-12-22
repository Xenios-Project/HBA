<?php
session_start();
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

function validate_CAPTCHA($requested_page)
{
    if (empty($_SESSION['captcha_code']) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0) {
        $msg = "captcha_incorect"; // Captcha verification is incorrect.
        if (strpos($requested_page, 'aitisi_f.php') !== false) {
            header('location:aitisi_f.php?msg=' . $msg);
            die();
        } elseif (strpos($requested_page, 'aitisi_n.php') !== false) {
            header('location:aitisi_n.php?msg=' . $msg);
            die();
        } elseif (strpos($requested_page, 'index.php') !== false) {
            header('location:index.php?msg=' . $msg . "#contact");
            die();
        }
    }
}

$requested_page = validate($_SERVER['HTTP_REFERER']);
validate_CAPTCHA($requested_page);
$email_to = 'info@hba.org.gr';
$email_body = '';
$msg = '';

if (strpos($requested_page, 'aitisi_f.php') !== false) {
    $name = validate($_POST['name'])  ?? '';
    $lastname = validate($_POST['lastname'])  ?? '';
    $fathersname = validate($_POST['fathersname'])  ?? '';
    $mothersname = validate($_POST['mothersname'])  ?? '';
    $street = validate($_POST['street'])  ?? '';
    $streetno = validate($_POST['streetno'])  ?? '';
    $city = validate($_POST['city'])  ?? '';
    $postalcode = validate($_POST['postalcode'])  ?? '';
    $telephone = validate($_POST['telephone'])  ?? '';
    $visitor_email = validate($_POST['email'])  ?? '';
    $inputsignature = validate($_POST['inputsignature'])  ?? '';
    $date = validate($_POST['date'])  ?? '';

    $email_from = 'registration.info@hba.org.gr';
    $headers = 'From: hba registration form' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    $email_subject = "Αίτηση Εγγραφής Φυσικού Προσώπου $name $lastname";
    $email_body = "Ο/H " . $name . " " . $lastname . "<br>Όνομα Πατρός: " . $fathersname . "<br>Όνομα Μητρός: " . $mothersname . "<br>Διεύθηνση Κατοικίας: " . $street . " " . $steetno . ", " . $city . ", " . $postalcode . "<br>Τηλέφωνο Επικοινωνίας: " . $telephone . "<br>e-mail " . $visitor_email . "<br>Υπογραφή: " . $inputsignature . "<br><br> Την $date αιτήθηκε να γίνει μέλος στο Hellenic Blockchain Assosiation με πλήρη γνώση των όρον και προυποθέσεων.";
    $msg = "success_subscription";
} elseif (strpos($requested_page, 'aitisi_n.php') !== false) {
    $company = validate($_POST['company']) ?? '';
    $legalrep = validate($_POST['legalrep']) ?? '';
    $afm = validate($_POST['afm']) ?? '';
    $street = validate($_POST['street']) ?? '';
    $streetno = validate($_POST['streetno']) ?? '';
    $city = validate($_POST['city']) ?? '';
    $postalcode = validate($_POST['postalcode']) ?? '';
    $visitor_email = validate($_POST['visitor_email']) ?? '';
    $telephone = validate($_POST['telephone']) ?? '';
    $inputsignature = validate($_POST['inputsignature']) ?? '';
    $date = validate($_POST['date'])  ?? '';

    $email_from = 'registration.info@hba.org.gr';
    $headers = 'From: hba registration form' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    $email_subject = "Αίτηση Εγγραφής Νομικού Προσώπου $name $lastname";
    $email_body = "Το νομικό πρόσωπο " . $company . "<br>Με αντιρπρόσωπο: " . $legalrep . "<br>ΑΦΜ/ΔΟΥ: " . $afm . "<br>Διεύθηνση: " . $street . " " . $steetno . ", " . $city . ", " . $postalcode . "<br>Τηλέφωνο Επικοινωνίας: " . $telephone . "<br>e-mail " . $visitor_email . "<br>Υπογραφή: " . $inputsignature . "<br><br> Την " . $date . " αιτήθηκε να γίνει μέλος στο Hellenic Blockchain Assosiation με πλήρη γνώση των όρον και προυποθέσεων.";
    $msg = "success_subscription";
} elseif (strpos($requested_page, 'index.php') !== false) {
    $name = validate($_POST['name']) ?? '';
    $email = validate($_POST['email']) ?? '';
    $subject = validate($_POST['subject']) ?? '';
    $message = validate($_POST['message']) ?? '';

    $email_from = 'support.info@hba.org.gr';
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    $email_subject = "Επικοινωνία μέσω φόρμας: $subject";
    $email_body = "Ο/Η " . $name . " με email " . $email . " έγραψε: <br><br>" . $message;
    $msg = "success_communication";
}

//email success msg
$sendmail =  @mail($email_to, $email_subject, $email_body, $headers);

if (!$sendmail) {
    $msg = "fail";
}
header('location:index.php?msg='.$msg);