<div class="card shadow-none mb-0 border-bottom-0">
    <div class="card-header py-1">
        <div class="input-group font-weight-bold">
            <div class="input-group">
                <div>Witness</div>
            </div>
        </div>
    </div>
    <div class="card-body py-2 ">
        @foreach($witness as $witnes)
            <div class="row py-2">
                <div class="col-1 text-center align-self-center">
                    <img src="{{ \App\Services\PersonService::getCardImage($witnes->witness_id) }}"
                         style="width: 70px;height: 100px;"
                         onerror="this.src='{{ asset('img/defaults/user-picture.png') }}'">
                </div>
                <div class="col-11 align-self-center">
                    <div class="row">
                        <div class="row col-12 mb-2">
                        <div class="col-1 text-right">
                            <label class="mb-0">HR ID :</label>
                        </div>
                        <div class="col-1 border-bottom fs-13">
                            {{ $witnes->witness_id }}
                        </div>
                        <div class="col-1 text-right">
                            <label class="mb-0">Name :</label>
                        </div>
                        <div class="col-4 border-bottom fs-13">
                            {{\App\Services\PersonService::getPersonFullName($witnes->witness_id)}}
                        </div>
                        <div class="col-1 text-right">
                            <label class="mb-0">{{\App\Services\PersonService::getPeronRelation($witnes->witness_id)}} :</label>
                        </div>
                        <div class="col-4 border-bottom fs-13">
                            {{\App\Services\PersonService::getPeronRelationName($witnes->witness_id)}}
                        </div>
                        </div>
                        <div class="row col-12 mb-2">
                        <div class="col-1 text-right">
                            <label class="mb-0">Cell # :</label>
                        </div>
                        <div class="col-2 border-bottom fs-13">
                            {{\App\Services\PersonService::getPeronCellNumber($witnes->witness_id)}}
                        </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-1 text-right">
                            <label class="mb-0">House :</label>
                        </div>
                        <div class="col-10 border-bottom fs-13">
                            {{!empty($witnes->witness_person) ? \App\Services\PersonService::generateLinearAddress($witnes->witness_person,'per') : " "}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
