<?php

session_start();
include "db_connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediGuard Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Section -->
    <header class="hero">
        <div class="container">
            <h1 class="display-4">MediGuard</h1>
            <p class="lead">Your health, monitored continuously for safety and peace of mind.</p>
        </div>
    </header>

    <!-- Login Form Section -->
    <div class="container mt-5">
        <div class="login-container">
            <h2 class="text-center">Login to MediGuard</h2>
            <form action="Login.php" method="POST">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <div class="text-center mt-3">
                <a href="#">Forgot your password?</a>
            </div>
            <div class="text-center mt-2">
                <p>Don't have an account? <a href="#">Register here</a></p>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="py-4 bg-dark text-white text-center">
        <div class="container">
            <p>&copy; 2023 MediGuard. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>