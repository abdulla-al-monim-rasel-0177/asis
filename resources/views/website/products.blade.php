@extends("website.layouts.app")

@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('fontend')}}/images/background/3.jpg);">
	<div class="container text-center">
		<h1>Products</h1>
	</div>
</section>
<!--End breadcrumb area-->




<section class="project-content sec-padd">
    <div class="container">
        <ul class="gallery-filter post-filter">
            <li class="filter active" data-filter=".filter-item"><span>All</span></li>
            @foreach($categories as $category)
            <li class="filter" data-filter=".{{$category->name}}"><span>{{$category->name}}</span></li>
            @endforeach
            <!-- <li class="filter" data-filter=".agricultural"><span>Agricultural</span></li>
            <li class="filter" data-filter=".chemical"><span>Chemical</span></li>
            <li class="filter" data-filter=".mechanical"><span>Mechanical</span></li>
            <li class="filter" data-filter=".power-energy"><span>Power Energy</span></li> -->
        </ul>

        <div class="row masonary-layout filter-layout">
            @foreach($products as $product)
            <div class="col-md-4 mix col-sm-6 {{$product->category->name}} filter-item">
                <div class="single-project-item">
                    <div class="img-box">
                        <img src="{{asset($product->main_image)}}" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="top-box">
                                    <div class="title">
                                        <a href="{{route('website.product',[$product->id,$product->title])}}"><h3>{{$product->title}}</h3></a>
                                    </div>
                                </div>
                                <div class="bottom-box">
                                    <ul>
                                        <li><a data-group="1" href="{{asset($product->main_image)}}" class="img-popup"><i class="fa fa-search-plus"></i></a></li>
                                        <li><a href="{{route('website.product',[$product->id,$product->title])}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
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