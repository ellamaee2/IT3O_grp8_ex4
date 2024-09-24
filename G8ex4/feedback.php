<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);


    $file = "feedbacks.txt";
    $feedback = "Name: $name\nMessage: $message\n\n";
    file_put_contents($file, $feedback, FILE_APPEND);


    echo "<script>
        alert('Thank you, $name, for your feedback!');
        window.location.href = 'ex4.php'; // Replace with your current page
    </script>";
    exit();
}
