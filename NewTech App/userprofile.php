<!DOCTYPE html>

<html>

<head>
    <title>NewTech | Update profile</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resources/My project copy (1).png" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

</head>

<body style="background-color: rgb(160, 160, 248); background-image: linear-gradient(90deg,rgb(160, 160, 248) 0%,white 100%);">
    <div class="container-fluid">
        <div class="col-12">
            <?php
            require "header.php";
            ?>
            <div class="row" style="height: 90px;">
            </div>
            <div class="row mt-5 mb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                    </ol>
                </nav>
                <div class="col-12 col-lg-3 offset-0 offset-lg-1 border border-dark border-1 rounded rounded-1 pb-4">
                    <div class="row">
                        <div class="col-12 mb-1 text-center">
                            <span class="fs-3">Profile Pic</span>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-5 col-lg-2 ms-2">
                                    <img src="resources/Samu.jpg" height="250px" width="190px" />
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input class="d-none" type="file" accept="img/*" id="imguploader1" />
                                                    <label class="btn btn-primary col-5 col-lg-9" for="imguploader1">Select</label>
                                                    <button class="btn btn-outline-primary col-5 col-lg-9">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 border border-dark border-1 rounded rounded-1 pb-4">
                    <div class="row">

                        <div class="col-12 mb-1 text-center">
                            <span class="fs-3">Profile Details</span>
                        </div>
                        <div class="col-6">
                            <span>First Name</span>
                            <input type="text" class="form-control" placeholder="Samudra"/>
                        </div>
                        <div class="col-6">
                            <span>Last Name</span>
                            <input type="text" class="form-control" placeholder="Samadhi"/>
                        </div>
                        <div class="col-12">
                            <span>Email</span>
                            <input type="text" class="form-control" disabled placeholder="anuhasaki@gmail.com"/>
                        </div>
                        <div class="col-12">
                            <span>Mobile</span>
                            <input type="text" class="form-control" placeholder="0776380882"/>
                        </div>
                        <div class="col-12">
                            <span>Password</span>
                            <input type="password" class="form-control" disabled placeholder="452255"/>
                        </div>
                        <div class="col-6">
                            <span>Register date</span>
                            <input type="text" class="form-control" disabled placeholder="2020-12-05"/>
                        </div>
                        <div class="col-6">
                            <span>Gender</span>

                            <select class="form-select">
                                <option>Female</option>
                                <option>Male</option>
                            </select>

                        </div>
                        <div class="col-12 mt-2 d-grid">
                            <button class="btn btn-outline-primary">Save Changes</button>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-3 border border-dark border-1 rounded rounded-1 pb-4">
                    <div class="row">
                        <div class="col-12 mb-1 text-center">
                            <span class="fs-3">Address Details</span>
                        </div>
                        <div class="col-12">
                            <span>No</span>
                            <input type="text" class="form-control" placeholder="No 204/44A"/>
                        </div>
                        <div class="col-12">
                            <span>Street</span>
                            <input type="text" class="form-control" placeholder="Sarvodaya mw"/>
                        </div>
                        <div class="col-12">
                            <span>City</span>

                            <select class="form-select">
                                <option>Piliyandala</option>
                                <option>Moratuwa</option>
                            </select>

                        </div>
                        <div class="col-12">
                            <span>District</span>

                            <select class="form-select" disabled>
                                <option>Colombo</option>
                                <option>Kandy</option>
                                <option>Gampaha</option>
                            </select>

                        </div>
                        <div class="col-12">
                            <span>Province</span>

                            <select class="form-select" disabled>
                                <option>Western</option>
                                <option>Nothern</option>
                                <option>Southern</option>
                            </select>
                        </div>
                        <div class="col-12 mt-2 d-grid">
                            <button class="btn btn-outline-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php

        require "footer.php";

        ?>
    </div>

    <script src="bootstrap.bundle.js"></script>
</body>

</html>