@extends('layouts.public')
@section('title',$car->model)
@section('content')
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{ $car->model }}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="/cars">Cars</a></li>
                        <li class="breadcrumb-item active">{{ $car->model }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Purchase Car Start ------>
    <div class="impl_buy_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="impl_buycar_wrapper">
                        <div class="impl_buycar_color" id="color_car">
                            <div class="slider slider-for1">
                                <div>
                                    <img src="{{ Storage::url($car->img_path) }}" alt=""></div>
                                <div>
                                    <h3><img src="{{ Storage::url($car->img_path) }}" alt=""></h3>
                                </div>
                                <div>
                                    <h3><img src="{{ Storage::url($car->img_path) }}" alt=""></h3>
                                </div>
                                <div>
                                    <h3><img src="{{ Storage::url($car->img_path) }}" alt=""></h3>
                                </div>
                                <div>
                                    <h3><img src="{{ Storage::url($car->img_path) }}" alt=""></h3>
                                </div>
                            </div>
                            <div class="slider slider-nav1">
                                <div><span class="car_color car_clr1"></span></div>
                                <div><span class="car_color car_clr2"></span></div>
                                <div><span class="car_color car_clr4"></span></div>
                                <div><span class="car_color car_clr5"></span></div>
                                <div><span class="car_color car_clr6"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="impl_buycar_data">
                        <h1>{{ $car->model }}</h1>
                        <h1>₹ {{ $car->price }} </h1>
                        <div class="car_emi_wrapper">
                            <span>Emi Starts at ₹ {{ $car->emi }} /- *</span>
                            <a href="/contact"><i class="fa fa-info-circle" aria-hidden="true"></i> Get EMI Assistance</a>
                        </div>
                        <p>{{ $car->description }}</p>
                        <div class="impl_old_buy_btn">
                            <a href="/cars" class="impl_btn">Check Other Cars</a>
                            <a href="/contact" class="impl_btn">Contact</a>
                            <a href="/services" class="impl_btn">Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
