<script>
    Date.prototype.addDays = function (days) {
        let date = new Date(this.valueOf());
        date.setDate(date.getDate() + days);
        return date;
    }
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

    function applyEventType(cElement) {
        let sub_types = JSON.parse($(cElement).find('option:selected').attr('data-sub-types'));
        let options = "<option value='' selected><?php echo e(trans('general.select')); ?></option>";
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

    function calculate_event_end_date(cElement) {
        let start_date = $("#event_start_date").val();
        let value = new Date($(cElement).val());
        let end_date = new Date(start_date);
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
        let holder = $("#meeting_type_description_holder");

       /* holder.removeClass('d-none d-block');
        if (value === 'yes') {
            holder.addClass('d-block');
            holder.find('label').text('Description');
            holder.find('input').removeAttr('type').attr('type', 'text');
        } else {
            holder.addClass('d-block');
            holder.find('label').text('Paste Url');
            holder.find('input').removeAttr('type').attr('type', 'url');
        }*/
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
