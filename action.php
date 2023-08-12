<?php
include_once 'database.php';

// Function to validate and sanitize user input
function sanitize_input($input) {
    // Perform necessary sanitization
    return $input;
}

if (isset($_GET['action'])) {

    if ($_GET['action'] === 'signup') {
        // User signup action
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = sanitize_input($_POST['username']);
            $password = $_POST['password'];

            // Validate and sanitize input before inserting into the database
            // Hash the password before storing it
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
            if ($conn->query($sql) === TRUE) {
                header("Location: signin.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    if ($_GET['action'] === 'login') {
        // User login action
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = sanitize_input($_POST['username']);
            $password = $_POST['password'];

            // Validate and sanitize input before querying the database

            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = $conn->query($sql);

            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                   
                    header("Location: success.php");
                    exit();
                } else {
                    echo "Invalid password";
                }
            } else {
                echo "User not found";
            }
        }
    }
    // =============================== register ======================================
    


if ($_GET['action'] === 'register'){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["txtName"];
        $contact = $_POST["txtContact"];
        $email = $_POST["txtEmail"];
        $city = $_POST["txtCity"];
        $address = $_POST["inputAddress"];
        $category = $_POST["txtCategory"];
        $experience = $_POST["txtExp"];
        $firm = $_POST["txtFirm"];
        $workdone = $_POST["txtareaWorkDone"];
        $picpath = $_FILES["picFile"]["name"]; 
        $idproofpath = $_FILES["idFile"]["name"]; 
       
    
        $sql = "INSERT INTO register (namee, contact, email, city, addresss, category, experience, firm, workdone, picpath, idproofpath, password)
                VALUES ('$name', '$contact', '$email', '$city', '$address', '$category', $experience, '$firm', '$workdone', '$picpath', '$idproofpath', '$password')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
           
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// ============================== edit ==========================================

    if ($_GET['action'] === 'edit') {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_id'])) {
            $user_id = $_POST['user_id'];

            // Retrieve existing user details from the database
            $sql = "SELECT * FROM register WHERE id = $user_id";
            $result = $conn->query($sql);

            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();

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

                $sql_update = "UPDATE register SET namee='$name', contact='$contact', email='$email', city='$city', addresss='$address', category='$category', experience=$experience, firm='$firm', workdone='$workdone' WHERE id=$user_id";

                if ($conn->query($sql_update) === TRUE) {
                    header("Location: users.php");
                    exit();
                } else {
                    echo "Error: " . $sql_update . "<br>" . $conn->error;
                }
            } else {
                echo "User not found";
            }
        }
    }

    //========================== delete =========================
    if ($_GET['action'] === 'delete') {
        if (isset($_GET['user_id'])) {
            $user_id = $_GET['user_id'];

            // Delete user from the database
            $sql_delete = "DELETE FROM register WHERE id = $user_id";

            if ($conn->query($sql_delete) === TRUE) {
                header("Location: users.php");
                exit();
            } else {
                echo "Error deleting user: " . $conn->error;
            }
        }
    }
}