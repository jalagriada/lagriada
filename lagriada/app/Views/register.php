<!-- app/Views/register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Register Page</title>
</head>
<body>
    <h2>Register</h2>
    <form action="/register/submit" method="post">
        <label for="username">Username:</label><br/>
        <input type="text" id="username" name="username" required><br/><br/>
        
        <label for="email">Email:</label><br/>
        <input type="email" id="email" name="email" required><br/><br/>
        
        <label for="password">Password:</label><br/>
        <input type="password" id="password" name="password" required><br/><br/>
        
        <label for="password_confirm">Confirm Password:</label><br/>
        <input type="password" id="password_confirm" name="password_confirm" required><br/><br/>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>
