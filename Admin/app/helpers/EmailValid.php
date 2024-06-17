<?php

function emailExists($email) {
    $accessKey = 'BlGA9AowJxdB9uQLfqmuRjYmLNijL1cg';


    $apiUrl = "https://apilayer.net/api/check?access_key={$accessKey}&email={$email}&smtp=1&format=1";

    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    if (isset($data['format_valid']) && $data['format_valid'] && isset($data['smtp_check']) && $data['smtp_check']) {
        return true;
    } else {
        return false;
    }
}

// // Step 1: Validate email format
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     // Step 2: Extract domain from email
//     $emailParts = explode('@', $email);
    
//     if (count($emailParts) === 2) {
//         $domain = $emailParts[1];

//         // Step 3: Check DNS records for the email domain
//         if (checkdnsrr($domain, 'MX')) {
//     echo "Email exists.";
//             // Email exists (according to DNS check)
//             // However, for Gmail, this DNS check is not reliable for verifying email existence
//             // Due to security measures and anti-spam configurations, Gmail may not have publicly accessible MX records

//             // To accurately check Gmail email existence, you may need to use alternative methods, such as:
//             // 1. Send a verification email and wait for the recipient to confirm
//             // 2. Utilize Gmail API or third-party email verification services

//             // This DNS check should be considered as a basic validation step and not definitive proof of email existence
//         } else {
//             // Email does not exist (according to DNS check)
//             echo "Email does not exist.";
//         }
//     } else {
//         // Invalid email format (missing or multiple @ symbols)
//     }
// } else {
//     // Invalid email format
// }


?>