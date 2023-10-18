@extends("website.layouts.app")

@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('fontend')}}/images/background/3.jpg);">
	<div class="container text-center">
		<h1>Single Project</h1>
	</div>
</section>
<!--End breadcrumb area-->




<section class="project-single sec-padd">
    <div class="container">
        <div class="row">
            <div class="img-box">
                <img src="{{asset('fontend')}}/images/project/10.jpg" alt="">
            </div>
            <div class="img-box">
                <img src="{{asset('fontend')}}/images/project/11.jpg" alt="">
            </div>
            <div class="img-box">
                <img src="{{asset('fontend')}}/images/project/12.jpg" alt="">
            </div>
            <div class="col-md-8 col-sm-12">
                <h4>PROJECT DESCRIPTION</h4>
                <p>Well we're movin' on up to the east side. To a deluxe apartment in the sky. The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow would be lost. We're gonna do it. On your mark get set and go now. Got a dream and we just know now we're gonna make our dream come true. I have always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you.</p>
                <h4>PROJECT CHALLENGE</h4>
                <p>It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight. The mate was a mighty sailin' man the Skipper brave and sure.</p>
                <ul class="list-item">
                    <li>Five passengers set sail that day for a three hour</li>
                    <li>Till the one day when the lady met this fellow</li>
                    <li>Family that's the way we all became the brady</li>
                    <li>Champion the cause of the innocent career</li>
                    <li>The powerless in a world of criminals operate</li>
                    <li>Now were up in the big leagues getting' turn</li>
                </ul>
                <h4>WHAT WE DID</h4>
                <p>Then along come two they got nothin' but their jeans. Texas tea. Knight Rider: A shadowy flight into the dangerous world of a man who does not exist. The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest.</p>
                <h4>RESULT</h4>
                <p>That's just a little bit more than the law will allow. We're gonna do it. On your mark get set and go now. Got a dream and we just know now we're gonna make our dream come true. Makin their way the only way they know how. That's just a little bit more than the law will allow.</p>
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