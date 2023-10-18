@extends("website.layouts.app")

@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('fontend')}}/images/background/3.jpg);">
	<div class="container text-center">
		<h1>Projects</h1>
	</div>
</section>
<!--End breadcrumb area-->




<section class="project-content sec-padd">
    <div class="container">
        <ul class="gallery-filter post-filter">
            <li class="filter active" data-filter=".filter-item"><span>All</span></li>
            <li class="filter" data-filter=".material"><span>material</span></li>
            <li class="filter" data-filter=".agricultural"><span>Agricultural</span></li>
            <li class="filter" data-filter=".chemical"><span>Chemical</span></li>
            <li class="filter" data-filter=".mechanical"><span>Mechanical</span></li>
            <li class="filter" data-filter=".power-energy"><span>Power Energy</span></li>
        </ul>

        <div class="row masonary-layout filter-layout">
            <div class="col-md-4 mix col-sm-6 material filter-item">
                <div class="single-project-item">
                    <div class="img-box">
                        <img src="{{asset('fontend')}}/images/project/1.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="top-box">
                                    <div class="title">
                                        <a href="{{route('website.project')}}"><h3>Material Engineering</h3></a>
                                    </div>
                                </div>
                                <div class="bottom-box">
                                    <ul>
                                        <li><a data-group="1" href="images/project/1.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a></li>
                                        <li><a href="{{route('website.project')}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mix col-sm-6 chemical filter-item">
                <div class="single-project-item">
                    <div class="img-box">
                        <img src="{{asset('fontend')}}/images/project/2.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="top-box">
                                    <div class="title">
                                        <a href="{{route('website.project')}}"><h3>Chemical Engineering</h3></a>
                                    </div>
                                </div>
                                <div class="bottom-box">
                                    <ul>
                                        <li><a data-group="1" href="{{asset('fontend')}}/images/project/2.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a></li>
                                        <li><a href="{{route('website.project')}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mix col-sm-6 mechanical filter-item">
                <div class="single-project-item">
                    <div class="img-box">
                        <img src="{{asset('fontend')}}/images/project/3.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="top-box">
                                    <div class="title">
                                        <a href="{{route('website.project')}}"><h3>Mechanical Engineering</h3></a>
                                    </div>
                                </div>
                                <div class="bottom-box">
                                    <ul>
                                        <li><a data-group="1" href="{{asset('fontend')}}/images/project/3.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a></li>
                                        <li><a href="{{route('website.project')}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mix col-sm-6 material filter-item">
                <div class="single-project-item">
                    <div class="img-box">
                        <img src="{{asset('fontend')}}/images/project/4.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="top-box">
                                    <div class="title">
                                        <a href="{{route('website.project')}}"><h3>Material Engineering</h3></a>
                                    </div>
                                </div>
                                <div class="bottom-box">
                                    <ul>
                                        <li><a data-group="1" href="{{asset('fontend')}}/images/project/4.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a></li>
                                        <li><a href="{{route('website.project')}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mix col-sm-6 material filter-item">
                <div class="single-project-item">
                    <div class="img-box">
                        <img src="{{asset('fontend')}}/images/project/5.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="top-box">
                                    <div class="title">
                                        <a href="{{route('website.project')}}"><h3>Material Engineering</h3></a>
                                    </div>
                                </div>
                                <div class="bottom-box">
                                    <ul>
                                        <li><a data-group="1" href="{{asset('fontend')}}/images/project/5.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a></li>
                                        <li><a href="{{route('website.project')}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mix col-sm-6 power-energy filter-item">
                <div class="single-project-item">
                    <div class="img-box">
                        <img src="{{asset('fontend')}}/images/project/6.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="top-box">
                                    <div class="title">
                                        <a href="{{route('website.project')}}"><h3>Power Energy</h3></a>
                                    </div>
                                </div>
                                <div class="bottom-box">
                                    <ul>
                                        <li><a data-group="1" href="{{asset('fontend')}}/images/project/6.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a></li>
                                        <li><a href="{{route('website.project')}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mix col-sm-6 chemical filter-item">
                <div class="single-project-item">
                    <div class="img-box">
                        <img src="{{asset('fontend')}}/images/project/7.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="top-box">
                                    <div class="title">
                                        <a href="{{route('website.project')}}"><h3>Chemical Engineering</h3></a>
                                    </div>
                                </div>
                                <div class="bottom-box">
                                    <ul>
                                        <li><a data-group="1" href="{{asset('fontend')}}/images/project/7.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a></li>
                                        <li><a href="{{route('website.project')}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mix col-sm-6 mechanical filter-item">
                <div class="single-project-item">
                    <div class="img-box">
                        <img src="{{asset('fontend')}}/images/project/8.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="top-box">
                                    <div class="title">
                                        <a href="{{route('website.project')}}"><h3>Mechanical Engineering</h3></a>
                                    </div>
                                </div>
                                <div class="bottom-box">
                                    <ul>
                                        <li><a data-group="1" href="{{asset('fontend')}}/images/project/8.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a></li>
                                        <li><a href="{{route('website.project')}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mix col-sm-6 agricultural filter-item">
                <div class="single-project-item">
                    <div class="img-box">
                        <img src="{{asset('fontend')}}/images/project/9.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="top-box">
                                    <div class="title">
                                        <a href="{{route('website.project')}}"><h3>Agricaltural Engineering</h3></a>
                                    </div>
                                </div>
                                <div class="bottom-box">
                                    <ul>
                                        <li><a data-group="1" href="{{asset('fontend')}}/images/project/9.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a></li>
                                        <li><a href="{{route('website.project')}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="call-out2">
    <div class="container">
        <div class="clearfix">
            <div class="float_left">
                <h4>Have any question or need any business consultation?</h4>
            </div>
            <div class="float_right">
                <a href="contact.html" class="thm-btn bg-clr2">Request Quote</a>
            </div>
        </div>
                
    </div>
</div>

@endsection