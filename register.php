
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Ehafiz.Quran</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-pro.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme1.css">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.php">
                <div class="logo">
                    <img class="logo-size" src="img/Logo_W.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>eHafiz Platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                            <a href="login_male.php" class="active">Login</a><a href="register.php" class="active">Register</a>
                        </div>
                        <form action="process-signup.php" method="post" id="signup" novalidate>
                            <input class="form-control" type="text" id="Fullname" name="Fullname" placeholder="Full Name" required>
                            <input class="form-control" type="text" id="username" name="username" placeholder="User Name" required>
                            <input class="form-control" type="text" id="emailaddress" name="emailaddress" placeholder="E-mail Address" required>
                            <input class="form-control" type="text" id="phonenumber" name="phonenumber" placeholder="Phone Number" required>
                            <select class="form-control mb-3" id="gender" name="gender">
                            <option value="0" >
                                    Select Gender
                                </option>
                                <option value="1" >
                                    Male
                                </option>
                                <option value="2" >
                                    Female
                                </option>
                            </select>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <input class="form-control" type="password" name="Confirm_password" placeholder="Confirm Password" required>
                            <div class="form-button text-center">
                                <button id="submit" type="submit" class="btn btn-success">Register</button>
                            </div>
                            <div class="text-center">
                            <a href="forget_male.php">Forget password?</a>
                            </div>
                        </form>
                        <!--<div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a>
                            <a href="#">Linkedin</a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>