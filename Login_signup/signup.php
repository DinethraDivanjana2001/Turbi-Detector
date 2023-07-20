<?php
session_start();
if (!isset($_SESSION["u"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup</title>
        <?php
        require "../csslinks.php";
        ?>
    </head>

    <body>
        <section class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black shadow" style="border-radius: 25px;">
                            <div class="card-body p-md-5 align-items-center ">
                                <div class="row align-items-center h-100">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 align-items-center">
                                        <div class="row">
                                            <div class="col-12">
                                                <h1 class="text-center">Sign up</h1>

                                                <form class="mx-1 mx-md-4 mt-lg-4">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-floating mb-3">
                                                                <input type="email" class="form-control" id="fname" placeholder="name@example.com">
                                                                <label for="fname">First name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-floating mb-3">
                                                                <input type="email" class="form-control" id="lname" placeholder="name@example.com">
                                                                <label for="lname">Last name</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                                                        <label for="email">Email address</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                                        <label for="password">Password</label>
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <input type="password" class="form-control" id="repassword" placeholder="Password">
                                                        <label for="repassword">Retype Password</label>
                                                    </div>

                                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                        <button type="button" class="btn btn-danger btn-lg" onclick="signup();">Register</button>
                                                    </div>
                                                    <div class="row text-center">
                                                        <p>Already have an account?<a href="login.php">Login</a></p>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 d-none d-md-block">
                                        <div class="row text-center align-items-center ">
                                            <img src="../assets/img/Turbi logo.png" class="img-fluid" alt="Sample image">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="loginsignup.js"></script>
    </body>

    </html>
<?php
} else {
?>
    <script>
        window.location = "../dashboard/dashboard.php";
    </script>
<?php
}
?>