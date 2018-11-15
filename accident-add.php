<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Goytia</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Accident</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
                <h4 class="page-title">Add accident</h4>
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

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label>Claim Date</label>
                                <input type="text" class="form-control date" id="claimdate" data-toggle="date-picker"
                                       data-single-date-picker="true" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Case Name</label>
                                <input type="text" id="casename" class="form-control" required>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label>Case Number</label>
                                <input type="text" id="casenumber" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="example-select">Privacy Case</label>
                                <select class="form-control" id="privacycase" required>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label>Date of Injury / Onset of Illness</label>
                                <input type="text" class="form-control date" id="dateofinjury" data-toggle="date-picker"
                                       data-single-date-picker="true" required>
                            </div>

                        </div>

                        <div id="claim-accordion-opt" class="custom-accordion mb-4">

                            <div class="card mb-0">
                                <div class="card-header" id="headingOneClaim">
                                    <h5 class="m-0">
                                        <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse"
                                           href="#collapseOneClaim" aria-expanded="false"
                                           aria-controls="collapseOneClaim">
                                            Add more information <span class="float-right"><i
                                                        class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOneClaim" class="collapse" aria-labelledby="headingOneClaim"
                                     data-parent="#claim-accordion-opt" style="">
                                    <div class="card-body">

                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label for="example-select">Insurance Carrier</label>
                                                <select class="form-control" id="insurancecarrier">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>

                                            <div class="form-group mt-3 col-md-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="activeclaim">
                                                    <label class="custom-control-label" for="activeclaim">Active Claim</label>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div> <!-- end card-->

                        </div>

                        <hr class="mb-4">

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="example-select">Claimant</label>
                                <select class="form-control" id="claimant">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>

                        </div>

                        <hr class="mb-4">

                        <h4 class="header-title mb-3">Originator Information</h4>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label>Completed By:</label>
                                <input type="text" id="completedby" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" id="title" class="form-control" required>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label>US Telephone</label>
                                <input type="text" class="form-control" data-toggle="input-mask"
                                       data-mask-format="(000) 000-0000" maxlength="14" required>
                                <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-12">
                                <a class="btn btn-block btn-primary" href="accident-add-2.php">Save & Next</a>
                            </div>

                        </div>

                        <!-- end body content -->

                    </div> <!-- end card body-->
                </div> <!-- end card -->

            </form>

        </div>
        <!-- end col-12 -->
    </div> <!-- end row -->
<?php include('footer.php'); ?>