@extends('app.layout.header')

@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area section-space--pt_120 section-space--pb_60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row breadcrumb_box  align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 text-center text-sm-left">
                            <h2 class="breadcrumb-title">{{ $product->product_name }}</h2>
                        </div>
                        <div class="col-lg-6  col-md-6 col-sm-6">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list text-center text-sm-right">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Furniture</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="single-product-wrap section-space--pt_90 section-space--pb_60 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">

                    <!-- Product Details Left -->
                    <div class="product-details-left">
                        <div class="product-details-images-2 slider-lg-image-2">

                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset($product->image_one) }}" class="poppu-img">
                                        <img src="{{ asset($product->image_one) }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset($product->image_two) }}" class="poppu-img">
                                        <img src="{{ asset($product->image_two) }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset($product->image_three) }}" class="poppu-img">
                                        <img src="{{ asset($product->image_three) }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="product-details-thumbs-2 slider-thumbs-2">
                            <div class="sm-image"><img src="{{ asset($product->image_one) }}"
                                    style="width: 70px; width: 70px;" alt="" alt="product image thumb"></div>
                            <div class="sm-image"><img src="{{ asset($product->image_two) }}"
                                    style="width: 70px; width: 70px;" alt="" alt="product image thumb"></div>
                            <div class="sm-image"><img src="{{ asset($product->image_three) }}"
                                    style="width: 70px; width: 70px;" alt="" alt="product image thumb"></div>
                        </div>
                    </div>
                    <!--// Product Details Left -->

                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    <form method="post" action="{{ route('insert.into.cart') }}">
                        @csrf

                        <div class="product-details-content ">

                            <input type="hidden" name="product_id" value="{{ $product->id }}" id="{{ $product->id }}">

                            <h4 class="font-weight--reguler mb-10">{{ $product->product_name }} </h4>
                            <h6 class="font-weight--reguler mb-10">{{ $product->brand_name }} </h6>
                            <h5 class="price">Ksh. {{ $product->selling_price }} </h5>

                            <div class="quickview-peragraph mt-10">
                                <p> {{ $product->product_details }} </p>
                            </div>



                            <div class="product-size-wrapper mt-20">
                                <div class="tab-content d-flex">
                                    <label class="mr-2">Dimension : </label>
                                    <div class="show" id="tab_list_l">
                                        {{ $product->product_size }} cm
                                    </div>
                                </div>
                                <div class="tab-content d-flex">
                                    <label class="mr-2">Material : </label>
                                    <div class="show" id="tab_list_l">
                                        Leather
                                    </div>
                                </div>

                                <div class="tab-content d-flex">
                                    <label class="mr-2">Color : </label>
                                    <div class="tab-pane fade show active" id="tab_list_black">
                                        {{ $product->product_color }}
                                    </div>
                                </div>
                            </div>

                            <div class="quickview-action-wrap mt-10">
                                <div class="quickview-cart-box">
                                    <div class="quickview-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qty" value="1">
                                        </div>
                                    </div>

                                    <div class="quickview-button w-100">
                                        <div class="quickview-cart button ">
                                            <button
                                                class="btn--lg btn--black font-weight--regular text-white addcart" data-id="{{ $product->id }}">Add to Cart</button>
                                        </div>
                                        <div class="quickview-wishlist button">
                                            <a title="Cance;" href=""><i class="icon-remove">X</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product_meta mt-10">
                                <div class="posted_in item_meta">
                                    <span class="label">Categories: </span><a href="#"> {{ $product->category_name }} </a>,
                                    <a href="#">{{ $product->category_name }}</a>
                                </div>
                                <div class="posted_in item_meta">
                                    <span class="label">Delivery timeline : </span>
                                    <p>At vero accusamus et iusto odio dignissimos blanditiis praesentiums dolores molest.</p>
                                </div>
                            </div>


                            <div class="quickview-action-wrap mt-30">
                                <div class="quickview-cart-box">

                                    <div class="quickview-button">
                                        <div class="quickview-cart w-100  button ml-0">
                                            <a href="product-details.html" class="btn--lg w-100 text-center btn--black font-weight--reguler text-white">Checkout</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="product_socials section-space--mt_10">
                                <span class="label">Share this items :</span>
                                <ul class="helendo-social-share socials-inline">
                                    <li>
                                        <a class="share-twitter helendo-twitter" href="#" target="_blank"><i
                                                class="social_twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="share-facebook helendo-facebook" href="#" target="_blank"><i
                                                class="social_facebook"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    

@endsection
