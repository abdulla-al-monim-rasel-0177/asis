<footer>
    <div class="footer-main sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-col">
                        <div class="logo-part">
                            <a href="#" class="footer-logo text-uppercase">
                                <img src="{{asset('fontend')}}/images/logo/logo2.jpg" alt="logo">
                            </a>
                        </div>
                        <p class="footer-words">We offer a comprehensive range of telecom equipment, from telephone systems to VoIP solutions, that keep you connected efficiently and reliably. </p>
                        <ul class="list-inline footer-social">
                            <li><a href="https://www.facebook.com/profile.php?id=61552510388136"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/asistechnology/"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/asistechnology/"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/asistechnology/"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/asistechnology/"><i class="fa fa-instagram"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-col service-col">
                        <h3 class="footer-title">Solutions</h3>
                        <ul class="footer-list">
                            @foreach(App\Models\Solution::get()->take(6) as $solution)
                            <li><a href="{{route('website.solution',[$solution->id,$solution->slug])}}">{{$solution->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-col post-column">
                        <h3 class="footer-title">Recent News</h3>
                        <div class="post-list">
                            <div class="post">
                                <div class="post-thumb"><a href="#"><img src="{{asset('fontend')}}/images/blog/i1.jpg" alt=""></a></div>
                                <a href="#"><h5>Design and Advanced Materials Innovation</h5></a>
                                <div class="post-info"><i class="fa fa-calendar"></i>  15 Mar, 2017</div>
                            </div>
                            <div class="post">
                                <div class="post-thumb"><a href="#"><img src="{{asset('fontend')}}/images/blog/i2.jpg" alt=""></a></div>
                                <a href="#"><h5>Materials for the Gas & Petroleum</h5></a>
                                <div class="post-info"><i class="fa fa-calendar"></i> 21 Apr, 2017</div>
                            </div>

                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-col">
                        <h3 class="footer-title">Subscribe Us</h3>
                        <div class="footer-widget contact-column">

                            <h5>Subscribe to our newsletter!</h5>
                            <form action="{{route('website.subscribe')}}" method="post">
                                @csrf
                                <input type="email" name="email" required placeholder="Email address....">
                                <button type="submit"><i class="fa fa-paper-plane"></i></button>
                            </form>
                            <p>We dont’t do spam and Your mail id very confidential.</p>
                            
                            <ul class="social-icon">
                                <li><a href="https://www.facebook.com/profile.php?id=61552510388136"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/asistechnology/"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/asistechnology/"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/asistechnology/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/asistechnology/"><i class="fa fa-feed"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p class="copyright">©2023 All Rights Reserved. Developed by <a href="https://take.win/">Take.win</a> </p>
                </div>
                <div class="col-md-9">
                    <nav class="footer-menu pull-right">
                        <ul class="list-inline">
                            <li><a href="{{route('website.home')}}">home</a></li>
                            <li><a href="{{route('website.about')}}">About Us</a></li>
                            <li><a href="{{route('website.products')}}">Our Products</a></li>
                            <li><a href="{{route('website.solutions')}}">Our Solution</a></li>
                            <!-- <li><a href="#">term &amp; condition</a></li>
                            <li><a href="#">privacy policy</a></li> -->
                            <li><a href="{{route('website.contact')}}">contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>