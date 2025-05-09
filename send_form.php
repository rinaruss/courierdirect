<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "rina.russ@courierdirectservices.com";
    $subject = "Courier Direct - New Form Submission";

    $message = "Name: " . $_POST["name"] . "\n"
             . "Email: " . $_POST["email"] . "\n"
             . "Phone: " . $_POST["phone"] . "\n"
             . "Address: " . $_POST["address"] . "\n"
             . "Vehicle Make: " . $_POST["vehicle_make"] . "\n"
             . "Vehicle Model: " . $_POST["vehicle_model"] . "\n"
             . "Vehicle Year: " . $_POST["vehicle_year"] . "\n"
             . "Available Hours: " . $_POST["hours"] . "\n"
             . "Additional Info: " . $_POST["additional_info"];

    $headers = "From: noreply@courierdirectservices.com\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your form has been submitted.";
    } else {
        echo "Error sending message.";
    }
}
?>

