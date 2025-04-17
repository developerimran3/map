<?php

if (file_exists(__DIR__ . "/autoload.php")) {
    require_once(__DIR__ . "/autoload.php");
} ?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    //get form Data
    $username    = $_POST['username'];
    $name        = $_POST['name'];
    $email       = $_POST['email'];
    $password    = $_POST['password'];
    $cpassword   = $_POST['cpassword'];
    $pass_hash     = password_hash($password, PASSWORD_DEFAULT);

    if ($password === $cpassword) {
        $conform_password = true;
    } else {
        $conform_password = false;
    }
    //username check
    $username_check = dataCheck(connect(), 'username', $username, 'users');
    $email_check = dataCheck(connect(), 'email', $email, 'users');

    if (empty($username) || empty($name) || empty($email) || empty($password)) {
        $msg = createAlert("All Fields Are Required!");
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $msg = createAlert("Invalid Email!");
    } elseif ($conform_password == false) {
        $msg = createAlert("Password Do Not Match!");
    } elseif ($username_check == false) {
        $msg = createAlert("Username alrady exists");
    } elseif ($email_check == false) {
        $msg = createAlert("Email alrady exists");
    } else {
        store('users', [
            'username'  => $username,
            'name'      => $name,
            'email'     => $email,
            'password'  => $pass_hash,
        ]);
        reset_form();
        header("location:login.php");
    }
}



?>

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


<body class="bg-info">
    <div class="container">
        <!-- Registration Form Start -->
        <div class="row justify-content-center wrapper" id="register-box">
            <div class="col-lg-10 my-auto myShadow">
                <div class="row">
                    <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">Welcome Back!</h1>
                        <hr class="my-4 bg-light myHr" />
                        <p class="text-center font-weight-bolder text-light lead">To keep connected with us please login with your personal info.</p>
                        <a class="btn btn-outline-light btn-lg font-weight-bolder mt-4 align-self-center myLinkBtn" href="./login.php" id="login-link">Sign In</a>
                    </div>
                    <div class="col-lg-7 bg-white p-4">
                        <h1 class="text-center font-weight-bold text-primary">Create Account</h1>
                        <hr class="my-3" />
                        <?php echo $msg ?? '' ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off" class="px-3" id="register-form">
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fas fa-user-tie fa-lg fa-fw"></i></span>
                                </div>
                                <input type="text" id="username" name="username" class="form-control rounded-0" placeholder="User Name" value="<?php echo old('username'); ?>" />
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="far fa-user fa-lg fa-fw"></i></span>
                                </div>
                                <input type="text" id="name" name="name" class="form-control rounded-0" placeholder="Full Name" value="<?php echo old('name'); ?>" />
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg fa-fw"></i></span>
                                </div>
                                <input type="text" id="email" name="email" class="form-control rounded-0" placeholder="E-Mail" value="<?php echo old('email'); ?>" />
                            </div>
                            <div class="input-group eye-password input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                                </div>
                                <input type="password" id="password" name="password" class="form-control rounded-0" minlength="5" placeholder="Password" value="<?php echo old('password'); ?>" />

                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                                </div>
                                <input type="password" id="cpassword" name="cpassword" class="form-control rounded-0" minlength="5" placeholder="Confirm Password" />
                            </div>

                            <div class="form-group">
                                <input type="submit"
                                    name="submit" id="register-btn" value="Sign Up" class="btn btn-primary btn-lg btn-block myBtn" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Registration Form End -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- <script>
        $(function() {
            $("#register-link").click(function() {
                $("#login-box").hide();
                $("#register-box").show();
            });
            $("#login-link").click(function() {
                $("#login-box").show();
                $("#register-box").hide();
            });
            $("#forgot-link").click(function() {
                $("#login-box").hide();
                $("#forgot-box").show();
            });
            $("#back-link").click(function() {
                $("#login-box").show();
                $("#forgot-box").hide();
            });
            //Registered Ajax Request

            $("#register-btn").click(function(e) {
                if ($("#register-form")[0].checkVisibility()) {
                    e.preventDefault();
                    $("#register-btn").val('Please Wait......');
                    if ($("#rpassword").val() != $("#cpassword").val()) {
                        $("#passError").text('* Password did nat matched!');
                        $("#register-btn").val('Sign Up');
                    }
                } else {
                    $("#passError").text('');
                    $.ajax({
                        url: 'assets/php/action.php',
                        method: 'post',
                        data: $("#register-form").serialize() + '&action=register',
                        success: function(response) {
                            console.log(response);
                        }


                    })
                }

            });
        });
    </script> -->
</body>

</html>