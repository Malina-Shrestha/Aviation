@extends('layouts.front')

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/Aviation1.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Pilot Training</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="{{ route('about') }}">Plot Training</a> </li>

                </ul>
            </div>
        </div>
    </section>

    <section id="page-content">
        <div class="container">
            <div class="row">

                <div class="content col-lg-8 col-sm-8 col-12">

                    <div id="blog" class="single-post">

                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="{{ asset('public/img/n3.jpg') }}">
                                    </a>
                                </div>
                                <br>
                                <p>We offer aspiring pilots an opportunity to find a rewarding career in aviation as an airline pilot. We represent various reputed flight schools across the globe and are designated as authorized country representatives for those flight schools.<br><br>Popular destination for pilot training includes South Africa, USA, Australia and Philippines where you will learn all the skills to meet the industry standards in state of the art facility.<br><br><strong> Why commercial pilot as a career?</strong> <br><br>Apart from all the glamour that seems from outside in aviation, a career as a pilot is also rewarding and satisfying from the inside. If flying is something you really want to do in life then you will surely enjoy your career becoming a pilot.<br><br>As places are getting inter-connected by air and aviation industry is ever growing, new opportunities for pilots are are ever on the rise in Nepal and global market. So if you are thinking to pursue a career as an airline pilot, we assure you, its worth all your effort and dedication.</p>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-sm-4 col-12">
                    <div class="services-single-left-box">
                        <div class="services-single-left-heading">
                            <h4>Training</h4>
                        </div>
                        <br>
                        <div class="services-single-menu mt-30">
                            <ul class="list list-arrow-icons">
                                <li> <a href="{{ route('cabincrew') }}">Cabin Crew Training</a>  </li>
                                <li> <a href="{{ route('airport') }}">Airport Ground Handling</a></li>
                                <li class="services-active"> <a href="{{ route('plot') }}">Pilot Training</a> </li>
                                <li> <a href="{{ route('aircraft') }}">Aircraft Maintenance Engineering</a> </li>
                            </ul>
                        </div>
                        <br>
                        <div class="services-single-left-heading mt-40">
                            <h4>Need Help ?</h4>
                        </div>
                        <ul class="primary-list mt-30" style="list-style: none">
                            <li><i class="fa fa-globe"></i>New Baneshwor Panchakumari Marga</li>
                            <li><i class="fa fa-phone"></i>+977 1 4488991, 4489868</li>
                            <li><i class="fa fa-envelope-open"></i>info@naat147.com</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
