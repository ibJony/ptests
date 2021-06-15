@extends('app.layout.header')

@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area section-space--pt_120 section-space--pb_60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row breadcrumb_box  align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 text-center text-sm-left">
                            <h2 class="breadcrumb-title">Cart</h2>
                        </div>
                        <div class="col-lg-6  col-md-6 col-sm-6">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list text-center text-sm-right">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Cart</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- cart start -->
    <div class="cart-main-area  section-space--ptb_90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-content table-responsive cart-table-content header-color-gray">
                        <table>
                            <thead>
                                <tr class="bg-gray">
                                    <th></th>
                                    <th></th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price"> Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cart as $product)

                                    <tr>
                                        <td></td>
                                        <td class="product-img">
                                            <div class="sm-image"><img src="{{ asset($product->options->image) }}"
                                                    style="width: 70px; width: 70px;" alt="" alt="product image thumb">
                                            </div>
                                        </td>
                                        <td class="product-name"><a href="#"> {{ $product->name }} </a></td>

                                        <td class="product-price"><span class="amount"> Ksh. {{ $product->price }}
                                            </span>
                                        </td>

                                        <form method="post" action="{{ route('update.cartitem') }}" id="updateqty_{$loop->index}"  >
                                            @csrf
                                            <input type="hidden" name="productid" value="{{ $product->rowId }}">
                                            <td class="cart-quality">
                                                <div class="quickview-quality quality-height-dec2">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qty" value="{{ $product->qty }}">
                                                    </div>
                                                </div>
                                            </td>
                                        </form>

                                        <td class="price-total">
                                            <span class="amount">Ksh. {{ $product->price * $product->qty }} </span>
                                        </td>

                                        <td class="product-remove">
                                            <a href="{{ url('remove/cart/' . $product->rowId) }}"><i
                                                    class="icon-cross2"></i></a>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="shoping-update-area row">
                        <div class="continue-shopping-butotn col-6 mt-30">
                            <a href="{{ route('app.pages.shop') }}" class="btn btn--lg btn--black"><i class="icon-arrow-left"></i> Continue Shopping
                            </a>
                        </div>
                        <div class="update-cart-button col-6 text-right mt-30">
                            <a href="javascript:window.location.href=window.location.href" class="btn btn--lg btn--border_1">Update cart</a>
                        </div>
                    </div>
                    <div class="cart-buttom-area">
                        <div class="row">
                            <div class="col-lg-6">
                                @if (Session::has('coupon'))

                                @else

                                    <h5 style="margin-left: 20px;"> Apply Coupon </h5>
                                    <form method="post" action="{{ route('apply.coupon') }}">
                                        @csrf
                       
                                        <div class="discount-code section-space--mt_60">
                                            <h6 class="mb-30">Coupon Discount</h6>
                                            <p>Enter your coupon code if you have one.</p>
                                            <input type="text" name="coupon" placeholder="Coupon code">
                                            <button class="coupon-btn btn btn--lg btn--border_1" type="submit">Apply coupon</button>
                                        </div>
                                    </form>
                                @endif
                                
                            </div>
                            <div class="col-lg-6">
                                <div class="cart_totals section-space--mt_60 ml-md-auto">
                                    <div class="grand-total-wrap">
                                        <div class="grand-total-content">
                                            <ul>
                                                <li>Subtotal <span> Ksh. {{ Cart::subtotal() }} </span></li>
                                                <li>Tax and Service charges <span> Ksh. {{ Cart::tax() }} </span></li>
                                                <li>Total <span>Ksh. {{ Cart::total() }} </span> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grand-btn mt-30">
                                        <a href="{{ route('user.checkout') }}"
                                            class="btn--black btn--full text-center btn--lg">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- cart end -->

@endsection
