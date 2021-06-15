@extends('app.layout.header')

@php

$categories = DB::table('categories')->get();
$brands = DB::table('brands')->get();
$subcategories = DB::table('subcategories')->get();

$products = DB::table('products')
    ->join('brands', 'products.brand_id', 'brands.id')
    ->join('categories', 'products.category_id', 'categories.id')
    ->join('subcategories', 'products.subcategory_id', 'subcategories.id')
    ->select('products.*', 'brands.brand_name', 'categories.category_name', 'subcategories.subcategory_name')
    ->where('products.status', 1)
    ->orderBy('id', 'desc')
    ->get();
@endphp

@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area section-space--pt_120 section-space--pb_60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row breadcrumb_box  align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 text-center text-sm-left">
                            <h2 class="breadcrumb-title">Shop</h2>
                        </div>
                        <div class="col-lg-6  col-md-6 col-sm-6">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list text-center text-sm-right">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Shop</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- Product Area Start -->
    <div class="product-wrapper section-space--ptb_120">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-3 order-md-1 order-2  small-mt__40">
                    <div class="shop-widget widget-shop-categories">
                        <div class="product-filter">
                            <h6 class="mb-20">Categories</h6>
                            <ul class="widget-nav-list">
                                @foreach ($categories as $category)
                                    <li><a href="#">{{ $category->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Product Filter -->
                    <div class="shop-widget">
                        <div class="product-filter widget-price">
                            <h6 class="mb-20">Brands</h6>
                            <ul class="widget-nav-list">
                                @foreach ($brands as $brand)
                                    <li><a href="#">{{ $brand->brand_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Product Filter -->

                    <div class="shop-widget">
                        <div class="product-filter">
                            <h6 class="mb-20">Tags</h6>
                            <div class="tagcloud">
                                <a href="#" class="selected">All</a>
                                @foreach ($subcategories as $subcategory)
                                    <a href="#" class="">{{ $subcategory->subcategory_name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9  order-md-2 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="shop-toolbar__items shop-toolbar__item--left">
                                <div class="shop-toolbar__item shop-toolbar__item--result">
                                    <p class="result-count"> Showing 1–9 of 21</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="shop-toolbar__items shop-toolbar__item--right">
                                <div class="shop-toolbar__items-wrapper">

                                    <div class="shop-toolbar__item">
                                        <ul class="nav toolber-tab-menu justify-content-start" role="tablist">
                                            <li class="tab__item nav-item active">
                                                <a class="nav-link active" data-toggle="tab" href="#tab_columns_01"
                                                    role="tab">
                                                    <img src="{{ asset('sanaaspace/assets/images/svg/column-03.svg') }}"
                                                        class="img-fluid" alt="Columns 03">
                                                </a>
                                            </li>
                                            <li class="tab__item nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tab_columns_02" role="tab"><img
                                                        src="{{ asset('sanaaspace/assets/images/svg/column-04.svg') }}"
                                                        class="img-fluid" alt="Columns 03"> </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="shop-toolbar__item shop-toolbar__item--filter ">
                                        <a class="shop-filter-active" href="#">Filter<i class="icon-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="product-filter-wrapper">
                        <div class="row">
                            <!-- Product Filter -->
                            <div class=" mb-20 col__20">
                                <div class="product-filter">
                                    <h5>Color</h5>
                                    <ul class="widget-nav-list">
                                        <li><a href="#"><span class="swatch-color black"></span> Black</a></li>
                                        <li><a href="#"><span class="swatch-color green"></span> Green</a></li>
                                        <li><a href="#"><span class="swatch-color grey"></span> Grey</a></li>
                                        <li><a href="#"><span class="swatch-color red"></span> Red</a></li>
                                        <li><a href="#"><span class="swatch-color white"></span> White</a></li>
                                        <li><a href="#"><span class="swatch-color yellow"></span> Yellow</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product Filter -->
                            <div class=" mb-20 col__20">
                                <div class="product-filter">
                                    <h5>Size</h5>
                                    <ul class="widget-nav-list">
                                        <li><a href="#">Large</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Small</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product Filter -->
                            <div class=" mb-20 col__20">
                                <div class="product-filter">
                                    <h5>Price</h5>
                                    <ul class="widget-nav-list">
                                        <li><a href="#">$0.00 - $20.00</a></li>
                                        <li><a href="#">$20.00 - $40.00</a></li>
                                        <li><a href="#">£40.00 - £50.00</a></li>
                                        <li><a href="#">£50.00 - £60.00</a></li>
                                        <li><a href="#">£60.00 +</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product Filter -->
                            <div class=" mb-20 col__20">
                                <div class="product-filter">
                                    <h5>Categories</h5>
                                    <ul class="widget-nav-list">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Chair</a></li>
                                        <li><a href="#">Decoration</a></li>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Table</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=" mb-20 col__20">
                                <div class="product-filter">
                                    <h5>Tags</h5>
                                    <div class="tagcloud"><a href="#" class="selected">All</a><a href="#"
                                            class="">Accesssories</a><a href="#" class="">Box</a><a href="#"
                                            class="">chair</a><a href="#" class="">Deco</a><a href="#"
                                            class="">Furniture</a><a href="#" class="">Glass</a><a href="#"
                                            class="">Pottery</a><a href="#" class="">Table</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab_columns_01">
                            <div class="row">

                                @foreach ($products as $product)
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Single Product Item Start -->
                                            <div class="single-product-item text-center">
                                                <div class="products-images">
                                                    <a href="{{ url('product/details/' . $product->id . '/' . $product->product_name) }}"
                                                        tabindex="0" class="product-thumbnail">
                                                        <img src="{{ asset($product->image_one) }}" class="img-fluid" alt="Product Images">
                                                    </a>
                                                        
                                                    <div class="product-actions">
                                                        <a href="{{ url('product/details/' . $product->id . '/' . $product->product_name) }} data-toggle="modal" data-target="#prodect-modal">
                                                            <i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a>
                                                        <a class="button addcart" data-id="{{ $product->id }}">
                                                            <i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a>
                                                        <a class="button addwishlist" data-id="{{ $product->id }}">
                                                            <i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a>
                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <h6 class="product-title">{{ $product->product_name }} </h6>

                                                    <div class="product-price">
                                                        <span class="new-price"> {{ $product->brand_name }} </span>
                                                    </div>
                                                    <div class="product-brand">
                                                        <span class="new-price"> Ksh. {{ $product->selling_price }} </span>
                                                    </div>

                                                </div>
                                            </div>
                                        <!-- Single Product Item End -->
                                    </div>
                                
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Product Area End -->

    <hr class="solid">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript">
    
   $(document).ready(function(){
     $('.addcart').on('click', function(){
        var id = $(this).data('id');
        if (id) {
            $.ajax({
                url: " {{ url('/add/to/cart/') }}/"+id,
                type:"GET",
                datType:"json",
                success:function(data){
             const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true,
                  onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
                })

             if ($.isEmptyObject(data.error)) {

                Toast.fire({
                  icon: 'success',
                  title: data.success
                })
             }else{
                 Toast.fire({
                  icon: 'error',
                  title: data.error
                })
             }
 

                },
            });

        }else{
            alert('danger');
        }
     });

   });


</script>

<script type="text/javascript">
    function productview(id) {
        $.ajax({
            url: "{{ url('/cart/product/view/') }}/" + id,
            type: "GET",
            dataType: "json",
            success: function(data) {
                $('#pcode').text(data.product.product_code);
                $('#pcat').text(data.product.category_name);
                $('#psub').text(data.product.subcategory_name);
                $('#pbrand').text(data.product.brand_name);
                $('#pname').text(data.product.product_name);
                $('#pimage').attr('src', data.product.image_one);
                $('#product_id').val(data.product.id);

                var d = $('select[name="color"]').empty();
                $.each(data.color, function(key, value) {
                    $('select[name="color"]').append('<option value="' + value + '">' + value + '</option>');
                });

                var d = $('select[name="size"]').empty();
                $.each(data.size, function(key, value) {
                    $('select[name="size"]').append('<option value="' + value + '">' + value + '</option>');
                });


            }
        })
    }
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $('.addwishlist').on('click', function() {
            var id = $(this).data('id');
            if (id) {
                $.ajax({
                    url: " {{ url('add/wishlist/') }}/" + id,
                    type: "GET",
                    datType: "json",
                    success: function(data) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            onOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        if ($.isEmptyObject(data.error)) {

                            Toast.fire({
                                icon: 'success',
                                title: data.success
                            })
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: data.error
                            })
                        }


                    },
                });

            } else {
                alert('danger');
            }
        });

    });
</script>


@endsection
