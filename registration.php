<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <div>
              <label for="username">Username</label>
        </div>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <div>
             <label for="email">Email</label>
        </div>
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <div>
             <label for="password">Password</label>
        </div>
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="index.html">Click to Login</a></p>
    </form>
</body>
</html>
