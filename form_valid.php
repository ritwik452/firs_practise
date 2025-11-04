<?php
$name = $email = $message = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Check for empty fields
    if (empty($name) || empty($email) || empty($message)) {
        $error = "❌ All fields are required!";
    } 
    // Validate email format
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "⚠️ Invalid email format!";
    } 
    else {
        $success = "✅ Message sent successfully!";
        // Here you could save data to a database or send an email
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form Validation</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width:600px;">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
            <h3>📩 Contact Us</h3>
        </div>
        <div class="card-body">

            <!-- Display messages -->
            <?php if ($error): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php elseif ($success): ?>
                <div class="alert alert-success"><?= $success ?></div>
            <?php endif; ?>

            <!-- Contact Form -->
            <form method="post">
                <div class="mb-3">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($name) ?>">
                </div>

                <div class="mb-3">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control" value="<?= htmlspecialchars($email) ?>">
                </div>

                <div class="mb-3">
                    <label>Message:</label>
                    <textarea name="message" class="form-control"><?= htmlspecialchars($message) ?></textarea>
                </div>

                <button type="submit" class="btn btn-success w-100">Send Message</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
