<!DOCTYPE html>
<html>

<head>

    <title>NewTech | Wishlist</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resources/My project copy (1).png" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body class="mt-2">

    <div class="container-fluid">
        <?php require "header.php"; ?>

        <div class="row" style="height: 120px;">
        </div>

        <div class="row gx-2 gy-2">

            <div class="col-12 border border-1 border-secondary rounded bg-light mb-3">
                <div class="row">
                    <div class="col-12">
                        <label class="form-label fs-1 fw-bolder">Wishlist &hearts;;</label>
                    </div>

                    <div class="col-12">
                        <hr class="hrbreak1" />
                    </div>
                    <div class="col-12 col-lg-2 border border-top-0 border-start-0 border-bottom-0 border-end border-2 border-primary">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                            </ol>
                        </nav>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link active" aria-current="page" href="#">My Wishlist</a>
                            <a class="nav-link" href="cart.php">My Cart</a>
                            <a class="nav-link" href="#">Recently viewed</a>
                        </nav>
                    </div>

                    <!-- <div class="col-12 col-lg-9">
                        <div class="row">

                            <div class="col-12 text-center">
                                <img src="resources/emptywishlist.png" height="330px" />
                            </div>
                            <div class="col-12 text-center ">
                                <label class="form-label fs-1 mb-3 fw-bolder">You have no any items in wishlist</label>
                            </div>

                        </div>
                    </div> -->

                    <div class="col-12 col-lg-9">
                        <div class="row g-2">

                            <div class="card mb-3 col-12">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/vivoy55s.webp" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title">Vivo Y55s</h5>
                                            <br />
                                            <span class="fw-bold text-black-50 fs-5">Price: </span>&nbsp;
                                            <span class="fw-bold text-black fs-5">Rs. 19000.00 </span>
                                            <br />
                                            <span class="fw-bold text-black-50 fs-5">Category: </span>&nbsp;
                                            <span class="fw-bold text-black fs-5">Mobile Devices</span>

                                            <br />
                                            <span class="fw-bold text-black-50 fs-5">Description: </span>&nbsp;
                                            <span class="fw-bold text-black fs-5">Brand New Blue Vivo Y55s</span>

                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <div class="card-body d-grid">
                                            <a class="btn btn-outline-success mb-2" href="#">Buy Now</a>
                                            <a class="btn btn-outline-dark mb-2">Add to cart</a>
                                            <a class="btn btn-outline-danger mb-2">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <?php require "footer.php"; ?>
    </div>

</body>

</html>