<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#mvr-reviews-modal"><i
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
<div class="modal fade" id="mvr-reviews-modal" tabindex="-1" role="dialog"
     aria-labelledby="mvr-reviews-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mvr-reviews-modal-label">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <h4 class="header-title mb-3">MVR Reviews</h4>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="reviewname">Review Name</label>
                            <select class="form-control" id="reviewname" required>
                                <option selected disabled></option>
                                <option>Annual Review</option>
                                <option>Date of last MVR</option>
                                <option>MVR Review</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Review Completed</label>
                            <input type="text" class="form-control date" id="reviewcompleted"
                                   data-toggle="date-picker" data-single-date-picker="true"
                                   required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="reviewcomments">Review Comments</label>
                            <textarea class="form-control" id="reviewcomments" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Next Review Due</label>
                            <input type="text" class="form-control date" id="nextreviewdue"
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


