<?php 
// Use correct path to PHPMailer files
require_once __DIR__ . '/../phpmailer/src/Exception.php';
require_once __DIR__ . '/../phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/../phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Function to send email
function sendEmail($to, $subject, $body) {
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2; // Enable verbose debug output
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mohamedtajukay@gmail.com'; // Your Gmail address
        $mail->Password   = 'tryjbqbutfcfrfxy'; // Your Gmail app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('mohamedtajukay@gmail.com', 'SchoolTech');
        $mail->addAddress($to);

        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Function to send SMS (commented out for now)
/*
function sendSMS($to, $message) {
    // Textlocal API endpoint
    $url = 'https://api.textlocal.in/send/';
    
    // Your Textlocal API key
    $apiKey = 'YOUR_TEXTLOCAL_API_KEY';
    
    // Prepare data for POST request
    $data = array(
        'apikey' => $apiKey,
        'numbers' => $to,
        'message' => $message,
        'sender' => 'TXTLCL'
    );
    
    // Send the POST request with cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    // Process your response here
    $result = json_decode($response, true);
    
    if ($result['status'] === 'success') {
        return true;
    } else {
        return "SMS could not be sent. Error: " . $result['errors'][0]['message'];
    }
}
*/
?>