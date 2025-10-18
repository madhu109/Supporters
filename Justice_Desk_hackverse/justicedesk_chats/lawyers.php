<?php
include 'db.php';
session_start();

// Fetch all lawyers
$result = mysqli_query($conn, "SELECT id, name, specialization FROM lawyers");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lawyers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Available Lawyers</h2>
    <div class="row">
        <?php while($lawyer = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($lawyer['name']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($lawyer['specialization']) ?></p>
                        <a href="chat.php?lawyer_id=<?= $lawyer['id'] ?>" class="btn btn-primary">Chat with Lawyer</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>
