<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'views/common/bootstrap.php'; ?>
    <title>Home</title>
</head>

<body>
    <?php require_once 'views/common/header.php'; ?>


    <div class="container py-3 mb-1">
        <h1 class="display-6 fw-bold">Welcome to Super Mart</h1>
        <p class="col-md-8 fs-6">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
    </div>

    <div class="container ">
        <p class="fs-4 fw-bold">Trending Products</p>
        <div class="row mb-5">

            <?php
            foreach ($trendingProducts as $product) { ?>

                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="img/product/<?= $product->getImage() ?>" class="card-img-top" alt="Product Image" height="156">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->getName() ?></h5>
                            <p class="card-text"><?= $product->getDescription() ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                </div>
                                <small class="text-muted">&#8377;<?= $product->getPrice() ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }

            ?>

        </div>
        <hr>
        <p class="fs-4 fw-bold">All Products</p>
        <div class="row mb-5 pb-5">

            <?php
            foreach ($allProducts as $product) { ?>

                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="img/product/<?= $product->getImage() ?>" class="card-img-top" alt="Product Image" height="156">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->getName() ?></h5>
                            <p class="card-text"><?= $product->getDescription() ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                </div>
                                <small class="text-muted">&#8377;<?= $product->getPrice() ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }

            ?>

        </div>
    </div>


    <?php require_once 'views/common/footer.php'; ?>
</body>

</html>