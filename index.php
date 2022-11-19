<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libra - Library on a Cloud</title>

    <link rel="stylesheet" href="./assets/dist/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/dist/css/custom.css">
    <link rel="icon" type="image/x-icon" href="./assets/dist/images/libra-favicon.png">
    <script defer src="./functions/signin_validation.js"></script>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" id="form-box">
                    <div id=error></div>
                    <form action="./functions/auth.php" id="signin" method="POST">
                        <!--<div
							class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
							<p class="lead fw-normal mb-0 me-3">Sign in with</p>
							<button type="button" class="btn btn-primary btn-floating mx-1" id="social-button">
								<div class="feature-icon" id="social-button">
									<svg class="bi" width="1em" height="1em">
										<use xlink:href="#facebook" /></svg>
								</div>
							</button>

							<button type="button" class="btn btn-primary btn-floating mx-1">
								<i class="fab fa-twitter"></i>
							</button>

							<button type="button" class="btn btn-primary btn-floating mx-1">
								<i class="fab fa-linkedin-in"></i>
							</button>
						</div>-->
                        <div class="divider d-flex align-items-center my-4">
                            <img src="./assets/dist/images/Libra-footer.png" alt="" class="ms-2 me-1">
                        </div>
                        <?php if (isset($_GET['message'])) { ?>

                        <div class="alert alert-success text-center" role="alert"><?php echo $_GET['message']; ?></div>

                        <?php } ?>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" name="uname" id="uname" class="form-control form-control-md"
                                placeholder="Username" />
                                <small class="text-danger" id="name-error"></small>
                            <!--<label class="form-label" for="form3Example3">Email address</label>-->
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="pword"
                                class="form-control form-control-md" placeholder="Password" />
                                <small class="text-danger" id="password-error"></small>
                            <!--<label class="form-label" for="form3Example4">Password</label>-->
                        </div>

                        <!--<div class="d-flex justify-content-between align-items-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>-->

                        <div class="text-center text-lg-start mt-4 pt-2 d-grid gap-2">
                            <button type="submit" value="submit" class="btn btn-success btn-md"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign In</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0 text-center">Don't have an account? <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/AppLibra/signup.php"
                                    class="link-success">Register</a></p>
                        </div>
                    </form>
                </div>
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="./assets/dist/images/libra-vector.png" class="img-fluid" alt="Sample image">
                </div>
            </div>
        </div>
    </section>
</body>

</html>