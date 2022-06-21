<div class="btn-group">
    <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false" aria-haspopup="true">{{__('general.action')}}</button>

    <ul class="dropdown-menu">
        <li>
            <a class="dropdown-item text-black-50" href="{{ route('dashboard.sales.show', $record->transfer_no) }}" target="_blank">
                {{__('general.print_title_transfer')}}
            </a>
        </li>
{{--        <li>--}}
{{--            <a class="dropdown-item text-black-50" href="{{ route('dashboard.sales.seller-affidavit-print', ['transfer-no' => $record->transfer_no]) }}" target="_blank">--}}
{{--                {{__('general.print_seller_affidavit')}}--}}
{{--            </a>--}}
{{--        </li>--}}
    </ul>
</div>
