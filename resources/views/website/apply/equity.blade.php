<x-page-layout :page="$page">
    <x-slot name="content">
        <div class="container p-4">
            <div class="row bg-white p-3">
                @include('website.apply.component.progress-bar')
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12 border-start">
                    <form method="POST" action="" id="apply_now" class="solid-validation"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 align-items-end">
                            <div class="col-12">
                                <h3 class="fw-bold">Equity</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Do you have a legal formation?</label>
                                    <br>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            name="legal_formation"id="legal_formation_yes" value="Yes">
                                        <label class="form-check-label" for="legal_formation_yes">Yes</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            name="legal_formation"id="legal_formation_no" value="No">
                                        <label class="form-check-label" for="legal_formation_no">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="kind_of_incorporation">What kind of incorporation is
                                        it? <i class="text-danger icon-check">*</i></label>
                                    <select class="form-control form-select" name="kind_of_incorporation"
                                        id="kind_of_incorporation" required>
                                        <option value=""></option>
                                        <option value="LLC">LLC</option>
                                        <option value="Sole proprietorship">Sole proprietorship</option>
                                        <option value="Corporation">Corporation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="jurisdiction">Where is the jurisdiction?</label>
                                    <input type="text" class="form-control" name="jurisdiction" id="jurisdiction">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5 class="fw-bold">Describe the current equity split between the founders, shareholders, and employees?
                                </h5>
                                <div class="card border rounded-3 bg-secondary position-relative">
                                    <div class="card-body px-5">
                                        <div class="position-absolute" style="left: 17px;">
                                            <a class="fs-5" href="javascript:void(0)"><i class="far fa-times-circle"></i></a>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <h6 class="fw-bold">Shareholder type 1</h6>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Name</label>
                                                    <input type="text" class="form-control" name="name" id="name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="ownership">% of ownership</label>
                                                    <input type="text" class="form-control" name="ownership" id="ownership">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Role</label>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="radio"
                                                            name="role"id="roleFounder" value="Founder">
                                                        <label class="form-check-label" for="roleFounder">Founder</label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="radio"
                                                            name="role"id="roleInvestor" value="Investor">
                                                        <label class="form-check-label" for="roleInvestor">Investor</label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="radio"
                                                            name="role"id="roleEmployee" value="Employee">
                                                        <label class="form-check-label" for="roleEmployee">Employee</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12" id="view_sahreholder_type"></div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary rounded text-white" onclick="add_sahreholder_type()">+ Add Shareholder type</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Are there any pending legal disputes with the company or with any founder involved?</label>
                                    <br>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            name="founder_involved"id="founder_involved_yes" value="Yes">
                                        <label class="form-check-label" for="founder_involved_yes">Yes</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            name="founder_involved"id="founder_involved_no" value="No">
                                        <label class="form-check-label" for="founder_involved_no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn  btn-primary site-first-btn-color">
                                Next <i class="bx bx-arrow-to-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
    @section('innerScript')
        <script>
            $('[name=legal_formation]').click(function() {
                var val = $(this).val();
                if (val == 'Yes') {
                    $('.icon-check').show();
                    $('#kind_of_incorporation').attr('required', true);
                } else {
                    $('.icon-check').hide();
                    $('#kind_of_incorporation').attr('required', false);
                }
            });

            var loop_count = 2;

            function add_sahreholder_type()
            {   
                    var html = '<div class="card border rounded-3 position-relative"><div class="card-body px-5"><div class="position-absolute" style="left: 17px;"><a class="fs-5" href="javascript:void(0)" onclick="remove_sahreholder_type('+loop_count+')"><i class="far fa-times-circle"></i></a></div><div class="row g-3"><div class="col-12"><h6 class="fw-bold">Shareholder type '+loop_count+'</h6></div><div class="col-md-12"><div class="form-group"><label class="form-label" for="name">Name</label><input type="text" class="form-control" name="name" id="name"></div></div><div class="col-md-12"><div class="form-group"><label class="form-label" for="ownership">% of ownership</label><input type="text" class="form-control" name="ownership" id="ownership"></div></div><div class="col-md-12"><div class="form-group"><label class="form-label">Role</label><div class="form-check mb-3"><input class="form-check-input" type="radio" name="role"id="roleFounder" value="Founder"><label class="form-check-label" for="roleFounder">Founder</label></div><div class="form-check mb-3"><input class="form-check-input" type="radio" name="role"id="roleInvestor" value="Investor"><label class="form-check-label" for="roleInvestor">Investor</label></div><div class="form-check mb-3"><input class="form-check-input" type="radio" name="role"id="roleEmployee" value="Employee"><label class="form-check-label" for="roleEmployee">Employee</label></div></div></div></div></div></div>';
                    $('#view_sahreholder_type').html(html);
                    loop_count ++;
            }

            function remove_sahreholder_type(obj)
            {
                $('#view_sahreholder_type').remove();
            }
        </script>
    @endsection
</x-page-layout>
