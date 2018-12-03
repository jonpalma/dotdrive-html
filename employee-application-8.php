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
                    <form action="employee-application-9.php" class="needs-validation" novalidate>

                        <div class="row">

                            <div class="form-group col-lg-6 col-md-6">
                                <label>Have you attended a school (not related to truck driving) in the last 10 Years?     </label>
                                <select class="form-control" id="suffix" required>
                                    <option selected disabled></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-6">
                                <label>If YES, enter name:  </label> 
                                <input type="text" id="street1" class="form-control" required>
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