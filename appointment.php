<?php
    include 'conn.php';
    $sql = "SELECT `name`, `contact`, `email`, `service`, `location`, `date` FROM `appointments`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointments</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Service</th>
        <th>Location</th>
        <th>Date</th>
    </tr>

    <?php
    // Check if there are results
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['contact']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['service']) . "</td>";
            echo "<td>" . htmlspecialchars($row['location']) . "</td>";
            echo "<td>" . htmlspecialchars($row['date']) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No appointments found</td></tr>";
    }

    // Close the database connection
    $conn->close();
    ?>
</table>

</body>
</html>