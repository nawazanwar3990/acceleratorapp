<div class="fixed-footer" style="width:100%">
    <div class="row">
        <div class="col-12"><small>Software By: OptimumTech 0313-6650965</small></div>
    </div>
    <div class="row">
        <div style="background-color: #FEC82E; width: 80%; padding-top: .25rem; padding-bottom: .25rem;"></div>
        <div style="background-color: #000000; width: 10%;"></div>
        <div style="background-color: #FEC82E; width: 10%;"></div>
    </div>

    <div class="row mt-1 text-center">
        <div style="width:25%;">
            <i class="fas fa-mobile-alt"></i> <span style="font-size: 10px;">{{ \App\Services\RealEstate\BusinessService::getBusinessCell() }}</span>
        </div>
        <div style="width:25%;">
            <i class="fas fa-phone"></i> <span style="font-size: 10px;">{{ \App\Services\RealEstate\BusinessService::getBusinessLandline() }}</span>
        </div>
        <div style="width:25%;">
            <i class="fas fa-at"></i> <span style="font-size: 10px;">{{ \App\Services\RealEstate\BusinessService::getBusinessemail() }}</span>
        </div>
        <div style="width:25%;">
            <i class="fas fa-globe"></i> <span style="font-size: 10px;">{{ \App\Services\RealEstate\BusinessService::getBusinessWebsite() }}</span>
        </div>
    </div>
</div>
