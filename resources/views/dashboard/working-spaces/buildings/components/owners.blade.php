<div class="accordion-item">
    <h2 class="accordion-header" id="headingOwner">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOwner" aria-expanded="true" aria-controls="collapseOwner">
            {{ __('general.owners') }}
        </button>
    </h2>

    <div id="collapseOwner" class="accordion-collapse collapse" aria-labelledby="headingOwner" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-white">
            <div class="row">
                <div class="col-md-12">
                    <table>
                        <thead>
                            <tr>
                                <td>HR ID<i class="text-danger">*</i></td>
                                <td>Image</td>
                                <td>Name</td>
                                <td>Relation</td>
                                <td>House #</td>
                                <td>Cell</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control hr-id" name="owners[]" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-info btn-lg text-white" type="button" onclick="getHrDetails(this);"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <img src="{{ url('theme/images/user-picture.png') }}" class="hr-pic" style="width:40px;" tabindex="-1"/>
                                </td>
                                <td class="text-center">
                                    <input type="text" class="form-control hr-name" tabindex="-1" disabled>
                                </td>
                                <td class="text-center">
                                    <input type="text" class="form-control hr-relation" tabindex="-1" disabled>
                                </td>
                                <td class="text-center">
                                    <input type="text" class="form-control hr-house" tabindex="-1" disabled>
                                </td>
                                <td class="text-center">
                                    <input type="text" class="form-control hr-cell" tabindex="-1" disabled>
                                </td>
                                <td class="text-center col-1">
                                    <a href="javascript:void(0);"
                                       onclick="removeClonedRow(this);"
                                       class="btn btn-sm btn-danger">
                                        <i class="fas fa-times-circle"></i>
                                    </a>
                                    <a href="javascript:void(0);"
                                       onclick="cloneRow(this);"
                                       class="btn btn-sm btn-info">
                                        <i class="bx  bx-plus-circle-circle"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
