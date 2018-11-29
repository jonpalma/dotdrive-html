<form action="#" class="needs-validation" novalidate>

    <h4 class="page-title">DOT Inspections and Expirations</h4>

    <div class="row">

        <div class="form-group col-4">
            <label>Cab Card Expiration</label>
        </div>

        <div class="form-group col-6">
            <input type="text" class="form-control date" id="cabcardexpiration" data-toggle="date-picker"
                   data-single-date-picker="true">
        </div>

        <div class="form-group col-2 text-center">
            <a href="#docs-modal" role="button" data-toggle="modal" data-target="#docs-modal" class="mdi mdi-file"></a>
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
            <a href="#docs-modal" role="button" data-toggle="modal" data-target="#docs-modal" class="mdi mdi-file"></a>
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
            <a href="#docs-modal" role="button" data-toggle="modal" data-target="#docs-modal" class="mdi mdi-file"></a>
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
            <a href="#docs-modal" role="button" data-toggle="modal" data-target="#docs-modal" class="mdi mdi-file"></a>
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
            <a href="#docs-modal" role="button" data-toggle="modal" data-target="#docs-modal" class="mdi mdi-file"></a>
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

<?php include('modules/views/fileUploadModal.php') ?>
