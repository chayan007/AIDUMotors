@extends('layouts.public')
@section('title', 'Cars')
@section('content')
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>aidu motors</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">cars</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Purchase new section Start ------>
    <div class="impl_purchase_wrapper">
        <div class="container">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_purchase_inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="impl_sidebar">
                                    <div class="impl_product_search widget woocommerce">
                                        <div class="impl_footer_subs">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <button class="foo_subs_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <!--Price Range-->
                                    <div class="impl_product_price widget woocommerce">
                                        <h2 class="widget-title">price range</h2>
                                        <div class="price_range">
                                            <input type="text" id="range_24" name="ionRangeSlider" value="" />
                                        </div>
                                    </div>
                                    <!--Car Type-->
                                    <div class="impl_product_type widget woocommerce">
                                        <h2 class="widget-title">car type</h2>
                                        <ul>
                                            <li><a href="#">Hatchback</a></li>
                                            <li><a href="#">Sedan</a></li>
                                            <li><a href="#">MPV</a></li>
                                            <li><a href="#">SUV</a></li>
                                            <li><a href="#">Couple</a></li>
                                            <li><a href="#">Convertible</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <div class="row">
                                    @foreach($cars as $car)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="impl_fea_car_box">
                                                <div class="impl_fea_car_img">
                                                    <img src="{{ Storage::url($car->img_path) }}" height="300px" width="500px" alt="Car_Image" class="img-fluid impl_frst_car_img" />
                                                    <img src="{{ Storage::url($car->img_path) }}" height="300px" width="500px" alt="Car_Image" class="img-fluid impl_hover_car_img" />
                                                    <span class="impl_img_tag" title="compare"><a href="/car/1"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                                </div>
                                                <div class="impl_fea_car_data">
                                                    <h2><a href="/car/1">{{ $car->model }}</a></h2>
                                                    <ul>
                                                        <li><span class="impl_fea_title">Mileage</span>
                                                            <span class="impl_fea_name">{{ $car->mileage }}</span></li>
                                                        <li><span class="impl_fea_title">Type</span>
                                                            <span class="impl_fea_name">{{ $car->type }}</span></li>
                                                        <li><span class="impl_fea_title">Transmission</span>
                                                            <span class="impl_fea_name">{{ $car->transmission }}</span></li>
                                                    </ul>
                                                    <div class="impl_fea_btn">
                                                        <button class="impl_btn"><span class="impl_doller">₹ {{ $car->price }} </span><span class="impl_bnw">Check Out</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!--pagination start-->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="impl_pagination_wrapper">
                                            <nav aria-label="Page navigation example">
                                                {{ $cars->render() }}
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
