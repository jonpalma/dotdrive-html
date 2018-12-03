<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Safety</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Employees</a></li>
                        <li class="breadcrumb-item active">Application</li>
                    </ol>
                </div>
                <h4 class="page-title">Employment Application</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                    <!-- start body content -->
                    <form action="employee-application-4.php" class="needs-validation" novalidate>

                        <h4 class="page-title">Personal Information</h4>

                        <div class="row">

                            <div class="form-group col-lg-6 col-md-6">
                                <label>Are you legally eligible for employment in the United States?</label>
                                <select class="form-control" id="suffix" required>
                                    <option selected disabled></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-6">
                                <label>Are you currently employed?  </label>
                                <select class="form-control" id="suffix" required>
                                    <option selected disabled></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-6">
                                <label>Do you read, write, and speak English?</label>
                                <select class="form-control" id="suffix" required>
                                    <option selected disabled></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-6">
                                <label for="suffix">Have you ever worked for this company before?   </label>
                                <select class="form-control" id="suffix" required>
                                    <option selected disabled></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-lg-6 col-md-6">
                                <label>Do you have a current TWIC (Transportation Worker Identification Credentials) card?</label>
                                <select class="form-control" id="suffix" required>
                                    <option selected disabled></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>Please enter the names of any relatives employed here:</label>
                                <input type="text" id="street1" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>Have you ever been known by any other name? if YES, please enter:</label>
                                <input type="text" id="street1" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>How did you hear about us?</label>
                                <select class="form-control" id="suffix" required>
                                    <option selected disabled></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>

                        </div>

                        <label>
                                <h4 class="page-title">Driving Experience</h4>

                             If no experience in a class, enter "NONE".
                        </label>

                        <div class="row">

                            <div class="form-group col-lg-6 col-md-6">
                                <label>Straight Truck </label>
                                <input type="text" class="form-control date" id=""  required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label>Tractor and Semi-Trailer </label>
                                <input type="text" class="form-control date" id=""  required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label>Tractor - Two Trailers </label>
                                <select class="form-control" id="suffix" required>
                                    <option selected disabled></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label>Other </label>
                                <input type="text" class="form-control date" id=""  >
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-block btn-primary">Next</button>
                            </div>

                        </div>

                    </form>


                    <!-- end body content -->

                </div> <!-- end card body-->
            </div> <!-- end card -->

        </div>
        <!-- end col-12 -->
    </div> <!-- end row -->
<?php include('footer.php'); ?>