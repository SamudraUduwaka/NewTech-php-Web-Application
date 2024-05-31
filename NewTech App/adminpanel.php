<!DOCTYPE html>

<html>

<head>
    <title>NewTech | Admin | Dashboard</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="icon" href="resources/My project copy (1).png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="d-none d-lg-block">
            <div class="sidenav bg-dark">
                <div class="text-center m-3">
                    <p class="text-primary fs-3">Dashboard</p>
                </div>

                <a href="addupdateproduct.php" class="text-white h fs-5"><i class="bi bi-dot"></i>New items</a>
                <a href="#map" class="text-white h fs-5"><i class="bi bi-dot"></i>Map</a>
                <a href="#addcategory" class="text-white h fs-5"><i class="bi bi-dot"></i>Add Categories</a>
                <a href="#addemployees" class="text-white h fs-5"><i class="bi bi-dot"></i>Add &nbsp; Employee</a>
                <a href="#manageusers" class="text-white h fs-5"><i class="bi bi-dot"></i>Users</a>
                <a href="#manageproducts" class="text-white h fs-5"><i class="bi bi-dot"></i>Products</a>
                <a href="#manageemp" class="text-white h fs-5"><i class="bi bi-dot"></i>Employees</a>
                <a href="#rate" class="text-white h fs-5"><i class="bi bi-dot"></i>Rates</a>

            </div>
        </div>
        <div class="row d-block d-lg-none bg-dark p-3">
            <div class="col-12 w-100">
                <div class="row text-white">
                    <div class="col-2 text-end mt-2">
                        <i class="bi bi-text-indent-left fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"></i>
                    </div>
                    <div class="col-2 text-start">
                        <img src="resources/My project copy (1).png" width="50px" />
                    </div>
                    <div class="col-8 text-start mt-2">
                        <h3>Admin Panel</h3>
                    </div>

                    <div class="offcanvas bg-dark offcanvas-start" style="width: 215px;" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <div class="offcanvas-header mt-3">
                            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Dashboard</h5>
                            <button type="button" class="btn-close bg-light text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <a href="addupdateproduct.php" class="fs-5 offcanvasanchors"><i class="bi bi-dot"></i>New items</a><br />
                            <a href="#map" class="fs-5 offcanvasanchors"><i class="bi bi-dot"></i>Map</a><br />
                            <a href="#addcategory" class="fs-5 offcanvasanchors"><i class="bi bi-dot"></i>Add Categories</a><br />
                            <a href="#addemployees" class="fs-5 offcanvasanchors"><i class="bi bi-dot"></i>Add Employee</a><br />
                            <a href="#manageusers" class="fs-5 offcanvasanchors"><i class="bi bi-dot"></i>Users</a><br />
                            <a href="#manageproducts" class="fs-5 offcanvasanchors"><i class="bi bi-dot"></i>Products</a><br />
                            <a href="#manageemp" class="fs-5 offcanvasanchors"><i class="bi bi-dot"></i>Employees</a><br />
                            <a href="adminchat.php" class="fs-5 offcanvasanchors"><i class="bi bi-dot"></i>Chat</a><br />
                            <a href="#rate" class="fs-5 offcanvasanchors"><i class="bi bi-dot"></i>Rates</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offset-0 offset-lg-2 mainbox">
            <div class="row bg-light">
                <div class="col-12">
                    <div class="row">

                        <div class="col-12">
                            <div class="row m-3 border border-1 border-start-0 border-end-0 border-secondary p-2">
                                <div class="col-12 col-lg-5 text-center text-lg-end">
                                    <img src="resources/My project copy (1).png" width="100px" />
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="row text-center text-lg-start">
                                        <span class="fs-3 fw-bolder mt-2">Welcome to NewTech Admins<br /></span>
                                        <span class="text-black-50 fs-4">Samudra </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="top">
                            <div class="col-12">
                                <div class="row border border-3 border-primary rounded rounded-2 m-2 p-2 gy-2 pb-2">

                                    <div class="col-12 text-center">
                                        <span class="fs-3 text-dark fw-bolder">Summery</span>
                                    </div>

                                    <div class="col-12 col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                Daily Earnings
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Rs. 1500 .00</h5>
                                                <a href="#" class="btn btn-primary"><i class="bi bi-bookmark-heart-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                Monthly Earnings
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Rs. 5000 .00</h5>
                                                <a href="#" class="btn btn-primary"><i class="bi bi-bookmark-heart-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                Today Sellings
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">15+ Items</h5>
                                                <a href="#" class="btn btn-primary"><i class="bi bi-bookmark-heart-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                Monthly Sellings
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">50+ Items</h5>
                                                <a href="#" class="btn btn-primary"><i class="bi bi-bookmark-heart-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                Total Sellings
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">2000+ Items</h5>
                                                <a href="#" class="btn btn-primary"><i class="bi bi-bookmark-heart-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                Total Engagements
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">500+</h5>
                                                <a href="#" class="btn btn-primary"><i class="bi bi-bookmark-heart-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="manageusers">
                            <div class="col-12">
                                <div class="row border border-3 border-primary rounded rounded-1 m-2 p-2">
                                    <div class="col-12 text-center m-2 rounded rounded-2 bg-orange">
                                        <span class="fs-3 text-black-50">Manage Users</span>
                                    </div>
                                    <div class="col-12">

                                        <div class="row g-3">
                                            <div class="col-12 text-center mt-2">
                                                <span class="fs-3">Welcome to manage users</span>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 offset-0 offset-md-3 offset-lg-4">
                                                <img src="adminimages/manageusersicon.png" />
                                            </div>
                                            <div class="accordion text-center" id="accordionPanelsStayOpenExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-primary" id="panelsStayOpen-headingTwo">
                                                        <button class="collapsed accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                            Start Managing
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12 col-lg-6 offset-0 offset-lg-3">
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" class="form-control" placeholder="Search by name or id.." aria-describedby="userbuton">
                                                                                <button class="btn btn-outline-dark" type="button" id="userbuton">Search</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <h5>ID</h5>
                                                                        </div>
                                                                        <div class="col-3 col-lg-2">
                                                                            <h5>First Name</h5>
                                                                        </div>
                                                                        <div class="col-4 col-lg-2">
                                                                            <h5>Last Name</h5>
                                                                        </div>
                                                                        <div class="col-3 d-none d-lg-block">
                                                                            <h5>Email</h5>
                                                                        </div>
                                                                        <div class="col-2 d-none d-lg-block">
                                                                            <h5>Joined</h5>
                                                                        </div>
                                                                        <div class="col-1 d-block d-lg-none text-start">

                                                                        </div>
                                                                        <div class="col-3 col-lg-2">
                                                                            <h5>Status</h5>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <span>1</span>
                                                                        </div>
                                                                        <div class="col-2 col-lg-2">
                                                                            <span>Samudra</span>
                                                                        </div>
                                                                        <div class="col-4 col-lg-2 d-none d-lg-block">
                                                                            <span>Samadhi</span>
                                                                        </div>
                                                                        <div class="col-5 col-lg-3">
                                                                            <span>Anuhasaki@gmail.com</span>
                                                                        </div>
                                                                        <div class="col-2 d-none d-lg-block">
                                                                            <span>2022-05-17</span>
                                                                        </div>
                                                                        <div class="col-1 d-block d-grid d-lg-none">
                                                                            <button class="btn btn-outline-dark fw-bolder">+</button>
                                                                        </div>
                                                                        <div class="col-3 col-lg-2 d-grid">
                                                                            <button class="btn btn-success">Active</button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <span>2</span>
                                                                        </div>
                                                                        <div class="col-2 col-lg-2">
                                                                            <span>Vishwa</span>
                                                                        </div>
                                                                        <div class="col-4  d-none d-lg-block col-lg-2">
                                                                            <span>Nuwantha</span>
                                                                        </div>
                                                                        <div class="col-5 col-lg-3">
                                                                            <span>wishwa@gmail.com</span>
                                                                        </div>
                                                                        <div class="col-2 d-none d-lg-block">
                                                                            <span>2022-05-19</span>
                                                                        </div>
                                                                        <div class="col-1 d-block d-grid d-lg-none">
                                                                            <button class="btn btn-outline-dark fw-bolder">+</button>
                                                                        </div>
                                                                        <div class="col-3 col-lg-2 d-grid">
                                                                            <button class="btn btn-danger">Inactive</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="manageemp">
                            <div class="col-12">
                                <div class="row border border-3 border-primary rounded rounded-1 m-2 p-2">
                                    <div class="col-12 text-center m-2 rounded rounded-2 bg-orange">
                                        <span class="fs-3 text-black-50">Manage Employees</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-12 text-center mt-2">
                                                <span class="fs-3">Welcome to manage Employees</span>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 offset-0 offset-md-3 offset-lg-4">
                                                <img src="adminimages/manageempicon.png" />
                                            </div>

                                            <div class="accordion text-center" id="accordionPanelsStayOpenExample1">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-primary" id="panelsStayOpen-headingTwo1">
                                                        <button class="collapsed accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo1" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo1">
                                                            Start Managing
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseTwo1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo1">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12 col-lg-6 offset-0 offset-lg-3">
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" class="form-control" placeholder="Search by name or id.." aria-describedby="empbuton">
                                                                                <button class="btn btn-outline-dark" type="button" id="empbuton">Search</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <h5>ID</h5>
                                                                        </div>
                                                                        <div class="col-3 col-lg-2">
                                                                            <h5>First Name</h5>
                                                                        </div>
                                                                        <div class="col-4 col-lg-2">
                                                                            <h5>Last Name</h5>
                                                                        </div>
                                                                        <div class="col-3 d-none d-lg-block">
                                                                            <h5>Email</h5>
                                                                        </div>
                                                                        <div class="col-2 d-none d-lg-block">
                                                                            <h5>Joined</h5>
                                                                        </div>
                                                                        <div class="col-1 d-block d-lg-none text-start">

                                                                        </div>
                                                                        <div class="col-3 col-lg-2">
                                                                            <h5>Status</h5>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <span>1</span>
                                                                        </div>
                                                                        <div class="col-2 col-lg-2">
                                                                            <span>Samudra</span>
                                                                        </div>
                                                                        <div class="col-4 col-lg-2 d-none d-lg-block">
                                                                            <span>Samadhi</span>
                                                                        </div>
                                                                        <div class="col-5 col-lg-3">
                                                                            <span>Anuhasaki@gmail.com</span>
                                                                        </div>
                                                                        <div class="col-2 d-none d-lg-block">
                                                                            <span>2022-05-17</span>
                                                                        </div>
                                                                        <div class="col-1 d-block d-grid d-lg-none">
                                                                            <button class="btn btn-outline-dark fw-bolder">+</button>
                                                                        </div>
                                                                        <div class="col-3 col-lg-2 d-grid">
                                                                            <button class="btn btn-success">Active</button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <span>2</span>
                                                                        </div>
                                                                        <div class="col-2 col-lg-2">
                                                                            <span>Vishwa</span>
                                                                        </div>
                                                                        <div class="col-4  d-none d-lg-block col-lg-2">
                                                                            <span>Nuwantha</span>
                                                                        </div>
                                                                        <div class="col-5 col-lg-3">
                                                                            <span>wishwa@gmail.com</span>
                                                                        </div>
                                                                        <div class="col-2 d-none d-lg-block">
                                                                            <span>2022-05-19</span>
                                                                        </div>
                                                                        <div class="col-1 d-block d-grid d-lg-none">
                                                                            <button class="btn btn-outline-dark fw-bolder">+</button>
                                                                        </div>
                                                                        <div class="col-3 col-lg-2 d-grid">
                                                                            <button class="btn btn-danger">Inactive</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="manageproducts">
                            <div class="col-12">
                                <div class="row border border-3 border-primary rounded rounded-1 m-2 p-2">
                                    <div class="col-12 text-center m-2 rounded rounded-2 bg-orange">
                                        <span class="fs-3 text-black-50">Manage Products</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-12 text-center mt-2">
                                                <span class="fs-3">Welcome to manage Products</span>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 offset-0 offset-md-3 offset-lg-4">
                                                <img src="adminimages/manageproduct.png" />
                                            </div>

                                            <div class="accordion text-center" id="accordionPanelsStayOpenExample2">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-primary" id="panelsStayOpen-headingTwo2">
                                                        <button class="collapsed accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo2" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo2">
                                                            Start Managing
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseTwo2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo2">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-12 col-lg-4">
                                                                    <div class="card mb-3" style="max-width: 540px;">
                                                                        <div class="row g-0">
                                                                            <div class="col-md-4">
                                                                                <img src="images/applewatchseries2.webp" class="img-fluid rounded-start" alt="...">
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Popular of the year</h5>
                                                                                    <p class="card-text">Apple smart watch series 2 black.</p>
                                                                                    <p class="card-text"><small class="text-muted">Most Selling product</small></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-lg-4">
                                                                    <div class="card mb-3" style="max-width: 540px;">
                                                                        <div class="row g-0">
                                                                            <div class="col-md-4">
                                                                                <img src="images/applewatchseries2.webp" class="img-fluid rounded-start" alt="...">
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Popular of the month</h5>
                                                                                    <p class="card-text">Apple smart watch series 2 black.</p>
                                                                                    <p class="card-text"><small class="text-muted">Most Selling product</small></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-lg-4">
                                                                    <div class="card mb-3" style="max-width: 540px;">
                                                                        <div class="row g-0">
                                                                            <div class="col-md-4">
                                                                                <img src="images/vivoy55s.webp" class="img-fluid rounded-start" alt="...">
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Popular of the day</h5>
                                                                                    <p class="card-text">Vivo Y 55s brand new blue.</p>
                                                                                    <p class="card-text"><small class="text-muted">Most Selling product</small></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12 col-lg-6 offset-0 offset-lg-3">
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" class="form-control" placeholder="Search by name or id.." aria-describedby="prdbuton">
                                                                                <button class="btn btn-outline-dark" type="button" id="prdbuton">Search</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <h5>ID</h5>
                                                                        </div>
                                                                        <div class="col-4 col-lg-3">
                                                                            <h5>Name</h5>
                                                                        </div>
                                                                        <div class="col-3 col-lg-2">
                                                                            <h5>Category</h5>
                                                                        </div>
                                                                        <div class="col-2 d-none d-lg-block">
                                                                            <h5>Stock</h5>
                                                                        </div>
                                                                        <div class="col-2 d-none d-lg-block">
                                                                            <h5>Added</h5>
                                                                        </div>
                                                                        <div class="col-1 d-block d-lg-none text-start">

                                                                        </div>
                                                                        <div class="col-3 col-lg-2">
                                                                            <h5>Status</h5>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <span>1</span>
                                                                        </div>
                                                                        <div class="col-4 col-lg-3">
                                                                            <span>Vivo Y55s</span>
                                                                        </div>
                                                                        <div class="col-3 col-lg-2">
                                                                            <span>Mobiles</span>
                                                                        </div>
                                                                        <div class="col-2 d-none d-lg-block">
                                                                            <span>Stock 1</span>
                                                                        </div>
                                                                        <div class="col-2 d-none d-lg-block">
                                                                            <span>2022-05-17</span>
                                                                        </div>
                                                                        <div class="col-1 d-block d-grid d-lg-none">
                                                                            <button class="btn btn-outline-dark fw-bolder">+</button>
                                                                        </div>
                                                                        <div class="col-3 col-lg-2 d-grid">
                                                                            <button class="btn btn-success">Active</button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <span>1</span>
                                                                        </div>
                                                                        <div class="col-4 col-lg-3">
                                                                            <span>Vivo Y55s</span>
                                                                        </div>
                                                                        <div class="col-3 col-lg-2">
                                                                            <span>Mobiles</span>
                                                                        </div>
                                                                        <div class="col-2 d-none d-lg-block">
                                                                            <span>Stock 1</span>
                                                                        </div>
                                                                        <div class="col-2 d-none d-lg-block">
                                                                            <span>2022-05-17</span>
                                                                        </div>
                                                                        <div class="col-1 d-block d-grid d-lg-none">
                                                                            <button class="btn btn-outline-dark fw-bolder">+</button>
                                                                        </div>
                                                                        <div class="col-3 col-lg-2 d-grid">
                                                                            <button class="btn btn-danger">Inactive</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="addcategory">
                            <div class="col-12">
                                <div class="row border border-3 border-primary rounded rounded-1 m-2 p-2">
                                    <div class="col-12 text-center m-2 rounded rounded-2 bg-orange">
                                        <span class="fs-3 text-black-50">Manage Categories & Brands</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-12 text-center mt-2">
                                                <span class="fs-3">Welcome to manage Categories & Brands</span>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 offset-0 offset-md-3 offset-lg-4">
                                                <img src="adminimages/managecategories.png" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="row g-2 mt-2 mb-4">
                                                    <div class="col-12">
                                                        <span class="fs-3">Add new Category</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <select class="form-select">
                                                            <option>Available categories</option>
                                                            <option>Mobile phones</option>
                                                            <option>Laptops</option>
                                                            <option>TVs</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control" placeholder="Category name" />
                                                    </div>
                                                    <div class="col-6 d-grid">
                                                        <button class="btn btn-dark">Add</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <div class="row g-2 mt-2 mb-4">
                                                    <div class="col-12">
                                                        <span class="fs-3">Add new Brand</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <select class="form-select">
                                                            <option>Available brands</option>
                                                            <option>Apple</option>
                                                            <option>Vivo</option>
                                                            <option>Samsung</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control" placeholder="Brand name" />
                                                    </div>
                                                    <div class="col-6 d-grid">
                                                        <button class="btn btn-dark">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d64114.4402990121!2d79.82118589538184!3d6.921922576385074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e1!3m2!1sen!2slk!4v1650867758230!5m2!1sen!2slk" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>


            </div>
            <?php require "footer.php"; ?>
            <script src="bootstrap.min.js"></script>
</body>

</html>