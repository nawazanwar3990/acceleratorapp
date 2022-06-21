@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('plugins/dropify/dist/js/dropify.min.js') }}"></script>
    <script src="{{ url('plugins/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
@endsection

@section('innerScript')
    <script>
        $(function () {
            $('.select2').select2();
            $(".cnic-mask").inputmask("99999-9999999-9");
            $(".mobile-mask").inputmask("(99)999 9999999");

            initDropify();
        });

        function applyAssociation(cElement, type) {
            let value = $(cElement).val();
            if (type == 'present_country_id' ||
                type == 'permanent_country_id'
            ) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.provinces-by-country') }}",
                    data: {'countryID': value},
                    success: function (result) {
                        if (result.success === true) {
                            if (type === 'present_country_id') {
                                $('#present_province_id').empty().html(result.records);
                            } else {
                                $('#permanent_province_id').empty().html(result.records);
                            }
                        }
                    },
                    complete: function() {
                        manageAddress('present');
                        manageAddress('permanent');
                    }
                });
            }

            if (type == 'present_province_id' ||
                type == 'permanent_province_id'
            ) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.districts-by-province') }}",
                    data: {'provinceID': value},
                    success: function (result) {
                        if (result.success === true) {
                            if (type === 'present_province_id') {
                                $('#present_district_id').empty().html(result.records);
                            } else {
                                $('#permanent_district_id').empty().html(result.records);
                            }
                        }
                    },
                    complete: function() {
                        manageAddress('present');
                        manageAddress('permanent');
                    }
                });
            }

            if (type == 'present_district_id' ||
                type == 'permanent_district_id'
            ) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.tehsils-by-district') }}",
                    data: {'districtID': value},
                    success: function (result) {
                        if (result.success === true) {
                            if (type === 'present_district_id') {
                                $('#present_tehsil_id').empty().html(result.records);
                            } else {
                                $('#permanent_tehsil_id').empty().html(result.records);
                            }
                        }
                    },
                    complete: function() {
                        manageAddress('present');
                        manageAddress('permanent');
                    }
                });
            }

            if (type == 'present_tehsil_id' ||
                type == 'permanent_tehsil_id'
            ) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.colonies-by-tehsil') }}",
                    data: {'tehsilID': value},
                    success: function (result) {
                        if (result.success === true) {
                            if (type === 'present_tehsil_id') {
                                $('#present_colony_id').empty().html(result.records);
                            } else {
                                $('#permanent_colony_id').empty().html(result.records);
                            }
                        }
                    },
                    complete: function() {
                        manageAddress('present');
                        manageAddress('permanent');
                    }
                });
            }

            if (type == 'present_colony_id' ||
                type == 'permanent_colony_id'
            ) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.address-by-colony') }}",
                    data: {'colonyID': value},
                    success: function (result) {
                        if (result.success === true) {
                            if (type === 'present_colony_id') {
                                $('#present_tehsil_id').empty().html(result.records.tehsils);
                                $('#present_district_id').empty().html(result.records.districts);
                                $('#present_province_id').empty().html(result.records.provinces);
                                $('#present_province_id').empty().html(result.records.provinces);
                                $('#present_country_id').val(result.records.countryID).select2();
                            } else {
                                $('#permanent_colony_id').empty().html(result.records);
                            }
                        }
                    },
                    complete: function() {
                        manageAddress('present');
                        manageAddress('permanent');
                    }
                });
            }

        }

        function manageAddress(type) {
            let per_address = [];
            let pre_address = [];
            let tehsile = $("#" + type + "_tehsil_id").find('option:selected').text();
            if (tehsile != 'Select Tehsil') {
                if (type == 'permanent') {
                    per_address[8] = tehsile;
                } else {
                    pre_address[8] = tehsile;
                }

            }
            //City
            let city = $("#" + type + "_district_id").find('option:selected').text();
            if (city != 'Select City/District') {
                if (type == 'permanent') {
                    per_address[9] = city;
                } else {
                    pre_address[9] = city;
                }
            }
            //Province
            let province = $("#" + type + "_province_id").find('option:selected').text();
            if (province != 'Select Province') {
                if (type === 'permanent') {
                    per_address[10] = province;
                } else {
                    pre_address[10] = province;
                }
            }
            //Country
            let country = $("#" + type + "_country_id").find('option:selected').text();
            if (country != 'Select Country') {
                if (type === 'permanent') {
                    per_address[11] = country;
                } else {
                    pre_address[11] = country;
                }
            }
            // House
            let house = $("#" + type + "_house_no").val();
            if (house != '') {
                if (type == 'permanent') {
                    per_address[0] = "H. No. " + house;
                } else {
                    pre_address[0] = "H. No. " + house;
                }
            }
            //Street
            let street = $("#" + type + "_street_no").val();
            if (street != '') {
                if (type == 'permanent') {
                    per_address[1] = "St. No " + street;
                } else {
                    pre_address[1] = "St. No " + street;
                }
            }
            //sector
            let sector = $("#" + type + "_sector").val();
            if (sector != '') {
                if (type == 'permanent') {
                    per_address[2] = sector;
                } else {
                    pre_address[2] = sector;
                }
            }
            //check name
            let chakName = $("#" + type + "_chak_name").val();
            if (chakName != '') {
                if (type == 'permanent') {
                    per_address[3] = chakName;
                } else {
                    pre_address[3] = chakName;
                }
            }
            //Check No
            let chakNum = $("#" + type + "_chak_no").val();
            if (chakNum != '') {
                if (type == 'permanent') {
                    per_address[4] = chakNum;
                } else {
                    pre_address[4] = chakNum;
                }
            }
            //Block
            let block = $("#" + type + "_block").val();
            if (block != '') {
                if (type == 'permanent') {
                    per_address[5] = 'Block ' + block;
                } else {
                    pre_address[5] = 'Block ' + block;
                }
            }
            //Colony
            let colony = $("#" + type + "_colony_id").find('option:selected').text();
            if (colony != 'Select Colony') {
                if (type == 'permanent') {
                    per_address[6] = colony;
                } else {
                    pre_address[6] = colony;
                }
            }
            //NearBy
            let nearBy = $("#" + type + "_near_by").val();
            if (nearBy != '') {
                if (type == 'permanent') {
                    per_address[7] = 'Near ' + nearBy;
                } else {
                    pre_address[7] = 'Near ' + nearBy;
                }
            }
            console.log(pre_address);
            per_address = per_address.filter((a) => a).join(', ');
            if (per_address !== '') {
                $("#permanent_linear_address").empty().html(per_address);
            }
            pre_address = pre_address.filter((a) => a).join(', ');
            if (pre_address !== '') {
                $("#present_linear_address").empty().html(pre_address);
            }
        }

        $('#same_address').on('change', function() {
            $("#permanent input[type=text], textarea, select").not("#same_address").each(function() {
                let id = $(this).attr('id').replace('permanent', 'present');
                $(this).val($('#' + id).val());
                $(this).attr('readonly', $('#same_address').prop('checked'));

                if($(this).prop('type') === 'select-one') {
                    $(this).select2();
                }
            })
        })

        function updateEmploymentView() {
            let employmentID = $('#employment_type_id').val();
            switch (employmentID) {
                case 'govt':
                    $('.row-private').fadeOut('slow');
                    $('.row-own').fadeOut('slow');
                    $('.row-govt').fadeIn('slow');
                    break;
                case 'private':
                    $('.row-private').fadeIn('slow');
                    $('.row-own').fadeOut('slow');
                    $('.row-govt').fadeOut('slow');
                    break;
                case 'own':
                    $('.row-private').fadeOut('slow');
                    $('.row-own').fadeIn('slow');
                    $('.row-govt').fadeOut('slow');
                    break;
            }
        }
    </script>
@endsection
