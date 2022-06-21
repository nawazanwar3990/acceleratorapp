<div class="fixed-footer" style="width:100%">
    <div class="row">
        <div class="col-12"><small>Software By: OptimumTech 0313-6650965</small></div>
    </div>
    <div class="row mt-3">
        <div style="width: 40%; background-color: #002A45; padding: 8px"></div>
        <div style="width: 60%; background-color: #E23D21; padding: 8px"></div>
    </div>
    <div class="row mt-1 text-center">
        <div style="width:25%;">
            <i class="fas fa-mobile-alt"></i> <small>{{ \App\Services\RealEstate\BusinessService::getBusinessCell() }}</small>
        </div>
        <div style="width:25%;">
            <i class="fas fa-phone"></i> <small>{{ \App\Services\RealEstate\BusinessService::getBusinessLandline() }}</small>
        </div>
        <div style="width:25%;">
            <i class="fas fa-at"></i> <small>{{ \App\Services\RealEstate\BusinessService::getBusinessemail() }}</small>
        </div>
        <div style="width:25%;">
            <i class="fas fa-globe"></i> <small>{{ \App\Services\RealEstate\BusinessService::getBusinessWebsite() }}</small>
        </div>
    </div>
</div>
