@extends('layouts.site.app')

@section('content')
    <!-- Slider Start-->
    <section class="slider">
        <div class="container">
            <div class="html_carousel">
                <div id="mainslider3">
                    <div class="item">
                        <div>
                            <a href="#"><img src="{{ asset('themes/img/index3banner.jpg') }}" alt="" title=""/></a>
                            <div class="text">
                                <h1 class="productname"><span
                                            class="bgnone">My First Simle One Ecommerce template</span></h1>
                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                                <div class="productprice">
                                    <div class="productpageprice">
                                        <span class="spiral"></span>$230.00
                                    </div>
                                    <div class="productpageoldprice">Old price : $345.00</div>
                                    <ul class="rate">
                                        <li class="on"></li>
                                        <li class="on"></li>
                                        <li class="on"></li>
                                        <li class="off"></li>
                                        <li class="off"></li>
                                    </ul>
                                </div>
                                <br>
                                <ul class="productpagecart">
                                    <li><a href="#" class="cart">Add to Cart</a>
                                    </li>
                                    <li><a href="#" class="wish">Add to Wishlist</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <a href="#"><img src="{{ asset('themes/img/index3banner2.jpg') }}" alt="" title=""/></a>
                            <div class="text">
                                <h1 class="productname"><span
                                            class="bgnone">My First Simle One Ecommerce template</span></h1>
                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                                <div class="productprice">
                                    <div class="productpageprice">
                                        <span class="spiral"></span>$230.00
                                    </div>
                                    <div class="productpageoldprice">Old price : $345.00</div>
                                    <ul class="rate">
                                        <li class="on"></li>
                                        <li class="on"></li>
                                        <li class="on"></li>
                                        <li class="off"></li>
                                        <li class="off"></li>
                                    </ul>
                                </div>
                                <br>
                                <ul class="productpagecart">
                                    <li><a href="#" class="cart">Add to Cart</a>
                                    </li>
                                    <li><a href="#" class="wish">Add to Wishlist</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- Slider End-->

    <!-- Section Start-->
    <section class="container otherddetails">
        <div class="otherddetailspart">
            <div class="innerclass free">
                <h2>Free shipping</h2>
                All over in world over $200
            </div>
        </div>
        <div class="otherddetailspart">
            <div class="innerclass payment">
                <h2>Easy Payment</h2>
                Payment Gatway support
            </div>
        </div>
        <div class="otherddetailspart">
            <div class="innerclass shipping">
                <h2>24hrs Shipping</h2>
                Free For UK Customers
            </div>
        </div>
        <div class="otherddetailspart">
            <div class="innerclass choice">
                <h2>Over 5000 Choice</h2>
                50,000+ Products
            </div>
        </div>
    </section>
    <!-- Section End-->
    <div class="container">
        <div class="row">
            <!-- Featured Product-->
            <div class="col-lg-6">
                <section id="featured" class="row mt40">
                    <h1 class="heading1"><span class="maintext">Featured Products</span></h1>
                    <ul class="thumbnails">
                        <li class="col-lg-6 col-sm-6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
                            <div class="thumbnail">
                                <a href="#"><img alt="" src="{{ asset('themes/img/product1a.jpg') }}"></a>
                                <div class="shortlinks">
                                    <a class="details" href="#">DETAILS</a>
                                    <a class="wishlist" href="#">WISHLIST</a>
                                    <a class="compare" href="#">COMPARE</a>
                                </div>
                                <div class="pricetag">
                                    <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                                    <div class="price">
                                        <div class="pricenew">$4459.00</div>
                                        <div class="priceold">$5000.00</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-6 col-sm-6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
                            <div class="thumbnail">
                                <a href="#"><img alt="" src="{{ asset('themes/img/product1a.jpg') }}"></a>
                                <div class="shortlinks">
                                    <a class="details" href="#">DETAILS</a>
                                    <a class="wishlist" href="#">WISHLIST</a>
                                    <a class="compare" href="#">COMPARE</a>
                                </div>
                                <div class="pricetag">
                                    <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                                    <div class="price">
                                        <div class="pricenew">$4459.00</div>
                                        <div class="priceold">$5000.00</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-6 col-sm-6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
                            <div class="thumbnail">
                                <span class="new tooltip-test">New</span>
                                <a href="#"><img alt="" src="{{ asset('themes/img/product1a.jpg') }}"></a>
                                <div class="shortlinks">
                                    <a class="details" href="#">DETAILS</a>
                                    <a class="wishlist" href="#">WISHLIST</a>
                                    <a class="compare" href="#">COMPARE</a>
                                </div>
                                <div class="pricetag">
                                    <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                                    <div class="price">
                                        <div class="pricenew">$4459.00</div>
                                        <div class="priceold">$5000.00</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-6 col-sm-6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
                            <div class="thumbnail">
                                <a href="#"><img alt="" src="{{ asset('themes/img/product1a.jpg') }}"></a>
                                <div class="shortlinks">
                                    <a class="details" href="#">DETAILS</a>
                                    <a class="wishlist" href="#">WISHLIST</a>
                                    <a class="compare" href="#">COMPARE</a>
                                </div>
                                <div class="pricetag">
                                    <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                                    <div class="price">
                                        <div class="pricenew">$4459.00</div>
                                        <div class="priceold">$5000.00</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>

            <!-- Latest Product-->
            <div class="col-lg-6">
                <section id="latest" class="row mt40">
                    <h1 class="heading1"><span class="maintext">Latest Products</span></h1>
                    <ul class="thumbnails">
                        <li class="col-lg-6  col-sm-6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
                            <div class="thumbnail">
                                <a href="#"><img alt="" src="{{ asset('themes/img/product2a.jpg') }}"></a>
                                <div class="shortlinks">
                                    <a class="details" href="#">DETAILS</a>
                                    <a class="wishlist" href="#">WISHLIST</a>
                                    <a class="compare" href="#">COMPARE</a>
                                </div>
                                <div class="pricetag">
                                    <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                                    <div class="price">
                                        <div class="pricenew">$4459.00</div>
                                        <div class="priceold">$5000.00</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-6 col-sm-6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
                            <div class="thumbnail">
                                <a href="#"><img alt="" src="{{ asset('themes/img/product2a.jpg') }}"></a>
                                <div class="shortlinks">
                                    <a class="details" href="#">DETAILS</a>
                                    <a class="wishlist" href="#">WISHLIST</a>
                                    <a class="compare" href="#">COMPARE</a>
                                </div>
                                <div class="pricetag">
                                    <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                                    <div class="price">
                                        <div class="pricenew">$4459.00</div>
                                        <div class="priceold">$5000.00</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-6 col-sm-6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
                            <div class="thumbnail">
                                <span class="new tooltip-test">New</span>
                                <a href="#"><img alt="" src="{{ asset('themes/img/product2a.jpg') }}"></a>
                                <div class="shortlinks">
                                    <a class="details" href="#">DETAILS</a>
                                    <a class="wishlist" href="#">WISHLIST</a>
                                    <a class="compare" href="#">COMPARE</a>
                                </div>
                                <div class="pricetag">
                                    <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                                    <div class="price">
                                        <div class="pricenew">$4459.00</div>
                                        <div class="priceold">$5000.00</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-6 col-sm-6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
                            <div class="thumbnail">
                                <a href="#"><img alt="" src="{{ asset('themes/img/product2a.jpg') }}"></a>
                                <div class="shortlinks">
                                    <a class="details" href="#">DETAILS</a>
                                    <a class="wishlist" href="#">WISHLIST</a>
                                    <a class="compare" href="#">COMPARE</a>
                                </div>
                                <div class="pricetag">
                                    <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                                    <div class="price">
                                        <div class="pricenew">$4459.00</div>
                                        <div class="priceold">$5000.00</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
@endsection
