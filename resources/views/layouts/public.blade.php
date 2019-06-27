<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->

@include('includes.head')

<body>
<!------ Preloader Start ------>
<div id="preloader">
    <div id="status">
        <img src="{{ asset('images/logo.png') }}" alt="" />
        <div class="loader">
            Loading...
            <div class="ball"></div>
            <div class="ball"></div>
            <div class="ball"></div>
        </div>
    </div>
</div>
<!------ Header Start ------>
<div class="impl_header_wrapper impl_home_wrapper">
    <div class="impl_top_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_top_info">
                        <ul class="impl_header_social">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                        <p class="impl_header_time"><i class="fa fa-clock-o" aria-hidden="true"></i> Working Hours - 6 AM To 8 PM <span>sunday closed</span></p>
                        <ul class="impl_header_icons">
                            <li class="impl_search"><span><i class="fa fa-search" aria-hidden="true"></i></span></li>
                            <li><a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                            <li class="cart-popup"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <!--sopping cart box-->
                                <div class="cart-box">
                                    <div class="popup-container">
                                        <div class="cart-entry">
                                            <a href="#" class="image">
                                                <img src="http://via.placeholder.com/70x60" alt="">
                                            </a>
                                            <div class="content">
                                                <a href="#" class="title">Serpent</a>
                                                <p class="quantity">Quantity: 1</p>
                                                <span class="price">$4500.00</span>
                                            </div>
                                            <div class="button-x">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="cart-entry">
                                            <a href="#" class="image">
                                                <img src="http://via.placeholder.com/70x60" alt="">
                                            </a>
                                            <div class="content">
                                                <a href="#" class="title">Empire</a>
                                                <p class="quantity">Quantity: 1</p>
                                                <span class="price">$900.00</span>
                                            </div>
                                            <div class="button-x">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="summary">
                                            <div class="subtotal">Sub Total</div>
                                            <div class="price-s">$5100.0</div>
                                        </div>
                                        <div class="cart-buttons">
                                            <a href="checkout.html" class="btn impl_btn">View Cart</a>
                                            <a href="checkout.html" class="btn impl_btn">Checkout</a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#signin" data-toggle="modal"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="impl_search_overlay">
                            <div class="impl_search_area">
                                <div class="srch_inner">
                                    <form action="#">
                                        <input type="text" placeholder="Search here... ">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                    <div class="srch_close_btn">
                                        <span class="srch_close_btn_icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sign-in form-->
    <div class="modal" id="signin">
        <div class="impl_signin">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="impl_sign_form">
                <h1>Sign In</h1>
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                    <span class="form_icon">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                    <span class="form_icon">
					<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
                </div>
                <div class="forget_password">
                    <div class="remember_checkbox">
                        <label>Keep me signed in
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <a href="#">Forgot Password ?</a>
                </div>
                <a href="#" class="impl_btn">submit</a>
                <p>Dont Have An Account? <a class="impl_modal" href="#signup" data-toggle="modal">Sign Up</a></p>
            </div>
            <div class="impl_sign_img">
                <h2>Welcome To Impel Cars</h2>
                <p>A Perfect Zone To Sell And Purchase Cars</p>
                <div class="impl_sign_bottom">
                    <h3>It’s Not Just A Car </h3>
                    <h3>It’s Someone’s Dream</h3>
                </div>
            </div>
        </div>
    </div>
    <!--sign-up form-->
    <div class="modal" id="signup">
        <div class="impl_signin">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="impl_sign_form">
                <h1>Sign up</h1>
                <div class="form-group">
                    <input type="text" placeholder="Username" class="form-control">
                    <span class="form_icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                    <span class="form_icon">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                    <span class="form_icon">
					<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Confirm Password" class="form-control">
                    <span class="form_icon">
					<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
                </div>
                <a href="#" class="impl_btn">sign up</a>
                <p>Already Have An Account? <a href="#signup" data-toggle="modal">Sign In</a></p>
            </div>
            <div class="impl_sign_img">
                <h2>Welcome To Impel Cars</h2>
                <p>A Perfect Zone To Sell And Purchase Cars</p>
                <div class="impl_sign_bottom">
                    <h3>It’s Not Just A Car </h3>
                    <h3>It’s Someone’s Dream</h3>
                </div>
            </div>
        </div>
    </div>
    <!--menu start-->
    <div class="impl_menu_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_logo">
                        <a href="index.html"><img src="images/logo1.png" alt="Logo" class="img-fluid"></a>
                    </div>
                    <button class="impl_menu_btn">
                        <i class="fa fa-car" aria-hidden="true"></i>
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="impl_menu_inner">
                        <div class="impl_logo_responsive">
                            <a href="index.html"><img src="images/logo1.png" alt="Logo" class="img-fluid"></a>
                        </div>
                        <a href="sell_step.html" class="impl_btn">Sell your car</a>
                        <div class="impl_menu">
                            <nav>
                                <div class="menu_cross">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                                <ul>
                                    <li class="dropdown"><a href="javascript:;" class="active">home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home version1</a></li>
                                            <li><a href="home.html">Home version2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">Company</a></li>
                                    <li class="dropdown"><a href="javascript:;">Purchase car</a>
                                        <ul class="sub-menu">
                                            <li><a href="purchase_new.html">New car</a></li>
                                            <li><a href="purchase_used.html">old car</a></li>
                                            <li><a href="purchase_new_single.html">New Car Single</a></li>
                                            <li><a href="purchase_old_single.html">old car single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="service.html">services</a></li>
                                    <li class="dropdown"><a href="javascript:;">blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog_left_sidebar.html">blog left sidebar</a></li>
                                            <li><a href="blog_right_sidebar.html">blog right sidebar</a></li>
                                            <li><a href="blog_single.html">blog single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="javascript:;">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="sell_step.html">Sell page</a></li>
                                            <li><a href="compare.html">compare page</a></li>
                                            <li><a href="checkout.html">checkout page</a></li>
                                            <li><a href="error.html">404 page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!------ Slider Start ------>
<div class="impl_home_slider_wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="impl_home_slider">
                    <div class="item">
                        <h1>find - your <br> dream car </h1>
                        <img src="http://via.placeholder.com/796x386" alt="" />
                    </div>
                    <div class="item">
                        <h1>find - your <br> dream car </h1>
                        <img src="http://via.placeholder.com/796x386" alt="" />
                    </div>
                    <div class="item">
                        <h1>find - your <br> dream car </h1>
                        <img src="http://via.placeholder.com/796x386" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="impl_ex_btn">
                    <a href="#">Explore Now <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
                            <p class="slogan"><strong>Starting $680,000/-</strong></p>
                            <p class="slogan"><strong>Starting $700,000/-</strong></p>
                            <p class="slogan"><strong>Starting $750,000/-</strong></p>
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
                                <option>Select Brand</option>
                                <option value="1">Brand 1</option>
                                <option value="2">Brand 2</option>
                                <option value="3">Brand 3</option>
                                <option value="4">Brand 4</option>
                            </select>
                            <select>
                                <option>Select Status</option>
                                <option value="b1">Status 1</option>
                                <option value="b2">Status 2</option>
                                <option value="b3">Status 3</option>
                                <option value="b4">Status 4</option>
                            </select>
                            <select>
                                <option>Select Model</option>
                                <option value="b1">Model 1</option>
                                <option value="b2">Model 2</option>
                                <option value="b3">Model 3</option>
                                <option value="b4">Model 4</option>
                            </select>
                            <select>
                                <option>Select Year</option>
                                <option value="b1">Year 1</option>
                                <option value="b2">Year 2</option>
                                <option value="b3">Year 3</option>
                                <option value="b4">Year 4</option>
                            </select>
                            <select>
                                <option>Select Color</option>
                                <option value="b1">Color 1</option>
                                <option value="b2">Color 2</option>
                                <option value="b3">Color 3</option>
                                <option value="b4">Color 4</option>
                            </select>
                            <select>
                                <option>Select Type</option>
                                <option value="b1">Type 1</option>
                                <option value="b2">Type 2</option>
                                <option value="b3">Type 3</option>
                                <option value="b4">Type 4</option>
                            </select>
                            <div class="price_range">
                                <label>price range</label> <input type="text" id="range_24" name="ionRangeSlider" value="" />
                            </div>
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
                                            <h3>sell</h3>
                                        </div>
                                        <div class="impl_ser_text_ovrly">
                                            <img src="images/svg/doller.svg" alt="doller" />
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
                                            <img src="images/svg/car.svg" alt="car" />
                                            <h3>purchase</h3>
                                        </div>
                                        <div class="impl_ser_text_ovrly">
                                            <img src="images/svg/car.svg" alt="car" />
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
                                            <img src="images/svg/insurance_car.svg" alt="car" />
                                            <h3>purchase</h3>
                                        </div>
                                        <div class="impl_ser_text_ovrly">
                                            <img src="images/svg/insurance_car.svg" alt="car" />
                                            <h3>purchase</h3>
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
                <span class="impl_play_icon"><a class="impl-popup-youtube" href="https://www.youtube.com/watch?v=BqjuObIH1nY"><i class="fa fa-play" aria-hidden="true"></i></a></span>
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
<!------ Latest Blog Section Start ------>
<div class="impl_blog_wrapper impl_home_blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="impl_heading">
                    <h1>Latest Blogs</h1>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="impl_blog_box">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="impl_post_img">
                                <img src="http://via.placeholder.com/370x303" alt="" class="img-fluid" />
                                <span class="impl_pst_date">
									16 sep
								</span>
                                <div class="impl_pst_img_icon"><a href="#" class="fa fa-link"></a></div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="impl_post_data">
                                <h2><a href="blog_left_sidebar.html">Stories Behind Car Brand Names </a></h2>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). There are many variations of passages of Lorem Ipsum available</p>
                                <div class="impl_pst_info">
                                    <div class="impl_pst_admin">
                                        <span><a href="#">admin</a></span>
                                        <span><a href="#">16 September 2017</a></span>
                                    </div>
                                    <ul class="impl_pst_views">
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 413</a></li>
                                        <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 251</a></li>
                                        <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> 5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog 2-->
                <div class="impl_blog_box impl_blog_right">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 push-lg-8">
                            <div class="impl_post_img">
                                <img src="http://via.placeholder.com/370x303" alt="" class="img-fluid" />
                                <span class="impl_pst_date">
									16 sep
								</span>
                                <div class="impl_pst_img_icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 pull-lg-4">
                            <div class="impl_post_data">
                                <h2><a href="blog_left_sidebar.html">Stories Behind Car Brand Names </a></h2>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). There are many variations of passages of Lorem Ipsum available</p>
                                <div class="impl_pst_info">
                                    <div class="impl_pst_admin">
                                        <span><a href="#">admin</a></span>
                                        <span><a href="#">16 September 2017</a></span>

                                    </div>
                                    <ul class="impl_pst_views">
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 413</a></li>
                                        <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 251</a></li>
                                        <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> 5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!------ Footer Section Start ------>
<div class="impl_footer_wrapper impl_home_footer">
    <div class="impl_foo_wrapper">
        <div class="impl_app_wrapper">
            <h1>Get Your OS App Version Now</h1>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
            <div class="impl_app_img">
                <a href="#"><img src="images/footer/Google-play.jpg" alt=""></a>
                <a href="#"><img src="images/footer/App-store.jpg" alt=""></a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="impl_foo_box footer_abt_text">
                        <h1 class="impl_foo_title">contact us</h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable by injected humour.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="impl_foo_box">
                        <h1 class="impl_foo_title">Basic Information</h1>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Changing Oil</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Saving Fuel</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Antilock Brakes</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Battery</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Tips On Long Car Trips</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Air Pressure</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Tire Replacement</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="impl_foo_box">
                        <h1 class="impl_foo_title">contact us</h1>
                        <ul>
                            <li>
                                <div class="impl_foo_icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="impl_foo_text">
                                    <p>+1-202-555-0137</p>
                                    <p>+1-202-555-0137</p>
                                </div>
                            </li>
                            <li>
                                <div class="impl_foo_icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="impl_foo_text">
                                    <p>514 S. Magnolia St.<br>  Orlando , US</p>
                                </div>
                            </li>
                            <li>
                                <div class="impl_foo_icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                <div class="impl_foo_text">
                                    <a href="#">dummymail@mail.com</a>
                                    <a href="#">yourmail@mail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="impl_foo_box">
                        <h1 class="impl_foo_title">Subscribe </h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <div class="impl_footer_subs">
                            <input type="text" class="form-control" placeholder="Enter Your Email">
                            <button class="foo_subs_btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="impl_social_wrapper">
            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="impl_btm_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <p class="impl_copyright">Copyright &copy; 2018 Impel Car Dealers. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---- Go To Top---->
<span class="gotop"><img src="images/goto.png" alt=""></span>
<!--Main js file Style-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/appear.min.js"></script>
<script type="text/javascript" src="js/tweenmax.js"></script>
<!--Plugin Js-->
<script type="text/javascript" src="js/plugin/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/plugin/slick/slick.min.js"></script>
<script type="text/javascript" src="js/plugin/counter/jquery.countTo.js"></script>
<script type="text/javascript" src="js/plugin/nice_select/jquery.nice-select.min.js"></script>
<script type="text/javascript" src="js/tweenmax.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--Main js file End-->
</body>

</html>