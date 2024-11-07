<?php
    include 'conn.php';
    $sql = "SELECT `First_name`, `Last_name`, `Mobile number`, `Email`, `Resume` FROM `applications`";
    $result = $conn->query($sql);
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Applications</title>
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
    
    <h2>Applications List</h2>
    
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Resume</th>
        </tr>
    
        <?php
        // Check if there are results
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['First_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Last_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Mobile number']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Resume']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No applications found</td></tr>";
        }
    
        // Close the database connection
        $conn->close();
        ?>
    </table>
    
    </body>
    </html>