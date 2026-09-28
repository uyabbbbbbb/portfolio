<?php

session_start();

if (isset($_SESSION["login"]) && $_SESSION["login"] === true) {
    header("Location: dashboard.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === "admin" && $password === "12345") {

        $_SESSION["login"] = true;
        $_SESSION["username"] = $username;

        header("Location: dashboard.php");
        exit;

    } else {

        $error = "Username atau password salah!";

    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portfolio</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fffdf5;
            font-family: Arial, sans-serif;
            color: #292929;
        }

        .login-box {
            width: 380px;
            padding: 35px;
            background: white;
            border: 3px solid #292929;
            border-radius: 15px;
            box-shadow: 8px 8px 0 #292929;
        }

        .login-box h1 {
            margin-bottom: 8px;
            font-size: 32px;
        }

        .login-box p {
            margin-bottom: 25px;
            color: #666;
        }

        .input-group {
            margin-bottom: 18px;
        }

        .input-group label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 13px;
            border: 2px solid #292929;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
        }

        .input-group input:focus {
            background: #fff7df;
        }

        .login-button {
            width: 100%;
            padding: 13px;
            border: 2px solid #292929;
            border-radius: 8px;
            background: #ffd84d;
            color: #292929;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 4px 4px 0 #292929;
        }

        .login-button:hover {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0 #292929;
        }

        .error {
            margin-bottom: 18px;
            padding: 10px;
            background: #ff6478;
            border: 2px solid #292929;
            border-radius: 8px;
            font-weight: bold;
        }

        .back {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #292929;
            text-decoration: none;
            font-weight: bold;
        }

        .back:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-box">

        <h1>Login</h1>
        <p>Masuk ke dashboard portfolio</p>

        <?php if ($error): ?>
            <div class="error">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">

            <div class="input-group">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    required
                >
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <button type="submit" class="login-button">
                Login
            </button>

        </form>

        <a href="portfolio.php" class="back">
            ← Kembali ke Portfolio
        </a>

    </div>

</body>
</html>