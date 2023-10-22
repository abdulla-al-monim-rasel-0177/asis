@extends("website.layouts.app")

@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset($product->banner)}});">
	<div class="container text-center">
		<h1>{{$product->title}}</h1>
	</div>
</section>
<!--End breadcrumb area-->
<section class="project-single sec-padd">
    <div class="container">
        <div class="row">
            <div class="img-box">
                <img src="{{asset($product->main_image)}}" alt="">
            </div>
            <div class="img-box">
                <img src="{{asset($product->image_one)}}" alt="">
            </div>
            <div class="img-box">
                <img src="{{asset($product->image_two)}}" alt="">
            </div>
            <div class="col-md-8 col-sm-12">
                <h4>PRODUCT SORT DESCRIPTION</h4>
                <p>{{$product->sort_description}}</p>
                <h4>PROJECT DESCRIPTION</h4>
                {!!$product->description!!}
            </div>
            <div class="col-md-4 col-sm-12">
                <h4>PROJECT INFO</h4>
                <p>These men promptly escaped from a maximum security stockade to the Los Angeles underground. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you. Well the first thing you know ol' Jeds a mil lionaire infolk said Jed move away.</p>
                <div class="content">
                    <h5>CLIENTS</h5>
                    <p>Titan Builder Trusted</p>
                    <h5>CATEGORIES</h5>
                    <p>Architecture, Construction</p>
                    <h5>COMPLETED</h5>
                    <p>June 12, 2016</p>
                    <h5>PROJECT BUDGETS</h5>
                    <p>$35,000</p>

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