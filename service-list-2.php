<div class="table-responsive-sm" style="overflow: auto;">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Asset</th>
            <th>Service</th>
            <th>Finish</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#4</a></td>
            <td>Truck 2</td>
            <td>
                <div>Service 1</div>
                <div>Service 2</div>
            </td>
            <td>
                <button class="btn btn-rounded btn-info text-white pl-3 pr-3" data-toggle="modal" data-target="#finish-modal">Finish</button>
            </td>
        </tr>
        <tr>
            <td><a href="#">#5</a></td>
            <td>Truck 2</td>
            <td>
                <div>Maintenance 1</div>
                <div>Service 2</div>
            </td>
            <td>
                <button class="btn btn-rounded btn-info text-white pl-3 pr-3" data-toggle="modal" data-target="#finish-modal">Finish</button>
            </td>
        </tr>
        <tr>
            <td><a href="#">#6</a></td>
            <td>Truck 2</td>
            <td>
                <div>Service 1</div>
                <div>Maintenance 2</div>
            </td>
            <td>
                <button class="btn btn-rounded btn-info text-white pl-3 pr-3" data-toggle="modal" data-target="#finish-modal">Finish</button>
            </td>
        </tr>
        </tbody>
    </table>
</div> <!-- end table-responsive-->

<div class="modal fade" id="finish-modal" tabindex="-1" role="dialog" aria-labelledby="employee-training-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="employee-training-modal-label">Next Service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control date" id="date" data-toggle="date-picker"
                           data-single-date-picker="true" required>
                </div>

                <button class="btn btn-block btn-success" data-dismiss="modal">Save</button>

            </div>
        </div>
    </div>
</div>
