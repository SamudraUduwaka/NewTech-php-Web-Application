<!DOCTYPE html>

<html>

<head>
    <title>NewTech | Invoice</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resources/My project copy (1).png" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

</head>

<body class="mt-2" style="background-color: rgb(160, 160, 248); background-image: linear-gradient(90deg,rgb(160, 160, 248) 0%,white 100%);">

    <div class="container-fluid">

        <?php

        require "header.php";

        ?>
        <div class="row" style="height: 100px;">
        </div>
        <div class="row">
            <div class="col-12">
                <hr />
            </div>

            <div class="col-12 btn-toolbar justify-content-end bg-light p-2">
                <button class="btn btn-dark me-2"><i class="bi bi-printer-fill"></i> Print</button>
                <button class="btn btn-danger me-2"><i class="bi bi-file-earmark-pdf-fill"></i> Save as PDF</button>
            </div>

            <div class="col-12">
                <hr />
            </div>

            <div class="GFG">

                <div class="col-12">
                    <div class="row">
                        <div class="col-6 col-lg-2">
                            <div class="text-end">
                                <img src="resources/My project copy (1).png" width="90px" />
                            </div>
                        </div>

                        <div class="col-6 col-lg-10">
                            <div class="row">
                                <div class="col-12 text-start">
                                    <h2 class="fw-bolder">NewTech (PVT)Ltd</h2>
                                </div>
                                <div class="col-12 text-start fw-bold">
                                    <span>No 37, Kurey Street, Battaramulla, Colombo 05</span><br />
                                    <span>+94112546978</span><br />
                                    <span>newtech55@gmail.com</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-12">
                    <hr class="hrbreak1" />
                </div>

                <div class="col-12 mb-4">
                    <div class="row">
                        <div class="col-6">
                            <h5>INVOICE TO :</h5>

                            <h3>Samudra Uduwaka</h3>
                            <span class="fw-bold">No 204/44A, Sarvodaya mw</span><br />
                            <span class="fw-bold text-primary text-decoration-underline">anuhasaki@gmail.com</span>
                        </div>

                        <div class="col-6 text-end mt-4">
                            <h2 class="text-primary fw-bold">INVOICE 02</h2>
                            <span>Date and Time of Invoice :</span>&nbsp;
                            <span>2022-05-16</span>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr class="border border-1 border-white">
                                <th>#</th>
                                <th>Order Id & Product</th>
                                <th class="text-end">Unit Price</th>
                                <th class="text-end">Quantity</th>
                                <th class="text-end">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="height: 70px;">
                                <td class="bg-primary text-white fs-1">1</td>
                                <td>
                                    <a href="#" class="fs-6 fw-bold p-2">00001115</a>
                                    <br />
                                    <a href="#" class="fs-6 fw-bold p-2">Vivo Y55s</a>
                                </td>
                                <td class="fs-6 text-end pt-3" style="background-color: rgb(199, 199, 199);">Rs. 10000 .00</td>
                                <td class="fs-6 text-end pt-3">2</td>
                                <td class="fs-6 text-end pt-3 text-white bg-primary">Rs. 20000 .00</td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="border-0"></td>
                                <td colspan="2" class="fs-5 text-end">SUBTOTAL</td>
                                <td class="fs-5 text-end">Rs. 20000 .00</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border-0"></td>
                                <td colspan="2" class="fs-5 text-end border-primary">DISCOUNT</td>
                                <td class="fs-5 text-end border-primary">Rs. 00 .00</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border-0"></td>
                                <td colspan="2" class="fs-4 text-end border-0 text-primary">GRAND TOTAL</td>
                                <td class="fs-5 text-end border-0 text-primary">Rs. 20000 .00</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="col-4 text-center" style="margin-top: -100px; margin-bottom: 50px;">
                    <span class="fs-1"> Thank You!</span>
                </div>

                <div class="col-12 mt-3 mb-3 border border-start border-end-0 border-top-0 border-bottom-0 border-5 border-dark rounded bg-light" >
                    <div class="row">
                        <div class="col-12 mt-3 mb-3">
                            <label class="form-label fs-5 fw-bold">NOTICE :</label>
                            <label class="form-label fs-5">Purchased items can return just after delivery.</label>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <hr class="hrbreak1" />
                </div>

                <div class="col-12 mb-3 text-center">
                    <label class="form-label fs-6 text-black-50">
                        Invoice was created on a computer and is valid without the signature and seal.
                    </label>
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