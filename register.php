<?php
// Include the database connection
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Registration process
    $reg_username = $_POST['reg_username'];
    $reg_email = $_POST['reg_email'];
    $reg_password = password_hash($_POST['reg_password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password, user_type) VALUES ('$reg_username', '$reg_email', '$reg_password', 'customer')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! You can now log in.";
        // Optionally redirect to the login page after successful registration
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Form Container */
        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        /* Headings */
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 26px;
            color: #333333;
        }

        /* Input Fields */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        /* Submit Button */
        button {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Link to Login */
        p {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        p a {
            color: #333333;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            form {
                padding: 20px;
            }

            h2 {
                font-size: 22px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                padding: 12px;
                font-size: 14px;
            }

            button {
                padding: 12px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Register</h2>
        <input type="text" name="reg_username" placeholder="Username" required>
        <input type="email" name="reg_email" placeholder="Email" required>
        <input type="password" name="reg_password" placeholder="Password" required>
        <button type="submit">Register</button>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </form>
</body>
</html>

