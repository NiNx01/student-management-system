<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management | Sign up</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="page-wrapper">
        <h1 class="site-heading">Student Management System</h1>
        <div class="form-wrapper">
            <h1 class="form-heading">Sign up</h1>
            <form action="__php/__signup.php" method="post">

                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="username" class="form-control" placeholder="Username">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="user@gmail.com">
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control"
                        placeholder="&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;">
                </div>


                <div class="form-group">
                    <button type="submit" class="form-btn" name="signupBtn" value="signup">Sign up</button>
                </div>
                <hr>
                <div class="form-footer">
                    <p>Already have an account? <a href="loginPage.php" class="form-link">Log in</a></p>
                </div>
            </form>
        </div>
    </div>


</body>

</html>