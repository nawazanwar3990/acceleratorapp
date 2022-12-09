<x-page-layout :page="$page">
    <x-slot name="content">
        <div class="container p-4">
            <div class="row bg-white p-3">
                @include('website.investment.component.progress-bar')
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12 border-start">
                    <form method="POST" action="" id="apply_now" class="solid-validation"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 align-items-end">
                            <div class="col-12">
                                <h3 class="fw-bold">Welcome</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="startup_name">Startup Name <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" name="startup_name" id="startup_name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="first_name">Name <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email <i class="text-danger">*</i></label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="mobile">Mobile <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="city">Address <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" name="city" id="city" placeholder="City"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control form-select" name="country" id="country" required>
                                        <option value="">Country</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="India">India</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="England">England</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">What Stage is your startup in? <i
                                            class="text-danger">*</i></label>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="startup_stage"id="pre_seed" value="Pre-Seed" required>
                                        <label class="form-check-label" for="pre_seed">Pre-Seed</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="startup_stage"id="Seed" value="Seed" required>
                                        <label class="form-check-label" for="Seed">Seed</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="startup_stage"id="seriesA" value="Series A" required>
                                        <label class="form-check-label" for="seriesA">Series A</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="startup_stage"id="seriesB" value="Series B" required>
                                        <label class="form-check-label" for="seriesB">Series B</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="startup_stage"id="seriesC" value="Series C" required>
                                        <label class="form-check-label" for="seriesC">Series C</label>
                                    </div>
                                </div>
                            </div>
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
