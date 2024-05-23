<?php
    include('credentials.php');
    include('TypingDNAVerifyClient.php');
    $typingDNAVerifyClient = new TypingDNAVerifyClient($client_id, $application_id, $secret);

    $response = $typingDNAVerifyClient->validateOTP([
        'phoneNumber' => "+14067478083",
    ], $_GET['otp']);

    print_r($response);
?>
       