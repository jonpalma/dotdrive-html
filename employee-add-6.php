<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#dot-paperwork-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Date</th>
            <th>Case Name</th>
            <th>Claim No.</th>
            <th>Advance</th>
            <th>Status</th>
            <th>Job title</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>01/11/2018</td>
            <td>Accident 1</td>
            <td>800HOO332</td>
            <td>
                <div class="progress progress-sm">
                    <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%"
                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td><i class="mdi mdi-circle text-success"></i> Complete</td>
            <td>LLD</td>
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
                <h4 class="modal-title" id="dot-paperwork-modal-label">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <h4 class="header-title mb-3">DOT Paperwork</h4>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="example-select">Paperwork</label>
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
                            <label for="example-select">Status</label>
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

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


