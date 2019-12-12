@extends('layouts.front')

@section('content')
    <div id="slider" class="inspiro-slider tp-revslider-slidesli arrows-large arrows-creative dots-creative">

        <div class="slide background-overlay-gradient kenburns background-image" style="background-image:url({{ asset('public/img/naatslider.jpg') }});">
            <div class="container">
                <div class="slide-captions text-center text-light">

                    <h1>Northen Light Academy of Aviation and Technology (NAAT)</h1>
                    <p>NAAT seeks to create and sustain an aviation and education system that fosters individual aviation career. </p>
                    <a href="#welcome" class="btn btn-grad scroll-to">Explore more</a>
                </div>
            </div>
        </div>


        <div class="slide background-overlay-gradient kenburns background-image" style="background-image:url({{ asset('public/img/naatslider2.jpg') }});">
            <div class="container">
                <div class="slide-captions text-center text-light">
                        <h1>Internationally recognized by 82+ countries </h1>
                    <p class="text-small">International job placement</p>
                    <a href="#welcome" class="btn btn-grad scroll-to">Explore more</a>

                </div>
            </div>
        </div>

        <div class="slide background-overlay-gradient kenburns background-image" style="background-image:url({{ asset('public/img/naatslide1.jpg') }});">
            <div class="container">
                <div class="slide-captions text-center text-light">
                    <h1>Creating work force of tomorrow </h1>
                    <p class="text-small">Vocational courses</p>
                    <a href="#welcome" class="btn btn-grad scroll-to">Explore more</a>

                </div>
            </div>
        </div>

    </div>
    <section class="content background-white">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Our expertise that people trust</h2>
            </div>
            <div class="row mt-60">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="serv-section-2">
                        <div class="serv-section-desc">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="{{ asset('public/img/cabin.jpg') }}" alt="">
                                </div>
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <h4>Cabin Crew Training</h4>
                                    <div class="section-heading-line-left"></div>
                                    <p style="text-align: justify;">The growing demands in the airlines of trained people are increasing day by day. Within the growing ferocious competition all around the globe, it is a real challenge to prepare oneself as a deserving candidate for the post. NAAT considering this fact has designed international standard courses that supplement...</p>
                                    <div class="mt-20 left-holder"> <a href="{{ route('cabincrew') }}" class="primary-button button-sm" style="color: white;">Read More</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="serv-section-2">
                        <div class="serv-section-desc">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="{{ asset('public/img/airport.jpg') }}" alt="">
                                </div>
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <h4>Airport Ground Handling</h4>
                                    <div class="section-heading-line-left"></div>
                                    <p style="text-align: justify;">NAAT’s courses and programs can be tailored to suit your individual requirements, in partnership with our recognised global affiliates. We are a market-driven aviation training organisation, with a comprehensive and modern aviation training infrastructure. All our courses are conducted with state-of-the-art equipment with...
                                    </p>
                                    <div class="mt-20 left-holder"> <a href="{{ route('airport') }}" class="primary-button button-sm" style="color: white;">Read More</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="serv-section-3">
                        <div class="serv-section-desc">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="{{ asset('public/img/n3.jpg') }}" alt="">
                                </div>
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <h4>Pilot Training</h4>
                                    <div class="section-heading-line-left"></div>
                                    <p style="text-align: justify;">We offer aspiring pilots an opportunity to find a rewarding career in aviation as an airline pilot. We represent various reputed flight schools across the globe and are designated as authorized country representatives for those flight schools. Popular destination for pilot training includes South...
                                    </p>
                                    <div class="mt-20 left-holder"> <a href="{{ route('cabincrew') }}" class="primary-button button-sm" style="color: white;">Read More</a> </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-12">
                    <div class="serv-section-3">
                        <div class="serv-section-desc">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="{{ asset('public/img/aircraft.jpg') }}" alt="">
                                </div>
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <h4>Aircraft Maintenance Engineering</h4>
                                    <div class="section-heading-line-left"></div>
                                    <p style="text-align: justify;">f your passion is in aviation and you love to work with airplanes then Aircraft Maintenance Engineering can be a promising career for you. Currently NAAT offers AME courses for both freshers and professionals. If you are a high school graduate and you have...
                                    </p>
                                    <div class="mt-20 left-holder"> <a href="{{ route('aircraft') }}" class="primary-button button-sm" style="color: white;">Read More</a> </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="p-b-0 content background-grey">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Gallery</h2>
                {{--<span class="lead">Lorem ipsum dolor sit amet, coper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</span>--}}
            </div>
        </div>

        <div class="portfolio">
            <div class="content col-lg-12">
                <div class="grid-layout grid-4-columns" data-margin="10" data-item="grid-item" data-lightbox="gallery">
                    @foreach($galleries as $gallery)
                        <div class="grid-item">
                            <a class="image-hover-zoom" href="{{ asset('public/img') }}/{{ $gallery->image }}" data-lightbox="gallery-image"><img src="{{ asset('public/img') }}/{{ $gallery->image }}"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>

    <section id="welcome" class="p-b-0">
        <div class="container">
            <div class="heading-text heading-section text-center m-b-40" data-animate="fadeInUp">
                <h2>WE ARE NAAT</h2>
                <span class="lead">Authorized Training Centre</span>
            </div>
            <div class="row" data-animate="fadeInUp">
                <div class="col-lg-5 col-12 col-md-12 col-sm-12" style="padding-bottom: 40px;">
                    <img class="img-fluid" src="{{ asset('public/img/naat2.jpg') }}" alt="Welcome to POLO">
                </div>
                <div class="col-lg-7 col-12 col-md-12 col-sm-12" style="padding-top: 45px;">
                    <p style="text-align: justify;">We help people transform their lives by helping them to tap into their potential to develop the skills they need to get their first job, progress on to higher level and become globally mobile. Our courses are recognized in 82 countries and we work towards solving local skill shortage problem by creating the work force of tomorrow. To solve the skill shortage problem globally, we provide internationally recognized vocational courses that will develop skill set in the area of your desire after which you will be able to find a job placement in the relevant industry through the network of our partner organization.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content background-grey">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>News and Notices</h2>
                {{--<span class="lead">Get yourself updated. </span>--}}
            </div>
            <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                @foreach($events as $event)

                <div class="post-item border">
                  <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="{{ route('detailEvents',$event->slug) }}">
                                <img alt="" src="{{ asset('public/img') }}/{{ $event->thumbnail }}">
                            </a>
                        </div>

                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('Y M d',strtotime($event->created_at)) }}</span>
                            <h2><a href="{{ route('detailEvents',$event->slug) }}">{{ $event->title }}</a></h2>
                            <p>{!! substr($event->description, 0, 70) . '...';!!}</p>
                            <a href="{{ route('detailEvents',$event->slug) }}" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <a href="{{ route('events') }}">List of news and notices</a>
        </div>
    </section>


    <section class="content background-white">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Testimonials</h2>
            </div>
            <div class="row mt-60">
                @foreach($testimonials as $testimonial)
                <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="serv-section-2">
                        <div class="serv-section-2-icon"> <i class="icon-diamond"></i> </div>
                        <div class="serv-section-desc">
                            <h4>{{ $testimonial->name }}</h4>
                            <h5>{{ $testimonial->title }}</h5>
                        </div>
                        <div class="section-heading-line-left"></div>
                        <p>{{ $testimonial->description }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
    </section>
    <section class="background-grey">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>AFFILIATIONS</h2>
            </div>
            <div class="carousel" data-items="3" data-items-sm="2" data-items-xs="3" data-items-xxs="2" data-margin="20" data-arrows="false" data-autoplay="true" data-autoplay-timeout="3000" data-loop="true">
                <div>
                    <img alt="" src="{{ asset('public/img/1.png') }}">
                </div>
                <div>
                    <img alt="" src="{{ asset('public/img/6.png') }}">
                </div>
                <div>
                    <img alt="" src="{{ asset('public/img/3.png') }}">
                </div>
                <div>
                    <img alt="" src="{{ asset('public/img/4.png') }}">
                </div>
                <div>
                    <img alt="" src="{{ asset('public/img/5.png') }}">
                </div>
                <div>
                    <img alt="" src="{{ asset('public/img/2.png') }}">
                </div>
            </div>
        </div>
    </section>
    <section class="content background-white">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Programmes Conducted</h2>
            </div>
            <div class="row mt-60">
                <div class="col-12 col-md-12 col-lg-3 col-xl-3" style="margin-top: 20px;">
                    <iframe width="186" height="140" src="https://www.youtube.com/embed/X2e_YKemc9c" frameborder="0" allowfullscreen=""></iframe>
                </div>
                <div class="col-12 col-md-12 col-lg-3 col-xl-3" style="margin-top: 20px;">
                    <iframe width="560" height="415" src="https://www.youtube.com/embed/-B16URHUT4I" frameborder="0" allowfullscreen=""></iframe>
                </div>
                <div class="col-12 col-md-12 col-lg-3 col-xl-3" style="margin-top: 20px;">
                    <iframe width="560" height="415" src="https://www.youtube.com/embed/l25jQNWh6mc" frameborder="0" allowfullscreen=""></iframe>
                </div>
                <div class="col-12 col-md-12 col-lg-3 col-xl-3" style="margin-top: 20px;">
                    <iframe width="560" height="415" src="https://www.youtube.com/embed/LpRo5_8tLcY" frameborder="0" allowfullscreen=""></iframe>
                </div>
                    <div class="col-12" style="margin-top: 20px;">
                        <p style="text-align:center;">
                            <a href="https://www.youtube.com/channel/UCIbp0Ui8lTnJWYZVNvo5aLA" target="_blank" rel="noopener noreferrer" class="btn btn-grad">
                                View NAAT Channel
                            </a>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
