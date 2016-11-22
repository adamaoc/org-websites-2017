<?php

require_once $_SERVER['DOCUMENT_ROOT']."/app/core/class.phpmailer.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = trim($_POST["contactName"]);
    $email = trim($_POST["contactEmail"]);
    $message = trim($_POST["message"]);

    $errors = array();

    $flag = trim($_POST["address"]);

    if($flag !== "flag") {
        echo "NOPE!";
        exit;
    }
    if ($name == "") {
      array_push($errors, "Please enter your full name.");
    }
    if ($email == "") {
      array_push($errors, "Please enter your email address.");
    }
    if ($message == "") {
      array_push($errors, "Please provide us with a substantive message so we can better help you.");
    }

    if (count($errors) > 0) {
      header("Location: /contact/#error");
      exit;
    }

    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "<br>";
    $email_body = $email_body . "Email: " . $email . "<br>";
    $email_body = $email_body . "Message: " . htmlspecialchars($message);

    $mail = new PHPMailer();

    $mail->SetFrom('contact@org-websites.com', 'ORG Websites Contact form');
    $address = 'adamaoc@gmail.com'; // to address //
    $mail->AddAddress($address, "ORG-Websites");
    $mail->Subject = "ORG-Websites form submission | " . $name;
    $mail->MsgHTML($email_body);

    if($mail->Send()) {
        header("Location: /contact/#success");
        exit;
    } else {
        header("Location: /contact/#sendError");
    }
}
