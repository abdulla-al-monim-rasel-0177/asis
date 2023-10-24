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
            <h2>Our Global Footprint</h2>
        </div>

        <div class="row">
            <article class="col-md-3 col-sm-6 col-xs-12">
                <div class="item tran5">
                    <div class="team-member">
                        <figure class="img-box">
                            <a href="#"><img src="{{asset('fontend')}}/images/global-footprint/afro1669235778.jpg" alt="team member photo"></a>
                            <div class="overlay">
                                <ul class="social">
                                    <li><a href="mailto:info@afro-group.com"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="tel:+201121161202"><i class="fa fa-phone"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <a href="#"><h5>Egypt</h5></a>
                            <p>Farrag Mall, 6th October, Giza, Egypt</p>
                        </div>
                    </div> 
                </div>
                    
            </article>
            <article class="col-md-3 col-sm-6 col-xs-12">
                <div class="item tran5">
                    <div class="team-member">
                        <figure class="img-box">
                            <a href="#"><img src="{{asset('fontend')}}/images/global-footprint/afro1669104713.jpg" alt="team member photo"></a>
                            <div class="overlay">
                                <ul class="social">
                                <li><a href="mailto:m.damanhoury@afro-group.com"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="tel:+966540009106"><i class="fa fa-phone"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <a href="#"><h5>Saudi Arabia</h5></a>
                            <p>Moussa Bin Nosier, Olaya Building</p>
                        </div>
                    </div>
                </div>
                    
            </article>        
            <article class="col-md-3 col-sm-6 col-xs-12">
                <div class="item tran5">
                    <div class="team-member">
                        <figure class="img-box">
                            <a href="#"><img src="{{asset('fontend')}}/images/global-footprint/afro1669102742.jpg" alt="team member photo"></a>
                            <div class="overlay">
                                <ul class="social">
                                <li><a href="mailto:info@afro-group.com"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="tel:+201121161202"><i class="fa fa-phone"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <a href="#"><h5>United Arab Emirates</h5></a>
                            <p>United Arab Emirates</p>
                        </div>
                    </div>
                </div>
                    
            </article>        
            <article class="col-md-3 col-sm-6 col-xs-12">
                <div class="item tran5">
                    <div class="team-member">
                        <figure class="img-box">
                            <a href="#"><img src="{{asset('fontend')}}/images/global-footprint/afro1669101010.jpg" alt="team member photo"></a>
                            <div class="overlay">
                                <ul class="social">
                                <li><a href="mailto:info@afro-group.com"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="tel:+201121161202"><i class="fa fa-phone"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <a href="#"><h5>Mali</h5></a>
                            <p>Hamdallaye, Bamako.</p>
                        </div>
                    </div>
                </div>
            </article>  

            <article class="col-md-3 col-sm-6 col-xs-12">
                <div class="item tran5">
                    <div class="team-member">
                        <figure class="img-box">
                            <a href="#"><img src="{{asset('fontend')}}/images/global-footprint/afro1669235697.jpg" alt="team member photo"></a>
                            <div class="overlay">
                                <ul class="social">
                                <li><a href="mailto:info@afro-group.com"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="tel:+201121161202"><i class="fa fa-phone"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <a href="#"><h5>Cote d Ivoire</h5></a>
                            <p>Abidjan , Bietry , Zone 4, Côte d’Ivoire</p>
                        </div>
                    </div>
                </div>
            </article>      

            <article class="col-md-3 col-sm-6 col-xs-12">
                <div class="item tran5">
                    <div class="team-member">
                        <figure class="img-box">
                            <a href="#"><img src="{{asset('fontend')}}/images/global-footprint/afro1669099416.jpg" alt="team member photo"></a>
                            <div class="overlay">
                                <ul class="social">
                                <li><a href="mailto:info@afro-group.com"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="tel:+201121161202"><i class="fa fa-phone"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <a href="#"><h5>Guinea</h5></a>
                            <p>Dixinn-Conakry BP:6706, Conakry</p>
                        </div>
                    </div>
                </div>
            </article>      

            <article class="col-md-3 col-sm-6 col-xs-12">
                <div class="item tran5">
                    <div class="team-member">
                        <figure class="img-box">
                            <a href="#"><img src="{{asset('fontend')}}/images/global-footprint/afro1669155675.png" alt="team member photo"></a>
                            <div class="overlay">
                                <ul class="social">
                                <li><a href="mailto:info@afro-group.com"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="tel:+201121161202"><i class="fa fa-phone"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <a href="#"><h5>Comoros</h5></a>
                            <p>Mvouvou-djou, Moroni, Comoros</p>
                        </div>
                    </div>
                </div>
            </article>     

            <article class="col-md-3 col-sm-6 col-xs-12">
                <div class="item tran5">
                    <div class="team-member">
                        <figure class="img-box">
                            <a href="#"><img src="{{asset('fontend')}}/images/global-footprint/afro1669104274.jpg" alt="team member photo"></a>
                            <div class="overlay">
                                <ul class="social">
                                <li><a href="mailto:info@afro-group.com"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="tel:+201121161202"><i class="fa fa-phone"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <a href="#"><h5>Sierra Leone</h5></a>
                            <p>2 Nylander Lane, Freetown, Sierra Leone</p>
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