@php $total = floatval($model->servicesCount())+floatval($model->price) @endphp
<div class="card-footer text-end">
    <div class="row">
        <div class="col-lg-6">
        </div>
        <div class="col-lg-6">
            <ul class="list-group-flush list-group  justify-content-end">
                <li class="list-group-item d-flex no-block align-items-center">
                    <a class="d-flex no-block align-items-center">
                        <i class="mdi mdi-gmail fs-4 me-2 d-flex align-items-center"></i> Sub Total
                    </a>
                    <span
                        class="badge bg-success ms-auto">{{ $total }} {{ \App\Services\GeneralService::get_default_currency() }}</span>
                </li>
                <li class="list-group-item d-flex no-block align-items-center">
                    <a class="d-flex no-block align-items-center">
                        <i class="mdi mdi-gmail fs-4 me-2 d-flex align-items-center"></i> Grand
                        Total
                    </a>
                    <span
                        class="badge bg-success ms-auto">{{ $total}} {{ \App\Services\GeneralService::get_default_currency() }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
