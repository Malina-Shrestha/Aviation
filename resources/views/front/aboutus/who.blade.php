@extends('layouts.front')

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/Aviation1.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Who are we?</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="{{ route('about') }}">Who are we?</a> </li>

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
                                        <img alt="" src="{{ asset('public/img/who.jpg') }}">
                                    </a>
                                </div>
                                <br>
                                <p class="text-justify">Northern Light Academy of Aviation and Technology (NAAT), located at the heart of Kathmandu, is leading aviation academy in Nepal and prime mission is to advance knowledge and provide training to the students in aviation. Besides courses in aviation we also provide banking, hospitality, travel and tourism and other areas of scholarship that will best serve the industry and the world. NAAT aims at preparing students to face the real challenges that come forth in their professional career as well as help them in their personal enhancement with quality education of global standard at its excellent infrastructure of international stature. Since its establishment, NAAT has become the most appealing education and skill providing institute in Nepal as it is committed to the placement of the deserving students to international and national market in accreditation with reputed and recognized companies throughout the globe. With devoted members in the deam, NAAT is proving itself as one of the promising institute that renders services in aviation. Committed to the highest standards of training excellence, our academy is managed by some of the industry's most experienced aviation professionals, who are dedicated to transferring their considerable knowledge to our students and developing students' skills to the highest level. NAAT, in affiliation with City and Guilds - an exclusive tie up for Nepal - offers basic and advanced cabin crew courses and airport operations courses which best fit the requirements of international standard with all modern and sophisticated means. The Institute is an independent, coeducational, privately endowed academy, organized for boosting aviation field with adroit instructors, serving for decades from reputed airlines. Unlike the exorbitant price charge by other institutes, NAAT stands at meeting the qualifications of international standard for the students at a reasonable price.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-12">
                    <div class="services-single-left-box">
                        <div class="services-single-left-heading">
                            <h4>About Us</h4>
                        </div>
                        <br>
                        <div class="services-single-menu mt-30">
                            <ul class="list list-arrow-icons">
                                <li> <a href="{{ route('about') }}">Why NAAT? </a> </li>
                                <li class="services-active"> <a href="{{ route('about.who') }}">Who are we?</a> </li>
                                <li> <a href="{{ route('about.mission') }}">Mission and Vision</a> </li>
                                <li> <a href="{{ route('about.message') }}">Message from Managing Director</a> </li>
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
