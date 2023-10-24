@extends("website.layouts.app")

@section('content')


<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{asset('fontend')}}/images/background/3.jpg);"> <div
    class="container text-center"> <h1>About us</h1>
    </div> </section> <!--End breadcrumb area-->


    <section class="about-us sec-padd-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                
                <figure class="about-img">
                    <img src="{{asset('fontend')}}/images/resource/1.png" alt="about titan builders photo">
                </figure>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="about-text">
                    <h2>
                    Premiere Provider of telecommunications and contracting services in Egypt and Africa
                    </h2>
                    <div class="text">
                        <p>It provides its clients with the economics of a third party vendor and the loyalty of a trusted business partner.</p>
                    </div>
                    <!-- <div class="fact-counter">
                        <ul>
                            <li class="single-fact-counter">
                                <div class="icon-holder"><span class="flaticon-social"></span></div>
                                <span class="timer" data-from="1" data-to="2456" data-speed="5000" data-refresh-interval="50">2456</span>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <h3>Engineers & Workers</h3>    
                            </li>
                            <li class="single-fact-counter">
                                <div class="icon-holder"><span class="flaticon-landscape"></span></div>
                                <span class="timer" data-from="1" data-to="640" data-speed="5000" data-refresh-interval="50">640</span>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <h3>Factory in Worldwide</h3>
                            </li>
                            <li class="single-fact-counter">
                                <div class="icon-holder"><span class="flaticon-innovation"></span></div>
                                <span class="timer" data-from="1" data-to="3250" data-speed="5000" data-refresh-interval="50">3250</span>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <h3>Projects Completed</h3>
                            </li>    
                        </ul>
                    </div> -->

                </div>
                    

            </div>
        </div>
    </div>
</section>

<section class="call-out sec-padd center" style="background-image: url({{asset('fontend')}}/images/background/2.jpg);">
    <div class="container">
        <div class="content">
            <h2>Since 2022,we have been delivering cutting-edge telecommunication infrastructure solutions.</h2>
            <p>Our success stems from the dedicated efforts of our highly experienced and fully authorized specialists, as well as our committed team of subcontractors, who ensure the utmost quality and excellence in every project we undertake.</p>
            <a href="{{route('website.contact')}}" class="thm-btn bg-clr1">contact us</a>
        </div>
    </div>
</section>

<section class="team sec-padd">
    <div class="container">
        <div class="section-title center">
            <h2>meet our team</h2>
        </div>

        <div class="row">
            <article class="col-md-3 col-sm-6 col-xs-12">
                <div class="item tran5">
                    <div class="team-member">
                        <figure class="img-box">
                            <a href="#"><img src="{{asset('fontend')}}/images/team/4.jpg" alt="team member photo"></a>
                            <div class="overlay">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <a href="#"><h5>ben Afflick</h5></a>
                            <p>President</p>
                        </div>
                    </div> 
                </div>
                    
            </article>
            <article class="col-md-3 col-sm-6 col-xs-12">
                <div class="item tran5">
                    <div class="team-member">
                        <figure class="img-box">
                            <a href="#"><img src="{{asset('fontend')}}/images/team/3.jpg" alt="team member photo"></a>
                            <div class="overlay">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <a href="#"><h5>rick grimes</h5></a>
                            <p>Co - founder</p>
                        </div>
                    </div>
                </div>
                    
            </article>        
            <article class="col-md-3 col-sm-6 col-xs-12">
                <div class="item tran5">
                    <div class="team-member">
                        <figure class="img-box">
                            <a href="#"><img src="{{asset('fontend')}}/images/team/2.jpg" alt="team member photo"></a>
                            <div class="overlay">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <a href="#"><h5>deryl dixon</h5></a>
                            <p>Developer</p>
                        </div>
                    </div>
                </div>
                    
            </article>        
            <article class="col-md-3 col-sm-6 col-xs-12">
                <div class="item tran5">
                    <div class="team-member">
                        <figure class="img-box">
                            <a href="#"><img src="{{asset('fontend')}}/images/team/1.jpg" alt="team member photo"></a>
                            <div class="overlay">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <a href="#"><h5>Jom Caraleno</h5></a>
                            <p>Engineer</p>
                        </div>
                    </div>
                </div>
                
            </article>      
        </div>
    </div>
</section>


<section class="subscribe center sec-padd" style="background-image: url({{asset('fontend')}}/images/background/5.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <h2>Subscribe For Newsletter</h2>
                <p>Subscribe To Our Newsletter To Stay Updated</p>
                <form class="subscribe-form">
                    <input type="email" placeholder="Email Address"><span class="fa fa-envelope"></span>
                    <button type="submit" class="thm-btn bg-clr1">subscribe us</button>
                </form>
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
                <a href="{{route('website.contact')}}" class="thm-btn bg-clr2">Request Quote</a>
            </div>
        </div>
                
    </div>
</div>

@endsection