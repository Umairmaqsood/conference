<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Use Gmail's SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email@gmail.com'; // Your Gmail address
        $mail->Password = 'your_app_password'; // Your Gmail password or App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('your_email@gmail.com', $name); // Set the from address as your email
        $mail->addAddress('ficse@fui.edu.pk'); // Add the recipient address

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<p><strong>Name:</strong> $name</p>
                       <p><strong>Email:</strong> $email</p>
                       <p><strong>Subject:</strong> $subject</p>
                       <p><strong>Message:</strong><br/>$message</p>";

        $mail->send();
        echo "Your message has been sent. Thank you!";
    } catch (Exception $e) {
        echo "There was an error sending your message. Please try again. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
