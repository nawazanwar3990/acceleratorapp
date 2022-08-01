<a class="btn btn-xs btn-success"  data-bs-toggle="modal" data-bs-target="#view_images_{{ $model_id }}">
    {{ trans('general.view_images') }}
</a>
<div id="view_images_{{ $model_id }}"
     class="modal"
     tabindex="-1"
     aria-labelledby="view_images_{{ $model_id }}"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ trans('general.images') }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @if(count($images)>0)
                        @foreach($images as $image)
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-6">
                                <img src="{{ asset($image->filename) }}" alt="{{ $image->record_type }}" class="img-fluid">
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
