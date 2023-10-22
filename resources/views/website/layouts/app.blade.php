<!DOCTYPE html>
<html lang="en">
<head>
	@include('website.includes.styles')

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
</head>
<body>
<div class="boxed_wrapper">
<!--Start Preloader -->

<!--End Preloader -->  

<!--Start Top bar area -->  
<section class="top-bar-area">
    <div class="container">
        <div class="clearfix">
            <div class="pull-left"><p>Welcome to Advanced System Integration Solutions</p></div>
            <div class="pull-right">
                <p><i class="fa fa-clock-o"></i>Sunday - Thursday : 8:00 AM to 7:00 Pm</p>
            </div>
        </div>

    </div>
</section>
<!--End Top bar area --> 
 
@include('website.includes.header')

      
@yield('content')


@include('website.includes.footer')
@include('website.includes.scripts')


</div>
</body>
</html>