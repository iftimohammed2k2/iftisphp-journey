<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Login System</title>
</head>
<body>
    <h2>Login</h2>
    <form action="authenticate.php" method="post">
        <label>Username:</label><br/>
        <input type="text" name="username" required /><br/><br/>
        <label>Password:</label><br/>
        <input type="password" name="password" required /><br/><br/>
        <input type="submit" value="Login" />
    </form>
</body>
</html>
