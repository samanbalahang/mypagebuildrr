@extends('thepublic.layout.master')

@section("extracss")

<meta name="ip" content="<?php echo $_SERVER['REMOTE_ADDR'] ?>">
<link href="{{url('/')}}/assets/css/style.min.css" rel="stylesheet">

@endsection

<!--Main Navigation-->

@section("main")
<main class="mt-3">
    <section id="tablighat">
        <div class="container">
            <h1>
                عنوان صفحه با توضیح
            </h1>
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="vip">
        <div class="container-fluid vip">
            <h2>vip</h2>
            <div class="slogan">
                <p>
                    متن تبلیغی
                </p>
            </div>
            <div class="container">
                <div class="swiper mySwiper amazing-offers" id="bigbanner">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/images/product.jpg" alt="محصول" />
                                <div class="card-body">
                                    <p>
                                        متن تبلیغی
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/images/product.jpg" alt="محصول" />
                                <div class="card-body">
                                    <p>
                                        متن تبلیغی
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/images/product.jpg" alt="محصول" />
                                <div class="card-body">
                                    <p>
                                        متن تبلیغی
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/images/product.jpg" alt="محصول" />
                                <div class="card-body">
                                    <p>
                                        متن تبلیغی
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/images/product.jpg" alt="محصول" />
                                <div class="card-body">
                                    <p>
                                        متن تبلیغی
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/images/product.jpg" alt="محصول" />
                                <div class="card-body">
                                    <p>
                                        متن تبلیغی
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="towcol">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card bg-vip-blue">
                        <div class="d-flex align-items-center">
                            <div class="w-60">
                                <img src="assets/images/sofa.png" alt="مبل">
                            </div>
                            <div class="w-40">
                                <p>
                                    متن تبلیغی
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card bg-vip-yellow">
                        <div class="d-flex align-items-center">
                            <div class="w-60">
                                <img src="assets/images/sofa.png" alt="مبل">
                            </div>
                            <div class="w-40 ">
                                <p>
                                    متن تبلیغی
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tablighat">
        <div class="container">
            <h2>
                عنوان صفحه با توضیح
            </h2>
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="full-slider midelfullslider">
        <div class="swiper mySwiper main-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="position-relative">
                        <img src="assets/images/product.jpg" alt="محصول" />

                        <div class="single-slider-content-div">
                            <div class="single-slider-content">
                                <div>
                                    <p>
                                        متن تبلیغی
                                    </p>
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="position-relative">
                        <img src="assets/images/product.jpg" alt="محصول" />
                        <div class="single-slider-content-div">
                            <div class="single-slider-content">
                                <div>

                                    <p>
                                        متن تبلیغی
                                    </p>
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="position-relative">
                        <img src="assets/images/product.jpg" alt="محصول" />
                        <div class="single-slider-content-div">
                            <div class="single-slider-content">
                                <div>
                                    <p>
                                        متن تبلیغی
                                    </p>
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="position-relative">
                        <img src="assets/images/product.jpg" alt="محصول" />
                        <div class="single-slider-content-div">
                            <div class="single-slider-content">
                                <div>
                                    <p>
                                        متن تبلیغی
                                    </p>
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="position-relative">
                        <img src="assets/images/product.jpg" alt="محصول" />
                        <div class="single-slider-content-div">
                            <div class="single-slider-content">
                                <div>
                                    <p>
                                        متن تبلیغی
                                    </p>
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="position-relative">
                        <img src="assets/images/product.jpg" alt="محصول" />
                        <div class="single-slider-content-div">
                            <div class="single-slider-content">
                                <div>
                                    <p>
                                        متن تبلیغی
                                    </p>
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="tablighat">
        <div class="container">
            <h2>
                عنوان صفحه با توضیح
            </h2>
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="colord-div second-color">
        <div class="container-fluid second-color">
            <h2>vip</h2>
            <div class="slogan">
                <p>
                    متن تبلیغی
                </p>
            </div>
            <div class="container">
                <div class="swiper mySwiper amazing-offers" id="bigbanner">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/images/product.jpg" alt="محصول" />
                                <div class="card-body">
                                    <p>
                                        متن تبلیغی
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/images/product.jpg" alt="محصول" />
                                <div class="card-body">
                                    <p>
                                        متن تبلیغی
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/images/product.jpg" alt="محصول" />
                                <div class="card-body">
                                    <p>
                                        متن تبلیغی
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/images/product.jpg" alt="محصول" />
                                <div class="card-body">
                                    <p>
                                        متن تبلیغی
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/images/product.jpg" alt="محصول" />
                                <div class="card-body">
                                    <p>
                                        متن تبلیغی
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/images/product.jpg" alt="محصول" />
                                <div class="card-body">
                                    <p>
                                        متن تبلیغی
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            خرید محصول
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="tablighat">
        <div class="container">
            <h2>
                عنوان صفحه با توضیح
            </h2>
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-3">
                        <a href="">
                            <div class="image-container product">
                                <img src="{{url('/')}}/assets/images/product.jpg" alt="محصول">
                            </div>
                            <div class="matn-tabligh">
                                <p>
                                    متن تبلیغاتی
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



@endsection

@section("extrajs")
<script src="{{url('/')}}/assets/js/swiper-bundle.min.js"></script>
<script src="{{url('/')}}/assets/js/script.js"></script>
<script>
        $("#getIP").on("click",function(e){
            var myIp = $("meta[name=ip]").attr("content"); 
            var url = "http://ip-api.com/json/"+myIp;
            $.get(url, function(data, status){
            alert("شما از کشور: " + data.country + "\nشهر: " + data.city+"\nبا اپراتور: " + data.isp);
            e.preventDefault();
        });
    });

</script>

@endsection