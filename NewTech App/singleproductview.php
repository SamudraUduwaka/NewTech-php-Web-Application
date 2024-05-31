<!DOCTYPE html>

<html>

<head>
    <title>NewTech | Single Product View</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resources/My project copy (1).png" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container-fluid">
        <?php require "searchheader.php"; ?>

        <div class="row" style="height: 110px;">
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-0 offset-lg-6 mt-5 mt-lg-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Single product view</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="row bg-dark p-3">
                    <div class="col-6 offset-3 text-center d-lg-block d-none position-relative">
                        <img src="images/vivoy55s.webp" width="100%" id="myimage" class="mb-2"/>
                    </div>
                    <div class="col-6 d-block d-lg-none">
                        <img src="images/vivoy55s.webp" width="85%" />
                    </div>
                    <div class="col-6 col-lg-4">
                        <img src="images/vivoy55s.webp" width="85%" />
                    </div>
                    <div class="col-6 col-lg-4">
                        <img src="images/vivoy55s.webp" width="85%" />
                    </div>
                    <div class="col-6 col-lg-4">
                        <img src="images/vivoy55s.webp" width="85%" />
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="row bg-light p-3">
                    <div class="col-12 col-lg-6">
                        <h3>Vivo Y55s</h3>
                    </div>
                </div>

                <div class="row bg-white p-3">
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <h5>Description : </h5>
                                <span class="fs-6">Vivo Y 55 s brandnew mobile device available right now 8GB RAM
                                    128GB storage available in many different colours </span>
                            </div>
                            <div class="col-12">
                                <span class="fs-5">Color : Blue</span>
                            </div>
                            <div class="col-12">
                                <span class="fs-5">Price : Rs. 55000 .00</span>
                            </div>
                            <div class="col-12">
                                <span class="fs-5">Qty : 5 available</span>
                            </div>
                            <div class="col-12 text-warning">
                            <span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <div class="col-12">
                                <label class="fs-5" id="">Qty to buy : </label>
                                <input type="text" class="form-control form-control-sm" value="1" />
                            </div>
                            
                            <div class="col-12 mt-2">
                                <button type="button" class="btn btn-success btn-sm">Available right now</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12 d-grid mt-2 mb-1">
                                <button class="btn btn-success">Buy Now</button>
                            </div>
                            <div class="col-12 d-grid mt-1 mb-1">
                                <button class="btn btn-dark">Add to Cart</button>
                            </div>
                            <div class="col-12 d-grid mt-1 mb-1">
                                <button class="btn btn-dark">Add to Wishlist</button>
                            </div>
                            <div class="col-12 d-none d-lg-block">
                                <div class="img-zoom-result" id="myresult"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="row mt-3 p-4">
                    <div class="col-12">
                        <h4>Device Specifications</h4>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4">
                                <h5>RAM</h5>
                            </div>
                            <div class="col-8">
                                <span class="fs-6">8 GB</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <h5>Technology</h5>
                            </div>
                            <div class="col-8">
                                <span class="fs-6">GSM / HSPA / LTE</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <h5>Display</h5>
                            </div>
                            <div class="col-8">
                                <span class="fs-6">5.2 inches 720 x 1280 pixels</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <h5>OS</h5>
                            </div>
                            <div class="col-8">
                                <span class="fs-6">Android 6 (Marshmallow)</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <h5>Memory</h5>
                            </div>
                            <div class="col-8">
                                <span class="fs-6">16GB 2GB RAM, 16GB 3GB RAM </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <h5>Main Camera</h5>
                            </div>
                            <div class="col-8">
                                <span class="fs-6">LED flash, HDR, panorama 1080p@30fps</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 mb-2">
                <div class="row p-1">
                    <h5>Related devices</h5>
                </div>
                <div class="row">
                    <div class="col-4 col-lg-4">
                        <div class="card bg-dark text-white">
                            <img src="images/vivoy55s.webp" class="card-img" alt="..." style="height: 200px;">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <p class="card-text fs-5">
                                    Vivo Y 55s</p>
                                <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-lg-4">
                        <div class="card bg-dark text-white">
                            <img src="images/vivoy55s.webp" class="card-img" alt="..." style="height: 200px;">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <p class="card-text fs-5">
                                    Vivo Y 55s</p>
                                <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-lg-4">
                        <div class="card bg-dark text-white">
                            <img src="images/vivoy55s.webp" class="card-img" alt="..." style="height: 200px;">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <p class="card-text fs-5">
                                    Vivo Y 55s</p>
                                <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require "footer.php"; ?>
    </div>

    <script src="script.js"></script>
</body>

</html>