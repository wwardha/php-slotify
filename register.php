<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Slotify</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>

            <p>
                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="loginUsername" placeholder="e.g. John Doe" required>
            </p>

            <p>
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="loginPassword" placeholder="Your password" required>
            </p>

            <button type="submit" name="loginButton">LOG IN</button>
        </form>

        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>

            <p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="e.g. John Doe" required>
            </p>

            <p>
                <label for="firstName">First name</label>
                <input type="text" id="firstName" name="firstName" placeholder="e.g. John" required>
            </p>

            <p>
                <label for="lastName">Last name</label>
                <input type="text" id="lastName" name="lastName" placeholder="e.g. Doe" required>
            </p>

            <p>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="e.g. john_doe@gmail.com" required>
            </p>

            <p>
                <label for="email2">Confirm email</label>
                <input type="email" id="email2" name="email2" placeholder="e.g. john_doe@gmail.com" required>
            </p>

            <p>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password" required>
            </p>

            <p>
                <label for="password2">Confirm password</label>
                <input type="password" id="password2" name="password2" placeholder="Confirm your password"required>
            </p>

            <button type="submit" name="registerButton">SIGN UP</button>
        </form>
    </div>
</body>
</html>