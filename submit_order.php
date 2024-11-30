<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $coffeeType = htmlspecialchars($_POST['coffeeType']);
    $quantity = htmlspecialchars($_POST['quantity']);

    // Email details
    $to = "mwasfrancis78@gmail.com";
    $subject = "New Coffee Order";
    $message = "You have received a new coffee order:\n\n";
    $message .= "Name: " . $name . "\n";
    $message .= "Type of Coffee: " . $coffeeType . "\n";
    $message .= "Quantity: " . $quantity . "\n";

    $headers = "From: noreply@coffeeorders.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Order submitted successfully!";
    } else {
        echo "Failed to send order. Please try again.";
    }
}
?>
