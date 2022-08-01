<script>
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
