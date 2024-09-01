<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Edugate Sri Lanka</title>
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
                        <h1>EDUGATE GLOBAL</h1>
                        <h3 class="pt-3 font-weight-bold">REGISTER</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form id="register" action="" name="register" method="POST">
                            <div class="form-group py-2">
                                <div class="input-field">
                                    <span class="fas fa-envelope p-2"></span>
                                    <input type="text" name="email" id="email" placeholder="EMAIL" required>
                                </div>
                            </div>

                            <div class="form-group py-2">
                                <div class="input-field">
                                    <span class="fas fa-user-alt p-2"></span>
                                    <input type="text" name="username" id="username" placeholder="USERNAME" required>
                                </div>
                            </div>

                            <div class="form-group py-2">
                                <div class="input-field">
                                    <span class="fas fa-address-card p-2"></span>
                                    <input type="text" name="name" id="name" placeholder="FULL NAME" required>
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

                            <div class="form-group py-1 pb-2">
                                <div class="input-field">
                                    <span class="fas fa-lock px-2"></span>
                                    <input type="password" name="conpass" id="conpass" placeholder="Reenter your Password" required>
                                    <button type="button" class="toggle-password">
                                        <span class="far fa-eye-slash"></span>
                                    </button>
                                </div>
                                <div id="password-error" class="error-message"></div>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="register" class="btn btn-primary btn-block">Submit</button>
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

        // Form submission validation
        document.getElementById('register').addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const reenterPassword = document.getElementById('conpass').value;
            const errorMessage = document.getElementById('password-error');

            if (password !== reenterPassword) {
                event.preventDefault(); // Prevent form submission
                errorMessage.textContent = "Passwords do not match!";
            } else {
                errorMessage.textContent = "";
            }
        });
    </script>
</body>
</html>

