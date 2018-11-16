<form action="#" class="needs-validation" novalidate>

    <h4 class="header-title mb-3">Employment Information</h4>

    <div class="row">

        <div class="form-group col-md-6">
            <label for="example-select">Asset Operated</label>
            <select class="form-control" id="assetoperated" required>
                <option selected="selected" value=""></option>
                <option>Owner 3 (3)</option>
                <option>Trailer 53171 (53171)</option>
                <option>Trailer 53184 (53184)</option>
                <option>Trailer 53321 (53321)</option>
                <option>Trailer 53947 (53947)</option>
                <option>Trailer 54257 (54257)</option>
                <option>Trailer 54281 (54281)</option>
                <option>Trailer 54298 (54298)</option>
                <option>Trailer 54471 (54471)</option>
                <option>Trailer 54473 (54473)</option>
                <option>Trailer 8608 (8608)</option>
                <option>Trailer 8620 (8620)</option>
                <option>Truck 1206 (1206)</option>
                <option>Truck 1207 (1207)</option>
                <option>Truck 1208 (1208)</option>
                <option>Truck 1209 (1209)</option>
                <option>Truck 1210 (1210)</option>
                <option>Truck 1211 (1211)</option>
                <option>Truck 1212 (1212)</option>

            </select>
        </div>

        <div class="form-group col-md-6">
            <label>State Operated</label>
            <select class="form-control" id="stateoperated">
                <option selected disabled></option>
                <option>Alabama</option>
                <option>Alaska</option>
                <option>Arizona</option>
                <option>Arkansas</option>
                <option>California</option>
                <option>Colorado</option>
                <option>Connecticut</option>
                <option>Delaware</option>
                <option>District of Columbia</option>
                <option>Florida</option>
                <option>Georgia</option>
                <option>Hawaii</option>
                <option>Idaho</option>
                <option>Illinois</option>
                <option>Indiana</option>
                <option>Iowa</option>
                <option>Kansas</option>
                <option>Kentucky</option>
                <option>Louisiana</option>
                <option>Maine</option>
                <option>Maryland</option>
                <option>Massachusetts</option>
                <option>Michigan</option>
                <option>Minnesota</option>
                <option>Mississippi</option>
                <option>Missouri</option>
                <option>Montana</option>
                <option>Nebraska</option>
                <option>Nevada</option>
                <option>New Hampshire</option>
                <option>New Jersey</option>
                <option>New Mexico</option>
                <option>New York</option>
                <option>North Carolina</option>
                <option>North Dakota</option>
                <option>Ohio</option>
                <option>Oklahoma</option>
                <option>Oregon</option>
                <option>Pennsylvania</option>
                <option>Rhode Island</option>
                <option>South Carolina</option>
                <option>South Dakota</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Utah</option>
                <option>Vermont</option>
                <option>Virginia</option>
                <option>Washington</option>
                <option>West Virginia</option>
                <option>Wisconsin</option>
                <option>Wyoming</option>
            </select>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Start Usage Date</label>
            <input type="text" class="form-control date" id="startusagedate"
                   data-toggle="date-picker" data-single-date-picker="true"
                   required>
        </div>

        <div class="form-group col-md-6">
            <label>Start Odometer Reading</label>
            <input type="text" id="startodometerreading" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Start Hours Reading</label>
            <input type="text" id="starthoursreading" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Fuel Usage (gal)</label>
            <input type="text" id="fuelusage" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Fuel Cost</label>
            <input type="text" id="fuelcost" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>End Usage Date</label>
            <input type="text" class="form-control date" id="endusagedate"
                   data-toggle="date-picker" data-single-date-picker="true"
                   required>
        </div>

        <div class="form-group col-md-6">
            <label>End Odometer Reading</label>
            <input type="text" id="endodometerreading" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>End Hours Reading</label>
            <input type="text" id="endhoursreading" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-12">
            <button type="submit" class="btn btn-block btn-primary">Save</button>
        </div>

    </div>

</form>
