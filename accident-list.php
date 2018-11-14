<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Goytia</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Accident</a></li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
                <h4 class="page-title">Accidents list</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
            <!-- start body content -->
            <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive-sm">
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
                                                <td>10</td>
                                                <td>01/11/2018</td>
                                                <td>Accident 1</td>
                                                <td>800HOO332</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><i class="mdi mdi-circle text-success"></i> Complete</td>
                                                <td>LLD</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>20/10/2018</td>
                                                <td>Accident 250</td>
                                                <td>700OI300</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar progress-lg bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><i class="mdi mdi-circle text-warning"></i> Shipped</td>
                                                <td>LLD</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            <!-- end body content -->
        <!-- end col-12 -->
    </div> <!-- end row -->
<?php include('footer.php'); ?>