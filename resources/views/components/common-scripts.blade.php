<script>

    function toSlug(str) {
        str = str.replace(/^\s+|\s+$/g, ""); // trim
        str = str.toLowerCase();
        const from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
        const to = "aaaaeeeeiiiioooouuuunc------";
        let i = 0, l = from.length;
        for (; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
        }

        str = str
            .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
            .replace(/\s+/g, "-") // collapse whitespace and replace by -
            .replace(/-+/g, "-"); // collapse dashes
        return str;
    }

    let Custom = new function () {
        this.makeUser = function (person_id) {
            if (confirm('are you ready to Create a new User')) {
                Ajax.call('{{ route('dashboard.users.store') }}', {
                    'person_id': person_id,
                    'state': 'add',
                }, 'POST', function (response) {
                    if (response.status === 'add') {
                        alert("User is Added Successfully");
                        location.reload();
                    } else {
                        alert("Successfully Removed the user");
                        location.reload();
                    }
                });
            }
        }
    };

    function changeEventOrganizedFor(cElement) {

        let event_user_type_holder = $("#event_user_type_holder");
        event_user_type_holder.removeClass('d-none d-block');

        let value = $(cElement).find('option:selected').val();
        if (value === 'non_registered_user') {
            showError('First Register a New User');
            event_user_type_holder.addClass('d-none');
        } else {
            event_user_type_holder.addClass('d-block');
        }
    }

    function changeEventUserType(cElement) {

        let event_user_id_holder = $("#event_user_id_holder");
        event_user_id_holder.removeClass('d-none d-block');
        let value = $(cElement).find('option:selected').val();
        if (value === '') {
            showError('First Select the User Type');
            event_user_id_holder.addClass('d-none');
        } else {
            event_user_id_holder.addClass('d-block');
        }
    }

    function getUserByType(cElement) {
        let user_id = $("#event_user_id").val();
        let user_type = $("#event_user_type").find('option:selected').val();
        if (user_id === '') {
            showError('First Enter User Id');
        } else {
            let route = "/api/user-info-by/" + user_id + "/" + user_type;
            Ajax.call(route, null, 'GET', function (response) {
                console.log(response);
            });
        }
    }

    function showError(errorMsg) {
        $.toast({
            heading: "<?php echo e(__('general.error')); ?>",
            text: errorMsg,
            position: 'top-right',
            icon: 'error',
            hideAfter: 3000,
            stack: 6
        });
    }

    function showSuccessMessage(message) {
        $.toast({
            heading: "<?php echo e(__('general.success')); ?>",
            text: message,
            position: 'top-right',
            icon: 'success',
            hideAfter: 3000,
            stack: 6
        });
    }

    function applyEventType(cElement) {
        let sub_types = JSON.parse($(cElement).find('option:selected').attr('data-sub-types'));
        let options = "<option value='' selected>{{ trans('general.select') }}</option>";
        if (sub_types.length > 0) {
            $.each(sub_types, function (inner_key, inner_value) {
                options += "<option value=" + inner_value.slug + ">" + inner_value.name + "</option>";
            });
        }
        $(cElement)
            .closest('.event_type_holder')
            .next('.event_child_type_holder')
            .find('select')
            .empty()
            .html(options);
    }

    function applyMeetingType(cElement) {
        let value = $(cElement).find('option:selected').val();
        if (value === 'other') {
            Swal.fire({
                title: '{{ trans('general.other_meeting_type') }}',
                input: 'text',
                inputPlaceholder: '{{ trans('general.enter_value') }}',
            }).then(({value}) => {
                let holder = $("#meeting_parent_type");
                let slug = toSlug(value);
                let html = "<option value=" + slug + ">" + value + "</option>";
                holder.append(html);
                holder.val(slug);
                $("#meeting_parent_sub_type").empty()
                    .append("<option value='' selected>{{ trans('general.select') }}</option><option value='other' selected>{{ trans('general.other') }}</option>")
                    .val('');
            });
        } else {
            let sub_types = JSON.parse($(cElement).find('option:selected').attr('data-sub-types'));
            let options = "<option value='' selected><?php echo e(trans('general.select')); ?></option>";
            if (sub_types.length > 0) {
                $.each(sub_types, function (inner_key, inner_value) {
                    options += "<option value=" + inner_value.slug + ">" + inner_value.name + "</option>";
                });
            }
            $(cElement)
                .closest('.meeting_type_holder')
                .next('.meeting_child_type_holder')
                .find('select')
                .empty()
                .html(options);
        }

    }

    function changeMeetingSubType(cElement) {
        let value = $(cElement).find('option:selected').val();
        if (value === 'other') {
            Swal.fire({
                title: '{{ trans('general.other_meeting_sub_type') }}',
                input: 'text',
                inputPlaceholder: '{{ trans('general.enter_value') }}',
            }).then(({value}) => {
                let holder = $("#meeting_parent_sub_type");
                let slug = toSlug(value);
                let html = "<option value=" + slug + ">" + value + "</option>";
                holder.append(html);
                holder.val(slug);
            });
        }
    }

    function getFormattedDate(date) {
        let year = date.getFullYear();
        let month = (1 + date.getMonth()).toString();
        month = month.length > 1 ? month : '0' + month;
        let day = date.getDate().toString();
        day = day.length > 1 ? day : '0' + day;
        return month + "/" + day + "/" + year;
    }

    function calculate_event_end_date(cElement) {
        let start_date = $("#event_start_date").val();
        let days = $(cElement).val();
        let dt = new Date(start_date);
        dt.setDate(dt.getDate() + parseInt(days));
        $("#event_end_date").val(getFormattedDate(dt));
    }

    function changeEventSubType(cElement) {
        let value = $(cElement).find('option:selected').val();
        if (value === 'other') {
            Swal.fire({
                title: 'Other Sub Type',
                text: 'Enter Other Sub Type',
                input: 'text',
                inputPlaceholder: 'sub type',
            }).then(({value}) => {
                let holder = $("#event_sub_type");
                let slug = toSlug(value);
                let html = "<option value=" + slug + ">" + value + "</option>";
                holder.append(html);
                holder.val(slug);
            });
        }
    }

    function addOtherOrganizedBy(cElement) {
        let value = $(cElement).find('option:selected').val();
        if (value === 'other') {
            Swal.fire({
                title: 'Other Organized By',
                text: 'Enter Organized By',
                input: 'text',
                inputPlaceholder: 'Enter Value',
            }).then(({value}) => {
                let holder = $("#event_organized_by");
                let slug = toSlug(value);
                let html = "<option value=" + slug + ">" + value + "</option>";
                holder.append(html);
                holder.val(slug);
            });
        }
    }

    function addOtherOrganizedFor(cElement) {
        let value = $(cElement).find('option:selected').val();
        if (value === 'other') {
            Swal.fire({
                title: 'Other Organized For',
                text: 'Enter Organized For',
                input: 'text',
                inputPlaceholder: 'Enter Value',
            }).then(({value}) => {
                let holder = $("#event_organized_for");
                let slug = toSlug(value);
                let html = "<option value=" + slug + ">" + value + "</option>";
                holder.append(html);
                holder.val(slug);
            });
        }
    }

    function manage_meeting_type(cElement) {
        let value = $(cElement).find('option:selected').val();
        let holder = $("#meeting_type_description_holder");

        holder.removeClass('d-none d-block');
        if (value === 'physical') {
            holder.addClass('d-block');
            holder.find('label').text('Description');
            holder.find('input').removeAttr('type').attr('type', 'text');
        } else {
            holder.addClass('d-block');
            holder.find('label').text('Paste Url');
            holder.find('input').removeAttr('type').attr('type', 'url');
        }
    }

    function isAppliedTicket(cElement) {
        let value = $(cElement).find('option:selected').val();
        let holder = $("#is_applied_holder");
        holder.removeClass('d-none d-block');
        if (value === 'yes') {
            holder.addClass('d-block');
        } else {
            holder.addClass('d-none');
        }
    }

    function changeTicketType(cElement) {
        let value = $(cElement).val();
        let holder = $("#per_person_cost_holder");
        holder.removeClass('d-none d-block');
        if (value === 'paid') {
            holder.addClass('d-block');
        } else {
            holder.addClass('d-none');
        }
    }

    let Ajax = new function () {
        let parent = this;
        this.call = function (url, data, method = 'GET', callback) {
            Ajax.setAjaxHeader();
            $.ajax({
                type: method,
                global: false,
                async: true,
                url: url,
                data: data,
                success: function (response) {
                    callback(response);
                },
                error: function () {
                    console.log("Error Occurred");
                }
            });
        };
        this.setAjaxHeader = function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')
                }
            });
        };
    };
</script>
