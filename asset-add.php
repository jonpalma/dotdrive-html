<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- third party css -->

    <!-- third party css end -->

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Begin page -->
<div class="wrapper">

    <?php include('menu.php')?>

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <?php include('header.php')?>

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Goytia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Assets</a></li>
                                    <li class="breadcrumb-item active">Add</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add asset</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">

                        <form action="#" class="needs-validation" novalidate>

                            <div class="card">
                                <div class="card-body">

                                    <!-- start body content -->

                                    <h4 class="header-title mb-3">General Information</h4>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Asset ID</label>
                                            <input type="text" id="assetid" class="form-control" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" id="name" class="form-control" required>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Asset Type</label>
                                            <select class="form-control" id="assettype" required>
                                                <option>Box Truck</option>
                                                <option>Car</option>
                                                <option>Forklift</option>
                                                <option>Tractor</option>
                                                <option>Trailer</option>
                                                <option>Truck</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Location</label>
                                            <select class="form-control" id="location" required>
                                                <option>S and R Express Inc</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group mt-3 col-md-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="activeasset">
                                                <label class="custom-control-label" for="activeasset">Active Asset</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Serial #</label>
                                            <input type="text" id="serialnumber" class="form-control">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Make</label>
                                            <input type="text" id="make" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Model</label>
                                            <input type="text" id="model" class="form-control">
                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Year</label>
                                            <input type="text" id="year" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Color</label>
                                            <input type="text" id="color" class="form-control">
                                        </div>

                                    </div>

                                    <hr class="mb-4">

                                    <h4 class="header-title mb-3">Miscellaneous Information</h4>

                                    <div class="row">

                                        <div class="form-group col-md-4">
                                            <label for="misc1">Misc 1:</label>
                                            <textarea class="form-control" id="misc1" rows="3"></textarea>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Alert 1</label>
                                            <input type="text" class="form-control date" id="alert1" data-toggle="date-picker" data-single-date-picker="true" value="">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="misc1">Memo 1:</label>
                                            <textarea class="form-control" id="memo1" rows="3"></textarea>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-4">
                                            <label for="misc1">Misc 2:</label>
                                            <textarea class="form-control" id="misc2" rows="3"></textarea>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Alert 2</label>
                                            <input type="text" class="form-control date" id="alert2" data-toggle="date-picker" data-single-date-picker="true" value="">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="misc1">Memo 2:</label>
                                            <textarea class="form-control" id="memo2" rows="3"></textarea>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-4">
                                            <label for="misc1">Misc 3:</label>
                                            <textarea class="form-control" id="misc3" rows="3"></textarea>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Alert 3</label>
                                            <input type="text" class="form-control date" id="alert3" data-toggle="date-picker" data-single-date-picker="true" value="">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="misc1">Memo 3:</label>
                                            <textarea class="form-control" id="memo3" rows="3"></textarea>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>

                                    <!-- end body content -->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->

                        </form>

                    </div>
                    <!-- end col-12 -->
                </div> <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2018 © Hyper - Coderthemes.com
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-md-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- App js -->
<script src="assets/js/app.min.js"></script>

<!-- third party js -->
<script src="assets/js/vendor/jquery-ui.min.js"></script>
<!-- third party js ends -->

</body>
</html>