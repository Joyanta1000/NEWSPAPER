  <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{URL::to('/')}}"><img src="img/core-img/logo.png" alt=""></a>
                            </div>

                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <!-- Login -->
                                <div class="login d-flex">
                                    <a href="{{URL::to('/admin/login')}}">A</a>
                                    <a href="{{URL::to('/reporter/login')}}">R</a>
                                </div>
                                <!-- Search Form -->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{URL::to('/')}}"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{URL::to('/')}}">Home</a></li>
                                            <li><a href="{{URL::to('/catagories-post')}}">Catagories</a></li>
                                            <li><a href="{{URL::to('/single-post')}}">Single Articles</a></li>
                                            <li><a href="{{URL::to('/about')}}">About Us</a></li>
                                            <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                                            <li><a href="#">Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                                    <li><a href="{{URL::to('/catagories-post')}}">Catagories</a></li>
                                                    <li><a href="{{URL::to('/single-post')}}">Single Articles</a></li>
                                                    <li><a href="{{URL::to('/about')}}">About Us</a></li>
                                                    <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Catagories</li>
                                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                                <li><a href="{{URL::to('/catagories-post')}}">Catagories</a></li>
                                                <li><a href="{{URL::to('/single-post')}}">Single Articles</a></li>
                                                <li><a href="{{URL::to('/about')}}">About Us</a></li>
                                                <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Catagories</li>
                                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                                <li><a href="{{URL::to('/catagories-post')}}">Catagories</a></li>
                                                <li><a href="{{URL::to('/single-post')}}">Single Articles</a></li>
                                                <li><a href="{{URL::to('/about')}}">About Us</a></li>
                                                <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Catagories</li>
                                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                                <li><a href="{{URL::to('/catagories-post')}}">Catagories</a></li>
                                                <li><a href="{{URL::to('/single-post')}}">Single Articles</a></li>
                                                <li><a href="{{URL::to('/about')}}">About Us</a></li>
                                                <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
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
                                    </li>
                                    <li><a href=""><form action="{{URL::to('news')}}" method="post">{{csrf_field()}}
                                        <input type="hidden" name="types" value="Politics">
                                        <input style="background-color: white; border-style: none;" type="submit" name="submit" value="Politics">
                                    </form></a></li>
                                    <li><a href=""><form action="{{URL::to('news')}}" method="post">{{csrf_field()}}
                                        <input type="hidden" name="types" value="Business">
                                        <input style="background-color: white;border-style: none;" type="submit" name="submit" value="Business">
                                    </form></a></li>
                                    <li><a href=""><form action="{{URL::to('news')}}" method="post">{{csrf_field()}}
                                        <input type="hidden" name="types" value="Technology">
                                        <input style="background-color: white;border-style: none;" type="submit" name="submit" value="Technology">
                                    </form></a></li>
                                    <li><a href=""><form action="{{URL::to('news')}}" method="post">{{csrf_field()}}
                                        <input type="hidden" name="types" value="Health">
                                        <input style="background-color: white;border-style: none;" type="submit" name="submit" value="Health">
                                    </form></a></li>
                                    <li><a href=""><form action="{{URL::to('news')}}" method="post">{{csrf_field()}}
                                        <input type="hidden" name="types" value="Travel">
                                        <input style="background-color: white;border-style: none;" type="submit" name="submit" value="Travel">
                                    </form></a></li>
                                    <li><a href=""><form action="{{URL::to('news')}}" method="post">{{csrf_field()}}
                                        <input type="hidden" name="types" value="Sports">
                                        <input style="background-color: white;border-style: none;" type="submit" name="submit" value="Sports">
                                    </form></a></li>
                                    <li><a href=""><form action="{{URL::to('news')}}" method="post">{{csrf_field()}}
                                        <input type="hidden" name="types" value="Others">
                                        <input style="background-color: white;border-style: none;" type="submit" name="submit" value="Others">
                                    </form></a></li>
                                    
                                    <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>