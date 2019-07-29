@extends('layouts.public')
@section('title', 'Accessories')
@section('content')
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>aidu motors</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">accessories</li>
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
                        <div class="col-lg-12 col-md-8">
                            <div class="row">
                                @foreach($accessories as $accessory)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="{{ Storage::url($accessory->img_path) }}" height="300px" width="500px" alt="Car_Image" class="img impl_frst_car_img" />
                                                <img src="{{ Storage::url($accessory->img_path) }}" height="300px" width="500px" alt="Car_Image" class="img impl_hover_car_img" />
                                                <span class="impl_img_tag" title="compare"><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="/car/{{ $accessory->slug }}">{{ $accessory->name }}</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">Mileage</span><br>
                                                        <span class="impl_fea_name">{{ $accessory->description }}</span></li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">₹ {{ $accessory->price }} </span><span class="impl_bnw">Check Out</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            <!--pagination start-->
                                <div class="col-lg-12 col-md-12">
                                    <div class="impl_pagination_wrapper">
                                        <nav aria-label="Page navigation example">
                                            {{ $accessories->render() }}
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
