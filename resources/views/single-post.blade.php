@extends('default.default')
@section('content')
<body>
    <!-- ##### Header Area Start ##### -->
    
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Breaking News Widget -->
                  
                </div>

                <!-- Hero Add -->
                
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post">
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset($papers->name)}}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">{{$papers->types}}</a>
                                <a href="#" class="post-title">
                                    <h6>{{$papers->title}}</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-author">By <a href="#">{{$papers->reporter}}</a></p>
                                    <p>{{$papers->details}}</p>
                                    
                                    <p></p>
                                    <p></p>
                                    <a href="#" class="related--post">Related:</a>
                                     <div class="post-thumb">
                                <a href="#"><img src="{{asset($papers->name1)}}" alt=""></a>
                            </div>
                                    <p>{{$papers->details1}}</p>
                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                        <!-- Tags -->
                                        <div class="newspaper-tags d-flex">
                                            <span>Tags:</span>
                                            <ul class="d-flex">
                                                <li><a href="#">{{$papers->types}}</a></li>
                                                
                                            </ul>
                                        </div>

                                        <!-- Post Like & Post Comment -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- About Author -->
                        <div class="blog-post-author d-flex">
                            <div class="author-thumbnail">
                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="author-info">
                                <a href="#" class="author-name">{{$papers->reporter}}<span>The Reporter</span></a>
                                <p>{{$papers->repemail}}</p>
                            </div>
                        </div>

                        <div class="pager d-flex align-items-center justify-content-between">
                            <div class="prev">
                                <a href="#" class="active"><i class="fa fa-angle-left"></i> previous</a>
                            </div>
                            <div class="next">
                                <a href="#">Next <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                     


                      
                        
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                       

                       

                        <!-- Latest Comments Widget -->
                        <div class="latest-comments-widget">
                            <h3>Latest Comments</h3>

                            <!-- Single Comments -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail mr-15">
                                    <img src="img/bg-img/29.jpg" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comments -->
                           

                          

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
  
</body>

@stop