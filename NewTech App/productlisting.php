<!DOCTYPE html>
<html>

<head>
    <title>NewTech | Product Listing</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resources/My project copy (1).png" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container-fluid">
        <?php require "searchheader.php"; ?>
        <div class="row" style="height: 120px;">

        </div>

        <div class="row">

            <div class="col-12 d-block d-lg-none">
                <div class="row bg-dark p-3">
                    <div class="col-12 w-100">
                        <div class="row text-white mb-2 mt-5 mt-lg-2">
                            <div class="col-2 text-end mt-2">
                                <i class="bi bi-text-indent-left fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"></i>
                            </div>
                            <div class="col-2 text-start">
                                <img src="resources/My project copy (1).png" width="50px" />
                            </div>
                            <div class="col-8 text-start mt-2">
                                <h3>Listing Items</h3>
                            </div>

                            <div class="offcanvas bg-dark offcanvas-start" style="width: 310px;" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                <div class="offcanvas-header mt-3">
                                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Listing Items</h5>
                                    <button type="button" class="btn-close bg-light text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="col-12 border-top border-top-1 border-secondary pt-2 text-white-50">
                                        <button class="btn btn-outline-light w-100">Advanced Search</button>
                                    </div>
                                    <div class="col-6 text-light">
                                        <label for="customRange1" class="form-label fs-6">Minimum price</label>
                                        <input type="range" class="form-range" min="0" max="100" step="0.5" id="customRange1">
                                    </div>
                                    <div class="col-6 text-light">
                                        <label for="customRange2" class="form-label fs-6">Maximum price</label>
                                        <input type="range" class="form-range" min="0" max="100" step="0.5" id="customRange2">
                                    </div>
                                    <div class="col-12 border-top border-top-1 border-secondary text-light">
                                        <div class="row m-3 ms-4">
                                            <div class="col-6 fs-6 form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Latest
                                                </label>
                                            </div>
                                            <div class="col-6 fs-6 form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Oldest
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 border-top border-top-1 border-secondary">
                                        <div class="row fs-6 mt-4 text-light">
                                            <span>Top Categories</span>
                                            <span><i class="bi bi-laptop"></i> Laptops / Desktop computers</span>
                                            <span><i class="bi bi-tablet"></i> Tablets / Mobile devices</span>
                                            <span><i class="bi bi-pc-display"></i> Desktop Accessories</span>
                                            <span><i class="bi bi-tv"></i> TV / Smart TV</span>
                                            <span><i class="bi bi-broadcast"></i> Electronic Appliences</span>
                                            <span><i class="bi bi-file-medical"></i> Fitness / Health care</span>
                                            <span><i class="bi bi-activity"></i> Tech Gadjets</span>
                                            <span><i class="bi bi-smartwatch"></i> Smart Watches</span>
                                            <span><i class="bi bi-joystick"></i> Game Accessories</span>
                                            <span><i class="bi bi-camera2"></i> Cameras / Lenses</span>
                                            <span><i class="bi bi-earbuds"></i> Branded Earpods / Earphones</span>
                                            <span><i class="bi bi-disc"></i> Home Essentials</span>
                                            <span><i class="bi bi-fingerprint"></i> Fingerprint Machines</span>
                                            <span><i class="bi bi-lamp"></i> Living room Essentials</span>
                                            <span><i class="bi bi-exclude"></i> Kitchen Appliences</span>
                                            <span><i class="bi bi-gift"></i> Gifts / Presents</span>
                                            <span><i class="bi bi-bag-plus"></i> Others</span>
                                        </div>
                                    </div>

                                    <div class="col-12 border-top border-top-1 border-secondary">
                                        <div class="row fs-6 mt-4 text-light">
                                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i>
                                                5 Ratings</span>
                                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-half text-white-50"></i>
                                                4.5 Ratings</span>
                                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                                4 Ratings</span>
                                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-half text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                                3.5 Ratings</span>
                                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                                3 Ratings</span>
                                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-half text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                                2.5 Ratings</span>
                                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                                2 Ratings</span>
                                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-half text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                                1.5 Ratings</span>
                                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                                1 Ratings</span>
                                            <span><i class="bi bi-star-half text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                                0.5 Ratings</span>
                                            <span><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                                No Ratings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3 d-none d-lg-block">
                <div class="row bg-dark p-3">
                    <div class="col-12 text-white-50">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type to search" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-light" type="button" id="button-addon2">Search <i class="bi bi-search-heart"></i></button>
                        </div>
                    </div>
                    <div class="col-12 border-top border-top-1 border-secondary pt-2 text-white-50">
                        <button class="btn btn-outline-light w-100">Advanced Search</button>
                    </div>
                    <div class="col-6 text-light">
                        <label for="customRange1" class="form-label fs-6">Minimum price</label>
                        <input type="range" class="form-range" min="0" max="100" step="0.5" id="customRange1">
                    </div>
                    <div class="col-6 text-light">
                        <label for="customRange2" class="form-label fs-6">Maximum price</label>
                        <input type="range" class="form-range" min="0" max="100" step="0.5" id="customRange2">
                    </div>
                    <div class="col-12 border-top border-top-1 border-secondary text-light">
                        <div class="row m-3 ms-4">
                            <div class="col-6 fs-6 form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Latest
                                </label>
                            </div>
                            <div class="col-6 fs-6 form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Oldest
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 border-top border-top-1 border-secondary">
                        <div class="row fs-6 mt-4 text-light">
                            <span>Top Categories</span>
                            <span><i class="bi bi-laptop"></i> Laptops / Desktop computers</span>
                            <span><i class="bi bi-tablet"></i> Tablets / Mobile devices</span>
                            <span><i class="bi bi-pc-display"></i> Desktop Accessories</span>
                            <span><i class="bi bi-tv"></i> TV / Smart TV</span>
                            <span><i class="bi bi-broadcast"></i> Electronic Appliences</span>
                            <span><i class="bi bi-file-medical"></i> Fitness / Health care</span>
                            <span><i class="bi bi-activity"></i> Tech Gadjets</span>
                            <span><i class="bi bi-smartwatch"></i> Smart Watches</span>
                            <span><i class="bi bi-joystick"></i> Game Accessories</span>
                            <span><i class="bi bi-camera2"></i> Cameras / Lenses</span>
                            <span><i class="bi bi-earbuds"></i> Branded Earpods / Earphones</span>
                            <span><i class="bi bi-disc"></i> Home Essentials</span>
                            <span><i class="bi bi-fingerprint"></i> Fingerprint Machines</span>
                            <span><i class="bi bi-lamp"></i> Living room Essentials</span>
                            <span><i class="bi bi-exclude"></i> Kitchen Appliences</span>
                            <span><i class="bi bi-gift"></i> Gifts / Presents</span>
                            <span><i class="bi bi-bag-plus"></i> Others</span>
                        </div>
                    </div>

                    <div class="col-12 border-top border-top-1 border-secondary">
                        <div class="row fs-6 mt-4 text-light">
                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i>
                                5 Ratings</span>
                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-half text-white-50"></i>
                                4.5 Ratings</span>
                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                4 Ratings</span>
                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-half text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                3.5 Ratings</span>
                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                3 Ratings</span>
                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-half text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                2.5 Ratings</span>
                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                2 Ratings</span>
                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star-half text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                1.5 Ratings</span>
                            <span><i class="bi bi-star-fill text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                1 Ratings</span>
                            <span><i class="bi bi-star-half text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                0.5 Ratings</span>
                            <span><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i><i class="bi bi-star text-white-50"></i>
                                No Ratings</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-9">
                <div class="row mb-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Listing</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-6 col-lg-4">
                        <div class="row">
                            <h5>Mobile Devices Brands</h5>
                        </div>
                        <div class="row g-1">
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Samsung</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Vivo</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Sony</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Samsung</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Huawei</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Vivo</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Samsung</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Vivo</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Apple</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-4">
                        <div class="row">
                            <h5>Laptop Brands</h5>
                        </div>
                        <div class="row g-1">
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Dell</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">HP</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Asus</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Acer</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">e-Wis</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Apple</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Pro</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Huawei</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Samsung</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <h5>Watches Brands</h5>
                        </div>
                        <div class="row g-1">
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Apple</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Samsung</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Lo</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">None</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">e-Wis</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Apple</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Pro</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Huawei</button>
                            </div>
                            <div class="col-4 d-grid">
                                <button type="button" class="btn btn-light btn-sm">Samsung</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row p-4">
                    <div class="col-6 col-lg-4">
                        <div class="card bg-dark text-white">
                            <img src="images/redminote10promobile.webp" class="card-img" alt="..." style="height: 250px;">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <p class="card-text fs-5">
                                    Xiomi Redmi Note 10 Pro</p>
                                <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4">
                        <div class="card bg-dark text-white">
                            <img src="images/vivoy55s.webp" class="card-img" alt="..." style="height: 250px;">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <p class="card-text fs-5">
                                    Vivo Y 55s</p>
                                <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4">
                        <div class="card bg-dark text-white">
                            <img src="images/samsunggalaxys22.webp" class="card-img" alt="..." style="height: 250px;">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <p class="card-text fs-5">
                                    Samsung Galaxy S22 New</p>
                                <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4">
                        <div class="card bg-dark text-white">
                            <img src="images/samsunggalaxya32.webp" class="card-img" alt="..." style="height: 250px;">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <p class="card-text fs-5">
                                    Samsung Galaxy A32</p>
                                <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4">
                        <div class="card bg-dark text-white">
                            <img src="images/hp15pavilion15.6''.webp" class="card-img" alt="..." style="height: 250px;">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <p class="card-text fs-5">
                                    HP 15-cc050wm Touchscreen</p>
                                <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4">
                        <div class="card bg-dark text-white">
                            <img src="images/Dellcherryred-z-lap.webp" class="card-img" alt="..." style="height: 250px;">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <p class="card-text fs-5">
                                    Pavilion 15.6" HD </p>
                                <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <?php require "footer.php"; ?>
    </div>

    <script src="bootstrap.min.js"></script>
</body>

</html>