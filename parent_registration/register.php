<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parent Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Parent Registration Form</h2>
    <form action="register.php" method="POST">
        <input type="text" name="parent_name" placeholder="Parent name" required><br>
        <input type="text" name="visiting_name" placeholder="Student name" required><br>
        <input type="text" name="origin" placeholder="Where are you from?" required><br>
        <input type="text" name="contact" placeholder="Contact Number" required><br>
        <button type="submit" name="register">Register</button>
    </form>
</div>

<?php
if (isset($_POST['register'])) {
    $parent_name = $_POST['parent_name'];
    $visiting_name = $_POST['visiting_name'];
    $origin = $_POST['origin'];
    $contact = $_POST['contact'];

    $stmt = $conn->prepare("INSERT INTO parents (parent_name, visiting_name, origin, contact) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $parent_name, $visiting_name, $origin, $contact);

    if ($stmt->execute()) {
        echo "<p class='success'>Registration successful! ✅</p>";
    } else {
        echo "<p class='error'>Error: " . $stmt->error . "</p>";
    }
}
?>
</body>
</html>
