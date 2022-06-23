<div class="card shadow-none mb-0 border-bottom-0">
    <div class="card-header py-1">
        <div class="row col-12">
            <div class="col-4 border-0 align-self-end">
                <h6 class="mb-0">Plot Detail</h6>
            </div>
            <div class="col-4  align-self-end text-center">
                {!! Form::label('employee_hr_id','Plot :',['class'=>'mb-0',"style"=>"padding: 4.4px;"]) !!}
                {{ $plot->id }}
            </div>
            <div class="col-4 border-0 text-right align-self-end">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-2">
            <div class="col-2 text-right">
                <label class="mb-0">Plot no :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ $plot->property_plot_number }}
            </div>
            <div class="col-2 text-right">
                <label class="mb-0">
                    Phase :
                </label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ \App\Services\PlotService::getPropertyPhase($plot->property_phase_id) }}
            </div>
            <div class="col-2 text-right">
                <label class="mb-0">Block :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                    {{ str_replace('Block ', '', \App\Services\PlotService::getPropertyBlock($plot->property_block_id)) }}
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2 text-right">
                <label class="mb-0">Actual Area :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ $plot->actual_area }}
            </div>
            <div class="col-2 text-right">
                <label class="mb-0">
                    Constructed Area :
                </label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ $plot->constructed_area }}
            </div>
            <div class="col-2 text-right">
                <label class="mb-0">Construction Status:</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                    {{ \App\Services\PlotService::getConstructionStatuses($plot->property_construction_status_id) }}
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2 text-right">
                <label class="mb-0">Occupancy Status :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ \App\Services\PlotService::getOccupancyStatuses($plot->property_occupancy_status_id) }}
            </div>
            <div class="col-2 text-right">
                <label class="mb-0">
                    Cornered :
                </label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ $plot->property_cornered_id }}
            </div>
            <div class="col-2 text-right">
                <label class="mb-0">Plot Category :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                    {{ \App\Services\DefinitionService::pluckTariffCategories($plot->property_category_id) }}
            </div>
        </div>
    </div>
</div>

