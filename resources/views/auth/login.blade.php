<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEJ03R6pPp2Xfe3tQp8kS2cDKhLJl1zY71t6iC0HNOh6zC+uKEbD0nVumFqLO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .input-field {
            position: relative;
        }

        .input-field input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease-in-out;
        }

        .input-field label {
            position: absolute;
            left: 10px;
            top: 10px;
            color: #aaa;
            font-size: 14px;
            transition: 0.3s ease-in-out;
            pointer-events: none;
        }

        .input-field.focused input {
            border-color: #007bff;
        }

        .input-field.focused label {
            top: -10px;
            left: 10px;
            font-size: 12px;
            color: #007bff;
        }

        .btn-login {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            width: 100%;
            border-radius: 5px;
            transition: background-color 0.3s;
            font-size: 16px;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .mb-3 {
            margin-bottom: 1.5rem;
        }

        h2 {
            font-size: 28px;
            color: #333;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2 class="text-center mb-4">Login</h2>
        <form action="/login" method="POST">

            @csrf
            <div class="input-field mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email"
                    required>
            </div>
            <div class="input-field mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control"
                    placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            // Animasi label saat input fokus
            $('.input-field input').on('focus', function() {
                $(this).closest('.input-field').addClass('focused');
            });

            $('.input-field input').on('blur', function() {
                if ($(this).val() === '') {
                    $(this).closest('.input-field').removeClass('focused');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
