<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/site/brand.png" alt="Company Name" class="me-2" width="40" height="32">Super Mart
        </a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Products</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= isset($_SESSION["user_id"]) ? $_SESSION["user_name"] : "Account" ?>
                    </a>
                    <ul class="dropdown-menu">

                        <?php
                        // Session exists and contains user information
                        if (isset($_SESSION['user_id'])) { ?>
                            <li><a class="dropdown-item" href="#">My Cart</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            <?php if(isset($_SESSION['user_id']) && $_SESSION['user_is_admin']==true){ ?>
                            
                            <li><a class="dropdown-item" href="#">Admin Panel</a></li>

                            
                            <?php } ?>

                        <?php } else {
                            // Session does not exist or does not contain user information
                        ?>
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="signup.php">Create Account</a></li>
                        <?php
                        }

                        ?>

                    </ul>
                </li>


            </ul>
        </div>
    </div>
</nav>