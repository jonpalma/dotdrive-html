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
                <form action="employee-application-10.php" class="needs-validation" novalidate>

                    <h4>10 - Year Employment History</h4>

                    <hr class="mb-4">

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Have you been unemployed at any time within the last 10 years?</label>
                            <select class="form-control" id="unemployed" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="d-none">

                        <button type="button" class="btn btn-icon btn-success" data-toggle="modal"
                                data-target="#employment-application-modal"><i
                                    class="mdi mdi-plus"></i></button>
                        <hr class="mb-4">
                        <div class="table-responsive">
                            <table class="table table-centered mb-0">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Star date</th>
                                    <th>End date</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Description</td>
                                    <td>Type</td>
                                    <td>01/11/2017</td>
                                    <td>01/11/2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="" type="button" id="dropdownMenu2"
                                               data-toggle="dropdown"
                                               aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical-circle"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <button class="dropdown-item" type="button"><i
                                                            class="mdi mdi-square-edit-outline"></i> Edit
                                                </button>
                                                <button class="dropdown-item" type="button"><i
                                                            class="mdi mdi-delete"></i> Delete
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="modal fade" id="employment-application-modal" tabindex="-1" role="dialog"
                             aria-labelledby="employment-application-modal-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="employment-application-modal-label">Employment
                                            Information</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            ×
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="col-12">
                                            <h4 class="page-title">Unemployment Information</h4>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-lg-6 col-md-6">
                                                <label>* Start date</label>
                                                <input type="text" class="form-control date" id="startdate"
                                                       data-toggle="date-picker"
                                                       data-single-date-picker="true" required disabled>
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6">
                                                <label>* End date</label>
                                                <input type="text" class="form-control date" id="enddate"
                                                       data-toggle="date-picker"
                                                       data-single-date-picker="true" required disabled>
                                            </div>

                                            <div class="form-group col-12">
                                                <label for="comments">Comments</label>
                                                <textarea class="form-control" id="comments" rows="3"
                                                          disabled></textarea>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="form-group col-6">
                                                <button type="submit" class="btn btn-block btn-primary"
                                                        class="close"
                                                        data-dismiss="modal" aria-hidden="true">Insert
                                                </button>
                                            </div>

                                            <div class="form-group col-6">
                                                <button type="submit" class="btn btn-block btn-danger" class="close"
                                                        data-dismiss="modal" aria-hidden="true">Cancel
                                                </button>
                                            </div>

                                        </div>

                                    </div>

                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
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
<script>
    $('#unemployed').change(function () {
        enableInp($(this), 1, '', true);
    });
</script>