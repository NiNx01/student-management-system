<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management | Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="page-wrapper">
        <h1 class="site-heading">Student Management System</h1>
        <div class="form-wrapper">

            <?php

            if (isset($_GET['created'])) {
                echo '
                    <div class="alert-wrapper">
                        <div class="alert alert-success">
                            Account created. Login to continue
                        </div>
                    </div>  
                ';
            }

            if (isset($_GET['noAccount'])) {
                echo '
                    <div class="alert-wrapper">
                        <div class="alert alert-danger">
                            No account found with this email.
                        </div>
                    </div>  
                ';
            }

            if (isset($_GET['wrongPassword'])) {
                echo '
                    <div class="alert-wrapper">
                        <div class="alert alert-danger">
                            Password is incorrect.
                        </div>
                    </div>  
                ';
            }

            ?>

            <h2 class="form-heading">Login</h2>

            <form action="__php/__login.php" method="post">
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="loginEmail" class="form-control" placeholder="user@gmail.com">
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="loginPassword" class="form-control"
                        placeholder="&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;">
                </div>

                <div class="form-group">
                    <button type="submit" class="form-btn" name="loginBtn" value="login">Log in</button>
                </div>
                <hr>
                <div class="form-footer">
                    <p>Don't have an account? <a href="signupPage.php" class="form-link">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>


</body>

</html>