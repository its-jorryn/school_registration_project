<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registered Parents</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Registered Parents List</h2>
    <table border="1" cellpadding="10" style="width:100%; border-collapse: collapse;">
        <tr style="background-color: #2F80ED; color: white;">
            <th>ID</th>
            <th>Parent Name</th>
            <th>Visiting</th>
            <th>Origin</th>
            <th>Contact</th>
            <th>Time</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM parents ORDER BY visit_time DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['parent_name']."</td>
                    <td>".$row['visiting_name']."</td>
                    <td>".$row['origin']."</td>
                    <td>".$row['contact']."</td>
                    <td>".$row['visit_time']."</td>
                  </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
