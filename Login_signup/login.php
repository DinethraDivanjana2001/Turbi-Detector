<?php
session_start();
if (!isset($_SESSION["u"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <?php
        include "../csslinks.php";
        ?>
    </head>

    <body>
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card shadow ">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-6 col-lg-5 d-none d-md-block h-100" style="background-position-y: center">
                                    <div class="row">
                                        <img src="../assets/img/Turbi logo.png" alt="login form" class="img-fluid" style="border-radius: .5rem 0 0 .5rem;;" />
                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">

                                        <form>

                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <div class="col-2">
                                                    <div class="row">
                                                        <img src="../assets/img/Turbi logo.png" alt="logo" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-9 offset-1">
                                                    <div class="row">
                                                        <span class="h1 fw-bold mb-0">Turbi Detector</span>
                                                    </div>
                                                </div>

                                            </div>

                                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>


                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="em" placeholder="name@example.com">
                                                <label for="em">Email address</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="pw" placeholder="Password">
                                                <label for="pw">Password</label>
                                            </div>

                                            <div class="pt-3 mb-4">
                                                <button class="btn btn-danger btn-lg btn-block" type="button" onclick="login();">Login</button>
                                            </div>

                                            <a class="small text-muted" href="#!">Forgot password?</a>
                                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="signup.php" style="color: #393f81;">Register here</a></p>
                                            <a href="#!" class="small text-muted">Terms of use.</a>
                                            <a href="#!" class="small text-muted">Privacy policy</a>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="loginsignup.js"></script>
    </body>

    </html>
<?php
} else {
?>
    <script>
        window.location = "../dashboard/html/dashboard.php";
    </script>
<?php
}
?>