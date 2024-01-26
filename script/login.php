<?php
ini_set('display_errors', 1);
include('dbconnection.php');

session_start();

$con=new mysqli($servername, 
$username,
$password,
$database);

if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
} 

$loginError = '';

if (isset($_POST['username'])) { 


    $username = $_POST['username']; 
    $password = $_POST['password']; 

    $query = "SELECT username FROM users WHERE username = ? AND password = sha1(?)";
    if ($stmt = $con->prepare($query)) {
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute(); 
        $result = $stmt->get_result();
        $num_rows = $result->num_rows; 
        
       

        while ($row = $result->fetch_row()) {
            $_SESSION['username'] = $row[0]; 
            header("Location: dashboard.php"); 
            exit();
        }

        if ($num_rows == 0) {
            $loginError = 'Invalid username or password';
        }
    }
} 

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
         body {
            display: flex;
            justify-content: center;
            background-image: URL(bg.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
        h2 {
            padding-top: 10px; 
            font-size: 50px;
            font-family: Times, serif;
            color: white;
        }
        p {
            margin-top:10px;
            font-size: 22px;
            font-family: Times, serif;
            color: white;
        }
        label {
            font-size: 18px;
            font-family: Times, serif;
            color: white;
            margin-top: 15px;
        }
        #username {
             width: 100%;
             padding: 8px;
             box-sizing: border-box;
             background-color: rgba(255, 252, 242, 0.7);
             border: none;
             border-radius: 10px; 
             margin-top: 20px;
             margin-bottom: 20px;
        }

        #password {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            background-color: rgba(255, 252, 242, 0.7);
            border: none;
            margin-top: 20px;
            border-radius: 10px; 
    }
   
        .login-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            background-color: #6c584c;
            margin-top: 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;}

      .login-button:hover {
           background-color: rgba(255, 252, 242, 0.7);
           color: #ffffff;
         }

      .error-message {
        color: red;
        font-size: 16px;
        margin-top: 10px;
        }

    </style>
</head>
<body>

<div class="container">
    <h2>Authorized users only</h2>
    <p>Log in for database access </p>

    
    <?php
    if (!empty($loginError)) {
        echo '<div class="error-message">' . $loginError . '</div>';
    }
    ?>


<div id="error-message" class="error-message"></div>

<form action="login.php" method="POST" autocomplete="off" id="loginForm">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" >

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" >

    <button class="login-button" type="submit">Login</button>
</form>

<script>
    document.getElementById('loginForm').addEventListener('submit', function (event) {
        event.preventDefault();

        var usernameInput = document.getElementById('username');
        var passwordInput = document.getElementById('password');

        var username = usernameInput.value.trim();
        var password = passwordInput.value.trim();

        var errorMessage = document.getElementById('error-message');

        if (username === '' || password === '') {
            errorMessage.textContent = 'Please enter both username and password';
            errorMessage.style.display = 'block';
        } else {
            errorMessage.style.display = 'none';
            this.submit();
        }
    });
</script>

</body>

</html>