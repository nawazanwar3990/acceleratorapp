<div class="btn-group">
    <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false" aria-haspopup="true">{{__('general.action')}}</button>

    <ul class="dropdown-menu">
        @if (isset($edit))
            <li>
                <a class="dropdown-item text-black-50" href="{{ $edit }}">
                    {{__('general.edit')}}
                </a>
            </li>
        @endif
       {{-- @if(isset($delete))
            <li>
                <form action="{{ $delete }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item text-black-50">
                        {{__('general.delete')}}
                    </button>
                </form>
            </li>
        @endif--}}
        @if (isset($show))
            <div class="dropdown-divider"></div>
            <li>
                <a class="dropdown-item text-black-50" href="{{ $show }}" target="_blank">
                    {{__('general.show')}}
                </a>
            </li>
        @endif
        @if (isset($info))
            <li>
                <a class="dropdown-item text-black-50" href="{{ $info }}">
                    {{__('general.details')}}
                </a>
            </li>
        @endif

        @if (isset($resetPassword))
            <div class="dropdown-divider"></div>
            <li>
                <a class="dropdown-item text-black-50" href="javascript:void(0);"
                   onclick="resetPassword({{ $resetPassword }});">
                    {{__('general.reset_password')}}
                </a>
            </li>
        @endif
    </ul>
</div>
