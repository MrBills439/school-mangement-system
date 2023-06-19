<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <!--signup form-->
    <div class="form-container">
        <form action="signUp.inc.php" method="POST">
            <h3>Register now</h3>
            <input type="type" name="name"  placeholder="Enter your name">
            <input type="email" name="email"  placeholder="Enter your Email">
            <input type="password" id="password" name="password" required placeholder="Enter your password">
            <!-- <div class="showpassword">
                <input type="checkbox" id="showPasswordCheckbox1">
                <label for="showPasswordCheckbox1">Show password</label>
            </div> -->
            <input type="password" name="cpassword" placeholder="Confirm your password">
            <!-- <div class="showpassword">
                <input type="checkbox" id="showPasswordCheckbox2">
                <label for="showPasswordCheckbox2">Show password</label>
            </div> -->
            <!-- <span id="passwordValidationMsg" style="color: red;"></span> -->
            <select name="user_type" >
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" name="registerNow" value="register now" class="form-btn">
            <p>already have an account? <a href="login.php">login now</a></p> 
        </form>
    </div>

    <!-- <script src="script.js"></script> -->
    
</body>
</html>