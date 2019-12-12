@extends('layouts.front')

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/Aviation1.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Gallery</h1>
                <span>Description</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a>
                    </li>
                    <li><a href="{{ route('front.gallery') }}">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-8">
                    <div class="grid-layout grid-3-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
                        @foreach($galleries as $gallery)
                        <div class="grid-item">
                            <a class="image-hover-zoom" href="{{ asset('public/img') }}/{{ $gallery->image }}" data-lightbox="gallery-image"><img src="{{ asset('public/img') }}/{{ $gallery->image }}"></a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="sidebar sticky-sidebar col-lg-4">
                    <div class="widget ">
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

