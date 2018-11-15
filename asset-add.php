<?php include('header.php'); ?>
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

                        <div id="general-accordion-opt" class="custom-accordion mb-4">

                            <div class="card mb-0">
                                <div class="card-header" id="headingOneGeneral">
                                    <h5 class="m-0">
                                        <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse"
                                           href="#collapseOneGeneral" aria-expanded="false"
                                           aria-controls="collapseOneGeneral">
                                            Add more information <span class="float-right"><i
                                                        class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOneGeneral" class="collapse" aria-labelledby="headingOneGeneral"
                                     data-parent="#general-accordion-opt" style="">
                                    <div class="card-body">

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

                                    </div>
                                </div>
                            </div> <!-- end card-->

                        </div>

                        <hr class="mb-4">

                        <div id="miscellaneous-accordion-opt" class="custom-accordion mb-4">

                            <div class="card mb-0">
                                <div class="card-header" id="headingOneMiscellaneous">
                                    <h5 class="m-0">
                                        <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse"
                                           href="#collapseOneMiscellaneous" aria-expanded="false"
                                           aria-controls="collapseOneMiscellaneous">
                                            Miscellaneous Information <span class="float-right"><i
                                                        class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOneMiscellaneous" class="collapse" aria-labelledby="headingOneMiscellaneous"
                                     data-parent="#miscellaneous-accordion-opt" style="">
                                    <div class="card-body">

                                        <div class="row">

                                            <div class="form-group col-md-4">
                                                <label for="misc1">Misc 1:</label>
                                                <textarea class="form-control" id="misc1" rows="3"></textarea>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Alert 1</label>
                                                <input type="text" class="form-control date" id="alert1" data-toggle="date-picker"
                                                       data-single-date-picker="true" value="">
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
                                                <input type="text" class="form-control date" id="alert2" data-toggle="date-picker"
                                                       data-single-date-picker="true" value="">
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
                                                <input type="text" class="form-control date" id="alert3" data-toggle="date-picker"
                                                       data-single-date-picker="true" value="">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="misc1">Memo 3:</label>
                                                <textarea class="form-control" id="memo3" rows="3"></textarea>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end card-->

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
<?php include('footer.php'); ?>