<!DOCTYPE html>

<html>

<head>
    <title>NewTech | Update products</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resources/My project copy (1).png" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="admin.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <?php require "header.php"; ?>
        <div class="row">
            <div class="col-12" style="height: 108px;">

            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-3 bg-dark pt-5 pb-5">
                <div class="row g-2">
                    <div class="col-12 d-grid">
                        <button class="btn btn-outline-light">Admin Panel</button>
                    </div>
                    <div class="col-12 d-grid">
                        <button class="btn btn-outline-light">Product Adding</button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-9">
                <div class="row ps-2">
                    <div class="col-12 bg-light">
                        <div class="row">
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Admin Panel</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Update</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3 class="text-dark ">Product Updating</h3>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-12 col-lg-8">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingPassword" placeholder="Product name" value="Vivo Y55s">
                                            <label for="floatingPassword">Product name</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <div class="form-floating">
                                            <textarea class="form-control text-start" placeholder="Description" id="floatingTextarea2" style="height: 180px">
                                            Best mobile from Vivo Y series Vivo Y55s. Blue colour mobile. Available in 3 main different colours as Blue, Black and Bronze
                                            8GB RAM and 128GB memory capacity available.
                                            </textarea>
                                            <label for="floatingTextarea2">Description</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="images/vivoy55s.webp" height="210px" width="190px" />
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
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="row p-2">
                                    <select class="form-select d-grid">
                                        <!-- <option>Select Category</option> -->
                                        <option>Mobile devices</option>
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
                                        <!-- <option>Select Brand</option> -->
                                        <option>Vivo</option>
                                        <option>Samsung</option>
                                        <option>Apple</option>
                                        <option>Sony</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4">
                                <div class="row p-2">
                                    <select class="form-select d-grid">
                                        <!-- <option>Select Model</option> -->
                                        <option>Y55s</option>
                                        <option>Y20</option>
                                        <option>Y10s</option>
                                        <option>Y52</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" placeholder="Date Time added" value="2022-05-12 11:21:56" disabled>
                                    <label for="floatingPassword">Date Time added</label>
                                </div>
                            </div>

                            <div class="col-6 col-lg-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" placeholder="Stock id" value="1" disabled>
                                    <label for="floatingPassword">Stock id</label>
                                </div>
                            </div>

                            <div class="col-6 col-lg-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" placeholder="Quantity" value="7">
                                    <label for="floatingPassword">Quantity</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 p-2">
                                <select class="form-select d-grid">
                                    <!-- <option>Select Condition</option> -->
                                    <option>Brand New</option>
                                    <option>Used</option>
                                </select>
                            </div>

                            <div class="col-6 p-2">
                                <select class="form-select d-grid">
                                    <!-- <option>Select Colour</option> -->
                                    <option>Blue</option>
                                    <option>Gold</option>
                                    <option>Bronze</option>
                                    <option>Black</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" placeholder="Price" value="Rs.55000.00">
                                    <label for="floatingPassword">Price</label>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <span class="fs-6">Currently available or not</span>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                            <label class="form-check-label" for="inlineRadio1">Available</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Not available</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 d-grid mt-4 mb-4">
                                <button class="btn btn-dark">Save Changes</button>
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