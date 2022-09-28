<section class="my-5 py-5 we-offer-holder">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pb-3">
                <h1>What We Offer</h1>
                <h6 class="mt-3 mb-3">Build, launch and scale your startup with Business Accelerators</h6>
            </div>
        </div>
        <div class="row">
            @if(count($offers)>0)
                @foreach($offers as $offer)
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$offer->heading}}</h4>
                        <hr style="background-color: white;height: 3px">
                    </div>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                         width="128.000000pt" height="94.000000pt" viewBox="0 0 128.000000 94.000000"
                         preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,94.000000) scale(0.100000,-0.100000)"
                           fill="#FFFFFF" stroke="none">
                            <path d="M584 907 c-2 -7 -3 -80 -2 -162 l3 -150 225 -3 c124 -1 235 0 248 3
                                    22 5 22 6 20 163 l-3 157 -243 3 c-193 2 -244 0 -248 -11z m466 -152 l0 -125
                                    -55 0 -55 0 0 65 c0 58 -2 65 -20 65 -13 0 -20 -7 -20 -20 0 -11 -7 -20 -15
                                    -20 -8 0 -15 -7 -15 -15 0 -8 -4 -15 -10 -15 -5 0 -11 -15 -11 -32 -2 -31 -2
                                    -31 -6 -5 -2 15 -10 27 -18 27 -8 0 -16 -12 -18 -27 -3 -23 -4 -21 -6 10 0 20
                                    -5 37 -10 37 -6 0 -12 -17 -14 -37 -3 -31 -4 -29 -5 15 -2 39 -6 52 -17 52
                                    -11 0 -15 -13 -17 -52 -1 -36 -2 -43 -5 -20 -5 40 -23 42 -23 2 0 -29 -1 -30
                                    -50 -30 l-50 0 0 125 0 125 220 0 220 0 0 -125z"/>
                            <path d="M883 863 c-7 -2 -25 -31 -39 -64 -15 -32 -30 -59 -34 -59 -3 0 -17
                                    11 -30 25 -26 28 -31 27 -61 -18 l-23 -32 28 25 28 25 33 -36 33 -37 46 59
                                    c31 40 46 69 46 89 0 30 -4 33 -27 23z"/>
                            <path d="M327 678 c-9 -7 -20 -27 -23 -45 -5 -26 -1 -37 19 -57 49 -49 117
                                    -24 117 44 0 22 -7 45 -16 54 -19 19 -74 21 -97 4z"/>
                            <path d="M271 511 c-42 -42 -64 -103 -69 -188 -4 -71 -2 -83 11 -83 22 0 24 7
                                    37 83 6 37 16 79 23 94 10 24 13 -5 17 -187 l5 -215 25 0 25 0 3 128 3 127 24
                                    0 25 0 0 -131 c0 -130 0 -130 23 -127 22 3 22 3 25 221 l2 217 101 0 c105 0
                                    169 17 169 44 0 15 -10 16 -327 32 -93 5 -104 3 -122 -15z m124 -12 c-4 -12
                                    -2 -48 5 -80 12 -54 11 -61 -5 -80 -19 -19 -19 -19 -38 0 -18 17 -18 23 -7 70
                                    7 29 10 65 8 81 -4 26 -1 30 19 30 20 0 23 -4 18 -21z"/>
                        </g>
                    </svg>
                    <div class="card-body text-center">
                        <p class="card-text text-white text-justify">{{$offer->description}}</p>
                    </div>
                </div>
            </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
