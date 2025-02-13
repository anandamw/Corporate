<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group-text {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }

        .btn-login {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            transition: 0.3s;
            font-size: 16px;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2 class="mb-4 text-dark">Login</h2>
        <form action="/login" method="POST">
            @csrf
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email"
                    required>
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control"
                    placeholder="Enter your password" required>
                <span class="input-group-text toggle-password" onclick="togglePassword()"><i
                        class="bi bi-eye-fill"></i></span>
            </div>
            <button type="submit" class="btn-login">Login</button>
            <a href="#" class="forgot-password">Forgot Password?</a>
        </form>
    </div>

    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var toggleIcon = document.querySelector(".toggle-password i");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.classList.remove("bi-eye-fill");
                toggleIcon.classList.add("bi-eye-slash-fill");
            } else {
                passwordField.type = "password";
                toggleIcon.classList.remove("bi-eye-slash-fill");
                toggleIcon.classList.add("bi-eye-fill");
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
