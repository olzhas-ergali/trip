<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["lname"]));
    $phone = htmlspecialchars(trim($_POST["lphone"]));
    $email = htmlspecialchars(trim($_POST["lemail"]));
    $interest = htmlspecialchars(trim($_POST["lselect"]));
    
    // Email данные
    $to = "your-email@example.com"; // Замените на ваш email
    $subject = "New Inquiry from Call Me Form";
    $message = "
        Name: $name\n
        Phone: $phone\n
        Email: $email\n
        Interested in: $interest\n
    ";
    $headers = "From: $email\r\n";
    
    // Отправка письма
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully";
    } else {
        echo "Failed to send message";
    }
}
?>
