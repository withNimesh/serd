<header class="xs-header header-transparent xs-box">
    <div class="container">
        <nav class="xs-menus">
            <div class="xs-top-bar clearfix">
                <ul class="xs-top-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-wordpress"></i></a></li>
                    <li><a href="#"><i class="fa fa-slack"></i></a></li>
                </ul>
                <a href="mailto:name@domain.com" class="xs-top-bar-mail"><i class="fa fa-envelope-o"></i>infp@example.com</a>
            </div>
            <div class="nav-header">
                <div class="nav-toggle"></div>
                <a href="index.html" class="xs-nav-logo">
                    <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/logo.png')}}" alt="">
                </a>
            </div><!-- .nav-header END -->
            <div class="nav-menus-wrapper row">
                <div class="xs-logo-wraper col-lg-2 col-xl-2 xs-padding-0">
                    <a class="nav-brand" href="{{route('welcome')}}">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/logo.png')}}" alt="">
                    </a>
                </div><!-- .xs-logo-wraper END -->
                <div class="col-lg-10 col-xl-7">
                    <ul class="nav-menu">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li><a href="{{route('about')}}">about</a></li>
                        <li><a href="causes.html">Causes</a></li>
                        <li><a href="#">Events</a>
                            <ul class="nav-dropdown">
                                <li><a href="event.html">Event</a></li>
                                <li><a href="event-single.html">Event single</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a>
                            <ul class="nav-dropdown">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-single.html">Blog single</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="nav-dropdown">
                                <li><a href="donate-now.html">donate now</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="mission.html">mission</a></li>
                                <li><a href="portfolio.html">portfolio</a></li>
                                <li><a href="pricing.html">pricing</a></li>
                                <li><a href="service.html">service</a></li>
                                <li><a href="team.html">team</a></li>
                                <li><a href="volunteer.html">volunteer</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul><!-- .nav-menu END -->
                </div>
                <div class="xs-navs-button d-flex-center-end col-lg-3 col-xl-3 d-block d-lg-none d-xl-block">
                    <a href="#" class="btn btn-primary">
                        <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                    </a>
                </div><!-- .xs-navs-button END -->
            </div><!-- .nav-menus-wrapper .row END -->
        </nav><!-- .xs-menus .fundpress-menu END -->
    </div><!-- .container end -->
</header><!-- End header section -->