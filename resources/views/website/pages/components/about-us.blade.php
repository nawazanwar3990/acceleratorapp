<section class="py-5" style="background-color:white;">
    <div class="container-fluid text-center py-3">
        <div class="row my-auto">
            <div class="col-md-3">
                <div class="row justify-content-center">
                    <div class="col-5"><img src="{{ asset('uploads/line-D1.png') }}" alt="" class="green_hr"></div>
                    <div class="col-3"></div>
                    <div><h2>Our Mission</h2></div>
                    <div class="col-3"></div>
                    <div class="col-5"><img src="{{ asset('uploads/line-D1.png') }}" alt="" class="red_hr"></div>
                </div>
            </div>
            <div class="col-md-9 ">
                <p style="font-size:x-large;">
                    <img src="{{ asset('uploads/comma-D1.png') }}" alt="" style="width: 3.5rem;margin-bottom: 3rem;">
                    Backing founders to create startups that matter
                    <img src="{{ asset('uploads/comma-D2.png') }}" alt="" style="width: 3.5rem;margin-top: 3rem;">
                </p>
            </div>
        </div>
    </div>
</section>
{{--our values--}}

<section class="about-value pb-3">
    <div class="container">
        <h2 class="mb-5 pt-5"><span><b> Our Values </b></span></h2>
        <div class="values-items my-5 pb-5 row">
            <div class="col-sm-3 col-6 mb-5 mb-sm-0">
                <div class="values-items-item">
                    <div class="values-items-item-text">
                        <b>Entrepreneurship </b>
                    </div>
                    <div class="values-items-item-img mt-2">
                        <div class="small-img" style="background-color: #00D3E1"></div>
                        <div class="values-items-item-img-details" style="background-color:#00D3E1">
                            <div>
                                <p style="margin-top: 15px">Freedom <br> Autonomy <br> Independence<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-6 mb-5 mb-sm-0">
                <div class="values-items-item">
                    <div class="values-items-item-text">
                        <b> Community</b>
                    </div>
                    <div class="values-items-item-img mt-2">
                        <div class="small-img" style="background-color: #6641F3"></div>
                        <div class="values-items-item-img-details" style="background-color: #6641F3">
                            <div>
                                <p style="margin-top: 15px">Helpfulness <br>Enablement <br>Adequacy <br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-6 mb-5 mb-sm-0">
                <div class="values-items-item">
                    <div class="values-items-item-text">
                        <b> Respect </b>
                    </div>
                    <div class="values-items-item-img mt-2">
                        <div class="small-img" style="background-color: #00D3E1"></div>
                        <div class="values-items-item-img-details" style="background-color: #00D3E1">
                            <div>
                                <p style="margin-top: 15px">Trust <br>Understanding <br>Appreciation <br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-6 mb-5 mb-sm-0">
                <div class="values-items-item">
                    <div class="values-items-item-text">
                        <b> Innovation </b>
                    </div>
                    <div class="values-items-item-img mt-2">
                        <div class="small-img" style="background-color: #6641F3"></div>
                        <div class="values-items-item-img-details" style="background-color: #6641F3">
                            <div>
                                <p style="margin-top: 15px">Empowerment <br>Knowledge <br>Resourcefulness <br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--our values--}}

<section class="" style="background-color:rgb(232, 228, 228);">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-3 pt-5">
                <div class="row justify-content-center">
                    <div class="col-5"><img src="{{ asset('uploads/line-D1.png') }}" alt="" class="green_hr"></div>
                    <div class="col-3"></div>
                    <div><h2>The Team</h2></div>
                    <div class="col-3"></div>
                    <div class="col-5"><img src="{{ asset('uploads/line-D1.png') }}" alt="" class="red_hr"></div>
                </div>
            </div>
            <div>
                <p>Meet the team behind the Business Accelerator initiative</p>
            </div>
            @php
                $team_chunks = array_chunk(json_decode(\App\Services\CMS\TeamService::all_teams(),true),3)
            @endphp
            @if(count($team_chunks)>0)
                <section class="work section" id="team">
                    <div class="containers">
                        <input type="radio" name="dot" class="radio" id="one"/>
                        <input type="radio" name="dot" class="radio" id="two"/>
                        <div class="main-card">
                            @foreach($team_chunks as $team_chunk)
                                <div class="cards">
                                    @foreach($team_chunk as $key=>$value)
                                        <div class="card">

                                            <div class="content">
                                                <div class="img">
                                                    <img src="{{asset($value['image']??'')}}" alt=""/>
                                                </div>
                                                <div class="details mt-4">
                                                    <div class="name">{{$value['name']??''}}</div>
                                                    <div class="job work">{{$value['designation']??''}}</div>

                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="buttons">
                            <label for="one" class="active one"></label>
                            <label for="two" class="two"></label>
                        </div>
                    </div>
                </section>
            @endif
        </div>
    </div>
</section>
<section style="">
    <section class="my-5 mx-sm-3">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-6 ml-auto"><img src="{{ asset('uploads/line-D1.png') }}" alt="" class="green_hr"></div>
                <div class="col-5 ms-5"></div>
                <div><h2>Business Accelerator Startup Accelerator</h2></div>
                <div class="col-5 me-5"></div>
                <div class="col-6 mr-auto"><img src="{{ asset('uploads/line-D1.png') }}" alt="" class="red_hr"></div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container-fluid text-center">
            <div class="row justify-content-center">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <p style="text-align:left;">At Business Accelerator, we believe in the power of people with big
                        ideas, bold
                        thinking and creativity to change the world. We back MENA’s most remarkable founders who are
                        creating the next generation of startups.
                        <br><br>
                        Business Accelerator is a startup accelerator powered by KAUST and SABB. Since 2016, we’ve
                        helped founders
                        push the boundaries of what’s possible, giving them the funds, tools, and hands-on resources to
                        define and refine their companies — and bring their game-changing businesses to market.
                        <br><br>
                        Over six months, we guide and develop entrepreneurs through mentorship, funding and targeted
                        workshops focusing on product design, market fit, business model planning, team development, and
                        fundraising.
                        <br><br>
                        For each Business Accelerator cohort, participating startups receive $40,000 in funding, plus
                        access to
                        co-working spaces across Saudi, a diverse international community and a wide pool of experts and
                        mentors.
                        <br><br>
                        At the close of each Business Accelerator cohort, founders walk away with a dynamic toolkit
                        designed to
                        accelerate their business, while ensuring they have the insights and access needed to engage
                        potential customers and develop an exceptional network of mentors and investors.</p>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
</section>


<script type="text/javascript">
    jQuery('.card-slider').slick({
        slidesToShow: 3,
        autoplay: true,
        slidesToScroll: 1,
        dots: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
</script>

