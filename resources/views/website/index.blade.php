@extends("website.layouts.app")

@section('content')
<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <li data-transition="slidingoverlayleft">
                <img src="{{asset('fontend')}}/images/slides/cover-1.png"  alt="" width="1920" height="880" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                data-x="left" data-hoffset="15" 
                    data-y="center" data-voffset="-50" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box">
                        <h1>Telecommunications <br> Solutions</h1>
                        <p>We offer a comprehensive range of telecom equipment, from telephone <br> systems to VoIP solutions, that keep you connected efficiently and reliably.</p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="15" 
                    data-y="center" data-voffset="110" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn bg-clr1" href="#">About Us</a>     
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="227" 
                    data-y="center" data-voffset="110" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2600">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn bg-clr2" href="#">Contact Us</a>     
                        </div>
                    </div>
                </div>
            </li>

            <li data-transition="slidingoverlayright">
                <img src="{{asset('fontend')}}/images/slides/cover-2.png"  alt="" width="1920" height="550" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="15" 
                    data-y="center" data-voffset="-50" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box">
                        <h1>Optical Fiber And Electrical <br> Network Solutions</h1>
                        <p>From concept to completion, we design, refine, and construct <br> fiber optic and cable networks and  electric networks.</p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="15" 
                    data-y="center" data-voffset="110" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn bg-clr1" href="#">About Us</a>     
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="227" 
                    data-y="center" data-voffset="110" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2600">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn bg-clr2" href="#">Contact Us</a>     
                        </div>
                    </div>
                </div>
            </li>
            <li data-transition="slidingoverlayleft">
                <img src="{{asset('fontend')}}/images/slides/cover-3.png"  alt="" width="1920" height="880" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="15" 
                    data-y="center" data-voffset="-50" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box">
                        <h1 class="thm-color">Data Centers <br> Works & Services</h1>
                        <p>Build & Operate digital and edge data center solutions that help <br> customers build and operate reliable, efficient, and sustainable data centers</p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="15" 
                    data-y="center" data-voffset="110" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn bg-clr1" href="#">About Us</a>     
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="227" 
                    data-y="center" data-voffset="110" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2600">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn bg-clr2" href="#">Contact Us</a>     
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--End rev slider wrapper-->


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
                    <h2 class="fs-1">
                        Premiere Provider of telecommunications and contracting services in Egypt and Africa
                        <!-- about our <span class="thm-color">Real-Time Data Connectivity Platform</span> -->
                    </h2>
                    <div class="text">
                        <p>It provides its clients with the economics of a third party vendor and the loyalty of a
                            trusted business partner.
                        </p>
                    </div>
                    <!-- <div class="fact-counter">
                        <ul>
                            <li class="single-fact-counter">
                                <div class="icon-holder"><span class="flaticon-social"></span></div>
                                <span class="timer" data-from="1" data-to="2456" data-speed="5000"
                                    data-refresh-interval="50">2456</span>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <h3>Engineers & Workers</h3>
                            </li>
                            <li class="single-fact-counter">
                                <div class="icon-holder"><span class="flaticon-landscape"></span></div>
                                <span class="timer" data-from="1" data-to="640" data-speed="5000"
                                    data-refresh-interval="50">640</span>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <h3>Factory in Worldwide</h3>
                            </li>
                            <li class="single-fact-counter">
                                <div class="icon-holder"><span class="flaticon-innovation"></span></div>
                                <span class="timer" data-from="1" data-to="3250" data-speed="5000"
                                    data-refresh-interval="50">3250</span>
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


<section class="our-services">
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="section-title">
                    <h2>Our Solutions</h2>
                </div>
            </div>
            <div class="col-md-8 col-sm-7 col-xs-12 font-20">
                <p>Providing cutting-edge solutions to meet the diverse needs of our clients in the telecommunications
                    and power industries. Our range of products and solutions is designed to address the unique
                    challenges faced by businesses and organizations in today's ever-evolving technological landscape.
                    Explore how our solutions can empower your operations and drive success. </p><br>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="single-service.html"><img src="{{asset('fontend')}}/images/service/1.jpg"
                                alt="Awesome Image"></a>
                    </figure>
                    <a href="single-service.html">
                        <h4 class="line-1-truncate">Optical Fiber And Electrical Network Solutions</h4>
                    </a>
                    <p class="line-2-truncate">Asis helps its esteemed clients create their fiber and electric networks
                        by providing both design
                        and execution for fiber optics and electric networks.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="single-service.html"><img src="{{asset('fontend')}}/images/service/2.jpg"
                                alt="Awesome Image"></a>
                    </figure>
                    <a href="single-service.html">
                        <h4 class="line-1-truncate">Data Centers Works & Services</h4>
                    </a>
                    <p class="line-2-truncate">Products Tailored for Any Scenario
                        With an extensive range of products, including prefabricated modular data center solutions, core
                        components ranging from power supply , cooling to DCIM
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="single-service.html"><img src="{{asset('fontend')}}/images/service/3.jpg"
                                alt="Awesome Image"></a>
                    </figure>
                    <a href="single-service.html">
                        <h4 class="line-1-truncate">Telecommunications Solutions</h4>
                    </a>
                    <p class="line-2-truncate">We offer a comprehensive range of telecom equipment, from telephone
                        systems to VoIP solutions,
                        that keep you connected efficiently and reliably.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="#single-service.html"><img src="{{asset('fontend')}}/images/service/4.jpg"
                                alt="Awesome Image"></a>
                    </figure>
                    <a href="#single-service.html">
                        <h4 class="line-1-truncate">Power & Energy Solutions</h4>
                    </a>
                    <p class="line-2-truncate">Reliable Power Generators: Keep your operations running smoothly with our
                        range of power generators, ensuring a constant and stable power supply.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="#single-service.html"><img src="{{asset('fontend')}}/images/service/5.jpg"
                                alt="Awesome Image"></a>
                    </figure>
                    <a href="#single-service.html">
                        <h4 class="line-1-truncate">Renewable Energy Solutions</h4>
                    </a>
                    <p class="line-2-truncate">Solar Panels: Embrace sustainable energy generation with our advanced
                        solar panels, harnessing the power of the sun.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="#single-service.html"><img src="{{asset('fontend')}}/images/service/6.jpg"
                                alt="Awesome Image"></a>
                    </figure>
                    <a href="#single-service.html">
                        <h4 class="line-1-truncate">Low Current Solutions</h4>
                    </a>
                    <p class="line-2-truncate">Low Voltage Cables: Enhance your low current systems with our
                        high-quality cables and wiring solutions.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="latest-project sec-padd" style="background-image: url({{asset('fontend')}}/images/background/5.jpg);">
    <div class="container">
        <div class="section-title">
            <h2>Latest Projects</h2>
        </div>
        <div class="latest-project-carousel">
            <div class="item">
                <div class="single-project">
                    <figure class="imghvr-shutter-in-out-horiz">
                        <img src="{{asset('fontend')}}/images/project/p1.jpg" alt="Awesome Image" />
                        <figcaption>
                            <div class="content">
                                <a href="project-single.html">
                                    <h4>PETROLEUM GAS</h4>
                                </a>
                                <p>Chemical</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="item">
                <div class="single-latest-project-carousel">
                    <div class="single-project">
                        <figure class="imghvr-shutter-in-out-horiz">
                            <img src="{{asset('fontend')}}/images/project/p2.jpg" alt="Awesome Image" />
                            <figcaption>
                                <div class="content">
                                    <a href="project-single.html">
                                        <h4>MULTI SPRING PUSH</h4>
                                    </a>
                                    <p>Mechanical</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div><!-- /.single-latest-project-carousel -->
            </div>
            <div class="item">
                <div class="single-latest-project-carousel">
                    <div class="single-project">
                        <figure class="imghvr-shutter-in-out-horiz">
                            <img src="{{asset('fontend')}}/images/project/p3.jpg" alt="Awesome Image" />
                            <figcaption>
                                <div class="content">
                                    <a href="project-single.html">
                                        <h4>STORAGE SYSTEM</h4>
                                    </a>
                                    <p>Power Energy</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-latest-project-carousel">
                    <div class="single-project">
                        <figure class="imghvr-shutter-in-out-horiz">
                            <img src="{{asset('fontend')}}/images/project/p4.jpg" alt="Awesome Image" />
                            <figcaption>
                                <div class="content">
                                    <a href="project-single.html">
                                        <h4>MENUFACTURING</h4>
                                    </a>
                                    <p>Agricultural</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="blog-section sec-padd2">
    <div class="container">
        <div class="section-title">
            <h2>latest news</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news wow fadeInUp animated animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <figure class="img-holder">
                        <a href="blog-details.html"><img src="{{asset('fontend')}}/images/blog/1.jpg" alt="News"></a>
                        <figcaption class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-details.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="lower-content">
                        <a href="blog-details.html">
                            <h4>MATERIALS & MANUFACTURING </h4>
                        </a>
                        <div class="post-meta">by fletcher | 14 Comments | 21 Feb</div>
                        <div class="text">
                            <p>Except to obtain some advantage from it? But who has any right to find to enjoy a
                                pleasure.</p>
                        </div>
                        <div class="link">
                            <a href="blog-details.html" class="default_link">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news wow fadeInUp animated animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <figure class="img-holder">
                        <a href="blog-details.html"><img src="{{asset('fontend')}}/images/blog/2.jpg" alt="News"></a>
                        <figcaption class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-details.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="lower-content">
                        <a href="blog-details.html">
                            <h4>COMMERCIAL AND REAL PROJECTS</h4>
                        </a>
                        <div class="post-meta">by Richards | 22 Comments | 17 Apr</div>
                        <div class="text">
                            <p>Great pleasure to take a trivial example, which of us undertakes laborious.</p>
                        </div>
                        <div class="link">
                            <a href="blog-details.html" class="default_link">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news wow fadeInUp animated animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <figure class="img-holder">
                        <a href="blog-details.html"><img src="{{asset('fontend')}}/images/blog/3.jpg" alt="News"></a>
                        <figcaption class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-details.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="lower-content">
                        <a href="blog-details.html">
                            <h4>MATERIALS FOR THE ECONOMY</h4>
                        </a>
                        <div class="post-meta">by Vincent | 16 Comments | 14 June</div>
                        <div class="text">
                            <p>Pleasure and praising pain was born and I will give you a complete account.</p>
                        </div>
                        <div class="link">
                            <a href="blog-details.html" class="default_link">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="call-back sec-padd2" style="background-image: url({{asset('fontend')}}/images/background/4.jpg);">
    <div class="container">
        <div class="row"
            style="background-color: rgba(0, 0, 0, 0.7); padding-top: 50px; padding-left: 30px; padding-right: 30px; border-radius: 10px;">
            <div class="col-md-5 col-sm-12">
                <div class="section-title">
                    <h2>Request a Call Back</h2>
                </div>
                <h4>Have You Any Question About Us?</h4>
                <br>
                <div class="text">
                    <p>Any kind of business solution and consultion hesitate to contact with us for customer support. We
                        are love to hear from you</p><br>
                    <p><span>Phone & Email:</span> For any information contact with us through our <a href="mailto:support@asis.com">
                            Email</a> and you can also contact with directe by call us in this number <a href="tel:+20238367340/9">(+20) 2 38367340/9</a></p><br>
                    <p><span>Office Hours:</span> We are alwyes open excpet saturday & Sunday from <span>10:00am</span>
                        to <span> 8:00pm</span></p>
                </div>
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="contact-form-area">
                    <div class="contact-form">
                        <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php"
                            method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="form_name" value="" placeholder="Your Name*" required=""
                                        aria-required="true">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="form_email" value="" placeholder="Your Mail*" required=""
                                        aria-required="true">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="form_phone" value="" placeholder="Phone">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="form_subject" value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="form_message" placeholder="Your Message.." required=""
                                        aria-required="true"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden"
                                        value="">
                                    <button class="thm-btn bg-clr1" type="submit"
                                        data-loading-text="Please wait...">send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="brand-logo sec-padd">
    <div class="container">
        <ul class="brand-carousel">
            <li>
                <a href="https://afro-group.com/"><img src="{{asset('fontend')}}/images/brand/afro.png"
                        class="shadow-lg" alt=""></a>
            </li>
            <li>
                <a href="https://afro-academy.com/"><img src="{{asset('fontend')}}/images/brand/afro-academy.png"
                        class="shadow-lg" alt=""></a>
            </li>
            <li>
                <a href="https://radio.afro-group.com/public/afro_radio"><img
                        src="{{asset('fontend')}}/images/brand/afro-radio.png" class="shadow-lg" alt=""></a>
            </li>
            <li>
                <a href="https://benifity.com/"><img src="{{asset('fontend')}}/images/brand/benifity.png"
                        class="shadow-lg" alt=""></a>
            </li>
            <li>
                <a href="https://dars.afro-academy.com/"><img src="{{asset('fontend')}}/images/brand/dars.png"
                        class="shadow-lg" alt=""></a>
            </li>
            <li>
                <a href="https://take.win/"><img src="{{asset('fontend')}}/images/brand/takewin.png" class="shadow-lg"
                        alt=""></a>
            </li>
            <li>
                <a href="https://tozeef.com/"><img src="{{asset('fontend')}}/images/brand/tozeef.png" class="shadow-lg"
                        alt=""></a>
            </li>
            <li>
                <a href="https://ustaze.com/"><img src="{{asset('fontend')}}/images/brand/ustaze.png" class="shadow-lg"
                        alt=""></a>
            </li>
        </ul>
    </div>
</section>

@endsection