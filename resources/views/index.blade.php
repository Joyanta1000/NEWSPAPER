
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
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Breaking News</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                @foreach($paper as $pa)
                                <li><a href="#">{{$pa->title}}</a></li>
                                
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center mt-15">
                        <div class="news-title title2">
                            <p>International</p>
                        </div>
                        <div id="internationalTicker" class="ticker">
                            <ul>
                                @foreach($papers as $p)
                                <li><a href="#">{{$p->title}}</a></li>
                                
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Hero Add -->
                <div class="col-12 col-lg-4">
                    <div class="hero-add">
                        <a href="#"><img src="img/bg-img/hero-add.gif" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">

                        <!-- Single Featured Post -->
                        <div class="col-12 col-lg-7">
                            
                            <div class="single-blog-post featured-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset($pape->name)}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">{{$pape->subtypes}}</a>
                                    <a href="#" class="post-title">
                                        <h6>{{$pape->title}}</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">{{$pape->reporter}}</a><br>{{$pape->date}}</p>
                                        <p class="post-excerp">{{$pape->details}} </p>
                                        <!-- Post Like & Post Comment -->
                                        <!-- <div class="d-flex align-items-center">
                                            <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Single Featured Post -->
                            @foreach($paper as $pa)
                            <div class="single-blog-post featured-post-2">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset($pa->name)}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">{{$pa->subtypes}}</a>
                                    <br>{{$pa->date}}
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>{{$pa->title}}
                                                <br>
                                                
                                                <br>
                                                {{$pa->details}}
                                            </h6>
                                        </a>
                                        <!-- Post Like & Post Comment -->
                                        <!-- <div class="d-flex align-items-center">
                                            <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Finance</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/20.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Politics</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/21.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Health</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/22.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Finance</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Travel</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Politics</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>International News</h6>
                    </div>

                    <div class="row">

                        <!-- Single Post -->
                        @foreach($papers as $p)
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset($p->name)}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">{{$p->subtypes}}</a><br>{{$p->date}}
                                    <a href="#" class="post-title">
                                        <h6>{{$p->title}}<br>{{$p->details}}</h6>

                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- Single Post -->
                      <!--   <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/13.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <a href="#" class="post-title">
                                        <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Post -->
                        <!-- <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/14.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <a href="#" class="post-title">
                                        <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Post -->
                       <!--  <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/15.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <a href="#" class="post-title">
                                        <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading">
                        <h6>Info</h6>
                    </div>
                    <!-- Popular News Widget -->
                    <div class="popular-news-widget mb-30">
                        <h3>4 Most Popular News</h3>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales.</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo.</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>
                    </div>

                    <!-- Newsletter Widget -->
                    <div class="newsletter-widget">
                        <h4>Newsletter</h4>
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <form action="#" method="post">
                            <input type="text" name="text" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                            <button type="submit" class="btn w-100">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Popular News Area End ##### -->

    <!-- ##### Video Post Area Start ##### -->
    <div class="video-post-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <img src="img/bg-img/video1.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <img src="img/bg-img/video2.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <img src="img/bg-img/video3.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Video Post Area End ##### -->

    <!-- ##### Editorial Post Area Start ##### -->
    <div class="editors-pick-post-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <!-- Editors Pick -->
                <div class="col-12 col-md-7 col-lg-9">
                    <div class="section-heading">
                        <h6>Editor’s Pick</h6>
                    </div>

                    <div class="row">

                        <!-- Single Post -->
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/1.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Orci varius natoque penatibus et magnis dis parturient montes.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-date"><a href="#">February 11, 2018</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/2.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Orci varius natoque penatibus et magnis dis parturient montes.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-date"><a href="#">February 11, 2018</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/3.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Orci varius natoque penatibus et magnis dis parturient montes.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-date"><a href="#">February 11, 2018</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/4.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Orci varius natoque penatibus et magnis dis parturient montes.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-date"><a href="#">February 11, 2018</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/5.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Orci varius natoque penatibus et magnis dis parturient montes.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-date"><a href="#">February 11, 2018</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/6.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Orci varius natoque penatibus et magnis dis parturient montes.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-date"><a href="#">February 11, 2018</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- World News -->
                <div class="col-12 col-md-5 col-lg-3">
                    <div class="section-heading">
                        <h6>World News</h6>
                    </div>

                    <!-- Single Post -->
                    <div class="single-blog-post style-2">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/7.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6>Orci varius natoque penatibus et magnis</h6>
                            </a>
                            <div class="post-meta">
                                <div class="post-date"><a href="#">February 11, 2018</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="single-blog-post style-2">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/8.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6>Orci varius natoque penatibus et magnis</h6>
                            </a>
                            <div class="post-meta">
                                <div class="post-date"><a href="#">February 11, 2018</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="single-blog-post style-2">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/9.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6>Orci varius natoque penatibus et magnis</h6>
                            </a>
                            <div class="post-meta">
                                <div class="post-date"><a href="#">February 11, 2018</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="single-blog-post style-2">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/10.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6>Orci varius natoque penatibus et magnis</h6>
                            </a>
                            <div class="post-meta">
                                <div class="post-date"><a href="#">February 11, 2018</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="single-blog-post style-2">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/11.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6>Orci varius natoque penatibus et magnis</h6>
                            </a>
                            <div class="post-meta">
                                <div class="post-date"><a href="#">February 11, 2018</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ##### Editorial Post Area End ##### -->

    <!-- ##### Footer Add Area Start ##### -->
    <div class="footer-add-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-add">
                        <a href="#"><img src="img/bg-img/footer-add.gif" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Footer Add Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
   
</body>
@stop