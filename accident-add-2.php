<form action="#" class="needs-validation" novalidate>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Accident Date</label>
            <input type="text" class="form-control date" id="accidentdate" data-toggle="date-picker"
                   data-single-date-picker="true" required>
        </div>

        <div class="form-group col-md-6">
            <label>Accident Time</label>
            <div class="input-group">
                <input type="text" class="form-control" data-toggle="timepicker" id="accidenttime"
                       value="10:00:00">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label for="accidentdescription">Accident Description</label>
            <textarea class="form-control" id="accidentdescription" rows="3" required></textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="articlesinvolved">Articles Involved</label>
            <textarea class="form-control" id="articlesinvolved" rows="3"></textarea>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Safeguard Provided</label>
            <input type="text" id="safeguardprovided" class="form-control">
        </div>


        <div class="form-group col-md-6">
            <label>Safeguard Used</label>
            <input type="text" id="safeguardused" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Description Code</label>
            <input type="text" id="descriptioncode" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="example-select">Agent of Loss Group</label>
            <select class="form-control" id="agentoflossgroup" required>
                <option selected disabled></option>
                <option>Animal, Plant or Human Agents</option>
                <option>Chemicals of chemical products</option>
                <option>Containers</option>
                <option>Environmental Agents</option>
                <option>Fixed Machinery or Utilities</option>
                <option>Other or Unspecified Agents</option>
                <option>Structures, surfaces or furnishings</option>
                <option>Tools or equipment</option>
                <option>Vehicles or Mobile Equipment</option>
            </select>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label for="example-select">Agent of Loss Item</label>
            <select class="form-control" id="agentoflossitem">
                <option selected disabled></option>
                <option></option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="example-select">Benefit State</label>
            <select class="form-control" id="benefitstate" required>
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
            <label>Accident Location</label>
            <input type="text" id="accidentlocation" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Employer's Premises</label>
            <select class="form-control" id="employerpremises" required>
                <option selected disabled></option>
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Address 1</label>
            <input type="text" id="address1" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Address 2</label>
            <input type="text" id="address2" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>City</label>
            <input type="text" id="city" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>State</label>
            <select class="form-control" id="state" required>
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
            <label>Zip Code</label>
            <input type="text" id="zipcode" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Details Loss Location</label>
            <textarea class="form-control" id="detailslosslocation" rows="3"></textarea>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Time Employee Began Work</label>
            <div class="input-group">
                <input type="text" class="form-control" data-toggle="timepicker"
                       id="timeemployeebeganwork"
                       value="10:00:00">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                </div>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label>Authority Contacted</label>
            <select class="form-control" id="authoritycontacted" required>
                <option selected disabled></option>
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Violation Issues</label>
            <select class="form-control" id="violationissues" required>
                <option selected disabled></option>
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label>Injury on Insured Premises</label>
            <select class="form-control" id="injuryonisuredpremises" required>
                <option selected disabled></option>
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-12">
            <button type="submit" class="btn btn-block btn-primary">Save</button>
        </div>

    </div>

</form>
