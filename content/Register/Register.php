<!doctype html>
<!-- New -->
<html lang="en">

<head>
    <title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../../css/LoginPage/style.css">
    <link rel="stylesheet " href="../../css/RegisterCss/register.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(../../img/shop_img.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Register</h3>
                                </div>
                                <div class="w-100">

                                </div>
                            </div>
                            <form action="../../index.php" class="signin-form">
                                <!-- First Felid -->
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" required>
                                    <label class="form-control-placeholder" for="username">Name</label>
                                </div>

                                <!-- Seconde Felid -->
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" required>
                                    <label class="form-control-placeholder" for="username">Age</label>
                                </div>

                                <!-- Third Felid -->
                                <div class="form-group mt-3">
                                    <input type="number" class="form-control" required>
                                    <label class="form-control-placeholder" for="username">Contact Number</label>
                                </div>

                                <!-- Fourth Felid -->
                                <div class="form-group mt-3">
                                    <input type='radio' id='male' checked='checked' name='radio'>
                                    <label for='male'>Male</label>
                                    <input type='radio' id='female' name='radio'>
                                    <label for='female'>Female</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign-Up</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">
                                        </label>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Already You Have a Account? <a href="../login/Login.php">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../../js/LoginPagejs/jquery.min.js"></script>
    <script src="../../js/LoginPagejs/popper.js"></script>
    <script src="../../js/LoginPagejs/bootstrap.min.js"></script>
    <script src="../../js/LoginPagejs/main.js"></script>

</body>

</html>