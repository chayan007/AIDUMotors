@extends('layouts.public')
@section('title', 'Media')
@section('content')
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>gallery</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Blog section Start ------>
    <div class="impl_blog_wrapper impl_blog_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_blog_inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 impl_blog_section">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row">
                                        @foreach($galleries as $gallery)
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="impl_blog_box">
                                                        <div class="impl_post_img">
                                                            <img src="{{ Storage::url($gallery->image_path) }}" alt="" style="width:400px;height:450px;"/>
                                                            <span class="impl_pst_date">
										{{ Carbon\Carbon::parse($gallery->created_at)->format('d-M') }}
									</span>
                                                            <div class="impl_pst_img_icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                       @endforeach
                                     </div>
                                    </div>
                                    <!--pagination start-->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="impl_pagination_wrapper">
                                            <nav aria-label="Page navigation example">
                                                {{ $galleries->render() }}
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
