@extends('client.layouts.viewer')
@section('content')
<!-- Slider -->
<div class="tf-slideshow slider-effect-fade slider-skincare position-relative">
                <div class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1"
                    data-centered="false" data-space="0" data-loop="true" data-auto-play="false" data-delay="0"
                    data-speed="1000">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="wrap-slider">
                                <img src="{{ asset('users_assets/images/slider/furniture_slide1.jpg') }}"
                                    alt="fashion-slideshow">
                                <div class="box-content">
                                    <div class="container">
                                        <h1 class="fade-item fade-item-1 text-white">Chất lượng<br>Sang trọng và quý
                                            phái</h1>
                                        <p class="fade-item fade-item-2 text-white">Khám phá nội thất được tạo nên từ
                                            tinh hoa tay nghề và sự chăm chút trong từng đường nét.</p>
                                        <a href="#"
                                            class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-3"><span>abc</span><i
                                                class="icon icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wrap-slider">
                                <img src="{{ asset('users_assets/images/slider/furniture_slide2.jpg') }}"
                                    alt="fashion-slideshow">
                                <div class="box-content">
                                    <div class="container">
                                        <h1 class="fade-item fade-item-1 text-white">Sophisticated<br
                                                class="md-hidden">detailed design</h1>
                                        <p class="fade-item fade-item-2 text-white">Discover furniture crafted with
                                            meticulous attention to detail</p>
                                        <a href="#"
                                            class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-3"><span>Shop
                                                collection</span><i class="icon icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wrap-slider">
                                <img src="{{ asset('users_assets/images/slider/furniture_slide3.jpg') }}"
                                    alt="fashion-slideshow">
                                <div class="box-content">
                                    <div class="container">
                                        <h1 class="fade-item fade-item-1 text-white">High-end<br>luxury style</h1>
                                        <p class="fade-item fade-item-2 text-white">Discover furniture crafted with
                                            meticulous attention to detail</p>
                                        <a href="#"
                                            class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-3"><span>Shop
                                                collection</span><i class="icon icon-arrow-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-pagination sw-absolute-3">
                    <div class="sw-dots style-2 dots-white sw-pagination-slider justify-content-center"></div>
                </div>
            </div>
            <!-- Categories -->
            <section class="flat-spacing-18">
                <div class="container">
                    <div class="flat-title">
                        <span class="title wow fadeInUp" data-wow-delay="0s">Một số mẫu tham khảo</span>
                    </div>
                    <div class="wrap-carousel wrap-mobile">
                        <div class="swiper tf-sw-mobile" data-preview="1.3" data-space="15">
                            <div class="swiper-wrapper grid-mobile-1">
                                <div class="swiper-slide">
                                    <div class="collection-item-v2 hover-img">
                                        <a href="shop-collection-sub.html" class="collection-inner">
                                            <div class="collection-image img-style">
                                                <img class="lazyload"
                                                    data-src="{{ asset('users_assets/images/collections/furniture_cate1.jpg') }}"
                                                    src="{{ asset('users_assets/images/collections/furniture_cate1.jpg') }}"
                                                    alt="collection-img">
                                            </div>
                                            <div class="collection-content">
                                                <div class="top wow fadeInUp" data-wow-delay="0s">
                                                    <h5 class="heading">Living</h5>
                                                    <p class="subheading">Up to 60% off clothes</p>
                                                </div>
                                                <div class="bottom wow fadeInUp" data-wow-delay="0s">
                                                    <button class="tf-btn btn-line collection-other-link fw-6"><span>Shop
                                                            now</span><i class="icon icon-arrow1-top-left"></i></button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="collection-item-v2 hover-img">
                                        <div class="collection-inner">
                                            <div class="collection-image img-style">
                                                <img class="lazyload"
                                                    data-src="{{ asset('users_assets/images/collections/furniture_cate2.jpg') }}"
                                                    src="{{ asset('users_assets/images/collections/furniture_cate2.jpg') }}"
                                                    alt="collection-img">
                                            </div>
                                            <div class="collection-content">
                                                <div class="top wow fadeInUp" data-wow-delay="0s">
                                                    <h5 class="heading">Lighting</h5>
                                                    <p class="subheading">Modern lighting is poised</p>
                                                </div>
                                                <div class="bottom wow fadeInUp" data-wow-delay="0s">
                                                    <button class="tf-btn btn-line collection-other-link fw-6"><span>Shop
                                                            now</span><i class="icon icon-arrow1-top-left"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="collection-item-v2 hover-img">
                                        <a href="shop-collection-sub.html" class="collection-inner">
                                            <div class="collection-image img-style">
                                                <img class="lazyload"
                                                    data-src="{{ asset('users_assets/images/collections/furniture_cate3.jpg') }}"
                                                    src="{{ asset('users_assets/images/collections/furniture_cate3.jpg') }}"
                                                    alt="collection-img">
                                            </div>
                                            <div class="collection-content">
                                                <div class="top wow fadeInUp" data-wow-delay="0s">
                                                    <h5 class="heading">Season Collection</h5>
                                                    <p class="subheading">Free shipping</p>
                                                </div>
                                                <div class="bottom wow fadeInUp" data-wow-delay="0s">
                                                    <button class="tf-btn btn-line collection-other-link fw-6"><span>Shop
                                                            now</span><i class="icon icon-arrow1-top-left"></i></button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="collection-item-v2 hover-img">
                                        <a href="shop-collection-sub.html" class="collection-inner">
                                            <div class="collection-image img-style">
                                                <img class="lazyload"
                                                    data-src="{{ asset('users_assets/images/collections/furniture_cate4.jpg') }}"
                                                    src="{{ asset('users_assets/images/collections/furniture_cate4.jpg') }}"
                                                    alt="collection-img">
                                            </div>
                                            <div class="collection-content">
                                                <div class="top wow fadeInUp" data-wow-delay="0s">
                                                    <h5 class="heading">Outdoor Patio Sets</h5>
                                                    <p class="subheading">Up to 60% off sofa</p>
                                                </div>
                                                <div class="bottom wow fadeInUp" data-wow-delay="0s">
                                                    <button class="tf-btn btn-line collection-other-link fw-6"><span>Shop
                                                            now</span><i class="icon icon-arrow1-top-left"></i></button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="collection-item-v2 hover-img">
                                        <a href="shop-collection-sub.html" class="collection-inner">
                                            <div class="collection-image img-style">
                                                <img class="lazyload"
                                                    data-src="{{ asset('users_assets/images/collections/furniture_cate5.jpg') }}"
                                                    src="{{ asset('users_assets/images/collections/furniture_cate5.jpg') }}"
                                                    alt="collection-img">
                                            </div>
                                            <div class="collection-content">
                                                <div class="top wow fadeInUp" data-wow-delay="0s">
                                                    <h5 class="heading">Dining</h5>
                                                    <p class="subheading">Up to 60% off table</p>
                                                </div>
                                                <div class="bottom wow fadeInUp" data-wow-delay="0s">
                                                    <button class="tf-btn btn-line collection-other-link fw-6"><span>Shop
                                                            now</span><i class="icon icon-arrow1-top-left"></i></button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="collection-item-v2 hover-img">
                                        <a href="shop-collection-sub.html" class="collection-inner">
                                            <div class="collection-image img-style">
                                                <img class="lazyload"
                                                    data-src="{{ asset('users_assets/images/collections/furniture_cate6.jpg') }}"
                                                    src="{{ asset('users_assets/images/collections/furniture_cate6.jpg') }}"
                                                    alt="collection-img">
                                            </div>
                                            <div class="collection-content">
                                                <div class="top wow fadeInUp" data-wow-delay="0s">
                                                    <h5 class="heading">Bedroom</h5>
                                                    <p class="subheading">Snoozy and snazzy</p>
                                                </div>
                                                <div class="bottom wow fadeInUp" data-wow-delay="0s">
                                                    <button class="tf-btn btn-line collection-other-link fw-6"><span>Shop
                                                            now</span><i class="icon icon-arrow1-top-left"></i></button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- /Categories -->
             
        <!-- Iconbox -->
        <section class="flat-spacing-27 bg_beige-2">
            <div class="container">
                <div class="flat-title">
                    <span class="title wow fadeInUp text-white text-center" data-wow-delay="0s">We’re solving the biggest problems in furniture</span>
                </div>
                <div class="wrap-carousel wrap-mobile flat-iconbox-v2 style-2 wow fadeInUp" data-wow-delay="0s">
                    <div class="swiper tf-sw-mobile-1" data-preview="1" data-space="15">
                        <div class="swiper-wrapper wrap-iconbox">
                            <div class="swiper-slide">
                                <div class="tf-icon-box text-center">
                                    <div class="icon">
                                        <i class="icon-shipping-1 text-white"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title text-white">Fast & free shipping</div>
                                        <p class="text-white">Every single order ships for free. No minimums, no tiers, no fine print whatsoever.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box text-center">
                                    <div class="icon">
                                        <i class="icon-payment-1 text-white"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title text-white">Modular, easy-to-move design</div>
                                        <p class="text-white">Our innovative modular design is driven by the belief that furniture should fit this home, and the next one.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box text-center">
                                    <div class="icon">
                                        <i class="icon-return-1 text-white"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title text-white">Durable, premium materials</div>
                                        <p class="text-white">We use materials like sustainably-forested wood, strengthened steel hardware, and top-grain Italian leather.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="sw-dots style-2 sw-pagination-mb-1 justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Iconbox -->
        <!-- Seller -->
        <section class="flat-spacing-27">
            <div class="container">
                <div class="flat-title flex-row justify-content-between px-0">
                    <span class="title wow fadeInUp" data-wow-delay="0s">Best Seller</span>
                    <div class="box-sw-navigation">
                        <div class="nav-sw square nav-next-slider nav-next-product"><span class="icon icon-arrow1-left"></span></div>
                        <div class="nav-sw square nav-prev-slider nav-prev-product"><span class="icon icon-arrow1-right"></span></div>
                    </div>
                </div>
                <div class="hover-sw-nav hover-sw-2">
                    <div class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('users_assets/images/products/furniture-1.jpg') }}" src="{{ asset('users_assets/images/products/furniture-1.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('users_assets/images/products/furniture-1.jpg') }}" src="{{ asset('users_assets/images/products/furniture-1.jpg') }}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                      
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Brasilia Lounge Chair</a>
                                        <span class="price">$982.00</span>
                                        
                                    </div>
                                </div>                                
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('users_assets/images/products/furniture-2.jpg') }}" src="{{ asset('users_assets/images/products/furniture-2.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('users_assets/images/products/furniture-3.jpg') }}" src="{{ asset('users_assets/images/products/furniture-3.jpg') }}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Lina Swivel Chair</a>
                                        <span class="price">$3,600.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Grey</span>
                                                <span class="swatch-value bg_grey"></span>
                                                <img class="lazyload" data-src="{{ asset('users_assets/images/products/furniture-2.jpg') }}" src="{{ asset('users_assets/images/products/furniture-2.jpg') }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Cream</span>
                                                <span class="swatch-value bg_cream"></span>
                                                <img class="lazyload" data-src="{{ asset('users_assets/images/products/furniture-3.jpg') }}" src="{{ asset('users_assets/images/products/furniture-3.jpg') }}" alt="image-product">
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('users_assets/images/products/furniture-4.jpg') }}" src="{{ asset('users_assets/images/products/furniture-4.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('users_assets/images/products/furniture-5.jpg') }}" src="{{ asset('users_assets/images/products/furniture-5.jpg') }}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">MG501 Cuba Lounge Chair, Paper Cord</a>
                                        <span class="price">
                                            <span class="old-price">$1,366.00</span>
                                            <span class="new-price">$1,290.00</span>
                                        </span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="{{ asset('users_assets/images/products/furniture-4.jpg') }}" src="{{ asset('users_assets/images/products/furniture-4.jpg') }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Cream</span>
                                                <span class="swatch-value bg_cream"></span>
                                                <img class="lazyload" data-src="{{ asset('users_assets/images/products/furniture-5.jpg') }}" src="{{ asset('users_assets/images/products/furniture-5.jpg') }}" alt="image-product">
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('users_assets/images/products/furniture-6.jpg') }}" src="{{ asset('users_assets/images/products/furniture-6.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('users_assets/images/products/furniture-7.jpg') }}" src="{{ asset('users_assets/images/products/furniture-7.jpg') }}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">MR Chaise</a>
                                        <span class="price">$1,999.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Light Grey</span>
                                                <span class="swatch-value bg_light-grey"></span>
                                                <img class="lazyload" data-src="{{ asset('users_assets/images/products/furniture-6.jpg') }}" src="{{ asset('users_assets/images/products/furniture-6.jpg') }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="{{ asset('users_assets/images/products/furniture-7.jpg') }}" src="{{ asset('users_assets/images/products/furniture-7.jpg') }}" alt="image-product">
                                            </li>
                                      
                                        </ul>
                                    </div>
                                </div>    
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('users_assets/images/products/furniture-8.jpg') }}" src="{{ asset('users_assets/images/products/furniture-8.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('users_assets/images/products/furniture-9.jpg') }}" src="{{ asset('users_assets/images/products/furniture-9.jpg') }}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Scissor Chair</a>
                                        <span class="price">Form $2,755.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Beige</span>
                                                <span class="swatch-value bg_beige"></span>
                                                <img class="lazyload" data-src="{{ asset('users_assets/images/products/furniture-8.jpg') }}" src="{{ asset('users_assets/images/products/furniture-8.jpg') }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Navy</span>
                                                <span class="swatch-value bg_navy"></span>
                                                <img class="lazyload" data-src="{{ asset('users_assets/images/products/furniture-9.jpg') }}" src="{{ asset('users_assets/images/products/furniture-9.jpg') }}" alt="image-product">
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>    
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('users_assets/images/products/furniture-10.jpg') }}" src="{{ asset('users_assets/images/products/furniture-10.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('users_assets/images/products/furniture-11.jpg') }}" src="{{ asset('users_assets/images/products/furniture-11.jpg') }}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="on-sale-wrap text-end">
                                            <div class="on-sale-item pre-order">Pre-Oder</div>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Soborg Model 3052 Dining Chair</a>
                                        <span class="price">
                                            <span class="old-price">$1,695.00</span>
                                            <span class="new-price">$1,356.00</span>
                                        </span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="{{ asset('users_assets/images/products/furniture-10.jpg') }}" src="{{ asset('users_assets/images/products/furniture-10.jpg') }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Copper</span>
                                                <span class="swatch-value bg_copper"></span>
                                                <img class="lazyload" data-src="{{ asset('users_assets/images/products/furniture-11.jpg') }}" src="{{ asset('users_assets/images/products/furniture-11.jpg') }}" alt="image-product">
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>     
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('users_assets/images/products/furniture-12.jpg') }}" src="{{ asset('users_assets/images/products/furniture-12.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('users_assets/images/products/furniture-13.jpg') }}" src="{{ asset('users_assets/images/products/furniture-13.jpg') }}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Womb Ottoman</a>
                                        <span class="price">
                                            <span class="old-price">$1,695.00</span>
                                            <span class="new-price">$1,356.00</span>
                                        </span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Brown</span>
                                                <span class="swatch-value bg_brown"></span>
                                                <img class="lazyload" data-src="{{ asset('users_assets/images/products/furniture-12.jpg') }}" src="{{ asset('users_assets/images/products/furniture-12.jpg') }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="{{ asset('users_assets/images/products/furniture-13.jpg') }}" src="{{ asset('users_assets/images/products/furniture-13.jpg') }}" alt="image-product">
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>     
                            </div>
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                </div>
            </div>
        </section>
        <!-- /Seller -->
        <!-- Collection -->
        <section class="bg_cream-2 flat-spacing-12">
            <div class="container">
                <div class="flat-title flat-title-v5">
                    <span class="title wow fadeInUp text-center" data-wow-delay="0s">Explore each unique collection</span>
                </div>
                <div class="wrap-carousel">
                    <div class="swiper tf-sw-collection" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" lazy="true">
                                <div class="banner-gr-item hover-img">
                                    <div class="img-style">
                                        <a href="#">
                                            <img class="lazyload" data-src="{{ asset('users_assets/images/collections/furniture_cate7.jpg') }}" src="{{ asset('users_assets/images/collections/furniture_cate7.jpg') }}" alt="banner-collection">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <a href="#" class="link fw-5">Urban Retreat</a>
                                        </div>
                                        <a href="#" class="tf-btn btn-line fw-6">Shop Collection<i class="icon icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="banner-gr-item hover-img">
                                    <div class="img-style">
                                        <a href="#">
                                            <img class="lazyload" data-src="{{ asset('users_assets/images/collections/furniture_cate8.jpg') }}" src="{{ asset('users_assets/images/collections/furniture_cate8.jpg') }}" alt="banner-collection">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <a href="#" class="link fw-5">Coastal Serenity</a>
                                        </div>
                                        <a href="#" class="tf-btn btn-line fw-6">Shop Collection<i class="icon icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="banner-gr-item hover-img">
                                    <div class="img-style">
                                        <a href="#">
                                            <img class="lazyload" data-src="{{ asset('users_assets/images/collections/furniture_cate9.jpg') }}" src="{{ asset('users_assets/images/collections/furniture_cate9.jpg') }}" alt="banner-collection">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <a href="#" class="link fw-5">Mid-Century Modern</a>
                                        </div>
                                        <a href="#" class="tf-btn btn-line fw-6">Shop Collection<i class="icon icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dots style-2 sw-pagination-collection justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Collection -->
        <!-- Testimonial -->
        <section class="flat-testimonial-v2 flat-spacing-12 ">
            <div class="container">
                <div class="wrapper-thumbs-testimonial-v2 flat-thumbs-testimonial">
                    <div class="box-left">
                        <div class="swiper tf-sw-tes-2" data-preview="1" data-space-lg="40" data-space-md="30">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item lg lg-2 lg-3">
                                        <div class="icon">
                                            <img class="lazyloaded" data-src="{{ asset('users_assets/images/item/quote.svg') }}" src="{{ asset('users_assets/images/item/quote.svg') }}">
                                        </div>
                                        <div class="heading fs-12 mb_18">OUR CUSTOMERS' RAVE REVIEWS</div>
                                        <div class="rating">
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                        </div>
                                        <p class="text">
                                            I'm impressed with the durability of the furniture collection. Even after years of use, the pieces still look and feel as good as new
                                        </p>
                                        <div class="author box-author">
                                            <div class="box-img d-md-none rounded-0">
                                                <img class="lazyload img-product" data-src="{{ asset('users_assets/images/item/furniture_testimonial1.jpg') }}" src="{{ asset('users_assets/images/item/furniture_testimonial1.jpg') }}" alt="image-product">
                                            </div>
                                            <div class="content">
                                                <div class="name">Robert smith</div>
                                                <a href="product-detail.html" class="metas link">Purchase item:<span> MR Chaise</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item lg lg-2 lg-3">
                                        <div class="icon">
                                            <img class="lazyloaded" data-src="{{ asset('users_assets/images/item/quote.svg') }}" src="{{ asset('users_assets/images/item/quote.svg') }}" alt="">
                                        </div>
                                        <div class="heading fs-12 mb_18">OUR CUSTOMERS' RAVE REVIEWS</div>
                                        <div class="rating">
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                        </div>
                                        <p class="text">
                                            I have been shopping with this web fashion site for over a year now and I can confidently say it is the best online.
                                        </p>
                                        <div class="author box-author">
                                            <div class="box-img d-md-none rounded-0">
                                                <img class="lazyload img-product" data-src="{{ asset('users_assets/images/item/furniture_testimonial2.jpg') }}" src="{{ asset('users_assets/images/item/furniture_testimonial2.jpg') }}" alt="image-product">
                                            </div>
                                            <div class="content">
                                                <div class="name">Alex Graham</div>
                                                <a href="product-detail.html" class="metas link">Purchase item:<span> Bonbon Shade</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex d-none box-sw-navigation">
                            <div class="nav-sw nav-next-slider nav-next-tes-2"><span class="icon icon-arrow-left"></span></div>
                            <div class="nav-sw nav-prev-slider nav-prev-tes-2"><span class="icon icon-arrow-right"></span></div>
                        </div>
                        <div class="d-md-none sw-dots style-2 sw-pagination-tes-2"></div>
                    </div>
                    <div class="box-right">
                        <div class="swiper tf-thumb-tes" data-preview="1" data-space="30">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="img-sw-thumb">
                                        <img class="lazyload img-product" data-src="{{ asset('users_assets/images/item/furniture_testimonial1.jpg') }}" src="{{ asset('users_assets/images/item/furniture_testimonial1.jpg') }}" alt="image-product">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-sw-thumb">
                                        <img class="lazyload img-product" data-src="{{ asset('users_assets/images/item/furniture_testimonial2.jpg') }}" src="{{ asset('users_assets/images/item/furniture_testimonial2.jpg') }}" alt="image-product">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->
@endsection