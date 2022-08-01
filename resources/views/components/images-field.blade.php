@if(count($images)>0)
    @foreach($images as $image)
        <div class="py-3 px-1 position-relative dropify_parent_holder">
            <a onclick="clone_dropify(this);" class="position-absolute dropify-add-clone-btn">
                <i class="bx bx-plus"></i>
            </a>
            <a onclick="remove_clone_dropify(this);" class="position-absolute dropify-remove-clone-btn">
                <i class="bx bx-trash"></i>
            </a>
            {!! Form::file('images[]',['class'=>'dropify', 'data-height' => '75', 'data-default-file'=>asset($image->filename)]) !!}
        </div>
    @endforeach
@else
    <div class="py-3 px-1 position-relative dropify_parent_holder">
        <a onclick="clone_dropify(this);" class="position-absolute dropify-add-clone-btn">
            <i class="bx bx-plus"></i>
        </a>
        <a onclick="remove_clone_dropify(this);" class="position-absolute dropify-remove-clone-btn">
            <i class="bx bx-trash"></i>
        </a>
        {!! Form::file('images[]',['class'=>'dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp']) !!}
    </div>
@endif
