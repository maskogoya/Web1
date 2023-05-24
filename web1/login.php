<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <section class="login-box">
            <h2>Login Aplikai</h2>
            <form method="post" action="ceklogin.php">
                <input type="text" placeholder="username" name="username">
                <input type="password" placeholder="password" name="password">
                <input type="submit" value="login">
            </form>
        </section>
    </div>
</body>
</html>