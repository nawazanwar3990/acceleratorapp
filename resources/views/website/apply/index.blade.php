<x-page-layout :page="$page">
    <x-slot name="content">
        <div class="container p-4">
            <div class="row bg-white p-3">
                @include('website.apply.component.progress-bar')
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12 border-start">
                    <form method="POST" action="http://acceleratorapp.test/ba/store/company/pre-defined-plan/user-info"
                        accept-charset="UTF-8" id="plan_form" class="solid-validation" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="ZceDkgtWkrnP0CfdmrzNiNmzXnSEegFk94WRlQ3J">
                        <div class="row">
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="email" class="col-form-label">User Name(Email)<i
                                                class="text-danger">*</i></label>
                                        <input id="email" class="form-control" required=""
                                            placeholder="abc@gmail.com" name="email" type="email">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="first_name" class="form-label">First Name</label>
                                        <input id="first_name" class="form-control" name="first_name" type="text">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="last_name" class="form-label">Last Name</label>
                                        <input id="first_name" class="form-control" name="last_name" type="text">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="password" class="form-label">Password<i
                                                class="text-danger">*</i></label>
                                        <input id="password" class="form-control" required="" name="password"
                                            type="password" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="confirm_password" class="form-label">Confirm Password<i
                                                class="text-danger">*</i></label>
                                        <input id="confirm_password" class="form-control" required=""
                                            name="password_confirmation" type="password" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="dropify-wrapper" style="height: 162px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                    </div>
                                    <div class="dropify-loader"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div><input class="dropify" data-height="150"
                                        data-allowed-file-extensions="jpg jpeg png bmp" data-default-file=""
                                        name="logo" type="file"><button type="button"
                                        class="dropify-clear">Remove</button>
                                    <div class="dropify-preview"><span class="dropify-render"></span>
                                        <div class="dropify-infos">
                                            <div class="dropify-infos-inner">
                                                <p class="dropify-filename"><span class="file-icon"></span> <span
                                                        class="dropify-filename-inner"></span></p>
                                                <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="security_question_name" class="form-label">Secret Question<i
                                                class="text-danger">*</i></label>
                                        <select id="security_question_name" class="form-control" required=""
                                            name="security_question_name">
                                            <option selected="selected" value="">__Select__</option>
                                            <option value="what_is_your_date_of_birth">What is your date of birth?
                                            </option>
                                            <option value="what_us_your_favorite_school_teacher_name">What was your
                                                favorite school teacher’s name?</option>
                                            <option value="whats_you_favorite_movie">What’s your favorite movie?
                                            </option>
                                            <option value="what_was_your_first_car">What was your first car?</option>
                                            <option value="What_is_your_astrological_sign">What is your astrological
                                                sign?</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="security_question_value" class="form-label">Answer<i
                                                class="text-danger">*</i></label>
                                        <input id="security_question_value" class="form-control" required=""
                                            name="security_question_value" type="text">
                                    </div>
                                    <div class="col-md-12    mb-3">
                                        <label for="know_about_us" class="form-label">How Did You Hear About Us<i
                                                class="text-danger">*</i></label>
                                        <select id="know_about_us" class="form-control" required=""
                                            name="know_about_us">
                                            <option selected="selected" value="">__Select__</option>
                                            <option value="search_engine">Search Engine</option>
                                            <option value="google_ads">Google Ads</option>
                                            <option value="facebook_ads">Facebook Ads</option>
                                            <option value="youtube_ads">Youtube Ads</option>
                                            <option value="other_paid_social_media_advertising">Other Paid Social Media
                                                Advertising</option>
                                            <option value="facebook_post_group">Facebook Post/Group</option>
                                            <option value="twitter_post">Twitter Post</option>
                                            <option value="instagram_post_story">Instagram Post/Story</option>
                                            <option value="other_social_media">Other Social Media</option>
                                            <option value="email">Email</option>
                                            <option value="radio">Radio</option>
                                            <option value="tv">Tv</option>
                                            <option value="newspaper">Newspaper</option>
                                            <option value="word_of-mouth">Word Of Mouth</option>
                                            <option value="friends">Friends</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 4rem!important;">
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn  btn-primary site-first-btn-color">
                                Next <i class="bx bx-arrow-to-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-page-layout>
