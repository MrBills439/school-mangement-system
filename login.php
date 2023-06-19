<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <!---login form--->
    <div class="form-container">
        <form action="" method="POST">
            <h3>Login now</h3>
            <input type="email" name="email" placeholder="Enter your Email">
            <input type="password" id="password" name="password"  placeholder="Enter your password">
            <!-- <div class="showpassword">
                <input type="checkbox" id="showPasswordCheckbox">
                <label for="showPasswordCheckbox">Show password</label>
            </div> -->
            <input type="submit" name="loginNow" value="login now" class="form-btn">
            <p>don't have an account? <a href="signup.php">signup now</a></p>
        </form>
    </div>

    