@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
@endsection
@section('innerScript')
    <script>
        $(function () {
            $('.select2').select2();
        });

        function getEmployeeDailyWage() {
            let date = $('#salary_month').val();
            if (date.length == 0 ){
                showError('{{ __('general.selected_date_first') }}');
                $('#employee_id').val('');
                return false;
            }
            let employeeID = $('#employee_id').val();
            if (employeeID > 0) {
                showWait();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.employee-salary') }}",
                    data: {'employeeID': employeeID},
                    success: function (result) {
                        hideWait();
                        if (result.success === true) {
                            $('#total_salary').val(result.data.salary);
                            $('#paid_salary').val(result.data.salary);
                        } else {
                            showError(result.msg);
                        }
                    }
                });
            }
        }

        function calculateSalary() {
            let totalSalary = Number($('#total_salary').val());
            let deduction = Number($('#deduction').val());
            if (deduction > 0 && (deduction < totalSalary)) {
                let remainSalary = (totalSalary - deduction);
                $('#paid_salary').val(remainSalary);
            } else {
                $('#paid_salary').val(totalSalary);
            }
        }

        $(document).on('submit', 'form#auto_salary_form', function(e) {
            e.preventDefault();
            let form = $(this);
            let data = form.serialize();
            swal.fire({
                html: '{!! __('general.request_wait') !!}',
                allowOutsideClick: () => !swal.isLoading()
            });
            swal.showLoading();

            $.ajax({
                method: 'POST',
                url: form.attr('action'),
                dataType: 'json',
                data: data,
                beforeSend: function() {
                    console.log('before');
                    $(form.find('button[type="submit"]')).attr('disabled', true);
                    $('#generated_salaries').fadeOut('slow');
                    $('#view_pay_slips').fadeOut('slow');
                },
                success: function(result) {
                    console.log(result);
                    let rows = '';

                    if (result.success == true) {
                        swal.close();
                        $(form.find('button[type="submit"]')).attr('disabled', false);
                        $('#view_pay_slips').fadeIn('slow');

                        $('.gen_month').html(result.month);

                        let alreadyRecords = result.alreadyRecords;
                        let currentRecords = result.currentRecords;

                        $('#body_already').empty();
                        if (alreadyRecords.length > 0) {
                            alreadyRecords.forEach(rec=>{
                                rows += '<tr>';
                                rows += '<td>' + rec.employee + '</td><td>' + rec.generated_date + '</td>';
                                rows += '</tr>';
                            })
                            $('#body_already').empty().append(rows);
                        }

                        $('#body_current').empty();
                        if (currentRecords.length > 0) {
                            rows = '';

                            currentRecords.forEach(rec=>{
                                rows += '<tr>';
                                rows += '<td>' + rec.employee + '</td><td>' + rec.generated_date + '</td>';
                                rows += '</tr>';
                            })
                            $('#body_current').empty().append(rows);
                        }
                        $('#generated_salaries').fadeIn('slow');
                    } else {
                        swal.close();
                        showError(result.msg);
                    }
                },
            });
        });

        function getDepartmentEmployees() {
            let departmentID = $('#department_id').val();
            if (departmentID > 0) {
                $('.employee-col').fadeOut('slow');
                showWait();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.department-employees') }}",
                    data: {'departmentID': departmentID},
                    success: function (result) {
                        hideWait();
                        if (result.success === true) {
                            $('#employee_id').empty().append(result.data);
                            $('.employee-col').fadeIn('slow');
                        } else {
                            showError(result.msg);
                        }
                    }
                });
            }
        }

        function getEmployeeSalary() {
            let employeeID = $('#employee_id').val();
            let salaryMonth = $('#salary_month').val();
            if (employeeID > 0) {
                $('.details-row').fadeOut('slow');
                $('.advance-col').fadeOut('slow');
                showWait();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.salary.calculate-advance') }}",
                    data: {'employeeID': employeeID, 'salaryMonth': salaryMonth},
                    success: function (result) {
                        hideWait();
                        $('#total_salary').val(result.basic);
                        $('#advance_taken').val(result.advance);
                        $('#paid_salary').val(result.remainingSalary);
                        $('#temp_remaining_salary').val(result.remainingSalary);
                        if (Number(result.loan) > 0) {
                            $('#deduction').val(result.loan);
                            $('#deduction').attr('readonly', false);
                            calculateAfterLoan();
                        } else {
                            $('#deduction').val('0.00');
                            $('#deduction').attr('readonly', true);
                        }
                        $('#advance').attr('max', result.remainingSalary);

                        $('.advance-col').fadeIn('slow');
                        $('.details-row').fadeIn('slow');

                    }
                });
            }
        }

        function calculateAfterLoan() {
            let loan = Number($('#deduction').val());
            let tempSalary = Number($('#temp_remaining_salary').val());

            $('#paid_salary').val(tempSalary - loan);
            calculateAdvance();
        }

        function calculateAdvance(){
            let advance = Number($('#advance').val());
            let remainingSalary = Number($('#paid_salary').val());
            if( advance > remainingSalary ){
                showError('Advance can not be greater than remaining salary.')
                $('#advance').val('');
            } else {
                // sal = rem_sal - advance;
                // $('#rem_sal').val(sal);
            }
        }
    </script>
@endsection
