<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
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
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                    <!-- start body content -->

                    <div class="row">

                        <div class="col-lg-2 col-sm-3 mb-2 mb-sm-0">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <span class="nav-link bg-light">Details</span>
                                <a class="nav-link active show" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                   role="tab" aria-controls="v-pills-1" aria-selected="true">
                                    <span class="d-lg-block">Information</span>
                                </a>
                                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                   aria-controls="v-pills-2" aria-selected="false">
                                    <span class="d-lg-block">Employment History</span>
                                </a>
                                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                                   aria-controls="v-pills-3" aria-selected="false">
                                    <span class="d-lg-block">Employee Training</span>
                                </a>
                                <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
                                   aria-controls="v-pills-4" aria-selected="false">
                                    <span class="d-lg-block">Usage Logs</span>
                                </a>
                                <span class="nav-link bg-light">Department of Transportation</span>
                                <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab"
                                   aria-controls="v-pills-5" aria-selected="false">
                                    <span class="d-lg-block">Licenses</span>
                                </a>
                                <a class="nav-link" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab"
                                   aria-controls="v-pills-6" aria-selected="false">
                                    <span class="d-lg-block">DOT Paperwork</span>
                                </a>
                                <a class="nav-link" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab"
                                   aria-controls="v-pills-7" aria-selected="false">
                                    <span class="d-lg-block">MVR Reviews</span>
                                </a>
                                <a class="nav-link" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab"
                                   aria-controls="v-pills-8" aria-selected="false">
                                    <span class="d-lg-block">MVR Violations</span>
                                </a>
                                <a class="nav-link" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab"
                                   aria-controls="v-pills-9" aria-selected="false">
                                    <span class="d-lg-block">Roadside Inspection</span>
                                </a>
                                <span class="nav-link bg-light">Human Resources</span>
                                <a class="nav-link" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab"
                                   aria-controls="v-pills-10" aria-selected="false">
                                    <span class="d-lg-block">HR Paperwork</span>
                                </a>
                                <a class="nav-link" id="v-pills-11-tab" data-toggle="pill" href="#v-pills-11" role="tab"
                                   aria-controls="v-pills-11" aria-selected="false">
                                    <span class="d-lg-block">HR Reviews</span>
                                </a>
                                <a class="nav-link" id="v-pills-12-tab" data-toggle="pill" href="#v-pills-12" role="tab"
                                   aria-controls="v-pills-12" aria-selected="false">
                                    <span class="d-lg-block">Medical Reviews</span>
                                </a>
                                <a class="nav-link" id="v-pills-13-tab" data-toggle="pill" href="#v-pills-13" role="tab"
                                   aria-controls="v-pills-13" aria-selected="false">
                                    <span class="d-lg-block">Substance Testing</span>
                                </a>
                                <a class="nav-link" id="v-pills-14-tab" data-toggle="pill" href="#v-pills-14" role="tab"
                                   aria-controls="v-pills-14" aria-selected="false">
                                    <span class="d-lg-block">Accidents Report</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-10 col-sm-9">

                            <div class="tab-content" id="v-pills-tabContent">

                                <!-- FIRST TAB -->
                                <div class="tab-pane fade active show" id="v-pills-1" role="tabpanel"
                                     aria-labelledby="v-pills-1-tab">
                                    <?php include('employee-add-1.php'); ?>
                                </div>

                                <!-- SECOND TAB -->
                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                     aria-labelledby="v-pills-2-tab">
                                    <?php include('employee-add-2.php'); ?>
                                </div>

                                <!-- THIRD TAB -->
                                <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                     aria-labelledby="v-pills-3-tab">
                                    <?php include('employee-add-3.php'); ?>
                                </div>

                                <!-- FOURTH TAB -->
                                <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                     aria-labelledby="v-pills-4-tab">
                                    <?php include('employee-add-4.php'); ?>
                                </div>

                                <!-- FIFTH TAB -->
                                <div class="tab-pane fade" id="v-pills-5" role="tabpanel"
                                     aria-labelledby="v-pills-5-tab">
                                    <?php include('employee-add-5.php'); ?>
                                </div>

                                <!-- SIXTH TAB -->
                                <div class="tab-pane fade" id="v-pills-6" role="tabpanel"
                                     aria-labelledby="v-pills-6-tab">
                                    <?php include('employee-add-6.php'); ?>
                                </div>

                                <!-- SEVENTH TAB -->
                                <div class="tab-pane fade" id="v-pills-7" role="tabpanel"
                                     aria-labelledby="v-pills-7-tab">
                                    <?php include('employee-add-7.php'); ?>
                                </div>

                                <!-- EIGHTH TAB -->
                                <div class="tab-pane fade" id="v-pills-8" role="tabpanel"
                                     aria-labelledby="v-pills-8-tab">
                                    <?php include('employee-add-8.php'); ?>
                                </div>

                                <!-- NINTH TAB -->
                                <div class="tab-pane fade" id="v-pills-9" role="tabpanel"
                                     aria-labelledby="v-pills-9-tab">
                                    <?php include('employee-add-9.php'); ?>
                                </div>

                                <!-- TENTH TAB -->
                                <div class="tab-pane fade" id="v-pills-10" role="tabpanel"
                                     aria-labelledby="v-pills-10-tab">
                                    <?php include('employee-add-10.php'); ?>
                                </div>

                                <!-- ELEVENTH TAB -->
                                <div class="tab-pane fade" id="v-pills-11" role="tabpanel"
                                     aria-labelledby="v-pills-11-tab">
                                    <?php include('employee-add-11.php'); ?>
                                </div>

                                <!-- TWELFTH TAB -->
                                <div class="tab-pane fade" id="v-pills-12" role="tabpanel"
                                     aria-labelledby="v-pills-12-tab">
                                    <?php include('employee-add-12.php'); ?>
                                </div>

                                <!-- THIRTEENTH TAB -->
                                <div class="tab-pane fade" id="v-pills-13" role="tabpanel"
                                     aria-labelledby="v-pills-13-tab">
                                    <?php include('employee-add-13.php'); ?>
                                </div>

                                <!-- FOURTEENTH TAB -->
                                <div class="tab-pane fade" id="v-pills-14" role="tabpanel"
                                     aria-labelledby="v-pills-14-tab">
                                    <?php include('employee-add-14.php'); ?>
                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- end body content -->

                </div> <!-- end card body-->
            </div> <!-- end card -->

        </div>
        <!-- end col-12 -->
    </div> <!-- end row -->
<?php include('footer.php'); ?>