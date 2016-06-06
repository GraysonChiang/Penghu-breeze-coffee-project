 @extends('layouts.app') 
 @section('content')
<!-- Section: home video -->
<section id="intro" class="home-video text-light">
    <div class="home-video-wrapper">
        <div class="homevideo-container">
            <div id="P1" class="bg-player" style="display:block; margin: auto; background: rgba(0,0,0,0.5)" data-property="{videoURL:'https://www.youtube.com/watch?v=DX4PfAKJxrg',containment:'.homevideo-container', quality: 'hd720', showControls: false, autoPlay:true, mute:true, startAt:0, opacity:1}"></div>
        </div>
        <div class="overlay">
            <div class="text-center video-caption">
                <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.8s">
                    <h1 class="big-heading font-light"><span id="js-rotating">Shooting the Breeze, Awesome Cafe Shop in Pen-ghu !  </span></h1>
                </div>
                <div class="wow bounceInUp" data-wow-offset="0" data-wow-delay="1s">
                    <div class="margintop-30">
                        <a href="#about" class="btn btn-skin" id="btn-scroll">Start here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Section: intro -->
@include('layouts.navigation')
<!-- Section: parallax 1 -->
<section id="parallax1" class="home-section parallax text-light" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2 class="big-heading highlight-dark wow bounceInDown" data-wow-delay="0.2s">精選咖啡</h2>
                    <p> <a href="{{ url('/coffee') }}" class="btn btn-skin">more</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: works -->
<section id="dessert" class="home-section color-dark text-center bg-white">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">精選甜點</h2>
                        <div class="divider-header"></div>
                        <p>堅持每日現做，絕對天然，不參雜人工化合物
                            <a href="#about" class="btn btn-skin">more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="wow bounceInUp" data-wow-delay="0.4s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item">
                            <a href="img/works/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/works/1.jpg" class="img-responsive" alt="img"></a>
                        </div>
                        <div class="item">
                            <a href="img/works/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="img/works/2.jpg" class="img-responsive " alt="img"></a>
                        </div>
                        <div class="item">
                            <a href="img/works/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="img/works/3.jpg" class="img-responsive " alt="img"></a>
                        </div>
                        <div class="item">
                            <a href="img/works/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="img/works/4.jpg" class="img-responsive " alt="img"></a>
                        </div>
                        <div class="item">
                            <a href="img/works/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="img/works/5.jpg" class="img-responsive " alt="img"></a>
                        </div>
                        <div class="item">
                            <a href="img/works/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="img/works/6.jpg" class="img-responsive " alt="img"></a>
                        </div>
                        <div class="item">
                            <a href="img/works/7.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/7@2x.jpg"><img src="img/works/7.jpg" class="img-responsive " alt="img"></a>
                        </div>
                        <div class="item">
                            <a href="img/works/8.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/8@2x.jpg"><img src="img/works/8.jpg" class="img-responsive " alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Section: works -->
<!-- Section: about -->
<section id="about" class="home-section color-dark bg-white">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">About</h2>
                        <div class="divider-header"></div>
                        <p>我們的團隊</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <div class="container">
            <div class="row">
                @foreach ($tasks as $key => $user) 
                @if ($user-> visble)
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="team-wrapper-big wow bounceInUp" data-wow-delay="{{ $key*0.2 }}s">
                        <div class="team-wrapper-overlay">
                            <h5>{{$user -> nickname }}</h5>
                            <p>{{ $user-> Jobtitle.','. $user -> introduce}}</p>
                            <div class="social-icons">
                                <ul class="team-social">
                                    <li class="social-facebook"><a href="https://www.facebook.com/{{$user -> facebook}}"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="img/team/{{ $user -> photo}}" alt="" />
                    </div>
                </div>
                @endif 
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- /Section: about -->
<!-- Section: services -->
<section id="partner" class="home-section color-dark bg-white">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">合作廠商</h2>
                        <div class="divider-header"></div>
                        <p>我們是澎湖在地專業咖啡經營團隊，歡迎合作洽談</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="text-center"> -->
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-icon">
                        <p>
                            <a href="{{url('http://www.audi.com.tw/tw/brand/zh.html')}}"><img src="img/parner/audi.png" width="150" height="150" alt="" /></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-icon">
                        <p>
                            <a href="{{url('http://energydrink-tw.redbull.com/')}}"><img src="img/parner/redbull.png" width="150" height="150" alt="" /></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-icon">
                        <p>
                            <a href="{{url('http://www.lamborghini.com/en/home/')}}"><img src="img/parner/lamber.png" width="150" height="150" alt="" /></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-icon">
                        <p>
                            <a href="{{url('https://www.facebook.com/petitefarm.penghu/?fref=ts')}}"><img src="img/parner/farm.jpg" width="150" height="150" alt="" /></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Section: services -->
<!-- Section: contact -->
<section id="contact" class="home-section nopadd-bot color-dark bg-white text-center">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">Contact us</h2>
                        <div class="divider-header"></div>
                        <p>小額訂購、商業合作，或有趣的想法</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row marginbot-80">
            <div class="col-md-8 col-md-offset-2">
                <form id="contact-form" action="" method="POST" class="wow bounceInUp" data-wow-offset="10" data-wow-delay="0.2s">
                    <div class="row marginbot-20">
                        <div class="col-md-6 xs-marginbot-20">
                            <input type="text" class="form-control input-lg" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control input-lg" id="email" placeholder="Enter email" required="required" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" id="subject" placeholder="Subject" required="required" />
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-skin btn-lg btn-block" id="btnContactUs">
                                Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /Section: contact -->
@endsection
