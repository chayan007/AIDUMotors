@extends('layouts.public')
@section('title', 'Media')
@section('content')
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>media highlights</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">media</li>
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
                            <!--sidebar end-->
                            <div class="col-lg-12 col-md-12 impl_blog_section">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <!--blog1-->
                                        @foreach($medias as $media)
                                            <div class="impl_blog_box">
                                            <div class="impl_post_img">
                                                <img src="{{ Storage::url($media->img_path) }}" alt="" class="" style="width:870px;height:450px;" />
                                                <span class="impl_pst_date">
										{{ Carbon\Carbon::parse($media->created_at)->format('d-M') }}
									</span>
                                                <div class="impl_pst_img_icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="impl_post_data">
                                                <h2><a href="#">{{ $media->description }} </a></h2>
                                                <div class="impl_pst_info">
                                                    <div class="impl_pst_admin">
                                                        <span><a href="#">admin</a></span>
                                                        <span><a href="#">{{ Carbon\Carbon::parse($media->created_at)->format('d-M-Y') }}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                    <!--pagination start-->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="impl_pagination_wrapper">
                                            <nav aria-label="Page navigation example">
                                                {{ $medias->render() }}
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
