<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];
    $image = $_FILES['image'];

    // Process the image and store it (ensure the "uploads" directory exists)
    $imageFileName = 'uploads/' . basename($image['name']);
    move_uploaded_file($image['tmp_name'], $imageFileName);

    // Store the content and image filename in a database or text file
    // Example: Append to a text file
    file_put_contents('posts.txt', $content . ' | ' . $imageFileName . "\n", FILE_APPEND);

    echo 'Post successfully added!';
}
?>
