@extends('layouts.front')

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/Aviation1.jpg') }}" style="object-fit: cover;">
        <div class="container">
            <div class="page-title">
                <h1>Aircraft Maintenance Engineering</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="{{ route('about') }}">Aircraft Maintenance Engineering</a> </li>

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
                                        <img alt="" src="{{ asset('public/img/aircraft.jpg') }}">
                                    </a>
                                </div>
                                <br>
                                <div itemprop="articleBody">
                                    <p style="text-align: justify;"><strong>AIRCRAFT MAINTENANCE ENGINEERING (AME)</strong></p>
                                    <p style="text-align: justify;">If your passion is in aviation and you love to work with airplanes then Aircraft Maintenance Engineering can be a promising career&nbsp;for you. Currently NAAT offers AME courses for both freshers and professionals.</p>
                                    <p style="text-align: justify;">&nbsp;</p>
                                    <p style="text-align: justify;"><strong>APPROVED PART 66 COURSE</strong></p>
                                    <p style="text-align: justify;">If you are a high school graduate and you have completed your +2 (Science), this course will take you on a career path to become an AME. This course is offered by Air Service Training, UK. and you will be learning for the duration of 3 years.&nbsp;</p>
                                    <p style="text-align: justify;">&nbsp;</p>
                                    <hr>
                                    <p style="text-align: justify;">&nbsp;</p>
                                    <p style="text-align: justify;"><strong>EASA PART 66 SHORT MODULAR TRAINING &amp; EXAMINATION&nbsp;</strong></p>
                                    <p style="text-align: justify;">NAAT offers customized and flexible EASA Part 66 Modular training and examination in collaboration with Air Service Training (AST), UK. This modular training is relevant for Aeronautical Engineers looking to get a good theoretical knowledge for the issuance of UK CAA approved EASA Part 66 license. After passing all the modules the students need a proof of a relevant experience for the issuance of the basic license from UK CAA.</p>
                                    <p style="text-align: justify;">Once the basic license has been issued, the students can then&nbsp;appear for a conversion exam at CAAN.&nbsp;</p>
                                    <p style="text-align: justify;">&nbsp;</p>
                                    <p style="text-align: justify;"><strong>DETAILS OF THE SHORT MODULAR COURSE</strong></p>
                                    <p style="text-align: justify;">All the classes and examination will be conducted at NAAT</p>
                                    <p style="text-align: justify;">All the instructors are from Air Service Training</p>
                                    <p style="text-align: justify;">Duration of each module preparation is one week at the end of which examination will be conducted</p> 	</div>

                            </div>
                        </div>

                    </div>
                </div>


                {{--<div class="sidebar sticky-sidebar">--}}

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
                                    <li> <a href="{{ route('plot') }}">Pilot Training</a> </li>
                                    <li class="services-active"> <a href="{{ route('aircraft') }}">Aircraft Maintenance Engineering</a> </li>
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
