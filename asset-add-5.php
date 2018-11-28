<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#dot-requirements-modal"><i
        class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Date</th>
            <th>Documents</th>
            <th>Advance</th>
            <th>Status</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>Cab Card Expiration</td>
            <td>01/11/2018</td>
            <td>3 - 5</td>
            <td>
                <div class="progress progress-sm">
                    <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 60%"
                         aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
                </div>
            </td>
            <td><i class="mdi mdi-circle text-warning"></i> Incomplete</td>
            <td>
                <div class="dropdown">
                    <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="mdi mdi-dots-vertical-circle"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button"><i class="mdi mdi-square-edit-outline"></i> Edit
                        </button>
                        <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="modal fade" id="dot-requirements-modal" tabindex="-1" role="dialog"
     aria-labelledby="dot-requirements-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="dot-requirements-modal-label">License</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <h4 class="page-title">DOT Inspections and Expirations</h4>

                    <div class="row">

                        <div class="col-2 offset-10 text-center">
                            <label>Alert On</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-4">
                            <label>Cab Card Expiration</label>
                        </div>

                        <div class="form-group col-6">
                            <input type="text" class="form-control date" id="cabcardexpiration" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                        <div class="form-group col-2 text-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="alerton1">
                                <label class="custom-control-label" for="alerton1"></label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-4">
                            <label>DOT Inspection Due</label>
                        </div>

                        <div class="form-group col-6">
                            <input type="text" class="form-control date" id="dotinspectiondue" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                        <div class="form-group col-2 text-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="alerton2">
                                <label class="custom-control-label" for="alerton2"></label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-4">
                            <label>Overweight Expiration</label>
                        </div>

                        <div class="form-group col-6">
                            <input type="text" class="form-control date" id="overweightexpiration" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                        <div class="form-group col-2 text-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="alerton3">
                                <label class="custom-control-label" for="alerton3"></label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-4">
                            <label>Heavy Highway Tax Expiration</label>
                        </div>

                        <div class="form-group col-6">
                            <input type="text" class="form-control date" id="heavyhighwaytaxexpiration" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                        <div class="form-group col-2 text-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="alerton4">
                                <label class="custom-control-label" for="alerton4"></label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-10">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ishazmatvehicle">
                                <label class="custom-control-label" for="ishazmatvehicle">Is Hazmat Vehicle</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-4">
                            <label>Hazmat Expiration</label>
                        </div>

                        <div class="form-group col-6">
                            <input type="text" class="form-control date" id="hazmatexpiration" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                        <div class="form-group col-2 text-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="alerton5">
                                <label class="custom-control-label" for="alerton5"></label>
                            </div>
                        </div>

                    </div>

                    <h4 class="page-title">DOT Weight Requirements</h4>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Title Weight</label>
                            <input type="text" id="titleweight" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>License Weight</label>
                            <input type="text" id="licenseweight" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Gross Vehicle Weight Rating</label>
                            <input type="text" id="grossvehicleweightrating" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>

                    </div>

                </form>

                <?php include('modules/views/fileUpload.php') ?>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>