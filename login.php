<?php

if (file_exists(__DIR__ . "/autoload.php")) {
    require_once(__DIR__ . "/autoload.php");
} ?>

<?php
session_start();
/**
 * Relogin System for cookie
 */
if (isset($_COOKIE['user_login_id'])) {

    $user_id = $_COOKIE['user_login_id'];
    $sql = "SELECT * FROM users WHERE id=' $user_id' ";
    $data = connect()->query($sql);
    $login_pass = $data->fetch(PDO::FETCH_ASSOC);

    /**
     * Session Manage
     */
    $_SESSION['id']         = $login_pass['id'];
    $_SESSION['username']   = $login_pass['username'];
    $_SESSION['name']       = $login_pass['name'];
    $_SESSION['email']      = $login_pass['email'];

    /**
     * redirect profilr page
     */
    header("location:dashboard.php");
}

/**
 * Profile Page Access Security
 */

if (isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['email'])) {
    header("location:dashboard.php");
} ?>


<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Responsive Login, Registration & Forgot Form Design</title>
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signin'])) {
    //get form Data
    $email       = $_POST['email'];
    $password    = $_POST['password'];


    if (empty($email) || empty($password)) {
        $msg = createAlert("All Fields Are Required!");
    } else {

        $sql = "SELECT * FROM users WHERE email='$email' ";
        $data = connect()->query($sql);
        $login_pass = $data->fetch(PDO::FETCH_ASSOC);
        $count = $data->rowCount();
        if ($count == 1) {
            if (password_verify($password,  $login_pass['password']) == true) {
                /**
                 * Session Manage
                 */
                $_SESSION['id']         = $login_pass['id'];
                $_SESSION['username']   = $login_pass['username'];
                $_SESSION['name']       = $login_pass['name'];
                $_SESSION['email']      = $login_pass['email'];

                /**
                 * set cookie for relogin
                 */
                setcookie('user_login_id', $login_pass['id'], time() + (60 * 60 * 365 * 10));

                /**
                 * redirect profilr page
                 */
                header("location:dashboard.php");
            } else {
                $msg = createAlert("Wrong passwordl!");
            }
        } else {
            $msg = createAlert("Wrong Uesr email!");
        }
    }
}


?>


<body class="bg-info">
    <div class="container">
        <!-- Login Form Start -->
        <div class="row justify-content-center wrapper" id="login-box">
            <div class="col-lg-10 my-auto myShadow">
                <div class="row">
                    <div class="col-lg-7 bg-white p-4">
                        <h1 class="text-center font-weight-bold text-primary">Sign in to Account</h1>
                        <hr class="my-3" />
                        <?php echo $msg ?? '' ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="px-3" id="login-form">
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg fa-fw"></i></span>
                                </div>
                                <input type="email" id="email" name="email" class="form-control rounded-0" placeholder="E-Mail" value="<?php echo old('email'); ?>" />
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                                </div>
                                <input type="password" id="password" name="password" class="form-control rounded-0" minlength="5" placeholder="Password" />
                            </div>
                            <div class="form-group clearfix">
                                <div class="custom-control custom-checkbox float-left">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="rem" />
                                    <label class="custom-control-label" for="customCheck">Remember me</label>
                                </div>
                                <div class="forgot float-right">
                                    <a href="./reset.php" id="forgot-link">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="signin" id="login-btn" value="Sign In" class="btn btn-primary btn-lg btn-block myBtn" />
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">Hello Friends!</h1>
                        <hr class="my-3 bg-light myHr" />
                        <p class="text-center font-weight-bolder text-light lead">Enter your personal details and start your journey with us!</p>
                        <a class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" href="./index.php" id="register-link">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form End -->

    </div>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>