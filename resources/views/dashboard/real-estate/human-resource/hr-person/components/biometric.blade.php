{{--<div class="accordion-item">--}}
{{--    <h2 class="accordion-header" id="biometric_heading">--}}
{{--        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#biometric"--}}
{{--                aria-expanded="false" aria-controls="collapseOne">--}}
{{--            {{ __('general.biometric') }}--}}
{{--        </button>--}}
{{--    </h2>--}}
<h4 class="card-title text-purple">{{ __('general.biometric') }}</h4>
<hr>
{{--    <div id="biometric" class="accordion-collapse collapse bg-white" aria-labelledby="biometric_heading"--}}
{{--         data-bs-parent="#accordionExample">--}}
{{--        <div class="accordion-body">--}}
            <div class="fields">

                <div class="row m-auto">
                    <div class="col-md-2 form-group mx-auto">
                        <div class="card text-center">
                            <div class="">
                                <img src="{{ asset('theme/images/fingers/right_hand_1.png') }}" alt="" class="img-fluid">
                                {!!  Form::hidden('right_thumb_image',null,['id'=>'RIGHT_THUMB_IMAGE']) !!}
                                {!!  Form::hidden('code[RIGHT_THUMB]',null,['id'=>'RIGHT_THUMB_CODE']) !!}
                            </div>
                            <div class="card-footer">
                                <p>RH-Thumb Finger</p>
                                <button type="button" class="btn btn-primary btn-sm">{{ __('general.click_to_scan') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 form-group mx-auto">
                        <div class="card text-center">
                            <div class="">
                                <img src="{{ asset('theme/images/fingers/right_hand_2.png') }}" alt="" class="img-fluid">
                                {!!  Form::hidden('right_index_image',null,['id'=>'RIGHT_INDEX_IMAGE']) !!}
                                {!!  Form::hidden('code[RIGHT_INDEX]',null,['id'=>'RIGHT_INDEX_CODE']) !!}
                            </div>
                            <div class="card-footer">
                                <p>RH-Index Finger</p>
                                <button type="button" class="btn btn-primary btn-sm">{{ __('general.click_to_scan') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 form-group mx-auto">
                        <div class="card text-center">
                            <div class="">
                                <img src="{{ asset('theme/images/fingers/right_hand_3.png') }}" alt="" class="img-fluid">
                                {!!  Form::hidden('right_middle_image',null,['id'=>'RIGHT_MIDDLE_IMAGE']) !!}
                                {!!  Form::hidden('code[RIGHT_MIDDLE]',null,['id'=>'RIGHT_MIDDLE_CODE']) !!}
                            </div>
                            <div class="card-footer">
                                <p>RH-Middle Finger</p>
                                <button type="button" class="btn btn-primary btn-sm">{{ __('general.click_to_scan') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 form-group mx-auto">
                        <div class="card text-center">
                            <div class="">
                                <img src="{{ asset('theme/images/fingers/right_hand_4.png') }}" alt="" class="img-fluid">
                                {!!  Form::hidden('right_ring_image',null,['id'=>'RIGHT_RING_IMAGE']) !!}
                                {!!  Form::hidden('code[RIGHT_RING]',null,['id'=>'RIGHT_RING_CODE']) !!}
                            </div>
                            <div class="card-footer">
                                <p>RH-Ring Finger</p>
                                <button type="button" class="btn btn-primary btn-sm">{{ __('general.click_to_scan') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 form-group mx-auto">
                        <div class="card text-center">
                            <div class="">
                                <img src="{{ asset('theme/images/fingers/right_hand_5.png') }}" alt="" class="img-fluid">
                                {!!  Form::hidden('right_little_image',null,['id'=>'RIGHT_LITTLE_IMAGE']) !!}
                                {!!  Form::hidden('code[RIGHT_LITTLE]',null,['id'=>'RIGHT_LITTLE_CODE']) !!}
                            </div>
                            <div class="card-footer">
                                <p>RH-Little Finger</p>
                                <button type="button" class="btn btn-primary btn-sm">{{ __('general.click_to_scan') }}</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 form-group mx-auto">
                        <div class="card text-center">
                            <div class="">
                                <img src="{{ asset('theme/images/fingers/left_hand_6.png') }}" alt="" class="img-fluid">
                                {!!  Form::hidden('left_thumb_image',null,['id'=>'LEFT_THUMB_IMAGE']) !!}
                                {!!  Form::hidden('code[LEFT_THUMB]',null,['id'=>'LEFT_THUMB_CODE']) !!}
                            </div>
                            <div class="card-footer">
                                <p>LH-Thumb Finger</p>
                                <button class="btn btn-primary btn-sm">{{ __('general.click_to_scan') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 form-group mx-auto">
                        <div class="card text-center">
                            <div class="">
                                <img src="{{ asset('theme/images/fingers/left_hand_7.png') }}" alt="" class="img-fluid">
                                {!!  Form::hidden('left_index_image',null,['id'=>'LEFT_INDEX_IMAGE']) !!}
                                {!!  Form::hidden('code[LEFT_INDEX]',null,['id'=>'LEFT_INDEX_CODE']) !!}
                            </div>
                            <div class="card-footer">
                                <p>LH-Index Finger</p>
                                <button class="btn btn-primary btn-sm">{{ __('general.click_to_scan') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 form-group mx-auto">
                        <div class="card text-center">
                            <div class="">
                                <img src="{{ asset('theme/images/fingers/left_hand_8.png') }}" alt="" class="img-fluid">
                                {!!  Form::hidden('left_middle_image',null,['id'=>'LEFT_MIDDLE_IMAGE']) !!}
                                {!!  Form::hidden('code[LEFT_MIDDLE]',null,['id'=>'LEFT_MIDDLE_CODE']) !!}
                            </div>
                            <div class="card-footer">
                                <p>LH-Middle Finger</p>
                                <button class="btn btn-primary btn-sm">{{ __('general.click_to_scan') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 form-group mx-auto">
                        <div class="card text-center">
                            <div class="">
                                <img src="{{ asset('theme/images/fingers/left_hand_9.png') }}" alt="" class="img-fluid">
                                {!!  Form::hidden('left_ring_image',null,['id'=>'LEFT_RING_IMAGE']) !!}
                                {!!  Form::hidden('code[LEFT_RING]',null,['id'=>'LEFT_RING_CODE']) !!}
                            </div>
                            <div class="card-footer">
                                <p>LH-Ring Finger</p>
                                <button class="btn btn-primary btn-sm">{{ __('general.click_to_scan') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 form-group mx-auto">
                        <div class="card text-center">
                            <div class="">
                                <img src="{{ asset('theme/images/fingers/left_hand_10.png') }}" alt="" class="img-fluid">
                                {!!  Form::hidden('left_little_image',null,['id'=>'LEFT_LITTLE_IMAGE']) !!}
                                {!!  Form::hidden('code[LEFT_LITTLE]',null,['id'=>'LEFT_LITTLE_CODE']) !!}
                            </div>
                            <div class="card-footer">
                                <p>LH-Little Finger</p>
                                <button class="btn btn-primary btn-sm">{{ __('general.click_to_scan') }}</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}




