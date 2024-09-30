<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include database connection file
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        // Login process
        $login_username = $_POST['login_username'];
        $login_password = $_POST['login_password'];

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);   
        $stmt->bind_param("s", $login_username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($login_password, $row['password'])) {
                // Set session variables
                $_SESSION['user_id'] = $row['id']; // Store the user ID in session
                $_SESSION['username'] = $row['username']; // Optionally store the username

                // Redirect to the customer dashboard
                header("Location: Customers/customerDashboard.php");
                exit(); // Ensure no further code is executed after the redirect
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found.";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Login page CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            text-align: center;
            font-size: 14px;
            margin-top: 10px;
        }

        p a {
            color: #333;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        /* General dashboard CSS */
        h1 {
            color: #333;
        }

        nav {
            background-color: #f4f4f4;
            padding: 10px;
            margin-bottom: 20px;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
        }

        .item-list {
            margin-top: 20px;
        }

        .item-list ul {
            list-style-type: none;
        }

        .item-list li {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
        }

        .item-list img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    
    <form method="POST">
        <h2>Login</h2>
        <input type="text" name="login_username" placeholder="Username" required>
        <input type="password" name="login_password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
        <p>Don't have an account? <a href="register.php">Customer Register here</a></p>
        <button type="button" onclick="window.location.href='index.php'" style="margin-top: 10px; width: 100%; padding: 15px; background-color: #007BFF; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">
            Back to Home
        </button>
    </form>

    
</body>
</html>
