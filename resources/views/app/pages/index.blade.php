
@extends('app.layout.header')

@section('content')



<!-- Banner -->
<div class="featuted-product-wrap section-space--pt_120 section-space--pb_60 bg-gray">
    <div class="container">
        <div class="row text-sm-left text-center">
            <div class="col-lg-5 col-md-6 order-lg-1 order-1">
                <div class="hero-text-7 mt-lg-5 section-space--mt_120 section-space--pt_30">
                    <h1><b>The easiest way <br> to buy furniture</b></h1>
                    <p class="mt-30"> Order artisan-made furniture from brands you love <br /> and discover new
                        ones, all in one place.</p>

                    <div class="button-box section-space--mt_20">
                        <a href="{{ route('app.pages.shop') }}" class="btn--text-icon btn btn-dark text-center">Explore Collection</a>
                        <br/><br/>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 order-lg-2 order-2">
                <div class="product-thumbnail">
                    <a href="#"><img src="{{ asset('sanaaspace/assets/images/banner.jpeg')}}" class="img-fluid" alt="Featured Image"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of the Banner -->

<!-- Featured products -->
<div class="featuted-product-wrap section-space--pt_20 section-space--pb_60">
    <div class="container text-lg-center">
        <div class="tab-content mt-30">
            <div class="tab-pane fade show active" id="tab_list_01">
                <!-- product-slider-active -->
                <div class="row">
                    <div class="col-xl-3 col-sm-4 col-xs-4 col-xs-4">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center featuted-product-one">
                            <div class="products-images ">
                                <a href="#" class="product-thumbnail featuted-product-one">
                                    <img src="{{ asset('sanaaspace/assets/images/living.jpeg') }}" class="img-fluid"
                                        alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#l">Living Room Furniture</a></h6>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>

                    <div class="col-xl-3 col-sm-4 col-xs-4 col-xs-4">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center featuted-product-one">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail featuted-product-one">
                                    <img src="{{ asset('sanaaspace/assets/images/bedroom.jpeg') }}" class="img-fluid"
                                        alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Bedroom Furniture</a></h6>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>
                    <div class="col-xl-3 col-sm-4 col-xs-4 col-xs-4">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center featuted-product-one">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail featuted-product-one">
                                    <img src="{{ asset('sanaaspace/assets/images/dining.jpeg') }}" class="img-fluid"
                                        alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Dining Room Furniture</a></h6>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center featuted-product-one">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail featuted-product-one">
                                    <img src="{{ asset('sanaaspace/assets/images/storage.jpeg') }}" class="img-fluid"
                                        alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Storage & Organization</a></h6>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured products -->

<!-- About us section -->

<div class="featuted-product-wrap section-space--ptb_60 bg-gray">
    <div class="container">
        <div class="row align-items-center text-sm-left text-center">
            <div class="col-lg-7 col-md-6 order-lg-1 order-2 section-space--pb_10">
                <div class="product-thumbnail">
                    <a href="#"><img src="{{ asset('sanaaspace/assets/images/aboutus.jpg')}}" class="img-fluid" alt="Featured Image"></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 order-lg-2 order-1">
                <div class="hero-text-7 mt-lg-5">
                    <h2 class="section-space--mt_10"><b>We make furniture <br> shopping simple</b></h2>
                    <p class="mt-30"> Sanaa Space is an online artisan-made furniture
                        marketplace. </p> 
                        <p> Enjoy a familiar e-commerce experience with all your
                        favorite brands to choose from - and easily find what best suits your
                        needs.</p>

                    <div class="button-box section-space--mt_20">
                        <a href="#" class="btn--text-icon text-center btn btn-dark">Shop now</a>
                        <br/><br/>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- About us section -->

<!-- product view -->
<div class="featuted-product-wrap section-space--pt_30 section-space--pb_60">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center section-space--mt_20">
                    <h3 class="section-title">Featured Products</h3>
                </div>
            </div>
        </div>

        <div class="tab-content mt-30">
            <div class="tab-pane fade show active" id="tab_list_01">
                <!-- product-slider-active -->
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail img-fluid">
                                    <img src="{{ asset('sanaaspace/assets/images/Benchi4.png') }}"
                                        class="h-100 img-fluid" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Whipped Cream Bench</a></h6>
                                <h2 class="prodect-title"><a href="#">Achuli Design</a></h2>
                                <div class="prodect-price">
                                    <p class="new-price">Ksh. 70,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail img-fluid">
                                    <img src="{{ asset('sanaaspace/assets/images/coffeetable.jpg') }}"
                                        class="h-100 img-fluid" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Mchemraba coffee table</a></h6>
                                <h2 class="prodect-title"><a href="#">Achuli Design</a></h2>
                                <div class="prodect-price">
                                    <p class="new-price">Ksh. 38,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="" class="product-thumbnail">
                                    <img src="{{ asset('sanaaspace/assets/images/steelarmw.jpg') }}"
                                        class="h-100 img-fluid" alt="Product Images">

                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">The Achuli Armchair</a></h6>
                                <h2 class="prodect-title"><a href="#">Achuli Design</a></h2>
                                <div class="prodect-price">
                                    <p class="new-price">Ksh. 25,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="" class="product-thumbnail">
                                    <img src="{{ asset('sanaaspace/assets/images/steeleather.jpg') }}"
                                        class="h-100 img-fluid" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">The Steeler Armchair</a></h6>
                                <h2 class="prodect-title"><a href="#">Achuli Design</a></h2>
                                <div class="prodect-price">
                                    <p class="new-price">Ksh. 28,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of product view -->


<!-- Artisan call for action -->

<div class="featuted-product-wrap section-space--ptb_10 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="newsletter--box">
                    <div class="row align-items-center text-sm-left text-center">
                        <div class="col-lg-12 col-md-4">
                            <div class="section-title small-mb__20 tablet-mb__10">
                                <h4 class="section-title"><b>Are you an artisan-made furniture brand?</b></h4>
                                <p class="section-space--pt_30">We would love to add your furniture to our collection. Connect with us - add
                                    an additional online sales channel for your brand.</p>
                            </div>
                            <div class="button-box section-space--mt_30">
                                <a href="#" class="btn--text-icon text-center btn btn-dark">Contact us</a>
                                <br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End artisan call for action -->

@endsection