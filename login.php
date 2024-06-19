<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Workgank Admin</title>
    <link rel="stylesheet" href="admin/style.css">
    <link rel="icon" href="img/lg2.png" type="image/png">
    <script src="https://kit.fontawesome.com/ef24dbc60b.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            text-align: center;
            color: #BE3C7C;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group input[type="checkbox"] {
            width: auto;
        }

        .form-group .show-password {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .form-group .show-password input {
            margin-right: 10px;
        }

        .form-group .show-password label {
            margin: 0;
            color: #333;
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            background-color: #BE3C7C;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
        }

        .btn-login:hover {
            background-color: #A32E69;
        }
    </style>
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var showPasswordCheckbox = document.getElementById('show-password');
            if (showPasswordCheckbox.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login_process.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="off" required>
            </div>
            <div class="form-group show-password">
                <input type="checkbox" id="show-password" onclick="togglePassword()">Tampilkan Password
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</body>

</html>