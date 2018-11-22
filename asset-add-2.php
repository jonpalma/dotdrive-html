<form action="#" class="needs-validation" novalidate>

    <h4 class="header-title mb-3">Purchase Information</h4>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Purchased From</label>
            <input type="text" id="purchasedfrom" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Date Purchased</label>
            <input type="text" class="form-control date" id="datepurchased" data-toggle="date-picker"
                   data-single-date-picker="true">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Date Sold</label>
            <input type="text" class="form-control date" id="datesold" data-toggle="date-picker"
                   data-single-date-picker="true">
        </div>

        <div class="form-group col-md-6">
            <label for="acquiredby">Acquired By</label>
            <select class="form-control" id="acquiredby">
                <option selected disabled></option>
                <option>Owned</option>
                <option>Leased</option>
                <option>Donated</option>
            </select>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Acquisition Purchased</label>
            <input type="text" class="form-control date" id="acquisitiondate" data-toggle="date-picker"
                   data-single-date-picker="true">
        </div>

        <div class="form-group col-md-6">
            <label>Cost</label>
            <input type="text" id="cost" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Trade-in ID</label>
            <input type="text" id="tradeinid" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Trade-in Value</label>
            <input type="text" id="tradeinvalue" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Purchased Price</label>
            <input type="text" id="purchasedprice" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Disposal Date</label>
            <input type="text" class="form-control date" id="disposaldate" data-toggle="date-picker"
                   data-single-date-picker="true">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-12">
            <button type="submit" class="btn btn-block btn-primary">Save</button>
        </div>

    </div>

</form>
