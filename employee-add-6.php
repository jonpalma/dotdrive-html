<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#dot-paperwork-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Paperwork</th>
            <th>Status</th>
            <th>Clompleted date</th>
            <th>Status</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#3</a></td>
            <td>Annual Review (391.25)/Certificate of violations (391.27)</td>
            <td>1</td>
            <td>01/11/2018</td>
            <td><i class="mdi mdi-circle text-success"></i> Complete</td>
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
        <tr>
            <td><a href="#">#2</a></td>
            <td>DOT Application for employment (391.21)</td>
            <td>1</td>
            <td>01/11/2018</td>
            <td><i class="mdi mdi-circle text-success"></i> Complete</td>
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
        <tr>
            <td><a href="#">#1</a></td>
            <td>Last 7 days on-duty/hours of service</td>
            <td>1</td>
            <td>01/11/2018</td>
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
<div class="modal fade" id="dot-paperwork-modal" tabindex="-1" role="dialog"
     aria-labelledby="dot-paperwork-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="dot-paperwork-modal-label">DOT Paperwork</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="paperwork">Paperwork</label>
                            <select class="form-control" id="paperwork" required>
                                <option selected disabled></option>
                                <option>Annual Review (391.25)/Certificate of violations (391.27)</option>
                                <option>DOT Application for employment (391.21)</option>
                                <option>Last 7 days on-duty/hours of service</option>
                                <option>Medical Examiner’s Certificate (391.43 g)</option>
                                <option>MVR from each state license was held past 3 years (391.23)</option>
                                <option>Pre-employment back ground verification (391.23)</option>
                                <option>Pre-employment drug test results (382.301)</option>
                                <option>Previous employer substance background check</option>
                                <option>Road Test (391.31e) or certificate of equivalent acceptance (391.33)</option>
                                <option>Valid copy of CDL/License</option>
                                <option>Verification of medical examiner from National Registry (319.23 (m) (2) Until
                                    6/22/2018
                                </option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" required>
                                <option selected disabled></option>
                                <option>Grandfathered</option>
                                <option>N/A</option>
                                <option>Not Completed</option>
                                <option>Completed</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Completed Date</label>
                            <input type="text" class="form-control date" id="completeddate"
                                   data-toggle="date-picker" data-single-date-picker="true"
                                   required>
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


