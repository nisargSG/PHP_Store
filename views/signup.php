<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'views/common/bootstrap.php'; ?>
    <title>Signup</title>
</head>

<body>
    <?php require_once 'views/common/header.php'; ?>

    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-6 fw-bold">Let's Signup</h1>
                <p class="fs-6">Using a series of utilities, you can create this jumbotron, just like the one in
                    previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to
                    your liking.</p>
            </div>
            <div class="col-md-6 ">

                <div class="h-100 p-5 bg-body-tertiary border shadow-sm rounded-1">
                    <h2 class="mb-3">Signup Here</h2>
                    <form class="login-form" method="post" action="signup.php">
                        <div class="form-floating mb-3">
                            <input name="name" type="text" class="form-control" id="inputName" placeholder="Jhon Doe">
                            <label for="inputName">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="phone" type="phone" class="form-control" id="inputPhone"
                                placeholder="9988776655">
                            <label for="inputPhone">Phone Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control" id="inputEmail"
                                placeholder="name@example.com">
                            <label for="inputEmail">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control" id="inputPassword"
                                placeholder="Password">
                            <label for="inputPassword">Password</label>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">Create Account</button>

                        <?php

                        if ($signupUser !== null) {
                            ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                Failed To Create Account
                            </div>
                            <?php
                        }
                        ?>

                    </form>


                </div>
            </div>
        </div>

    </div>


    </div>




    <?php require_once 'views/common/footer.php'; ?>
</body>

</html>