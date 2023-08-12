<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: register.php");
    exit();
}

include_once 'database.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Retrieve user details from the database
    $sql = "SELECT * FROM register WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
    } else {
        header("Location: users.php");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Update user details in the database
    $name = $_POST["txtName"];
    $contact = $_POST["txtContact"];
    $email = $_POST["txtEmail"];
    $city = $_POST["txtCity"];
    $address = $_POST["inputAddress"];
    $category = $_POST["txtCategory"];
    $experience = $_POST["txtExp"];
    $firm = $_POST["txtFirm"];
    $workdone = $_POST["txtareaWorkDone"];

    $sql = "UPDATE register SET namee='$name', contact='$contact', email='$email', city='$city', addresss='$address', category='$category', experience=$experience, firm='$firm', workdone='$workdone' WHERE id=$user_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: users.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Include necessary stylesheets and scripts -->
</head>

<body>
    <div class="container">
        <h1>Edit User</h1>
        <form method="post" action="">
            <!-- Display user details and allow editing -->
        </form>
    </div>
</body>

</html>
