<form action="#" class="needs-validation" novalidate>

    <h4 class="header-title mb-3">Employment Information</h4>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Start Date</label>
            <input type="text" class="form-control date" id="startdate"
                   data-toggle="date-picker" data-single-date-picker="true"
                   required>
        </div>

        <div class="form-group col-md-6">
            <label>End Date</label>
            <input type="text" class="form-control date" id="enddate"
                   data-toggle="date-picker" data-single-date-picker="true">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Company Name</label>
            <input type="text" id="companyname" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="misc1">Reason for Leaving</label>
            <textarea class="form-control" id="reasonforleaving" rows="3"></textarea>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-12">
            <button type="submit" class="btn btn-block btn-primary">Save</button>
        </div>

    </div>

</form>
