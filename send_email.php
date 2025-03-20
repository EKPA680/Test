<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_number = $_POST['account_number'];
    $bank_name = $_POST['bank_name'];
    $account_holder_name = $_POST['account_holder_name'];
    $withdrawal_amount = $_POST['withdrawal_amount'];

    $to = "your-email@example.com";
    $subject = "Withdrawal Form Submission";
    $message = "Account Number: $account_number\n";
    $message .= "Bank Name: $bank_name\n";
    $message .= "Account Holder Name: $account_holder_name\n";
    $message .= "Withdrawal Amount: $withdrawal_amount\n";

    $headers = "From: no-reply@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>