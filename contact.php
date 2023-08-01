<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the input data (you can customize the validation based on your requirements)
    if (empty($name) || empty($email) || empty($message)) {
        http_response_code(400); // Bad Request
        echo json_encode(array('error' => 'All fields are required.'));
    } else {
        // Process the data (You can add your business logic here)
        // For now, we'll just return a success response.
        http_response_code(200); // OK
        echo json_encode(array('message' => 'Message received successfully.'));
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(array('error' => 'Method not allowed.'));
}
?>
