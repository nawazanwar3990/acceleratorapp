<h4>
    @if ($record->status == 1)
        <span class="badge bg-success">{{ __('general.active') }}</span>
    @else
        <span class="badge bg-danger">{{ __('general.inactive') }}</span>
    @endif
</h4>
