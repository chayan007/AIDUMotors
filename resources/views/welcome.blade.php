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
                                    <option>Select Model</option>
                                    <option value="b1">Model 1</option>
                                    <option value="b2">Model 2</option>
                                    <option value="b3">Model 3</option>
                                    <option value="b4">Model 4</option>
                                </select>
                                <select>
                                    <option>Select Type</option>
                                    <option value="b1">Type 1</option>
                                    <option value="b2">Type 2</option>
                                    <option value="b3">Type 3</option>
                                    <option value="b4">Type 4</option>
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
                                        <img src="http://via.placeholder.com/312x218" alt="" class="img-fluid" />
                                        <div class="impl_ser_hover_ovrly">
                                            <div class="impl_ser_text">
                                                <img src="images/svg/key.svg" alt="key" />
                                                <h3>purchase</h3>
                                            </div>
                                            <div class="impl_ser_text_ovrly">
                                                <img src="images/svg/key.svg" alt="key" />
                                                <h3>purchase</h3>
                                                <p>At vero eos et accusamus etiusto odio dignissimos ducimus qui blanditiis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="impl_facility_wrapper">
                                        <img src="http://via.placeholder.com/312x218" alt="" class="img-fluid" />
                                        <div class="impl_ser_hover_ovrly">
                                            <div class="impl_ser_text">
                                                <img src="images/svg/doller.svg" alt="doller" />
                                                <h3>benefits</h3>
                                            </div>
                                            <div class="impl_ser_text_ovrly">
                                                <img src="images/svg/doller.svg" alt="doller" />
                                                <h3>benefits</h3>
                                                <p>At vero eos et accusamus etiusto odio dignissimos ducimus qui blanditiis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="impl_facility_wrapper">
                                        <img src="http://via.placeholder.com/312x218" alt="" class="img-fluid" />
                                        <div class="impl_ser_hover_ovrly">
                                            <div class="impl_ser_text">
                                                <img src="images/svg/car.svg" alt="car" />
                                                <h3>services</h3>
                                            </div>
                                            <div class="impl_ser_text_ovrly">
                                                <img src="images/svg/car.svg" alt="car" />
                                                <h3>services</h3>
                                                <p>At vero eos et accusamus etiusto odio dignissimos ducimus qui blanditiis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="impl_facility_wrapper">
                                        <img src="http://via.placeholder.com/312x218" alt="" class="img-fluid" />
                                        <div class="impl_ser_hover_ovrly">
                                            <div class="impl_ser_text">
                                                <img src="images/svg/insurance_car.svg" alt="car" />
                                                <h3>modify</h3>
                                            </div>
                                            <div class="impl_ser_text_ovrly">
                                                <img src="images/svg/insurance_car.svg" alt="car" />
                                                <h3>modify</h3>
                                                <p>At vero eos et accusamus etiusto odio dignissimos ducimus qui blanditiis.</p>
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
                                    <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Why sed ut perspiciatis unde omnis iste natus error ?</a></h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in show">
                                    <div class="panel-body">
                                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan-tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataevitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. “
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan-tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataevitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. “
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan-tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataevitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. “
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan-tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataevitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. “
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan-tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataevitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. “
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Featured Cars Start ------>
    <div class="impl_featured_wrappar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1>Featured Cars</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="impl_fea_car_box">
                        <div class="impl_fea_car_img">
                            <img src="http://via.placeholder.com/370x320" alt="" class="img-fluid impl_frst_car_img" />
                            <img src="http://via.placeholder.com/370x320/fff" alt="" class="img-fluid impl_hover_car_img" />
                            <span class="impl_img_tag" title="compare"><i class="fa fa-exchange" aria-hidden="true"></i></span>
                        </div>
                        <div class="impl_fea_car_data">
                            <h2><a href="purchase_new.html">Aurora</a></h2>
                            <ul>
                                <li><span class="impl_fea_title">model</span>
                                    <span class="impl_fea_name">Aurora 811</span></li>
                                <li><span class="impl_fea_title">Vehicle Status</span>
                                    <span class="impl_fea_name">new</span></li>
                                <li><span class="impl_fea_title">Color</span>
                                    <span class="impl_fea_name">white</span></li>
                            </ul>
                            <div class="impl_fea_btn">
                                <button class="impl_btn"><span class="impl_doller">$ 72000 </span><span class="impl_bnw">buy now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2-->
                <div class="col-lg-4 col-md-6">
                    <div class="impl_fea_car_box">
                        <div class="impl_fea_car_img">
                            <img src="http://via.placeholder.com/370x320" alt="" class="img-fluid impl_frst_car_img" />
                            <img src="http://via.placeholder.com/370x320/fff" alt="" class="img-fluid impl_hover_car_img" />
                            <span class="impl_img_tag" title="compare"><i class="fa fa-exchange" aria-hidden="true"></i></span>
                        </div>
                        <div class="impl_fea_car_data">
                            <h2> <a href="purchase_new.html">Serpent</a></h2>
                            <ul>
                                <li><span class="impl_fea_title">model</span>
                                    <span class="impl_fea_name">Serpent 16.6 </span></li>
                                <li><span class="impl_fea_title">Vehicle Status</span>
                                    <span class="impl_fea_name">new</span></li>
                                <li><span class="impl_fea_title">Color</span>
                                    <span class="impl_fea_name">blue</span></li>
                            </ul>
                            <div class="impl_fea_btn">
                                <button class="impl_btn"><span class="impl_doller">$ 72000 </span><span class="impl_bnw">buy now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3-->
                <div class="col-lg-4 col-md-6">
                    <div class="impl_fea_car_box">
                        <div class="impl_fea_car_img">
                            <img src="http://via.placeholder.com/370x320" alt="" class="img-fluid impl_frst_car_img" />
                            <img src="http://via.placeholder.com/370x320/fff" alt="" class="img-fluid impl_hover_car_img" />
                            <span class="impl_img_tag" title="compare"><i class="fa fa-exchange" aria-hidden="true"></i></span>
                        </div>
                        <div class="impl_fea_car_data">
                            <h2><a href="purchase_new.html">Basilisk</a></h2>
                            <ul>
                                <li><span class="impl_fea_title">model</span>
                                    <span class="impl_fea_name">Basilisk 811</span></li>
                                <li><span class="impl_fea_title">Vehicle Status</span>
                                    <span class="impl_fea_name">new</span></li>
                                <li><span class="impl_fea_title">Color</span>
                                    <span class="impl_fea_name">white</span></li>
                            </ul>
                            <div class="impl_fea_btn">
                                <button class="impl_btn"><span class="impl_doller">$ 72000 </span><span class="impl_bnw">buy now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--4-->
                <div class="col-lg-4 col-md-6">
                    <div class="impl_fea_car_box">
                        <div class="impl_fea_car_img">
                            <img src="http://via.placeholder.com/370x320" alt="" class="img-fluid impl_frst_car_img" />
                            <img src="http://via.placeholder.com/370x320/fff" alt="" class="img-fluid impl_hover_car_img" />
                            <span class="impl_img_tag" title="compare"><i class="fa fa-exchange" aria-hidden="true"></i></span>
                        </div>
                        <div class="impl_fea_car_data">
                            <h2><a href="purchase_used.html">Mirage</a></h2>
                            <ul>
                                <li><span class="impl_fea_title">model</span>
                                    <span class="impl_fea_name">Mirage</span></li>
                                <li><span class="impl_fea_title">Vehicle Status</span>
                                    <span class="impl_fea_name">old</span></li>
                                <li><span class="impl_fea_title">year</span>
                                    <span class="impl_fea_name">2016</span></li>
                                <li><span class="impl_fea_title">Color</span>
                                    <span class="impl_fea_name">white</span></li>
                            </ul>
                            <div class="impl_fea_btn">
                                <button class="impl_btn"><span class="impl_doller">$ 72000 </span><span class="impl_bnw">buy now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--5-->
                <div class="col-lg-4 col-md-6">
                    <div class="impl_fea_car_box">
                        <div class="impl_fea_car_img">
                            <img src="http://via.placeholder.com/370x320" alt="" class="img-fluid impl_frst_car_img" />
                            <img src="http://via.placeholder.com/370x320/fff" alt="" class="img-fluid impl_hover_car_img" />
                            <span class="impl_img_tag" title="compare"><i class="fa fa-exchange" aria-hidden="true"></i></span>
                        </div>
                        <div class="impl_fea_car_data">
                            <h2><a href="purchase_used.html"> Realm</a></h2>
                            <ul>
                                <li><span class="impl_fea_title">model</span>
                                    <span class="impl_fea_name">Realm 16.6</span></li>
                                <li><span class="impl_fea_title">Vehicle Status</span>
                                    <span class="impl_fea_name">old</span></li>
                                <li><span class="impl_fea_title">year</span>
                                    <span class="impl_fea_name">2015</span></li>
                                <li><span class="impl_fea_title">Color</span>
                                    <span class="impl_fea_name">black</span></li>
                            </ul>
                            <div class="impl_fea_btn">
                                <button class="impl_btn"><span class="impl_doller">$ 72000 </span><span class="impl_bnw">buy now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--6-->
                <div class="col-lg-4 col-md-6">
                    <div class="impl_fea_car_box">
                        <div class="impl_fea_car_img">
                            <img src="http://via.placeholder.com/370x320" alt="" class="img-fluid impl_frst_car_img" />
                            <img src="http://via.placeholder.com/370x320/fff" alt="" class="img-fluid impl_hover_car_img" />
                            <span class="impl_img_tag" title="compare"><i class="fa fa-exchange" aria-hidden="true"></i></span>
                        </div>
                        <div class="impl_fea_car_data">
                            <h2><a href="purchase_used.html"> Empire</a></h2>
                            <ul>
                                <li><span class="impl_fea_title">model</span>
                                    <span class="impl_fea_name">Empire Z06</span></li>
                                <li><span class="impl_fea_title">Vehicle Status</span>
                                    <span class="impl_fea_name">old</span></li>
                                <li><span class="impl_fea_title">year</span>
                                    <span class="impl_fea_name">2015</span></li>
                                <li><span class="impl_fea_title">Color</span>
                                    <span class="impl_fea_name">yellow</span></li>
                            </ul>
                            <div class="impl_fea_btn">
                                <button class="impl_btn"><span class="impl_doller">$ 72000 </span><span class="impl_bnw">buy now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Counter Section Start ------>
    <div class="impl_counter_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="impl_cont_box">
                        <div class="impl_count_img">
                            <img src="images/svg/count_car.svg" alt="" />
                        </div>
                        <div class="impl_count_text">
                            <h1 class="count-no" data-to="8210" data-speed="10000">8210</h1>
                            <p>Cars in stock</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="impl_cont_box">
                        <div class="impl_count_img">
                            <img src="images/svg/trophy.svg" alt="" />
                        </div>
                        <div class="impl_count_text">
                            <h1 class="count-no" data-to="686" data-speed="10000">686</h1>
                            <p>awards</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="impl_cont_box">
                        <div class="impl_count_img">
                            <img src="images/svg/user.svg" alt="" />
                        </div>
                        <div class="impl_count_text">
                            <h1 class="count-no" data-to="6281" data-speed="10000">6281</h1>
                            <p>customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="impl_cont_box">
                        <div class="impl_count_img">
                            <img src="images/svg/count_car1.svg" alt="" />
                        </div>
                        <div class="impl_count_text">
                            <h1 class="count-no" data-to="4100" data-speed="10000">4100</h1>
                            <p>Cars Repaired</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
