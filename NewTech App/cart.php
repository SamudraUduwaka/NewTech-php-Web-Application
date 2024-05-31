<!DOCTYPE html>
<html>

<head>
    <title>NewTech | Cart</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="resources/My project copy (1).png" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
</head>

<body>

    <div class="container-fluid">
        <?php require "searchheader.php"; ?>

        <div class="row" style="height: 120px;">
        </div>

        <div class="row mt-5 mt-lg-0">

            <div class="col-12" style="background-color: #E3E5E4;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>

            <div class="col-12 border border-1 border-secondary rounded mb-2 bg-light">
                <div class="row">
                    <div class="col-12">
                        <label class="form-label fs-1 fw-bolder">Cart <i class="bi bi-cart4"></i></label>
                    </div>
                    <div class="col-12 col-lg-6">
                        <hr class="hrbreak1" />
                    </div>


                    <div class="col-12 d-none">
                        <div class="row">
                            <div class="col-12 emptycart"></div>
                            <div class="col-12 text-center">
                                <label class="form-label fs-2 fw-bolder">You have no items in your cart</label>
                            </div>
                            <div class="offset-0 offset-lg-4 col-12 col-lg-4 d-grid mb-4">
                                <a href="home.php" class="btn btn-primary fs-3">Start Shopping</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="card mb-3 col-12">
                                <div class="row g-0">
                                    <div class="col-md-12 mt-3 mb-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="fw-bold text-black-50 fs-5">Vivo Y55s</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="hrbreak1" />
                                    <div class="col-md-4">
                                        <img src="images/vivoy55s.webp" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title">Vivo Y55s</h5>
                                            <br />
                                            <span class="fw-bold text-black-50 fs-5">Item Price : </span>&nbsp;
                                            <span class="fw-bold text-black fs-5">Rs. 19000 .00 </span>
                                            <br />
                                            <span class="fw-bold text-black-50 fs-5">Quantity: </span>&nbsp;
                                            <input type="text" value="1" class="mt-3 border border-2 border-secondary fs-4 fw-bold px-3 cartqtytxt" />
                                            <br />


                                            <?php



                                            ?>
                                            <span class="fw-bold text-black-50 fs-5">Delivery Fee: </span>&nbsp;
                                            <span class="fw-bold text-black fs-5">Rs. 1000 .00 </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <div class="card-body d-grid">
                                            <a class="btn btn-outline-success mb-2">Pay for this</a>
                                            <a class="btn btn-outline-danger mb-2">Remove</a>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="col-md-12 mt-3 mb-3">
                                        <div class="row">
                                            <div class="col-6 col-md-6">
                                                <span class="fw-bold fs-5 text-black-50">Requested total <i class="bi bi-info-circle"></i></span>
                                            </div>
                                            <div class="col-6 col-md-6 text-end">
                                                <span class="fw-bold fs-5 text-black-50">Rs. 20000 .00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label fs-3 fw-bold">To Proceed</label>
                            </div>
                            <div class="col-12">
                                <hr />
                            </div>
                            <div class="col-6">
                                <span class="fs-6 fw-bold ">Items (1)</span>
                            </div>
                            <div class="col-6 text-end">
                                <span class="fs-6 fw-bold ">Rs. 19000 .00</span>
                            </div>
                            <div class="col-6 mt-2">
                                <span class="fs-6 fw-bold ">Shipping </span>
                            </div>
                            <div class="col-6 text-end mt-2">
                                <span class="fs-6 fw-bold ">Rs. 1000 .00</span>
                            </div>
                            <div class="col-12 mt-3">
                                <hr />
                            </div>
                            <div class="col-6 mt-2">
                                <span class="fs-5 fw-bold ">Total</span>
                            </div>
                            <div class="col-6 text-end mt-2">
                                <span class="fs-5 fw-bold ">Rs. 20000 .00</span>
                            </div>
                            <div class="col-12 mt-3 mb-3 d-grid">

                                <a class="btn btn-warning fs-5 fw-bold" href="#">CHECKOUT</a>
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