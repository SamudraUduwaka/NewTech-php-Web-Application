<!DOCTYPE html>
<html>

<head>
    <title>NewTech | Advanced Search</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="icon" href="resources/My project copy (1).png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <?php require "searchheader.php"; ?>
        <div class="row" style="height: 130px;">
            <div class="col-12">

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="row bg-dark" style="height: 600px;">

                    <div class="col-12 border-top border-top-1 border-light mt-3 pt-2">
                        <span class="fs-5 text-white-50">Top Categories</span>
                        <div class="row fs-6 mt-3 pt-4 text-white-50 border-top border-top-1 border-light">
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
                    
                </div>
            </div>

            <div class="col-12 col-lg-9">
                <div class="row ps-2">
                    <div class="col-12 bg-light">
                        <div class="row m-2 me-0 ms-0 d-none d-lg-block">
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Advanced Search</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="row">

                            <div class="col-12 col-lg-4">
                                <div class="row p-2">
                                    <select class="form-select d-grid">
                                        <option>Select Category</option>
                                        <option>Smart Watches</option>
                                        <option>TV</option>
                                        <option>Smart TV</option>
                                        <option>Laptops</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4">
                                <div class="row p-2">
                                    <select class="form-select d-grid">
                                        <option>Select Brand</option>
                                        <option>Smart Watches</option>
                                        <option>TV</option>
                                        <option>Smart TV</option>
                                        <option>Laptops</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4">
                                <div class="row p-2">
                                    <select class="form-select d-grid">
                                        <option>Select Model</option>
                                        <option>Smart Watches</option>
                                        <option>TV</option>
                                        <option>Smart TV</option>
                                        <option>Laptops</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 bg-light pb-3">
                        <div class="row">
                            <div class="col-6 col-lg-4 p-2">
                                <div class="row m-1">
                                    <span>Check Date added</span>
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

                            <div class="col-6 col-lg-4 p-2">
                                <div class="row m-1">
                                    <span>Check Condition</span>
                                    <div class="col-6 fs-6 form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            BrandNew
                                        </label>
                                    </div>
                                    <div class="col-6 fs-6 form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault4" checked>
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            Used
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 p-2">
                                <div class="row m-1">
                                    <span>Check Price</span>
                                    <div class="col-6 fs-6 form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault5">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Low to High
                                        </label>
                                    </div>
                                    <div class="col-6 fs-6 form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault6" checked>
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            High to Low
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control d-grid" placeholder="Price From" />
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control d-grid" placeholder="Price To" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mt-2 mt-lg-0">
                                <div class="row">
                                    <div class="col-6">
                                        <select class="form-select d-grid">
                                            <option>Select Colour</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>Black</option>
                                            <option>Rose Gold</option>
                                        </select>
                                    </div>

                                    <div class="col-6 d-grid">
                                        <button class="btn btn-outline-secondary">Search</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 bg-light mt-2 pt-3">
                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <div class="card bg-dark text-white">
                                    <img src="images/asus2013.webp" class="card-img" alt="..." style="height: 200px;">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title">Card title</h5> -->
                                        <p class="card-text fs-5">
                                            HP Pavilion 15.6" HD</p>
                                        <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-3">
                                <div class="card bg-dark text-white">
                                    <img src="images/redminote10promobile.webp" class="card-img" alt="..." style="height: 200px;">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title">Card title</h5> -->
                                        <p class="card-text fs-5">
                                            Xiomi Redmi Note 10 Pro</p>
                                        <p class="card-text fs-6">8GB RAM </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-3">
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

                            <div class="col-6 col-lg-3">
                                <div class="card bg-dark text-white">
                                    <img src="images/smartwatchewhite.webp" class="card-img" alt="..." style="height: 200px;">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title">Card title</h5> -->
                                        <p class="card-text fs-5">
                                            Brandnew Smart watch</p>
                                        <p class="card-text fs-6"> White coloured</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row m-2 border border-1 border-secondary pt-3">
                            <div class="col-12 offset-0 col-lg-4 offset-4">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
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