<div class="row">
    <div class="col-md-12 form-group">
        <label for="hear_about_us" class="form-label">How did you hear about us?</label>
        {!! Form::text('hear_about_us',str_replace('_',' ',$model->hear_about_us),['id'=>'hear_about_us','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label for="what_made_apply_to_falak" class="form-label">What made you apply to INCUAPP?</label>
        {!! Form::textarea('what_made_apply_to_falak',str_replace('_',' ',$model->what_made_apply_to_falak),['id'=>'what_made_apply_to_falak','class'=>'form-control','required','rows'=>'3','cols'=>'30']) !!}
    </div>
</div>
