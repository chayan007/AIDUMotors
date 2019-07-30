@extends('layouts.public')
@section('title', 'Home')
@section('content')
    <!------ Slider Start ------>
    <div class="impl_home_slider_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="impl_home_slider">
                        <div class="item">
                            <h1>find your <br> dream car </h1>
                            <img src="{{ asset('images/cars/renault_PNG.png') }}" height="400px" width="800px" alt="" />
                        </div>
                        <div class="item">
                            <h1>Visit us at <br> aidu motors </h1>
                            <img src="{{ asset('images/cars/renault_PNG2.png') }}" height="400px" width="750px" alt="" />
                        </div>
                        <div class="item">
                            <h1>Renault Outlet<br> in Aizawl </h1>
                            <img src="{{ asset('images/cars/renault_PNG3.png') }}" height="400px" width="800px" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="impl_ex_btn">
                        <a href="/cars">Explore Now <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="mouse-wrap impl_scroll">
                        <div class="mouse">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="40px">
                                <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                      d="M12.500,-0.002 C5.607,-0.002 -0.000,5.592 -0.000,12.468 L-0.000,27.529 C-0.000,34.405 5.607,39.998 12.500,39.998 C19.393,39.998 25.000,34.405 25.000,27.529 L25.000,12.468 C25.000,5.592 19.393,-0.002 12.500,-0.002 ZM23.501,12.468 L23.501,12.665 C20.274,14.356 16.666,15.283 12.999,15.361 L12.999,11.191 C14.057,10.963 14.851,10.023 14.851,8.900 L14.851,5.774 C14.851,4.652 14.057,3.711 12.999,3.482 L12.999,1.505 C18.835,1.767 23.501,6.583 23.501,12.468 ZM12.500,4.425 C13.245,4.425 13.852,5.031 13.852,5.774 L13.852,8.900 C13.852,9.644 13.246,10.249 12.500,10.249 C11.754,10.249 11.148,9.645 11.148,8.900 L11.148,5.774 C11.148,5.031 11.754,4.425 12.500,4.425 ZM12.000,1.505 L12.000,3.483 C10.943,3.712 10.149,4.652 10.149,5.774 L10.149,8.900 C10.149,10.023 10.943,10.963 12.000,11.191 L12.000,15.361 C8.334,15.283 4.725,14.356 1.499,12.665 L1.499,12.468 C1.498,6.583 6.165,1.767 12.000,1.505 ZM12.500,38.504 C6.434,38.504 1.498,33.581 1.498,27.529 L1.498,13.784 C4.896,15.474 8.676,16.363 12.500,16.363 C16.324,16.363 20.103,15.474 23.501,13.784 L23.501,27.529 C23.501,33.581 18.566,38.504 12.500,38.504 Z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="impl_change_text">
                        <div id="holder">
                            <div id="slogans">
                                <p class="slogan"><strong>Starting ₹4,00,000/-</strong></p>
                                <p class="slogan"><strong>Starting ₹4,00,000/-</strong></p>
                                <p class="slogan"><strong>Starting ₹4,00,000/-</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Search Box Start ------>
    <div class="impl_searchbox_wrapper impl_home_searchbox">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <div class="impl_search_box   custom_select">
                                <h1>Search Your Car</h1>
                                <select>
                                    <option>Select Type</option>
                                    <option >Hatchback</option>
                                    <option >Sedan</option>
                                    <option >MPV</option>
                                    <option >SUV</option>
                                    <option >Couple</option>
                                    <option >Convertible</option>
                                </select>
                                <select>
                                    <option>Select Transmission</option>
                                    <option value="Auto">Auto</option>
                                    <option value="Manual">Manual</option>
                                    <option value="Auto/Manual">Auto & Manual</option>
                                </select>
                                <div class="impl_search_btn">
                                    <button class="impl_btn">search vehicle</button>
                                </div>
                            </div>
                        </div>
                        <!--about info-->
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="impl_facility_wrapper">
                                        <img src="https://ik.imagekit.io/hj8sm3kk7/medium/gallery/exterior/33/302/renault-duster-front-angle-low-view-403840.jpg" alt="" height="180px" width="310px"/>
                                        <div class="impl_ser_hover_ovrly">
                                            <div class="impl_ser_text">
                                                <img src="images/svg/key.svg" alt="key" />
                                                <h3>purchase</h3>
                                            </div>
                                            <div class="impl_ser_text_ovrly">
                                                <img src="images/svg/key.svg" alt="key" />
                                                <h3>purchase</h3>
                                                <p>Purchase from the most trusted Renault brand across Mizoram.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="impl_facility_wrapper">
                                        <img src="https://images.livemint.com/img/2019/05/27/600x338/Fiat_1558981450287.jpg" alt="" height="180px" width="310px"/>
                                        <div class="impl_ser_hover_ovrly">
                                            <div class="impl_ser_text">
                                                <img src="images/svg/doller.svg" alt="doller" />
                                                <h3>benefits</h3>
                                            </div>
                                            <div class="impl_ser_text_ovrly">
                                                <img src="images/svg/doller.svg" alt="doller" />
                                                <h3>benefits</h3>
                                                <p>Insurance assistance, bank loan assistance, verification assistance, what not?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="impl_facility_wrapper">
                                        <img src="https://www.cdn.renault.com/content/dam/Renault/IN/corporate/service-and-maintenance/Renault-Service-maintenance-001.jpg.ximg.s_12_h.smart.jpg" alt="" height="180px" width="310px"/>
                                        <div class="impl_ser_hover_ovrly">
                                            <div class="impl_ser_text">
                                                <img src="images/svg/car.svg" alt="car" />
                                                <h3>services</h3>
                                            </div>
                                            <div class="impl_ser_text_ovrly">
                                                <img src="images/svg/car.svg" alt="car" />
                                                <h3>services</h3>
                                                <p>Wide range of services like loan, repair, parts, etc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="impl_facility_wrapper">
                                        <img src="https://hips.hearstapps.com/roa.h-cdn.co/assets/16/20/1463500765-dsc-0807-1280x851.jpg" alt="" height="180px" width="310px"/>
                                        <div class="impl_ser_hover_ovrly">
                                            <div class="impl_ser_text">
                                                <img src="images/svg/insurance_car.svg" alt="car" />
                                                <h3>modify</h3>
                                            </div>
                                            <div class="impl_ser_text_ovrly">
                                                <img src="images/svg/insurance_car.svg" alt="car" />
                                                <h3>modify</h3>
                                                <p>We modify your car to the next level. Make it smoke on the streets.</p>
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
    </div>
    <!------ Service and Video Wrapper Start ------>
    <div class="impl_service_wrapper impl_faq_wrapper">
        <div class="impl_service_video">
            <div class="impl_video_inner">
                <div class="impl_servdo_video">
                    <span class="impl_play_icon"><a class="impl-popup-youtube" href="https://www.youtube.com/watch?v=QXZ9dxbylZQ"><i class="fa fa-play" aria-hidden="true"></i></a></span>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 offset-lg-6">
                    <div class="impl_welcome_text">
                        <h1>Frequently asked questions</h1>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Do you provide bank loan assistance ?</a></h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in show">
                                    <div class="panel-body">
                                        Yes. We have tie ups with banks like Cholamandalam Finance, SBI, Mahindra & Mahindra Financial Services Ltd, HDFC Banks, Indusind Banks. We arrange loan instantly
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Where is your store located in Aizawl ?</a></h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        JH. Lianchungnunga Building, World Bank Road, Mualpui, Salem Veng, Aizawl, Mizoram 796005
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">What if I face problems with my car ?</a></h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        We have <b>Workshop on Wheels</b>. We will repair your car on spot of issue or directly bring it to our workshop. We assure you that you won't be facing any problem with it in the future.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">How can we trust your brand ?</a></h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        We are the leading car dealer in the heart of Mizoram. We have been featured in Zonet twice and recieved numerous awards for our apex services.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Do you modify cars ?</a></h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Yes. We modify Renault cars to its best shape that radiates sensual vibe when you roar it across the city. Plus, we use the renault accessories to boost your car shape and make it more lively.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @include('includes.counter')
    <!------ Featured Cars Start ------>
    <div class="impl_featured_wrappar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1>Featured Cars</h1>
                    </div>
                </div>
                @foreach($cars as $car)
                    <div class="col-lg-4 col-md-6">
                        <div class="impl_fea_car_box">
                            <div class="impl_fea_car_img">
                                <img src="http://via.placeholder.com/370x320" alt="" class="img-fluid impl_frst_car_img" />
                                <img src="http://via.placeholder.com/370x320/fff" alt="" class="img-fluid impl_hover_car_img" />
                                <span class="impl_img_tag" title="compare"><i class="fa fa-exchange" aria-hidden="true"></i></span>
                            </div>
                            <div class="impl_fea_car_data">
                                <h2><a href="/cars/{{ $car->slug }}">{{ $car->model }}</a></h2>
                                <ul>
                                    <li><span class="impl_fea_title">Mileage</span>
                                        <span class="impl_fea_name">{{ $car->mileage }}</span></li>
                                    <li><span class="impl_fea_title">Type</span>
                                        <span class="impl_fea_name">{{ $car->type }}</span></li>
                                    <li><span class="impl_fea_title">Transmission</span>
                                        <span class="impl_fea_name">{{ $car->transmission }}</span></li>
                                </ul>
                                <div class="impl_fea_btn">
                                    <button class="impl_btn"><span class="impl_doller">₹ {{ $car->price }}</span><span class="impl_bnw">buy now</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
