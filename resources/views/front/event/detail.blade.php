@extends('layouts.front'    )

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/Aviation1.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>News and Notices</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li class="active"><a href="#">News and Notices</a> </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-8">
                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="{{ asset('public/img') }}/{{ $event->thumbnail }}">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <h2>{{ $event->title }}</h2>
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('Y M d',strtotime($event->created_at)) }}</span>

                                    </div>
                                    <p>{!! $event->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar sticky-sidebar col-lg-4">
                    <div class="widget">
                        <div class="tabs">
                            <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent Post</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="tabs-posts-content">
                                <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                    @foreach($recentEvents as $event)
                                    <div class="post-thumbnail-list">

                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="{{ asset('public/img') }}/{{ $event->thumbnail }}">
                                            <div class="post-thumbnail-content">
                                                <a href="{{ route('detailEvents',$event->slug) }}">{{ $event->title }}</a>
                                                <span class="post-date"><i class="far fa-clock"></i>{{ date('M d',strtotime($event->created_at)) }}</span>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
