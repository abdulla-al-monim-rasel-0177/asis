@extends("website.layouts.app")

@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('fontend')}}/images/background/CONTACT-US-BANNER.png);">
	<div class="container text-center">
		<h1>Contact Us</h1>
	</div>
</section>
<!--End breadcrumb area-->




<!--Start contact form area-->
<section class="contact-form-area sec-padd-top">
    <div class="container">
        <div class="section-title">
            <h2>get in <span class="thm-color">touch</span></h2>
            <p>Please feel free to contact us</p>
        </div>
        
        <div class="row">
           
            <div class="col-md-8">
        
                <div class="contact-form">
                    <form  action="{{route('website.contactus')}}" id="admin_form" class="default-form"  method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" value="" placeholder="Your Name*" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" value="" placeholder="Your Mail*" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="phone" value="" placeholder="Phone">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="subject" value="" placeholder="Subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Your Message.." required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="thm-btn bg-clr1" type="submit" data-loading-text="Please wait...">send message</button>
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="footer-contact-info">
                    <div class="title">
                        <!-- <h4>Quick Contact</h4> -->
                        <!-- <p>Please feel free to contact us </p> -->
                    </div>
                    <ul class="clearfix">
                        <li>
                            <div class="iocn-holder">
                                <span class="fa fa-home"></span>
                            </div>
                            <div class="text-holder">

                                <h6>Farrag Mall, Central Axis</h6>
                                <p>6th October, Giza, Egypt</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-technology-1"></span>
                            </div>
                            <div class="text-holder">
                                <h6>Call Us On</h6>
                                <p>(+20) 2 38367340/9</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-letter-1"></span>
                            </div>
                            <div class="text-holder">
                                <h6>Mail Us @</h6>
                                <a href="#"><p>support@asis.eg</p></a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
                
        </div>
    </div>
</section>
<!--End contact form area-->



<section class="home-google-map">
    <div 
        class="google-map" 
        id="contact-google-map" 
        data-map-lat="23.767025889635228" 
        data-map-lng="90.38928753113895" 
      
        data-map-title="Chester"
        data-map-zoom="10" >

    </div>

</section>


@endsection