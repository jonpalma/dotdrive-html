<form action="#" class="needs-validation" novalidate>

    <h4 class="header-title mb-3">Employment Information</h4>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Expiration Date</label>
            <input type="text" class="form-control date" id="expirationdate"
                   data-toggle="date-picker" data-single-date-picker="true"
                   required>
        </div>

        <div class="form-group col-md-6">
            <label for="example-select">Vendor</label>
            <select class="form-control" id="vendor" required>
                <option selected disabled></option>
                <option>CDL</option>
                <option>Class A</option>
                <option>Class AM</option>
                <option>Class B</option>
                <option>Class C</option>
                <option>Class C Non-Commercial</option>
                <option>Class D</option>
                <option>Class E</option>
                <option>Class F</option>
                <option>ID</option>
            </select>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>State Issued</label>
            <select class="form-control" id="stateissued">
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

        <div class="form-group col-md-6">
            <label>License Number</label>
            <input type="text" id="licensenumber" class="form-control" required>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Endorsement(s)</label>
            <input type="text" id="endorsement" class="form-control">
        </div>

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="suspended">
                <label class="custom-control-label" for="suspended">Suspended</label>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="alerton" checked>
                <label class="custom-control-label" for="alerton">Alert On</label>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-12">
            <button type="submit" class="btn btn-block btn-primary">Save</button>
        </div>

    </div>

</form>
