<?php
session_start(); // Start a session to manage logged-in users

if(isset($_POST['login'])) {
    $user_name = $_POST['username'];
    $user_pass = $_POST['password'];

    // Database connection
    include_once('db.php');

    // Fetch the stored hashed password for the user by username
    $sql = "SELECT password FROM admin WHERE username='$user_name'";
    $result = mysqli_query($conn, $sql) or die("Query Error");

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $stored_hashed_pass = $row['password'];

        // Verify the password
        if(password_verify($user_pass, $stored_hashed_pass)) {
            // Successful login
            $_SESSION['username'] = $user_name; // Store username in session
            echo "Login successful! Redirecting...";
            header("Location: adminpaneldash.php"); // Redirect to a dashboard or another page
            exit();
        } else {
            $login_error = "Invalid username or password!";
        }
    } else {
        $login_error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Edugate Sri Lanka</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(to top, #c9c9ff 50%, #9090fa 90%) no-repeat;
        }

        .container {
            margin: 50px auto;
        }

        .panel-heading {
            margin-top: 20px;
            text-align: center;
            margin-bottom: 10px;
        }

        .btn.btn-primary {
            margin-top: 20px;
            border-radius: 15px;
        }

        .panel {
            box-shadow: 20px 20px 80px rgb(218, 218, 218);
            border-radius: 12px;
        }

        .input-field {
            border-radius: 5px;
            padding: 5px;
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            color: #4343ff;
        }

        input[type='text'],
        input[type='password'] {
            border: none;
            outline: none;
            width: 100%;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
            text-align: center;
        }

        .toggle-password {
            background: none;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h1>EDUGATE SRI LANKA</h1>
                        <h3 class="pt-3 font-weight-bold">LOGIN</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form id="login" action="" method="POST">
                            <div class="form-group py-2">
                                <div class="input-field">
                                    <span class="far fa-user p-2"></span>
                                    <input type="text" name="username" id="username" placeholder="Username" required>
                                </div>
                            </div>

                            <div class="form-group py-1 pb-2">
                                <div class="input-field">
                                    <span class="fas fa-lock px-2"></span>
                                    <input type="password" name="password" id="password" placeholder="Enter your Password" required>
                                    <button type="button" class="toggle-password">
                                        <span class="far fa-eye-slash"></span>
                                    </button>
                                </div>
                            </div>

                            <?php if(isset($login_error)): ?>
                            <div class="error-message"><?php echo $login_error; ?></div>
                            <?php endif; ?>

                            <div class="form-group">
                                <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function () {
                const passwordField = this.previousElementSibling;
                const icon = this.querySelector('span');

                if (passwordField.type === "password") {
                    passwordField.type = "text";
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                } else {
                    passwordField.type = "password";
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                }
            });
        });
    </script>
</body>
</html>
