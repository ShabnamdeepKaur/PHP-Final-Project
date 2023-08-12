<?php
session_start();
// if (!isset($_SESSION['username'])) {
//     header("Location: signin.php");
//     exit();
// }

include_once 'database.php';

$sql = "SELECT * FROM register";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registered Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .pink-card {
            background-color: #ffcccc;
        }

        .gray-card {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center">Registered Users</h1>
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="col-md-4 mb-4">
                        <div class="card <?= $row['id'] % 2 == 0 ? 'pink-card' : 'gray-card' ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['namee'] ?></h5>
                                <p class="card-text"><?= $row['category'] ?></p>
                                <p class="card-text"><?= $row['experience'] ?> of experience</p>
                                <p class="card-text"><?= $row['city'] ?></p>
                                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                                <a href="action.php?action=delete?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<p class='text-center'>No users found.</p>";
            }
            ?>
        </div>
        
    </div>
</body>

</html>