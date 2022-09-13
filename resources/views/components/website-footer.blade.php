<style>
    footer {
        background-color: #1c1c1c;
    }

    footer img {
        width: 140px;
    }

    footer .nav-holder {
        line-height: 38px;
    }

    footer .nav-holder .col.right {
        padding-left: 79px;
    }

    footer .nav-holder a {
        font-size: 15px;
        line-height: 20px;
    }

    footer .nav-holder img {
        display: block;
        width: 80px;
        height: 2px;
    }

    .btn {
        color: white;
        background-color: rgb(56, 148, 143);
        border: none;
    }

    .btn-circle {
        border-radius: 50%;
        width: 30px;
        height: 30px;
        padding: 3px;
        font-size: 16px;
    }
</style>
<footer class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 align-self-center">
                <img src="{{ asset('uploads/header_logo.png') }}" alt="">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 nav-holder align-self-center">
                <div class="row">
                    <div class="col-6 col">
                        <a class="text-white">About</a>
                        <img src="https://taqadam.kaust.edu.sa/wp-content/uploads/2020/05/underline.jpg" alt="">
                    </div>
                    <div class="col-6 border-start col right">
                        <a class="text-white">News</a>
                        <img src="https://taqadam.kaust.edu.sa/wp-content/uploads/2020/05/underline.jpg" alt="">
                    </div>
                    <div class="col-6 col">
                        <a class="text-white">About</a>
                        <img src="https://taqadam.kaust.edu.sa/wp-content/uploads/2020/05/underline.jpg" alt="">
                    </div>
                    <div class="col-6 border-start col right">
                        <a class="text-white">News</a>
                        <img src="https://taqadam.kaust.edu.sa/wp-content/uploads/2020/05/underline.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 align-self-center text-center">
                <h4 class="text-white">Stay Updated with the latest news</h4>
                <div class="footer-buttons mt-3 mb-4">
                    <a class="btn btn-primary btn-xs mx-2">Subscribed</a>
                    <a class="btn btn-primary btn-xs btn-circle mx-2">
                        <i class="bx bxl-twitter"></i>
                    </a>
                    <a class="btn btn-primary btn-xs btn-circle mx-2">
                        <i class="bx bxl-instagram"></i>
                    </a>
                    <a class="btn btn-primary btn-xs btn-circle mx-2">
                        <i class="bx bxl-youtube"></i>
                    </a>
                </div>
                <p class="text-muted fs-13">©{{ date('Y') }} Accelerator ALL Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
