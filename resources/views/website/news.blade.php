@extends("website.layouts.app")

@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('fontend')}}/images/background/3.jpg);">
	<div class="container text-center">
		<h1>blog</h1>
	</div>
</section>
<!--End breadcrumb area-->




<section id="blog-area" class="blog-with-sidebar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <!--Start single latest blog-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <a href="blog-single.html"><img src="{{asset('fontend')}}/images/blog/b1.jpg" alt="Awesome Image"></a>
                            <div class="published-date">
                                <h3>21 Aug</h3>
                            </div> 

                        </div>
                        <div class="text-holder">
                            <a href="blog-single.html">
                                <h3 class="blog-title">Their House Is A Museum Where People Come To See Great</h3>
                            </a>
                            <div class="text">
                                <p>Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you. Sunday Monday Happy Days. Tuesday Wednesday Happy Days. Thursday Friday Happy Days.Saturday what a day all week with you.</p>
                            </div> 
                            <div class="meta-info clearfix">
                                <div class="left pull-left">
                                    <ul class="post-info">
                                        <li>By <a href="#">Fletcher</a></li>
                                        <li><a href="#">Construction</a></li>    
                                        <li><a href="#">22 Comments</a></li>    
                                        <li><a href="#">54 Likes</a></li>    
                                    </ul>    
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End single latest blog--> 
                    <!--Start single latest blog-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{asset('fontend')}}/images/blog/b2.jpg" alt="Awesome Image">
                            <div class="published-date">
                                <h3>14 May</h3>
                            </div> 

                        </div>
                        <div class="text-holder">
                            <a href="blog-single.html">
                                <h3 class="blog-title">Got A Dream And We Just Know Now We're Gonna Make</h3>
                            </a>
                            <div class="text">
                                <p>It also aims to raise awareness among designers and to provide them with the appropriate experience on how to take advantage of the huge opportunities regarding these advanced materials. Considering these we must practice a approach towards the expansion of bio-based feedstocks.</p>
                            </div> 
                            <div class="meta-info clearfix">
                                <div class="left pull-left">
                                    <ul class="post-info">
                                        <li>By <a href="#">Mark Antony</a></li>
                                        <li><a href="#">Construction</a></li>    
                                        <li><a href="#">15 Comments</a></li>    
                                        <li><a href="#">22 Likes</a></li>    
                                    </ul>    
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End single latest blog--> 
                    <!--Start single latest blog-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{asset('fontend')}}/images/blog/b3.jpg" alt="Awesome Image">
                            <div class="published-date">
                                <h3>07 Apr</h3>
                            </div> 

                        </div>
                        <div class="text-holder">
                            <a href="blog-single.html">
                                <h3 class="blog-title">The Ship Set Ground On The Shore Of This Uncharted Desert</h3>
                            </a>
                            <div class="text">
                                <p>These men promptly escaped frotm maximum security stockade to the underground. The Brady Bunch the Brady seds Buncn what do you think, which is that greatest asset of every company? It's financial instruments, physically goods or something else? The greatest asset of every company are it's people.</p>
                            </div> 
                            <div class="meta-info clearfix">
                                <div class="left pull-left">
                                    <ul class="post-info">
                                        <li>By <a href="#">fletcher</a></li>
                                        <li><a href="#">Construction</a></li>    
                                        <li><a href="#">22 Comments</a></li>    
                                        <li><a href="#">54 Likes</a></li>    
                                    </ul>    
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End single latest blog-->
                    <!--Start single latest blog-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{asset('fontend')}}/images/blog/b4.jpg" alt="Awesome Image">
                            <div class="published-date">
                                <h3>25 Jan</h3>
                            </div> 

                        </div>
                        <div class="text-holder">
                            <a href="blog-single.html">
                                <h3 class="blog-title">Take A Step That Is Ne We've A Loveable Space That Needs</h3>
                            </a>
                            <div class="text">
                                <p>It also aims to raise awareness among designers and to provide them with the appropriate experience on how to take advantage of the huge opportunities regarding these advanced materials. Considering these we must practice a approach towards the expansion of bio-based feedstocks.</p>
                            </div> 
                            <div class="meta-info clearfix">
                                <div class="left pull-left">
                                    <ul class="post-info">
                                        <li>By <a href="#">Mark Antony</a></li>
                                        <li><a href="#">Construction</a></li>    
                                        <li><a href="#">15 Comments</a></li>    
                                        <li><a href="#">22 Likes</a></li>    
                                    </ul>    
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End single latest blog-->  
                   
                    <!--Start post pagination-->
                    <div class="row">
                        <div class="col-md-12"> 
                            <ul class="post-pagination text-center">
                                <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div> 
                    </div>
                    <!--End post pagination-->
                </div>
            </div>
            <!--Start sidebar Wrapper-->
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <form class="search-form" action="#">
                            <input placeholder="Search..." type="text">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Categories</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="categories clearfix">
                            <li>
                                <a href="#">
                                    Architecture Plans 
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Construction Projects 
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Paintings
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Electrical Works
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Plumbing Works
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Recent News</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="recent-post">
                            <li>
                                <div class="img-holder">
                                    <img src="{{asset('fontend')}}/images/blog/thumb1.png" alt="Awesome Image">
                                    <div class="overlay-style-two">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#">
                                                    <i class="fa fa-link" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <div class="title-holder">
                                    <a href="#">
                                        <h5 class="post-title">
                                            Finance &amp; legal<br> throughout project.
                                        </h5>
                                    </a>
                                    <h6 class="post-date">
                                        <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                        Jan 08, 2017
                                    </h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{asset('fontend')}}/images/blog/thumb2.png" alt="Awesome Image"> 
                                    <div class="overlay-style-two">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#">
                                                    <i class="fa fa-link" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <div class="title-holder">
                                    <a href="#">
                                        <h5 class="post-title">
                                            What makes us best<br> in the world?
                                        </h5>
                                    </a>
                                    <h6 class="post-date">
                                        <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                        Dec 18, 2016
                                    </h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{asset('fontend')}}/images/blog/thumb3.png" alt="Awesome Image">
                                    <div class="overlay-style-two">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#">
                                                    <i class="fa fa-link" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                <div class="title-holder">
                                    <a href="#">
                                        <h5 class="post-title">
                                            Why experts go with<br> Builder.
                                        </h5>
                                    </a>
                                    <h6 class="post-date">
                                        <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                        Nov 21, 2016
                                    </h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single-sidebar-->
                    <div class="single-sidebar popular-tag">
                        <div class="sec-title">
                            <h3>Tag Cloud</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="popular-tag">
                            <li><a href="#">Active</a></li>
                            <li><a href="#">Building </a></li>
                            <li><a href="#">Ideas</a></li>
                            <li><a href="#">Energy</a></li>
                            <li><a href="#">Engines</a></li>
                            <li><a href="#">Chemical</a></li>
                            <li><a href="#">Industry</a></li>
                            <li><a href="#">Drilling</a></li>
                        </ul>      
                    </div> 
                    <!--End single-sidebar-->

                </div>    
            </div>
            <!--End Sidebar Wrapper-->  
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