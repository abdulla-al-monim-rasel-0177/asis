@extends("website.layouts.app")

@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('fontend')}}/images/background/3.jpg);">
	<div class="container text-center">
		<h1>Our service</h1>
	</div>
</section>
<!--End breadcrumb area-->


<section class="our-services">
    <div class="container">    
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="single-service.html"><img src="{{asset('fontend')}}/images/service/1.jpg" alt="Awesome Image"></a>
                    </figure>
                    <a href="single-service.html"><h4>Agricultural Engineering</h4></a>
                    <p>We develop and design new procedures, tools <br>
                    systems for agricultural products environments. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="single-service.html"><img src="{{asset('fontend')}}/images/service/2.jpg" alt="Awesome Image"></a>
                    </figure>
                    <a href="single-service.html"><h4>Chemical Research Engineering</h4></a>
                    <p>Chemical Research expertise in producing and <br>
                    manipulating chemicals to energy properties.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="single-service.html"><img src="{{asset('fontend')}}/images/service/3.jpg" alt="Awesome Image"></a>
                    </figure>
                    <a href="single-service.html"><h4>Material Science and Engineering</h4></a>
                    <p>Materials Engineering should include scientific and <br>
                    engineering strength relationships of materials. </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="#single-service.html"><img src="{{asset('fontend')}}/images/service/4.jpg" alt="Awesome Image"></a>
                    </figure>
                    <a href="#single-service.html"><h4>Mechanical Engineering</h4></a>
                    <p>Creating a dynamic company for the continuous <br>
                    exploration and develop opportunities. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="#single-service.html"><img src="{{asset('fontend')}}/images/service/5.jpg" alt="Awesome Image"></a>
                    </figure>
                    <a href="#single-service.html"><h4>Petroleum and Gas</h4></a>
                    <p>Petroleum Engineers are concerned with the <br>
                     exploration, discovery and production.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="#single-service.html"><img src="{{asset('fontend')}}/images/service/6.jpg" alt="Awesome Image"></a>
                    </figure>
                    <a href="#single-service.html"><h4>Power and Energy</h4></a>
                    <p>Ensuring high reliability and optimal performance <br>of 
                    rotating power equipment.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection