<!DOCTYPE html>

<html>

<head>
    <title>NewTech | Purchased History</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resources/My project copy (1).png" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

</head>

<body>
    <div class="container-fluid">
        <?php require "searchheader.php"; ?>
        <div class="row" style="height: 130px;">
        </div>
        <div class="row">

            <div class="col-12 col-lg-2 bg-dark" style="height: auto;">
                <div class="row mt-5 mt-lg-0">

                    <div class="col-6 col-lg-12 ">
                        <div class="row mt-3 mt-lg-5">
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">PurchaseHistory</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="col-6 col-lg-12 text-start p-2 mt-1 mt-lg-3 d-grid">
                        <button class="btn btn-light" id="tablebtn" onclick="changeViewPurchaseHistory();"><i class="bi bi-grid"></i> Switch to grid view</button>
                    </div>

                    <div class="col-12 d-none d-lg-block">
                        <img src="resources/logofooter.png" width="150px" />
                    </div>

                    <div class="col-12 d-none d-lg-block">
                        <span class="text-white-50">NewTech all rights reserved</span>
                    </div>
                </div>
            </div>

            <!-- <div class="col-12 col-lg-10">
                        <div class="row">

                            <div class="col-12 text-center">
                                <img src="resources/emptytransactionhistory.png" height="330px" />
                            </div>
                            <div class="col-12 text-center ">
                                <label class="form-label fs-1 mb-3 fw-bolder">You have no any items in wishlist</label>
                            </div>

                        </div>
                    </div> -->

            <!-- ///////////////////////////////////////grid view from here -->

            <div class="col-12 col-lg-10 d-none" id="gridview">
                <div class="row ps-2">
                    <div class="col-12 bg-light">
                        <div class="row">
                            <div class="col-10 col-md-5 col-lg-3 offset-1 offset-lg-1 mt-1 mb-1">
                                <div class="card">
                                    <img src="images/vivoy55s.webp" width="200px" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Vivo Y55s</h5>
                                        <p class="card-text">Rs. 55000.00</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">00001220002</li>
                                        <li class="list-group-item">Quantity : 1</li>
                                        <li class="list-group-item">2022-05-18 22:20:45</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link btn btn-secondary">Feedback</a>
                                        <a href="#" class="card-link btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-10 col-md-5 col-lg-3 offset-1 offset-lg-1 mt-1 mb-1">
                                <div class="card">
                                    <img src="images/vivoy55s.webp" width="200px" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Vivo Y55s</h5>
                                        <p class="card-text">Rs. 55000.00</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">00001220002</li>
                                        <li class="list-group-item">Quantity : 1</li>
                                        <li class="list-group-item">2022-05-18 22:20:45</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link btn btn-secondary">Feedback</a>
                                        <a href="#" class="card-link btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-10 col-md-5 col-lg-3 offset-1 offset-lg-1 mt-1 mb-1">
                                <div class="card">
                                    <img src="images/vivoy55s.webp" width="200px" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Vivo Y55s</h5>
                                        <p class="card-text">Rs. 55000.00</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">00001220002</li>
                                        <li class="list-group-item">Quantity : 1</li>
                                        <li class="list-group-item">2022-05-18 22:20:45</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link btn btn-secondary">Feedback</a>
                                        <a href="#" class="card-link btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-10 col-md-5 col-lg-3 offset-1 offset-lg-1 mt-1 mb-1">
                                <div class="card">
                                    <img src="images/vivoy55s.webp" width="200px" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Vivo Y55s</h5>
                                        <p class="card-text">Rs. 55000.00</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">00001220002</li>
                                        <li class="list-group-item">Quantity : 1</li>
                                        <li class="list-group-item">2022-05-18 22:20:45</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link btn btn-secondary">Feedback</a>
                                        <a href="#" class="card-link btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-10 col-md-5 col-lg-3 offset-1 offset-lg-1 mt-1 mb-1">
                                <div class="card">
                                    <img src="images/vivoy55s.webp" width="200px" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Vivo Y55s</h5>
                                        <p class="card-text">Rs. 55000.00</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">00001220002</li>
                                        <li class="list-group-item">Quantity : 1</li>
                                        <li class="list-group-item">2022-05-18 22:20:45</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link btn btn-secondary">Feedback</a>
                                        <a href="#" class="card-link btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-10 col-md-5 col-lg-3 offset-1 offset-lg-1 mt-1 mb-1">
                                <div class="card">
                                    <img src="images/vivoy55s.webp" width="200px" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Vivo Y55s</h5>
                                        <p class="card-text">Rs. 55000.00</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">00001220002</li>
                                        <li class="list-group-item">Quantity : 1</li>
                                        <li class="list-group-item">2022-05-18 22:20:45</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link btn btn-secondary">Feedback</a>
                                        <a href="#" class="card-link btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-2 border border-1 border-secondary pt-3">
                            <div class="col-4 offset-4 col-lg-4 offset-lg-5">
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

            <!-- //////////////////////////////////////////////////////////table view from here -->

            <div class="col-12 col-lg-10" id="tableview">
                <div class="row bg-light ps-0 ps-lg-2">
                    <div class="col-12">
                        <div class="row">

                            <div class="col-12 d-none d-lg-block">
                                <div class="row">
                                    <div class="col-1 bg-light">
                                        <label class="form-label">#</label>
                                    </div>
                                    <div class="col-3 bg-light">
                                        <label class="form-label fw-bold">Order Details</label>
                                    </div>
                                    <div class="col-1 bg-light text-end">
                                        <label class="form-label fw-bold">Quantity</label>
                                    </div>
                                    <div class="col-2 bg-light text-end">
                                        <label class="form-label fw-bold">Amount</label>
                                    </div>
                                    <div class="col-2 bg-light text-end">
                                        <label class="form-label fw-bold">Date & Time</label>
                                    </div>
                                    <div class="col-3 bg-light"></div>
                                    <div class="col-12">
                                        <hr />
                                    </div>


                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-lg-1 bg-info text-center ">
                                        <label class="form-label text-white fs-6 py-5">00125001</label>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="card my-3" style="max-width: 540px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="images/vivoy55s.webp" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Vivo Y55s</h5>
                                                            <br />
                                                            <p class="card-text"><b>Price :</b>Rs 55000 .00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-1 text-center text-lg-end">
                                        <label class="form-label fs-4 pt-5">1</label>
                                    </div>

                                    <div class="col-12 col-lg-2 text-center text-lg-end">
                                        <label class="form-label fs-6 text-lg-start py-5 fw-bold">Rs 55000 .00</label>
                                    </div>

                                    <div class="col-12 col-lg-2 text-center text-lg-end">
                                        <label class="form-labell fs-6 pt-5">2022-05-14 22:20:45</label>
                                    </div>

                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="col-6 d-grid">
                                                <button class="btn btn-secondary rounded border border-1 border-primary mt-5 fs-5">Feedback</button>
                                            </div>
                                            <div class="col-6 d-grid">
                                                <button class="btn btn-danger rounded mt-5 fs-5">Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <hr />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-lg-1 bg-info text-center ">
                                        <label class="form-label text-white fs-6 py-5">00125001</label>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="card my-3" style="max-width: 540px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="images/vivoy55s.webp" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Vivo Y55s</h5>
                                                            <br />
                                                            <p class="card-text"><b>Price :</b>Rs 55000 .00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-1 text-center text-lg-end">
                                        <label class="form-label fs-4 pt-5">1</label>
                                    </div>

                                    <div class="col-12 col-lg-2 text-center text-lg-end">
                                        <label class="form-label fs-6 text-lg-start py-5 fw-bold">Rs 55000 .00</label>
                                    </div>

                                    <div class="col-12 col-lg-2 text-center text-lg-end">
                                        <label class="form-labell fs-6 pt-5">2022-05-14 22:20:45</label>
                                    </div>

                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="col-6 d-grid">
                                                <button class="btn btn-secondary rounded border border-1 border-primary mt-5 fs-5">Feedback</button>
                                            </div>
                                            <div class="col-6 d-grid">
                                                <button class="btn btn-danger rounded mt-5 fs-5">Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <hr />
                                    </div>


                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-lg-1 bg-info text-center ">
                                        <label class="form-label text-white fs-6 py-5">00125001</label>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="card my-3" style="max-width: 540px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="images/vivoy55s.webp" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Vivo Y55s</h5>
                                                            <br />
                                                            <p class="card-text"><b>Price :</b>Rs 55000 .00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-1 text-center text-lg-end">
                                        <label class="form-label fs-4 pt-5">1</label>
                                    </div>

                                    <div class="col-12 col-lg-2 text-center text-lg-end">
                                        <label class="form-label fs-6 text-lg-start py-5 fw-bold">Rs 55000 .00</label>
                                    </div>

                                    <div class="col-12 col-lg-2 text-center text-lg-end">
                                        <label class="form-labell fs-6 pt-5">2022-05-14 22:20:45</label>
                                    </div>

                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="col-6 d-grid">
                                                <button class="btn btn-secondary rounded border border-1 border-primary mt-5 fs-5">Feedback</button>
                                            </div>
                                            <div class="col-6 d-grid">
                                                <button class="btn btn-danger rounded mt-5 fs-5">Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <hr />
                                    </div>


                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-lg-1 bg-info text-center ">
                                        <label class="form-label text-white fs-6 py-5">00125001</label>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="card my-3" style="max-width: 540px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="images/vivoy55s.webp" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Vivo Y55s</h5>
                                                            <br />
                                                            <p class="card-text"><b>Price :</b>Rs 55000 .00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-1 text-center text-lg-end">
                                        <label class="form-label fs-4 pt-5">1</label>
                                    </div>

                                    <div class="col-12 col-lg-2 text-center text-lg-end">
                                        <label class="form-label fs-6 text-lg-start py-5 fw-bold">Rs 55000 .00</label>
                                    </div>

                                    <div class="col-12 col-lg-2 text-center text-lg-end">
                                        <label class="form-labell fs-6 pt-5">2022-05-14 22:20:45</label>
                                    </div>

                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="col-6 d-grid">
                                                <button class="btn btn-secondary rounded border border-1 border-primary mt-5 fs-5">Feedback</button>
                                            </div>
                                            <div class="col-6 d-grid">
                                                <button class="btn btn-danger rounded mt-5 fs-5">Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <hr />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-lg-1 bg-info text-center ">
                                        <label class="form-label text-white fs-6 py-5">00125001</label>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="card my-3" style="max-width: 540px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="images/vivoy55s.webp" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Vivo Y55s</h5>
                                                            <br />
                                                            <p class="card-text"><b>Price :</b>Rs 55000 .00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-1 text-center text-lg-end">
                                        <label class="form-label fs-4 pt-5">1</label>
                                    </div>

                                    <div class="col-12 col-lg-2 text-center text-lg-end">
                                        <label class="form-label fs-6 text-lg-start py-5 fw-bold">Rs 55000 .00</label>
                                    </div>

                                    <div class="col-12 col-lg-2 text-center text-lg-end">
                                        <label class="form-labell fs-6 pt-5">2022-05-14 22:20:45</label>
                                    </div>

                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="col-6 d-grid">
                                                <button class="btn btn-secondary rounded border border-1 border-primary mt-5 fs-5">Feedback</button>
                                            </div>
                                            <div class="col-6 d-grid">
                                                <button class="btn btn-danger rounded mt-5 fs-5">Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <hr />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-lg-1 bg-info text-center ">
                                        <label class="form-label text-white fs-6 py-5">00125001</label>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="card my-3" style="max-width: 540px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="images/vivoy55s.webp" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Vivo Y55s</h5>
                                                            <br />
                                                            <p class="card-text"><b>Price :</b>Rs 55000 .00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-1 text-center text-lg-end">
                                        <label class="form-label fs-4 pt-5">1</label>
                                    </div>

                                    <div class="col-12 col-lg-2 text-center text-lg-end">
                                        <label class="form-label fs-6 text-lg-start py-5 fw-bold">Rs 55000 .00</label>
                                    </div>

                                    <div class="col-12 col-lg-2 text-center text-lg-end">
                                        <label class="form-labell fs-6 pt-5">2022-05-14 22:20:45</label>
                                    </div>

                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="col-6 d-grid">
                                                <button class="btn btn-secondary rounded border border-1 border-primary mt-5 fs-5">Feedback</button>
                                            </div>
                                            <div class="col-6 d-grid">
                                                <button class="btn btn-danger rounded mt-5 fs-5">Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 mb-3 border border-1 border-secondary pt-3">
                            <div class="col-4 offset-4 col-lg-4 offset-lg-5">
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

    <script src="script.js"></script>
</body>

</html>