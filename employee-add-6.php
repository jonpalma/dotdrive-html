<form action="#" class="needs-validation" novalidate>

    <h4 class="header-title mb-3">Employment Information</h4>

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
                <option>Verification of medical examiner from National Registry (319.23 (m) (2) Until 6/22/2018</option>
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
