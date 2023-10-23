@extends("website.layouts.app")

@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset($solution->banner)}});">
    <div class="container text-center">
        <h1>{{$solution->title}}</h1>
    </div>
</section>
<!--End breadcrumb area-->

<section class="sec-padd single-service-page">
    <div class="container">
        <div class="row">     
            <div class="col-md-3 col-sm-6 col-xs-12">
            
                <div class="single-sidebar-box service-link-widget">
                    <ul class="catergori-list">
                        <li><a href="{{route('website.solutions')}}">View all Solution</a></li>
                        @foreach($solutions as $s)
                        <li @if($s->id == $solution->id) class="active" @endif><a href="{{route('website.solution',[$s->id,$s->slug])}}">{{$s->title}}</a></li>
                        @endforeach
                        

                    </ul>
                        
                    <br><br>
                    <div class="brochures">
                        <div class="inner-title">
                            <h4>OUR BROCHURES</h4>
                            <br>
                        </div>
                        <ul class="brochures-lists">
                            <li class="active">
                                <a href="#">
                                    <span>PDF</span>Our Brouchure.pdf<i class="fa fa-download"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-md-12 col-xs-12">
                <div class="img-box">
                    <img src="{{asset($solution->main_image)}}" alt="">
                </div>
                <div class="text">
                    {!!$solution->description!!}
                </div><br><br>
                <div class="why-chooseus style-2">
                    <div class="section-title">
                        <h4>Provide service</h4>
                    </div>
                    
                    <div class="row">
                    
                        @if($solution->technical_training)
                        <div class="item col-md-6 col-sm-12 col-xs-12">
                            <!--inner-box-->
                            <div class="inner-box wow fadeIn  animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">
               
                                <!--icon-box-->
                                <!-- <div class="icon_box">
                                    <span class="flaticon-people-1"></span>
                                </div> -->
                                
                                <h4>Technical Training</h4>
                                <div class="text"><p>{{$solution->technical_training}} </p></div>
                            </div>
                        </div>
                        @endif
                        @if($solution->repair_warranty_center)      
                        <div class="item col-md-6 col-sm-12 col-xs-12">
                            <!--inner-box-->
                            <div class="inner-box wow fadeIn  animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">
               
                                <!--icon-box-->
                                <!-- <div class="icon_box">
                                    <span class="flaticon-sun"></span>
                                </div> -->
                                
                                <h4>Repair & warranty center</h4>
                                <div class="text"><p>{{$solution->repair_warranty_center}}</p></div>
                            </div>
                        </div>
                        @endif 
                        @if($solution->logistics_warehouse)      
                        <div class="item col-md-6 col-sm-12 col-xs-12">
                            <!--inner-box-->
                            <div class="inner-box wow fadeIn  animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">
               
                                <!--icon-box-->
                                <!-- <div class="icon_box">
                                    <span class="flaticon-people-2"></span>
                                </div> -->
                                
                                <h4>Logistics & Warehouse</h4>
                                <div class="text"><p>{{$solution->logistics_warehouse}}</p></div>
                            </div>
                        </div> 
                        @endif   
                        @if($solution->lmport_clearance)  
                        <div class="item col-md-6 col-sm-12 col-xs-12">
                            <!--inner-box-->
                            <div class="inner-box wow fadeIn  animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">
               
                                <!--icon-box-->
                                <!-- <div class="icon_box">
                                    <span class="flaticon-factory"></span>
                                </div> -->
                                
                                <h4>Product Approvals</h4>
                                <div class="text"><p>{{$solution->lmport_clearance}} </p></div>
                            </div>
                        </div>
                        @endif   
                        @if($solution->marketing_sales)  
                        <div class="item col-md-6 col-sm-12 col-xs-12">
                            <!--inner-box-->
                            <div class="inner-box wow fadeIn  animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">
               
                                <!--icon-box-->
                                <!-- <div class="icon_box">
                                    <span class="flaticon-factory"></span>
                                </div> -->
                                
                                <h4>Marketing & Sales</h4>
                                <div class="text"><p>{{$solution->marketing_sales}} </p></div>
                            </div>
                        </div>
                        @endif         
                        
                    </div>
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