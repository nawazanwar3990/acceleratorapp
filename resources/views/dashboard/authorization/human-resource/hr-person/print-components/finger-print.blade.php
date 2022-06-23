<div class="input-group   px-2 py-2 ">
    <div class="input-group border-bottom font-weight-bold">
        <span><b>Finger Prints</b></span>
    </div>
    <div class="row col-12 justify-content-center my-2">
        <div class="col-6">
            <div class='row justify-content-center'>
                <div class="col-2">
                    <img id="LEFT_THUMB" alt="LEFT_THUMB" height="50px"
                    onerror="this.src='{{ asset('theme/images/fingers/left_hand_10.png') }}'"
                    src="{{ asset($model->left_little_code) }}">
                </div>
                <div class="col-2">
                    <img id="LEFT_THUMB" alt="LEFT_THUMB" height="50px"
                         onerror="this.src='{{ asset('theme/images/fingers/left_hand_9.png') }}'"
                         src="{{ asset($model->left_ring_code) }}">
                </div>
                <div class="col-2">
                    <img id="LEFT_THUMB" alt="LEFT_THUMB" height="50px"
                         onerror="this.src='{{ asset('theme/images/fingers/left_hand_8.png') }}'"
                         src="{{ asset($model->left_middle_code) }}">
                </div>
                <div class="col-2">
                    <img id="LEFT_THUMB" alt="LEFT_THUMB" height="50px"
                         onerror="this.src='{{ asset('theme/images/fingers/left_hand_7.png') }}'"
                         src="{{ asset($model->left_index_code) }}">
                </div>
                <div class="col-2">
                    <img id="LEFT_THUMB" alt="LEFT_THUMB" height="50px"
                         onerror="this.src='{{ asset('theme/images/fingers/left_hand_6.png') }}'"
                         src="{{ asset($model->left_thumb_code) }}">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class='row justify-content-center'>
                <div class="col-2">
                    <img id="LEFT_THUMB" alt="LEFT_THUMB" height="50px"
                         onerror="this.src='{{ asset('theme/images/fingers/right_hand_1.png') }}'"
                         src="{{ asset($model->right_thumb_code) }}">
                </div>
                <div class="col-2">
                    <img id="LEFT_THUMB" alt="right_THUMB" height="50px"
                         onerror="this.src='{{ asset('theme/images/fingers/right_hand_2.png') }}'"
                         src="{{ asset($model->right_index_code) }}">
                </div>
                <div class="col-2">
                    <img id="LEFT_THUMB" alt="right_THUMB" height="50px"
                         onerror="this.src='{{ asset('theme/images/fingers/right_hand_3.png') }}'"
                         src="{{ asset($model->right_middle_code) }}">
                </div>
                <div class="col-2">
                    <img id="LEFT_THUMB" alt="right_THUMB" height="50px"
                         onerror="this.src='{{ asset('theme/images/fingers/right_hand_4.png') }}'"
                         src="{{ asset($model->right_ring_code) }}">
                </div>
                <div class="col-2">
                    <img id="LEFT_THUMB" alt="right_THUMB" height="50px"
                         onerror="this.src='{{ asset('theme/images/fingers/right_hand_5.png') }}'"
                         src="{{ asset($model->right_little_code) }}">
                </div>
            </div>
        </div>
    </div>
</div>
