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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Employees</a></li>
                                    <li class="breadcrumb-item active">Add</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add employee</h4>
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

                                    <h4 class="header-title mb-3">Employment Information</h4>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Employee ID</label>
                                            <input type="text" id="employeeid" class="form-control" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Employee type</label>
                                            <select class="form-control" id="employeetype" required>
                                                <option>Administrative</option>
                                                <option>CDL</option>
                                                <option>CDL Driver</option>
                                                <option>Driver</option>
                                                <option>Mechanic</option>
                                                <option>Non-CDL</option>
                                                <option>Operations</option>
                                                <option>Regular Employee</option>
                                                <option>SAles</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group mt-3 col-md-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="activeemployee">
                                                <label class="custom-control-label" for="activeemployee">Active Employee</label>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3 col-md-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="issupervisor">
                                                <label class="custom-control-label" for="issupervisor">Is Supervisor</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Employment Status</label>
                                            <select class="form-control" id="employmentstatus" required>
                                                <option>Full-time</option>
                                                <option>Part-time</option>
                                                <option>Seasonal</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Driver Type</label>
                                            <select class="form-control" id="drivertype" required>
                                                <option>CDL</option>
                                                <option>Non-CDL</option>
                                                <option>None</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group mt-3 col-md-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="isapprentice">
                                                <label class="custom-control-label" for="isapprentice">Is Apprentice</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Hire Date</label>
                                            <input type="text" class="form-control date" id="hiredate" data-toggle="date-picker" data-single-date-picker="true" required>
                                        </div>

                                    </div>

                                    <hr class="mb-4">

                                    <h4 class="header-title mb-3">Employee Information</h4>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Social Security Number</label>
                                            <input type="text" id="socialsecurity" class="form-control" data-toggle="input-mask" data-mask-format="000-00-0000" maxlength="9">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>First Name</label>
                                            <input type="text" id="firstname" class="form-control" required>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Middle</label>
                                            <input type="text" id="middlename" class="form-control" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Last Name</label>
                                            <input type="text" id="lastname" class="form-control" required>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Address Line 1</label>
                                            <input type="text" id="addressline1" class="form-control" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Address Line 2</label>
                                            <input type="text" id="addressline2" class="form-control">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>City</label>
                                            <input type="text" id="city" class="form-control" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>State</label>
                                            <select class="form-control select2" id="state" required data-toggle="select2">
                                                <option>Alabama</option>
                                                <option>Alaska</option>
                                                <option>Arizona</option>
                                                <option>Arkansas</option>
                                                <option>California</option>
                                                <option>Colorado</option>
                                                <option>Connecticut</option>
                                                <option>Delaware</option>
                                                <option>District of Columbia</option>
                                                <option>Florida</option>
                                                <option>Georgia</option>
                                                <option>Hawaii</option>
                                                <option>Idaho</option>
                                                <option>Illinois</option>
                                                <option>Indiana</option>
                                                <option>Iowa</option>
                                                <option>Kansas</option>
                                                <option>Kentucky</option>
                                                <option>Louisiana</option>
                                                <option>Maine</option>
                                                <option>Maryland</option>
                                                <option>Massachusetts</option>
                                                <option>Michigan</option>
                                                <option>Minnesota</option>
                                                <option>Mississippi</option>
                                                <option>Missouri</option>
                                                <option>Montana</option>
                                                <option>Nebraska</option>
                                                <option>Nevada</option>
                                                <option>New Hampshire</option>
                                                <option>New Jersey</option>
                                                <option>New Mexico</option>
                                                <option>New York</option>
                                                <option>North Carolina</option>
                                                <option>North Dakota</option>
                                                <option>Ohio</option>
                                                <option>Oklahoma</option>
                                                <option>Oregon</option>
                                                <option>Pennsylvania</option>
                                                <option>Rhode Island</option>
                                                <option>South Carolina</option>
                                                <option>South Dakota</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Utah</option>
                                                <option>Vermont</option>
                                                <option>Virginia</option>
                                                <option>Washington</option>
                                                <option>West Virginia</option>
                                                <option>Wisconsin</option>
                                                <option>Wyoming</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Zip Code</label>
                                            <input type="text" id="zipcode" class="form-control" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Work Phone</label>
                                            <input type="text" id="workphone" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000" maxlength="14">
                                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Extn</label>
                                            <input type="text" id="extn" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Home Phone</label>
                                            <input type="text" id="homephone" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000" maxlength="14">
                                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Cellphone</label>
                                            <input type="text" id="cellphone" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000" maxlength="14">
                                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Pager</label>
                                            <input type="text" id="pager" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000" maxlength="14">
                                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Daytime Phone</label>
                                            <select class="form-control" id="daytimephone">
                                                <option>Cell</option>
                                                <option>Fax</option>
                                                <option>Home</option>
                                                <option>Pager</option>
                                                <option>Work</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Nighttime Phone</label>
                                            <select class="form-control" id="nighttimephone">
                                                <option>Cell</option>
                                                <option>Fax</option>
                                                <option>Home</option>
                                                <option>Pager</option>
                                                <option>Work</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Date of Birth</label>
                                            <input type="text" class="form-control date" id="dateofbirth" data-toggle="date-picker" data-single-date-picker="true" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Emergency Contact</label>
                                            <input type="text" id="emergencycontact" class="form-control">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Emergency Daytime Phone</label>
                                            <input type="text" id="emergencydaytimephone" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000" maxlength="14">
                                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Emergency Nighttime Phone</label>
                                            <input type="text" id="emergencynighttimephone" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000" maxlength="14">
                                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Gender</label>
                                            <select class="form-control" id="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Marital Status</label>
                                            <select class="form-control" id="maritalstatus">
                                                <option>Divorced</option>
                                                <option>Married</option>
                                                <option>Separated</option>
                                                <option>Single</option>
                                                <option>Widow</option>
                                            </select>
                                        </div>

                                    </div>

                                    <hr class="mb-4">

                                    <h4 class="header-title mb-3">Location Information</h4>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Office Location</label>
                                            <select class="form-control" id="officelocation">
                                                <option>S and R Express Inc</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Department</label>
                                            <select class="form-control" id="department">
                                                <option>Account Manager</option>
                                                <option>Administrative</option>
                                                <option>Drivers</option>
                                                <option>Operations</option>
                                                <option>Sales</option>
                                                <option>Warehouse</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Supervisor</label>
                                            <select class="form-control" id="supervisor">
                                                <option>Quinonez, Carlos</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="example-select">Job Title</label>
                                            <select class="form-control" id="jobtitle">
                                                <option>CDL Driver</option>
                                                <option>Clerical</option>
                                                <option>Dispatcher</option>
                                                <option>Driver</option>
                                                <option>Laborer</option>
                                                <option>Mechanic</option>
                                                <option>Office Manager</option>
                                                <option>Operations Manager</option>
                                                <option>Sales</option>
                                                <option>Shop Manager</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Labor Union</label>
                                            <input type="text" id="laborunion" class="form-control">
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
