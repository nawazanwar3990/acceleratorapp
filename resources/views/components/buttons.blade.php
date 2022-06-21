<div class="row mt-5">
    <div class="col-12 text-right">
        @if($savePrint)
            {!! Form::hidden('doPrint','0', ['id' => 'doPrint']) !!}
            <button type="button" class="btn btn-purple waves-effect w-md"
                    onclick="SubmitAndPrint('{{ $formID }}');" id="btn_save_print">
                {{ __('general.save_print') }}
            </button>
        @endif

        @if($updatePrint)
                {!! Form::hidden('doPrint','0', ['id' => 'doPrint']) !!}
                <button type="button" class="btn btn-purple waves-effect w-md"
                        onclick="SubmitAndPrint('{{ $formID }}');" id="btn_update_print">
                        {{ __('general.update_print') }}
                </button>
        @endif

        @if($saveNew)
            {!! Form::hidden('saveNew','0', ['id' => 'saveNew']) !!}
            <button type="button" class="btn btn-purple waves-effect w-md my-1"
                    onclick="SubmitAndNew('{{ $formID }}');" id="btn_save_new">
                {{ __('general.save_new') }}
            </button>
        @endif

        @if($upload)
            <button type="submit" id="btn_upload" class="btn btn-purple waves-effect w-md">{{ __('general.upload') }}</button>
        @endif

        @if($save)
            <button type="submit" id="btn_save" class="btn btn-purple waves-effect w-md">{{ __('general.save') }}</button>
        @endif

        @if($update)
                <button type="submit" id="btn_update" class="btn btn-purple waves-effect w-md">{{ __('general.update') }}</button>
        @endif

        @if($fullPaid)
            <button type="button" class="btn btn-dark waves-effect w-md"
                    onclick="FullPayForm('{{ $paidField }}', '{{ $totalField }}');" id="btn_full_paid">
                {{ __('general.full_paid') }}
            </button>
        @endif

        @if($reset)
            <a href="javascript:void(0);" class="btn btn-purple waves-effect w-md" onclick="ResetForm('{{ \Request::fullUrl() }}');"  id="btn_reset">{{ __('general.reset_form') }}</a>
        @endif

        @if($cancel)
            <a href="{{ route($cancelRoute) }}" class="btn btn-purple waves-effect w-md" id="btn_cancel">{{ __('general.cancel') }}</a>
        @endif
    </div>
</div>
