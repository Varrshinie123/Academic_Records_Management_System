<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/PHPMailer-master/src/Exception.php';
require './PHPMailer/PHPMailer-master/src/PHPMailer.php';
require './PHPMailer/PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];




    // Database connection information
    $db_host = "localhost"; // Replace with your database host
    $db_user = "root"; // Replace with your database username
    $db_password = ""; // Replace with your database password
    $db_name = "Clinique-Beaute-Naturelle"; // Replace with your database name

    // Create a database connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // Insert data into the 'Bookings' table
    $sql = "INSERT INTO bookings (Name, Email, Message) VALUES ('$name', '$email', '$message')";
    
    if ($conn->query($sql) === true) {
        // Database query was successful, proceed to send email
        // Close the database connection
        $conn->close();

        // Email configuration
        $to = "admin@beautydr.in";
        $subject = "Query related to appointment";
    
        $email_message = "Name: $name\nEmail: $email\nMessage:\n$message";
    
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com"; // Replace with your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = "varrshinie.a@somaiya.edu"; // Replace with your Gmail email address
            $mail->Password = ""; // Replace with your Gmail password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipients
            $mail->setFrom($email);
            $mail->addAddress($to);

            // Content
            $mail->isHTML(false);
            $mail->Subject = $subject;
            $mail->Body = $email_message;

            // Send the email
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo 'Failed to insert data into the database';
    }
}
?>
