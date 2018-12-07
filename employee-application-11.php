<?php include('header-employee.php'); ?>
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

                <form action="employee-application-12.php" class="needs-validation" novalidate>

                    <h4 class="page-title">Motor Vehicle Record</h4>

                    <hr class="mb-4">

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* 1. Has any license, permit or privilege ever been denied, suspended or revoked for any
                                reason?</label>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <select class="form-control" id="denied" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="row d-none">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Date</label>
                            <input type="text" class="form-control date" id="date1" data-toggle="date-picker"
                                   data-single-date-picker="true" required disabled>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label for="explanation1">* Please Explain</label>
                            <textarea class="form-control" id="comments" rows="3" disabled required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* 2. Have you ever been convicted of driving during license suspension or revocation, or
                                driving without a valid license or an expired license, or are any charges
                                pending?</label>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <select class="form-control" id="conviction" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="row d-none">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Date</label>
                            <input type="text" class="form-control date" id="date2" data-toggle="date-picker"
                                   data-single-date-picker="true" required disabled>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label for="explanation2">* Please Explain</label>
                            <textarea class="form-control" id="comments" rows="3" disabled required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* 3. Have you ever been convicted for any alcohol or controlled substance related
                                offense while operation a motor vehicle, or are any charges pending?</label>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <select class="form-control" id="controlledsubstance" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="row d-none">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Date</label>
                            <input type="text" class="form-control date" id="date3" data-toggle="date-picker"
                                   data-single-date-picker="true" required disabled>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label for="explanation3">* Please Explain</label>
                            <textarea class="form-control" id="comments" rows="3" disabled required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* 4. Have you ever been convicted for possession, sale or transfer of an illegal
                                substance (including but not limited to, marijuana, amphetamines, or
                                derivatives thereof), or are any charges pending?</label>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <select class="form-control" id="illegalsubstance" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="row d-none">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Date</label>
                            <input type="text" class="form-control date" id="date4" data-toggle="date-picker"
                                   data-single-date-picker="true" required disabled>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label for="explanation4">* Please Explain</label>
                            <textarea class="form-control" id="comments" rows="3" disabled required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* 5. Have you ever been convicted of reckless driving, careless driving or careless
                                operation of a motor vehicle, or are any charges pending?</label>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <select class="form-control" id="reckless" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="row d-none">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Date</label>
                            <input type="text" class="form-control date" id="date5" data-toggle="date-picker"
                                   data-single-date-picker="true" required disabled>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label for="explanation5">* Please Explain</label>
                            <textarea class="form-control" id="comments" rows="3" disabled required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* 6. Have you ever tested positive, or refused to test on a pre-employment drug or
                                alcohol test by an employer to whom you applied, but did not obtain safety-sensitive
                                transportation work covered by DOT agency drug and alcohol testing rules in pas
                                three years, or have you ever tested positive or refused to test on any
                                DOT-mandated drug or alcohol test?</label>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <select class="form-control" id="test" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="row d-none">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Date</label>
                            <input type="text" class="form-control date" id="date6" data-toggle="date-picker"
                                   data-single-date-picker="true" required disabled>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label for="explanation6">* Please Explain</label>
                            <textarea class="form-control" id="comments" rows="3" disabled required></textarea>
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
    $('#denied').change(function () {
        enableInp($(this), 1, '', true);
    });
    $('#conviction').change(function () {
        enableInp($(this), 1, '', true);
    });
    $('#controlledsubstance').change(function () {
        enableInp($(this), 1, '', true);
    });
    $('#illegalsubstance').change(function () {
        enableInp($(this), 1, '', true);
    });
    $('#reckless').change(function () {
        enableInp($(this), 1, '', true);
    });
    $('#test').change(function () {
        enableInp($(this), 1, '', true);
    });
</script>

