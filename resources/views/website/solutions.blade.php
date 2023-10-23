@extends("website.layouts.app")

@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('fontend')}}/images/background/3.jpg);">
	<div class="container text-center">
		<h1>Our Solution</h1>
	</div>
</section>
<!--End breadcrumb area-->


<section class="our-services">
    <div class="container">    
        <div class="row">
            @foreach($solutions as  $solution)
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="{{route('website.solution',[$solution->id,$solution->slug])}}"><img src="{{asset($solution->image_one)}}"
                                alt="Awesome Image"></a>
                    </figure>
                    <a href="{{route('website.solution',[$solution->id,$solution->slug])}}">
                        <h4 class="line-1-truncate">{{$solution->title}}</h4>
                    </a>
                    <p class="line-2-truncate">{{$solution->sort_description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection