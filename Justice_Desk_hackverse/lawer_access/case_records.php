<?php
session_start();

// Check if the user is logged in as a lawyer
if (!isset($_SESSION['lawyer_logged_in']) || $_SESSION['lawyer_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

// Include database connection
include 'connect.php';

$sql = "SELECT * FROM cases";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Records</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f9ff;
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #0056b3;
            font-weight: bold;
            text-align: center;
        }
        table {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }
        thead {
            background-color: #0056b3;
            color: white;
        }
        tbody tr {
            transition: background-color 0.3s, transform 0.2s;
        }
        tbody tr:hover {
            background-color: #e3f2fd;
            transform: scale(1.02);
        }
        .btn-logout {
            background-color: #0056b3;
            color: white;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-logout:hover {
            background-color: #003f8a;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Case Records</h2>
        <a href="logout.php" class="btn btn-logout mb-3">Logout</a>

        <?php if ($result->num_rows > 0): ?>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Case Type</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Submitted On</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['firstName']); ?></td>
                    <td><?php echo htmlspecialchars($row['lastName']); ?></td>
                    <td><?php echo htmlspecialchars($row['case_type']); ?></td>
                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                    <td><?php echo htmlspecialchars($row['message']); ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p class="text-center">No case records found.</p>
        <?php endif; ?>

        <?php
        $conn->close();
        ?>
    </div>
</body>
</html>
