<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Your WebApp</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <style>
    /* Global styles */
    body {
      font-family: Roboto, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      min-height: 100vh;
      align-items: center;
      justify-content: center;
      background-color: #f5f5f5; /* Light gray background */
    }

    h1 {
      margin: 0 0 20px 0;
      font-size: 2em;
      text-align: center;
    }

    a {
      text-decoration: none;
      color: #333; /* Darker gray for links */
      padding: 5px 10px;
      border: 1px solid #ddd; /* Light border for links */
      border-radius: 4px;
      margin: 5px;
    }

    a:hover {
      background-color: #eee; /* Light hover effect for links */
    }

    /* Specific styles for logged-in users */
    .logged-in {
      text-align: center;
    }
  </style>
</head>
<body>
  <?php require 'partials/header.php' ?>

  <?php if (!empty($user)): ?>
    <div class="logged-in">
      <br> Welcome, <?= $user['email']; ?>
      <br> You are Successfully Logged In
      <br>
      <a href="logout.php">Logout</a>
    </div>
  <?php else: ?>
    <h1>Please Login or Sign Up</h1>
    <a href="login.php">Login</a> or
    <a href="signup.php">Sign Up</a>
  <?php endif; ?>
</body>
</html>
