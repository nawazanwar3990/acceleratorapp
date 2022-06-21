<style>
    body {
        background-color: #ffffff !important;
    }
    label{
        font-weight: bold !important;
    }
</style>
<section class=" bg-white">
    <div class="row">

        <div class="mb-3" style="width: 50%">
            <div class="logo-div">
                <img width="200px" height="50px" src="{{ url(\App\Services\RealEstate\BusinessService::getBusinessLogo()) }}" alt="">
            </div>
        </div>

        <div class="mb-3"  style="width: 50%; display: flex; justify-content: right">
            <div class="logo-div">
                <img width="200px" height="50px" src="{{ asset('theme/images/landskape360-logo.png') }}" alt="">
            </div>
        </div>

    </div>

    <div class="row">
        <div class=" header-color-div col h-25" style="border: 20px solid #FEC82E; float: right;"></div>
        <div class="text-center col-auto w-auto">
            <h3 style="font-size: 30px;font-weight: 600;"><b>{{ $title ?? null }}</b></h3>
        </div>
        <div class="header-color-div h-25" style="border: 20px solid #FEC82E; float: right; width: 10%;"></div>
    </div>

</section>
