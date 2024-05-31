<!DOCTYPE html>

<html>

<head>
    <title>New Tech | Home</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="icon" href="resources/My project copy (1).png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>

    <div class="container-fluid">
        <!-- nav bar -->
        <div class="row d-none d-lg-block">
            <div id="navbarlarge">
                <a href="#default" id="logolarge">NewTech <img src="resources/My project copy (1).png" width="100px" /></a>
                <div id="navbar-rightlarge">
                    <a class="active" href="#home">Home</a>
                    <a href="#contact">Contact</a>
                    <a href="#about">About</a>
                    <a href="#about">My Account</a>
                    <a href="#about">Team</a>
                    <a onclick="openNav()">Sign In / Sign Up</a>
                </div>
            </div>
        </div>

        <div class="row d-block d-lg-none">
            <div id="navbarsmall">
                <a href="#default" id="logosmall">NewTech <img src="resources/My project copy (1).png" width="90px" /></a>
                <a onclick="openNav()">Sign In / Sign Up</a>
            </div>
        </div>
        <!-- nav bar -->

        <!-- signInSignUpOverlay -->
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <div class="row">
                    <div class="col-12">

                        <div class="row" id="signInBox">
                            <div class="col-8 offset-2">
                                <div class="row">
                                    <div class="col-12 offset-0 col-lg-6 offset-lg-3 m-3">
                                        <h2 style="color: blue;"> <img src="resources/My project copy (1).png" width="100px" />Sign In Now</h2>
                                    </div>
                                    <div class="col-12 m-3 ms-0 me-0">
                                        <input type="text" class="form-control" placeholder="Username" />
                                    </div>
                                    <div class="col-12 m-3 ms-0 me-0 input-group">

                                        <input type="password" class="form-control" placeholder="Password" aria-describedby="pbtn1" id="password">
                                        <button class="btn btn-outline-secondary" type="button" id="pbtn1" onclick="changeclasspassword1();">See <i class="bi bi-eye-slash-fill"></i></button>

                                    </div>
                                    <div class="col-6 mt-1">
                                        <button class="btn btn-outline-primary w-100">Already Joined? Sign In Now</button>
                                    </div>
                                    <div class="col-6 mt-1">
                                        <button class="btn btn-outline-primary w-100" onclick="changeView();">Not Joined yet? Then Join</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row d-none" id="signUpBox">
                            <div class="col-10 offset-1 col-lg-8 offset-lg-2">
                                <div class="row g-2">
                                    <div class="col-12 col-lg-6 offset-0 offset-lg-3 m-3">
                                        <h2 style="color: blue;"> <img src="resources/My project copy (1).png" width="100px" />Sign Up Now</h2>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="First Name" />
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Last Name" />
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Contact Number" />
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="UserName" />
                                    </div>
                                    <div class="col-6 input-group">
                                        <input type="password" class="form-control" placeholder="Password" aria-describedby="pbtn3" id="spassword">
                                        <button class="btn btn-outline-secondary" type="button" id="pbtn3" onclick="changeclasspassword3();">See <i class="bi bi-eye-slash-fill"></i></button>
                                    </div>
                                    <div class="col-6 input-group">
                                        <input type="password" class="form-control" placeholder="Re-Type Password" aria-describedby="pbtn2" id="rpassword">
                                        <button class="btn btn-outline-secondary" type="button" id="pbtn2" onclick="changeclasspassword2();">See <i class="bi bi-eye-slash-fill"></i></button>
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control" placeholder="Email" />
                                    </div>
                                    <div class="col-6">
                                        <select class="form-select">
                                            <option>Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Verification Code" />
                                    </div>
                                    <div class="col-6 mt-1">
                                        <button class="btn btn-outline-primary w-100">Not Joined yet? Join</button>
                                    </div>
                                    <div class="col-6 mt-1">
                                        <button class="btn btn-outline-primary w-100" onclick="changeView();">Already Joined? Sign In</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- signInSignUpOverlay -->

        <div id="main" style="margin-top:210px;padding:15px 15px 25px;font-size:30px">


            <div class="row">
                <div class="col-12 col-lg-3">
                    <!--check the fix status-->
                    <div class="row bg-light p-3">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Type to search" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-dark" type="button" id="button-addon2">Search <i class="bi bi-search-heart"></i></button>
                            </div>
                        </div>
                        <div class="col-12 border-top border-top-1 border-secondary">
                            <button class="btn btn-outline-secondary w-100">Advanced Search</button>
                        </div>
                        <div class="col-6">
                            <label for="customRange1" class="form-label fs-6">Minimum price</label>
                            <input type="range" class="form-range" min="0" max="100" step="0.5" id="customRange1">
                        </div>
                        <div class="col-6">
                            <label for="customRange2" class="form-label fs-6">Maximum price</label>
                            <input type="range" class="form-range" min="0" max="100" step="0.5" id="customRange2">
                        </div>
                        <div class="col-12 border-top border-top-1 border-secondary">
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
                            <div class="row fs-6 mt-4">
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
                            <div class="row fs-6 mt-4">
                                <span><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i>
                                    5 Ratings</span>
                                <span><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-half text-black-50"></i>
                                    4.5 Ratings</span>
                                <span><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star text-black-50"></i>
                                    4 Ratings</span>
                                <span><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-half text-black-50"></i><i class="bi bi-star text-black-50"></i>
                                    3.5 Ratings</span>
                                <span><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i>
                                    3 Ratings</span>
                                <span><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-half text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i>
                                    2.5 Ratings</span>
                                <span><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i>
                                    2 Ratings</span>
                                <span><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star-half text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i>
                                    1.5 Ratings</span>
                                <span><i class="bi bi-star-fill text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i>
                                    1 Ratings</span>
                                <span><i class="bi bi-star-half text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i>
                                    0.5 Ratings</span>
                                <span><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i><i class="bi bi-star text-black-50"></i>
                                    No Ratings</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="resources/caraousel1.jpg" class="d-block w-100" alt="..." style="height: 500px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/watchess.jpg" class="d-block w-100" alt="..." style="height: 500px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/caraousel2.jpg" class="d-block w-100" alt="..." style="height: 500px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/two_phones_mockup_front_view.jpg" class="d-block w-100" alt="..." style="height: 500px;">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- top products -->
                    <!-- verticalcarousel -->
                    <div class="row verticalcarousel p-3">
                        <div class='vcwrapper'>
                            <div class='vccarousel'>
                                <div class='vccarousel__item'>
                                    <div class='vccarousel__item-head'>
                                        <i class="bi bi-patch-check-fill"></i>
                                    </div>
                                    <div class='vccarousel__item-body'>
                                        <p class='vctitle'>With WOW</p>
                                        <p>Ensures user satisfaction</p>
                                    </div>
                                </div>
                                <div class='vccarousel__item'>
                                    <div class='vccarousel__item-head'>
                                        <i class="bi bi-person-hearts"></i>
                                    </div>
                                    <div class='vccarousel__item-body'>
                                        <p class='vctitle'>Friendly</p>
                                        <p>With Companion Help </p>
                                    </div>
                                </div>
                                <div class='vccarousel__item'>
                                    <div class='vccarousel__item-head'>
                                        <i class="bi bi-wallet2"></i>
                                    </div>
                                    <div class='vccarousel__item-body'>
                                        <p class='vctitle'>Benifits</p>
                                        <p>Wallet Friendly plans</p>
                                    </div>
                                </div>
                                <div class='vccarousel__item'>
                                    <div class='vccarousel__item-head'>
                                        <i class="bi bi-apple"></i>
                                    </div>
                                    <div class='vccarousel__item-body'>
                                        <p class='vctitle'>Branded</p>
                                        <p>Quality Products Store</p>
                                    </div>
                                </div>
                                <div class='vccarousel__item'>
                                    <div class='vccarousel__item-head'>
                                        <i class="bi bi-award"></i>
                                    </div>
                                    <div class='vccarousel__item-body'>
                                        <p class='vctitle'>The Best</p>
                                        <p>Ranked the Top Badge</p>
                                    </div>
                                </div>
                                <div class='vccarousel__item'>
                                    <div class='vccarousel__item-head'>
                                        <i class="bi bi-patch-check-fill"></i>
                                    </div>
                                    <div class='vccarousel__item-body'>
                                        <p class='vctitle'>With WOW</p>
                                        <p>Ensures user satisfaction</p>
                                    </div>
                                </div>
                                <div class='vccarousel__item'>
                                    <div class='vccarousel__item-head'>
                                        <i class="bi bi-wallet2"></i>
                                    </div>
                                    <div class='vccarousel__item-body'>
                                        <p class='vctitle'>Benifits</p>
                                        <p>Wallet Friendly plans</p>
                                    </div>
                                </div>
                                <div class='vccarousel__item'>
                                    <div class='vccarousel__item-head'>
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class='vccarousel__item-body'>
                                        <p class='vctitle'>Easily Accesible</p>
                                        <p>Anywhere Anytime</p>
                                    </div>
                                </div>
                                <div class='vccarousel__item'>
                                    <div class='vccarousel__item-head'>
                                        <i class="bi bi-fingerprint"></i>
                                    </div>
                                    <div class='vccarousel__item-body'>
                                        <p class='vctitle'>Secure</p>
                                        <p>Ensure User Security</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- verticalcarousel -->
                    <!-- top products -->
                </div>
            </div>

            <div class="row bg-light">
                <div class="col-12">
                    <span class="fs-4">Laptops</span> <button class="btn btn-outline-primary">See All -></button>
                    <div class="row p-2 g-2">
                        <div class="col-6 col-lg-3">
                            <div class="card bg-dark text-white">
                                <img src="images/asus2013.webp" class="card-img" alt="..." style="height: 250px;">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text fs-5">
                                        Refurbished HP 15-cc050wm Pavilion 15.6" HD Touchscreen</p>
                                    <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="card bg-dark text-white">
                                <img src="images/hp15pavilion15.6''.webp" class="card-img" alt="..." style="height: 250px;">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text fs-5">
                                        Refurbished HP 15-cc050wm Pavilion 15.6" HD Touchscreen</p>
                                    <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="card bg-dark text-white">
                                <img src="images/Dellcherryred-z-lap.webp" class="card-img" alt="..." style="height: 250px;">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text fs-5">
                                        Refurbished HP 15-cc050wm Pavilion 15.6" HD Touchscreen</p>
                                    <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="card bg-dark text-white">
                                <img src="images/Aser2019ashlap.webp" class="card-img" alt="..." style="height: 250px;">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text fs-5">
                                        Refurbished HP 15-cc050wm Pavilion 15.6" HD Touchscreen</p>
                                    <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB HDD Win 10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row bg-light mt-2">
                <div class="col-12">
                    <span class="fs-4 mt-2 mb-2">Tablets / Mobile devices</span> <button class="btn btn-outline-primary">See All -></button>
                    <div class="row p-2 g-2">
                        <div class="col-6 col-lg-3">
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
                        <div class="col-6 col-lg-3">
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
                        <div class="col-6 col-lg-3">
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
                        <div class="col-6 col-lg-3">
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
                    </div>
                </div>
            </div>

            <div class="row bg-light mt-2">
                <div class="col-12">
                    <span class="fs-4 mt-2 mb-2">Home Essentials</span> <button class="btn btn-outline-primary">See All -></button>
                    <div class="row p-2 g-2">
                        <div class="col-6 col-lg-3">
                            <div class="card bg-dark text-white">
                                <img src="images/treadmillblack.webp" class="card-img" alt="..." style="height: 250px;">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text fs-5">
                                        TreadMill Black New</p>
                                    <p class="card-text fs-6">2.5 HP 12 Sports Model Folding</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="card bg-dark text-white">
                                <img src="images/fitnesscycleblack.webp" class="card-img" alt="..." style="height: 250px;">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text fs-5">
                                        Fitness Cycle Black</p>
                                    <p class="card-text fs-6"> Teleseen product</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="card bg-dark text-white">
                                <img src="images/fitnesstracker.webp" class="card-img" alt="..." style="height: 250px;">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text fs-5">
                                        Fitness Tracker couple</p>
                                    <p class="card-text fs-6"> More efficient in tracking fitness.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="card bg-dark text-white">
                                <img src="images/portablepulsechecker.webp" class="card-img" alt="..." style="height: 250px;">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text fs-5">
                                        Portable pulse checking tool</p>
                                    <p class="card-text fs-6"> i5-7200U 2.5GHz 12GB RAM 1TB </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row bg-light mt-2">
                <div class="col-12">
                    <span class="fs-4 mt-2 mb-2">Smart Watches</span> <button class="btn btn-outline-primary">See All -></button>
                    <div class="row p-2 g-2">
                        <div class="col-6 col-lg-3">
                            <div class="card bg-dark text-white">
                                <img src="images/applewatchseries2.webp" class="card-img" alt="..." style="height: 250px;">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text fs-5">
                                        Apple branded watch</p>
                                    <p class="card-text fs-6">Black waterproof</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="card bg-dark text-white">
                                <img src="images/smartwatchewhite.webp" class="card-img" alt="..." style="height: 250px;">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text fs-5">
                                        Brandnew Smart watch</p>
                                    <p class="card-text fs-6"> White coloured</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="card bg-dark text-white">
                                <img src="images/smartwatchkidswaterproof.webp" class="card-img" alt="..." style="height: 250px;">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text fs-5">
                                        Kids Smart Watches</p>
                                    <p class="card-text fs-6"> With colour varients.waterproof.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="card bg-dark text-white">
                                <img src="images/smartwatchgentsbronze.webp" class="card-img" alt="..." style="height: 250px;">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text fs-5">
                                        Bronze smart watch</p>
                                    <p class="card-text fs-6"> Gents' series </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- cardlayout -->
            <div class="row">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 offset-0 offset-sm-1 offset-md-2 offset-lg-3">
                    <div class="clcontainer">
                        <div class="clcard">
                            <h3 class="cltitle">Secure</h3>
                            <div class="clbar">
                                <div class="clemptybar"></div>
                                <div class="clfilledbar"></div>
                            </div>
                            <div class="clcircle">
                                <i class="fs-1 text-center text-white-50 bi bi-shield-shaded"></i>
                            </div>
                        </div>
                        <div class="clcard">
                            <h3 class="cltitle">Delivery</h3>
                            <div class="clbar">
                                <div class="clemptybar"></div>
                                <div class="clfilledbar"></div>
                            </div>
                            <div class="clcircle">
                                <i class="fs-1 text-center text-white-50 bi bi-truck"></i>
                            </div>
                        </div>
                        <div class="clcard">
                            <h3 class="cltitle">Anytime</h3>
                            <div class="clbar">
                                <div class="clemptybar"></div>
                                <div class="clfilledbar"></div>
                            </div>
                            <div class="clcircle">
                                <i class="fs-1 text-center text-white-50 bi bi-hourglass-split"></i>
                            </div>
                        </div>
                        <div class="clcard">
                            <h3 class="cltitle">Anywhere</h3>
                            <div class="clbar">
                                <div class="clemptybar"></div>
                                <div class="clfilledbar"></div>
                            </div>
                            <div class="clcircle">
                                <i class="fs-1 text-center text-white-50 bi bi-compass-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cardlayout -->
            <div class="row">
                <div class="text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d64114.4402990121!2d79.82118589538184!3d6.921922576385074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e1!3m2!1sen!2slk!4v1650867758230!5m2!1sen!2slk" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>
    <?php require "footer.php"; ?>

    <script src="script.js"></script>
    <script src="bootstrap.min.js"></script>
</body>

</html>