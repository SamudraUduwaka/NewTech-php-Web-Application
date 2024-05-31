<!DOCTYPE html>

<html>

<head>
    <title>NewTech | Admin | SignIn</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="icon" href="resources/My project copy (1).png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <div class="container-fluid">

        <div class="row" style="margin-top: 110px;margin-bottom: auto;">
            <div class="col-12 col-lg-6 adminsigninblackimage d-none d-lg-block">
                <div class="row">
                    <div class="col-8 offset-2 text-center text-primary pt-5 mt-1 mt-lg-5">
                        Welcome<br />
                        <img src="resources/My project copy (1).png" width="200px" /><br />
                        NewTech Admin Sign In <br />
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6" style="background-color: rgb(160, 160, 248); background-image: linear-gradient(90deg,rgb(160, 160, 248) 0%,white 100%);">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="row mt-5 p-1 ps-2">
                            <input type="text" class="form-control" placeholder="Enter your email address" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="row d-grid mt-2 mt-lg-5 p-1">
                            <button class="btn btn-dark">Verify</button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-10 offset-0 offset-lg-1 mt-3 mb-4">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-12 col-lg-6 mt-1 mb-1">
                                <input type="text" class="form-control" placeholder="Verification Number"/>
                            </div>
                            <div class="col-12 col-lg-6 mt-1 mb-1">
                                <input type="text" class="form-control" placeholder="Admin Index No"/>
                            </div>
                            <div class="col-6 col-lg-6 mt-1 mb-1">
                                <input type="password" class="form-control" placeholder="Password"/>
                            </div>
                            <div class="col-6 col-lg-6 mt-1 mb-1">
                                <input type="password" class="form-control" placeholder="Re-enter Password"/>
                            </div>
                            <div class="col-12 mb-5 mt-3 d-grid">
                                <button class="btn btn-dark">Sign In Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>