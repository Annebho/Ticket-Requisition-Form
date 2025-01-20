<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    

    $to = "tick.toklia@gmail.com, bsheirs@gmail.com";

    $subject = "New Form Submission";


    $message = "You have received a new form submission:\n\n";
    $message .= "Name: $name\n";
 
    $headers .= "Reply-To: $name" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
 
        header("Location: thank-you.html");
        exit; 
    } else {

        echo "Error: Unable to send email. Please try again.";
    }
}
?>