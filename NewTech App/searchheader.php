<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <style>
        .iconbuttons:hover {
            color: blue;
        }

        .iconborders:hover {
            border-style: solid;
            border-width: 2px;
            border-color: blue;
        }
    </style>
</head>

<body>
    <div class="row bg-light fixed-top p-1">
        <div class="mt-0 mt-lg-1 col-6 col-lg-1 text-end">
            <img src="resources/My project copy (1).png" width="70px" />
        </div>
        <div class="mt-0 col-6 col-lg-2 mt-4 text-start">
            <span class="fs-3 fw-bold" style="font-family: 'AsapI';">NewTech</span>
        </div>
        <div class="col-7 col-lg-5 mt-0 mt-lg-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Type Something to search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-dark" type="button" id="button-addon2">Search <i class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="col-4 col-lg-2 mt-0 mt-lg-4">
            <div class="row">
                <div class="col-2 mt-1">
                    <button class="bg-white iconborders"><i class="bi bi-cart4 iconbuttons"></i></button>
                </div>
                <div class="col-2 mt-1">
                    <button class="bg-white iconborders"><i class="bi bi-heart iconbuttons"></i></button>
                </div>
                <div class="col-2 mt-1">
                    <button class="bg-white iconborders"><i class="bi bi-person iconbuttons"></i></button>
                </div>
                <div class="col-2 mt-1">
                    <button class="bg-white iconborders"><i class="bi bi-bag-check iconbuttons"></i></button>
                </div>
                <div class="col-2 mt-1">
                    <button class="bg-white iconborders"><i class="bi bi-star-half iconbuttons"></i></button>
                </div>
                <div class="col-2 mt-1">
                    <button class="bg-white iconborders"><i class="bi bi-stopwatch"></i></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-2 text-end mt-0 mt-lg-4">
            <a href="#" style="text-decoration: none;">Sign Out</a>
        </div>
    </div>
</body>

</html>