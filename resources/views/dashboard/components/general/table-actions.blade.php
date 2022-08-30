<a class="btn btn-xs btn-info" href="{{ $edit }}">
    {{__('general.edit')}} <i class="bx bx-edit"></i>
</a>
@isset($sections)
    <a class="btn btn-xs btn-info" href="{{ $sections }}">
        {{__('general.sections')}} <i class="bx bxs-eyedropper"></i>
    </a>
@endisset
@isset($pages)
    <a class="btn btn-xs btn-info" href="{{ $pages }}">
        {{__('general.pages')}} <i class="bx bxs-eyedropper"></i>
    </a>
@endisset
{{--<a class="btn btn-xs bg-danger" href="{{ $delete }}">
    {{__('general.delete')}} <i class="bx bx-trash"></i>
</a>--}}
