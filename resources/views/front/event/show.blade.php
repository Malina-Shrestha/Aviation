@extends('layouts.front')


@section('content')
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">

                <div class="content col-lg-8">

                    <div class="page-title">
                        <h1>News and Notice</h1>
                        <div class="breadcrumb float-left">
                            <ul>
                                <li><a href="{{ asset('/') }}">Home</a>
                                </li>
                                <li><a href="{{ route('events') }}">News and Notice</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div id="blog" class="post-thumbnails">
                        @foreach($events as $event)
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="{{ asset('public/img') }}/{{ $event->thumbnail }}">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('Y M d',strtotime($event->created_at)) }}</span>
                                    <h2><a href="#">{{ $event->title }}</a></h2>
                                    <p>{!! substr($event->description, 0, 100) . '...';!!}</p>
                                    <a href="{{ route('detailEvents',$event->slug) }}" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>


                <div class="sidebar sticky-sidebar col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title">Recent Posts</h4>
                        @foreach($recentEvents as $event)
                        <div class="post-thumbnail-list">

                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ asset('public/img') }}/{{ $event->thumbnail }}">
                                <div class="post-thumbnail-content">
                                    <a href="{{ route('detailEvents',$event->slug) }}">{{ $event->title }}</a>
                                    <span class="post-date"><i class="far fa-clock"></i>{!! date('M',strtotime($event->created_at)) !!} {!! date('d',strtotime($event->created_at)) !!}</span>
                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection
